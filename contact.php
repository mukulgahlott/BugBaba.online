<?php
session_start();
$isDarkMode = isset($_SESSION['darkMode']) ? $_SESSION['darkMode'] : true;

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';
    
    // Here you would typically send the email or save to database
    // For now, we'll just show a success message
    $message = 'Thank you for your message! We will get back to you soon.';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Baba Ji Kmm Vale</title>
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
        <div class="contact-container">
            <h2 class="gradient-text">Contact Us</h2>
            <?php if ($message): ?>
                <div class="alert alert-success"><?php echo htmlspecialchars($message); ?></div>
            <?php endif; ?>
            <form method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </main>
</body>
</html> 