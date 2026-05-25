<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Login — BizCashAndCapital | Access Your Account</title>
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
            padding: 0.875rem 1.75rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            width: 100%;
            justify-content: center;
        }

        .btn-primary:hover {
            background: #0f5a38;
            transform: translateY(-2px);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid #1a7a4a;
            color: #1a7a4a;
            padding: 0.75rem 1.5rem;
            font-weight: 600;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            width: 100%;
            justify-content: center;
        }

        .btn-outline:hover {
            background: #1a7a4a;
            color: white;
        }

        input {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 1px solid #e2e8e2;
            background: white;
            font-family: inherit;
            font-size: 0.875rem;
            outline: none;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #1a7a4a;
            box-shadow: 0 0 0 3px rgba(26, 122, 74, 0.1);
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            padding-left: 2.5rem;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .btn-primary, .btn-outline {
                padding: 0.7rem 1.25rem;
                font-size: 0.8rem;
            }
            
            h1 {
                font-size: 1.8rem !important;
            }
        }

        @media (max-width: 640px) {
            section {
                padding: 2rem 0 !important;
            }
        }
    </style>
</head>

<body>

    <!-- Login Section -->
    <section style="min-height: calc(100vh - 80px); display: flex; align-items: center; justify-content: center; padding: 6rem 1.5rem 4rem 1.5rem; background: linear-gradient(135deg, #f5f7f5 0%, #eef2ee 100%); position: relative; overflow: hidden;">
        <!-- Background Decorative Elements -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 40%, #1a7a4a 2px, transparent 2px); background-size: 50px 50px; pointer-events: none;"></div>
        <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(26,122,74,0.05) 0%, transparent 70%); pointer-events: none;"></div>
        <div style="position: absolute; bottom: -100px; left: -100px; width: 280px; height: 280px; background: radial-gradient(circle, rgba(200,232,106,0.05) 0%, transparent 70%); pointer-events: none;"></div>

        <div style="max-width: 480px; width: 100%; margin: 0 auto;">
            <!-- Logo/Brand -->
            <div style="text-align: center; margin-bottom: 2rem;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #1a7a4a10, #c8e86a10); padding: 0.35rem 1rem; margin-bottom: 1.5rem; border: 1px solid #1a7a4a20;">
                    <span style="width: 6px; height: 6px; background: #1a7a4a; display: inline-block; animation: pulse 2s infinite;"></span>
                    <span style="font-size: 0.65rem; font-weight: 700; color: #1a7a4a; letter-spacing: 0.08em;">WELCOME BACK</span>
                </div>
                <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: #111a13; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif;">Sign in to admin dashboard</h1>
                <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
                <p style="color: #5a6b5a; font-size: 0.875rem; margin-top: 1rem;">Access your dashboard to manage loans and track applications</p>
            </div>

            <!-- Login Form Card -->
            <div style="background: white; border: 1px solid #e2e8e2; padding: 2rem; box-shadow: 0 20px 35px -12px rgba(0,0,0,0.08);">
                <form id="loginForm" style="display: flex; flex-direction: column; gap: 1.25rem;">
                    <!-- Email Field -->
                    <div>
                        <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Email Address</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <input type="email" placeholder="john@example.com" id="loginEmail">
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Password</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input type="password" placeholder="Enter your password" id="loginPassword">
                        </div>
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.8rem;">
                        <label style="display: flex; align-items: center; gap: 0.5rem; cursor: pointer;">
                            <input type="checkbox" style="width: 16px; height: 16px; margin: 0; cursor: pointer;">
                            <span style="color: #5a6b5a;">Remember me</span>
                        </label>
                        <a href="#" style="color: #1a7a4a; text-decoration: none; font-weight: 500; transition: color 0.3s;" onmouseover="this.style.color='#0f5a38'" onmouseout="this.style.color='#1a7a4a'">Forgot password?</a>
                    </div>

                    <!-- Login Button -->
                    <button type="submit" class="btn-primary" style="margin-top: 0.5rem;">
                        Sign In →
                    </button>
                </form>
            </div>

            <!-- Security Note -->
            <div style="text-align: center; margin-top: 1.5rem;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#9ca3af" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                    <p style="color: #9ca3af; font-size: 0.7rem;">Your information is secure and encrypted</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Login Form Submission
        document.getElementById('loginForm')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('loginEmail')?.value;
            const password = document.getElementById('loginPassword')?.value;
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            
            // Simple validation
            if (!email || !password) {
                alert('Please enter both email and password');
                return;
            }
            
            btn.innerHTML = 'Signing in...';
            btn.disabled = true;
            
            // Simulate login API call
            setTimeout(() => {
                btn.innerHTML = '✓ Success!';
                btn.style.background = '#0f5a38';
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = '#1a7a4a';
                    btn.disabled = false;
                    // Redirect to dashboard or home page
                    // window.location.href = '/dashboard';
                }, 2000);
            }, 1500);
        });
        
        // Google Login Simulation
        document.getElementById('googleLogin')?.addEventListener('click', function(e) {
            const btn = this;
            const originalText = btn.innerHTML;
            btn.innerHTML = 'Redirecting...';
            btn.disabled = true;
            
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                // window.location.href = '/auth/google';
                alert('Google login would redirect here');
            }, 1500);
        });
        
        // Demo credentials hint (remove in production)
        console.log('Demo credentials: demo@bizcashandcapital.com / password123');
    </script>
</body>

</html>