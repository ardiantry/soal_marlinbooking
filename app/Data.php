<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table        = 'data';
    protected $primaryKey   = 'id_data';
    protected $fillable     = ['data_date', 
                               'awlr',
                               'winddirect', 
                               'windspeed', 
                               'status', 
                               'upload_at', 
                               'id_penunggu', 
                               'id_station'];

    public function penunggu(){
      return $this->belongsTo(Penunggu::class);
    }
     public function Station(){
        return $this->belongsTo('App\Station', 'id_station');
    }
}
