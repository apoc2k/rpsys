@extends('master')

@section('content')

  <h3>Profile page</h3>
  <div class="notification">
    <span>Welcome aboard {{ $data->firstname }}.</span>
    <span>This is your first time login in. In order to be able to access the full functionality of rpsys we'll need to verify your email first. We've just send you a mail containing a link. By clicking the link you'll be automatically validated and send back to this page.</span>
  </div>
  <div class="profile-introduction">
    <p>This is your personal profile page. On this page you'll be able to track your sessions, join existing ones or even create new ones. Go the <a href="#">forums</a> for the latest updates or to get involved with the development of this project. Your input will only help to make it better!</p>
  </div>
  <table class="profile-details">
    <tr>
      <td>Name</td>
      <td>{{$data->firstname}}</td>
      <td>{{$data->lastname}}</td>
    </tr>
    <tr>
      <td>Alias</td>
      <td colspan="2">{{$data->username}}</td>
    </tr>
    <tr>
      <td>Email</td>
      <td colspan="2">{{ $data->email}}</td>
    </tr>
    <tr>
      <td>Pass</td>
      <td colspan="2">{{ $data->password}}</td>
    </tr>
  </table>

@stop

@section('footer')

@stop
