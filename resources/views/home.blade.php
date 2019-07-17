@extends('layouts.master')

@section('content')

<?php
use Carbon\Carbon;
?>

<div class="col-10 ">

    @include('inc.jumbo')

<!------------- Table Start ------------>
       <div class="row mt-5">

           <div class="col-8">
                @include('inc.message')
               <table class="table table-bordered table-dark">
                   <thead>
                     <tr>

                       <th scope="col">Name</th>
                       <th scope="col">Edit</th>
                       <th scope="col">Delete</th>

                     </tr>
                   </thead>
                   <tbody>

                    @foreach ($accounts as $account)


                     <tr>

                       <td> <a href="{{route('accounts.show',$account->id)}}"> {{$account->name}}  </a>   </td>




                       <td>  <a class="btn btn-warning" href="{{route('accounts.edit',$account->id)}}" role="button"> Edit <i class="fas fa-pen"></i> </a>

                          </td>

                        <td>

                                <form method="POST"   onclick="return confirm('Are you sure?')" action="{{route('accounts.destroy',$account->id)}}">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-danger">Delete <i class="fas fa-trash"></i></button>
                                      </form>
                        </td>
                     </tr>


                     @endforeach
                   </tbody>
                 </table>

           </div>
           <!-------------- Table Ending ---------->
       </div>


       <div class="row">
               <div class="col-4">
                       <!-- Button trigger modal -->
                       <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModalCenter">
                         Add Accounts <i class="far fa-arrow-alt-circle-up"></i>
                       </button>

                       <!-- Modal -->
                       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content bg-dark text-white">
                             <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalCenterTitle">Add Accounts</h5>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                             </div>

                             <form action="{{route('accounts.store')}}"  method="POST">
                                 {{csrf_field()}}
                                   <div class="modal-body">

                                   <div class="form-group">
                                     <label for="Name">Accounts Name </label>
                                     <input type="Name" class="form-control" id="accName" aria-describedby="emailHelp" name="name" placeholder="Name">

                                   </div>

                                   <div class="form-group">
                                           <label for="Name">Accounts link </label>
                                           <input type="Name" class="form-control" id="acclink" aria-describedby="emailHelp" name="link" placeholder="Link">

                                         </div>


                                    <div class="form-group">
                                        <label for="Name">Account ID </label>
                                        <input type="Name" class="form-control" id="accid" aria-describedby="emailHelp" name="account_id" placeholder="ID">

                                  </div>


                                   <div class="form-group">
                                     <label for="exampleInputPassword1">Password</label>
                                     <input type="password" class="form-control" id="accpassword" name="password" placeholder="Password">
                                   </div>


                                   <div class="form-group">
                                    <label for="info">Addintional Info</label>
                                    <textarea class="form-control" rows="5" id="comment" name="info"></textarea>
                                  </div>


                               </div>
                               <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="submit" class="btn btn-primary">Save changes</button>
                                     </div>
                                 </form>







                           </div>
                         </div>
                       </div>
               </div>
           </div>




   </div>

   </div>



@endsection
