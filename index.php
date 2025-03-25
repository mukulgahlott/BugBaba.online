<?php
session_start();
$isDarkMode = isset($_SESSION['darkMode']) ? $_SESSION['darkMode'] : true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baba Ji Kmm Vale</title>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css?v=2">
</head>
<body class="<?php echo $isDarkMode ? 'dark-mode' : ''; ?>">
    <nav class="navbar">
        <div class="nav-brand">BaBa Ji Kmm Vale</div>
        <div class="nav-links">
            <a href="index.php" class="nav-link">Home</a>
            <a href="about.php" class="nav-link">About</a>
            <a href="contact.php" class="nav-link">Contact</a>
        </div>
        <form action="toggle_theme.php" method="POST" style="display: inline;">
            <button type="submit" class="theme-toggle">
                <?php if ($isDarkMode): ?>
                    <i class="fas fa-sun"></i>
                <?php else: ?>
                    <i class="fas fa-moon"></i>
                <?php endif; ?>
            </button>
        </form>
    </nav>

    <main class="main-content">
        <div class="home-container">
            <h1 class="animated-title gradient-text">Welcome to Bug BaBa</h1>
            <div class="tutorial-grid">
                <a href="kmm-tutorial.php" class="tutorial-card">
                    <h2>KMM Tutorial</h2>
                    <p>Learn Kotlin Multiplatform Mobile development from scratch</p>
                </a>
                <div class="tutorial-card">
                    <h2>Android</h2>
                    <p>Android-specific KMM implementation guides</p>
                </div>
                <div class="tutorial-card">
                    <h2>iOS</h2>
                    <p>iOS-specific KMM implementation guides</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html> 