<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Combo&family=Karla:wght@700&family=Mulish:ital,wght@0,400;0,600;1,500&family=Nunito&family=Open+Sans&family=Poppins:wght@500&family=Roboto&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Home Page</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body class="pb-0">

    <main class="landingPage container-fluid border border-3 mb-0 px-0">
        <h1 class="signUp-heading w-25 pe-3 me-3 float-end  my-4">
            <a href="login.php"
                class="login-link text-decoration-none p-3 w-100  d-inline-block  text-center border rounded-4">Login</a>
            <!-- <button class="login-link text-decoration-none p-3 w-100  d-inline-block  text-center border bg-transparent rounded-4" onclick="window.location.href ='login.php'" >    Login</button> -->
        </h1>
        <section class="hero container-fluid border-none row justify-content-between px-5">
            <div class="hero-text-wrapper col-10 m-auto col-md-5 my-5  ">
                <h1 class="hero-text fs-1">
                    Little Learners: <br>
                    Nurturing <br>
                    young minds

                </h1>

                <p class="hero-paragraph-text text-primary fs-5">
                    Little Learners provides a nurturing environment
                    for children to grow and learn.
                </p>

                <div class="row btn-group justify-content-between my-3 m-auto  w-100">
                    <button type="button" class="explore-btn col-5 bg-primary text-white  border-0 rounded p-3">Explore
                        Programs</button>
                    <button type="button"
                        class="enroll-btn col-5 bg-white text-primary border-primary   rounded p-3" onclick="window.location.href='signup.php'">Enroll</button>
                </div>
            </div>


            <div class="col-md-6 d-md-block d-none  hero-img-container">
                
            </div>

        </section>

        <section class="info-container-wrapper container m-auto text-center row">
            <div class="col-md-4 col-lg-3 col-6 p-3"> 
            <p>
              Student Enrollment Status  
            </p> 
            <h2 class="fw-bolder">High</h2>
        </div>
            <div class="col-md-4 col-lg-3 col-6 p-3"> 
            <p>
               Assessment Results 
            </p> 
            <h2 class="fw-bolder">High</h2>
        </div>
            <div class="col-md-4 col-lg-3 col-6 p-3"> 
            <p>
               Upcoming Events 
            </p> 
            <h2 class="fw-bolder">Spring</h2>
        </div>
            <div class="col-md-4 col-lg-3 col-6 p-3"> 
            <p>
                Rank
            </p> 
            <h2 class="fw-bolder">1</h2>
        </div>
        </section>
    </main>

</body>

</html>