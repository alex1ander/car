<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wdth,wght@8..144,25..151,100..1000&display=swap" rel="stylesheet">

</head>
<body>



    <?php include 'header.php'; ?>
    <main>
        <?php 
        include 'components/preloader.php'; 
        ?>
        <?php include 'components/hero.php'; ?>
        <?php include 'components/built-solutions.php'; ?>
        <?php include 'components/core-expertise.php'; ?>
        <?php include 'components/the-foundetion.php'; ?>
        <?php include 'components/about-us.php'; ?>
        <?php include 'components/comunication.php'; ?>
        <?php include 'components/pop-up-form.php'; ?>
        <?php include 'components/blog.php'; ?>
        <?php include 'components/faq.php'; ?>
    </main>
    <?php include './assets/icons/sprite.svg'; ?>
    <?php include 'footer.php'; ?>
</body>
</html>