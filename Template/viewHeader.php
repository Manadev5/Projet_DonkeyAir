<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

      <h1 class="title">DonkeyAir</h1>
      <nav>
            <div class="elements-nav">
                <ul >
                    <?php if(isset($_SESSION['admin_log'])){?>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="pageTickets.php">tickets</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="pageCreate.php">create</a>
                    </li>
                  

                    <li class="nav-item">
                       <a class="nav-link" href="Controllers/controlLogoutA.php">log-out</a>
                    </li>
                    <?php }else if(isset($_SESSION['user_log'])){?>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                    </li>
                        
                    <li class="nav-item">
                    <a class="nav-link" href="pageBasket.php">basket</a>     
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="Controllers/controlLogoutU.php">log-out</a>     
                    </li>
                    <?php }else{?>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pageAdmin.php">admin</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="pageLogin.php">login</a>
                    </li>

                    <?php } ?>
                </ul>
               
                </div>
            </div>
       </nav>
        
    </body>
</html>