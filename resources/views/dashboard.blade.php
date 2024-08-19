
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
     data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
 </div>
 
 @include('layouts.head')
 
 
 
    @include('layouts.header')
    
    @include('layouts.sidebar')
 
    <div class="layout-page">
        @yield('content')
         <!-- Button Section -->
    <div class="relative">
        <!-- Awesome Button -->
        <a href="{{ route('ticket.create') }}"
            class="absolute top-4 right-4 bg-gradient-to-r from-green-400 to-green-600 text-white font-bold py-2 px-4 rounded-md shadow-md transform hover:scale-105 transition-transform duration-300 ease-in-out flex items-center space-x-2 hover:shadow-lg hover:rotate-1">
            <i class="fas fa-plus-circle text-lg"></i>
            <span class="text-sm">Add New Ticket</span>
        </a>
    </div>

        <!-- Toastify JS -->
   <!-- In your Blade template file -->
@if (session('success'))
<script>
    toastr.success('{{ session('success') }}');
</script>
@endif

@if (session('error'))
<script>
    toastr.error('{{ session('error') }}');
</script>
@endif

    </div>
 </div>
 
 
 
 @include('layouts.script')
 