<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Manage Blogs | BizCashAndCapital</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: #f5f7f5;
            color: #111a13;
        }

        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #e2ece2;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb {
            background: #1a7a4a;
            border-radius: 10px;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(0.95); }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }

        /* Main layout */
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

        /* Modern Table Styles */
        .blog-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
        }

        .blog-table th {
            text-align: left;
            padding: 1rem 1.25rem;
            background: #f8fafc;
            font-weight: 600;
            font-size: 0.75rem;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-bottom: 1px solid #e2e8e2;
        }

        .blog-table td {
            padding: 1rem 1.25rem;
            border-bottom: 1px solid #e2e8e2;
            vertical-align: middle;
            font-size: 0.875rem;
        }

        .blog-table tr {
            transition: all 0.2s ease;
        }

        .blog-table tr:hover {
            background: #f8fafc;
        }

        /* Modern Status Badges */
        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.375rem;
            padding: 0.25rem 0.75rem;
            font-size: 0.7rem;
            font-weight: 600;
            border-radius: 20px !important;
        }

        .status-published {
            background: #dcfce7;
            color: #166534;
        }

        .status-published::before {
            content: "";
            width: 6px;
            height: 6px;
            background: #22c55e;
            border-radius: 50% !important;
            display: inline-block;
        }

        .status-draft {
            background: #fef3c7;
            color: #92400e;
        }

        .status-draft::before {
            content: "";
            width: 6px;
            height: 6px;
            background: #f59e0b;
            border-radius: 50% !important;
            display: inline-block;
        }

        /* Modern Buttons */
        .btn-primary {
            background: #1a7a4a;
            color: white;
            padding: 0.6rem 1.25rem;
            font-weight: 600;
            font-size: 0.8rem;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            border-radius: 10px !important;
        }

        .btn-primary:hover {
            background: #0f5a38;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(26, 122, 74, 0.2);
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid #e2e8e2;
            color: #475569;
            padding: 0.6rem 1.25rem;
            font-weight: 500;
            font-size: 0.8rem;
            transition: all 0.2s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
            border-radius: 10px !important;
        }

        .btn-secondary:hover {
            background: #f8fafc;
            border-color: #cbd5e1;
        }

        .action-btn {
            padding: 0.35rem 1rem;
            font-size: 0.7rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            border: none;
            border-radius: 8px !important;
        }

        .btn-edit {
            background: #eff6ff;
            color: #3b82f6;
        }

        .btn-edit:hover {
            background: #dbeafe;
            transform: translateY(-1px);
        }

        .btn-delete {
            background: #fef2f2;
            color: #dc2626;
        }

        .btn-delete:hover {
            background: #fee2e2;
            transform: translateY(-1px);
        }

        /* Modern Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }

        .modal.active {
            display: flex;
            animation: fadeIn 0.2s ease;
        }

        .modal-content {
            background: white;
            max-width: 650px;
            width: 90%;
            max-height: 85vh;
            overflow-y: auto;
            border-radius: 20px !important;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        /* Image Preview Modal */
        .image-preview-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .image-preview-modal.active {
            display: flex;
            animation: fadeIn 0.2s ease;
        }

        .image-preview-modal img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
            border-radius: 8px;
            animation: zoomIn 0.2s ease;
        }

        .close-preview {
            position: absolute;
            top: 20px;
            right: 30px;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.2s;
            z-index: 2001;
        }

        .close-preview:hover {
            color: #c8e86a;
        }

        /* Form Styles */
        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            outline: none;
            border-radius: 12px !important;
        }

        .form-input:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        .form-label {
            display: block;
            font-size: 0.7rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #334155;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Category Badge */
        .category-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            font-size: 0.7rem;
            font-weight: 600;
            border-radius: 20px !important;
        }
        .category-badge.business { background: #e0f2fe; color: #0369a1; }
        .category-badge.finance { background: #e0e7ff; color: #4338ca; }
        .category-badge.loans { background: #fef3c7; color: #b45309; }
        .category-badge.sba { background: #dcfce7; color: #166534; }
        .category-badge.tips { background: #fce7f3; color: #be185d; }

        /* Image thumbnail - clickable */
        .blog-thumb {
            width: 48px;
            height: 48px;
            background: #f1f5f9;
            border-radius: 12px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        .blog-thumb:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .blog-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Pagination */
        .pagination-btn {
            padding: 0.5rem 0.875rem;
            border-radius: 10px !important;
            font-size: 0.8rem;
            font-weight: 500;
            transition: all 0.2s;
        }
        .pagination-btn.active {
            background: #1a7a4a;
            color: white;
        }
        .pagination-btn:not(.active) {
            background: white;
            border: 1px solid #e2e8e2;
            color: #475569;
        }
        .pagination-btn:not(.active):hover {
            background: #f8fafc;
            border-color: #cbd5e1;
        }

        /* Character counter */
        .char-counter {
            font-size: 0.65rem;
            margin-top: 0.35rem;
            text-align: right;
            color: #64748b;
        }
        .char-counter.near-limit { color: #eab308; }
        .char-counter.over-limit { color: #dc2626; }
    </style>
</head>
<body>

<div class="admin-wrapper">
    <div class="sidebar-placeholder">
        @include('admin.sidebar')
    </div>

    <div class="main-content-area">
        <!-- Modern Page Header -->
        <section class="relative overflow-hidden" style="padding: 2rem 2rem 1.5rem 2rem; background: linear-gradient(135deg, #1a7a4a, #0f5a38);">
            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px;"></div>
            <div class="relative z-10 max-w-7xl mx-auto">
                <div class="flex items-center gap-2 mb-3">
                    <span class="w-2 h-2 bg-[#c8e86a] rounded-full !rounded-full animate-pulse"></span>
                    <span class="text-[0.6rem] font-bold text-white/80 tracking-wider">MANAGE BLOGS</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-white font-['Space_Grotesk']">Manage Blogs</h1>
                <div class="w-16 h-0.5 bg-[#c8e86a] mt-3"></div>
                <p class="text-white/80 text-sm mt-3">View, edit, and delete your blog posts</p>
            </div>
        </section>

        <main class="p-6">
            <div class="max-w-7xl mx-auto">
                
                <!-- Header with Create Button -->
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <h2 class="text-lg font-bold text-gray-800">All Blog Posts</h2>
                        <p class="text-sm text-gray-500 mt-0.5">Manage your content from one place</p>
                    </div>
                    <a href="{{ route('create-blogs') }}" class="btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 5v14M5 12h14"/>
                        </svg>
                        Create New Blog
                    </a>
                </div>

                <!-- Modern Table -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="blog-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Meta Description</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($blogs as $data)
                                <tr>
                                    <td class="font-medium text-gray-700">{{ $data->id }}</td>
                                    <td>
                                        <div class="blog-thumb" onclick="openImagePreview('{{ asset('storage/' . $data->image) }}', '{{ $data->title }}')">
                                            @if($data->image)
                                                <img src="{{ asset('storage/' . $data->image) }}" alt="{{ $data->title }}">
                                            @else
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                                    <polyline points="22,6 12,13 2,6"/>
                                                </svg>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="font-semibold text-gray-800">{{ $data->title }}</div>
                                        <div class="text-xs text-gray-400 mt-0.5">{{ $data->slug }}</div>
                                    </td>
                                    <td>
                                        <span class="category-badge {{ strtolower($data->category) }}">
                                            {{ $data->category }}
                                        </span>
                                    </td>
                                    <td class="max-w-xs">
                                        <div class="text-sm text-gray-500 line-clamp-2">
                                            {{ Str::limit($data->meta_description ?? 'No meta description added', 80) }}
                                        </div>
                                    </td>
                                    <td class="text-sm text-gray-500">{{ $data->created_at->format('M d, Y') }}</td>
                                    <td>
                                        <div class="flex gap-2">
                                            <button class="action-btn btn-edit edit-blog-btn" data-id="{{ $data->id }}">Edit</button>
                                            <button class="action-btn btn-delete delete-blog-btn" data-id="{{ $data->id }}">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center py-12">
                                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#cbd5e1" stroke-width="1.5" class="mx-auto mb-4">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                            <polyline points="22,6 12,13 2,6"/>
                                        </svg>
                                        <p class="text-gray-400">No blogs found. Create your first blog!</p>
                                        <a href="{{ route('create-blogs') }}" class="inline-block mt-3 text-[#1a7a4a] font-medium hover:underline">+ Create New Blog</a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Modern Pagination -->
                @if(isset($blogs) && method_exists($blogs, 'links'))
                <div class="mt-6">
                    {{ $blogs->links() }}
                </div>
                @endif
            </div>
        </main>
    </div>
</div>

<!-- Image Preview Modal -->
<div id="imagePreviewModal" class="image-preview-modal" onclick="closeImagePreview()">
    <span class="close-preview" onclick="closeImagePreview()">&times;</span>
    <img id="previewImage" src="" alt="Preview">
</div>

<!-- Modern Edit Modal -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <div class="flex justify-between items-center p-5 border-b border-gray-100">
            <h2 class="text-xl font-bold font-['Space_Grotesk']">Edit Blog</h2>
            <button onclick="closeModal()" class="text-gray-400 hover:text-gray-600 text-2xl leading-none">&times;</button>
        </div>
        <form id="editBlogForm" method="POST" enctype="multipart/form-data" class="p-5">
            @csrf
            @method('PUT')
            <input type="hidden" id="edit_blog_id" name="blog_id">
            
            <div class="mb-4">
                <label class="form-label">Title *</label>
                <input type="text" id="edit_title" name="title" class="form-input" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Slug *</label>
                <input type="text" id="edit_slug" name="slug" class="form-input" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Category *</label>
                <select id="edit_category" name="category" class="form-input" required>
                    <option value="Business">Business</option>
                    <option value="Finance">Finance</option>
                    <option value="Loans">Loans</option>
                    <option value="SBA">SBA</option>
                    <option value="Tips">Tips & Advice</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="form-label">Featured Image</label>
                <input type="file" id="edit_image" name="image" class="form-input" accept="image/*">
                <div id="current_image_preview" class="mt-2"></div>
            </div>

            <div class="mb-4">
                <label class="form-label">Meta Description (SEO)</label>
                <textarea id="edit_meta_description" name="meta_description" rows="2" class="form-input" placeholder="Write a brief description for search engines (150-160 characters recommended)" maxlength="160"></textarea>
                <div id="editMetaCharCounter" class="char-counter">0 / 160 characters</div>
            </div>

            <div class="mb-4">
                <label class="form-label">Status</label>
                <select id="edit_status" name="status" class="form-input">
                    <option value="draft">Draft</option>
                    <option value="published">Published</option>
                </select>
            </div>

            <div class="mb-5">
                <label class="form-label">Content *</label>
                <textarea id="edit_content" name="content" rows="8" class="form-input" required></textarea>
            </div>

            <div class="flex gap-3 justify-end pt-3 border-t border-gray-100">
                <button type="button" onclick="closeModal()" class="btn-secondary">Cancel</button>
                <button type="submit" class="btn-primary">Update Blog</button>
            </div>
        </form>
    </div>
</div>

<!-- Modern Delete Modal -->
<div id="deleteModal" class="modal">
    <div class="modal-content" style="max-width: 400px;">
        <div class="text-center p-6">
            <div class="w-12 h-12 bg-red-100 rounded-full !rounded-full flex items-center justify-center mx-auto mb-4">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#dc2626" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="12"/>
                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
            </div>
            <h3 class="text-xl font-bold mb-2">Delete Blog</h3>
            <p class="text-gray-500 text-sm mb-6">Are you sure you want to delete this blog? This action cannot be undone.</p>
            <form id="deleteBlogForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex gap-3 justify-center">
                    <button type="button" onclick="closeDeleteModal()" class="btn-secondary">Cancel</button>
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-xl text-sm font-medium transition">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Image Preview Functionality
    function openImagePreview(imageUrl, imageTitle) {
        if (imageUrl && imageUrl !== '' && !imageUrl.includes('storage/blogs/') && imageUrl !== '#') {
            const modal = document.getElementById('imagePreviewModal');
            const previewImg = document.getElementById('previewImage');
            previewImg.src = imageUrl;
            previewImg.alt = imageTitle || 'Blog Image';
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        } else if (imageUrl && imageUrl.includes('storage/blogs/')) {
            const modal = document.getElementById('imagePreviewModal');
            const previewImg = document.getElementById('previewImage');
            previewImg.src = imageUrl;
            previewImg.alt = imageTitle || 'Blog Image';
            modal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeImagePreview() {
        const modal = document.getElementById('imagePreviewModal');
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }

    // Close image preview with Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeImagePreview();
            closeModal();
            closeDeleteModal();
        }
    });

    // Edit blog function with meta description
    function editBlog(id) {
        fetch(`/admin/blogs/${id}/edit`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('edit_blog_id').value = data.id;
                document.getElementById('edit_title').value = data.title;
                document.getElementById('edit_slug').value = data.slug;
                document.getElementById('edit_category').value = data.category;
                document.getElementById('edit_status').value = data.status || 'draft';
                document.getElementById('edit_content').value = data.content;
                document.getElementById('edit_meta_description').value = data.meta_description || '';
                
                const metaDesc = document.getElementById('edit_meta_description');
                const counter = document.getElementById('editMetaCharCounter');
                const length = (metaDesc.value || '').length;
                counter.textContent = length + ' / 160 characters';
                
                if (length > 160) counter.classList.add('over-limit');
                else if (length > 150) counter.classList.add('near-limit');
                else counter.classList.remove('near-limit', 'over-limit');
                
                if (data.image) {
                    document.getElementById('current_image_preview').innerHTML = `
                        <div class="flex items-center gap-3 p-2 bg-gray-50 rounded-xl">
                            <img src="/storage/blogs/${data.image}" class="w-12 h-12 rounded-lg object-cover cursor-pointer" onclick="openImagePreview('/storage/blogs/${data.image}', '${data.title}')">
                            <span class="text-xs text-gray-500">Current image (click to enlarge)</span>
                        </div>
                    `;
                } else {
                    document.getElementById('current_image_preview').innerHTML = '';
                }
                
                document.getElementById('editBlogForm').action = `/admin/blogs/${id}`;
                document.getElementById('editModal').classList.add('active');
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Error loading blog data');
            });
    }

    const editMetaDesc = document.getElementById('edit_meta_description');
    const editMetaCounter = document.getElementById('editMetaCharCounter');
    
    if (editMetaDesc && editMetaCounter) {
        editMetaDesc.addEventListener('input', function() {
            const length = this.value.length;
            editMetaCounter.textContent = length + ' / 160 characters';
            editMetaCounter.classList.remove('near-limit', 'over-limit');
            if (length > 160) editMetaCounter.classList.add('over-limit');
            else if (length > 150) editMetaCounter.classList.add('near-limit');
        });
    }

    let deleteId = null;
    
    function confirmDelete(id) {
        deleteId = id;
        document.getElementById('deleteBlogForm').action = `/admin/blogs/${id}`;
        document.getElementById('deleteModal').classList.add('active');
    }
    
    function closeDeleteModal() {
        document.getElementById('deleteModal').classList.remove('active');
        deleteId = null;
    }
    
    function closeModal() {
        document.getElementById('editModal').classList.remove('active');
    }
    
    document.querySelectorAll('.edit-blog-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            editBlog(this.getAttribute('data-id'));
        });
    });
    
    document.querySelectorAll('.delete-blog-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            confirmDelete(this.getAttribute('data-id'));
        });
    });
    
    window.addEventListener('click', (e) => {
        if (e.target === document.getElementById('editModal')) closeModal();
        if (e.target === document.getElementById('deleteModal')) closeDeleteModal();
    });
</script>

</body>
</html>