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
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .login-register {
            display: flex;
            gap: 10px;
        }
        form {
            display: none;
        }
        .active-form {
            display: block;
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
            <button onclick="showForm('registrations')">Register</button>
        </div>
    </header>

    <script>
        // JavaScript to toggle between login and register forms
        function showForm(formId) {
            var forms = document.querySelectorAll('form');
            forms.forEach(function(form) {
                form.classList.remove('active-form');
            });
            document.getElementById(formId).classList.add('active-form');
        }
    </script>
</body>
</html>
