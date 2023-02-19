!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Liqenet</title>
</head>

<body>

    <?php
        include('includes/header.php');
    ?>

    <!-- Fillimi i Slider  -->
    <section class="liqenet" id="liqenet"></section>
    <h1 class="heading">
        <span>L</span>
        <span>I</span>
        <span>Q</span>
        <span>E</span>
        <span>N</span>
        <span>E</span>
        <span>T</span>
    </h1>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 5</div>
            <img src="img/ohrid-final.jpg" style="width:100%">
            <div class="text">Liqeni i Ohrit</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 5</div>
            <img src="img/prespa-final.jpg" style="width:100%">
            <div class="text">Liqeni i Prespës</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 5</div>
            <img src="img/shkodra-final.jpg" style="width:100%">
            <div class="text">Liqeni i Shkodrës</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="img/batllava-final.jpg" style="width:100%">
            <div class="text">Liqeni i Batllavës</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="img/ujmani-final.jpg" style="width:100%">
            <div class="text">Liqeni i Ujmanit</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    <script src="scriptl.js"></script>
    </section>
    <!-- Fundi i Slider  -->

    <?php
        include('includes/footer.php');
    ?>

</body>

</html>