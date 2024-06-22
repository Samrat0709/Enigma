<style>
    .switch {
        font-size: 17px;
        position: relative;
        display: inline-block;
        width: 64px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #73C0FC;
        transition: .4s;
        border-radius: 30px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 30px;
        width: 30px;
        border-radius: 20px;
        left: 2px;
        bottom: 2px;
        z-index: 2;
        background-color: #e8e8e8;
        transition: .4s;
    }

    .sun svg {
        position: absolute;
        top: 6px;
        left: 36px;
        z-index: 1;
        width: 24px;
        height: 24px;
    }

    .moon svg {
        fill: #73C0FC;
        position: absolute;
        top: 5px;
        left: 5px;
        z-index: 1;
        width: 24px;
        height: 24px;
    }

    /* .switch:hover */
    .sun svg {
        animation: rotate 15s linear infinite;
    }

    @keyframes rotate {

        0% {
            transform: rotate(0);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* .switch:hover */
    .moon svg {
        animation: tilt 5s linear infinite;
    }

    @keyframes tilt {

        0% {
            transform: rotate(0deg);
        }

        25% {
            transform: rotate(-10deg);
        }

        75% {
            transform: rotate(10deg);
        }

        100% {
            transform: rotate(0deg);
        }
    }

    .input:checked+.slider {
        background-color: #183153;
    }

    .input:focus+.slider {
        box-shadow: 0 0 1px #183153;
    }

    .input:checked+.slider:before {
        transform: translateX(30px);
    }
    .cta {
  position: relative;
  margin: auto;
  padding: 12px 18px;
  transition: all 0.2s ease;
  border: none;
  background: none;
  cursor: pointer;
}

.cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 50px;
  background: #dfceff;
  width: 45px;
  height: 45px;
  transition: all 0.3s ease;
}

.cta span {
  position: relative;
  font-family: "Ubuntu", sans-serif;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.05em;
  color: #6a32db;
}

.cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #6a32db;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
}

.cta:hover:before {
  width: 100%;
  background: #dfceff;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active {
  transform: scale(0.95);
}

</style>
<nav class="navbar navbar-expand-lg navbar-bg">
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
                    <label class="switch">
                        <span class="sun"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g fill="#ffd43b">
                                    <circle r="5" cy="12" cx="12"></circle>
                                    <path d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z"></path>
                                </g>
                            </svg></span>
                        <span class="moon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z"></path>
                            </svg></span>
                        <input type="checkbox" id="theme-toggle" class="input">
                        <span class="slider"></span>
                    </label>
                </li>
                <li class="nav-item">
                    <a href="" class="cta">
                        <span>Get Started</span>
                        <svg width="15px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script>
    // Function to toggle the theme
    function toggleTheme() {
        const currentTheme = document.documentElement.getAttribute("data-theme");
        const newTheme = currentTheme === "dark" ? "light" : "dark";
        document.documentElement.setAttribute("data-theme", newTheme);
        localStorage.setItem("theme", newTheme);
    }

    // Set the theme on initial load
    function setInitialTheme() {
        const savedTheme = localStorage.getItem("theme") || "light";
        document.documentElement.setAttribute("data-theme", savedTheme);
    }

    document.getElementById("theme-toggle").addEventListener("click", toggleTheme);
    setInitialTheme();
</script>