<?php include './components/head.php' ?>
<?php include './components/script.php' ?>
<?php include './components/style.php' ?>

<body class="position-relative">


    <!-- <h1 class="text-danger">This is a test </h1> -->
    <?php include './components/navbar.php' ?>


    <h1 class="text-center text-custom my-4 fw-bold">Login to Your Account</h1>

    <div class="container-fluid  d-flex row">
        <div class="col-lg-6">
            <div class="m-4">
                <form action="" method="POST">
                    <div class="row p-3 rounded bg-transparent border border-2 border-info ">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-custom">Email</label>
                                <input type="text" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="Enter Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label text-custom">Password</label>
                                <input type="email" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="Enter Your Password">
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="submit" class="btn btn-info btn-md w-100 text-custom">LOGIN</button>
                        </div>



                    </div>
                </form>
            </div>

        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="./assets/login.png" alt="" class="img-fluid " style="width: 65%;">
        </div>

    </div>

    <?php include './components/darkmode.php' ?>

</body>

</html>