<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dash</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/3a3f417346.js" crossorigin="anonymous" defer></script>
    <!-- <link rel="stylesheet" href="./"> -->
</head>
<body class="m-0 p-0 w-100 h-100">
    <!--sidebar-->
    <nav class="side_bar">
        <ul>
            <li>
                <a href="#">
                <h1 class="px-1 mt-4 ms-3 me-5 text-white fw-bolder" style="font-size: 20px">Al-Qanuny القانوني</h1>
                </a>
                <span class="d-none ms-5" onclick="openn()">
                    <i class="fas fa-times"></i> 
                </span>
            </li>
            <li class="text-center">
                <img class="rounded-circle w-50 " src="">
                <h3 class="text-dark "></h3>
                    <!-- <?php echo $_SESSION['name']?> -->
                <p class="text-info ">Admin</p>
            </li>
        </ul>
        <ul class="linklist d-flex flex-column justify-content-center align-items-center  p-1">
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="Tableau">
                    <img class="mx-auto" src="images/svg/home.svg" alt="">
                    <small class="text-light">Users</small>
                </a>
            </li>
            <li class="link mt-3 ps-3 rounded-3 ">
                <a href="nouveauxJuristes">
                    <img class="mx-auto" src="images/svg/cours.svg" alt="">
                    <small class="text-light">Demandes des juristes</small>
                </a>
            </li>

            <li class="link mt-5 ps-3 rounded-3 ">
                <a href="logouat.php">
                    <small class="text-light">Logout</small>
                    <img class="ms-1" src="images/svg/logout.svg" alt="">
                </a>
            </li>
        </ul>
    </nav>

    <div class="nav_bar align-items-center px-3 bg-white">
        <ul class="d-flex m-0 p-0 h-100 justify-content-between align-items-center">
            <li class="d-flex gap-3">
                <span class="d-none" onclick="openn()">
                    <i class="fas fa-bars"></i>
                </span>
                <a href="#">
                    <img src="images/svg/back.svg" alt="">
                </a>
            </li>
            <li class="d-flex gap-3">
                <form class="d-flex justify-content-center align-items-center bg-light rounded-3 h-5">
                    <input type="text" class="rounded-3 bg-transparent" placeholder="  Search..." style="border: transparent;">
                    <span><i class="fas fa-search bg-white h-5 me-2"></i></span>
                </form>
                <div class="">
                    <a href="#">
                        <img src="images/svg/notification.svg" alt="">
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <script src="dash.js"></script>
</body>
</html>