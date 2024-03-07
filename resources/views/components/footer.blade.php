@props(['company','services'])
<footer class="">
       
  <div class=" py-2 text-white">
    <div class="container">
      <div class="row py-5 gy-2">
        <div class="col-lg-8 text-gr col-md-4"><img class="mb-4" src="{{asset('storage/'.$company->logo)}}" alt="" width="100">
          <p class=" text-sm mb-4">{{$company->description}}</p>
          <p class="mb-1"><i class="fas me-3 text-primary fa-fw fa-envelope"></i><span class="text-sm ">{{$company->email}}</span></p>
          <p class="mb-1"><i class="fas me-3 text-primary fa-fw fa-mobile"></i><span class="text-sm ">{{$company->Number}}</span></p>
          <p class="mb-1"><i class="fas me-3 text-primary fa-fw fa-map-marker-alt"></i><span class="text-sm ">{{$company->adresse}}</span></p>
        </div>
        <div class="col-lg-2 col-md-4 text-center">
          <h5 class="mt-3 mb-4 fnw">Quick links</h5>
          <ul class="list-unstyled">
            <li class="mb-2"><a class="footer-link" href="#!">Home</a></li>
            <li class="mb-2"><a class="footer-link" href="#!">About</a></li>
            <li class="mb-2"><a class="footer-link" href="#!">Services</a></li>
            <li class="mb-2"><a class="footer-link" href="#!">Contacts</a></li>
            <li class="mb-2"><a class="footer-link" href="#!">Pages</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-4 text-center">
          <h5 class="mt-3 mb-4 fnw">Our services</h5>
          <ul class="list-unstyled">
@foreach ($services as $item)
<li class="mb-2"><a class="footer-link" href="#!">{{$item->title}}</a></li>

@endforeach        
          </ul>
        </div>
      
      </div>
    </div>
  </div>
  <div class="bg-dk py-4">
    <div class="container text-center">
      <p class="mb-0 text-muted text-sm">&copy; All rights reserved. </p>
    </div>
  </div>
</footer>