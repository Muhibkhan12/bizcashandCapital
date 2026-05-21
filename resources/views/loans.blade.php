<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BizCashAndCapital — Best Business Loans for Low Credit Score</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'jakarta': ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    colors: {
                        'green-primary': '#10b981',
                        'green-dark': '#059669',
                        'green-light': '#34d399',
                        'emerald-card': '#1a7a4a',
                        'lime-accent': '#c8e86a',
                    }
                }
            }
        }
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            border-radius: 0 !important;
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

        .animate-pulse {
            animation: pulse 2s ease-in-out infinite;
        }

        .sr {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .sr.vis {
            opacity: 1;
            transform: translateY(0);
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
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 0.875rem 2rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: white;
        }

        .card {
            background: white;
            border: 1px solid #e2e8e2;
            transition: all 0.3s ease;
            overflow: hidden;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -12px rgba(26, 122, 74, 0.15);
            border-color: #1a7a4a;
        }

        .faq-item {
            border: 1px solid #e2e8e2;
            background: #fff;
            transition: all 0.3s;
            cursor: pointer;
        }

        .faq-item:hover {
            border-color: #1a7a4a;
        }

        .faq-item.open {
            border-left: 3px solid #1a7a4a;
            background: #f9fef7;
        }

        .faq-answer {
            display: none;
            padding: 0 1.25rem 1.25rem 1.25rem;
            color: #6b7280;
            font-size: 0.875rem;
            line-height: 1.6;
        }

        .faq-item.open .faq-answer {
            display: block;
        }

        .faq-question {
            padding: 1.25rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
        }

        .faq-icon {
            transition: transform 0.2s ease;
            font-size: 1.25rem;
        }

        .faq-item.open .faq-icon {
            transform: rotate(45deg);
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: inherit;
            font-size: 0.875rem;
            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(26, 122, 74, 0.3);
            background: rgba(26, 122, 74, 0.08);
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

        .gradient-text {
            background: linear-gradient(135deg, #1a7a4a, #c8e86a);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background: rgba(238, 246, 238, 0.92);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid #e2ece2;
            transition: all 0.3s;
        }

        nav.scrolled {
            border-bottom-color: #1a7a4a;
        }
    </style>
</head>

<body>

    @include('header')

    <!-- Hero Section -->
    <section class="relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden" style="margin-top: 64px;">
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
                <h1 class="font-jakarta text-[clamp(56px,8vw,120px)]  leading-[1.05] tracking-tight text-white mb-6">Loans</h1>
                <div class="w-24 h-1 bg-gradient-to-r from-lime-400 to-emerald-500 mx-auto mb-6"></div>
                <p class="text-white/80 text-base max-w-2xl mx-auto leading-relaxed">Get the funding you need with our fast, flexible loan solutions. No hidden fees, no endless paperwork, and bad credit welcome.</p>
                <div class="flex gap-4 justify-center flex-wrap mt-8">
                    <a href="#" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white px-8 py-3.5 font-semibold text-sm transition-all duration-300">Apply Now →</a>
                    <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/50 text-white px-8 py-3.5 font-semibold text-sm transition-all duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section - Clean & Modern -->
    <section style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <!-- Section Header -->
            <div style="text-align: center; margin-bottom: 3rem;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #e8f0e8; padding: 0.25rem 1rem; margin-bottom: 1rem;">
                    <span style="width: 6px; height: 6px; background: #1a7a4a;"></span>
                    <span style="font-size: 0.7rem; font-weight: 600; color: #1a7a4a;">OUR IMPACT</span>
                </div>
                <h2 style="font-size: 2rem; font-weight: 800; color: #111a13;">Trusted by thousands of businesses</h2>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
            </div>

            <!-- Stats Grid -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                <div class="card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; color: #1a7a4a; margin-bottom: 0.5rem;">3k+</div>
                    <div style="color: #6b7280; font-size: 0.875rem;">Business Loan Applications</div>
                </div>
                <div class="card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; color: #1a7a4a; margin-bottom: 0.5rem;">$500K</div>
                    <div style="color: #6b7280; font-size: 0.875rem;">Max Funding Available</div>
                </div>
                <div class="card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; color: #1a7a4a; margin-bottom: 0.5rem;">24/7</div>
                    <div style="color: #6b7280; font-size: 0.875rem;">Customer Support</div>
                </div>
                <div class="card" style="padding: 2rem; text-align: center;">
                    <div style="font-size: 3rem; font-weight: 800; color: #1a7a4a; margin-bottom: 0.5rem;">4.92</div>
                    <div style="color: #6b7280; font-size: 0.875rem;">Trust Score</div>
                </div>
            </div>
        </div>
    </section>
    <!-- About / Mission Section with Picture -->
    <section style="padding: 5rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; align-items: center;">
                <div>
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #e8f0e8; padding: 0.25rem 1rem; margin-bottom: 1rem;">
                        <span style="width: 6px; height: 6px; background: #1a7a4a;"></span>
                        <span style="font-size: 0.7rem; font-weight: 600; color: #1a7a4a;">ABOUT COMPANY</span>
                    </div>
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Our Mission</h2>
                    <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin-bottom: 1.5rem;"></div>
                    <p style="font-size: 1.125rem; font-style: italic; color: #374151; margin-bottom: 1.5rem;">"Here at BizCashandCapital, we empower businesses and ensure financial prosperity through tailored Commercial loan services."</p>
                    <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 6px; height: 6px; background: #1a7a4a;"></div><span>Best loan programs with low interest rate</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 6px; height: 6px; background: #1a7a4a;"></div><span>Our client's security is our first priority</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 6px; height: 6px; background: #1a7a4a;"></div><span>Easy application procedure with less paperwork</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 0.75rem;">
                            <div style="width: 6px; height: 6px; background: #1a7a4a;"></div><span>We offer ideal loan solution for business expansion</span>
                        </div>
                    </div>
                </div>
                <div style="background: #1a7a4a; padding: 2rem; color: white;">
                    <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=400&h=250&fit=crop" alt="Business team" style="width: 100%; height: auto; margin-bottom: 1rem;">
                    <p style="margin-bottom: 1.5rem; line-height: 1.6;">When it comes to unlocking your business's potential, having a reliable financial partner like BizCashandCapital can make all the difference. We provide customized loan solutions that help businesses achieve their goals.</p>
                    <div style="border-top: 1px solid rgba(255,255,255,0.2); padding-top: 1.5rem; display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 48px; height: 48px; background: rgba(255,255,255,0.15); display: flex; align-items: center; justify-content: center; font-size: 1.25rem;">📞</div>
                        <div>
                            <div style="font-size: 0.7rem; opacity: 0.7;">GET APPLY</div><a href="tel:+12166470007" style="color: white; text-decoration: none; font-weight: 700; font-size: 1.125rem;">+1 (216) 647-0007</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us - Redesigned Premium Section -->
    <section style="padding: 6rem 0; background: linear-gradient(135deg, #fafbfa 0%, #f0f5f0 100%); position: relative; overflow: hidden;">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full opacity-[0.03]" style="background-image: radial-gradient(circle at 25% 40%, #1a7a4a 2px, transparent 2px); background-size: 50px 50px;"></div>

        <!-- Animated Blobs -->
        <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(200,232,106,0.08) 0%, transparent 70%); border-radius: 50% !important;"></div>
        <div style="position: absolute; bottom: -100px; left: -100px; width: 250px; height: 250px; background: radial-gradient(circle, rgba(26,122,74,0.06) 0%, transparent 70%); border-radius: 50% !important;"></div>

        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem; position: relative; z-index: 2;">

            <!-- Section Header - Enhanced -->
            <div style="text-align: center; max-width: 750px; margin: 0 auto 4rem auto;">
                <div style="display: inline-flex; align-items: center; gap: 0.75rem; background: linear-gradient(135deg, #1a7a4a10, #c8e86a10); backdrop-filter: blur(4px); padding: 0.5rem 1.5rem; margin-bottom: 1.5rem; border: 1px solid #1a7a4a20;">
                    <span style="width: 8px; height: 8px; background: #1a7a4a; display: inline-block; border-radius: 50% !important;"></span>
                    <span style="font-size: 0.7rem; font-weight: 700; color: #1a7a4a; letter-spacing: 0.1em;">WHY TRUST US</span>
                </div>
                <h2 style="font-size: 2.8rem; font-weight: 800; margin-bottom: 1rem; background: linear-gradient(135deg, #1a7a4a, #0f5a38); -webkit-background-clip: text; background-clip: text; color: transparent; letter-spacing: -0.02em;">Your Reliable Partners<br>for Working Capital</h2>
                <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1.5rem auto;"></div>
                <p style="color: #5a6b5a; font-size: 1rem; line-height: 1.7;">We understand the significance of having a steady and reliable source of working capital for your business. As financial advisors, we're dedicated to your success.</p>
            </div>

            <!-- 3 Premium Cards -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <!-- Card 1 - Quick Funding -->
                <div class="card" style="overflow: hidden; background: white; border: none; box-shadow: 0 10px 30px -10px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 40px -15px rgba(26,122,74,0.2)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px -10px rgba(0,0,0,0.08)';">
                    <div style="position: relative; height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=500&h=300&fit=crop" alt="Quick funding" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                            onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem;">
                            <div style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); display: inline-block; padding: 0.25rem 1rem; margin-bottom: 0.5rem;">
                                <span style="color: white; font-size: 0.7rem; font-weight: 600;">BENEFIT 01</span>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 2rem; text-align: left;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.75rem;">Quick Funding</h3>
                        <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">We guarantee fast funding thanks to our shortened approach with practical evaluation. Get approved in days, not weeks.</p>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: #1a7a4a; font-size: 0.875rem; font-weight: 600;">
                            <span>Learn more</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - No Application Fee -->
                <div class="card" style="overflow: hidden; background: white; border: none; box-shadow: 0 10px 30px -10px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 40px -15px rgba(26,122,74,0.2)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px -10px rgba(0,0,0,0.08)';">
                    <div style="position: relative; height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=500&h=300&fit=crop" alt="No application fee" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                            onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem;">
                            <div style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); display: inline-block; padding: 0.25rem 1rem; margin-bottom: 0.5rem;">
                                <span style="color: white; font-size: 0.7rem; font-weight: 600;">BENEFIT 02</span>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 2rem; text-align: left;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83" />
                                <circle cx="12" cy="12" r="3" />
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.75rem;">No Application Fee</h3>
                        <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">Total transparency with zero unnecessary costs. Your money works for you from day one — no hidden charges, no surprises.</p>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: #1a7a4a; font-size: 0.875rem; font-weight: 600;">
                            <span>Learn more</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - Low-Interest Loans -->
                <div class="card" style="overflow: hidden; background: white; border: none; box-shadow: 0 10px 30px -10px rgba(0,0,0,0.08); transition: all 0.4s cubic-bezier(0.2, 0.9, 0.4, 1.1); cursor: pointer;"
                    onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 30px 40px -15px rgba(26,122,74,0.2)';"
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px -10px rgba(0,0,0,0.08)';">
                    <div style="position: relative; height: 220px; overflow: hidden;">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=500&h=300&fit=crop" alt="Low interest rates" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s ease;"
                            onmouseover="this.style.transform='scale(1.08)'" onmouseout="this.style.transform='scale(1)'">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.6), transparent);"></div>
                        <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.5rem;">
                            <div style="background: rgba(255,255,255,0.2); backdrop-filter: blur(10px); display: inline-block; padding: 0.25rem 1rem; margin-bottom: 0.5rem;">
                                <span style="color: white; font-size: 0.7rem; font-weight: 600;">BENEFIT 03</span>
                            </div>
                        </div>
                    </div>
                    <div style="padding: 2rem; text-align: left;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83" />
                                <path d="M12 8v8M8 12h8" />
                            </svg>
                        </div>
                        <h3 style="font-size: 1.5rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.75rem;">Low-Interest Loans</h3>
                        <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.6; margin-bottom: 1.5rem;">Flexible repayment terms designed for lasting financial freedom. Competitive rates tailored for your success.</p>
                        <div style="display: flex; align-items: center; gap: 0.5rem; color: #1a7a4a; font-size: 0.875rem; font-weight: 600;">
                            <span>Learn more</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trust Indicators / Extra Badges -->
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid #e2ece2;">
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14" />
                        <polyline points="22 4 12 14.01 9 11.01" />
                    </svg>
                    <span style="color: #4a5a4a; font-size: 0.875rem;">10,000+ Businesses Funded</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <path d="M12 6v6l4 2" />
                    </svg>
                    <span style="color: #4a5a4a; font-size: 0.875rem;">Fast Approval 24-72 hrs</span>
                </div>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83" />
                        <circle cx="12" cy="12" r="3" />
                    </svg>
                    <span style="color: #4a5a4a; font-size: 0.875rem;">No Hidden Fees</span>
                </div>
            </div>
        </div>
    </section>

    <!-- LOAN SERVICES - FULL CARD BACKGROUND IMAGES WITH TEXT OVERLAY -->
    <section id="services" style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; margin-bottom: 3rem;">
                <div class="tag" style="display: inline-flex; margin-bottom: 1rem;"><span></span>04 · Loan Solutions</div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">All loan solutions</h2>
                <p style="color: #6b7280;">Choose the perfect financing option for your business needs</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                <!-- Card 1 - Business Loan -->
                <div class="group relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="height: 400px;">
                    <div style="position: absolute; inset: 0;">
                        <img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=500&fit=crop" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.7s;" class="group-hover:scale-110">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.5), rgba(0,0,0,0.2));"></div>
                    </div>
                    <div style="position: relative; padding: 1.5rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                        <div><span style="background: #1a7a4a; padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: bold;">01</span></div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Business Loan</h3>
                            <p style="font-size: 0.875rem; opacity: 0.9; margin-bottom: 1rem;">Expand & grow your business with flexible capital solutions.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 0.75rem;"><span style="color: #c8e86a; font-size: 0.75rem;">$10K – $500K</span><a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.875rem; font-weight: 600;">Apply →</a></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 - Commercial Loan -->
                <div class="group relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="height: 400px;">
                    <div style="position: absolute; inset: 0;">
                        <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=500&fit=crop" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.7s;" class="group-hover:scale-110">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.5), rgba(0,0,0,0.2));"></div>
                    </div>
                    <div style="position: relative; padding: 1.5rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                        <div><span style="background: #1a7a4a; padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: bold;">02</span></div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Commercial Loan</h3>
                            <p style="font-size: 0.875rem; opacity: 0.9; margin-bottom: 1rem;">Real estate & equipment financing for your commercial property.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 0.75rem;"><span style="color: #c8e86a; font-size: 0.75rem;">Up to $5M</span><a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.875rem; font-weight: 600;">Apply →</a></div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 - SBA Loan -->
                <div class="group relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="height: 400px;">
                    <div style="position: absolute; inset: 0;">
                        <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.7s;" class="group-hover:scale-110">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.5), rgba(0,0,0,0.2));"></div>
                    </div>
                    <div style="position: relative; padding: 1.5rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                        <div><span style="background: #1a7a4a; padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: bold;">03</span></div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">SBA Loan</h3>
                            <p style="font-size: 0.875rem; opacity: 0.9; margin-bottom: 1rem;">Government-backed funding for small businesses with competitive rates.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 0.75rem;"><span style="color: #c8e86a; font-size: 0.75rem;">Low Rates</span><a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.875rem; font-weight: 600;">Apply →</a></div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 - Construction Loan -->
                <div class="group relative overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl" style="height: 400px;">
                    <div style="position: absolute; inset: 0;">
                        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=500&fit=crop" style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.7s;" class="group-hover:scale-110">
                        <div style="position: absolute; inset: 0; background: linear-gradient(to top, rgba(0,0,0,0.85), rgba(0,0,0,0.5), rgba(0,0,0,0.2));"></div>
                    </div>
                    <div style="position: relative; padding: 1.5rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between; color: white;">
                        <div><span style="background: #1a7a4a; padding: 0.25rem 0.75rem; font-size: 0.75rem; font-weight: bold;">04</span></div>
                        <div>
                            <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem;">Construction Loan</h3>
                            <p style="font-size: 0.875rem; opacity: 0.9; margin-bottom: 1rem;">Build your vision with specialized construction financing.</p>
                            <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255,255,255,0.2); padding-top: 0.75rem;"><span style="color: #c8e86a; font-size: 0.75rem;">Interest Only</span><a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.875rem; font-weight: 600;">Apply →</a></div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 2rem;">
                <a href="#" style="border: 2px solid #1a7a4a; color: #1a7a4a; padding: 0.75rem 2rem; font-weight: 600; display: inline-flex; align-items: center; gap: 0.5rem; text-decoration: none; transition: all 0.3s;">View all loan options →</a>
            </div>
        </div>
    </section>

    <!-- FAQs -->
    <section style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem auto;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #e8f0e8; padding: 0.25rem 1rem; margin-bottom: 1rem;">
                    <span style="width: 6px; height: 6px; background: #1a7a4a;"></span>
                    <span style="font-size: 0.7rem; font-weight: 600; color: #1a7a4a;">FAQS</span>
                </div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">What our customers are looking about</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">
                <div style="background: linear-gradient(135deg, #1a7a4a, #0f5a38); padding: 2rem; color: white;">
                    <h3 style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Know more about BizCashAndCapital</h3>
                    <p style="margin-bottom: 1.5rem;">BizCashAndCapital is a loan providing company that specializes in lending business cash solutions to small and medium-sized enterprises.</p>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div>📞 +1 (216) 647-0007</div>
                        <div>✉️ info@bizcashandcapital.com</div>
                    </div>
                </div>
                <div>
                    <div class="faq-item" onclick="this.classList.toggle('open')">
                        <div class="faq-question"><span>How does BizCashAndCapital work?</span><span class="faq-icon">+</span></div>
                        <div class="faq-answer">Easy application Step for Loan. Streamlined online application, holistic review, and funding within days.</div>
                    </div>
                    <div class="faq-item" onclick="this.classList.toggle('open')">
                        <div class="faq-question"><span>No worries about a bad credit score?</span><span class="faq-icon">+</span></div>
                        <div class="faq-answer">We specialize in loans for businesses with low credit scores, evaluating the full picture of your business health.</div>
                    </div>
                    <div class="faq-item" onclick="this.classList.toggle('open')">
                        <div class="faq-question"><span>Criteria for Loan Application</span><span class="faq-icon">+</span></div>
                        <div class="faq-answer">The eligibility criteria are pretty simple, you should have 6 months business running.</div>
                    </div>
                    <div class="faq-item" onclick="this.classList.toggle('open')">
                        <div class="faq-question"><span>How fast can I get funded?</span><span class="faq-icon">+</span></div>
                        <div class="faq-answer">Most applications approved within 24-72 hours, with funding within a week.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent News with Pictures -->
    <section style="padding: 5rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem auto;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #e8f0e8; padding: 0.25rem 1rem; margin-bottom: 1rem;">
                    <span style="width: 6px; height: 6px; background: #1a7a4a;"></span>
                    <span style="font-size: 0.7rem; font-weight: 600; color: #1a7a4a;">LATEST NEWS & ARTICLES</span>
                </div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">recent news feed</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                <div class="card" style="overflow: hidden;"><img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=400&h=200&fit=crop" alt="News" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <p style="color: #1a7a4a; font-size: 0.75rem; margin-bottom: 0.5rem;">November-29-2023 06:23:35</p>
                        <h3 style="font-weight: 700; margin-bottom: 0.75rem;">Best Loans for Businesses in December 2023</h3><a href="#" style="color: #1a7a4a; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>
                <div class="card" style="overflow: hidden;"><img src="https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=400&h=200&fit=crop" alt="News" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <p style="color: #1a7a4a; font-size: 0.75rem; margin-bottom: 0.5rem;">November-28-2023 03:31:00</p>
                        <h3 style="font-weight: 700; margin-bottom: 0.75rem;">Top 10 Profitable Business Ideas to Finance with Business Loans</h3><a href="#" style="color: #1a7a4a; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>
                <div class="card" style="overflow: hidden;"><img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&h=200&fit=crop" alt="News" style="width: 100%; height: 180px; object-fit: cover;">
                    <div style="padding: 1.5rem;">
                        <p style="color: #1a7a4a; font-size: 0.75rem; margin-bottom: 0.5rem;">November-27-2023 16:13:09</p>
                        <h3 style="font-weight: 700; margin-bottom: 0.75rem;">Business Loan Options for Businesses in The United States</h3><a href="#" style="color: #1a7a4a; text-decoration: none; font-weight: 600;">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('application')

    <!-- Footer -->
    <footer style="background: #111811; color: #9ca3af; padding: 3rem 0; border-top: 1px solid rgba(255,255,255,0.05);">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 2rem; margin-bottom: 2rem;">
                <div>
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                        <div style="width: 32px; height: 32px; background: #1a7a4a;"></div><span style="font-weight: 700; color: white;">BizCash&Capital</span>
                    </div>
                    <p style="font-size: 0.875rem;">Your trusted partner for unlocking the financial resources your business needs to thrive.</p>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Quick Links</h4>
                    <ul style="list-style: none;">
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">About Us</a></li>
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">Services</a></li>
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">FAQs</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Legal</h4>
                    <ul style="list-style: none;">
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">Privacy Policy</a></li>
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">Terms of Service</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Open Hours</h4>
                    <p style="font-size: 0.875rem;">Mon – Sat: 8am – 6pm<br>Sunday: Closed</p>
                    <p style="margin-top: 1rem;">📞 <a href="tel:+12166470007" style="color: #9ca3af; text-decoration: none;">+1 (216) 647-0007</a></p>
                </div>
            </div>
            <div style="border-top: 1px solid rgba(255,255,255,0.05); padding-top: 2rem; text-align: center; font-size: 0.75rem;">© All Copyright 2025 by BizCashandCapital.com</div>
        </div>
    </footer>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });
    </script>
</body>

</html>