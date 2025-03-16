<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - Portia Jessica Khoarai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>

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
        @keyframes bounceArrow {
            0%, 100% { transform: translateX(0); }
            50% { transform: translateX(-10px); }
        }
        .arrow {
            animation: bounceArrow 1s infinite;
        }
    </style>
</head>
<body class="bg-pink-100 text-gray-900 dark:bg-gray-900 dark:text-gray-100">
    <header class="navbar fixed top-0 left-0 w-full backdrop-blur-md py-4 px-6 flex justify-between items-center">
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
    
    <section class="container mx-auto mt-24 px-6 flex flex-col md:flex-row items-center justify-between">
        <!-- Left Section: Animated Arrow & Download Links -->
        <div class="flex flex-col items-center md:w-1/2">
            <i class='bx bx-down-arrow-alt text-5xl arrow'></i>
            <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg flex flex-col items-center">
                <h3 class="text-2xl font-semibold mb-4">Download/View</h3>
                <a href="data entry resume.pdf" class="text-blue-500 hover:text-blue-700">Resume</a>
                <a href="coverletter.pdf" class="text-blue-500 hover:text-blue-700">Cover Letter</a>
                <a href="bid.pdf" class="text-blue-500 hover:text-blue-700">Bid Document</a>
            </div>
            <i class='bx bx-envelope text-6xl mt-4'></i>
        </div>

        <!-- Right Section: Request Form -->
        <div class="bg-pink-50 dark:bg-gray-800 p-6 rounded-lg shadow-lg md:w-1/2">
            <h3 class=" font-semibold mb-4 text-center">Request Additional Documents</h3>
            <form action="send_email.php" method="POST" class="flex flex-col space-y-4">
                <div class="mb-4">
                    <div class="flex items-center bg-white rounded-full px-4 py-2">
                     <i class="fas fa-user text-gray-400 mr-2">
                     </i>
                     <input class="bg-transparent outline-none w-full" placeholder="Full name" type="text"/>
                    </div>
                   </div>
                   <div class="mb-4">
                    <div class="flex items-center bg-white rounded-full px-4 py-2">
                     <i class="fas fa-envelope text-gray-400 mr-2">
                     </i>
                     <input class="bg-transparent outline-none w-full" placeholder="Email address" type="email"/>
                    </div>
                   </div>
                    <div class="mb-4">
                        <div class="flex items-center bg-white rounded-full px-4 py-2">
                            <i class="fas fa-file-alt text-gray-400 mr-2"></i>
                            <select name="document" required class="bg-transparent outline-none w-full">
                                <option value="">Select Document</option>
                                <option value="portfolio">Portfolio</option>
                                <option value="certification">Certification</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                <textarea name="message" placeholder="Additional Message (Optional)" class="p-2 border rounded"></textarea>
                <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded hover:bg-pink-600">Request Document</button>
            </form>
        </div>

        
    </section>
    <section>
        <div class="mt-12 text-center">
            <h3 class="text-3xl font-bold">Certifications</h3>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-pink-100 dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                    <a href="certificate1.pdf" target="_blank" class="text-xl font-semibold text-pink-500 hover:underline">CompTIA Security+</a>
                    <p class="text-gray-600 dark:text-gray-300">Expected 2025</p>
                </div>
                <div class="bg-pink-100 dark:bg-gray-800 p-4 rounded-lg shadow-lg">
                    <a href="certificate2.pdf" target="_blank" class="text-xl font-semibold text-pink-500 hover:underline">Cisco CCNA</a>
                    <p class="text-gray-600 dark:text-gray-300">Expected 2025</p>
                </div>
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
        var typed = new Typed("#typed", {
            strings: ["a Cybersecurity Enthusiast", "a Network Security Specialist", "a Data Protection Advocate"],
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
