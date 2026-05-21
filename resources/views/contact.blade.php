<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us — BizCashAndCapital | Get Expert Loan Advice</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'jakarta': ['Plus Jakarta Sans', 'sans-serif'],
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

        .contact-card {
            background: white;
            border: 1px solid #e2e8e2;
            transition: all 0.3s ease;
            padding: 1.5rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -12px rgba(26, 122, 74, 0.15);
            border-color: #1a7a4a;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: inherit;
            font-size: 0.875rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background: rgba(238, 246, 238, 0.95);
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

    <!-- Page Header - With Background Image -->
    <section style="padding: 8rem 0 4rem 0; position: relative; overflow: hidden;">
        <!-- Full Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/contact-image.webp') }}"
                alt="Business team collaborating"
                style="width: 100%; height: 100%; object-fit: cover;">
            <!-- Dark Gradient Overlay -->
            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(10,46,31,0.85) 0%, rgba(26,74,46,0.85) 50%, rgba(10,46,31,0.85) 100%);"></div>
            <!-- Subtle Pattern Overlay -->
            <div style="position: absolute; inset: 0; background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.15;"></div>
        </div>

        <!-- Content Container -->
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem; text-align: center; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); padding: 0.35rem 1.25rem; margin-bottom: 1.5rem; border: 1px solid rgba(255,255,255,0.2);">
                <span style="width: 8px; height: 8px; background: #c8e86a; border-radius: 50% !important; animation: pulse 2s infinite;"></span>
                <span style="font-size: 0.7rem; font-weight: 700; color: white; letter-spacing: 0.08em;">GET IN TOUCH</span>
            </div>

            <h1 style="font-size: 3.5rem; font-weight: 800; color: white; margin-bottom: 1rem; letter-spacing: -0.02em;">Contact Us</h1>

            <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0 auto;"></div>

            <p style="color: rgba(255,255,255,0.85); margin-top: 1.5rem; max-width: 600px; margin-left: auto; margin-right: auto; font-size: 1rem; line-height: 1.6;">
                Have questions? Our loan experts are here to help you find the perfect financing solution for your business.
            </p>
        </div>
    </section>

    <!-- Contact Section Main - Redesigned Premium -->
    <section style="padding: 6rem 0; background: linear-gradient(135deg, #f8faf8 0%, #f0f5f0 100%); position: relative; overflow: hidden;">
        <!-- Decorative Background Elements -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 40%, #1a7a4a 2px, transparent 2px); background-size: 50px 50px;"></div>
        <div style="position: absolute; top: -150px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(200,232,106,0.08) 0%, transparent 70%); border-radius: 50% !important;"></div>
        <div style="position: absolute; bottom: -150px; left: -100px; width: 280px; height: 280px; background: radial-gradient(circle, rgba(26,122,74,0.06) 0%, transparent 70%); border-radius: 50% !important;"></div>

        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem; position: relative; z-index: 2;">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); gap: 4rem;">

                <!-- Left Side - Contact Info (Enhanced) -->
                <div>
                    <!-- Badge -->
                    <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #1a7a4a10, #c8e86a10); padding: 0.35rem 1.25rem; margin-bottom: 1.5rem; border: 1px solid #1a7a4a20;">
                        <span style="width: 8px; height: 8px; background: #1a7a4a; display: inline-block;"></span>
                        <span style="font-size: 0.7rem; font-weight: 700; color: #1a7a4a; letter-spacing: 0.08em;">GET IN TOUCH</span>
                    </div>

                    <h2 style="font-size: 2.5rem; font-weight: 800; color: #111a13; margin-bottom: 1rem; letter-spacing: -0.02em;">Let's talk<br>about your business</h2>
                    <div style="width: 70px; height: 4px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin-bottom: 1.5rem;"></div>
                    <p style="color: #5a6b5a; line-height: 1.7; margin-bottom: 2rem; font-size: 1rem;">Whether you have a question about our loan programs, need help with your application, or want to discuss custom financing options — we're here to help.</p>

                    <!-- Contact Cards - Enhanced -->
                    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                        <!-- Phone Card -->
                        <div style="background: white; border: 1px solid #e2e8e2; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.02);"
                            onmouseover="this.style.transform='translateX(8px)'; this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 10px 25px -8px rgba(26,122,74,0.15)';"
                            onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.02)';">
                            <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center;">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; margin-bottom: 0.25rem; color: #111a13;">Phone Number</h3>
                                <a href="tel:+12166470007" style="color: #1a7a4a; text-decoration: none; font-size: 1.25rem; font-weight: 700;">+1 (216) 647-0007</a>
                                <p style="color: #9ca3af; font-size: 0.7rem; margin-top: 0.25rem;">Mon–Sat, 8am – 6pm EST</p>
                            </div>
                        </div>

                        <!-- Email Card -->
                        <div style="background: white; border: 1px solid #e2e8e2; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.02);"
                            onmouseover="this.style.transform='translateX(8px)'; this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 10px 25px -8px rgba(26,122,74,0.15)';"
                            onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.02)';">
                            <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center;">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; margin-bottom: 0.25rem; color: #111a13;">Email Address</h3>
                                <a href="mailto:info@bizcashandcapital.com" style="color: #1a7a4a; text-decoration: none; font-size: 1rem; font-weight: 600;">info@bizcashandcapital.com</a>
                                <p style="color: #9ca3af; font-size: 0.7rem; margin-top: 0.25rem;">We'll respond within 24 hours</p>
                            </div>
                        </div>

                        <!-- Hours Card -->
                        <div style="background: white; border: 1px solid #e2e8e2; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.02);"
                            onmouseover="this.style.transform='translateX(8px)'; this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 10px 25px -8px rgba(26,122,74,0.15)';"
                            onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.02)';">
                            <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center;">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <circle cx="12" cy="12" r="10" />
                                    <polyline points="12 6 12 12 16 14" />
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; margin-bottom: 0.25rem; color: #111a13;">Business Hours</h3>
                                <p style="color: #111a13; font-weight: 500;">Monday – Saturday: 8:00 AM – 6:00 PM</p>
                                <p style="color: #9ca3af; font-size: 0.875rem;">Sunday: Closed</p>
                            </div>
                        </div>

                        <!-- Location Card -->
                        <div style="background: white; border: 1px solid #e2e8e2; padding: 1.5rem; display: flex; align-items: center; gap: 1.25rem; transition: all 0.3s ease; cursor: pointer; box-shadow: 0 2px 8px rgba(0,0,0,0.02);"
                            onmouseover="this.style.transform='translateX(8px)'; this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 10px 25px -8px rgba(26,122,74,0.15)';"
                            onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2'; this.style.boxShadow='0 2px 8px rgba(0,0,0,0.02)';">
                            <div style="width: 56px; height: 56px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center;">
                                <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                            </div>
                            <div>
                                <h3 style="font-weight: 700; margin-bottom: 0.25rem; color: #111a13;">Office Location</h3>
                                <p style="color: #111a13; font-weight: 500;">Cleveland, Ohio, United States</p>
                                <p style="color: #9ca3af; font-size: 0.7rem; margin-top: 0.25rem;">🌎 Nationwide Service</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Links - Enhanced -->
                    <div style="margin-top: 2.5rem; padding-top: 1.5rem; border-top: 2px solid #e2ece2;">
                        <h3 style="font-weight: 700; margin-bottom: 1rem; color: #111a13;">Follow Us</h3>
                        <div style="display: flex; gap: 1rem;">
                            <a href="#" style="width: 44px; height: 44px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease; border-radius: 0 !important;"
                                onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                </svg>
                            </a>
                            <a href="#" style="width: 44px; height: 44px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                                </svg>
                            </a>
                            <a href="#" style="width: 44px; height: 44px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                    <rect x="2" y="2" width="20" height="20" rx="4" ry="4" />
                                    <circle cx="12" cy="12" r="4" />
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                </svg>
                            </a>
                            <a href="#" style="width: 44px; height: 44px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                    <rect x="2" y="9" width="4" height="12" />
                                    <circle cx="4" cy="4" r="2" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Side - Contact Form (Enhanced) -->
                <div style="background: white; border: 1px solid #e2e8e2; padding: 2.5rem; box-shadow: 0 25px 45px -12px rgba(0,0,0,0.1); position: relative; overflow: hidden;">
                    <!-- Form Decoration -->
                    <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: radial-gradient(circle, rgba(200,232,106,0.05) 0%, transparent 70%);"></div>

                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                        <div style="width: 40px; height: 40px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                <polyline points="7 10 12 15 17 10" />
                                <line x1="12" y1="15" x2="12" y2="3" />
                            </svg>
                        </div>
                        <h2 style="font-size: 1.75rem; font-weight: 800; color: #111a13; letter-spacing: -0.01em;">Send us a message</h2>
                    </div>

                    <p style="color: #5a6b5a; margin-bottom: 1.5rem; font-size: 0.875rem;">Fill out the form below and our team will get back to you within 24 hours.</p>

                    <form id="contactForm" style="display: flex; flex-direction: column; gap: 1.25rem;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div>
                                <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">First Name *</label>
                                <input type="text" placeholder="John" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e2e8e2; transition: all 0.3s;"
                                    onfocus="this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 0 0 3px rgba(26,122,74,0.1)'"
                                    onblur="this.style.borderColor='#e2e8e2'; this.style.boxShadow='none'">
                            </div>
                            <div>
                                <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Last Name *</label>
                                <input type="text" placeholder="Doe" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e2e8e2; transition: all 0.3s;"
                                    onfocus="this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 0 0 3px rgba(26,122,74,0.1)'"
                                    onblur="this.style.borderColor='#e2e8e2'; this.style.boxShadow='none'">
                            </div>
                        </div>

                        <div>
                            <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Email Address *</label>
                            <input type="email" placeholder="john@example.com" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e2e8e2; transition: all 0.3s;"
                                onfocus="this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 0 0 3px rgba(26,122,74,0.1)'"
                                onblur="this.style.borderColor='#e2e8e2'; this.style.boxShadow='none'">
                        </div>

                        <div>
                            <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Phone Number *</label>
                            <input type="tel" placeholder="(216) 647-0007" style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e2e8e2; transition: all 0.3s;"
                                onfocus="this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 0 0 3px rgba(26,122,74,0.1)'"
                                onblur="this.style.borderColor='#e2e8e2'; this.style.boxShadow='none'">
                        </div>

                        <div>
                            <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Loan Type</label>
                            <select style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e2e8e2; background: white; cursor: pointer;">
                                <option value="">Select Loan Type</option>
                                <option>Business Loan</option>
                                <option>Commercial Loan</option>
                                <option>SBA Loan</option>
                                <option>Construction Loan</option>
                                <option>Equipment Financing</option>
                            </select>
                        </div>

                        <div>
                            <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Message *</label>
                            <textarea rows="5" placeholder="Tell us about your business and funding needs..." style="width: 100%; padding: 0.875rem 1rem; border: 1px solid #e2e8e2; resize: vertical; transition: all 0.3s;"
                                onfocus="this.style.borderColor='#1a7a4a'; this.style.boxShadow='0 0 0 3px rgba(26,122,74,0.1)'"
                                onblur="this.style.borderColor='#e2e8e2'; this.style.boxShadow='none'"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn-primary" style="width: 100%; justify-content: center; padding: 1rem; font-size: 1rem; font-weight: 700;">Send Message →</button>
                            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin-top: 1rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="2">
                                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83" />
                                    <circle cx="12" cy="12" r="3" />
                                </svg>
                                <p style="color: #9ca3af; font-size: 0.7rem;">No credit check required. Your information is secure.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission handling
        document.getElementById('contactForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = 'Sending...';
            btn.disabled = true;
            setTimeout(() => {
                btn.innerHTML = '✓ Message Sent!';
                btn.style.background = '#0f5a38';
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = '#1a7a4a';
                    btn.disabled = false;
                    this.reset();
                }, 3000);
            }, 1500);
        });
    </script>

