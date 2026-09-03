<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomepageSetting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class HomepageSettingController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:manage-homepage-settings,admin'),
        ];
    }

    // Section definitions: key => max images
    private array $sections = [
        'hero_banners' => 3,
        'best_selling_banners' => 3,
        'discounted_products_banner' => 1,
        'features' => 0, // 0 means no images
        'testimonials' => 0,
    ];

    public function index()
    {
        $settings = [];
        foreach (array_keys($this->sections) as $key) {
            $settings[$key] = HomepageSetting::get($key, []);
        }

        $settings['hero_badge'] = HomepageSetting::get('hero_badge', '১০০% হাতে তৈরি');
        $settings['hero_title'] = HomepageSetting::get('hero_title', "ঐতিহ্যবাহী বাংলাদেশ\nআপনার ঘরে আনুন");
        $settings['hero_subtitle'] = HomepageSetting::get('hero_subtitle', "কারিগরের হাতে তৈরি বাংলার অনন্য সব পণ্য, সরাসরি পৌঁছে যাক আপনার দোরগোড়ায়।");
        $settings['hero_btn1_text'] = HomepageSetting::get('hero_btn1_text', 'শপ নাও');
        $settings['hero_btn1_link'] = HomepageSetting::get('hero_btn1_link', '#products');
        $settings['hero_btn2_text'] = HomepageSetting::get('hero_btn2_text', 'সংগ্রহ দেখুন');
        $settings['hero_btn2_link'] = HomepageSetting::get('hero_btn2_link', '#collections');
        
        if (empty($settings['features'])) {
            $settings['features'] = [
                ['icon' => 'bi-truck', 'title' => 'Fast Delivery', 'subtitle' => 'সারাদেশে দ্রুত ডেলিভারি', 'color' => 'icon-orange'],
                ['icon' => 'bi-cash-stack', 'title' => 'Cash on Delivery', 'subtitle' => 'পণ্য পেয়ে মূল্য পরিশোধ', 'color' => 'icon-purple'],
                ['icon' => 'bi-arrow-repeat', 'title' => 'Easy Exchange', 'subtitle' => 'সহজ Size Exchange', 'color' => 'icon-pink'],
                ['icon' => 'bi-shield-check', 'title' => 'Secure Payment', 'subtitle' => 'bKash, Nagad & Card', 'color' => 'icon-green'],
            ];
        }

        if (empty($settings['testimonials'])) {
            $settings['testimonials'] = [
                ['name' => 'ফারজানা আক্তার', 'role' => 'ঢাকা', 'rating' => '5', 'text' => 'জামদানি শাড়িটা হাতে পেয়ে সত্যিই মুগ্ধ হয়েছি। কাপড়ের মান এবং কাজ দুটোই অসাধারণ।', 'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'রাকিবুল হাসান', 'role' => 'চট্টগ্রাম', 'rating' => '5', 'text' => 'মাটির চায়ের সেটটা দেখতে যেমন সুন্দর, ব্যবহার করেও তেমনই আরামদায়ক। ডেলিভারিও দ্রুত ছিল।', 'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80'],
                ['name' => 'নুসরাত জাহান', 'role' => 'সিলেট', 'rating' => '4', 'text' => 'নকশি কাঁথাটা উপহার হিসেবে দিয়েছিলাম, সবাই খুব পছন্দ করেছে। প্যাকেজিংও চমৎকার ছিল।', 'avatar' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=150&q=80'],
            ];
        }

        return view('backend.settings.homepage', compact('settings'));
    }

    public function update(Request $request, string $section)
    {
        if (! array_key_exists($section, $this->sections)) {
            abort(404);
        }

        if ($section === 'features') {
            $features = [];
            if ($request->has('features')) {
                foreach ($request->input('features') as $index => $feature) {
                    $features[] = [
                        'icon' => $feature['icon'] ?? '',
                        'title' => $feature['title'] ?? '',
                        'subtitle' => $feature['subtitle'] ?? '',
                        'color' => $feature['color'] ?? 'icon-orange',
                    ];
                }
            }
            HomepageSetting::set('features', $features);
        } elseif ($section === 'testimonials') {
            $testimonials = [];
            if ($request->has('testimonials')) {
                foreach ($request->input('testimonials') as $index => $testi) {
                    $avatarPath = $testi['old_avatar'] ?? '';
                    
                    if ($request->hasFile("testimonials.{$index}.avatar")) {
                        $file = $request->file("testimonials.{$index}.avatar");
                        $avatarPath = $file->store('homepage/testimonials', 'public');
                    }

                    $testimonials[] = [
                        'name' => $testi['name'] ?? '',
                        'role' => $testi['role'] ?? '',
                        'rating' => $testi['rating'] ?? '5',
                        'text' => $testi['text'] ?? '',
                        'avatar' => $avatarPath,
                    ];
                }
            }
            HomepageSetting::set('testimonials', $testimonials);
        } else {
            $maxImages = $this->sections[$section];
            $existing = HomepageSetting::get($section, []);
            $images = is_array($existing) ? $existing : [];

            // Handle deletions first
            if ($request->has('delete_images')) {
                foreach ($request->delete_images as $path) {
                    $fullPath = storage_path('app/public/'.$path);
                    if (file_exists($fullPath)) {
                        unlink($fullPath);
                    }
                    $images = array_values(array_filter($images, fn ($i) => $i !== $path));
                }
            }

            // Handle new uploads
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $file) {
                    if (count($images) >= $maxImages) {
                        break; // enforce max
                    }
                    $path = $file->store('homepage', 'public');
                    $images[] = $path;
                }
            }

            HomepageSetting::set($section, $images);
        }

        // Handle text fields for hero_banners
        if ($section === 'hero_banners') {
            if ($request->has('hero_badge')) HomepageSetting::set('hero_badge', $request->input('hero_badge'));
            if ($request->has('hero_title')) HomepageSetting::set('hero_title', $request->input('hero_title'));
            if ($request->has('hero_subtitle')) HomepageSetting::set('hero_subtitle', $request->input('hero_subtitle'));
            if ($request->has('hero_btn1_text')) HomepageSetting::set('hero_btn1_text', $request->input('hero_btn1_text'));
            if ($request->has('hero_btn1_link')) HomepageSetting::set('hero_btn1_link', $request->input('hero_btn1_link'));
            if ($request->has('hero_btn2_text')) HomepageSetting::set('hero_btn2_text', $request->input('hero_btn2_text'));
            if ($request->has('hero_btn2_link')) HomepageSetting::set('hero_btn2_link', $request->input('hero_btn2_link'));
        }

        return redirect()
            ->route('admin.settings.homepage', ['tab' => $section])
            ->with('success', 'Section updated successfully.');
    }
}
