<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BizCashAndCapital — Best Business Loans for Low Credit Score</title>
  <!-- Google Fonts: Inter + Space Grotesk -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: #f8fafc;
      color: #0a0c10;
      line-height: 1.5;
      overflow-x: hidden;
    }

    /* Full width container override - sections take full width */
    .full-width {
      width: 100%;
    }

    /* Inner content container for consistent padding */
    .inner-container {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* Section spacing */
    section {
      margin-top: 0;
    }

    /* Button styles */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 14px 32px;
      border-radius: 100px;
      font-weight: 600;
      font-size: 14px;
      transition: all 0.25s ease;
      cursor: pointer;
      text-decoration: none;
      border: none;
    }

    .btn-primary {
      background: #1a2c3e;
      color: white;
    }

    .btn-primary:hover {
      background: #0f1e2c;
      transform: translateY(-2px);
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid #d0d5dd;
      color: #1a2c3e;
    }

    .btn-outline:hover {
      border-color: #1a2c3e;
      background: rgba(26,44,62,0.04);
      transform: translateY(-2px);
    }

    /* Card styles */
    .card {
      background: white;
      border-radius: 28px;
      padding: 32px;
      box-shadow: 0 12px 30px rgba(0,0,0,0.04), 0 2px 4px rgba(0,0,0,0.02);
      transition: all 0.3s ease;
      border: 1px solid rgba(0,0,0,0.03);
    }

    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 24px 48px rgba(0,0,0,0.08);
      border-color: #e2e8f0;
    }

    /* Dashboard card inside hero */
    .dashboard-card {
      background: rgba(255,255,255,0.98);
      backdrop-filter: blur(2px);
      border-radius: 24px;
      padding: 24px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.05);
      border: 1px solid rgba(0,0,0,0.05);
      transition: all 0.25s ease;
    }

    .dashboard-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 16px 32px rgba(0,0,0,0.1);
    }

    /* Hero section - full width with diagonal accent */
    .hero-premium {
      background: linear-gradient(135deg, #0a0f1a 0%, #0f172a 50%, #1a1f2e 100%);
      padding: 64px 0;
      color: white;
      position: relative;
      overflow: hidden;
      width: 100%;
    }

    .hero-premium::before {
      content: '';
      position: absolute;
      top: -30%;
      right: -5%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(30,90,255,0.08) 0%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }

    .hero-premium::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 2px;
      background: linear-gradient(90deg, transparent, #3b82f6, #1e5aff, #3b82f6, transparent);
    }

    /* Grid utilities */
    .grid-3 {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 28px;
    }

    .grid-2 {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 56px;
    }

    /* Navbar - full width */
    .navbar-full {
      width: 100%;
      border-bottom: 1px solid #eef2f6;
      background: #f8fafc;
    }
    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 24px 0;
      flex-wrap: wrap;
      gap: 20px;
    }

    .logo {
      font-family: 'Space Grotesk', sans-serif;
      font-weight: 700;
      font-size: 24px;
      letter-spacing: -0.3px;
      background: linear-gradient(135deg, #1a2c3e, #2d4a6e);
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .nav-links {
      display: flex;
      gap: 32px;
      align-items: center;
      flex-wrap: wrap;
    }
    .nav-links a {
      text-decoration: none;
      color: #4a5568;
      font-weight: 500;
      font-size: 14px;
      transition: color 0.2s;
    }
    .nav-links a:hover {
      color: #1a2c3e;
    }

    .pill-tag {
      background: #eef2ff;
      padding: 6px 16px;
      border-radius: 100px;
      font-size: 12px;
      font-weight: 600;
      color: #1a2c3e;
    }

    /* Hero inner layout */
    .hero-content-inner {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 24px;
    }

    .hero-top {
      display: flex;
      justify-content: space-between;
      gap: 60px;
      margin-bottom: 56px;
      flex-wrap: wrap;
      position: relative;
      z-index: 2;
    }

    .hero-title {
      font-family: 'Space Grotesk', sans-serif;
      font-size: clamp(48px, 7vw, 80px);
      font-weight: 800;
      letter-spacing: -0.02em;
      line-height: 1.05;
      text-transform: uppercase;
    }

    .hero-title .accent {
      color: #3b82f6;
      display: inline-block;
      position: relative;
    }

    .hero-title .accent::after {
      content: '';
      position: absolute;
      bottom: 8px;
      left: 0;
      width: 100%;
      height: 4px;
      background: #3b82f6;
      border-radius: 4px;
      opacity: 0.5;
    }

    .hero-desc {
      max-width: 400px;
      color: #94a3b8;
      font-size: 16px;
      line-height: 1.6;
      border-left: 2px solid #3b82f6;
      padding-left: 24px;
    }

    .hero-stats-row {
      display: flex;
      gap: 48px;
      margin: 40px 0 48px;
      flex-wrap: wrap;
      border-top: 1px solid rgba(255,255,255,0.08);
      padding-top: 40px;
    }

    .hero-stat {
      text-align: left;
    }
    .hero-stat .number {
      font-family: 'Space Grotesk', sans-serif;
      font-size: 32px;
      font-weight: 800;
      color: white;
      line-height: 1.2;
    }
    .hero-stat .label {
      font-size: 12px;
      color: #94a3b8;
      letter-spacing: 0.5px;
    }

    /* Section header */
    .section-header {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      margin-bottom: 56px;
      flex-wrap: wrap;
      gap: 24px;
    }
    .section-header-left h2 {
      font-family: 'Space Grotesk', sans-serif;
      font-size: clamp(36px, 5vw, 52px);
      font-weight: 700;
      letter-spacing: -0.02em;
      line-height: 1.2;
    }

    /* Service items */
    .service-item {
      border-top: 1px solid #eef2f6;
      padding: 28px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.3s ease;
    }
    .service-item:last-child {
      border-bottom: 1px solid #eef2f6;
    }
    .service-item:hover {
      padding-left: 20px;
    }
    .service-num {
      font-weight: 600;
      color: #8e9db5;
    }

    /* FAQ items */
    .faq-item {
      border-top: 1px solid #eef2f6;
      padding: 24px 0;
      cursor: pointer;
      transition: all 0.2s;
    }
    .faq-item:last-child {
      border-bottom: 1px solid #eef2f6;
    }
    .faq-question {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 17px;
      font-weight: 600;
      font-family: 'Space Grotesk', sans-serif;
    }
    .faq-answer {
      font-size: 14px;
      line-height: 1.6;
      color: #5a6874;
      margin-top: 16px;
      display: none;
    }
    .faq-item.open .faq-answer {
      display: block;
    }
    .faq-toggle {
      width: 28px;
      height: 28px;
      border: 1.5px solid #e2e8f0;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 18px;
      font-weight: 600;
      transition: all 0.2s;
    }
    .faq-item.open .faq-toggle {
      background: #1a2c3e;
      border-color: #1a2c3e;
      color: white;
      transform: rotate(180deg);
    }

    /* Marquee - full width */
    .marquee {
      background: #1a2c3e;
      padding: 20px 0;
      overflow: hidden;
      white-space: nowrap;
      width: 100%;
    }
    .marquee-track {
      display: inline-flex;
      gap: 48px;
      animation: marquee 25s linear infinite;
      padding-left: 24px;
    }
    @keyframes marquee {
      from { transform: translateX(0); }
      to { transform: translateX(-50%); }
    }

    /* Full width sections */
    .full-section {
      width: 100%;
      padding: 80px 0;
    }

    .full-section-light {
      background: #f1f5f9;
      width: 100%;
      padding: 80px 0;
    }

    .full-section-dark {
      background: #0f172a;
      width: 100%;
      padding: 80px 0;
    }

    /* Stats row */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1px;
      background: #eef2f6;
      border-radius: 24px;
      overflow: hidden;
    }
    .stat-item {
      background: white;
      padding: 48px;
      text-align: center;
    }

    /* Footer full width */
    .footer-full {
      width: 100%;
      border-top: 1px solid #eef2f6;
      background: #f8fafc;
    }

    /* ========== VALORANT THEME BORDER STYLES ========== */
    /* Sharp angled borders with accent stripes */
    .valorant-border {
      position: relative;
      border: none !important;
    }
    
    .valorant-border::before {
      content: '';
      position: absolute;
      top: -2px;
      left: -2px;
      right: -2px;
      bottom: -2px;
      background: linear-gradient(135deg, #3b82f6 0%, #1e5aff 25%, transparent 50%, #3b82f6 75%, #1e5aff 100%);
      border-radius: inherit;
      z-index: -1;
      opacity: 0.4;
    }
    
    .valorant-border::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: inherit;
      border-radius: inherit;
      z-index: -1;
    }

    /* Responsive */
    @media (max-width: 1024px) {
      .grid-3, .grid-2 {
        grid-template-columns: 1fr;
        gap: 32px;
      }
      .hero-premium {
        padding: 40px 0;
      }
      .full-section, .full-section-light, .full-section-dark {
        padding: 60px 0;
      }
      .stats-grid {
        grid-template-columns: 1fr;
        gap: 1px;
      }
    }

    @media (max-width: 640px) {
      .inner-container {
        padding: 0 20px;
      }
      .hero-content-inner {
        padding: 0 20px;
      }
      .hero-top {
        flex-direction: column;
        gap: 24px;
      }
      .hero-desc {
        border-left: none;
        padding-left: 0;
        border-top: 1px solid rgba(255,255,255,0.1);
        padding-top: 20px;
      }
      .navbar {
        flex-direction: column;
        text-align: center;
      }
      .nav-links {
        justify-content: center;
      }
      .hero-stats-row {
        gap: 24px;
      }
    }
  </style>
</head>
<body>

<!-- Navbar - Full Width -->
<div class="navbar-full">
  <div class="inner-container">
    <div class="navbar">
      <div class="logo">BizCash&Capital</div>
      <div class="nav-links">
        <span class="pill-tag">Business Loans</span>
        <span class="pill-tag">Fast Funding</span>
        <span class="pill-tag">Low Interest</span>
        <a href="#" class="btn btn-outline" style="padding: 8px 20px;">Sign in</a>
      </div>
    </div>
  </div>
</div>

<!-- HERO Section - Full Width with Video Background (Text on Left, Cards Bottom Right) -->
<div class="hero-premium" style="position: relative; overflow: hidden; min-height: 100vh;">
  <!-- Video Background -->
  <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
    <source src="{{ asset('videos/landscape.mp4') }}" type="video/mp4">
  </video>
  
  <!-- Subtle color overlay -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(59,130,246,0.12) 0%, rgba(30,90,255,0.06) 100%); z-index: 1;"></div>
  
  <div class="hero-content-inner" style="position: relative; z-index: 2; height: 100vh; max-width: 1280px; margin: 0 auto; padding: 0 24px;">
    
    <!-- Hero text - centered vertically on the left side -->
    <div style="position: absolute; top: 50%; left: 24px; transform: translateY(-50%);">
      <h1 class="hero-title" style="font-weight: 500; text-transform: lowercase; color: white; text-shadow: 0 2px 15px rgba(0,0,0,0.4); margin-bottom: 12px;">
        best business<br>
        <span class="accent" style="color: #3b82f6; text-shadow: 0 0 20px rgba(59,130,246,0.5);">loan</span> —<br>
        low credit score
      </h1>
      <div style="font-family: 'Space Grotesk', monospace; font-size: 11px; color: rgba(255,255,255,0.8); letter-spacing: 2px; text-transform: lowercase; margin-top: 16px;">
        01 · manifesto
      </div>
      <div style="margin-top: 24px;">
        <a href="#apply" class="btn" style="background: #3b82f6; color: white; padding: 8px 24px; font-weight: 500; font-size: 13px; text-transform: lowercase; border-radius: 40px; text-decoration: none; display: inline-block;">get funding →</a>
      </div>
    </div>

    <!-- Cards - bottom right corner with Valorant border -->
    <div style="position: absolute; bottom: 40px; right: 24px; width: 45%;">
      <div class="grid-3" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;">
        <div class="dashboard-card valorant-border" style="padding: 14px; background: rgba(255,255,255,0.92); backdrop-filter: blur(12px); border-radius: 20px; position: relative;">
          <div style="display: flex; justify-content: space-between; margin-bottom: 6px;">
            <span style="font-weight: 500; font-size: 10px; color:#334155; text-transform: lowercase;">loan offer</span>
            <span style="background:#3b82f6; padding: 2px 8px; border-radius:40px; font-size:8px; font-weight:500; color: white; text-transform: lowercase;">pre-approved</span>
          </div>
          <div style="font-size: 22px; font-weight: 600; font-family:'Space Grotesk'; color:#0f172a;">$75k</div>
          <div style="font-size: 9px; color:#5a6874; margin-top: 3px; text-transform: lowercase;">up to $500k available</div>
          <div style="margin-top: 10px; border-top: 1px solid #eef2f6; padding-top: 8px; display: flex; justify-content: space-between;">
            <span style="font-size:9px; text-transform: lowercase;">apr from 8.9%</span>
            <span style="font-size:9px; font-weight:500; text-transform: lowercase;">24 mo term</span>
          </div>
        </div>
        <div class="dashboard-card valorant-border" style="padding: 14px; background: rgba(255,255,255,0.92); backdrop-filter: blur(12px); border-radius: 20px; position: relative;">
          <div style="margin-bottom: 6px;"><span style="font-weight: 500; font-size: 10px; color:#334155; text-transform: lowercase;">quick decision</span></div>
          <div style="font-size: 18px; font-weight: 600; font-family:'Space Grotesk'; text-transform: lowercase;">same-day</div>
          <div style="font-size: 9px; color:#5a6874; margin-top: 3px; text-transform: lowercase;">response</div>
          <div style="margin-top: 14px;"><a href="#" class="btn-primary" style="padding: 4px 10px; font-size:9px; border-radius:40px; text-decoration:none; font-weight:500; text-transform: lowercase; background: #1a2c3e;">check →</a></div>
        </div>
        <div class="dashboard-card valorant-border" style="padding: 14px; background: rgba(255,255,255,0.92); backdrop-filter: blur(12px); border-radius: 20px; position: relative;">
          <div style="margin-bottom: 6px;"><span style="font-weight: 500; font-size: 10px; color:#334155; text-transform: lowercase;">trust score</span></div>
          <div style="font-size: 26px; font-weight: 600; color:#1a2c3e;">4.92</div>
          <div style="font-size: 9px; color:#5a6874; text-transform: lowercase;">★ 2.1k reviews</div>
          <div style="margin-top: 8px; background:#eef2f6; border-radius: 40px; height: 3px;"><div style="width: 92%; background:#3b82f6; height: 3px; border-radius: 40px;"></div></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Get Started Section - Redesigned Layout with Valorant border -->
