
@extends('admin.dashboardadmin')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('teachers/' .$teachers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Nom</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$teachers->email}}" class="form-control"></br>
        <label>Bday</label></br>
        <input type="date" name="bday" id="bday" value="{{$teachers->bday}}" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" value="{{$teachers->adresse}}" class="form-control"></br>
        <label>Tel</label></br>
        <input type="text" name="tel" id="tel" value="{{$teachers->tel}}" class="form-control"></br>
     
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
  
