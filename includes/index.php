<?php 
// header('Content-Type: text/html; charset=utf-8');
include 'includes/header.php'; ?>

<main>
    <section class="hero">
        <div class="animated-bg">
            <div class="animated-shape" style="width: 300px; height: 300px; top: -150px; left: -150px;"></div>
            <div class="animated-shape" style="width: 200px; height: 200px; top: 50%; right: -100px;"></div>
            <div class="animated-shape" style="width: 150px; height: 150px; bottom: -75px; left: 50%;"></div>
        </div>
        
        <div class="hero-content">
            <h1>Your Ultimate Resource Center</h1>
            <p>Find answers, learn new skills, and get the support you need - all in one place.</p>
            
            <div class="search-container">
                <input type="text" class="search-box" placeholder="Search for tutorials, documentation, or support...">
            </div>
            
            <div class="hero-buttons">
                <a href="/get-started" class="btn btn-primary">Get Started</a>
                <a href="/browse-topics" class="btn btn-secondary">Browse Topics</a>
            </div>
        </div>
    </section>

    <section class="quick-links">
        <a href="/documentation" class="quick-link-card">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
            </svg>
            <h3>Documentation</h3>
            <p>Browse our detailed product documentation</p>
        </a>

        <a href="/tutorials" class="quick-link-card">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            <h3>Tutorials</h3>
            <p>Learn with step-by-step guides</p>
        </a>

        <a href="/support" class="quick-link-card">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
            <h3>Support</h3>
            <p>Get help from our support team</p>
        </a>

        <a href="/community" class="quick-link-card">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
            <h3>Community</h3>
            <p>Join our community forums</p>
        </a>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<script src="/script.js"></script>
