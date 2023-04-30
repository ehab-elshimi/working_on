<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Models\Developer;
use App\Services\DeveloperService;
use Illuminate\Support\Facades\Response;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $developer = $this->developerService->store($this->model, $request->toArray());
        return Response::json($developer);

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
