<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserStatusController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');


        // if (auth()->user()->admin != 1 || auth()->user()->editor != 1 ) {
        //     return redirect('/home')->with('error', 'لا يجوز "بصوت لطفى لبيب"');
        // }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users)
    {
        if(!auth()->user()->admin = 1){
            return redirect('/');

        }
        return view('UserStatus')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateinfo(Request $request, $id)
    {
        if(!auth()->user()->admin = 1){
            return redirect('/');

        }

        $this->validate($request, [
            'isAdmin' => 'nullable',
            'isEditor' => 'nullable',
            'isActive' => 'nullable',
        ]);


        $user = User::find($id);

        if ($request->has('isAdmin')){
            $user->update([
                'admin' => $request->get('isAdmin'),
                ]);
            };

            if ($request->has('isEditor')){
                $user->update([
                    'editor' => true,
                    ]);
                };

        if ($request->has('Admin' , 'Editor' )){
            $user->update([
                'editor' => $request->input('Editor'),
                'admin' => $request->input('Admin'),
                ]);
            };

            if ($request->has('isActive')){
                $user->update([
                    'active' => $request->get('isActive'),
                ]);
            };
            $user->save();
            return redirect('/UserStatus');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if($id != Auth::user()->id && !auth()->user()->admin = 1 ){
            return redirect('/');

       }

       if(User::find($id)){
           $user = User::find($id);
           $user->delete();
           return redirect('/UserStatus');
        } else {

       }

        return redirect('/UserStatus');

    }
}
