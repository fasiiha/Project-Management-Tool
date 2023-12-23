<!DOCTYPE html>
<!-- w -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Activity</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/Activity.css" />
    <link rel="stylesheet" href="./css/Sidebar.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
  </head>
  <body>
    @include('Sidebar')
    <div class="content">
      <div class="container bootdey">
        <div class="col-md-12 bootstrap snippets">
          <div class="panel">
            <div class="panel-body">
              <textarea
                class="form-control"
                rows="2"
                placeholder="What are you thinking?"
              ></textarea>
              <div class="mar-top clearfix">
                <button class="btn btn-sm btn-primary pull-right" type="submit">
                  <i class="fa fa-pencil fa-fw"></i> Share
                </button>
                <a
                  class="btn btn-trans btn-icon fa fa-video-camera add-tooltip"
                  href="#"
                ></a>
                <a
                  class="btn btn-trans btn-icon fa fa-camera add-tooltip"
                  href="#"
                ></a>
                <a
                  class="btn btn-trans btn-icon fa fa-file add-tooltip"
                  href="#"
                ></a>
              </div>
            </div>
          </div>
          <div class="panel">
            <div class="panel-body">
              <!-- Newsfeed Content -->
              <!--===================================================-->
              <div class="media-block">
                <a class="media-left" href="#"
                  ><img
                    class="img-circle img-sm"
                    alt="Profile Picture"
                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                /></a>
                <div class="media-body px-3">
                  <div class="mar-btm">
                    <a
                      href="#"
                      class="btn-link text-semibold media-heading box-inline"
                      >User 1</a
                    >
                    <p class="text-muted text-sm">
                      <i class="fa-solid fa-mobile"></i> - 11 min ago
                    </p>
                  </div>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Minima, illum aliquam numquam esse dolorum vitae voluptates
                    est recusandae velit molestias! Quaerat amet excepturi
                    doloremque animi totam iusto fuga eaque atque?
                  </p>
                  <div class="pad-ver">
                    <div class="btn-group">
                      <a
                        class="btn btn-sm btn-default btn-hover-success"
                        href="#"
                        ><i class="fa fa-thumbs-up"></i
                      ></a>
                      <a
                        class="btn btn-sm btn-default btn-hover-danger"
                        href="#"
                        ><i class="fa fa-thumbs-down"></i
                      ></a>
                    </div>
                    <a class="btn btn-sm btn-default btn-hover-primary" href="#"
                      >Comment</a
                    >
                  </div>
                  <hr />

                  <!-- Comments -->
                  <div>
                    <div class="media-block">
                      <a class="media-left" href="#"
                        ><img
                          class="img-circle img-sm"
                          alt="Profile Picture"
                          src="https://bootdey.com/img/Content/avatar/avatar2.png"
                      /></a>
                      <div class="media-body px-3">
                        <div class="mar-btm">
                          <a
                            href="#"
                            class="btn-link text-semibold media-heading box-inline"
                            >User 2</a
                          >
                          <p class="text-muted text-sm">
                            <i class="fa-solid fa-mobile"></i> - 7 min ago
                          </p>
                        </div>
                        <p>
                          Lorem ipsum dolor, sit amet consectetur adipisicing
                          elit. Explicabo optio saepe ea quaerat enim adipisci
                          magnam repudiandae, vel ipsa placeat nisi, nulla, cum
                          eligendi fuga quae nostrum. Eveniet, neque sed.
                        </p>
                        <div class="pad-ver">
                          <div class="btn-group">
                            <a
                              class="btn btn-sm btn-default btn-hover-success"
                              href="#"
                              ><i class="fa fa-thumbs-up"></i
                            ></a>
                            <a
                              class="btn btn-sm btn-default btn-hover-danger"
                              href="#"
                              ><i class="fa fa-thumbs-down"></i
                            ></a>
                          </div>
                          <a
                            class="btn btn-sm btn-default btn-hover-primary"
                            href="#"
                            >Comment</a
                          >
                        </div>
                        <hr />
                      </div>
                    </div>

                    <div class="media-block">
                      <a class="media-left" href="#"
                        ><img
                          class="img-circle img-sm"
                          alt="Profile Picture"
                          src="https://bootdey.com/img/Content/avatar/avatar3.png"
                        />
                      </a>
                      <div class="media-body px-3">
                        <div class="mar-btm">
                          <a
                            href="#"
                            class="btn-link text-semibold media-heading box-inline"
                            >User 3</a
                          >
                          <p class="text-muted text-sm">
                            <i class="fa-solid fa-globe"></i> - 2 min ago
                          </p>
                        </div>
                        <p>
                          Duis autem vel eum iriure dolor in hendrerit in
                          vulputate ?
                        </p>
                        <div class="pad-ver">
                          <div class="btn-group">
                            <a
                              class="btn btn-sm btn-default btn-hover-success"
                              href="#"
                              ><i class="fa fa-thumbs-up"></i
                            ></a>
                            <a
                              class="btn btn-sm btn-default btn-hover-danger"
                              href="#"
                              ><i class="fa fa-thumbs-down"></i
                            ></a>
                          </div>
                          <a
                            class="btn btn-sm btn-default btn-hover-primary"
                            href="#"
                            >Comment</a
                          >
                        </div>
                        <hr />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--===================================================-->
              <!-- End Newsfeed Content -->

              <!-- Newsfeed Content -->
              <!--===================================================-->
              <div class="media-block pad-all">
                <a class="media-left" href="#"
                  ><img
                    class="img-circle img-sm"
                    alt="Profile Picture"
                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                /></a>
                <div class="media-body px-3">
                  <div class="mar-btm">
                    <a
                      href="#"
                      class="btn-link text-semibold media-heading box-inline"
                      >User 1</a
                    >
                    <p class="text-muted text-sm">
                      <i class="fa-solid fa-mobile"></i> - 11 min ago
                    </p>
                  </div>
                  <p>Everyday situation :D</p>
                  <img
                    class="img-responsive thumbnail h-auto w-75"
                    src="https://todaysparent.mblycdn.com/tp/resized/2017/06/1534x862/when-your-kid-becomes-a-meme.jpg"
                    alt="Image"
                  />
                  <div class="pad-ver">
                    <div class="btn-group">
                      <a
                        class="btn btn-sm btn-default btn-hover-success"
                        href="#"
                        ><i class="fa fa-thumbs-up"></i
                      ></a>
                      <a
                        class="btn btn-sm btn-default btn-hover-danger"
                        href="#"
                        ><i class="fa fa-thumbs-down"></i
                      ></a>
                    </div>
                    <a class="btn btn-sm btn-default btn-hover-primary" href="#"
                      >Comment</a
                    >
                  </div>
                  <hr />

                  <!-- Comments -->
                  <div>
                    <div class="media-block pad-all">
                      <a class="media-left" href="#"
                        ><img
                          class="img-circle img-sm"
                          alt="Profile Picture"
                          src="https://bootdey.com/img/Content/avatar/avatar2.png"
                      /></a>
                      <div class="media-body px-3">
                        <div class="mar-btm">
                          <a
                            href="#"
                            class="btn-link text-semibold media-heading box-inline"
                            >User 2</a
                          >
                          <p class="text-muted text-sm">
                            <i class="fa-solid fa-globe"></i> - 2 min ago
                          </p>
                        </div>
                        <p>haha.</p>
                        <div>
                          <div class="btn-group">
                            <a
                              class="btn btn-sm btn-default btn-hover-success"
                              href="#"
                              ><i class="fa fa-thumbs-up"></i
                            ></a>
                            <a
                              class="btn btn-sm btn-default btn-hover-danger"
                              href="#"
                              ><i class="fa fa-thumbs-down"></i
                            ></a>
                          </div>
                          <a
                            class="btn btn-sm btn-default btn-hover-primary"
                            href="#"
                            >Comment</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--===================================================-->
              <!-- End Newsfeed Content -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
