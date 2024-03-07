@props(['company'])
<section class="py-5 shadow-sm z-index-20 position-relative">
    <div class="container py-5">
      <header>
        <h2>Request a <span class="text-danger">Call </span>Back</h2>
        <p class="mb-5 text-muted">Nanotechnology immersion along the information highway will close the loop on focusing</p>
      </header>
      <div class="row gy-5">
        <div class="col-lg-7">
          <div class="pt-1 bg-danger">
            <div class="p-4 p-lg-5 bg-white shadow-sm">
              <form action="#">
                <div class="row gy-3">
                  <div class="col-lg-6">
                    <input class="form-control" type="text" name="firstname" placeholder="First name">
                  </div>
                  <div class="col-lg-6">
                    <input class="form-control" type="text" name="lastname" placeholder="Last name">
                  </div>
                  <div class="col-lg-6">
                    <input class="form-control" type="tel" name="phone" placeholder="Phone number">
                  </div>
                  <div class="col-lg-6">
                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                  </div>
                  <div class="col-lg-12">
                    <input class="form-control" type="email" name="email" placeholder="Email address">
                  </div>
                  <div class="col-lg-12">
                    <textarea class="form-control" name="message" rows="5" placeholder="Leave your message"></textarea>
                  </div>
                  <div class="col-lg-12">
                    <button class="btn btn-outline-danger" type="submit">Submit now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <h3>Have a quesion?</h3>
          <p class="text-muted mb-5">If you got any questions please do not hesitate to send us a message.</p>
          <ul class="list-unstyled">
            <li class="d-flex mb-3">
              <div class="icon bg-primary flex-shrink-0"><i class="bi bi-geo-alt"></i></div>
              <div class="ms-3">
                <h5 class="mb-0">Address</h5>
                <p class="text-muted text-sm">{{$company->adresse}}</p>
              </div>
            </li>
            <li class="d-flex mb-3">
              <div class="icon bg-primary flex-shrink-0"><i class="fas text-white fa-fw fa-envelope"></i></div>
              <div class="ms-3">
                <h5 class="mb-0">Email</h5>
                <p class="text-muted text-sm">{{$company->email}}</p>
              </div>
            </li>
            <li class="d-flex mb-3">
              <div class="icon bg-primary flex-shrink-0"><i class="fas text-white fa-fw fa-mobile"></i></div>
              <div class="ms-3">
                <h5 class="mb-0">Phone</h5>
                <p class="text-muted text-sm">{{$company->Number}}</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>