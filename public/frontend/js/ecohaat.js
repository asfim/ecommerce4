/* =========================================================
   ECOHAAT — DATA
   ========================================================= */
let PRODUCTS = window.PRODUCTS || [
  { id: 1, name: "হ্যান্ডলুম জামদানি শাড়ি", category: "শাড়ি", price: 4500, oldPrice: 6200, rating: 4.8, reviews: 132, image: "https://images.unsplash.com/photo-1610030181087-540f1495ea89?auto=format&fit=crop&w=600&q=80", desc: "খাঁটি সুতি সুতায় হাতে বোনা ঐতিহ্যবাহী জামদানি শাড়ি, বিশেষ অনুষ্ঠানের জন্য উপযুক্ত।" },
  { id: 2, name: "নকশি কাঁথা - রাজকীয় নকশা", category: "হস্তশিল্প", price: 2800, oldPrice: 3500, rating: 4.9, reviews: 98, image: "https://images.unsplash.com/photo-1621243804936-775306a8f2e3?auto=format&fit=crop&w=600&q=80", desc: "গ্রামীণ শিল্পীদের হাতে সেলাই করা ঐতিহ্যবাহী নকশি কাঁথা, ঘর সাজাতে বা উপহার দিতে আদর্শ।" },
  { id: 3, name: "হাতের তৈরি মাটির ফুলদানি", category: "মাটির পণ্য", price: 950, oldPrice: 1300, rating: 4.6, reviews: 64, image: "https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=600&q=80", desc: "কুমারের চাকায় হাতে তৈরি মাটির ফুলদানি, প্রাকৃতিক রঙে চূড়ান্ত করা।" },
  { id: 4, name: "জুট হ্যান্ডব্যাগ - প্রিমিয়াম", category: "পাট", price: 1250, oldPrice: 1600, rating: 4.7, reviews: 210, image: "https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=600&q=80", desc: "টেকসই পাট দিয়ে তৈরি স্টাইলিশ হ্যান্ডব্যাগ, দৈনন্দিন ব্যবহারের জন্য উপযুক্ত।" },
  { id: 5, name: "বাঁশের ঝুড়ি সেট (৩ পিস)", category: "হস্তশিল্প", price: 1100, oldPrice: 1450, rating: 4.5, reviews: 57, image: "https://images.unsplash.com/photo-1610701596061-2ecf227e85b2?auto=format&fit=crop&w=600&q=80", desc: "ঘর গোছানোর জন্য হালকা ও টেকসই বাঁশের ঝুড়ির সেট।" },
  { id: 6, name: "হ্যান্ডমেড কাঠের শোপিস", category: "ঘর সাজানো", price: 1800, oldPrice: 2400, rating: 4.8, reviews: 45, image: "https://images.unsplash.com/photo-1601924638867-3ec2ba13c94a?auto=format&fit=crop&w=600&q=80", desc: "শিমুল কাঠে হাতে খোদাই করা শৌখিন শোপিস, বসার ঘরের শোভা বাড়াবে।" },
  { id: 7, name: "মাটির চায়ের সেট (৬ কাপ)", category: "মাটির পণ্য", price: 1400, oldPrice: 1800, rating: 4.6, reviews: 88, image: "https://images.unsplash.com/photo-1610701596010-006dcae65fee?auto=format&fit=crop&w=600&q=80", desc: "ঐতিহ্যবাহী মাটির কাপে চা পরিবেশনের অভিজ্ঞতা নিন পরিবার-বন্ধুদের সাথে।" },
  { id: 8, name: "হস্তনির্মিত কানের দুল", category: "গয়না", price: 650, oldPrice: 900, rating: 4.9, reviews: 176, image: "https://images.unsplash.com/photo-1600857062241-98e5dba7f214?auto=format&fit=crop&w=600&q=80", desc: "রূপার তার ও পুঁতি দিয়ে হাতে তৈরি ঐতিহ্যবাহী কানের দুল।" },
  { id: 9, name: "সিল্ক জামদানি শাড়ি - সোনালি পাড়", category: "শাড়ি", price: 6800, oldPrice: 8900, rating: 4.9, reviews: 61, image: "https://images.unsplash.com/photo-1596496181848-3091d4878b24?auto=format&fit=crop&w=600&q=80", desc: "সিল্ক সুতায় বোনা প্রিমিয়াম জামদানি, সোনালি পাড়ের অভিজাত ডিজাইন।" },
  { id: 10, name: "পাটের টেবিল ম্যাট (৪ পিস)", category: "পাট", price: 480, oldPrice: 650, rating: 4.4, reviews: 39, image: "https://images.unsplash.com/photo-1591129841117-3adfd313e34f?auto=format&fit=crop&w=600&q=80", desc: "খাবার টেবিলে পরিবেশবান্ধব ছোঁয়া দিতে হাতে বোনা পাটের ম্যাট।" },
  { id: 11, name: "মাটির টব - সবুজায়নের জন্য", category: "মাটির পণ্য", price: 350, oldPrice: 480, rating: 4.5, reviews: 52, image: "https://images.unsplash.com/photo-1485955900006-10f4d324d411?auto=format&fit=crop&w=600&q=80", desc: "বারান্দা বা বাগানের গাছ লাগানোর জন্য হাতে তৈরি মাটির টব।" },
  { id: 12, name: "রূপার নূপুর - ঐতিহ্যবাহী নকশা", category: "গয়না", price: 1200, oldPrice: 1600, rating: 4.7, reviews: 73, image: "https://images.unsplash.com/photo-1611591437281-460bfbe1220a?auto=format&fit=crop&w=600&q=80", desc: "খাঁটি রূপায় তৈরি চিরায়ত নকশার নূপুর, যেকোনো শাড়ির সাথে মানানসই।" },
  { id: 13, name: "কাঠের গহনার বাক্স", category: "ঘর সাজানো", price: 950, oldPrice: 1250, rating: 4.6, reviews: 34, image: "https://images.unsplash.com/photo-1596205250792-1ff958ba1a8c?auto=format&fit=crop&w=600&q=80", desc: "হাতে খোদাই করা নকশাসহ টেকসই কাঠের গহনার বাক্স।" },
  { id: 14, name: "নকশি কাঁথা - কোলবালিশ কভার", category: "হস্তশিল্প", price: 750, oldPrice: 1000, rating: 4.5, reviews: 41, image: "https://images.unsplash.com/photo-1618220179428-22790b461013?auto=format&fit=crop&w=600&q=80", desc: "নরম কাপড়ে হাতে সেলাই করা নকশি নকশার কোলবালিশ কভার।" },
  { id: 15, name: "বাঁশের ল্যাম্পশেড", category: "ঘর সাজানো", price: 1600, oldPrice: 2100, rating: 4.7, reviews: 29, image: "https://images.unsplash.com/photo-1517705600644-9a5c4b7a5e1a?auto=format&fit=crop&w=600&q=80", desc: "প্রাকৃতিক আলো ছড়ানো হাতে বোনা বাঁশের ল্যাম্পশেড।" },
  { id: 16, name: "সুতি হ্যান্ডলুম শাড়ি - দৈনন্দিন", category: "শাড়ি", price: 1850, oldPrice: 2400, rating: 4.6, reviews: 154, image: "https://images.unsplash.com/photo-1583391733956-6c78276477e2?auto=format&fit=crop&w=600&q=80", desc: "আরামদায়ক সুতি সুতায় হাতে বোনা দৈনন্দিন ব্যবহারের শাড়ি।" }
];

