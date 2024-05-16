<?php
include 'header.php';
?>
<!doctype html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/css_main.css">
    <script src="bootstrap/js/jquery3.js"></script>
    <title>رزرو نوبت</title>
</head>
<body>

<form action="" method="post" class="was-validated col-lg-4"
      style="position: absolute;right:33%;top:120px;direction: rtl;float: right !important;background-color:powderblue;border-radius: 5px;padding: 20px ">
    <div class="form-group">
        <labe style="float: right;">نام  </labe>
        <input type="text" class="form-control" id="name" 
               name="name" required>
        <div class="valid-feedback">معتبر است.</div>
        <div class="invalid-feedback" style="text-align: right;margin-right: 20px;">لطفا فیلد مورد نظر را پر کنید.</div>
    </div>
    <div class="form-group">
        <label style="float: right;">نام خانوادگی </label>
        <input type="text" class="form-control"  name="lastname"
               required>
        <div class="valid-feedback">معتبر است.</div>
        <div class="invalid-feedback" style="text-align: right;margin-right: 20px;">لطفا فیلد مورد نظر را پر کنید.</div>
    </div>

    <div class="form-group">
        <label style="float: right;">شماره همراه</label>
        <input type="number" class="form-control"  name="phone"
               required>
        <div class="valid-feedback">معتبر است.</div>
        <div class="invalid-feedback" style="text-align: right;margin-right: 20px;">لطفا فیلد مورد نظر را پر کنید.</div>
    </div>


    <div class="form-group">
        <label for="type" style="float: right;">تخصص</label>
        <div class="form-group">
            <select name="type"  class="form-control">
                <option value="پزشک عمومی">پزشک عمومی</option>
                <option value="قلب و عروق ">قلب و عروق </option>
                <option value="چشم پزشکی">چشم پزشکی</option>
                <option value="گوارش ، کبد ">گوارش ، کبد </option>
                <option value="مجاری ادراری">مجاری ادراری</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-success" name="submit" style="float: right">رزرو نوبت </button>
    <a href="index.php" class="btn btn-warning">خانه</a>
    <?php
    $database = new PDO('mysql:host=localhost;dbname=neg',"root","");

    if (isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone']; 
        $type = $_POST['type'];

        $sql = "INSERT into `nobat` (`name`,`lastname`,`phone`,`type`) VALUES (?,?,?,?) " ;
        $query = $database->prepare($sql);
        $result = $query->execute([$name,$lastname,$phone,$type]);
    

        if ($database) {
            if ($result) {
                echo "<script>alert('اطلاعات با موفقیت ثبت شد')</script>";
             
            }
            else
            {
                echo "<script>alert('مجدد تلاش کنید، اطلاعات اشتباه است')</script>";
            }
        }
        else
        {
            echo 'cannot connect database';
        }
    }
    ?>
</form>
</body>
</html>
