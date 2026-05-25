<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Contact Us — BizCashAndCapital | Get Expert Loan Advice</title>
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

        .btn-primary {
            background: #1a7a4a;
            color: white;
            padding: 0.75rem 1.5rem;
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
            padding: 0.65rem 1.25rem;
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
            padding: 1.25rem;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -12px rgba(26, 122, 74, 0.15);
            border-color: #1a7a4a;
        }

        input, select, textarea {
            width: 100%;
            padding: 0.875rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: inherit;
            font-size: 0.875rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .btn-primary, .btn-outline {
                padding: 0.6rem 1.2rem;
                font-size: 0.8rem;
            }
            
            h1 {
                font-size: 2rem !important;
            }
            
            h2 {
                font-size: 1.6rem !important;
            }
        }

        @media (max-width: 640px) {
            section {
                padding: 2rem 0 !important;
            }
            
            .contact-card {
                padding: 1rem;
            }
            
            .contact-card svg {
                width: 20px;
                height: 20px;
            }
        }
    </style>
</head>

<body>

    @include('header')

    <!-- Page Header - Responsive -->
    <section style="padding: 7rem 0 3rem 0; position: relative; overflow: hidden;">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/contact-image.webp') }}" alt="Business team collaborating" style="width: 100%; height: 100%; object-fit: cover;">
            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, rgba(10,46,31,0.85) 0%, rgba(26,74,46,0.85) 50%, rgba(10,46,31,0.85) 100%);"></div>
            <div style="position: absolute; inset: 0; background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.15;"></div>
        </div>

        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; text-align: center; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); backdrop-filter: blur(8px); padding: 0.35rem 1rem; margin-bottom: 1rem; border: 1px solid rgba(255,255,255,0.2);">
                <span style="width: 6px; height: 6px; background: #c8e86a; display: inline-block; animation: pulse 2s infinite;"></span>
                <span style="font-size: 0.65rem; font-weight: 700; color: white; letter-spacing: 0.08em;">GET IN TOUCH</span>
            </div>

            <h1 style="font-size: clamp(1.8rem, 6vw, 3.5rem); font-weight: 800; color: white; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Contact Us</h1>

            <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #c8e86a, #1a7a4a); margin: 0 auto;"></div>

            <p style="color: rgba(255,255,255,0.85); margin-top: 1.25rem; max-width: 500px; margin-left: auto; margin-right: auto; font-size: 0.875rem; line-height: 1.5;">
                Have questions? Our loan experts are here to help you find the perfect financing solution for your business.
            </p>
        </div>
    </section>

    <!-- Contact Section Main - Responsive -->
    <section style="padding: 3rem 0 4rem 0; background: #f5f7f5; position: relative;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; position: relative; z-index: 2;">
            <div style="display: flex; flex-direction: column; gap: 2rem;">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                    <!-- Left Side - Contact Info -->
                    <div>
                        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #1a7a4a10, #c8e86a10); padding: 0.35rem 1rem; margin-bottom: 1rem; border: 1px solid #1a7a4a20;">
                            <span style="width: 6px; height: 6px; background: #1a7a4a; display: inline-block;"></span>
                            <span style="font-size: 0.65rem; font-weight: 700; color: #1a7a4a; letter-spacing: 0.08em;">GET IN TOUCH</span>
                        </div>

                        <h2 style="font-size: clamp(1.5rem, 5vw, 2rem); font-weight: 800; color: #111a13; margin-bottom: 0.75rem; font-family: 'Space Grotesk', sans-serif;">Let's talk about your business</h2>
                        <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin-bottom: 1rem;"></div>
                        <p style="color: #5a6b5a; line-height: 1.6; margin-bottom: 1.5rem; font-size: 0.875rem;">Whether you have a question about our loan programs, need help with your application, or want to discuss custom financing options — we're here to help.</p>

                        <!-- Contact Cards -->
                        <div style="display: flex; flex-direction: column; gap: 0.75rem;">
                            <!-- Phone Card -->
                            <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem; display: flex; align-items: center; gap: 1rem; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateX(5px)'; this.style.borderColor='#1a7a4a';"
                                onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2';">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 style="font-weight: 700; margin-bottom: 0.25rem; font-size: 0.85rem;">Phone Number</h3>
                                    <a href="tel:+12166470007" style="color: #1a7a4a; text-decoration: none; font-size: 1rem; font-weight: 700;">+1 (216) 647-0007</a>
                                    <p style="color: #9ca3af; font-size: 0.6rem;">Mon–Sat, 8am – 6pm EST</p>
                                </div>
                            </div>

                            <!-- Email Card -->
                            <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem; display: flex; align-items: center; gap: 1rem; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateX(5px)'; this.style.borderColor='#1a7a4a';"
                                onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2';">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 style="font-weight: 700; margin-bottom: 0.25rem; font-size: 0.85rem;">Email Address</h3>
                                    <a href="mailto:info@bizcashandcapital.com" style="color: #1a7a4a; text-decoration: none; font-size: 0.8rem; font-weight: 600; word-break: break-all;">info@bizcashandcapital.com</a>
                                    <p style="color: #9ca3af; font-size: 0.6rem;">We'll respond within 24 hours</p>
                                </div>
                            </div>

                            <!-- Hours Card -->
                            <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem; display: flex; align-items: center; gap: 1rem; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateX(5px)'; this.style.borderColor='#1a7a4a';"
                                onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2';">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12 6 12 12 16 14" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 style="font-weight: 700; margin-bottom: 0.25rem; font-size: 0.85rem;">Business Hours</h3>
                                    <p style="color: #111a13; font-weight: 500; font-size: 0.75rem;">Monday – Saturday: 8:00 AM – 6:00 PM</p>
                                    <p style="color: #9ca3af; font-size: 0.7rem;">Sunday: Closed</p>
                                </div>
                            </div>

                            <!-- Location Card -->
                            <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem; display: flex; align-items: center; gap: 1rem; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateX(5px)'; this.style.borderColor='#1a7a4a';"
                                onmouseout="this.style.transform='translateX(0)'; this.style.borderColor='#e2e8e2';">
                                <div style="width: 48px; height: 48px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 style="font-weight: 700; margin-bottom: 0.25rem; font-size: 0.85rem;">Office Location</h3>
                                    <p style="color: #111a13; font-weight: 500; font-size: 0.75rem;">Cleveland, Ohio, United States</p>
                                    <p style="color: #9ca3af; font-size: 0.6rem;">🌎 Nationwide Service</p>
                                </div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e2ece2;">
                            <h3 style="font-weight: 700; margin-bottom: 0.75rem; font-size: 0.875rem;">Follow Us</h3>
                            <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                                <a href="#" style="width: 40px; height: 40px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                    onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                    onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </a>
                                <a href="#" style="width: 40px; height: 40px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                    onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                    onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                        <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z" />
                                    </svg>
                                </a>
                                <a href="#" style="width: 40px; height: 40px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                    onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                    onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                        <rect x="2" y="2" width="20" height="20" rx="4" ry="4" />
                                        <circle cx="12" cy="12" r="4" />
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                                    </svg>
                                </a>
                                <a href="#" style="width: 40px; height: 40px; background: #e8f0e8; display: flex; align-items: center; justify-content: center; transition: all 0.3s ease;"
                                    onmouseover="this.style.background='#1a7a4a'; this.querySelector('svg').style.stroke='white';"
                                    onmouseout="this.style.background='#e8f0e8'; this.querySelector('svg').style.stroke='#1a7a4a';">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side - Contact Form -->
                    <div style="background: white; border: 1px solid #e2e8e2; padding: 1.5rem;">
                        <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1rem;">
                            <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #1a7a4a, #0f5a38); display: flex; align-items: center; justify-content: center;">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                    <polyline points="7 10 12 15 17 10" />
                                    <line x1="12" y1="15" x2="12" y2="3" />
                                </svg>
                            </div>
                            <h2 style="font-size: 1.4rem; font-weight: 800; font-family: 'Space Grotesk', sans-serif;">Send us a message</h2>
                        </div>

                        <p style="color: #5a6b5a; margin-bottom: 1.25rem; font-size: 0.8rem;">Fill out the form below and our team will get back to you within 24 hours.</p>

                        <form id="contactForm" style="display: flex; flex-direction: column; gap: 1rem;">
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                                <div>
                                    <label style="display: block; font-size: 0.7rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.35rem;">First Name *</label>
                                    <input type="text" placeholder="John">
                                </div>
                                <div>
                                    <label style="display: block; font-size: 0.7rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.35rem;">Last Name *</label>
                                    <input type="text" placeholder="Doe">
                                </div>
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.7rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.35rem;">Email Address *</label>
                                <input type="email" placeholder="john@example.com">
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.7rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.35rem;">Phone Number *</label>
                                <input type="tel" placeholder="(216) 647-0007">
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.7rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.35rem;">Loan Type</label>
                                <select>
                                    <option value="">Select Loan Type</option>
                                    <option>Business Loan</option>
                                    <option>Commercial Loan</option>
                                    <option>SBA Loan</option>
                                    <option>Construction Loan</option>
                                    <option>Equipment Financing</option>
                                </select>
                            </div>

                            <div>
                                <label style="display: block; font-size: 0.7rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.35rem;">Message *</label>
                                <textarea rows="4" placeholder="Tell us about your business and funding needs..."></textarea>
                            </div>

                            <div>
                                <button type="submit" class="btn-primary" style="width: 100%; justify-content: center;">Send Message →</button>
                                <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin-top: 0.75rem;">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="2">
                                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83" />
                                        <circle cx="12" cy="12" r="3" />
                                    </svg>
                                    <p style="color: #9ca3af; font-size: 0.6rem;">No credit check required. Your information is secure.</p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section style="padding: 0; background: #1a2a1a; position: relative;">
        <div style="position: relative; width: 100%; height: 350px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191084.66654142836!2d-81.79491075000001!3d41.4994954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8830ef2ee3686b2d%3A0x9f2b8d2b6e5f8b2d!2sCleveland%2C%20OH%2C%20USA!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s" 
                width="100%" 
                height="100%" 
                style="border: 0; filter: grayscale(20%) contrast(1.05);" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
            
            <div style="position: absolute; inset: 0; background: linear-gradient(135deg, #1a7a4a15, #0f5a3815); pointer-events: none;"></div>
            
            <div style="position: absolute; bottom: 15px; left: 15px; background: white; padding: 0.75rem 1rem; max-width: 260px;">
                <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.5rem;">
                    <div style="width: 32px; height: 32px; background: #1a7a4a; display: flex; align-items: center; justify-content: center;">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3 style="font-weight: 800; color: #111a13; font-size: 0.9rem;">BizCash&Capital</h3>
                </div>
                <p style="color: #5a6b5a; font-size: 0.7rem; margin-bottom: 0.5rem;">
                    Cleveland, Ohio<br>
                    United States
                </p>
                <div style="display: flex; align-items: center; gap: 0.35rem;">
                    <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="12 6 12 12 16 14"/>
                    </svg>
                    <span style="color: #1a7a4a; font-size: 0.6rem; font-weight: 600;">Nationwide Service</span>
                </div>
            </div>
            
            <div style="position: absolute; bottom: 15px; right: 15px; z-index: 10;">
                <a href="https://maps.google.com/?q=Cleveland,+Ohio" target="_blank" style="display: inline-flex; align-items: center; gap: 0.5rem; background: #1a7a4a; color: white; padding: 0.5rem 1rem; font-size: 0.7rem; font-weight: 600; text-decoration: none; transition: all 0.3s ease;"
                   onmouseover="this.style.background='#0f5a38';"
                   onmouseout="this.style.background='#1a7a4a';">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                    Get Directions
                </a>
            </div>
        </div>
    </section>

    <!-- FAQ Section - FIXED -->
    <section style="padding: 2.5rem 0 3rem 0; background: white;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1.5rem;">
            <div style="text-align: center; max-width: 600px; margin: 0 auto 2rem auto;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: #e8f0e8; padding: 0.25rem 0.75rem; margin-bottom: 0.75rem;">
                    <span style="width: 5px; height: 5px; background: #1a7a4a; animation: pulse 2s infinite;"></span>
                    <span style="font-size: 0.6rem; font-weight: 600; color: #1a7a4a;">FAQ</span>
                </div>
                <h2 style="font-size: clamp(1.4rem, 5vw, 2rem); font-weight: 800; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif;">Frequently Asked Questions</h2>
                <div style="width: 50px; height: 2px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 0 auto;"></div>
            </div>

            <div style="max-width: 700px; margin: 0 auto;">
                <!-- FAQ 1 -->
                <div class="faq-item" style="border: 1px solid #e2e8e2; margin-bottom: 0.75rem; background: white;">
                    <div class="faq-question" style="padding: 0.875rem 1rem; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 0.85rem; cursor: pointer;">
                        <span>How quickly can I get a response?</span>
                        <span class="faq-icon" style="font-size: 1.1rem; transition: transform 0.2s;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding: 0 1rem 1rem 1rem; color: #6b7280; font-size: 0.8rem; line-height: 1.5; border-top: 1px solid #e2e8e2;">
                        We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call us directly at +1 (216) 647-0007.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item" style="border: 1px solid #e2e8e2; margin-bottom: 0.75rem; background: white;">
                    <div class="faq-question" style="padding: 0.875rem 1rem; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 0.85rem; cursor: pointer;">
                        <span>Do you offer loan consultations?</span>
                        <span class="faq-icon" style="font-size: 1.1rem; transition: transform 0.2s;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding: 0 1rem 1rem 1rem; color: #6b7280; font-size: 0.8rem; line-height: 1.5; border-top: 1px solid #e2e8e2;">
                        Yes! We offer free, no-obligation consultations to discuss your business needs and find the best loan options for you. Schedule a call or visit our office.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item" style="border: 1px solid #e2e8e2; margin-bottom: 0.75rem; background: white;">
                    <div class="faq-question" style="padding: 0.875rem 1rem; display: flex; justify-content: space-between; align-items: center; font-weight: 600; font-size: 0.85rem; cursor: pointer;">
                        <span>What information do I need to apply?</span>
                        <span class="faq-icon" style="font-size: 1.1rem; transition: transform 0.2s;">+</span>
                    </div>
                    <div class="faq-answer" style="display: none; padding: 0 1rem 1rem 1rem; color: #6b7280; font-size: 0.8rem; line-height: 1.5; border-top: 1px solid #e2e8e2;">
                        Basic business information, proof of income/revenue, business bank statements, and identification. Our team will guide you through the entire process.
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('application')
    @include('footer')

    <script>
        // FAQ Toggle Function - FULLY WORKING
        function initFaq() {
            const faqItems = document.querySelectorAll('.faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.faq-question');
                const answer = item.querySelector('.faq-answer');
                const icon = item.querySelector('.faq-icon');
                
                if (question) {
                    question.addEventListener('click', function(e) {
                        e.stopPropagation();
                        const isOpen = answer.style.display === 'block';
                        
                        // Close all other FAQs
                        faqItems.forEach(otherItem => {
                            const otherAnswer = otherItem.querySelector('.faq-answer');
                            const otherIcon = otherItem.querySelector('.faq-icon');
                            if (otherAnswer && otherAnswer !== answer) {
                                otherAnswer.style.display = 'none';
                                if (otherIcon) {
                                    otherIcon.textContent = '+';
                                    otherIcon.style.transform = 'rotate(0deg)';
                                }
                            }
                        });
                        
                        // Toggle current FAQ
                        if (isOpen) {
                            answer.style.display = 'none';
                            if (icon) {
                                icon.textContent = '+';
                                icon.style.transform = 'rotate(0deg)';
                            }
                        } else {
                            answer.style.display = 'block';
                            if (icon) {
                                icon.textContent = '−';
                                icon.style.transform = 'rotate(180deg)';
                            }
                        }
                    });
                }
            });
        }
        
        // Form submission
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
        
        // Initialize FAQ when DOM is ready
        document.addEventListener('DOMContentLoaded', initFaq);
    </script>
</body>

</html>