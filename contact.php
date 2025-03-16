<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me - Portia Jessica Khoarai</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body { font-family: 'Open Sans', sans-serif; }
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
        .icon-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 15px;
        }
        .social-icon {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
            font-weight: bold;
            transition: transform 0.3s ease-in-out;
        }
        .social-icon i {
            font-size: 32px;
            transition: transform 0.3s;
        }
        .social-icon:hover i {
            transform: scale(1.2) rotate(10deg);
        }
        .qr-container {
        position: relative;
        display: inline-block;
        transition: transform 0.3s ease-in-out;
    }

    .qr-container:hover {
        transform: scale(1.5); /* Zoom effect */
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
        
        <p class="mt-12 text-center text-gray-700 dark:text-gray-300">---------------------------------------------</p>
        
        <!-- Contact Section -->
        <div class="flex flex-col md:flex-row justify-between items-center mt-8">
            
            <!-- Left Side: Social Media & QR Code -->
            <div class="w-full md:w-1/2 flex flex-col items-center">
                <div class="icon-container space-y-4">
                    <div class="social-icon text-blue-600 flex items-center space-x-2">
                        <i class='bx bxl-linkedin text-4xl animate-bounce'></i>
                        <span>Connect with me on LinkedIn</span>
                    </div>
                    <div class="social-icon text-pink-500 flex items-center space-x-2">
                        <i class='bx bxl-instagram text-4xl animate-bounce'></i>
                        <span>Follow me on Instagram</span>
                    </div>
                    <div class="social-icon text-blue-500 flex items-center space-x-2">
                        <i class='bx bxl-facebook text-4xl animate-bounce'></i>
                        <span>Let's connect on Facebook</span>
                    </div>
                    <div class="social-icon text-black flex items-center space-x-2">
                        <i class='bx bxl-tiktok text-4xl animate-bounce'></i>
                        <span>Watch my TikToks</span>
                    </div>
                    <div class="social-icon text-green-500 flex items-center space-x-2">
                        <i class='bx bxl-whatsapp text-4xl animate-bounce'></i>
                        <img src="qr.jpg" alt="WhatsApp QR Code" class="w-40 h-40 mt-6 shadow-lg rounded-md qr-container">
                    </div>
                </div>
                
            </div>

            <!-- Right Side: Contact Form -->
            <div class="w-full md:w-1/2 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4 text-center">Send Me an Email</h2>
                <form>
                    <div class="mb-4">
                        <div class="flex items-center bg-pink-50 rounded-full px-4 py-2">
                            <i class="fas fa-user text-gray-400 mr-2">
                            </i>
                            <input class="bg-transparent outline-none w-full" placeholder="Full name" type="text"/>
                           </div>
                          </div>
                          <div class="mb-4">
                           <div class="flex items-center bg-pink-50 rounded-full px-4 py-2">
                            <i class="fas fa-envelope text-gray-400 mr-2">
                            </i>
                            <input class="bg-transparent outline-none w-full" placeholder="Email address" type="email"/>
                           </div>
                          </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 dark:text-gray-300">Message</label>
                        <textarea class="bg-pink-50 w-full p-2 border rounded-md dark:bg-gray-700 dark:text-white" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded-md w-full hover:bg-pink-700">Send</button>
                </form>
            </div>
        </div>
    
    </section>
    
    <footer class="bg-pink-800 text-white mt-12 py-6">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center text-center md:text-left px-6">
            <div>
                <p class="text-lg font-semibold"><i class='bx bx-phone'></i> Call</p>
                <p>(+27) 69 540 3097</p>
            </div>
            <div>
                <p class="text-lg font-semibold"><i class='bx bx-envelope'></i> Contact</p>
                <p>portiajessica54@gmail.com</p>
            </div>
            <div>
                <p class="text-lg font-semibold"><i class='bx bx-share-alt'></i> Follow Me</p>
                <div class="flex space-x-4 mt-2">
                    <a href="https://www.instagram.com/jessicakhoarai/" class="text-white hover:text-pink-400 text-2xl"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.facebook.com/skinny.bae.3154" class="text-white hover:text-blue-400 text-2xl"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.linkedin.com/in/portia-jessica-khoarai/" class="text-white hover:text-blue-600 text-2xl"><i class='bx bxl-linkedin'></i></a>
                </div>
            </div>
            <div>
                <p>© 2025 Portia Jessica Khoarai. <i class='bx bx-heart'></i></p>
            </div>
        </div>
    </footer>
</body>
</html>
