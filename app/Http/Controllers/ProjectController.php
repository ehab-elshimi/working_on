<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'formal_name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'iframe' => 'required',
            'cv_link_drive' => 'required',
            'location_url' => 'required',
            'footer_message' => 'required',
            'user_id' => 'required',
        ]);
        $videoName = time().'.'.$request->video_intro_url->getClientOriginalExtension();
        $request->video_intro_url->move(public_path('admin/videos'), $videoName);

        Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'formal_name'=>  $request->formal_name,
            'email' => $request->email,
            'address' => $request->address,
            'iframe' => $request->iframe,
            'cv_link_drive' => $request->cv_link_drive,
            'video_intro_url' => $videoName,
            'location_url' => $request->location_url,
            'footer_message' => $request->footer_message,
            'user_id' => $request->user_id,
        ]);

        return redirect()->route('dashboard.projects.index')
                        ->with('success','Project created successfully.');
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
