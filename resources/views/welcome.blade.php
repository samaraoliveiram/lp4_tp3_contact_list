@extends('layouts.app')

       @section('content') 
            <div class="content">
                <div class="container">
                <img src="https://farm5.staticflickr.com/4428/35969238033_22f2dca797_k.jpg" width=100%>
                <div class="title">
                    My Contacts
                </div>
                </div>
            <div>
            <table class="table table-hover">
                <thead>
                <tr>
             <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Birthday</th>
            <th scope="col">Type</th>
            <th scope="col">Contact Type</th>
            <th scope="col">Edit</th>
            <th scope="col">Delet</th>
            </tr>
              </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr class="table-light">
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->number }}</td>
                        <td>{{ $contact->date }}</td>
                        <td>{{ $contact->type }}</td>
                        <td>{{ $contact->contact_type }}</td>    
                        <td><a href="{{action('ContactController@edit', $contact['id'])}}" class="btn btn-primary">Edit</button></td>    
                        <td><form action="{{action('ContactController@destroy', $contact['id'])}}" method="post">
                             @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                             </form>
                        </td>    
                 </tr>
                        @endforeach
                        <tr>
                            <td>
        <a href="{{action('ContactController@create')}}" class="btn btn-primary">Insert</a>
        
        </td>    
    </tr>
        </tbody>
        
        </table>
        <div id="map" style="width:100%;height:500px"></div>
    </div>
        <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
        console.log(document.getElementById('map'));
      }
    </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-zCaQ0AN5szdaeWoUOCQWBuLHJuTzjVM&callback=initMap"
  type="text/javascript"></script>
        @endsection
