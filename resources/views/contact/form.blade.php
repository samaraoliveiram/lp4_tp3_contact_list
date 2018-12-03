
@extends('layouts.app')

@section('content')  
<div class="container" >
    <form action="/submit" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif

                {!! csrf_field() !!}
    <fieldset>
    <legend>Add a new contact</legend>
    <div class="form-group row">
        <label class="col-form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Default input">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Number</label>
        <input type="number" name="number" id="number" class="form-control">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Birthday</label>
        <input type="date" name="date" id="date" class="form-control">
    </div>
    <div class="form-group">
    <label class="col-form-label">Type</label>
    <div class="form-check">
      <input type="radio" name="type" value="Cell Phone" class="form-check-input" id="optionsRadios1" checked="">
      <label class="form-check-label" for="type" disabled="false">Cell Phone</label>
    </div>
    <div class="form-check">
      <input type="radio" name="type" value="Phone" class="form-check-input" id="optionsRadios2">
      <label class="form-check-label" for="type" >Phone</label>
    </div>
    <div class="form-check">
      <input type="radio" name="type" value="Skype" class="form-check-input" id="optionsRadios3">
      <label class="form-check-label" for="type" >Skype</label>
    </div>
  </div>
    <div class="form-group row">
    <label class="col-form-label">Contact Type</label>
        <select class="custom-select" name="contact_type" id="contact_type">
            <option value="Personal"selected="">Personal</option>
            <option value="Business">Business</option>
        </select>
    </div>
    <div class="form-group row">
    <label class="col-form-label">Comments</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
    </form>
    </div>
    @endsection