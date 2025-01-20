<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div>
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
    </div>
</body>

</html>
