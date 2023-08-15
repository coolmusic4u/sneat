@php
$configData = Helper::appClasses();
@endphp

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <!-- ! Hide app brand if navbar-full -->
  @if(!isset($navbarFull))

  @endif

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">

    <li class="menu-header small text-uppercase">
    <span class="menu-header-text"  style="font-size:1.1rem">Login</span>
    </li>
    <li class="menu-item ">
      <div href="http://localhost:8000/app/email" class="menu-link" id="dropdownMenuLink" aria-expanded="false">
          <i class="menu-icon tf-icons bx bx-buildings"></i>
          <div class="text-uppercase">Sample Sdn Bhd</div>
      </div>
    </li>
    <li class="menu-item">
      <div class="menu-link" id="dropdownMenuLink" aria-expanded="false">
        <i class="menu-icon tf-icons bx bx-calendar"></i>
        <select id="yearSelect">
          <option value="2021">2021-12-31</option>
          <option value="2020">2020-12-31</option>
          <option value="2019">2019-12-31</option>
        </select>
      </div>
    </li>

    <li class="menu-item ">
      <a href="/preparation/CompanyInformation" class="menu-link" id="dropdownMenuLink" aria-expanded="false">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div>Company Infomation</div>
      </a>
    </li>
    @foreach ($menuData[0]->menu as $menu)

    {{-- adding active and open class if child is active --}}

    {{-- menu headers --}}
    @if (isset($menu->menuHeader))
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" style="font-size:1.1rem">{{ $menu->menuHeader }}</span>
    </li>

    @else

    {{-- active menu method --}}
    @php
    $activeClass = null;
    $currentRouteName = Route::currentRouteName();

    if ($currentRouteName === $menu->slug) {
    $activeClass = 'active';
    }
    elseif (isset($menu->submenu)) {
    if (gettype($menu->slug) === 'array') {
    foreach($menu->slug as $slug){
    if (str_contains($currentRouteName,$slug) and strpos($currentRouteName,$slug) === 0) {
    $activeClass = 'active open';
    }
    }
    }
    else{
    if (str_contains($currentRouteName,$menu->slug) and strpos($currentRouteName,$menu->slug) === 0) {
    $activeClass = 'active open';
    }
    }

    }
    @endphp

    {{-- main menu --}}
    <li class="menu-item {{$activeClass}}">
      <a href="{{ isset($menu->url) ? url($menu->url) : 'javascript:void(0);' }}" class="{{ isset($menu->submenu) ? 'menu-link menu-toggle dropdown-toggle' : 'menu-link' }}" id="dropdownMenuLink" @if (isset($menu->submenu)) data-bs-toggle="dropdown" @endif aria-expanded="false" @if (isset($menu->target) and !empty($menu->target)) target="_blank" @endif>
        @isset($menu->icon)
        <i class="{{ $menu->icon }}"></i>
        @endisset
        <div>{{ isset($menu->name) ? __($menu->name) : '' }}</div>
      </a>
      
      @if (isset($menu->submenu))
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
          @foreach($menu->submenu as $submenu)
            <li><a class="dropdown-item" href="{{ url($submenu->url) }}">{{ __($submenu->name) }}</a></li>
          @endforeach
        </ul>
      @endif
    </li>


    @endif
    @endforeach
  </ul>

</aside>



<!-- <li class="menu-item">
   <a href="javascript:void(0);" class="menu-link menu-toggle">
      <i class="menu-icon tf-icons bx bx-book-content"></i>
      <div>Forms</div>
   </a>
   <ul class="menu-sub">
      <li class="menu-item">
         <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-detail"></i>
            <div>Form Elements</div>
         </a>
         <ul class="menu-sub">
            <li class="menu-item ">
               <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/basic-inputs" class="menu-link">
                  <div>Basic Inputs</div>
               </a>
            </li>
            <li class="menu-item ">
               <a href="https://demos.themeselection.com/sneat-bootstrap-html-laravel-admin-template/demo-1/forms/extras" class="menu-link">
                  <div>Extras</div>
               </a>
            </li>
         </ul>
      </li>
   </ul>
</li> -->
