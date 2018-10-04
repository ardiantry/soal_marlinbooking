<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadHistory extends Model
{
    protected $table        = 'download_history';
    protected $primaryKey   = 'id_download';
    protected $fillable     = ['download_at', 
                               'id_data'];

    public function data(){
      return $this->belongsTo('App\Data','id_data');
    }
}
