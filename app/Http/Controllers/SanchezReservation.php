<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanchezReservation extends Controller
{

    public function Index(){
        return view('sanchezReserve');
    }


    public function Calculate()
    {

        $totalAmountPerStay = 0;
        $ratePerNight = 0;

        $customer_info = [
            'room_type' => request()->get('roomType'),
            'room_floor' => request()->get('roomFloor'),
            'number_of_nights' => request()->get('numOfNights'),
            'first_name' => request()->get('firstname'),
            'last_name' => request()->get('lastname'),
        ];

        if ($customer_info['room_floor'] >= 1 && $customer_info['room_floor'] <= 5 ) {

                if($customer_info['room_type']  == 'single'){
                    $ratePerNight = 450;
                    $totalAmountPerStay = 450 * $customer_info["number_of_nights"];
                }else if($customer_info['room_type']  == 'double'){
                    $ratePerNight = 600;
                    $totalAmountPerStay = 600 * $customer_info["number_of_nights"];
                }else if($customer_info['room_type']  == 'suite'){
                    $ratePerNight = 1300;
                    $totalAmountPerStay = 1300 * $customer_info["number_of_nights"];
            } 
        }
        
        else if ($customer_info['room_floor'] >= 6 && $customer_info['room_floor'] <= 11 ) {

                if($customer_info['room_type' ] == 'single') {
                    $ratePerNight = 550;
                    $totalAmountPerStay = 550 * $customer_info["number_of_nights"];
                }else if($customer_info['room_type']  == 'double'){
                    $ratePerNight = 720;
                    $totalAmountPerStay = 720 * $customer_info["number_of_nights"];
                }else if($customer_info['room_type']  == 'suite'){
                    $ratePerNight = 2150;
                    $totalAmountPerStay = 2150 * $customer_info["number_of_nights"];
            } 
        }
        else if ($customer_info['room_floor'] == 12 ) {

                if($customer_info['room_type']  == 'single'){
                    $totalAmountPerStay = "Not Available";
                }else if($customer_info['room_type']  == 'double'){
                    $ratePerNight = 1200;
                    $totalAmountPerStay = 1200 * $customer_info["number_of_nights"];
                }else if($customer_info['room_type']  == 'suite'){
                    $ratePerNight = 3500;
                    $totalAmountPerStay = 3500 * $customer_info["number_of_nights"];
            } 
        }

        if($customer_info['number_of_nights'] >= 4){
            $discount = $totalAmountPerStay * .10;
            $totalAmountPerStay = $totalAmountPerStay - $discount;
        }
        
        $customer_info2 = [
            'total_amount_per_stay' => $totalAmountPerStay,
            'rate_per_night' => $ratePerNight,
        ];

        
    return view('sanchezReserve', compact('customer_info','customer_info2'));  
    }

}
