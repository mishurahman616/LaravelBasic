@extends('layout.app')
@section('title', 'Services')

@section('content')
<div class="container">
  <br>
  <div class="row m-auto content-title-div rounded-4">
        <div class="col-md-12">
            <h5 class="content-title text-center">My Service </h5>

        </div>
    </div>

    <div class="row">      
        @for($i=0; $i<3; $i++)
        <div class="col-md-4 p-2 m-auto">
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
    <div class="row mt-5 mb-5">
        <div class="col-md-6">
            <h5>Contact</h5>
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
        <div class="col-md-6 ps-5 mt-5">
            <h5>Address</h5>
            <address class="service-page-address">
                Mobile: <a href="tel:01794914570">01794914570</a><br />
                Email: <a href="mailto:mishu.cse616@gmail.com">mishu.cse616@gmail.com</a> <br />
                117 East Raja Bazar, Tejgaon, Dhaka-1215
            </address>
        </div>
    </div>
</div>
@endsection