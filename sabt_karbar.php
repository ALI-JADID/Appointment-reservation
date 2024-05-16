<?php
require_once 'header.php';
?>
<html>
<body>

<div class="alert alert-primary text-center" style="margin: 10px 50px;">
     در اینجا میتوانید به عنوان کاربر ثبت نام کنید
</div>

<form action="" method="post" class="was-validated col-lg-4" style="margin-bottom: 50px;position: absolute;right:33%;direction: rtl;float: right !important;background-color:LightPink;border-radius: 5px;padding: 20px " enctype="multipart/form-data">
    <div class="form-group">
        <label for="uname" style="float: right;">نام</label>
        <input type="text" class="form-control" id="uname" placeholder="نام خود را به صورت لاتین وارد کنید" name="name">
       
    </div>
    <div class="form-group">
        <label for="fname" style="float: right;">نام خانوادگی</label>
        <input type="text" class="form-control" id="phonenumber" placeholder="نام خانوادگی خود را وارد کنید" name="lastname">
       <!-- <div class="valid-feedback">معتبر است.</div>  -->
       
    </div>
    <div class="form-group">
        <label for="" style="float: right;">نام کاربری</label>
        <input type="text" class="form-control" id="email" placeholder=" نام کاربری خود را وارد کنید" name="username" required>
        <div class="valid-feedback">معتبر است.</div>
        <div class="invalid-feedback" style="text-align: right;margin-right: 20px;">لطفا فیلد مورد نظر را پر کنید.</div>
    </div>
    <div class="form-group">
        <label for="pass" style="float: right;">پسورد</label>
        <input type="password" class="form-control" id="pass" placeholder=" پسورد خود را وارد کنید" name="password" required>
        <div class="valid-feedback">معتبر است.</div>
        <div class="invalid-feedback" style="text-align: right;margin-right: 20px;">لطفا فیلد مورد نظر را پر کنید.</div>
    </div>

    <div class="form-group">
        <label for="phone" style="float: right;">شماره همراه</label>
        <input type="number" class="form-control" id="phone" placeholder=" شماره همراه خود را وارد کنید" name="phone" required>
        <div class="valid-feedback">معتبر است.</div>
        <div class="invalid-feedback" style="text-align: right;margin-right: 20px;">لطفا فیلد مورد نظر را پر کنید.</div>
    </div>
    <div class="form-group form-check" style="float: right;margin-left: 70px">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember" style="margin-right: -20px; " required> <a
                href="#" style="color: green;font-weight: bolder">قوانین</a> را قبول میکنم.
        </label>
    </div>
    <button type="submit" name="submit" class="btn btn-success" style="float: right">ثبت نام</button>
</form>
</body>
</html>
<?php


if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    
    $database  = new PDO("mysql:host=localhost;dbname=neg", "root", "");
    $sql  = ("INSERT INTO `users` (`name`,`lastname`,`username`,`password`,`phone`) VALUES  (?,?,?,?,?) ");
    $query = $database->prepare($sql);
    $result =  $query->execute([$name,$lastname,$username,$password,$phone]);
    if ($database) {
        if ($result) {
            echo  "اطلاعات با موفقیت ثبت شد";
        } else {
            echo "خطا در ثبت اطلاعات ، مجدد تلاش کنید";
        }
    } else {
        echo "cannot connect database";
    }
}
?>

</form>
</body>
</html>