@props(['services'])
<section class="py-5">
    <div class="container py-5 text-center">
      <header class="mb-5">
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <p class="h5 text-uppercase title service_t  text-danger py-2">Our services</p>
            <h2 class="title">We Creating Solutions For Your Organization</h2>
          </div>
        </div>
      </header>
      <div class="row align-items-stretch gy-4">
      @foreach ($services as $service)
      <div class="col-xl-4 ">
        <div class="px-4 py-5 border border-2 shadow h-100"  >
         <div class="mb-4" style="height:14vh">
             
            <img class="" width="100px" 
            src="{{asset('storage/'.$service->image)}}" alt="" />
         </div>
          
          <h3 class="h5 title">{{$service->title}}</h3>
          <p class="text-sm mb-0 text-muted">{{$service->description}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </section>
 