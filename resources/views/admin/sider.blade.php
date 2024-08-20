<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .d-flex.flex-column.flex-shrink-0.p-3.text-bg-dark {
            height: 910px;
        }

        .sider-nav {
            background-color: #212529;
            height: 60px;
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #184E93;
            color: white;
        }
    </style>
</head>
<body>
    <main class="d-flex flex-nowrap">
        <h1 class="visually-hidden">Sidebars examples</h1>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi pe-none me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link text-white" aria-current="page" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                        Home
                    </a>
                </li> -->
                
                <li>
                    <a href="/admin/dashbord" class="nav-link text-white" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/admin/category" class="nav-link text-white" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Category
                    </a>
                </li>
                <li>
                    <a href="/admin/products" class="nav-link text-white" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Products
                    </a>
                </li>
                <li>
                    <a href="/admin/order" class="nav-link text-white" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Orders
                    </a>
                </li>
                <li>
                    <a href="users" class="nav-link text-white" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Customers
                    </a>
                </li>
                <li>
                    <a href="/admin/coupon/index" class="nav-link text-white" onclick="changeColor(this)">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Coupon 
                    </a>
                </li>
            </ul>
            <hr>
            <div class="btn-group dropup">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @if(session('user'))
            @if(session('admin'))
                Admin
            @else
                {{ session('user')->name }}
            @endif
        @else
            Login
        @endif
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @if(session('user'))
            <a class="dropdown-item" href="#">New project...</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="#">Profile</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="/logout">Sign out</a>
        @else
            <a class="dropdown-item" href="/login">Login</a>
        @endif
    </div>
</div>




          
        </div>
    </main>
    <script>
        function changeColor(link) {
            // Remove active class from all links
            document.querySelectorAll('.nav-link').forEach(function(item) {
                item.classList.remove('active');
            });

            // Add active class to the clicked link
            link.classList.add('active');
        }
    </script>
</body>

</html>