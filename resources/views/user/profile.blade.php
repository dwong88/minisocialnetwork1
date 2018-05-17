@extends('layouts.app')
<style>
    .profile-img{
      max-width: 150px;
      border: 5px solid #fff;
      border-radius: 100%;
      box-shadow: 0 2px 2px rgba(0,0,0,0.3)
    }
</style>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
              <center><img class="profile-img center" src="http://www.lovemarks.com/wp-content/uploads/profile-avatars/default-avatar-space-astronaut.png">
              </center>
              <h1>{{$user->username}}</h1>
              <h5>{{$user->email}}</h5>
              <h5>{{$user->dob->format('l j F Y')}} ({{$user->dob->age}} Years Old)</h5>
              <div class="col-sd-8">
                <button type="button" class="btn btn-success">Follow</button>
              </div>
            </div>
          </div>
    </div>
</div>
@endsection
