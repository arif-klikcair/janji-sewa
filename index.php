<?php require_once "constant.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$meta_title?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=”robots” content="none">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$meta_description?>">
    <meta name="keywords" content="<?=$meta_keyword?>">

    <link rel="shorcut icon" href="assets/images/favicon-janjisewa.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossOrigin="anonymous" />
    <link href="assets/style.css" rel="stylesheet" />

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossOrigin="anonymous"
    ></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VZ9QSM957B"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VZ9QSM957B');
    </script>
</head>

<body>
    <div class="wrapper">
        <div class="container">
            <?php include "pages/layout/header.php";?>
            <section>
                <?php
                    //Set page active
                    empty($_GET['page']) ? $page = 'index' : $page = $_GET['page'];
                    
                    switch($page){
                        case "faq":
                            include "pages/faq.php"; break;
                        case "tentang-kami":
                            include "pages/about.php"; break;
                        default :
                            include "pages/home.php"; break;
                    }
                ?>
            </section>
            <?php include "pages/layout/footer.php";?>
        </div>
    </div>
</body>
</html>