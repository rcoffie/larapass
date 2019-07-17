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



  <body class="bg-dark text-white ">





    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{url('/')}}"> <span class="text-primary">Pass</span>Manager</a>


            </div>
            <a class="btn btn-dark" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                          <i class="fas fa-sign-out-alt"></i> <b>  {{ __('Logout') }}  </b>
         </a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>




      </nav>
    <div class="container-fluid">
    <div  class="row">
        <div  class="col-2 ">




              <ul class="m-2 p-4">
                    <li class="p-4"> <strong> Cras justo odio </strong> </li>
                    <li class="p-4"> <strong>Dapibus ac facilisis  </strong>  in</li>
                    <li class="p-4"><strong>Morbi leo risus </strong> </li>
                    <li class="p-4"><strong> Porta ac consectetur ac </strong> </li>
                    <li class="p-4"> <strong>Vestibulum at eros </strong> </li>
                    <li class="p-4"> </li>
                  </ul>

        </div>


   @yield('content')

        </div>

    </div>

    </div>



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
