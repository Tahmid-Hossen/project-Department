@extends('layout')

@section('content')

  <div class="container">
    <h1>Add Team here</h1>
    <div class="col-lg-6 col-lg-offset-3">
    @if(Session::has('success'))
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <ul>
          <li class="alert alert-success">{{ Session::get('success') }}</li>
        </ul>
      </div>
    </div>
    @endif

    @if(count($errors)>0)
    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <ul>
          @foreach($errors->all() as $error)
          <li class="alert alert-danger">{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    @endif
   <form action="/create-team" method="POST" enctype="multipart/form-data">
      @csrf
     <div class="row">
        <div class="form-group">
         <input type="text" name="team_name" class="form-control input-sm" placeholder="Enter your team name">
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <select class="form-control" name="team_member" id="exampleFormControlSelect1">
            <option>seect team members</option>
            <option>1</option>
            <option>2</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
        <select class="form-control" name="member_name" id="exampleFormControlSelect1">
            <option>seect team members name</option>
            <option>Awlad & Tahmid</option>
            <option>Firoz & Tushar </option>
            <option>Sonjoy & Rasel</option>
            <option>Shuvro & Rony</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="form-group">
          <input type="text" name="total_match" class="form-control input-sm" placeholder="Enter Total Match">
        </div>
      </div>

      <div class="row">
        <div class="form-group">
          <input type="text" name="match_win" class="form-control input-sm" placeholder="Match Winning">
        </div>
      </div>

      <div class="row">
        <div class="form-group">
          <input type="text" name="match_lost" class="form-control input-sm" placeholder="Match Lost">
        </div>
      </div>

      <div class="row">
        <div class="form-group">
          <input type="text" name="team_point" class="form-control input-sm" placeholder="Enter team points">
        </div>
      </div>

       <input type="submit" value="Add Team" class="btn btn-info">
   </form>
  </div>

@stop