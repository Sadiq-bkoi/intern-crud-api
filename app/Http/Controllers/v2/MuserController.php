<?php

namespace App\Http\Controllers\v2;

use App\Models\Muser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MuserController extends Controller
{
    public function get_user_data(){
        $users=Muser::all();
        return response()->json($users);
    }
    public function create_user_data(request $request){
        $newuser=Muser::create($request->all());
        $newuser->message('from v2');
        return response()->json($newuser);
    }
    public function delete_user_data($id){
        $delete_user = Muser::find($id);
        $delete_user->delete();
        $res = [
            'message' => 'deleted successfully  from v2',
            'status' => 200,
            'data' => $delete_user,
        ];
        return response()->json($res);
    }
    public function edit_user_data(Request $request, $id)
    {
        // dd($request);
    //   $edit_user = Muser::find($id);
    //   $edit_user->update($request->all());
    $Update_data = ['name' => $request->name];
    $Update_data = ['email' => $request->email];
    $Update_data = ['password' => $request->password];
    $Update_data = ['image' => $request->image];
    
    $edit_user = Muser::whereId($id)->update($Update_data);
    $res = [
        'message' => 'successfully edited from v2',
        'status' => 200,
        'data' => $edit_user,
    ];
      return response()->json($res);
    }
}
