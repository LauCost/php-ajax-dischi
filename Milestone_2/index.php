<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Style/header.css">
    <link rel="stylesheet" href="./assets/Style/main.css">
    <title>Document</title>
</head>
<body>

<header>
    <img src="./assets/img/Spotify_logo_without_text.svg" alt="" />
</header>

<main>

    <div class="container" id="app" >
    <div class="disco" v-for="disk in disks" :key="disk.title">
        <div class="cover">
          <img :src="disk.poster" alt="" />
        </div>
        <h2>
            {{disk.title}}
        </h2>
        <p>
          {{disk.author}} <br />
          {{disk.year}}
        </p>
    </div>
    
    </div>
    
</main>



<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.24.0/axios.min.js'
    integrity='sha512-u9akINsQsAkG9xjc1cnGF4zw5TFDwkxuc9vUp5dltDWYCSmyd0meygbvgXrlc/z7/o4a19Fb5V0OUE58J7dcyw=='
    crossorigin='anonymous' referrerpolicy='no-referrer'></script>
<script src='https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js'></script>
<script src="./assets/js/app.js"></script> 

</body>
</html>