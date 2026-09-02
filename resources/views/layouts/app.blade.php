<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>EcoHaat — বাংলার হাতে তৈরি ঐতিহ্য</title>
<meta name="description" content="EcoHaat — বাংলাদেশের কারিগরদের হাতে তৈরি জামদানি, নকশি কাঁথা, মাটির পণ্য, পাট ও বাঁশের কারুশিল্প।">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&family=Tiro+Bangla&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
@stack('styles')
<link rel="stylesheet" href="{{ asset('frontend/css/ecohaat.css') }}?v={{ time() }}">
</head>
<body>

@include('layouts.header.header')

<main>
    @yield('content')
</main>

<!-- ================= FOOTER ================= -->
<footer class="site-footer" id="footer">
  <div class="container footer-grid">
    <div class="footer-col footer-brand">
      <a href="{{ route('home') }}" class="logo logo--footer">
        <span class="logo-mark" aria-hidden="true">
          <svg viewBox="0 0 40 40" fill="none"><path d="M20 4C11 9 6 16 6 23a14 14 0 0 0 28 0c0-7-5-14-14-19Z" stroke="currentColor" stroke-width="2"/><path d="M20 12v22M20 12c-5 3-8 7-8 11M20 12c5 3 8 7 8 11" stroke="currentColor" stroke-width="1.4"/></svg>
        </span>
        <span class="logo-text">Eco<em>Haat</em></span>
      </a>
      <p>বাংলাদেশের কারিগরদের হাতে তৈরি ঐতিহ্যবাহী ও পরিবেশবান্ধব পণ্যের বিশ্বস্ত মার্কেটপ্লেস।</p>
      <div class="social-icons">
        <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none"><path d="M14 9h3V6h-3c-1.7 0-3 1.3-3 3v2H9v3h2v6h3v-6h2.5l.5-3H14V9.5c0-.3.2-.5.5-.5Z" stroke="currentColor" stroke-width="1.5"/></svg></a>
        <a href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="3.5" width="17" height="17" rx="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="3.6" stroke="currentColor" stroke-width="1.5"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor"/></svg></a>
        <a href="#" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none"><rect x="3" y="6" width="18" height="12" rx="3" stroke="currentColor" stroke-width="1.5"/><path d="m10.5 9.5 4.5 2.5-4.5 2.5v-5Z" fill="currentColor"/></svg></a>
      </div>
    </div>
    <div class="footer-col">
      <h3>EcoHaat</h3>
      <ul>
        <li><a href="#story">আমাদের সম্পর্কে</a></li>
        <li><a href="#story">কারিগরের গল্প</a></li>
        <li><a href="#footer">যোগাযোগ</a></li>
        <li><a href="#">ক্যারিয়ার</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>কাস্টমার সার্ভিস</h3>
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">ডেলিভারি</a></li>
        <li><a href="#">রিটার্ন পলিসি</a></li>
        <li><a href="#">পেমেন্ট</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>ক্যাটাগরি</h3>
      <ul>
        <li><a href="#" data-filter="শাড়ি">জামদানি</a></li>
        <li><a href="#" data-filter="হস্তশিল্প">হস্তশিল্প</a></li>
        <li><a href="#" data-filter="পাট">পাটজাত পণ্য</a></li>
        <li><a href="#" data-filter="মাটির পণ্য">মাটির পণ্য</a></li>
        <li><a href="#" data-filter="গয়না">গয়না</a></li>
      </ul>
    </div>
    <div class="footer-col">
      <h3>যোগাযোগ</h3>
      <ul class="footer-contact">
        <li>ঢাকা, বাংলাদেশ</li>
        <li>+৮৮০ ১XXX-XXXXXX</li>
        <li>support@ecohaat.com</li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© {{ date('Y') }} EcoHaat. সর্বস্বত্ব সংরক্ষিত।</p>
  </div>
</footer>

