<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
  <div class="top-area">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-6">
          <p class="bold text-left">Monday - Saturday, 8am to 10pm </p>
        </div>
        <div class="col-sm-6 col-md-6">
          <p class="bold text-right">Call us now +62 008 65 001</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container navigation">

    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="{{ url('templateindex') }}">
        <img src="{{asset('template/img/logo.png')}}" alt="" width="150" height="40" />
      </a>
      {{-- {{ asset('template/img/logo.png') }} --}}
    </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#doctor">Doctors</a></li>
        {{-- <li><a href="#facilities">Facilities</a></li> --}}
        {{-- <li><a href="{{url('templateindex/newdoctor')}}">Join As Doctor</a></li> --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
              class="badge  pull-right"></span>
              Doctors <b class="caret"></b>
            </a>
          <ul class="dropdown-menu">
            <li><a href="{{url('templateindex/alldoctor')}}">Neurologist</a></li>
            <li><a href="{{url('templateindex/alldoctor')}}">Urologists</a></li>
            <li><a href="{{url('templateindex/alldoctor')}}">Dermatologists</a></li>
            <li><a href="{{url('templateindex/alldoctor')}}">Pulmonologists</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
              class="badge  pull-right"></span>
              Consult Online <b class="caret"></b>
            </a>
          <ul class="dropdown-menu">
            <li><a href="{{url('templateindex/consultdoctorindex')}}">Neurologist</a></li>
            <li><a href="{{url('templateindex/consultdoctorindex')}}">Urologists</a></li>
            <li><a href="{{url('templateindex/consultdoctorindex')}}">Dermatologists</a></li>
            <li><a href="{{url('templateindex/consultdoctorindex')}}">Pulmonologists</a></li>
          </ul>
        </li>
        {{-- <li><a href="#pricing">Pricing</a></li> --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            {{-- <span class="badge custom-badge red pull-right">Extra</span> --}}
              More <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="index.html">Contact Us</a></li>
            <li><a href="{{url('templateindex/newdoctor')}}">Join As Doctor</a></li>
            {{-- <li><a href="index-cta.html">Home CTA</a></li>
            <li><a href="https://bootstrapmade.com">Download</a></li> --}}
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>