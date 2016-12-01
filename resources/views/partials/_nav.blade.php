<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                {{--<li @if(Request::is('/') || Request::is('index')) class="active" @endif ><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li @if(Request::is('about') || Request::is('about/*')) class="active" @endif ><a href="/about">About</a></li>
                <li @if(Request::is('contact') || Request::is('contact/*')) class="active" @endif><a href="/contact">Contact</a></li>--}}
                <li class="{{ Request::is('/') ? "active" : "" }}" ><a href="/">Home <span class="sr-only">(current)</span></a></li>
                <li class="{{ Request::is('blog')||Request::is('blog/*') ? "active" : "" }}"><a href="/blog">Blog</a></li>
                <li class="{{ Request::is('about')||Request::is('about/*') ? "active" : "" }}"><a href="/about">About</a></li>
                <li class="{{ Request::is('contact')||Request::is('contact/*') ? "active" : "" }}"><a href="/contact">Contact</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('posts.index')}}">Post</a></li>
                        <li><a href="{{route('categories.index')}}">Category</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('logout')}}">Log Out</a></li>
                    </ul>
                </li>
                @else
                    <li><a href="{{route('login')}}">Log In</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>