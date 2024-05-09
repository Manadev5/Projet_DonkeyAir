<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/df3c8d82d5.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav>
            <div class="top">
                <div class="logo-top-left">
                    <a class="nav-link" href="index.php"><img src="logo_Donkeyair.png" height="70px" style="margin-top:1%;"></a>
                </div>
                <div class="right">                
                    <?php if(isset($_SESSION['admin_log'])){?>
                    

                    <li class="nav-item">
                    <a class="nav-link" href="pageTickets.php"><i class="fa-solid fa-table-list"></i>&#160Tickets</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="pageCreate.php"><i class="fa-solid fa-circle-plus"></i>&#160Create</a>
                    </li>
                    

                    <li class="nav-item">
                        <a class="nav-link" href="Controllers/controlLogoutA.php"><i class="fa-solid fa-person-walking-arrow-right"></i>&#160Logout</a>
                    </li>
                    <?php }else if(isset($_SESSION['user_log'])){?>
                        
                    <li class="nav-item">
                    <a class="nav-link" href="pageBasket.php"><i class="fa-solid fa-basket-shopping"></i>&#160Basket</a>     
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="Controllers/controlLogoutU.php"><i class="fa-solid fa-person-walking-arrow-right"></i>&#160Logout</a>     
                    </li>
                    <?php }else{?>
                    <li class="nav-item">
                    
                    <a class="nav-link" href="pageAdmin.php"><i class="fa-solid fa-screwdriver-wrench"></i>&#160Admin</a>
                    </li>
                    <li class="nav-item">
                    
                    <a class="nav-link" href="pageLogin.php"><i class="fa-solid fa-right-to-bracket"></i>&#160Login</a>
                    </li>
                    <?php } ?></div>
                </div>
            </div>
       </nav>
        
    </body>
</html>