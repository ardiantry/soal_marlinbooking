<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table 		= 'chat';
    protected $primaryKey	= 'id_chat';
    protected $fillable 	= ['time',
						   	   'message',
						   	   'status',
						   	   'is_seen',
						   	   'id_penunggu',
                               'for'];


    public function penunggu(){
    	return $this->belongsTo('App\Penunggu', 'id_penunggu');
    }
}
