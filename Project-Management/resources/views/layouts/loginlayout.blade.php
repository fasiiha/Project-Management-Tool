<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
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
            @yield('content')
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
                if (patterns[field.name].test(field.value) ) {
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
    </main>
</body>
</html>