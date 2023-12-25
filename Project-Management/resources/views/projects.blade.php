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
                                <p class="mb-2"> Project: {{ $project->id }} <br>
                                    Project Name: {{ $project->project_name }} <br>
                                    Description: {{ $project->description }} <br>
                                    Members: {{ $project->members }} <br>
                                    Status: {{ $project->status }} <br>
                                    Attachmensts: {{ $project->attachments }} <br>
                                    Start Date: {{ $project->start_date }}<br>
                                    Due Date: {{ $project->due_date }}</p>


                                <div class="d-flex align-items-center">
                                    <div class="ml-3">
                                        <form action="projectdata" method="POST">
                                            @csrf
                                            <div>
                                                <input type="submit" class="btn" value="{{ $project->project_name }}"
                                                    name='data' style="font-size: 125%; margin-bottom: 5%;">
                                            </div>
                                        </form>
                                        <h5>{{ $project->name }}</h5>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                {{-- <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div class="ml-3">
                                            <h5 class="mb-1">Vuetify Dashboard</h5>
                                            <p class="mb-0">Customize your WordPress with smart WordPress plugins.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <a class="btn btn-white text-warning link-shadow">Low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div class="ml-3">
                                            <h5 class="mb-1">Medical Clinic Theme</h5>
                                            <p class="mb-0">Hospital and private clinic doctor's theme.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <a class="btn btn-white text-warning link-shadow">Low</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div class="ml-3">
                                            <h5 class="mb-1">Social Media Dashboard</h5>
                                            <p class="mb-0">Leverage data with Social Media Dashboard.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                    <a class="btn btn-white text-success link-shadow">High</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        @endforeach




        {{-- <div class="modal fade" role="dialog" aria-modal="true" id="new-create-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Task Name</label>
                                <input type="text" class="form-control" id="exampleInputText01" placeholder="Task Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText2" class="h5">Categories *</label>
                                <select name="type" class=" form-control" data-style="py-0">
                                    <option>Category</option>
                                    <option>Android</option>
                                    <option>IOS</option>
                                    <option>UI/UX Design</option>
                                    <option>Development</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-3">
                                <label for="exampleInputText004" class="h5">Due Dates*</label>
                                <input type="date" class="form-control" id="exampleInputText004" value="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText07" class="h5">Assign Members*</label>
                                <input type="text" class="form-control" id="exampleInputText07">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

        {{-- <div class="modal fade" role="dialog" aria-modal="true" id="new-create-modal">
            <div class="modal-dialog  modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header d-block text-center pb-3 border-bttom">
                        <h3 class="modal-title" id="exampleModalCenterTitle01">New Task</h3>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText01" class="h5">Task Name</label>
                                    <input type="text" class="form-control" id="exampleInputText01"
                                        placeholder="Task Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText2" class="h5">Categories *</label>
                                    <select name="type" class=" form-control" data-style="py-0">
                                        <option>Category</option>
                                        <option>Android</option>
                                        <option>IOS</option>
                                        <option>UI/UX Design</option>
                                        <option>Development</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText004" class="h5">Due Dates*</label>
                                    <input type="date" class="form-control" id="exampleInputText004" value="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label for="exampleInputText07" class="h5">Assign Members*</label>
                                    <input type="text" class="form-control" id="exampleInputText07">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                    <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div>
                                    <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                </div>
                            </div>
                        </div>
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
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 ">
                                            <label for="exampleInputText2" class="h5">Project Name</label>
                                            <input name="project_name" type="text" class="form-control bg-white"
                                                placeholder="Enter Project Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 ">
                                            <label for="exampleInputText2" class="h5">Members</label>
                                            <input name="members" text" class="form-control bg-white"
                                                placeholder="Enter Project Name">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText004" class="h5">Start Date</label>
                                            <input name="start_date" type="date" class="form-control"
                                                id="exampleInputText004" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText004" class="h5">Due Date</label>
                                            <input name="due_date" type="date" class="form-control"
                                                id="exampleInputText004" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <h5 class="mb-2">Description</h5>
                                            <input name="description" type="text"
                                                style="width: 100%; padding-bottom: 15%; ">
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-12">
                                    <h5>Checklist</h5>
                                    <div class="row justify-content-between">

                                        <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label mb-1" for="customCheck4">Design
                                                mobile version</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                            <input type="checkbox" class="custom-control-input" id="customCheck07">
                                            <label class="custom-control-label mb-1" for="customCheck07">Use
                                                images of unsplash.com</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label" for="customCheck6">Vector
                                                images of small size.</label>
                                        </div>


                                        <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label mb-1" for="customCheck7">Design
                                                mobile version of landing page</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label mb-1" for="customCheck8">Use
                                                images of
                                                unsplash.com</label>
                                        </div>
                                        <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9">Vector
                                                images
                                                of
                                                small size..</label>
                                        </div>

                                    </div>
                                </div> --}}

                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-6 form-group mb-0">
                                                    <label for="exampleInputText01" class="h5">Attachments</label>
                                                    <div class="custom-file">
                                                        <input name="attachments" type="file" class="custom-file-input"
                                                            id="inputGroupFile002">
                                                        <label class="custom-file-label" for="inputGroupFile002">Upload
                                                            media</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group mb-3 ">
                                                        <label for="exampleInputText2" class="h5">Status</label>
                                                        <select name="status" class="form-control" data-style="py-0">
                                                            <option>Active</option>
                                                            <option>Completed</option>
                                                            <option>Delayed</option>
                                                            <option>Rejected</option>
                                                        </select>
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
