@extends('layouts.layout') 
@section('content') 
<title>Project</title>
<link rel="stylesheet" href="{{asset('css/calendar.css')}}">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                <div>
                                    <h4>Hello, {{session('username')}}</h4>
                                    <h5>Your Projects</h5>
                                </div>
                                <div class="d-flex flex-wrap align-items-center">
                                   
                                    <a href="#" class="btn" data-target="#collapseEdit" data-toggle="modal">New Project</a>
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
                                <div class="col-sm-8">
                                    <div class="d-flex align-items-center">
                                        <div class="ml-3">
                                            <form action="projectdata" method="POST">
                                                @csrf
                                                <div>
                                                    <input type="submit" class="btn" value="{{ $project->project_name }}" name='data' style="font-size: 125%; margin-bottom: 5%;">
                                                </div>
                                            </form>
                                            <h5>{{ $project->category }}</h5>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="modal fade" role="dialog" aria-modal="true" id="new-create-modal">
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
        </div>

        <div class="modal fade bd-example-modal-lg" role="dialog" aria-modal="true" id="collapseEdit">
            <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="card card-list task-card">
                        <div class="card-body">
                            <form action="projects" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 ">
                                            <label for="exampleInputText2" class="h5">Project Name</label>
                                            <input type="text" name="name" class="form-control bg-white"
                                                placeholder="Enter Project Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText2" class="h5">Categories *</label>
                                            <select name="category" class=" form-control" data-style="py-0">
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
                                            <label for="exampleInputText2" class="h5">Members</label>
                                            <input name="member" type="text" class="form-control" id="exampleInputText07">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3">
                                            <label for="exampleInputText004" class="h5">Due Dates</label>
                                            <input type="date" name="date" class="form-control" id="exampleInputText004" value="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <h5 class="mb-2">Description</h5>
                                            <input type="text" name="desc" style="width: 100%; padding-bottom: 15%; ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                        <input type="submit" value="Submit">
                                        <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
@endsection



