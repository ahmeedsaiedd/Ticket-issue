<style>
    /* Sidebar container */
    .sidebar {
        transition: width 0.3s ease; /* Smooth transition for width change */
    }

    /* Sidebar collapsed */
    .sidebar.collapsed {
        width: 80px; /* Adjust to desired collapsed width */
    }

    /* Sidebar expanded */
    .sidebar.expanded {
        width: 250px; /* Adjust to desired expanded width */
    }

    /* Toggle button */
    .sidebar-toggle {
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: -40px; /* Position the toggle button outside the sidebar */
        width: 30px;
        height: 30px;
        background: #333; /* Color for the toggle button */
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        z-index: 1000;
        transition: right 0.3s ease; /* Smooth transition for button movement */
    }

    .sidebar.collapsed + .sidebar-toggle {
        right: -40px; /* Position for collapsed state */
    }

    .sidebar.expanded + .sidebar-toggle {
        right: 0; /* Position for expanded state */
    }

    /* Adjustments for items when sidebar is collapsed */
    .sidebar.collapsed .sidebar-link .hide-menu {
        display: none;
    }
</style>