let CATEGORIES = window.CATEGORIES || [
  { name: "জামদানি", filter: "শাড়ি", image: "https://images.unsplash.com/photo-1610030181087-540f1495ea89?auto=format&fit=crop&w=300&q=80" },
  { name: "নকশি কাঁথা", filter: "হস্তশিল্প", image: "https://images.unsplash.com/photo-1621243804936-775306a8f2e3?auto=format&fit=crop&w=300&q=80" },
  { name: "মাটির পণ্য", filter: "মাটির পণ্য", image: "https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&w=300&q=80" },
  { name: "পাটজাত পণ্য", filter: "পাট", image: "https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=300&q=80" },
  { name: "বাঁশের কারুশিল্প", filter: "হস্তশিল্প", image: "https://images.unsplash.com/photo-1610701596061-2ecf227e85b2?auto=format&fit=crop&w=300&q=80" },
  { name: "কাঠের কাজ", filter: "ঘর সাজানো", image: "https://images.unsplash.com/photo-1601924638867-3ec2ba13c94a?auto=format&fit=crop&w=300&q=80" },
  { name: "হস্তনির্মিত গয়না", filter: "গয়না", image: "https://images.unsplash.com/photo-1600857062241-98e5dba7f214?auto=format&fit=crop&w=300&q=80" },
  { name: "ঘর সাজানোর পণ্য", filter: "ঘর সাজানো", image: "https://images.unsplash.com/photo-1596205250792-1ff958ba1a8c?auto=format&fit=crop&w=300&q=80" }
];

let COLLECTIONS = window.COLLECTIONS || [
  { name: "সেরা সংগ্রহ", desc: "সবচেয়ে পছন্দের পণ্যসমূহ", image: "https://images.unsplash.com/photo-1610030181087-540f1495ea89?auto=format&fit=crop&w=500&q=80" },
  { name: "ঐতিহ্যের গল্প", desc: "প্রজন্ম থেকে প্রজন্মে বাহিত শিল্প", image: "https://images.unsplash.com/photo-1596496181848-3091d4878b24?auto=format&fit=crop&w=500&q=80" },
  { name: "কারিগরের হাত", desc: "নিখুঁত হাতের কারুকাজ", image: "https://images.unsplash.com/photo-1595531222252-a12d886d63b0?auto=format&fit=crop&w=500&q=80" },
  { name: "বাংলার রঙ", desc: "রঙিন ঐতিহ্যবাহী বুনন", image: "https://images.unsplash.com/photo-1618221639031-8f0f0dfd0a83?auto=format&fit=crop&w=500&q=80" },
  { name: "প্রকৃতির ছোঁয়া", desc: "পরিবেশবান্ধব উপকরণে তৈরি", image: "https://images.unsplash.com/photo-1610701596061-2ecf227e85b2?auto=format&fit=crop&w=500&q=80" }
];

const WHY_US = [
  { title: "১০০% হ্যান্ডমেড", desc: "প্রতিটি পণ্য কারিগরের হাতে তৈরি, কোনো মেশিন প্রোডাকশন নয়।", icon: "hand" },
  { title: "যাচাইকৃত কারিগর", desc: "আমরা সরাসরি যাচাইকৃত কারিগর পরিবারের সাথে কাজ করি।", icon: "check" },
  { title: "নিরাপদ পেমেন্ট", desc: "ক্যাশ অন ডেলিভারি, bKash, Nagad ও কার্ডে নিরাপদ পেমেন্ট।", icon: "shield" },
  { title: "দ্রুত ডেলিভারি", desc: "সারাদেশে দ্রুত ও নির্ভরযোগ্য হোম ডেলিভারি সুবিধা।", icon: "truck" }
];

const WHY_ICONS = {
  hand: '<svg viewBox="0 0 24 24" fill="none"><path d="M7 11V5.5a1.5 1.5 0 0 1 3 0V11m0-1.5V4a1.5 1.5 0 0 1 3 0v6.5M13 10V5.5a1.5 1.5 0 0 1 3 0V12m0-1c1.2 0 2 .8 2 2v2c0 3.3-2.7 6-6 6h-1c-2.5 0-3.8-.8-5-2l-3-3.3c-.6-.7-.5-1.7.2-2.3.6-.5 1.5-.5 2.1.1L7 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  check: '<svg viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.5"/><path d="m8 12.5 2.5 2.5L16 9.5" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>',
  shield: '<svg viewBox="0 0 24 24" fill="none"><path d="M12 3.5 5 6v5.5c0 5 3 8.3 7 9 4-.7 7-4 7-9V6l-7-2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/></svg>',
  truck: '<svg viewBox="0 0 24 24" fill="none"><path d="M3 7h11v9H3z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><path d="M14 10h4l3 3v3h-7z" stroke="currentColor" stroke-width="1.5" stroke-linejoin="round"/><circle cx="7" cy="18" r="1.6" stroke="currentColor" stroke-width="1.5"/><circle cx="17.5" cy="18" r="1.6" stroke="currentColor" stroke-width="1.5"/></svg>'
};

const TESTIMONIALS = [
  { name: "ফারজানা আক্তার", role: "ঢাকা", rating: 5, text: "জামদানি শাড়িটা হাতে পেয়ে সত্যিই মুগ্ধ হয়েছি। কাপড়ের মান এবং কাজ দুটোই অসাধারণ।", avatar: "https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=150&q=80" },
  { name: "রাকিবুল হাসান", role: "চট্টগ্রাম", rating: 5, text: "মাটির চায়ের সেটটা দেখতে যেমন সুন্দর, ব্যবহার করেও তেমনই আরামদায়ক। ডেলিভারিও দ্রুত ছিল।", avatar: "https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80" },
  { name: "নুসরাত জাহান", role: "সিলেট", rating: 4, text: "নকশি কাঁথাটা উপহার হিসেবে দিয়েছিলাম, সবাই খুব পছন্দ করেছে। প্যাকেজিংও চমৎকার ছিল।", avatar: "https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?auto=format&fit=crop&w=150&q=80" },
  { name: "ইমরান খান", role: "রাজশাহী", rating: 5, text: "কাঠের শোপিসটা আমার বসার ঘরের সৌন্দর্য বাড়িয়ে দিয়েছে। EcoHaat থেকে আবারও কিনবো।", avatar: "https://images.unsplash.com/photo-1547425260-76bcadfb4f2c?auto=format&fit=crop&w=150&q=80" }
];

