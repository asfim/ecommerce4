@extends('layouts.app')

@section('content')
    <!-- ================= HERO ================= -->
    <section class="hero" id="home">
        <article class="hero-slide is-active">
            <div class="hero-grid">
                <div class="hero-panel hero-panel--main" style="flex: 2.8; position: relative; overflow: hidden;">
                    <div class="hero-slider" id="heroSlider" style="height: 100%;">
                        <div class="hero-track" id="heroTrack" style="height: 100%;">
                            @if (!empty($heroBanners) && count($heroBanners) > 0)
                                @foreach (array_slice($heroBanners, 0, 3) as $index => $banner)
                                    <div class="hero-slide {{ $index == 0 ? 'is-active' : '' }}" style="min-width: 100%; height: 100%;">
                                        <img src="{{ asset('storage/' . str_replace('\\', '/', $banner)) }}"
                                            alt="Hero Banner {{ $index + 1 }}" loading="{{ $index == 0 ? 'eager' : 'lazy' }}" style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                @endforeach
                            @else
                                <div class="hero-slide is-active" style="min-width: 100%; height: 100%;">
                                    <img src="{{ asset('frontend/images/hero-banner.png') }}"
                                        alt="Hero Banner" loading="eager" style="width: 100%; height: 100%; object-fit: cover;">
                                </div>
                            @endif
                        </div>
                    </div>
                    
                    <button id="heroPrevBtn" class="hero-arrow hero-arrow-left" aria-label="Previous slide">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                    </button>
                    <button id="heroNextBtn" class="hero-arrow hero-arrow-right" aria-label="Next slide">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                    </button>
                </div>
                <div class="hero-panel hero-panel--story">
                    <div class="hero-story-content">
                        <span class="hero-eyebrow">{{ \App\Models\HomepageSetting::get('hero_badge', '১০০% হাতে তৈরি') }}</span>
                        <h1>{!! nl2br(\App\Models\HomepageSetting::get('hero_title', "ঐতিহ্যবাহী বাংলাদেশ\nআপনার ঘরে আনুন")) !!}</h1>
                        <p>{!! nl2br(
                            \App\Models\HomepageSetting::get(
                                'hero_subtitle',
                                'কারিগরের হাতে তৈরি বাংলার অনন্য সব পণ্য, সরাসরি পৌঁছে যাক আপনার দোরগোড়ায়।',
                            ),
                        ) !!}</p>
                        <div class="hero-cta-group">
                            @if (\App\Models\HomepageSetting::get('hero_btn1_text'))
                                <a href="{{ \App\Models\HomepageSetting::get('hero_btn1_link', '#products') }}"
                                    class="btn btn-primary">{{ \App\Models\HomepageSetting::get('hero_btn1_text', 'শপ নাও') }}</a>
                            @endif
                            @if (\App\Models\HomepageSetting::get('hero_btn2_text'))
                                <a href="{{ \App\Models\HomepageSetting::get('hero_btn2_link', '#collections') }}"
                                    class="btn btn-outline">{{ \App\Models\HomepageSetting::get('hero_btn2_text', 'সংগ্রহ দেখুন') }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>
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
            <div class="text-center" style="margin-top: 30px;">
                <button class="btn btn-outline" id="loadMoreDiscountBtn"
                    style="display: none; margin: 0 auto; padding: 10px 24px;">আরও দেখুন</button>
            </div>
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
                    <button class="btn dropdown-toggle w-100 d-flex justify-content-between align-items-center"
                        type="button" id="mobileFilterBtn" data-bs-toggle="dropdown" aria-expanded="false"
                        style="border-radius: 8px; border: 1px solid #ced4da; padding: 10px 15px; background: white; text-align: left;">
                        <span id="mobileFilterSelectedText">সব ক্যাটাগরি</span>
                    </button>
                    <ul class="dropdown-menu w-100 shadow-sm border-0" aria-labelledby="mobileFilterBtn"
                        style="border-radius: 8px; max-height: 250px; overflow-y: auto;">
                        <li><button class="dropdown-item active" data-filter="সব"
                                onclick="handleMobileFilterClick(event, 'সব')">সব ক্যাটাগরি</button></li>
                        @foreach ($categories as $cat)
                            <li><button class="dropdown-item" data-filter="{{ $cat->name }}"
                                    onclick="handleMobileFilterClick(event, '{{ $cat->name }}')">{{ $cat->name }}</button>
                            </li>
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
                            [
                                'icon' => 'bi-hand-thumbs-up',
                                'title' => '১০০% হ্যান্ডমেড',
                                'subtitle' => 'প্রতিটি পণ্য কারিগরের হাতে তৈরি, কোনো মেশিন প্রোডাকশন নয়।',
                            ],
                            [
                                'icon' => 'bi-patch-check',
                                'title' => 'যাচাইকৃত কারিগর',
                                'subtitle' => 'আমরা সরাসরি যাচাইকৃত কারিগর পরিবারের সাথে কাজ করি।',
                            ],
                            [
                                'icon' => 'bi-shield-check',
                                'title' => 'নিরাপদ পেমেন্ট',
                                'subtitle' => 'ক্যাশ অন ডেলিভারি, bKash, Nagad ও কার্ডে নিরাপদ পেমেন্ট।',
                            ],
                            [
                                'icon' => 'bi-truck',
                                'title' => 'দ্রুত ডেলিভারি',
                                'subtitle' => 'সারাদেশে দ্রুত ও নির্ভরযোগ্য হোম ডেলিভারি সুবিধা।',
                            ],
                        ];
                    }
                @endphp
                @foreach ($features as $feature)
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
                                [
                                    'name' => 'ফারজানা আক্তার',
                                    'role' => 'ঢাকা',
                                    'rating' => 5,
                                    'text' =>
                                        'জামদানি শাড়িটা হাতে পেয়ে সত্যিই মুগ্ধ হয়েছি। কাপড়ের মান এবং কাজ দুটোই অসাধারণ।',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80',
                                ],
                                [
                                    'name' => 'রাকিবুল হাসান',
                                    'role' => 'চট্টগ্রাম',
                                    'rating' => 5,
                                    'text' =>
                                        'মাটির চায়ের সেটটা দেখতে যেমন সুন্দর, ব্যবহার করেও তেমনই আরামদায়ক। ডেলিভারিও দ্রুত ছিল।',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80',
                                ],
                                [
                                    'name' => 'নুসরাত জাহান',
                                    'role' => 'সিলেট',
                                    'rating' => 4,
                                    'text' =>
                                        'নকশি কাঁথাটা উপহার হিসেবে দিয়েছিলাম, সবাই খুব পছন্দ করেছে। প্যাকেজিংও চমৎকার ছিল।',
                                    'avatar' =>
                                        'https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=150&q=80',
                                ],
                            ];
                        }
                    @endphp
                    @foreach ($testimonials as $t)
                        <div class="testimonial-card">
                            <img class="testimonial-avatar"
                                src="{{ !empty($t['avatar']) ? (str_starts_with($t['avatar'], 'http') ? $t['avatar'] : asset('storage/' . $t['avatar'])) : 'https://placehold.co/150x150/eee/aaa?text=User' }}"
                                alt="{{ $t['name'] ?? '' }}" loading="lazy">
                            <div class="testimonial-stars">
                                @for ($i = 0; $i < ($t['rating'] ?? 5); $i++)
                                    <svg viewBox="0 0 24 24" fill="currentColor" width="16" height="16">
                                        <path
                                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                    </svg>
                                @endfor
                            </div>
                            <p class="testimonial-text">"{{ $t['text'] ?? '' }}"</p>
                            <p class="testimonial-name">{{ $t['name'] ?? '' }}</p>
                            <p class="testimonial-role">{{ $t['role'] ?? '' }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="slider-dots" id="testimonialDots" role="tablist" aria-label="মতামত নির্বাচন">
                    @foreach ($testimonials as $index => $t)
                        <button aria-label="মতামত {{ $index + 1 }}"
                            class="{{ $index === 0 ? 'is-active' : '' }}"></button>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        .hero-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.7);
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            transition: all 0.3s ease;
            color: var(--primary);
        }
        .hero-arrow:hover {
            background: var(--primary);
            color: white;
        }
        .hero-arrow-left { left: 15px; }
        .hero-arrow-right { right: 15px; }
        .hero-track {
            display: flex;
            transition: transform .6s cubic-bezier(.65, 0, .35, 1);
        }
    </style>

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
                        desc: {!! json_encode($desc) !!},
                        variants: {!! json_encode($variants ?: []) !!}
                    },
                @endforeach
            ];

            document.addEventListener('DOMContentLoaded', function() {
                const track = document.getElementById('heroTrack');
                const slides = document.querySelectorAll('.hero-slide');
                const prevBtn = document.getElementById('heroPrevBtn');
                const nextBtn = document.getElementById('heroNextBtn');
                
                if (slides.length > 1 && track) {
                    let currentSlide = 0;
                    let slideInterval;

                    function goToSlide(index) {
                        if (index < 0) index = slides.length - 1;
                        if (index >= slides.length) index = 0;
                        currentSlide = index;
                        track.style.transform = `translateX(-${currentSlide * 100}%)`;
                        slides.forEach((slide, idx) => {
                            if(idx === currentSlide) {
                                slide.classList.add('is-active');
                            } else {
                                slide.classList.remove('is-active');
                            }
                        });
                    }

                    function nextSlide() { goToSlide(currentSlide + 1); }
                    function prevSlide() { goToSlide(currentSlide - 1); }

                    function startInterval() {
                        slideInterval = setInterval(nextSlide, 5000);
                    }
                    function resetInterval() {
                        clearInterval(slideInterval);
                        startInterval();
                    }

                    if (prevBtn) prevBtn.addEventListener('click', () => { prevSlide(); resetInterval(); });
                    if (nextBtn) nextBtn.addEventListener('click', () => { nextSlide(); resetInterval(); });

                    startInterval();
                } else {
                    if (prevBtn) prevBtn.style.display = 'none';
                    if (nextBtn) nextBtn.style.display = 'none';
                }
            });

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
                        desc: {!! json_encode($desc) !!},
                        variants: {!! json_encode($variants ?: []) !!}
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
