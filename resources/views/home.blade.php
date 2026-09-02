@extends('layouts.app')

@section('content')

<!-- ================= HERO ================= -->
<section class="hero" id="home">
  <div class="hero-slider" id="heroSlider">
    <div class="hero-track" id="heroTrack">

      @if(!empty($heroBanners) && count($heroBanners) > 0)
        @php
            $index = 0;
            $banner = $heroBanners[0];
        @endphp
        <article class="hero-slide is-active">
          <div class="hero-grid">
            <div class="hero-panel hero-panel--main">
              <img src="{{ asset('storage/' . str_replace('\\', '/', $banner)) }}" alt="Hero Banner {{ $index + 1 }}" loading="{{ $index == 0 ? 'eager' : 'lazy' }}">
            </div>
            <div class="hero-panel hero-panel--sub">
              <img src="{{ asset('storage/' . str_replace('\\', '/', $heroBanners[($index + 1) % count($heroBanners)])) }}" alt="Banner Sub" loading="{{ $index == 0 ? 'eager' : 'lazy' }}">
            </div>
            <div class="hero-panel hero-panel--sub2">
              <img src="{{ asset('storage/' . str_replace('\\', '/', $heroBanners[($index + 2) % count($heroBanners)])) }}" alt="Banner Sub 2" loading="{{ $index == 0 ? 'eager' : 'lazy' }}">
            </div>
            <div class="hero-panel hero-panel--story">
              <div class="hero-story-content">
                <span class="hero-eyebrow">{{ \App\Models\HomepageSetting::get('hero_badge', '১০০% হাতে তৈরি') }}</span>
                <h1>{!! nl2br(\App\Models\HomepageSetting::get('hero_title', "ঐতিহ্যবাহী বাংলাদেশ\nআপনার ঘরে আনুন")) !!}</h1>
                <p>{!! nl2br(\App\Models\HomepageSetting::get('hero_subtitle', "কারিগরের হাতে তৈরি বাংলার অনন্য সব পণ্য, সরাসরি পৌঁছে যাক আপনার দোরগোড়ায়।")) !!}</p>
                <div class="hero-cta-group">
                  <a href="#products" class="btn btn-primary">শপ নাও</a>
                  <a href="#collections" class="btn btn-outline">সংগ্রহ দেখুন</a>
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
              <img src="https://images.unsplash.com/photo-1610030181087-540f1495ea89?auto=format&fit=crop&w=1000&q=80" alt="Hero Banner" loading="eager">
            </div>
            <div class="hero-panel hero-panel--sub">
              <img src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=700&q=80" alt="Banner Sub" loading="eager">
            </div>
            <div class="hero-panel hero-panel--sub2">
              <img src="https://images.unsplash.com/photo-1618221639031-8f0f0dfd0a83?auto=format&fit=crop&w=700&q=80" alt="Banner Sub 2" loading="eager">
            </div>
            <div class="hero-panel hero-panel--story">
              <div class="hero-story-content">
              <span class="hero-eyebrow">কারিগরের হাতে ঐতিহ্যের সেরা ঠিকানা</span>
              <h1>বিশ্বাসে, মানে আমরাই আপনার আপনজন</h1>

              <div class="hero-story-features">
                <div class="hero-feature-item">
                  <div class="hero-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M12 11a4 4 0 100-8 4 4 0 000 8zM18 21a6 6 0 00-12 0" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </div>
                  <div class="hero-feature-text">
                    <h4>৫০০+ শিল্পী</h4>
                    <p>আমাদের সাথে যুক্ত</p>
                  </div>
                </div>
                <div class="hero-feature-item">
                  <div class="hero-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                  </div>
                  <div class="hero-feature-text">
                    <h4>১০০% হ্যান্ডমেড</h4>
                    <p>হ্যান্ডমেড পণ্য</p>
                  </div>
                </div>
                <div class="hero-feature-item">
                  <div class="hero-feature-icon">
                    <svg viewBox="0 0 24 24" fill="none"><rect x="2" y="3" width="20" height="14" rx="2" stroke="currentColor" stroke-width="1.5"/><path d="M8 21h8M12 17v4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
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
      <button class="slider-arrow slider-arrow--prev" id="catPrev" aria-label="আগের" style="left: 10px; display: flex;">
        <svg viewBox="0 0 24 24" fill="none"><path d="m15 18-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </button>
      <div class="category-grid" id="categoryGrid"></div>
      <button class="slider-arrow slider-arrow--next" id="catNext" aria-label="পরের" style="right: 10px; display: flex;">
        <svg viewBox="0 0 24 24" fill="none"><path d="m9 18 6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
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
      <div class="filter-chips" id="filterChips">
        <button class="chip is-active" data-filter="সব">সব</button>
        @foreach($categories as $cat)
        <button class="chip" data-filter="{{ $cat->name }}">{{ $cat->name }}</button>
        @endforeach
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

    <div class="product-grid" id="productGrid"></div>
    <p class="no-results" id="noResults" hidden>কোনো পণ্য পাওয়া যায়নি</p>

    <div class="load-more-wrap">
      <button class="btn btn-outline" id="loadMoreBtn">আরও দেখুন</button>
    </div>
  </div>
