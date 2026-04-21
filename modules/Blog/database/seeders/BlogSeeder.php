<?php

namespace Modules\Blog\Database\Seeders;

use Modules\Blog\Models\Blog;
use Modules\User\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('email', 'admin@laracorekit.com')->first();

        if (!$admin) {
            $admin = User::first();
        }

        $blogs = [
            [
                'title' => [
                    'en' => 'Getting Started with Laravel 13',
                    'hi' => 'Laravel 13 ke saath shuruaat karna',
                    'ar' => 'Getting Started with Laravel 13',
                ],
                'slug' => 'getting-started-with-laravel-12',
                'excerpt' => [
                    'en' => 'Learn the fundamentals of Laravel 13 and build modern web applications with ease.',
                    'hi' => 'Laravel 13 ki bunyaadi baaten seekhen aur aasaani se aadhunik web application banaen.',
                    'ar' => 'Learn the fundamentals of Laravel 13 and build modern web applications with ease.',
                ],
                'content' => [
                    'en' => '<p>Laravel 13 brings exciting new features and improvements to the PHP ecosystem. In this article, we will explore the key features and how to get started.</p><h2>What is New in Laravel 13</h2><p>Laravel 13 introduces several groundbreaking features including improved performance, better developer experience, and enhanced security measures.</p><h3>Installation</h3><p>Getting started with Laravel 13 is easier than ever. Simply run the following command:</p><pre><code>composer create-project laravel/laravel my-app</code></pre><p>This will set up a fresh Laravel installation with all the latest features ready to use.</p>',
                    'hi' => '<p>Laravel 13 PHP ecosystem mein nai suvidhaen aur sudhar laata hai. Is lekh mein, hum mukhya visheshataon aur shuruaat karne ke tarike ka pata lagaenge.</p><h2>Laravel 13 mein kya naya hai</h2><p>Laravel 13 mein behtar pradarshan, behtar developer anubhav aur badhi hui suraksha upaayon sahit kai visheshataen hain.</p>',
                    'ar' => '<p>Laravel 13 brings exciting new features and improvements to the PHP ecosystem. In this article, we will explore the key features and how to get started.</p><h2>What is New in Laravel 13</h2><p>Laravel 13 introduces several groundbreaking features including improved performance, better developer experience, and enhanced security measures.</p>',
                ],
                'category' => [
                    'en' => 'Development',
                    'hi' => 'विकास',
                    'ar' => 'تطوير',
                ],
                'meta_title' => [
                    'en' => 'Laravel 13 Tutorial - Getting Started Guide',
                    'hi' => 'Laravel 13 Tutorial - Shuruaati Guide',
                    'ar' => 'Laravel 13 Tutorial - Getting Started Guide',
                ],
                'meta_description' => [
                    'en' => 'Complete guide to getting started with Laravel 13, including installation, features, and best practices.',
                    'hi' => 'Laravel 13 ke saath shuruaat karne ke liye poorna guide, jisme installation, features aur best practices shamil hain.',
                    'ar' => 'Complete guide to getting started with Laravel 13, including installation, features, and best practices.',
                ],
                'meta_keywords' => [
                    'en' => 'Laravel, PHP, Tutorial, Web Development',
                    'hi' => 'Laravel, PHP, ट्यूटोरियल, वेब डेवलपमेंट',
                    'ar' => 'Laravel، PHP، دروس، تطوير الويب',
                ],
                'status' => 'published',
                'published_at' => now()->subDays(5),
            ],
            [
                'title' => [
                    'en' => 'Building RESTful APIs with Laravel',
                    'hi' => 'Laravel के साथ RESTful API बनाना',
                    'ar' => 'بناء RESTful APIs مع Laravel',
                ],
                'slug' => 'building-restful-apis-with-laravel',
                'excerpt' => [
                    'en' => 'Master the art of creating robust and scalable APIs using Laravel\'s powerful features.',
                    'hi' => 'Laravel की शक्तिशाली सुविधाओं का उपयोग करके मजबूत और स्केलेबल API बनाने की कला में महारत हासिल करें।',
                    'ar' => 'أتقن فن إنشاء واجهات برمجة تطبيقات قوية وقابلة للتطوير باستخدام ميزات Laravel القوية.',
                ],
                'content' => [
                    'en' => '<p>RESTful APIs are the backbone of modern web applications. Laravel makes it incredibly easy to build powerful APIs.</p><h2>API Routes</h2><p>Laravel provides dedicated API routes that come with rate limiting and middleware out of the box.</p><h3>Resource Controllers</h3><p>Use resource controllers to quickly scaffold CRUD operations for your API endpoints.</p><pre><code>php artisan make:controller API/PostController --api</code></pre>',
                    'hi' => '<p>RESTful API आधुनिक वेब एप्लिकेशन की रीढ़ हैं। Laravel शक्तिशाली API बनाना अविश्वसनीय रूप से आसान बनाता है।</p><h2>API रूट्स</h2><p>Laravel समर्पित API रूट्स प्रदान करता है जो रेट लिमिटिंग और मिडलवेयर के साथ आते हैं।</p>',
                    'ar' => '<p>واجهات RESTful API هي العمود الفقري لتطبيقات الويب الحديثة. يجعل Laravel من السهل بشكل لا يصدق بناء واجهات برمجة تطبيقات قوية.</p><h2>مسارات API</h2><p>يوفر Laravel مسارات API مخصصة تأتي مع تحديد المعدل والوسيطة خارج الصندوق.</p>',
                ],
                'category' => [
                    'en' => 'API Development',
                    'hi' => 'API विकास',
                    'ar' => 'تطوير API',
                ],
                'meta_title' => [
                    'en' => 'Laravel API Development - Complete Guide',
                    'hi' => 'Laravel API विकास - पूर्ण गाइड',
                    'ar' => 'تطوير Laravel API - دليل كامل',
                ],
                'meta_description' => [
                    'en' => 'Learn how to build robust RESTful APIs with Laravel including authentication, validation, and best practices.',
                    'hi' => 'प्रमाणीकरण, सत्यापन और सर्वोत्तम प्रथाओं सहित Laravel के साथ मजबूत RESTful API बनाना सीखें।',
                    'ar' => 'تعلم كيفية بناء واجهات RESTful API قوية مع Laravel بما في ذلك المصادقة والتحقق وأفضل الممارسات.',
                ],
                'meta_keywords' => [
                    'en' => 'Laravel, API, REST, Backend Development',
                    'hi' => 'Laravel, API, REST, बैकएंड डेवलपमेंट',
                    'ar' => 'Laravel، API، REST، تطوير الخلفية',
                ],
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => [
                    'en' => 'Mastering Filament Admin Panel',
                    'hi' => 'Filament एडमिन पैनल में महारत हासिल करना',
                    'ar' => 'إتقان لوحة إدارة Filament',
                ],
                'slug' => 'mastering-filament-admin-panel',
                'excerpt' => [
                    'en' => 'Discover how to build beautiful and functional admin panels with Filament.',
                    'hi' => 'Filament के साथ सुंदर और कार्यात्मक एडमिन पैनल बनाना सीखें।',
                    'ar' => 'اكتشف كيفية بناء لوحات إدارة جميلة ووظيفية مع Filament.',
                ],
                'content' => [
                    'en' => '<p>Filament is a powerful admin panel framework for Laravel applications. It provides a beautiful UI and extensive customization options.</p><h2>Getting Started</h2><p>Install Filament in your Laravel project with a simple composer command:</p><pre><code>composer require filament/filament</code></pre><h3>Creating Resources</h3><p>Resources are the core of Filament. They provide CRUD interfaces for your models.</p><p>Create a new resource using the artisan command:</p><pre><code>php artisan make:filament-resource Post</code></pre>',
                    'hi' => '<p>Filament Laravel एप्लिकेशन के लिए एक शक्तिशाली एडमिन पैनल फ्रेमवर्क है। यह एक सुंदर UI और व्यापक अनुकूलन विकल्प प्रदान करता है।</p><h2>शुरुआत करना</h2><p>अपने Laravel प्रोजेक्ट में Filament को एक सरल कंपोज़र कमांड से इंस्टॉल करें।</p>',
                    'ar' => '<p>Filament هو إطار عمل قوي للوحة الإدارة لتطبيقات Laravel. يوفر واجهة مستخدم جميلة وخيارات تخصيص واسعة.</p><h2>البدء</h2><p>قم بتثبيت Filament في مشروع Laravel الخاص بك باستخدام أمر composer بسيط.</p>',
                ],
                'category' => [
                    'en' => 'Admin Panel',
                    'hi' => 'एडमिन पैनल',
                    'ar' => 'لوحة الإدارة',
                ],
                'meta_title' => [
                    'en' => 'Filament Admin Panel Tutorial - Complete Guide',
                    'hi' => 'Filament एडमिन पैनल ट्यूटोरियल - पूर्ण गाइड',
                    'ar' => 'دروس لوحة إدارة Filament - دليل كامل',
                ],
                'meta_description' => [
                    'en' => 'Learn how to build powerful admin panels with Filament for Laravel applications.',
                    'hi' => 'Laravel एप्लिकेशन के लिए Filament के साथ शक्तिशाली एडमिन पैनल बनाना सीखें।',
                    'ar' => 'تعلم كيفية بناء لوحات إدارة قوية مع Filament لتطبيقات Laravel.',
                ],
                'meta_keywords' => [
                    'en' => 'Filament, Admin Panel, Laravel, Dashboard',
                    'hi' => 'Filament, एडमिन पैनल, Laravel, डैशबोर्ड',
                    'ar' => 'Filament، لوحة الإدارة، Laravel، لوحة القيادة',
                ],
                'status' => 'published',
                'published_at' => now()->subDay(),
            ],
        ];

        foreach ($blogs as $blogData) {
            Blog::firstOrCreate(
                ['slug' => $blogData['slug']],
                array_merge($blogData, ['author_id' => $admin->id])
            );
        }
    }
}
