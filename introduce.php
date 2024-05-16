<?php
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>پزشکان</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<form action="" method="post" class="was-validated col-lg-9" style="margin-bottom: 50px; margin-right:-185px; ;position: absolute;right:25%;direction: rtl;float: right !important;background-color:white;border-radius:30px;padding: 20px " enctype="multipart/form-data">
  <h2 style="text-align: center;">مطب متخصصین </h2>
<div class="table-responsive">
                    <table id="table" class="table table-bordered table-striped m-2" style="border-radius: 30%;width:1000px;height:500px;">
                
                    <thead style="text-align: center;" >
                         <th><svg width="100" height="100" 
                         xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                         <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"/></svg>
                         </svg>
                      <circle cx="50" cy="50" r="40"
                        stroke="black" stroke-width="4" fill="white" />
                     
                      </svg></th> 
                    <th><svg width="100" height="100"
                  xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                  <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"/></svg>
                        <circle cx="50" cy="50" r="40"
                        stroke="black" stroke-width="4" fill="white" />
                     
                      </svg></th> 
                      <th><svg width="100" height="100"
                       xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                      <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"/></svg>
                        <circle cx="50" cy="50" r="40"
                        stroke="black" stroke-width="4" fill="white" />
                     
                      </svg>

                        </thead>
                        <tbody>
                                <tr>
                                <td style="background-color:aliceblue;text-align:center;">
                                <i class='fas fa-user-tie' style='font-size:80px;color:cornflowerblue'></i>
                                
                                <h3> دکتر مصطفی محمدی  </h3>
                            
                                <b style="color :blue">  تخصص  </b> 
                                <br><br>
                                <b style="color: red"> قلب و عروق   </b> 
                                <br>
                                <br>
                                <strong style = "color :green" >اولین نوبت : </strong>
                                    <button class="btn btn-outline-primary">امروز</button>
                                <br><br>
                                <b>کردستان ، سقز  </b>
                                <br><br>
                                <button style="color:blueviolet ;font-size:20px">دریافت نوبت </button>
                                </td>

                                <td style="background-color:aliceblue;text-align:center;">
                                <i class='fas fa-user-tie' style='font-size:80px;margin-top:5px;color:cornflowerblue'></i>
                               
                                 <h3> دکتر نادر فرجی  </h3>

                             <b style="color :blue">  متخصصین  </b> 
                              <br><br>
                               <b style="color: red"> کودکان و نوزادان  </b> 
                               <br>
                               <br>
                              <strong style = "color :green" >اولین نوبت : </strong>
                                    <button class="btn btn-outline-primary">شنبه : ۲۳ دی </button>
                                <br><br>
                                <b>کردستان ، سقز </b>
                                <br><br>
                                <button style="color:blueviolet ;font-size:20px">دریافت نوبت </button>
                                <td style="background-color:aliceblue;text-align:center;">
                                <i class='fas fa-user-tie' style='font-size:80px;color:cornflowerblue'></i>
                                
                                <h3> دکتر دریا سرحدی  </h3>

                              
                                <b style="color :blue"> عمومی  </b> 
                                <br><br>
                                <b style="color: red"> پوست ، مو   </b> 
                                <br>
                                <br>
                                <strong style = "color :green" >اولین نوبت : </strong>
                                    <button class="btn btn-outline-primary">شنبه : ۲۳ دی </button>
                                <br><br>
                                <b>کردستان ، سنندج  </b>
                                <br><br>
                                <button style="color:blueviolet ;font-size:20px">دریافت نوبت </button>
                                </td>

                                </tr>
                        </tbody>
                    </table>
   </div>
</form>

<hr>
<br>

<form action="" method="post" class="was-validated col-lg-9" style="margin-top: 500px; margin-right:-185px; ;position: absolute;right:25%;direction: rtl;float: right !important;background-color:white;border-radius:30px;padding: 20px " enctype="multipart/form-data">
<hr>
<br><br>
<h2 style="text-align: center;">عمومی</h2>

