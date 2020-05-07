<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4fb3f6; background: linear-gradient(to right, #354064 0%, #4fb3f6 100%);">
    <div class="container">
      <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>



      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <!-- <a class="nav-link" href="{{ route('login') }}">Войти</a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

@if (session('status'))
<!-- alert -->
<div class="pt-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="alert alert-info" role="alert">
          {{ session('status') }}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /alert -->
@endif