<div class="full-section" id="apply" style="background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%); position: relative;">
  <div class="inner-container" style="position: relative; z-index: 2;">
    <!-- Centered header -->
    <div style="text-align: center; margin-bottom: 60px;">
      <div style="display: inline-block; background: #eef2ff; padding: 6px 16px; border-radius: 100px; font-size: 12px; font-weight: 600; color: #1a2c3e; margin-bottom: 20px;">Get Started</div>
      <h2 style="font-family: 'Space Grotesk'; font-size: clamp(36px, 5vw, 48px); font-weight: 700; letter-spacing: -0.02em; margin-bottom: 16px;">Start your journey <br>in minutes</h2>
      <p style="color: #5a6874; max-width: 500px; margin: 0 auto;">With our personalized small business loans, achieve financial freedom while fueling your business growth.</p>
    </div>

    <!-- 3 Column Feature Cards -->
    <div class="grid-3" style="margin-bottom: 60px;">
      <div class="card valorant-border" style="text-align: center; padding: 32px 24px; position: relative; border: none;">
        <div style="width: 70px; height: 70px; background: #eef2ff; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=60&h=60&fit=crop" style="width: 50px; height: 50px; border-radius: 14px; object-fit: cover;">
        </div>
        <div style="font-size: 20px; font-weight: 700; margin-bottom: 8px;">No Application Fee</div>
        <p style="color: #5a6874; font-size: 13px;">Zero hidden fees. Transparent process from start to finish.</p>
      </div>
      <div class="card valorant-border" style="text-align: center; padding: 32px 24px; position: relative; border: none;">
        <div style="width: 70px; height: 70px; background: #eef2ff; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=60&h=60&fit=crop" style="width: 50px; height: 50px; border-radius: 14px; object-fit: cover;">
        </div>
        <div style="font-size: 20px; font-weight: 700; margin-bottom: 8px;">Quick Funding</div>
        <p style="color: #5a6874; font-size: 13px;">Approved in days, funded within a week. Streamlined evaluation.</p>
      </div>
      <div class="card valorant-border" style="text-align: center; padding: 32px 24px; position: relative; border: none;">
        <div style="width: 70px; height: 70px; background: #eef2ff; border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
          <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=60&h=60&fit=crop" style="width: 50px; height: 50px; border-radius: 14px; object-fit: cover;">
        </div>
        <div style="font-size: 20px; font-weight: 700; margin-bottom: 8px;">Low Interest Rates</div>
        <p style="color: #5a6874; font-size: 13px;">Flexible terms tailored to your cash flow. Designed for growth.</p>
      </div>
    </div>

    <!-- Loan Amount Calculator Section with Valorant border -->
    <div class="valorant-border" style="background: white; border-radius: 32px; padding: 48px; margin-bottom: 60px; border: none; box-shadow: 0 8px 24px rgba(0,0,0,0.04); position: relative;">
      <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 30px;">
        <div>
          <div style="font-family: 'Space Grotesk'; font-weight: 600; font-size: 13px; letter-spacing: 0.1em; color: #8e9db5; margin-bottom: 12px;">HOW MUCH CAPITAL?</div>
          <div style="font-size: 48px; font-weight: 700; font-family: 'Space Grotesk'; color: #1a2c3e;">$5K – $500K</div>
          <div style="display: flex; gap: 24px; margin-top: 20px; flex-wrap: wrap;">
            <div><span style="font-weight: 700; color: #1a2c3e;">0%</span><br><span style="font-size: 11px; color: #5a6874;">application fee</span></div>
            <div><span style="font-weight: 700; color: #1a2c3e;">24h</span><br><span style="font-size: 11px; color: #5a6874;">decision time</span></div>
            <div><span style="font-weight: 700; color: #1a2c3e;">6.5%</span><br><span style="font-size: 11px; color: #5a6874;">starting APR</span></div>
          </div>
        </div>
        <div>
          <a href="#" class="btn btn-primary" style="padding: 14px 36px; font-size: 14px; background: #1a2c3e;">Apply Now — Free →</a>
          <div style="font-family: 'Space Grotesk'; font-size: 12px; color: #8e9db5; margin-top: 12px; text-align: center;">( Quick Apply )</div>
        </div>
      </div>
    </div>

    <!-- Stats row with Valorant borders -->
    <div class="stats-grid" style="margin-top: 0;">
      <div class="stat-item valorant-border" style="padding: 40px; position: relative;">
        <div style="font-size: 52px; font-weight: 800; font-family:'Space Grotesk'; color: #1a2c3e;">3,000+</div>
        <div style="font-size: 13px; color:#5a6874; margin-top: 8px;">applications processed</div>
        <div style="width: 40px; height: 2px; background: #3b82f6; margin: 16px auto 0;"></div>
      </div>
      <div class="stat-item valorant-border" style="padding: 40px; position: relative;">
        <div style="font-size: 52px; font-weight: 800; font-family:'Space Grotesk'; color: #1a2c3e;">6+</div>
        <div style="font-size: 13px; color:#5a6874; margin-top: 8px;">years of expertise</div>
        <div style="width: 40px; height: 2px; background: #3b82f6; margin: 16px auto 0;"></div>
      </div>
      <div class="stat-item valorant-border" style="padding: 40px; position: relative;">
        <div style="font-size: 52px; font-weight: 800; font-family:'Space Grotesk'; color: #1a2c3e;">$500K</div>
        <div style="font-size: 13px; color:#5a6874; margin-top: 8px;">max funding available</div>
        <div style="width: 40px; height: 2px; background: #3b82f6; margin: 16px auto 0;"></div>
      </div>
    </div>
  </div>
