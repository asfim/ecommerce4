@extends('layouts.app')

@section('title', 'Flash Sale')

@section('content')
<div class="category-page py-5" style="background: #f8f9fa; min-height: 70vh;">
    <div class="wrap container">
        <!-- Breadcrumb / Header -->
        <nav aria-label="breadcrumb" class="mb-4">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-decoration-none text-muted">Home</a></li>
                <li class="breadcrumb-item active text-dark fw-semibold" aria-current="page">Flash Sale</li>
            </ol>
        </nav>

        <div class="row align-items-center mb-5">
            <div class="col-md-8">
                <h1 class="fw-bold mb-1 text-dark" style="font-size: 2.2rem; letter-spacing: -0.5px;">
                    <i class="bi bi-lightning-fill text-danger me-2"></i>Flash Sale
                </h1>
                <p class="text-muted mb-0">Get exclusive discounts and offers on our top-rated products</p>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <span class="badge bg-danger px-3 py-2 fs-6 rounded-pill">{{ $products->total() }} Hot Deals</span>
            </div>
        </div>

        @if($products->isEmpty())
            <div class="text-center py-5 bg-white rounded-3 shadow-sm">
                <i class="bi bi-lightning text-muted mb-3 d-block" style="font-size: 3rem;"></i>
                <h4 class="text-muted fw-bold">No Active Offers</h4>
                <p class="text-muted">There are no discounted products running on Flash Sale at the moment. Please check back later!</p>
                <a href="{{ route('home') }}" class="btn btn-primary px-4 py-2 mt-2 rounded-pill fw-semibold">Back to Home</a>
            </div>
        @else
            <!-- Products Grid -->
            <div class="row g-3" id="productGrid">
                @foreach($products as $product)
                    @include('frontend.partials.product_card', ['product' => $product])
                @endforeach
            </div>

            <!-- Pagination -->
            @if($products->hasMorePages())
                <div class="d-flex justify-content-center mt-5">
                    <button class="btn px-4 py-2 rounded-pill fw-semibold text-white" style="background-color: var(--green);" id="loadMoreBtn" data-page="2">Load More Products</button>
                </div>
            @endif
        @endif
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreBtn = document.getElementById('loadMoreBtn');
        if (loadMoreBtn) {
            loadMoreBtn.addEventListener('click', function() {
                const btn = this;
                const page = btn.getAttribute('data-page');
                const originalText = btn.innerHTML;
                
                btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading...';
                btn.disabled = true;

                fetch(`{{ url()->current() }}?page=${page}`, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    const grid = document.getElementById('productGrid');
                    grid.insertAdjacentHTML('beforeend', data.html);
                    
                    if (data.hasMore) {
                        btn.setAttribute('data-page', parseInt(page) + 1);
                        btn.innerHTML = originalText;
                        btn.disabled = false;
                    } else {
                        btn.parentElement.remove();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                });
            });
        }
    });
</script>
@endpush
