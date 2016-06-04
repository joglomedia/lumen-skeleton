<nav class="navbar navbar-static-top navbar-inverse navbar-embossed" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-01">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="/">{{ $org or 'Nick Palomino' }}</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse-01">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('cursos') }}">Cursos<span class="navbar-new">1</span></a></li>
                <li><a href="{{ url('resumen') }}">Resumen</a></li>
                <li><a href="{{ url('about') }}">Acerca<span class="navbar-unread"></span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>