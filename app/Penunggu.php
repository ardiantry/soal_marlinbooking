<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penunggu extends Model
{
    protected $table        = 'penunggu';

    protected $primaryKey   = 'id_penunggu'; 

    protected $fillable     = ['name', 
                               'password',
                               'email', 
                               'phone', 
                               'address', 
                               'job', 
                               'institution', 
                               'pic', 
                               'last_login', 
                               'level', 
                               'status'];

    public function getAuthPassword()
    {
        return $this->jimat;
    }

    public function chat(){
      return $this->belongsTo(Chat::class);
    }
     public function data(){
        return $this->belongsTo('App\Data', 'id_penunggu');
    }

}
