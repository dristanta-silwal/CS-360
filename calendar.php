<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

<body>
    <!-- Header Section -->
    <?php include 'include/header.php'; ?>

    <!-- Main Section -->
    <div class="container mt-5">
        <h1>Personal Calendar</h1>
        <button id="showDetailsBtn" class="btn btn-primary">Show More Details</button>
        <div id="calendar" class="mt-4"></div>
    </div>

    <!-- Password Modal -->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="passwordModalLabel">Enter Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="passwordForm">
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <div id="errorMessage" class="text-danger mt-2" style="display: none;">Invalid Password</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Section -->
    <?php include 'include/footer.php'; ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const calendarEl = document.getElementById('calendar');
            let showDetails = false;

            const fetchEvents = async () => {
                try {
                    const response = await fetch(`fetch_calendar_data.php?details=${showDetails}`);
                    return await response.json();
                } catch (error) {
                    console.error('Error fetching events:', error);
                    return [];
                }
            };

            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: async function (info, successCallback, failureCallback) {
                    const events = await fetchEvents();
                    successCallback(events);
                }
            });

            calendar.render();

            document.getElementById('showDetailsBtn').addEventListener('click', function () {
                $('#passwordModal').modal('show');
            });

            document.getElementById('passwordForm').addEventListener('submit', async function (e) {
                e.preventDefault();
                const password = document.getElementById('password').value;
                const response = await fetch('validate_password.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ password })
                });

                const result = await response.json();
                if (result.status === 'success') {
                    $('#passwordModal').modal('hide');
                    showDetails = true;
                    calendar.refetchEvents();
                } else {
                    document.getElementById('errorMessage').style.display = 'block';
                }
            });

            window.addEventListener('beforeunload', () => {
                showDetails = false;
            });
        });
    </script>

</body>

</html>