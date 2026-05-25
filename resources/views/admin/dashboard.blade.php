<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Admin Panel — Blog Management | BizCashAndCapital</title>
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

        .btn-primary {
            background: #1a7a4a;
            color: white;
            padding: 0.7rem 1.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary:hover {
            background: #0f5a38;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #1a7a4a;
            color: #1a7a4a;
            padding: 0.65rem 1.25rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-outline:hover {
            background: #1a7a4a;
            color: white;
        }

        .btn-danger {
            background: #dc2626;
            color: white;
            padding: 0.4rem 1rem;
            font-weight: 600;
            font-size: 0.75rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-danger:hover {
            background: #b91c1c;
            transform: translateY(-2px);
        }

        .btn-edit {
            background: #3b82f6;
            color: white;
            padding: 0.4rem 1rem;
            font-weight: 600;
            font-size: 0.75rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-edit:hover {
            background: #2563eb;
            transform: translateY(-2px);
        }

        input, select, textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: inherit;
            font-size: 0.875rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
        }

        .modal-content {
            background: white;
            max-width: 600px;
            width: 90%;
            max-height: 85vh;
            overflow-y: auto;
            border: 1px solid #e2e8e2;
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

        @media (max-width: 768px) {
            .btn-primary, .btn-outline {
                padding: 0.6rem 1.2rem;
                font-size: 0.8rem;
            }
            .blog-grid {
                grid-template-columns: 1fr !important;
            }
        }
    </style>
</head>

<body>

    @include('header')

    <!-- Admin Header -->
    <section style="padding: 7rem 0 2rem 0; background: linear-gradient(135deg, #1a7a4a, #0f5a38); position: relative;">
        <div style="position: absolute; inset: 0; background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.1;"></div>
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; text-align: center; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); padding: 0.35rem 1rem; margin-bottom: 1rem; border: 1px solid rgba(255,255,255,0.2);">
                <span style="width: 6px; height: 6px; background: #c8e86a; display: inline-block; animation: pulse 2s infinite;"></span>
                <span style="font-size: 0.65rem; font-weight: 700; color: white; letter-spacing: 0.08em;">ADMIN PANEL</span>
            </div>
            <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: white; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif;">Blog Management</h1>
            <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #c8e86a, white); margin: 0.75rem auto;"></div>
            <p style="color: rgba(255,255,255,0.85); font-size: 0.875rem; margin-top: 0.75rem;">Create, edit, and manage your blog posts</p>
        </div>
    </section>

    <!-- Main Admin Content -->
    <section style="padding: 2rem 0 3rem 0; background: #f5f7f5;">
        <div style="max-width: 1280px; margin: 0 auto; padding: 0 1.5rem;">
            
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
                <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <p style="color: #5a6b5a; font-size: 0.7rem;">Total Blogs</p>
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: #1a7a4a;" id="totalBlogs">0</h3>
                    </div>
                    <div style="width: 48px; height: 48px; background: #e8f0e8; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                </div>
                <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <p style="color: #5a6b5a; font-size: 0.7rem;">Published</p>
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: #1a7a4a;" id="publishedBlogs">0</h3>
                    </div>
                    <div style="width: 48px; height: 48px; background: #e8f0e8; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                </div>
                <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <p style="color: #5a6b5a; font-size: 0.7rem;">Drafts</p>
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: #1a7a4a;" id="draftBlogs">0</h3>
                    </div>
                    <div style="width: 48px; height: 48px; background: #e8f0e8; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                </div>
                <div style="background: white; border: 1px solid #e2e8e2; padding: 1rem 1.25rem; display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <p style="color: #5a6b5a; font-size: 0.7rem;">Total Views</p>
                        <h3 style="font-size: 1.8rem; font-weight: 800; color: #1a7a4a;" id="totalViews">0</h3>
                    </div>
                    <div style="width: 48px; height: 48px; background: #e8f0e8; display: flex; align-items: center; justify-content: center;">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-bottom: 2rem;">
                <button class="btn-primary" id="openCreateModal">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                        <path d="M12 5v14M5 12h14"/>
                    </svg>
                    Create New Blog
                </button>
                <div style="display: flex; gap: 0.5rem;">
                    <select id="filterStatus" style="width: auto; padding: 0.6rem 1rem;">
                        <option value="all">All Posts</option>
                        <option value="published">Published</option>
                        <option value="draft">Drafts</option>
                    </select>
                    <input type="text" id="searchBlog" placeholder="Search blogs..." style="width: 200px;">
                </div>
            </div>

            <!-- Blogs Grid -->
            <div id="blogsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Blogs will be dynamically inserted here -->
            </div>
        </div>
    </section>

    <!-- Create/Edit Blog Modal -->
    <div id="blogModal" class="modal">
        <div class="modal-content">
            <div style="padding: 1.5rem; border-bottom: 1px solid #e2e8e2; display: flex; justify-content: space-between; align-items: center;">
                <h2 style="font-size: 1.3rem; font-weight: 800; font-family: 'Space Grotesk', sans-serif;" id="modalTitle">Create New Blog</h2>
                <button id="closeModal" style="background: none; border: none; font-size: 1.5rem; cursor: pointer;">&times;</button>
            </div>
            <form id="blogForm" style="padding: 1.5rem;">
                <input type="hidden" id="blogId">
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.5rem;">Title *</label>
                    <input type="text" id="blogTitle" placeholder="Enter blog title" required>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.5rem;">Category *</label>
                    <select id="blogCategory" required>
                        <option value="">Select Category</option>
                        <option value="Business">Business</option>
                        <option value="Finance">Finance</option>
                        <option value="Loans">Loans</option>
                        <option value="SBA">SBA</option>
                        <option value="Tips">Tips & Advice</option>
                    </select>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.5rem;">Featured Image URL</label>
                    <input type="url" id="blogImage" placeholder="https://images.unsplash.com/...">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.5rem;">Excerpt / Summary</label>
                    <textarea id="blogExcerpt" rows="2" placeholder="Short summary of the blog..."></textarea>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.5rem;">Content *</label>
                    <textarea id="blogContent" rows="6" placeholder="Write your blog content here..." required></textarea>
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; font-size: 0.75rem; font-weight: 700; margin-bottom: 0.5rem;">Status</label>
                    <select id="blogStatus">
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>
                <div style="display: flex; gap: 1rem; justify-content: flex-end;">
                    <button type="button" id="cancelModal" class="btn-outline" style="padding: 0.6rem 1.2rem;">Cancel</button>
                    <button type="submit" class="btn-primary">Save Blog</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="modal">
        <div class="modal-content" style="max-width: 400px;">
            <div style="padding: 1.5rem; text-align: center;">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2" style="margin: 0 auto 1rem;">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="12"/>
                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
                <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 0.5rem;">Delete Blog</h3>
                <p style="color: #5a6b5a; margin-bottom: 1.5rem;">Are you sure you want to delete this blog? This action cannot be undone.</p>
                <div style="display: flex; gap: 1rem; justify-content: center;">
                    <button id="cancelDelete" class="btn-outline">Cancel</button>
                    <button id="confirmDelete" class="btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    @include('footer')

    <script>
        // Blog Data Storage
        let blogs = [];
        let nextId = 1;
        let deleteId = null;

        // Load blogs from localStorage
        function loadBlogs() {
            const stored = localStorage.getItem('adminBlogs');
            if (stored) {
                blogs = JSON.parse(stored);
                nextId = Math.max(...blogs.map(b => b.id), 0) + 1;
            } else {
                // Sample data
                blogs = [
                    {
                        id: 1,
                        title: "How to Get a Business Loan with Bad Credit",
                        category: "Business",
                        image: "https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=400&fit=crop",
                        excerpt: "Learn the steps to secure funding even with a low credit score...",
                        content: "Full content here...",
                        status: "published",
                        views: 1250,
                        date: "2024-01-15"
                    },
                    {
                        id: 2,
                        title: "Top 5 SBA Loan Requirements for 2024",
                        category: "SBA",
                        image: "https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop",
                        excerpt: "Everything you need to know about SBA loan qualifications...",
                        content: "Full content here...",
                        status: "published",
                        views: 890,
                        date: "2024-01-20"
                    },
                    {
                        id: 3,
                        title: "Construction Loans: A Complete Guide",
                        category: "Loans",
                        image: "https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=400&fit=crop",
                        excerpt: "Understanding construction loans and how to apply...",
                        content: "Full content here...",
                        status: "draft",
                        views: 0,
                        date: "2024-01-25"
                    }
                ];
                saveBlogs();
            }
            renderBlogs();
            updateStats();
        }

        // Save blogs to localStorage
        function saveBlogs() {
            localStorage.setItem('adminBlogs', JSON.stringify(blogs));
        }

        // Update statistics
        function updateStats() {
            document.getElementById('totalBlogs').textContent = blogs.length;
            document.getElementById('publishedBlogs').textContent = blogs.filter(b => b.status === 'published').length;
            document.getElementById('draftBlogs').textContent = blogs.filter(b => b.status === 'draft').length;
            document.getElementById('totalViews').textContent = blogs.reduce((sum, b) => sum + (b.views || 0), 0);
        }

        // Render blogs grid
        function renderBlogs() {
            const filter = document.getElementById('filterStatus').value;
            const search = document.getElementById('searchBlog').value.toLowerCase();
            
            let filtered = blogs;
            if (filter !== 'all') {
                filtered = filtered.filter(b => b.status === filter);
            }
            if (search) {
                filtered = filtered.filter(b => b.title.toLowerCase().includes(search) || b.category.toLowerCase().includes(search));
            }
            
            const grid = document.getElementById('blogsGrid');
            if (filtered.length === 0) {
                grid.innerHTML = `
                    <div style="grid-column: 1/-1; text-align: center; padding: 4rem; background: white; border: 1px solid #e2e8e2;">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="1.5" style="margin: 0 auto 1rem;">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                        <p style="color: #9ca3af;">No blogs found</p>
                        <button class="btn-primary" style="margin-top: 1rem;" id="emptyCreateBtn">Create Your First Blog</button>
                    </div>
                `;
                const emptyBtn = document.getElementById('emptyCreateBtn');
                if (emptyBtn) {
                    emptyBtn.addEventListener('click', () => openCreateModal());
                }
                return;
            }
            
            grid.innerHTML = filtered.map(blog => `
                <div class="blog-card" data-id="${blog.id}">
                    <img src="${blog.image || 'https://via.placeholder.com/600x400?text=No+Image'}" alt="${blog.title}" style="width: 100%; height: 200px; object-fit: cover;">
                    <div style="padding: 1.25rem;">
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.5rem;">
                            <span style="background: ${blog.status === 'published' ? '#e8f0e8' : '#fef3c7'}; color: ${blog.status === 'published' ? '#1a7a4a' : '#d97706'}; font-size: 0.65rem; font-weight: 600; padding: 0.25rem 0.5rem;">${blog.status.toUpperCase()}</span>
                            <span style="font-size: 0.7rem; color: #9ca3af;">${blog.views || 0} views</span>
                        </div>
                        <h3 style="font-size: 1.1rem; font-weight: 800; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif;">${blog.title}</h3>
                        <p style="color: #5a6b5a; font-size: 0.8rem; margin-bottom: 0.5rem;">${blog.category} • ${blog.date || new Date().toISOString().split('T')[0]}</p>
                        <p style="color: #6b7280; font-size: 0.8rem; line-height: 1.4; margin-bottom: 1rem;">${blog.excerpt || blog.content.substring(0, 100)}...</p>
                        <div style="display: flex; gap: 0.5rem; justify-content: flex-end;">
                            <button class="btn-edit" onclick="editBlog(${blog.id})">Edit</button>
                            <button class="btn-danger" onclick="confirmDeleteBlog(${blog.id})">Delete</button>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        // Open create modal
        function openCreateModal() {
            document.getElementById('modalTitle').textContent = 'Create New Blog';
            document.getElementById('blogForm').reset();
            document.getElementById('blogId').value = '';
            document.getElementById('blogModal').classList.add('active');
        }

        // Edit blog
        function editBlog(id) {
            const blog = blogs.find(b => b.id === id);
            if (blog) {
                document.getElementById('modalTitle').textContent = 'Edit Blog';
                document.getElementById('blogId').value = blog.id;
                document.getElementById('blogTitle').value = blog.title;
                document.getElementById('blogCategory').value = blog.category;
                document.getElementById('blogImage').value = blog.image || '';
                document.getElementById('blogExcerpt').value = blog.excerpt || '';
                document.getElementById('blogContent').value = blog.content;
                document.getElementById('blogStatus').value = blog.status;
                document.getElementById('blogModal').classList.add('active');
            }
        }

        // Confirm delete
        function confirmDeleteBlog(id) {
            deleteId = id;
            document.getElementById('deleteModal').classList.add('active');
        }

        // Delete blog
        function deleteBlog() {
            if (deleteId) {
                blogs = blogs.filter(b => b.id !== deleteId);
                saveBlogs();
                renderBlogs();
                updateStats();
                closeDeleteModal();
                deleteId = null;
            }
        }

        // Save blog (Create or Update)
        function saveBlog(event) {
            event.preventDefault();
            
            const id = document.getElementById('blogId').value;
            const title = document.getElementById('blogTitle').value;
            const category = document.getElementById('blogCategory').value;
            const image = document.getElementById('blogImage').value;
            const excerpt = document.getElementById('blogExcerpt').value;
            const content = document.getElementById('blogContent').value;
            const status = document.getElementById('blogStatus').value;
            
            if (!title || !category || !content) {
                alert('Please fill in required fields');
                return;
            }
            
            if (id) {
                // Update existing
                const index = blogs.findIndex(b => b.id == id);
                if (index !== -1) {
                    blogs[index] = {
                        ...blogs[index],
                        title,
                        category,
                        image,
                        excerpt,
                        content,
                        status,
                        updatedAt: new Date().toISOString()
                    };
                }
            } else {
                // Create new
                blogs.unshift({
                    id: nextId++,
                    title,
                    category,
                    image,
                    excerpt,
                    content,
                    status,
                    views: 0,
                    date: new Date().toISOString().split('T')[0],
                    createdAt: new Date().toISOString()
                });
            }
            
            saveBlogs();
            renderBlogs();
            updateStats();
            closeModal();
        }

        // Close modals
        function closeModal() {
            document.getElementById('blogModal').classList.remove('active');
            document.getElementById('blogForm').reset();
        }
        
        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.remove('active');
        }

        // Event Listeners
        document.getElementById('openCreateModal').addEventListener('click', openCreateModal);
        document.getElementById('closeModal').addEventListener('click', closeModal);
        document.getElementById('cancelModal').addEventListener('click', closeModal);
        document.getElementById('cancelDelete').addEventListener('click', closeDeleteModal);
        document.getElementById('confirmDelete').addEventListener('click', deleteBlog);
        document.getElementById('blogForm').addEventListener('submit', saveBlog);
        document.getElementById('filterStatus').addEventListener('change', renderBlogs);
        document.getElementById('searchBlog').addEventListener('input', renderBlogs);
        
        // Close modal on outside click
        window.addEventListener('click', (e) => {
            if (e.target === document.getElementById('blogModal')) closeModal();
            if (e.target === document.getElementById('deleteModal')) closeDeleteModal();
        });
        
        // Initialize
        loadBlogs();
    </script>
</body>

</html>