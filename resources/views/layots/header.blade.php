<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="Frontend/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="open-btn" onclick="toggleSidebar()">☰</div>

<div class="sidebar open" id="sidebar">
    <div class="sidebar-heading">Transactions</div>
    <a href="{{url('/')}}">Home</a>
    <a href="{{url('/dashboard')}}">Dashbord</a>
    <a href="{{url('/register')}}">Register</a>
    <a href="{{url('/profile')}}">Profile settings</a>
</div>

<div class="main open" id="main">
    <!-- Content of your main section goes here -->
    <!-- You can keep your existing content here -->
</div>

<script>
    function toggleSidebar() {
        var sidebar = $('#sidebar');
        var main = $('#main');
        if (sidebar.hasClass('open')) {
            sidebar.removeClass('open');
            main.removeClass('open');
        } else {
            sidebar.addClass('open');
            main.addClass('open');
        }
    }

    $(document).ready(function() {
        $('#sidebar').css({
            'position': 'fixed',
            'top': '0',
            'left': sidebar.hasClass('open') ? '0' : '-250px', // Set the initial state based on the presence of the 'open' class
            'height': '100%',
            'width': '250px',
            'background-color': '#333',
            'overflow-x': 'hidden',
            'padding-top': '20px',
            'transition': 'left 0.3s ease'
        });

        $('#main').css({
            'transition': 'margin-left 0.3s ease',
            'margin-left': sidebar.hasClass('open') ? '250px' : '0' // Set the initial state based on the presence of the 'open' class
        });
    });
</script>

</body>
</html>
