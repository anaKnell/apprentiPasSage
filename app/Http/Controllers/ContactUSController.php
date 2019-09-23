<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;
    use App\Http\Requests;
    use App\models\ContactUS;
    use App\models\mailer;

    class ContactUSController extends Controller
    {
       /**
        * Show the form contact
        *
        * @return \Illuminate\Http\Response
        */
       public function create()
       {
           return view('pages.contacts');
       }
       /**
        * Validate and Store in DB
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
           /*$mailer = app()['mailer'];

           $mailer->*/
           Mail::to('contact@apprentispassages.com')->send(new mailer($request->except('_token')));


/*           ('pages.contact.email',
                array(
           'name' => $request->get('name'),
           'email' => $request->get('email'),
           'message' => $request->get('message')
       ), function($message)
   {
         $message->to('contact@apprentispassages.com', '')->subject('Welcome!');*/
          return back()->with('success', 'Votre message a bien été envoyé! Vous serez contacté dans les meilleurs délais');

    }
  }