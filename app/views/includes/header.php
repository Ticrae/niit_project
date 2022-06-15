<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo URLROOT ?>/public/css/style.css">
    <link rel="stylesheet" href="css/fontawesome-free-5.15.4-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&display=swap" rel="stylesheet">
    <script src="<?php echo URLROOT ?>/public/js/date.js"></script>
</head>
<body onload="displayCurrentDate()">
   

    <?php require APPROOT . '/views/includes/navbar.php' ?>

    <main id="pageall">
        <section class="sec-1">
            <div class="sec1-con1">
                <div class="image-sec1">
                    <img src="img/1.jpg" alt="">
                    <p class="image-p">Thomas Frey/Agence France-Presse — Getty Images</p>
                </div>
                <div class="sec1-grid1">
                    <h3 onclick="window.open('https://www.washingtonpost.com/world/2022/01/13/germany-syria-war-crimes-trial/')" class="sec1-3"><?php print_r($data['posts'][0]->title) ?></h3>
                    <h5 class="sec1-5"><?php print_r($data['posts'][0]->description) ?></h5>
                    <h6 class="sec1-tail">19h ago</h6>
                    <h6 id="sec1-tails"><?php print_r($data['posts'][0]->author) ?></h6>
                </div>
                <!-- <div class="sec1-grid1">
                    <h3 class="sec1-3">How a Syrian War Criminal Was Brought to Justice — in Germany</h3>
                    <h5 class="sec1-5">When refugees won historic convictions against the Syrian torture 
                        regime, they also opened a new front in the global fight for human rights
                    </h5>
                    <h6 class="sec1-tail">19h ago</h6>
                    <h6 id="sec1-tails">By SONIA SHAH and TYLER COMRIE</h6>
                </div> -->
            </div>
    <?php require APPROOT . '/views/includes/sec1.php' ?>

    <?php require APPROOT . '/views/includes/sec2.php' ?>

    <?php require APPROOT . '/views/includes/sec3.php' ?>
    
    <?php require APPROOT . '/views/includes/sec4.php' ?>

    <?php require APPROOT . '/views/includes/sec5.php' ?>

    <?php require APPROOT . '/views/includes/footer.php' ?>