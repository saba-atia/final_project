@extends('welcome')
@section('title','Login')
@section('content')
<div class="auth-container">
    <!-- Particle JS Background -->
    <div id="particles-js"></div>
    
    <!-- Glassmorphism Card -->
    <div class="glass-card">
        <!-- Animated Logo -->
        <div class="logo-animation">
            <svg class="logo-circle" viewBox="0 0 100 100">
                <circle cx="50" cy="50" r="45" stroke="#4361ee" stroke-width="8" fill="none" stroke-dasharray="283" stroke-dashoffset="283">
                    <animate attributeName="stroke-dashoffset" from="283" to="0" dur="1.5s" fill="freeze" />
                </circle>
            </svg>
            <img src="assets/img/IMG/logo.png" alt="Smart Punch" class="logo-img">
        </div>
        
        <h2 class="auth-title">Welcome to <span>Smart Punch</span><span class="typing-cursor">|</span></h2>
        <p class="auth-subtitle">Secure Access Portal</p>
        <!-- Login Form -->
        <form class="auth-form" action="login-action.html" method="POST">
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" id="username" name="username" required autocomplete="off">
                <label for="username">Username</label>
                <span class="input-bar"></span>
            </div>
            
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
                <span class="input-bar"></span>
                <button type="button" class="toggle-pw" aria-label="Show password">
                    <i class="fas fa-eye"></i>
                </button>
            </div>
            
            <div class="form-options">
                <label class="custom-checkbox">
                    <input type="checkbox" name="remember">
                    <span class="checkmark"></span>
                    Remember me
                </label>
                <a href="#" class="forgot-pw">Forgot password?</a>
            </div>
            
            <button type="submit" class="auth-btn">
                <span>Login</span>
                <div class="btn-loader">
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                    <div class="loader-dot"></div>
                </div>
            </button>
        </form>
    </div>
</div>
@endsection

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

:root {
    --primary: #4361ee;
    --primary-light: #4cc9f0;
    --text: #2b2d42;
    --text-light: #8d99ae;
    --bg: #f8f9fa;
    --card-bg: rgba(255, 255, 255, 0.85);
    --border: rgba(0, 0, 0, 0.1);
    --shadow: 0 8px 32px rgba(31, 38, 135, 0.1);
    --glass-blur: blur(12px);
    --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
}

[data-theme="dark"] {
    --primary: #4cc9f0;
    --primary-light: #4895ef;
    --text: #f8f9fa;
    --text-light: #adb5bd;
    --bg: #121212;
    --card-bg: rgba(30, 30, 30, 0.85);
    --border: rgba(255, 255, 255, 0.1);
    --shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: var(--bg);
    color: var(--text);
    transition: var(--transition);
}

.auth-container {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    overflow: hidden;
}

#particles-js {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    z-index: 0;
}

.glass-card {
    width: 100%;
    max-width: 450px;
    padding: 2.5rem;
    background: var(--card-bg);
    backdrop-filter: var(--glass-blur);
    -webkit-backdrop-filter: var(--glass-blur);
    border-radius: 16px;
    box-shadow: var(--shadow);
    border: 1px solid var(--border);
    z-index: 1;
    transition: var(--transition);
    animation: fadeInUp 0.8s ease-out;
}

.logo-animation {
    position: relative;
    width: 80px;
    height: 80px;
    margin: 0 auto 1.5rem;
}

.logo-circle {
    position: absolute;
    width: 100%;
    height: 100%;
    transform: rotate(-90deg);
}

.logo-img {
    position: absolute;
    width: 60px;
    height: 60px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
}

.auth-title {
    text-align: center;
    margin-bottom: 0.5rem;
    font-size: 1.75rem;
    font-weight: 600;
    color: var(--text);
}

.typing-cursor {
    animation: blink 1s infinite;
    opacity: 1;
}

.auth-subtitle {
    text-align: center;
    color: var(--text-light);
    margin-bottom: 2rem;
    font-size: 0.9rem;
}

.auth-form {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.input-field {
    position: relative;
}

.input-field i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-light);
    transition: var(--transition);
}

.input-field input {
    width: 100%;
    padding: 1rem 1rem 1rem 2.75rem;
    background: transparent;
    border: none;
    border-bottom: 1px solid var(--border);
    color: var(--text);
    font-size: 0.95rem;
    transition: var(--transition);
}

.input-field input:focus {
    outline: none;
    border-bottom-color: var(--primary);
}

.input-field input:focus ~ i {
    color: var(--primary);
}

.input-field input:focus ~ label,
.input-field input:not(:placeholder-shown) ~ label {
    transform: translateY(-1.5rem) scale(0.85);
    color: var(--primary);
}

.input-field label {
    position: absolute;
    left: 2.75rem;
    top: 1rem;
    color: var(--text-light);
    pointer-events: none;
    transition: var(--transition);
    transform-origin: left center;
}

