<div class="preloader">
   <div class="lds-ripple">
       <div class="lds-pos"></div>
       <div class="lds-pos"></div>
   </div>
</div>

@include('layouts.head')

<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

   @include('layouts.header')
   @include('layouts.sidebar')

   <div class="layout-page">
       @yield('content')
   </div>
</div>



@include('layouts.script')
