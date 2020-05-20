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

       $estimated_monthly_sales_amount = DB::select(DB::raw('

            SELECT 
                ( sum(guests_total) * 800 )as estimated_monthly_sales
            FROM reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

        '));

       
        $total_reservations_last_thirty_days = DB::select(DB::raw('

            SELECT 
                count(*) as monthly_reservations
            FROM reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

        '));

        $total_customers_last_thirty_days = DB::select(DB::raw('

            SELECT 
                sum(guests_total) as monthly_number_guests
            FROM reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

        '));

        $total_number_of_employees_last_thirty_days = DB::select(DB::raw('

            SELECT 
                count(*) as employees_currently_hired
            FROM users
            inner join role_user on role_user.user_id = user_id
            inner join roles on roles.id = role_user.role_id
            WHERE role_id = 2

        '));

        
        $latest_reservations = Reservation::where('guests_total', '>', 0)->limit(5)->orderBy('created_at', 'desc')->get();
           

        $estimated_monthly_sales_amount =  $estimated_monthly_sales_amount[0]->estimated_monthly_sales;
        $total_reservations_last_thirty_days = $total_reservations_last_thirty_days[0]->monthly_reservations;
        $total_customers_last_thirty_days = $total_customers_last_thirty_days[0]->monthly_number_guests;
        $total_number_of_employees_last_thirty_days = $total_number_of_employees_last_thirty_days[0]->employees_currently_hired;

        return view('admin/dashboard', [
            "estimated_monthly_sales_amount" => $estimated_monthly_sales_amount,
            "total_customers_last_thirty_days" => $total_customers_last_thirty_days,
            "total_reservations_last_thirty_days" => $total_reservations_last_thirty_days,
            "total_number_of_employees_last_thirty_days" => $total_number_of_employees_last_thirty_days,
            "latest_reservations" => $latest_reservations
        ]);
    }





    public function dailyRevenueLast30(){

        // return $estimated_daily_income_data = DB::select(DB::raw('

        //     SELECT 
        //         DATE_FORMAT(created_at, "%Y-%m-%d") as reserved_day,
        //         ( sum(guests_total) * 45 )as estimated_earnings,
        //         count(*) as total_reservations,
        //         sum(guests_total)
        //     FROM reservations
        //     group by reserved_day desc;

        // '));

        return $estimated_daily_income_data = DB::select(DB::raw('

            SELECT 
                DATE_FORMAT(created_at, "%Y-%m-%d") as x,
                ( sum(guests_total) * 45 )as y
            FROM reservations
            group by x desc;

        '));
    }
}
