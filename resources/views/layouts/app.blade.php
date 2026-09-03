<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>EcoHaat — Handcrafted Traditions</title>
<meta name="description" content="Handcrafted Jamdani, Nakshi Kantha, Pottery, Jute & Bamboo crafts by Bangladeshi artisans.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Tiro+Bangla&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
@stack('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/ecohaat.css') }}?v={{ time() }}">
</head>
<body>

@include('layouts.header.header')

<main>
    @yield('content')
</main>

@php
  $company = \App\Models\HomepageSetting::get('company_settings', []);
  $footerCategories = \App\Models\Category::where('is_active', true)->take(5)->get();
@endphp
<footer class="site-footer" id="footer">
  <div class="container footer-grid">
    <div class="footer-col footer-brand">
      <a href="{{ url('/') }}" class="logo logo--footer">
        @if(!empty($company['logo']))
          <img src="{{ asset('storage/' . $company['logo']) }}" alt="{{ $company['site_name'] ?? 'EcoHaat' }}" style="height: 40px; margin-bottom: 10px;">
        @else
          <span class="logo-mark" aria-hidden="true">
            <svg viewBox="0 0 40 40" fill="none"><path d="M20 4C11 9 6 16 6 23a14 14 0 0 0 28 0c0-7-5-14-14-19Z" stroke="currentColor" stroke-width="2"/><path d="M20 12v22M20 12c-5 3-8 7-8 11M20 12c5 3 8 7 8 11" stroke="currentColor" stroke-width="1.4"/></svg>
          </span>
          <span class="logo-text">{{ $company['site_name'] ?? 'EcoHaat' }}</span>
        @endif
      </a>
      <p>A trusted marketplace for traditional and eco-friendly products handcrafted by artisans of Bangladesh.</p>
      <div class="social-icons">
        @if(!empty($company['facebook']))
          <a href="{{ $company['facebook'] }}" target="_blank" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none"><path d="M14 9h3V6h-3c-1.7 0-3 1.3-3 3v2H9v3h2v6h3v-6h2.5l.5-3H14V9.5c0-.3.2-.5.5-.5Z" stroke="currentColor" stroke-width="1.5"/></svg></a>
        @else
          <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none"><path d="M14 9h3V6h-3c-1.7 0-3 1.3-3 3v2H9v3h2v6h3v-6h2.5l.5-3H14V9.5c0-.3.2-.5.5-.5Z" stroke="currentColor" stroke-width="1.5"/></svg></a>
        @endif
        @if(!empty($company['instagram']))
          <a href="{{ $company['instagram'] }}" target="_blank" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="3.5" width="17" height="17" rx="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="3.6" stroke="currentColor" stroke-width="1.5"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></svg></a>
        @else
          <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="3.5" width="17" height="17" rx="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="3.6" stroke="currentColor" stroke-width="1.5"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></svg></a>
        @endif
        @if(!empty($company['youtube']))
          <a href="{{ $company['youtube'] }}" target="_blank" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.5"/><path d="m10.5 9.5 4.5 2.5-4.5 2.5v-5Z" fill="currentColor"/></svg></a>
        @else
          <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.5"/><path d="m10.5 9.5 4.5 2.5-4.5 2.5v-5Z" fill="currentColor"/></svg></a>
        @endif
      </div>
    </div>
    <div class="footer-col">
      <h3>{{ $company['site_name'] ?? 'EcoHaat' }}</h3>
      <ul>
        <li><a href="#story">About Us</a></li>
        <li><a href="#story">Artisan Stories</a></li>
        <li><a href="#footer">Contact</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>Customer Service</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Delivery</a></li>
        <li><a href="#">Return Policy</a></li>
        <li><a href="#">Payment</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>Categories</h3>
      <ul>
        @forelse($footerCategories as $cat)
          <li><a href="{{ url('/shop') }}?category={{ urlencode($cat->name) }}">{{ $cat->name }}</a></li>
        @empty
          <li><a href="#" data-filter="শাড়ি">Jamdani</a></li>
          <li><a href="#" data-filter="হস্তশিল্প">Handicrafts</a></li>
          <li><a href="#" data-filter="পাট">Jute Products</a></li>
          <li><a href="#" data-filter="মাটির পণ্য">Pottery</a></li>
          <li><a href="#" data-filter="গয়না">Jewelry</a></li>
        @endforelse
      </ul>
    </div>
    <div class="footer-col">
      <h3>Contact</h3>
      <ul class="footer-contact">
        <li>{{ $company['address'] ?? 'Dhaka, Bangladesh' }}</li>
        <li>{{ $company['phone'] ?? '+৮৮০ ১XXX-XXXXXX' }}</li>
        <li>{{ $company['email'] ?? 'support@ecohaat.com' }}</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© {{ date('Y') }} {{ $company['site_name'] ?? 'EcoHaat' }}. All rights reserved.</p>
  </div>
