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
              @if($user->is_teacher)
                @include('components.menu_items_teacher')
              @else
                @include('components.menu_items_student')
              @endif
            @endif
          </ul>

          <ul class="nav navbar-nav navbar-right">
            @if(isset($user))
              <li><span style="line-height: 18px;position: relative;display: block;padding: 10px 15px;">Welkom <strong>{{$user->name}}</strong></span></li>
              <li><a class="btn btn-link" href="{{action('AuthController@getLogout')}}">Log uit</a></li>
            @endif
          </ul>

        </div>
      </div>
    </div>