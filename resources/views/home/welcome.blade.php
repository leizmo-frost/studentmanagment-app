<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Student Home Page</title>
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #020e16; /* Blue background */
            color: #fff; /* White text */
        }
        header {
            background-color: #020e16;
            color: #fff;
            padding: 10px 20px;
            text-align: center; /* Center align header */
        }
        .login-register {
            display: flex;
            gap: 10px;
            justify-content: center; /* Center align buttons */
        }
        form {
            display: none;
        }
        .active-form {
            display: block;
        }
        /* Style for buttons */
        button {
            background-color: #2980b9; /* Blue button */
            color: #fff; /* White text */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }
        button:hover {
            background-color: #1f618d; /* Darker blue on hover */
        }
        /* Style for date and time */
        #datetime {
            font-size: 32px; /* Enlarge the font size */
            text-align: center;
            margin-top: 20px;
        }
        #date {
            font-size: 20px; /* Adjust font size for date */
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <!-- Logo or Image -->
        <div>
            <h1>Welcome to Student Home Page</h1>
        </div>
        <!-- Login and Register Tabs -->
        <div class="login-register">
            <button onclick="showForm('logins')">Login</button>
            <button onclick="showForm('registrations')">Sign up</button>
        </div>
    </header>

    <!-- Login form -->
    <form id="logins" class="active-form">
        <!-- Your login form here -->
    </form>

    <!-- Registration form -->
    <form id="registrations">
        <!-- Your registration form here -->
    </form>

    <!-- Display date and time -->
    <div id="datetime"></div>
    <div id="date"></div>

    <script>
        // JavaScript to toggle between login and register forms
        function showForm(formId) {
            var forms = document.querySelectorAll('form');
            forms.forEach(function(form) {
                form.classList.remove('active-form');
            });
            document.getElementById(formId).classList.add('active-form');
        }

        // JavaScript to display current date and time
        function updateDateTime() {
            var dt = new Date();
            document.getElementById("datetime").innerHTML = dt.toLocaleTimeString();
            document.getElementById("date").innerHTML = dt.toDateString();
        }

        // Update date and time every second
        setInterval(updateDateTime, 1000);
        updateDateTime(); // Call once to initially set the time
    </script>
</body>
</html>
