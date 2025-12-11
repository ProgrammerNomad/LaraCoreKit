<?php

namespace Modules\Settings\Database\Seeders;

use Modules\Settings\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            [
                'key' => 'site_name',
                'value' => ['en' => 'LaraCoreKit', 'hi' => 'लारा कोर किट', 'ar' => 'لارا كور كيت'],
                'type' => 'json',
                'is_translatable' => true,
                'description' => 'Website name displayed across the site',
            ],
            [
                'key' => 'site_description',
                'value' => [
                    'en' => 'A Universal Modular Laravel Starter Kit',
                    'hi' => 'एक सार्वभौमिक मॉड्यूलर लारावेल स्टार्टर किट',
                    'ar' => 'مجموعة بداية Laravel العالمية المعيارية',
                ],
                'type' => 'json',
                'is_translatable' => true,
                'description' => 'Brief site description',
            ],
            [
                'key' => 'contact_email',
                'value' => 'info@laracorekit.com',
                'type' => 'string',
                'is_translatable' => false,
                'description' => 'Main contact email address',
            ],
            [
                'key' => 'contact_phone',
                'value' => '+1 (555) 123-4567',
                'type' => 'string',
                'is_translatable' => false,
                'description' => 'Contact phone number',
            ],
            [
                'key' => 'footer_text',
                'value' => [
                    'en' => '© 2025 LaraCoreKit. All rights reserved.',
                    'hi' => '© 2025 लारा कोर किट। सर्वाधिकार सुरक्षित।',
                    'ar' => '© 2025 لارا كور كيت. جميع الحقوق محفوظة.',
                ],
                'type' => 'json',
                'is_translatable' => true,
                'description' => 'Footer copyright text',
            ],
            [
                'key' => 'meta_title',
                'value' => [
                    'en' => 'LaraCoreKit - Laravel Starter Kit',
                    'hi' => 'लारा कोर किट - लारावेल स्टार्टर किट',
                    'ar' => 'لارا كور كيت - مجموعة بداية Laravel',
                ],
                'type' => 'json',
                'is_translatable' => true,
                'description' => 'Default meta title for SEO',
            ],
            [
                'key' => 'meta_description',
                'value' => [
                    'en' => 'A modular Laravel 12 starter kit with Filament admin, multilingual support, and role-based permissions.',
                    'hi' => 'फिलामेंट एडमिन, बहुभाषी समर्थन और भूमिका-आधारित अनुमतियों के साथ एक मॉड्यूलर लारावेल 12 स्टार्टर किट।',
                    'ar' => 'مجموعة بداية Laravel 12 المعيارية مع لوحة تحكم Filament ودعم متعدد اللغات وأذونات قائمة على الأدوار.',
                ],
                'type' => 'json',
                'is_translatable' => true,
                'description' => 'Default meta description for SEO',
            ],
            [
                'key' => 'meta_keywords',
                'value' => [
                    'en' => 'Laravel, Filament, Starter Kit, Modular, Multilingual',
                    'hi' => 'लारावेल, फिलामेंट, स्टार्टर किट, मॉड्यूलर, बहुभाषी',
                    'ar' => 'Laravel، Filament، مجموعة البداية، المعيارية، متعدد اللغات',
                ],
                'type' => 'json',
                'is_translatable' => true,
                'description' => 'Default meta keywords for SEO',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
