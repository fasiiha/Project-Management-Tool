@extends('layouts.layout') 
@section('content') 
    <title>Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/UserProfile.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    
      <div class="container">
        <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div
                    class="d-flex flex-column align-items-center text-center"
                  >
                    <!-- <img
                      src="https://bootdey.com/img/Content/avatar/avatar7.png"
                      alt="Admin"
                      class="rounded-circle"
                      width="150"
                    /> -->
                    <div class="mt-3">
                      <h4>{{ $user->username}}</h4>
                      <p class="text-secondary mb-1">{{ $user->expertise}}</p>
                      <p class="font-size-sm"></p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="card mt-3">
                <div class="card-body ">
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
              </div> -->
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{ $user->username}}</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{ $user->email}}</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Password</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{ $user->password}}</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone Number</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{ $user->phone_number}}</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{ $user->birthdate}}</div>
                  </div>
                  <hr />
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">{{ $user->address}}</div>
                  </div>
                  <hr />
                  <!-- <button type="submit">Edit</button> -->
                </div>
              </div>

              <div class="row gutters-sm">
                <div class="col-sm-12 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3">
                        Projects
                      </h6>
                      @if (!empty($projects))
                      <ul>
                        @foreach ($projects as $project)
                          <li>
                            <small>{{ $project->project_name}}</small>
                          </li>
                        @endforeach
                      </ul>
                      @else
                          <p>No Projects available.</p>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection