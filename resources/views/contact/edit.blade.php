<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
    </style>
</head>
<body>
<div class="flex-center" >
    <form action="{{action('ContactController@update', $id)}}" method="post">
    @csrf
        <input name="_method" type="hidden" value="PATCH">
        
    <fieldset>
    <legend>Add a new contact</legend>
    <div class="form-group row">
        <label class="col-form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Default input" value="{{$contact->name}}">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Email address</label>
        <input type="email" name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="{{$contact->email}}">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Number</label>
        <input value="{{$contact->number}}" type="number" name="number" id="number" class="form-control">
    </div>
    <div class="form-group row">
        <label class="col-form-label">Birthday</label>
        <input value="{{$contact->date}}" type="date" name="date" id="date" class="form-control">
    </div>
    <div class="form-group">
    <label class="col-form-label">Type</label>
    <div class="form-check">
      <input type="radio" name="type" value="Cell Phone" class="form-check-input" id="optionsRadios1" checked="" @if($contact->type=="Cell Phone") checked @endif>
      <label class="form-check-label" for="type" disabled="false">Cell Phone</label>
    </div>
    <div class="form-check">
      <input type="radio" name="type" value="Phone" class="form-check-input" id="optionsRadios2" @if($contact->type=="Phone") checked @endif>
      <label class="form-check-label" for="type" >Phone</label>
    </div>
    <div class="form-check">
      <input type="radio" name="type" value="Skype" class="form-check-input" id="optionsRadios3" @if($contact->type=="Skype") checked @endif>
      <label class="form-check-label" for="type" >Skype</label>
    </div>
  </div>
    <div class="form-group row">
    <label class="col-form-label">Contact Type</label>
        <select class="custom-select" name="contact_type" id="contact_type">
            <option value="Personal" @if($contact->contact_type=="Personal") selected @endif>Personal</option>
            <option value="Business" @if($contact->contact_type=="Business") selected @endif>Business</option>
        </select>
    </div>
    <div class="form-group row">
    <label class="col-form-label">Comments</label>
    <textarea class="form-control" id="description" name="description" rows="3">{{$contact->description}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <div class="form-group">
        <label class="custom-file-label" for="inputGroupFile02">Upload CSV</label>
        <input type="file" class="custom-file-input" id="inputGroupFile02">
      </div>
    </fieldset>
    </form>
    </div>
</body>
</html>