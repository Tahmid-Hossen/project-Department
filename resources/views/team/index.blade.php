@extends('layout')

@section('content')

<div class="container">
    <div class="title">
    <h1>Team Details </h1>
    </div>
    <div class="form">
      <form action="/search" method="POST"> 
      @csrf
        <div class="row">
          <div class="col-xs-6 col-md-4 pull-right">
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" name="team_point" class="form-control" placeholder="Search">
            </div>
          </div>
        </div>
      </form>
    </div>
  <div class="row">
    <table class="table">
      <thead>
        <tr>
          <th scope="col-sm-12" >Team Name</th>
          <th scope="col-sm-12" >Team Members</th>
          <th scope="col-sm-12" >Team Members Name</th>
          <th scope="col-sm-12" >Total Match</th>
          <th scope="col-sm-12" >Match Win</th>
          <th scope="col-sm-12" >Match Lost</th>
          <th scope="col-sm-12" >Team Points</th>
        </tr>
      </thead>
      <tbody>
        @foreach($teams as $name)
        <tr>
          <td>
            {{ $name->team_name }}
          </td>
          <td>
            {{ $name->team_member }}
          </td>
          <td>
            {{ $name->member_name}}
          </td>
          <td>
            {{ $name->total_match }}
          </td>
          <td>
            {{ $name->match_win }}
          </td>
          <td>
            {{ $name->match_lost }}
          </td>
          <td>
            {{ $name->team_point }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection