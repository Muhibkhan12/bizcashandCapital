<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Luckycharm — The Journey To A Perfection</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        fontFamily: {
          display: ['"Playfair Display"', 'serif'],
          body: ['"DM Sans"', 'sans-serif'],
        },
        colors: {
          'farm-green': '#2D6A2D',
          'farm-green-light': '#4A8C3A',
          'farm-accent': '#3A7D3A',
          'farm-off': '#F5F5F2',
          'farm-muted': '#6B6B6B',
          'farm-border': '#E0E0D8',
        },
        animation: {
          'fade-up': 'fadeUp 0.7s ease forwards',
          'fade-in': 'fadeIn 0.6s ease forwards',
          'star-spin': 'starSpin 8s linear infinite',
        },
        keyframes: {
          fadeUp: { '0%': { opacity: 0, transform: 'translateY(28px)' }, '100%': { opacity: 1, transform: 'translateY(0)' } },
          fadeIn: { '0%': { opacity: 0 }, '100%': { opacity: 1 } },
          starSpin: { '0%': { transform: 'rotate(0deg)' }, '100%': { transform: 'rotate(360deg)' } },
        }
      }
    }
  }
</script>
<style>
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
  html { scroll-behavior: smooth; }
  body { font-family: 'DM Sans', sans-serif; background: #ffffff; color: #111111; overflow-x: hidden; }

  /* Animated decorative star */
  .deco-star { display: inline-block; font-style: normal; font-size: 1.4rem; line-height: 1; }
  .deco-star.spin { animation: starSpin 10s linear infinite; display: inline-block; }

  /* Nav pill */
  .nav-pill { transition: all 0.2s ease; border-radius: 9999px; padding: 5px 16px; font-size: 14px; }
  .nav-pill.active { background: #111; color: #fff; }
  .nav-pill:not(.active):hover { background: #F0F0EC; }

  /* CTA button */
  .btn-dark { background: #111; color: #fff; border-radius: 9999px; padding: 12px 26px; font-size: 14px; font-weight: 500; display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s ease; letter-spacing: 0.01em; }
  .btn-dark:hover { background: #2D6A2D; transform: translateY(-1px); box-shadow: 0 6px 20px rgba(0,0,0,0.15); }
  .btn-outline { border: 1px solid #111; color: #111; border-radius: 9999px; padding: 10px 22px; font-size: 14px; font-weight: 500; display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s ease; }
  .btn-outline:hover { background: #111; color: #fff; }

  /* Hero headline */
  .hero-headline { font-family: 'Playfair Display', serif; font-weight: 900; font-size: clamp(52px, 7vw, 88px); line-height: 1.05; letter-spacing: -0.02em; color: #111; }

  /* Stats */
  .stat-num { font-family: 'Playfair Display', serif; font-size: clamp(28px, 4vw, 44px); font-weight: 700; color: #111; }

  /* Mission headline */
  .mission-head { font-family: 'Playfair Display', serif; font-size: clamp(28px, 3.5vw, 44px); font-weight: 700; line-height: 1.2; color: #111; }

  /* Section fade-in on scroll */
  .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal.visible { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }
  .reveal-delay-4 { transition-delay: 0.4s; }

  /* Image grid hover */
  .img-grid-item { overflow: hidden; border-radius: 16px; position: relative; }
  .img-grid-item img { transition: transform 0.5s ease; width: 100%; height: 100%; object-fit: cover; }
  .img-grid-item:hover img { transform: scale(1.06); }

  /* Tag chip */
  .chip { border: 1px solid #D4D4CC; border-radius: 9999px; padding: 4px 14px; font-size: 13px; color: #6B6B6B; background: transparent; display: inline-block; }

  /* Green dot */
  .green-dot::before { content: ''; display: inline-block; width: 7px; height: 7px; border-radius: 50%; background: #3A7D3A; margin-right: 7px; vertical-align: middle; }

  /* Deco cross */
  .deco-cross { position: absolute; color: #111; font-size: 28px; font-weight: 300; opacity: 0.55; user-select: none; pointer-events: none; }

  /* Full bleed photo */
  .full-bleed { width: 100%; height: 480px; object-fit: cover; display: block; }

  /* Horizontal rule */
  .hairline { border: none; border-top: 1px solid #E0E0D8; }

  /* Scrollbar */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: #F5F5F2; }
  ::-webkit-scrollbar-thumb { background: #C0C0B8; border-radius: 3px; }

  /* Partnership section text */
  .partner-head { font-family: 'Playfair Display', serif; font-size: clamp(26px, 3vw, 38px); font-weight: 700; line-height: 1.2; }

  /* Mobile nav toggle */
  #mobile-menu { display: none; }
  @media (max-width: 768px) {
    #nav-links { display: none; }
    #mobile-menu { display: block; }
    #nav-links.open { display: flex; flex-direction: column; position: absolute; top: 70px; left: 0; right: 0; background: #fff; padding: 16px 24px; gap: 8px; border-bottom: 1px solid #E0E0D8; z-index: 100; }
    .full-bleed { height: 300px; }
  }
</style>
</head>
<body>

<!-- ──────────────────────────────────────── NAV ──────────────────────────────────────── -->
<header class="sticky top-0 z-50 bg-white border-b border-farm-border">
  <div class="max-w-7xl mx-auto px-6 h-[68px] flex items-center justify-between">

    <!-- Logo -->
    <div class="flex items-center gap-2 font-display font-bold text-[18px] tracking-tight select-none">
      <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
        <rect width="12" height="12" rx="2" fill="#111"/>
        <rect x="14" width="12" height="12" rx="2" fill="#3A7D3A"/>
        <rect y="14" width="12" height="12" rx="2" fill="#3A7D3A"/>
        <rect x="14" y="14" width="12" height="12" rx="2" fill="#111"/>
      </svg>
      Luckycharm
    </div>

    <!-- Desktop nav -->
    <nav id="nav-links" class="hidden md:flex items-center gap-1 bg-farm-off rounded-full px-2 py-1.5">
      <a href="#home" class="nav-pill active">Home</a>
      <a href="#about" class="nav-pill text-farm-muted">About Us</a>
      <a href="#reviews" class="nav-pill text-farm-muted">Reviews</a>
      <a href="#products" class="nav-pill text-farm-muted">Products</a>
      <a href="#blog" class="nav-pill text-farm-muted">Blog</a>
    </nav>

    <!-- Sign Up + mobile menu -->
    <div class="flex items-center gap-3">
      <a href="#contact" class="btn-outline hidden md:inline-flex text-sm">Sign Up</a>
      <button id="mobile-menu" class="md:hidden p-2" onclick="toggleNav()" aria-label="Toggle menu">
        <svg width="22" height="22" fill="none" stroke="#111" stroke-width="2" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>
</header>

<!-- ──────────────────────────────────────── HERO ──────────────────────────────────────── -->
<section id="home" class="relative pt-16 pb-0 overflow-hidden bg-white text-center">

  <!-- Decorative crosses -->
  <span class="deco-cross" style="top:60px;left:9%">✦</span>
  <span class="deco-cross" style="top:40px;right:11%">+</span>
  <span class="deco-cross" style="top:160px;left:18%">+</span>
  <span class="deco-cross" style="top:140px;right:22%">✦</span>
  <span class="deco-cross" style="top:240px;left:6%">+</span>

  <div class="max-w-4xl mx-auto px-6 relative">
    <!-- Category tag -->
    <div class="reveal inline-flex items-center mb-6">
      <span class="green-dot text-sm font-body font-medium text-[#3A7D3A] tracking-wide">Precision Agriculture</span>
    </div>

    <!-- Headline -->
    <h1 class="reveal reveal-delay-1 hero-headline mb-6">
      The Journey To A<br>Perfection.
    </h1>

    <!-- Subheadline -->
    <p class="reveal reveal-delay-2 text-farm-muted font-body max-w-md mx-auto leading-relaxed mb-8" style="font-size:15px">
      Pioneering Sustainable Agriculture. From Seed To Harvest, We Cultivate Excellence With Passion And Precision.
    </p>

    <!-- CTA -->
    <div class="reveal reveal-delay-3">
      <a href="#about" class="btn-dark">
        Explore Our Farms
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>

  <!-- Full-bleed farm photo -->
  <div class="mt-14 reveal reveal-delay-4">
    <img
      src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1600&q=80&auto=format&fit=crop"
      alt="Aerial view of patchwork farmland"
      class="full-bleed"
    />
  </div>
</section>

<!-- ──────────────────────────────────────── STATS ──────────────────────────────────────── -->
<section id="stats" class="bg-white border-b border-farm-border">
  <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-2 md:grid-cols-4 gap-8">
    <div class="reveal text-center md:text-left md:border-r border-farm-border">
      <div class="stat-num">50+</div>
      <div class="text-farm-muted text-sm mt-1 font-body">Years Of Experience</div>
    </div>
    <div class="reveal reveal-delay-1 text-center md:text-left md:border-r border-farm-border">
      <div class="stat-num">200+</div>
      <div class="text-farm-muted text-sm mt-1 font-body">Acres Managed</div>
    </div>
    <div class="reveal reveal-delay-2 text-center md:text-left md:border-r border-farm-border">
      <div class="stat-num">120,000+</div>
      <div class="text-farm-muted text-sm mt-1 font-body">Farmers Supported</div>
    </div>
    <div class="reveal reveal-delay-3 text-center md:text-left">
      <div class="stat-num">$15 Billion</div>
      <div class="text-farm-muted text-sm mt-1 font-body">Agricultural Impact</div>
    </div>
  </div>
</section>

<!-- ──────────────────────────────────────── MISSION ──────────────────────────────────────── -->
<section id="about" class="bg-white py-24 border-b border-farm-border">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-start">

    <!-- Left -->
    <div class="reveal">
      <div class="text-[13px] text-farm-muted font-body mb-8 tracking-widest font-medium">2025</div>
      <hr class="hairline mb-8" />
      <div class="flex flex-wrap gap-2">
        <span class="chip">Organic Farming</span>
        <span class="chip">Precision Agriculture</span>
        <span class="chip">Sustainable Practices</span>
      </div>
    </div>

    <!-- Right -->
    <div class="reveal reveal-delay-2">
      <p class="mission-head leading-snug mb-6">
        Honoring The Wisdom Of Generations, We Integrate Cutting-Edge Technology To Cultivate Smarter, Greener, And More Abundant Harvests For The Future.
      </p>
      <a href="#contact" class="btn-outline mt-2">Learn Our Story
        <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

  </div>
</section>

<!-- ──────────────────────────────────────── PARTNER / CTA ──────────────────────────────────────── -->
<section id="contact" class="bg-white py-24">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

    <!-- Left: CTA text -->
    <div class="reveal">
      <h2 class="partner-head mb-4">Partner For A<br>Brighter Harvest.</h2>
      <p class="text-farm-muted font-body leading-relaxed mb-8 max-w-sm" style="font-size:15px">
        Join Our Network To Access Advanced Resources, Expert Insights, And Sustainable Farming Solutions.
      </p>
      <a href="mailto:hello@luckycharm.farm" class="btn-dark">
        Contact Our Team
        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
      </a>
    </div>

    <!-- Right: 2x2 image grid -->
    <div class="reveal reveal-delay-2 grid grid-cols-2 gap-3">
      <div class="img-grid-item h-48">
        <img src="https://images.unsplash.com/photo-1625246333195-78d9c38ad449?w=600&q=80&auto=format&fit=crop" alt="Precision farm technology" />
      </div>
      <div class="img-grid-item h-48">
        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?w=600&q=80&auto=format&fit=crop" alt="Hands harvesting vegetables" />
      </div>
      <div class="img-grid-item h-48">
        <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=600&q=80&auto=format&fit=crop" alt="Fresh colorful vegetables" />
      </div>
      <div class="img-grid-item h-48">
        <img src="https://images.unsplash.com/photo-1595855759920-86582396756a?w=600&q=80&auto=format&fit=crop" alt="Farmers in the field" />
      </div>
    </div>

  </div>
</section>

<!-- ──────────────────────────────────────── FOOTER ──────────────────────────────────────── -->
<footer class="bg-[#F5F5F2] border-t border-farm-border py-14">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-4 gap-10 mb-12">

      <!-- Brand -->
      <div class="md:col-span-2">
        <div class="flex items-center gap-2 font-display font-bold text-[18px] tracking-tight mb-4">
          <svg width="24" height="24" viewBox="0 0 28 28" fill="none">
            <rect width="12" height="12" rx="2" fill="#111"/>
            <rect x="14" width="12" height="12" rx="2" fill="#3A7D3A"/>
            <rect y="14" width="12" height="12" rx="2" fill="#3A7D3A"/>
            <rect x="14" y="14" width="12" height="12" rx="2" fill="#111"/>
          </svg>
          Luckycharm
        </div>
        <p class="text-farm-muted text-sm font-body leading-relaxed max-w-xs">
          Pioneering sustainable agriculture through technology, tradition, and a commitment to a greener future.
        </p>
      </div>

      <!-- Links -->
      <div>
        <div class="text-xs font-medium tracking-widest text-farm-muted uppercase mb-4">Company</div>
        <ul class="space-y-2 text-sm font-body text-[#444]">
          <li><a href="#about" class="hover:text-farm-green transition-colors">About Us</a></li>
          <li><a href="#" class="hover:text-farm-green transition-colors">Our Farms</a></li>
          <li><a href="#" class="hover:text-farm-green transition-colors">Careers</a></li>
          <li><a href="#blog" class="hover:text-farm-green transition-colors">Blog</a></li>
        </ul>
      </div>
      <div>
        <div class="text-xs font-medium tracking-widest text-farm-muted uppercase mb-4">Services</div>
        <ul class="space-y-2 text-sm font-body text-[#444]">
          <li><a href="#" class="hover:text-farm-green transition-colors">Organic Farming</a></li>
          <li><a href="#" class="hover:text-farm-green transition-colors">Precision Agriculture</a></li>
          <li><a href="#" class="hover:text-farm-green transition-colors">Sustainability</a></li>
          <li><a href="#contact" class="hover:text-farm-green transition-colors">Partnership</a></li>
        </ul>
      </div>

    </div>

    <hr class="hairline mb-6" />
    <div class="flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-farm-muted font-body">
      <span>© 2025 Luckycharm. All rights reserved.</span>
      <div class="flex gap-5">
        <a href="#" class="hover:text-farm-green transition-colors">Privacy Policy</a>
        <a href="#" class="hover:text-farm-green transition-colors">Terms of Service</a>
        <a href="#" class="hover:text-farm-green transition-colors">Cookie Settings</a>
      </div>
    </div>
  </div>
</footer>

<!-- ──────────────────────────────────────── JS ──────────────────────────────────────── -->
<script>
  // Mobile nav toggle
  function toggleNav() {
    const nav = document.getElementById('nav-links');
    nav.classList.toggle('open');
  }

  // Scroll reveal
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  reveals.forEach(el => observer.observe(el));

  // Active nav highlight on scroll
  const sections = document.querySelectorAll('section[id]');
  const navPills = document.querySelectorAll('.nav-pill');
  const scrollSpy = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        navPills.forEach(p => p.classList.remove('active'));
        const active = document.querySelector(`.nav-pill[href="#${entry.target.id}"]`);
        if (active) active.classList.add('active');
      }
    });
  }, { threshold: 0.4 });
  sections.forEach(s => scrollSpy.observe(s));

  // Trigger reveals already in viewport on load
  window.addEventListener('load', () => {
    reveals.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight * 0.92) el.classList.add('visible');
    });
  });
</script>
</body>
</html>