<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="navbar-brand text-uppercase" href="{{ route('home') }}">{{ env("APP_NAME") }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="https://fb.com/ohmygodvt95">About us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-outline-light my-2 my-sm-0" href="{{ route('gists.create') }}">Create</a>
            </form>
        </div>
    </div>
</nav>