</div>

<!-- About Us Section - Full Width with Video Background and Valorant border -->
<div class="full-section-light" style="position: relative; overflow: hidden;">
  <!-- Video Background -->
  <video autoplay loop muted playsinline style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
    <source src="{{ asset('videos/hero-section.mp4') }}" type="video/mp4">
    <source src="https://videos.pexels.com/video-files/3195394/3195394-uhd_2560_1440_30fps.mp4" type="video/mp4">
  </video>
  <!-- Dark Overlay -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, rgba(10,15,26,0.88) 0%, rgba(15,23,42,0.92) 100%); z-index: 1;"></div>
  
  <div class="inner-container valorant-border" style="position: relative; z-index: 2; border-radius: 48px; padding: 48px;">
    <div style="margin-bottom: 24px;">
      <span class="pill-tag" style="background: rgba(255,255,255,0.15); color: white; border: 1px solid rgba(255,255,255,0.2);">03: About Us</span> 
      <span class="pill-tag" style="background: rgba(255,255,255,0.15); color: white; border: 1px solid rgba(255,255,255,0.2);">Our Mission</span>
    </div>
    <div style="font-family: 'Space Grotesk'; font-size: clamp(42px, 8vw, 90px);  line-height: 1; letter-spacing: -0.02em; margin-bottom: 32px; color: white;">
      digital driving force<br>for your business
    </div>
    <div style="font-family: 'Space Grotesk'; font-size: 14px; color: rgba(255,255,255,0.7); margin-bottom: 48px;">
      ( full cycle financial partner )
    </div>
    <div class="grid-2" style="gap: 48px;">
      <p style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.85);">We empower businesses and ensure financial prosperity through tailored commercial loan services. Every brand gets a bespoke approach.</p>
      <p style="font-size: 15px; line-height: 1.6; color: rgba(255,255,255,0.85);">To build an effective strategy, we study your business, your market, and your goals in depth — then deliver the right capital solution.</p>
    </div>
  </div>
