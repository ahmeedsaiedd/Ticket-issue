
<style>
    /* Remove space above the sidebar */
.left-sidebar {
    padding-top: 0; /* Remove any top padding */
}

.navbar-brand {
    margin-bottom: 0; /* Remove any bottom margin */
    padding: 15px; /* Adjust as needed for logo spacing */
}

.logo-icon {
    height: 60px; /* Adjust to your preferred height */
    width: auto;  /* Maintains the aspect ratio */
}

</style>
<!-- resources/views/sidebar.blade.php -->

<aside class="left-sidebar" data-sidebarbg="skin6">
    
    <!-- Sidebar logo -->
    <div class="navbar-brand">
        <a href="{{ route('dashboard') }}">
            <img src="{{ asset('EBE_LOGO.png') }}" alt="EBE Logo" class="logo-icon">
        </a>
    </div>

    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
           
            <ul id="sidebarnav">
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="fas fa-home"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Tickets</span></li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link" href="{{ route('ticket.create') }}" aria-expanded="false">
                        <i class="fas fa-ticket-alt"></i><span class="hide-menu">Add Ticket</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{ route('ticket.list') }}" aria-expanded="false">
                        <i class="fas fa-list"></i><span class="hide-menu">All Tickets</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{ route('ticket.active') }}" aria-expanded="false">
                        <i class="fas fa-calendar-alt"></i><span class="hide-menu">Active Tickets</span>
                    </a>
                </li>

                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Users</span></li>

                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{ route('user.create') }}" aria-expanded="false">
                        <i class="fas fa-user-plus"></i><span class="hide-menu">Add New User</span>
                    </a>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link sidebar-link" href="{{ route('user.list') }}" aria-expanded="false">
                        <i class="fas fa-users"></i><span class="hide-menu">All Users</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
