<nav class="main-header navbar navbar-expand navbar-dark navbar-purple border-bottom-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">{{__('Home')}}</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">{{__('Contact')}}</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown d-none d-lg-flex">
        <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <img src="/icons/uk.svg" style="width: 25px; height: 20px" alt="English">
          English
        </a>
        <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
          <a class="dropdown-item font-weight-medium" href="#">
            <img src="/icons/kh.svg" style="width: 25px; height: 20px" alt="Khmer">
            Khmer
          </a>
          {{-- <div class="dropdown-divider"></div>
          <a class="dropdown-item font-weight-medium" href="#">
            <i class="flag-icon flag-icon-es"></i>
            Espanol
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item font-weight-medium" href="#">
            <i class="flag-icon flag-icon-lt"></i>
            Latin
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item font-weight-medium" href="#">
            <i class="flag-icon flag-icon-ae"></i>
            Arabic
          </a> --}}
        </div>
      </li>
      <li class="nav-item dropdown d-none d-lg-flex">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fas fa-sign-out-alt" style="font-size:26px; color: rgba(255,255,255,.80);"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </li>
    </ul>
  </nav>