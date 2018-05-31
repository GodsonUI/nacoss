<!DOCTYPE html>
<html>
    <head>
        <title>Event Reminder & Scheduling System :: Designed by => Godson C. Jnr</title>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <!--     Fonts and icons     -->
        <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700" /> -->
        <link rel="stylesheet" href="css/animate.css" />
        <link rel="stylesheet" href="css/mine.css" />
        <link rel="stylesheet" href="font/font-awesome/css/font-awesome.min.css" />

        <!-- Material Kit CSS -->
        <link rel="stylesheet" href="css/material-kit.css">
    </head>
    <body>
        <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="index.php">
                  Event Manager </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                  <li class="dropdown nav-item">
                    <a href="login.php" class="nav-link">
                      <i class="material-icons">lock_outline</i> Login
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">
                      <i class="material-icons">visibility</i> About
                    </a>
                  </li>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <div class="page-header header-filter" filter-color="purple" style="background-image: url('img/banner17.jpg')">
          <div class="container">
            <div class="row mt-5">
              <div class="col-md-4 mx-auto">
                <div class="card mt-5 card-signin card-nav-tabs">
                  <h2 class="card-header animated bounceInDown text-center card-header-primary"><i class="material-icons">people</i> Register</h2>
                  <div class="card-body bg-default">
                    <div class="row">
                      <div class="col-md-12 mx-auto">
                        <form class="form" method="" action="">
                          <div class="form-group animated bounceInLeft">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">person</i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Fullname..." autofocus="">
                            </div>
                          </div>
                          <div class="form-group animated bounceInLeft">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">email</i>
                                </span>
                              </div>
                              <input type="email" class="form-control" placeholder="email...">
                            </div>
                          </div>
                          <div class="form-group animated bounceInLeft">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">local_phone</i>
                                </span>
                              </div>
                              <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                          </div>
                          <div class="form-group animated bounceInLeft">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                              <input type="password" class="form-control" placeholder="password">
                            </div>
                          </div>
                          <div class="form-group animated bounceInLeft">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                              <input type="password" class="form-control" placeholder="confirm password">
                            </div>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" checked>
                              <span class="form-check-sign">
                                <span class="check"></span>
                              </span>
                              Remember my
                              <p class="text-primary d-inline">password</p>.
                            </label>
                          </div>
                          <div class="text-center mr-auto py-3">
                            <input type="submit" name="" class="btn animated bounceInUp btn-primary" value="Register →">
                          </div>
                          <hr>
                          <div class="text-center mr-auto py-0">
                            <label class="form-check-label">
                              <!-- <input class="form-check-input" type="checkbox" value="" checked> -->
                              <span class="form-check-sign">
                              </span>
                              Already have an account? 
                              <a href="login.php">Login Here </a>.
                            </label>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--   Core JS Files   -->
        <script src="js/core/jquery.min.js"></script>
        <script src="js/core/popper.min.js"></script>
        <script src="js/bootstrap-material-design.js"></script>
        <script src="js/plugins/moment.min.js"></script>
        <script src="js/plugins/bootstrap-selectpicker.js"></script>
        <script src="js/plugins/bootstrap-tagsinput.js"></script>
        <script src="js/plugins/jasny-bootstrap.min.js"></script>
        <script src="js/plugins/jquery.flexisel.js"></script>
        <script src="js/plugins/bootstrap-datetimepicker.min.js"></script>
        <script src="js/plugins/nouislider.min.js"></script>
        <script src="js/material-kit.js"></script>
    </body>
</html>