<?php

namespace App\Http\Controllers;
use Views;
use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

 class PagesController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function home()
    {
    	return \View::make('home');
    }
    public function users()
    {
    	return \View::make('users');
    }
    public function admin()
    {
    	return \View::make('admin');
    }
}
