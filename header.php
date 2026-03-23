<!-- header.php -->
<header>
    <div class="container">
        <div class="logo">
            <h1>Kisan Agro Chemicals</h1>
            <p class="tagline">Your Trusted Shop Since 1989</p>
        </div>
        <nav>
            <ul>
                <li><a href="index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a></li>
                <li><a href="contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a></li>
                <li><a href="gallery.php" class="<?= basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : '' ?>">Gallery</a></li>
            </ul>
        </nav>
    </div>
</header>