</div>

<!-- Loan Services Section - Full Width with Valorant borders -->
<div class="full-section">
  <div class="inner-container">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 48px; flex-wrap: wrap;">
      <h2 style="font-family: 'Space Grotesk'; font-size: 48px; font-weight: 700;">All loan solutions</h2>
      <div style="font-family: 'Space Grotesk'; font-size: 14px; color: #8e9db5;">( Loan Types )</div>
    </div>
    <div class="service-item valorant-border" style="position: relative; padding: 28px 0;"><div style="display: flex; gap: 24px; align-items: center;"><span class="service-num">01</span><span style="font-size: 22px; font-weight: 600;">Business Loan</span></div><span style="color:#8e9db5;">Expand & grow</span></div>
    <div class="service-item valorant-border" style="position: relative; padding: 28px 0;"><div style="display: flex; gap: 24px;"><span class="service-num">02</span><span style="font-size: 22px; font-weight: 600;">Commercial Loan</span></div><span style="color:#8e9db5;">Real estate & equipment</span></div>
    <div class="service-item valorant-border" style="position: relative; padding: 28px 0;"><div style="display: flex; gap: 24px;"><span class="service-num">03</span><span style="font-size: 22px; font-weight: 600;">SBA Loan</span></div><span style="color:#8e9db5;">Government-backed funding</span></div>
    <div class="service-item valorant-border" style="position: relative; padding: 28px 0;"><div style="display: flex; gap: 24px;"><span class="service-num">04</span><span style="font-size: 22px; font-weight: 600;">Construction Loan</span></div><span style="color:#8e9db5;">Build your vision</span></div>
  </div>
