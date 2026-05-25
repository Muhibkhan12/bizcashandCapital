<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
    <title>Change Password — BizCashAndCapital | Account Security</title>
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

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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

        input.error {
            border-color: #dc2626;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
        }

        .password-toggle {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #9ca3af;
            transition: color 0.3s ease;
            background: none;
            border: none;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .password-toggle:hover {
            color: #1a7a4a;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper input {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }

        .password-strength {
            height: 4px;
            background: #e2e8e2;
            margin-top: 0.5rem;
            transition: all 0.3s ease;
        }

        .password-strength-bar {
            height: 100%;
            width: 0%;
            transition: all 0.3s ease;
        }

        .strength-weak { background: #dc2626; width: 25%; }
        .strength-medium { background: #f59e0b; width: 50%; }
        .strength-strong { background: #10b981; width: 75%; }
        .strength-very-strong { background: #1a7a4a; width: 100%; }

        .toast {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: #1a7a4a;
            color: white;
            padding: 1rem 1.5rem;
            z-index: 1000;
            transform: translateX(400px);
            transition: transform 0.3s ease;
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.error {
            background: #dc2626;
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
    @include('header')

    <!-- Change Password Section -->
    <section style="min-height: calc(100vh - 80px); display: flex; align-items: center; justify-content: center; padding: 6rem 1.5rem 4rem 1.5rem; background: linear-gradient(135deg, #f5f7f5 0%, #eef2ee 100%); position: relative; overflow: hidden;">
        <!-- Background Decorative Elements -->
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0.03; background-image: radial-gradient(circle at 25% 40%, #1a7a4a 2px, transparent 2px); background-size: 50px 50px; pointer-events: none;"></div>
        <div style="position: absolute; top: -100px; right: -100px; width: 300px; height: 300px; background: radial-gradient(circle, rgba(26,122,74,0.05) 0%, transparent 70%); pointer-events: none;"></div>
        <div style="position: absolute; bottom: -100px; left: -100px; width: 280px; height: 280px; background: radial-gradient(circle, rgba(200,232,106,0.05) 0%, transparent 70%); pointer-events: none;"></div>

        <div style="max-width: 520px; width: 100%; margin: 0 auto;">
            <!-- Header -->
            <div style="text-align: center; margin-bottom: 2rem;">
                <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: linear-gradient(135deg, #1a7a4a10, #c8e86a10); padding: 0.35rem 1rem; margin-bottom: 1.5rem; border: 1px solid #1a7a4a20;">
                    <span style="width: 6px; height: 6px; background: #1a7a4a; display: inline-block; animation: pulse 2s infinite;"></span>
                    <span style="font-size: 0.65rem; font-weight: 700; color: #1a7a4a; letter-spacing: 0.08em;">SECURITY</span>
                </div>
                <h1 style="font-size: clamp(1.8rem, 5vw, 2.5rem); font-weight: 800; color: #111a13; margin-bottom: 0.5rem; font-family: 'Space Grotesk', sans-serif;">Change Password</h1>
                <div style="width: 50px; height: 3px; background: linear-gradient(90deg, #1a7a4a, #c8e86a); margin: 1rem auto;"></div>
                <p style="color: #5a6b5a; font-size: 0.875rem; margin-top: 1rem;">Keep your account secure with a strong password</p>
            </div>

            <!-- Change Password Form Card -->
            <div style="background: white; border: 1px solid #e2e8e2; padding: 2rem; box-shadow: 0 20px 35px -12px rgba(0,0,0,0.08); animation: fadeInUp 0.5s ease-out;">
                <form id="changePasswordForm" style="display: flex; flex-direction: column; gap: 1.25rem;">
                    <!-- Current Password -->
                    <div>
                        <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Current Password</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input type="password" id="currentPassword" placeholder="Enter current password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('currentPassword', this)">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        <div id="currentPasswordError" style="color: #dc2626; font-size: 0.7rem; margin-top: 0.25rem; display: none;"></div>
                    </div>

                    <!-- New Password -->
                    <div>
                        <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">New Password</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input type="password" id="newPassword" placeholder="Enter new password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('newPassword', this)">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Password Strength Indicator -->
                        <div class="password-strength">
                            <div class="password-strength-bar" id="strengthBar"></div>
                        </div>
                        <div id="passwordStrengthText" style="font-size: 0.7rem; margin-top: 0.25rem; color: #6b7280;"></div>
                        <div id="newPasswordError" style="color: #dc2626; font-size: 0.7rem; margin-top: 0.25rem; display: none;"></div>
                    </div>

                    <!-- Confirm New Password -->
                    <div>
                        <label style="display: block; font-size: 0.75rem; font-weight: 700; color: #1a2a1a; margin-bottom: 0.5rem;">Confirm New Password</label>
                        <div class="input-wrapper">
                            <svg class="input-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                            </svg>
                            <input type="password" id="confirmPassword" placeholder="Confirm new password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword', this)">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        <div id="confirmPasswordError" style="color: #dc2626; font-size: 0.7rem; margin-top: 0.25rem; display: none;"></div>
                    </div>

                    <!-- Password Requirements -->
                    <div style="background: #f8faf8; padding: 1rem; border: 1px solid #e2e8e2;">
                        <p style="font-size: 0.7rem; font-weight: 700; margin-bottom: 0.5rem; color: #1a2a1a;">Password Requirements:</p>
                        <div style="display: flex; flex-direction: column; gap: 0.25rem;">
                            <div id="reqLength" style="font-size: 0.7rem; color: #dc2626; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                At least 8 characters
                            </div>
                            <div id="reqUppercase" style="font-size: 0.7rem; color: #dc2626; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                At least one uppercase letter
                            </div>
                            <div id="reqLowercase" style="font-size: 0.7rem; color: #dc2626; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                At least one lowercase letter
                            </div>
                            <div id="reqNumber" style="font-size: 0.7rem; color: #dc2626; display: flex; align-items: center; gap: 0.5rem;">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
                                At least one number
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-primary" style="margin-top: 0.5rem;">
                        Update Password →
                    </button>
                </form>

                <!-- Back to Dashboard Link -->
                <div style="text-align: center; margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid #e2e8e2;">
                    <a href="/dashboard" style="color: #1a7a4a; text-decoration: none; font-size: 0.875rem; font-weight: 500; transition: color 0.3s;" onmouseover="this.style.color='#0f5a38'" onmouseout="this.style.color='#1a7a4a'">
                        ← Back to Dashboard
                    </a>
                </div>
            </div>

            <!-- Security Tips -->
            <div style="margin-top: 1.5rem; background: white; border: 1px solid #e2e8e2; padding: 1rem;">
                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#1a7a4a" stroke-width="2">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                    <h3 style="font-weight: 700; font-size: 0.85rem;">Security Tips</h3>
                </div>
                <ul style="list-style: none; font-size: 0.75rem; color: #5a6b5a; line-height: 1.6;">
                    <li>• Never share your password with anyone</li>
                    <li>• Use a unique password for this account</li>
                    <li>• Enable two-factor authentication if available</li>
                    <li>• Change your password every 90 days</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Toast Notification -->
    <div id="toast" class="toast">
        <span id="toastMessage"></span>
    </div>

    @include('footer')

    <script>
        // Toggle password visibility
        function togglePassword(inputId, button) {
            const input = document.getElementById(inputId);
            const svg = button.querySelector('svg');
            
            if (input.type === 'password') {
                input.type = 'text';
                // Change icon to "hide" version
                svg.innerHTML = '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/><path d="M1 1l22 22"/>';
            } else {
                input.type = 'password';
                // Change icon to "show" version
                svg.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
            }
        }

        // Password strength checker
        function checkPasswordStrength(password) {
            let strength = 0;
            if (password.length >= 8) strength++;
            if (password.match(/[A-Z]/)) strength++;
            if (password.match(/[a-z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            return strength;
        }

        function updatePasswordStrength(password) {
            const strength = checkPasswordStrength(password);
            const bar = document.getElementById('strengthBar');
            const text = document.getElementById('passwordStrengthText');
            
            bar.className = 'password-strength-bar';
            
            if (password.length === 0) {
                bar.style.width = '0%';
                text.textContent = '';
                return;
            }
            
            switch(strength) {
                case 1:
                    bar.classList.add('strength-weak');
                    text.textContent = 'Weak password';
                    text.style.color = '#dc2626';
                    break;
                case 2:
                    bar.classList.add('strength-medium');
                    text.textContent = 'Medium password';
                    text.style.color = '#f59e0b';
                    break;
                case 3:
                    bar.classList.add('strength-strong');
                    text.textContent = 'Strong password';
                    text.style.color = '#10b981';
                    break;
                case 4:
                    bar.classList.add('strength-very-strong');
                    text.textContent = 'Very strong password';
                    text.style.color = '#1a7a4a';
                    break;
            }
        }

        // Validate password requirements
        function validatePasswordRequirements(password) {
            const reqLength = document.getElementById('reqLength');
            const reqUppercase = document.getElementById('reqUppercase');
            const reqLowercase = document.getElementById('reqLowercase');
            const reqNumber = document.getElementById('reqNumber');
            
            const lengthValid = password.length >= 8;
            const uppercaseValid = /[A-Z]/.test(password);
            const lowercaseValid = /[a-z]/.test(password);
            const numberValid = /[0-9]/.test(password);
            
            reqLength.style.color = lengthValid ? '#10b981' : '#dc2626';
            reqUppercase.style.color = uppercaseValid ? '#10b981' : '#dc2626';
            reqLowercase.style.color = lowercaseValid ? '#10b981' : '#dc2626';
            reqNumber.style.color = numberValid ? '#10b981' : '#dc2626';
            
            if (lengthValid) {
                reqLength.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> At least 8 characters';
            } else {
                reqLength.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> At least 8 characters';
            }
            
            if (uppercaseValid) {
                reqUppercase.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> At least one uppercase letter';
            } else {
                reqUppercase.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> At least one uppercase letter';
            }
            
            if (lowercaseValid) {
                reqLowercase.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> At least one lowercase letter';
            } else {
                reqLowercase.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> At least one lowercase letter';
            }
            
            if (numberValid) {
                reqNumber.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> At least one number';
            } else {
                reqNumber.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> At least one number';
            }
            
            return lengthValid && uppercaseValid && lowercaseValid && numberValid;
        }

        // Show toast notification
        function showToast(message, isError = false) {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            toastMessage.textContent = message;
            toast.classList.add('show');
            if (isError) {
                toast.classList.add('error');
            } else {
                toast.classList.remove('error');
            }
            setTimeout(() => {
                toast.classList.remove('show');
            }, 3000);
        }

        // Real-time validation
        document.getElementById('newPassword').addEventListener('input', function(e) {
            updatePasswordStrength(e.target.value);
            validatePasswordRequirements(e.target.value);
            
            // Check if passwords match
            const confirm = document.getElementById('confirmPassword').value;
            const confirmError = document.getElementById('confirmPasswordError');
            if (confirm && e.target.value !== confirm) {
                confirmError.textContent = 'Passwords do not match';
                confirmError.style.display = 'block';
            } else if (confirm && e.target.value === confirm) {
                confirmError.style.display = 'none';
            }
        });

        document.getElementById('confirmPassword').addEventListener('input', function(e) {
            const newPassword = document.getElementById('newPassword').value;
            const confirmError = document.getElementById('confirmPasswordError');
            if (newPassword !== e.target.value) {
                confirmError.textContent = 'Passwords do not match';
                confirmError.style.display = 'block';
            } else {
                confirmError.style.display = 'none';
            }
        });

        // Form submission
        document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const currentPassword = document.getElementById('currentPassword').value;
            const newPassword = document.getElementById('newPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;
            
            // Reset errors
            document.getElementById('currentPasswordError').style.display = 'none';
            document.getElementById('newPasswordError').style.display = 'none';
            document.getElementById('confirmPasswordError').style.display = 'none';
            
            // Validate current password (simulate - in real app, check against DB)
            if (currentPassword !== 'password123') { // Demo validation
                document.getElementById('currentPasswordError').textContent = 'Current password is incorrect';
                document.getElementById('currentPasswordError').style.display = 'block';
                showToast('Current password is incorrect', true);
                return;
            }
            
            // Validate new password strength
            if (!validatePasswordRequirements(newPassword)) {
                document.getElementById('newPasswordError').textContent = 'Please meet all password requirements';
                document.getElementById('newPasswordError').style.display = 'block';
                showToast('Please meet all password requirements', true);
                return;
            }
            
            // Validate password match
            if (newPassword !== confirmPassword) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                document.getElementById('confirmPasswordError').style.display = 'block';
                showToast('Passwords do not match', true);
                return;
            }
            
            // Validate new password is different from current
            if (newPassword === currentPassword) {
                document.getElementById('newPasswordError').textContent = 'New password must be different from current password';
                document.getElementById('newPasswordError').style.display = 'block';
                showToast('New password must be different from current password', true);
                return;
            }
            
            // Simulate API call to change password
            const btn = this.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = 'Updating...';
            btn.disabled = true;
            
            setTimeout(() => {
                // In real app, send to backend
                // Store new password (demo - would be hashed in real app)
                localStorage.setItem('userPassword', newPassword);
                
                btn.innerHTML = '✓ Password Updated!';
                btn.style.background = '#0f5a38';
                
                showToast('Password changed successfully!');
                
                // Reset form
                document.getElementById('changePasswordForm').reset();
                document.getElementById('strengthBar').style.width = '0%';
                document.getElementById('passwordStrengthText').textContent = '';
                
                // Reset requirement indicators
                const requirements = ['reqLength', 'reqUppercase', 'reqLowercase', 'reqNumber'];
                requirements.forEach(req => {
                    const el = document.getElementById(req);
                    el.style.color = '#dc2626';
                    el.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg> ' + el.textContent;
                });
                
                // Reset password toggle icons to "show" state
                const allPasswordInputs = ['currentPassword', 'newPassword', 'confirmPassword'];
                allPasswordInputs.forEach(inputId => {
                    const input = document.getElementById(inputId);
                    if (input && input.type === 'text') {
                        input.type = 'password';
                        // Find the toggle button for this input
                        const wrapper = input.closest('.input-wrapper');
                        const toggleBtn = wrapper?.querySelector('.password-toggle');
                        if (toggleBtn) {
                            const svg = toggleBtn.querySelector('svg');
                            if (svg) {
                                svg.innerHTML = '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
                            }
                        }
                    }
                });
                
                setTimeout(() => {
                    btn.innerHTML = originalText;
                    btn.style.background = '#1a7a4a';
                    btn.disabled = false;
                    
                    // Redirect after success
                    // window.location.href = '/dashboard';
                }, 2000);
            }, 1500);
        });
    </script>
</body>

</html>