<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash; 
use DB;
use App\Penunggu;
use Session;
use Carbon\Carbon;
//use App\helpers\Globalhelper;
// https://github.com/ammezie/laravel-chat


class MainController extends Controller
{
	
	public function login()
    {
        return view('user.auth.login');
    }

    public function ceklogin(Request $request)
    {

    	$cek=Penunggu::where("email",$request->input("email"))->first();

    	if($cek)
    	{
    		if(Hash::check($request->input("password"), $cek->password))
    		{
    			Session::put('nama_login',$cek);
    			return redirect("home");
    		}
    		else {
    			Session::flash('pesan','Password Salah');
    			return redirect("login"); 
    		}
    	}
        else
        {
               Session::flash('pesan','Email Salah');
                return redirect("login");

        }

    }

    public function registrasi()
    {
        return view('user.auth.register');
        
    }

    public function registrasiproses(Request $request)
    {
        
            $data_user=[];
            $alert='';
            $alert .=$request->input('username')==''?'<li>Nama Pengguna Belum Di Isikan</li>':'';
            $alert .=$request->input('email')==''?'<li>Email Belum Di Isikan</li>':'';
            $alert .=$request->input('password')==''?'<li>Password Belum Di Isikan</li>':'';
            $alert .=$request->input('re_password')==''?'<li>Re Password  Belum Di Isikan</li>':'';
            $alert .=$request->input('re_password')!=$request->input('password')?'<li>Password tidak Sama</li>':'';

            $userinput['username']=$request->input('username');
            $userinput['email']=$request->input('email');
            Session::flash('input',$userinput);

            if($alert !='')
            {
                $alert ='<ul>'.$alert.'</ul>';
                Session::flash('pesan','<div class="alert alert-warning">'.$alert.'</div>');

                return redirect("registrasi"); 
            }
            else
            {
                @$users = DB::table('penunggu')->where('email', $request->input('email'))->get();
                if(count($users)==0)
                    {
                        $data_user = array(
                            'name'                  =>  $request->input('username'),
                            'email'                 =>  $request->input('email'),
                            'password'              =>  Hash::make($request->input('password')),
                            'phone'                 => '',
                            'address'               => '',
                            'job'                   =>  '',
                            'institution'           =>  '',
                            'pic'                   =>  'images/default.jpg',
                            'last_login'            =>  date('Y-m-d H:i:s'),
                            'level'                 =>  2,
                            'status'                =>  1,
                            'created_at'            =>  date('Y-m-d H:i:s'),
                            'updated_at'            =>  date('Y-m-d H:i:s')
                             
                        );
                        @$user_id=DB::table('penunggu')->insertGetId($data_user,'id_penunggu');
                        $request->session()->flush();
                       // $users = DB::table('users')->select('customer_email')->where('id', $user_id)->get();  
                        Session::flash('pesan','<div class="alert alert-success">Register Berhasil</div>');
                        return redirect("registrasi"); 
                    }
                    else
                    {
                        $alert ='<ul><li>Email yang anda gunakan sudah terdaftar sebelumnya</li></ul>';
                        Session::flash('pesan','<div class="alert alert-warning">'.$alert.'</div>');
                        return redirect("registrasi"); 

                    }
            }

        
    }
    
    public function home(Request $request)
    {
       //dd(Session::has("nama_login"));
       // $request->session()->get('key');
   //    print_r($request->session()->get('nama_login')->name);
    	return view('user.home.home');
    	
    }
    public function simpanprofile(Request $request)
    {
            $data_user=[];
            $alert='';
            $alert .=$request->input('name')==''?'<li>Nama Pengguna Belum Di Isikan</li>':'';
            $alert .=$request->input('email')==''?'<li>Email Belum Di Isikan</li>':'';
            $alert .=$request->input('phone')==''?'<li>Telephone  Belum Di Isikan</li>':'';
            $alert .=$request->input('job')==''?'<li>Pekerjaan Belum Di Isikan</li>':'';
            $alert .=$request->input('institution')==''?'<li>Institution Belum Di Isikan</li>':'';
            $alert .=$request->input('address')==''?'<li>Institution Belum Di Isikan</li>':'';
            if($alert=='')
            {
                $data_user = array(
                            'name'                  =>  $request->input('name'),
                            'email'                 =>  $request->input('email'),
                            'phone'                 =>  $request->input('phone'),
                            'address'               =>  $request->input('address'),
                            'job'                   =>  $request->input('job'),
                            'institution'           =>  $request->input('institution'),
                            'updated_at'            =>  date('Y-m-d H:i:s'));
                    if (!empty($request->file('file'))) 
                    {
                        $file                    = $request->file('file');
                        $dt                      = Carbon::now();
                        $acak                    = $file->getClientOriginalExtension();
                        $filename                = rand(1111,9999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
                        $request->file('file')->move("images/member", $filename);
                        $data_user['pic']     = "images/member/".$filename;
                    }
                    DB::table('penunggu')->where('id_penunggu',Session::get('nama_login')->id_penunggu)->update($data_user);
                    $cek=Penunggu::where("email",$request->input("email"))->first();
                    Session::put('nama_login',$cek);
                    Session::flash('pesan','<div class="alert alert-success">Update Profile sukses</div>');
                    return redirect("profile"); 
                

            }
            else
            {
                Session::flash('pesan','<div class="alert alert-warning"><ul>'.$alert.'</ul></div>');
                return redirect("profile"); 
            }
    }
    
    public function logout()
    {
    	Session::flush();
    	return redirect("login");
    }

   

}