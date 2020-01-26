<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Http\Requests\TeamRequest;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
  public function create(){
    return view("team.create");
  }

  public function index(){
    $teams = Team::all();
    return view('team.index', compact('teams'));
  }
  public function search(Request $request){
    $teams = Team::where('team_point', '>=', $request->team_point)->get();
    //return $request->cgpa;
    //return $students;
    return view('team.index', compact('teams'));
 }
  public function store(Request $request){
    $this->validate($request, [
      'team_name' => 'required|string',
      'team_member' => 'required',
      'member_name' => 'required',
      'total_match' => 'required',
      'match_win' => 'required',
      'match_lost' => 'required',
      'team_point' => 'required'
      
     ]);

     $team = new Team;
     $team->team_name = $request->team_name;
     $team->team_member = $request->team_member;
     $team->member_name = $request->member_name;
     $team->total_match = $request->total_match;
     $team->match_win = $request->match_win;
     $team->match_lost = $request->match_lost;
     $team->team_point= $request->team_point;
     $team->save();

     return redirect()->back()->with('success', 'Successfully added a team!');
  }


}
