<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{

    public function index()
    {
        $activities = Auth::user()->activities;
        return view('activities.index', compact('activities'));
    }


    public function create()
    {
        return view('activities.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'datetime' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);

        $validatedData['user_id'] = Auth::id();


        Activity::create($validatedData);

        return redirect()->route('activities.index')->with('success', 'Actividad creada con éxito.');
    }


    public function show($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->user_id !== Auth::id()) {
            abort(403); 
        }

        return view('activities.show', compact('activity'));
    }

    public function edit($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->user_id !== Auth::id()) {
            abort(403);
        }

        return view('activities.edit', compact('activity'));
    }

    public function update(Request $request, $id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->user_id !== Auth::id()) {
            abort(403);
        }


        $validatedData = $request->validate([
            'type' => 'required|in:surf,windsurf,kayak,atv,hot air balloon',
            'datetime' => 'required|date',
            'paid' => 'boolean',
            'notes' => 'nullable|string',
            'satisfaction' => 'nullable|integer|min:0|max:10'
        ]);

        $activity->update($validatedData);

        return redirect()->route('activities.index')->with('success', 'Actividad actualizada con éxito.');
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->user_id !== Auth::id()) {
            abort(403);
        }

        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Actividad eliminada con éxito.');
    }
}
