
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>

    <div class="login-form">

                <form  action="/Controllers/controlLogin.php" method="post" class="sign-form">
                <h2>Welcome Public</h2>
                        <div>
                        <label for="name">Firstname :</label><br>
                        <input type="text"  id="name"  name="name">
                        </div>
                        <div>
                        <label for="lastname">Lastname :</label><br>
                        <input type="text"  id="lastname"  name="lastname">
                        </div>
                        
                        <div  class="button">
                        <button  type="submit">Log in</button>
                        </div>
                            
                    </form>


    </div>            
</body>
</html>
