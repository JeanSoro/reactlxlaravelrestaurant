<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Member;
use App\Reservation;
use DB;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard(){

       $estimated_guests_last_thirty_days = DB::select(DB::raw('

            SELECT 
                sum(guests_total) as total_guests_in_month
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

        '));

        $estimated_guests_last_thirty_days = $estimated_guests_last_thirty_days[0]->total_guests_in_month;


        return view('admin/dashboard', [
            "estimated_guests_last_thirty_days" => $estimated_guests_last_thirty_days
        ]);
    }
}
