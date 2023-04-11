<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/logo/verdanco-title.png') }}" type="image/icon type">
    <title>Verdanco demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}" class=""> --}}
  </head>
  <body>
    <section class="h-100">
      <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5">
              <img src="{{ asset('images/logo/verdanco-removebg-preview.png') }}" alt="logo" width="200">
            </div>
            <div class="card shadow-lg">
              <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                @if ($message = Session::get('status'))
                <div class="alert alert-danger alert-block">
                  <strong>{{ $message }}</strong>
                </div>
                @endif
                <form method="POST" action="/login" class="needs-validation" novalidate="" autocomplete="off">
                  @csrf
                  <div class="mb-3">
                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>
                    <div class="invalid-feedback">
                      Email is invalid
                    </div>
                  </div>
  
                  <div class="mb-3">
                    <div class="mb-2 w-100">
                      <label class="text-muted" for="password">Password</label>
                      <a href="forgot.html" class="float-end">
                        Forgot Password?
                      </a>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" required>
                      <div class="invalid-feedback">
                        Password is required
                      </div>
                  </div>
  
                  <div class="d-flex align-items-center">
                    <div class="form-check">
                      <input type="checkbox" name="remember" id="remember" class="form-check-input">
                      <label for="remember" class="form-check-label">Remember Me</label>
                    </div>
                    <button type="submit" class="btn btn-primary ms-auto">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="text-center mt-5 text-muted">
              Copyright &copy; 2023
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>