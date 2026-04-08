<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#003d82">
    <meta name="description" content="UCC IT Department - Progressive Web App">
    <title>@yield('title', 'UCC IT') - Progressive Web App</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Apple -->
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="UCC IT">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        :root {
            --primary-color: #003d82;
            --secondary-color: #f39200;
            --accent-color: #00a3e0;
            --text-dark: #333;
            --text-light: #666;
            --bg-light: #f5f5f5;
            --white: #ffffff;
        }
        
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: var(--text-dark);
            background-color: var(--bg-light);
        }
        
        header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 1rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .header-content {
            display: flex;
            flex-direction: column;
        }
        
        header h1 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .home-page {
            padding: 4rem 1rem 10rem;
        }

        .home-hero {
            margin-bottom: 4rem;
        }

        .home-feature-grid {
            gap: 2.5rem;
            margin-bottom: 4rem;
        }

        .home-card {
            padding: 1.5rem;
        }

        .home-card-title {
            margin-bottom: 1.25rem;
        }

        .home-card-copy {
            margin-bottom: 1.5rem;
        }

        .home-stats {
            margin-top: 5rem;
            padding: 2.5rem;
        }

        .home-stats-grid {
            gap: 2rem;
        }

        .home-footer-bar {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            padding: 0.75rem;
            margin: -0.75rem;
            border-radius: 4px;
            transition: background-color 0.2s ease;
        }
        
        .hamburger:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        .hamburger.active {
            background-color: rgba(255, 255, 255, 0.2);
        }
        
        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: var(--white);
            margin: 3px 0;
            transition: 0.3s;
        }
        
        nav {
            display: flex;
            gap: 1rem;
            margin: 1rem 0 0 0;
            flex-wrap: wrap;
        }
        
        nav a {
            color: var(--white);
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            transition: background-color 0.3s ease;
            font-size: 0.9rem;
        }
        
        nav a:hover,
        nav a.active {
            background-color: var(--secondary-color);
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 2000;
            animation: fadeIn 0.3s ease-in-out;
        }

        .modal.show {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: var(--white);
            border-radius: 12px;
            width: 90%;
            max-width: 350px;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            animation: slideIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        .modal-header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 1.5rem;
            border-radius: 12px 12px 0 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.1rem;
            font-weight: 600;
        }
        
        .modal-close {
            font-size: 1.8rem;
            cursor: pointer;
            padding: 0.25rem;
            line-height: 1;
            color: var(--white);
            transition: opacity 0.2s ease;
        }
        
        .modal-close:hover {
            opacity: 0.8;
        }
        
        .modal-nav {
            padding: 0;
        }
        
        .modal-nav a {
            display: block;
            padding: 1.2rem 1.5rem;
            color: var(--text-dark);
            text-decoration: none;
            border-bottom: 1px solid #e5e5e5;
            transition: all 0.2s ease;
            font-size: 1rem;
            font-weight: 500;
        }
        
        .modal-nav a:last-child {
            border-bottom: none;
        }
        
        .modal-nav a:hover,
        .modal-nav a.active {
            background-color: var(--bg-light);
            color: var(--primary-color);
            padding-left: 2rem;
        }
        
        main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
            min-height: calc(100vh - 200px);
        }
        
        .container {
            background-color: var(--white);
            border-radius: 8px;
            padding: 2rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        
        footer {
            background-color: var(--primary-color);
            color: var(--white);
            text-align: center;
            padding: 2rem 1rem;
            margin-top: 2rem;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: var(--accent-color);
            color: var(--white);
            text-decoration: none;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 1rem;
        }
        
        .btn:hover {
            background-color: var(--primary-color);
        }
        
        .fab {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: var(--secondary-color);
            color: var(--white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: background-color 0.3s ease;
            z-index: 50;
            text-decoration: none;
        }
        
        .fab:hover {
            background-color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.25rem;
            }
            
            .hamburger {
                display: flex;
            }
            
            nav {
                display: none;
            }
            
            main {
                padding: 1rem 0.5rem;
            }
            
            .container {
                border-radius: 0;
                padding: 1rem;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <header>
        <div class="header-content">
            <h1>🎓 UCC IT Department</h1>
            <nav>
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
                <a href="{{ route('directory.index') }}" class="{{ request()->is('directory*') ? 'active' : '' }}">Directory</a>
                <a href="{{ route('courses.index') }}" class="{{ request()->is('courses*') ? 'active' : '' }}">Courses</a>
                <a href="{{ route('admissions') }}" class="{{ request()->is('admissions*') ? 'active' : '' }}">Admissions</a>
                <a href="{{ route('social-media') }}" class="{{ request()->is('social-media*') ? 'active' : '' }}">Social Media</a>
            </nav>
        </div>
        <div class="hamburger" onclick="toggleModal()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>

    <!-- Mobile Navigation Modal -->
    <div id="navModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Navigation</h2>
                <span class="modal-close" onclick="toggleModal()">&times;</span>
            </div>
            <nav class="modal-nav">
                <a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}" onclick="toggleModal()">Home</a>
                <a href="{{ route('directory.index') }}" class="{{ request()->is('directory*') ? 'active' : '' }}" onclick="toggleModal()">Directory</a>
                <a href="{{ route('courses.index') }}" class="{{ request()->is('courses*') ? 'active' : '' }}" onclick="toggleModal()">Courses</a>
                <a href="{{ route('admissions') }}" class="{{ request()->is('admissions*') ? 'active' : '' }}" onclick="toggleModal()">Admissions</a>
                <a href="{{ route('social-media') }}" class="{{ request()->is('social-media*') ? 'active' : '' }}" onclick="toggleModal()">Social Media</a>
            </nav>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <!-- Email FAB -->
    <a href="mailto:hod@ucc.edu.jm?subject=UCC%20IT%20Inquiry" class="fab" title="Email HOD">✉️</a>

    <footer>
        <p>&copy; 2026 University of the Commonwealth Caribbean - Information Technology Department</p>
        <p style="font-size: 0.9rem; margin-top: 0.5rem;">Progressive Web App | Offline Capable</p>
    </footer>

    <!-- Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/service-worker.js')
                    .then(reg => console.log('Service Worker registered:', reg))
                    .catch(err => console.log('Service Worker registration failed:', err));
            });
        }
    </script>

    <!-- Modal JavaScript -->
    <script>
        function toggleModal() {
            const modal = document.getElementById('navModal');
            const hamburger = document.querySelector('.hamburger');

            modal.classList.toggle('show');
            hamburger.classList.toggle('active');
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('navModal');
            const hamburger = document.querySelector('.hamburger');

            if (event.target === modal) {
                modal.classList.remove('show');
                hamburger.classList.remove('active');
            }
        }

        // Close modal on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                const modal = document.getElementById('navModal');
                const hamburger = document.querySelector('.hamburger');

                modal.classList.remove('show');
                hamburger.classList.remove('active');
            }
        });

        // Close modal when clicking navigation links
        document.addEventListener('DOMContentLoaded', function() {
            const modalLinks = document.querySelectorAll('.modal-nav a');
            modalLinks.forEach(link => {
                link.addEventListener('click', function() {
                    document.getElementById('navModal').classList.remove('show');
                    document.querySelector('.hamburger').classList.remove('active');
                });
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html>
