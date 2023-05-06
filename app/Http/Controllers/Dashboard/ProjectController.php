<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Models\Developer;
use App\Services\DeveloperService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class DeveloperController extends Controller
{
    use HttpResponses;
    protected DeveloperService $developerService;
    protected $model;

    public function __construct(DeveloperService $developerService)
    {
        $this->developerService = $developerService;
        $this->model = new Developer();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $developers = $this->developerService->retrieve($this->model);
        return view('dashboard.pages.developers.index', compact('developers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validation the request
        $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!$validator->fails()) {
            return redirect()->back()->with('error','error in create developer');
        }

        // store the developer
        $this->developerService->store($this->model, $request->toArray());

        return redirect()->route('dashboard.developers.index')->with('success','developer created successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(Developer $developer)
    {
        $developer = $this->developerService->show($this->model, $developer->id);
        return view('dashboard.pages.developers.show', compact('developer'));
    }
    /**
     * Display the specified resource.
     */
    public function edit(Developer $developer)
    {
        $developerData = $this->developerService->show($this->model, $developer->id);
        return view('dashboard.pages.developers.edit', compact('developerData'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Developer $developer)
    {
         // validation the request
         $validator =  Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (!$validator->fails()) {
            return redirect()->back()->with('error','error in create developer');
        }

        // update the developer
        $this->developerService->update($this->model,$developer->id, $request->all());

        return redirect()->route('dashboard.developers.index')->with('success','developer created successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Developer $developer)
    {
        $deleteDeveloper = $this->developerService->delete($this->model, $developer->id);

        if (!$deleteDeveloper) {
            return $this->success(null, "Developer Deleted Successfully", 200);
        }
    }
}
