<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BizCashAndCapital — Business Loans for Every Industry</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- Google Fonts: Inter + Space Grotesk -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; }
        
        /* Custom animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        @keyframes marquee {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        @keyframes shine {
            0% { background-position: -100% 0; }
            100% { background-position: 200% 0; }
        }
        
        .animate-float { animation: float 4s ease-in-out infinite; }
        .animate-float-slow { animation: floatSlow 6s ease-in-out infinite; }
        .animate-pulse-slow { animation: pulse 3s ease-in-out infinite; }
        .animate-marquee { animation: marquee 20s linear infinite; }
        .shine-effect {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            background-size: 200% 100%;
            animation: shine 2s infinite;
        }
        
        /* Industry card hover */
        .industry-card {
            transition: all 0.3s ease;
        }
        .industry-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -12px rgba(16,185,129,0.25);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #f1f5f9; }
        ::-webkit-scrollbar-thumb { background: #10b981; border-radius: 10px; }
        
        /* Smooth scroll behavior */
        html { scroll-behavior: smooth; }
        
        /* Hover transition for buttons */
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
        }
        
        /* Video container */
        .video-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        /* Glass effect */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #10b981, #059669, #34d399);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body class="bg-white text-slate-800 overflow-x-hidden">

    <!-- Header / Navbar -->
    <header class="fixed top-0 left-0 w-full z-50 bg-white/95 backdrop-blur-sm border-b border-slate-200 transition-all duration-300" data-aos="fade-down" data-aos-duration="600">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center flex-wrap gap-4">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-sm">B</span>
                </div>
                <span class="font-grotesk font-bold text-xl text-slate-800">BizCash&Capital</span>
            </div>
            <div class="flex gap-6 items-center flex-wrap">
                <a href="#" class="text-slate-600 hover:text-green-600 transition text-sm">About</a>
                <a href="#" class="text-slate-600 hover:text-green-600 transition text-sm">Loan Services</a>
                <a href="#" class="text-slate-600 hover:text-green-600 transition text-sm">Industries</a>
                <a href="#" class="text-slate-600 hover:text-green-600 transition text-sm">FAQs</a>
                <a href="#" class="px-5 py-2 rounded-full bg-gradient-to-r from-green-500 to-emerald-600 text-white text-sm font-medium hover:shadow-lg transition hover-lift">Apply Now</a>
            </div>
        </div>
    </header>

    <!-- Hero Section with Video Background -->
    <section class="relative pt-32 pb-20 px-6 overflow-hidden min-h-screen flex items-center">
        <!-- Video Background -->
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="https://cdn.pixabay.com/video/2023/06/28/169818-841105685_large.mp4" type="video/mp4">
            <source src="https://videos.pexels.com/video-files/3195394/3195394-uhd_2560_1440_30fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-br from-black/60 to-black/40 z-10"></div>
        
        <div class="max-w-7xl mx-auto relative z-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                    <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-medium text-white mb-6 border border-white/30">
                        <span class="w-1.5 h-1.5 bg-green-400 rounded-full animate-pulse"></span>
                        Welcome to BizCashAndCapital
                    </div>
                    <h1 class="font-grotesk text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-white mb-6">
                        Your trusted partner for<br>
                        <span class="gradient-text">financial resources</span>
                    </h1>
                    <p class="text-white/80 text-lg leading-relaxed mb-8">
                        We understand that each business is unique, and one-size-fits-all solutions just won't do. Connect with expert advisors who specialize in securing funding for a wide range of industries.
                    </p>
                    <div class="flex gap-4 flex-wrap">
                        <a href="#contact" class="bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white px-8 py-3 rounded-full font-semibold transition hover:scale-105 hover-lift shadow-lg">Call to Experts →</a>
                        <a href="#industries" class="border border-white/50 text-white px-8 py-3 rounded-full font-semibold hover:bg-white/10 transition hover-lift">Explore Solutions</a>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-green-500/90 to-emerald-600/90 backdrop-blur-sm rounded-3xl p-8 text-white shadow-2xl animate-float border border-white/20">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            </div>
                            <p class="text-green-100 text-sm mb-2">Speak with an Expert</p>
                            <a href="tel:+12166470007" class="text-3xl md:text-4xl font-bold hover:underline">+1 (216) 647-0007</a>
                            <p class="text-green-100 text-sm mt-4">Mon-Sat, 8am - 6pm</p>
                            <div class="mt-6 pt-6 border-t border-green-400/30">
                                <p class="text-sm">Get personalized funding advice today</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Tailored Approach -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
                <div class="inline-flex items-center gap-2 bg-green-100 px-4 py-1.5 rounded-full text-xs font-medium text-green-700 mb-4">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                    Our Process
                </div>
                <h2 class="font-grotesk text-3xl md:text-4xl font-bold text-slate-800 mb-4">Our Tailored Approach to Funding</h2>
                <p class="text-slate-500 max-w-3xl mx-auto">What sets BizCashAndCapital apart is our commitment to understanding your unique business needs. We believe in the power of tailored funding solutions.</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 text-center hover-lift shadow-sm hover:shadow-xl border border-green-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl shadow-md">📋</div>
                    <h3 class="font-bold text-slate-800 mb-2">Explore Loan Types</h3>
                    <p class="text-slate-500 text-sm">SBA loans, business loans, commercial loans, and more</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 text-center hover-lift shadow-sm hover:shadow-xl border border-green-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl shadow-md">📄</div>
                    <h3 class="font-bold text-slate-800 mb-2">Guide Through Process</h3>
                    <p class="text-slate-500 text-sm">Step-by-step application assistance</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 text-center hover-lift shadow-sm hover:shadow-xl border border-green-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl shadow-md">📎</div>
                    <h3 class="font-bold text-slate-800 mb-2">Documentation Support</h3>
                    <p class="text-slate-500 text-sm">Assist in assembling necessary paperwork</p>
                </div>
                <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 text-center hover-lift shadow-sm hover:shadow-xl border border-green-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                    <div class="w-14 h-14 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 text-2xl shadow-md">💡</div>
                    <h3 class="font-bold text-slate-800 mb-2">Expert Insights</h3>
                    <p class="text-slate-500 text-sm">Address your questions and provide guidance</p>
                </div>
            </div>
            <div class="text-center mt-10" data-aos="fade-up" data-aos-duration="600" data-aos-delay="500">
                <a href="#contact" class="inline-flex items-center gap-2 text-green-600 font-medium hover:gap-3 transition-all">Discover More →</a>
            </div>
        </div>
    </section>

    <!-- Industries Section with Video Background -->
    <section id="industries" class="relative py-20 px-6 overflow-hidden">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0 opacity-20">
            <source src="https://videos.pexels.com/video-files/3195394/3195394-uhd_2560_1440_30fps.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-white/95 z-10"></div>
        
        <div class="max-w-7xl mx-auto relative z-20">
            <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="600">
                <div class="inline-flex items-center gap-2 bg-green-100 px-4 py-1.5 rounded-full text-xs font-medium text-green-700 mb-4">
                    <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                    Industries We Serve
                </div>
                <h2 class="font-grotesk text-3xl md:text-4xl font-bold text-slate-800 mb-4">Funding Solutions for Every Business</h2>
                <p class="text-slate-500 max-w-2xl mx-auto">No matter your industry, our experienced financial advisors will work closely with you</p>
            </div>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <!-- Auto Repair -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1487754180451-c456f719a1fc?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Auto Repair</div><p class="text-slate-500 text-sm">Modern diagnostic equipment, skilled technicians, service expansion</p></div>
                </div>
                <!-- Daycare -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="150">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Daycare</div><p class="text-slate-500 text-sm">Qualified staff, safety measures, capacity expansion</p></div>
                </div>
                <!-- Cleaning Business -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Cleaning Business</div><p class="text-slate-500 text-sm">Advanced machinery, personnel, client base expansion</p></div>
                </div>
                <!-- Beauty Salon -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="250">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1560066984-138dadb4c035?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Beauty Salon</div><p class="text-slate-500 text-sm">Equipment upgrades, renovations, marketing initiatives</p></div>
                </div>
                <!-- Convenience Store -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1604719312566-8912e9227c6a?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Convenience Store</div><p class="text-slate-500 text-sm">Store expansion, inventory, facility upgrades</p></div>
                </div>
                <!-- Construction -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="350">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1504917595217-d4dc5ebe6122?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Construction</div><p class="text-slate-500 text-sm">Equipment, materials, commercial/residential projects</p></div>
                </div>
                <!-- Attorney Firm -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1589829588165-2b76291d8f1a?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Attorney Firm</div><p class="text-slate-500 text-sm">Case expenses, technology, practice expansion</p></div>
                </div>
                <!-- Accounting Firm -->
                <div class="industry-card bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl border border-slate-100" data-aos="fade-up" data-aos-duration="600" data-aos-delay="450">
                    <div class="h-36 overflow-hidden"><img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=400&h=200&fit=crop" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"></div>
                    <div class="p-5"><div class="text-xl font-bold text-slate-800 mb-2">Accounting Firm</div><p class="text-slate-500 text-sm">Team expansion, software, practice growth</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Your Journey Section -->
    <section class="py-20 px-6 bg-gradient-to-br from-slate-50 to-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1" data-aos="fade-right" data-aos-duration="800">
                    <div class="inline-flex items-center gap-2 bg-green-100 px-4 py-1.5 rounded-full text-xs font-medium text-green-700 mb-4">
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                        Your Journey
                    </div>
                    <h2 class="font-grotesk text-3xl md:text-4xl font-bold text-slate-800 mb-4">Your Journey Toward Financial Success Begins Here</h2>
                    <p class="text-slate-500 mb-6">Get you the financial support you need as quickly as possible.</p>
                    <a href="#contact" class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-8 py-3 rounded-full font-semibold inline-block transition hover-lift shadow-md">Discover More →</a>
                </div>
                <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl group">
                        <img src="https://images.unsplash.com/photo-1556741533-6e6a3bd8e341?w=600&h=400&fit=crop" class="w-full object-cover h-80 transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section with Video Background -->
    <section class="relative py-20 px-6 text-white overflow-hidden">
        <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="https://cdn.pixabay.com/video/2023/06/28/169818-841105685_large.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-green-800/90 to-emerald-800/90 z-10"></div>
        
        <div class="max-w-4xl mx-auto text-center relative z-20" data-aos="zoom-in" data-aos-duration="800">
            <div class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-4 py-1.5 rounded-full text-xs font-medium mb-4 border border-white/30">
                <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                Our Commitment
            </div>
            <h2 class="font-grotesk text-3xl md:text-4xl font-bold mb-6">We're always here to help you</h2>
            <p class="text-green-50 text-lg leading-relaxed mb-8">
                At BizCashAndCapital, we are dedicated to your business's prosperity. We understand the unique challenges of various industries and tailor our support to suit your specific needs. Your success is our success.
            </p>
            <div class="flex flex-wrap gap-4 justify-center">
                <a href="tel:+12166470007" class="bg-white text-green-600 px-8 py-3 rounded-full font-semibold hover:bg-green-50 transition hover-lift shadow-lg">Call to Our Experts →</a>
                <a href="#contact" class="border border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white/10 transition hover-lift">Get a Quote</a>
            </div>
        </div>
    </section>

    <!-- Contact / CTA Section -->
    <section id="contact" class="py-20 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12">
                <div data-aos="fade-right" data-aos-duration="800">
                    <div class="inline-flex items-center gap-2 bg-green-100 px-4 py-1.5 rounded-full text-xs font-medium text-green-700 mb-4">
                        <span class="w-1.5 h-1.5 bg-green-500 rounded-full"></span>
                        Get in Touch
                    </div>
                    <h2 class="font-grotesk text-3xl md:text-4xl font-bold text-slate-800 mb-4">Discuss your loan needs with our experts</h2>
                    <div class="flex items-center gap-4 mb-6">
                        <a href="tel:+12166470007" class="text-3xl font-bold text-green-600 hover:text-green-700 transition">+1 (216) 647-0007</a>
                    </div>
                    <p class="text-slate-500 mb-6">Your search for a reliable and affordable business loan has come to an end. We are steadfastly committed to helping small businesses succeed.</p>
                    <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-6 hover-lift shadow-md border border-green-100">
                        <div class="flex items-center gap-3 mb-4"><div class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white text-xl shadow-md">📞</div><div><p class="font-semibold">Call to Our Experts</p><a href="tel:+12166470007" class="text-green-600">+1 (216) 647-0007</a></div></div>
                        <div class="flex items-center gap-3"><div class="w-10 h-10 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center text-white text-xl shadow-md">✉️</div><div><p class="font-semibold">Email Us</p><a href="mailto:info@bizcashandcapital.com" class="text-green-600">info@bizcashandcapital.com</a></div></div>
                    </div>
                </div>
                <div data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="bg-gradient-to-br from-slate-50 to-white rounded-2xl p-8 hover-lift shadow-md border border-slate-100">
                        <h3 class="text-xl font-bold text-slate-800 mb-4">Get a Quote</h3>
                        <form class="space-y-4">
                            <input type="text" placeholder="Your Name" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition">
                            <input type="email" placeholder="Email Address" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition">
                            <input type="tel" placeholder="Phone Number" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition">
                            <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition">
                                <option>Select Loan Type</option>
                                <option>Business Loan</option>
                                <option>Commercial Loan</option>
                                <option>SBA Loan</option>
                                <option>Construction Loan</option>
                            </select>
                            <textarea rows="3" placeholder="Tell us about your business" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:outline-none focus:border-green-500 focus:ring-1 focus:ring-green-500 transition"></textarea>
                            <button class="w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white py-3 rounded-xl font-semibold transition hover-lift shadow-md">Submit Request →</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Marquee Trust Bar -->
    <div class="bg-slate-800 py-3 overflow-hidden">
        <div class="flex gap-12 animate-marquee whitespace-nowrap">
            <span class="text-white/80 text-sm">✓ Trusted by 10,000+ Businesses</span>
            <span class="text-green-400">✦</span>
            <span class="text-white/80 text-sm">✓ 4.92 Trust Score</span>
            <span class="text-green-400">✦</span>
            <span class="text-white/80 text-sm">✓ 24/7 Customer Support</span>
            <span class="text-green-400">✦</span>
            <span class="text-white/80 text-sm">✓ 100% Secure Transactions</span>
            <span class="text-green-400">✦</span>
            <span class="text-white/80 text-sm">✓ Fast Approval Process</span>
            <span class="text-green-400">✦</span>
            <span class="text-white/80 text-sm">✓ No Hidden Fees</span>
            <span class="text-green-400">✦</span>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white pt-16 pb-8 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12">
                <div class="lg:col-span-2" data-aos="fade-up" data-aos-duration="600">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                            <span class="text-white font-bold text-sm">B</span>
                        </div>
                        <span class="font-grotesk font-bold text-xl">BizCash&Capital</span>
                    </div>
                    <p class="text-slate-400 text-sm mb-4">Your trusted partner for unlocking the financial resources your business needs to thrive.</p>
                    <div class="flex gap-4">
                        <a href="#" class="text-slate-400 hover:text-green-400 transition text-xl">📘</a>
                        <a href="#" class="text-slate-400 hover:text-green-400 transition text-xl">🐦</a>
                        <a href="#" class="text-slate-400 hover:text-green-400 transition text-xl">📸</a>
                        <a href="#" class="text-slate-400 hover:text-green-400 transition text-xl">🔗</a>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"><h4 class="font-bold mb-4">Links</h4><ul class="space-y-2 text-slate-400 text-sm"><li><a href="#" class="hover:text-green-400 transition">About Us</a></li><li><a href="#" class="hover:text-green-400 transition">Loan Services</a></li><li><a href="#" class="hover:text-green-400 transition">Our Blogs</a></li><li><a href="#" class="hover:text-green-400 transition">Our FAQs</a></li><li><a href="#" class="hover:text-green-400 transition">Contact</a></li></ul></div>
                <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="200"><h4 class="font-bold mb-4">Legal</h4><ul class="space-y-2 text-slate-400 text-sm"><li><a href="#" class="hover:text-green-400 transition">Privacy Policy</a></li><li><a href="#" class="hover:text-green-400 transition">Terms of Service</a></li><li><a href="#" class="hover:text-green-400 transition">Do Not Sell My Information</a></li></ul></div>
                <div data-aos="fade-up" data-aos-duration="600" data-aos-delay="300"><h4 class="font-bold mb-4">Open Hours</h4><p class="text-slate-400 text-sm">Mon – Sat: 8:00 am to 6:00 pm<br>Sunday: Closed</p><div class="mt-4"><p class="text-slate-400 text-sm">📞 <a href="tel:+12166470007" class="hover:text-green-400">+1 (216) 647-0007</a></p><p class="text-slate-400 text-sm">✉️ <a href="mailto:info@bizcashandcapital.com" class="hover:text-green-400">info@bizcashandcapital.com</a></p></div></div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center text-slate-500 text-sm" data-aos="fade-up" data-aos-duration="600">
                <p>© All Copyright 2025 by BizCashandCapital.com</p>
            </div>
        </div>
    </footer>

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS with custom settings
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
            easing: 'ease-out-quad'
        });
        
        // Add hover-lift to all cards
        document.querySelectorAll('.industry-card, .bg-green-50.rounded-2xl, .bg-white.rounded-xl').forEach(el => {
            el.classList.add('hover-lift');
        });
    </script>
</body>
</html>