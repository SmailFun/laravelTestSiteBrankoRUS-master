<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Chat Application</title>
    <link rel="icon" type="image/x-icon" href={{asset("assets/img/favicon.ico")}}/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css"/>
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href={{asset("assets/css/apps/mailing-chat.css")}} rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->

</head>
<body>
@include('inc.admin.navbar')
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>
    @include('inc.admin.sidebar')
    @yield('content')
</div>
<script src={{asset("assets/js/libs/jquery-3.1.1.min.js")}}></script>
<script src={{asset("bootstrap/js/popper.min.js")}}></script>
<script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
<script src={{asset("plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("assets/js/app.js")}}></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>
<script src={{asset("assets/js/custom.js")}}></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src={{asset("assets/js/apps/mailbox-chat.js")}}></script>
</body>
</html>
