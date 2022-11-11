<nav class="navbar navbar-expand-lg background">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="{{route('/')}}">
            <img src="{{asset('frontEndAsset')}}/assets/image/staff-logo.webp" class="img"alt="logo" width="80" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 			data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="		false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link font" href="{{route('/')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link font" href="{{route('/')}}">About</a></li>
                <li class="nav-item"><a class="nav-link font" href="{{route('/')}}">Service</a></li>
                <li class="nav-item"><a class="nav-link font" href="{{route('/')}}">Details</a></li>
                <li class="nav-item"><a class="nav-link font" href="{{route('/')}}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
