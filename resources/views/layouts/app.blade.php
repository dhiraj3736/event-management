<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        /* Global Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f9fafb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .container {
            max-width: 900px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            background-color: #007bff;
            padding: 15px 0;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 15px;
        }

        nav a:hover {
            background-color: #0056b3;
            border-radius: 4px;
        }

        /* Logout Button */
        #logout-form {
            display: inline;
        }

        #logout-button {
            color: #fff;
            background: none;
            border: none;
            font-weight: bold;
            padding: 10px 15px;
            cursor: pointer;
        }

        #logout-button:hover {
            background-color: #0056b3;
            border-radius: 4px;
        }

        /* Header */
        h1 {
            font-size: 1.8em;
            color: #007bff;
            text-align: center;
            margin-bottom: 10px;
        }

        /* Content Styling */
        #content {
            padding: 20px;
        }

        /* Alerts */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
            font-size: 1em;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Navigation Bar -->
        <nav>
            <a href="{{ route('events.index') }}">Events</a>
            <a href="{{ route('categories.index') }}">Categories</a>
            <a href="{{ route('attendees.index') }}">Attendees</a>

            <!-- Logout Button -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" id="logout-button">Logout</button>
            </form>
        </nav>

        <!-- Main Content -->
        <h1>Event Management System</h1>
        <div id="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
