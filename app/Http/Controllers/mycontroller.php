<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Models\contact;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class mycontroller extends Controller
{
    public function Home()
    {
        return view('home');
    }

    public function About()
    {
        return view('about');
    }
    
    public function Contact()
    {
        return view('contact');
    }
    
    public function index()
    {
        $details = contact::all();
        return view('allcontacts.index', compact('details'));
    }
    
    public function Signin()
    {
        return view('signin');
    }
    
    public function Signup()
    {
        return view('signup');
    }
    
    public function saveData(Request $request)
    {

        $Details = [
            'name' => $request->Name,
            'number' => $request->Number,
            'email' => $request->Email,
            'message' => $request->Message
        ];
        Mail::to('areebghanidps@gmail.com')->send(new ContactMail($Details));
        // return back()->with('sent', 'Your message has been sent successfully . . . ! !');

        $details = new contact();
        $details->name = request('name');
        $details->number = request('number');
        $details->email = request('email');
        $details->message = request('message');
        $details->save();

        return redirect('/contact/all');
    }
    
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('home')
                ->withSuccess('Signed in');
        }

        return back()->with('error','Login details are not valid.');
    }
    
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("signin")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('home');
        }

        return redirect("signin")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        // Session::flush();
        Auth::logout();

        return Redirect('home');
    }
}
