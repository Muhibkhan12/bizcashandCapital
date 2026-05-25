<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Apply for Funding — BizCashAndCapital | Fast Business Loan Application</title>
    <meta name="description" content="Complete our secure loan application form to get funded in 24-48 hours. No impact on your credit score. Fast approval for business loans." />
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

        /* Force all elements to have sharp edges */
        .rounded-2xl,
        .rounded-3xl,
        .rounded-xl,
        .rounded-full,
        [class*="rounded-"] {
            border-radius: 0 !important;
        }

        button, a, div, section, input, textarea, select, .bg-white, img {
            border-radius: 0 !important;
        }

        input, select, textarea {
            transition: all 0.3s ease;
        }
        
        input:focus, select:focus, textarea:focus {
            outline: none;
            border-color: #1a7a4a;
            box-shadow: 0 0 0 2px rgba(26, 122, 74, 0.1);
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

        @media (max-width: 768px) {
            .btn-primary, .btn-outline { padding: 0.65rem 1.25rem; font-size: 0.75rem; }
            h2 { font-size: 1.8rem !important; }
        }
    </style>
</head>

<body>

    @include('header')

        <!-- Hero Section -->
    <section class="relative min-h-[450px] md:min-h-[500px] flex items-center justify-center overflow-hidden pt-24 md:pt-28 pb-12 md:pb-16">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1600&q=80" alt="Business loan application - person working on laptop with graphs and charts" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-emerald-900/60 z-10"></div>
        </div>
        <div class="relative z-20 max-w-7xl mx-auto px-5 lg:px-8 w-full text-center">
            <h1 class="font-grotesk text-[clamp(42px,8vw,70px)] leading-[1.1] tracking-tight text-white mb-4">Start Your Application</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-[#c8e86a] to-[#1a7a4a] mx-auto mb-6"></div>
            <p class="text-white/80 text-sm sm:text-base max-w-3xl mx-auto leading-relaxed">
                Get Funded in 24-48 Hours. All information is secure and confidential. No impact on your credit score.
            </p>
        </div>
    </section>

    <!-- Application Form Section -->
    <section style="padding: 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-5xl mx-auto px-5 md:px-8">
            
            <!-- Progress Steps -->
            <div class="mb-10 flex justify-between items-center flex-wrap gap-3 border-b border-gray-200 pb-6">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-[#1a7a4a] text-white flex items-center justify-center font-bold">1</div>
                    <span class="font-semibold text-gray-800">Business Info</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-300 hidden sm:block"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-300 text-gray-600 flex items-center justify-center font-bold">2</div>
                    <span class="text-gray-500">Owner Info</span>
                </div>
                <div class="w-12 h-0.5 bg-gray-300 hidden sm:block"></div>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gray-300 text-gray-600 flex items-center justify-center font-bold">3</div>
                    <span class="text-gray-500">Loan Details</span>
                </div>
            </div>

            <form action="#" method="POST" class="space-y-8">
                @csrf

                <!-- Business Information Section -->
                <div>
                    <div class="tag mb-4"><span></span>BUSINESS INFORMATION</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Legal Business Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Enter legal business name" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Entity Type <span class="text-red-500">*</span></label>
                            <select class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                                <option value="">Select entity type</option>
                                <option value="sole">Sole Proprietorship</option>
                                <option value="llc">LLC</option>
                                <option value="corporation">Corporation</option>
                                <option value="partnership">Partnership</option>
                                <option value="nonprofit">Non-Profit</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business EIN <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="XX-XXXXXXX" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Start Date <span class="text-red-500">*</span></label>
                            <input type="date" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Industry / Business Category <span class="text-red-500">*</span></label>
                            <select class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                                <option value="">Select industry</option>
                                <option value="construction">Construction</option>
                                <option value="retail">Retail</option>
                                <option value="healthcare">Healthcare</option>
                                <option value="hospitality">Hospitality</option>
                                <option value="accounting">Accounting</option>
                                <option value="legal">Legal Services</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Business Address (Street, City, State, Zip Code) <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="123 Main St, New York, NY 10001" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                    </div>
                </div>

                <!-- Owner / Principal Information Section -->
                <div>
                    <div class="tag mb-4"><span></span>OWNER / PRINCIPAL INFORMATION</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Merchant Full Name <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="First and Last Name" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Merchant Date of Birth <span class="text-red-500">*</span></label>
                            <input type="date" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Merchant SSN <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="XXX-XX-XXXX" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Ownership % <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="100%" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Home Address (Street, City, State, Zip Code) <span class="text-red-500">*</span></label>
                            <input type="text" placeholder="Street, City, State, Zip Code" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Best Phone Number <span class="text-red-500">*</span></label>
                            <input type="tel" placeholder="(000) 000-0000" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Email Address <span class="text-red-500">*</span></label>
                            <input type="email" placeholder="example@company.com" class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                        </div>
                    </div>
                </div>

                <!-- Loan Details Section -->
                <div>
                    <div class="tag mb-4"><span></span>LOAN DETAILS</div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Purpose of Funding <span class="text-red-500">*</span></label>
                            <select class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                                <option value="">Select purpose</option>
                                <option value="working_capital">Working Capital</option>
                                <option value="equipment">Equipment Purchase</option>
                                <option value="expansion">Business Expansion</option>
                                <option value="debt">Debt Consolidation</option>
                                <option value="inventory">Inventory Purchase</option>
                                <option value="marketing">Marketing / Advertising</option>
                                <option value="hiring">Hiring / Staffing</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Loan Amount Needed <span class="text-red-500">*</span></label>
                            <select class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0">
                                <option value="">Select amount</option>
                                <option value="5000">$5,000 - $10,000</option>
                                <option value="25000">$10,000 - $25,000</option>
                                <option value="50000">$25,000 - $50,000</option>
                                <option value="100000">$50,000 - $100,000</option>
                                <option value="250000">$100,000 - $250,000</option>
                                <option value="500000">$250,000 - $500,000</option>
                                <option value="1000000">$500,000+</option>
                            </select>
                        </div>
                        <div class="md:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Open Loans (If Yes - Please Mention Open Balance / Payments)</label>
                            <textarea rows="2" placeholder="List any existing loans, balances, and monthly payments..." class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Additional Information Section -->
                <div>
                    <div class="tag mb-4"><span></span>ADDITIONAL INFORMATION (OPTIONAL)</div>
                    <div class="mt-4">
                        <textarea rows="3" placeholder="Any other details you'd like us to know about your business or funding needs..." class="w-full border border-gray-300 px-4 py-3 focus:border-[#1a7a4a] focus:ring-0"></textarea>
                    </div>
                </div>

                <!-- Legal Disclaimer -->
                <div class="bg-gray-50 border border-gray-200 p-6">
                    <p class="text-xs text-gray-500 leading-relaxed">
                        By signing & faxing or emailing us your application, you certify that (i) you are authorized to apply on behalf of the company whose full legal name appears above under the Company information portion of the Funding Application for a business loan from us and (ii) all information you provide within the Funding Application and other supporting documents is true and complete and that you will notify us of material changes to such information. You understand & agree that we and our agents and assigners are authorized to contact 3rd parties to make inquiries in evaluating your Funding Application (including requesting business & personal credit bureau reports from credit reporting agencies and other sources) or for any update, renewal, extension of credit. You understand and agree that we may provide credit & other information from the Funding Application and on the signing individual(s) & the company with 3rd parties who may use the information for any lawful purpose, including for the purpose of offering credit and/or other products & services to the signing individual(s) and/or the company.
                    </p>
                </div>

                <!-- Submit Button -->
                <div class="text-center pt-4">
                    <button type="submit" class="btn-primary text-lg px-10 py-4">
                        Send Application →
                    </button>
                    <p class="text-xs text-gray-400 mt-4">Your information is secure. Click Send to open your email client.</p>
                </div>
            </form>
        </div>
    </section>

    <!-- Trust Indicators -->
    <section style="padding: 3rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="flex flex-wrap justify-center gap-8 md:gap-12">
                <div class="flex items-center gap-3">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                    <span class="text-gray-700 font-medium">256-bit SSL Secure</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                    <span class="text-gray-700 font-medium">No Credit Impact</span>
                </div>
                <div class="flex items-center gap-3">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                    <span class="text-gray-700 font-medium">Fast 24-48hr Funding</span>
                </div>
            </div>
        </div>
    </section>

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