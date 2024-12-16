  <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
          <a href="{{ route('main') }}" class="logo d-flex align-items-center">
              <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
              <span class="d-none d-lg-block">IT Books</span>
          </a>
          <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <nav class="header-nav ms-auto">
          <ul class="d-flex align-items-center">

              <li class="nav-item dropdown pe-3">

                  <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                      data-bs-toggle="dropdown">
                      <span class="d-none d-md-block dropdown-toggle ps-2">{{ auth()->user()->name }}</span>
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile rtl">
                      <li class="dropdown-header">
                          <h6>{{ auth()->user()->name }}</h6>
                          <span>{{ auth()->user()->email }}</span>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="{{ route('user.show', auth()->user()->id) }}">
                              <i class="bi bi-person mx-2"></i>
                              <span>حسابي</span>
                          </a>
                      </li>
                      <li>
                          <hr class="dropdown-divider">
                      </li>

                      <li>
                          <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                              <i class="bi bi-box-arrow-right mx-2"></i>
                              <span>تسجيل الخروج</span>
                          </a>
                      </li>

                  </ul><!-- End Profile Dropdown Items -->
              </li>
          </ul>
      </nav>
  </header>
