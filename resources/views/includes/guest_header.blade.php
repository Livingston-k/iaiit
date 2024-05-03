<div class="navbar navbar-expand navbar-dark border-bottom-2" id="default-navbar" data-primary>
    <!-- Navbar toggler -->
    <button
      class="navbar-toggler w-auto mr-16pt d-block d-lg-none rounded-0"
      type="button"
      data-toggle="sidebar"
    >
      <span class="material-icons">short_text</span>
    </button>

    <!-- Navbar Brand -->
    <a href="{{ route('welcome') }}" class="navbar-brand mr-16pt d-lg-none">

      <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">
        <span class="avatar-title rounded bg-primary"
          ><img
            src="https://luma.humatheme.com/public/images/illustration/student/128/white.svg"
            alt="logo"
            class="img-fluid"
        /></span>
      </span>

      <span class="d-none d-lg-block">GiiT</span>
    </a>

    <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
      <li class="nav-item active">
        <a href="{{ route('welcome') }}" class="nav-link">GiiT</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">Cources</a>
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">Quizzes</a>
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">Pricing</a>
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">Instructors</a>
      </li>
    </ul>

    <ul class="nav navbar-nav ml-auto mr-0">
      @if (Route::has('login'))
          @auth
              <li class="nav-item">
                  <a href="{{ route('dashboard') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                      Dashboard
                  </a>
              </li>
          @else
              <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link" data-toggle="tooltip" data-title="Login" data-placement="bottom" data-boundary="window">
                      <i class="material-icons">lock_open</i>
                  </a>
              </li>

              @if (Route::has('register'))
                  <li class="nav-item">
                      <a href="{{ route('register') }}" class="btn btn-outline-white">Get Started</a>
                  </li>
              @endif
          @endauth
      @endif
    </ul>
</div>