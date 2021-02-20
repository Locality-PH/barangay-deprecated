

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
      <link href=" {{ URL::asset('css/app.css') }}" rel="stylesheet">
      <link href=" https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" rel="stylesheet">
      <script type="text/javascript" src=" {{ URL::asset('js/app.js') }}"></script>
      <script type="text/javascript" src="{{ URL::asset('js/pagination.js') }}"></script>
       <script type="text/javascript" src="{{ URL::asset('js/pagination.min.js') }}"></script>

 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src=" https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>





      <script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
   </head>
   <body>
      <div class="d-flex overflow-auto" id="wrapper">
         @include('inc.nav')
         <div id="page-content-wrapper">
            @include('inc.top_nav')
            <div class="container-fluid main-body" id="body">
               @yield('content')
            </div>
         </div>
      </div>
   </body>

</html>