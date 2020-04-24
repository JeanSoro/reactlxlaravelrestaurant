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
                ( sum(guests_total) * 45 )as estimated_monthly_sales
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

        '));

       
        $total_reservations_last_thirty_days = DB::select(DB::raw('

            SELECT 
                count(*) as monthly_reservations
            FROM restaurant.reservations
            WHERE created_at BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE()

        '));

        $total_customers_last_thirty_days = DB::select(DB::raw('

            SELECT 
                sum(guests_total) as monthly_number_guests
            FROM restaurant.reservations
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


        $estimated_monthly_sales_amount =  $estimated_monthly_sales_amount[0]->estimated_monthly_sales;
        $total_reservations_last_thirty_days = $total_reservations_last_thirty_days[0]->monthly_reservations;
        $total_customers_last_thirty_days = $total_customers_last_thirty_days[0]->monthly_number_guests;
        $total_number_of_employees_last_thirty_days = $total_number_of_employees_last_thirty_days[0]->employees_currently_hired;

        return view('admin/dashboard', [
            "estimated_monthly_sales_amount" => $estimated_monthly_sales_amount,
            "total_customers_last_thirty_days" => $total_customers_last_thirty_days,
            "total_reservations_last_thirty_days" => $total_reservations_last_thirty_days,
            "total_number_of_employees_last_thirty_days" => $total_number_of_employees_last_thirty_days
        ]);
    }
}
