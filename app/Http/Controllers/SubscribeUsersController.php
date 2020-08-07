<?php

namespace App\Http\Controllers;

use App\SubscribeUsers;
use Illuminate\Http\Request;


class SubscribeUsersController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        if($request->has('email')){
            $sub = new SubscribeUsers;
            $sub->email = $request->get('email');
            $sub->save();
        }

         return back();

    }

  
}
