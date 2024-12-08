<?php 
// header('Content-Type: text/html; charset=utf-8');
include 'includes/header.php'; 
include 'config/links.php';
?>

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
        <?php foreach ($quickLinks as $key => $link): ?>
            <a href="<?php echo $link['url']; ?>" class="quick-link-card">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <?php echo $link['icon']; ?>
                </svg>
                <h3><?php echo $link['title']; ?></h3>
                <p><?php echo $link['description']; ?></p>
            </a>
        <?php endforeach; ?>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
<script src="assets/js/script.js"></script>
