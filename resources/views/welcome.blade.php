<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/js/app.js')
        <title>Laravel</title>

    <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
height: 200vh;

} 
.carousel-indicators{
list-style: none
}
.service_t {
letter-spacing: 0.08rem;
}
.title{
font-weight: 700;
}
.caption {
position: absolute;
top: 30%;
left: 8%;
}
.lead {
font-size: 1.25rem;
font-weight: 600;
}
.btn{
border-radius: 0%;
font-weight: 500;
}
.btn-danger {
color: #fff;
background-color: #da3333;
border-color: #da3333;
}

.btn-danger:hover {
color: #da3333;
background-color: transparent;
border-color: #ae2929;
}
.section {
height: 93vh;
width: 100%;
}
.t {
background: rgba(0, 0, 0, 0.7);
color: #ffffff;
font-size: 2.3em;
text-align: center;
}
.part {
position: relative;
height: 100%;
width: 100%;
background-image: url("img/hero-banner-1.jpg");
background-position: 50% 50%;
background-repeat: no-repeat;
}

.part::before {
content: "";
position: absolute;
top: 0;
right: 0;
bottom: 0;
left: 0;
background: linear-gradient(
to right,
rgba(0, 0, 0, 0.9),
rgba(0, 0, 0, 0.1)
);
display: block;
}
.hh1{
font-size: calc(1.7rem + 1.8vw);
font-weight: 700;
line-height: 1.3;
}
@media (max-width:768px){
.section{
  height: 70vh;
  
}
.part{
     background-size: cover; 
  }
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><img src="" alt="" width="200"
        /></a>
        <button
          class="navbar-toggler navbar-toggler-end"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item mx-2 ">
              <!-- Link--><a
                class="nav-link text-uppercase active"
                href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item mx-2">
              <!-- Link--><a class="nav-link text-uppercase" href="about.html"
                >About</a
              >
            </li>
            <li class="nav-item mx-2">
              <!-- Link--><a class="nav-link text-uppercase" href="contact.html"
                >Contact</a
              >
            </li>
            <li class="nav-item ms-2 dropdown ">
              <a
                class="nav-link text-uppercase dropdown-toggle pe-0"
                id="navbarDropdownMenuLink"
                href="#"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Pages</a
              >
              <div
                class="dropdown-menu mt-lg-4 text-sm"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" href="index.html">Home</a
                ><a class="dropdown-item" href="about.html">About</a
                ><a class="dropdown-item" href="contact.html">Contact </a>
              </div>
            </li>
            <li class="nav-item ms-lg-3 ps-lg-3">
              <a class="btn btn-outline-primary btn-sm" href="contact.html"
                >Request a quote</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="">
      <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ul class="carousel-indicators ">
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="First slide"
          ></li>
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="1"
            aria-label="Second slide"
          ></li>
          <li
            data-bs-target="#carouselId"
            data-bs-slide-to="2"
            aria-label="Third slide"
          ></li>
        </ul>
        <div class="carousel-inner section" role="listbox">
          <div
            class="carousel-item active part"
            style="background-image: url('')"
          >
            <div class="container text-white caption">
              <div class="row">
                <div class="col-md-6 col-10">
                  <h1 class="hh1">Choose right solution for your business</h1>
                  <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor.
                  </p>
                  <ul class="list-inline">
                    <li class="list-inline-item me-0">
                      <a class="btn btn-danger btn-lg" href="#!">Read More</a>
                    </li>
                    <li class="list-inline-item"></li>
                    <a class="btn btn-outline-light btn-lg" href="#!">Our company</a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div
            class="carousel-item part"
            style="background-image: url('')"
          >
          <div class="container text-white caption">
            <div class="row">
              <div class="col-md-6 col-10">
                <h1 class="hh1">Choose right solution for your business</h1>
                <p class="lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor.
                </p>
                <ul class="list-inline">
                  <li class="list-inline-item me-0">
                    <a class="btn btn-danger btn-lg" href="#!">Read More</a>
                  </li>
                  <li class="list-inline-item"></li>
                  <a class="btn btn-outline-light btn-lg" href="#!">Our company</a>
                </ul>
              </div>
            </div>
          </div>
          </div>
          <div
            class="carousel-item part"
            style="background-image: url('')"
          >
          <div class="container text-white caption">
            <div class="row">
              <div class="col-md-6 col-10">
                <h1 class="hh1">Choose right solution for your business</h1>
                <p class="lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                  sed do eiusmod tempor.
                </p>
                <ul class="list-inline">
                  <li class="list-inline-item me-0">
                    <a class="btn btn-danger btn-lg" href="#!">Read More</a>
                  </li>
                  <li class="list-inline-item"></li>
                  <a class="btn btn-outline-light btn-lg" href="#!">Our company</a>
                </ul>
              </div>
            </div>
          </div>
          </div>
        </div>
        <button
          class="carousel-control-prev d-flex justify-content-start"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="prev"
          style="width: 50px;"
        >
          <span class="t px-3 mx-2 d-none d-md-block">&lt;</span>
        </button>
        <button
          class="carousel-control-next d-flex justify-content-end"
          type="button"
          data-bs-target="#carouselId"
          data-bs-slide="next"
          style="width: 50px;"
        >
          <span class="t px-3 mx-2 d-none d-md-block">&gt;</span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <section class="py-5">
        <div class="container py-5 text-center">
          <header class="mb-5">
            <div class="row">
              <div class="col-lg-7 mx-auto">
                <p class="h5 text-uppercase title service_t  text-danger mb-0">Our services</p>
                <h2 class="title">We Creating Solutions For Your Organization</h2>
              </div>
            </div>
          </header>
          <div class="row align-items-stretch gy-4">
            <div class="col-lg-4 col-md-6">
              <div class="px-4 py-5 border border-2 border-dash h-100">
                <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                  <use xlink:href="#laptop-screen-1"> </use>
                </svg>
                <h3 class="h5 title">Business Finance Strategy</h3>
                <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="px-4 py-5 border border-2 border-dash h-100">
                <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                  <use xlink:href="#quality-1"> </use>
                </svg>
                <h3 class="h5">Portfolio &amp; Resource Allocation</h3>
                <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="px-4 py-5 border border-2 border-dash h-100">
                <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                  <use xlink:href="#survey-1"> </use>
                </svg>
                <h3 class="h5">Organization &amp; Decision Process</h3>
                <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="px-4 py-5 border border-2 border-dash h-100">
                <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                  <use xlink:href="#pie-chart-1"> </use>
                </svg>
                <h3 class="h5">Decision &amp; Risk Analytic</h3>
                <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="px-4 py-5 border border-2 border-dash h-100">
                <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                  <use xlink:href="#pay-1"> </use>
                </svg>
                <h3 class="h5">Banking &amp; Capital Markets</h3>
                <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="px-4 py-5 border border-2 border-dash h-100">
                <svg class="svg-icon mb-4 text-primary svg-icon-light svg-icon-big">
                  <use xlink:href="#stack-1"> </use>
                </svg>
                <h3 class="h5">Modern &amp; Tribe Workplace</h3>
                <p class="text-sm mb-0 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
     
    </body>
</html>
