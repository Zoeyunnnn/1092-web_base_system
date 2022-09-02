<?php
session_start();
function htmlHead(){
?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<?php
}
function product(){
?>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
<?php
}
function navBar(){
    include('db_conn.php');
    $account = $_SESSION['account'];
?>
    <div id="user">
        <a data-bs-toggle="modal" data-bs-target="#myInfo"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#4F6D7A" class="bi bi-person-circle" viewBox="0 0 16 16">  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path></svg></a>
        <div class="modal fade" id="myInfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #C0D6DF; margin-top: 15vh;">
                    <div class="modal-header">
                        <h5 class="modal-title text-center" id="exampleModalLabel" style="font-family: FangSong;">會員資訊</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                    <?php
                        if (isset($account)) {
                            $sql = "SELECT * FROM `user_indentify` WHERE `account` = '$account'";
                            $result = mysqli_query($link, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "
                                    <div class=\"text-center\"><img src=\"$row[image]\" class=\"rounded-circle\" alt=\"user\" width=\"100\" height=\"100\"></div>
                                    <br/>
                                    <div class=\" text-info\" style=\"width: 90%; margin: auto; text-align: left;\">
                                    <h4>暱稱：$row[name]</h4>
                                    <h4>年齡：$row[age]</h4>
                                    <h4>性別：";
                                if("$row[sex]"=="1") {echo "女</h4>";}
                                else {echo "男</h4>";}
                                $time = explode(' ', "$row[create_time]");
                                echo "<h4>會員建立時間：$time[0]</h4></div>
                                <button type=\"button\" class=\"btn btn-secondary\" style=\"margin: 1rem;\" onclick=\"javascript:location.href='logout.php'\">LogOut</button>";
                            }
                        }else{
                            echo "<div class=\" text-center\" style=\"width: 90%; margin: auto;\"><h4>尚未登入！</h4>
                            <button type=\"button\" class=\"btn btn-light\" style=\"margin: 1rem;\" onclick=\"javascript:location.href='login.php'\">Login</button>
                            <button type=\"button\" class=\"btn btn-secondary\"style=\"margin: 1rem;\" onclick=\"javascript:location.href='signup.php'\">Register</button></div>";
                        }?>
                    </div>
                </div>
            </div>
        </div>
        <a style="margin-left: 1vw;" data-bs-toggle="offcanvas" href="#userCart" role="button" aria-controls="userCart"><svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#4F6D7A" class="bi bi-heart" viewBox="0 0 16 16">
            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/></svg></a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="userCart" aria-labelledby="userCartLabel">
            <div class="offcanvas-header">
                <!-- <h5 id="userCartLabel">Offcanvas right</h5> -->
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                還未收藏商品
            </div>
        </div>
    </div>

    <h1 class="name" style="font-size: 4rem; width:30vw; font-family: 'Mate SC', serif; color: #4F6D7A !important; margin-left: 3vw;">Lynnlin</h1>   
    <div class="link-top1"></div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="top:-2vh; width:40vw; margin:0px auto; background-color: #EAEAEA !important;">
        <div class="container-fluid" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" >
                <div class="navbar-nav" style="font-size:35px; font-family: 'Mate SC', serif;">
                    <a class="nav-link active" aria-current="page" href="http://120.108.111.150:18080/~zoe/final/index.php" style="color: #666565">Home</a>
                    <a class="nav-link" href="http://120.108.111.150:18080/~zoe/final/productlist.php#" style="color: #666565 !important">New</a>
                    <a class="nav-link" href="http://120.108.111.150:18080/~zoe/final/garment.php#" style="color: #666565 !important">Garment</a>
                    <a class="nav-link" href="http://120.108.111.150:18080/~zoe/final/dress.php#" style="color: #666565 !important">Dress</a>
                    <a class="nav-link" href="http://120.108.111.150:18080/~zoe/final/outwear.php#" style="color: #666565 !important">Outwear</a>
                </div>
            </div>
        </div>
    </nav>
<?php
}
function getfooter(){
?>
    <div class="link-top3"></div>
    <footer class="page-footer font-small indigo">
        <div class="container text-center text-md-left">
            <!-- Grid row -->
            <div class="row">
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-3 mx-auto">
                    <!-- Links -->
                    <h3 class="font-weight-bold text-uppercase mt-3 mb-4">CONTECT</h3>

                    <ul class="list-unstyled" style="margin-top: 5vh;">
                    <li>
                        <h5 style="font-family: 'Mate SC', serif; color: #666565 !important;">DAY OFF ON SUNDAY</h5>
                    </li>
                    <li>
                        <h5 style="font-family: 'Mate SC', serif; color: #666565 !important;">EMAIL : lynnlin@gmail.com</h5>
                    </li>
                    </ul>
                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">
                <!-- Grid column -->
                <div class="col-md-3 mx-auto">
                    <!-- Links -->
                    <h3 class="font-weight-bold text-uppercase mt-3 mb-4" >ABOUT US</h3>
                    <ul class="list-unstyled" style="margin-top: 4vh;">
                        <li>
                            <a href="https://shopee.tw/lynnlin_studios?smtt=0.0.9" style="margin-right: 3vw; text-decoration: none;">
                                <img src="https://cfshopeetw-a.akamaihd.net/file/34d7f8da0414d2c6c7c0c2ed1c26a12d" width="50" height="50" style="filter:grayscale(100%);">
                            </a>
                            <a href="https://www.instagram.com/lynnlin_studios/?utm_medium=copy_link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#666565" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 mx-auto">

                    <!-- Links -->
                    <h3 class="font-weight-bold text-uppercase mt-3 mb-4">WE ARE</h3>
                    <ul class="list-unstyled">
                    <li>
                        <h1 style="margin-top: -2vh;font-size: 4rem; font-family: 'Mate SC', serif; color: #666565 !important;">Lynnlin</h1>
                    </li>
                    <li>
                        <h5 style="font-size: 1rem; font-family: 'Mate SC', serif; color: #666565 !important;">By a new mood!</h5>
                    </li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <div class="footer-copyright text-center py-3" >薛世佑科技股份有限公司</div>
    </footer>
<?php
}
?>