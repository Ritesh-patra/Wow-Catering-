<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wow caterer</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        scroll-behavior: smooth;
        /* Smooth scrolling enable */
    }

    .gradient-border {
        border-width: 9px;
        border-style: solid;
        border-image: linear-gradient(to right, #f19329, #951F44, #d69c47);
        border-image-slice: 1;
        box-sizing: border-box;
    }

    .scrolling-container {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        background-color: #9e0b36;
    }

    .scrolling-text {
        display: inline-block;
        animation: scroll 20s linear infinite;
    }

    @keyframes scroll {
        0% {
            transform: translateX(100%);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    .social-icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: rgb(255, 255, 255);
    }

    .service-item {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 6px 0;
        color: #ffffff;
    }

    .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        margin-bottom: 16px;
    }

    .back-to-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        background-color: #f0a500;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    }

    .slide-down {
        transform: translateY(-100%);
        transition: transform 0.3s ease-in-out;
    }

    .slide-down.active {
        transform: translateY(0);
    }
</style>

<body>
    <nav class="bg-black text-white shadow-md  w-full flex justify-between items-center p-4 z-50">
        <div class="text-2xl font-bold flex flex-col">
            <img class="w-32" src="images/logo.jpg" alt="">
            <h1 class="text-sm"><a href="tel:+919040282824" class="hover:text-blue-500">+91 90402 82824</a></h1>

        </div>
        <div class="hidden md:flex space-x-6 items-center">
            <a href="#page2" class="hover:text-blue-500">About Us</a>
            <a href="#last" class="hover:text-blue-500">Contact</a>
            <a href="gallery.html" class="hover:text-blue-500">Gallery</a>
            <button class="border rounded-full px-4 py-2"><a href="tel:+919040282824">Book Now</a></button>
        </div>
        <button id="menu-btn" class="md:hidden text-2xl">☰</button>
    </nav>

    <div id="menu" class="absolute top-[-100%] left-0 w-full bg-black shadow-md p-6 transition-all duration-500 z-40">
        <button id="close-btn" class="text-xl text-white">✕</button>
        <div class="mt-4 flex bg-black text-white flex-col space-y-6">
            <a href="gallery.html" class="hover:text-blue-500">Gallery</a>
            <a href="menu.html" class="hover:text-blue-500">Menu</a>
            <a href="#page2" class="hover:text-blue-500">About Us</a>
            <a href="#last" class="hover:text-blue-500">Contact</a>
        </div>
    </div>

    <header id="page1" style="background-image: url('https://i.pinimg.com/736x/94/e9/6a/94e96a093129648e861f80d384a35088.jpg');"
        class="w-full h-full bg-center bg-cover bg-no-repeat relative">
        <div
            class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-center items-center text-center text-white px-4">
            <img src="images/logopng.png" alt="Venus Catering Logo" class="w-40 mb-4">
            <h2 class="text-sm font-semibold tracking-wide">WELCOME TO WOW CATERER SERVICE</h2>
            <h1 class="font1 sm:text-8xl text-6xl font-bold mt-2">Hello!</h1>
            <p class="mt-4 sm:w-1/2 text-center w-[90%] text-lg">WOW Caterer Odisha's leading catering service, bringing
                exceptional flavors to weddings and special occasions with our expert team. Let's make your celebration
                unforgettable!</p>
            <div class="mt-6 flex space-x-4">
                <a href="items.html"
                    class="px-6 py-2 border border-white rounded-full flex items-center space-x-2">
                    <span>Select Menu</span>
                    <span class="text-lg"><i class="ri-arrow-right-line"></i></span>
                </a>
                <a href="event.html"
                    class="px-6 py-2 border border-white rounded-full flex items-center space-x-2">
                    <span>Book Now</span>
                    <span class="text-lg"><i class="ri-arrow-right-line"></i></span>
                </a>
                
            </div>
        </div>
    </header>

    <!-- page 2 completed successfully -->
    <section id="page2" class="w-full py-12 md:py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                <!-- Left side - Images -->
                <div class="w-full flex items-center justify-center">
                    <div class="grid grid-cols-2 gap-4 h-full w-full">
                        <!-- First image -->
                        <div class="rounded-lg overflow-hidden h-full flex items-center justify-center  relative">
                            <img class="w-full rounded-lg h-[80%] lg:h-[80vh] object-cover"
                                src="images/side-view-multi-colored-meatballs-with-tomato-sauces-green-onions_140725-13961.avif"
                                alt="">
                        </div>

                        <!-- Second image -->
                        <div class="rounded-lg overflow-hidden h-full flex  items-center justify-center relative">
                            <img class="w-full rounded-lg h-[80%] lg:h-[80vh] object-cover"
                                src="images/traditional-south-indian-meal-food-served-big-banana-leaf-food-platter-complete-thali-selective-focus_466689-50768.avif"
                                alt="">
                        </div>
                    </div>
                </div>

                <!-- Right side - Content -->
                <div class="space-y-8">
                    <div>
                        <p class="text-base font-semibold  tracking-wide text-gray-800 mb-1">ABOUT US<span
                                class="text-gold">.</span></p>
                        <h2 class="font1 text-3xl md:text-[3vw] font-semibold text-gray-900 leading-tight">
                            CREATING MEMORABLE EVENTS WITH EXQUISITE<span class="text-gray-900">.</span>
                        </h2>
                        <p class="mt-6 text-lg text-gray-700">
                            At WOW Caterer, we are passionate about crafting unforgettable culinary experiences for
                            every occasion
                        </p>
                    </div>

                    <!-- Stats Cards -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <!-- Card 1 -->
                        <div class="bg-white rounded-lg p-6 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] relative">
                            <div class="flex flex-col items-start space-y-4">
                                <div
                                    class="w-16 h-16 rounded-full flex items-center justify-center border-2 border-gold">
                                    <img src="images/Card1.png" alt="">
                                </div>
                                <p class="font1 font-medium">15 Years of Experience</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-lg p-6 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] relative">
                            <div class="flex flex-col items-start space-y-4">
                                <div
                                    class="w-16 h-16 rounded-full flex items-center justify-center border-2 border-gold">
                                    <img src="images/Card2.png" alt="">
                                </div>
                                <p class="font1 font-medium">500+ Event Covered</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-lg p-6 shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] relative">
                            <div class="flex flex-col items-start space-y-4">
                                <div
                                    class="w-16 h-16 rounded-full flex items-center justify-center border-2 border-gold">
                                    <img src="images/Card3.png" alt="">
                                </div>
                                <p class="font1 font-medium">99% Repeated Customers</p>
                            </div>
                        </div>
                    </div>

                    <!-- More About Us Button -->
                    <div class="pt-4">
                        <button
                            class="inline-flex items-center px-6 py-3 border-2 border-gray-900 rounded-full text-base font-medium text-gray-900 hover:bg-gray-100 transition-colors">
                            <a href="test.html">About the Founder</a>
                            <div class="ml-2 w-8 h-8 rounded-full bg-burgundy flex items-center justify-center">
                                <!-- Arrow right icon -->
                                <i class="ri-arrow-right-line"></i>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- page 3 completed successfully -->
    <!-- Heading Section -->
    <div class="text-center mb-12">
        <span class="text-lg font-medium text-gray-600">What We Do</span>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 font1">Premium Catering</h2>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 font1">Services</h2>
        <section class="container mx-auto px-4 md:px-6 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Wedding Event -->
                <a href="event.html?type=Anniversary%20Event" class="block">
                    <div class="bg-amber-200 rounded-2xl overflow-hidden shadow-lg">
                        <img src="images/wedding.jpg" alt="Anniversary Event">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 font1">Wedding Event</h2>
                            <p class="text-gray-700 text-left">
                                WOW Caterer makes your wedding feast unforgettable with exquisite flavors and
                                exceptional service. As Odisha's leading caterer, we blend taste, tradition, and
                                elegance to create a grand culinary experience. From lavish buffets to customized menus,
                                we ensure every bite delights your guests, making your special day truly magical!
                            </p>
                        </div>
                    </div>
                </a>

                <!-- Engagement -->
                <a href="event.html?type=Engagement" class="block">
                    <div class="bg-amber-100 rounded-2xl overflow-hidden shadow-lg">
                        <img src="images/eng1.avif">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 font1">Engagement</h2>
                            <p class="text-gray-700 text-left">
                                WOW Caterer makes your Ring Ceremony extraordinary with exquisite cuisine and seamless
                                service. From traditional delicacies to modern fusion flavors, our expert chefs craft a
                                lavish menu tailored to your taste. With impeccable hospitality and presentation, we
                                ensure a delightful dining experience, making your celebration truly unforgettable!
                            </p>
                        </div>
                    </div>
                </a>


                <!-- Birthday Party -->
                <a href="event.html?type=Birthday Party" class="block">
                    <div class="bg-amber-300 rounded-2xl overflow-hidden shadow-lg">
                        <img src="images/birthday new.jpg" alt="Birthday Party">
                        <div class="p-6">
                            <h2 class="text-2xl font-bold text-gray-900 mb-4 font1">Birthday Party</h2>
                            <p class="text-gray-700 text-left">
                                WOW Caterer makes your birthday celebration unforgettable with delicious delights and
                                seamless service. From themed party menus to gourmet spreads and customized cakes, we
                                craft flavors that impress every guest. Whether a kid’s party or a grand event, we
                                ensure a vibrant, joy-filled feast that makes your day truly WOW-worthy!
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- View All Services Button -->
            <div class="mt-8 text-center">
                <a href="AllServices.html"
                    class="inline-flex items-center px-6 py-3 border-2 border-gray-900 rounded-full text-base font-medium text-gray-900 hover:bg-gray-100 transition-colors">
                    View All Services
                    <div class="ml-2 w-8 h-8 rounded-full bg-burgundy flex items-center justify-center">
                        <!-- Arrow right icon -->
                        <i class="ri-arrow-right-line"></i>
                    </div>
                </a>
            </div>
        </section>

        <!-- page 4 completed successfully -->
        <section class="container mx-auto px-4 md:px-6 py-12">
            <!-- Heading Section -->
            <div class="text-center mb-12">
                <h2 class="font1 text-4xl md:text-5xl font-bold text-gray-900">
                    Leave Your Guests Speechless With Our Fabulous Food!
                </h2>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Authentic Taste -->
                <div
                    class="gradient-border bg-amber-100 flex flex-col justify-center items-center rounded-lg p-6 shadow-lg text-center">
                    <img class="w-24 mb-3" src="images/n1.png" alt="">
                    <h3 class="font1 text-2xl font-bold text-gray-900 mb-1">Authentic Taste</h3>
                    <p class="text-gray-700">
                        Enjoy our traditional recipes, inspired by rich culinary heritage.
                    </p>
                </div>

                <!-- Service Excellence -->
                <div
                    class="gradient-border  flex flex-col justify-center items-center rounded-lg p-6 shadow-lg text-center">
                    <img class="w-24 mb-3" src="images/n2.png" alt="">
                    <h3 class="font1 text-2xl font-bold text-gray-900 mb-1">Service Excellence</h3>
                    <p class="text-gray-700">
                        Outstanding service and unforgettable experiences.
                    </p>
                </div>

                <!-- Best Quality -->
                <div
                    class="gradient-border  flex flex-col justify-center items-center rounded-lg p-6 shadow-lg text-center">
                    <img class="w-24 mb-3" src="images/n3.png" alt="">
                    <h3 class="font1 text-2xl font-bold text-gray-900 mb-1">Best Quality</h3>
                    <p class="text-gray-700">
                        Top quality standards, excellence in every bite.
                    </p>
                </div>

                <!-- Heritage -->
                <div
                    class="gradient-border  flex flex-col justify-center items-center rounded-lg p-6 shadow-lg text-center">
                    <img class="w-24 mb-3" src="images/n4.png" alt="">
                    <h3 class="font1 text-2xl font-bold text-gray-900 mb-1">Heritage</h3>
                    <p class="text-gray-700">
                        Venus Catering blends food and heart, rooted in family traditions.
                    </p>
                </div>
            </div>
        </section>

        <!-- page 5 completed successfully -->
        <section class="w-full min-h-screen bg-black flex flex-col lg:flex-row lg:items-end">
            <!-- Left Side - Content -->
            <div class="w-full lg:w-[60vw] h-full flex text-white flex-col p-5 lg:p-12">
                <!-- Heading Section -->
                <div class="text-left mb-6 lg:mb-12">
                    <span class="text-sm font-medium">TESTIMONIAL</span>
                    <h2 class="font1 text-3xl leading-none md:text-4xl lg:text-5xl font-bold mt-2">What People Say</h2>
                    <h2 class="font1 text-3xl leading-none md:text-4xl lg:text-5xl font-bold mt-2">About</h2>
                    <h2 class="font1 text-3xl leading-none md:text-4xl lg:text-5xl font-bold mt-2">Us?</h2>
                </div>
                <!-- Paragraph -->
                <p class="text-left text-base md:text-lg w-full lg:w-[65%]">
                    We had the pleasure of hiring Wow Caterer for our recent event, and the experience was
                    truly outstanding! From the exquisite presentation to the mouth-watering flavors, every dish was a
                    masterpiece. The team ensured top-notch service, making our guests feel special. Their
                    professionalism and attention to detail set them apart. If you're looking for a caterer that
                    delivers both taste and elegance, look no further. Highly recommended!
                </p>
            </div>

            <!-- Right Side - Image -->
            <div class="w-full lg:w-[40vw] h-full flex items-end justify-center ">
                <img class="w-[80%] lg:w-[65%]" src="images/testimonial-img.png" alt="">
            </div>
        </section>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 px-4 gap-6 mt-12">
            <!-- Years Of Excellence -->
            <div style="background-image: url('https://i.pinimg.com/736x/f4/16/96/f4169602f9c8a40a0fac0f1157763a28.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                class="bg-white rounded-lg shadow-lg p-6 text-center h-48 flex flex-col justify-center relative overflow-hidden">
                <!-- Overlay for inner effect -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                <!-- Content -->
                <div class="relative z-10">
                    <h3 class="text-4xl font-bold text-white">15+</h3>
                    <p class="text-white">Years Of Excellence</p>
                </div>
            </div>

            <!-- Menu Options -->
            <div style="background-image: url('https://i.pinimg.com/736x/36/08/9d/36089d4a1c808586b5907ae7477f87be.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                class="bg-white rounded-lg shadow-lg p-6 text-center h-48 flex flex-col justify-center relative overflow-hidden">
                <!-- Overlay for inner effect -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                <!-- Content -->
                <div class="relative z-10">
                    <h3 class="text-4xl font-bold text-white">250+</h3>
                    <p class="text-white">Menu Options</p>
                </div>
            </div>

            <!-- Happy Foodies -->
            <div style="background-image: url('https://i.pinimg.com/736x/56/1d/f0/561df0ddacb3d0ddd77ef4dfa6226c9f.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                class="bg-white rounded-lg shadow-lg p-6 text-center h-48 flex flex-col justify-center relative overflow-hidden">
                <!-- Overlay for inner effect -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                <!-- Content -->
                <div class="relative z-10">
                    <h3 class="text-4xl font-bold text-white">100+</h3>
                    <p class="text-white">Staffs</p>
                </div>
            </div>

            <!-- Anniversary -->
            <div style="background-image: url('https://i.pinimg.com/736x/f3/7b/75/f37b7570ab6da074791f289dd5a0221c.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;"
                class="bg-white rounded-lg shadow-lg p-6 text-center h-48 flex flex-col justify-center relative overflow-hidden">
                <!-- Overlay for inner effect -->
                <div class="absolute inset-0 bg-black bg-opacity-50"></div>

                <!-- Content -->
                <div class="relative z-10">
                    <h3 class="text-4xl font-bold text-white">125K</h3>
                    <p class="text-white">Happy Foodies</p>
                </div>
            </div>
        </div>

        <!-- Scrolling Banner -->
        <div class="marquee bg-[#951F44] mt-8 md:text-[4vw]  mb-7">
            <div class="track">
                <div class="content">
                    <div class="welcome-text">Engagement
                    </div>
                    <div class="welcome-text">Birthday
                    </div>
                    <div class="welcome-text">Mehendi</div>
                    <div class="welcome-text">Anniversary
                    </div>
                    <div class="welcome-text">Corporate
                    </div>
                    <div class="welcome-text mr-[5vw]">Wedding</div>
                </div>
                <div class="content">
                    <div class="welcome-text">Engagement
                    </div>
                    <div class="welcome-text">Birthday
                    </div>
                    <div class="welcome-text">Mehendi</div>
                    <div class="welcome-text">Anniversary
                    </div>
                    <div class="welcome-text">Corporate
                    </div>
                    <div class="welcome-text">Wedding</div>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <section id="last" class="py-10 px-6 text-center text-white bg-black" ; opacity: 3;">
            <div class="mx-auto mb-6 w-32 h-32 bg-white rounded-md flex items-center justify-center">
                <img src="images/logo.jpg" alt="Venus Catering Logo" class="w-24">
            </div>
            <p class="text-lg leading-relaxed max-w-md mx-auto">
                Let Wow Caterer transform your special occasion into a masterpiece with our professional touch.
            </p>

            <!-- Social Media Icons -->
            <div class="flex justify-center  text-white gap-4 mt-6">
                <a href="https://www.facebook.com/profile.php?id=61560857146602&mibextid=ZbWKwL"
                    class="social-icon text-3xl">
                    <i class="ri-facebook-fill"></i>
                </a>
                <a href="https://www.instagram.com/wow_caterer" class="social-icon text-3xl">
                    <i class=" ri-instagram-line"></i>
                </a>
                <a href="https://wa.me/919040282824" class="social-icon text-3xl" target="_blank">
                    <i class="ri-whatsapp-line"></i>
                </a>
                <a href="https://www.youtube.com/watch?v=_KawGwviiHw"><i class=" text-3xl ri-youtube-fill"></i></a>
            </div>

            <!-- Services Section -->
            <div class="px-6 py-6 text-white">
                <h2 class="text-2xl text-left font-bold mb-4">Our Services</h2>
                <div>
                    <a href="AllServices.html" class="service-item">
                        <i class="ri-arrow-right-line"></i>
                        <span>Wedding Event</span>
                    </a>
                    <a href="AllServices.html" class="service-item">
                        <i class="ri-arrow-right-line"></i>
                        <span>Thread Ceremony Catering</span>
                    </a>
                    <a href="AllServices.html" class="service-item">
                        <i class="ri-arrow-right-line"></i>
                        <span>Engagement</span>
                    </a>
                    <a href="AllServices.html" class="service-item">
                        <i class="ri-arrow-right-line"></i>
                        <span>Birthday Party</span>
                    </a>
                    <a href="AllServices.html" class="service-item">
                        <i class="ri-arrow-right-line"></i>
                        <span>House Warming</span>
                    </a>
                    <a href="AllServices.html" class="service-item">
                        <i class="ri-arrow-right-line"></i>
                        <span>Anniversary Catering</span>
                    </a>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="max-w-9xl mx-auto p-6 text-center">
                <h2 class="text-xl text-left font-semibold">Contact Now</h2>

                <div class="mt-4 space-y-4">
                    <div class="flex items-start space-x-3">
                        <span class=" text-xl"><i class="ri-map-pin-line"></i></span>
                        <p class="text-left">N/3-125,IRC Village,Bhubaneswar
                            K3-314,Kalinga Nagar,Near Sum Ultimate,BHUBANESWAR.</p>
                    </div>

                    <div class="flex items-center space-x-3">
                        <span class="text-yellow-400 text-xl">📞</span>
                        <div>
                            <p>+91 90402 82824</p>
                            <p>+91 76559 63159</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-3">
                        <span class="text-yellow-400 text-xl">📧</span>
                        <p> wowcatererbhubaneswar@gmail.com </p>
                    </div>
                </div>

                <p class="mt-6 text-sm text-gray-400">
                    © 2025 <span class="font-bold text-white">Wow Caterer</span> All rights reserved |
                    Designed By <span class="text-yellow-400 font-semibold">Spider Innovations</span>.
                </p>

                <button class="fixed bottom-6 right-6 bg-yellow-400 text-black p-3 rounded-full shadow-lg">
                    <a href="#page1"><i class="ri-arrow-up-line"></i></a>
                </button>
            </div>
        </section>

        <script>
            const containers = document.querySelectorAll(".image-container");
            const templateVenus = document.querySelector("#creature-venus");
            const templateTentacle = document.querySelector("#creature-tentacle");
            const templateLarva = document.querySelector("#creature-larva");

            containers.forEach((container) => {
                container.appendChild(templateVenus.cloneNode(true));
                container.appendChild(templateTentacle.cloneNode(true));
                container.appendChild(templateLarva.cloneNode(true));
            });

            const content = document.querySelector(".content");
            const track = document.querySelector(".track");

            function updateDuration() {
                const contentWidth = content.offsetWidth;
                // Reduced speed (was 100, now 80 pixels per second)
                const baseSpeed = 50;
                const duration = contentWidth / baseSpeed;

                const minDuration = 8; // Increased minimum duration (was 5)
                const maxDuration = 35; // Increased maximum duration (was 30)
                const finalDuration = Math.min(Math.max(duration, minDuration), maxDuration);

                // Increased the adjustment factor for wider screens
                const adjustmentFactor = window.innerWidth > 1400 ? 0.998 : 0.999;
                track.style.animationDuration = finalDuration * adjustmentFactor + "s";
            }

            // Update on load, resize, and orientation change
            window.addEventListener("load", updateDuration);
            window.addEventListener("resize", updateDuration);
            window.addEventListener("orientationchange", updateDuration);

            // Update periodically to handle any dynam
            const menuBtn = document.getElementById('menu-btn');
            const closeBtn = document.getElementById('close-btn');
            const menu = document.getElementById('menu');
            

            menuBtn.addEventListener('click', () => {
                menu.style.top = '60px';
            });

            closeBtn.addEventListener('click', () => {
                menu.style.top = '-100%';
            });

            function openContact() {
                let choice = confirm("Would you like to open WhatsApp?");
                if (choice) {
                    window.location.href = "https://wa.me/919040282824";
                } else {
                    window.location.href = "tel:+919040282824";
                }
            }


        </script>
</body>

</html> 