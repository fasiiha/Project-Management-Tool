<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/Sidebar.css" />

</head>

<body>
    <div id="sidebar">
      <header>
        <a href="#">Project</a>
      </header>
      <div class="nav">
        <a href="{{ route('Home') }}"> <i class="zmdi zmdi-view-dashboard"></i> Home </a>
        <a href="{{ route('Activity') }}"> <i class="zmdi zmdi-link"></i> Activity </a>
        <a href="{{ route('Discussion') }}"><i class="zmdi zmdi-widgets"></i> Discussion </a>
        <a href="{{ route('Calender') }}"> <i class="zmdi zmdi-calendar"></i> Calender </a>
        <a href="{{ route('Project') }}"> <i class="zmdi zmdi-info-outline"></i> Projects </a>
        <a href="{{ route('Member') }}"> <i class="zmdi zmdi-info-outline"></i> Team Members </a>
        <a href="{{ route('Task') }}"> <i class="zmdi zmdi-settings"></i> Tasks </a>
        <a href="{{ route('Setting') }}"> <i class="zmdi zmdi-comment-more"></i> Settings </a>
        <a href="{{ route('Profile') }}"> <i class="zmdi zmdi-comment-more"></i> Profile </a>
      </div>
    </div>
</body>

</html>
