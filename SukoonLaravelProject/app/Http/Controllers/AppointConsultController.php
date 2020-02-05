<?php

namespace sukoonweb\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
class AppointConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function getview_sendemail()
    {
        return view("pages.check");
    }
    public function sendemail(Request $request)
    {
        $to_name = 'numan arshad';
        $to_email = 'afshanarsha2783@gmail.com';
        $data = array('name'=>"Sam Jose", "body" => "Test mail");
            
        Mail::send('pages.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Artisans Web Testing Mail');
            $message->from('numanuet311@gmail.com','Artisans Web');
        });

        return "<h1>sent</h1>";

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $newAppointment=new BookAppointment();
        $newAppointment->appointmentdate=$request->input('appointmentdate');
        $newAppointment->time=$request->input('time');
        $newAppointment->patientname=$request->input('patientname');
        $newAppointment->contact=$request->input('contact');
        $newAppointment->doctoravailabilityId=$id;
        $newAppointment->save();
        return redirect()->action('AllDoctorsController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
