<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>TUAC</title>
    <style>
        body {
    overflow-x: hidden;  /* Prevents horizontal scroll */
}

        /* Basic style for the h2 element */
        h2 {
            font-family: 'Courier New', Courier, monospace; /* Typewriter-style font */
            font-size: 2rem; /* Default font size, will scale with screen size */
            line-height: 1.4;
            word-wrap: break-word;
            overflow-wrap: break-word;
            margin-left: 2rem;
            margin-right: 2rem;
            /* Ensure the text stays within the screen */
            white-space: nowrap;
            overflow: hidden;
            border-right: 3px solid white; /* Simulating the typing cursor */
        }

        /* Typing animation */
        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        /* Stop the cursor blinking after the text is fully typed */
        @keyframes blink-caret {
            50% {
                border-color: transparent;
            }
        }

        h2.typing {
            animation: typing 4s steps(40) 1s forwards, blink-caret 0.75s step-end infinite;
        }

        h2.typing.completed {
            animation: typing 4s steps(40) 1s forwards, blink-caret 0s step-end forwards;
        }

        /* Sliding menu */
        .slide-menu {
            position: fixed;
            top: 0;
            left: -250px;
            height: 100%;
            width: 250px;
            background-color: rgba(0, 0, 0, 0.9);
            overflow-x: hidden;
            transition: left 0.3s ease;
            z-index: 100;
        }

        .slide-menu.open {
            left: 0;
        }

        /* Styling the links inside the menu */
        .slide-menu a,
        .slide-menu .btn {
            padding: 16px;
            text-decoration: none;
            font-size: 24px;
            color: white;
            display: block;
            transition: 0.3s;
        }

        .slide-menu a:hover,
        .slide-menu .btn:hover {
            background-color: #ddd;
            color: black;
        }

        /* Close button inside menu */
        .menu-close-btn {
            position: absolute;
            top: 16px;
            right: 16px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }

        /* Ensure navbar content is in a row on mobile */
        @media (max-width: 768px) {
            .navbar-links {
                width: 100vw;
                gap: 1rem; /* Add spacing between items */
                justify-content: space-between; /* Evenly space out the items */
            }

            .navbar-links a {
                padding: 8px 16px; /* Adjust padding for better click area on mobile */
            }

            /* Style buttons inside the menu */
            .slide-menu .btn {
                background-color: transparent;
                color: #ddd;
                font-size: 20px;
                text-align: center;
                border-radius: 5px;
                margin-top: 16px;
                margin-right: 16px;
            }

            .slide-menu .btn:hover {
                background-color: #ddd;
                color: black;
            }
            .container {
                width: 100vw;
                flex-direction: row;
                justify-content: space-between;
            }

        }

    </style>
