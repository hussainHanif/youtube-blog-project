<header class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand logo" href="{{ url('/') }}">
      <img src="{{ asset('assets/images/logo.png') }}" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a  style="color:black !important" class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Language
          </a>
          <div class="dropdown-menu" aria-labelledby="languageDropdown">
            <a class="dropdown-item" href="{{ url('/en') }}">English</a>
            <a class="dropdown-item" href="{{ url('/fr') }}">Français</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</header>