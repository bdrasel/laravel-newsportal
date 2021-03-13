<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('contents/admin') }}/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('contents/admin') }}/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                 <x-jet-validation-errors class="mb-4" />
                <form method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="form-group">
                    <label> email *</label>
                    <input type="text" name="email" id="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" class="form-control p_input" name="password" id="password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" id="remember_me" name="remember" class="form-check-input"> Remember me </label>
                    </div>
                     @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-pass">Forgot password</a>
                    @endif
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="{{ route('register') }}"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="{{ asset('contents/admin') }}/vendors/js/vendor.bundle.base.js"></script>
    <script src="{{ asset('contents/admin') }}/js/off-canvas.js"></script>
    <script src="{{ asset('contents/admin') }}/js/hoverable-collapse.js"></script>
    <script src="{{ asset('contents/admin') }}/js/misc.js"></script>
    <script src="{{ asset('contents/admin') }}/js/settings.js"></script>
    <script src="{{ asset('contents/admin') }}/js/todolist.js"></script>
  </body>
</html>