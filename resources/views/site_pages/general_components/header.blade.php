<section id="main_nav">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand" href="{{ url('/') }}">Logo Vskillza</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">                

                <ul class="navbar-nav mb-2 navbar-right">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">KnowledgeHub</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutPage') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Join Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" href="#">Sign In</a>
                    </li>
                </ul>
                
            </div>

        </div>
    </nav>

</section>
