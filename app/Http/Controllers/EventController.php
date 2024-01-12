<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\category;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        event::where('start_date', '<=', date('Y-m-d'), 'AND', date('Y-m-d'), '>=', 'end_date')->update(['status'=> 1]);
        event::where('end_date', '<', date('Y-m-d'))->update(['status'=> 3]);
        $events = event::latest()->get();
        return view('dashboard/events/all', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('dashboard/events/add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['title'=>'required', 'location'=>'required', 'category_id'=>'required', 'targeted'=>'required', 'participantes'=>'required',
       'start_date'=>'required', 'end_date'=>'required', 'materials' =>'required', 'desc'=>'required', 'event_pic'=>'required']);
        $input = $request->all();
        if ($file = $request->file('event_pic')) {
          $name = $input['title']. ' '. $file->getClientOriginalName();
          $file->move('storage/images/events', $name);
          $input['event_pic'] = $name;
        }
        event::create($input);
        // toastr()->success('You added an Event successfuly');
        return redirect()->route('all-events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $categories = category::latest()->get();
        return view('dashboard/events/edit', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        event::findOrFail($id)->delete();
        // toastr()->error('Event deleted successfuly');
        return redirect('dashboard/all-events');
    }
}
