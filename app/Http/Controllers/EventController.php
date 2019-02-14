<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventFormRequest;
use App\Http\Requests\UpdateEventFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(10);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = new Event();
        return view('events.create')->with([
            'events' => $events,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateEventFormRequest $request
     * @param Event $events
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventFormRequest $request)
    {
        $events = Event::create(['title' => $request->title, 'description' => $request->description]);
        session()->flash('message', "Evenement #" . $events->id . " cree avec succes");
        return redirect(route('home', $events));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events = Event::findOrFail($id);
        return view('events.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::findOrFail($id);
        return view('events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventFormRequest $request, $id)
    {
        $events = Event::findOrFail($id);
        $events->update(['title' => $request->title, 'description' => $request->description]);
        session()->flash('message', "Evenement #" . $events->id . " modifié avec succes");
        return redirect(route('events.show', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Event $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::findOrFail($id);
        $events->delete();
        session()->flash('message', "Evenement #" . $events->id . " supprimé avec succès");
        return redirect(route('home', compact('events')));
    }
}
