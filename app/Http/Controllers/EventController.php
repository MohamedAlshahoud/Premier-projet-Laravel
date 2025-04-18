<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Event::where('event_date', '>=', now())->get();
        return view('events.index', compact('events'));
    }

    public function show($id){
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }
}
