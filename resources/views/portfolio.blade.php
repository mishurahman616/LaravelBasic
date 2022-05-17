@extends('layout.app')
@section('title', 'Portfolio')

@section('content')
<div class="container">
  <br>
  <div class="row m-auto content-title-div rounded-4">
    <div class="col-md-12">
        <h5 class="content-title text-center">My Portfolio </h5>

    </div>
  </div>
  <div class="row">
      @for($i=0; $i<8; $i++)
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

@endsection
