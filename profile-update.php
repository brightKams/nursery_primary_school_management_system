<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Combo&family=Karla:wght@700&family=Mulish:ital,wght@0,400;0,600;1,500&family=Nunito&family=Open+Sans&family=Poppins:wght@500&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="dashboard-wrapper container-fluid row justify-content-between px-0 mx-0">
        <div class="dashboard-navigation-wrapper col-lg-2 col-10 col-md-4  text-white  px-0  ">
            <aside class="navigation-wrapper pt-5  m-auto col-12 ">

                <div class="logout-wrapper m-auto d-flex justify-content-center align-items-center "><button class="btn-logout btn border
                 m-auto  text-white p-3" onclick="document.location.href = 'index.php'">Logout</button>
                </div>
                <div class="user-profile-wrapper col-8 my-5  m-auto ">
                    <div class="user-profile-img-wrapper m-auto position-relative p-0 rounded-circle">
                        <img src="./assets/images/male-avatar-profile-picture.jpg" alt="User_image "
                            class="user-img rounded-circle" width="120px" height="120px">
                    </div>
                    <span class="user-ID fw-bolder m-auto d-inline-block w-100 text-center mt-3 ">OKT MUM </span>
                </div>

                <nav class="col-10 my-0 m-auto ">
                    <h3 class=" m-auto p-0  mt-1 text-center p-3 "> General </h3>

                    <ul class="navlist text-white list-unstyled ">
                        <li class="nav-item d-flex justify-content-between align-items-center text-white">
                            <span class="material-symbols-outlined text-white ">
                                dashboard
                            </span>
                            <a href="" class="quicklinks d-inline-block w-75 text-white">Parent</a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center text-white">
                            <span class="material-symbols-outlined text-white">
                                groups
                            </span>
                            <a href="" class="quicklinks d-inline-block w-75 text-white">Pupil</a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center text-white">
                            <span class="material-symbols-outlined text-white ">
                                contact_mail
                            </span>
                            <a href="" class="quicklinks d-inline-block w-75 text-white">Messages</a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center text-white">
                            <span class="material-symbols-outlined text-white ">
                                event_note
                            </span>
                            <a href="" class="quicklinks d-inline-block w-75 text-white">Event</a>
                        </li>

                        <li class="nav-item list-style-none">
                            <h5 class="settings-heading font-weight-bolder mb-0 p-2 w-100 text-white">
                                Settings
                            </h5>

                        </li>


                        <li class="nav-item d-flex justify-content-between align-items-center text-white">
                            <span class="material-symbols-outlined text-white ">
                                settings
                            </span>
                            <a href="" class="quicklinks d-inline-block w-75 text-white">General Settings</a>
                        </li>
                        <li class="nav-item d-flex justify-content-between align-items-center text-white">
                            <span class="material-symbols-outlined text-white ">
                                help_center
                            </span>
                            <a href="" class="quicklinks d-inline-block w-75 text-white">Get Help</a>
                        </li>



                        <li class="nav-item d-flex justify-content-between align-items-center mt-5 text-white">
                            <span class="material-symbols-outlined text-white ">
                                logout
                            </span>
                            <a href="" class="log-out-quicklink quicklinks d-inline-block w-75 text-white">Log Out</a>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>

        <!-- ######## NAVIGATION DASHBOARD SECTION ######### -->





        <!-- ####################       USER DASHBOARD SECTION **************######################### -->

        <!-- ##########  Dashboard  ########### -->

        <div class="row dashboard col-lg-10 col-md-8 mx-0 col-10 px-0  py-2">
            <!-- ######  DASHBOARD HEADER NAVIGATIONS AND SEARCH -->

            <nav
                class="dashboard-header container d-flex justify-content-between align-items-center my-1 px-5 p-1 shadow">
                <div class="col-3 fw-bolder">Parent Dashboard</div>
                <form class="col-4 form-inline ">
                    <div class="input-group">
                        <div class="input-group-text p-0">
                            <button class="search-btn btn btn-outline-success bg-white my-2 my-sm-0" type="submit">
                                <span class="material-symbols-outlined" style="width: 100%;"> search </span>
                            </button>
                        </div>
                        <input class="form-control mr-sm-2 border-1" type="search" placeholder="Search"
                            aria-label="Search">
                    </div>
                </form>


                <div class="col-1 d-flex align-items-center">
                    <button class="d-flex align-items-center border-0">
                        <span class="material-symbols-outlined">
                            notifications
                        </span>
                    </button>
                    <button class="d-flex align-items-center border-0">
                        <span class="material-symbols-outlined">
                            mail
                        </span>
                    </button>

                    <button class="d-flex align-items-center border-0">
                        <span class="material-symbols-outlined">
                            chat_bubble
                        </span>
                    </button>
                </div>

            </nav>

            <!-- ###### END OF DASHBOARD HEADER NAVIGATIONS AND SEARCH -->



            <!-- ###### DASHBOARD PROFILES AND WARD ACTIVITIES CONENTS -->
            <div class="dashboard-container row justify-content-between container-fluid mt-3 p-4 mx-0">
                <div class="col-md-9 col-lg-7">
                    <form class="row g-3 needs-validation border px-5 shadow-lg rounded-2" novalidate>
                        <h3 class="text-center py-2">Update profile</h3>
                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="validationCustom01" class="form-label">First name</label>
                            <input type="text" class="form-control w-75" id="validationCustom01"
                                placeholder="first name" name="fName" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="validationCustom01" class="form-label">Last name</label>
                            <input type="text" class="form-control w-75" id="validationCustom01" placeholder="last name"
                                name="lName" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="designation" class="form-label designation">Designation</label>
                            <div
                                class="input-group border rounded w-75 d-flex align-items-center justify-content-center ">
                                <input type="text" class="form-control designation" name="designation" id="designation"
                                    placeholder=" Example; Father " required>
                                <span class="input-text rounded">
                                    <i class="bi bi-person-vcard-fill rounded p-2 d-none fw-bolder fs-2 ">

                                    </i>
                                </span>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="emailLabel" class="form-label email_label">Email</label>

                            <div
                                class="input-group border rounded d-flex align-items-center justify-content-center w-75 ">
                                <input type="email" class="form-control email" id="email"
                                    placeholder="******@domain.com">
                                <span class="input-text rounded">
                                    <i class="bi bi-envelope-fill rounded p-2 d-none fw-bolder fs-2 ">

                                    </i>
                                </span>
                            </div>


                            <div class="invalid-feedback">
                                Please Enter your Email.
                            </div>

                        </div>

                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="tel" class="form-label tel_label">Phone</label>

                            <div
                                class="input-group border rounded d-flex align-items-center justify-content-center w-75 ">
                                <input type="tel" class="form-control tel" id="tel"
                                    placeholder="Enter Mobile number here.....">
                                <span class="input-text rounded">
                                    <i class="bi bi-envelope-fill rounded p-2 d-none fw-bolder fs-2 ">

                                    </i>
                                </span>
                            </div>


                            <div class="invalid-feedback">
                                Please Enter your phone number.
                            </div>

                        </div>


                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="profession" class="form-label profession_label">Profession</label>
                            <div
                                class="input-group border rounded w-75 d-flex align-items-center justify-content-center ">
                                <input type="text" class="form-control profession" name="profession" id="profession"
                                    placeholder=" Jama Leader" required>
                                <span class="input-text rounded">
                                    <i class="bi bi-person-vcard-fill rounded p-2 d-none fw-bolder fs-2 ">

                                    </i>
                                </span>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="address" class="form-label address">Address</label>
                            <div
                                class="input-group border rounded w-75 d-flex align-items-center justify-content-center ">
                                <input type="text" class="form-control address" name="address" id="address"
                                    placeholder=" ut-uk234 " required>
                                <span class="input-text rounded">
                                    <i class="bi bi-person-vcard-fill rounded p-2 d-none fw-bolder fs-2 ">

                                    </i>
                                </span>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>

                        <div class="col-md-10 d-flex justify-content-between align-items-center">
                            <label for="emergency" class="form-label emergency">Emergency Contact</label>
                            <div
                                class="input-group border rounded w-75 d-flex align-items-center justify-content-center ">
                                <input type="tel" class="form-control designation" name="designation" id="designation"
                                    placeholder=" Enter mobile number here....." required>
                                <span class="input-text rounded">
                                    <i class="bi bi-person-vcard-fill rounded p-2 d-none fw-bolder fs-2 ">

                                    </i>
                                </span>
                            </div>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>


                        <!-- <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>


                  <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Username</label>
                    <div class="input-group">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>


                  <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">City</label>
                    <input type="text" class="form-control" id="validationCustom03" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div> -->



                        <div class="col-5 m-auto d-flex justify-content-center my-3">
                            <button class="btn py-3 w-50 btn-primary" type="submit">UPDATE</button>
                        </div>
                    </form>
                </div>
                <!-- ############# WARDS ACTIVITIES CARD ########## -->

                <div class="ward-activities-wrapper mx-0 col-md-3 p-4 col-lg-4 container">
                    <h4 class="fw-bolder">Your ward's activities</h4 class="mt-2">


                    <div class="row p-1 my-3 border shadow-sm border-2 rounded">
                        <div class="col-lg-4 p-2 ">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top rounded-2 " width="100%" height="100%" alt="...">

                        </div>
                        <div class="card-body col-lg-7 p-2">
                            <h5 class="card-title">English 101</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Learn the basics</h6>
                            <p class="card-text" style="font-size: 0.78rem;">Starts today at 11am, Class 300 <br> 34
                                pupils</p>

                            <!-- ### PROGRESS BAR ### -->
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 28%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between px-0 text-muted" style="font-size: 0.78rem;">
                                <div class="py-1">Lesson <span>3</span>/<span>7</span></div>
                                <div class="py-1">
                                    <small> <span>67%</span> Completed </small>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row p-1 my-3 border shadow-sm border-2 rounded">
                        <div class="col-lg-4 p-2 ">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top rounded-2 " width="100%" height="100%" alt="...">

                        </div>
                        <div class="card-body col-lg-7 p-2">
                            <h5 class="card-title">Insights into world</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Key markets overview</h6>
                            <p class="card-text" style="font-size: 0.78rem;">Upcoming exam: Mon 15/5 at 11 <br> Prepare
                                for individual oral.</p>

                            <!-- ### PROGRESS BAR ### -->
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between px-0 text-muted" style="font-size: 0.78rem;">
                                <div class="py-1">Current Status</div>
                                <div class="py-1">
                                    <small> Enrollment </small>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row p-1 my-3 border shadow-sm border-2 rounded">
                        <div class="col-lg-4 p-2 ">
                            <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                class="card-img-top rounded-2 " width="100%" height="100%" alt="...">

                        </div>
                        <div class="card-body col-lg-7 p-2">
                            <h5 class="card-title">Explore human</h5>
                            <h6 class="card-subtitle mb-2 text-muted ">Understanding brain</h6>
                            <p class="card-text" style="font-size: 0.78rem;">Next class: Wed 10/5 at 2 pm <br> Classroom
                                capacity: 42</p>

                            <!-- ### PROGRESS BAR ### -->
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 33%"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between px-0 text-muted" style="font-size: 0.78rem;">
                                <div class="py-1">Lesson <span>3</span>/<span>9</span></div>
                                <div class="py-1">
                                    <small> <span>33%</span> Completed </small>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
                <!-- ############# END OF WARDS ACTIVITIES CARD ########## -->
                <!-- ###### END OF DASHBOARD PROFILES AND WARD ACTIVITIES CONENTS -->



                <!-- ############ BEGINNING OF WARDS GRADES & UPCOMING EVENTS WRAPPER ########## -->

                <div
                    class="grades-events-container-wrapper row col-12  p-3 my-3 m-auto container-fluid justify-content-between">

                    <!-- ############ BEGINNING OF WARDS GRADES WRAPPER ########## -->
                    <div class="wards-grades-wrapper col-5 p-3">
                        <h5 class="heading-text fw-bolder">Your wards Grades</h5>
                        <div
                            class="grade-container my-2 rounded shadow-sm border-2 container align-items-center justify-content-between d-flex p-2  m-auto ">
                            <div class="col-2"><img src="./assets/images/mid-term.png" alt="" class="" srcset=""></div>
                            <div class="col-8">
                                <h6 class="heading-text mb-0">Mid-term exam</h6>
                                <small class="semester-season text-muted">Spring semester</small>
                            </div>
                            <div class="grade-score col-2 border d-flex align-items-center justify-content-center p-3 ">
                                98%</div>

                        </div>
                        <div
                            class="grade-container my-2 rounded shadow-sm border-2 container align-items-center justify-content-between d-flex p-2  m-auto ">
                            <div class="col-2"><img src="./assets/images/art-appreciation-img.png" alt="" class=""
                                    srcset=""></div>
                            <div class="col-8">
                                <h6 class="heading-text mb-0">Art-appreciation</h6>
                                <small class="semester-season text-muted">Spring semester</small>
                            </div>
                            <div class="grade-score col-2 border d-flex align-items-center justify-content-center p-3 ">
                                98%</div>

                        </div>
                        <div
                            class="grade-container my-2 rounded shadow-sm border-2 container align-items-center justify-content-between d-flex p-2  m-auto ">
                            <div class="col-2"><img src="./assets/images/mathematics-img.png" alt="" class="" srcset="">
                            </div>
                            <div class="col-8">
                                <h6 class="heading-text mb-0">Mid-term exam</h6>
                                <small class="semester-season text-muted">Spring semester</small>
                            </div>
                            <div class="grade-score col-2 border d-flex align-items-center justify-content-center p-3 ">
                                98%</div>

                        </div>

                    </div>
                    <!-- ############ END OF WARDS GRADES WRAPPER ########## -->


                    <!-- ############ BEGINNING OF UPCOMING EVENTS WRAPPER ########## -->
                    <div class="row justify-content-between col-7 p-3">
                        <h5 class="heading-text fw-bolder ">Upcoming Events</h5>
                        <div
                            class="event-highlight-card card col-6 p-1 px-3 my-1 border shadow-sm relative border-2 rounded">
                            <div class="col-12 m-auto p-1 ">
                                <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                    class="events-display-card-img card-img-top rounded-2 " width="70%" height="60%"
                                    alt="...">
                            </div>
                            <h5
                                class="card-title position-absolute ms-4 border p-3 bg-white rounded-2 text-center mb-5 negative-position">
                                School</h5>
                            <div class="card-body col-12 m-auto p-2 mt-2">
                                <h6 class="card-subtitle mb-2 text-dark fw-bolder mt-1">UPCOMING WORKSHOPS</h6>
                                <!-- ### EVENT TIME ### -->
                                <div class="d-flex justify-content-between px-0 align-items-center text-muted">
                                    <img src="./assets/images/clock-frame.png" alt="Clock Frame">
                                    <div class="py-1">2h <span>30m</span></div>
                                    <div class="py-1">
                                        <img src="./assets/images/star.png" alt=""><span>4.8/5</span>
                                    </div>
                                    <div class="py-1"><button class="view-btn btn btn-primary py-2">View</button></div>
                                </div>
                            </div>
                        </div>

                        <div
                            class="event-highlight-card card col-6 p-1 px-3 my-1 border shadow-sm relative border-2 rounded">
                            <div class="col-12 m-auto p-1 ">
                                <img src="https://images.unsplash.com/photo-1561154464-82e9adf32764?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60"
                                    class="events-display-card-img card-img-top rounded-2 " width="70%" height="60%"
                                    alt="...">

                            </div>
                            <h5
                                class="card-title position-absolute ms-4 border p-2 bg-white rounded-2 text-center mb-5 negative-position d-flex justify-content-between align-items-center w-50">
                                <div class="col-2  rounded-circle" style="width: 50px; height: 50px;"><img
                                        src="./assets/images/oliver-avatar.png" alt="" class="rounded-circle" srcset=""
                                        width="100%" height="100%"></div>
                                Oliver
                            </h5>
                            <div class="card-body col-12 m-auto p-2 mt-2">
                                <h6 class="card-subtitle mb-2 text-dark fw-bolder mt-1">School Schedule</h6>

                                <!-- ### EVENT TIME ### -->
                                <div class="d-flex justify-content-between px-0 align-items-center text-muted">
                                    <img src="./assets/images/clock-frame.png" alt="Clock Frame">
                                    <div class="py-1">2h <span>30m</span></div>
                                    <div class="py-1">

                                        <img src="./assets/images/star.png" alt=""><span>4.3/5</span>
                                    </div>
                                    <div class="py-1"><button class="view-btn btn btn-primary py-2">Explore</button>
                                    </div>

                                </div>

                            </div>
                        </div>

                <!-- ############ END OF UPCOMING EVENTS WRAPPER ########## -->

                       </div>

                <!-- ############ END OF WARDS GRADES & UPCOMING EVENTS WRAPPER ########## -->


               </div>





                <div class="messages-container-wrapper container-fluid p-4 ">
                    <h5 class="messages-heading card-subtitle mb-3 text-dark fw-bolder mt-1">Messages</h5>

                    <div class=" messages-container d-flex justify-content-between">

                        <div class="messages-wrapper card px-0">

                            <div class="card-body">
                                <h5 class="card-title">Your ward's application was successful!</h5>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h6 class="card-subtitle mb-2 text-muted ">Contact Mrs. Smith for more details.</h6>

                                    <button
                                        class="btn btn-primary text-white d-flex justify-content-center align-items-center"><span
                                            class="material-symbols-outlined w-100">
                                            arrow_right_alt
                                        </span></button>
                                </div>

                            </div>
                        </div>
                        <div class="messages-wrapper card px-0">

                            <div class="card-body">
                                <h5 class="card-title">Your ward's application was successful!</h5>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h6 class="card-subtitle mb-2 text-muted ">Contact Mrs. Smith for more details.</h6>

                                    <button
                                        class="btn btn-primary text-white d-flex justify-content-center align-items-center"><span
                                            class="material-symbols-outlined w-100">
                                            arrow_right_alt
                                        </span></button>
                                </div>

                            </div>
                        </div>
                        <div class="messages-wrapper card px-0">

                            <div class="card-body">
                                <h5 class="card-title">Your ward's application was successful!</h5>
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h6 class="card-subtitle mb-2 text-muted ">Contact Mrs. Smith for more details.</h6>

                                    <button
                                        class="btn btn-primary text-white d-flex justify-content-center align-items-center"><span
                                            class="material-symbols-outlined w-100">
                                            arrow_right_alt
                                        </span></button>
                                </div>

                            </div>
                        </div>
                    </div>





                </div>


                <!-- ############ END OF WARDS GRADES & UPCOMING EVENTS WRAPPER ########## -->

            </div>



        </div>
    </div>


</body>



</html>