</div>

<!-- Marquee - Full Width -->
<div class="marquee">
  <div class="marquee-track">
    <span style="font-weight: 700;">BUSINESS LOANS</span> ✦
    <span style="font-weight: 700;">FAST FUNDING</span> ✦
    <span style="font-weight: 700;">NO APPLICATION FEE</span> ✦
    <span style="font-weight: 700;">LOW INTEREST RATES</span> ✦
    <span style="font-weight: 700;">BAD CREDIT WELCOME</span> ✦
    <span style="font-weight: 700;">SBA & COMMERCIAL</span> ✦
    <span style="font-weight: 700;">BUSINESS LOANS</span> ✦
    <span style="font-weight: 700;">FAST FUNDING</span> ✦
  </div>
</div>

<!-- Why Us Section - Full Width with Valorant borders -->
<div class="full-section">
  <div class="inner-container">
    <div style="margin-bottom: 56px;"><h2 style="font-family: 'Space Grotesk'; font-size: 48px; font-weight: 700;">Your reliable partners</h2></div>
    <div class="grid-3">
      <div class="card valorant-border" style="position: relative; border: none;"><div style="font-size: 48px; margin-bottom: 20px;">⚡</div><h3 style="font-size: 22px; font-weight: 700; margin-bottom: 12px;">Quick Funding</h3><p style="color: #5a6874;">Shortened approval with practical evaluation ensures fast capital when needed.</p></div>
      <div class="card valorant-border" style="position: relative; border: none;"><div style="font-size: 48px; margin-bottom: 20px;">💰</div><h3 style="font-size: 22px; font-weight: 700; margin-bottom: 12px;">No Application Fee</h3><p style="color: #5a6874;">Transparency with zero unnecessary costs. Your money works for you.</p></div>
      <div class="card valorant-border" style="position: relative; border: none;"><div style="font-size: 48px; margin-bottom: 20px;">📉</div><h3 style="font-size: 22px; font-weight: 700; margin-bottom: 12px;">Low-Interest Loans</h3><p style="color: #5a6874;">Flexible repayment terms for lasting financial freedom and growth.</p></div>
    </div>
  </div>
