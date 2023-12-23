@extends('layouts.layout') 
@section('content') 
    <script src="{{ asset('js/tui-code-snippet.js')}}"></script>
    <script src="{{ asset('js/tui-calendar.min.js')}}"></script>
    <script src="{{ asset('js/calendar.js')}}"></script>
    
    <link rel="stylesheet" href="{{asset('css/tui-calendar.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar.css')}}">

    <title>Calendar</title>
    
    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between breadcrumb-content">
                            <h5>Calender</h5>
                            <div>
                                <a href="#" class="btn" data-target="#new-create-modal" data-toggle="modal">Create New</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card card-block card-stretch card-height">
                    <div class="card-header d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h5 class="mr-3">20 Nov, Friday</h5>
                        </div>
                        <div class="d-flex align-items-center" id="calchart">
                            <select name="cal_type" id="cal-type">
                                <option value="day">Day</option>
                                <option value="week">Week</option>
                                <option value="month">Month</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div id="calendar" style="height: 600px; width: 100%;"></div>
        </div>
    </div>

    <div class="modal fade" role="dialog" aria-modal="true" id="new-create-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content" style="background-color: #232733 ;">
                <div class="modal-header d-block text-center" style="color: white;">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Task Name*</label>
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

@endsection