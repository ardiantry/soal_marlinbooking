<?php

namespace App\Http\Middleware;

use Closure; 
use Session;

class MyMiddleware
{
	
	public function handle($request,Closure $next)
	{
		if(Session::has("nama_login")==false)
		{
			Session::flash('pesan','Anda Belum Login');
			return redirect('login');
		}
		else
		{	

			return $next($request);

		}

	
	}
}
