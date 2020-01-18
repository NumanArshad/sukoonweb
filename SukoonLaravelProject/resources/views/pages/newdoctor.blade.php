@extends('layouts.app')
@section('childcontent')


<div class="container" style="margin-top:150px">

    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>

        <li class="active">Join as Doctor</li>
    </ol>

    <div class="row bg-white"
        style="padding:10px;margin-top:-10px;margin-bottom:10px;margin-left:0.04%;margin-right:0.04%;">

        {{-- <div class="col-md-4 col-sm-6 col-xs-6">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Contact#1</label>
                <input type="tel" name="" id="" class="form-control" placeholder=""
                 aria-describedby="helpId"  pattern="[0-9]{10}" required>
                <small id="helpId" class="text-muted">Help text</small>
                <span class=" "></span>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Contact#2(optional)</label>
                <input type="tel" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                <small id="helpId" class="text-muted">Help text</small>
                <span class=" "></span>
            </div>
        </div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Designation</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Specialist</label>
                <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="">Upload your photo</label>
                <input type="file" accept='image/*' name="" id="" class="form-control" placeholder=""
                    aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
            </div>
        </div>
        <div class="col-xs-12">
            <button type="button" name="" id="" class="btn btn-primary" style="text-transform:lowercase">Save</button>
        </div> --}}


        {{-- <div class="container">
  
            <div class="stepwizard col-md-offset-3">
                <div class="stepwizard-row setup-panel">
                  <div class="stepwizard-step">
                    <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                    <p>Step 1</p>
                  </div>
                  <div class="stepwizard-step">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p>Step 2</p>
                  </div>
                  <div class="stepwizard-step">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p>Step 3</p>
                  </div>
                </div>
              </div>
              
              <form role="form" action="" method="post">
                <div class="row setup-content" id="step-1">
                  <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                      <h3> Step 1</h3>
                      <div class="form-group">
                        <label class="control-label">First Name</label>
                        <input  maxlength="100" type="text" class="form-control" placeholder="Enter First Name"  />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Last Name</label>
                        <input maxlength="100" type="text" class="form-control" placeholder="Enter Last Name" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Email</label>
                        <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Email" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Address</label>
                        <textarea required="required" class="form-control" placeholder="Enter your address" ></textarea>
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                  </div>
                </div>
                <div class="row setup-content" id="step-2">
                  <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                      <h3> Step 2</h3>
                      <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                    </div>
                  </div>
                </div>
                <div class="row setup-content" id="step-3">
                  <div class="col-xs-6 col-md-offset-3">
                    <div class="col-md-12">
                      <h3> Step 3</h3>
                      <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
                    </div>
                  </div>
                </div>
              </form>
              
            </div>
    </div> --}}

        {{-- </div> --}}

        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Basic Info</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p><small>Qualification and Experience</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p><small>Register Clinic/Hospital</small></p>
                </div>
                <div class="stepwizard-step col-xs-3">
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p><small>Cargo</small></p>
                </div>
            </div>
        </div>

        <form role="form">
            <div class=" setup-content" id="step-1">
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Contact#1</label>
                        <input type="tel" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                            pattern="[0-9]{10}" required>
                        <small id="helpId" class="text-muted">Help text</small>
                        <span class=" "></span>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Contact#2(optional)</label>
                        <input type="tel" name="" id="" class="form-control" placeholder="" aria-describedby="helpId"
                            pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                        <small id="helpId" class="text-muted">Help text</small>
                        <span class=" "></span>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">City</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="">Designation</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="">Specialist</label>
                    <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="">Upload your photo</label>
                    <input type="file" accept='image/*' name="" id="" class="form-control" placeholder=""
                        aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Help text</small>
                </div>
            </div> --}}
                <div class="col-xs-12">
                    {{-- <button type="button" name="" id="" class="btn btn-primary" style="text-transform:lowercase">Save</button> --}}
                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>

                {{-- <div class="panel-heading">
                 <h3 class="panel-title">Shipper</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div> --}}
            </div>

            <div class="setup-content" id="step-2">
                {{--   <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                       <label for="">Designation</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small> 
                    </div>
                </div>--}}
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Specialist</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Education</label>
                        <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Upload your photo</label>
                        <input type="file" accept='image/*' name="" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Help text</small>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <label for="">Provide Services</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                            Consultant
                          </label>
                          <label class="form-check-label" style="margin-left:20px">
                            <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue" checked>
                            Book Appointment
                          </label>
                        </div>
                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                    </div>
                </div>
                <div class="col-xs-12">
                    {{-- <button type="button" name="" id="" class="btn btn-primary" style="text-transform:lowercase">Save</button> --}}
                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
            </div>

            <div class="setup-content" id="step-3">
                <div class="col-xs-12">
                    {{-- <button type="button" name="" id="" class="btn btn-primary" style="text-transform:lowercase">Save</button> --}}
                    <button class="btn btn-primary  pull-right newformbtn" type="button">New</button>
                </div>
                <div class="cloned-div">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group clinic">
                            <label for="">Clinic/Hospital</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Appointment Fee</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" name="" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                            <small id="helpId" class="text-muted">Help text</small>
                        </div>
                        <button class="btn btn-primary newschedulebtn" style="margin-bottom:10px">More</button>
                    </div>
                    <div class="cloned-schedule">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label for="">Available Days</label>
                                <br>
                                <select name="depts" id="example-getting-started"  multiple="multiple">
                                    <option value="05">Monday</option>
                                    <option value="13">Tuesday</option>
                                    <option value="03">Wednesday</option>
                                    <option value="40">Thursday</option>
                                    <option value="14">Friday</option>
                                    <option value="28">Saturday</option>
                                    <option value="09">Sunday</option>


                                </select>
                            </div>

                        </div>

                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="">Start Timings</label>
                                <input type="time" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="form-group">
                                <label for="">EndTimings</label>
                                <input type="time" name="" id="" class="form-control" placeholder=""
                                    aria-describedby="helpId">
                                <small id="helpId" class="text-muted">Help text</small>
                            </div>
                        </div>
                    </div>
                    <div class="new-schedule">
                    </div>

                </div>

                <div class="newclinic">

                </div>
                <div class="col-xs-12">
                    {{-- <button type="button" name="" id="" class="btn btn-primary" style="text-transform:lowercase">Save</button> --}}
                    <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
                </div>
            </div>



            <div class="panel panel-primary setup-content" id="step-4">
                <div class="panel-heading">
                    <h3 class="panel-title">Cargo</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="control-label">Company Name</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Name" />
                    </div>
                    <div class="form-group">
                        <label class="control-label">Company Address</label>
                        <input maxlength="200" type="text" required="required" class="form-control"
                            placeholder="Enter Company Address" />
                    </div>
                    <button class="btn btn-success pull-right" type="submit">Finish!</button>
                </div>
            </div>
        </form>
    </div>
    {{-- <div class="container"> --}}

    {{-- </div> --}}






    @endsection