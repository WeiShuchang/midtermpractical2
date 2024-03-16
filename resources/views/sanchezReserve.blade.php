@extends('layouts.sanchezLayouts')

@section('page_title', 'purchase')

@section('content')
        

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <!--Bread Table-->
                    <div class="col-md-12">
 
                        <table class="table table-bordered table-hover table-dark small-table ">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Floor</th>
                                    <th scope="col">Single</th>
                                    <th scope="col">Double</th>
                                    <th scope="col">Suite</th>
                                </tr>
                            </thead>
                            <tbody>
                           
                                <tr>
                                    <th scope="col">Floor 1 - 5</th>
                                    <th scope="col">450</th>
                                    <th scope="col">600</th>
                                    <th scope="col">1300</th>
                                </tr>
                                <tr>
                                    <th scope="col">Floor 6 - 11</th>
                                    <th scope="col">550</th>
                                    <th scope="col">720</th>
                                    <th scope="col">2150</th>
                                </tr>
                                <tr>
                                    <th scope="col">Floor 12</th>
                                    <th scope="col">Not Available</th>
                                    <th scope="col">1200</th>
                                    <th scope="col">3500</th>
                                </tr>
                           
                            </tbody>
                        </table>

                    </div>
                    <!--Bread Table End-->



                    <div class="row col-md-12">
                        <!--form for ordering-->
                        <form method="post" action="{{route('sanchezReserve.calculate')}}">
                        @csrf
                        
                        <div class="form-group row">
                            <h3 class="pb-3 pt-3">Customer Details</h3>

                                <label for="firstname" class="col-md-2 col-form-label"><strong>First Name:</strong></label>
                                <div class="col-md-4">
                                    <input type="text" name="firstname" id="firstname" class="form-control">
                                </div>

                                <label for="lastname" class="col-md-2 col-form-label"><strong>Last Name:</strong></label>
                                <div class="col-md-4">
                                    <input type="text" name="lastname" id="lastname" class="form-control">
                                </div>

                                <label for="roomType" class="col-md-2 col-form-label pt-3"><strong>Room Type:</strong></label>
                                    <div class="col-md-4 pt-3">
                                        <select name="roomType" id="" class="form-control">
                                            <option value="single">Single</option>
                                            <option value="double">Double</option>
                                            <option value="suite">Suite</option>
                                        </select>
                                    </div>

                                <label for="roomFloor" class="col-md-2 col-form-label pt-3" ><strong>Room Floor:</strong></label>
                                    <div class="col-md-4 pt-3">
                                        <select name="roomFloor" id="" class="form-control">
                                            <option value="1">1</option> 
                                            <option value="2">2</option> 
                                            <option value="3">3</option> 
                                            <option value="4">4</option> 
                                            <option value="5">5</option> 
                                            <option value="6">6</option> 
                                            <option value="7">7</option> 
                                            <option value="8">8</option> 
                                            <option value="9">9</option> 
                                            <option value="10">10</option> 
                                            <option value="11">11</option> 
                                            <option value="12">12</option> 
                                        </select>
                                    </div>

                                <label for="numOfNights" class="col-md-2 col-form-label pt-3"><strong>Number of Nights:</strong></label>
                                    <div class="col-md-4 pt-3">
                                    <input type="number" id="bread-quantity" name="numOfNights" value ="1" min="-1" max="10" class="form-control">
                                    </div>


                                <div class="col-md-9 pb-3">
                                </div>

                                <div class="col-md-3 pt-3">
                                    <input type="submit" value="Submit" class="col-md-6 ">
                                </div>
                         
                            </div>
                        </form>
                        <!--form for ordering end-->
                    </div>
                    
                </div>
            </div>


            <div class=" col-md-4">

                    <div class="card col-md-12 table-responsive-sm">
               
                    
                        <!-- <div class="card-header">
                            <h5></h5>
                        </div>
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <tr>
                                
                                        <th scope="row">data</th>
                                        <td>data</td>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">data</th>
                                        <td>data</td>
                                        <td>data</td>
                                    </tr>
                                    <tr>
                                    <th scope="row" colspan="2">Total:</th>
                                    <td>data</td>
                                </tr>
                                </tbody>
                            </table>
                                 -->
                        @if($_POST)
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name: </th>
                                        <td scope="col">{{$customer_info['first_name']}} {{$customer_info['last_name']}}</td>   
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">Room Type</th>
                                        <td scope="col">{{$customer_info['room_type']}} </td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Room Floor</th>
                                        <td scope="col">{{$customer_info['room_floor']}}</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Number of Nights</th>
                                        <td scope="col">{{$customer_info['number_of_nights']}}</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Rate Per Night</th>
                                        <td scope="col">{{$customer_info2['rate_per_night']}}</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Total Amount of Stay</th>
                                        <td scope="col"><strong>{{$customer_info2['total_amount_per_stay']}}</strong></td> 
                                    </tr>
                                </tbody>
                        </div>

                        @else
                
                        <div class="card-body">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Customer Name</th>
                                        <td scope="col">data</td>   
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="col">Room Type</th>
                                        <td scope="col">data</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Room Floor</th>
                                        <td scope="col">data</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Number of Nights</th>
                                        <td scope="col">data</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Rate Per Night</th>
                                        <td scope="col">data</td> 
                                    </tr>
                                    <tr>
                                        <th scope="col">Total Amount of Stay</th>
                                        <td scope="col"><strong>data</strong></td> 
                                    </tr>
                                </tbody>
                        </div>

                        @endif

                    </table>
                    </div>
                </div>
            </div>
        </div>

@endsection