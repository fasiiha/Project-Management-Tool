<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.5.0/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/Sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar.css')}}">

    <!-- <link rel="stylesheet" href="{{asset('css/tui-calendar.css')}}"> -->

</head>

<body>
    <div id="sidebar">
        <header>
          <a href="#">Project</a>
        </header>
        <div class="nav">
          <a href="./Home.html">
            <i class="zmdi zmdi-view-dashboard"></i> Home
          </a>
          <a href="./Activity.html"> <i class="zmdi zmdi-link"></i> Activity </a>
          <a href="./Discuss.html">
            <i class="zmdi zmdi-widgets"></i> Discussion
          </a>
          <a href="./calendar.html"> <i class="zmdi zmdi-calendar"></i> Calender </a>
          <a href="./projects.html"> <i class="zmdi zmdi-info-outline"></i> Projects </a>
          <a href="./TeamMembers.html">
            <i class="zmdi zmdi-info-outline"></i> Team Members
          </a>
          <a href="./tasks.html"> <i class="zmdi zmdi-settings"></i> Tasks </a>
          <a href="./settings.html">
            <i class="zmdi zmdi-comment-more"></i> Settings
          </a>
          <a href="./UserProfile.html">
            <i class="zmdi zmdi-comment-more"></i> Profile
          </a>
        </div>
    </div>
    <div class="content">
        @yield('content')
    </div>
    <!-- JQuery -->
  
    <script src="{{ asset('js/backend-bundle.min.js')}}"></script>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
    
    
    <!-- <script type="text/javascript" src="scripts.js"></script>
    <script src="{{ asset('js/tui-code-snippet.js')}}"></script>
    <script src="{{ asset('js/tui-calendar.min.js')}}"></script>
    <script src="{{ asset('js/calendar.js')}}"></script> -->


</body>
</html>