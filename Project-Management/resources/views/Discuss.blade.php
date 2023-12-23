<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Discussion</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    />
    <link rel="stylesheet" href="./css/Discuss.css" />
    <link rel="stylesheet" href="./css/Sidebar.css" />
  </head>
  <body>
    @include('Sidebar')
    <div class="content">
      <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
          <div class="col-md-3 chat">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
              <div class="card-header">
                <div class="input-group">
                  <input
                    type="text"
                    placeholder="Search..."
                    name=""
                    class="form-control search"
                  />
                  <div class="input-group-prepend">
                    <span class="input-group-text search_btn"
                      ><i class="fas fa-search"></i
                    ></span>
                  </div>
                </div>
              </div>
              <div class="card-body contacts_body">
                <ui class="contacts">
                  <li class="active">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                          class="rounded-circle user_img"
                        />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>User 1</span>
                        <p>Online</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                          class="rounded-circle user_img"
                        />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>User 2</span>
                        <p>Left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                          class="rounded-circle user_img"
                        />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>User 3</span>
                        <p>Online</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                          class="rounded-circle user_img"
                        />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>User 4</span>
                        <p>Left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                          class="rounded-circle user_img"
                        />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>User 5</span>
                        <p>Left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                </ui>
              </div>
              <div class="card-footer"></div>
            </div>
          </div>
          <div class="col-md-9 chat">
            <div class="card">
              <div class="card-header msg_head">
                <div class="d-flex bd-highlight">
                  <div class="img_cont">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img"
                    />
                    <span class="online_icon"></span>
                  </div>
                  <div class="user_info">
                    <span>User 1</span>
                    <p>1767 Messages</p>
                  </div>
                  <div class="video_cam">
                    <span><i class="fas fa-video"></i></span>
                    <span><i class="fas fa-phone"></i></span>
                  </div>
                </div>
                <span id="action_menu_btn"
                  ><i class="fas fa-ellipsis-v"></i
                ></span>
                <div class="action_menu">
                  <ul>
                    <li><i class="fas fa-user-circle"></i> View profile</li>
                    <li><i class="fas fa-users"></i> Add to close friends</li>
                    <li><i class="fas fa-plus"></i> Add to group</li>
                    <li><i class="fas fa-ban"></i> Block</li>
                  </ul>
                </div>
              </div>
              <div class="card-body msg_card_body">
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you samim?
                    <span class="msg_time">8:40 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Hi Khalid i am good tnx how about you?
                    <span class="msg_time_send">8:55 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <span class="msg_time">9:00 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    You are welcome
                    <span class="msg_time_send">9:05 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                  <div class="msg_cotainer">
                    I am looking for your next templates
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Ok, thank you have a good day
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img
                      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0DP3IlXl2zL1A2cIQGb_d3IIS9SEsRO1Sog&usqp=CAU"
                      class="rounded-circle user_img_msg"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Bye, see you
                    <span class="msg_time">9:12 AM, Today</span>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="input-group">
                  <div class="input-group-append">
                    <span class="input-group-text attach_btn"
                      ><i class="fas fa-paperclip"></i
                    ></span>
                  </div>
                  <textarea
                    name=""
                    class="form-control type_msg"
                    placeholder="Type your message..."
                  ></textarea>
                  <div class="input-group-append">
                    <span class="input-group-text send_btn"
                      ><i class="fas fa-location-arrow"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts.js"></script>
  </body>
</html>