</div>

<!-- FAQs Section - Full Width with Valorant borders -->
<div class="full-section-light">
  <div class="inner-container">
    <div class="grid-2" style="gap: 64px;">
      <div class="valorant-border" style="border-radius: 32px; padding: 32px; position: relative;">
        <h2 style="font-family: 'Space Grotesk'; font-size: 48px; font-weight: 700; margin-bottom: 20px;">What customers ask about</h2>
        <p style="color: #5a6874; margin-bottom: 32px;">Everything about BizCashAndCapital and how we help your business thrive.</p>
        <a href="tel:+12166470007" class="btn btn-outline">+1 (216) 647-0007 →</a>
      </div>
      <div>
        <div class="faq-item valorant-border" onclick="toggleFaq(this)" style="position: relative;"><div class="faq-question"><span>What is BizCashAndCapital?</span><div class="faq-toggle">+</div></div><div class="faq-answer">We're a leading provider of business loans, specializing in low-credit solutions and fast funding.</div></div>
        <div class="faq-item valorant-border" onclick="toggleFaq(this)" style="position: relative;"><div class="faq-question"><span>How does BizCashAndCapital work?</span><div class="faq-toggle">+</div></div><div class="faq-answer">Streamlined online application, holistic review, and funding within days.</div></div>
        <div class="faq-item valorant-border" onclick="toggleFaq(this)" style="position: relative;"><div class="faq-question"><span>No worries about a bad credit score?</span><div class="faq-toggle">+</div></div><div class="faq-answer">Correct. We specialize in loans for businesses with low credit scores.</div></div>
        <div class="faq-item valorant-border" onclick="toggleFaq(this)" style="position: relative;"><div class="faq-question"><span>What are the criteria for loan application?</span><div class="faq-toggle">+</div></div><div class="faq-answer">Minimum 6 months in business. Simple documentation required.</div></div>
      </div>
    </div>
  </div>
