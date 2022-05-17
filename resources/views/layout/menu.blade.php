<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                  <a class="navbar-brand" href="{{url('/')}}"><img src={{ asset('images/logo.png') }} alt="" ></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }} text-uppercase" aria-current="page" href="{{url('/')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('service') ? 'active' : '' }} text-uppercase" href="{{url('/service')}}">Services</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('portfolio') ? 'active' : '' }} text-uppercase" href="{{url('/portfolio')}}">Portfolio</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Request::is('about') ? 'active' : '' }} text-uppercase" href="{{url('/about')}}">About</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </div>

</div>
