@extends('layouts.master')

@section('content')



<div class="col-10 ">


@include('inc.jumbo')

<!------------- Table Start ------------>
       <div class="row mt-5">
     @include('inc.message')
           <div class="col-8">
                <form method="post" action="{{route('accounts.update',$account->id)}}">
                    @csrf()
                    @method('PATCH')
                        <div class="form-group">

                          <label for="Name">Name</label>
                          <input type="text" class="form-control" id=""  placeholder="Name" name="name" value="{{$account->name}}">

                        </div>

                        <div class="form-group">

                                <label for="Link">Account Link</label>
                                <input type="text" class="form-control" id=""  placeholder="Name" name="link" value="{{$account->link}}">

                        </div>


                        <div class="form-group">

                                <label for="Account ID">Account ID</label>
                                <input type="text" class="form-control" id=""  placeholder="Name" name="account_id" value="{{$account->account_id}}">

                        </div>




                        <div class="form-group">
                          <label for="Account Password">Password</label>
                          <input type="text" class="form-control" id="" placeholder="Password" name="password" value="{{$account->password}}">
                        </div>


                        <div class="form-group">
                                <label for="info">Account Info</label>
                                <textarea class="form-control" id="" rows="3" name="info" value=""> {{$account->info}}  </textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>



           </div>
           <!-------------- Table Ending ---------->
       </div>



</div>



@endsection
