<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table        = 'setting';
    protected $primaryKey   = 'id_setting';
    protected $fillable     = ['setting_name', 
                               'setting_desc',
                               'email', 
                               'phone', 
                               'home_message', 
                               'logo_icon', 
                               'logo_txt', 
                               'logo_txt_black', 
                               'login_banner', 
                               'footer', 
                               'background_login'];

}