</head>
<body>
    <section class="bg-current h-screen w-screen brightness-50" style="background-image: url(https://i.ibb.co/SdtTcP2/Picsart-24-11-09-09-03-27-460.jpg); background-attachment: fixed; background-repeat: no-repeat;background-size: cover;">
        <header class="bg-white text-gray-600 body-font h-1/5">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <span class="text-xl">TUAC</span>
                </a>

                <!-- Mobile Menu Button -->
                <button id="menu-toggle" class="md:hidden text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <nav class="navbar-links md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center hidden md:flex">
                    <a class="mr-5 hover:text-gray-900" href="">Home</a>
                    <a class="mr-5 hover:text-gray-900" href="/index1.php?page=about">About</a>
                    <a class="mr-5 hover:text-gray-900" href="/donation.php">Donation</a>
                    <a class="mr-5 hover:text-gray-900" href="index1.php?page=gallery">Gallery</a>
                    <a class="mr-5 hover:text-gray-900" href="/portfolio.html">Developers</a>
                    <a class="mr-5 hover:text-gray-900" href="/d_forum">Forum</a>
                    <a class="mr-5 hover:text-gray-900" href="/index1.php">Event</a>
                    <div style="position: relative; left: 80px ;" class="flex-row space-between w-auto">
                        <button><a class="hover:text-gray-900" href="/d_forum/login.php">Sign In</a></button>
                        <button class="ml-8"><a class="hover:text-gray-900" href="/d_forum/register.php">Register</a>
                        </button>
                    </div>
                    
                </nav>
            </div>
        </header>

        <!-- Sliding Menu -->
        <div id="menu" class="slide-menu">
            <span id="menu-close-btn" class="menu-close-btn">&times;</span>
            <a href="#">Home</a>
            <a href="/index1.php?page=about">About</a>
            <a href="donation.php">Donation</a>
            <a href="/index1.php?page=gallery">Gallery</a>
            <a href="/portfolio.html">Developers</a>
            <a href="/d_forum">Forum</a>
            <a href="/index1.php">Event</a>
            <!-- Add buttons inside the menu -->
            <a class="btn bg-black ml-4" href="/d_forum/login.php">Sign In</a>
            <a class="btn bg-black" href="/d_forum/register.php">Register</a>

        </div>

        <div class="w-screen flex flex-col h-4/5 ">
            <h1 class="text-white font-bold mt-32 ml-8 md:ml-32 text-3xl sm:text-4xl lg:text-5xl">Tezpur University Alumni Club</h1>
            <div class="w-screen">
                <h2 id="typing-text" class=" hell text-white text-lg sm:text-xl md:text-2xl ml-8 md:ml-32 lg:text-3xl">A place where we can be together again!</h2>
            </div>
        </div>
    </section>

    <script>
        // Toggle the menu when the button is clicked
        const menuToggleButton = document.getElementById("menu-toggle");
        const menu = document.getElementById("menu");
        const closeMenuButton = document.getElementById("menu-close-btn");

        menuToggleButton.addEventListener("click", function() {
            menu.classList.toggle("open");
        });

        closeMenuButton.addEventListener("click", function() {
            menu.classList.remove("open");
        });

        // Apply typing animation to h2 when the page loads
        window.addEventListener("DOMContentLoaded", function() {
            const typingText = document.getElementById("typing-text");
            typingText.classList.add("typing");

            // Set a timeout to add the 'completed' class after the typing animation is done
            setTimeout(() => {
                typingText.classList.add("completed");
            }, 4000); // Match this timeout with the duration of your typing effect (in milliseconds)
        });

        window.addEventListener('DOMContentLoaded', (event) => {
            function isMobile() {
                return window.innerWidth <= 768; 
            }

            function changeText() {
                const header = document.getElementById('typing-text');
                
                if (isMobile()) {
                    header.innerHTML = 'A place where <br>we can be together again !';
                } else {
                    header.innerHTML = 'A place where we can be together !';
                }
            }

            changeText();

            window.addEventListener('resize', changeText);
        });
    </script>

<section class="w-screen h-screen text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-col text-center w-full mb-20">
        <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1">Tezpur University Alumni Club</h2>
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Aims and Objectives</h1>
      </div>
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-4 h-4 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Aim 1</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-4 h-4 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Aim 2</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base">Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
          
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
            <div class="flex items-center mb-3">
              <div class="w-4 h-4 mr-3 inline-flex items-center justify-center rounded-full bg-indigo-500 text-white flex-shrink-0">
              </div>
              <h2 class="text-gray-900 text-lg title-font font-medium">Aim 3</h2>
            </div>
            <div class="flex-grow">
              <p class="leading-relaxed text-base" >Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<section class="w-screen h-screen">
    <div id="about" class="relative bg-white overflow-hidden mt-16">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
                    fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
                    <polygon points="50,0 100,0 50,100 0,100"></polygon>
                </svg>
    
                <div class="pt-1"></div>
    
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="my-6 text-2xl tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-4xl">
                            Why alumni portal is<br> necessary?
                        </h2>
    
                        <p class="leading-relaxed text-base" style="font-style: italic;">
                            An Alumni Portal is crucial for maintaining a strong connection between former students and their alma mater. Here's why:<br>
                            1.Networking: It helps alumni reconnect with classmates, expand their professional network, and access career opportunities.<br>
                            2.Exclusive Resources: Alumni can access career services, webinars, and other valuable resources<br>
                            3.Giving Back: The portal facilitates donations and alumni support for scholarships, research, and community projects. 
                        </p>
                    </div>
                </main>
            </div>
        </div>
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover object-top sm:h-72 md:h-96  lg:h-full" src="https://media.licdn.com/dms/image/D4E12AQHfgS5VdS-_xA/article-cover_image-shrink_720_1280/0/1712860134465?e=2147483647&v=beta&t=yby5nCDxvtMYU1VdwkRpW7XsHw3l6FllftnfdRDpGDQ" alt="">
        </div>
    </div>

