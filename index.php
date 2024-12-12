<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>


<body style="margin: 0; height: 100vh; overflow: hidden; position: relative; background: black;">
    <style>
        @media screen and (max-width: 990px) {
            #change-nav {
                display: none;
            }
        }
    </style>
    <header id="change-nav" style="position: relative; z-index: 10;">
        <?php include 'include/header.php'; ?>
    </header>

    <canvas id="spaceCanvas" style="position: absolute; top: 0; left: 0;"></canvas>

    <!-- Main Section -->
    <main style="color: white;">
        <article class="container d-flex justify-content-center align-items-center" style="min-height: 81.3vh;">
            <section class="shadow-lg text-center hover-card" style="max-width: 900px; width: 100%;">
                <header class="bg-transparent py-4">
                    <figure class="text-center">
                        <img src="images/profile.jpg" alt="Image of Dristanta Silwal"
                            class="img-fluid rounded-circle mx-auto"
                            style="width: 250px; height: 250px; position: relative; z-index: 10;">
                        <figcaption>
                            <h3 class="mt-3">Dristanta Silwal</h3>
                            <p>Computer Science Student | Future Data Scientist | Web Developer</p>
                        </figcaption>
                    </figure>
                </header>

                <div class="d-flex justify-content-center mb-4">
                    <a href="about.php" class="btn btn-dark mx-2"
                        style="position: relative; z-index: 10;">
                        <i class="fab fa-houzz"></i> Click here to know more
                    </a>
                </div>

                <section class="p-4">
                    <p class="mb-4">
                        Passionate about data science, web development, and machine learning, I am a Computer Science
                        student continuously striving to bridge theory and practical applications.
                    </p>
                    <div class="d-flex justify-content-center mb-4">
                        <a href="https://www.linkedin.com/in/dristanta-silwal/" class="btn btn-primary mx-2"
                            target="_blank" style="position: relative; z-index: 10;">
                            <i class="fab fa-linkedin"></i> LinkedIn
                        </a>
                        <a href="https://github.com/dristanta-silwal" class="btn btn-dark mx-2" target="_blank"
                            style="position: relative; z-index: 10;">
                            <i class="fab fa-github"></i> GitHub
                        </a>
                    </div>

                </section>
            </section>
        </article>
    </main>

    <script>
        const canvas = document.getElementById('spaceCanvas');
        const ctx = canvas.getContext('2d');
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
        let mouseX = 0;
        let mouseY = 0;

        const stars = [];
        const bursts = [];

        // all stars
        function createStar() {
            const size = Math.random() * 3 + 1;
            return {
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: size,
                velocityX: Math.random() * 0.5 - 0.25,
                velocityY: Math.random() * 0.5 - 0.25,
                opacity: Math.random() * 0.5 + 0.5
            };
        }

        for (let i = 0; i < 150; i++) {
            stars.push(createStar());
        }

        function updateStarsWithParallax() {
            stars.forEach(star => {
                star.x += star.velocityX + mouseX * star.radius * 0.5;
                star.y += star.velocityY + mouseY * star.radius * 0.5;

                if (star.x < 0 || star.x > canvas.width) star.velocityX *= -1;
                if (star.y < 0 || star.y > canvas.height) star.velocityY *= -1;
            });
        }

        function drawStars() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            stars.forEach(star => {
                ctx.beginPath();
                ctx.arc(star.x, star.y, star.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${star.opacity})`;
                ctx.fill();
            });
        }

        function createBurst(x, y) {
            for (let i = 0; i < 30; i++) {
                bursts.push({
                    x: x,
                    y: y,
                    velocityX: Math.random() * 4 - 2,
                    velocityY: Math.random() * 4 - 2,
                    radius: Math.random() * 2 + 1,
                    opacity: 1
                });
            }
        }

        function updateBursts() {
            bursts.forEach((particle, index) => {
                particle.x += particle.velocityX;
                particle.y += particle.velocityY;
                particle.opacity -= 0.02;

                if (particle.opacity <= 0) {
                    bursts.splice(index, 1);
                }
            });
        }

        function drawBursts() {
            bursts.forEach(particle => {
                ctx.beginPath();
                ctx.arc(particle.x, particle.y, particle.radius, 0, Math.PI * 2);
                ctx.fillStyle = `rgba(255, 255, 255, ${particle.opacity})`;
                ctx.fill();
            });
        }


        canvas.addEventListener('mousemove', (e) => {
            stars.forEach(star => {
                mouseX = (e.clientX / canvas.width) - 0.5;
                mouseY = (e.clientY / canvas.height) - 0.5;
                const dx = star.x - e.clientX;
                const dy = star.y - e.clientY;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < 100) {
                    star.x += dx / 10;
                    star.y += dy / 10;
                }
            });
        });

        canvas.addEventListener('click', (e) => {
            createBurst(e.clientX, e.clientY);
        });

        function animate() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            updateStarsWithParallax();
            updateBursts();
            drawStars();
            drawBursts();
            requestAnimationFrame(animate);
        }

        animate();

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });
    </script>
</body>

</html>