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
                
                <!-- Blogs Grid - 3 Static Blogs -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($blogs as $data)
                    <!-- Blog 1: Business Loan -->
                    <div class="blog-card">
                        <img src="{{ asset('blogs/public' . $data->image) }}" alt="{{ $data->title }}" style="width: 100%; height: 220px; object-fit: cover;">
                        <div style="padding: 1.25rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                <span style="background: #e8f0e8; color: #1a7a4a; font-size: 0.65rem; font-weight: 700; padding: 0.25rem 0.75rem;">{{$data->category}}</span>
                                <span style="font-size: 0.7rem; color: #9ca3af;">5 min read</span>
                            </div>
                            <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif; line-height: 1.3;">{{$data->title}}</h3>
                            <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 0.5rem;">January 15, 2024 • 1,250 views</p>
                            <p style="color: #4a5568; font-size: 0.85rem; line-height: 1.5; margin-bottom: 1rem;">Learn the steps to secure funding even with a low credit score. Discover alternative lenders, improve your chances, and get approved for the capital you need.</p>
                            <div style="display: flex; justify-content: flex-end;">
                                <button class="read-more-btn" style="background: transparent; border: 1px solid #1a7a4a; color: #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer; transition: all 0.3s ease;">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                    <!-- Blog 2: SBA Loan -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop" alt="SBA Loan" style="width: 100%; height: 220px; object-fit: cover;">
                        <div style="padding: 1.25rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                <span style="background: #e8f0e8; color: #1a7a4a; font-size: 0.65rem; font-weight: 700; padding: 0.25rem 0.75rem;">SBA</span>
                                <span style="font-size: 0.7rem; color: #9ca3af;">7 min read</span>
                            </div>
                            <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif; line-height: 1.3;">Top 5 SBA Loan Requirements for 2024</h3>
                            <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 0.5rem;">January 20, 2024 • 890 views</p>
                            <p style="color: #4a5568; font-size: 0.85rem; line-height: 1.5; margin-bottom: 1rem;">Everything you need to know about SBA loan qualifications. From credit scores to business plans, we cover all the requirements you need to meet.</p>
                            <div style="display: flex; justify-content: flex-end;">
                                <button class="read-more-btn" style="background: transparent; border: 1px solid #1a7a4a; color: #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer; transition: all 0.3s ease;">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Blog 3: Construction Loans -->
                    <div class="blog-card">
                        <img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=400&fit=crop" alt="Construction Loans" style="width: 100%; height: 220px; object-fit: cover;">
                        <div style="padding: 1.25rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                <span style="background: #e8f0e8; color: #1a7a4a; font-size: 0.65rem; font-weight: 700; padding: 0.25rem 0.75rem;">LOANS</span>
                                <span style="font-size: 0.7rem; color: #9ca3af;">8 min read</span>
                            </div>
                            <h3 style="font-size: 1.2rem; font-weight: 800; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif; line-height: 1.3;">Construction Loans: A Complete Guide</h3>
                            <p style="color: #6b7280; font-size: 0.8rem; margin-bottom: 0.5rem;">January 25, 2024 • 2,340 views</p>
                            <p style="color: #4a5568; font-size: 0.85rem; line-height: 1.5; margin-bottom: 1rem;">Understanding construction loans and how to apply. Learn about draw schedules, interest reserves, and lender requirements for your building project.</p>
                            <div style="display: flex; justify-content: flex-end;">
                                <button class="read-more-btn" style="background: transparent; border: 1px solid #1a7a4a; color: #1a7a4a; padding: 0.5rem 1.25rem; font-weight: 600; font-size: 0.8rem; cursor: pointer; transition: all 0.3s ease;">
                                    Read More →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>

<script>
    // Simple hover effect for read more buttons
    document.querySelectorAll('.read-more-btn').forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.style.background = '#1a7a4a';
            this.style.color = 'white';
        });
        btn.addEventListener('mouseleave', function() {
            this.style.background = 'transparent';
            this.style.color = '#1a7a4a';
        });
        btn.addEventListener('click', function() {
            const card = this.closest('.blog-card');
            const title = card.querySelector('h3').innerText;
            alert(`Opening: ${title}\n\nFull content would load here.`);
        });
    });
</script>

</body>
</html>