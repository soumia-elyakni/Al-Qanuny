<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Qanuny-القانوني</title>
    <style>
    .rtl {
      direction: rtl;
    }
    </style>
</head>

<body class=".rtl m-0 p-0">
<div class="back-img"></div>
    <!-- nav-->
    <header>
     
      <nav class="rtl navbar navbar-expand-lg bg-transparent fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">القانوني</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="iconify" data-icon="octicon:law-24"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#signin">
                  حساب جديد
                </button> 
              </li>
              <li class="nav-item">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#login">
                  تسجيل الدخول
                </button>
              </li>
              <li class="nav-item dropdown">

            </ul>

          </div>
        </div>
      </nav>
      </header>
    <!-- end nav -->
    

    <main style="margin-top: 100px !important ;">
        <section class="align-items-center p-sm-2 p-5 border-bottom border-white-2 mx-5 mt-5">
            <div class="m-auto mt-sm-2 p-sm-2 p-4 text-center mt-5  ">
                <h1 class="mb-3">القانوني</h1>
                <h3 class="mb-5">خدمة تمكّن عموم الجمهور من البقاء على اتصال بالقرارات والإجراءات المتخذة في الدعاوى
                    الخاصة بهم </br> كما تخول لهم البحث عن محام أو موثق لحل مشاكلهم بأسرع ما يمكن </h3>
            </div>
        </section>
        <div class="m-auto text-end px-5 pt-2 border-bottom border-white-2 mx-5 pb-2">
            <h4><a href="#" class="text-white">وثائق ومسارات</a></h4>
        </div>
        <section>
            <div>
                <h4 class="float-end me-5 mt-5">المحامون</h4>
                
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item  active">
                            <img src=<?php echo dirname("Al-Qanuny/views/img/mr_nobody_new.svg")?> class="d-block w-30" alt="...">
                            <span class="text-center">الاسم الكامل</span>
                          </div>
                          <div class="carousel-item  ">
                            <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                            <span>الاسم الكامل</span>
                          </div>
                          <div class="carousel-item  ">
                            <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                            <span>الاسم الكامل</span>
                          </div>
                          <div class="carousel-item  ">
                            <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                            <span>الاسم الكامل</span>
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                
            </div>
            <div>
                <h4 class="float-end me-5 mt-5">الموثقون</h4>
                
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                      
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                          <span>الاسم الكامل</span>
                        </div>
                        <div class="carousel-item">
                          <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                          <span>الاسم الكامل</span>
                        </div>
                        <div class="carousel-item">
                          <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                          <span>الاسم الكامل</span>
                        </div>
                        <div class="carousel-item">
                          <img src="img/mr_nobody_new.svg" class="d-block w-30" alt="...">
                          <span>الاسم الكامل</span>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
        </section>
    </main>

    <!-- Modal connexion -->
             <div class="modal fade " id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
               <div class="modal-dialog">
                 <div class="rtl modal-content bg-light">
                   <div class="modal-header">
                     <h5 class="modal-title text-primary" id="staticBackdropLabel">تسجيل الدخول</h5>
                     <!-- <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button> -->
                   </div>
                   <form class="modal-body">

                        <input type="text" placeholder="اسم المستخدم" class="mb-5 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;"></br>

                        <input type="text" placeholder="كلمة السر" class="mb-2 text-secondary bg-light" style="border : none; border-bottom: grey solid 1px ;">

                   </form>
                   <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                     <button type="button" class="btn btn-primary">الدخول</button>
                   </div>
                 </div>
               </div>
             </div>

    <!-- Modal inscription-->
   
  <div class="modal fade" id="signin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content p-4" style="direction : rtl;">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">حساب جديد</h5>
          <!--   -->
        </div>
        <div class="modal-body justify-between m-auto">

          <input type="text" placeholder="" name="nom" class="mb-4" id="nom">
 
          <input type="text" placeholder="" name="prenom" class="mb-4" id="prenom">
 
          <input type="text" placeholder="" name="cin" class="mb-4" id="cin">

          <input type="tel" placeholder="" name="tel" class="mb-4" id="tel">
 
          <input type="text" placeholder="" name="ville" class="mb-4" id="ville">
           
          <select name="role" class="" id="role" style="width : 190px">
              <option value="عميل">عميل</option>
              <option value="محام">محام</option>
              <option value="موثق">موثق</option>
          </select>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
          <button type="button" class="btn btn-primary">انشاء</button>
        </div>
      </div>
    </div>
  </div>

     


    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

    <script>
      $(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop() > $(window).height()){
            $(".menu").css({"background-color":"transparent"});   
        }
        else{
            $(".menu").css({"background-color":"white"});
        }

    })
})
    </script>

</body>

</html>
