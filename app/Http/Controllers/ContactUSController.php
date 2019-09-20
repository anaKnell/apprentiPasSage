<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Http\Requests;
    use App\models\ContactUS;

    class ContactUSController extends Controller
    {
       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Http\Response
        */
       public function create()
       {
           return view('pages.contacts');
       }
       /**
        * Show the application dashboard.
        *
        * @return \Illuminate\Http\Response
        */
       public function store(Request $request)
       {
           $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
            ]);

           ContactUS::create($request->all());
           return back()->with('success', 'Votre message a bien été envoyé! Vous serez contacté dans les meilleurs délais');
       }
    }