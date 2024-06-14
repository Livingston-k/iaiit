<div class="mdk-drawer js-mdk-drawer" id="default-drawer">
    <div class="mdk-drawer__content">
      <div
        class="sidebar sidebar-black-dodger-blue sidebar-left"
        data-perfect-scrollbar
      >
        <!-- Sidebar Content -->

        <div class="d-flex align-items-center navbar-height">
          <form
            action="https://luma.humatheme.com/Demos/App_Layout_dark/index.html"
            class="search-form search-form--black mx-16pt pr-0 pl-16pt"
          >
            <input
              type="text"
              class="form-control pl-0"
              placeholder="Search"
            />
            <button class="btn" type="submit">
              <i class="material-icons">search</i>
            </button>
          </form>
        </div>
        <ul class="sidebar-menu">
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('admin') }}">
              <span
                class="material-icons sidebar-menu-icon sidebar-menu-icon--left"
                >school</span
              >
              <span class="sidebar-menu-text">Dashboard</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="{{ route('admin.languages.index') }}">
              <span
                class="material-icons sidebar-menu-icon sidebar-menu-icon--left"
                >code</span
              >
              <span class="sidebar-menu-text">Courses</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="#">
              <span
                class="material-icons sidebar-menu-icon sidebar-menu-icon--left"
                >person</span
              >
              <span class="sidebar-menu-text">Students</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="#">
              <span
                class="material-icons sidebar-menu-icon sidebar-menu-icon--left"
                >person</span
              >
              <span class="sidebar-menu-text">Instructors</span>
            </a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="#">
              <span
                class="material-icons sidebar-menu-icon sidebar-menu-icon--left"
                >trending_up</span
              >
              <span class="sidebar-menu-text">Earnings</span>
            </a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>