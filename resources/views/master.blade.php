<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-coommerce </title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body style="font-family :Raleway;">
    {{View::make('header')}}
    @yield('content')<br>
    {{View::make('footer')}}
</body>
<style>
nav.navbar.navbar-expand-lg {
    background-color: #ffff;
    height: 125px;
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
.d-flex.serch-d-flex{
    padding-left: 235px; 
    flex-direction: column;
}
.box-container{
    display: flex;
    gap: 34px;
    /* max-width: 745px; */
    text-align: center;
   justify-content: center;
   padding: 50px 0px;
}

.main {
    position: relative;
    /* width: 100%; */
    max-width: 100%;
}
.box-image{
    
    margin: 0 46px;
}
.explore-section {
    padding: 66px;
    background-color: #fafafa;
}
.exploare-sale-heading {
    text-align: center;
    padding: 0 0 58px 0;
}
/* img.card-img-top {
    width: 10%;
} */
.row.custome_row{flex-wrap: nowrap;}
@media only screen and (max-width: 1024px) {
    .text-header {
 padding-right: 0px !important;
  }
  .d-flex.serch-d-flex{
    padding-left: 0px !important; 
   
}
.input.form-control.me-2{
    width: 215px !important;
}
.icons {
    padding-left: 0px !important;
}
}

    </style>

<style>
/* Modal container */
.modal {
    display: flex; /* Use flexbox for centering */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    transition: opacity 0.10s ease;
    opacity: 1;
}

/* Modal content */
.modal-content {
    background-color: #fefefe;
    padding: 20px;
    border: 1px solid #888;
    width: 90%; /* Adjust width as needed */
    max-width: 900px; /* Increased maximum width for larger layout */
    box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Optional shadow for better visibility */
    border-radius: 8px; /* Optional rounded corners */
    display: flex; /* Flexbox to align image and form side by side */
    flex-direction: inherit;
}

/* Close button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
    padding-left: 430px;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
}

/* Image section */
.modal-content img {
    width: 100%; /* Ensure image takes full width of its container */
    max-width: 400px; /* Maximum width for the image */
    margin-right: 20px; /* Space between image and form */
}

/* Form section */
form {
    flex: 1; /* Allow form to take up remaining space */
}

/* Form field styles */
form input,
form select,
form button {
    display: block; /* Make fields block-level */
    width: 100%; /* Full width */
    margin-bottom: 10px; /* Spacing between fields */
    padding: 10px; /* Padding inside fields */
    border: 1px solid #ccc; /* Border color */
    border-radius: 4px; /* Rounded corners */
}

form button {
    background-color: #4CAF50; /* Green background */
    color: white; /* White text */
    border: none; /* Remove border */
    padding: 15px; /* Padding inside button */
    text-align: center; /* Center text */
    text-decoration: none; /* Remove underline */
    display: inline-block; /* Align with other elements */
    font-size: 16px; /* Increase font size */
    margin-top: 10px; /* Space above button */
    cursor: pointer; /* Pointer cursor on hover */
}

form button:hover {
    background-color: #45a049; /* Darker green on hover */
}

/* Error messages */
.error {
    color: red; /* Red color for errors */
    font-size: 14px; /* Smaller font size */
}
.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 0.25rem;
}

</style>

@if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Your content -->
    @php
    $showForm = true; // Or false, based on your logic
    @endphp

    @if ($showForm)
        @livewire('registration-form')
    @endif

    <!-- Include Livewire scripts -->
    @livewireScripts
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const closeButton = document.querySelector('.close');
            const modal = document.querySelector('.modal');

            closeButton.addEventListener('click', function() {
                modal.style.display = 'none'; // Hide the modal
            });

            // Optional: Close the modal if clicking outside of the modal content
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    modal.style.display = 'none'; // Hide the modal
                }
            });
        });
    </script>

</html>