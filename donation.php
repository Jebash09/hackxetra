<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=
"https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
          rel="stylesheet">
    <title>Donation</title>
</head>
<body>
    <section class="text-gray-600 body-font">
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
                    <a class="mr-5 hover:text-gray-900" href="..">Home</a>
                    <a class="mr-5 hover:text-gray-900" href="/index1.php?page=about">About</a>
                    <a class="mr-5 hover:text-gray-900" href="#">Donation</a>
                    <a class="mr-5 hover:text-gray-900" href="/index1.php?page=gallery">Gallery</a>
                    <a class="mr-5 hover:text-gray-900" href="portfolio.html">Developers</a>
                    <a class="mr-5 hover:text-gray-900" href="/d_forum/login.php">Forum</a>
                    <a class="mr-5 hover:text-gray-900" href="/index1.php">Event</a>
                    <div style="position: relative; left: 80px ;" class="flex-row space-between w-auto">
                        <button><a class="hover:text-gray-900" href="/d_forum/login.php">Sign In</a></button>
                        <button class="ml-8"><a class="hover:text-gray-900">Register</a>
                        </button>
                    </div>
                    
                </nav>
            </div>
        </header>
        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
          <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Give Today, Change Tomorrow</h1>
            <p class="mb-8 leading-relaxed">By donating today, you’re helping us provide critical resources, support, and opportunities to those in need. Your contribution enables us to continue making a positive impact in our community and beyond.</p>
            
            </div>
          <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
            <img class="object-cover object-center rounded" alt="hero" src="https://media.istockphoto.com/id/1347277582/vector/qr-code-sample-for-smartphone-scanning-on-white-background.jpg?s=612x612&w=0&k=20&c=6e6Xqb1Wne79bJsWpyyNuWfkrUgNhXR4_UYj3i_poc0=">
          </div>
        </div>
      </section>
</body>
</html>