</div>

<!-- CTA Section - Full Width Dark with Valorant border -->
<div class="full-section-dark">
  <div class="inner-container valorant-border" style="text-align: center; border-radius: 48px; padding: 64px 48px; position: relative;">
    <h2 style="font-family: 'Space Grotesk'; font-size: clamp(42px, 6vw, 72px); font-weight: 700; color: white; margin-bottom: 24px;">Start your application</h2>
    <div style="font-family: 'Space Grotesk'; font-size: 14px; color: #94a3b8; margin-bottom: 40px;">( No fee to apply. Ready? )</div>
    <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap;">
      <a href="mailto:info@bizcashandcapital.com" class="btn" style="background: white; color: #0f172a; font-weight: 700;">info@bizcashandcapital.com</a>
      <a href="tel:+12166470007" class="btn btn-outline" style="border-color: white; color: white;">+1 (216) 647-0007</a>
    </div>
  </div>
</div>

<!-- Footer - Full Width -->
<div class="footer-full">
  <div class="inner-container">
    <footer style="margin-top: 0; padding: 48px 0 64px; text-align: center; color: #5a6874; font-size: 13px; border-top: none;">
      <div style="font-family: 'Space Grotesk'; font-size: 20px; font-weight: 600; margin-bottom: 24px;">BizCash&Capital</div>
      <div style="display: flex; justify-content: center; gap: 32px; flex-wrap: wrap; margin-bottom: 32px;">
        <a href="#" style="text-decoration: none; color: #5a6874;">About</a>
        <a href="#" style="text-decoration: none; color: #5a6874;">Services</a>
        <a href="#" style="text-decoration: none; color: #5a6874;">Contact</a>
        <a href="#" style="text-decoration: none; color: #5a6874;">Privacy</a>
      </div>
      <p>© BizCashAndCapital, 2025 — Mon–Sat, 8am–6pm</p>
      <p style="margin-top: 12px; font-size: 12px;">bizcashandcapital.com</p>
    </footer>
  </div>
</div>

<script>
  function toggleFaq(element) {
    const isOpen = element.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(item => {
      item.classList.remove('open');
      const toggle = item.querySelector('.faq-toggle');
      if (toggle) toggle.textContent = '+';
    });
    if (!isOpen) {
      element.classList.add('open');
      const toggle = element.querySelector('.faq-toggle');
      if (toggle) toggle.textContent = '−';
    }
  }
</script>
</body>
</html>