const DELIVERY_INSIDE = 60;
const DELIVERY_OUTSIDE = 120;

/* =========================================================
   STATE
   ========================================================= */
let cart = JSON.parse(localStorage.getItem("ecohaat_cart") || "[]");
let wishlist = JSON.parse(localStorage.getItem("ecohaat_wishlist") || "[]");
let currentFilter = "সব";
let currentSort = "popular";
let visibleCount = 8;
let deliveryFee = DELIVERY_INSIDE;

/* =========================================================
   HELPERS
   ========================================================= */
function formatTaka(num) {
  return "৳" + num.toLocaleString("bn-BD");
}
function saveState() {
  localStorage.setItem("ecohaat_cart", JSON.stringify(cart));
  localStorage.setItem("ecohaat_wishlist", JSON.stringify(wishlist));
}
function findProduct(id) {
  const p = typeof PRODUCTS !== 'undefined' ? PRODUCTS.find(p => p.id === id) : null;
  if (p) return p;
  
  // Fallback for pages like invoice where PRODUCTS isn't fully populated
  const cartItem = cart.find(i => i.id === id);
  if (cartItem) {
      return {
          id: cartItem.id,
          name: cartItem.name || ("পণ্য #" + cartItem.id),
          price: cartItem.price || 0,
          image: cartItem.image || "https://placehold.co/100x100/eee/aaa?text=No+Img",
          oldPrice: cartItem.oldPrice || cartItem.price || 0
      };
  }
  return null;
}
function starString(rating) {
  const full = Math.round(rating);
  return "★".repeat(full) + "☆".repeat(5 - full);
}
function showToast(message) {
  const container = document.getElementById("toastContainer");
  const toast = document.createElement("div");
  toast.className = "toast";
  toast.textContent = message;
  container.appendChild(toast);
  setTimeout(() => toast.remove(), 2800);
}

/* =========================================================
   RENDER: CATEGORIES
   ========================================================= */
function renderCategories() {
  const grid = document.getElementById("categoryGrid");
  if (!grid) return;
  grid.innerHTML = CATEGORIES.map(cat => {
    const count = PRODUCTS.filter(p => p.category === cat.filter).length;
    return `
      <div class="category-card" data-filter="${cat.filter}" tabindex="0" role="button" aria-label="${cat.name} দেখুন">
        <div class="category-card-img"><img src="${cat.image}" alt="${cat.name}" loading="lazy"></div>
        <h3>${cat.name}</h3>
        <span class="cat-count">${count}+ পণ্য</span>
      </div>`;
  }).join("");

  grid.querySelectorAll(".category-card").forEach(card => {
    card.addEventListener("click", () => applyFilter(card.dataset.filter, true));
    card.addEventListener("keypress", e => { if (e.key === "Enter") applyFilter(card.dataset.filter, true); });
  });
}

function initCategorySlider() {
  const grid = document.getElementById("categoryGrid");
  const prevBtn = document.getElementById("catPrev");
  const nextBtn = document.getElementById("catNext");
  if (!grid || !prevBtn || !nextBtn) return;

  const cards = grid.querySelectorAll(".category-card");
  if (cards.length === 0) return;

  let currentIndex = 0;
  let interval;

  function updateSlider() {
    const containerWidth = grid.parentElement.offsetWidth;
    const cardWidth = cards[0].offsetWidth;
    const visibleCards = Math.floor(containerWidth / (cardWidth + 22)) || 1;
    const maxIndex = Math.max(0, cards.length - visibleCards);

    if (currentIndex > maxIndex) currentIndex = maxIndex;
    if (currentIndex < 0) currentIndex = 0;

    const translate = currentIndex * (cardWidth + 22);
    grid.style.transform = `translateX(-${translate}px)`;

    prevBtn.style.display = "flex";
    nextBtn.style.display = "flex";
  }

  function nextSlide() {
    const containerWidth = grid.parentElement.offsetWidth;
    const cardWidth = cards[0].offsetWidth;
    const visibleCards = Math.floor(containerWidth / (cardWidth + 22)) || 1;
    const maxIndex = Math.max(0, cards.length - visibleCards);

    if (currentIndex < maxIndex) {
      currentIndex++;
    } else {
      currentIndex = 0; // loop back
    }
    updateSlider();
  }

  function prevSlide() {
    if (currentIndex > 0) {
      currentIndex--;
    } else {
      const containerWidth = grid.parentElement.offsetWidth;
      const cardWidth = cards[0].offsetWidth;
      const visibleCards = Math.floor(containerWidth / (cardWidth + 22)) || 1;
      currentIndex = Math.max(0, cards.length - visibleCards);
    }
    updateSlider();
  }

  nextBtn.addEventListener("click", () => {
    nextSlide();
    resetInterval();
  });

  prevBtn.addEventListener("click", () => {
    prevSlide();
    resetInterval();
  });

  function startInterval() {
    interval = setInterval(nextSlide, 3000);
  }

  function resetInterval() {
    clearInterval(interval);
    startInterval();
  }

  window.addEventListener("resize", updateSlider);
  updateSlider();
  startInterval();
}

/* =========================================================
   RENDER: COLLECTIONS
   ========================================================= */
function renderDiscountProducts() {
  const grid = document.getElementById("discountGrid");
  if (!grid) return;
  grid.innerHTML = DISCOUNT_PRODUCTS.map(p => productCardHTML(p)).join("");
}

/* =========================================================
   RENDER: WHY US
   ========================================================= */
function renderWhyUs() {
  // Now rendered dynamically in home.blade.php
}

/* =========================================================
   RENDER: TESTIMONIALS
   ========================================================= */
let testimonialIndex = 0;
function renderTestimonials() {
  const dots = document.getElementById("testimonialDots");
  if (!dots) return;
  dots.querySelectorAll("button").forEach((btn, i) => btn.addEventListener("click", () => goToTestimonial(i)));
}
function goToTestimonial(i) {
  const track = document.getElementById("testimonialTrack");
  if (!track) return;
  testimonialIndex = i;
  track.style.transform = `translateX(-${i * 100}%)`;
  document.querySelectorAll("#testimonialDots button").forEach((b, idx) => b.classList.toggle("is-active", idx === i));
}
setInterval(() => {
  testimonialIndex = (testimonialIndex + 1) % TESTIMONIALS.length;
  goToTestimonial(testimonialIndex);
}, 5000);

