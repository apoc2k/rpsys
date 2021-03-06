<html>
<head>
    <title>About</title>
    <link rel="stylesheet" href="/css/foundation.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <script src="/js/vendor/jquery.js"></script>
    <script src="/js/vendor/foundation.js"></script>
    <script src="/js/vendor/what-input.js"></script>
</head>
<body>
<div class="fade"></div>
<div id="nav_bar">
    <div class="row">
        <div id="upper_menu">
            <ul>
                <a href="#" class="not-last"> <li>Account</li> </a>
                <a href="#" class="not-last"> <li>Settings</li> </a>
                <a href="#"> <li>Logout</li> </a>
            </ul>
        </div>
        <div class="small-12 large-12 columns" id="main_menu">
            <ul>
                <a href="/"> <li>~/home</li> </a>
                <a href="about"> <li>~/about</li> </a>
                <a href="user"> <li>~/usr</li> </a>
                <a href="room"> <li>~/box</li> </a>
                <a href="#"> <li>~/null</li> </a>
            </ul>
        </div>
    </div>
</div>
<div class="row" id="title">
    @yield('title')
</div>
<div class="row">
    <div class="small-12 large-9 columns" id="content">

        @yield('content')

        @yield('footer')

    </div>

    <div class="small-12 large-3 columns" id="sidebar">
        <div class="sidebar-block">
            <ul class="sidebar-list">
                <li>Profile</li>
                <li>Rooms</li>
                <li>Groups</li>
                <li>Settings</li>
                <li>Security</li>
                <li>
                    <ul>
                        <li>Logs</li>
                        <li>Visibility</li>
                        <li>Privacy</li>
                    </ul>
                </li>
                <li>Messages</li>
            </ul>
        </div>
    </div
</div>



</body>
</html>
