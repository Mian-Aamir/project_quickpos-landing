<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS – Point of Sale System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>

<!-- ===== HEADER SECTION ===== -->
<header class="header">
    <div class="container">
        <div class="header-inner">

            <!-- Logo -->
            <div class="logo
                <i class="fas fa-cash-register"></i>
                <span>QuickPOS</span>
            </div>

            <!-- Navigation -->
            <nav class="navbar">
                <a href="#hero">Home</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </nav>

            <!-- Sign Up Button -->
            <a href="#contact" class="btn-signup">Sign Up Free</a>

        </div>
    </div>
</header>
<!-- ===== END HEADER ===== -->

<!-- ===== HERO SECTION ===== -->
<section class="hero" id="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Run Your Business<br><span>Smarter & Faster</span></h1>
            <p>QuickPOS is the all-in-one point of sale system that helps you manage sales, inventory, and customers — all in real time.</p>
            <a href="#contact" class="btn-cta">Get Started Free</a>
        </div>
        <div class="hero-image">
            <i class="fas fa-laptop"></i>
        </div>
    </div>
</section>
<!-- ===== END HERO ===== -->

<!-- ===== FEATURES SECTION ===== -->
<section class="features" id="features">
    <div class="container">
        <h2 class="section-title">Why Choose QuickPOS?</h2>
        <p class="section-sub">Everything you need to run your business smoothly</p>
        <div class="features-grid">

            <div class="feature-card">
                <i class="fas fa-bolt"></i>
                <h3>Lightning Fast</h3>
                <p>Process transactions in seconds with our optimized POS engine.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-chart-line"></i>
                <h3>Real-Time Analytics</h3>
                <p>Track sales, revenue and inventory with live dashboards.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-mobile-alt"></i>
                <h3>Works Everywhere</h3>
                <p>Use on any device — desktop, tablet, or mobile phone.</p>
            </div>

            <div class="feature-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Secure & Reliable</h3>
                <p>Bank-level security keeps your data safe 24/7.</p>
            </div>

        </div>
    </div>
</section>
<!-- ===== END FEATURES ===== -->

<!-- ===== PRICING SECTION ===== -->
<section class="pricing" id="pricing">
    <div class="container">
        <h2 class="section-title">Simple Pricing</h2>
        <p class="section-sub">Choose the plan that works best for your business</p>
        <div class="pricing-grid">

            <!-- Basic Plan -->
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">$9<span>/mo</span></div>
                <ul>
                    <li><i class="fas fa-check"></i> 1 Register</li>
                    <li><i class="fas fa-check"></i> Basic Reports</li>
                    <li><i class="fas fa-check"></i> Email Support</li>
                    <li><i class="fas fa-check"></i> 100 Products</li>
                </ul>
                <a href="#contact" class="btn-plan">Get Started</a>
            </div>

            <!-- Pro Plan -->
            <div class="pricing-card popular">
                <div class="badge">Most Popular</div>
                <h3>Pro</h3>
                <div class="price">$29<span>/mo</span></div>
                <ul>
                    <li><i class="fas fa-check"></i> 5 Registers</li>
                    <li><i class="fas fa-check"></i> Advanced Reports</li>
                    <li><i class="fas fa-check"></i> Priority Support</li>
                    <li><i class="fas fa-check"></i> Unlimited Products</li>
                </ul>
                <a href="#contact" class="btn-plan">Get Started</a>
            </div>

            <!-- Enterprise Plan -->
            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">$99<span>/mo</span></div>
                <ul>
                    <li><i class="fas fa-check"></i> Unlimited Registers</li>
                    <li><i class="fas fa-check"></i> Custom Reports</li>
                    <li><i class="fas fa-check"></i> 24/7 Support</li>
                    <li><i class="fas fa-check"></i> Custom Integration</li>
                </ul>
                <a href="#contact" class="btn-plan">Get Started</a>
            </div>

        </div>
    </div>
</section>
<!-- ===== END PRICING ===== -->

<!-- ===== CONTACT SECTION ===== -->
<section class="contact" id="contact">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p class="section-sub">Have questions? We'd love to hear from you!</p>

        <div class="contact-form-wrapper">
            <form action="thankyou.php" method="POST">

                <?php
                $name_err = $email_err = $message_err = "";
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["name"])) {
                        $name_err = "Name is required";
                    }
                    if (empty($_POST["email"])) {
                        $email_err = "Email is required";
                    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $email_err = "Invalid email format";
                    }
                    if (empty($_POST["message"])) {
                        $message_err = "Message is required";
                    }
                }
                ?>

                <!-- Name -->
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="text" name="name" placeholder="John Doe"
                        value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    <?php if($name_err): ?>
                        <span class="error"><?php echo $name_err; ?></span>
                    <?php endif; ?>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="john@example.com"
                        value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    <?php if($email_err): ?>
                        <span class="error"><?php echo $email_err; ?></span>
                    <?php endif; ?>
                </div>

                <!-- Message -->
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message" rows="5"
                        placeholder="Write your message here..."><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                    <?php if($message_err): ?>
                        <span class="error"><?php echo $message_err; ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="btn-submit">Send Message</button>

            </form>
        </div>
    </div>
</section>
<!-- ===== END CONTACT ===== -->

<!-- ===== FOOTER SECTION ===== -->
<footer class="footer">
    <div class="container">
        <div class="footer-inner">

            <!-- Logo -->
            <div class="footer-logo">
                <i class="fas fa-cash-register"></i>
                <span>QuickPOS</span>
                <p>The smartest POS system for modern businesses.</p>
            </div>

            <!-- Quick Links -->
            <div class="footer-links">
                <h4>Quick Links</h4>
                <a href="#hero">Home</a>
                <a href="#features">Features</a>
                <a href="#pricing">Pricing</a>
                <a href="#contact">Contact</a>
            </div>

            <!-- Social Links -->
            <div class="footer-social">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> QuickPOS. All rights reserved.</p>
        </div>

    </div>
</footer>
<!-- ===== END FOOTER ===== -->

</body>
</html>