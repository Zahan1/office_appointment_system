<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Requestappt;
use Illuminate\Support\Facades\DB;

class RequestapptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token = Requestappt::where('status',0)->orderBy('status', 'asc')->paginate(2);
        return view('form.req_form', compact('token'));
    }

      public function requestinfo()
    {
        $requestappt = Requestappt::orderBy('id', 'desc')->get();
        return view('admin.request_appt', compact('requestappt'));
    }


    public function banFreelancer(Request $request) {
        $id = $request->id;
        $user = Requestappt::find($id);
        $user->status = '0';
        $user->save();
    }

    public function unbanFreelancer(Request $request) {
        $id = $request->id;
        $user = Requestappt::find($id);
        $user->status = '1';
        $user->save();
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
        $requestappt = new Requestappt;
        $requestappt->name = $request->input('name');
        $requestappt->email = $request->input('email');
        $requestappt->s_id = $request->input('s_id');
        $requestappt->priority = $request->input('priority');
        $requestappt->message = $request->input('message');
        $requestappt->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