<!-- Map Section - Real Google Maps -->
<section style="padding: 0; background: #1a2a1a; position: relative; overflow: hidden;">
    <!-- Google Maps Embed -->
    <div style="position: relative; width: 100%; height: 450px;">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191084.66654142836!2d-81.79491075000001!3d41.4994954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8830ef2ee3686b2d%3A0x9f2b8d2b6e5f8b2d!2sCleveland%2C%20OH%2C%20USA!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" 
            width="100%" 
            height="100%" 
            style="border: 0; filter: grayscale(20%) contrast(1.05);" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        
        <!-- Gradient Overlay on Map -->
        <div style="position: absolute; inset: 0; background: linear-gradient(135deg, #1a7a4a15, #0f5a3815); pointer-events: none;"></div>
        
        <!-- Location Card Overlay -->
        <div style="position: absolute; bottom: 30px; left: 30px; background: white; padding: 1.25rem 1.75rem; box-shadow: 0 10px 30px -10px rgba(0,0,0,0.2); z-index: 10; max-width: 280px;">
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                <div style="width: 40px; height: 40px; background: #1a7a4a; display: flex; align-items: center; justify-content: center;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </div>
                <h3 style="font-weight: 800; color: #111a13; font-size: 1.125rem;">BizCash&Capital</h3>
            </div>
            <p style="color: #5a6b5a; font-size: 0.875rem; line-height: 1.5; margin-bottom: 0.75rem;">
                Cleveland, Ohio<br>
                United States
            </p>
            <div style="display: flex; align-items: center; gap: 0.5rem;">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                <span style="color: #1a7a4a; font-size: 0.7rem; font-weight: 600;">Nationwide Service</span>
            </div>
        </div>
        
        <!-- Get Directions Button -->
        <div style="position: absolute; bottom: 30px; right: 30px; z-index: 10;">
            <a href="https://maps.google.com/?q=Cleveland,+Ohio" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem; background: #1a7a4a; color: white; padding: 0.75rem 1.5rem; font-size: 0.875rem; font-weight: 600; text-decoration: none; transition: all 0.3s ease;"
               onmouseover="this.style.background='#0f5a38'; this.style.transform='translateY(-2px)';"
               onmouseout="this.style.background='#1a7a4a'; this.style.transform='translateY(0)';">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                    <circle cx="12" cy="10" r="3"/>
                </svg>
                Get Directions
            </a>
        </div>
    </div>
