@extends('app')

@section('title')
Main
@endsection

@section('content')
<div class="container">
<h1>Main page</h1>
<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-8 px-0">
          <h1 class="display-4 font-italic">Mars helicopter first flight: Nasa to test Ingenuity</h1>
          <p class="lead my-3">This small helicopter is set to be the first to fly on another planet. Ingenuity is a 1.8kg (4lb) helicopter that travelled to Mars inside Nasa's Perseverance rover, which landed in February 2021.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
      </div>

@foreach($data as $el)
      <div class="row mb-2">
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">World</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{ $el->title }}</a>
              </h3>
              <div class="mb-1 text-muted">{{ $el->author }}</div>
              <p class="card-text mb-auto">{{ $el->text }}</p>
              <a href="#">Continue reading</a>
            </div>
            <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 200px; height: 250px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_178e0444915%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_178e0444915%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
          </div>
        </div>
     </div>
@endforeach
<div class="row container">
  <a href="{{ route('home', '1') }}" class="col-md-6 d-block text-right mt-3">All updates</a>
  <a href="{{ route('home', '0') }}" class="col-md-6 d-block text-left mt-3">Hide updates</a>
</div>
@endsection