<nav class="navbar navbar-expand-lg navbar-bg" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand text-custom fw-bold fs-2" href="#">Enigma</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end px-4" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li>

                </li>
                <li class="nav-item d-flex">
                    <div class="px-2">
                        <a href="" class="btn btn-info btn-md " data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Login">LOGIN</a>
                    </div>
                    <div class="px-2">
                        <a href="user_register.php" class="btn btn-warning btn-md" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Register">REGISTER</a>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>