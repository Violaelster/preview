<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/variables.css" />

    <!-- Roboto Slab -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&family=Monoton&family=Roboto+Slab:wght@100..900&family=Sacramento&family=Sonsie+One&display=swap" rel="stylesheet">

    <!-- Monoton -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&family=Monoton&family=Sacramento&family=Sonsie+One&display=swap" rel="stylesheet">
    <title>Hotell Preview</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            overflow: hidden;
            /* Förhindra scrollning */
        }

        /* Videon täcker hela skärmen */
        video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Gör att videon fyller skärmen utan att förvrängas */
            z-index: -1;
            /* Lägg videon bakom allt annat */
        }

        /* Containern för namn och logga */
        .preview-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding-top: 20px;
        }

        /* Containern för namn och logga */
        .preview-container,
        .hotel-logo {
            opacity: 0;
            /* Start osynlig */
            animation: fade-in-out 16s forwards;
            /* 2 sek in, 2 sek ut */
        }

        @keyframes fade-in-out {
            0% {
                opacity: 0;
            }

            25% {
                opacity: 1;
            }

            75% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }


        .hotel-logo {
            position: fixed;
            width: 250px;
            top: 15%;
            left: 80%;

        }

        @media (min-width: 1512px) {
            .hotel-logo {
                position: fixed;
                width: 300px;
                top: 15%;
                left: 80%;

            }
        }

        .preview-container h1 {
            font-family: var(--font-family-h1);
            text-wrap: nowrap;
            color: #ffa2c8;
            margin-bottom: 5px;
            font-size: clamp(4rem,
                    8vw,
                    12rem);
        }

        .preview-container p {
            font-size: clamp(2rem,
                    6vw,
                    4rem);
            color: #ff63a3;
            font-family: "Roboto Slab";
            font-weight: 600;
        }
    </style>
</head>

<body>
    <video id="hotel-video" autoplay loop muted playsinline>
        <source src="/assets/images/snoop-video.mp4" type="video/mp4">
        Din webbläsare stöder inte videouppspelning.
    </video>
    <img src="/assets/svg/paw.svg" alt="Hotell Logga" class="hotel-logo">
    <div class="preview-container">
        <h1>Smooth &nbsp;&nbsp;Oasis</h1>
        <p>Smooth vibes, Snoop style</p>
    </div>
    <script>
        const video = document.getElementById('hotel-video');

        // Vänta tills videons metadata har laddats
        video.addEventListener('loadedmetadata', () => {
            video.pause(); // Pausa videon tillfälligt
            video.currentTime = 1; // Hoppa till 1 sekund in i videon
            video.play(); // Starta uppspelningen igen
        });
    </script>
</body>

</html>