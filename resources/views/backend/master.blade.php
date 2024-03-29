<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GadgetFly</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Favicons -->
    <link href="{{ url('/backend/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('/backend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('/backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('/backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('/backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ url('/backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('/backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('/backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('/backend/assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @notifyCss
    <style type="text/css">
        .notyfy {
            z-index: 1000000;
            margin-top: 5%
        }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    @include('backend.fixed.header')
    <!-- End Header -->
    <x:notify-messages />


    <!-- ======= Sidebar ======= -->
    @include('backend.fixed.sidebar')
    <!-- End Sidebar-->



    <!-- start Main body -->
    <div class="main" id="main">

        @yield('content')
    </div>
    <!-- End #main -->
    <!-- ======= Footer ======= -->
    @include('backend.fixed.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('/backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/chart.js/chart.min.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('/backend/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('/backend/assets/js/main.js') }}"></script>
    <!-- CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    @notifyJs
</body>

</html>
