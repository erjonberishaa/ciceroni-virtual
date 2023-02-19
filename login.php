<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Kyqu</title>
</head>

<body>
    
    <?php
        include('includes/header.php');
    ?>


    <!-- Fillimi i Login  -->
    <section class="login" id="login">

        <h1 class="heading">
            <span>K</span>
            <span>Y</span>
            <span>Q</span>
            <span>U</span>
            <br><br>
            <span>T</span>
            <span>A</span>
            <span>N</span>
            <span>I</span>
        </h1>

        <div class="row">

            <div class="image">
                <img src="img/contact-img.svg" alt="">
            </div>

            <div class="wrapper">
                <form action="#">
                    <div class="field email">
                        <div class="input-area">
                            <input type="text" placeholder="Email Address">
                            <i class="icon fas fa-envelope"></i>
                            <i class="error error-icon fas fa-exclamation-circle"></i>
                        </div>
                        <div class="error error-txt">Email can't be blank</div>
                    </div>
                    <div class="field password">
                        <div class="input-area">
                            <input type="password" placeholder="Password">
                            <i class="icon fas fa-lock"></i>
                            <i class="error error-icon fas fa-exclamation-circle"></i>
                        </div>
                        <div class="error error-txt">Password can't be blank</div>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>

        </div>
        <script src="script.js"></script>

    </section>
    <!-- Fundi i login -->

    <?php
        include('includes/footer.php');
    ?>

</body>
</html>