<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>NFTea Sign in</title>
</head>

<body>
    <!-- HEADER -->
    <header>
        <a id="logo" href="index.php">NFT<span style="color: #7C24D5;">ea</span></a>
        <nav class="nav__bar">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="collections.php">Collections</a></li>
                <li><a href="NFT.php">NFTs</a></li>
            </ul>
            <div class="sign_in__button">
                <button style="background: white;"><a href="sign-in.php" style="color: #7C24D5;">Sign in</a></button>
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
            <h1>Welcome to our <span style="color: #7C24D5;">NFT</span> plateform</h1>
            <p>We are happy to host your art</p>
        </div>
        <form action="./php/connection.php" class="sign__in__form" method="post">
            <?php if (isset($_GET['error'])) { ?>
            <p style="color: red;">
                <?php echo $_GET['error']; ?>
            </p>
            <?php } ?>
            <div class="user__name__container">
                <input type="text" name="user__name" id="user__name" placeholder="User name">
                <p>we will creat an account for you if you dont have one</p>
            </div>
            <div class="password__container">
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <div class="submit__container">
                <input type="submit" value="Submit">
            </div>
        </form>
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
    <script src="./script/app.js"></script>
</body>

</html>