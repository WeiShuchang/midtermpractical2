@extends('layouts.master')

@section('page_title', 'homepage')

@section('content')
<form action="" method= "post" class="container mt-5">
    @csrf
    <div class="form-group row">

    <label for="firstname" class="col-md-3 col-form-label">Please Enter First Name</label>
        <div class="col-md-3">
            <input type="text" name="firstname" id="firstname" class="form-control">
        </div>

        <label for="lastname" class="col-md-3 col-form-label">Please Enter Last Name</label>
        <div class="col-md-3">
            <input type="text" name="lastname" id="lastname" class="form-control">
        </div>

    <label for="hourly-rate" class="col-md-3 col-form-label">Please Enter Hourly Rate: </label>
        <div class="col-md-3">
            <input type="text" name="hourly-rate" id="hourly-rate" class="form-control">
        </div>

        <label for="hours-worked" class="col-md-3 col-form-label">Please Enter Hours Worked:</label>
        <div class="col-md-3">
            <input type="text" name="hours-worked" id="hours-worked" class="form-control">
        </div>

       

        <div class="col-md-9 pb-3">
        </div>

        <div class="col-md-3">
            <input type="submit" value="Submit" class="col-md-6 ">
        </div>
    </div>
</form>

<div class=" col-md-12">
    
    @if($_POST)
    <div class="container">
        <h3 class="">Calculated Work-Rate of:  {{$values["lastname"]}}, {{$values["firstname"]}}</h3>
        <table class=" table-bordered  py-5">
            <tr >
                <td class="p-3">Gross Pay: </td>
                <td class="p-3">{{$calculated_data['gross-pay']}}</td>
            </tr>
            <tr>
                <td class="p-3">Net Pay:</td>
                <td class="p-3">{{$calculated_data['net-pay']}}</td>
            </tr>
           
        </table>
    </div>
    @else
    <div class="container">
        <h3 class="">Calculated Work-Rate of:  FirstName, Lastname</h3>
        <table class=" table-bordered py-5">
            <tr >
                <td class="p-3">Gross Pay: </td>
                <td class="p-3">Some Data</td>
            </tr>
            <tr>
                <td class="p-3">Net Pay:</td>
                <td class="p-3">Some Data</td>
            </tr>
           
        </table>
    </div>
    @endif

@endsection
