<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/UserProfile.css" />
    <link rel="stylesheet" href="./css/Sidebar.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
  </head>
  <body>
    @include('Sidebar')
    <div class="content">
      <div class="container">
        <div class="main-body">
          <!-- /Breadcrumb -->

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div
                    class="d-flex flex-column align-items-center text-center"
                  >
                    <img
                      src="https://bootdey.com/img/Content/avatar/avatar7.png"
                      alt="Admin"
                      class="rounded-circle"
                      width="150"
                    />
                    <div class="mt-3">
                      <h4>Name</h4>
                      <p class="text-secondary mb-1">Developer</p>
                      <p class="font-size-sm">abc,xyz</p>

                      <button class="btn app-btn-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <div class="card-body ">
                  <div class="row ">
                    <h6 class="mb-0 ">
                      <i class="fa-solid fa-globe"></i>  Website
                    </h6>
                  </div>
                  <hr />
                  <div class="row">
                    <h6 class="mb-0">
                      <i class="fa-brands fa-github"></i>  Github
                    </h6>
                  </div>
                  <hr /><div class="row">
                    <h6 class="mb-0">
                      <i class="fa-brands fa-x-twitter"></i>  X-Twitter
                    </h6>
                  </div>
                  <hr /><div class="row">
                    <h6 class="mb-0">
                      <i class="fa-brands fa-linkedin"></i>  Linkedin
                    </h6>
                  </div>
                  <hr />
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">Name</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">example@mail.com</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">1234-5678</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">000 111 222</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">abc, xyz</div>
                  </div>
                  <hr />
                  <div class="row justify-content-center">
                    <button class="btn app-btn-primary col-sm-2">Edit</button>
                  </div>
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">
                        Project Status
                      </h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 80%"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 72%"
                          aria-valuenow="72"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 89%"
                          aria-valuenow="89"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 55%"
                          aria-valuenow="55"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div
                          class="progress-bar"
                          role="progressbar"
                          style="width: 66%"
                          aria-valuenow="66"
                          aria-valuemin="0"
                          aria-valuemax="100"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
