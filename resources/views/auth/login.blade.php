<!DOCTYPE html>
<html lang="ar" >

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WORLD OCEAN</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                
              <div class="d-flex justify-content-center">
                <a href="/" class=" d-flex align-items-center w-auto" >
                  <img src="{{ URL::asset('assets/img/logo.png') }}" alt="" style="width: 200px">
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">تسجيل الدخول إلى حسابك</h5>
                  </div>
                  @if ($errors->any())
                  <div style="width: 100%; text-align:center; color:rgb(252, 252, 252);background-color:rgb(236, 78, 78);">
                    تاكد من البريد الاكتروني والرقم السري
                  </div>
                  @endif
                  <form method="POST" action="{{ route('login') }}" class="row g-3 needs-validation" novalidate>
                    @csrf
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">البريد الالكتروني</label>
                      <div class="input-group has-validation">
                          <input type="text" name="email" class="form-control" id="yourUsername" required>
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">الرقم السري</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">تذكرني</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">تسجيل الدخول</button>
                    </div>
                    <div class="col-12">
                    </div>
                    <div class="col-12">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main><!-- End #main -->
</body>

</html>