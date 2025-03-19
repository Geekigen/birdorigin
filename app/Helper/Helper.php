
<?php

use App\Models\Setting;
if(!function_exists('logo')){
    function logo(){
        $setting = Setting::select('image')->where('id',1)->first();
        return $setting->image;
    }
}



