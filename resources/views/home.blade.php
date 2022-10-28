@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card" style="height: 500px">
    <div class="row ">
        <div class="col-md-4 offset-md-2">
            <img  src="{{ asset('/profile_image/'.Auth::user()->photo) }}" 
        style="width:150px;height:150px;">
        </div>

        <div class="col-md-6 mt-12">
           
            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    {{Auth::user()->name }}
                   
                </div>
            </div>

            <div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    {{Auth::user()->email }}
                </div>
            </div>


           




            <div class="row mb-3">
                <label for="matric_no" class="col-md-4 col-form-label text-md-end">{{ __('Date') }}</label>

                <div class="col-md-6">
                   23-01-2022
                </div>
            </div>


            <div class="row mb-3">
                <label for="matric_no" class="col-md-4 col-form-label text-md-end">{{ __('Time') }}</label>

                <div class="col-md-6">
                   9.00am
                </div>
            </div>


       
            



            <div class="row mb-3">
                <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                <div class="col-md-6">
                    {{Auth::user()->department }}
                </div>
            </div>


        </div>
       <div class="container mr-auto" style="margin-left:800px">
        <a class="btn btn-primary" href={{route("reschedule")}}>Re-schedule</a>
       </div>

    </div>

    
   </div>
</div>
@endsection
