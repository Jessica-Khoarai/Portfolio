<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Portia Jessica Khoarai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            transition: background-color 0.3s, color 0.3s;
        }
        .navbar {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            backdrop-filter: blur(10px);
            transition: background 0.3s ease-in-out, opacity 0.3s;
            
        }
        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.1);
        }
        .dark-mode-toggle {
            width: 40px;
            height: 20px;
            background-color: #ccc;
            border-radius: 10px;
            position: relative;
            cursor: pointer;
        }
        .dark-mode-toggle::before {
            content: '';
            position: absolute;
            width: 18px;
            height: 18px;
            background-color: white;
            border-radius: 50%;
            top: 1px;
            left: 2px;
            transition: 0.3s;
        }
        .dark .dark-mode-toggle::before {
            left: 20px;
            background-color: #333;
        }
        .about-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1000px;
            margin: auto;
            padding: 10px 10px;
        }
        .about-text {
            flex: 1;
            text-align: left;
        }
        .swiper {
    width: 280px;
    height: 420px;
}

.swiper-slide {
    display: flex;
    justify-content: center;
    align-items: center;
}

.swiper-slide img {
    border-radius: 12px;
    transition: transform 0.3s ease-in-out;
}

.swiper-slide:hover img {
    transform: scale(1.05);
}
        .skill-card {
            position: relative;
            cursor: pointer;
        }
        .skill-info {
            display: none;
            position: absolute;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 10;
            width: 200px;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
        }
        .skill-card:hover .skill-info, .skill-card:focus-within .skill-info {
            display: block;
        }
    </style>
