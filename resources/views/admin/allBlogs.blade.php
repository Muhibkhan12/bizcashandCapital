<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>All Blogs | BizCashAndCapital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
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

        .blog-card {
            transition: all 0.3s ease;
            background: white;
            border: 1px solid #e2e8e2;
        }
        .blog-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -12px rgba(26, 122, 74, 0.15);
            border-color: #1a7a4a;
        }

        /* Main layout - space for sidebar */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar placeholder space */
        .sidebar-placeholder {
            width: 280px;
            flex-shrink: 0;
            background: #0a0f0d;
            min-height: 100vh;
        }

        /* Main content area */
        .main-content-area {
            flex: 1;
            min-height: 100vh;
        }

        /* For mobile - sidebar collapses */
        @media (max-width: 768px) {
            .sidebar-placeholder {
                display: none;
            }
        }

        /* Filter button active styles */
        .filter-btn {
            transition: all 0.3s ease;
        }
        .filter-btn:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

<div class="admin-wrapper">
    <div class="sidebar-placeholder">
        @include('admin.sidebar')
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content-area">
        <!-- Page Header -->
        <section style="padding: 2rem 2rem 1rem 2rem; background: linear-gradient(135deg, #1a7a4a, #0f5a38); position: relative;">
            <div style="position: absolute; inset: 0; background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.1;"></div>
            <div style="max-width: 1280px; margin: 0 auto; position: relative; z-index: 2;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); padding: 0.35rem 1rem; margin-bottom: 1rem; border-radius: 40px !important;">
                    <span style="width: 6px; height: 6px; background: #c8e86a; display: inline-block; animation: pulse 2s infinite; border-radius: 50% !important;"></span>
                    <span style="font-size: 0.65rem; font-weight: 700; color: white; letter-spacing: 0.08em;">BLOG MANAGEMENT</span>
                </div>
                <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: white; font-family: 'Space Grotesk', sans-serif;">All Blogs</h1>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #c8e86a, white); margin: 0.75rem 0;"></div>
                <p style="color: rgba(255,255,255,0.85); font-size: 0.875rem;">Insights, tips, and strategies to grow your business</p>
            </div>
        </section>

        <!-- Main Content -->
        <main style="padding: 2rem;">
            <div style="max-width: 1280px; margin: 0 auto;">
                
                <!-- Filter and Search Bar -->
                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 2rem;">
                    <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                        <button class="filter-btn" data-filter="all" style="background: #1a7a4a; color: white; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; border: none; cursor: pointer;">All</button>
                        <button class="filter-btn" data-filter="Business" style="background: white; color: #1a7a4a; border: 1px solid #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer;">Business</button>
                        <button class="filter-btn" data-filter="Finance" style="background: white; color: #1a7a4a; border: 1px solid #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer;">Finance</button>
                        <button class="filter-btn" data-filter="Loans" style="background: white; color: #1a7a4a; border: 1px solid #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer;">Loans</button>
                        <button class="filter-btn" data-filter="SBA" style="background: white; color: #1a7a4a; border: 1px solid #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer;">SBA</button>
                        <button class="filter-btn" data-filter="Tips" style="background: white; color: #1a7a4a; border: 1px solid #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer;">Tips & Advice</button>
                    </div>
                    <div>
                        <input type="text" id="searchInput" placeholder="Search blogs..." style="padding: 0.6rem 1rem; width: 260px; border: 1px solid #e2e8e2; font-family: inherit; outline: none; transition: all 0.3s ease;">
                    </div>
                </div>

                <!-- Blogs Grid -->
                <div id="blogsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Blogs will be dynamically inserted here -->
                </div>

                <!-- No Results Message -->
                <div id="noResults" style="display: none; text-align: center; padding: 4rem; background: white; border: 1px solid #e2e8e2; margin-top: 2rem;">
                    <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="1.5" style="margin: 0 auto 1rem;">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                    <p style="color: #9ca3af; font-size: 1rem;">No blogs found matching your criteria.</p>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer style="background: #111a13; color: #9ca3af; padding: 1.5rem 2rem; text-align: center; font-size: 0.75rem; border-top: 1px solid #2d3e2d;">
            <div style="max-width: 1280px; margin: 0 auto;">© 2025 BizCashAndCapital — Financial Empowerment. All rights reserved.</div>
        </footer>
    </div>
