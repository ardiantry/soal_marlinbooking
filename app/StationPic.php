<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StationPic extends Model
{
    protected $table        = 'station_pic';
    protected $primaryKey   = 'id_stationpic';
    protected $fillable     = ['filename', 
                               'id_station'];

    public function station(){
      return $this->belongsTo('App\Station','id_station');
    }
}
