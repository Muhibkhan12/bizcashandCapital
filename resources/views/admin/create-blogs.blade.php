<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Create Blog | BizCashAndCapital</title>
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

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        .form-label {
            display: block;
            font-size: 0.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #2d3e2d;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: #1a7a4a;
            color: white;
            padding: 0.75rem 1.5rem;
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

        .btn-secondary {
            background: transparent;
            border: 1px solid #cbd5e1;
            color: #475569;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-secondary:hover {
            background: #f1f5f9;
        }

        /* Main layout - space for sidebar */
        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .sidebar-placeholder {
            width: 280px;
            flex-shrink: 0;
            background: #0a0f0d;
            min-height: 100vh;
        }

        .main-content-area {
            flex: 1;
            min-height: 100vh;
        }

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
                    <span style="font-size: 0.65rem; font-weight: 700; color: white; letter-spacing: 0.08em;">CREATE BLOG</span>
                </div>
                <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: white; font-family: 'Space Grotesk', sans-serif;">Create New Blog Post</h1>
                <div style="width: 60px; height: 3px; background: linear-gradient(90deg, #c8e86a, white); margin: 0.75rem 0;"></div>
                <p style="color: rgba(255,255,255,0.85); font-size: 0.875rem;">Fill in the details below to publish a new blog post</p>
            </div>
        </section>

        <!-- Create Blog Form -->
        <main style="padding: 2rem;">
            <div style="max-width: 900px; margin: 0 auto;">
                <div style="background: white; border: 1px solid #e2e8e2; padding: 2rem;">
                    <form id="createBlogForm">
                        <!-- Title -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">TITLE *</label>
                            <input type="text" id="title" name="title" class="form-input" placeholder="Enter blog title" required>
                        </div>

                        <!-- Slug -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">SLUG *</label>
                            <input type="text" id="slug" name="slug" class="form-input" placeholder="enter-blog-title-here" required>
                            <p style="font-size: 0.7rem; color: #9ca3af; margin-top: 0.35rem;">URL-friendly version of the title (auto-generated)</p>
                        </div>

                        <!-- Category -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">CATEGORY *</label>
                            <select id="category" name="category" class="form-input" required>
                                <option value="">Select a category</option>
                                <option value="Business">Business</option>
                                <option value="Finance">Finance</option>
                                <option value="Loans">Loans</option>
                                <option value="SBA">SBA</option>
                                <option value="Tips">Tips & Advice</option>
                            </select>
                        </div>

                        <!-- Image URL -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">FEATURED IMAGE URL</label>
                            <input type="url" id="image" name="image" class="form-input" placeholder="https://images.unsplash.com/...">
                            <p style="font-size: 0.7rem; color: #9ca3af; margin-top: 0.35rem;">Enter a valid image URL (optional)</p>
                        </div>

                        <!-- Image Preview -->
                        <div id="imagePreview" style="margin-bottom: 1.5rem; display: none;">
                            <img id="previewImg" src="" alt="Preview" style="max-width: 100%; height: auto; max-height: 200px; border: 1px solid #e2e8e2;">
                        </div>

                        <!-- Content -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">CONTENT *</label>
                            <textarea id="content" name="content" rows="10" class="form-input" placeholder="Write your blog content here..." required></textarea>
                        </div>

                        <!-- Buttons -->
                        <div style="display: flex; gap: 1rem; justify-content: flex-end; border-top: 1px solid #e2e8e2; padding-top: 1.5rem;">
                            <button type="button" id="cancelBtn" class="btn-secondary">Cancel</button>
                            <button type="submit" class="btn-primary">Publish Blog</button>
                        </div>
                    </form>
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
    // Auto-generate slug from title
    const titleInput = document.getElementById('title');
    const slugInput = document.getElementById('slug');
    
    function generateSlug(text) {
        return text
            .toLowerCase()
            .trim()
            .replace(/[^\w\s-]/g, '')  // Remove special characters
            .replace(/\s+/g, '-')       // Replace spaces with hyphens
            .replace(/-+/g, '-');       // Remove multiple hyphens
    }
    
    titleInput.addEventListener('input', function() {
        const generatedSlug = generateSlug(this.value);
        slugInput.value = generatedSlug;
    });
    
    // Image preview
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');
    
    imageInput.addEventListener('input', function() {
        const url = this.value;
        if (url && (url.startsWith('http://') || url.startsWith('https://'))) {
            previewImg.src = url;
            imagePreview.style.display = 'block';
        } else {
            imagePreview.style.display = 'none';
        }
    });
    
    // Form submission
    const form = document.getElementById('createBlogForm');
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const title = document.getElementById('title').value;
        const slug = document.getElementById('slug').value;
        const category = document.getElementById('category').value;
        const image = document.getElementById('image').value;
        const content = document.getElementById('content').value;
        
        // Validation
        if (!title || !slug || !category || !content) {
            alert('Please fill in all required fields (*)');
            return;
        }
        
        // Create blog object
        const blogData = {
            title: title,
            slug: slug,
            category: category,
            image: image || 'https://via.placeholder.com/800x400?text=No+Image',
            content: content,
            date: new Date().toISOString().split('T')[0],
            status: 'published'
        };
        
        console.log('Blog Data:', blogData);
        
        // Here you would normally send this to your backend
        // Example fetch request (uncomment when backend is ready):
        /*
        fetch('/api/admin/blogs', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(blogData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Blog created successfully!');
                window.location.href = '/admin/blogs';
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('An error occurred while creating the blog.');
        });
        */
        
        // For demo purposes - show success message
        alert('Blog created successfully!\n\nTitle: ' + title + '\nSlug: ' + slug + '\nCategory: ' + category);
        
        // Optionally reset form
        // form.reset();
        // imagePreview.style.display = 'none';
    });
    
    // Cancel button
    const cancelBtn = document.getElementById('cancelBtn');
    cancelBtn.addEventListener('click', function() {
        if (confirm('Are you sure you want to cancel? All unsaved changes will be lost.')) {
            form.reset();
            imagePreview.style.display = 'none';
        }
    });
</script>

</body>
</html>