<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Managment</title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">


</head>
<body>

@yield("content")












<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>

<script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script>

@stack("scripts")

</body>
</html>
