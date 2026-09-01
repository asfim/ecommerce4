@extends('layouts.ecohaat')

@section('content')

<!-- ================= HERO ================= -->
<section class="hero" id="home">
  <div class="hero-slider" id="heroSlider">
    <div class="hero-track" id="heroTrack">

      <article class="hero-slide is-active">
        <div class="hero-grid">
          <div class="hero-panel hero-panel--main">
            <img src="{{ !empty($heroBanners) ? asset('storage/' . $heroBanners[0]) : 'https://images.unsplash.com/photo-1610030181087-540f1495ea89?auto=format&fit=crop&w=1000&q=80' }}" alt="Hero Banner" loading="eager">
          </div>
          <div class="hero-panel hero-panel--sub">
            <img src="{{ !empty($heroBanners) && isset($heroBanners[1]) ? asset('storage/' . $heroBanners[1]) : 'https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=700&q=80' }}" alt="Banner Sub" loading="eager">
          </div>
          <div class="hero-panel hero-panel--sub2">
            <img src="{{ !empty($heroBanners) && isset($heroBanners[2]) ? asset('storage/' . $heroBanners[2]) : 'https://images.unsplash.com/photo-1618221639031-8f0f0dfd0a83?auto=format&fit=crop&w=700&q=80' }}" alt="Banner Sub 2" loading="eager">
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

    </div>

    <button class="slider-arrow slider-arrow--prev" id="heroPrev" aria-label="আগের স্লাইড" style="display:none;">
      <svg viewBox="0 0 24 24" fill="none"><path d="m15 18-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <button class="slider-arrow slider-arrow--next" id="heroNext" aria-label="পরের স্লাইড" style="display:none;">
      <svg viewBox="0 0 24 24" fill="none"><path d="m9 18 6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </button>
    <div class="slider-dots" id="heroDots" role="tablist" aria-label="স্লাইড নির্বাচন" style="display:none;"></div>
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
    <div class="category-grid" id="categoryGrid"></div>
  </div>
</section>

<!-- ================= FEATURED COLLECTIONS ================= -->
<section class="section collection-section" id="collections">
  <div class="container">
    <div class="section-head">
      <h2 class="reveal">বৈশিষ্ট্যপূর্ণ সংগ্রহ</h2>
      <p class="section-sub reveal">কিউরেট করা কালেকশনে খুঁজে নিন আপনার পছন্দ</p>
    </div>
    <div class="collection-grid" id="collectionGrid"></div>
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
        @foreach($categories->take(6) as $cat)
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
    window.PRODUCTS = [
        @foreach($bestSellingProducts as $product)
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
            $imageUrl = $displayImage ? asset('storage/' . str_replace('\\', '/', $displayImage)) : 'https://images.unsplash.com/photo-1610652492500-ded49ceeb378';
            $desc = mb_substr(strip_tags($product->description), 0, 100);
        @endphp
        {
            id: {{ $product->id }},
            name: {!! json_encode($product->name) !!},
            category: {!! json_encode($product->category->name ?? 'Uncategorized') !!},
            price: {{ $product->price - ($product->discount_value ?? 0) }},
            oldPrice: {{ $product->price }},
            rating: 5,
            reviews: 10,
            image: {!! json_encode($imageUrl) !!},
            desc: {!! json_encode($desc) !!}
        },
        @endforeach
    ];

    window.CATEGORIES = [
        @foreach($categories->take(8) as $category)
        @php
            $catImageUrl = $category->image ? asset('storage/' . str_replace('\\', '/', $category->image)) : 'https://images.unsplash.com/photo-1610030181087-540f1495ea89';
        @endphp
        {
            name: {!! json_encode($category->name) !!},
            filter: {!! json_encode($category->name) !!},
            image: {!! json_encode($catImageUrl) !!}
        },
        @endforeach
    ];
</script>
@endpush

@endsection
