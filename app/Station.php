<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table        = 'station';
    protected $primaryKey   = 'id_station';
    protected $fillable     = ['name', 
                               'judul',
                               'location', 
                               'date', 
                               'detail', 
                               'longitude', 
                               'latitude', 
                               'status'];

    public function station_pic(){
        return $this->BelongsTo('App\StationPic', 'id_stationpic');
    }
    public function data(){
      return $this->belongsTo('App\Data','id_data');
    }
}
