<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cats = DB::table('users')->distinct()->select('schedule_date', "email")->get();



        return view('home');
    }


    public function CompleteProfile()
    {

        return view('complete_profile');
    }

    public function SubmitProfile(Request $request)
    {

        $request->validate([
            "department" => 'required',
            "image" => "required",

        ]);


        $user = Auth::user();
        $user->compelete_profile = 1;
        $user->department = $request['department'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('/profile_image/'), $imageName);

            // Storage::disk('public')->put($imageName, 'adaadfd');
            $user->photo = $imageName;


            $user->save();
            return redirect('/home')->with('message', 'Profile Updated');
        }

        $user->save();
        return redirect('/home')->with('message', 'Profile Updated');
    }



    public function all()
    {
        $users = User::all();
        return view("all", compact('users'));
    }


    public function student()
    {

        if (Auth::user()->complete_profile !== 1) {
            return view('complete_profile');
        }

        return view('student');
    }


    public function generatePDF()

    {

        $data = [

            'title' => 'Welcome to ItSolutionStuff.com',

            'date' => date('m/d/Y')

        ];

        $data = [

            'name' => Auth::user()->name,

            'date' => date('m/d/Y')

        ];
        // pdfview.blade.php
        $pdf = PDF::loadView('pdfview', $data);
        return $pdf->stream('doc.pdf');


        // $pdf = PDF::loadView('student');



        // return $pdf->download('itsolutionstuff.pdf');
    }





    public function reschedule()
    {
        return view('admin.reschedule');
    }


    public function makereshdedule(Request $request)
    {



        $user = Auth::user()->id;

        $page = User::find($user);

        // Make sure you've got the Page model
        if ($page) {
            $page->schedule_date = $request->date;
            $page->save();
            return redirect('/student');
        }
    }
}
