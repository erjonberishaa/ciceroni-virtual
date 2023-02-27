<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Galeria</title>
</head>

<body>
    
    <?php
        include('includes/header.php');
    ?>


    <!-- Fillimi i Galerise  -->
    <section class="gallery" id="galeria">

        <h1 class="heading">
            <span>G</span>
            <span>A</span>
            <span>L</span>
            <span>E</span>
            <span>R</span>
            <span>I</span>
            <span>A</span>
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="img/gjirokastra-final.jpg" alt="">
                <div class="content">
                    <h3>Gjirokastra</h3>
                    <p>Shqipëri</p>
                </div>
            </div>
            <div class="box">
                <img src="img/kruja-final.jpg" alt="">
                <div class="content">
                    <h3>Kruja</h3>
                    <p>Shqipëri</p>
                </div>
            </div>
            <div class="box">
                <img src="img/korce.jpg" alt="">
                <div class="content">
                    <h3>Korça</h3>
                    <p>Shqipëri</p>
                </div>
            </div>
            <div class="box">
                <img src="img/mirusha.jpg" alt="">
                <div class="content">
                    <h3>Mirusha</h3>
                    <p>Kosovë</p>
                </div>
            </div>
            <div class="box">
                <img src="img/gjakova.png" alt="">
                <div class="content">
                    <h3>Gjakova</h3>
                    <p>Kosovë</p>
                </div>
            </div>
            <div class="box">
                <img src="img/gadime.jpg" alt="">
                <div class="content">
                    <h3>Shpella e Gadimes</h3>
                    <p>Kosovë</p>
                </div>
            </div>
            <div class="box">
                <img src="img/Vlora.jpg" alt="">
                <div class="content">
                    <h3>Vlora</h3>
                    <p>Shqipëri</p>
                </div>
            </div>
            <div class="box">
                <img src="img/saranda.png" alt="">
                <div class="content">
                    <h3>Saranda</h3>
                    <p>Shqipëri</p>
                </div>
            </div>
            <div class="box">
                <img src="img/ksamil.jpg" alt="">
                <div class="content">
                    <h3>Ksamil</h3>
                    <p>Shqipëri</p>
                </div>
            </div>

        </div>

    </section>
    <!-- Fundi i galerise -->

    <?php
        include('includes/footer.php');
    ?>
 

</body>
</html>