</head>
<body class="bg-pink-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <header class="navbar flex justify-between items-center py-4 px-6">
        <h1 class="text-3xl font-bold">Portia Jessica Khoarai</h1>
        <nav>
            <ul class="flex space-x-6 text-lg">
                <li><a href="index.php" class="hover:text-pink-500">Home</a></li>
                <li><a href="about.php" class="hover:text-pink-500">About Me</a></li>
                <li><a href="documents.php" class="hover:text-pink-500">Documents</a></li>
                <li><a href="projects.php" class="hover:text-pink-500">Projects</a></li>
                <li><a href="contact.php" class="hover:text-pink-500">Contact</a></li>
            </ul>
        </nav>
        <div class="dark-mode-toggle" onclick="toggleDarkMode()"></div>
    </header>
    
    <section class="about-container mt-24">
        <div class="about-text ">
            <h2 class="text-4xl font-bold">Who Am I?</h2>
            <p class="text-lg mt-4">
                Hey there! I'm Portia, a dedicated and ambitious Computer Science graduate from Eduvos (2022-2024), currently advancing my expertise with an Honours degree in Security and Network Engineering. My journey in cybersecurity is driven by a deep passion for protecting digital assets, fortifying networks, and staying ahead of ever-evolving cyber threats. From ethical hacking to encryption and firewall configurations, I thrive on problem-solving and finding innovative ways to make the digital world a safer place.
            </p>
            
            <p class="text-lg mt-4">
                But my interests don't stop there! I also wear multiple hats as a tutor and a virtual assistant. I enjoy mentoring students, breaking down complex technical concepts into simpler ideas, and helping others develop essential technical skills. As a virtual assistant, I efficiently manage tasks, optimize workflows, and ensure productivity for individuals and businesses alike. My goal is to combine my technical expertise with practical problem-solving to create meaningful impact in every project I undertake.
            </p>
            
            <a href="contact.php" class="text-pink-600 font-bold mt-4 inline-block hover:underline">Get in Touch</a>
        </div>
        <div class="flex justify-center items-center mt-12">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="relative w-64 h-96 bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <img src="pic1.jpg" alt="Portia Jessica Khoarai" class="w-full h-full object-cover">
                            
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative w-64 h-96 bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <img src="blackdress.jpg" alt="Portia Casual" class="w-full h-full object-cover">
                            
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="relative w-64 h-96 bg-gray-800 rounded-lg shadow-lg overflow-hidden">
                            <img src="pic2.jpg" alt="Portia Professional" class="w-full h-full object-cover">
                            
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    
    <section class="mt-12 text-center">
        <h3 class="text-3xl font-bold">My Skills & Interests</h3>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-6 mt-6">
            <div class="relative p-4 bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition skill-card">
                <i class='bx bx-shield-quarter text-5xl text-pink-500'></i>
                <p class="mt-2 font-semibold">Cybersecurity</p>
                <div class="skill-info">Protecting systems from cyber threats and attacks.</div>
            </div>
            <div class="relative p-4 bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition skill-card">
                <i class='bx bx-network-chart text-5xl text-purple-500'></i>
                <p class="mt-2 font-semibold">Network Security</p>
                <div class="skill-info">Securing network infrastructure and communications.</div>
            </div>
            <div class="relative p-4 bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition skill-card">
                <i class='bx bx-code text-5xl text-blue-500'></i>
                <p class="mt-2 font-semibold">Programming</p>
                <div class="skill-info">Developing secure and efficient code.</div>
            </div>
            <div class="relative p-4 bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition skill-card">
                <i class='bx bx-lock text-5xl text-green-500'></i>
                <p class="mt-2 font-semibold">Data Protection</p>
                <div class="skill-info">Ensuring data confidentiality and integrity.</div>
            </div>
            <div class="relative p-4 bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition skill-card">
                <i class='bx bx-book text-5xl text-orange-500'></i>
                <p class="mt-2 font-semibold">Technical Writing</p>
            </div>
            <div class="relative p-4 bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg transform hover:scale-105 transition skill-card">
                <i class='bx bx-chalkboard text-5xl text-yellow-500'></i>
                <p class="mt-2 font-semibold">Tutoring</p>
            </div>
        </div>
    </section>
    
    <footer class="bg-pink-800 text-white mt-12 py-6">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left px-6">
            <div>
                <p class="text-lg font-semibold"><i class='bx bx-phone'></i> Call</p>
                <p>(+27) 69 540 3097</p>
            </div>
            <div class="mt-4 md:mt-0">
                <p class="text-lg font-semibold"><i class='bx bx-envelope'></i> Contact</p>
                <p>portiajessica54@gmail.com</p>
            </div>
            <div class="mt-4 md:mt-0">
                <p class="text-lg font-semibold"><i class='bx bx-share-alt'></i> Follow Me</p>
                <div class="flex space-x-4 mt-2">
                    <a href="https://www.instagram.com/jessicakhoarai/" class="text-white hover:text-pink-400 text-2xl"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.facebook.com/skinny.bae.3154" class="text-white hover:text-blue-400 text-2xl"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.linkedin.com/in/portia-jessica-khoarai/" class="text-white hover:text-blue-600 text-2xl"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
            <div class="mt-4 md:mt-0 text-center md:text-right">
                <p>© 2025 Portia Jessica Khoarai. <i class='bx bx-heart'></i></p>
            </div>
        </div>
    </footer>

    <script>
        
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true,
        },
        pagination: { el: ".swiper-pagination", clickable: true },
    });


        document.addEventListener("DOMContentLoaded", function() {
    const toggle = document.querySelector(".dark-mode-toggle");
    const body = document.body;

    // Load dark mode state
    if (localStorage.getItem("darkMode") === "true") {
        body.classList.add("dark");
    }

    // Toggle dark mode
    toggle.addEventListener("click", function() {
        body.classList.toggle("dark");
        localStorage.setItem("darkMode", body.classList.contains("dark"));
    });
});
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll("a:not(.navbar a)").forEach(link => {
        link.setAttribute("target", "_blank");
        link.setAttribute("rel", "noopener noreferrer"); // Security best practice
    });
});

    </script>
</body>
</html>
