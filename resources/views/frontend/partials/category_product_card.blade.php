@php
    $hasDiscount = $product->has_active_discount;
    $discountedPrice = $product->price;
    $displayDiscountType = $product->discount_type;
    $displayDiscountValue = $product->discount_value;

    if ($hasDiscount) {
        if ($product->discount_type === 'percent') {
            $discountedPrice = $product->price - ($product->price * $product->discount_value) / 100;
        } elseif ($product->discount_type === 'fixed') {
            $discountedPrice = $product->price - $product->discount_value;
        }
    }

    $displayImage = $product->image;
    $minPrice = $product->price;
    $maxPrice = $product->price;
    $originalMinPrice = $product->price;
    $originalMaxPrice = $product->price;
    $hasMultiplePrices = false;
    $hasMultipleOriginalPrices = false;
    $hasVariantDiscount = false;

    if (!empty($product->variants) && is_array($product->variants)) {
        $prices = [];
        $originalPrices = [];
        $firstVariantImage = null;
        $now = now();
        foreach ($product->variants as $v) {
            if (isset($v['combo'])) {
                if (isset($v['price']) && $v['price'] > 0) {
                    $originalP = (float) $v['price'];
                    $p = $originalP;
                    
                    if (!empty($v['discount_type']) && isset($v['discount']) && $v['discount'] > 0) {
                        $isActive = true;
                        $startDate = !empty($v['discount_start']) ? \Carbon\Carbon::parse($v['discount_start']) : null;
                        $endDate = !empty($v['discount_end']) ? \Carbon\Carbon::parse($v['discount_end']) : null;
                        if ($startDate && $startDate->gt($now)) $isActive = false;
                        if ($endDate && $endDate->lt($now)) $isActive = false;
                        
                        if ($isActive) {
                            $hasVariantDiscount = true;
                            if ($v['discount_type'] === 'percent') {
                                $p = $p - ($p * $v['discount'] / 100);
                            } else {
                                $p = $p - $v['discount'];
                            }
                            
                            if (!$hasDiscount) {
                                if ($v['discount_type'] === 'percent') {
                                    if ($displayDiscountType !== 'percent' || $v['discount'] > $displayDiscountValue) {
                                        $displayDiscountType = 'percent';
                                        $displayDiscountValue = $v['discount'];
                                    }
                                } else if ($displayDiscountType !== 'percent') {
                                    if ($v['discount'] > $displayDiscountValue) {
                                        $displayDiscountType = 'fixed';
                                        $displayDiscountValue = $v['discount'];
                                    }
                                }
                            }
                        }
                    }
                    $prices[] = $p;
                    $originalPrices[] = $originalP;
                }
                if (!$firstVariantImage && !empty($v['image'])) $firstVariantImage = $v['image'];
            }
        }
        
        if ($hasVariantDiscount && !$hasDiscount) {
            $hasDiscount = true;
        }

        if ($firstVariantImage) $displayImage = $firstVariantImage;
        if (count($prices) > 0) {
            $minPrice = min($prices);
            $maxPrice = max($prices);
            $originalMinPrice = min($originalPrices);
            $originalMaxPrice = max($originalPrices);
            if ($minPrice != $maxPrice) {
                $hasMultiplePrices = true;
            }
            else { 
                $minPrice = $prices[0]; 
                $discountedPrice = $minPrice; 
                $originalMinPrice = $originalPrices[0];
            }
            
            if ($originalMinPrice != $originalMaxPrice) {
                $hasMultipleOriginalPrices = true;
            }
        }
    }
@endphp

<div class="rcat-card h-100 d-flex flex-column">

    {{-- Discount ribbon --}}
    @if ($hasDiscount && $displayDiscountValue > 0)
        @php
            $bnNumbers = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
            $enNumbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
            $bnDiscount = str_replace($enNumbers, $bnNumbers, round($displayDiscountValue));
        @endphp
        @if ($displayDiscountType === 'percent')
            <span class="rcat-badge-discount">-{{ $bnDiscount }}%</span>
        @else
            <span class="rcat-badge-discount">-৳{{ $bnDiscount }}</span>
        @endif
    @endif

    {{-- Image --}}
    <a href="{{ route('product.details', $product->slug) }}" class="rcat-img-wrap text-decoration-none">
        @if ($displayImage)
            <img src="{{ asset('storage/' . $displayImage) }}" alt="{{ $product->name }}" loading="lazy">
        @else
            <img src="https://placehold.co/400x400/f8f9fa/6c757d?text={{ urlencode(Str::limit($product->name, 10, '')) }}" alt="{{ $product->name }}" loading="lazy">
        @endif
    </a>

    {{-- Card body --}}
    <div class="rcat-body flex-grow-1 d-flex flex-column">

        {{-- Name --}}
        <a href="{{ route('product.details', $product->slug) }}" class="text-decoration-none">
            <div class="rcat-name" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; min-height: 40px; line-height: 20px;">{{ Str::limit($product->name, 60) }}</div>
        </a>

        {{-- Stock badge --}}
        <div class="rcat-stock-row">
            @if ($product->stock > 0)
                <span class="rcat-in-stock"><i class="bi bi-check-circle-fill"></i> In Stock</span>
            @else
                <span class="rcat-out-stock"><i class="bi bi-x-circle-fill"></i> Out of Stock</span>
            @endif
        </div>

        {{-- Price --}}
        <div class="rcat-price-row">
            @if ($hasMultiplePrices)
                @if ($hasDiscount)
                    <span class="rcat-price"><span class="rcat-tk">৳</span> {{ number_format($minPrice, 0) }} – {{ number_format($maxPrice, 0) }}</span>
                    <span class="rcat-price-old"><span class="rcat-tk-old">৳</span> {{ number_format($originalMinPrice, 0) }} – {{ number_format($originalMaxPrice, 0) }}</span>
                @else
                    <span class="rcat-price"><span class="rcat-tk">৳</span> {{ number_format($minPrice, 0) }} – {{ number_format($maxPrice, 0) }}</span>
                @endif
            @elseif($hasDiscount)
                <span class="rcat-price"><span class="rcat-tk">৳</span> {{ number_format($discountedPrice, 0) }}</span>
                <span class="rcat-price-old"><span class="rcat-tk-old">৳</span> {{ number_format(isset($originalMinPrice) ? $originalMinPrice : $product->price, 0) }}</span>
            @else
                <span class="rcat-price"><span class="rcat-tk">৳</span> {{ number_format($minPrice, 0) }}</span>
            @endif
        </div>

    </div>

    {{-- Footer button --}}
    <div class="rcat-footer">
        <a href="#" class="rcat-btn-cart add-to-cart-btn"
           data-id="{{ $product->id }}" 
           data-name="{{ $product->name }}" 
           data-price="{{ $hasDiscount ? $discountedPrice : $minPrice }}" 
           data-original-price="{{ $hasDiscount ? $originalMinPrice : $product->price }}"
           data-image="{{ $displayImage }}">
            <i class="bi bi-cart-plus-fill me-1"></i> Add to Cart
        </a>
    </div>
</div>
