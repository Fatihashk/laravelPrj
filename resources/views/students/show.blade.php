
@extends('teacher.dashboardteacher')
@section('content')
<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Prénom : {{ $students->prenom }}</p>
        <p class="card-text">Sex : {{ $students->sex }}</p>
        <p class="card-text">Bday : {{ $students->bday }}</p>
        <p class="card-text">Bplace : {{ $students->bplace }}</p>
        <p class="card-text">Tél : {{ $students->tel }}</p>
        <p class="card-text">Age : {{ $students->age }}</p>
  </div>

  
  </div>
</div>
@endsection