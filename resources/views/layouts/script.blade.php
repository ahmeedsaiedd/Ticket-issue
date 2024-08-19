<script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="dist/js/app-style-switcher.js"></script>
    <script src="dist/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebar = document.querySelector('.sidebar');
            const toggleButton = document.querySelector('.sidebar-toggle');
    
            toggleButton.addEventListener('click', function () {
                if (sidebar.classList.contains('expanded')) {
                    sidebar.classList.remove('expanded');
                    sidebar.classList.add('collapsed');
                    toggleButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
                } else {
                    sidebar.classList.remove('collapsed');
                    sidebar.classList.add('expanded');
                    toggleButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    
        document.querySelectorAll('select[name="status"]').forEach(function(select) {
            select.addEventListener('change', function() {
                const ticketId = this.getAttribute('data-ticket-id');
                const newStatus = this.value;
    
                fetch(`/tickets/${ticketId}/update-status`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-Token': csrfToken,
                    },
                    body: JSON.stringify({ status: newStatus }),
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById(`status-message-${ticketId}`).innerText = 'Status updated successfully';
                    } else {
                        document.getElementById(`status-message-${ticketId}`).innerText = 'Failed to update status';
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById(`status-message-${ticketId}`).innerText = 'An error occurred';
                });
            });
        });
    });
    </script>
    