<!-- ================= MOBILE BOTTOM NAV ================= -->
<nav class="mobile-bottom-nav" aria-label="মোবাইল মেনু">
  <a href="#home" class="active">
    <svg viewBox="0 0 24 24" fill="none"><path d="M4 11.5 12 4l8 7.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 10v9h12v-9" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
    <span>হোম</span>
  </a>
  <a href="#products">
    <svg viewBox="0 0 24 24" fill="none"><rect x="3.5" y="3.5" width="17" height="17" rx="4" stroke="currentColor" stroke-width="1.7"/><path d="M8 8h8M8 12h8M8 16h5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg>
    <span>শপ</span>
  </a>
  <a href="#" id="bottomWishlist">
    <svg viewBox="0 0 24 24" fill="none"><path d="M12 20.5s-7.5-4.7-9.8-9.4C.6 7.6 2.3 4 6 4c2.1 0 3.6 1.1 4.5 2.4.3.4.9.4 1.2 0C12.6 5.1 14.1 4 16.2 4c3.7 0 5.4 3.6 3.8 7.1C17.5 15.8 12 20.5 12 20.5Z" stroke="currentColor" stroke-width="1.7"/></svg>
    <span>পছন্দ</span>
  </a>
  <a href="#" id="bottomCart">
    <svg viewBox="0 0 24 24" fill="none"><path d="M3 4h2l2.2 11.4a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 8H6.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><circle cx="10" cy="20.5" r="1.4" fill="currentColor"/><circle cx="17.5" cy="20.5" r="1.4" fill="currentColor"/></svg>
    <span>কার্ট</span>
  </a>
</nav>

<!-- ================= CART DRAWER ================= -->
<div class="drawer-overlay" id="drawerOverlay"></div>
<aside class="cart-drawer" id="cartDrawer" aria-label="শপিং কার্ট" aria-hidden="true">
  <div class="drawer-header">
    <h3>আপনার কার্ট</h3>
    <button class="icon-btn close-btn" id="closeCartBtn" aria-label="বন্ধ করুন">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="cartItems"></div>
  <div class="drawer-footer" id="cartFooter">
    <div class="cart-line"><span>সাবটোটাল</span><span id="cartSubtotal">৳০</span></div>
    <div class="cart-line"><span>ডেলিভারি চার্জ</span><span id="cartDelivery">৳৬০</span></div>
    <div class="cart-line cart-total"><span>মোট</span><span id="cartTotal">৳০</span></div>
    <button class="btn btn-outline btn-block" id="viewCartBtn">কার্ট দেখুন</button>
    <button class="btn btn-primary btn-block" id="checkoutBtn">চেকআউট করুন</button>
  </div>
</aside>

<!-- ================= WISHLIST DRAWER ================= -->
<aside class="cart-drawer wishlist-drawer" id="wishlistDrawer" aria-label="পছন্দের তালিকা" aria-hidden="true">
  <div class="drawer-header">
    <h3>পছন্দের তালিকা</h3>
    <button class="icon-btn close-btn" id="closeWishlistBtn" aria-label="বন্ধ করুন">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
  </div>
  <div class="drawer-body" id="wishlistItems"></div>
</aside>

<!-- ================= QUICK VIEW MODAL ================= -->
<div class="modal-overlay" id="quickViewOverlay">
  <div class="modal quick-view-modal" role="dialog" aria-modal="true" aria-labelledby="qvTitle">
    <button class="icon-btn close-btn modal-close" id="closeQuickView" aria-label="বন্ধ করুন">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
    <div class="qv-grid" id="quickViewBody"></div>
  </div>
</div>

