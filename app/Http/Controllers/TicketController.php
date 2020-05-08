<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use App\Ticket;
use App\Department;
use PDF;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        $departments = Department::select('id','name')->get();
        return view('tickets.index', compact('tickets','departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::select('id','name')->get();
        return view('tickets.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
            'u_id'=>'required',
            'de_id'=>'required',
            'priority'=>'required'
            ]);
            $contact = new Ticket([
            'u_id' => $request->get('u_id'),
            'de_id' => $request->get('de_id'),
            'priority' => $request->get('priority'),
            'description' => $request->get('description'),
            'file' => $request->get('file'),
            'status' => $request->get('status')
            ]);
            $contact->save();
            return redirect('/tickets')->with('success', 'Job Ticket saved!');
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
    public function edit($u_id)
    {
       $ticket = Ticket::find($u_id);
       return view('tickets.edit', compact('ticket'));
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
        $request->validate([
        'u_id'=>'required',
        'de_id'=>'required',
        'priority'=>'required'
        ]);
        $ticket = Ticket::find($id);
        $ticket->u_id =  $request->get('u_id');
        $ticket->de_id = $request->get('de_id');
        $ticket->priority = $request->get('priority');
        $ticket->description = $request->get('description');
        $ticket->file = $request->get('file');
        $ticket->status = $request->get('status');
        $ticket->save();
        return redirect('/tickets')->with('success', 'Ticket updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect('/tickets')->with('success', 'Ticket deleted!');
    }






}
