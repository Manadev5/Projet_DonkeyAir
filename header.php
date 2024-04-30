<!DOCTYPE html>
<html>
    <head>
        <meta charset="=UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

      <h1 class="title">Cinematheque</h1>
      <nav>
            <div class="elements-nav">
                <ul >
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="accueil.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                    </li>
                    
                    <li class="nav-item">
                    <a class="nav-link" href="admin.php">admin</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="login.php">login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="tickets.php">tickets</a>
                    </li>
                    <?php if (isset($_SESSION['admin_log'])){?>

                    <li class="nav-item">
                    <a class="nav-link" href="create.php">create</a>

                    </li>
                    <?php }?>
                    <li class="nav-item">
                       <a class="nav-link" href="edit.php">edit</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="delete.php">delete</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="basket.php">basket</a>     
                    </li>
                </ul>
                <form class="d-flex" role="search" action="accueil.php" method="GET">
                    <input  type="search" placeholder="Search Serie" aria-label="Search" name="search">
                    <button  type="submit">Search</button>
                </form>
                </div>
            </div>
       </nav>
        
    </body>
</html>