</section>

<footer class="w-screen text-gray-600 body-font" style="background-color: rgba(0, 0, 0, 0.719);">
    <div class="container w-screen  py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap space-between flex-wrap flex-col">
      <div class="w-64 mb-4 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">

          <span class="ml-3 text-white text-xl">TUAC</span>
        </a>
        <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
      </div>
      <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center ">
        <div class="lg:w-1/4 md:w-1/2 w-full px-4">
          <h2 class="title-font font-medium text-white tracking-widest text-sm mb-3">EXPLORE</h2>
          <nav class="list-none mb-10">
            <li>
              <a class="text-white hover:text-gray-800">Home</a>
            </li>
            <li>
                <a class="text-white hover:text-gray-800">About</a>
              </li>
            <li>
              <a class="text-white hover:text-gray-800">Scholarship</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-800">Gallery</a>
            </li>
            <li>
              <a class="text-white hover:text-gray-800">Alumni Team</a>
            </li>
            <li>
                <a class="text-white hover:text-gray-800">Forum</a>
              </li>
              <li>
                <a class="text-white hover:text-gray-800">Event</a>
              </li>
          </nav>
        </div>
        <div class=" p-8 rounded-lg shadow-lg text-center" style="position: relative; ">
            <!-- Phone Icon -->
            <div class="text-4xl text-blue-500 mb-4">
                <svg class="h-20 ml-8 w-20 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" /></svg>                </div>
    
            <!-- Phone Number -->
            <a href="tel:+1234567890" class="text-xl font-semibold text-blue-600 hover:text-blue-800">
                +1 (234) 567-890
            </a>
        </div>
        <div class="ml-16 p-8 rounded-lg shadow-lg text-center flex text-center justify-center items-center " >
            <a href=""><svg class="h-20 w-20 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" /></svg></a>
            <a href=""><svg class="h-20 w-20 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" /></svg></a>
            <a href=""><svg class="h-20 w-20 text-gray-500"  width="24" height="24" viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round" ><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 4l11.733 16h4.267l-11.733 -16z" /><path d="M4 20l6.768 -6.768m2.46 -2.46l6.772 -6.772" /></svg></a>
        </div>
        
      </div>
    </div>
    <div class="bg-gray-100">
      <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
        <p class=" text-sm text-center sm:text-left" style="color: rgba(0, 0, 0, 0.719);">© 2024 Politechblock —
          <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" style="color:rgba(0, 0, 0, 0.719) ;" class=" ml-1" target="_blank">@Prachurjya</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
          <a class="text-gray-500">
            <svg fill="currentColor" style="color: rgba(0, 0, 0, 0.719);" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" style="color: rgba(0, 0, 0, 0.719);" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="none" style="color: rgba(0, 0, 0, 0.719);" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-gray-500">
            <svg fill="currentColor" style="color: rgba(0, 0, 0, 0.719);" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </span>
      </div>
    </div>
  </footer>
</body>
</html>