<!-- ================= CHECKOUT MODAL ================= -->
<div class="modal-overlay" id="checkoutOverlay">
  <div class="modal checkout-modal" role="dialog" aria-modal="true" aria-labelledby="checkoutTitle">
    <button class="icon-btn close-btn modal-close" id="closeCheckout" aria-label="বন্ধ করুন">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
    <div id="checkoutBody">
      <h3 id="checkoutTitle">চেকআউট</h3>
      <div class="checkout-grid">
        <form id="checkoutForm" class="checkout-form" novalidate>
          <label>পুরো নাম
            <input type="text" name="fullName" required placeholder="আপনার নাম লিখুন">
          </label>
          <label>ফোন নম্বর
            <input type="tel" name="phone" required placeholder="01XXXXXXXXX" pattern="^01[0-9]{9}$">
          </label>
          <label>ইমেইল
            <input type="email" name="email" placeholder="আপনার ইমেইল (ঐচ্ছিক)">
          </label>
          <label>ঠিকানা
            <input type="text" name="address" required placeholder="বাসা, রোড, এলাকা">
          </label>
          <div class="form-row">
            <label>জেলা
              <input type="text" name="district" required placeholder="যেমন: ঢাকা">
            </label>
            <label>ডেলিভারি এলাকা
              <select name="deliveryArea">
                <option value="inside">ঢাকার ভিতরে (৳৬০)</option>
                <option value="outside">ঢাকার বাইরে (৳১২০)</option>
              </select>
            </label>
          </div>
          <fieldset class="payment-methods">
            <legend>পেমেন্ট পদ্ধতি</legend>
            <label class="payment-option"><input type="radio" name="payment" value="cod" checked><span>ক্যাশ অন ডেলিভারি</span></label>
            <label class="payment-option"><input type="radio" name="payment" value="bkash"><span>bKash</span></label>
            <label class="payment-option"><input type="radio" name="payment" value="nagad"><span>Nagad</span></label>
            <label class="payment-option"><input type="radio" name="payment" value="card"><span>কার্ড</span></label>
          </fieldset>
          <button type="submit" class="btn btn-primary btn-block">অর্ডার নিশ্চিত করুন</button>
        </form>
        <div class="order-summary">
          <h4>অর্ডার সামারি</h4>
          <div id="checkoutItems" class="checkout-items"></div>
          <div class="cart-line"><span>সাবটোটাল</span><span id="checkoutSubtotal">৳০</span></div>
          <div class="cart-line"><span>ডেলিভারি</span><span id="checkoutDelivery">৳৬০</span></div>
          <div class="cart-line cart-total"><span>মোট</span><span id="checkoutTotal">৳০</span></div>
        </div>
      </div>
    </div>
    <div id="orderSuccess" class="order-success" hidden>
      <svg class="success-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/><path d="m8 12.5 2.5 2.5L16 9.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
      <h3>আপনার অর্ডার সফলভাবে গ্রহণ করা হয়েছে!</h3>
      <p>অর্ডার আইডি: <strong id="orderIdText"></strong></p>
      <p class="order-note">এটি একটি ফ্রন্ট-এন্ড ডেমো। প্রকৃত পেমেন্ট প্রসেস করা হয়নি।</p>
      <button class="btn btn-primary" id="closeSuccessBtn">শপিং চালিয়ে যান</button>
    </div>
  </div>
</div>

<!-- ================= LOGIN MODAL (front-end demo) ================= -->
<div class="modal-overlay" id="loginOverlay">
  <div class="modal login-modal" role="dialog" aria-modal="true" aria-labelledby="loginTitle">
    <button class="icon-btn close-btn modal-close" id="closeLogin" aria-label="বন্ধ করুন">
      <svg viewBox="0 0 24 24" fill="none"><path d="M6 6l12 12M18 6 6 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg>
    </button>
    <h3 id="loginTitle">EcoHaat-এ স্বাগতম</h3>
    <p class="login-sub">এটি একটি ফ্রন্ট-এন্ড ডেমো — লগইন সংযুক্ত নয়।</p>
    <form id="loginForm">
      <label>মোবাইল নম্বর বা ইমেইল
        <input type="text" required placeholder="01XXXXXXXXX">
      </label>
      <label>পাসওয়ার্ড
        <input type="password" required placeholder="••••••••">
      </label>
      <button type="submit" class="btn btn-primary btn-block">লগইন করুন</button>
    </form>
  </div>
</div>

<!-- ================= TOAST ================= -->
<div class="toast-container" id="toastContainer" aria-live="polite"></div>

@stack('scripts')
<script src="{{ asset('frontend/js/ecohaat.js') }}?v={{ time() }}"></script>
</body>
</html>
