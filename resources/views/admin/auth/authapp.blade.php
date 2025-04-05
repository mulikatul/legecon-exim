<!DOCTYPE html>
<html lang="en">

<head>
    <title>LEGECON EXIM</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- <link rel="icon" href="https://demo.dashboardpack.com/admindek-html/files/assets/images/favicon.ico" type="image/x-icon">

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
 -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('admin/css/custom.css')}}">

    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/admindek-style.css')}}"> -->
    <style type="text/css">
        .error {
            color: red;
        }

        .form-style input {
            border: 0;
            height: 50px;
            border-radius: 0;
            border-bottom: 1px solid #ebebeb;
        }

        .form-style input:focus {
            border-bottom: 1px solid #007bff;
            box-shadow: none;
            outline: 0;
            background-color: #ebebeb;
        }

        .sideline {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ccc;
        }

        button {
            height: 50px;
        }

        .sideline:before,
        .sideline:after {
            content: '';
            border-top: 1px solid #ebebeb;
            margin: 0 20px 0 0;
            flex: 1 0 20px;
        }

        .sideline:after {
            margin: 0 0 0 20px;
        }
    </style>
</head>

<body>
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
    <div class="container">
        <div class="row m-5 no-gutters shadow-lg">
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('admin/images/auth-register-illustration-light.png')}}" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-6 bg-white p-5">
                <!-- <img src="https://demo.dashboardpack.com/admindek-html/files/assets/images/logo.png" class="mb-3" alt="" srcset="" style="background-color:#1a1717"> -->
                <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" class="mb-3" alt="" srcset="" style="background-color:#fff;width: 8%;">
                @yield('content')
            </div>

        </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $(".msg").fadeOut(5000);
        });
    </script>
</body>

</html>