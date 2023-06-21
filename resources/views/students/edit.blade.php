
@extends('teacher.dashboardteacher')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('students/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control"></br>
        <label>Prénom</label></br>
        <input type="text" name="prenom" id="prenom" value="{{$students->prenom}}" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" value="{{$students->sex}}" class="form-control"></br>
        <label>Bday</label></br>
        <input type="text" name="bday" id="bday" value="{{$students->bday}}" class="form-control"></br>
        <label>Bplace</label></br>
        <input type="text" name="bplace" id="bplace" value="{{$students->bplace}}" class="form-control"></br>
        <label>Tel</label></br>
        <input type="text" name="tel" id="tel" value="{{$students->tel}}" class="form-control"></br>
        <label>Age</label></br>
        <input type="text" name="age" id="age" value="{{$students->age}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
  
