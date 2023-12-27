@extends('layouts.layout')
@section('content')
    <title>Project</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <div class="container-fluid h-100">
        <section id="minimal-statistics">
            <div class="row">
                <div class="col-12 mt-3 mb-1">
                    <h4 class="text-uppercase" style="color: white;">Project Overview</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-3 mb-1" style="display: flex;">
                    <h4 style="color: white;  margin-right: 5%;">Project Name: {{ $projectDetails->project_name }}</h4>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="media-body text-right">
                                        <h3>Progress</h3>
                                    </div>
                                    <div>
                                        <canvas id="myChart" style="width: 100%; height: 50%;"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-speech warning font-large-2"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>Description</h3>
                                        <span>{{ $projectDetails->description }}</span>
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
                                        <i class="icon-graph success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>Status</h3>
                                        <span>{{ $projectDetails->status }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div>
                                        <canvas id="myChart2" style="width: 100%; height: 50%;"></canvas>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>423</h3>
                                        <span>Total Visits</span>
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
                                    <div class="media-body text-left">
                                        <h3 class="danger">Members</h3>
                                        {{-- <span>{{ $projectDetails->members }}</span> --}}
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
                                        <h3 class="success">156</h3>
                                        <span>New Clients</span>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="icon-user success font-large-2 float-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
    <script src="js/backend-bundle.min.js"></script>

    <script>
        let labels = ['completed', 'incomplete'];
        let itemData = [60, 40];

        const data = {
            labels: labels,
            datasets: [{
                data: itemData,
                backgroundColor: ['rgb(191, 109, 103)', 'rgb(103, 146, 191)']
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Progress'
                    }
                }
            },
        };

        let tasks = ['tasks', 'issues', 'milestones']

        const config2 = {
            type: 'horizontalBar',
            data: {
                labels: tasks,
                datasets: [{
                    data: [16, 4, 2],
                    backgroundColor: ['rgb(191, 109, 103)', 'rgb(103, 146, 191)', 'rgb(111, 113, 222)']
                }]
            },

        };

        const chart = new Chart(
            document.getElementById("myChart"),
            config
        );
        const chart2 = new Chart(
            document.getElementById("myChart2"),
            config2
        );
    </script>
@endsection
