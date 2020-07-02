@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Company</h1>
    <div id="portfolio" class="container-fluid text-center bg-grey border-rad" >
    <h2>Portfolio</h2><br>
    <h4>What we have created</h4>
    <div class="row text-center slideanim">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src=" {{ asset('image/paris.jpg') }} " alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rerum, nesciunt dignissimos delectus voluptate in minus.</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src=" {{ asset('image/newyork.jpg') }} " alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum culpa architecto sunt blanditiis ratione id?</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src=" {{ asset('image/sanfran.jpg') }} " alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia atque eum nulla temporibus explicabo molestias!</p>
        </div>
      </div>
    </div><br>
  </div>

  <!-- Container (Portfolio Section) -->

@endsection