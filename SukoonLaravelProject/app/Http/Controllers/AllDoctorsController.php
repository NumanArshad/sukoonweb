<?php

namespace sukoonweb\Http\Controllers;

use Illuminate\Http\Request;
use sukoonweb\BasicInfo;
use sukoonweb\Hospitals_Clinic;
use sukoonweb\BookAppointment;
use sukoonweb\ConsultBooking;
use sukoonweb\Days;
use sukoonweb\DoctorAvailablityDays;
use DB;
use Illuminate\Support\Str;
use Mail;
class AllDoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $getalldoctor=BasicInfo::all();
        $getDoctorFee=DB::table('basic_infos')
          ->join('hospitals__clinics','basic_infos.id','=','hospitals__clinics.doctorId')
->select('basic_infos.id as docId','hospitals__clinics.appointmentfee')//->groupBy('doctorname')
          ->get();

          $alldoctordata=array('getalldoctor'=> $getalldoctor,
          'fee_doc_list'=>$getDoctorFee,
          'specialisttype'=>'');
        return view('pages.alldoctorcontainer')->with($alldoctordata);
    }
public function specific_specialist($specialist){
    $getalldoctor=BasicInfo::where('specialist','LIKE','%'.$specialist.'%')->get();
    $getDoctorFee=DB::table('basic_infos')
    ->join('hospitals__clinics','basic_infos.id','=','hospitals__clinics.doctorId')
->select('basic_infos.id as docId','hospitals__clinics.appointmentfee')//->groupBy('doctorname')
    ->get();

    $alldoctordata=array('getalldoctor'=> $getalldoctor,
    'fee_doc_list'=>$getDoctorFee,
    'specialisttype'=>$specialist);
    return view('pages.alldoctorcontainer')->with($alldoctordata);

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.newdoctorbasic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     $this->validate($request,[
    //     'name'=>'required',
    //     'email'=>'required',
    //     'contact_1'=>'required',
    //     'city'=>'required'
    // ]);
    // if($formtype=='basic'){
/////upload image/////
$imageName = time().'.'.request()->img->getClientOriginalExtension();
$imagePath=request()->img->move(public_path('storage'), $imageName);  //create auto not existing folder
////////////////////////
$newdoctorbasic=new BasicInfo();
$newdoctorbasic->name=$request->input('name');
$newdoctorbasic->email=$request->input('email');
$newdoctorbasic->contact_1=$request->input('contact_1');
$newdoctorbasic->contact_2=$request->input('contact_2');
$newdoctorbasic->city=$request->input('city');
$newdoctorbasic->qualification=$request->input('Qualification');
$newdoctorbasic->specialist=$request->input('specialist');
$newdoctorbasic->experience=$request->input('experience');
$newdoctorbasic->profile_img=$imageName;
$newdoctorbasic->bookappointment=$request->input('bookappointment')=='checkedValue'?true:false;
$newdoctorbasic->consultant=$request->input('consultant')=='checkedValue'?true:false;
$newdoctorbasic->save();
 $doctorid=BasicInfo::where('name',$request->input('name'))->where('email',$request->input('email'))->get();
if($request->input('bookappointment')=='checkedValue'){
    return redirect()->action('AllDoctorsController@addhospital', ['id' => $doctorid[0]->id]);
 }
 else{
     return redirect('/doctors');
 }
   // return redirect()->route( 'doctors/addhospitals' )->with( [ 'id' => $id ] );
//}
//    else{
 //return redirect('/doctors');
//    }
    }

    
    
    public function addhospital($id)  //id is doctorId reference 
    {
        //return "<h1>value in get is ".$id."</h1>";//view('pages.newdoctorhospitals');
        //
        //$doctorid=24;
        return view('pages.newdoctorhospitals')->with('doctorid',$id);
    }
    public function storehospital(Request $request,$doctorid)
    {
        $selecteddays_List=explode(',',$request->input('selecteddays'));
        $hospitals_clinic_Info=new Hospitals_Clinic();
        $hospitals_clinic_Info->name=$request->input('name');
        $hospitals_clinic_Info->location=$request->input('location');
        $hospitals_clinic_Info->appointmentfee=$request->input('appointmentfee');
        $hospitals_clinic_Info->doctorId=$doctorid;
        $hospitals_clinic_Info->save();

        $hospitalId=Hospitals_Clinic::where('name',$request->input('name'))
        ->where('location',$request->input('location'))->get();
      //  return "<h1>hos p value in get is ".$hospitalId."</h1>";


        foreach($selecteddays_List as $day){

   
            $getselectedDayId=Days::where('day',$day)->select('id')->get();
            $doctoravailability_HC=new DoctorAvailablityDays();
            $doctoravailability_HC->hospitalId=$hospitalId[0]->id;
            $doctoravailability_HC->dayId=$getselectedDayId[0]->id;
            $doctoravailability_HC->starttime=$request->input('starttime');
            $doctoravailability_HC->endtime=$request->input('endtime');
            $doctoravailability_HC->save();
        
}



return redirect('/doctors');

       // return "<h1>value get is ".$outputarray[0]."kdjfj".$request->input('starttime')."</h1>";//view('pages.newdoctorhospitals');
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
    public function bookappointment($id){
      
    $specificdoctor=BasicInfo::find($id);
    $doctor_hospitals=Hospitals_Clinic::where('doctorId',$id)->get();
    $getDoctorFee=DB::table('basic_infos')->where('basic_infos.id',$id)
    ->join('hospitals__clinics','basic_infos.id','=','hospitals__clinics.doctorId')
->select('basic_infos.id as docId','hospitals__clinics.appointmentfee')//->groupBy('doctorname')
    ->get();
    $doctordetail=array('doctor'=>$specificdoctor,
     'hospitalsclinic_detail'=>$doctor_hospitals,
     'fee_doc_list'=>$getDoctorFee
    );
    return view('pages.bookappointment')->with($doctordetail);
    
    
    }
     /**
     * Show the form for editing the specified resource.
         * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeappointment(Request $request,$id){  //id is reference of doctor hospital detail
        // $this->validate($request,[
        //     'appointmentdate'=>'required',
        //     'time'=>'required',
        //     'patientname'=>'required',
        //     'contact'=>'required',
            
        // ]);
        $newAppointment=new BookAppointment();
        $newAppointment->appointmentdate=$request->input('appointmentdate');
        $newAppointment->time=$request->input('time');
        $newAppointment->patientname=$request->input('patientname');
        $newAppointment->contact=$request->input('contact');
        $newAppointment->doctoravailabilityId=$id;
        $newAppointment->save();

        return redirect('/doctors');

    }
    function consultview($id){
        $specificdoctor=BasicInfo::find($id);
        $getDoctorFee=DB::table('basic_infos')->where('basic_infos.id',$id)
        ->join('hospitals__clinics','basic_infos.id','=','hospitals__clinics.doctorId')
    ->select('basic_infos.id as docId','hospitals__clinics.appointmentfee')//->groupBy('doctorname')
        ->get();
        $doctordetail=array('doctor'=>$specificdoctor,
        'fee_doc_list'=>$getDoctorFee
       );
        return view('pages.consultdoctor')->with($doctordetail);

    }
    function storeconsultorder(Request $request,$id){
        
//////////////////////////store data//////////////////////////////
        $newConsult=new ConsultBooking();
        $newConsult->name=$request->input('name');
        $newConsult->email=$request->input('email');
        $newConsult->consultdate=$request->input('consultdate');
        $newConsult->consulttime=$request->input('consulttime');
         $newConsult->doctoravailabilityId=$id;
        $newConsult->save();

        $doctor=BasicInfo::find($id);
/////////////////////////////////////////////////////////////////

////////////////////////////send email//////////////////////////
        $to_name = $request->input('name');
        $to_email = $request->input('email');
        $data = array('name'=>$request->input('name'), "body" => "Your consult appointment 
        with doctor ".$doctor->name." has been confirmed on ".$request->input('consultdate')." at "
    .$request->input('consulttime').". Thank you ! for using our service.");
            
        Mail::send('pages.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Sakoon Web Test Email');
            $message->from('risingPearls16@gmail.com','Sakoon Web');
        });
/////////////////////////////////////////////////////////////////

        return redirect('/doctors');

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
        // $newAppointment=new BookAppointment();
        // $newAppointment->appointmentdate=$request->input('appointmentdate');
        // $newAppointment->time=$request->input('time');
        // $newAppointment->patientname=$request->input('patientname');
        // $newAppointment->contact=$request->input('contact');
        // $newAppointment->doctoravailabilityId=$id;
        // $newAppointment->save();
        // return redirect('/doctors');
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
