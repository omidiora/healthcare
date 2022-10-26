<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        // $users = DB::table('users')->distinct()->select('schedule_date', "email")->get();
        return view('admin.User', compact('users'));
    }

    public function showDetails()
    {

        $_16 = DB::table('users')->where("schedule_date", '=', 16)->get();
        $_17 = DB::table('users')->where("schedule_date", '=', 17)->get();
        $_18 = DB::table('users')->where("schedule_date", '=', 18)->get();
        $_19 = DB::table('users')->where("schedule_date", '=', 19)->get();
        $_20 = DB::table('users')->where("schedule_date", '=', 20)->get();
        $_23 = DB::table('users')->where("schedule_date", '=', 23)->get();
        $_24 = DB::table('users')->where("schedule_date", '=', 24)->get();
        $_25 = DB::table('users')->where("schedule_date", '=', 25)->get();
        $_26 = DB::table('users')->where("schedule_date", '=', 26)->get();
        $_27 = DB::table('users')->where("schedule_date", '=', 27)->get();



        return view('admin.DateOfStudent', compact('_17', '_18', '_19', '_20', '_23', '_24', '_25', '_26', '_27'));
    }



    public function printStudentDate($schedule_date)

    {
        // User::where('schedule_date ', '=',17)->get();

        // DB::table('students')->where('name', $userName)->first()


        $_17 = DB::table('users')->where('schedule_date', $schedule_date)->get();

        // pdfview.blade.php
        $pdf = PDF::loadView('admin.Student', compact('_17'));
        $output = $pdf->output();
        return new Response($output, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' =>  'inline; filename="invoice.pdf"',
        ]);
    }





    // $pdf = PDF::loadView('student');



    // return $pdf->download('itsolutionstuff.pdf');
}
