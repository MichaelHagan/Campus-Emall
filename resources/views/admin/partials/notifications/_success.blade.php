<!--Success Section-->
@if (session('success'))
  <div class="container" id="successNotification" >
  <div class="row">
    <div class="col s12 m8 offset-m2 l8 offset-l2 green white-text" style="margin-top: 20px;">
    <ul>
          <li title="Click to hide"><i class="fa fa-check"></i> {{ session('success') }}</li>
    </ul>
      
    </div>
  </div>
  </div>    
@endif
{{-- 
@if (session('vitals'))
  <div class="container animated slideInDown" id="notificationDiv">
  <div class="row">
    <div class="col s12 m8 offset-m2 l8 offset-l2" style="margin-top: 10px;">
      <ul class="collection">
        <li class="collection-item avatar">
            @isset($patient->patient_picture)
            @if(Storage::disk('local')->has('public/'. $patient->patient_picture))
                <img src="{{ asset('storage/'. $patient->patient_picture) }}"  class="circle">
            @else
                <img src="{{asset('user/images/profile.jpg')}}" class="circle">
            @endif
            @else
                <img src="{{asset('user/images/profile.jpg')}}" class="circle">
            @endisset
          <span class="title">{{ $patient->patient_id }}</span>
          <p>{{ session('vitals') }}</p>
          <a href="{{ route('patient.display.page', $patient->id) }}" class="secondary-content"><i class="fa fa-edit"></i></a>
            <p class=" red-text center" style="cursor: pointer;" onclick="hideMe()">Close</p>

        </li>
      </ul>

    </div>
  </div>
  </div>
@endif

@if (session('registration'))
  <div class="container animated slideInDown" id="notificationDiv">
    <div class="row">
      <div class="col s12 m8 offset-m2 l8 offset-l2" style="margin-top: 10px;">
        <ul class="collection">
          <li class="collection-item avatar">
            <span class="title green-text"><i class="fa fa-check-circle-o"></i> Registration Successful!</span>
            <p>{{ session('registration') }}</p>
            <p class=" red-text center" style="cursor: pointer;" onclick="hideMe()">Close</p>

          </li>
        </ul>

      </div>
    </div>
  </div>
@endif --}}