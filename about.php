<?php
session_start();
$isDarkMode = isset($_SESSION['darkMode']) ? $_SESSION['darkMode'] : true;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - Baba Ji Kmm Vale</title>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
        <div class="about-container">
            <h2 class="gradient-text">About Baba Ji Kmm Vale</h2>
            <p>Your trusted source for Kotlin Multiplatform Mobile tutorials and resources.</p>
        </div>
    </main>
</body>
</html> 