</section>

    <!-- FAQ Section -->
    <section style="padding: 5rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem auto;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #e8f0e8; padding: 0.25rem 1rem; margin-bottom: 1rem;">
                    <span style="width: 6px; height: 6px; background: #1a7a4a; animation: pulse 2s infinite;"></span>
                    <span style="font-size: 0.7rem; font-weight: 600; color: #1a7a4a;">FAQ</span>
                </div>
                <h2 style="font-size: 2rem; font-weight: 800; margin-bottom: 1rem;">Frequently Asked Questions</h2>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 0 auto;"></div>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
                <div class="faq-item" onclick="this.classList.toggle('open')" style="border: 1px solid #e2e8e2; margin-bottom: 1rem; background: white; cursor: pointer;">
                    <div style="padding: 1.25rem; display: flex; justify-content: space-between; align-items: center; font-weight: 600;">
                        <span>How quickly can I get a response?</span>
                        <span class="faq-icon" style="font-size: 1.25rem; transition: transform 0.2s;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding: 0 1.25rem 1.25rem 1.25rem; color: #6b7280; font-size: 0.875rem; line-height: 1.6;">
                        We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly at +1 (216) 647-0007.
                    </div>
                </div>

                <div class="faq-item" onclick="this.classList.toggle('open')" style="border: 1px solid #e2e8e2; margin-bottom: 1rem; background: white; cursor: pointer;">
                    <div style="padding: 1.25rem; display: flex; justify-content: space-between; align-items: center; font-weight: 600;">
                        <span>Do you offer loan consultations?</span>
                        <span class="faq-icon" style="font-size: 1.25rem; transition: transform 0.2s;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding: 0 1.25rem 1.25rem 1.25rem; color: #6b7280; font-size: 0.875rem; line-height: 1.6;">
                        Yes! We offer free, no-obligation consultations to discuss your business needs and find the best loan options for you. Schedule a call or visit our office.
                    </div>
                </div>

                <div class="faq-item" onclick="this.classList.toggle('open')" style="border: 1px solid #e2e8e2; margin-bottom: 1rem; background: white; cursor: pointer;">
                    <div style="padding: 1.25rem; display: flex; justify-content: space-between; align-items: center; font-weight: 600;">
                        <span>What information do I need to apply?</span>
                        <span class="faq-icon" style="font-size: 1.25rem; transition: transform 0.2s;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding: 0 1.25rem 1.25rem 1.25rem; color: #6b7280; font-size: 0.875rem; line-height: 1.6;">
                        Basic business information, proof of income/ revenue, business bank statements, and identification. Our team will guide you through the entire process.
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
                        <div style="width: 32px; height: 32px; background: #1a7a4a;"></div>
                        <span style="font-weight: 700; color: white;">BizCash&Capital</span>
                    </div>
                    <p style="font-size: 0.875rem;">Your trusted partner for unlocking the financial resources your business needs to thrive.</p>
                </div>
                <div>
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Quick Links</h4>
                    <ul style="list-style: none;">
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">About Us</a></li>
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">Loan Services</a></li>
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">FAQs</a></li>
                        <li><a href="#" style="color: #9ca3af; text-decoration: none;">Contact</a></li>
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
                    <h4 style="font-weight: 700; color: white; margin-bottom: 1rem;">Contact</h4>
                    <p style="font-size: 0.875rem;">📞 <a href="tel:+12166470007" style="color: #9ca3af; text-decoration: none;">+1 (216) 647-0007</a></p>
                    <p style="font-size: 0.875rem; margin-top: 0.5rem;">✉️ <a href="mailto:info@bizcashandcapital.com" style="color: #9ca3af; text-decoration: none;">info@bizcashandcapital.com</a></p>
                </div>
            </div>
            <div style="border-top: 1px solid rgba(255,255,255,0.05); padding-top: 2rem; text-align: center; font-size: 0.75rem;">© All Copyright 2025 by BizCashandCapital.com</div>
        </div>
    </footer>

    <style>
        .faq-item.open .faq-answer {
            display: block !important;
        }

        .faq-item.open .faq-icon {
            transform: rotate(45deg);
        }

        .contact-card:hover svg {
            animation: pulse 1s ease-in-out;
        }
    </style>

    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 60) navbar.classList.add('scrolled');
            else navbar.classList.remove('scrolled');
        });

        // Form submission
        document.getElementById('contactForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = 'Sending...';
            btn.disabled = true;
            setTimeout(() => {
                btn.innerHTML = '✓ Message Sent!';
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.disabled = false;
                    this.reset();
                }, 3000);
            }, 1500);
        });
    </script>
</body>

</html>