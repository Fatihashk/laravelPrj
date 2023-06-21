

@extends('teacher.dashboardteacher')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
      
      <form action="{{ url('students') }}" method="post">
        {!! csrf_field() !!}
        
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Prénom</label></br>
        <input type="text" name="prenom" id="prenom" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" class="form-control"></br>
        <label>Bday</label></br>
        <input type="text" name="bday" id="bday" class="form-control"></br>
        <label>Bplace</label></br>
        <input type="text" name="bplace" id="bplace" class="form-control"></br>
        <label>Tel</label></br>
        <input type="text" name="tel" id="tel" class="form-control"></br>
        <label>Age</label></br>
        <input type="number" name="age" id="age" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