/* =========================================================
   RENDER: PRODUCTS
   ========================================================= */
function getFilteredProducts(searchTerm = "") {
  let list = PRODUCTS.slice();
  if (currentFilter !== "সব") {
    list = list.filter(p => p.category === currentFilter);
  }
  if (searchTerm) {
    const term = searchTerm.trim().toLowerCase();
    list = list.filter(p => p.name.toLowerCase().includes(term) || p.category.toLowerCase().includes(term));
  }
  switch (currentSort) {
    case "price-low": list.sort((a, b) => a.price - b.price); break;
    case "price-high": list.sort((a, b) => b.price - a.price); break;
    case "rating": list.sort((a, b) => b.rating - a.rating); break;
    case "discount": list.sort((a, b) => discountPct(b) - discountPct(a)); break;
    default: list.sort((a, b) => b.reviews - a.reviews);
  }
  return list;
}
function discountPct(p) {
  return Math.round(((p.oldPrice - p.price) / p.oldPrice) * 100);
}
function productCardHTML(p) {
  const isWished = wishlist.includes(p.id);
  const inCart = cart.some(i => i.id === p.id);
  
  let discountBadgeText = '';
  if (p.discountType === 'percent' && p.discountValue > 0) {
      discountBadgeText = `-${p.discountValue.toLocaleString("bn-BD")}%`;
  } else if ((p.discountType === 'flat' || p.discountType === 'fixed') && p.discountValue > 0) {
      discountBadgeText = `-${formatTaka(p.discountValue)}`;
  } else if (p.oldPrice > p.price) {
      discountBadgeText = `-${discountPct(p).toLocaleString("bn-BD")}%`;
  }
  const discountHTML = discountBadgeText ? `<span class="product-discount">${discountBadgeText}</span>` : '';

  return `
    <div class="product-card" data-id="${p.id}">
      <div class="product-media">
        ${discountHTML}
        <button class="wishlist-toggle ${isWished ? "is-active" : ""}" aria-label="পছন্দ তালিকায় যোগ করুন" data-action="wishlist" data-id="${p.id}">
          <svg viewBox="0 0 24 24" fill="${isWished ? "currentColor" : "none"}"><path d="M12 20.5s-7.5-4.7-9.8-9.4C.6 7.6 2.3 4 6 4c2.1 0 3.6 1.1 4.5 2.4.3.4.9.4 1.2 0C12.6 5.1 14.1 4 16.2 4c3.7 0 5.4 3.6 3.8 7.1C17.5 15.8 12 20.5 12 20.5Z" stroke="currentColor" stroke-width="1.7"/></svg>
        </button>
        <img src="${p.image}" alt="${p.name}" loading="lazy">
        <button class="quick-view-btn" data-action="quickview" data-id="${p.id}">কুইক ভিউ</button>
      </div>
      <div class="product-info">
        <span class="product-cat">${p.category}</span>
        <h3 class="product-name">${p.name}</h3>
        <div class="product-rating"><span class="stars">${starString(p.rating)}</span><span>${p.rating} (${p.reviews})</span></div>
        <div class="product-price-row">
          <span class="price-current">${formatTaka(p.price)}</span>
          ${p.price < p.oldPrice ? `<span class="price-old">${formatTaka(p.oldPrice)}</span>` : ''}
        </div>
        <div class="product-actions">
          <button class="add-to-cart-btn ${inCart ? "is-added" : ""}" data-action="add-cart" data-id="${p.id}" title="কার্টে যোগ করুন">
            <svg viewBox="0 0 24 24" fill="none"><path d="M3 4h2l2.2 11.4a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 8H6.4" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span>${inCart ? "যোগ হয়েছে" : "কার্টে যোগ"}</span>
          </button>
          <a href="/product/${p.slug || p.id}" class="buy-now-btn" style="text-decoration: none;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            <span>অর্ডার করুন</span>
          </a>
        </div>
      </div>
    </div>`;
}
function renderProducts(searchTerm = "") {
  const grid = document.getElementById("productGrid");
  const noResults = document.getElementById("noResults");
  const loadMoreWrap = document.querySelector(".load-more-wrap");
  if (!grid || !noResults || !loadMoreWrap) return;
  const list = getFilteredProducts(searchTerm);

  if (list.length === 0) {
    grid.innerHTML = "";
    noResults.hidden = false;
    loadMoreWrap.style.display = "none";
    return;
  }
  noResults.hidden = true;
  const shown = list.slice(0, visibleCount);
  grid.innerHTML = shown.map(productCardHTML).join("");
  loadMoreWrap.style.display = visibleCount >= list.length ? "none" : "block";
  bindProductCardEvents();
}
function bindProductCardEvents() {
  document.querySelectorAll('[data-action="buy-now"]').forEach(btn => {
    if (btn.dataset.boundBuyNow) return;
    btn.dataset.boundBuyNow = "true";
    btn.addEventListener("click", () => buyNow(parseInt(btn.dataset.id)));
  });
  
  // Removed PHP rendered buy now button listener to allow standard anchor link behavior

  document.querySelectorAll('[data-action="add-cart"]').forEach(btn => {
    if (btn.dataset.boundAddCart) return;
    btn.dataset.boundAddCart = "true";
    btn.addEventListener("click", function() {
      const id = parseInt(this.dataset.id);
      const existing = cart.find(i => i.id === id);
      if (existing) existing.qty++;
      else {
        const p = findProduct(id);
        cart.push({ 
          id, 
          qty: 1,
          name: p ? p.name : "",
          price: p ? p.price : 0,
          image: p ? p.image : "",
          oldPrice: p ? (p.oldPrice || p.price) : 0
        });
      }
      saveState();
      updateCartUI();
      showToast("পণ্যটি কার্টে যোগ করা হয়েছে");
      
      const searchInput = document.getElementById("searchInput");
      if (typeof renderProducts === 'function') {
          renderProducts(searchInput ? searchInput.value : "");
      }
    });
  });

  document.querySelectorAll(".wishlist-btn").forEach(btn => {
    if (btn.dataset.boundWishlistBtn) return;
    btn.dataset.boundWishlistBtn = "true";
    btn.addEventListener("click", () => toggleWishlist(parseInt(btn.dataset.id)));
  });
  document.querySelectorAll('[data-action="wishlist"]').forEach(btn => {
    if (btn.dataset.boundWishlist) return;
    btn.dataset.boundWishlist = "true";
    btn.addEventListener("click", () => toggleWishlist(parseInt(btn.dataset.id)));
  });
  document.querySelectorAll('[data-action="quickview"]').forEach(btn => {
    if (btn.dataset.boundQuickview) return;
    btn.dataset.boundQuickview = "true";
    btn.addEventListener("click", () => openQuickView(parseInt(btn.dataset.id)));
  });
}

