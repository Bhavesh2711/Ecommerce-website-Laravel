<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-coommerce </title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

</body>
<style>
nav.navbar.navbar-expand-lg {
    background-color: #ffffff;
}
.navbar-brand{
    color: #fff;
}
/*  */
    .custom-login{
        padding-top:100px;
    }
    .carousel-item img.slider-img {
       /*  width: %; Set the width of the image to 100% */
        height: auto; /* Let the height adjust automatically to maintain aspect ratio */
    }
    
    .carousel-caption{
        background-color: #9d979773;
    }
    .detail-img{
        height: 300px;
    }

    li.nav-item {
    padding-right: 40px;
}
    .cart-icon {
        position: relative; /* Make sure the position is relative to allow absolute positioning for the number */
        color: black; /* Change the color of the cart icon */
    }

    .cart-number {
        position: absolute;
        top: -8px; /* Adjust the top position to place it above the cart icon */
        right: -8px; /* Adjust the right position to place it towards the top right corner */
        background-color: red; /* Set the background color of the number */
        color: white; /* Set the text color of the number */
        border-radius: 50%; /* Make the number circular */
        padding: 5px; /* Add padding to the number */
        font-size: 12px; /* Adjust the font size of the number */
    }

/* cartlist */
.custom-product11 {
        padding: 90px;
        background-color: #f7f7f7;
    }
    .custom-table {
        width: 50%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    .custom-table th, .custom-table td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }
    .custom-table th {
        background-color: #f2f2f2;
    }
    .custom-table tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    .custom-table td img {
        display: block;
        margin: 0 auto;
        max-width: 100px;
        height: auto;
    }
    .custom-table td:first-child {
        width: 150px; /* Adjust width of the first column */
    }

/* cartlist */
.custom-product1 {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.custom-table1 {
    width: 50%;
    margin-top: 20px;
    padding-left: 400px;
}

.order-item {
    display: flex;
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.item-image {
    width: 100px;
    margin-right: 20px;
}

.item-details {
    display: flex;
    flex-direction: column;
}

.item-details p {
    margin: 5px 0;
}
.card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;
    width: 367px;
}
    </style>
</html>
<div class="container custom-login" style="padding: 130px 0px 39px 500px;">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3>login1111 </h3>
            <form style="width: 22rem;" action="login" method="post">
                @csrf
                <!-- Name input -->


                <!-- Email input -->
                <label class="form-label" for="form5Example2">Email address</label>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form5Example2" name="email" class="form-control" />
                </div>
                <label class="form-label" for="form5Example1">Password</label>
                <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form5Example1" name="password" class="form-control" />
                </div>

                <!-- Submit button -->
                <input type="submit" class="btn btn-primary " value="LOGIN" name="submit" style="width: 350px;">
            </form>
            <a href="/register">Don't have an account ?</a>
        </div>
    </div>
</div>
<br>

