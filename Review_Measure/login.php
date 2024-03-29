<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TMI REVIEW - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!--<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>-->
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h1 text-blue-400 mb-5">TMI REVIEW</h1>
                  </div>
                  <form action='login2.php' name='login' method='get'>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="id" aria-describedby="emailHelp" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">로그인 정보 저장</label>
                      </div>
                    </div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" value="로그인">
                    <hr>
                    <a href="main.php" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i>Google 로그인
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Facebook 로그인
                    </a>
                    <hr>
                  </form>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">비밀번호를 잊으셨나요?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">회원가입</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
