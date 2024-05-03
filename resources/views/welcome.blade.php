<!DOCTYPE html>
<html lang="en" dir="ltr" class="dark-mode">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Genius Institute of Information Technology</title>

    <meta name="robots" content="noindex" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" href="{{ asset('vendor/spinkit.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('vendor/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/material-icons.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/fontawesome.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/preloader.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('css/dark.css') }}" rel="stylesheet" />
  </head>

  <body class="layout-app">
    <div class="preloader">
      <div class="sk-chase">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
      </div>
    </div>

    <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">
      <div class="mdk-drawer-layout__content page-content">
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

        <div
          class="mdk-box mdk-box--bg-primary bg-dark js-mdk-box mb-0"
          data-effects="parallax-background blend-background"
        >
          <div class="mdk-box__bg">
            <div
              class="mdk-box__bg-front"
              style="
                background-image: url({{ asset('images/photodune-4161018-group-of-students-m.jpg') }});
              "
            ></div>
          </div>
          <div class="mdk-box__content justify-content-center">
            <div class="hero container page__container text-center py-112pt">
              <h1 class="text-white text-shadow">Learn to Code</h1>
              <p
                class="lead measure-hero-lead mx-auto text-white text-shadow mb-48pt"
              >
                Business, Technology and Creative Skills taught by industry
                experts. Explore a wide range of skills with our professional
                tutorials.
              </p>

              <a
                href="courses.html"
                class="btn btn-lg btn-white btn--raised mb-16pt"
                >Browse Courses</a
              >

              <p class="mb-0">
                <a href="#" class="text-white text-shadow"
                  ><strong>Are you a teacher?</strong></a
                >
              </p>
            </div>
          </div>
        </div>

        <div class="border-bottom-2 py-16pt navbar-dark border-bottom-2">
          <div class="container page__container">
            <div class="row align-items-center">
              <div
                class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0"
              >
                <div
                  class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt"
                >
                  <i class="material-icons text-white">subscriptions</i>
                </div>
                <div class="flex">
                  <div class="card-title mb-4pt">8,000+ Courses</div>
                  <p class="card-subtitle text-70">
                    Explore a wide range of skills.
                  </p>
                </div>
              </div>
              <div
                class="d-flex col-md align-items-center border-bottom border-md-0 mb-16pt mb-md-0 pb-16pt pb-md-0"
              >
                <div
                  class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt"
                >
                  <i class="material-icons text-white">verified_user</i>
                </div>
                <div class="flex">
                  <div class="card-title mb-4pt">By Industry Experts</div>
                  <p class="card-subtitle text-70">
                    Professional development from the best people.
                  </p>
                </div>
              </div>
              <div class="d-flex col-md align-items-center">
                <div
                  class="rounded-circle bg-primary w-64 h-64 d-inline-flex align-items-center justify-content-center mr-16pt"
                >
                  <i class="material-icons text-white">update</i>
                </div>
                <div class="flex">
                  <div class="card-title mb-4pt">Unlimited Access</div>
                  <p class="card-subtitle text-70">
                    Unlock Library and learn any topic with one subscription.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="page-section border-bottom-2">
          <div class="container page__container">
            <div class="page-separator">
              <div class="page-separator__text">From the blog</div>
            </div>

            <div class="row card-group-row">
              <div class="col-md-6 col-lg-4 card-group-row__col">
                <div
                  class="card card--elevated posts-card-popular overlay card-group-row__card"
                >
                  <img
                    src="{{ asset('images/paths/sketch_430x168.png') }}"
                    alt=""
                    class="card-img"
                  />
                  <div class="fullbleed bg-primary" style="opacity: 0.5"></div>
                  <div class="posts-card-popular__content">
                    <div class="card-body d-flex align-items-center">
                      <div class="avatar-group flex">
                        <div
                          class="avatar avatar-xs"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Janell D."
                        >
                          <a href="#"
                            ><img
                              src="{{ asset('images/256_luke-porter-261779-unsplash.jpg') }}"
                              alt="Avatar"
                              class="avatar-img rounded-circle"
                          /></a>
                        </div>
                      </div>
                      <a
                        style="text-decoration: none"
                        class="d-flex align-items-center"
                        href="#"
                        ><i
                          class="material-icons mr-1"
                          style="font-size: inherit"
                          >remove_red_eye</i
                        >
                        <small>327</small></a
                      >
                    </div>
                    <div class="posts-card-popular__title card-body">
                      <small class="text-muted text-uppercase">sketch</small>
                      <a class="card-title" href="blog-post.html"
                        >Merge Duplicates Inconsistent Symbols</a
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 card-group-row__col">
                <div
                  class="card card--elevated posts-card-popular overlay card-group-row__card"
                >
                  <img
                    src="{{ asset('images/paths/invision_430x168.png') }}"
                    alt=""
                    class="card-img"
                  />
                  <div class="fullbleed bg-primary" style="opacity: 0.5"></div>
                  <div class="posts-card-popular__content">
                    <div class="card-body d-flex align-items-center">
                      <div class="avatar-group flex">
                        <div
                          class="avatar avatar-xs"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Janell D."
                        >
                          <a href="#"
                            ><img
                              src="{{ asset('images/256_michael-dam-258165-unsplash.jpg') }}"
                              alt="Avatar"
                              class="avatar-img rounded-circle"
                          /></a>
                        </div>
                      </div>
                      <a
                        style="text-decoration: none"
                        class="d-flex align-items-center"
                        href="#"
                        ><i
                          class="material-icons mr-1"
                          style="font-size: inherit"
                          >remove_red_eye</i
                        >
                        <small>327</small></a
                      >
                    </div>
                    <div class="posts-card-popular__title card-body">
                      <small class="text-muted text-uppercase">invision</small>
                      <a class="card-title" href="blog-post.html"
                        >Design Systems Essentials</a
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 card-group-row__col">
                <div
                  class="card card--elevated posts-card-popular overlay card-group-row__card"
                >
                  <img
                    src="{{ asset('images/paths/photoshop_430x168.png') }}"
                    alt=""
                    class="card-img"
                  />
                  <div class="fullbleed bg-primary" style="opacity: 0.5"></div>
                  <div class="posts-card-popular__content">
                    <div class="card-body d-flex align-items-center">
                      <div class="avatar-group flex">
                        <div
                          class="avatar avatar-xs"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Janell D."
                        >
                          <a href="#"
                            ><img
                              src="{{ asset('images/256_rsz_1andy-lee-642320-unsplash.jpg') }}"
                              alt="Avatar"
                              class="avatar-img rounded-circle"
                          /></a>
                        </div>
                      </div>
                      <a
                        style="text-decoration: none"
                        class="d-flex align-items-center"
                        href="#"
                        ><i
                          class="material-icons mr-1"
                          style="font-size: inherit"
                          >remove_red_eye</i
                        >
                        <small>327</small></a
                      >
                    </div>
                    <div class="posts-card-popular__title card-body">
                      <small class="text-muted text-uppercase">photoshop</small>
                      <a class="card-title" href="blog-post.html"
                        >Semantic Logo Design</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="posts-cards">
              <div class="card posts-card mb-0">
                <div
                  class="posts-card__content d-flex align-items-center flex-wrap"
                >
                  <div class="avatar avatar-lg mr-3">
                    <a href="blog-post.html"
                      ><img
                        src="{{ asset('images/paths/invision_200x168.png') }}"
                        alt="avatar"
                        class="avatar-img rounded"
                    /></a>
                  </div>
                  <div class="posts-card__title flex d-flex flex-column">
                    <a href="blog-post.html" class="card-title mr-3"
                      >Design Systems Essentials</a
                    >
                    <small class="text-50">35 views last week</small>
                  </div>
                  <div
                    class="d-flex align-items-center flex-column flex-sm-row posts-card__meta"
                  >
                    <div
                      class="mr-3 text-50 text-uppercase posts-card__tag d-flex align-items-center"
                    >
                      <i class="material-icons text-muted-light mr-1"
                        >folder_open</i
                      >
                      inVision
                    </div>
                    <div class="mr-3 text-50 posts-card__date">
                      <small>11 Nov, 2018 07:46 AM</small>
                    </div>
                    <div class="media ml-sm-auto align-items-center">
                      <div class="media-left mr-2 avatar-group">
                        <div
                          class="avatar avatar-xs"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Janell D."
                        >
                          <img
                            src="{{ asset('images/256_rsz_1andy-lee-642320-unsplash.jpg') }}"
                            alt="Avatar"
                            class="avatar-img rounded-circle"
                          />
                        </div>

                        <div
                          class="avatar avatar-xs"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Janell D."
                        >
                          <img
                            src="{{ asset('images/256_michael-dam-258165-unsplash.jpg') }}"
                            alt="Avatar"
                            class="avatar-img rounded-circle"
                          />
                        </div>

                        <div
                          class="avatar avatar-xs"
                          data-toggle="tooltip"
                          data-placement="top"
                          title="Janell D."
                        >
                          <img
                            src="{{ asset('images/256_luke-porter-261779-unsplash.jpg') }}"
                            alt="Avatar"
                            class="avatar-img rounded-circle"
                          />
                        </div>
                      </div>
                      <div class="media-body">
                        <a href="#">+2 more</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="page-section border-bottom-2">
          <div class="container page__container">
            <div class="page-separator">
              <div class="page-separator__text">Design Courses</div>
            </div>

            <div class="row card-group-row">
              <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">
                  <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                    <img src="{{ asset('images/paths/sketch_430x168.png') }}" alt="course"/>
                    <span class="overlay__content">
                      <span class="overlay__action d-flex flex-column text-center">
                        <i class="material-icons icon-32pt">play_circle_outline</i>
                        <span class="card-title text-white">Preview</span>
                      </span>
                    </span>
                  </a>

                  <div class="card-body flex">
                    <div class="d-flex">
                      <div class="flex">
                        <a class="card-title" href="student-course.html">Learn Sketch</a>
                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                      </div>
                      <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                    </div>
                    <div class="d-flex">
                      <div class="rating flex">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row justify-content-between">
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="popoverContainer d-none">
                  <div class="media">
                    <div class="media-left mr-12pt">
                      <img src="{{ asset('images/paths/sketch_40x40%402x.png') }}" width="40" height="40" alt="Angular" class="rounded"/>
                    </div>
                    <div class="media-body">
                      <div class="card-title mb-0">Learn Sketch</div>
                      <p class="lh-1 mb-0">
                        <span class="text-50 small">with</span>
                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                      </p>
                    </div>
                  </div>

                  <p class="my-16pt text-70">
                    Learn the fundamentals of working with Angular and how to
                    create basic applications.
                  </p>

                  <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Fundamentals of working with Angular</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Create complete Angular applications</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Working with the Angular CLI</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Understanding Dependency Injection</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Testing with Angular</small>
                      </p>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>Beginner</small>
                        </p>
                      </div>
                    </div>
                    <div class="col text-right">
                      <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">
                  <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                    <img src="{{ asset('images/paths/flinto_430x168.png') }}" alt="course"/>
                    <span class="overlay__content">
                      <span class="overlay__action d-flex flex-column text-center">
                        <i class="material-icons icon-32pt">play_circle_outline</i>
                        <span class="card-title text-white">Preview</span>
                      </span>
                    </span>
                  </a>

                  <div class="card-body flex">
                    <div class="d-flex">
                      <div class="flex">
                        <a class="card-title" href="student-course.html">Learn Flinto</a>
                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                      </div>
                      <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                    </div>
                    <div class="d-flex">
                      <div class="rating flex">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row justify-content-between">
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="popoverContainer d-none">
                  <div class="media">
                    <div class="media-left mr-12pt">
                      <img src="{{ asset('images/paths/flinto_40x40%402x.png') }}" width="40" height="40" alt="Angular" class="rounded"/>
                    </div>
                    <div class="media-body">
                      <div class="card-title mb-0">Learn Flinto</div>
                      <p class="lh-1 mb-0">
                        <span class="text-50 small">with</span>
                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                      </p>
                    </div>
                  </div>

                  <p class="my-16pt text-70">
                    Learn the fundamentals of working with Angular and how to
                    create basic applications.
                  </p>

                  <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Fundamentals of working with Angular</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Create complete Angular applications</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Working with the Angular CLI</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Understanding Dependency Injection</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Testing with Angular</small>
                      </p>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>Beginner</small>
                        </p>
                      </div>
                    </div>
                    <div class="col text-right">
                      <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">
                  <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                    <img src="{{ asset('images/paths/photoshop_430x168.png') }}" alt="course"/>
                    <span class="overlay__content">
                      <span class="overlay__action d-flex flex-column text-center">
                        <i class="material-icons icon-32pt">play_circle_outline</i>
                        <span class="card-title text-white">Preview</span>
                      </span>
                    </span>
                  </a>

                  <div class="card-body flex">
                    <div class="d-flex">
                      <div class="flex">
                        <a class="card-title" href="student-course.html">Learn Photoshop</a>
                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                      </div>
                      <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                    </div>
                    <div class="d-flex">
                      <div class="rating flex">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row justify-content-between">
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="popoverContainer d-none">
                  <div class="media">
                    <div class="media-left mr-12pt">
                      <img src="{{ asset('images/paths/photoshop_40x40%402x.png') }}" width="40" height="40" alt="Angular" class="rounded"/>
                    </div>
                    <div class="media-body">
                      <div class="card-title mb-0">Learn Photoshop</div>
                      <p class="lh-1 mb-0">
                        <span class="text-50 small">with</span>
                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                      </p>
                    </div>
                  </div>

                  <p class="my-16pt text-70">
                    Learn the fundamentals of working with Angular and how to
                    create basic applications.
                  </p>

                  <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Fundamentals of working with Angular</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Create complete Angular applications</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Working with the Angular CLI</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Understanding Dependency Injection</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Testing with Angular</small>
                      </p>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>Beginner</small>
                        </p>
                      </div>
                    </div>
                    <div class="col text-right">
                      <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">
                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card" data-toggle="popover" data-trigger="click">
                  <a href="student-course.html" class="card-img-top js-image" data-position="" data-height="140">
                    <img src="{{ asset('images/paths/figma_430x168.png') }}" alt="course"/>
                    <span class="overlay__content">
                      <span class="overlay__action d-flex flex-column text-center">
                        <i class="material-icons icon-32pt">play_circle_outline</i>
                        <span class="card-title text-white">Preview</span>
                      </span>
                    </span>
                  </a>

                  <div class="card-body flex">
                    <div class="d-flex">
                      <div class="flex">
                        <a class="card-title" href="student-course.html">Learn Figma</a>
                        <small class="text-50 font-weight-bold mb-4pt">Elijah Murray</small>
                      </div>
                      <a href="student-course.html" data-toggle="tooltip" data-title="Add Favorite" data-placement="top" data-boundary="window" class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                    </div>
                    <div class="d-flex">
                      <div class="rating flex">
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star</span></span>
                        <span class="rating__item"><span class="material-icons">star_border</span></span>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="row justify-content-between">
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="col-auto d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="popoverContainer d-none">
                  <div class="media">
                    <div class="media-left mr-12pt">
                      <img src="{{ asset('images/paths/figma_40x40%402x.png') }}" width="40" height="40" alt="Angular" class="rounded"/>
                    </div>
                    <div class="media-body">
                      <div class="card-title mb-0">Learn Figma</div>
                      <p class="lh-1 mb-0">
                        <span class="text-50 small">with</span>
                        <span class="text-50 small font-weight-bold">Elijah Murray</span>
                      </p>
                    </div>
                  </div>

                  <p class="my-16pt text-70">
                    Learn the fundamentals of working with Angular and how to
                    create basic applications.
                  </p>

                  <div class="mb-16pt">
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Fundamentals of working with Angular</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Create complete Angular applications</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Working with the Angular CLI</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Understanding Dependency Injection</small>
                      </p>
                    </div>
                    <div class="d-flex align-items-center">
                      <span class="material-icons icon-16pt text-50 mr-8pt">check</span>
                      <p class="flex text-50 lh-1 mb-0">
                        <small>Testing with Angular</small>
                      </p>
                    </div>
                  </div>

                  <div class="row align-items-center">
                    <div class="col-auto">
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>6 hours</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center mb-4pt">
                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>12 lessons</small>
                        </p>
                      </div>
                      <div class="d-flex align-items-center">
                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                        <p class="flex text-50 lh-1 mb-0">
                          <small>Beginner</small>
                        </p>
                      </div>
                    </div>
                    <div class="col text-right">
                      <a href="student-course.html" class="btn btn-primary">Watch trailer</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="page-section">
          <div class="container page__container">
            <div class="page-headline text-center">
              <h2>Feedback</h2>
              <p class="lead measure-lead mx-auto text-70">
                What other students turned professionals have to say about us
                after learning with us and reaching their goals.
              </p>
            </div>

            <div class="position-relative carousel-card p-0 mx-auto">
              <div class="row d-block js-mdk-carousel" id="carousel-feedback">
                <a class="carousel-control-next js-mdk-carousel-control mt-n24pt" href="#carousel-feedback" role="button" data-slide="next">
                  <span class="carousel-control-icon material-icons" aria-hidden="true">keyboard_arrow_right</span>
                  <span class="sr-only">Next</span>
                </a>
                <div class="mdk-carousel__content">
                  <div class="col-12 col-md-6">
                    <div class="card card-feedback card-body">
                      <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">
                          A wonderful course on how to start. Eddie beautifully
                          conveys all essentials of a becoming a good Angular
                          developer. Very glad to have taken this course. Thank
                          you Eddie Bryan.
                        </p>
                      </blockquote>
                    </div>
                    <div class="media ml-12pt">
                      <div class="media-left mr-12pt">
                        <a href="student-profile.html" class="avatar avatar-sm">
                          <span class="avatar-title rounded-circle">UK</span>
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <a href="student-profile.html" class="card-title">Umberto Kass</a>
                        <div class="rating mt-4pt">
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="card card-feedback card-body">
                      <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">
                          A wonderful course on how to start. Eddie beautifully
                          conveys all essentials of a becoming a good Angular
                          developer. Very glad to have taken this course. Thank
                          you Eddie Bryan.
                        </p>
                      </blockquote>
                    </div>
                    <div class="media ml-12pt">
                      <div class="media-left mr-12pt">
                        <a href="student-profile.html" class="avatar avatar-sm">
                          <span class="avatar-title rounded-circle">UK</span>
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <a href="student-profile.html" class="card-title">Umberto Kass</a>
                        <div class="rating mt-4pt">
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="card card-feedback card-body">
                      <blockquote class="blockquote mb-0">
                        <p class="text-70 small mb-0">
                          A wonderful course on how to start. Eddie beautifully
                          conveys all essentials of a becoming a good Angular
                          developer. Very glad to have taken this course. Thank
                          you Eddie Bryan.
                        </p>
                      </blockquote>
                    </div>
                    <div class="media ml-12pt">
                      <div class="media-left mr-12pt">
                        <a href="student-profile.html" class="avatar avatar-sm">
                          <span class="avatar-title rounded-circle">UK</span>
                        </a>
                      </div>
                      <div class="media-body media-middle">
                        <a href="student-profile.html" class="card-title">Umberto Kass</a>
                        <div class="rating mt-4pt">
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star</span></span>
                          <span class="rating__item"><span class="material-icons">star_border</span></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('includes.footer')
      </div>
    </div>


    <script src="{{ asset('vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('vendor/dom-factory.js') }}"></script>
    <script src="{{ asset('vendor/material-design-kit.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/preloader.js') }}"></script>
  </body>
</html>

