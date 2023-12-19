<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projects</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
    <link rel="stylesheet" href="./css/calendar.css" />
    <link rel="stylesheet" href="./css/Sidebar.css" />
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
                                <h5>Your Projects</h5>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="dropdown dropdown-project mr-3">
                                        <div class="d-flex align-items-center" id="calchart">
                                            <select name="cal_type">
                                                <option>In Progress</option>
                                                <option>Priority</option>
                                            </select>
                                        </div>
                                    </div>
                                    <a href="#" class="btn" data-target="#collapseEdit" data-toggle="modal">New
                                        Project</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="d-flex align-items-center">
                                            <div class="ml-3">
                                                <a href="projectdata.html" style="color: white;"><h5>Theme development</h5></a>
                                                
                                                <p class="mb-0">Start development server and check Vue project in
                                                    browser.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                        
                                        <a class="btn btn-white text-secondary link-shadow">Medium</a>
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
                                                <h5 class="mb-1">WordPress Dashboard</h5>
                                                <p class="mb-0">Build a Cloud-based Hotel Management Theme.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                        <a class="btn btn-white text-success link-shadow">High</a>
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
                                                <h5 class="mb-1">Hotel Management App</h5>
                                                <p class="mb-0">Build a Cloud-based Hotel Management Theme.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                        <a class="btn btn-white text-primary link-shadow">High</a>
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
                                                <h5 class="mb-1">Video Streaming Theme</h5>
                                                <p class="mb-0">Launch OTT and media streaming theme.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-sm-right mt-3 mt-sm-0">
                                        <a class="btn btn-white text-secondary link-shadow">Medium</a>
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-3 ">
                                        <label for="exampleInputText2" class="h5">Project Name</label>
                                        <input type="text" class="form-control bg-white"
                                            placeholder="Enter Project Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputText2" class="h5">Members</label>
                                        <select name="type" class="form-control" data-style="py-0">
                                            <option>Members</option>
                                            <option>Kianna Septimus</option>
                                            <option>Jaxson Herwitz</option>
                                            <option>Ryan Schleifer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group mb-3">
                                        <label for="exampleInputText004" class="h5">Due Dates</label>
                                        <input type="date" class="form-control" id="exampleInputText004" value="">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-3">
                                        <h5 class="mb-2">Description</h5>
                                        <input type="text" style="width: 100%; padding-bottom: 15%; ">
                                    </div>
                                </div>
                                <div class="col-lg-12">
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
                                </div>
                            </div>


                            
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="form-group mb-0">
                                        <label for="exampleInputText01" class="h5">Attachments</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile002">
                                            <label class="custom-file-label" for="inputGroupFile002">Upload
                                                media</label>
                                        </div>
                                    </div>
                                </div>
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

        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="scripts.js"></script>
        <script src="js/backend-bundle.min.js"></script>

</body>

</html>