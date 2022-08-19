<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    function login()
    {
        return view('auths.login');
    }


    public function redirect()
    {
        if (session()->get('authenticated') == true) {
            return redirect('lecturer/');
        } else {
            return back()->with('error', 'You need to login to have access');
        }
    }

    public function auth(Request $request)
    {
        $rule = [
            'email' => 'required',
            'password' => 'required'
        ];

        $validate = Validator::make($request->all(), $rule);
        if ($validate->fails()) {

            return back()->withErrors($validate->errors());
        } else {

            $lecturer = Lecturer::where('email', $request->email)->first();

            if ($lecturer) {
                if (Hash::check($request->password, $lecturer->password)) {
                    $request->session()->put('id', $lecturer->id);
                    $request->session()->put('staff_name', $lecturer->name);
                    $request->session()->put('email', $lecturer->email);
                    
                    $request->session()->put('authenticated', true);
                    return redirect('redirect');
                } else {
                    return back()->with('error', 'password Mismatch');
                }
            } else {
                return back()->with('error', 'Lecturer does not exit');
            }
        }
    }


    public function index()
    {
        $lecturer = Lecturer::all();

        return view('lecturer.dashboard');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect('/');
    }

    public function store(Request $request, Lecturer $lecturer)
    {
        $rules=[
            'email'=>'required|email|unique:lecturers,email',
            'name'=>'required|min:2',
              ];
        $custom_messages=[
            'email.email'=>'Email field must contain a valid email address',
            'email.unique'=>'User with Email address already exists',
                 ];
        $validator=Validator::make($request->all(), $rules, $custom_messages);
     if($validator->fails())
        {
            return back()->withErrors($validator->errors('error'));
        }
     else
        {
                DB::beginTransaction();
                try{
                    //$random_password = Str::random(10);
                    $lecturer->name =  $request->name;
                    $lecturer->email =  $request->email;
                    $lecturer->password = Hash::make($request->password);
                    
                    
                    $lecturer->save();
                    //send password
                    // Mail::to($Staff->email)->send(new Staffs_mails($Staff, $random_password));
                    //   $staff_availability=[
                    //     'staff_id'=>$Staff->id,
                    //     'availability'=>0
                    // ];
                    DB::commit();
                    $request->session()->put('id', $lecturer->id);
                    $request->session()->put('staff_name', $lecturer->name);
                    $request->session()->put('email', $lecturer->email);
                    $request->session()->put('authenticated', true);
                    return redirect()->route('redirect')->with('success', 'User created sucessfully');
                      
                  }
                catch(\Exception $e)
                  {
                      DB::rollback();
                      return back()->withErrors('Could not add user '.$e->getMessage())->withInput();
                  }
        }

    }

}
