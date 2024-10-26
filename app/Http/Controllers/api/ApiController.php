<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Attendee;
use App\Models\Events;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function index()
    {
        $events = Events::with('category')->get();

        return response()->json($events);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $event = Events::with(['category', 'attendee'])->find($id);

        if (!$event) {
            return response()->json(['message' => 'Event not found'], 404);
        }


        return response()->json($event);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
