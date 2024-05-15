<nav class="sidebar">
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('book.search') }}">Book Search</a></li>
        <li><a href="{{ route('book.return') }}">Return Book</a></li>
        <li><a href="{{ route('payment') }}">Payment</a></li>
        <li><a href="{{ route('history') }}">History</a></li>
        <li><a href="{{ route('logout') }}">Logout</a></li>
    </ul>
</nav>

<style>
    .sidebar {
        background-color: lightblue; /* Add light blue background color */
        width: 200px; /* Adjust width as needed */
    }

    .sidebar ul {
        list-style-type: none;
        padding: 0;
    }

    .sidebar ul li {
        padding: 10px;
    }

    .sidebar ul li a {
        text-decoration: none;
        color: black;
    }

    .sidebar ul li a:hover {
        background-color: #f0f0f0;
    }
</style>