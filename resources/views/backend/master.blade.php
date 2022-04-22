<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Online Shopping</title>
        <link href="{{url('/css/style.css')}}" rel="stylesheet" />   
        <link href="{{url('/css/styles.css')}}" rel="stylesheet" />
        <script src="{{url('/js/all.js')}}" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        

@include('backend.partials.header')

        
@include('backend.partials.sitebar')

            <div id="layoutSidenav_content">
                <main>
                                      
@yield('content')
                </main>
                
 @include('backend.partials.footer')

            </div>
        </div>
        <script src="{{url('/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('/js/scripts.js')}}"></script>
        <script src="{{url('/js/Chart.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('/js/chart-area-demo.js')}}"></script>
        <script src="{{url('/js/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{url('/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
