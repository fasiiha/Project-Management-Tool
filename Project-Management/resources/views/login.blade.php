<?php 
session_start();

if(isset($_SESSION['email'])) {

}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/Sidebar.css" />
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css" />

    <link rel="stylesheet" type="text/css"
        href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
        <div id="header">
            <h4 class="text-uppercase" style="color: white;">Project Management</h4>
        </div>
    </header>

    <main>

        <div class="cont">
            <div class="form sign-in" style="display: flex; flex-direction: column; align-items: center;">
                <h2>Login</h2>
                <form onsubmit="return validate()" action="Home.php" method="post">
                    <label>
                        <span>Email</span>
                        <input type="email" name="email" >
                    </label>
                    <label>
                        <span>Password</span>
                        <input type="password" >
                    </label>
                    <p id="email">Enter a valid address, e.g. me@mydomain.com</p>
                    <button type="submit">Sign In</button>
                </form>

            </div>
            <div class="sub-cont">
                <div class="img">
                    <div class="img__text m--up">
                        <h3>Don't have an account? Please Sign up!<h3>
                    </div>
                    <div class="img__text m--in">

                        <h3>If you already has an account, just sign in.<h3>
                    </div>
                    <div class="img__btn">
                        <span class="m--up">Sign Up</span>
                        <span class="m--in">Sign In</span>
                    </div>
                </div>
                <div class="form sign-up" style="display: flex; flex-direction: column; align-items: center;">
                    <h2>Create your Account</h2>
                    <form onsubmit="return validate()" action="Home.php" method="post">
                        <div>
                            <label>
                                <span>Name</span>
                                <input type="text" name="name" >
                            </label>
                        </div>
                        <p id="name">Name must be alphabets and contain 5-12 characters</p>
                        <div>
                            <label>
                                <span>Email</span>
                                <input type="email" name="email2" >
                            </label>
                        </div>
                        <p id="email2">Email must be a valid address, e.g. me@mydomain.com</p>
                        <div>
                            <label>
                                <span>Password</span>
                                <input type="password" name="password" >
                            </label>
                        </div>
                        <p id="password">Password must be alphanumeric (@,- and _ also included) and be 8-20 characters</p>
    
                        <button type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>


        <script>
            document.querySelector('.img__btn').addEventListener('click', function () {
                document.querySelector('.cont').classList.toggle('s--signup');
            });

            const patterns = {
                name: /^[a-z]{5,12}$/i,
                password: /^[a-z0-9-]{8,20}$/,
                email: /^([a-z0-9\.-]+)@([a-z0-0-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/,
                email2: /^([a-z0-9\.-]+)@([a-z0-0-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/
            }

            function validate(field) {
                if (patterns[field.name].test(field.value)) {
                    field.className = 'valid';
                    document.getElementById(field.name).style.color = "#232733";
                    return true;
                }
                else {
                    field.className = 'invalid';
                    document.getElementById(field.name).style.color = "#cfcfcf";
                    return false;
                }
            }
        </script>
    
        <?php
             session_start();

             if(isset($_SESSION['email'])) {
                header("Location: Home.php");
                exit();
             }

             if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if($email === 'user@gmail.com' && $password === 'pass') {
                    $_SESSION['email'] = $email;
                    header('Location: Home.php');
                    exit();
                }
                else {
                    $error_message = "Invalid email or pass";
                }
             }
        ?>
    </main>
</body>

</html>