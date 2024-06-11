<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <script>
        new WOW().init();
    </script>
    <script src="js/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker,#datepicker1").datepicker();
        });
    </script>
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
            box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        }
        .main-content {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            width: 95%;
            max-width: 1200px;
            margin: 20px auto;
        }
        .review-card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 16px;
            transition: transform 0.2s;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .review-card:hover {
            transform: scale(1.05);
        }
        .review-card .left {
            display: flex;
            flex-direction: column;
        }
        .review-card .right {
            text-align: right;
        }
        .review-card .username {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .review-card .package-details {
            color: #555;
            margin-bottom: 0px;
        }
        .review-card .stars {
            color: #ffd700;
            font-size: 2em;
        }
        .review-card .review-text {
            grid-column: span 2;
            margin-top: 5px;
            font-size: 1em;
            color: #555;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php');?>

    <!-- Main content wrapper -->
    <div class="main-content">
        <div class="grid-container">
            <?php
            // Loop to generate 4 rows of 2 cards each
            // for ($i = 1; $i <= 8; $i++) {
                ?>
                <!-- Review Card Example 1 -->
                <div class="review-card">
                    <div class="left">
                        <div class="username"><a style="color:#333333" href="images/deeksh.mp4">Rishikesh Pauly</a><?php echo $i; ?></div>
                        <div class="package-details">Package : Sri Lanka</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★★★</div>
                    </div>
                    <div class="review-text">
                    This package was nothing short of extraordinary. The accommodations were stunning, offering panoramic views of the surrounding landscape. Each activity was meticulously planned, providing a perfect balance of excitement and relaxation.
                    </div>
                </div>
                <!-- Review Card Example 2 -->
                <div class="review-card">
                    <div class="left">
                        <div class="username"><a style="color:#333333" href="images/vaish.mp4">Aarushi Prakash</a><?php echo $i; ?></div>
                        <div class="package-details">Package : Kerala </div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★★☆</div>
                    </div>
                    <div class="review-text">
                    Exploring pristine natural wonders, encountering wildlife in their natural habitat, and immersing myself in the rich culture of the region were just a few highlights of this incredible experience.
                    </div>
                </div>
                <div class="review-card">
                    <div class="left">
                        <div class="username"><a style="color:#333333" href="images/tarun.mp4">Praveen Malhotra</a><?php echo $i; ?></div>
                        <div class="package-details">Package : Coorg</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★★☆</div>
                    </div>
                    <div class="review-text">
                    What an incredible journey! I was swept away by the beauty of the surroundings and the warmth of the local hospitality. Each day brought new adventures, from heart-pounding outdoor activities to immersive cultural experiences.
                    </div>
                </div>
                <!-- Review Card Example 2 -->
                <div class="review-card">
                    <div class="left">
                        <div class="username">Sanjana Deshpande<?php echo $i ; ?></div>
                        <div class="package-details">Package : Malaysia</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★☆☆</div>
                    </div>
                    <div class="review-text">
                    I was greeted with warmth and hospitality that set the tone for the entire journey. The itinerary was packed with thrilling adventures, from heart-pounding outdoor activities to immersive cultural experiences.
                    </div>
                </div>
                <div class="review-card">
                    <div class="left">
                        <div class="username">Jharna Gowda<?php echo $i; ?></div>
                        <div class="package-details">Package : Manali</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★★☆</div>
                    </div>
                    <div class="review-text">
                    I was swept away by the beauty of the surroundings and the warmth of the local hospitality. The itinerary was expertly crafted, offering a perfect balance of adventure and relaxation. Whether I was exploring hidden waterfalls, indulging in gourmet meals, or simply soaking in the natural beauty of the landscape, every moment was unforgettable.
                    </div>
                </div>
                <!-- Review Card Example 2 -->
                <div class="review-card">
                    <div class="left">
                        <div class="username">David Calier<?php  ?></div>
                        <div class="package-details">Package : Gulmarg</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★☆☆</div>
                    </div>
                    <div class="review-text">
                    I was enveloped in a world of luxury and adventure. The accommodations were absolutely stunning, offering panoramic views of the surrounding landscape and all the comforts of home. Each day brought new adventures, from thrilling outdoor activities to immersive cultural experiences.
                    </div>
                </div>
                <div class="review-card">
                    <div class="left">
                        <div class="username">Deeksha Ramesh<?php echo $i; ?></div>
                        <div class="package-details">Package : Coorg</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★★☆</div>
                    </div>
                    <div class="review-text">
                    I was treated to an experience unlike any other. The accommodations were luxurious and comfortable, providing a welcome retreat after each day's adventures. The itinerary was packed with thrilling activities, from heart-pounding outdoor adventures to immersive cultural experiences
                    </div>
                </div>
                <!-- Review Card Example 2 -->
                <div class="review-card">
                    <div class="left">
                        <div class="username">Farha naaz<?php ?></div>
                        <div class="package-details">Package : Malaysia</div>
                    </div>
                    <div class="right">
                        <div class="stars">★★★☆☆</div>
                    </div>
                    <div class="review-text">
                    This package provided an experience unlike any other. From the moment I arrived, I was swept away by the beauty of the surroundings and the warmth of the local hospitality. The itinerary was packed with thrilling adventures, from heart-pounding outdoor activities to immersive cultural experiences.
                    </div>
                </div>
                <?php
            ?>
        </div>
    </div>

    <!-- Footer and other includes -->
    <?php include('includes/footer.php');?>
    <?php include('includes/signup.php');?>
    <?php include('includes/signin.php');?>
    <?php include('includes/write-us.php');?>
</body>
</html>


