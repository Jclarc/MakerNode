<div class="grey lighten-2 nav_container">
        <nav>
                <div class="nav-wrapper grey darken-2">
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                                <li><a  class="light-green-text text-accent-2" href="{{ url('/home') }}">Home</a></li>
                                <li><a class="light-green-text text-accent-2" href="{{ url('/profile') }}">Profile</a></li>
                                <li><a class="light-green-text text-accent-2" href="{{ url('/forum') }}">Forums</a></li>
                                @if (Auth::guest())
                                        <li><a class="light-green-text text-accent-2" href="{{ url('/login') }}">Login</a></li>
                                        <li><a class="light-green-text text-accent-2" href="{{ url('/register') }}">Register</a></li>
                                @else
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                        {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <ul class="dropdown-menu" role="menu">
                                                        <li><a class="light-green-text text-accent-2" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                                </ul>
                                        </li>
                                @endif
                        </ul>
                </div>
        </nav>
</div>
