@extends('layouts.jobmatchingapp')

@section('title', 'index')

@section('header')
  <h1>Job Matching App</h1>
  <nav class="menu_area">
    <ul>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li class="has-sub"><a href="">Users</a>
        <ul class="sub">
          <li><a href="">Login</a></li>
          <li><a href="">Logout</a></li>
        </ul>
      </li>
      <li><a href="">About</a></li>
      <li><a href="">News</a></li>
    </ul>
  </nav>
@endsection

@section('content')
  <h2>Jobs</h2>
  <div class="jobTable">
    <div class="job">
      @foreach($jobs as $job)
        <div>{{$job->id}}</div>
        <div>{{$job->title}}</div>
        <div>{{$job->frontend}}</div>
        <div>{{$job->backend}}</div>
        <div>{{$job->infra}}</div>
      @endforeach
      <p><a href="jobs/show/?id={{$job->id}}">Show this job</a></p>
    </div>
  </div>
@endsection

@section('contact')
  <h2>お問合せ</h2>
  <form class="contactform" method="POST" action="/confirm">
    {{ csrf_field() }}
    <div>お名前</div>
    <div class="name"><input type="text" name="contactPersonName"></div>
    <div>Email</div>
    <div class="email"><input type="email" name="contactPersonEmail"></div>
    <div>お問合せ内容</div>
    <div class="msg"><input type="text_area" name="contactMsg"></div>
    <div><input type="submit" value="確認画面へ"></div>
  </form>
@endsection

@section('footer')
  <small>(c)shinyaishizaki.com all right reserved.</small>
@endsection