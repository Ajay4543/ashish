<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="favicon.png">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Furni</title>
</head>

<body>

    <!-- product card -->
    <div class="col-12 col-md-4 col-lg-3 mb-5">
        <img src="{{ $product['url'] }}" class="img-fluid product-thumbnail">
        <h3 class="product-title">{{ $product['name'] }}</h3>
        <strong class="product-price">{{ $product['price'] }}</strong>

        <span class="icon-cross">
            <img src="images/cross.svg" class="img-fluid">
        </span>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>