function applyFilter(filter, scroll = false) {
  currentFilter = filter;
  visibleCount = 8;
  document.querySelectorAll(".chip").forEach(c => c.classList.toggle("is-active", c.dataset.filter === filter));
  
  const mobileBtnText = document.getElementById("mobileFilterSelectedText");
  if (mobileBtnText) {
      mobileBtnText.textContent = filter === 'সব' ? 'সব ক্যাটাগরি' : filter;
      document.querySelectorAll(".mobile-filter .dropdown-item").forEach(item => {
          item.classList.toggle("active", item.dataset.filter === filter);
      });
  }

  const searchInput = document.getElementById("searchInput");
  renderProducts(searchInput ? searchInput.value : "");
  if (scroll) {
    const productsEl = document.getElementById("products");
    if (productsEl) productsEl.scrollIntoView({ behavior: "smooth" });
  }
}

/* =========================================================
   CART
   ========================================================= */
function addToCart(id) {
  const existing = cart.find(i => i.id === id);
  if (existing) {
    existing.qty += 1;
  } else {
    const p = findProduct(id);
    cart.push({ 
      id, 
      qty: 1,
      name: p ? p.name : "",
      price: p ? p.price : 0,
      image: p ? p.image : "",
      oldPrice: p ? (p.oldPrice || p.price) : 0
    });
  }
  saveState();
  updateCartUI();
  const searchInput = document.getElementById("searchInput");
  renderProducts(searchInput ? searchInput.value : "");
  showToast("পণ্যটি কার্টে যোগ করা হয়েছে");
}

function buyNow(id) {
  // Redirect to checkout page
  const p = findProduct(id);
  if (p) {
      const checkoutItem = {
          id: p.id,
          name: p.name,
          price: p.price,
          original_price: p.oldPrice || p.price,
          image: p.image,
          quantity: 1,
          variants: {}
      };
      localStorage.setItem('checkout_items', JSON.stringify([checkoutItem]));
  }
  window.location.href = "/checkout?product_id=" + id;
}


function removeFromCart(id) {
  cart = cart.filter(i => i.id !== id);
  saveState();
  updateCartUI();
  const searchInput = document.getElementById("searchInput");
  if (typeof renderProducts === 'function') {
      renderProducts(searchInput ? searchInput.value : "");
  }
  showToast("পণ্যটি কার্ট থেকে সরানো হয়েছে");
}

// Global functions for Product Details Page
window.addToCartGlobal = function(id, name, price, image, qty, variants, originalPrice) {
  id = parseInt(id);
  const existing = cart.find(i => i.id === id);
  if (existing) {
    existing.qty += parseInt(qty);
  } else {
    cart.push({ 
      id, 
      qty: parseInt(qty),
      name: name,
      price: parseFloat(price),
      image: image,
      oldPrice: originalPrice ? parseFloat(originalPrice) : parseFloat(price)
    });
  }
  saveState();
  updateCartUI();
  showToast("পণ্যটি কার্টে যোগ করা হয়েছে");
};

window.checkoutSingleItemGlobal = function(id, name, price, image, qty, variants, originalPrice) {
  id = parseInt(id);
  
  const checkoutItem = {
      id: id,
      name: name,
      price: parseFloat(price),
      original_price: parseFloat(originalPrice),
      image: image,
      quantity: parseInt(qty),
      variants: variants || {}
  };
  localStorage.setItem('checkout_items', JSON.stringify([checkoutItem]));
  window.location.href = "/checkout?product_id=" + id;
};

function changeQty(id, delta) {
  const item = cart.find(i => i.id === id);
  if (!item) return;
  item.qty += delta;
  if (item.qty <= 0) {
    removeFromCart(id);
    return;
  }
  saveState();
  updateCartUI();
}
function cartSubtotal() {
  return cart.reduce((sum, item) => {
    const p = findProduct(item.id);
    return sum + (p ? p.price * item.qty : 0);
  }, 0);
}
function cartCount() {
  return cart.reduce((sum, item) => {
    const p = findProduct(item.id);
    return sum + (p ? item.qty : 0);
  }, 0);
}
function updateCartUI() {
  const countEl = document.getElementById("cartCount");
  if (!countEl) return;
  const total = cartCount();
  countEl.textContent = total;
  countEl.hidden = total === 0;

  const itemsEl = document.getElementById("cartItems");
  const footerEl = document.getElementById("cartFooter");

  if (cart.length === 0) {
    itemsEl.innerHTML = `
      <div class="empty-state">
        <svg viewBox="0 0 24 24" fill="none"><path d="M3 4h2l2.2 11.4a2 2 0 0 0 2 1.6h7.9a2 2 0 0 0 2-1.6L21 8H6.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        <p>আপনার কার্ট খালি</p>
      </div>`;
    footerEl.style.display = "none";
  } else {
    footerEl.style.display = "block";
    itemsEl.innerHTML = cart.map(item => {
      const p = findProduct(item.id);
      if (!p) return "";
      return `
        <div class="cart-item">
          <img src="${p.image}" alt="${p.name}" loading="lazy">
          <div class="cart-item-info">
            <span class="cart-item-name">${p.name}</span>
            <span class="cart-item-price">${formatTaka(p.price * item.qty)}</span>
            <div class="cart-item-controls">
              <div class="qty-control">
                <button data-qty="minus" data-id="${p.id}" aria-label="কমান">−</button>
                <span>${item.qty}</span>
                <button data-qty="plus" data-id="${p.id}" aria-label="বাড়ান">+</button>
              </div>
              <button class="remove-item-btn" data-remove="${p.id}">সরান</button>
            </div>
          </div>
        </div>`;
    }).join("");

    itemsEl.querySelectorAll('[data-qty="plus"]').forEach(b => b.addEventListener("click", () => changeQty(parseInt(b.dataset.id), 1)));
    itemsEl.querySelectorAll('[data-qty="minus"]').forEach(b => b.addEventListener("click", () => changeQty(parseInt(b.dataset.id), -1)));
    itemsEl.querySelectorAll('[data-remove]').forEach(b => b.addEventListener("click", () => removeFromCart(parseInt(b.dataset.remove))));
  }

  const subtotal = cartSubtotal();
  const delivery = cart.length ? deliveryFee : 0;
  document.getElementById("cartSubtotal").textContent = formatTaka(subtotal);
  document.getElementById("cartDelivery").textContent = formatTaka(delivery);
  document.getElementById("cartTotal").textContent = formatTaka(subtotal + delivery);
}

/* =========================================================
   WISHLIST
   ========================================================= */
