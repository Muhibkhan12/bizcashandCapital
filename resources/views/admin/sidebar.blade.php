<!-- admin-sidebar.blade.php -->
<style>
    /* Admin Sidebar Styles */
    .admin-sidebar {
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 280px;
        background: linear-gradient(180deg, #0f2b1f 0%, #0a1f15 100%);
        z-index: 999;
        transition: all 0.3s ease;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .admin-sidebar.collapsed {
        width: 80px;
    }

    .admin-sidebar.collapsed .sidebar-text,
    .admin-sidebar.collapsed .menu-text {
        display: none;
    }

    .admin-sidebar.collapsed .menu-item {
        justify-content: center;
        padding: 0.75rem;
    }

    .admin-sidebar.collapsed .menu-item svg {
        margin-right: 0;
    }

    .admin-sidebar.collapsed .logo-text {
        display: none;
    }

    .admin-sidebar.collapsed .logo-icon {
        display: block !important;
    }

    .admin-sidebar.collapsed .user-info {
        justify-content: center;
    }

    .admin-sidebar.collapsed .user-details {
        display: none;
    }

    .admin-main-content {
        margin-left: 280px;
        transition: all 0.3s ease;
        min-height: 100vh;
    }

    .admin-main-content.expanded {
        margin-left: 80px;
    }

    .sidebar-toggle {
        position: fixed;
        left: 280px;
        top: 20px;
        z-index: 1000;
        background: #1a7a4a;
        border: none;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .sidebar-toggle.collapsed {
        left: 80px;
    }

    .sidebar-toggle:hover {
        background: #0f5a38;
    }

    .menu-item {
        display: flex;
        align-items: center;
        gap: 1rem;
        padding: 0.875rem 1.5rem;
        color: #d1d5db;
        transition: all 0.3s ease;
        cursor: pointer;
        text-decoration: none;
    }

    .menu-item:hover {
        background: rgba(26, 122, 74, 0.2);
        color: #c8e86a;
    }

    .menu-item.active {
        background: #1a7a4a;
        color: white;
        border-left: 3px solid #c8e86a;
    }

    .menu-item svg {
        width: 20px;
        height: 20px;
        flex-shrink: 0;
    }

    .submenu {
        padding-left: 3rem;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .submenu.open {
        max-height: 500px;
    }

    .submenu .menu-item {
        padding: 0.6rem 1.5rem;
        font-size: 0.85rem;
    }

    .has-submenu {
        position: relative;
    }

    .submenu-arrow {
        margin-left: auto;
        transition: transform 0.3s ease;
    }

    .submenu-arrow.rotated {
        transform: rotate(180deg);
    }

    /* Custom scrollbar for sidebar */
    .admin-sidebar::-webkit-scrollbar {
        width: 4px;
    }

    .admin-sidebar::-webkit-scrollbar-track {
        background: #1a2a1a;
    }

    .admin-sidebar::-webkit-scrollbar-thumb {
        background: #1a7a4a;
    }

    /* Mobile Responsive */
    @media (max-width: 768px) {
        .admin-sidebar {
            transform: translateX(-100%);
            width: 260px;
        }

        .admin-sidebar.mobile-open {
            transform: translateX(0);
        }

        .admin-main-content {
            margin-left: 0 !important;
        }

        .sidebar-toggle {
            display: none;
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
        width: 40px;
        height: 40px;
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
</style>

<!-- Mobile Menu Toggle Button -->
<button class="mobile-menu-btn" id="mobileMenuToggle">
    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
        <line x1="3" y1="12" x2="21" y2="12"/>
        <line x1="3" y1="6" x2="21" y2="6"/>
        <line x1="3" y1="18" x2="21" y2="18"/>
    </svg>
</button>

<!-- Sidebar Toggle Button (Desktop) -->
<button class="sidebar-toggle" id="sidebarToggle">
    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
        <polyline points="15 18 9 12 15 6"/>
    </svg>
</button>

<!-- Admin Sidebar -->
<div class="admin-sidebar" id="adminSidebar">
    <!-- Logo Section -->
    <div style="padding: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 1.5rem;">
        <div style="display: flex; align-items: center; gap: 0.75rem;">
            <div style="width: 40px; height: 40px; background: #1a7a4a; display: flex; align-items: center; justify-content: center;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                    <circle cx="12" cy="12" r="3"/>
                </svg>
            </div>
            <div class="logo-text">
                <h2 style="font-size: 1.2rem; font-weight: 800; color: white; font-family: 'Space Grotesk', sans-serif;">BizCash&Capital</h2>
                <p style="font-size: 0.65rem; color: #9ca3af;">Admin Panel</p>
            </div>
            <div class="logo-icon" style="display: none;">
                <h2 style="font-size: 1rem; font-weight: 800; color: white;">BC</h2>
            </div>
        </div>
    </div>

    <!-- Admin User Info -->
    <div style="padding: 0 1rem 1.5rem 1rem; border-bottom: 1px solid rgba(255,255,255,0.1); margin-bottom: 1rem;">
        <div class="user-info" style="display: flex; align-items: center; gap: 0.75rem;">
            <div style="width: 45px; height: 45px; background: #c8e86a; display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 1.2rem; font-weight: 800; color: #1a7a4a;">AD</span>
            </div>
            <div class="user-details">
                <p style="font-weight: 700; color: white; font-size: 0.9rem;">Admin User</p>
                <p style="font-size: 0.7rem; color: #9ca3af;">admin@bizcashandcapital.com</p>
            </div>
        </div>
    </div>

    <!-- Navigation Menu -->
    <div style="padding: 0 0.5rem;">
        <!-- Dashboard -->
        <a href="/admin/dashboard" class="menu-item" data-page="dashboard">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                <polyline points="9 22 9 12 15 12 15 22"/>
            </svg>
            <span class="menu-text">Dashboard</span>
        </a>

        <!-- Blog Management with Submenu -->
        <div class="has-submenu">
            <div class="menu-item submenu-trigger" data-submenu="blogSubmenu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                <span class="menu-text">Blog Management</span>
                <svg class="submenu-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </div>
            <div class="submenu" id="blogSubmenu">
                <a href="/admin/blogs" class="menu-item" data-page="blogs">
                    <span class="menu-text">All Blogs</span>
                </a>
                <a href="/admin/blogs/create" class="menu-item" data-page="create-blog">
                    <span class="menu-text">Create New</span>
                </a>
                <a href="/admin/blogs/categories" class="menu-item" data-page="categories">
                    <span class="menu-text">Categories</span>
                </a>
            </div>
        </div>

        <!-- Loan Applications -->
        <a href="/admin/applications" class="menu-item" data-page="applications">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
            </svg>
            <span class="menu-text">Loan Applications</span>
            <span style="margin-left: auto; background: #dc2626; color: white; font-size: 0.6rem; padding: 0.15rem 0.5rem;">12</span>
        </a>

        <!-- Users Management -->
        <div class="has-submenu">
            <div class="menu-item submenu-trigger" data-submenu="usersSubmenu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                    <circle cx="9" cy="7" r="4"/>
                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                </svg>
                <span class="menu-text">Users</span>
                <svg class="submenu-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </div>
            <div class="submenu" id="usersSubmenu">
                <a href="/admin/users" class="menu-item" data-page="users">
                    <span class="menu-text">All Users</span>
                </a>
                <a href="/admin/users/roles" class="menu-item" data-page="roles">
                    <span class="menu-text">Roles & Permissions</span>
                </a>
            </div>
        </div>

        <!-- Settings -->
        <div class="has-submenu">
            <div class="menu-item submenu-trigger" data-submenu="settingsSubmenu">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"/>
                </svg>
                <span class="menu-text">Settings</span>
                <svg class="submenu-arrow" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="6 9 12 15 18 9"/>
                </svg>
            </div>
            <div class="submenu" id="settingsSubmenu">
                <a href="/admin/settings/general" class="menu-item" data-page="general-settings">
                    <span class="menu-text">General</span>
                </a>
                <a href="/admin/settings/security" class="menu-item" data-page="security-settings">
                    <span class="menu-text">Security</span>
                </a>
                <a href="/admin/settings/email" class="menu-item" data-page="email-settings">
                    <span class="menu-text">Email Settings</span>
                </a>
            </div>
        </div>

        <!-- Change Password -->
        <a href="/admin/change-password" class="menu-item" data-page="change-password">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
            </svg>
            <span class="menu-text">Change Password</span>
        </a>

        <!-- Reports -->
        <a href="/admin/reports" class="menu-item" data-page="reports">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 20V10M12 20V4M6 20v-6"/>
                <rect x="2" y="2" width="20" height="20" rx="2"/>
            </svg>
            <span class="menu-text">Reports</span>
        </a>
    </div>

    <!-- Bottom Section -->
    <div style="padding: 1rem; border-top: 1px solid rgba(255,255,255,0.1); margin-top: auto; position: absolute; bottom: 0; left: 0; right: 0;">
        <a href="/logout" class="menu-item" style="color: #dc2626;">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
            </svg>
            <span class="menu-text">Logout</span>
        </a>
    </div>
</div>

<script>
    // Sidebar Toggle Functionality
    document.addEventListener('DOMContentLoaded', function() {
        const sidebar = document.getElementById('adminSidebar');
        const toggleBtn = document.getElementById('sidebarToggle');
        const mainContent = document.querySelector('.admin-main-content');
        const mobileToggle = document.getElementById('mobileMenuToggle');
        
        // Desktop Toggle
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                toggleBtn.classList.toggle('collapsed');
                if (mainContent) {
                    mainContent.classList.toggle('expanded');
                }
                // Save state to localStorage
                const isCollapsed = sidebar.classList.contains('collapsed');
                localStorage.setItem('sidebarCollapsed', isCollapsed);
            });
        }
        
        // Load saved sidebar state
        const savedState = localStorage.getItem('sidebarCollapsed');
        if (savedState === 'true' && window.innerWidth > 768) {
            sidebar.classList.add('collapsed');
            toggleBtn?.classList.add('collapsed');
            mainContent?.classList.add('expanded');
        }
        
        // Mobile Menu Toggle
        if (mobileToggle) {
            mobileToggle.addEventListener('click', function() {
                sidebar.classList.toggle('mobile-open');
            });
        }
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 768 && sidebar && sidebar.classList.contains('mobile-open')) {
                if (!sidebar.contains(e.target) && !mobileToggle?.contains(e.target)) {
                    sidebar.classList.remove('mobile-open');
                }
            }
        });
        
        // Submenu Toggle Functionality
        const submenuTriggers = document.querySelectorAll('.submenu-trigger');
        submenuTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.stopPropagation();
                const submenuId = this.getAttribute('data-submenu');
                const submenu = document.getElementById(submenuId);
                const arrow = this.querySelector('.submenu-arrow');
                
                if (submenu) {
                    submenu.classList.toggle('open');
                    if (arrow) {
                        arrow.classList.toggle('rotated');
                    }
                }
            });
        });
        
        // Active menu item highlighting
        const currentPath = window.location.pathname;
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href && currentPath === href) {
                item.classList.add('active');
                // Open parent submenu if any
                const parentSubmenu = item.closest('.submenu');
                if (parentSubmenu) {
                    parentSubmenu.classList.add('open');
                    const parentTrigger = parentSubmenu.previousElementSibling;
                    if (parentTrigger && parentTrigger.classList.contains('submenu-trigger')) {
                        const arrow = parentTrigger.querySelector('.submenu-arrow');
                        if (arrow) arrow.classList.add('rotated');
                    }
                }
            }
        });
    });
</script>
