<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('Ideltech') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">forum</i>
            <p>{{ __('Posts') }}</p>
        </a>
      </li>

      <li class="nav-item {{ ($activePage == 'admin' || $activePage == 'admin-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#adminExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Admin') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="adminExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'admin' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('admin.index') }}">
                {{-- <span class="sidebar-mini"> AD </span> --}}
                <span class="sidebar-normal">{{ __('Admin') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'admin-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('admin.management') }}">
                {{-- <span class="sidebar-mini"> UM </span> --}}
                <span class="sidebar-normal"> {{ __('Admin Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'documentos' || $activePage == 'documentos-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#documentosExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Documentos') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="documentosExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'documentos' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('documentos.index') }}">
                {{-- <span class="sidebar-mini"> AD </span> --}}
                <span class="sidebar-normal">{{ __('Documentos') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'documentos-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('documentos.management') }}">
                {{-- <span class="sidebar-mini"> UM </span> --}}
                <span class="sidebar-normal"> {{ __('Documentos Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
          <i><img style="width:25px" src="{{ asset('material') }}/img/laravel.svg"></i>
          <p>{{ __('Laravel Examples') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item{{ $activePage == 'table' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('table') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('Table List') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>

      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="">
          <i class="material-icons text-white">unarchive</i>
          Link Teste
        </a>
      </li>

    </ul>
  </div>
</div>