</section>

<!-- ================= CULTURAL STORY ================= -->
<section class="section story-section" id="story">
  <div class="container story-grid">
    <div class="story-media reveal">
      <img class="story-img story-img--main" src="https://images.unsplash.com/photo-1595531222252-a12d886d63b0?auto=format&fit=crop&w=800&q=80" alt="কারিগর কাজ করছেন" loading="lazy">
      <img class="story-img story-img--small" src="https://images.unsplash.com/photo-1590736969955-71cc94901144?auto=format&fit=crop&w=500&q=80" alt="হাতে তৈরি প্রক্রিয়া" loading="lazy">
    </div>
    <div class="story-content reveal">
      <span class="section-eyebrow">আমাদের গল্প</span>
      <h2>কারিগরের হাতেই বেঁচে থাকে ঐতিহ্য</h2>
      <p>বাংলার প্রতিটি পণ্যের পেছনে রয়েছে একজন কারিগরের গল্প, পরিশ্রম ও ভালোবাসা। EcoHaat সেই গল্পগুলোকে পৌঁছে দিতে চায় আপনার ঘরে।</p>
      <a href="#" class="btn btn-primary">কারিগরের গল্প দেখুন</a>
    </div>
  </div>
</section>

<!-- ================= WHY CHOOSE US ================= -->
<section class="section why-section">
  <div class="container">
    <div class="why-grid" id="whyGrid"></div>
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
      <div class="testimonial-track" id="testimonialTrack"></div>
      <div class="slider-dots" id="testimonialDots" role="tablist" aria-label="মতামত নির্বাচন"></div>
    </div>
  </div>
</section>

<!-- ================= NEWSLETTER ================= -->
<section class="newsletter-section">
  <div class="container newsletter-inner">
    <h2>বাংলার নতুন গল্প সবার আগে জানুন</h2>
    <p>নতুন কালেকশন, বিশেষ অফার এবং কারিগরের গল্প পেতে সাবস্ক্রাইব করুন।</p>
    <form class="newsletter-form" id="newsletterForm" novalidate>
      <input type="email" id="newsletterEmail" placeholder="আপনার ইমেইল লিখুন" aria-label="ইমেইল ঠিকানা" required>
      <button type="submit" class="btn btn-primary">সাবস্ক্রাইব</button>
    </form>
    <p class="form-msg" id="newsletterMsg" role="status"></p>
  </div>
</section>

@push('scripts')
<script>
    // Map Laravel database variables to the JS variables
    window.DISCOUNT_PRODUCTS = [
        @foreach($discountedProducts as $product)
        @php
            $dType = $product->discount_type ?? '';
            $dVal = $product->discount_value ?? 0;
            if ($dVal <= 0) continue;

            $displayImage = $product->image;
            if(empty($displayImage)) {
                $variants = is_string($product->variants) ? json_decode($product->variants, true) : $product->variants;
                if(!empty($variants) && is_array($variants)) {
                    foreach($variants as $v) {
                        if(!empty($v['image'])) {
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
                    $calcPrice = $product->price - ($product->price * ($dVal / 100));
                } else if (($dType == 'flat' || $dType == 'fixed') && $dVal > 0) {
                    $calcPrice = $product->price - $dVal;
                }
            }
        @endphp
        {
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
        @foreach(\App\Models\Product::frontendActive()->with('category')->orderBy('sales_count', 'desc')->take(100)->get() as $product)
        @php
            $displayImage = $product->image;
            if(empty($displayImage)) {
                $variants = is_string($product->variants) ? json_decode($product->variants, true) : $product->variants;
                if(!empty($variants) && is_array($variants)) {
                    foreach($variants as $v) {
                        if(!empty($v['image'])) {
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
                    $calcPrice = $product->price - ($product->price * ($dVal / 100));
                } else if (($dType == 'flat' || $dType == 'fixed') && $dVal > 0) {
                    $calcPrice = $product->price - $dVal;
                }
            }
        @endphp
        {
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
        @foreach($categories as $category)
        @php
            $catImageUrl = $category->image ? asset('storage/' . str_replace('\\', '/', $category->image)) : asset('frontend/img/placeholder.png');
        @endphp
        {
            name: {!! json_encode($category->name) !!},
            filter: {!! json_encode($category->name) !!},
            image: {!! json_encode($catImageUrl) !!}
        },
        @endforeach
    ];

    window.COLLECTIONS = [
        @foreach($homeCategories ?? $categories->take(4) as $collection)
        @php
            $colImageUrl = $collection->image ? asset('storage/' . str_replace('\\', '/', $collection->image)) : asset('frontend/img/placeholder.png');
        @endphp
        {
            name: {!! json_encode($collection->name) !!},
            desc: {!! json_encode("Our exclusive " . $collection->name . " collection") !!},
            image: {!! json_encode($colImageUrl) !!}
        },
        @endforeach
    ];
</script>
@endpush

@endsection
