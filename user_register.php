<?php include './components/head.php' ?>
<?php include './components/script.php' ?>
<?php include './components/style.php' ?>

<body>


    <!-- <h1 class="text-danger">This is a test </h1> -->
    <?php include './components/navbar.php' ?>


    <div class="container-fluid  d-flex row">
        <div class="col-lg-6 m-4">
            <form action="" method="POST">
                <div class="row p-3 rounded bg-transparent border border-2 border-info ">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-custom">Full Name</label>
                            <input type="text" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-custom">Email address</label>
                            <input type="email" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-custom">Phone Number</label>
                            <input type="number" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-custom">Occupation</label>
                            <input type="text" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label text-custom">School / College / University Name</label>
                            <input type="text" class="form-control bg-custom-input text-custom" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <button type="submit" class="btn btn-info btn-md w-100">REGISTER</button>
                    </div>



                </div>
            </form>
        </div>
        <div class="col-lg-6 d-flex justify-content-center align-items-center">
            <img src="./assets/login.png" alt="" class="img-fluid w-50">
        </div>

    </div>

</body>

</html>