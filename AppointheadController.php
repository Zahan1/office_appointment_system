<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointmenthead;

class AppointheadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

        public function appointmenthead()
    {
        $requestappt = Appointmenthead::orderBy('id', 'desc')->get();
        return view('head.appointmentlist', compact('requestappt'));
    }


    public function banFreelancer(Request $request) {
        $id = $request->id;
        $user = Appointmenthead::find($id);
        $user->status = '0';
        $user->save();
    }

    public function unbanFreelancer(Request $request) {
        $id = $request->id;
        $user = Appointmenthead::find($id);
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
        $requestappt = new Appointmenthead;
        $requestappt->name = $request->input('name');
        $requestappt->email = $request->input('email');
        $requestappt->s_id = $request->input('s_id');
        $requestappt->priority = $request->input('priority');
        $requestappt->message = $request->input('message');
        $requestappt->date = $request->input('date');
        $requestappt->time = $request->input('time');
        $requestappt->save();

        return redirect('/submission');
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
