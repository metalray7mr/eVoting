@if(Auth::check())
<div class="sidebar_user_info center arial_bold">
    <h4> {{ Auth::user()->name }} </h4>
</div>
<div class="sidebar_menu center">
    <img src="/uploads/avatars/{{Auth::user()->avatar}}" class="profile_img_sidebar" onerror="this.src = '{{URL::asset('images/default_profile.png')}}'">
</div>

<div class="row">
  <div>
    <h3> {{ Auth::user()->name }}</h3>
  </div>

  <div>
    <h3> {{ Auth::user()->email }}</h3>
  </div>

  <div>
    <h3> {{ Auth::user()->info->dob }}</h3>
  </div>

</div>


@endif