function toggleWishlist(id) {
  const idx = wishlist.indexOf(id);
  if (idx > -1) {
    wishlist.splice(idx, 1);
    showToast("পছন্দের তালিকা থেকে সরানো হয়েছে");
  } else {
    wishlist.push(id);
    showToast("পছন্দের তালিকায় যোগ করা হয়েছে");
  }
  saveState();
  updateWishlistUI();
  const searchInput = document.getElementById("searchInput");
  renderProducts(searchInput ? searchInput.value : "");
}
function updateWishlistUI() {
  const countEl = document.getElementById("wishlistCount");
  if (!countEl) return;
  countEl.textContent = wishlist.length;
  countEl.hidden = wishlist.length === 0;

  const itemsEl = document.getElementById("wishlistItems");
  if (wishlist.length === 0) {
    itemsEl.innerHTML = `
      <div class="empty-state">
        <svg viewBox="0 0 24 24" fill="none"><path d="M12 20.5s-7.5-4.7-9.8-9.4C.6 7.6 2.3 4 6 4c2.1 0 3.6 1.1 4.5 2.4.3.4.9.4 1.2 0C12.6 5.1 14.1 4 16.2 4c3.7 0 5.4 3.6 3.8 7.1C17.5 15.8 12 20.5 12 20.5Z" stroke="currentColor" stroke-width="1.5"/></svg>
        <p>পছন্দের তালিকা খালি</p>
      </div>`;
    return;
  }
  itemsEl.innerHTML = wishlist.map(id => {
    const p = findProduct(id);
    if (!p) return "";
    return `
      <div class="cart-item">
        <img src="${p.image}" alt="${p.name}" loading="lazy">
        <div class="cart-item-info">
          <span class="cart-item-name">${p.name}</span>
          <span class="cart-item-price">${formatTaka(p.price)}</span>
          <div class="cart-item-controls">
            <button class="btn btn-primary" style="padding:8px 16px;font-size:13px;" data-wtc="${p.id}">কার্টে যোগ করুন</button>
            <button class="remove-item-btn" data-wremove="${p.id}">সরান</button>
          </div>
        </div>
      </div>`;
  }).join("");
  itemsEl.querySelectorAll('[data-wtc]').forEach(b => b.addEventListener("click", () => { addToCart(parseInt(b.dataset.wtc)); }));
  itemsEl.querySelectorAll('[data-wremove]').forEach(b => b.addEventListener("click", () => toggleWishlist(parseInt(b.dataset.wremove))));
}

/* =========================================================
   QUICK VIEW MODAL
   ========================================================= */
function openQuickView(id) {
  const p = findProduct(id);
  if (!p) return;
  const isWished = wishlist.includes(id);
  document.getElementById("quickViewBody").innerHTML = `
    <div class="qv-image"><img src="${p.image}" alt="${p.name}"></div>
    <div class="qv-info">
      <span class="qv-cat">${p.category}</span>
      <h2 class="qv-title" id="qvTitle">${p.name}</h2>
      <div class="product-rating"><span class="stars">${starString(p.rating)}</span><span>${p.rating} (${p.reviews} রিভিউ)</span></div>
      <div class="product-price-row">
        <span class="price-current">${formatTaka(p.price)}</span>
        <span class="price-old">${formatTaka(p.oldPrice)}</span>
        <span class="product-discount" style="position:static;">-${discountPct(p)}%</span>
      </div>
      <p class="qv-desc">${p.desc}</p>
      <div class="qv-qty-row">
        <span>পরিমাণ:</span>
        <div class="qty-control">
          <button id="qvMinus" aria-label="কমান">−</button>
          <span id="qvQty">1</span>
          <button id="qvPlus" aria-label="বাড়ান">+</button>
        </div>
      </div>
      <div class="qv-actions" style="display:flex;gap:8px;">
        <button class="btn btn-primary" id="qvAddCart" style="flex:1;">কার্টে যোগ করুন</button>
        <button class="btn btn-primary" id="qvBuyNow" style="flex:1;">অর্ডার করুন</button>
        <button class="btn btn-outline" id="qvWishlist" style="flex:1;">${isWished ? "পছন্দ থেকে সরান" : "পছন্দে যোগ করুন"}</button>
      </div>
    </div>`;

  let qty = 1;
  document.getElementById("qvPlus").addEventListener("click", () => { qty++; document.getElementById("qvQty").textContent = qty; });
  document.getElementById("qvMinus").addEventListener("click", () => { if (qty > 1) qty--; document.getElementById("qvQty").textContent = qty; });
  document.getElementById("qvAddCart").addEventListener("click", () => {
    for (let i = 0; i < qty; i++) addToCart(id);
    closeModal("quickViewOverlay");
  });
  document.getElementById("qvBuyNow").addEventListener("click", () => {
    for (let i = 0; i < qty - 1; i++) addToCart(id);
    buyNow(id);
    closeModal("quickViewOverlay");
  });
  document.getElementById("qvWishlist").addEventListener("click", () => {
    toggleWishlist(id);
    closeModal("quickViewOverlay");
  });

  openModal("quickViewOverlay");
}

/* =========================================================
   MODAL HELPERS
   ========================================================= */
function openModal(id) {
  const modal = document.getElementById(id);
  if (modal) {
    modal.classList.add("is-open");
    document.body.style.overflow = "hidden";
  }
}
function closeModal(id) {
  const modal = document.getElementById(id);
  if (modal) {
    modal.classList.remove("is-open");
    document.body.style.overflow = "";
  }
}
document.querySelectorAll(".modal-overlay").forEach(overlay => {
  overlay.addEventListener("click", e => { if (e.target === overlay) closeModal(overlay.id); });
});
if(document.getElementById("closeQuickView")) document.getElementById("closeQuickView").addEventListener("click", () => closeModal("quickViewOverlay"));
if(document.getElementById("closeCheckout")) document.getElementById("closeCheckout").addEventListener("click", () => closeModal("checkoutOverlay"));
if(document.getElementById("closeLogin")) document.getElementById("closeLogin").addEventListener("click", () => closeModal("loginOverlay"));
document.addEventListener("keydown", e => {
  if (e.key === "Escape") {
    document.querySelectorAll(".modal-overlay.is-open").forEach(o => closeModal(o.id));
    closeCartDrawer();
    closeWishlistDrawer();
  }
});
document.querySelectorAll('[data-modal="loginModal"]').forEach(el => {
  el.addEventListener("click", e => { e.preventDefault(); openModal("loginOverlay"); });
});

/* =========================================================
   CART / WISHLIST DRAWERS
   ========================================================= */
