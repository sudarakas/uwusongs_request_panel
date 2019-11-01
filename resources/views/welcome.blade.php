<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Creative Tim">
  <title>UWU Songs Request Panel - By NanoLabs</title>
  <!-- Favicon -->
  <link href="/assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="/assets/css/argon.css?v=1.1.0" rel="stylesheet">
</head>

<body>
  <header class=" header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
          <span class="nav-link-inner--text">UWU Songs Request Panel</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global"
          aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="https://sudarakas.github.io/nanolabWebpage/" target="_blank"
                data-toggle="tooltip" title="Visit Dev Site">
                <i class="ni ni-atom"></i>
                <span class="nav-link-inner--text d-lg-none">Visit Dev Site</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="section section-shaped section-lg">
      <div class="shape shape-style-1 bg-gradient-success">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container pt-lg-md">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="card bg-secondary shadow border-0">
              <div class="card-body px-lg-5 py-lg-5">
                <div class="text-center text-muted mb-1">
                  <small>Submit Your Song Name or Youtube URL</small>
                </div>
                <form action="{{ route('song.submit') }}" autocomplete="off" method="POST">
                  @csrf
                  @if (session('status'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  @endif
                  <div class="form-group">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-headphones"></i></span>
                      </div>
                      <input class="form-control{{ $errors->has('song') ? ' is-invalid' : '' }}"
                        placeholder="Name or Youtube URL" name="song" type="text">
                      @if ($errors->has('song'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('song') }}</strong>
                      </span>
                      @endif
                    </div>
                  </div>
                  <div class="form-group has-primary">
                    <div class="input-group input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-satisfied"></i></span>
                      </div>
                      <input class="form-control" placeholder="Special Note" name="note" type="text">
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-success mt-4">Send Request</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-3">
        <div class="col-lg-6">
          <h4 class="text-primary font-weight-light mb-2">Thank you for Submitting the song!</h4>
          <h5 class="mb-0 font-weight-light">We'll play the song within a few minutes. 😝😎</h5>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://sudarakas.github.io/nanolabWebpage/" class="btn btn-dark btn-round btn-lg"
            data-toggle="tooltip" data-original-title="Visit Dev Site">
            <i class="ni ni-atom"></i>
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="copyright">
          &copy; 2019 <a href="https://github.com/sudarakas" target="_blank">By sudarakas</a>.
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="/assets/vendor/jquery/jquery.min.js"></script>
  <script src="/assets/vendor/popper/popper.min.js"></script>
  <script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="/assets/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="/assets/js/argon.js?v=1.1.0"></script>
</body>

</html>