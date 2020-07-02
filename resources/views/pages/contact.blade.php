@extends('layouts.app')
@section('content')

<div id="contact" class="container bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Montreal, QC</p>
      <p><span class="glyphicon glyphicon-phone"></span> +1 514-378-6288</p>
      <p><span class="glyphicon glyphicon-envelope"></span> klintjanku99@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
    <form action="/contact" method="POST">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" value="{{ old('name') }}">
          <div>{{ $errors->first('name') }}</div>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" value="{{ old('email') }}">
          <div>{{ $errors->first('email') }}</div>
        </div>
      </div>
      <textarea class="form-control" id="message" name="message" placeholder="message" rows="5" value="{{ old('message') }}"></textarea><br>
      <div>{{ $errors->first('message') }}</div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-primary pull-right" type="submit">Send</button>
        </div>
      </div>

      @csrf
    </form>
    </div>
  </div>
</div>

@endsection