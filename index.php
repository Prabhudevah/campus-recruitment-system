<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <?php include './links.php'?>
</head>
<style>
    body{
        background-image: url('../images/1.png');
        height: 500px; /* You must set a specified height */
        background-position: center; /* Center the image */
        background-repeat: no-repeat; /* Do not repeat the image */
        background-size: cover; /* Resize the background image to cover the entire container */
        
    }
    .card{
        width:350px;
        height:370px;
        margin-top:30px;
        border-radius:10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
       
    }
    .btn{
        border-radius:8px;
        padding:8px;
        background-color:#2E4053;
        color:white;
    }
</style>
<body>
    <div class="container">
        <div class="card mx-auto shadow-p">
            <div class="card-body">
                <h4>Sign In</h4>
                <hr>
                <form action="./admin_login.php" method="POST">
                    <div class="form-group">
                        <lable>Username</lable>
                        <input type="emial" class="form-control" name="username" required>
                    </div>

                    <div class="form-group">
                        <lable>Password</lable>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <br>
                    
                    <button type="submit" class="btn btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>