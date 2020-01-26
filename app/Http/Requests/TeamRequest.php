<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

      $info = [
        'team_name' => 'required',
        'team_member' => 'required',
        'member_name' => 'required',
        'total_match' => 'required',
        'match_win' => 'required',
        'match_lost' => 'required',
        'team_point' => 'required'
      ];
        return $info;
    }
}
