<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Manager Login</title>
    <link rel="stylesheet" href="../assets/css-js/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        body {
            background: #eee !important;
        }
        .wrapper {
            margin-top: 80px;
            margin-bottom: 80px;
        }
        .form-signin {
            max-width: 380px;
            padding: 15px 35px 45px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.1);
        .form-signin-heading,
        .checkbox {
            margin-bottom: 30px;
        }
        .checkbox {
            font-weight: normal;
        }
        .form-control {
            position: relative;
            font-size: 16px;
            height: auto;
            padding: 10px;
        @include box-sizing(border-box);

        &:focus {
             z-index: 2;
         }
        }

        input[type="text"] {
            margin-bottom: -1px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
        }

        input[type="password"] {
            margin-bottom: 20px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <form class="form-signin" action="activateUsers.php" method="POST">
            <h2 class="form-signin-heading">Manager login</h2><br>
            <input type="text" class="form-control" name="username" placeholder="username is manager" required="" autofocus="" /><br>
            <input type="password" class="form-control" name="password" placeholder="password is manager" required=""/><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="managerLogin" id="managerLogin">Login</button>
        </form>
</div>
</body>
</html>
