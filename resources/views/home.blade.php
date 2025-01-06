<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-PKL Student</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href='img/favicon.ico' rel='shortcut icon'>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Slideshow Background */
        @keyframes slideShow {
            0% {
                background-image: url('img/viewpln.jpeg');
            }

            33% {
                background-image: url('img/viewpln2.jpeg');
            }

            66% {
                background-image: url('img/viewpln.jpeg');
            }

            100% {
                background-image: url('img/viewpln2.jpeg');
            }
        }

        .slideshow-bg {
            animation: slideShow 12s infinite;
            /* Durasi 12 detik */
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="bg-gray-100 text-gray-900">
    <!-- Header -->
    <x-header title="Welcome to PLN" />

    <!-- Main Section with Slideshow -->
    <x-main class="relative slideshow-bg h-screen" />


    <!-- Section Placeholder -->
    <x-stat></x-stat>

    <!-- Footer -->
    <x-footer></x-footer>
</body>

</html>
