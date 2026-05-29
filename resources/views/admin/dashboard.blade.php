<!-- resources/views/admin/dashboard.blade.php -->
@extends('layouts.admin')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<style>
    @keyframes pulse {
        0%, 100% { opacity: 1; transform: scale(1); }
        50% { opacity: 0.5; transform: scale(0.95); }
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
</style>

<!-- Dashboard Header Section -->
<section style="padding: 2rem 2rem 1rem 2rem; background: linear-gradient(135deg, #1a7a4a, #0f5a38); position: relative;">
    <div style="position: absolute; inset: 0; background-image: radial-gradient(circle at 25% 40%, #c8e86a 1px, transparent 1px); background-size: 40px 40px; opacity: 0.1;"></div>
    <div style="max-width: 1280px; margin: 0 auto; position: relative; z-index: 2;">
        <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(255,255,255,0.15); padding: 0.35rem 1rem; margin-bottom: 1rem; border-radius: 40px !important;">
            <span style="width: 6px; height: 6px; background: #c8e86a; display: inline-block; animation: pulse 2s infinite; border-radius: 50% !important;"></span>
            <span style="font-size: 0.65rem; font-weight: 700; color: white;">DASHBOARD</span>
        </div>
        <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: white; font-family: 'Space Grotesk', sans-serif;">Welcome back, {{ Auth::user()->name ?? 'Admin' }}</h1>
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
                    <h3 class="text-2xl font-extrabold text-green-primary">{{ $totalBlogs ?? 0 }}</h3>
                </div>
                <div class="icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </div>
            </div>
            <div class="stat-card">
                <div>
                    <p class="text-gray-500 text-xs">Published</p>
                    <h3 class="text-2xl font-extrabold text-green-primary">{{ $publishedBlogs ?? 0 }}</h3>
                </div>
                <div class="icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a">
                        <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
                        <polyline points="22 4 12 14.01 9 11.01"/>
                    </svg>
                </div>
            </div>
            <div class="stat-card">
                <div>
                    <p class="text-gray-500 text-xs">Pending Apps</p>
                    <h3 class="text-2xl font-extrabold text-green-primary">{{ $pendingApplications ?? 0 }}</h3>
                </div>
                <div class="icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
            </div>
            <div class="stat-card">
                <div>
                    <p class="text-gray-500 text-xs">Total Users</p>
                    <h3 class="text-2xl font-extrabold text-green-primary">{{ $totalUsers ?? 0 }}</h3>
                </div>
                <div class="icon-box">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a">
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
                <h2 class="text-xl font-bold font-grotesk">Recent Blog Posts</h2>
                <a href="{{ route('admin.blogs.index') }}" class="text-green-primary text-sm hover:underline">View All →</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr><th class="p-3 text-left">Title</th><th class="p-3 text-left">Status</th><th class="p-3 text-left">Date</th><th class="p-3 text-left">Views</th></tr>
                    </thead>
                    <tbody>
                        @forelse($recentBlogs ?? [] as $blog)
                        <tr class="border-b">
                            <td class="p-3">{{ $blog->title }}</td>
                            <td class="p-3"><span class="px-2 py-1 text-xs {{ $blog->status == 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">{{ ucfirst($blog->status) }}</span></td>
                            <td class="p-3">{{ $blog->created_at->format('M d, Y') }}</td>
                            <td class="p-3">{{ $blog->views ?? 0 }}</td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="p-6 text-center text-gray-500">No blog posts yet. <a href="{{ route('admin.blogs.create') }}" class="text-green-primary">Create your first blog</a></td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Applications Section -->
        <div class="bg-white p-6 border border-gray-200">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold font-grotesk">Recent Loan Applications</h2>
                <a href="{{ route('admin.applications') }}" class="text-green-primary text-sm hover:underline">View All →</a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead class="bg-gray-50">
                        <tr><th class="p-3 text-left">Name</th><th class="p-3 text-left">Loan Type</th><th class="p-3 text-left">Amount</th><th class="p-3 text-left">Status</th><th class="p-3 text-left">Date</th></tr>
                    </thead>
                    <tbody>
                        @forelse($recentApplications ?? [] as $application)
                        <tr class="border-b">
                            <td class="p-3">{{ $application->name }}</td>
                            <td class="p-3">{{ $application->loan_type }}</td>
                            <td class="p-3">${{ number_format($application->amount, 2) }}</td>
                            <td class="p-3"><span class="px-2 py-1 text-xs bg-yellow-100 text-yellow-700">Pending</span></td>
                            <td class="p-3">{{ $application->created_at->format('M d, Y') }}</td>
                        </tr>
                        @empty
                        <tr><td colspan="5" class="p-6 text-center text-gray-500">No pending applications.</td></tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection