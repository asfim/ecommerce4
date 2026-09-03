@extends('layouts.app')

@section('content')
    <!-- ================= HERO ================= -->
    <section class="hero" id="home">
        <div class="hero-slider" id="heroSlider">
            <div class="hero-track" id="heroTrack">

                @if (!empty($heroBanners) && count($heroBanners) > 0)
                    @php
                        $index = 0;
                        $banner = $heroBanners[0];
                    @endphp
                    <article class="hero-slide is-active">
                        <div class="hero-grid">
                            <div class="hero-panel hero-panel--main">
                                <img src="{{ asset('storage/' . str_replace('\\', '/', $banner)) }}"
                                    alt="Hero Banner {{ $index + 1 }}" loading="{{ $index == 0 ? 'eager' : 'lazy' }}">
                            </div>
                            <div class="hero-panel hero-panel--sub">
                                <img src="{{ asset('storage/' . str_replace('\\', '/', $heroBanners[($index + 1) % count($heroBanners)])) }}"
                                    alt="Banner Sub" loading="{{ $index == 0 ? 'eager' : 'lazy' }}">
                            </div>
                            <div class="hero-panel hero-panel--sub2">
                                <img src="{{ asset('storage/' . str_replace('\\', '/', $heroBanners[($index + 2) % count($heroBanners)])) }}"
                                    alt="Banner Sub 2" loading="{{ $index == 0 ? 'eager' : 'lazy' }}">
                            </div>
                            <div class="hero-panel hero-panel--story">
                                <div class="hero-story-content">
                                    <span
                                        class="hero-eyebrow">{{ \App\Models\HomepageSetting::get('hero_badge', '১০০% হাতে তৈরি') }}</span>
                                    <h1>{!! nl2br(\App\Models\HomepageSetting::get('hero_title', "ঐতিহ্যবাহী বাংলাদেশ\nআপনার ঘরে আনুন")) !!}</h1>
                                    <p>{!! nl2br(
                                        \App\Models\HomepageSetting::get(
                                            'hero_subtitle',
                                            'কারিগরের হাতে তৈরি বাংলার অনন্য সব পণ্য, সরাসরি পৌঁছে যাক আপনার দোরগোড়ায়।',
                                        ),
                                    ) !!}</p>
                                    <div class="hero-cta-group">
                                        @if(\App\Models\HomepageSetting::get('hero_btn1_text'))
                                            <a href="{{ \App\Models\HomepageSetting::get('hero_btn1_link', '#products') }}" class="btn btn-primary">{{ \App\Models\HomepageSetting::get('hero_btn1_text', 'শপ নাও') }}</a>
                                        @endif
                                        @if(\App\Models\HomepageSetting::get('hero_btn2_text'))
                                            <a href="{{ \App\Models\HomepageSetting::get('hero_btn2_link', '#collections') }}" class="btn btn-outline">{{ \App\Models\HomepageSetting::get('hero_btn2_text', 'সংগ্রহ দেখুন') }}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @else
                    <!-- Fallback if no banners are set -->
                    <article class="hero-slide is-active">
                        <div class="hero-grid">
                            <div class="hero-panel hero-panel--main">
                                <img src="https://images.unsplash.com/photo-1610030181087-540f1495ea89?auto=format&fit=crop&w=1000&q=80"
                                    alt="Hero Banner" loading="eager">
                            </div>
                            <div class="hero-panel hero-panel--sub">
                                <img src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=700&q=80"
                                    alt="Banner Sub" loading="eager">
                            </div>
                            <div class="hero-panel hero-panel--sub2">
                                <img src="https://images.unsplash.com/photo-1618221639031-8f0f0dfd0a83?auto=format&fit=crop&w=700&q=80"
                                    alt="Banner Sub 2" loading="eager">
                            </div>
                            <div class="hero-panel hero-panel--story">
                                <div class="hero-story-content">
                                    <span class="hero-eyebrow">কারিগরের হাতে ঐতিহ্যের সেরা ঠিকানা</span>
                                    <h1>বিশ্বাসে, মানে আমরাই আপনার আপনজন</h1>

                                    <div class="hero-story-features">
                                        <div class="hero-feature-item">
                                            <div class="hero-feature-icon">
                                                <svg viewBox="0 0 24 24" fill="none">
                                                    <path d="M12 11a4 4 0 100-8 4 4 0 000 8zM18 21a6 6 0 00-12 0"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="hero-feature-text">
                                                <h4>৫০০+ শিল্পী</h4>
                                                <p>আমাদের সাথে যুক্ত</p>
                                            </div>
                                        </div>
                                        <div class="hero-feature-item">
                                            <div class="hero-feature-icon">
                                                <svg viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </div>
                                            <div class="hero-feature-text">
                                                <h4>১০০% হ্যান্ডমেড</h4>
                                                <p>হ্যান্ডমেড পণ্য</p>
                                            </div>
                                        </div>
                                        <div class="hero-feature-item">
                                            <div class="hero-feature-icon">
                                                <svg viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="3" width="20" height="14" rx="2"
                                                        stroke="currentColor" stroke-width="1.5" />
                                                    <path d="M8 21h8M12 17v4" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg>
                                            </div>
                                            <div class="hero-feature-text">
                                                <h4>ফ্রি ডেলিভারি</h4>
                                                <p>সারা বাংলাদেশে</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endif

            </div>
        </div>

        <div class="hero-strip">
            <div class="hero-strip-inner">
                <span>৫০০+ শিল্পী</span>
                <span class="dot">•</span>
                <span>ফ্রি ডেলিভারি</span>
                <span class="dot">•</span>
                <span>১০০% হ্যান্ডমেড</span>
                <span class="dot">•</span>
                <span>ক্যাশ অন ডেলিভারি</span>
            </div>
        </div>
    </section>

    <!-- ================= CATEGORY SECTION ================= -->
    <section class="section category-section" id="categories">
        <div class="container">
            <div class="section-head">
                <h2 class="reveal">শপ বাই ক্যাটাগরি</h2>
                <p class="section-sub reveal">আপনার পছন্দের ঐতিহ্যবাহী পণ্য খুঁজে নিন</p>
            </div>
            <div class="category-slider-container" style="position: relative;">
                <button class="slider-arrow slider-arrow--prev" id="catPrev" aria-label="আগের"
                    style="left: 10px; display: flex;">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="m15 18-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="category-grid" id="categoryGrid"></div>
                <button class="slider-arrow slider-arrow--next" id="catNext" aria-label="পরের"
                    style="right: 10px; display: flex;">
                    <svg viewBox="0 0 24 24" fill="none">
                        <path d="m9 18 6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- ================= FEATURED COLLECTIONS ================= -->
    <section class="section collection-section" id="collections">
        <div class="container">
            <div class="section-head">
                <h2 class="reveal">ফ্ল্যাশ সেল</h2>
                <p class="section-sub reveal">অবিশ্বাস্য ডিসকাউন্টে সেরা পণ্যগুলো লুফে নিন</p>
            </div>
            <div class="product-grid" id="discountGrid"></div>
        </div>
    </section>

    <!-- ================= PRODUCTS ================= -->
    <section class="section product-section" id="products">
        <div class="container">
            <div class="section-head">
                <h2 class="reveal">জনপ্রিয় পণ্য</h2>
                <p class="section-sub reveal">কারিগরের হাতে গড়া প্রতিটি পণ্য, আপনার জন্য</p>
            </div>

            <div class="product-toolbar">
                <div class="filter-chips d-none d-md-flex" id="filterChips">
                    <button class="chip is-active" data-filter="সব">সব</button>
                    @foreach ($categories as $cat)
                        <button class="chip" data-filter="{{ $cat->name }}">{{ $cat->name }}</button>
                    @endforeach
                </div>
                <div class="mobile-filter custom-mobile-dropdown d-block d-md-none w-100 mb-3 dropdown">
                    <button class="btn dropdown-toggle w-100 d-flex justify-content-between align-items-center" type="button" id="mobileFilterBtn" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 8px; border: 1px solid #ced4da; padding: 10px 15px; background: white; text-align: left;">
                        <span id="mobileFilterSelectedText">সব ক্যাটাগরি</span>
                    </button>
                    <ul class="dropdown-menu w-100 shadow-sm border-0" aria-labelledby="mobileFilterBtn" style="border-radius: 8px; max-height: 250px; overflow-y: auto;">
                        <li><button class="dropdown-item active" data-filter="সব" onclick="handleMobileFilterClick(event, 'সব')">সব ক্যাটাগরি</button></li>
                        @foreach ($categories as $cat)
                            <li><button class="dropdown-item" data-filter="{{ $cat->name }}" onclick="handleMobileFilterClick(event, '{{ $cat->name }}')">{{ $cat->name }}</button></li>
                        @endforeach
                    </ul>
                </div>
                <label class="sort-select">
                    <span>সাজান:</span>
                    <select id="sortSelect">
                        <option value="popular">জনপ্রিয়তা</option>
                        <option value="price-low">দাম: কম থেকে বেশি</option>
                        <option value="price-high">দাম: বেশি থেকে কম</option>
                        <option value="rating">সেরা রেটিং</option>
                        <option value="discount">সর্বোচ্চ ছাড়</option>
                    </select>
                </label>
            </div>
            
            @push('scripts')
            <script>
            function handleMobileFilterClick(event, filterVal) {
                event.preventDefault();
                applyFilter(filterVal, false);
            }
            </script>
            @endpush

            <div class="product-grid" id="productGrid"></div>
            <p class="no-results" id="noResults" hidden>কোনো পণ্য পাওয়া যায়নি</p>

            <div class="load-more-wrap">
                <button class="btn btn-outline" id="loadMoreBtn">আরও দেখুন</button>
            </div>
        </div>
    </section>

    <!-- ================= WHY CHOOSE US ================= -->
    <section class="section why-section">
        <div class="container">
            <div class="why-grid" id="whyGrid">
                @php
                    $features = \App\Models\HomepageSetting::get('features', []);
                    if (empty($features)) {
                        $features = [
                            ['icon' => 'bi-hand-thumbs-up', 'title' => '১০০% হ্যান্ডমেড', 'subtitle' => 'প্রতিটি পণ্য কারিগরের হাতে তৈরি, কোনো মেশিন প্রোডাকশন নয়।'],
                            ['icon' => 'bi-patch-check', 'title' => 'যাচাইকৃত কারিগর', 'subtitle' => 'আমরা সরাসরি যাচাইকৃত কারিগর পরিবারের সাথে কাজ করি।'],
                            ['icon' => 'bi-shield-check', 'title' => 'নিরাপদ পেমেন্ট', 'subtitle' => 'ক্যাশ অন ডেলিভারি, bKash, Nagad ও কার্ডে নিরাপদ পেমেন্ট।'],
                            ['icon' => 'bi-truck', 'title' => 'দ্রুত ডেলিভারি', 'subtitle' => 'সারাদেশে দ্রুত ও নির্ভরযোগ্য হোম ডেলিভারি সুবিধা।'],
                        ];
                    }
                @endphp
                @foreach($features as $feature)
                    <div class="why-card reveal">
                        <div class="why-icon">
                            <i class="bi {{ $feature['icon'] ?? 'bi-star' }}" style="font-size: 24px;"></i>
                        </div>
                        <h3>{{ $feature['title'] ?? '' }}</h3>
                        <p>{{ $feature['subtitle'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= TESTIMONIALS ================= -->
    <section class="section testimonial-section">
        <div class="container">
            <div class="section-head">
                <h2 class="reveal">ক্রেতাদের মতামত</h2>
                <p class="section-sub reveal">আমাদের ক্রেতারা যা বলছেন</p>
            </div>
            <div class="testimonial-slider">
                <div class="testimonial-track" id="testimonialTrack">
                    @php
                        $testimonials = \App\Models\HomepageSetting::get('testimonials', []);
                        if (empty($testimonials)) {
                            $testimonials = [
                                ['name' => 'ফারজানা আক্তার', 'role' => 'ঢাকা', 'rating' => 5, 'text' => 'জামদানি শাড়িটা হাতে পেয়ে সত্যিই মুগ্ধ হয়েছি। কাপড়ের মান এবং কাজ দুটোই অসাধারণ।', 'avatar' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80'],
                                ['name' => 'রাকিবুল হাসান', 'role' => 'চট্টগ্রাম', 'rating' => 5, 'text' => 'মাটির চায়ের সেটটা দেখতে যেমন সুন্দর, ব্যবহার করেও তেমনই আরামদায়ক। ডেলিভারিও দ্রুত ছিল।', 'avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80'],
                                ['name' => 'নুসরাত জাহান', 'role' => 'সিলেট', 'rating' => 4, 'text' => 'নকশি কাঁথাটা উপহার হিসেবে দিয়েছিলাম, সবাই খুব পছন্দ করেছে। প্যাকেজিংও চমৎকার ছিল।', 'avatar' => 'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=150&q=80'],
                            ];
                        }
                    @endphp
                    @foreach($testimonials as $t)
                        <div class="testimonial-card">
                            <img class="testimonial-avatar" src="{{ !empty($t['avatar']) ? (str_starts_with($t['avatar'], 'http') ? $t['avatar'] : asset('storage/' . $t['avatar'])) : 'https://placehold.co/150x150/eee/aaa?text=User' }}" alt="{{ $t['name'] ?? '' }}" loading="lazy">
                            <div class="testimonial-stars">
                                @for($i = 0; $i < ($t['rating'] ?? 5); $i++)
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                @endfor
                            </div>
                            <p class="testimonial-text">"{{ $t['text'] ?? '' }}"</p>
                            <p class="testimonial-name">{{ $t['name'] ?? '' }}</p>
                            <p class="testimonial-role">{{ $t['role'] ?? '' }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="slider-dots" id="testimonialDots" role="tablist" aria-label="মতামত নির্বাচন">
                    @foreach($testimonials as $index => $t)
                        <button aria-label="মতামত {{ $index + 1 }}" class="{{ $index === 0 ? 'is-active' : '' }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script>
            // Map Laravel database variables to the JS variables
            window.DISCOUNT_PRODUCTS = [
                @foreach ($discountedProducts as $product)
                    @php
                        $dType = $product->discount_type ?? '';
                        $dVal = $product->discount_value ?? 0;
                        if ($dVal <= 0) {
                            continue;
                        }

                        $displayImage = $product->image;
                        if (empty($displayImage)) {
                            $variants = is_string($product->variants) ? json_decode($product->variants, true) : $product->variants;
                            if (!empty($variants) && is_array($variants)) {
                                foreach ($variants as $v) {
                                    if (!empty($v['image'])) {
                                        $displayImage = $v['image'];
                                        break;
                                    }
                                }
                            }
                        }
                        $imageUrl = $displayImage ? asset('storage/' . str_replace('\\', '/', $displayImage)) : asset('frontend/img/placeholder.png');
                        $desc = mb_substr(strip_tags($product->description), 0, 100);

                        $calcPrice = $product->price;
                        $dType = '';
                        $dVal = 0;
                        if ($product->has_active_discount) {
                            $dType = $product->discount_type ?? '';
                            $dVal = $product->discount_value ?? 0;
                            if ($dType == 'percent' && $dVal > 0) {
                                $calcPrice = $product->price - $product->price * ($dVal / 100);
                            } elseif (($dType == 'flat' || $dType == 'fixed') && $dVal > 0) {
                                $calcPrice = $product->price - $dVal;
                            }
                        }
                    @endphp {
                        id: {{ $product->id }},
                        slug: {!! json_encode($product->slug) !!},
                        name: {!! json_encode($product->name) !!},
                        category: {!! json_encode($product->category->name ?? 'Uncategorized') !!},
                        price: {{ $calcPrice }},
                        oldPrice: {{ $product->price }},
                        discountType: {!! json_encode($dType) !!},
                        discountValue: {{ $dVal }},
                        rating: 5,
                        reviews: 10,
                        image: {!! json_encode($imageUrl) !!},
                        desc: {!! json_encode($desc) !!}
                    },
                @endforeach
            ];

            window.PRODUCTS = [
                @foreach (\App\Models\Product::frontendActive()->with('category')->orderBy('sales_count', 'desc')->take(100)->get() as $product)
                    @php
                        $displayImage = $product->image;
                        if (empty($displayImage)) {
                            $variants = is_string($product->variants) ? json_decode($product->variants, true) : $product->variants;
                            if (!empty($variants) && is_array($variants)) {
                                foreach ($variants as $v) {
                                    if (!empty($v['image'])) {
                                        $displayImage = $v['image'];
                                        break;
                                    }
                                }
                            }
                        }
                        $imageUrl = $displayImage ? asset('storage/' . str_replace('\\', '/', $displayImage)) : asset('frontend/img/placeholder.png');
                        $desc = mb_substr(strip_tags($product->description), 0, 100);

                        $calcPrice = $product->price;
                        $dType = '';
                        $dVal = 0;
                        if ($product->has_active_discount) {
                            $dType = $product->discount_type ?? '';
                            $dVal = $product->discount_value ?? 0;
                            if ($dType == 'percent' && $dVal > 0) {
                                $calcPrice = $product->price - $product->price * ($dVal / 100);
                            } elseif (($dType == 'flat' || $dType == 'fixed') && $dVal > 0) {
                                $calcPrice = $product->price - $dVal;
                            }
                        }
                    @endphp {
                        id: {{ $product->id }},
                        slug: {!! json_encode($product->slug) !!},
                        name: {!! json_encode($product->name) !!},
                        category: {!! json_encode($product->category->name ?? 'Uncategorized') !!},
                        price: {{ $calcPrice }},
                        oldPrice: {{ $product->price }},
                        discountType: {!! json_encode($dType) !!},
                        discountValue: {{ $dVal }},
                        rating: 5,
                        reviews: 10,
                        image: {!! json_encode($imageUrl) !!},
                        desc: {!! json_encode($desc) !!}
                    },
                @endforeach
            ];

            window.CATEGORIES = [
                @foreach ($categories as $category)
                    @php
                        $catImageUrl = $category->image ? asset('storage/' . str_replace('\\', '/', $category->image)) : asset('frontend/img/placeholder.png');
                    @endphp {
                        name: {!! json_encode($category->name) !!},
                        filter: {!! json_encode($category->name) !!},
                        image: {!! json_encode($catImageUrl) !!}
                    },
                @endforeach
            ];

            window.COLLECTIONS = [
                @foreach ($homeCategories ?? $categories->take(4) as $collection)
                    @php
                        $colImageUrl = $collection->image ? asset('storage/' . str_replace('\\', '/', $collection->image)) : asset('frontend/img/placeholder.png');
                    @endphp {
                        name: {!! json_encode($collection->name) !!},
                        desc: {!! json_encode('Our exclusive ' . $collection->name . ' collection') !!},
                        image: {!! json_encode($colImageUrl) !!}
                    },
                @endforeach
            ];
        </script>
    @endpush
@endsection
