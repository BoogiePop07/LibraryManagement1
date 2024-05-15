<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* Add your custom styles here */
        .navbar {
            background-color: lightblue; /* Light blue background for navbar */
            color: #fff;
            padding: 10px;
        }
        .navbar a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        .navbar .profile {
            float: right;
        }
        .sidebar {
            background-color: lightblue; /* Light blue background for sidebar */
            width: 250px;
            padding: 20px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 10px;
        }
        .sidebar ul li a {
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="container">
            <a href="#">Home</a>
            <!-- Add profile and logout links -->
            <div class="profile">
                <a href="#">Profile</a>
                <a href="#">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <!-- Main content -->
    <div class="main-content">
        <div class="container">
            <h1>Welcome to the Home Page</h1>
            <!-- Your main content here -->
        </div>
    </div>

</body>
</html>