</footer>

<!-- ================= MOBILE BOTTOM NAV ================= -->
<nav class="mobile-bottom-nav" aria-label="Mobile Menu">
  <a href="#home" class="active">
    <svg viewBox="0 0 24 24" fill="none"><path d="M4 11.5 12 4l8 7.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 10v9h12v-9" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
    <span>Home</span>
  </a>
  <a href="#products">
    <svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="3.5" width="17" height="17" rx="4" stroke="currentColor" stroke-width="1.7"/><path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
    <span>Shop</span>
  </a>
  <a href="#" id="bottomWishlist">
    <svg viewBox="0 0 24 24" fill="none"><path d="M12 20.5s-7.5-4.7-9.8-9.4C.6 7.6 2.3 4 6 4c2.1 0 3.6 1.1 4.5 2.4.3.4.9.4 1.2 0C12.6 5.1 14.1 4 16.2 4c3.7 0 5.4 3.6 3.8 7.1C17.5 15.8 12 20.5 12 20.5Z" stroke="currentColor" stroke-width="1.7"/></svg>
    <span>Wishlist</span>
  </a>
  <a href="#" id="bottomCart">
    <svg viewBox="0 0 24 24" fill="none"><path d="M3 4h2l2.2 11.4a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 8H6.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><circle cx="10" cy="20.5" r="1.4" fill="currentColor"/><circle cx="17.5" cy="20.5" r="1.4" fill="currentColor"/></svg>
    <span>Cart</span>
  </a>
</nav>

<!-- ================= CART DRAWER ================= -->
<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="cart-drawer" id="cartDrawer" aria-label="Shopping Cart" aria-hidden="true">
  <div class="drawer-header">
    <h3>Your Cart</h3>
    <button class="icon-btn close-btn" id="closeCartBtn" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="cartItems"></div>
  <div class="drawer-footer" id="cartFooter">
    <div class="cart-line"><span>Subtotal</span><span id="cartSubtotal">৳০</span></div>
    <div class="cart-line"><span>Delivery Charge</span><span id="cartDelivery">৳৬০</span></div>
    <div class="cart-line cart-total"><span>Total</span><span id="cartTotal">৳০</span></div>
    <button class="btn btn-outline btn-block" id="viewCartBtn">View Cart</button>
    <button class="btn btn-primary btn-block" id="checkoutBtn">Checkout</button>
  </div>
</aside>

<!-- ================= WISHLIST DRAWER ================= -->
<aside class="cart-drawer wishlist-drawer" id="wishlistDrawer" aria-label="Wishlist" aria-hidden="true">
  <div class="drawer-header">
    <h3>Wishlist</h3>
    <button class="icon-btn close-btn" id="closeWishlistBtn" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="wishlistItems"></div>
</aside>

<!-- ================= QUICK VIEW MODAL ================= -->
<div class="modal-overlay" id="quickViewOverlay">
  <div class="modal quick-view-modal" role="dialog" aria-modal="true" aria-labelledby="qvTitle">
    <button class="icon-btn close-btn modal-close" id="closeQuickView" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
    <div class="qv-grid" id="quickViewBody"></div>
  </div>
