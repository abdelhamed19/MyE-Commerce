<?php
?>
<html>
<head>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="app/views/assets/style.css">
    <title>Payment</title>
</head>
<body>
<div class="card mt-50 mb-50">
    <div class="card-title mx-auto">
        Payment Info
    </div>
    <div class="nav">
        <ul class="mx-auto">
<!--            <li><a href="#">Account</a></li>-->
            <li class="active"><a href="#">Payment</a></li>
        </ul>
    </div>
    <form action="" method="post">
<!--        <span id="card-header">Saved cards:</span>-->
<!--        <div class="row row-1">-->
<!--            <div class="col-2"><img class="img-fluid" src="https://img.icons8.com/color/48/000000/mastercard-logo.png"/></div>-->
<!--            <div class="col-7">-->
<!--                <input type="text" placeholder="**** **** **** 3193">-->
<!--            </div>-->
<!--            <div class="col-3 d-flex justify-content-center">-->
<!--                <a href="#">Remove card</a>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row row-1">
            <div class="col-2"><img class="img-fluid" src="https://img.icons8.com/color/48/000000/visa.png"/></div>
            <div class="col-7">
                <input type="text" placeholder="**** **** **** 4296" name="cardnumber" required>
            </div>
<!--            <div class="col-3 d-flex justify-content-center">-->
<!--                <a href="#">Remove card</a>-->
<!--            </div>-->
        </div>
<!--        <span id="card-header">Add new card:</span>-->
        <div class="row-1">
            <div class="row row-2">
                <span id="card-inner">Card holder name</span>
            </div>
            <div class="row row-2">
                <input type="text" placeholder="Bojan Viner" name="name" required>
            </div>
        </div>
        <div class="row three">
            <div class="col-7">
                <div class="row-1">
<!--                    <div class="row row-2">-->
<!--                        <span id="card-inner">Card number</span>-->
<!--                    </div>-->
<!--                    <div class="row row-2">-->
<!--                        <input type="text" placeholder="5134-5264-4">-->
<!--                    </div>-->
                </div>
            </div>
            <div class="col-2">
                <input type="date" placeholder="Exp. date" name="date" required>
            </div>
            <div class="col-2">
                <input type="text" placeholder="CVV" name="cvv" required>
            </div>
        </div>
        <button class="btn d-flex mx-auto" name="submit"><b>Submit</b></button>
        <br>
        <a href="/" class="btn d-flex mx-auto">Go Back</a>
    </form>
</div>
</body>
</html>>
