<?php

use Illuminate\Support\Facades\Route;

Route::prefix('ui-showcase')->name('showcase.')->group(function () {
    Route::get('/', function () {
        return view('showcase::index');
    })->name('index');
    
    // Auto-generated component routes from config
    $components = config('showcase.components.categories', []);
    
    // Category-level routes: redirect to first component in the category
    foreach ($components as $categorySlug => $category) {
        if (isset($category['components']) && count($category['components']) > 0) {
            $firstComponentSlug = array_key_first($category['components']);
            Route::get("/{$categorySlug}", function () use ($categorySlug, $firstComponentSlug) {
                return redirect()->route("showcase.component.{$categorySlug}.{$firstComponentSlug}");
            })->name($categorySlug);
        }
    }

    foreach ($components as $categorySlug => $category) {
        if (isset($category['components'])) {
            foreach ($category['components'] as $componentSlug => $component) {
                Route::get("/{$categorySlug}/{$componentSlug}", function () use ($categorySlug, $componentSlug, $category, $component, $components) {
                    // Get all components in this category for prev/next navigation
                    $categoryComponents = array_keys($category['components']);
                    $currentIndex = array_search($componentSlug, $categoryComponents);
                    
                    $prevComponent = null;
                    $nextComponent = null;
                    
                    if ($currentIndex > 0) {
                        $prevSlug = $categoryComponents[$currentIndex - 1];
                        $prevComponent = [
                            'slug' => $prevSlug,
                            'title' => $category['components'][$prevSlug]['title'],
                        ];
                    }
                    
                    if ($currentIndex < count($categoryComponents) - 1) {
                        $nextSlug = $categoryComponents[$currentIndex + 1];
                        $nextComponent = [
                            'slug' => $nextSlug,
                            'title' => $category['components'][$nextSlug]['title'],
                        ];
                    }
                    
                    return view("showcase::components.{$categorySlug}.{$componentSlug}", [
                        'category' => $categorySlug,
                        'categoryName' => $category['name'],
                        'title' => $component['title'],
                        'description' => $component['description'],
                        'seoTitle' => $component['seo_title'] ?? $component['title'],
                        'seoDescription' => $component['seo_description'] ?? $component['description'],
                        'prevComponent' => $prevComponent,
                        'nextComponent' => $nextComponent,
                    ]);
                })->name("component.{$categorySlug}.{$componentSlug}");
            }
        }
    }
    
});
