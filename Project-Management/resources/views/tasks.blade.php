@extends('layouts.layout')
@section('content')

    <title>Tasks</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>Your Task</h5>
                            <div class="d-flex flex-wrap align-items-center">

                                <a href="#" class="btn" data-target="#new-create-modal" data-toggle="modal">New
                                    Task</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (!empty($tasks))
                <div class="row">
                    @foreach ($tasks as $task)
                        <div class="col-lg-12">
                            <div class="card card-widget task-card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" id="customCheck01">
                                                <label class="custom-control-label" for="customCheck01"></label>
                                            </div>
                                            <div>
                                                <h5 class="mb-2">{{ $task->task_name }}</h5>
                                                Project Name:
                                                @php
                                                    $project = \App\Models\Project::find($task->project_id);
                                                    echo $project ? $project->project_name : 'N/A';
                                                @endphp
                                                <p>Status: {{ $task->status }} <br>Description:
                                                    {{ $task->description }}<br>Due Date: {{ $task->due_date }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="media align-items-center mt-md-0 mt-3"> --}}

                                        {{-- </div> --}}
                                        <form method="post" action="{{ route('tasks.delete', ['id' => $task->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" data-target="#collapseEdit" data-toggle="modal" class="btn"
                                                style="font-size: 80%; margin-bottom: 5%;">Design</a>
                                            <input type="submit" class="btn" value="Delete" name="delete"
                                                style="font-size: 80%; margin-bottom: 5%;">
                                        </form>
                                        <form method="post" action="{{ route('tasks.completed', ['id' => $task->id]) }}">
                                            @csrf
                                            @method('PUT')

                                            <input type="submit" class="btn" value="Completed" name="mark_as_completed"
                                                style="font-size: 80%; margin-bottom: 5%;">
                                        </form>
                                        <form method="post" action="{{ route('tasks.urgent', ['id' => $task->id]) }}">
                                            @csrf
                                            @method('PUT')

                                            <input type="submit" class="btn" value="Urgent" name="mark_as_urgent"
                                                style="font-size: 80%; margin-bottom: 5%;">
                                        </form>
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


    <div class="modal fade" role="dialog" aria-modal="true" id="new-create-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #232733 ;">
                <div class="modal-header d-block text-center" style="color: white;">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Task</h3>
                </div>
                <div class="modal-body">
                    <form action="/create" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <input name="task_name" type="text" class="form-control" id="exampleInputText01"
                                        placeholder="Task Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <input name="project_id" type="number" class="form-control" id="exampleInputText01"
                                        placeholder="Project ID">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">

                                    <input name="member_name" type="string" class="form-control" id="exampleInputText01"
                                        placeholder="Assigned to">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">

                                    <select name="status" class=" form-control" data-style="py-0">
                                        <option>pending</option>
                                        <option>completed</option>
                                        <option>urgent</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">

                                    <input name="due_date" type="date" class="form-control" id="exampleInputText004"
                                        value="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">

                                    <input name="description" type="text" class="form-control"
                                        id="exampleInputText07" placeholder="Description">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                    <input type="submit"Submit>
                                    <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
