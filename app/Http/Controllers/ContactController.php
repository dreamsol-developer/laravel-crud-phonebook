<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use View;

class ContactController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function show() {
        $model = DB::table('contacts')->get();
        return view('contacts', ['model' => $model]);
    }

    public function edit($id) {
       
        $user = DB::table('contacts')->where('id', '=', $id)->get()->first();
        return View::make('editcontact')->with('data', $user);
    }

    public function delete($id) {

        DB::table('contacts')->where('id', '=', $id)->delete();
         return redirect('/contacts');

    }

     

    public function newcontact() //shows New Contact Form
    {
        return view('newcontact'); 
    }

//    public function create(Contact $newcontact) {
//        DB::table('contacts')->insert(
//                ['contact_first_name' => $newcontact->firstname,
//                    'contact_last_name' => $newcontact->lastname,
//                    'contact_phone' => $newcontact->phone,
//                    'contact_email' => $newcontact->email,
//                    'contact_city' => $newcontact->city,
//        ]);
//        return redirect('/contacts');
//    }
     public function create()
         {
             
               $contact = new Contact;
               $contact->contact_first_name = Input::get('firstname');
               $contact->contact_last_name = Input::get('lastname');
               $contact->contact_email = Input::get('email');
               $contact->contact_phone = Input::get('phone');
               $contact->contact_city = Input::get('city');
               $contact->save();
            return redirect('/contacts');      
        } 
        
    public function update()
    {
        
//        DB::table('contacts')   
//                ->where('id', '=', $contactnew->id)
//                ->update(['contact_first_name' => $fname], ['contact_last_name' => $lname], ['contact_email', $email], ['contact_phone', $phone], ['contact_city', $city]);
        $contact=DB::table('contacts')->where('id','=',Input::get('id'))
                ->update([
                        'contact_first_name'=>Input::get('firstname'),
                        'contact_last_name' =>Input::get('lastname'),
                        'contact_phone'=>Input::get('phone'),
                        'contact_email'=>Input::get('email'),
                        'contact_city'=> Input::get('city')
                        
                        ])
                
                ;
//        $contact->contact_first_name=Input::get('firstname');
//        $contact->contact_last_name=Input::get('lastname');
//        $contact->contact_phone=Input::get('phone');
//        $contact->contact_email=Input::get('email');
//        $contact->contact_city=Input::get('city');
        
        return redirect('/contacts');
    }

}
