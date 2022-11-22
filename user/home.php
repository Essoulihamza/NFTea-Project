<?php
session_start();
if (isset($_SESSION['user_name']) && isset($_SESSION['user__password'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>NFTea Home</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <a id="logo" href="home.php">NFT<span style="color: #7C24D5;">ea</span></a>
        <nav class="nav__bar">
            <ul>
                <li><a href="home.php" style="color: #7C24D4;">Home</a></li>
                <li><a href="collections.php">Collections</a></li>
                <li><a href="NFT.php">NFTs</a></li>
            </ul>
            <div class="sign_in__button">
                <button><a href="./log-out.php">Log out</a></button>
            </div>
        </nav>
        <div class="burger__menu">
            <span class="burger__bar"></span>
            <span class="burger__bar"></span>
            <span class="burger__bar"></span>
        </div>
    </header>
    <!-- HERO SECTION -->
    <section class="hero__section">
        <div class="hook__text__part">
            <h1>Welcome back <span style="color: #7C24D5;">
                    <?php echo $_SESSION['user_name']; ?>
                </span></h1>
            <p>We are happy to host your art</p>
        </div>
        <div class="hook__img__part">
            <img src="../images/monkey-2.jpg" alt="hook image">
        </div>
    </section>
    <!-- FOOTER -->
    <footer>
        <div class="footer__container">
            <p>NFTea 2022. All rights reserved</p>
            <div class="social__media__icons">
                <p>facebook</p>
                <p>instagram</p>
                <p>tiktok</p>
            </div>
        </div>
    </footer>
    <script src="../script/app.js"></script>
</body>

</html>
<?php } else {
    header("Location: ../sign-in.php?error=Something goes wrong!");
    exit();
}
?>