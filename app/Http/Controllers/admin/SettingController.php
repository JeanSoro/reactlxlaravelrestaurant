<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GeneralSetting;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function general(){

        $id = 1;

        $general_setting = GeneralSetting::find($id);
        return view('admin/settings/general', [
            'general_setting'=> $general_setting
        ]);
    }

    public function saveGeneral(){

        $id = 1;

         request()->validate([
            'site_title' => ['required', 'string', 'max:255'],
            'address_1' => ['required', 'string'],
            // 'address_2' => ['string'],
            'city' => ['required', 'string'],
            'province' => ['required', 'string'],
            'postal_code' => ['required', 'string'],
            'phone_number' => ['required', 'string']
          
        ]);

        $general_setting = GeneralSetting::find($id);
        $general_setting->site_title = request('site_title');
        $general_setting->address_1 = request('address_1');
        // $general_setting->address_2 = request('address_2');
        $general_setting->city = request('city');
        $general_setting->province = request('province');
        $general_setting->postal_code = request('postal_code');
        $general_setting->phone_number = request('phone_number');
        $general_setting->save();

        return redirect('/admin/settings/general');

    }

}
