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

        /* File upload styling */
        .file-upload-area {
            border: 2px dashed #e2e8e2;
            background: #f8fafc;
            padding: 1.5rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .file-upload-area:hover {
            border-color: #1a7a4a;
            background: #f0fdf4;
        }

        .file-upload-area.drag-over {
            border-color: #1a7a4a;
            background: #dcfce7;
        }

        #imagePreview {
            margin-top: 1rem;
            position: relative;
            display: inline-block;
        }

        #previewImg {
            max-width: 100%;
            max-height: 250px;
            object-fit: cover;
            border: 1px solid #e2e8e2;
        }

        .remove-image-btn {
            position: absolute;
            top: -10px;
            right: -10px;
            background: #dc2626;
            color: white;
            border: none;
            width: 28px;
            height: 28px;
            border-radius: 50% !important;
            cursor: pointer;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .remove-image-btn:hover {
            background: #b91c1c;
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
                    <form id="createBlogForm" action="{{ route('add-blogs') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <!-- Title -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">TITLE *</label>
                            <input type="text" id="title" name="title" class="form-input" placeholder="Enter blog title" value="{{ old('title') }}" required>
                            @error('title')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Slug -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">SLUG *</label>
                            <input type="text" id="slug" name="slug" class="form-input" placeholder="enter-blog-title-here" value="{{ old('slug') }}" required>
                            <p style="font-size: 0.7rem; color: #9ca3af; margin-top: 0.35rem;">URL-friendly version of the title (auto-generated)</p>
                            @error('slug')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Category -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">CATEGORY *</label>
                            <select id="category" name="category" class="form-input" required>
                                <option value="">Select a category</option>
                                <option value="Business" {{ old('category') == 'Business' ? 'selected' : '' }}>Business</option>
                                <option value="Finance" {{ old('category') == 'Finance' ? 'selected' : '' }}>Finance</option>
                                <option value="Loans" {{ old('category') == 'Loans' ? 'selected' : '' }}>Loans</option>
                                <option value="SBA" {{ old('category') == 'SBA' ? 'selected' : '' }}>SBA</option>
                                <option value="Tips" {{ old('category') == 'Tips' ? 'selected' : '' }}>Tips & Advice</option>
                            </select>
                            @error('category')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Image Upload -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">FEATURED IMAGE</label>
                            <div class="file-upload-area" id="fileUploadArea">
                                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="1.5" style="margin: 0 auto 0.5rem;">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                                    <polyline points="17 8 12 3 7 8"/>
                                    <line x1="12" y1="3" x2="12" y2="15"/>
                                </svg>
                                <p style="color: #64748b; font-size: 0.875rem;">Click or drag & drop to upload image</p>
                                <p style="color: #94a3b8; font-size: 0.7rem; margin-top: 0.25rem;">Supports: JPG, PNG, GIF, WebP (Max 5MB)</p>
                                <input type="file" id="image" name="image" accept="image/*" style="display: none;">
                            </div>
                            
                            <!-- Image Preview -->
                            <div id="imagePreview" style="margin-top: 1rem; display: none; position: relative; display: inline-block;">
                                <img id="previewImg" src="" alt="Preview" style="max-width: 100%; max-height: 250px; object-fit: cover; border: 1px solid #e2e8e2;">
                                <button type="button" id="removeImageBtn" class="remove-image-btn">×</button>
                            </div>
                            @error('image')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Content -->
                        <div style="margin-bottom: 1.5rem;">
                            <label class="form-label">CONTENT *</label>
                            <textarea id="content" name="content" rows="12" class="form-input" placeholder="Write your blog content here..." required>{{ old('content') }}</textarea>
                            @error('content')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Buttons -->
                        <div style="display: flex; gap: 1rem; justify-content: flex-end; border-top: 1px solid #e2e8e2; padding-top: 1.5rem;">
                            <a  class="btn-secondary" style="text-decoration: none;">Cancel</a>
                            <button type="submit" class="btn-primary">Publish Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

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
            .replace(/[^\w\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-');
    }
    
    titleInput.addEventListener('input', function() {
        const generatedSlug = generateSlug(this.value);
        slugInput.value = generatedSlug;
    });
    
    // Image upload functionality
    const fileUploadArea = document.getElementById('fileUploadArea');
    const imageInput = document.getElementById('image');
    const imagePreview = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');
    const removeImageBtn = document.getElementById('removeImageBtn');
    
    // Click to upload
    fileUploadArea.addEventListener('click', function() {
        imageInput.click();
    });
    
    // Handle file selection
    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            validateAndPreview(file);
        }
    });
    
    // Drag and drop functionality
    fileUploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        fileUploadArea.classList.add('drag-over');
    });
    
    fileUploadArea.addEventListener('dragleave', function(e) {
        e.preventDefault();
        fileUploadArea.classList.remove('drag-over');
    });
    
    fileUploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        fileUploadArea.classList.remove('drag-over');
        
        const file = e.dataTransfer.files[0];
        if (file && file.type.startsWith('image/')) {
            validateAndPreview(file);
            imageInput.files = e.dataTransfer.files;
        } else {
            alert('Please drop an image file (JPG, PNG, GIF, WebP)');
        }
    });
    
    // Validate and preview image
    function validateAndPreview(file) {
        // Validate file type
        const allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
        if (!allowedTypes.includes(file.type)) {
            alert('Invalid file type. Please upload JPG, PNG, GIF, or WebP images only.');
            return;
        }
        
        // Validate file size (max 5MB)
        const maxSize = 5 * 1024 * 1024;
        if (file.size > maxSize) {
            alert('File is too large. Maximum size is 5MB.');
            return;
        }
        
        // Preview image
        const reader = new FileReader();
        reader.onload = function(e) {
            previewImg.src = e.target.result;
            imagePreview.style.display = 'inline-block';
            fileUploadArea.style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
    
    // Remove image
    removeImageBtn.addEventListener('click', function() {
        imageInput.value = '';
        imagePreview.style.display = 'none';
        fileUploadArea.style.display = 'block';
        previewImg.src = '';
    });
    
    // Form validation before submit
    const form = document.getElementById('createBlogForm');
    
    form.addEventListener('submit', function(e) {
        const title = document.getElementById('title').value;
        const slug = document.getElementById('slug').value;
        const category = document.getElementById('category').value;
        const content = document.getElementById('content').value;
        
        if (!title || !slug || !category || !content) {
            e.preventDefault();
            alert('Please fill in all required fields (*)');
            return false;
        }
    });
</script>

</body>
</html>