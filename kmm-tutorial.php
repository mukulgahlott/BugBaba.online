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
	<link rel="stylesheet" href="/assets/css/style.css?v=5">
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
						<p>Jetpack Compose is Android's modern toolkit for building native UI. It simplifies and accelerates
							UI development on Android. When combined with KMM (Kotlin Multiplatform Mobile), it provides a
							powerful way to share UI logic across platforms while maintaining native UI implementations.</p>
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
							<pre><code><span class="annotation">@Composable</span>
															<span class="keyword">fun</span> <span class="function">Greeting</span>(<span class="type">name</span>: <span class="type">String</span>) {
																<span class="function">Text</span>(<span class="type">text</span> = <span class="string">"Hello $name!"</span>)
															}
															<span class="comment">// Shared Code</span>
															<span class="annotation">@Composable</span>
															<span class="keyword">expect fun</span> <span class="function">Greeting</span>(<span class="type">name</span>: <span class="type">String</span>) {
															}

															<span class="comment">// Android Specific</span>
															<span class="annotation">@Composable</span>
															<span class="keyword">actual fun</span> <span class="function">PreviewGreeting</span>() {
																<span class="function">Greeting</span>(<span class="string">"Android"</span>)
															}

															<span class="comment">// iOS Specific</span>
															<span class="annotation">@Composable</span>
															<span class="keyword">actual fun</span> <span class="function">PreviewGreeting</span>() {
																<span class="function">Greeting</span>(<span class="string">"iOS"</span>)
															}</code></pre>
						</div>
					</div>
				</article>
			<?php elseif ($currentTopic === 'setup'): ?>
				<article class="topic-content">
					<h1 class="gradient-text">Setting Up KMM Project</h1>

					<div class="content-section">
						<h2>Create your Kotlin Multiplatform app</h2>
						<p class="last-modified">Last modified: 10 March 2025</p>
						<p>This is the first part of the Create a Kotlin Multiplatform app with shared logic and native UI
							tutorial.</p>

						<div class="tutorial-steps">
							<ol>
								<li>First step: Create your Kotlin Multiplatform app</li>
								<li>Second step: Update the user interface</li>
								<li>Third step: Add dependencies</li>
								<li>Fourth step: Share more logic</li>
								<li>Fifth step: Wrap up your project</li>
							</ol>
						</div>

						<p>Here you will learn how to create and run your first Kotlin Multiplatform application using
							Android Studio.</p>
						<p>Kotlin Multiplatform technology simplifies the development of cross-platform projects. Kotlin
							Multiplatform applications can work on a variety of platforms like iOS, Android, macOS, Windows,
							Linux, web, and others.</p>
						<p>One of the major Kotlin Multiplatform use cases is sharing code between mobile platforms. You can
							share application logic between iOS and Android apps and write platform-specific code only when
							you need to implement a native UI or work with platform APIs.</p>
					</div>

					<div class="content-section">
						<h2>Set up the environment</h2>
						<p>Check out the article about setting up an environment for Kotlin Multiplatform development, if
							you haven't already. Make sure that you have:</p>
						<ul>
							<li>Installed the Kotlin Multiplatform plugin for Android Studio.</li>
							<li>Launched Xcode at least once and accepted the terms of use if you plan to build iOS apps.
							</li>
							<li>Run Kdoctor to check for any issues in the setup.</li>
						</ul>
						<p>The following instructions assume that you have all software necessary for the platforms you're
							aiming at.</p>
					</div>

					<div class="content-section">
						<h2>Create the project with a wizard</h2>
						<ol>
							<li>Open the Kotlin Multiplatform wizard.</li>
							<li>On the New project tab, change the project name to "GreetingKMP" and the project ID to
								"com.jetbrains.greeting".</li>
							<li>Ensure that the Android and iOS options are selected.</li>
							<li>For iOS, select the Do not share UI option to keep the UI native.</li>
							<li>Click the Download button and unpack the resulting archive.</li>
						</ol>
						<div class="image-container">
							<img src="https://resources.jetbrains.com/help/img/kotlin-multiplatform-dev/multiplatform-web-wizard-1.png"
								alt="Kotlin Multiplatform wizard" class="half-width-image">
						</div>
					</div>

					<div class="content-section">
						<h2>Examine the project structure</h2>
						<p>Launch Android Studio.</p>
						<ol>
							<li>On the Welcome screen, click Open, or select File | Open in the editor.</li>
							<li>Navigate to the unpacked project folder and then click Open.</li>
							<li>Android Studio detects that the folder contains a Gradle build file and opens the folder as
								a new project.</li>
							<li>The default view in Android Studio is optimized for Android development. To see the full
								file structure of the project, which is more convenient for multiplatform development,
								switch the view from Android to Project.</li>
						</ol>
						<div class="image-container">
							<img src="https://resources.jetbrains.com/help/img/kotlin-multiplatform-dev/select-project-view.png"
								alt="Basic Multiplatform project structure" class="half-width-left-image">
						</div>
					</div>

					<div class="content-section">
						<h2>How KMM Works</h2>
						<div class="image-container">
							<img src="https://resources.jetbrains.com/help/img/kotlin-multiplatform-dev/modules-structure.png"
								alt="KMM workflow diagram" class="tutorial-image">
						</div>
						<p>Each Kotlin Multiplatform project includes three modules:</p>
						<ul>
							<li><strong>shared</strong> is a Kotlin module that contains the logic common for both Android
								and iOS applications – the code you share between platforms.</li>
							<li><strong>composeApp</strong> is a Kotlin module that builds into an Android application.</li>
							<li><strong>iosApp</strong> is an Xcode project that builds into an iOS application.</li>
						</ul>
					</div>

					<div class="content-section">
						<h2>Platform-Specific Implementations</h2>
						<div class="code-block">
							<pre><code><span class="comment">// Platform.kt in the commonMain module:</span>
															<span class="keyword">interface</span> <span class="type">Platform</span> {
																<span class="keyword">val</span> <span class="type">name</span>: <span class="type">String</span>
															}

															<span class="comment">// Platform.android.kt in the androidMain module:</span>
															<span class="keyword">class</span> <span class="type">AndroidPlatform</span>: <span class="type">Platform</span> {
																<span class="keyword">override val</span> <span class="type">name</span>: <span class="type">String</span> =
																	<span class="string">"Android ${android.os.Build.VERSION.SDK_INT}"</span>
															}

															<span class="comment">// Platform.ios.kt in the iosMain module:</span>
															<span class="keyword">class</span> <span class="type">IOSPlatform</span>: <span class="type">Platform</span> {
																<span class="keyword">override val</span> <span class="type">name</span>: <span class="type">String</span> =
																	UIDevice.currentDevice.systemName() + <span class="string">" "</span> + UIDevice.currentDevice.systemVersion
															}</code></pre>
						</div>
					</div>

					<div class="content-section">
						<h2>Running Your Application</h2>
						
						<h3>Run on Android</h3>
						<ol>
							<li>In the list of run configurations, select composeApp.</li>
							<li>Choose an Android virtual device next to the list of configurations and click Run.</li>
							<li>If you don't have a device in the list, create a new Android virtual device.</li>
						</ol>
						<div class="image-container">
							<img src="https://resources.jetbrains.com/help/img/kotlin-multiplatform-dev/first-multiplatform-project-on-android-1.png"
								alt="Android app screenshot" class="tutorial-image">
						</div>

						<h3>Run on iOS</h3>
						<ol>
							<li>Launch Xcode in a separate window.</li>
							<li>In Android Studio, select iosApp in the list of run configurations and click Run.</li>
							<li>If you don't have an available iOS configuration in the list, add a new run configuration.
							</li>
						</ol>

						<div class="image-container">
							<img src="https://resources.jetbrains.com/help/img/kotlin-multiplatform-dev/first-multiplatform-project-on-ios-1.png"
								alt="iOS app screenshot" class="tutorial-image">
						</div>
					</div>
		</div>
		</article>
	<?php endif; ?>
	<!-- Add more topic content sections here -->
	</main>
	</div>

	<script>
		document.querySelector('.mobile-sidebar-toggle').addEventListener('click', function () {
			document.querySelector('.tutorial-sidebar').classList.toggle('active');
		});
	</script>
</body>

</html>