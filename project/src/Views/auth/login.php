<?php
    require_once "../../../vendor/autoload.php";

    use App\Controllers\AuthController ;
    use App\Controllers\SignUpController ;

    if(isset($_POST["login"])){
        
        if(empty($_POST["email"]) || empty($_POST["password"] )){

            echo"email or password inccorect";

        }else{

            $email = $_POST["email"];
            $password = $_POST["password"];

            $login = new AuthController ;
            $login->login($email,$password);
        }
    }

    
    if(isset($_POST["sign_up"])){
        
        if(empty($_POST["role"]) || empty($_POST["email"]) || empty($_POST["password"] ) ){

            echo "email or password already exist";            
        }else{
            $role = $_POST["role"];
            $email = $_POST["email"];
            $password = $_POST["password"];

            $signup = new SignUpController ;
            $signup->signUp($email,$password,$role);
        }

    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style_login.css">
    <title>Signin & Sign up</title>
</head>

<body>
    <div class="wrapper">
        <div class="form-container sign-up">
            <form action="" method="POST">
                <h2>sign up</h2>
                <div  class="form-group" id="selectentr">
                    <select name="role" id="role">
                        <option value="0">Le role</option>
                        <option value="2">Recruteur</option>
                        <option value="3">Candidat</option>

                    </select>
                </div>
                <div class="form-group">
                    <input type="email" name="email" required>
                    <i class="fas fa-at"></i>
                    <label for="">email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>
                <div id="entreprise" class="form-group">
                    <input type="text" name="company_name" required>
                    <label for="">Entreprise</label>
                </div>
                <!-- <p>echo $_SESSION["Errorsignin"];</p>  -->
                <button type="submit" name="sign_up" class="btn">sign up</button>
                <div class="link">
                    <p>You already have an account?<a href="#" class="signin-link"> sign in</a></p>
                </div>
                <div class="link">

                </div>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="post">
                <h2>login</h2>

                <div class="form-group">
                    <input type="email" name="email" required>
                    <i class="fas fa-user"></i>
                    <label for="">email</label>
                </div>
                <div class="form-group">
                    <input type="password" name="password" required>
                    <i class="fas fa-lock"></i>
                    <label for="">password</label>
                </div>

                <!-- <div class="forgot-pass">
                </div> -->
                <!-- <p> echo $_SESSION["Errorsignup"];</p> -->
                <button type="submit" name="login" class="btn">login</button>
                <div class="link">
                    <p>Don't have an account?<a href="#" class="signup-link"> sign up</a></p>
                </div>

            </form>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/9e5ba2e3f5.js" crossorigin="anonymous"></script>
    <script src="../assets/js/main_login.js"></script>
</body>

</html>