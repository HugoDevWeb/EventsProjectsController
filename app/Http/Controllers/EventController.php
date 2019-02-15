<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventFormRequest;
use App\Http\Requests\UpdateEventFormRequest;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use MercurySeries\Flashy\Flashy;

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
        $events = Event::create(['title' => $request->title,
            'description' => $request->description,
            ]);
        flashy()->info('Evenement créé avec succès');
        //        flash("Evenement créé avec succès", 'success');
        return redirect(route('home', $events));
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $events = Event::where('slug', $slug)->firstorFail();
        return view('events.show', compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $events = Event::where('slug', $slug)->firstorFail();
        return view('events.edit', compact('events'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateEventFormRequest $request
     * @param $slug
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventFormRequest $request, $slug)
    {
        $events = Event::where('slug', $slug)->firstorFail();
        $events->update(['title' => $request->title,
            'description' => $request->description,
           ]);

        flashy("Evenement #" . $events->id . " modifié avec succès");
//        flash("Evenement #" . $events->id . " modifié avec succès", 'success');

        return redirect(route('events.show', $slug));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Event $events
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $events = Event::where('slug', $slug)->firstorFail();
        $events->delete();
        flashy()->error("Evenement #" . $events->id . " supprimé avec succès");
        //flash("Evenement #" . $events->id . " supprimé avec succès", 'danger');
        return redirect(route('home'))->with([
            'events' => $events,
        ]);
    }
}
