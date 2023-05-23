<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>
<body>
    <img src="" alt="">
 <div class="container">
 <div class="img">
        <img src="../imagens/undraw_Doctors_p6aq.png" alt="">
       <div class="container-login">
        <form action="../controller/loginController.php" method="post">
            <h2>Farmacia</h2>
            <div class="input-div dni">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>dmi</h5>
                    <input type="text" name="user" class="input">
                </div>
            </div>
            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-lock"></i>
                </div>
                <div class="div">
                    <h5>password</h5>
                    <input type="password" name="pass" class="input">
                </div>
            </div>
            <a href="criar password"></a>
            <input type="submit" value="iniciar sessao" class="btn">
        </form>
        </div>
    </div>
 </div>
</body>
<script src="../js/login.js"></script>
<script src="../bootstrap/js/bootstrap.js"></script>
  <script src="../bootstrap/js/jquery.min.js"></script>
</html>

