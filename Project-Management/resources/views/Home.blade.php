<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./css/Sidebar.css" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="./css/Home.css" />
    <!-- <script src="./js/sidebar.js" /> -->

  </head>


  <body style="flex-wrap: wrap">
   <?php
    
      session_start();

      if(isset($_SESSION['email'])) {
        header("Location: login.php");
        exit();
      }

      // if(isset($_COOKIE))
    ?> 

  @include('Sidebar')
    <div class="content">
      <div class="grey-bg container-fluid">
        <section id="minimal-statistics">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase">Dashboard Overview</h4>
              <p>Summary</p>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger">278</h3>
                        <span>Active Projects</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-rocket danger font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="success">64</h3>
                        <span>Completed Projects</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-cup success font-large-2 float-right"></i>
                      </div>
                    </div>
                    <!-- <div class="progress mt-1 mb-0" style="height: 7px">
                      <div
                        class="progress-bar bg-success"
                        role="progressbar"
                        style="width: 60%"
                        aria-valuenow="60"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i
                          class="icon-pencil primary font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>278</h3>
                        <span>Pending Tasks</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary">278</h3>
                        <span>Overdue Tasks</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-book-open primary font-large-2 float-right"></i>
                      </div>
                    </div>
                    <!-- <div class="progress mt-1 mb-0" style="height: 7px">
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 80%"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="primary">423</h3>
                        <span>Urgent Tasks</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-support primary font-large-2 float-right"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i
                          class="icon-speech warning font-large-2 float-left"></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>156</h3>
                        <span>New Comments</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i
                          class="icon-graph success font-large-2 float-left"
                        ></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>64.89 %</h3>
                        <span>Bounce Rate</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="align-self-center">
                        <i
                          class="icon-pointer danger font-large-2 float-left"
                        ></i>
                      </div>
                      <div class="media-body text-right">
                        <h3>423</h3>
                        <span>Total Visits</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="success">156</h3>
                        <span>New Clients</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-user success font-large-2 float-right"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="warning">64.89 %</h3>
                        <span>Conversion Rate</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-pie-chart warning font-large-2 float-right"
                        ></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="warning">156</h3>
                        <span>New Comments</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-bubbles warning font-large-2 float-right"
                        ></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px">
                      <div
                        class="progress-bar bg-warning"
                        role="progressbar"
                        style="width: 35%"
                        aria-valuenow="35"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="col-xl-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-content">
                  <div class="card-body">
                    <div class="media d-flex">
                      <div class="media-body text-left">
                        <h3 class="danger">423</h3>
                        <span>Total Visits</span>
                      </div>
                      <div class="align-self-center">
                        <i
                          class="icon-direction danger font-large-2 float-right"
                        ></i>
                      </div>
                    </div>
                    <div class="progress mt-1 mb-0" style="height: 7px">
                      <div
                        class="progress-bar bg-danger"
                        role="progressbar"
                        style="width: 40%"
                        aria-valuenow="40"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </section>

        <section id="stats-subtitle">
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h4 class="text-uppercase">Statistics</h4>
            </div>
          </div>

          <div class="container">
            <p>Project Overview:</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-margin">
                  <div class="card-body pt-1">
                    <div class="widget-49">
                      <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-primary">
                          <!-- <span class="widget-49-date-day">09</span> -->
                          <span class="widget-49-date-month">Active</span>
                        </div>
                        <div class="widget-49-meeting-info">
                          <span class="widget-49-pro-title">Project 1</span>
                        </div>
                      </div>
                      <ol class="widget-49-meeting-points">
                        <p class="widget-49-meeting-item">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Quis nam ducimus aperiam dignissimos officia
                          natus id, porro suscipit ipsa, rem soluta incidunt
                          voluptas rerum alias, quibusdam fuga nisi totam
                          voluptatibus?
                        </p>
                      </ol>
                      <p class="progressbar-heading">Completion:</p>
                      <div class="progress m-1" style="height: 6px">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 30%"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-warning">View
                          Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-margin">
                  <div class="card-body pt-1">
                    <div class="widget-49">
                      <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-warning">
                          <span class="widget-49-date-month">Delay</span>
                        </div>
                        <div class="widget-49-meeting-info">
                          <span class="widget-49-pro-title">Project 2</span>
                        </div>
                      </div>
                      <ol class="widget-49-meeting-points">
                        <p class="widget-49-meeting-item">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Doloribus sequi quam veritatis, illum libero
                          unde facere fuga ex alias impedit fugit pariatur vitae
                          molestias sint perspiciatis esse debitis eum
                          perferendis.
                        </p>
                      </ol>
                      <p class="progressbar-heading">Completion:</p>
                      <div class="progress m-1" style="height: 6px">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 50%"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-warning">View
                          Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-margin">
                  <div class="card-body pt-1">
                    <div class="widget-49">
                      <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                          <!-- <span class="widget-49-date-day">22</span> -->
                          <span class="widget-49-date-month">Comp.</span>
                        </div>
                        <div class="widget-49-meeting-info">
                          <span class="widget-49-pro-title">Project 3</span>
                        </div>
                      </div>
                      <ol class="widget-49-meeting-points">
                        <p class="widget-49-meeting-item">
                          Lorem ipsum, dolor sit amet consectetur adipisicing
                          elit. Eius incidunt alias voluptate ab asperiores.
                          Accusamus error placeat illum ratione eveniet totam
                          blanditiis eligendi repellat, sapiente nihil ipsa,
                          recusandae asperiores. Eos.
                        </p>
                      </ol>
                      <p class="progressbar-heading">Completion:</p>
                      <div class="progress m-1" style="height: 6px">
                        <div
                          class="progress-bar bg-primary"
                          role="progressbar"
                          style="width: 100%"
                          aria-valuenow="80"
                          aria-valuemin="0"
                          aria-valuemax="100"></div>
                      </div>
                      <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-warning">View
                          Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <p>Tasks Overview:</p>
            <div class="row">
              <div class="col-lg-4">
                <div class="card card-margin">
                  <!-- <div class="card-header no-border">
                    <h5 class="card-title">Project 1</h5>
                  </div> -->
                  <div class="card-body pt-1">
                    <div class="widget-49">
                      <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-primary">
                          <span class="widget-49-date-day">09</span>
                          <span class="widget-49-date-month">apr</span>
                        </div>
                        <div class="widget-49-meeting-info">
                          <span class="widget-49-pro-title">Project 1</span>
                          <span class="widget-49-meeting-time">12:00 to 13.30
                            Hrs</span>
                        </div>
                      </div>
                      <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item">
                          <span>wndkllwqdlkwklndlkw</span>
                        </li>
                        <li class="widget-49-meeting-item">
                          <span>wndkwqndlkwmskdlm</span>
                        </li>
                        <li class="widget-49-meeting-item">
                          <span>samc;sw;clwqkfmwjqdiojqiodjqw</span>
                        </li>
                      </ol>
                      <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-primary">View
                          All</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-margin">
                  <!-- <div class="card-header no-border">
                    <h5 class="card-title">MOM</h5>
                  </div> -->
                  <div class="card-body pt-1">
                    <div class="widget-49">
                      <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-warning">
                          <span class="widget-49-date-day">13</span>
                          <span class="widget-49-date-month">apr</span>
                        </div>
                        <div class="widget-49-meeting-info">
                          <span class="widget-49-pro-title">Project 2</span>
                          <span class="widget-49-meeting-time">12:00 to 13.30
                            Hrs</span>
                        </div>
                      </div>
                      <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item">
                          <span>dnklqwndknwq.lnWLE</span>
                        </li>
                        <li class="widget-49-meeting-item">
                          <span>DSCN LKNFKLWQNDWQLDNQWLK </span>
                        </li>
                        <li class="widget-49-meeting-item">
                          <span>ndwqjndiwjdiqwoidj</span>
                        </li>
                      </ol>
                      <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-warning">View
                          All</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-margin">
                  <!-- <div class="card-header no-border">
                    <h5 class="card-title">MOM</h5>
                  </div> -->
                  <div class="card-body pt-1">
                    <div class="widget-49">
                      <div class="widget-49-title-wrapper">
                        <div class="widget-49-date-success">
                          <span class="widget-49-date-day">22</span>
                          <span class="widget-49-date-month">apr</span>
                        </div>
                        <div class="widget-49-meeting-info">
                          <span class="widget-49-pro-title">Project 3</span>
                          <span class="widget-49-meeting-time">12:00 to 13.30
                            Hrs</span>
                        </div>
                      </div>
                      <ol class="widget-49-meeting-points">
                        <li class="widget-49-meeting-item">
                          <span>ldnklndkl</span>
                        </li>
                        <li class="widget-49-meeting-item">
                          <span>wdmkqmwdq</span>
                        </li>
                        <li class="widget-49-meeting-item">
                          <span>dmkqwmdqw;dw;ldm</span>
                        </li>
                      </ol>
                      <div class="widget-49-meeting-action">
                        <a href="#" class="btn btn-sm btn-flash-border-success">View
                          All</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>
