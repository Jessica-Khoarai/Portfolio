<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portia Jessica Khoarai - Cybersecurity Analyst</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            transition: background-color 0.3s, color 0.3s;
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
        .full-height {
            min-height: 100vh;
        }
    </style>
</head>
<body class="bg-pink-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100 full-height">
    <div class="container mx-auto p-6 w-full">
        <header class="navbar flex justify-between items-center py-4 flex-wrap">
            <h1 class="text-3xl font-bold">Portia Jessica Khoarai</h1>
            <nav>
                <ul class="flex space-x-6 text-lg">
                    <li><a href="#" class="hover:text-pink-500">Home</a></li>
                    <li><a href="about.php" class="hover:text-pink-500">About Me</a></li>
                    <li><a href="documents.php" class="hover:text-pink-500">Documents</a></li>
                    <li><a href="projects.php" class="hover:text-pink-500">Projects</a></li>
                    <li><a href="contact.php" class="hover:text-pink-500">Contact</a></li>
                </ul>
            </nav>
            <div class="dark-mode-toggle" onclick="toggleDarkMode()"></div>
        </header>
        
        <section class="flex flex-col md:flex-row items-center mt-8 text-center md:text-left">
            <div class="w-full md:w-1/2">
                <h2 class="text-4xl font-bold">Hello, I'm <span id="typed"></span></h2>
                <p class="mt-4 text-lg text-gray-700 dark:text-gray-300">An aspiring cybersecurity analyst passionate about protecting data and networks.</p>
                <div class="mt-6 space-x-4">
                    <a href="data entry resume.pdf" class="bg-pink-500 text-white px-6 py-2 rounded-md hover:bg-pink-700"><i class='bx bx-file'></i> View Resume</a>
                    <a href="#" class="bg-purple-500 text-white px-6 py-2 rounded-md hover:bg-purple-700"><i class='bx bx-briefcase'></i> Projects</a>
                </div>
            </div>
            <div class="w-full md:w-1/2 flex justify-center mt-6 md:mt-0">
                <img src="whitedress.jpg" alt="Portia Jessica Khoarai" class="rounded-full w-80 h-80 shadow-lg object-cover">
            </div>
        </section>
    </div>
    
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
        var typed = new Typed("#typed", {
            strings: ["a Securirty and Network Engineering student", "a Data Protection Advocate", "a CyberSecurity Enthusiast"],
            typeSpeed: 50,
            backSpeed: 30,
            loop: true
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
