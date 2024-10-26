<?php

namespace App\Http\Controllers;

use App\Models\Attendee;
use App\Models\Category;
use App\Models\Events;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendees=Attendee::all();
        return view('attendee.index',compact('attendees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Events::all();
        return view('attendee.create', compact('events'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'event_id' => 'required|exists:events,id',
        ]);

        Attendee::create($validated);
        return redirect()->route('attendees.index')->with('success', 'Attendee added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $attendee = Attendee::findOrFail($id);
        $events = Events::all(); // Get all events
        return view('attendee.edit', compact('attendee', 'events'));
    }

    // Update the specified attendee in storage
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'event_id' => 'required|exists:events,id',
        ]);

        $attendee = Attendee::findOrFail($id);
        $attendee->update($validated);
        return redirect()->route('attendees.index')->with('success', 'Attendee updated successfully!');
    }

    // Remove the specified attendee from storage
    public function destroy($id)
    {
        $attendee = Attendee::findOrFail($id);
        $attendee->delete();
        return redirect()->route('attendees.index')->with('success', 'Attendee deleted successfully!');
    }
}
