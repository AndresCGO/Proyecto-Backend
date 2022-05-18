<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('/')}}">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('/API')}}">API Pokemon</a>
                        </li>
                        <li class="nav-item">
                            <a id="armas" class="nav-link" href="{{route('/Armas')}}">Armas</a>
                        </li>
                        <li class="nav-item">
                            <a id="personajes" class="nav-link" href="{{route('/Personajes')}}">Personajes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Ingresar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrate</a>
                        </li>
                        <li class="nav-item">
                            <div class="btn-group">
                              <button type="button" class="btn btn-default dropdown-toggle"
                                      data-toggle="dropdown">
                                Título del botón <span class="caret"></span>
                              </button>

                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Acción #1</a></li>
                                <li><a href="#">Acción #2</a></li>
                                <li><a href="#">Acción #3</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Acción #4</a></li>
                              </ul>
                            </div>
                        </li>       
                        <!-- search button -->
                        <div class="search-right ml-lg-3">
                            <form action="#search" method="GET" class="search-box position-relative">
                                <div class="input-search">
                                    <input type="search" placeholder="Enter Keyword" name="search" required="required"
                                        autofocus="" class="search-popup">
                                </div>
                                <button type="submit" class="btn search-btn"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <!-- //search button -->
                    </ul>
                </div>