</div>

<!-- ================= CHECKOUT MODAL ================= -->
<div class="modal-overlay" id="checkoutOverlay">
  <div class="modal checkout-modal" role="dialog" aria-modal="true" aria-labelledby="checkoutTitle">
    <button class="icon-btn close-btn modal-close" id="closeCheckout" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
    <div id="checkoutBody">
      <h3 id="checkoutTitle">Checkout</h3>
      <div class="checkout-grid">
        <form id="checkoutForm" class="checkout-form" novalidate>
          <label>Full Name
            <input type="text" name="fullName" required placeholder="Enter your name">
          </label>
          <label>Phone Number
            <input type="tel" name="phone" required placeholder="01XXXXXXXXX" pattern="^01[0-9]{9}$">
          </label>
          <label>Email
            <input type="email" name="email" placeholder="Your Email (Optional)">
          </label>
          <label>Address
            <input type="text" name="address" required placeholder="House, Road, Area">
          </label>
          <div class="form-row">
            <label>District
              <input type="text" name="district" required placeholder="e.g. Dhaka">
            </label>
            <label>Delivery Area
              <select name="deliveryArea">
                <option value="inside">Inside Dhaka (৳60)</option>
                <option value="outside">Outside Dhaka (৳120)</option>
              </select>
            </label>
          </div>
          <fieldset class="payment-methods">
            <legend>Payment Method</legend>
            <label class="payment-option"><input type="radio" name="payment" value="cod" checked><span>Cash on Delivery</span></label>
            <label class="payment-option"><input type="radio" name="payment" value="bkash"><span>bKash</span></label>
            <label class="payment-option"><input type="radio" name="payment" value="nagad"><span>Nagad</span></label>
            <label class="payment-option"><input type="radio" name="payment" value="card"><span>Card</span></label>
          </fieldset>
          <button type="submit" class="btn btn-primary btn-block">Confirm Order</button>
        </form>
        <div class="order-summary">
          <h4>Order Summary</h4>
          <div id="checkoutItems" class="checkout-items"></div>
          <div class="cart-line"><span>Subtotal</span><span id="checkoutSubtotal">৳0</span></div>
          <div class="cart-line"><span>Delivery</span><span id="checkoutDelivery">৳60</span></div>
          <div class="cart-line cart-total"><span>Total</span><span id="checkoutTotal">৳0</span></div>
        </div>
      </div>
    </div>
    <div id="orderSuccess" class="order-success" hidden>
      <svg class="success-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/><path d="m8 12.5 2.5 2.5L16 9.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <h3>Your order has been received successfully!</h3>
      <p>Order ID: <strong id="orderIdText"></strong></p>
      <p class="order-note">This is a front-end demo. Actual payment is not processed.</p>
      <button class="btn btn-primary" id="closeSuccessBtn">Continue Shopping</button>
    </div>
  </div>
</div>

<!-- ================= LOGIN MODAL (front-end demo) ================= -->
<div class="modal-overlay" id="loginOverlay">
  <div class="modal login-modal" role="dialog" aria-modal="true" aria-labelledby="loginTitle">
    <button class="icon-btn close-btn modal-close" id="closeLogin" aria-label="Close">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
    <h3 id="loginTitle">Welcome to EcoHaat</h3>
    <p class="login-sub">This is a front-end demo — login is not connected.</p>
    <form id="loginForm">
      <label>Mobile Number or Email
        <input type="text" required placeholder="01XXXXXXXXX">
      </label>
      <label>Password
        <input type="password" required placeholder="••••••••">
      </label>
      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>
  </div>
</div>

<!-- ================= TOAST ================= -->
<div class="toast-container" id="toastContainer" aria-live="polite"></div>

@stack('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('frontend/js/ecohaat.js') }}?v={{ time() }}"></script>
</body>
</html>
