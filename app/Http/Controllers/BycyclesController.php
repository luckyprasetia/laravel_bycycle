<?php

namespace App\Http\Controllers;

use App\Bycycle;
use Illuminate\Http\Request;

use App\Http\Requests;

class BycyclesController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Bycycle::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $bycycle = new Bycycle();
        if($bycycle->create(Request::all())) {
            return array('status' => 200);
        }
        else {
            return array('status' => 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($bycycle = Bycycle::find($id)) {
            return $bycycle;
        }
        else {
            $status = array('status' => 400);
            return $status;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        if($bycycle = Bycycle::find($id)) {
            if($bycycle->update(Request::all())) {
                return array('status' => 200);
            }
            else {
                return array('status' => 500);
            }
        }
        else {
            return array('status' => 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if($bycycle = Bycycle::find($id)) {
            if($bycycle->delete()) {
                return array('status' => 200);
            }
            else {
                return array('status' => 500);
            }
        }
        else {
            return array('status' => 400);
        }
    }
}
