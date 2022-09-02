<?php
session_start();
include('db_conn.php');
include("fun-inc.php");
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mate+SC&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@200&display=swap" rel="stylesheet">
    <?php product(); ?>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Lynnlin</title>
    
    <style>
        #user{
            position: absolute;
            right: 3vw;
            top: 3.5vh;
        }
    </style>
</head> 
<body>
    <?php navBar()?>
    <div class="row featured__filter">
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="image/dress/S__51110188.jpg" style="background-image: url(image/dress/S__51110188.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?一起走花路！碎花連身洋裝">一起走花路！碎花連身洋裝</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="image/dress/S__51110175.jpg" style="background-image: url(image/dress/S__51110175.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?後綁帶牛仔細肩帶短洋裝">後綁帶牛仔細肩帶短洋裝</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fresh-meat">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="image/dress/S__51110194.jpg" style="background-image: url(image/dress/S__51110194.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?側綁帶疊穿背心洋裝">側綁帶疊穿背心洋裝</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood oranges">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="image/dress/10.jpg" style="background-image: url(image/dress/10.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?V領碎花泡泡袖連身裙">V領碎花泡泡袖連身裙</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="image/dress/S__51110166.jpg" style="background-image: url(image/dress/S__51110166.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?美背顯腰背心連身裙">美背顯腰背心連身裙</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fastfood">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="img/dress/S__51109993.jpg" style="background-image: url(image/dress/S__51109993.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?後釦收腰綁帶連身洋裝">後釦收腰綁帶連身洋裝</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix fresh-meat vegetables">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="img/dress/S__51110048.jpg" style="background-image: url(image/dress/S__51110048.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?質感百摺半身裙">質感百摺半身裙</a></h6>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 mix fastfood vegetables">
            <div class="featured__item">
                <div class="featured__item__pic set-bg" data-setbg="img/dress/S__51109896.jpg" style="background-image: url(image/dress/S__51109896.jpg); width:20vw; margin:0px auto;">
                    <ul class="featured__item__pic__hover">
                        <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a></li>
                    </ul>
                </div>
                <div class="featured__item__text">
                    <h6><a href="productMain.php?設計款垂墜感皺摺碎花連身裙">設計款垂墜感皺摺碎花連身裙</a></h6>
                </div>
            </div>
        </div>
    </div>

    <div class="link-top3"></div>

    <div class="container" style="margin-top: 5vh;">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="/image/new/S__51110155.jpg" style="background-image: url(image/new/S__51110155.jpg);">
                    <div class="categories__hover__text">
                        <h5 style="line-height: 4vh !important;">NEW</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="image/garment/S__51110092.jpg" style="background-image: url(image/garment/S__51110092.jpg);">
                    <div class="categories__hover__text" style="width:10vw !important;">
                        <h5 style="line-height: 4vh !important;">GARMENT</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="image/dress/S__51110176.jpg" style="background-image: url(image/dress/S__51110176.jpg);">
                    <div class="categories__hover__text">
                        <h5 style="line-height: 4vh !important;">DRESS</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="categories__item set-bg" data-setbg="image/outwaer/S__51109934.jpg" style="background-image: url(image/outwear/S__51109934.jpg); -webkit-filter:brightness(1.4);">
                    <div class="categories__hover__text" style="width:10vw !important;">
                        <h5 style="line-height: 4vh !important;">OUTWEAR</h5>
                        <p>8 articles</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php getfooter()?>
</body> 
</html> 