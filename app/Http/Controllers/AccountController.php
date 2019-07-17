<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Account;
use Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function __constructor()
    {
     $this->middleware('auth');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
         'name' => 'required',
         'account_id' => 'required',
         'password' => 'required'
        ]);

        $user = Auth::user();
        $user_id = ($user->id);

        //update Accounts
        $account = new Account;
        $account->name = $request->input('name');
        $account->account_id = $request->input('account_id');
        $account->link       = $request->input('link');
        $account->password   = $request->input('password');
        $account->info       = $request->input('info');
      //  $account->user_id    = auth()->user()->id;
        $account->user_id    = auth()->id();
        $account->save();

       return  redirect('home')->with('success','Account Added!');

        //return $account;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      //  return "this is the show page ";
        $account = Account::findOrfail($id);


        $this->authorize('update',$account);

        return view('accounts.show')->with('account',$account);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      //  return "this is the edit zone";
        $account = Account::findOrfail($id);


        $this->authorize('update',$account);


        return view('accounts.edit')->with('account',$account);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

          $this->validate($request,[
            'name' => 'required',
            'account_id' => 'required',
            'password' => 'required'
           ]);



           //create Accounts
           $account = Account::find($id);
           $account->name = $request->input('name');
           $account->account_id = $request->input('account_id');
           $account->link       = $request->input('link');
           $account->password   = $request->input('password');
           $account->info       = $request->input('info');
           $account->user_id    = auth()->user()->id;
           $account->save();

          // return $account;

          return  redirect('home')->with('success','Account updated!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = Account::findOrfail($id);
        $account->delete();
        return redirect('home')->with('account',$account);
    }
}
