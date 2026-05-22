<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SBA Business Loans — BizCashAndCapital | Best Rates for Low Credit Score</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'jakarta': ['Plus Jakarta Sans', 'sans-serif'],
                        'grotesk': ['Space Grotesk', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #eef6ee;
            color: #111a13;
            overflow-x: hidden;
        }

        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #e2ece2;
        }

        ::-webkit-scrollbar-thumb {
            background: #1a7a4a;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: 0.5;
                transform: scale(0.95);
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .btn-primary {
            background: #1a7a4a;
            color: white;
            padding: 0.875rem 2rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary:hover {
            background: #0f5a38;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #1a7a4a;
            color: #1a7a4a;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-outline:hover {
            background: #1a7a4a;
            color: white;
        }

        .card {
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid rgba(255,255,255,0.1);
        }
        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -12px rgba(26,122,74,0.3);
            border-color: #c8e86a;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(26,122,74,0.3);
            background: rgba(26,122,74,0.1);
            padding: 5px 16px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #1a7a4a;
        }
        .tag span {
            width: 6px;
            height: 6px;
            background: #1a7a4a;
            display: inline-block;
            animation: pulse 2s infinite;
        }

        /* ============================================
           BIZCASH NAVBAR - ISOLATED STYLES
        ============================================ */
        .biz-navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 9999;
            transition: transform 0.4s ease-in-out, background 0.3s ease, backdrop-filter 0.3s ease;
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }
        
        .biz-navbar-hidden {
            transform: translateY(-100%);
        }
        
        .biz-navbar-visible {
            transform: translateY(0);
        }
        
        .biz-navbar-container {
            max-width: 1280px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        
        .biz-navbar-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.25rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
        
        .biz-logo {
            font-family: 'Space Grotesk', 'Plus Jakarta Sans', system-ui, sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            line-height: 2rem;
            letter-spacing: -0.025em;
            color: #ffffff;
            transition: transform 0.3s ease;
            cursor: default;
        }
        
        .biz-logo:hover {
            transform: scale(1.05);
        }
        
        .biz-nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
            flex-wrap: wrap;
        }
        
        .biz-pill {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(4px);
            padding: 0.375rem 1rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            color: #ffffff;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .biz-pill:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-1px);
        }
        
        .biz-contact-link {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 0.875rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .biz-contact-link:hover {
            color: white;
        }
        
        .biz-dropdown-menu {
            border-radius: 0 !important;
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.2s ease;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
            z-index: 10000;
        }
        
        .biz-dropdown:hover .biz-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .biz-dropdown:hover .biz-dropdown-arrow {
            transform: rotate(180deg);
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled .biz-logo {
            color: #0f172a;
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled .biz-pill {
            background: #f1f5f9;
            color: #334155;
            border-color: #e2e8f0;
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled .biz-pill:hover {
            background: #e2e8f0;
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled .biz-contact-link {
            color: #475569;
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled .biz-contact-link:hover {
            color: #1a7a4a;
        }
        
        .biz-navbar-fixed.biz-navbar-scrolled .biz-dropdown-menu {
            background: white;
            border-color: #e2e8f0;
        }
        
        @media (max-width: 768px) {
            .biz-navbar-container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
            .biz-navbar-flex {
                flex-direction: column;
                gap: 0.75rem;
                padding-top: 0.75rem;
                padding-bottom: 0.75rem;
            }
            .biz-nav-links {
                gap: 0.75rem;
                justify-content: center;
            }
            .biz-logo {
                font-size: 1.25rem;
            }
            .biz-pill {
                font-size: 0.7rem;
                padding: 0.25rem 0.75rem;
            }
            .biz-dropdown-menu {
                position: fixed;
                top: auto;
                left: 1rem;
                right: 1rem;
                width: auto;
                margin-top: 0.5rem;
            }
        }
    </style>
</head>

<body>

@include('header')

    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1600&q=80" alt="Business growth background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/60 via-black/50 to-emerald-900/50 z-10"></div>
            <div class="absolute inset-0 opacity-10 z-10" style="background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px;"></div>
        </div>
        <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 w-full text-center">
            <div>
                <div class="inline-flex items-center justify-center mb-6">
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 px-4 py-1.5">
                        <span class="text-[11px] font-semibold text-white/80 tracking-wider">BEST BUSINESS LOANS</span>
                    </div>
                </div>
                <h1 class="font-jakarta text-[clamp(56px,8vw,120px)] leading-[1.05] tracking-tight text-white mb-6">SBA LOAN</h1>
                <div class="w-24 h-1 bg-gradient-to-r from-lime-400 to-emerald-500 mx-auto mb-6"></div>
                <p class="text-white/80 text-base max-w-2xl mx-auto leading-relaxed">Get the funding you need with our fast, flexible loan solutions. No hidden fees, no endless paperwork, and bad credit welcome.</p>
                <div class="flex gap-4 justify-center flex-wrap mt-8">
                    <a href="#" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3.5 font-semibold text-sm transition-all duration-300">Apply Now →</a>
                    <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/50 text-white px-8 py-3.5 font-semibold text-sm transition-all duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SBA Loan Types Section - Full visible background images -->
    <section style="padding: 5rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <div class="tag" style="display: inline-flex; margin-bottom: 1rem;"><span></span>TYPES OF SBA BUSINESS LOANS</div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; color: #1a2a1a;">We offer fantastic lending choices<br>for small businesses</h2>
                <div style="width: 80px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
                <p style="color: #4a5a4a; max-width: 700px; margin: 0 auto;">Here at BizCashAndCapital, we offer fantastic lending choices for small businesses since we provide favorable conditions and low-interest rates.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <div class="card" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 420px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: flex-start;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem; color: white;">SBA 7(a) Loan</h3>
                        <div style="width: 50px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem 0;"></div>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem; line-height: 1.6; margin-top: 1rem;">
                            The most popular and versatile SBA loan provides funds for working capital, equipment purchase, debt consolidation, and more. SBA 7(a) loans can range up to <strong style="color: #c8e86a;">$5 million</strong> and have flexible terms.
                        </p>
                    </div>
                </div>

                <div class="card" style="background-image: url('https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 420px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: flex-start;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                <path d="M9 22V12h6v10" />
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem; color: white;">SBA 504 Loan</h3>
                        <div style="width: 50px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem 0;"></div>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem; line-height: 1.6; margin-top: 1rem;">
                            Ideal for businesses requiring real estate or equipment financing, the SBA 504 loan provides long-term, fixed-rate financing for major assets, promoting business expansion and job creation.
                        </p>
                    </div>
                </div>

                <div class="card" style="background-image: url('https://images.unsplash.com/photo-1559526924-8bb3c4f5c9e5?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 420px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: flex-start;">
                        <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem; color: white;">SBA Microloan</h3>
                        <div style="width: 50px; height: 2px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0.75rem 0;"></div>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.9rem; line-height: 1.6; margin-top: 1rem;">
                            For startups and small businesses, microloans offer up to <strong style="color: #c8e86a;">$50,000</strong> to cover working capital, equipment, or inventory expenses. These loans come with a shorter term.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Apply Section -->
    <section style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 3rem; align-items: center;">
                <div>
                    <div class="tag" style="margin-bottom: 1rem;"><span></span>HOW TO APPLY</div>
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">How to Apply for<br>SBA Business Loans</h2>
                    <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin-bottom: 1.5rem;"></div>
                    <div class="space-y-4">
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">1</div>
                            <p class="text-slate-600">Verify that you meet the eligibility criteria for the loan you are applying for</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">2</div>
                            <p class="text-slate-600">Have a solid business plan</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">3</div>
                            <p class="text-slate-600">Complete the necessary paperwork in advance</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">4</div>
                            <p class="text-slate-600">Be ready to respond to queries about the business you run</p>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-6 h-6 bg-emerald-600 text-white flex items-center justify-center text-xs font-bold">5</div>
                            <p class="text-slate-600">Show patience. Application for an SBA loan can take weeks or even months. <strong class="text-emerald-600">But here at BizCashAndCapital, we get you fundings as soon as possible!</strong></p>
                        </div>
                    </div>
                </div>
                <div style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=500&fit=crop'); background-size: cover; background-position: center; padding: 2.5rem; color: white; text-align: center; position: relative; overflow: hidden; border: 1px solid #e2e8e2;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, #1a7a4a, #0f5a38); opacity: 0.92;"></div>
                    <div style="position: relative; z-index: 2;">
                        <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Talk to Our Trusted<br>Financial Advisors</h3>
                        <p style="margin-bottom: 1.5rem; line-height: 1.6;">Finding the landscape of SBA loans can be huge, but our team of expert advisors is here to simplify the process for you.</p>
                        <a href="tel:+12166470007" class="inline-flex items-center gap-2 bg-white text-emerald-700 px-6 py-3 font-bold text-sm hover:bg-lime-400 transition">Call +1 (216) 647-0007 →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose SBA Loans Section -->
    <section style="padding: 5rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <div class="tag" style="display: inline-flex; margin-bottom: 1rem;"><span></span>WHY CHOOSE SBA LOANS</div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-top: 1rem; color: #1a2a1a;">Benefits of SBA Business Loans</h2>
                <div style="width: 80px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
                <div style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop'); background-size: cover; background-position: center; position: relative; min-height: 280px; border: 1px solid #e2e8e2; transition: all 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'; this.style.borderColor='#1a7a4a';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='#e2e8e2';">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,122,74,0.85), rgba(15,90,56,0.9));"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem 1.5rem; text-align: center; min-height: 280px; display: flex; flex-direction: column; justify-content: center;">
                        <h3 style="font-size: 1.6rem; font-weight: 800; color: white; margin-bottom: 0.75rem;">Low Interest Rates</h3>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.5;">Competitive rates backed by government guarantee</p>
                    </div>
                </div>
                <div style="background-image: url('https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?w=600&h=500&fit=crop'); background-size: cover; background-position: center; position: relative; min-height: 280px; border: 1px solid #e2e8e2; transition: all 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'; this.style.borderColor='#1a7a4a';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='#e2e8e2';">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,122,74,0.85), rgba(15,90,56,0.9));"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem 1.5rem; text-align: center; min-height: 280px; display: flex; flex-direction: column; justify-content: center;">
                        <h3 style="font-size: 1.6rem; font-weight: 800; color: white; margin-bottom: 0.75rem;">High Loan Amounts</h3>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.5;">Up to $5 million for qualifying businesses</p>
                    </div>
                </div>
                <div style="background-image: url('https://images.unsplash.com/photo-1559526924-8bb3c4f5c9e5?w=600&h=500&fit=crop'); background-size: cover; background-position: center; position: relative; min-height: 280px; border: 1px solid #e2e8e2; transition: all 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'; this.style.borderColor='#1a7a4a';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='#e2e8e2';">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,122,74,0.85), rgba(15,90,56,0.9));"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem 1.5rem; text-align: center; min-height: 280px; display: flex; flex-direction: column; justify-content: center;">
                        <h3 style="font-size: 1.6rem; font-weight: 800; color: white; margin-bottom: 0.75rem;">Flexible Terms</h3>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.5;">Long repayment terms to suit your cash flow</p>
                    </div>
                </div>
                <div style="background-image: url('https://images.unsplash.com/photo-1579621970588-a35d0e7ab9b6?w=600&h=500&fit=crop'); background-size: cover; background-position: center; position: relative; min-height: 280px; border: 1px solid #e2e8e2; transition: all 0.3s ease; cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'; this.style.borderColor='#1a7a4a';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'; this.style.borderColor='#e2e8e2';">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,122,74,0.85), rgba(15,90,56,0.9));"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem 1.5rem; text-align: center; min-height: 280px; display: flex; flex-direction: column; justify-content: center;">
                        <h3 style="font-size: 1.6rem; font-weight: 800; color: white; margin-bottom: 0.75rem;">Government Backed</h3>
                        <p style="color: rgba(255,255,255,0.9); font-size: 0.95rem; line-height: 1.5;">Partial government guarantee for lenders</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================ -->
    <!-- FOOTER - Integrated -->
    <!-- ============================================ -->
    <footer style="background: #111811; color: #9ca3af; padding: 3rem 0; border-top: 1px solid rgba(255,255,255,0.05);">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div style="width: 32px; height: 32px; background: #1a7a4a;"></div>
                        <span style="font-weight: 700; color: white; font-size: 1.2rem;">BizCash&Capital</span>
                    </div>
                    <p style="font-size: 0.875rem;">Your trusted partner for SBA business loans and financial resources.</p>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Quick Links</h4>
                    <ul style="list-style: none;">
                        <li><a href="#" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">Home</a></li>
                        <li class="mt-2"><a href="#" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">SBA Loans</a></li>
                        <li class="mt-2"><a href="#" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Legal</h4>
                    <ul style="list-style: none;">
                        <li><a href="#" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">Privacy Policy</a></li>
                        <li class="mt-2"><a href="#" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Contact</h4>
                    <p style="font-size: 0.875rem;">📞 <a href="tel:+12166470007" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">+1 (216) 647-0007</a></p>
                    <p style="font-size: 0.875rem; margin-top: 0.5rem;">✉️ <a href="mailto:info@bizcashandcapital.com" style="color: #9ca3af; text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#1a7a4a'" onmouseout="this.style.color='#9ca3af'">info@bizcashandcapital.com</a></p>
                </div>
            </div>
            <div style="border-top: 1px solid rgba(255,255,255,0.05); padding-top: 2rem; text-align: center; font-size: 0.75rem;">© All Copyright 2025 by BizCashandCapital.com</div>
        </div>
    </footer>

    <!-- Navbar Scroll Script -->
    <script>
        (function() {
            let bizLastScrollTop = 0;
            const bizNavbar = document.getElementById('biz-navbar');
            let bizTicking = false;
            
            if (!bizNavbar) return;
            
            bizNavbar.classList.add('biz-navbar-visible');
            
            window.addEventListener('scroll', function() {
                if (!bizTicking) {
                    requestAnimationFrame(function() {
                        let bizScrollTop = window.pageYOffset || document.documentElement.scrollTop;
                        
                        if (bizScrollTop > bizLastScrollTop && bizScrollTop > 100) {
                            bizNavbar.classList.add('biz-navbar-hidden');
                            bizNavbar.classList.remove('biz-navbar-visible');
                        } else {
                            bizNavbar.classList.remove('biz-navbar-hidden');
                            bizNavbar.classList.add('biz-navbar-visible');
                        }
                        
                        if (bizScrollTop > 50) {
                            bizNavbar.classList.add('biz-navbar-scrolled');
                        } else {
                            bizNavbar.classList.remove('biz-navbar-scrolled');
                        }
                        
                        bizLastScrollTop = bizScrollTop <= 0 ? 0 : bizScrollTop;
                        bizTicking = false;
                    });
                    bizTicking = true;
                }
            });
            
            window.addEventListener('load', function() {
                const initialScroll = window.pageYOffset || document.documentElement.scrollTop;
                if (initialScroll > 50) {
                    bizNavbar.classList.add('biz-navbar-scrolled');
                }
                bizNavbar.classList.add('biz-navbar-visible');
            });
        })();
    </script>
</body>

</html>