function openCartDrawer() {
  const drawer = document.getElementById("cartDrawer");
  if (!drawer) return;
  drawer.classList.add("is-open");
  drawer.setAttribute("aria-hidden", "false");
  document.getElementById("drawerOverlay").classList.add("is-open");
}
function closeCartDrawer() {
  const drawer = document.getElementById("cartDrawer");
  if (!drawer) return;
  drawer.classList.remove("is-open");
  drawer.setAttribute("aria-hidden", "true");
  document.getElementById("drawerOverlay").classList.remove("is-open");
}
function openWishlistDrawer() {
  const drawer = document.getElementById("wishlistDrawer");
  if (!drawer) return;
  drawer.classList.add("is-open");
  drawer.setAttribute("aria-hidden", "false");
  document.getElementById("drawerOverlay").classList.add("is-open");
}
function closeWishlistDrawer() {
  const drawer = document.getElementById("wishlistDrawer");
  if (!drawer) return;
  drawer.classList.remove("is-open");
  drawer.setAttribute("aria-hidden", "true");
  document.getElementById("drawerOverlay").classList.remove("is-open");
}
if(document.getElementById("cartBtn")) document.getElementById("cartBtn").addEventListener("click", openCartDrawer);
if(document.getElementById("bottomCart")) document.getElementById("bottomCart").addEventListener("click", e => { e.preventDefault(); openCartDrawer(); });
if(document.getElementById("closeCartBtn")) document.getElementById("closeCartBtn").addEventListener("click", closeCartDrawer);
if(document.getElementById("wishlistBtn")) document.getElementById("wishlistBtn").addEventListener("click", openWishlistDrawer);
if(document.getElementById("bottomWishlist")) document.getElementById("bottomWishlist").addEventListener("click", e => { e.preventDefault(); openWishlistDrawer(); });
if(document.getElementById("closeWishlistBtn")) document.getElementById("closeWishlistBtn").addEventListener("click", closeWishlistDrawer);
if(document.getElementById("drawerOverlay")) document.getElementById("drawerOverlay").addEventListener("click", () => { closeCartDrawer(); closeWishlistDrawer(); });
if(document.getElementById("viewCartBtn")) document.getElementById("viewCartBtn").addEventListener("click", closeCartDrawer);

/* =========================================================
   CHECKOUT
   ========================================================= */
if (document.getElementById("checkoutBtn")) {
    document.getElementById("checkoutBtn").addEventListener("click", () => {
    if (cart.length === 0) {
        showToast("আপনার কার্ট খালি, প্রথমে পণ্য যোগ করুন");
        return;
    }
    
    // Prepare checkout items with full details
    const fullCart = cart.map(item => {
        const p = findProduct(item.id);
        if (!p) return null;
        return {
            id: p.id,
            name: p.name,
            price: p.price,
            original_price: p.oldPrice || p.price,
            image: p.image,
            quantity: item.qty,
            variants: {}
        };
    }).filter(i => i !== null);
    
    localStorage.setItem('checkout_items', JSON.stringify(fullCart));
    window.location.href = "/checkout";
    });
}

function renderCheckoutSummary() {
  const itemsEl = document.getElementById("checkoutItems");
  itemsEl.innerHTML = cart.map(item => {
    const p = findProduct(item.id);
    return `<div class="checkout-item-row"><span>${p.name} × ${item.qty}</span><span>${formatTaka(p.price * item.qty)}</span></div>`;
  }).join("");
  const subtotal = cartSubtotal();
  document.getElementById("checkoutSubtotal").textContent = formatTaka(subtotal);
  document.getElementById("checkoutDelivery").textContent = formatTaka(deliveryFee);
  document.getElementById("checkoutTotal").textContent = formatTaka(subtotal + deliveryFee);
}

if(document.querySelector('select[name="deliveryArea"]')) {
    document.querySelector('select[name="deliveryArea"]').addEventListener("change", e => {
    deliveryFee = e.target.value === "outside" ? DELIVERY_OUTSIDE : DELIVERY_INSIDE;
    renderCheckoutSummary();
    updateCartUI();
    });
}

if(document.getElementById("checkoutForm")) {
    document.getElementById("checkoutForm").addEventListener("submit", e => {
    e.preventDefault();
    const form = e.target;
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }
    const orderId = "EH-2026-" + Math.floor(10000 + Math.random() * 89999);
    document.getElementById("orderIdText").textContent = orderId;
    document.getElementById("checkoutBody").hidden = true;
    document.getElementById("orderSuccess").hidden = false;
    cart = [];
    saveState();
    updateCartUI();
    const searchInput = document.getElementById("searchInput");
    renderProducts(searchInput ? searchInput.value : "");
    form.reset();
    });
}

if(document.getElementById("closeSuccessBtn")) document.getElementById("closeSuccessBtn").addEventListener("click", () => closeModal("checkoutOverlay"));

if(document.getElementById("loginForm")) {
    document.getElementById("loginForm").addEventListener("submit", e => {
    e.preventDefault();
    showToast("এটি একটি ডেমো — লগইন সংযুক্ত নয়");
    closeModal("loginOverlay");
    });
}

/* =========================================================
   SEARCH
   ========================================================= */
function searchDropdownHTML(term) {
  const matches = PRODUCTS.filter(p =>
    p.name.toLowerCase().includes(term.toLowerCase()) || p.category.toLowerCase().includes(term.toLowerCase())
  ).slice(0, 6);
  if (matches.length === 0) {
    return `<div class="search-empty">কোনো পণ্য পাওয়া যায়নি</div>`;
  }
  return matches.map(p => `
    <div class="search-result-item" data-id="${p.id}">
      <img src="${p.image}" alt="${p.name}" loading="lazy">
      <div>
        <div class="sri-name">${p.name}</div>
        <div class="sri-cat">${p.category} · ${formatTaka(p.price)}</div>
      </div>
    </div>`).join("");
}
const searchInput = document.getElementById("searchInput");
const searchResults = document.getElementById("searchResults");
if(searchInput && searchResults) {
    searchInput.addEventListener("input", () => {
    const term = searchInput.value.trim();
    visibleCount = 8;
    renderProducts(term);
    if (term.length > 0) {
        searchResults.innerHTML = searchDropdownHTML(term);
        searchResults.hidden = false;
        bindSearchResultClicks();
    } else {
        searchResults.hidden = true;
    }
    });
}

function bindSearchResultClicks() {
  searchResults.querySelectorAll(".search-result-item").forEach(item => {
    item.addEventListener("click", () => {
      openQuickView(parseInt(item.dataset.id));
      searchResults.hidden = true;
    });
  });
}
document.addEventListener("click", e => {
  if (!e.target.closest(".header-search")) {
      if(searchResults) searchResults.hidden = true;
  }
});
if(document.getElementById("searchBtn")) {
    document.getElementById("searchBtn").addEventListener("click", () => {
        const productsEl = document.getElementById("products");
        if(productsEl) productsEl.scrollIntoView({ behavior: "smooth" });
        if(searchResults) searchResults.hidden = true;
    });
}

