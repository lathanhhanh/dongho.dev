<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="MobileOptimized" content="device-width" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <link rel="shortcut icon" href="https://www.dangquangwatch.vn/view/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="https://www.dangquangwatch.vn/min/?g=css"/>
        <title>Đồng hồ sịn</title>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="https://www.dangquangwatch.vn/view/Js/jquery-1.9.1.min.js"></script>
    </head>
    <body>
        @include('frontend.components.header')
        @yield('content')
        @include('frontend.components.footer')
        <script>
            var DEVICE = '{{ device_agent() }}';
        </script>
    </body>
</html>
