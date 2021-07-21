<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Event;
use App\Models\MainEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{
    // To show add event page
    function index()
    {
        $departments = Department::all();
        return view('event.add', ['departments' => $departments]);
    }
    // To process and add new event to the db with validation
    function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ename' => 'required',
            'edescription' => 'required',
            'edepartment' => 'required'
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $event = new Event();
        $event->name = $request->ename;
        $event->description = $request->edescription;
        $event->department_id = $request->edepartment;
        $event->save();

        return response(['message' => 'Successfully added new event'], 201);
    }

    // To show all events from which admin can select one event for updating details
    function show($events = [])
    {
        $departments = Event::all();
        return view('event.update', ['departments' => $departments, 'events' => $events]);
    }

    // To search department wise events list on update page
    function search(Request $request)
    {
        $events = MainEvent::where('event_id', $request->edepartment)->get();
        // return view('event.update', ['departments' => $departments, 'events' => $events]);
        return $this->show($events);
    }
    // To search event wise main events list on update page
    // function main_search(Request $request)
    // {
    //     $events = MainEvent::where('event_id', $request->edepartment)->get();
    //     // return view('event.update', ['departments' => $departments, 'events' => $events]);
    //     return $this->show($events);
    // }

    // To update main event details
    function update($event_id)
    {
        $main_event = MainEvent::find($event_id);
        return view('event.updateOne', ['main_event' => $main_event]);
    }
    // To update main event details
    function updateOne($event_id, Request $request)
    {
        $main_event = MainEvent::find($event_id)->first();
        $main_event->price = $request->eprice;
        $main_event->name = $request->ename;
        $main_event->update();
        return redirect('/admin/updateEvent');
    }

    // To delete an event
    function delete($event_id)
    {
        MainEvent::find($event_id)->delete();
        return response(['message' => 'Successfully deleted event'], 200);
    }
    function getEventsOfAnDepartment($dep_name)
    {
        $dep = Department::where('name', $dep_name)->first();
        // return $dep;
        return Event::where('department_id', $dep->id)->get();
    }
    function getMainEventsOfAnEvent($event_name)
    {
        $event = Event::where('name', $event_name)->first();
        return MainEvent::where('event_id', $event->id)->get();
    }
    function searchOneEvent($main_event_name)
    {
        return MainEvent::where('name', $main_event_name)->first();
        // return MainEvent::where('event_id', $event->id)->get();
    }
}
