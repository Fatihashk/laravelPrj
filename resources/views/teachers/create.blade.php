
@extends('admin.dashboardadmin')
@section('content')
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      
      <form action="{{ url('teachers') }}" method="post">
        {!! csrf_field() !!}
        
        <label>Nom</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Bday</label></br>
        <input type="date" name="bday" id="bday" class="form-control"></br>
        <label>Adresse</label></br>
        <input type="text" name="adresse" id="adresse" class="form-control"></br>
        <label>Tel</label></br>
        <input type="text" name="tel" id="tel" class="form-control"></br>
   
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
  </div>
</div>
@stop
