<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="description" content="BizCashAndCapital provides tailored accounting firm funding: working capital loans, technology financing, mergers & acquisitions, tax season loans, and professional development funding for accountants." />
    <meta name="keywords" content="accounting firm funding, working capital for accountants, technology financing accounting, tax season loans, accounting practice financing, debt consolidation accountants, receivables financing" />
    <title>Accounting Firm Funding — BizCashAndCapital | Tailored Financing for Accountants</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { 'jakarta': ['Plus Jakarta Sans', 'sans-serif'], 'grotesk': ['Space Grotesk', 'sans-serif'] },
                    screens: { 'xs': '480px', 'sm': '640px', 'md': '768px', 'lg': '1024px', 'xl': '1280px' }
                }
            }
        }
    </script>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Plus Jakarta Sans', sans-serif; background: #eef6ee; color: #111a13; overflow-x: hidden; }
        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #e2ece2; }
        ::-webkit-scrollbar-thumb { background: #1a7a4a; }
        @keyframes pulse { 0%,100% { opacity: 1; transform: scale(1); } 50% { opacity: 0.5; transform: scale(0.95); } }
        .btn-primary { background: #1a7a4a; color: white; padding: 0.875rem 2rem; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; border: none; cursor: pointer; }
        .btn-primary:hover { background: #0f5a38; transform: translateY(-2px); }
        .btn-outline { background: transparent; border: 2px solid #1a7a4a; color: #1a7a4a; padding: 0.75rem 1.5rem; font-weight: 600; font-size: 0.875rem; transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 0.5rem; cursor: pointer; }
        .btn-outline:hover { background: #1a7a4a; color: white; }
        .tag { display: inline-flex; align-items: center; gap: 8px; border: 1px solid rgba(26,122,74,0.3); background: rgba(26,122,74,0.1); padding: 5px 16px; font-size: 11px; font-weight: 600; letter-spacing: 0.06em; text-transform: uppercase; color: #1a7a4a; }
        .tag span { width: 6px; height: 6px; background: #1a7a4a; display: inline-block; animation: pulse 2s infinite; }
        .card { transition: all 0.3s ease; cursor: pointer; border: 1px solid rgba(255,255,255,0.1); }
        .card:hover { transform: translateY(-6px); box-shadow: 0 20px 35px -12px rgba(26,122,74,0.3); border-color: #c8e86a; }
        .benefit-card { transition: all 0.3s ease; background: white; border: 1px solid #e2e8e2; }
        .benefit-card:hover { transform: translateY(-6px); box-shadow: 0 20px 35px -12px rgba(26,122,74,0.15); border-color: #c8e86a; }
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

    <!-- Hero Section - responsive -->
    <section class="relative h-[75vh] min-h-[500px] md:h-[80vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1600&q=80" alt="Accounting firm office" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-emerald-900/60 z-10"></div>
        </div>
        <div class="relative z-20 max-w-7xl mx-auto px-5 lg:px-8 w-full text-center">
            <h1 class="font-jakarta text-[clamp(42px,10vw,85px)] leading-[1.1] tracking-tight text-white mb-4">Accounting Firm Funding</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-lime-400 to-emerald-500 mx-auto mb-6"></div>
            <p class="text-white/80 text-sm sm:text-base max-w-3xl mx-auto leading-relaxed">
                Welcome to BizCashAndCapital, where we understand the unique financial demands of accounting firms. We are dedicated to supporting your accounting practice with tailored funding solutions, empowering you to enhance your services, expand your client base, and fuel business growth.
            </p>
            <div class="flex gap-4 justify-center flex-wrap mt-8">
                <a href="#" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white px-6 py-3 sm:px-8 sm:py-3.5 font-semibold text-sm transition">Get Started Now →</a>
                <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/50 text-white px-6 py-3 sm:px-8 sm:py-3.5 font-semibold text-sm transition">Contact Experts</a>
            </div>
        </div>
    </section>

    <!-- The Importance of Funding for Accounting Firms -->
    <section style="padding: 3rem 0 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <div class="tag mb-4"><span></span>WHY IT MATTERS</div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">The Importance of<br>Funding for Accounting Firms</h2>
                    <div class="w-16 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mb-5"></div>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">In the dynamic world of finance and accounting, having access to appropriate funding is paramount. It enables accounting firms to invest in advanced technologies, attract top talent, expand their service offerings, and fortify their financial stability.</p>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm md:text-base">Whether you're a small boutique firm or a larger established practice, strategic funding can be a game-changer.</p>
                    <div class="flex flex-wrap gap-4"><a href="#" class="btn-primary">Get Started Now →</a><a href="#" class="btn-outline">Learn More</a></div>
                </div>
                <div class="relative min-h-[320px] md:min-h-[380px] w-full overflow-hidden border">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=700&h=500&fit=crop" alt="Accounting finance" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-800/85 to-emerald-900/90 flex flex-col items-center justify-center text-center p-6">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">Get Start Now</h3>
                        <p class="text-white/90 text-sm mb-5">Apply today and get the funding your accounting firm needs</p>
                        <a href="#" class="bg-white text-emerald-800 px-6 py-3 font-bold text-sm hover:bg-lime-300 transition inline-block">Apply Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Accounting Firm Funding Options Section - 8 cards responsive -->
    <section style="padding: 4rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10">
                <div class="tag inline-flex mb-4"><span></span>FUNDING OPTIONS</div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3">Accounting Firm Funding Options</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mx-auto my-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">We offer a range of funding options customized to meet the unique needs of accounting firms</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Working Capital Loans -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="text-xl font-bold mb-2">Working Capital Loans</h3><p class="text-white/80 text-sm">Cover day-to-day expenses, hire staff, manage cash flow fluctuations. Ensure financial stability.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Business Expansion Loans -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3 class="text-xl font-bold mb-2">Business Expansion Loans</h3><p class="text-white/80 text-sm">Expand practice, open new branches, invest in marketing campaigns for broader clientele.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Technology and Software Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="text-xl font-bold mb-2">Technology & Software Financing</h3><p class="text-white/80 text-sm">Upgrade hardware, software, IT solutions. Stay ahead in digital landscape.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Mergers and Acquisitions Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3 class="text-xl font-bold mb-2">Mergers & Acquisitions</h3><p class="text-white/80 text-sm">Specialized financing for merging with or acquiring another accounting firm.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Debt Consolidation Loans -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><h3 class="text-xl font-bold mb-2">Debt Consolidation Loans</h3><p class="text-white/80 text-sm">Streamline finances, simplify debt management, lower interest rates.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Account Receivables Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg></div><h3 class="text-xl font-bold mb-2">Account Receivables Financing</h3><p class="text-white/80 text-sm">Optimize cash flow by leveraging outstanding payments from clients.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Tax Season Preparation Loans -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><path d="M12 8v8M8 12h8"/></svg></div><h3 class="text-xl font-bold mb-2">Tax Season Preparation Loans</h3><p class="text-white/80 text-sm">Cover temporary staffing, marketing, operational expenses during busy tax season.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- Professional Development Funding -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1556745753-b2904692b3cd?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="text-xl font-bold mb-2">Professional Development Funding</h3><p class="text-white/80 text-sm">Invest in continuous education, skill development, and team expertise.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
            </div>
        </div>
    </section>

    <!-- How We Can Assist Your Accounting Firm Section -->
    <section style="padding: 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="order-2 lg:order-1"><img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=450&fit=crop" alt="Accounting firm finance experts" class="w-full h-auto object-cover border border-gray-200"></div>
                <div class="order-1 lg:order-2"><div class="tag mb-4"><span></span>OUR EXPERTISE</div><h2 class="text-3xl md:text-4xl font-extrabold mb-3">Support Your<br>Accounting Firm</h2><div class="w-16 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mb-5"></div><p class="text-gray-600 text-sm md:text-base leading-relaxed mb-3">Our dedicated team of financial advisors possesses a deep understanding of the accounting industry's financial requirements and challenges. We work closely with accounting firm owners to tailor funding solutions that align with their specific goals and financial situations.</p><p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">At BizCashAndCapital, we're committed to empowering accounting firms with the financial resources required to thrive and succeed in a competitive landscape.</p><div class="flex flex-wrap gap-4 mb-3"><a href="tel:+12166470007" class="btn-primary">Call Now →</a><a href="#" class="btn-outline">Get a Quote</a></div><a href="tel:+12166470007" class="text-emerald-700 font-bold text-lg inline-block">+1 (216) 647-0007</a></div>
            </div>
        </div>
    </section>

    <!-- Key Benefits of Accounting Firm Funding Section (8 benefits) -->
    <section style="padding: 4rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10"><div class="tag inline-flex"><span></span>KEY BENEFITS</div><h2 class="text-3xl md:text-4xl font-extrabold mt-3">Key Benefits of Accounting Firm Funding</h2><div class="w-20 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mx-auto my-4"></div></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3 class="font-bold text-md">Competitive Edge & Innovation</h3><p class="text-gray-500 text-xs">Stay ahead by investing in innovative practices and technologies.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="font-bold text-md">Technology Advancements</h3><p class="text-gray-500 text-xs">Cutting-edge software, automation, and data analytics platforms.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="font-bold text-md">Talent Attraction & Retention</h3><p class="text-gray-500 text-xs">Attract top professionals with competitive compensation.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3 class="font-bold text-md">Service Diversification</h3><p class="text-gray-500 text-xs">Expand into advisory, forensic accounting, or wealth management.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3 class="font-bold text-md">Marketing & Branding</h3><p class="text-gray-500 text-xs">Increase firm visibility and attract new clients.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="font-bold text-md">Regulatory Compliance</h3><p class="text-gray-500 text-xs">Resources to adapt and comply with changing accounting standards.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><h3 class="font-bold text-md">Client Trust & Confidence</h3><p class="text-gray-500 text-xs">Demonstrate financial stability and capability.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg></div><h3 class="font-bold text-md">Risk Mitigation</h3><p class="text-gray-500 text-xs">Manage financial risks and ensure business continuity.</p></div>
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