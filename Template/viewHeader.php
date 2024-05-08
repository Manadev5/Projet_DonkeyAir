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
                    <a class="nav-link" href="index.php?page=home">home</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=tickets">tickets</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=create">create</a>
                    </li>
                  

                    <li class="nav-item">
                       <a class="nav-link" href="index.php?page=log-out-admin">log-out</a>
                    </li>
                    <?php }else if(isset($_SESSION['user_log'])){?>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=home">home</a>
                    </li>
                        
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=basket">basket</a>     
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=log-out">log-out</a>     
                    </li>
                    <?php }else{?>
                    <li class="nav-item">
                    <a class="nav-link" href="iindex.php?page=home">home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=admin">admin</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php?page=login">login</a>
                    </li>

                    <?php } ?>
                </ul>
               
                </div>
            </div>
       </nav>
        
    </body>
</html>