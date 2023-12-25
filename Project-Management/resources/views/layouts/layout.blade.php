<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="{{ asset('https://use.fontawesome.com/releases/v5.5.0/css/all.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/Sidebar.css') }}">

</head>

<body style="background: #232733;">
    <div id="sidebar">
        <header>
            <a href="#">Project</a>
        </header>
        <div class="nav">
            <a href="home"> <i class="zmdi zmdi-view-dashboard"></i> Home </a>
            {{-- <a href="{{ route('Activity') }}"> <i class="zmdi zmdi-link"></i> Activity </a> --}}
            <a href="search"> <i class="zmdi zmdi-link"></i> Search </a>
            <a href="{{ route('Discussion') }}"><i class="zmdi zmdi-widgets"></i> Discussion </a>
            <a href="{{ route('Calender') }}"> <i class="zmdi zmdi-calendar"></i> Calender </a>
            <a href="projects"> <i class="zmdi zmdi-info-outline"></i> Projects </a>
            <a href="{{ route('Member') }}"> <i class="zmdi zmdi-info-outline"></i> Team Members </a>
            <a href="tasks"> <i class="zmdi zmdi-settings"></i> Tasks </a>
            {{-- <a href="{{ route('Setting') }}"> <i class="zmdi zmdi-comment-more"></i> Settings </a> --}}
            <a href="delete"> <i class="zmdi zmdi-comment-more"></i> Delete Account </a>
            <a href="{{ route('Profile') }}"> <i class="zmdi zmdi-comment-more"></i> Profile </a>
            <a href="logout"> <i class="zmdi zmdi-comment-more"></i> Logout </a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <!-- JQuery -->

    <script src="{{ asset('js/backend-bundle.min.js') }}"></script>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>


    <!-- <script type="text/javascript" src="scripts.js"></script> -->
    <!-- <script src="{{ asset('js/tui-code-snippet.js') }}"></script> -->
    <!-- <script src="{{ asset('js/tui-calendar.min.js') }}"></script> -->
    <script src="{{ asset('js/calendar.js') }}"></script>

</body>

</html>
