<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Attorney Firm Funding — BizCashAndCapital | Tailored Legal Financing</title>
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
                    colors: {
                        'green-primary': '#10b981',
                        'green-dark': '#059669',
                        'green-forest': '#1a7a4a',
                        'green-lime': '#c8e86a',
                    },
                    animation: {
                        'pulse-slow': 'pulse 2s infinite',
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
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f5f7f5;
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
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(0.95); }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
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
            border-radius: 0 !important;
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
            border-radius: 0 !important;
        }

        .btn-outline:hover {
            background: #1a7a4a;
            color: white;
        }

        .tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid rgba(26, 122, 74, 0.3);
            background: rgba(26, 122, 74, 0.1);
            padding: 5px 16px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #1a7a4a;
            border-radius: 0 !important;
        }

        .tag span {
            width: 6px;
            height: 6px;
            background: #1a7a4a;
            display: inline-block;
            animation: pulse 2s infinite;
            border-radius: 0 !important;
        }

        .card {
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 0 !important;
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 35px -12px rgba(26, 122, 74, 0.3);
            border-color: #c8e86a;
        }

        .feedback-card {
            transition: all 0.3s ease;
            border-radius: 0 !important;
        }

        .feedback-card:hover {
            transform: translateY(-5px);
            border-color: #1a7a4a;
        }

        /* Force all elements to have sharp edges */
        .rounded-2xl,
        .rounded-3xl,
        .rounded-xl,
        .rounded-full,
        [class*="rounded-"] {
            border-radius: 0 !important;
        }

        button,
        a,
        div,
        section,
        .card,
        .bg-white,
        img {
            border-radius: 0 !important;
        }

        .scroll-reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1), transform 0.8s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    @include('header')

    <!-- Hero Section -->
    <section class="relative h-[70vh] min-h-[450px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=1600&q=80" alt="Law firm and legal practice" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-emerald-900/60 z-10"></div>
        </div>
        <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-8 w-full text-center">
            <h1 class="font-grotesk text-[clamp(48px,7vw,90px)] leading-[1.1] tracking-tight text-white mb-4">Attorney Firm Funding</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-[#c8e86a] to-[#1a7a4a] mx-auto mb-6"></div>
            <p class="text-white/80 text-base max-w-3xl mx-auto leading-relaxed">
                Welcome to BizCashAndCapital, where we understand the unique financial needs of attorney firms. We are committed to providing tailored funding solutions for legal practices, ensuring they have the financial support required to thrive, serve their clients effectively, and achieve legal excellence.
            </p>
            <div class="flex gap-4 justify-center flex-wrap mt-8">
                <a href="#" class="inline-flex items-center gap-2 bg-[#1a7a4a] hover:bg-[#0f5a38] text-white px-8 py-3.5 font-semibold text-sm transition-all duration-300">Get Started Now →</a>
                <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/50 text-white px-8 py-3.5 font-semibold text-sm transition-all duration-300">Contact Experts</a>
            </div>
        </div>
    </section>

    <!-- The Importance of Funding for Attorney Firms Section -->
    <section style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 3rem; align-items: center;">
                <div class="scroll-reveal">
                    <div class="tag" style="margin-bottom: 1rem;"><span></span>WHY IT MATTERS</div>
                    <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; font-family: 'Space Grotesk', sans-serif;">The Importance of<br>Funding for Attorney Firms</h2>
                    <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin-bottom: 1.5rem;"></div>
                    <p style="color: #5a6b5a; line-height: 1.7; margin-bottom: 1rem;">
                        Attorney firms play a crucial role in upholding justice and representing their clients. Securing adequate funding is fundamental for maintaining exceptional service quality, investing in legal research, hiring skilled professionals, and expanding legal expertise.
                    </p>
                    <p style="color: #5a6b5a; line-height: 1.7;">
                        Proper funding empowers attorney firms to focus on their clients' legal needs and navigate the complexities of the legal landscape.
                    </p>
                    <div class="flex gap-4 mt-6">
                        <a href="#" class="btn-primary">Get Started Now →</a>
                        <a href="#" class="btn-outline">Learn More</a>
                    </div>
                </div>
                <div class="scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 350px; position: relative; border: 1px solid #e2e8e2;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(26,122,74,0.85), rgba(15,90,56,0.9));"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; text-align: center; height: 100%; display: flex; flex-direction: column; justify-content: center;">
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: white; margin-bottom: 1rem; font-family: 'Space Grotesk', sans-serif;">Get Start Now</h3>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">Apply today and get the funding your law firm needs</p>
                        <a href="#" class="bg-white text-[#1a7a4a] px-6 py-3 font-bold text-sm hover:bg-[#c8e86a] transition inline-block">Apply Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Attorney Firm Funding Solutions Section -->
    <section style="padding: 5rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; margin-bottom: 3rem;" class="scroll-reveal">
                <div class="tag" style="display: inline-flex; margin-bottom: 1rem;"><span></span>FUNDING SOLUTIONS</div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem; color: #1a2a1a; font-family: 'Space Grotesk', sans-serif;">Attorney Firm Funding Solutions</h2>
                <div style="width: 80px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
                <p style="color: #4a5a4a; max-width: 700px; margin: 0 auto;">At BizCashAndCapital, we offer a range of funding options tailored to meet the unique needs of attorney firms:</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">

                <!-- Law Firm Loans -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Law Firm Loans</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Traditional loans designed to provide law firms with a lump sum amount for various financial needs, including case financing, practice expansion, or technology investments.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- Lawyer Lines of Credit -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Lawyer Lines of Credit</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Establishing a line of credit can provide attorney firms with flexibility in managing cash flow, covering operating expenses, or investing in case-specific requirements.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- Litigation Funding -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Litigation Funding</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Tailored funding options for specific cases, ensuring adequate resources are available to pursue litigation. Includes pre-settlement, post-settlement, and appellate funding.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- Law Firm Structured Settlement Funding -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Law Firm Structured Settlement Funding</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Funding to attorneys against future structured settlements, providing immediate access to capital rather than waiting for periodic payments.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- SBA 7(a) Loan for Law Firms -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                    <path d="M9 22V12h6v10" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">SBA 7(a) Loan for Law Firms</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Government-backed funding with competitive terms and rates. Suitable for law firms looking for significant capital for practice acquisition or expansion.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- Attorney Fee Advances -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4" />
                                    <path d="M12 8v8M8 12h8" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Attorney Fee Advances</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Attorney fee advances allow law firms to receive immediate funding against expected future legal fees. Helps in managing cash flow and taking on new cases without delay.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- Law Practice Acquisition Loans -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Law Practice Acquisition Loans</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Specialized funding to support law practice acquisitions. Whether acquiring a solo practice or merging with another firm, these loans provide the necessary capital for a smooth transition.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>

                <!-- Real Estate Financing for Law Firms -->
                <div class="card scroll-reveal" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&h=500&fit=crop'); background-size: cover; background-position: center; min-height: 450px; position: relative; overflow: hidden;">
                    <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(0,0,0,0.75) 0%, rgba(26,122,74,0.85) 100%); z-index: 1;"></div>
                    <div style="position: relative; z-index: 2; padding: 2rem; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; margin-bottom: 1rem;">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M3 10h18M6 14h2m8 0h2M7 18h10M5 22h14a2 2 0 002-2V4a2 2 0 00-2-2H5a2 2 0 00-2 2v16a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem; color: white; font-family: 'Space Grotesk', sans-serif;">Real Estate Financing for Law Firms</h3>
                            <p style="color: rgba(255,255,255,0.9); font-size: 0.85rem; line-height: 1.6;">Tailored financing options to assist law firms in purchasing or refinancing office space and legal facilities. Ensures a suitable and professional workspace.</p>
                        </div>
                        <div style="margin-top: 1rem; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.2); display: flex; justify-content: space-between; align-items: center;">
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Learn More →</a>
                            <a href="#" style="color: #c8e86a; text-decoration: none; font-size: 0.8rem;">Contact Experts →</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support Your Attorney Firm Section -->
    <section style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 3rem; align-items: center;">
                <div class="scroll-reveal">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=450&fit=crop" alt="Legal finance experts" style="width: 100%; height: auto; border: 1px solid #e2e8e2;">
                </div>
                <div class="scroll-reveal">
                    <div class="tag" style="margin-bottom: 1rem;"><span></span>OUR EXPERTISE</div>
                    <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem; font-family: 'Space Grotesk', sans-serif;">Support Your<br>Attorney Firm</h2>
                    <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin-bottom: 1.5rem;"></div>
                    <p style="color: #5a6b5a; line-height: 1.7; margin-bottom: 1rem;">
                        Our team of financial experts understands the legal industry's unique requirements and challenges. We work closely with attorney firm partners to customize funding solutions that align with their specific goals and financial situations.
                    </p>
                    <p style="color: #5a6b5a; line-height: 1.7;">
                        At BizCashAndCapital, we're committed to empowering attorney firms with the financial resources required to provide exceptional legal representation.
                    </p>
                    <div class="flex gap-4 mt-6">
                        <a href="tel:+12166470007" class="btn-primary">Call Now →</a>
                        <a href="#" class="btn-outline">Get a Quote</a>
                    </div>
                    <div class="mt-4">
                        <a href="tel:+12166470007" style="color: #1a7a4a; text-decoration: none; font-weight: 600; font-size: 1.2rem;">+1 (216) 647-0007</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Benefits of Attorney Firm Funding Section -->
    <section style="padding: 5rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; margin-bottom: 3rem;" class="scroll-reveal">
                <div class="tag" style="display: inline-flex;"><span></span>KEY BENEFITS</div>
                <h2 style="font-size: 2.5rem; font-weight: 800; margin-top: 1rem; font-family: 'Space Grotesk', sans-serif;">Key Benefits of Attorney Firm Funding</h2>
                <div style="width: 80px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Legal Research and Expertise</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Invest in comprehensive legal research tools and expert resources to strengthen case preparation.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Talent Acquisition and Retention</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Attract and retain top legal talent. Competent professionals are the cornerstone of exceptional legal services.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="10" />
                            <path d="M12 8v4M12 16h.01" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Professional Development and Training</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Fund continuing legal education and professional development programs for your team.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Technology and Legal Tools</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Invest in cutting-edge legal technology, case management software, and digital tools.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Client Service Enhancements</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Improve client experience with better communication tools and service offerings.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Rapid Response to Opportunities</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Swiftly respond to new case opportunities and take on high-profile or time-sensitive cases without delays.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Risk Mitigation</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Access funding to manage financial risks associated with complex litigation and case expenses.</p>
                </div>

                <div class="scroll-reveal" style="background: white; border: 1px solid #e2e8e2; padding: 2rem; text-align: center; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 35px -12px rgba(26,122,74,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 60px; height: 60px; background: #1a7a4a; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem auto;">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                        </svg>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Enhanced Marketing and Visibility</h3>
                    <p style="color: #6b7280; font-size: 0.85rem;">Invest in marketing initiatives to increase firm visibility and attract new clients.</p>
                </div>
            </div>
        </div>
    </section>

    @include('application')
    @include('footer')

    <!-- Scroll Reveal Script -->
    <script>
        const scrollElements = document.querySelectorAll('.scroll-reveal');
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                    scrollObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
        scrollElements.forEach(el => scrollObserver.observe(el));
    </script>

</body>

</html>