<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home - Interview Assistant</title>
      <link rel="stylesheet" href="font-awesome/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/base.css">
      <link rel="stylesheet" href="css/app.css">
    </head>
    <body class="container-fluid mainbody">
    <div class="row" id="header">
        <div class="col-12 align-content-center text-left">
            <h1>LIS NEPAL</h1>
            <h1 class="text-capitalize text-center h1" id="  header-website-text">Interview Assistant</h1>
        </div>

    </div>
    <div class="cont    ainer-fluid" id="body-content">
        <div class="row align-content-center">
            <form class="login-form">
                <h1 class="text-primary text-center mb-5 pb-3">Login Required</h1>
                <div class="form-group form-inline">
                    <div class="col-2 pr-2  text-center">
                        <i class="fa fa-user "></i>
                    </div>

                    <input type="text" class="form-control col-10" placeholder="Email Address" title="email address"
                           id="id_username">

                </div>
                <div class="form-group form-inline log-status">
                    <div class="col-2 pr-2 text-center">
                        <i class="fa fa-lock pr-2"></i>
                    </div>
                    <input type="password" class="form-control col-10" id="id_password" title="password">

                </div>


                <div class="text-right">
                    <span class="error">Invalid Credentials</span>
                    <a class="link" href="#">Lost your password?</a>
                    <button id="login-btn" type="submit" class="match-parent-width   mt-4">Login</button>
                </div>
            </form>
        </div>

        {{-- <a href="admin/home.html"> Admin Home</a><br/>
        <a href="interviewer/home.html">Interviewer Home</a> --}}
    </div>

    </body>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/app.js"></script>
</html>
