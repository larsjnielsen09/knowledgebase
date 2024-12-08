<?php
// Make sure links are available
if (!isset($footerLinks)) {
    include 'config/links.php';
}
?>
<footer>
    <div class="footer-content">
        <?php foreach ($footerLinks as $section): ?>
            <div class="footer-section">
                <h3><?php echo $section['title']; ?></h3>
                <ul class="footer-links">
                    <?php foreach ($section['links'] as $link): ?>
                        <li>
                            <a href="<?php echo $link['url']; ?>">
                                <?php echo $link['title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</footer>
</body>
</html>
