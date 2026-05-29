<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Admin Dashboard | BizCashAndCapital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* ---------- RESET & GLOBAL ---------- */
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

        /* ========== SIDEBAR STYLES ========== */
        .admin-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 280px;
            background: #0a0f0d;
            z-index: 999;
            overflow-y: auto;
            overflow-x: hidden;
            font-family: 'Plus Jakarta Sans', sans-serif;
            border-right: 1px solid rgba(255, 255, 255, 0.05);
        }

        .admin-main-content {
            margin-left: 280px;
            min-height: 100vh;
        }

        /* Menu Items */
        .menu-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.75rem 1.25rem;
            margin: 0.25rem 0.75rem;
            color: #a3b3a6;
            transition: all 0.25s ease;
            cursor: pointer;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.85rem;
            border-radius: 12px !important;
            position: relative;
        }

        .menu-item:hover {
            background: rgba(26, 122, 74, 0.15);
            color: #c8e86a;
        }

        .menu-item.active {
            background: linear-gradient(135deg, #1a7a4a, #0f5a38);
            color: white;
            box-shadow: 0 4px 12px rgba(26, 122, 74, 0.3);
        }

        .menu-item.active svg {
            stroke: white;
        }

        .menu-item svg {
            width: 20px;
            height: 20px;
            flex-shrink: 0;
            transition: all 0.2s;
        }

        .submenu {
            padding-left: 3rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease;
        }

        .submenu.open {
            max-height: 400px;
        }

        .submenu .menu-item {
            padding: 0.5rem 1rem;
            margin: 0.2rem 0.5rem;
            font-size: 0.8rem;
            background: transparent;
            border-radius: 10px !important;
        }

        .submenu .menu-item:hover {
            background: rgba(26, 122, 74, 0.1);
        }

        .submenu .menu-item.active {
            background: rgba(26, 122, 74, 0.2);
            color: #c8e86a;
            box-shadow: none;
        }

        .has-submenu {
            position: relative;
        }

        .submenu-arrow {
            margin-left: auto;
            transition: transform 0.3s ease;
            opacity: 0.7;
        }

        .submenu-arrow.rotated {
            transform: rotate(180deg);
        }

        /* Custom scrollbar */
        .admin-sidebar::-webkit-scrollbar {
            width: 4px;
        }
        .admin-sidebar::-webkit-scrollbar-track {
            background: #1a1f1d;
        }
        .admin-sidebar::-webkit-scrollbar-thumb {
            background: #1a7a4a;
            border-radius: 10px !important;
        }

        /* Mobile Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
                width: 260px;
                box-shadow: none;
            }
            .admin-sidebar.mobile-open {
                transform: translateX(0);
                box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
            }
            .admin-main-content {
                margin-left: 0 !important;
            }
            .mobile-menu-btn {
                display: flex !important;
            }
        }

        @media (min-width: 769px) {
            .mobile-menu-btn {
                display: none !important;
            }
        }

        .mobile-menu-btn {
            position: fixed;
            top: 80px;
            left: 15px;
            z-index: 1000;
            background: #1a7a4a;
            border: none;
            width: 42px;
            height: 42px;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            border-radius: 12px !important;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .badge-new {
            margin-left: auto;
            background: #dc2626;
            color: white;
            font-size: 0.6rem;
            padding: 0.2rem 0.5rem;
            font-weight: 600;
            border-radius: 20px !important;
        }

        /* Logo section */
        .logo-wrapper {
            padding: 1.5rem 1.25rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
            margin-bottom: 1rem;
        }
        .logo-icon-circle {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #1a7a4a, #0f5a38);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px !important;
        }
        
        /* User profile */
        .user-profile-card {
            margin: 0 0.75rem 1.5rem 0.75rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px !important;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Dashboard Stats Cards */
        .stat-card {
            background: white;
            border: 1px solid #e2e8e2;
            padding: 1rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .icon-box {
            width: 48px;
            height: 48px;
            background: #e8f0e8;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
@include('admin.sidebar')

    <!-- ========== MAIN DASHBOARD CONTENT ========== -->
    <div class="admin-main-content">
        <!-- Dashboard Header Section -->
        <section style="padding: 2rem 2rem 1rem 2rem; background: linear-gradient(135deg, #1a7a4a, #0f5a38); position: relative;">
            <div style="position: absolute; inset: 0; background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.1;"></div>
            <div style="max-width: 1280px; margin: 0 auto; position: relative; z-index: 2;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); padding: 0.35rem 1rem; margin-bottom: 1rem; border-radius: 40px !important;">
                    <span style="width: 6px; height: 6px; background: #c8e86a; display: inline-block; animation: pulse 2s infinite; border-radius: 50% !important;"></span>
                    <span style="font-size: 0.65rem; font-weight: 700; color: white;">DASHBOARD</span>
                </div>
                <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: white; font-family: 'Space Grotesk', sans-serif;">Welcome back, Sarah</h1>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #c8e86a, white); margin: 0.75rem 0;"></div>
                <p style="color: rgba(255,255,255,0.85);">Manage your blog, applications, and users from one place.</p>
            </div>
        </section>

        <!-- Main Dashboard Content -->
        <div style="padding: 2rem;">
            <div style="max-width: 1280px; margin: 0 auto;">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                    <div class="stat-card">
                        <div>
                            <p class="text-gray-500 text-xs">Total Blogs</p>
                            <h3 class="text-2xl font-extrabold text-green-primary">24</h3>
                        </div>
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="1.8">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div>
                            <p class="text-gray-500 text-xs">Published</p>
                            <h3 class="text-2xl font-extrabold text-green-primary">18</h3>
                        </div>
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="1.8">
                                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div>
                            <p class="text-gray-500 text-xs">Pending Apps</p>
                            <h3 class="text-2xl font-extrabold text-green-primary">12</h3>
                        </div>
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="1.8">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div>
                            <p class="text-gray-500 text-xs">Total Users</p>
                            <h3 class="text-2xl font-extrabold text-green-primary">342</h3>
                        </div>
                        <div class="icon-box">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="1.8">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Recent Blogs Section -->
                <div class="bg-white p-6 border border-gray-200 mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold" style="font-family: 'Space Grotesk', sans-serif;">Recent Blog Posts</h2>
                        <a href="#" class="text-green-primary text-sm hover:underline">View All →</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="p-3 text-left">Title</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left">Date</th>
                                    <th class="p-3 text-left">Views</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">How to Get a Business Loan with Bad Credit</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-green-100 text-green-700">PUBLISHED</span></td>
                                    <td class="p-3 text-gray-500">Jan 15, 2024</td>
                                    <td class="p-3 text-gray-500">1,250</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">Top 5 SBA Loan Requirements for 2024</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-green-100 text-green-700">PUBLISHED</span></td>
                                    <td class="p-3 text-gray-500">Jan 20, 2024</td>
                                    <td class="p-3 text-gray-500">890</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">Construction Loans: A Complete Guide</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700">DRAFT</span></td>
                                    <td class="p-3 text-gray-500">Jan 25, 2024</td>
                                    <td class="p-3 text-gray-500">0</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">Smart Finance Strategies for Small Business</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-green-100 text-green-700">PUBLISHED</span></td>
                                    <td class="p-3 text-gray-500">Feb 1, 2024</td>
                                    <td class="p-3 text-gray-500">2,100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Recent Applications Section -->
                <div class="bg-white p-6 border border-gray-200">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-xl font-bold" style="font-family: 'Space Grotesk', sans-serif;">Recent Loan Applications</h2>
                        <a href="#" class="text-green-primary text-sm hover:underline">View All →</a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="p-3 text-left">Name</th>
                                    <th class="p-3 text-left">Loan Type</th>
                                    <th class="p-3 text-left">Amount</th>
                                    <th class="p-3 text-left">Status</th>
                                    <th class="p-3 text-left">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">Michael Chen</td>
                                    <td class="p-3 text-gray-600">Business Loan</td>
                                    <td class="p-3 text-gray-600">$150,000</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700">PENDING</span></td>
                                    <td class="p-3 text-gray-500">Mar 10, 2024</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">Jessica Williams</td>
                                    <td class="p-3 text-gray-600">SBA Loan</td>
                                    <td class="p-3 text-gray-600">$75,000</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700">PENDING</span></td>
                                    <td class="p-3 text-gray-500">Mar 8, 2024</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">David Rodriguez</td>
                                    <td class="p-3 text-gray-600">Construction Loan</td>
                                    <td class="p-3 text-gray-600">$250,000</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-green-100 text-green-700">APPROVED</span></td>
                                    <td class="p-3 text-gray-500">Mar 5, 2024</td>
                                </tr>
                                <tr class="border-b">
                                    <td class="p-3 font-medium">Emily Thompson</td>
                                    <td class="p-3 text-gray-600">Business Loan</td>
                                    <td class="p-3 text-gray-600">$50,000</td>
                                    <td class="p-3"><span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700">PENDING</span></td>
                                    <td class="p-3 text-gray-500">Mar 3, 2024</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Sidebar Submenu + Mobile Navigation
        (function() {
            const sidebar = document.getElementById('adminSidebar');
            const mobileToggle = document.getElementById('mobileMenuToggle');

            // Mobile menu toggle
            if (mobileToggle) {
                mobileToggle.addEventListener('click', () => sidebar.classList.toggle('mobile-open'));
            }
            
            // Close sidebar when clicking outside on mobile
            document.addEventListener('click', function(e) {
                if (window.innerWidth <= 768 && sidebar && sidebar.classList.contains('mobile-open')) {
                    if (!sidebar.contains(e.target) && !mobileToggle?.contains(e.target)) {
                        sidebar.classList.remove('mobile-open');
                    }
                }
            });

            // Submenu triggers
            document.querySelectorAll('.submenu-trigger').forEach(trigger => {
                trigger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    const subId = this.getAttribute('data-submenu');
                    const sub = document.getElementById(subId);
                    const arrow = this.querySelector('.submenu-arrow');
                    if (sub) {
                        sub.classList.toggle('open');
                        if (arrow) arrow.classList.toggle('rotated');
                    }
                });
            });

            // Simple page navigation simulation (just for demo, sidebar active state)
            const menuItems = document.querySelectorAll('.menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    if (window.innerWidth <= 768) sidebar.classList.remove('mobile-open');
                });
            });
            
            // Open blog submenu by default
            const blogSubmenu = document.getElementById('blogSubmenu');
            const blogTrigger = document.querySelector('.submenu-trigger[data-submenu="blogSubmenu"]');
            if (blogSubmenu && blogTrigger) {
                blogSubmenu.classList.add('open');
                const arrow = blogTrigger.querySelector('.submenu-arrow');
                if (arrow) arrow.classList.add('rotated');
            }
        })();
    </script>
</body>
</html>