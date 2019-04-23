<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::findOrFail($id);
		$profileCv = $user->getDefaultCv();
    
                         
        return view('home')
        ->with('user', $user)
                        ->with('profileCv', $profileCv)
						->with('page_title', $user->getName())
						->with('form_title', 'Contact '.$user->getName());
    }

}
