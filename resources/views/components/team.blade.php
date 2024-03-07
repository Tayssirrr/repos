@props(['company'])
<section id="team" class="team section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Team</h2>
        <div class="underline"></div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
      </div>

      <div class="row">

        <div class="col-lg-6">
          <div class="member d-flex align-items-start" >
            <div class="teampic"><img src="./img/team1.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$company->boss}}</h4>
              <span>Chief Executive Officer</span>
              
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""> <i class="bi bi-whatsapp"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start" >
            <div class="teampic"><img src="./img/team2.png" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>{{$company->manager}}</h4>
              <span>Manager</span>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati, ducimus.</p>
              <div class="social">
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""> <i class="bi bi-whatsapp"></i> </a>
              </div>
            </div>
          </div>
        </div>

       


      </div>

    </div>
  </section>