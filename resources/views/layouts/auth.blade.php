<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
       <!-- CSRF Token -->
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <title>{{ config('app.name', 'PassManager') }}</title>

       <!-- Scripts -->
       <script src="{{ asset('js/app.js') }}" defer></script>

       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

       <!-- Styles -->
       <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>



  <body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}"> <span class="text-primary">Pass</span>Manager</a>
        </div>
      </nav>
    <div class="container-fluid bg-dark text-white ">
    <div  class="row mt-4">


     @yield('content')

     </div>

    </div>

    </div>


    <!-- Footer -->
    <footer class="page-footer font-small special-color-dark pt-4">

      <!-- Footer Elements -->
      <div class="container mt-4">

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
          <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
             <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
           <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
            </a>
          </li>
        </ul>
        <!-- Social buttons -->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="#"> PassManager</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->


    <script src="{{asset('js/app.js')}}"></script>


    <script>

            $('#edit').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var name = button.data('accname')
                var id = button.data('accid')
                var link = button.data('acclink')
                var pass = button.data('accpass')
                var info = button.data('info')

                var modal = $(this)
              //  modal.find('.modal-title').text('New message to ' + recipient)
                modal.find('.modal-body #accName').val(name);
                modal.find('.modal-body #accid').val(id);
                modal.find('.modal-body #acclink').val(link);
                modal.find('.modal-body #accpassword').val(pass);
                modal.find('.modal-body #accinfo').val(info);


              })

    </script>


  </body>
</html>
