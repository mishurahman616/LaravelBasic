@extends('layout.app')
@section('title', 'Home')

@section('content')
 {{-- Top Banner Start --}}
    <div class="container ">
         {{-- Here parallux class controlls the bannger size and image as background image  with css --}}
        <div class="row parallux m-auto">
            <div class="col-md-12 home-top-div text-center">
                <div class="profile-image">
                    <img src="{{asset('/images/profile.jpg')}}" alt="">
                </div>
                <h3>Software Engineer</h3>
                <h6>Mobile and Web </h6>
                <button class="btn btn-info">More</button>
            </div>
        </div> 
    </div>
{{-- Top Banner End --}}

        {{-- My service section start. Here services are displayed --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-5">
                <h2>My Services</h2>
            </div>
        </div>
        <div class="row">
            @for($i=0; $i<4; $i++)
            <div class="col-md-3 p-2 m-auto">
                <div class="card service-card" style="width: 100%;">
                    <img src="{{asset('images/service.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Service {{$i+1}}</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     
                    </div>
                  </div>
            </div>
            @endfor
        </div>
    </div>
        {{-- My service section end--}}
        {{-- Recent Project section Started--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pt-5">
                <h2>My Recent Project</h2>
            </div>
        </div>
        <div class="row">
            @for($i=0; $i<4; $i++)
              <div class="col-md-3 p-2">
                  <div class="card portfolio-card" style="width: 100%;">
                      <img src="{{asset('images/project.png')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Project {{$i+1}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
              </div>
            @endfor
        </div>
    </div>
     {{-- Recent Project section End--}}
     {{-- Contact section Started--}}
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12 text-center pt-5">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
                      </div>
                      <div class="mb-3">
                        <label for="inputMobile" class="form-label">Mobile No</label>
                        <input type="text" class="form-control" id="inputMobile" aria-describedby="mobileHelp">
                      </div>
                    <div class="mb-3">
                      <label for="inputEmail" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputMessage" class="form-label">Your Message</label>
                        <input type="message" class="form-control" id="inputMessage" aria-describedby="messageHelp">
                        <div id="messageHelp" class="form-text">We'll never share your info with anyone else.</div>
                      </div>
                    <button type="submit" class="btn btn-block btn-primary">Send</button>
                  </form>
            </div>
            <div class="col-md-6 p-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.9982822787783!2d88.94647291454642!3d24.658187459408435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc99c6cd14e353ca9!2zMjTCsDM5JzI5LjUiTiA4OMKwNTYnNTUuMiJF!5e0!3m2!1sbn!2sbd!4v1652823071092!5m2!1sbn!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
     {{-- Recent Project section End--}}
@endsection