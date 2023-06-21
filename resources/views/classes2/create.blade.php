
@extends('admin.dashboardadmin')
@section('content')
<div class="card">
  <div class="card-header">classe Page</div>
  <div class="card-body">
      
      <form action="{{ url('classes') }}" method="post">
        {!! csrf_field() !!}
        
     
        <label>Classe</label></br>
        <input type="text" name="classes" id="classes" class="form-control"></br>
        <label>Level</label></br>
        <input type="text" name="levels" id="levels" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
  </div>
</div>
@stop
