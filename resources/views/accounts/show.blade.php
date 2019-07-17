@extends('layouts.master')

@section('content')



<div class="col-10 ">


@include('inc.jumbo')

<!------------- Table Start ------------>
       <div class="row mt-5">
     @include('inc.message')
           <div class="col-6">
                <form >
                    @csrf()
                    @method('PATCH')
                        <div class="form-group">

                          <label for="Name">Name</label>
                          <input type="text" class="form-control" id=""   name="name" value="{{$account->name}}" disabled>

                        </div>

                        <div class="form-group">

                                <label for="Link">Account Link</label>
                                <input type="text" class="form-control" id=""   name="link" value="{{$account->link}}" disabled>

                        </div>


                        <div class="form-group">

                                <label for="Account ID">Account ID</label>
                                <input type="text" class="form-control" id=""   name="account_id" value="{{$account->account_id}}" disabled>

                        </div>




                        <div class="form-group">
                          <label for="Account Password">Password</label>
                          <input type="text" class="form-control" id=""  name="password" value="{{$account->password}}" disabled>
                        </div>


                        <div class="form-group">
                                <label for="info">Account Info</label>
                                <textarea class="form-control" id="" rows="3" name="info" value="" disabled> {{$account->info}}  </textarea disabled>
                        </div>


                      </form>



           </div>
           <!-------------- Table Ending ---------->
       </div>



</div>



@endsection
