<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class EventController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Event::all();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('events.edit', $row->id) . '" class="btn btn-warning btn-sm">Edit</a>';
                    $btn .= '<form action="' . route('events.destroy', $row->id) . '" method="POST" class="d-inline">
                            ' . csrf_field() . '
                            ' . method_field('DELETE') . '
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Are you sure you want to delete this item?\')">Delete</button>
                         </form>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('events.index');
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'event_description' => 'required',
            'location' => 'required',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('images')->store('images', 'public');

        Event::create([
            'event_name' => $request->event_name,
            'event_description' => $request->event_description,
            'location' => $request->location,
            'images' => $imagePath,
        ]);
        Alert::success('Success', 'Event created successfully!');
        return redirect()->route('events.index');
    }

    public function show(Event $event)
    {
        return view('events.show', compact('event'));
    }

    public function edit(Event $event)
    {
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_name' => 'required',
            'event_description' => 'required',
            'location' => 'required',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $oldImagePath = $event->images;

        if ($request->hasFile('images')) {
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }

            $imagePath = $request->file('images')->store('images', 'public');
        } else {
            $imagePath = $oldImagePath;
        }

        $event->update([
            'event_name' => $request->event_name,
            'event_description' => $request->event_description,
            'location' => $request->location,
            'images' => $imagePath,
        ]);
        Alert::success('Success', 'Event updated successfully');
        return redirect()->route('events.index');
    }

    public function destroy(Event $event)
    {
        if ($event->images) {
            Storage::disk('public')->delete($event->images);
        }

        $event->delete();
        Alert::success('Success', 'Event deleted successfully');
        return redirect()->route('events.index');
    }
}
