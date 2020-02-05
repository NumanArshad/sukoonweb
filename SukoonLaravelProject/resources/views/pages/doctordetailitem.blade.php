<div class="row bg-white"
    style="padding-top:20px;padding-bottom:20px;margin-bottom:20px;margin-left:0.04%;margin-right:0.04%;margin-top:-10px">
    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
        <img src="{{ asset('storage/'.$doctor->profile_img)}}" 
        {{-- "{{ asset('template/img/logo.png')}}" --}}
         style="width:100%;padding-bottom:50px" alt=""
            srcset="">
    </div>
    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-8 justify-content-start">
        <div class="col-xs-12 " style="text-color:blue;font-weight:bold;font-size:20px">
            <a href="#"> 
                @if (empty($doctor->name))
                doctorname 
                @else
                 {{$doctor->name}}
                @endif
               
                </a>
        </div>
        <div class="col-xs-12" style="font-weight:bold">
            {{$doctor->specialist}}
        </div>
        <div class="col-xs-12" style="color:gray">
            {{-- MBBS from KingAdward --}}
            {{$doctor->qualification}}
        </div>
        <div class="col-xs-12" style="color:black">
            {{$doctor->experience}}

         
            {{-- 10 year experince at Service hospital --}}
        </div>
        <div class="col-xs-12">
            <span style="color:green;font-size:17px;font-weight:bold">Available</span>
            @foreach ($fee_doc_list as $item)
                @if($item->docId==$doctor->id)
                <span style="color:black;font-size:17px">{{$item->appointmentfee}} RS.</span>
            @break
                @endif
            @endforeach
            {{-- <span style="color:black;font-size:17px">500 RS.</span> --}}
        </div>
        @if ($activepage=='')
        <div class="col-xs-12" style="margin-top:10px">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseOne">
                               When this doctor is available
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">    {{--add 'in' for default open--}}
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseTwo">
                                What are patient reviews
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion"
                                href="#collapseThree">
                               In what areas that doctor is specialist
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                            quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica,
                            craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur
                            butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                            nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12" style="margin-top:-10px">
            <button class="btn btn-primary btn-lg" style="margin-top:5px;border-radius:20px;text-transform:lowercase"
                onclick="window.location='{{url("doctors/bookappointment",[$doctor->id])}}'">
                Book
                Appointment</button>
            <button class="btn btn-default btn-lg"
             {{-- onclick="window.location='{{url("templateindex/consultdoctor")}}'" --}}
             onclick="window.location='{{url("doctors/consult",[$doctor->id])}}'"  
                style="border-radius:20px;margin-top:5px;text-transform:lowercase;color:black">Consult Online</button>
        </div>
 
        
    @elseif($activepage=='consultdoctor')
        
    <div class="col-xs-12" style="margin-top:-5px;margin-left:-5px">
        
        <button class="btn btn-primary" style="margin-top:5px;border-radius:20px;text-transform:lowercase"
        onclick="window.location='{{url("doctors/consult",[$doctor->id])}}'"  
        {{-- onclick="window.location='{{url("templateindex/consultdoctor")}}'" --}}
            >Book
            your Time</button>
      
      
    </div>
        @endif
        

    </div>

</div>