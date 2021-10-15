<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- fountawsome CDN -->
        <script src="https://kit.fontawesome.com/487f05526c.js" crossorigin="anonymous"></script>
        <!-- Main CSS -->
        <link rel="stylesheet" href="style.css">
        <title>Title of the site</title>

        
    </head>
  <body>


    <!-- NAVBAR STARTS HERE -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- NAVBAR ENDS HERE -->

    <!-- HERO STARTS HERE -->
   
<!-- HERO ENDS HERE -->

    <main class="container-fluid">
        <div class="container main-body">
            <!-- NAVTABS STARTS HERE -->
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">EASY</button>
                  <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">MEDIUM</button>
                  <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">HARD</button>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">

                
                    <!-- easy tab starts here -->
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  
                  <?php if(isset($_GET['button-check-1'])||isset($_GET['button1'])) { echo " <!--"; }?>
                  <div class="nav-temp">
                    <p class="test-description">This is just random for the easy test discription</p>
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropeasy">
                    Take test
                    </button>
                    </div>
                  <?php if(isset($_GET['button-check-1'])||isset($_GET['button1'])){echo " -->";} ?>
                
                
                        <!-- here the modal starts -->
                      <div class="modal fade" id="staticBackdropeasy" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title " id="staticBackdropLabel">Sign Up</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form id="form-1" method="GET" class="row g-3">
                            <div class="modal-body">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name" required>
                                <label for="floatingInput" class="form-label">Full Name</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="tel" pattern="[7-9]{1}[0-9]{9}" class="form-control" id="floatingPassword" placeholder="Enter Number" required>
                                <label for="floatingPassword" class="form-label">Mobile Number</label>
                              </div>
                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                  <label class="form-check-label" for="gridCheck">
                                    agree to take test
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="button-check-1" class="btn btn-primary" >Start Test</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                        <!-- here the modal ends -->
                        <!-- here the test starts -->
                        <?php if(isset($_GET['button-check-1'])||isset($_GET['button1'])) {include("easy.php");} ?>
                        <!-- here the test ends -->
                      </div>
                    <!-- easy tab ends here -->


                    <!-- medium tabs starts here -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <?php if(isset($_GET['button-check-2'])||isset($_GET['button2'])) { echo " <!--"; }?>
                    <p class="test-description">This is just random medium test discription</p>
                    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropmedium">
                    Take test
                    </button>
                  <?php if(isset($_GET['button-check-2'])||isset($_GET['button2'])){echo " -->";} ?>

                        <!-- here the modal starts -->
                      <div class="modal fade" id="staticBackdropmedium" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title " id="staticBackdropLabel">Sign Up</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form id="form-1" method="GET" class="row g-3">
                            <div class="modal-body">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name" required>
                                <label for="floatingInput" class="form-label">Full Name</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="tel" pattern="[7-9]{1}[0-9]{9}" class="form-control" id="floatingPassword" placeholder="Enter Number" required>
                                <label for="floatingPassword" class="form-label">Mobile Number</label>
                              </div>
                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                  <label class="form-check-label" for="gridCheck">
                                    agree to take test
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="button-check-2" class="btn btn-primary" >Start Test</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                        <!-- here the modal ends -->
                        <!-- here the test starts -->
                        <?php if(isset($_GET['button-check-2'])||isset($_GET['button2'])) {include("medium.php");} ?>
                        <!-- here the test begins -->
                </div>
                    <!-- medium tab ends here -->


                    <!-- difficult tabs starts here -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
               
                  <?php if(isset($_GET['button-check-3'])||isset($_GET['button3'])) { echo " <!--"; }?>
                    <p class="test-description">This is just random for hard test discription</p>
                    <button type="button" class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrophard">
                    Take test
                    </button>
                  <?php if(isset($_GET['button-check-3'])||isset($_GET['button3'])){echo " -->";} ?>
            
            
                        <!-- here the modal starts -->
                      <div class="modal fade" id="staticBackdrophard" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title " id="staticBackdropLabel">Sign Up</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <form id="form-1" method="GET" class="row g-3">
                            <div class="modal-body">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Enter Name" required>
                                <label for="floatingInput" class="form-label">Full Name</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="tel" pattern="[7-9]{1}[0-9]{9}" class="form-control" id="floatingPassword" placeholder="Enter Number" required>
                                <label for="floatingPassword" class="form-label">Mobile Number</label>
                              </div>
                              <div class="col-12">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                  <label class="form-check-label" for="gridCheck">
                                    agree to take test
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" name="button-check-3" class="btn btn-primary" >Start Test</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                        <!-- here the modal ends -->
                        <!-- here the test starts -->
                        <?php if(isset($_GET['button-check-3'])||isset($_GET['button3'])) {include("hard.php");} ?>
                        <!-- here the test begins -->
                </div>
                    <!-- difficult tab ends here -->


            </div>
            <!-- NAVTAB ENDS HERE -->


        </div>
    </main>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Main JS -->
    <script src=".app.js"></script>
  </body>
</html>