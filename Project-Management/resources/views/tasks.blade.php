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

                                    <input name="description" type="text" class="form-control" id="exampleInputText07"
                                        placeholder="Description">
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

    <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="collapseEdit">
        <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="card card-list task-card">
                    <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                        <div class="header-title">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="customCheck006">
                                <label class="custom-control-label h5" for="customCheck006">Mark as done</label>
                            </div>
                        </div>
                        <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                    </div>
                    <div class="card-body">
                        <form action="/create" method="POST">
                            <div class="form-group mb-3 position-relative">
                                <input type="text" class="form-control bg-white" placeholder="Enter Task Name">
                                <a href="#" class="task-edit task-simple-edit text-body"><i
                                        class="ri-edit-box-line"></i></a>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-0">
                                                <label for="exampleInputText2" class="h5">Members</label>
                                                <select name="member" class="form-control" data-style="py-0">
                                                    <option>Members</option>
                                                    <option>Kianna Septimus</option>
                                                    <option>Jaxson Herwitz</option>
                                                    <option>Ryan Schleifer</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-0">
                                                <label for="exampleInputText4" class="h5">Due
                                                    Dates</label>
                                                <input name="date" type="date" class="form-control"
                                                    id="exampleInputText4" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5 class="mb-2">Description</h5>
                                            <p class="mb-0">Amet minim mollit non deserunt
                                                ullamco est sit aliqua dolor do amet sint. Velit
                                                officia consequat duis enim velit mollit.
                                                Exercitation veniam consequat sunt nostrud amet.
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h5 class="mb-2">Checklist</h5>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck4">
                                                        <label class="custom-control-label mb-1" for="customCheck4">Design
                                                            mobile
                                                            version</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck07">
                                                        <label class="custom-control-label mb-1" for="customCheck07">Use
                                                            images of
                                                            unsplash.com</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck6">
                                                        <label class="custom-control-label" for="customCheck6">Vector
                                                            images
                                                            of
                                                            small size.</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck7">
                                                        <label class="custom-control-label mb-1" for="customCheck7">Design
                                                            mobile
                                                            version of landing page</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck8">
                                                        <label class="custom-control-label mb-1" for="customCheck8">Use
                                                            images of
                                                            unsplash.com</label>
                                                    </div>
                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheck9">
                                                        <label class="custom-control-label" for="customCheck9">Vector
                                                            images
                                                            of
                                                            small size..</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <label for="exampleInputText01" class="h5">Attachments</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile002">
                                    <label class="custom-file-label" for="inputGroupFile002">Upload media</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
