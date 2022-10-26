@extends('layouts.app')

@section('content')
<div class="container">
   <div class="card">
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
                    {{\Carbon\Carbon::parse(Auth::user()->schedule_date)->toDateString()}}
                </div>
            </div>


            <div class="row mb-3">
                <label for="matric_no" class="col-md-4 col-form-label text-md-end">{{ __('Time') }}</label>

                <div class="col-md-6">
                    {{\Carbon\Carbon::parse(Auth::user()->schedule_date)->format('g:i a')}}
                </div>
            </div>


       
            



            <div class="row mb-3">
                <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                <div class="col-md-6">
                    {{Auth::user()->department }}
                </div>
            </div>


        </div>
    </div>

   </div>
</div>
@endsection