</div>

<script>
    // Blog Data - All blogs stored here
    const blogsData = [
        {
            id: 1,
            title: "How to Get a Business Loan with Bad Credit",
            category: "Business",
            image: "https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=400&fit=crop",
            excerpt: "Learn the steps to secure funding even with a low credit score. Discover alternative lenders, improve your chances, and get approved.",
            content: "Full content here...",
            date: "January 15, 2024",
            readTime: "5 min read",
            views: 1250
        },
        {
            id: 2,
            title: "Top 5 SBA Loan Requirements for 2024",
            category: "SBA",
            image: "https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop",
            excerpt: "Everything you need to know about SBA loan qualifications. From credit scores to business plans, we cover it all.",
            content: "Full content here...",
            date: "January 20, 2024",
            readTime: "7 min read",
            views: 890
        },
        {
            id: 3,
            title: "Construction Loans: A Complete Guide",
            category: "Loans",
            image: "https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=400&fit=crop",
            excerpt: "Understanding construction loans and how to apply. Learn about draw schedules, interest reserves, and lender requirements.",
            content: "Full content here...",
            date: "January 25, 2024",
            readTime: "8 min read",
            views: 2340
        },
        {
            id: 4,
            title: "Smart Finance Strategies for Small Business",
            category: "Finance",
            image: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop",
            excerpt: "Maximize your capital with these actionable tips. Cash flow management, budgeting, and investment strategies for growth.",
            content: "Full content here...",
            date: "February 1, 2024",
            readTime: "6 min read",
            views: 2100
        },
        {
            id: 5,
            title: "Equipment Financing: What You Need to Know",
            category: "Loans",
            image: "https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=600&h=400&fit=crop",
            excerpt: "A comprehensive guide to equipment financing options. Learn about lease vs. buy, interest rates, and qualification criteria.",
            content: "Full content here...",
            date: "February 10, 2024",
            readTime: "5 min read",
            views: 1450
        },
        {
            id: 6,
            title: "5 Marketing Tips for Small Business Owners",
            category: "Tips",
            image: "https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?w=600&h=400&fit=crop",
            excerpt: "Effective marketing strategies on a budget. Social media, email marketing, and local SEO tips to grow your business.",
            content: "Full content here...",
            date: "February 15, 2024",
            readTime: "4 min read",
            views: 980
        },
        {
            id: 7,
            title: "Understanding Business Credit Scores",
            category: "Finance",
            image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop",
            excerpt: "How business credit works and how to improve it. Learn about Dun & Bradstreet, Experian, and Equifax business scores.",
            content: "Full content here...",
            date: "February 20, 2024",
            readTime: "6 min read",
            views: 1670
        },
        {
            id: 8,
            title: "Invoice Factoring vs. Traditional Loans",
            category: "Business",
            image: "https://images.unsplash.com/photo-1556742502-ec7c0e9f34b1?w=600&h=400&fit=crop",
            excerpt: "Compare financing options for cash flow. Pros and cons of invoice factoring, lines of credit, and term loans.",
            content: "Full content here...",
            date: "February 25, 2024",
            readTime: "7 min read",
            views: 1120
        },
        {
            id: 9,
            title: "SBA 7(a) Loan: Complete Application Guide",
            category: "SBA",
            image: "https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=600&h=400&fit=crop",
            excerpt: "Step-by-step guide to applying for an SBA 7(a) loan. Documentation, eligibility, and tips for approval.",
            content: "Full content here...",
            date: "March 1, 2024",
            readTime: "9 min read",
            views: 2030
        },
        {
            id: 10,
            title: "How to Prepare a Business Plan for Lenders",
            category: "Tips",
            image: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&h=400&fit=crop",
            excerpt: "Create a winning business plan that impresses lenders. Key sections, financial projections, and executive summary tips.",
            content: "Full content here...",
            date: "March 5, 2024",
            readTime: "10 min read",
            views: 890
        },
        {
            id: 11,
            title: "Commercial Real Estate Loans Explained",
            category: "Loans",
            image: "https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=600&h=400&fit=crop",
            excerpt: "Everything about commercial real estate financing. Loan types, down payments, interest rates, and qualification.",
            content: "Full content here...",
            date: "March 10, 2024",
            readTime: "8 min read",
            views: 1560
        },
        {
            id: 12,
            title: "Cash Flow Management for Growing Businesses",
            category: "Finance",
            image: "https://images.unsplash.com/photo-1554224154-22dec7ec8818?w=600&h=400&fit=crop",
            excerpt: "Essential cash flow strategies for business growth. Forecasting, expense tracking, and working capital management.",
            content: "Full content here...",
            date: "March 15, 2024",
            readTime: "6 min read",
            views: 1340
        }
    ];

    let currentFilter = "all";
    let currentSearch = "";

    // Render blogs based on filter and search
    function renderBlogs() {
        let filteredBlogs = blogsData.filter(blog => {
            // Filter by category
            if (currentFilter !== "all" && blog.category !== currentFilter) {
                return false;
            }
            // Filter by search
            if (currentSearch && !blog.title.toLowerCase().includes(currentSearch.toLowerCase()) && !blog.excerpt.toLowerCase().includes(currentSearch.toLowerCase())) {
                return false;
            }
            return true;
        });

        const grid = document.getElementById('blogsGrid');
        const noResults = document.getElementById('noResults');

        if (filteredBlogs.length === 0) {
            grid.innerHTML = '';
            noResults.style.display = 'block';
            return;
        }

        noResults.style.display = 'none';

        grid.innerHTML = filteredBlogs.map(blog => `
            <div class="blog-card" data-id="${blog.id}">
                <img src="${blog.image}" alt="${blog.title}" style="width: 100%; height: 220px; object-fit: cover;">
                <div style="padding: 1.25rem;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                        <span style="background: #e8f0e8; color: #1a7a4a; font-size: 0.65rem; font-weight: 700; padding: 0.25rem 0.75rem;">${blog.category.toUpperCase()}</span>
                        <span style="font-size: 0.7rem; color: #9ca3af;">${blog.readTime}</span>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif; line-height: 1.3;">${blog.title}</h3>
                    <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 0.5rem;">${blog.date} • ${blog.views} views</p>
                    <p style="color: #4a5568; font-size: 0.85rem; line-height: 1.5; margin-bottom: 1rem;">${blog.excerpt}</p>
                    <div style="display: flex; justify-content: flex-end;">
                        <button class="read-more-btn" data-id="${blog.id}" style="background: transparent; border: 1px solid #1a7a4a; color: #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer; transition: all 0.3s ease;">
                            Read More →
                        </button>
                    </div>
                </div>
            </div>
        `).join('');

        // Add event listeners to read more buttons
        document.querySelectorAll('.read-more-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const blogId = parseInt(this.getAttribute('data-id'));
                const blog = blogsData.find(b => b.id === blogId);
                if (blog) {
                    alert(`Opening: ${blog.title}\n\n${blog.excerpt}\n\nFull content would load here.`);
                }
            });
            btn.addEventListener('mouseenter', function() {
                this.style.background = '#1a7a4a';
                this.style.color = 'white';
                this.style.transform = 'translateY(-2px)';
            });
            btn.addEventListener('mouseleave', function() {
                this.style.background = 'transparent';
                this.style.color = '#1a7a4a';
                this.style.transform = 'translateY(0)';
            });
        });
    }

    // Filter button click handlers
    function initFilters() {
        const filterBtns = document.querySelectorAll('.filter-btn');
        
        // Set initial active state
        document.querySelector('.filter-btn[data-filter="all"]').style.background = '#1a7a4a';
        document.querySelector('.filter-btn[data-filter="all"]').style.color = 'white';
        document.querySelector('.filter-btn[data-filter="all"]').style.border = 'none';
        
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Reset all buttons
                filterBtns.forEach(b => {
                    b.style.background = 'white';
                    b.style.color = '#1a7a4a';
                    b.style.border = '1px solid #1a7a4a';
                });
                // Style active button
                this.style.background = '#1a7a4a';
                this.style.color = 'white';
                this.style.border = 'none';
                
                currentFilter = this.getAttribute('data-filter');
                renderBlogs();
            });
        });
    }

    // Search functionality
    function initSearch() {
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', function(e) {
            currentSearch = e.target.value;
            renderBlogs();
        });
    }

    // Initialize
    function init() {
        renderBlogs();
        initFilters();
        initSearch();
    }

    init();
</script>

</body>
</html>