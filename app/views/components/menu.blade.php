<div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="/" class="navbar-brand">Technasium Online</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            @if(isset($user))
              @if($user->isTeacher)
                @include('components.menu_items_teacher');
              @else
                @include('components.menu_items_student');
              @endif
            @endif
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(isset($user))
              <li><a class="btn btn-link hvr-ripple-out" href="{{action('AuthController@getLogout')}}">Log uit</a></li>
            @endif
          </ul>

        </div>
      </div>
    </div>