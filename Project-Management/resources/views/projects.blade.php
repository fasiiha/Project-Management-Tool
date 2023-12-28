@extends('layouts.layout')
@section('content')
    <title>Project</title>
    <link rel="stylesheet" href="{{ asset('css/calendar.css') }}">
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <div>
                                <h4>Hello, {{ session('username') }}</h4>
                                <h5>Your Projects</h5>
                            </div>
                            <div class="d-flex flex-wrap align-items-center">
                                <a href="#" class="btn" data-target="#collapseEdit" data-toggle="modal">New
                                    Project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($projects as $project)
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-sm-8 text-white">
                                <p class="mb-2">Project: {{ $project->id }}</p>
                                <p style="font-size: 12px; padding-left: 2%;">
                                    Project Name: {{ $project->project_name }} <br>
                                    Description: {{ $project->description }} <br>
                                    {{-- Members: {{ $project->members }} <br> --}}
                                    Status: {{ $project->status }} <br>
                                    Start Date: {{ $project->start_date }}<br>
                                    Due Date: {{ $project->due_date }}
                                <div class="d-flex align-items-center">
                                    <form action="{{ route('projects.details') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="project_id" value="{{ $project->id }}">
                                        <div>
                                            <input type="submit" class="btn" value="Details" name='details'
                                            style="font-size: 60%;">
                                        </div>
                                    </form>
                                    <form method="post" action="{{ route('projects.delete', ['id' => $project->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn" value="Delete" name="delete"
                                            style="font-size: 60%;">
                                    </form>
                                    {{-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editProject{{ $project->id }}">
                                        Edit
                                    </button> --}}
                                    <form method="post" action="{{ route('projects.markAsCompleted', ['id' => $project->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="submit" class="btn" value="Completed" name="mark_as_completed" style="font-size: 60%;">
                                    </form>
                                    <form method="post" action="{{ route('projects.markAsRejected', ['id' => $project->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <input type="submit" class="btn" value="Reject" name="mark_as_rejected" style="font-size: 60%;">
                                    </form>
                                </div>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        {{-- <div class="modal fade" id="editProject{{ $project->id }}" tabindex="-1" role="dialog" aria-labelledby="editProjectLabel{{ $project->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProjectLabel{{ $project->id }}">Edit Project</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="{{ route('projects.update', ['id' => $project->id]) }}">
                            @csrf
                            @method('POST')
        
                            <div class="form-group">
                                <label for="project_name">Project Name</label>
                                <input type="text" class="form-control" id="project_name" name="project_name" value="{{ $project->project_name }}">
                            </div>
        
                            <div class="form-group">
                                <label for="due_date">Due Date</label>
                                <input type="date" class="form-control" id="due_date" name="due_date" value="{{ $project->due_date }}">
                            </div>
        
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Active" {{ $project->status == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Completed" {{ $project->status == 'Completed' ? 'selected' : '' }}>Completed</option>
                                    <option value="Delayed" {{ $project->status == 'Delayed' ? 'selected' : '' }}>Delayed</option>
                                    <option value="Rejected" {{ $project->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        

        <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="collapseEdit">
            <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-list task-card">

                        <div class="card-body">
                            <form method="POST" action="/pro">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 ">
                                            <label for="exampleInputText2" class="h5">Project Name</label>
                                            <input name="project_name" type="text" class="form-control bg-white"
                                                placeholder="Enter Project Name">
                                        </div>
                                    </div>


                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText004" class="h5">Due Date</label>
                                            <input name="due_date" type="date" class="form-control"
                                                id="exampleInputText004" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <select name="status" class=" form-control" data-style="py-0">
                                                <option>Active</option>
                                                <option>Completed</option>
                                                <option>Delayed</option>
                                                <option>Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <select name="category" class=" form-control" data-style="py-0">
                                                <option>Software Development</option>
                                                <option>System Administration</option>
                                                <option>Cybersecurity</option>
                                                <option>IT Infrastructure</option>
                                                <option>IT Support</option>
                                                <option>Data Warehousing</option>
                                                <option>Software Testing</option>
                                                <option>IT Consulting</option>
                                                <option>Artificial Intelligence</option>
                                                <option>Blockchain</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <h5 class="mb-2">Description</h5>
                                            <input name="description" type="text"
                                                style="width: 100%; padding-bottom: 15%; ">
                                        </div>
                                    </div>

                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12 form-group mb-0">
                                                    <label for="exampleInputText01" class="h5">Attachments</label>
                                                    <div class="custom-file">
                                                        <input name="attachments" type="file" class="custom-file-input"
                                                            id="inputGroupFile002">
                                                        <label class="custom-file-label" for="inputGroupFile002">Upload
                                                            media</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                            <input type="submit" class="btn btn-primary mr-3" value="Submit">
                                            <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
