<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tasks</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
   
    <link rel="stylesheet" href="{{asset('css/Sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/calendar.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/Sidebar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/calendar.css')}}">
</head>

<body>
    <div id="sidebar">
        <header>
          <a href="#">Project</a>
        </header>
        <div class="nav">
          <a href="./Home.html">
            <i class="zmdi zmdi-view-dashboard"></i> Home
          </a>
          <a href="./Activity.html"> <i class="zmdi zmdi-link"></i> Activity </a>
          <a href="./Discuss.html">
            <i class="zmdi zmdi-widgets"></i> Discussion
          </a>
          <a href="./calendar.html"> <i class="zmdi zmdi-calendar"></i> Calender </a>
          <a href="./projects.html"> <i class="zmdi zmdi-info-outline"></i> Projects </a>
          <a href="./TeamMembers.html">
            <i class="zmdi zmdi-info-outline"></i> Team Members
          </a>
          <a href="./tasks.html"> <i class="zmdi zmdi-settings"></i> Tasks </a>
          <a href="./settings.html">
            <i class="zmdi zmdi-comment-more"></i> Settings
          </a>
          <a href="./UserProfile.html">
            <i class="zmdi zmdi-comment-more"></i> Profile
          </a>
        </div>
      </div>

    <div class="content">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                                <h5>Your Task</h5>
                                <div class="d-flex flex-wrap align-items-center">
                                    
                                    <a href="#" class="btn" data-target="#new-create-modal" data-toggle="modal">New Task</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                                                <h5 class="mb-2"> {{ $task->task_name }}</h5>
                                                <div class="media align-items-center">
                                                    <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media align-items-center mt-md-0 mt-3">
                                            <a href="#" data-target="#collapseEdit" data-toggle="modal" class="btn bg-secondary-light mr-3">Design</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
                                            <h5 class="mb-2">Design landing page</h5>
                                            <div class="media align-items-center">
                                                <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-md-0 mt-3">
                                        <a href="#" data-target="#collapseEdit" data-toggle="modal" class="btn bg-secondary-light mr-3">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="card card-widget task-card">
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2"></label>
                                        </div>
                                        <div>
                                            <h5 class="mb-2">{{ $task->task_name }}</h5>
                                            <div class="media align-items-center">
                                                <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>5/10
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media align-items-center mt-md-0 mt-3">
                                        <a href="#" data-target="#collapseEdit" data-toggle="modal" class="btn bg-secondary-light mr-3">Design</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" aria-modal="true" id="new-create-modal">
        <div class="modal-dialog  modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-block text-center pb-3 border-bttom">
                    <h3 class="modal-title" id="exampleModalCenterTitle01">New Task</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form action="/create" method="POST">
                            @csrf
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText01" class="h5">Task Name</label>
                                <input name="name" type="text" class="form-control" id="exampleInputText01" placeholder="Task Name">
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
                                <input name="date" type="date" class="form-control" id="exampleInputText004" value="">
                            </div>                        
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-3">
                                <label for="exampleInputText07" class="h5">Assign Members*</label>
                                <input name="member" type="text" class="form-control" id="exampleInputText07">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-wrap align-items-ceter justify-content-center mt-2">
                                {{-- <div class="btn btn-primary mr-3" data-dismiss="modal">Save</div> --}}
                                <input type="submit"Submit>
                                <div class="btn btn-primary" data-dismiss="modal">Cancel</div>
                            </div>
                        </div>
                    </form>
                    </div>
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
                            <input type="text" class="form-control bg-white"
                                placeholder="Enter Task Name">
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
                                            <input name="date" type="date" class="form-control" id="exampleInputText4" value="">
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
                                                    <label class="custom-control-label" for="customCheck6">Vector images
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
                                                    <label class="custom-control-label" for="customCheck9">Vector images
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

    <!-- JQuery -->
  
    <script src="{{ asset('js/backend-bundle.min.js')}}"></script>
    <script src="{{ asset('js/backend-bundle.min.js')}}"></script>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
</body>

</html>