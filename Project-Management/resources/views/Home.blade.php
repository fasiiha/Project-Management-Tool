@extends('layouts.layout')
@section('content')
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css') }}">

    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Montserrat&display=swap') }}">


    @if (session('message'))
        <h6 class="alert alert-success">{{ session('message') }}</h6>
    @endif
    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase text-white">Dashboard Overview</h4>
                    <h4 class="text-white">Hello, {{ session('username') }}</h4>

                </div>
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Summary</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $totalProjects }}</h3>
                                        <span>Total Project</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="danger">{{ $activeProjects }}</h3>
                                        <span>Active Projects</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-rocket danger font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="success">{{ $completedProjects }}</h3>
                                        
                                        <span>Completed Projects</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-cup success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $totalTasks }}</h3>
                                        <span>Total Task</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="primary">{{ $urgentTasks }}</h3>
                                        <span>Urgent Tasks</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-support primary font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $pendingTasks }}</h3>
                                        <span>Pending Tasks</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-left">
                                        <h3 class="primary">{{ $overdueTasks }}</h3>
                                        <span>Overdue Tasks</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-book-open primary font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="stats-subtitle">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase">Statistics</h4>
                </div>
            </div>

            <p>Project Overview:</p>
            <div class="container">
                @if (!empty($projects))
                    <div class="row">
                        @foreach ($projects as $projects)
                            <div class="col-lg-4">
                                <div class="card card-margin">
                                    <div class="card-body pt-1">
                                        <div class="widget-49">
                                            <div class="widget-49-title-wrapper">
                                                <div class="widget-49-date-primary">
                                                    <!-- <span class="widget-49-date-day">09</span> -->
                                                    <span class="widget-49-date-month">{{ $projects->id }}</span>
                                                </div>
                                                <div class="widget-49-meeting-info">
                                                    <span class="widget-49-pro-title">
                                                        {{ $projects->project_name }}</span>
                                                    <span class="widget-49" style="font-size: 10px;">
                                                        {{ $projects->due_date }}</span>
                                                    <span class="widget-49" style="font-size: 10px;">
                                                        {{ $projects->status }}</span>
                                                </div>
                                            </div>
                                            <ol class="widget-49-meeting-points">
                                                <p class="widget-49-meeting-item">
                                                    Description: {{ $projects->description }}
                                                </p>
                                            </ol>

                                            <form action="{{ route('projects.details') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="project_id" value="{{ $projects->id }}">
                                                <div>
                                                    <input type="submit" class="btn" value="Details" name='details'
                                                        style="font-size: 80%; margin-bottom: 5%;">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No Projects available.</p>
                @endif

            </div>

            <p>Tasks Overview:</p>
            <div class="container">
                @if (!empty($task))
                    <div class="row">
                        @foreach ($task as $task)
                            <div class="col-lg-4">
                                <div class="card card-margin">
                                    <div class="card-body pt-1">
                                        <div class="widget-49">
                                            <div class="widget-49-title-wrapper">
                                                <div class="widget-49-date-primary">
                                                    <span class="widget-49-date-day">{{ $task->id }}</span>
                                                </div>
                                                <div class="widget-49-meeting-info">
                                                    <span class="widget-49-pro-title">{{ $task->task_name }}</span>
                                                    <span class="widget-49-meeting-time">{{ $task->due_date }} Hrs</span>
                                                    <span class="widget-49-meeting-time">{{ $task->status }}</span>

                                                </div>
                                            </div>
                                            <ol class="widget-49-meeting-points">
                                                <li class="widget-49-meeting-item">
                                                    <span>{{ $task->description }}</span>
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>No tasks available.</p>
                @endif
            </div>

    </div>
    </section>
    </div>

@endsection
