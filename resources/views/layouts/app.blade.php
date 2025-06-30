<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <meta name="author" content="David Grzyb">
    <meta name="description" content="">
    @include('layouts.partials.link')
    @vite('resources/css/app.css')

</head>
<body class="bg-gray-100 font-family-karla flex">

    @include('layouts.partials.sidebar')
    @yield('content')
    @include('layouts.partials.script')


</body>
</html>