<!DOCTYPE html>
 <html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery3.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/css/bootstrap_rtl.css"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="direction: rtl !important;">
   <!-- <img src="ghasedak.jpeg" style="width:80px;height:80px;margin-right:-5px;" alt="قاصدک"> -->
  <h2 style="color:white;margin-right:25px;margin-top:-30px;">بیمارستان </h2> 
  <h6 style="color:white;margin-top:50px;margin-right:-100px;" class="text-nowrap">negin rasouli</h6>
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">خانه</a>
        </li>
        <li class="nav-item" style="direction: rtl;">
            <a class="nav-link text-nowrap" href="nobat.php" id="navbardrop">
            رزرو نوبت
            </a>
           

        </li>
        <li class="nav-item dropdown" style="direction: rtl;">
            <a class="nav-link dropdown-toggle text-nowrap text-center" data-toggle="dropdown">تخصص</a>
            
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">پوست و مو</a>
                <a class="dropdown-item" href="#">گوش حلق بینی</a>
                <a class="dropdown-item" href="#">قلب و عرق</a>
                <a class="dropdown-item" href="#">ارتوپدی</a>
                <a class="dropdown-item" href="#">کلیه و مجاری ادراری</a>
                <a class="dropdown-item" href="#">چشم پزشکی</a>
                <a class="dropdown-item" href="#">گوارش ، کبد</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nowrap" href="tamas.php">تماس با ما</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nowrap" href="introduce.php"> جست و جوی پزشک</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nowrap" href="sabt_doctor.php">عضویت پزشکان</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-nowrap" href="https://jin724.com/mag-list">مجله سلامت</a>
        </li>
    </ul>

    <ul class="navbar-nav">
        <li class="register nav-ite btn btn-outline-info btn-sm" style="margin-left: 5px">
            <a class="nav-link"  href="sabt_karbar.php"> ثبت نام کاربر</a>
        </li>
        <li class="btn btn-outline-success btn-sm dropdown" style="direction: rtl;">
            <a class="nav-link dropdown-toggle text-nowrap" href="" id="navbardrop" data-toggle="dropdown">
               ورود اعضا
            </a>
            <div class="dropdown-menu">
               <a class="dropdown-item" href="doclogin.php">ورود دکتر</a>
                <a class="dropdown-item" href="memberlogin.php">ورود بیمار</a>
               
            </div>
        </li>
    </ul>

</nav>
</body>
 </html>