<?php

namespace App\Http\Controllers;
use App\tickets;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;
class ticketsController extends Controller
{
    
    /**
     * 
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

     
    { 
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
 {

        $tickets=new tickets;
        $input = $request->all();
       // $tickets->Problem_description= $request->get ('Problem_description');
       // $tickets->status= $request->get ('status');
       //// $tickets->user_id= $request->get ('user_id');
       // $tickets->ip_address= $request->get ('ip_address');
       // $tickets->problem_id= $request->get ('problem_id');
        //$tickets->serial_no= $request->get ('serial_no');
        //$tickets->save( );
       
        
    }

  


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
