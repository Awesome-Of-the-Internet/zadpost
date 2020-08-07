<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        
       return view('UserInfo')->with('user' , $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {



        $user = User::find($id);


        if($user->id != auth()->user()->id){
            return redirect('/');
        }


        $this->validate($request, [
            'name' => 'nullable',
            'email' => 'nullable',
            'Phone' => 'nullable',
            'country' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable',
        ]);



        if ($request->has('name')){
            $user->update([
                'name' => $request->get('name'),
                ]);
            };
            if ($request->has('email')){
                $user->update([
                    'email' => $request->get('email'),
                    ]);
                };
            if ($request->has('country')){
                $user->update([
                    'country' => $request->get('country'),
                    ]);
                };
            if ($request->has('description')){
                $user->update([
                    'description' => $request->get('description'),
                    ]);
                };
            if ($request->has('Phone')){
                $user->update([
                    'Phone' => $request->get('Phone'),
                ]);
            };



            if ($request->hasFile('image') && $request->file('image')->isValid() ){
                $user->clearMediaCollection('UserImages');
                $user->addMediaFromRequest('image')
                ->toMediaCollection('UserImages');}

            $user->save();
            return redirect('/UserInfo');


    }

}
