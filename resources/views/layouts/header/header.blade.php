@php
    $company = \App\Models\HomepageSetting::get('company_settings', []);
@endphp
<!-- ================= HEADER ================= -->
<header class="site-header" id="siteHeader">
    <div class="topbar">
        <div class="topbar-inner">
            <div class="topbar-info" style="display: flex; gap: 20px; align-items: center; flex-wrap: wrap;">
                <span class="topbar-item topbar-location">
                    <svg class="icon-sm" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M12 21s7-6.2 7-11.5A7 7 0 1 0 5 9.5C5 14.8 12 21 12 21Z" stroke="currentColor"
                            stroke-width="1.6" />
                        <circle cx="12" cy="9.5" r="2.4" stroke="currentColor" stroke-width="1.6" />
                    </svg>
                    {{ $company['address'] ?? 'ঢাকা, বাংলাদেশ' }}
                </span>
                <span class="topbar-item">
                    <svg class="icon-sm" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="width:14px;height:14px;">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="currentColor" stroke-width="1.6" />
                        <path d="M22 6l-10 7L2 6" stroke="currentColor" stroke-width="1.6" />
                    </svg>
                    {{ $company['email'] ?? 'support@ecohaat.com' }}
                </span>
                <span class="topbar-item">
                    <svg class="icon-sm" viewBox="0 0 24 24" fill="none" aria-hidden="true" style="width:14px;height:14px;">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="currentColor" stroke-width="1.6" />
                    </svg>
                    {{ $company['phone'] ?? '+৮৮০ ১XXX-XXXXXX' }}
                </span>
            </div>
            <nav class="topbar-links" aria-label="অ্যাকাউন্ট মেনু">
                @if(auth('admin')->check())
                    <a href="{{ route('admin.dashboard') }}" class="topbar-link">অ্যাডমিন প্যানেল</a>
                    <form id="logout-form-admin" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="#" class="topbar-link" onclick="event.preventDefault(); document.getElementById('logout-form-admin').submit();">লগআউট</a>
                @elseif(auth('web')->check())
                    <a href="{{ route('user.dashboard') }}" class="topbar-link">মাই অ্যাকাউন্ট</a>
                    <form id="logout-form" action="{{ route('user.logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a href="#" class="topbar-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">লগআউট</a>
                @else
                    <a href="{{ route('user.login') }}" class="topbar-link">লগইন</a>
                    <a href="{{ route('user.register') }}" class="topbar-link">রেজিস্টার</a>
                @endif
                <a href="#footer">সহায়তা</a>
                <a href="#story">আমাদের সম্পর্কে</a>
            </nav>
        </div>
    </div>

    <div class="main-header">
        <div class="main-header-inner">
            <button class="hamburger" id="hamburgerBtn" aria-label="মেনু খুলুন" aria-expanded="false">
                <span></span><span></span><span></span>
            </button>

            <a href="{{ route('home') }}" class="logo" aria-label="EcoHaat হোম">
                <span class="logo-mark" aria-hidden="true">
                    <svg viewBox="0 0 40 40" fill="none">
                        <path d="M20 4C11 9 6 16 6 23a14 14 0 0 0 28 0c0-7-5-14-14-19Z" stroke="currentColor"
                            stroke-width="2" />
                        <path d="M20 12v22M20 12c-5 3-8 7-8 11M20 12c5 3 8 7 8 11" stroke="currentColor"
                            stroke-width="1.4" />
                    </svg>
                </span>
                <span class="logo-text">Eco<em>Haat</em></span>
            </a>

            <nav class="main-nav" id="mainNav" aria-label="প্রধান মেনু">
                <ul>
                    <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ route('shop') }}" class="{{ request()->routeIs('shop') ? 'active' : '' }}">Shop</a></li>
                    <li>
                        <a href="{{ route('flash-sale') }}" class="nav-offer {{ request()->routeIs('flash-sale') ? 'active' : '' }}">
                            <i class="bi bi-lightning-fill"></i> Flash Sale
                            <span class="badge bg-danger ms-1" style="font-size: 0.7em; padding: 4px 6px;">50% OFF</span>
                        </a>
                    </li>
                    <li><a href="{{ route('blogs.index') }}" class="{{ request()->routeIs('blogs.index') ? 'active' : '' }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
            </nav>

            <div class="header-search" role="search">
                <input type="search" id="searchInput" placeholder="পণ্য, ক্যাটাগরি খুঁজুন..." aria-label="পণ্য খুঁজুন"
                    autocomplete="off">
                <button class="search-btn" id="searchBtn" aria-label="খুঁজুন">
                    <svg class="icon" viewBox="0 0 24 24" fill="none">
                        <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8" />
                        <path d="m21 21-4.3-4.3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </button>
                <div class="search-results" id="searchResults" hidden></div>
            </div>

            <div class="header-actions">
                <button class="icon-btn mobile-search-toggle" id="mobileSearchToggle" aria-label="খুঁজুন">
                    <svg class="icon" viewBox="0 0 24 24" fill="none">
                        <circle cx="11" cy="11" r="7" stroke="currentColor" stroke-width="1.8" />
                        <path d="m21 21-4.3-4.3" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
                    </svg>
                </button>
                <button class="icon-btn" id="wishlistBtn" aria-label="পছন্দ তালিকা">
                    <svg class="icon" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M12 20.5s-7.5-4.7-9.8-9.4C.6 7.6 2.3 4 6 4c2.1 0 3.6 1.1 4.5 2.4.3.4.9.4 1.2 0C12.6 5.1 14.1 4 16.2 4c3.7 0 5.4 3.6 3.8 7.1C17.5 15.8 12 20.5 12 20.5Z"
                            stroke="currentColor" stroke-width="1.7" />
                    </svg>
                    <span class="badge" id="wishlistCount" hidden>0</span>
                </button>
                @if(auth('admin')->check() || auth('web')->check())
                    @php
                        $is_admin = auth('admin')->check();
                        $dash_route = $is_admin ? route('admin.dashboard') : route('user.dashboard');
                        $logout_route = $is_admin ? route('admin.logout') : route('user.logout');
                        $dash_text = $is_admin ? 'অ্যাডমিন প্যানেল' : 'ড্যাশবোর্ড';
                        $form_id = $is_admin ? 'logout-form-icon-admin' : 'logout-form-icon-user';
                    @endphp
                    <div class="account-dropdown-wrapper" style="position: relative; display: inline-block;">
                        <a href="javascript:void(0);" class="icon-btn" id="accountBtn" aria-label="অ্যাকাউন্ট" onclick="document.getElementById('accDropdown').classList.toggle('show');">
                            <svg class="icon" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="8" r="3.6" stroke="currentColor" stroke-width="1.7" />
                                <path d="M4.5 20c1.4-3.6 4.4-5.6 7.5-5.6s6.1 2 7.5 5.6" stroke="currentColor"
                                    stroke-width="1.7" stroke-linecap="round" />
                            </svg>
                        </a>
                        <div id="accDropdown" class="account-dropdown-menu" style="display: none; position: absolute; right: 0; top: 100%; min-width: 150px; background: #fff; border: 1px solid #ddd; border-radius: 4px; padding: 5px 0; z-index: 1000; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                            <a href="{{ $dash_route }}" style="display: block; padding: 10px 16px; color: #333; text-decoration: none; border-bottom: 1px solid #f1f1f1; font-size: 15px; text-align: left;">{{ $dash_text }}</a>
                            <form id="{{ $form_id }}" action="{{ $logout_route }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a href="#" onclick="event.preventDefault(); document.getElementById('{{ $form_id }}').submit();" style="display: block; padding: 10px 16px; color: #d9534f; text-decoration: none; font-size: 15px; text-align: left;">লগআউট</a>
                        </div>
                        <style>
                            .account-dropdown-menu.show { display: block !important; }
                            .account-dropdown-menu a:hover { background-color: #f8f9fa !important; }
                        </style>
                        <script>
                            document.addEventListener('click', function(e) {
                                var dropdown = document.getElementById('accDropdown');
                                var btn = document.getElementById('accountBtn');
                                if (dropdown && btn && !dropdown.contains(e.target) && !btn.contains(e.target)) {
                                    dropdown.classList.remove('show');
                                }
                            });
                        </script>
                    </div>
                @else
                    <a href="{{ route('user.login') }}" class="icon-btn" id="accountBtn" aria-label="অ্যাকাউন্ট">
                        <svg class="icon" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="8" r="3.6" stroke="currentColor" stroke-width="1.7" />
                            <path d="M4.5 20c1.4-3.6 4.4-5.6 7.5-5.6s6.1 2 7.5 5.6" stroke="currentColor"
                                stroke-width="1.7" stroke-linecap="round" />
                        </svg>
                    </a>
                @endif
                <button class="icon-btn cart-btn" id="cartBtn" aria-label="কার্ট">
                    <svg class="icon" viewBox="0 0 24 24" fill="none">
                        <path d="M3 4h2l2.2 11.4a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 8H6.4" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="10" cy="20.5" r="1.4" fill="currentColor" />
                        <circle cx="17.5" cy="20.5" r="1.4" fill="currentColor" />
                    </svg>
                    <span class="badge" id="cartCount" hidden>0</span>
                </button>
            </div>
        </div>

        <div class="mobile-search-bar" id="mobileSearchBar" hidden>
            <input type="search" id="mobileSearchInput" placeholder="পণ্য খুঁজুন..." aria-label="পণ্য খুঁজুন">
        </div>
    </div>
</header>

<div class="nav-overlay" id="navOverlay"></div>
