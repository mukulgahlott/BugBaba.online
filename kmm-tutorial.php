<?php
session_start();
$isDarkMode = isset($_SESSION['darkMode']) ? $_SESSION['darkMode'] : true;

// Define tutorial topics
$topics = [
    'jetpack-compose' => 'Jetpack Compose in KMM',
    'setup' => 'Setting Up KMM Project',
    'shared-code' => 'Shared Code Architecture',
    'networking' => 'Networking in KMM',
    'database' => 'Database Integration',
    'state-management' => 'State Management',
    'testing' => 'Testing in KMM',
    'deployment' => 'Deployment Process'
];

// Get current topic or default to jetpack-compose
$currentTopic = $_GET['topic'] ?? 'jetpack-compose';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMM Tutorial - Baba Ji Kmm Vale</title>
    <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/style.css?v=2">
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

    <div class="tutorial-container">
        <aside class="tutorial-sidebar">
            <div class="sidebar-header">
                <h3>KMM Topics</h3>
                <button class="mobile-sidebar-toggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <nav class="topic-nav">
                <?php foreach ($topics as $topicKey => $topicName): ?>
                    <a href="?topic=<?php echo $topicKey; ?>" 
                       class="topic-link <?php echo $currentTopic === $topicKey ? 'active' : ''; ?>">
                        <?php echo $topicName; ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        </aside>

        <main class="tutorial-content">
            <?php if ($currentTopic === 'jetpack-compose'): ?>
                <article class="topic-content">
                    <h1 class="gradient-text">Jetpack Compose in KMM</h1>
                    <div class="content-section">
                        <h2>What is Jetpack Compose?</h2>
                        <p>Jetpack Compose is Android's modern toolkit for building native UI. It simplifies and accelerates UI development on Android. When combined with KMM (Kotlin Multiplatform Mobile), it provides a powerful way to share UI logic across platforms while maintaining native UI implementations.</p>
                    </div>
                    
                    <div class="content-section">
                        <h2>Key Features</h2>
                        <ul class="feature-list">
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Declarative UI Design</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Real-time Preview</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Kotlin-first API</span>
                            </li>
                            <li>
                                <i class="fas fa-check"></i>
                                <span>Compatible with existing UI toolkit</span>
                            </li>
                        </ul>
                    </div>

                    <div class="content-section">
                        <h2>Code Example</h2>
                        <div class="code-block">
                            <pre><code>@Composable
fun Greeting(name: String) {
    Text(text = "Hello $name!")
}

@Preview
@Composable
fun PreviewGreeting() {
    Greeting("Android")
}</code></pre>
                        </div>
                    </div>
                </article>
            <?php endif; ?>
            <!-- Add more topic content sections here -->
        </main>
    </div>

    <script>
        document.querySelector('.mobile-sidebar-toggle').addEventListener('click', function() {
            document.querySelector('.tutorial-sidebar').classList.toggle('active');
        });
    </script>
</body>
</html> 