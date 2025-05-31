<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Qeyon Labs - Start with an Idea, unlock Innovation. Leading technology company specializing in innovative AI and software solutions.">
    <meta name="keywords" content="Qeyon Labs, Qeyon, innovation, technology, ideas, solutions">
    <meta property="og:title" content="Qeyon Labs - Start with an Idea, unlock Innovation">
    <meta property="og:description" content="Leading technology company specializing in innovative AI and software solutions">
    <title>Qeyon Labs - Start with an Idea, unlock Innovation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --dark-primary: #0D0D0D;
            --gray-medium: #9999A1;
            --light-gray: #E6E6E9;
            --accent-red: #F61115;
            --accent-purple: #C32AFF;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, var(--dark-primary) 0%, #1a1a1a 100%);
            color: var(--light-gray);
            overflow-x: hidden;
        }

        .hero-section {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            background: linear-gradient(135deg, var(--dark-primary) 0%, #1a1a1a 50%, var(--dark-primary) 100%);
        }

        .hero-content {
            text-align: center;
            z-index: 2;
            max-width: 800px;
            padding: 0 20px;
            animation: fadeInUp 1.2s ease-out;
        }

        .logo {
            font-size: 4rem;
            font-weight: 700;
            background: linear-gradient(45deg, var(--accent-red), var(--accent-purple));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            animation: glow 2s ease-in-out infinite alternate;
        }

        .tagline {
            font-size: 1.5rem;
            color: var(--gray-medium);
            margin-bottom: 3rem;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .cta-container {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 4rem;
        }

        .cta-button {
            padding: 15px 30px;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            position: relative;
            overflow: hidden;
        }

        .cta-primary {
            background: linear-gradient(45deg, var(--accent-red), var(--accent-purple));
            color: white;
            box-shadow: 0 10px 30px rgba(246, 17, 21, 0.3);
        }

        .cta-secondary {
            background: transparent;
            color: var(--light-gray);
            border: 2px solid var(--gray-medium);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(246, 17, 21, 0.4);
        }

        .cta-secondary:hover {
            border-color: var(--accent-purple);
            color: var(--accent-purple);
            box-shadow: 0 15px 40px rgba(195, 42, 255, 0.2);
        }

        .floating-elements {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
        }

        .floating-element {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--accent-purple);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .floating-element:nth-child(2n) {
            background: var(--accent-red);
            animation-delay: -2s;
        }

        .floating-element:nth-child(3n) {
            animation-delay: -4s;
        }

        .status-section {
            padding: 80px 20px;
            text-align: center;
            background: rgba(13, 13, 13, 0.8);
            backdrop-filter: blur(10px);
        }

        .status-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            max-width: 1000px;
            margin: 0 auto;
        }

        .status-card {
            background: linear-gradient(135deg, rgba(153, 153, 161, 0.1), rgba(195, 42, 255, 0.05));
            padding: 30px;
            border-radius: 20px;
            border: 1px solid rgba(153, 153, 161, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .status-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-purple);
            box-shadow: 0 20px 40px rgba(195, 42, 255, 0.1);
        }

        .status-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-red), var(--accent-purple));
        }

        .status-title {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
            color: var(--light-gray);
        }

        .status-description {
            color: var(--gray-medium);
            line-height: 1.6;
        }

        .footer {
            padding: 40px 20px;
            text-align: center;
            border-top: 1px solid rgba(153, 153, 161, 0.2);
            background: var(--dark-primary);
        }

        .footer-content {
            max-width: 600px;
            margin: 0 auto;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .social-link {
            width: 50px;
            height: 50px;
            background: linear-gradient(45deg, var(--accent-red), var(--accent-purple));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            transform: scale(1.1) rotate(10deg);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 20px rgba(246, 17, 21, 0.5);
            }
            to {
                text-shadow: 0 0 30px rgba(195, 42, 255, 0.8);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px) rotate(0deg);
                opacity: 0.7;
            }
            50% {
                transform: translateY(-100px) rotate(180deg);
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .logo {
                font-size: 3rem;
            }
            
            .tagline {
                font-size: 1.2rem;
            }
            
            .cta-container {
                flex-direction: column;
                align-items: center;
            }
            
            .cta-button {
                width: 250px;
            }
        }

        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="floating-elements">
            <div class="floating-element" style="left: 10%; top: 20%; animation-duration: 8s;"></div>
            <div class="floating-element" style="left: 80%; top: 30%; animation-duration: 6s;"></div>
            <div class="floating-element" style="left: 60%; top: 70%; animation-duration: 10s;"></div>
            <div class="floating-element" style="left: 20%; top: 80%; animation-duration: 7s;"></div>
            <div class="floating-element" style="left: 90%; top: 60%; animation-duration: 9s;"></div>
        </div>
        
        <div class="hero-content">
            <h1 class="logo pulse">Qeyon Labs</h1>
            <p class="tagline">Start with an Idea, unlock Innovation.</p>
            
            <div class="cta-container">
                <a href="#contact" class="cta-button cta-primary">Get Started</a>
                <a href="#about" class="cta-button cta-secondary">Learn More</a>
            </div>
        </div>
    </section>

    <section class="status-section" id="about">
        <div class="status-grid">
            <div class="status-card">
                <h3 class="status-title">🚧 Actively Building</h3>
                <p class="status-description">
                     Qeyon Labs is assembling a world-class team and developing smart digital products — from automations to full-stack SaaS tools.
                </p>
            </div>
            
            <div class="status-card">
                <h3 class="status-title">📈 Open to Investment</h3>
                <p class="status-description">
                    We’re currently seeking visionary investors and collaborators to help shape our early-stage growth and roadmap.
                </p>
            </div>
            
            <div class="status-card">
                <h3 class="status-title">👀 Something New Is Coming</h3>
                <p class="status-description">
                    Qeyon is evolving. Check back soon as we unveil innovative solutions built with professionalism, creativity, and purpose.
                </p>
            </div>
        </div>
    </section>

    <footer class="footer" id="contact">
        <div class="footer-content">
            <div class="social-links">
                <a href="mailto:info@qeyonlabs.com" class="social-link" title="Email">📧</a>
                <a href="#" class="social-link" title="LinkedIn">💼</a>
                <a href="#" class="social-link" title="Twitter">🐦</a>
                <a href="#" class="social-link" title="GitHub">⚡</a>
            </div>
            <p style="color: var(--gray-medium); margin-bottom: 10px;">
                Ready to unlock innovation? Reach out to us.
            </p>
            <p style="color: var(--gray-medium); font-size: 0.9rem;">
                © 2025 Qeyon Labs. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add more floating elements dynamically
        function createFloatingElement() {
            const element = document.createElement('div');
            element.className = 'floating-element';
            element.style.left = Math.random() * 100 + '%';
            element.style.top = Math.random() * 100 + '%';
            element.style.animationDuration = (Math.random() * 4 + 6) + 's';
            element.style.animationDelay = Math.random() * 2 + 's';
            
            document.querySelector('.floating-elements').appendChild(element);
            
            // Remove element after animation completes
            setTimeout(() => {
                element.remove();
            }, 12000);
        }

        // Create new floating elements periodically
        setInterval(createFloatingElement, 3000);

        // Add subtle parallax effect on scroll
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = scrolled * 0.5;
            
            document.querySelector('.floating-elements').style.transform = `translateY(${parallax}px)`;
        });

        // Add intersection observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeInUp 0.8s ease-out forwards';
                }
            });
        }, observerOptions);

        // Observe status cards
        document.querySelectorAll('.status-card').forEach(card => {
            observer.observe(card);
        });
    </script>
</body>
</html>