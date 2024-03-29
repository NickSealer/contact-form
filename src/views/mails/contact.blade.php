@extends('contactform::layouts.app')
<div class="container">
  <div class="card-header bg-primary text-white text-center">
    <h4><i class=""></i> Contact Us!</h4>
  </div>
  @include('flash::message')
  @include('contactform::errors._errors')
  <div class="card-body">
    <form class="" action="{{ route('send') }}" method="post">
      @csrf
      <div class="form-group row justify-content-md-center">
        <div class="col col-md-6 form-group">
          <label for="nombres">Nombres:</label>
          <input type="text" name="nombres" id="nombres" class="form-control" value="{{old('nombres')}}">
        </div>
        <div class="col col-md-6 form-group">
          <label for="apellidos">Apellidos:</label>
          <input type="text" name="apellidos" id="apellidos" class="form-control" value="{{old('apellidos')}}">
        </div>
        <div class="col col-md-6 form-group">
          <label for="cc">C.C.</label>
          <input type="text" name="cc" id="cc" class="form-control" value="{{old('cc')}}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" pattern="[0-9]+">
        </div>
        <div class="col col-md-6 form-group">
          <label for="direccion">Dirección:</label>
          <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion')}}">
        </div>
        <div class="col col-md-6 form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" pattern="[a-z0-9._%+-]+@[a-z]+\.[a-z]{2,4}$">
        </div>
        <div class="col col-md-6 form-group">
          <label for="phone">Phone:</label>
          <input type="text" name="phone" id="phone" class="form-control" value="{{old('phone')}}" onkeypress="if ( isNaN( String.fromCharCode(event.keyCode) )) return false;" pattern="[0-9]+" >
        </div>
      </div>
      <div class="form-group">
        <label for="subject">Subject:</label>
        <input type="text" name="subject" id="subject" class="form-control" value="{{old('subject')}}" pattern="[a-z A-Z]+">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea rows="4" name="message" id="message" class="form-control" value="{{old('message')}}" pattern="[a-zA-Z0-9]+"></textarea>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-outline-primary" style="margin-left: auto; margin-right: auto; width:20%;">
          <i class="far fa-paper-plane"></i> Send
        </button>
      </div>
    </form>
  </div>
</div>
