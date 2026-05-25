<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="description" content="BizCashAndCapital provides tailored daycare center funding: business loans, equipment financing, working capital, and community funding for childcare facilities. Fast approval, competitive rates." />
    <meta name="keywords" content="daycare funding, childcare business loans, daycare center financing, equipment financing daycare, working capital childcare, community funding daycare, crowdfunding daycare" />
    <title>Daycare Center Funding — BizCashAndCapital | Tailored Childcare Financing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 
                        'jakarta': ['Plus Jakarta Sans', 'sans-serif'], 
                        'grotesk': ['Space Grotesk', 'sans-serif'] 
                    },
                    colors: {
                        'green-primary': '#10b981',
                        'green-dark': '#059669',
                        'green-forest': '#1a7a4a',
                        'green-lime': '#c8e86a',
                    },
                    screens: { 'xs': '480px', 'sm': '640px', 'md': '768px', 'lg': '1024px', 'xl': '1280px' }
                }
            }
        }
    </script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #f5f7f5; color: #111a13; overflow-x: hidden; }
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #e2ece2; }
        ::-webkit-scrollbar-thumb { background: #1a7a4a; }
        
        @keyframes pulse { 0%,100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.5; transform: scale(0.95); } }
        
        .btn-primary { 
            background: #1a7a4a; color: white; padding: 0.875rem 2rem; font-weight: 600; font-size: 0.875rem; 
            transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; 
            border: none; cursor: pointer; border-radius: 0 !important; 
        }
        .btn-primary:hover { background: #0f5a38; transform: translateY(-2px); }
        
        .btn-outline { 
            background: transparent; border: 2px solid #1a7a4a; color: #1a7a4a; padding: 0.75rem 1.5rem; 
            font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; display: inline-flex; 
            align-items: center; gap: 0.5rem; cursor: pointer; border-radius: 0 !important; 
        }
        .btn-outline:hover { background: #1a7a4a; color: white; }
        
        .tag { 
            display: inline-flex; align-items: center; gap: 8px; border: 1px solid rgba(26,122,74,0.3); 
            background: rgba(26,122,74,0.1); padding: 5px 16px; font-size: 11px; font-weight: 600; 
            letter-spacing: 0.06em; text-transform: uppercase; color: #1a7a4a; border-radius: 0 !important; 
        }
        .tag span { width: 6px; height: 6px; background: #1a7a4a; display: inline-block; animation: pulse 2s infinite; border-radius: 0 !important; }
        
        .card { transition: all 0.3s ease; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); border-radius: 0 !important; }
        .card:hover { transform: translateY(-6px); box-shadow: 0 20px 35px -12px rgba(26,122,74,0.3); border-color: #c8e86a; }
        
        .benefit-card { transition: all 0.3s ease; background: white; border: 1px solid #e2e8e2; border-radius: 0 !important; }
        .benefit-card:hover { transform: translateY(-6px); box-shadow: 0 20px 35px -12px rgba(26,122,74,0.15); border-color: #c8e86a; }
        
        /* Force all elements to have sharp edges */
        .rounded-2xl, .rounded-3xl, .rounded-xl, .rounded-full, [class*="rounded-"] { border-radius: 0 !important; }
        button, a, div, section, .card, .benefit-card, .bg-white, img { border-radius: 0 !important; }
        
        .scroll-reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.7s ease, transform 0.7s ease; }
        .scroll-reveal.revealed { opacity: 1; transform: translateY(0); }
        
        @media (max-width: 768px) {
            .btn-primary, .btn-outline { padding: 0.65rem 1.25rem; font-size: 0.75rem; }
            h2 { font-size: 1.8rem !important; }
            .card { min-height: 380px !important; }
        }
        @media (max-width: 640px) {
            .grid-responsive { grid-template-columns: 1fr !important; }
        }
    </style>
</head>
<body>

   @include('header')

    <!-- Hero Section -->
    <section class="relative min-h-[550px] md:min-h-[600px] flex items-center justify-center overflow-hidden pt-24 md:pt-28 pb-12 md:pb-16">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?w=1600&q=80" alt="Daycare center with children playing" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-emerald-900/60 z-10"></div>
        </div>
        <div class="relative z-20 max-w-7xl mx-auto px-5 lg:px-8 w-full text-center">
            <h1 class="font-grotesk text-[clamp(42px,10vw,85px)] leading-[1.1] tracking-tight text-white mb-4">Daycare Center Funding</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-[#c8e86a] to-[#1a7a4a] mx-auto mb-6"></div>
            <p class="text-white/80 text-sm sm:text-base max-w-3xl mx-auto leading-relaxed">
                At BizCashAndCapital, we recognize the essential role daycare centers play in shaping young minds and supporting working parents. We specialize in providing tailored financing solutions for daycare center owners, aiming to ensure that every childcare facility has the financial support needed to create a nurturing and educational environment.
            </p>
            <div class="flex gap-4 justify-center flex-wrap mt-8">
                <a href="#" class="inline-flex items-center gap-2 bg-[#1a7a4a] hover:bg-[#0f5a38] text-white px-6 py-3 sm:px-8 sm:py-3.5 font-semibold text-sm transition">Get Started Now →</a>
                <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/50 text-white px-6 py-3 sm:px-8 sm:py-3.5 font-semibold text-sm transition">Contact Experts</a>
            </div>
        </div>
    </section>

    <!-- The Importance of Funding for Daycare Centers -->
    <section style="padding: 3rem 0 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <div class="tag mb-4"><span></span>WHY IT MATTERS</div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4 font-grotesk">The Importance of<br>Funding for Daycare Centers</h2>
                    <div class="w-16 h-1 bg-gradient-to-r from-[#1a7a4a] to-[#c8e86a] mb-5"></div>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">Daycare centers are the foundation of a child's early learning experience. Securing adequate funding is crucial for maintaining high-quality care, investing in educational resources, hiring skilled staff, and creating a safe and enriching space for children.</p>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm md:text-base">Whether you're looking to expand your center, upgrade facilities, or invest in educational programs, having access to funds is fundamental for sustainable growth.</p>
                    <div class="flex flex-wrap gap-4"><a href="#" class="btn-primary">Get Started Now →</a><a href="#" class="btn-outline">Learn More</a></div>
                </div>
                <div class="relative min-h-[320px] md:min-h-[380px] w-full overflow-hidden border">
                    <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=700&h=500&fit=crop" alt="Daycare financing" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-[#1a7a4a]/85 to-[#0f5a38]/90 flex flex-col items-center justify-center text-center p-6">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-3 font-grotesk">Get Start Now</h3>
                        <p class="text-white/90 text-sm mb-5">Apply today and get the funding your daycare center needs</p>
                        <a href="#" class="bg-white text-[#1a7a4a] px-6 py-3 font-bold text-sm hover:bg-[#c8e86a] transition inline-block">Apply Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Daycare Funding Options Section - 6 cards -->
    <section style="padding: 4rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10">
                <div class="tag inline-flex mb-4"><span></span>FUNDING OPTIONS</div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3 font-grotesk">Daycare Funding Options</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-[#1a7a4a] to-[#c8e86a] mx-auto my-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">Daycare centers have access to various funding options to support their growth and operations:</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Business Loans -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-[#1a7a4a]/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-[#1a7a4a] flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3 class="text-xl font-bold mb-2 font-grotesk">Business Loans</h3><p class="text-white/80 text-sm">Lump sum for facility upgrades, staff hiring, or expansion. Flexible terms for daycare needs.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-[#c8e86a]">Learn More →</a><a href="#" class="text-[#c8e86a]">Contact Experts →</a></div></div></div>
                <!-- Lines of Credit -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-[#1a7a4a]/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-[#1a7a4a] flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><h3 class="text-xl font-bold mb-2 font-grotesk">Lines of Credit</h3><p class="text-white/80 text-sm">Revolving credit for day-to-day expenses, unexpected costs, or short-term cash flow needs.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-[#c8e86a]">Learn More →</a><a href="#" class="text-[#c8e86a]">Contact Experts →</a></div></div></div>
                <!-- Equipment Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-[#1a7a4a]/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-[#1a7a4a] flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="text-xl font-bold mb-2 font-grotesk">Equipment Financing</h3><p class="text-white/80 text-sm">Acquire educational toys, furniture, or playground equipment without large upfront payment.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-[#c8e86a]">Learn More →</a><a href="#" class="text-[#c8e86a]">Contact Experts →</a></div></div></div>
                <!-- Community Funding -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-[#1a7a4a]/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-[#1a7a4a] flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg></div><h3 class="text-xl font-bold mb-2 font-grotesk">Community Funding</h3><p class="text-white/80 text-sm">Engage local businesses, fundraising events, or donation campaigns to gather support.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-[#c8e86a]">Learn More →</a><a href="#" class="text-[#c8e86a]">Contact Experts →</a></div></div></div>
                <!-- Crowdfunding -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-[#1a7a4a]/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-[#1a7a4a] flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="text-xl font-bold mb-2 font-grotesk">Crowdfunding</h3><p class="text-white/80 text-sm">Online platforms to raise funds for specific projects or improvements. Engage parents & supporters.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-[#c8e86a]">Learn More →</a><a href="#" class="text-[#c8e86a]">Contact Experts →</a></div></div></div>
                <!-- Angel Investors / Venture Capital -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-[#1a7a4a]/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-[#1a7a4a] flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="text-xl font-bold mb-2 font-grotesk">Angel Investors / VC</h3><p class="text-white/80 text-sm">Secure investment from investors interested in supporting educational childcare ventures.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-[#c8e86a]">Learn More →</a><a href="#" class="text-[#c8e86a]">Contact Experts →</a></div></div></div>
            </div>
        </div>
    </section>

    <!-- Support Your Daycare Center Firm Section -->
    <section style="padding: 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="order-2 lg:order-1"><img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=450&fit=crop" alt="Daycare finance experts" class="w-full h-auto object-cover border border-gray-200"></div>
                <div class="order-1 lg:order-2"><div class="tag mb-4"><span></span>OUR EXPERTISE</div><h2 class="text-3xl md:text-4xl font-extrabold mb-3 font-grotesk">Support Your<br>Daycare Center Firm</h2><div class="w-16 h-1 bg-gradient-to-r from-[#1a7a4a] to-[#c8e86a] mb-5"></div><p class="text-gray-600 text-sm md:text-base leading-relaxed mb-3">Our team of expert advisors has a deep understanding of the childcare industry's unique requirements and challenges. We work closely with daycare center owners to tailor financing solutions that align with their specific goals and financial situations.</p><p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">At BizCashAndCapital, we're committed to empowering daycare centers with the financial resources required to thrive and provide exceptional childcare services.</p><div class="flex flex-wrap gap-4 mb-3"><a href="tel:+12166470007" class="btn-primary">Call Now →</a><a href="#" class="btn-outline">Get a Quote</a></div><a href="tel:+12166470007" class="text-[#1a7a4a] font-bold text-lg inline-block">+1 (216) 647-0007</a></div>
            </div>
        </div>
    </section>

    <!-- Key Benefits of Daycare Center Funding Section (8 benefits) -->
    <section style="padding: 4rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10"><div class="tag inline-flex"><span></span>KEY BENEFITS</div><h2 class="text-3xl md:text-4xl font-extrabold mt-3 font-grotesk">Key Benefits of Daycare Center Funding</h2><div class="w-20 h-1 bg-gradient-to-r from-[#1a7a4a] to-[#c8e86a] mx-auto my-4"></div></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="font-bold text-md font-grotesk">Enhancing Educational Resources</h3><p class="text-gray-500 text-xs">Invest in books, learning materials, and educational toys.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="font-bold text-md font-grotesk">Hiring Qualified Staff</h3><p class="text-gray-500 text-xs">Attract and retain qualified educators for high-standard care.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3 class="font-bold text-md font-grotesk">Specialized Programs</h3><p class="text-gray-500 text-xs">Music, art, language activities to enrich development.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg></div><h3 class="font-bold text-md font-grotesk">Improving Safety Measures</h3><p class="text-gray-500 text-xs">Security systems, childproofing, emergency preparedness.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3 class="font-bold text-md font-grotesk">Expanding Capacity</h3><p class="text-gray-500 text-xs">Renovate facilities or add classrooms for more children.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><h3 class="font-bold text-md font-grotesk">Parent Communication</h3><p class="text-gray-500 text-xs">Software for seamless parent updates and engagement.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="font-bold text-md font-grotesk">Unique Programs</h3><p class="text-gray-500 text-xs">Develop programs that set your daycare apart.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-[#1a7a4a] flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3 class="font-bold text-md font-grotesk">Sustainable Practices</h3><p class="text-gray-500 text-xs">Eco-friendly initiatives and energy-efficient systems.</p></div>
            </div>
        </div>
    </section>

@include('application')
@include('footer')

    <script>
        const scrollElements = document.querySelectorAll('.scroll-reveal');
        const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if(entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.15, rootMargin: "0px 0px -30px 0px" });
        scrollElements.forEach(el => observer.observe(el));
    </script>
</body>
</html>