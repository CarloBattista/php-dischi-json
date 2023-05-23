<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./_assets/css/main.css">
</head>

<body>

    <!-- Div di collegemaneto per Vue -->
    <div id="app">
        <!-- Header -->
        <div class="header">
            <a href="./index.php" class="logoSite">
                <img class="spotify_logo" src="./_assets/_resources/Spotify_Icon_RGB_Green.svg" alt="Spotify logo">
            </a>
        </div>
        <!-- Main -->
        <div class="main">
            <!-- Container Cards -->
            <div class="container_cards w-80">
                <!-- Card ciclate -->
                <div class="card_music" v-for="(elem, index) in data">
                    <div class="image_music">
                        <img :src="elem.poster" :alt="elem.title">
                    </div>
                    <div class="info_music">
                        <h2 class="title_music">{{ elem.title }}</h2>
                        <h3 class="author_music">{{ elem.author }}</h3>
                        <p class="year_release">{{ elem.year }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vue via CDN -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Axios via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Link file Javascript -->
    <script src="./_assets/js/main.js"></script>
</body>

</html>