<div class="table-responsive">
                    <table id="table" class="table table-bordered table-striped m-2" style="border-radius: 30%;width:1000px;height:500px;">
               
                       <thead style="text-align: center;" >
                         <th><svg width="100" height="100" 
                         xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"/></svg>
                         </svg>
                      <circle cx="50" cy="50" r="40"
                        stroke="black" stroke-width="4" fill="white" />
                     
                      </svg></th> 
                    <th><svg width="100" height="100"
                  xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                  <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"/></svg>
                        <circle cx="50" cy="50" r="40"
                        stroke="black" stroke-width="4" fill="white" />
                     
                      </svg></th> 
                      <th><svg width="100" height="100"
                       xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512">
                      <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zM104 424c0 13.3 10.7 24 24 24s24-10.7 24-24-10.7-24-24-24-24 10.7-24 24zm216-135.4v49c36.5 7.4 64 39.8 64 78.4v41.7c0 7.6-5.4 14.2-12.9 15.7l-32.2 6.4c-4.3 .9-8.5-1.9-9.4-6.3l-3.1-15.7c-.9-4.3 1.9-8.6 6.3-9.4l19.3-3.9V416c0-62.8-96-65.1-96 1.9v26.7l19.3 3.9c4.3 .9 7.1 5.1 6.3 9.4l-3.1 15.7c-.9 4.3-5.1 7.1-9.4 6.3l-31.2-4.2c-7.9-1.1-13.8-7.8-13.8-15.9V416c0-38.6 27.5-70.9 64-78.4v-45.2c-2.2 .7-4.4 1.1-6.6 1.9-18 6.3-37.3 9.8-57.4 9.8s-39.4-3.5-57.4-9.8c-7.4-2.6-14.9-4.2-22.6-5.2v81.6c23.1 6.9 40 28.1 40 53.4 0 30.9-25.1 56-56 56s-56-25.1-56-56c0-25.3 16.9-46.5 40-53.4v-80.4C48.5 301 0 355.8 0 422.4v44.8C0 491.9 20.1 512 44.8 512h358.4c24.7 0 44.8-20.1 44.8-44.8v-44.8c0-72-56.8-130.3-128-133.8z"/></svg>
                        <circle cx="50" cy="50" r="40"
                        stroke="black" stroke-width="4" fill="white" />
                     
                      </svg></th>

                        </thead>
                        <tbody>
                                <tr>
                                </td>

                                <td style="background-color:aliceblue;text-align:center;">
                                <i class='fas fa-user-tie' style='font-size:80px;color:cornflowerblue'></i>
                               <br>
                                <h3> دکتر کوشا توانایی  </h3>

                                <br>
                                <b style="color :blue"> مطب عمومی  </b> 
                                <br><br>
                                <b style="color: red"> پوست ، مو و داخلی  </b> 
                                <br>
                                <br>
                                <strong style = "color :green" >اولین نوبت : </strong>
                                    <button class="btn btn-outline-primary">امروز</button>
                                <br><br>
                                <b>کردستان ، سقز  </b>
                                <br><br>
                                <button style="color:blueviolet ;font-size:20px">دریافت نوبت </button>
                                </td>

                              

                                <td style="background-color:aliceblue;text-align:center;">
                                <i class='fas fa-user-tie' style='font-size:80px;color:cornflowerblue'></i>
                                <br>
                                <h3> دکتر دریا سرحدی  </h3>

                                <br>
                                <b style="color :blue"> عمومی  </b> 
                                <br><br>
                                <b style="color: red"> گوارش   </b> 
                                <br>
                                <br>
                                <strong style = "color :green" >اولین نوبت : </strong>
                                    <button class="btn btn-outline-primary">شنبه : ۲۳ دی </button>
                                <br><br>
                                <b>کردستان ، سنندج  </b>
                                <br><br>
                                <button style="color:blueviolet ;font-size:20px">دریافت نوبت </button>
                                </td>


                                <td style="background-color:aliceblue;text-align:center;">
                                <i class='fas fa-user-tie' style='font-size:80px;color:cornflowerblue'></i>
                                <br>
                                <h3> دکتر محمد مظاهری  </h3>

                                <br>
                                <b style="color :blue"> عمومی  </b> 
                                <br><br>
                                <b style="color: red"> پزشک خانواده   </b> 
                                <br>
                                <br>
                                <strong style = "color :green" >اولین نوبت : </strong>
                                    <button class="btn btn-outline-primary">شنبه : ۲۳ دی </button>
                                <br><br>
                                <b>کردستان ، سنندج  </b>
                                <br><br>
                                <button style="color:blueviolet ;font-size:20px">دریافت نوبت </button>
                                </td>

                                </tr>
                        </tbody>
                    </table>
   </div>
</form>
</body>
</html>
