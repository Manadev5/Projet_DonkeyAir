

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Sign In Admin</title>
</head>
<body>
    <div class="login-form">
        <form  action="/Controllers/controlConnexion.php" method="post" class="sign-form">
        <h2>Welcome Admin</h2>
                <div>
                    <label for="name">Name :</label><br>
                    <input type="text"  id="name"  name="name">
                </div>
                <div>
                    <label for="passsword">Password :</label><br>
                    <input type="password"  id="password"  name="password">
                </div>
                <div class="button">
                    <button  type="submit" require>Log In</button>
                </div> 
                
                          
            </form>

        </div>

 
</body>
</html>