.input-bar {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 2px;
    background: var(--primary);
    transform: scaleX(0);
    transition: var(--transition);
    transform-origin: center;
}

.input-field input:focus ~ .input-bar {
    transform: scaleX(1);
}

.toggle-pw {
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    color: var(--text-light);
    cursor: pointer;
    transition: var(--transition);
}

.toggle-pw:hover {
    color: var(--primary);
}

.form-options {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.85rem;
}

.custom-checkbox {
    display: flex;
    align-items: center;
    cursor: pointer;
    color: var(--text-light);
    transition: var(--transition);
}

.custom-checkbox:hover {
    color: var(--text);
}

.custom-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

.checkmark {
    display: inline-block;
    width: 16px;
    height: 16px;
    margin-right: 8px;
    border: 1px solid var(--border);
    border-radius: 4px;
    position: relative;
    transition: var(--transition);
}

.custom-checkbox input:checked ~ .checkmark {
    background: var(--primary);
    border-color: var(--primary);
}

.checkmark:after {
    content: "";
    position: absolute;
    display: none;
    left: 5px;
    top: 2px;
    width: 4px;
    height: 8px;
    border: solid white;
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

.custom-checkbox input:checked ~ .checkmark:after {
    display: block;
}

.forgot-pw {
    color: var(--text-light);
    text-decoration: none;
    transition: var(--transition);
}

.forgot-pw:hover {
    color: var(--primary);
    text-decoration: underline;
}

.auth-btn {
    position: relative;
    padding: 1rem;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    overflow: hidden;
    transition: var(--transition);
    box-shadow: 0 4px 15px rgba(67, 97, 238, 0.2);
}

.auth-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
}

.auth-btn:active {
    transform: translateY(0);
}

.auth-btn span {
    position: relative;
    z-index: 1;
}

.btn-loader {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: none;
    align-items: center;
    justify-content: center;
    gap: 0.25rem;
    background: inherit;
    border-radius: inherit;
}

.loader-dot {
    width: 6px;
    height: 6px;
    background: white;
    border-radius: 50%;
    animation: bounce 1.4s infinite ease-in-out;
}

.loader-dot:nth-child(2) {
    animation-delay: 0.2s;
}

.loader-dot:nth-child(3) {
    animation-delay: 0.4s;
}

/* Animations */
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

@keyframes blink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0; }
}

@keyframes bounce {
    0%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-8px); }
}

/* Loading state */
.auth-form.loading .btn-loader {
    display: flex;
}

.auth-form.loading .auth-btn span {
    visibility: hidden;
}

/* Responsive */
@media (max-width: 576px) {
    .glass-card {
        padding: 1.5rem;
        margin: 1rem;
    }
}
</style>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Toggle password visibility
    const togglePw = document.querySelector('.toggle-pw');
    if (togglePw) {
        togglePw.addEventListener('click', function() {
            const pwInput = document.getElementById('password');
            const icon = this.querySelector('i');
            
            if (pwInput.type === 'password') {
                pwInput.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                pwInput.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        });
    }
    
    // Form submission loader
    const authForm = document.querySelector('.auth-form');
    if (authForm) {
        authForm.addEventListener('submit', function(e) {
            this.classList.add('loading');
            // Simulate loading for demo
            setTimeout(() => {
                this.classList.remove('loading');
            }, 3000);
        });
    }
    
    // Initialize particles.js
    if (typeof particlesJS !== 'undefined') {
        particlesJS('particles-js', {
            particles: {
                number: { value: 80, density: { enable: true, value_area: 800 } },
                color: { value: "#4361ee" },
                shape: { type: "circle" },
                opacity: { value: 0.5, random: true },
                size: { value: 3, random: true },
                line_linked: { enable: true, distance: 150, color: "#4361ee", opacity: 0.4, width: 1 },
                move: { enable: true, speed: 2, direction: "none", random: true, straight: false, out_mode: "out" }
            },
            interactivity: {
                detect_on: "canvas",
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" }
                }
            }
        });
    }
    
    // Typing animation
    const authTitle = document.querySelector('.auth-title');
    if (authTitle) {
        const originalText = authTitle.textContent.replace('|', '');
        let i = 0;
        
        authTitle.textContent = '';
        const typingCursor = document.createElement('span');
        typingCursor.className = 'typing-cursor';
        typingCursor.textContent = '|';
        authTitle.appendChild(typingCursor);
        
        function typeWriter() {
            if (i < originalText.length) {
                authTitle.insertBefore(document.createTextNode(originalText.charAt(i)), typingCursor);
                i++;
                setTimeout(typeWriter, 100);
            }
        }
        
        setTimeout(typeWriter, 800);
    }
});
</script>