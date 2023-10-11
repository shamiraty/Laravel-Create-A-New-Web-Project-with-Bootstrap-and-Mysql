<link rel="stylesheet"href="{{url('css/bootstrap.css')}}">
<link rel="stylesheet"href="{{url('css/custom.css')}}">



<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">MY PROJECT</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item " href="{{url('page2')}}">page2</a></li>
                        <li><a class="dropdown-item" href="{{url('page3')}}">page3</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>



<body>
@yield(('content'))
</body>



<script src="{{url('js/bootstrap.js')}}"></script>
<script src="{{url('js/custom.js')}}"></script>
