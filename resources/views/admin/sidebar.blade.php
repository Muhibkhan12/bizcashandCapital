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

        ::-webkit-scrollbar { width: 5px; }
        ::-webkit-scrollbar-track { background: #e2ece2; }
        ::-webkit-scrollbar-thumb { background: #1a7a4a; }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(0.95); }
        }

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
            border: none;
            background: transparent;
            width: calc(100% - 1.5rem);
            text-align: left;
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

        .menu-item.active svg { stroke: white; }

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

        .submenu.open { max-height: 400px; }

        .submenu .menu-item {
            padding: 0.5rem 1rem;
            margin: 0.2rem 0.5rem;
            font-size: 0.8rem;
            background: transparent;
            border-radius: 10px !important;
        }

        .submenu .menu-item:hover { background: rgba(26, 122, 74, 0.1); }

        .submenu .menu-item.active {
            background: rgba(26, 122, 74, 0.2);
            color: #c8e86a;
            box-shadow: none;
        }

        .submenu-arrow {
            margin-left: auto;
            transition: transform 0.3s ease;
            opacity: 0.7;
        }

        .submenu-arrow.rotated { transform: rotate(180deg); }

        .admin-sidebar::-webkit-scrollbar { width: 4px; }
        .admin-sidebar::-webkit-scrollbar-track { background: #1a1f1d; }
        .admin-sidebar::-webkit-scrollbar-thumb { background: #1a7a4a; border-radius: 10px !important; }

        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
                width: 260px;
                box-shadow: none;
                transition: transform 0.3s ease;
            }
            .admin-sidebar.mobile-open {
                transform: translateX(0);
                box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
            }
            .admin-main-content { margin-left: 0 !important; }
            .mobile-menu-btn { display: flex !important; }
        }

        @media (min-width: 769px) {
            .mobile-menu-btn { display: none !important; }
        }

        .mobile-menu-btn {
            position: fixed;
            top: 20px;
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

        .user-profile-card {
            margin: 0 0.75rem 1.5rem 0.75rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 16px !important;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

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

        .page-container { display: none; animation: fadeIn 0.3s ease; }
        .page-container.active-page { display: block; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        button { cursor: pointer; }
    </style>
</head>
<body>

    <!-- Mobile Menu Toggle -->
    <button class="mobile-menu-btn" id="mobileMenuToggle">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
            <line x1="3" y1="12" x2="21" y2="12"/>
            <line x1="3" y1="6" x2="21" y2="6"/>
            <line x1="3" y1="18" x2="21" y2="18"/>
        </svg>
    </button>

    <!-- ========== SIDEBAR ========== -->
    <div class="admin-sidebar" id="adminSidebar">
        <div class="logo-wrapper">
            <div style="display: flex; align-items: center; gap: 0.875rem;">
                <div class="logo-icon-circle">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <div>
                    <h2 style="font-size: 1.15rem; font-weight: 700; color: white; font-family: 'Space Grotesk', sans-serif; letter-spacing: -0.3px;">BizCash&Capital</h2>
                    <p style="font-size: 0.6rem; color: #7a9f7a; letter-spacing: 0.5px;">ADMIN PORTAL</p>
                </div>
            </div>
        </div>

        <div class="user-profile-card">
            <div style="display: flex; align-items: center; gap: 0.875rem;">
                <div style="width: 44px; height: 44px; background: linear-gradient(135deg, #c8e86a, #a8c84a); display: flex; align-items: center; justify-content: center; border-radius: 14px !important;">
                    <span style="font-size: 1.1rem; font-weight: 800; color: #0a1f15;">AD</span>
                </div>
                <div>
                    <p style="font-weight: 700; color: white; font-size: 0.85rem; margin-bottom: 2px;">Sarah Johnson</p>
                    <p style="font-size: 0.65rem; color: #7a9f7a;">admin@bizcash.com</p>
                </div>
            </div>
        </div>

        <div style="padding: 0 0.25rem;">

            <!-- Dashboard -->
            <a href="{{ route('admin-main-page')}}" class="menu-item">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <span>Dashboard</span>
            </a>

            <!-- Blog Management with Submenu -->
            <button class="menu-item" data-toggle="blogSubmenu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                <span>Blog Management</span>
                <svg class="submenu-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="submenu open" id="blogSubmenu">
                <a href="{{ route('show-blogs')}}" class="menu-item" ><span> All Blogs</span></a>
                <a href="{{ route('create-blogs')}}" class="menu-item" ><span> Create New</span></a>
                <a href="{{ route('manage-all-blogs')}}" class="menu-item" ><span> Manage Blogs</span></a>
            </div>

            <!-- Loan Applications -->
            <a href="#" class="menu-item" data-page="applications">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
                <span>Loan Applications</span>
                <span class="badge-new">12</span>
            </a>

            <!-- Users Management -->
            <button class="menu-item" data-toggle="usersSubmenu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <span>Users</span>
                <svg class="submenu-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </button>
            <div class="submenu" id="usersSubmenu">
                <a href="#" class="menu-item" data-page="all-users"><span>All Users</span></a>
                <a href="#" class="menu-item" data-page="roles"><span>Roles & Permissions</span></a>
            </div>

            <!-- Reports -->
            <a href="#" class="menu-item" data-page="reports">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M18 20V10M12 20V4M6 20v-6"/>
                    <rect x="2" y="2" width="20" height="20" rx="2"/>
                </svg>
                <span>Reports</span>
            </a>

            <!-- Settings -->
            <a href="#" class="menu-item" data-page="settings">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                </svg>
                <span>Settings</span>
            </a>
        </div>

        <!-- Logout -->
        <div style="padding: 1rem 0.75rem; margin-top: auto; position: absolute; bottom: 1rem; left: 0; right: 0; border-top: 1px solid rgba(255, 255, 255, 0.05);">
            <a href="#" class="menu-item" data-page="logout" style="color: #f87171;">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                    <polyline points="16 17 21 12 16 7"/>
                    <line x1="21" y1="12" x2="9" y2="12"/>
                </svg>
                <span>Logout</span>
            </a>
        </div>
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.getElementById('adminSidebar');
            const mobileToggle = document.getElementById('mobileMenuToggle');

            // Mobile toggle
            if (mobileToggle) {
                mobileToggle.addEventListener('click', function (e) {
                    e.stopPropagation();
                    sidebar.classList.toggle('mobile-open');
                });
            }

            document.addEventListener('click', function (e) {
                if (window.innerWidth <= 768 && sidebar.classList.contains('mobile-open')) {
                    if (!sidebar.contains(e.target) && !mobileToggle.contains(e.target)) {
                        sidebar.classList.remove('mobile-open');
                    }
                }
            });

            // Submenu toggles
            document.querySelectorAll('[data-toggle]').forEach(function (btn) {
                btn.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const subId = this.getAttribute('data-toggle');
                    const sub = document.getElementById(subId);
                    const arrow = this.querySelector('.submenu-arrow');
                    if (!sub) return;

                    const isOpen = sub.classList.contains('open');
                    sub.classList.toggle('open', !isOpen);
                    if (arrow) arrow.classList.toggle('rotated', !isOpen);
                });
            });

            // Page navigation
            const allPageIds = ['dashboard', 'all-blogs', 'create-blog', 'categories', 'applications', 'all-users', 'roles', 'reports', 'settings', 'logout'];
            const navItems = document.querySelectorAll('.menu-item[data-page]');

            function switchPage(pageId) {
                allPageIds.forEach(function (id) {
                    const el = document.getElementById('page-' + id);
                    if (el) el.classList.remove('active-page');
                });

                const target = document.getElementById('page-' + pageId);
                if (target) target.classList.add('active-page');

                navItems.forEach(function (item) {
                    if (item.getAttribute('data-page') === pageId) {
                        item.classList.add('active');
                    } else {
                        item.classList.remove('active');
                    }
                });

                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('mobile-open');
                }
            }

            navItems.forEach(function (item) {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    e.stopPropagation();
                    const pageId = this.getAttribute('data-page');
                    if (pageId) switchPage(pageId);
                });
            });

            // Open blog submenu by default
            const blogSub = document.getElementById('blogSubmenu');
            const blogBtn = document.querySelector('[data-toggle="blogSubmenu"]');
            if (blogSub && blogBtn) {
                blogSub.classList.add('open');
                const arrow = blogBtn.querySelector('.submenu-arrow');
                if (arrow) arrow.classList.add('rotated');
            }

            // Show dashboard by default
            switchPage('dashboard');
        });
    </script>

</body>
</html>