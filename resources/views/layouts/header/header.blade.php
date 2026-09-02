<!-- ================= HEADER ================= -->
<header class="site-header" id="siteHeader">
    <div class="topbar">
        <div class="topbar-inner">
            <span class="topbar-item topbar-location">
                <svg class="icon-sm" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M12 21s7-6.2 7-11.5A7 7 0 1 0 5 9.5C5 14.8 12 21 12 21Z" stroke="currentColor"
                        stroke-width="1.6" />
                    <circle cx="12" cy="9.5" r="2.4" stroke="currentColor" stroke-width="1.6" />
                </svg>
                ঢাকা, বাংলাদেশ
            </span>
            <nav class="topbar-links" aria-label="অ্যাকাউন্ট মেনু">
                <a href="#" class="topbar-link" data-modal="loginModal">লগইন</a>
                <a href="#" class="topbar-link" data-modal="loginModal">রেজিস্টার</a>
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
                <button class="icon-btn" id="accountBtn" aria-label="অ্যাকাউন্ট" data-modal="loginModal">
                    <svg class="icon" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="8" r="3.6" stroke="currentColor" stroke-width="1.7" />
                        <path d="M4.5 20c1.4-3.6 4.4-5.6 7.5-5.6s6.1 2 7.5 5.6" stroke="currentColor"
                            stroke-width="1.7" stroke-linecap="round" />
                    </svg>
                </button>
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
