<!doctype html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,600&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!--Header-->
    <?php include "header.php"; ?>
    <!-- End Header-->

    <div class="card text-bg-dark border-0">
        <img src="menu.png" class="card-img" alt="...">
        <div class="card-img-overlay">
        </div>
    </div>

    <div class="container-lg">
        <div class="row">
            <!-- Side bar-->
            <?php include "sidebar.php"; ?>
            <!-- End sidebar-->

            <!-- Content -->
            <div class="col-lg-9 mt-2">
              <div class="card">
                <div class="card-header">
                    Order
                </div>
                <div class="card-body">
                    <h5 class="card-title">Ini adalah bagian Order</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>  
            
        <!-- End Content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>