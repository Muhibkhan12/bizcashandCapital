<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Entlify — Rank higher, convert better.</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet"/>
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        orange: { DEFAULT: '#ff4c00', dark: '#cc3a00' },
        teal: '#00d4a0',
        dark: { DEFAULT: '#0a0a0a', surface: '#141414', card: '#1a1a1a' },
        cream: '#f5f2eb',
      },
      fontFamily: {
        display: ['Syne', 'sans-serif'],
        body: ['DM Sans', 'sans-serif'],
      },
    }
  }
}
</script>
<style>
  *{box-sizing:border-box;margin:0;padding:0}
  html{scroll-behavior:smooth}
  body{font-family:'DM Sans',sans-serif;background:#0a0a0a;color:#fff;overflow-x:hidden}

  /* Orb glow */
  .hero-orb{
    position:absolute;top:-120px;left:50%;transform:translateX(-50%);
    width:700px;height:700px;border-radius:50%;
    background:radial-gradient(ellipse at 40% 40%, #ff4c0044 0%, #1a6bff22 50%, transparent 70%);
    filter:blur(60px);pointer-events:none;z-index:0;
  }

  /* Asterisk motif */
  .asterisk{
    font-family:'Syne',sans-serif;font-size:clamp(180px,22vw,340px);
    font-weight:800;line-height:1;color:#ff4c00;
    position:absolute;right:-40px;top:50%;transform:translateY(-50%);
    user-select:none;opacity:0.92;
  }

  /* Ticker */
  @keyframes ticker{from{transform:translateX(0)}to{transform:translateX(-50%)}}
  .ticker-track{display:flex;width:max-content;animation:ticker 28s linear infinite}
  .ticker-track:hover{animation-play-state:paused}

  /* Fade-in on scroll */
  .reveal{opacity:0;transform:translateY(30px);transition:opacity .7s ease, transform .7s ease}
  .reveal.visible{opacity:1;transform:translateY(0)}

  /* Nav blur */
  .nav-blur{backdrop-filter:blur(16px);-webkit-backdrop-filter:blur(16px)}

  /* Chart lines */
  svg .line{fill:none;stroke-width:2.5;stroke-linecap:round;stroke-linejoin:round}
  svg .dot{r:4}

  /* CTA pill */
  .btn-orange{background:#ff4c00;color:#fff;border-radius:999px;padding:.7rem 2rem;font-family:'DM Sans',sans-serif;font-weight:500;font-size:.95rem;transition:background .2s,transform .15s;display:inline-block;cursor:pointer;border:none}
  .btn-orange:hover{background:#cc3a00;transform:translateY(-1px)}
  .btn-ghost{border:1px solid rgba(255,255,255,.25);color:#fff;border-radius:999px;padding:.7rem 2rem;font-family:'DM Sans',sans-serif;font-weight:400;font-size:.95rem;transition:border-color .2s,background .2s;display:inline-block;cursor:pointer;background:transparent}
  .btn-ghost:hover{border-color:rgba(255,255,255,.5);background:rgba(255,255,255,.05)}

  /* Gauge */
  .gauge-circle{transform-origin:center;transform:rotate(-90deg)}

  /* Process node */
  .proc-node{border:1.5px solid rgba(0,0,0,.12);border-radius:999px;padding:.5rem 1.25rem;font-size:.82rem;font-weight:500;background:#fff;color:#111;white-space:nowrap}
  .proc-arrow{color:#999;font-size:1.1rem;flex-shrink:0}

  /* Testimonial stars */
  .stars{color:#ff4c00;letter-spacing:1px}

  /* Number counter */
  .count{font-family:'Syne',sans-serif;font-weight:800}
</style>
</head>
<body>

<!-- ─── NAV ─── -->
<nav class="fixed top-0 left-0 right-0 z-50 nav-blur bg-black/60 border-b border-white/5">
  <div class="max-w-7xl mx-auto px-6 h-14 flex items-center justify-between">
    <span class="font-display font-800 text-xl tracking-tight"><span style="color:#ff4c00">↗</span>entlify</span>
    <div class="hidden md:flex items-center gap-8 text-sm text-white/60 font-body">
      <a href="#services" class="hover:text-white transition-colors">Services</a>
      <a href="#seo" class="hover:text-white transition-colors">SEO</a>
      <a href="#cro" class="hover:text-white transition-colors">CRO</a>
      <a href="#webdev" class="hover:text-white transition-colors">Web Dev</a>
      <a href="#work" class="hover:text-white transition-colors">Work</a>
    </div>
    <button class="btn-orange text-sm" style="padding:.5rem 1.4rem">Get started</button>
  </div>
</nav>

<!-- ─── HERO ─── -->
<section class="relative min-h-screen flex flex-col items-center justify-center text-center px-6 pt-20 pb-16 overflow-hidden bg-dark">
  <div class="hero-orb"></div>
  <div class="relative z-10 max-w-5xl mx-auto reveal">
    <p class="text-white/40 text-xs font-body tracking-widest uppercase mb-6 font-300">Fast-growing tech companies trust us</p>
    <h1 class="font-display font-800 leading-[1.05] text-white mb-6" style="font-size:clamp(3rem,7vw,5.5rem)">
      Rank higher,<br/><span style="color:#ff4c00">convert better.</span>
    </h1>
    <p class="text-white/50 font-body font-300 text-lg max-w-xl mx-auto mb-10 leading-relaxed">
      Entlify is a digital marketing and web development agency that works with SaaS teams — cloud management, programming, cybersecurity, and beyond.
    </p>
    <div class="flex flex-wrap items-center justify-center gap-4">
      <button class="btn-orange">Start growing today</button>
      <button class="btn-ghost">See our work</button>
    </div>
  </div>
  <!-- bottom fade -->
  <div class="absolute bottom-0 left-0 right-0 h-32 pointer-events-none" style="background:linear-gradient(to bottom,transparent,#0a0a0a)"></div>
</section>

<!-- ─── LOGO BAR ─── -->
<section class="bg-dark border-y border-white/5 py-6 overflow-hidden">
  <div class="flex items-center gap-4 mb-2">
    <div class="ticker-track gap-16 items-center">
      <!-- duplicated for seamless loop -->
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">DAZZ.</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">▲ Hexaware</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◼ Codesoup</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◆ VOLT</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">Cayosft</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◇ TRILIO</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">offizz</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">● Domolio</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◈ Dendify</span>
      <!-- duplicate -->
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">DAZZ.</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">▲ Hexaware</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◼ Codesoup</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◆ VOLT</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">Cayosft</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◇ TRILIO</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">offizz</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">● Domolio</span>
      <span class="text-white/25 font-display font-700 text-sm tracking-widest uppercase" style="font-size:.75rem">◈ Dendify</span>
    </div>
  </div>
</section>

<!-- ─── ONBOARDING ─── -->
<section id="services" class="bg-cream py-24 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="mb-14 reveal">
      <p class="text-xs font-body tracking-widest text-black/40 uppercase mb-3">Why clients pick Entlify</p>
      <h2 class="font-display font-800 text-black leading-tight" style="font-size:clamp(2rem,4vw,3.2rem)">
        Seamless <span style="color:#ff4c00">onboarding,</span><br/>outstanding results.
      </h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="reveal" style="transition-delay:.1s">
        <div class="w-10 h-10 rounded-full flex items-center justify-center mb-5" style="background:#ff4c0015">
          <span style="color:#ff4c00;font-size:1.2rem">⬡</span>
        </div>
        <h3 class="font-display font-700 text-black text-lg mb-2">Take client agency collaboration further</h3>
        <p class="text-black/50 font-body font-300 text-sm leading-relaxed">We align deeply with your team goals from day one, bringing strategy and execution under one roof.</p>
      </div>
      <div class="reveal" style="transition-delay:.2s">
        <div class="w-10 h-10 rounded-full flex items-center justify-center mb-5" style="background:#ff4c0015">
          <span style="color:#ff4c00;font-size:1.2rem">◎</span>
        </div>
        <h3 class="font-display font-700 text-black text-lg mb-2">Make your goals a much more tangible outcome</h3>
        <p class="text-black/50 font-body font-300 text-sm leading-relaxed">We translate vague business targets into measurable campaigns with clear north-star metrics.</p>
      </div>
      <div class="reveal" style="transition-delay:.3s">
        <div class="w-10 h-10 rounded-full flex items-center justify-center mb-5" style="background:#ff4c0015">
          <span style="color:#ff4c00;font-size:1.2rem">◈</span>
        </div>
        <h3 class="font-display font-700 text-black text-lg mb-2">A team that has a winner-stock attitude</h3>
        <p class="text-black/50 font-body font-300 text-sm leading-relaxed">Our growth-obsessed team combines analytical rigour with creative boldness to beat benchmarks.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── MORE THAN DIGITAL ─── -->
<section class="relative bg-dark py-24 px-6 overflow-hidden">
  <!-- Asterisk motif -->
  <div class="asterisk select-none" aria-hidden="true">✳</div>
  <div class="max-w-6xl mx-auto relative z-10">
    <div class="max-w-lg reveal">
      <p class="text-xs font-body tracking-widest text-white/30 uppercase mb-4">Our services</p>
      <h2 class="font-display font-800 text-white leading-tight mb-10" style="font-size:clamp(2.2rem,4.5vw,3.6rem)">More than<br/>digital marketing</h2>
      <ul class="space-y-4 font-body font-300 text-white/60 text-lg">
        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default"><span style="color:#ff4c00">→</span> Search Engine Optimization</li>
        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default"><span style="color:#ff4c00">→</span> Web Dev &amp; Maintenance</li>
        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default"><span style="color:#ff4c00">→</span> Conversion Rate Optimization</li>
        <li class="flex items-center gap-3 hover:text-white transition-colors cursor-default"><span style="color:#ff4c00">→</span> Paid Search Advertising</li>
      </ul>
    </div>
  </div>
</section>

<!-- ─── TICKER STRIP ─── -->
<div class="bg-dark-surface border-y border-white/5 py-4 overflow-hidden">
  <div class="flex">
    <div class="ticker-track gap-8 items-center px-6" style="animation-duration:22s">
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Keyword Mapping</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Competitive Analysis</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Keyword Research</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Web Reporting</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Traffic Acquisition</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> A/B Testing</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Core Web Vitals</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Backlink Profile</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Development</span>
      <!-- duplicate -->
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Keyword Mapping</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Competitive Analysis</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Keyword Research</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Web Reporting</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Traffic Acquisition</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> A/B Testing</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Core Web Vitals</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Backlink Profile</span>
      <span class="text-white/40 text-xs font-body flex items-center gap-2"><span style="color:#ff4c00">✦</span> Development</span>
    </div>
  </div>
</div>

<!-- ─── SHORTEST PATH CTA ─── -->
<section class="bg-dark py-28 px-6 text-center">
  <div class="max-w-3xl mx-auto reveal">
    <h2 class="font-display font-800 text-white leading-tight mb-8" style="font-size:clamp(2.4rem,5vw,4rem)">
      Find the <span style="color:#ff4c00">shortest path</span><br/>to revenue with Entlify
    </h2>
    <button class="btn-orange" style="font-size:1rem;padding:.85rem 2.5rem">Get in touch →</button>
  </div>
</section>

<!-- ─── SEO SECTION ─── -->
<section id="seo" class="bg-dark py-20 px-6 border-t border-white/5">
  <div class="max-w-6xl mx-auto">
    <div class="mb-12 reveal">
      <p class="text-xs font-body tracking-widest text-white/30 uppercase mb-3">Service spotlight</p>
      <h2 class="font-display font-800 text-white leading-tight" style="font-size:clamp(2rem,4vw,3rem)">
        Search Engine<br/><span style="color:#ff4c00">Optimization</span>
      </h2>
      <p class="text-white/40 font-body font-300 mt-3 text-sm">Ensure your SEO works beyond the algorithm.</p>
    </div>

    <!-- Chart -->
    <div class="rounded-2xl border border-white/8 p-6 mb-12 reveal" style="background:#111">
      <div class="flex gap-4 items-center mb-6">
        <div class="flex items-center gap-2 text-xs text-white/40"><span class="inline-block w-6 h-0.5 rounded" style="background:#00d4a0"></span>Organic Traffic</div>
        <div class="flex items-center gap-2 text-xs text-white/40"><span class="inline-block w-6 h-0.5 rounded" style="background:#ff4c00"></span>Keyword Rank</div>
      </div>
      <svg viewBox="0 0 700 200" xmlns="http://www.w3.org/2000/svg" style="width:100%;height:auto">
        <!-- Grid lines -->
        <line x1="0" y1="160" x2="700" y2="160" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
        <line x1="0" y1="120" x2="700" y2="120" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
        <line x1="0" y1="80" x2="700" y2="80" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
        <line x1="0" y1="40" x2="700" y2="40" stroke="rgba(255,255,255,.05)" stroke-width="1"/>
        <!-- Teal line: organic traffic -->
        <polyline class="line" stroke="#00d4a0"
          points="20,155 100,148 180,138 260,118 340,95 420,70 500,45 580,28 660,18"/>
        <!-- Orange line: keyword rank -->
        <polyline class="line" stroke="#ff4c00" stroke-dasharray="5 3"
          points="20,162 100,158 180,150 260,135 340,115 420,95 500,72 580,52 660,38"/>
        <!-- Dots teal -->
        <circle cx="660" cy="18" r="4" fill="#00d4a0"/>
        <circle cx="340" cy="95" r="3" fill="#00d4a0" opacity=".6"/>
        <!-- Dots orange -->
        <circle cx="660" cy="38" r="4" fill="#ff4c00"/>
      </svg>
    </div>

    <!-- 3 benefits -->
    <div class="grid md:grid-cols-3 gap-8">
      <div class="reveal" style="transition-delay:.1s">
        <div class="text-2xl font-display font-800 text-white mb-2">+340%</div>
        <h4 class="font-display font-700 text-white mb-1 text-sm">Increase conversions</h4>
        <p class="text-white/40 text-xs font-body font-300 leading-relaxed">Identify gaps and align content to what customers search for.</p>
      </div>
      <div class="reveal" style="transition-delay:.2s">
        <div class="text-2xl font-display font-800" style="color:#ff4c00;margin-bottom:.5rem">2× faster</div>
        <h4 class="font-display font-700 text-white mb-1 text-sm">Outperform competition</h4>
        <p class="text-white/40 text-xs font-body font-300 leading-relaxed">Identifying and fixing gaps and ranking opportunities.</p>
      </div>
      <div class="reveal" style="transition-delay:.3s">
        <div class="text-2xl font-display font-800" style="color:#00d4a0;margin-bottom:.5rem">3× ROI</div>
        <h4 class="font-display font-700 text-white mb-1 text-sm">Leverage content investment</h4>
        <p class="text-white/40 text-xs font-body font-300 leading-relaxed">Through content optimization and performance assessments.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── CRO ─── -->
<section id="cro" class="bg-cream py-24 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="mb-14 reveal">
      <p class="text-xs font-body tracking-widest text-black/40 uppercase mb-3">Service spotlight</p>
      <h2 class="font-display font-800 text-black leading-tight" style="font-size:clamp(2rem,4vw,3rem)">Conversion Rate<br/>Optimization</h2>
      <p class="text-black/40 font-body font-300 mt-3 text-sm">Make every dollar count.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-0 border border-black/10 rounded-2xl overflow-hidden">
      <div class="p-8 border-r border-black/10 reveal">
        <p class="text-xs font-body tracking-widest text-black/30 uppercase mb-4">Step 01</p>
        <h3 class="font-display font-800 text-black text-2xl mb-4">Optimize</h3>
        <p class="text-black/50 font-body font-300 text-sm leading-relaxed">Reduce customer acquisition costs by aligning campaigns, pages, and analytics to remove friction at every funnel stage.</p>
      </div>
      <div class="p-8 border-r border-black/10 reveal" style="transition-delay:.15s">
        <p class="text-xs font-body tracking-widest text-black/30 uppercase mb-4">Step 02</p>
        <h3 class="font-display font-800 text-black text-2xl mb-4">Engage</h3>
        <p class="text-black/50 font-body font-300 text-sm leading-relaxed">Leverage analytics to make data-driven decisions that create compelling user journeys and higher engagement signals.</p>
      </div>
      <div class="p-8 reveal" style="transition-delay:.3s">
        <p class="text-xs font-body tracking-widest uppercase mb-4" style="color:#ff4c00">Step 03</p>
        <h3 class="font-display font-800 text-2xl mb-4" style="color:#ff4c00">Profit</h3>
        <p class="text-black/50 font-body font-300 text-sm leading-relaxed">Ensure a seamless UX by streamlining site architecture, converting more visitors into paying, loyal customers.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── PAID SEARCH ─── -->
<section class="bg-cream pb-24 px-6 border-t border-black/8">
  <div class="max-w-6xl mx-auto">
    <div class="mb-14 pt-16 reveal">
      <p class="text-xs font-body tracking-widest text-black/40 uppercase mb-3">Service spotlight</p>
      <h2 class="font-display font-800 text-black leading-tight" style="font-size:clamp(2rem,4vw,3rem)">Paid Search<br/>Advertising</h2>
      <p class="text-black/40 font-body font-300 mt-3 text-sm">Make every dollar return more.</p>
    </div>

    <!-- Process flow -->
    <div class="reveal">
      <div class="flex flex-wrap items-center gap-3 mb-10">
        <div class="proc-node">Keyword Research</div>
        <span class="proc-arrow">→</span>
        <div class="proc-node">Landing Page Dev</div>
        <span class="proc-arrow">→</span>
        <div class="proc-node">Copy &amp; Creatives</div>
        <span class="proc-arrow">→</span>
        <div class="proc-node">A/B Testing</div>
        <span class="proc-arrow">→</span>
        <div class="proc-node" style="border-color:#ff4c00;color:#ff4c00">CRO</div>
      </div>
    </div>

    <div class="grid md:grid-cols-3 gap-8">
      <div class="reveal" style="transition-delay:.1s">
        <h4 class="font-display font-700 text-black text-sm mb-2">Achieve immediate exposure</h4>
        <p class="text-black/50 text-xs font-body font-300 leading-relaxed">Paid search puts your offer in front of high-intent audiences at exactly the right moment.</p>
      </div>
      <div class="reveal" style="transition-delay:.2s">
        <h4 class="font-display font-700 text-black text-sm mb-2">Accelerate lead generation</h4>
        <p class="text-black/50 text-xs font-body font-300 leading-relaxed">Through data-driven ad copy and rapid iteration, we lower CPL and increase pipeline velocity.</p>
      </div>
      <div class="reveal" style="transition-delay:.3s">
        <h4 class="font-display font-700 text-black text-sm mb-2">Get the most from your budget</h4>
        <p class="text-black/50 text-xs font-body font-300 leading-relaxed">Constant optimization ensures every dollar is working — no wasted spend, no guesswork.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── WEB DEV ─── -->
<section id="webdev" class="bg-cream pb-24 px-6 border-t border-black/8">
  <div class="max-w-6xl mx-auto pt-16">
    <div class="mb-14 reveal">
      <p class="text-xs font-body tracking-widest text-black/40 uppercase mb-3">Service spotlight</p>
      <h2 class="font-display font-800 text-black leading-tight" style="font-size:clamp(2rem,4vw,3rem)">Web Development<br/>&amp; Maintenance</h2>
      <p class="text-black/40 font-body font-300 mt-3 text-sm">Build business websites that convert.</p>
    </div>
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Health Score card -->
      <div class="rounded-2xl border border-black/8 p-8 bg-white reveal">
        <p class="text-xs text-black/40 font-body uppercase tracking-widest mb-6">Health Score</p>
        <div class="flex items-center gap-8">
          <!-- Gauge SVG -->
          <svg width="110" height="110" viewBox="0 0 110 110">
            <circle cx="55" cy="55" r="44" fill="none" stroke="#e5e7eb" stroke-width="10"/>
            <circle cx="55" cy="55" r="44" fill="none" stroke="#22c55e" stroke-width="10"
              stroke-dasharray="276.46" stroke-dashoffset="13.8"
              class="gauge-circle" style="transform-origin:55px 55px"/>
            <text x="55" y="60" text-anchor="middle" font-family="Syne,sans-serif" font-weight="800" font-size="22" fill="#111">96%</text>
          </svg>
          <div>
            <p class="font-display font-700 text-2xl text-black mb-1">Excellent</p>
            <p class="text-black/40 text-xs font-body leading-relaxed">Your site performance is in the top 4% globally. Keep it that way.</p>
          </div>
        </div>
        <div class="mt-6 grid grid-cols-3 gap-3">
          <div class="text-center"><div class="text-xs text-black/40 mb-1">Speed</div><div class="font-display font-700 text-sm text-black">98</div></div>
          <div class="text-center"><div class="text-xs text-black/40 mb-1">SEO</div><div class="font-display font-700 text-sm text-black">94</div></div>
          <div class="text-center"><div class="text-xs text-black/40 mb-1">A11y</div><div class="font-display font-700 text-sm text-black">96</div></div>
        </div>
      </div>
      <!-- Technical issues card -->
      <div class="rounded-2xl border border-black/8 p-8 bg-white reveal" style="transition-delay:.15s">
        <p class="text-xs text-black/40 font-body uppercase tracking-widest mb-6">Technical Issues Found</p>
        <div class="font-display font-800 text-black mb-6" style="font-size:3rem">185</div>
        <div class="space-y-3">
          <div class="flex items-center justify-between">
            <span class="text-xs font-body text-black/50">Critical</span>
            <div class="flex items-center gap-3">
              <div class="h-1.5 rounded-full bg-gray-100 w-32 overflow-hidden">
                <div class="h-full rounded-full" style="width:15%;background:#ef4444"></div>
              </div>
              <span class="text-xs font-display font-700 text-black w-8">15%</span>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-xs font-body text-black/50">Warnings</span>
            <div class="flex items-center gap-3">
              <div class="h-1.5 rounded-full bg-gray-100 w-32 overflow-hidden">
                <div class="h-full rounded-full" style="width:41%;background:#f97316"></div>
              </div>
              <span class="text-xs font-display font-700 text-black w-8">41%</span>
            </div>
          </div>
          <div class="flex items-center justify-between">
            <span class="text-xs font-body text-black/50">Notices</span>
            <div class="flex items-center gap-3">
              <div class="h-1.5 rounded-full bg-gray-100 w-32 overflow-hidden">
                <div class="h-full rounded-full" style="width:44%;background:#22c55e"></div>
              </div>
              <span class="text-xs font-display font-700 text-black w-8">44%</span>
            </div>
          </div>
        </div>
        <p class="text-black/30 text-xs mt-6 font-body">We audit and fix all categories — automatically offloaded from your engineering team.</p>
      </div>
    </div>
  </div>
</section>

<!-- ─── GAIN MORE CTA ─── -->
<section class="bg-dark py-28 px-6 text-center overflow-hidden relative">
  <div class="hero-orb" style="top:-60px;opacity:.5"></div>
  <div class="max-w-3xl mx-auto relative z-10 reveal">
    <h2 class="font-display font-800 text-white leading-tight mb-4" style="font-size:clamp(2.5rem,5vw,4.2rem)">
      Gain <span style="color:#ff4c00">more↗</span> with less
    </h2>
    <p class="text-white/40 font-body font-300 text-lg mb-10 max-w-xl mx-auto leading-relaxed">Save time on the responsibilities of a digital marketing strategy, eliminate guesswork, and optimize your website for exceptional performance — all with one team.</p>
    <button class="btn-orange" style="font-size:1rem;padding:.85rem 2.5rem">Contact us →</button>
  </div>
</section>

<!-- ─── TESTIMONIALS ─── -->
<section id="work" class="bg-cream py-24 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="mb-14 reveal">
      <p class="text-xs font-body tracking-widest text-black/40 uppercase mb-3">Client stories</p>
      <h2 class="font-display font-800 text-black leading-tight" style="font-size:clamp(2rem,4vw,3rem)">Our work<br/>in action</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-6">
      <div class="bg-white rounded-2xl p-7 border border-black/8 reveal">
        <div class="stars text-sm mb-3">★★★★★</div>
        <p class="text-black/70 font-body font-300 text-sm leading-relaxed mb-6">"Entlify completely transformed our organic traffic. Within 4 months we were ranking on page one for our most competitive keywords — I didn't think it was possible this fast."</p>
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-display font-700" style="background:#ff4c0015;color:#ff4c00">JK</div>
          <div><div class="font-display font-700 text-black text-sm">James K.</div><div class="text-black/40 text-xs">Head of Growth, Codesoup</div></div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-7 border border-black/8 reveal" style="transition-delay:.15s">
        <div class="stars text-sm mb-3">★★★★★</div>
        <p class="text-black/70 font-body font-300 text-sm leading-relaxed mb-6">"Excellent service at a very competitive price. Their CRO work lifted our trial-to-paid conversion by 28% in the first quarter. ROI was clear and immediate."</p>
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-display font-700" style="background:#ff4c0015;color:#ff4c00">SR</div>
          <div><div class="font-display font-700 text-black text-sm">Sara R.</div><div class="text-black/40 text-xs">CMO, VOLT</div></div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-7 border border-black/8 reveal" style="transition-delay:.3s">
        <div class="stars text-sm mb-3">★★★★★</div>
        <p class="text-black/70 font-body font-300 text-sm leading-relaxed mb-6">"High quality work and genuinely fast turnaround. The web dev team rebuilt our entire site and our Core Web Vitals went from red to green across the board."</p>
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-display font-700" style="background:#ff4c0015;color:#ff4c00">AM</div>
          <div><div class="font-display font-700 text-black text-sm">Alex M.</div><div class="text-black/40 text-xs">CTO, Trilio</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── FOOTER / LET'S GET STARTED ─── -->
<footer class="bg-cream border-t border-black/8 py-20 px-6">
  <div class="max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-16 mb-16">
      <div class="reveal">
        <h2 class="font-display font-800 text-black leading-tight mb-6" style="font-size:clamp(2.5rem,5vw,4rem)">Let's get<br/>started</h2>
        <p class="text-black/40 font-body font-300 text-sm leading-relaxed mb-8 max-w-sm">Learn more about how Entlify can help your business grow faster with less guesswork.</p>
        <button class="btn-orange" style="font-size:.95rem">Request a free audit →</button>
      </div>
      <div class="reveal" style="transition-delay:.15s">
        <div class="grid grid-cols-2 gap-8 text-sm">
          <div>
            <p class="font-display font-700 text-black mb-4 text-xs uppercase tracking-widest">Services</p>
            <ul class="space-y-2.5 text-black/50 font-body font-300">
              <li><a href="#" class="hover:text-black transition-colors">SEO</a></li>
              <li><a href="#" class="hover:text-black transition-colors">Web Dev & Maintenance</a></li>
              <li><a href="#" class="hover:text-black transition-colors">Conversion Rate Optimization</a></li>
              <li><a href="#" class="hover:text-black transition-colors">Paid Search Advertising</a></li>
            </ul>
          </div>
          <div>
            <p class="font-display font-700 text-black mb-4 text-xs uppercase tracking-widest">Company</p>
            <ul class="space-y-2.5 text-black/50 font-body font-300">
              <li><a href="#" class="hover:text-black transition-colors">About</a></li>
              <li><a href="#" class="hover:text-black transition-colors">Case Studies</a></li>
              <li><a href="#" class="hover:text-black transition-colors">Blog</a></li>
              <li><a href="#" class="hover:text-black transition-colors">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="mt-8">
          <p class="font-display font-700 text-black mb-3 text-xs uppercase tracking-widest">Stay in the loop</p>
          <div class="flex gap-2">
            <input type="email" placeholder="your@email.com" class="flex-1 rounded-full px-4 py-2 text-sm border border-black/15 bg-white font-body outline-none focus:border-orange" style="font-family:'DM Sans',sans-serif"/>
            <button class="btn-orange" style="padding:.5rem 1.25rem;font-size:.85rem">→</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Bottom bar -->
    <div class="pt-6 border-t border-black/8 flex flex-wrap justify-between items-center gap-4">
      <span class="font-display font-700 text-black"><span style="color:#ff4c00">↗</span>entlify</span>
      <span class="text-black/30 text-xs font-body">© 2025 Entlify. All rights reserved.</span>
      <div class="flex gap-4 text-xs text-black/30 font-body">
        <a href="#" class="hover:text-black transition-colors">Privacy</a>
        <a href="#" class="hover:text-black transition-colors">Terms</a>
        <a href="#" class="hover:text-black transition-colors">Cookies</a>
      </div>
    </div>
  </div>
</footer>

<script>
// Scroll reveal
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('visible');
      observer.unobserve(e.target);
    }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Stagger first section immediately
setTimeout(() => {
  document.querySelectorAll('.reveal').forEach(el => {
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight) {
      el.classList.add('visible');
    }
  });
}, 100);
</script>
</body>
</html>