const mobileSearchInput = document.getElementById("mobileSearchInput");
if(mobileSearchInput) {
    mobileSearchInput.addEventListener("input", () => {
    searchInput.value = mobileSearchInput.value;
    visibleCount = 8;
    renderProducts(mobileSearchInput.value.trim());
    });
}
if(document.getElementById("mobileSearchToggle")) {
    document.getElementById("mobileSearchToggle").addEventListener("click", () => {
    const bar = document.getElementById("mobileSearchBar");
    bar.hidden = !bar.hidden;
    if (!bar.hidden) mobileSearchInput.focus();
    });
}

/* =========================================================
   FILTER CHIPS + NAV FILTER LINKS + SORT
   ========================================================= */
if(document.getElementById("filterChips")) {
    document.getElementById("filterChips").addEventListener("click", e => {
    const chip = e.target.closest(".chip");
    if (!chip) return;
    applyFilter(chip.dataset.filter);
    });
}
document.querySelectorAll('[data-filter]').forEach(link => {
  if (link.classList.contains("chip") || link.classList.contains("category-card")) return;
  link.addEventListener("click", e => {
    e.preventDefault();
    applyFilter(link.dataset.filter, true);
    closeMobileNav();
  });
});
if(document.getElementById("sortSelect")) {
    document.getElementById("sortSelect").addEventListener("change", e => {
    currentSort = e.target.value;
    const searchInput = document.getElementById("searchInput");
    renderProducts(searchInput ? searchInput.value : "");
    });
}
if(document.getElementById("loadMoreBtn")) {
    document.getElementById("loadMoreBtn").addEventListener("click", () => {
    visibleCount += 8;
    const searchInput = document.getElementById("searchInput");
    renderProducts(searchInput ? searchInput.value : "");
    });
}

/* =========================================================
   MOBILE NAV
   ========================================================= */
const hamburgerBtn = document.getElementById("hamburgerBtn");
const mainNav = document.getElementById("mainNav");
const navOverlay = document.getElementById("navOverlay");
function openMobileNav() {
  mainNav.classList.add("is-open");
  navOverlay.classList.add("is-open");
  hamburgerBtn.classList.add("is-active");
  hamburgerBtn.setAttribute("aria-expanded", "true");
}
function closeMobileNav() {
  if(mainNav) mainNav.classList.remove("is-open");
  if(navOverlay) navOverlay.classList.remove("is-open");
  if(hamburgerBtn) hamburgerBtn.classList.remove("is-active");
  if(hamburgerBtn) hamburgerBtn.setAttribute("aria-expanded", "false");
}
if(hamburgerBtn) {
    hamburgerBtn.addEventListener("click", () => {
    mainNav.classList.contains("is-open") ? closeMobileNav() : openMobileNav();
    });
}
if(navOverlay) navOverlay.addEventListener("click", closeMobileNav);
if(mainNav) mainNav.querySelectorAll("a").forEach(a => a.addEventListener("click", closeMobileNav));



/* =========================================================
   NEWSLETTER
   ========================================================= */
if(document.getElementById("newsletterForm")) {
    document.getElementById("newsletterForm").addEventListener("submit", e => {
    e.preventDefault();
    const email = document.getElementById("newsletterEmail").value.trim();
    const msg = document.getElementById("newsletterMsg");
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!re.test(email)) {
        msg.textContent = "সঠিক ইমেইল ঠিকানা লিখুন";
        msg.className = "form-msg is-error";
        return;
    }
    msg.textContent = "ধন্যবাদ! আপনি সফলভাবে সাবস্ক্রাইব করেছেন।";
    msg.className = "form-msg is-success";
    document.getElementById("newsletterEmail").value = "";
    });
}

/* =========================================================
   REVEAL ON SCROLL
   ========================================================= */
function initReveal() {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  document.querySelectorAll(".reveal").forEach(el => observer.observe(el));
}

/* =========================================================
   SCROLLSPY FOR NAV ACTIVE STATE
   ========================================================= */
window.addEventListener("scroll", () => {
  const header = document.querySelector(".site-header");
  if(header) {
      header.style.boxShadow = window.scrollY > 10
        ? "0 4px 16px -8px rgba(23,36,44,.2)"
        : "0 1px 0 var(--line)";
  }
});

/* =========================================================
   INIT & SYNC
   ========================================================= */
function init() {
  // Migrate old cart items that are missing details (if PRODUCTS is available)
  let migrated = false;
  if (typeof PRODUCTS !== 'undefined' && PRODUCTS.length > 0) {
    cart = cart.map(item => {
      if (!item.name) {
        const p = PRODUCTS.find(x => x.id === item.id);
        if (p) {
          migrated = true;
          return {
            ...item,
            name: p.name,
            price: p.price,
            image: p.image,
            oldPrice: p.oldPrice || p.price
          };
        }
      }
      return item;
    });
    if (migrated) {
      localStorage.setItem('ecohaat_cart', JSON.stringify(cart));
    }
  }

  renderCategories();
  initCategorySlider();
  renderDiscountProducts();
  renderWhyUs();
  renderTestimonials();
  renderProducts();
  updateCartUI();
  updateWishlistUI();
  initReveal();
}

function syncState() {
  cart = JSON.parse(localStorage.getItem('ecohaat_cart') || '[]');
  
  // Migrate old cart items that are missing details (if PRODUCTS is available)
  let migrated = false;
  if (typeof PRODUCTS !== 'undefined' && PRODUCTS.length > 0) {
    cart = cart.map(item => {
      if (!item.name) {
        const p = PRODUCTS.find(x => x.id === item.id);
        if (p) {
          migrated = true;
          return {
            ...item,
            name: p.name,
            price: p.price,
            image: p.image,
            oldPrice: p.oldPrice || p.price
          };
        }
      }
      return item;
    });
    if (migrated) {
      localStorage.setItem('ecohaat_cart', JSON.stringify(cart));
    }
  }
  
  wishlist = JSON.parse(localStorage.getItem('ecohaat_wishlist') || '[]');
  updateCartUI();
  updateWishlistUI();
}

// Sync when returning via back button (bfcache)
window.addEventListener("pageshow", e => {
  if (e.persisted || (window.performance && window.performance.navigation.type === 2)) {
    syncState();
  }
});

// Sync when localStorage changes in another tab or window
window.addEventListener("storage", e => {
  if (e.key === 'ecohaat_cart' || e.key === 'ecohaat_wishlist') {
    syncState();
  }
});

document.addEventListener("DOMContentLoaded", init);
