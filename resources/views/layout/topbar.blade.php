          <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand">@yield('title')</a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <!--  @auth
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                </span>
                            </div>
                        </form>
                      @endauth !-->

                        <ul class="navbar-nav">
                          @guest
                          <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                          <!-- <li><a class="nav-link" href="{{ route('register') }}">Register</a></li> -->

                          @else
                            <li class="nav-item dropdown">
                              <!--  <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="now-ui-icons location_world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                </div> -->
                            </li>

                            <li class="nav-item dropdown">
                              @auth
                                <a class="nav-link dropdown-toggle" href="#pablo" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <p>
                                      <i class="now-ui-icons users_single-02"></i>

                                      @if(session()->get('dept') == null)
                                        <span class = "font-weight-bold"> {{ auth::user()->first_name }} {{ auth::user()->last_name }}</span>
                                        <br>
                                        <small class= 'text-left font-italic'>{{ session()->get('company') }}</small>

                                      @else

                                      <span class = "font-weight-bold"> {{ auth::user()->first_name }} {{ auth::user()->last_name }}</span>
                                      <br>
                                      <small class= 'text-left font-italic'>{{ session()->get('dept') }}</small>
                                      @endif
                                    </p>
                                </a>
                                <div class = "dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class = 'dropdown-item' href = '/profile'> Profile </a>
                                    <a class = 'dropdown-item' href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> Logout </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @endauth
                            </div>
                            </li>
                        </ul>
                    </div>
                    @endguest
                </div>
            </nav>
            <!-- End Navbar -->
