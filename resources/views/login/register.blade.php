<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>TINVES | Register </title>

   <!-- General CSS Files -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

   <!-- CSS Libraries -->
   <link rel="stylesheet" href="../node_modules/bootstrap-social/bootstrap-social.css">

   <!-- Template CSS -->
   <link rel="stylesheet" href="../assets/css/style.css">
   <link rel="stylesheet" href="../assets/css/components.css">
   <style>
    body {
     background-image: url('assets/img/bg.jpg');
     background-repeat: no-repeat;
     background-size:cover;
  }
  </style>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="../assets/img/logoo.png" alt="logo" width="200" class="bg-transparent">
            </div>

            <div class="card card-primary">
              <div class="card-header justify-content-center"><h4>Register</h4></div>

              <div class="card-body">
                <form action="/registeruser" method="post">
                    @csrf
                    <!-- <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div> -->
                    <!-- <div class="input-group mb-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                        <div class="input-group-append">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" name="email" placeholder="Email">
                        <div class="input-group-append">
                        <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                      <div class="input-group-append">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div> -->
                   <div class="form-group">
                    <label for="text">Nama</label>
                    <input id="text" type="text" class="form-control" name="name" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                    </div>
                   </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" name="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="form-group">

                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                        <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-1">
                      Register
                        </button>
                    <div class="text-center mt-3 "> <a href="/">Back to Login</a></div>
                    {{--  <button type="button" class="btn btn-success btn-lg">Login<a href="/"></a>

                    </button>  --}}
                  </div>
                </form>

              </div>
            </div>
            {{--  <div class="simple-footer bg-primary text-bold text-white">
              Copyright &copy; ITSD 2022
            </div>  --}}
          </div>
        </div>
      </div>
    </section>
  </div>

   <!-- General JS Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

   <!-- JS Libraies -->

   <!-- Template JS File -->
   <script src="../assets/js/scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

   {{--  Page Specific JS File  --}}
 </body>
</html>
