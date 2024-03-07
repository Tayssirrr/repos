@props(['sliders'])
<section class="">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
     
      <ul class="carousel-indicators ">
        @foreach ($sliders as $key=>$item)
        <li
        data-bs-target="#carouselId"
        data-bs-slide-to="{{$key}}"
        class="{{$key===0 ?  'active' : ''}}"
        aria-current="true"
       
      ></li>
        @endforeach
        
      </ul>
      <div class="carousel-inner section" role="listbox">
      
       @foreach ($sliders as $key => $slider)
  
       <div
       class="carousel-item part {{$key===0 ? 'active' : ''}}"
       style="background-image: url('{{asset('storage/'.$slider->image)}}')"
     >
       <div class="container text-white caption">
         <div class="row">
           <div class="col-md-6 col-10">
             <h1 class="hh1">{{$slider->title}}</h1>
             <p class="lead">
               {{$slider->description}}
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
   
       @endforeach
     </div> <button
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