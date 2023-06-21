
@extends('admin.dashboardadmin')
@section('content')
<div class="card">
  <div class="card-header">teachers Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Nom : {{ $teachers->name }}</h5>
        <p class="card-text">Email : {{ $teachers->email }}</p>
        <p class="card-text">Bday : {{ $teachers->bday }}</p>
        <p class="card-text">Adresse : {{ $teachers->adresse }}</p>
        <p class="card-text">Tél : {{ $teachers->tel }}</p>
      
  </div>

  
  </div>
</div>
@endsection
