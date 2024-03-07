@props(['company'])
<div class="col-auto col-md-2 col-xl-2 px-sm-2  bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center py-4 w-100 justify-content-center text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline 
             ">Menu</span>
        </a>
       
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center justify-content-center align-items-sm-start" id="menu">
            <li class="nav-item ml-5">
                <a href="#" class="nav-link align-middle ">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>
            <li>
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link  align-middle">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Company :</span> </a>
                <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="{{route('company.index')}}" class="nav-link "> <span class="d-none d-sm-inline">See</span> 1 </a>
                    </li>
                  
                </ul>
            </li>
          
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link  align-middle ">
                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Sliders :</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="{{route('sliders.create')}}" class="nav-link "> <span class="d-none d-sm-inline">Add New Slider</span> 1</a>
                    </li>
                    <li>
                        <a href="{{route('sliders.index')}}" class="nav-link "> <span class="d-none  d-sm-inline">Manage Sliders</span> 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link  align-middle">
                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Services :</span></a>
                    <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="{{route('services.create')}}" class="nav-link "> <span class="d-none d-sm-inline">Add New Service</span> 1</a>
                    </li>
                    <li>
                        <a href="{{route('services.index')}}" class="nav-link "> <span class="d-none d-sm-inline">Manage Services</span> 2</a>
                    </li>
                </ul>
            </li>
        </ul>
        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="d-none d-sm-inline mx-1">loser</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route("logout")}}">Sign out</a></li>
            </ul>
        </div>
    </div>
</div>