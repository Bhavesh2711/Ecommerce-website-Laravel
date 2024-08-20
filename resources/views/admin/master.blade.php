<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-coommerce </title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
    .d-flex.flex-column.flex-shrink-0.p-3.text-bg-dark {
        height: 910px;
    }

    .sider-nav {
        background-color: #212529;
        height: 75px !important;
       
        

        margin-left: 280px !important;
    }

    .d-flex.flex-column.flex-shrink-0.p-3.text-bg-dark {
        height: 910px;
        top: 0px;
        position: fixed;
    }

    .category_main {
        max-width: 600px;
        margin: 0 auto;
        padding: 96px 10px 10px 10px;
    }
</style>

<body>
    <main class="d-flex flex-nowrap">
        {{View::make('admin/sider')}}
        @yield('content')<br>

</body>
<style>

</style>

</html>