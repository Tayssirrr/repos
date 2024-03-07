@props(['company'])

      <nav class="navbar navbar-expand-lg  py-3 shadow-lg">
        <div class="container"><a class="navbar-brand" href="index.html"><img class="w-100 h-100" src="{{asset('storage/'.$company->logo)}}" alt=""></a>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto d-flex align-items-center justify-content-center">
              <li class="nav-item mx-3 py-2">
                <a class="navlink text-uppercase active" href="index.html">Home</a>
              </li>
              <li class="nav-item mx-3 py-2">
              <a class="navlink text-uppercase" href="about.html">About</a>
              </li>
              <li class="nav-item mx-3 py-2">
                <a class="navlink text-uppercase" href="contact.html">Contact</a>
              </li>
              <li class="nav-item ms-3 d-none d-md-block dropdown"><a class="navlink active text-uppercase dropdown-toggle pe-0" id="navbarDropdownMenuLink" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-4 text-sm" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="about.html">About</a><a class="dropdown-item" href="contact.html">Contact                </a></div>
              </li>
              <li class="nav-item ms-lg-4 py-2 ps-lg-3"><a class="btn btn-outline-danger" href="contact.html">Request a quote</a></li>
            </ul>
          </div>
        </div>
      </nav>