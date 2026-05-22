<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <meta name="description" content="BizCashAndCapital provides tailored construction industry funding: equipment financing, contract financing, working capital, and project-based loans for contractors. Fast approval, competitive rates." />
    <meta name="keywords" content="construction funding, equipment financing, contract financing, working capital loans for construction, project-based financing, bridge loans real estate, construction factoring, lines of credit contractors" />
    <title>Construction Industry Funding — BizCashAndCapital | Tailored Construction Financing</title>
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
        @media (max-width: 768px) { .btn-primary, .btn-outline { padding: 0.65rem 1.25rem; font-size: 0.75rem; } h2 { font-size: 1.8rem !important; } }
        @media (max-width: 640px) { .grid-cards-auto { grid-template-columns: 1fr !important; } }
    </style>
</head>
<body>

@include('header')

    <!-- Hero Section - responsive height -->
    <section class="relative h-[75vh] min-h-[500px] md:h-[80vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=1600&q=80" alt="Construction industry and building site" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-br from-black/70 via-black/60 to-emerald-900/60 z-10"></div>
        </div>
        <div class="relative z-20 max-w-7xl mx-auto px-5 lg:px-8 w-full text-center">
            <h1 class="font-jakarta text-[clamp(42px,10vw,85px)] leading-[1.1] tracking-tight text-white mb-4">Construction Industry Funding</h1>
            <div class="w-24 h-1 bg-gradient-to-r from-lime-400 to-emerald-500 mx-auto mb-6"></div>
            <p class="text-white/80 text-sm sm:text-base max-w-3xl mx-auto leading-relaxed">
                Welcome to BizCashAndCapital, your trusted partner in providing tailored funding solutions for construction companies. We understand the construction industry's unique financial requirements and are committed to supporting your business's growth and success.
            </p>
            <div class="flex gap-4 justify-center flex-wrap mt-8">
                <a href="#" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-500 text-white px-6 py-3 sm:px-8 sm:py-3.5 font-semibold text-sm transition">Get Started Now →</a>
                <a href="#" class="inline-flex items-center gap-2 border border-white/30 hover:border-white/50 text-white px-6 py-3 sm:px-8 sm:py-3.5 font-semibold text-sm transition">Contact Experts</a>
            </div>
        </div>
    </section>

    <!-- The Significance of Funding for Construction Industry -->
    <section style="padding: 3rem 0 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div>
                    <div class="tag mb-4"><span></span>WHY IT MATTERS</div>
                    <h2 class="text-3xl md:text-4xl font-extrabold mb-4">The Significance of<br>Funding for Construction Industry</h2>
                    <div class="w-16 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mb-5"></div>
                    <p class="text-gray-600 leading-relaxed mb-4 text-sm md:text-base">In the dynamic and competitive construction industry, securing adequate funding is paramount. Construction projects often require substantial capital for equipment purchases, labor costs, material procurement, project expansion, and operational expenses.</p>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm md:text-base">Timely and reliable funding ensures that construction companies can complete projects efficiently and take on new opportunities.</p>
                    <div class="flex flex-wrap gap-4"><a href="#" class="btn-primary">Get Started Now →</a><a href="#" class="btn-outline">Learn More</a></div>
                </div>
                <div class="relative min-h-[320px] md:min-h-[380px] w-full overflow-hidden border">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=700&h=500&fit=crop" alt="Construction site planning" class="absolute inset-0 w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-800/85 to-emerald-900/90 flex flex-col items-center justify-center text-center p-6">
                        <h3 class="text-2xl md:text-3xl font-bold text-white mb-3">Get Start Now</h3>
                        <p class="text-white/90 text-sm mb-5">Apply today and get the funding your construction company needs</p>
                        <a href="#" class="bg-white text-emerald-800 px-6 py-3 font-bold text-sm hover:bg-lime-300 transition inline-block">Apply Now →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Construction Industry Funding Options Section - FULL GRID (9 items) responsive -->
    <section style="padding: 4rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10">
                <div class="tag inline-flex mb-4"><span></span>FUNDING OPTIONS</div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-800 mb-3">Construction Industry Funding Options</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mx-auto my-4"></div>
                <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">At BizCashAndCapital, we offer a range of funding options customized to meet the unique needs of construction companies:</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 1 Equipment Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="text-xl font-bold mb-2">Equipment Financing</h3><p class="text-white/80 text-sm">Secure funding specifically for acquiring construction equipment and machinery without significant upfront payment.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 2 Project-Based Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3 class="text-xl font-bold mb-2">Project-Based Financing</h3><p class="text-white/80 text-sm">Tailored funding for specific projects, covering labor, materials, permits, and related expenses.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 3 Working Capital Loans -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="text-xl font-bold mb-2">Working Capital Loans</h3><p class="text-white/80 text-sm">Short-term loans for payroll, material purchases, utilities, ensuring smooth project execution.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 4 Contract Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3 class="text-xl font-bold mb-2">Contract Financing</h3><p class="text-white/80 text-sm">Funding based on approved contracts, unlocking capital tied to specific projects.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 5 Construction Factoring -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><h3 class="text-xl font-bold mb-2">Construction Factoring</h3><p class="text-white/80 text-sm">Sell accounts receivable for immediate cash, covering project costs and operational expenses.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 6 Lines of Credit for Contractors -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1444653614773-995cb1ef9efa?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="text-xl font-bold mb-2">Lines of Credit for Contractors</h3><p class="text-white/80 text-sm">Flexible revolving credit, draw funds as needed for financial stability and unexpected expenses.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 7 Bridge Loans for Real Estate Development -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 22v-4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/><path d="M12 8v8M8 12h8"/></svg></div><h3 class="text-xl font-bold mb-2">Bridge Loans for Real Estate</h3><p class="text-white/80 text-sm">Short-term loans bridging gap between property acquisition and long-term financing.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 8 Construction Management Software Financing -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg></div><h3 class="text-xl font-bold mb-2">Construction Software Financing</h3><p class="text-white/80 text-sm">Funds for acquiring management software to streamline planning and execution.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
                <!-- 9 Invoice Financing for Contractors -->
                <div class="card bg-cover bg-center min-h-[400px] relative overflow-hidden" style="background-image: url('https://images.unsplash.com/photo-1581092335871-44c27de6f9f2?w=600&h=500&fit=crop');"><div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-emerald-800/70 z-10"></div><div class="relative z-20 p-6 flex flex-col justify-between h-full text-white"><div><div class="w-12 h-12 bg-emerald-700 flex items-center justify-center mb-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M21 12v4a4 4 0 01-4 4H7a4 4 0 01-4-4v-4M3 8h18"/></svg></div><h3 class="text-xl font-bold mb-2">Invoice Financing</h3><p class="text-white/80 text-sm">Advance on outstanding invoices to improve cash flow during project cycles.</p></div><div class="mt-5 pt-4 border-t border-white/20 flex justify-between text-xs"><a href="#" class="text-lime-300">Leave a Feedback →</a><a href="#" class="text-lime-300">Contact Experts →</a></div></div></div>
            </div>
        </div>
    </section>

    <!-- Support Your Construction Company Firm Section -->
    <section style="padding: 4rem 0; background: white;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div class="order-2 lg:order-1"><img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=600&h=450&fit=crop" alt="Construction finance experts" class="w-full h-auto object-cover border border-gray-200"></div>
                <div class="order-1 lg:order-2"><div class="tag mb-4"><span></span>OUR EXPERTISE</div><h2 class="text-3xl md:text-4xl font-extrabold mb-3">Support Your<br>Construction Company Firm</h2><div class="w-16 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mb-5"></div><p class="text-gray-600 text-sm md:text-base leading-relaxed mb-3">Our team of financial experts understands the construction industry's unique financial challenges and opportunities. We work closely with construction company owners to tailor funding solutions that align with their specific goals and financial situations.</p><p class="text-gray-600 text-sm md:text-base leading-relaxed mb-5">At BizCashAndCapital, we're committed to empowering construction companies with the financial resources required to thrive and succeed in a competitive market.</p><div class="flex flex-wrap gap-4 mb-3"><a href="tel:+12166470007" class="btn-primary">Call Now →</a><a href="#" class="btn-outline">Get a Quote</a></div><a href="tel:+12166470007" class="text-emerald-700 font-bold text-lg inline-block">+1 (216) 647-0007</a></div>
            </div>
        </div>
    </section>

    <!-- Key Benefits of Construction Company Funding Section (9 benefits) -->
    <section style="padding: 4rem 0; background: #f5f7f5;" class="scroll-reveal">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <div class="text-center mb-10"><div class="tag inline-flex"><span></span>KEY BENEFITS</div><h2 class="text-3xl md:text-4xl font-extrabold mt-3">Key Benefits of Construction Company Funding</h2><div class="w-20 h-1 bg-gradient-to-r from-emerald-700 to-lime-400 mx-auto my-4"></div></div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div><h3 class="font-bold text-md">Project Scaling & Expansion</h3><p class="text-gray-500 text-xs">Access capital to take on larger projects and expand your business.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div><h3 class="font-bold text-md">Equipment & Tech Investment</h3><p class="text-gray-500 text-xs">State-of-the-art machinery, improving efficiency and competitiveness.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83"/><circle cx="12" cy="12" r="3"/></svg></div><h3 class="font-bold text-md">Working Capital Mgmt</h3><p class="text-gray-500 text-xs">Healthy cash flow for payroll, materials, daily operations.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M3 6h18M8 6V4h8v2M6 10h12M5 18h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg></div><h3 class="font-bold text-md">Competitive Bidding</h3><p class="text-gray-500 text-xs">Submit confident bids with proper financial backing.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg></div><h3 class="font-bold text-md">Cash Flow Stabilization</h3><p class="text-gray-500 text-xs">Stabilize during slow seasons or between project payments.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 8v4M12 16h.01"/></svg></div><h3 class="font-bold text-md">Risk Mitigation</h3><p class="text-gray-500 text-xs">Manage financial risks from project delays or costs.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div><h3 class="font-bold text-md">Supplier Relationships</h3><p class="text-gray-500 text-xs">Timely payments foster better partnerships.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg></div><h3 class="font-bold text-md">Market Agility</h3><p class="text-gray-500 text-xs">Respond quickly to market changes and opportunities.</p></div>
                <div class="benefit-card p-5 text-center"><div class="w-14 h-14 bg-emerald-700 flex items-center justify-center mx-auto mb-3"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg></div><h3 class="font-bold text-md">Credit Building</h3><p class="text-gray-500 text-xs">Build business credit for future financing options.</p></div>
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