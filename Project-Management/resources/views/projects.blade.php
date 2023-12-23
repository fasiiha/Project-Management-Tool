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
                                <h5>Your Projects</h5>
                                <div class="d-flex flex-wrap align-items-center">
                                    
                                    <a href="#" class="btn" data-target="#collapseEdit" data-toggle="modal">New Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($projects as $project) 
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="d-flex align-items-center">
                                            <div class="ml-3">
                                                <a href="#" style="color: white;"><h5>{{ $project->project_name }}</h5></a>
                                                
                                                <p class="mb-0">{{ $project->category }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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



