@extends('admin.dashboardadmin')

@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('classes/' .$classes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$classes->id}}" id="id" />
        <label>Classe</label></br>
        <input type="text" name="classes" id="classes" value="{{$classes->classes}}" class="form-control"></br>
        <label>Levels</label></br>
        <input type="text" name="levels" id="levels" value="{{$classes->levels}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
  
