<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Hash; 
use DB;
use App\Penunggu;
use Session;
////use App\helpers\Globalhelper;



class ToolsController extends Controller
{


    public function chat()
    {
        $chat = DB::table('chat')->where('for', Session::get('nama_login')->id_penunggu)->orderBy('id_chat', 'DESC')->limit(10)->get();
        $i=0;
        foreach ($chat  as $key) {
                $userchat =DB::table('penunggu')->select('name','pic')->where('id_penunggu', $key->id_penunggu)->get();
                $chat[$i]->pic = $userchat[0]->pic;
                $chat[$i]->name = $userchat[0]->name;
           $i++;      
        }

     return $chat;

    }

	public function listchat(Request $request)
    {
        $chat=$this->chat();
       echo json_encode(array('listchat'=>$chat));

    }
    public function sendchat(Request $request)
    {
        if(!empty($request->input('message')))
        {

           DB::table('chat')->insert([
                    'time'                  => date('Y-m-d H:i:s'),
                    'message'               =>  $request->input('message'),
                    'status'                => 'member',
                    'is_seen'               => 'sending',
                    'for'                    =>  Session::get('nama_login')->id_penunggu,
                    'id_penunggu'           =>  Session::get('nama_login')->id_penunggu,
                    'created_at'            =>  date('Y-m-d H:i:s'),
                    'updated_at'            =>  date('Y-m-d H:i:s')
                ]);   
        }

        $chat=$this->chat();
        echo json_encode(array('listchat'=>$chat));
    }


}

