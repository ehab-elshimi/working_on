<?php

namespace App\Custom\Editor;

use App\Contracts\ResourcesFlow;
use App\Http\Resources\DevelopersResource;
use App\Models\Developer;
use App\Services\DeveloperService;
use Illuminate\Http\Request;

class DeveloperResource implements ResourcesFlow
{
    public function __construct(protected DeveloperService $service, protected Developer $developer)
    {
    }

    public function index()
    {
        return DevelopersResource::collection($this->service->retrieve($this->developer));
    }

    public function store(Request $request)
    {
        $developer = $this->service->store($this->developer, $request->toArray());

        return new DevelopersResource($developer);
    }

    public function update(Request $request, $model)
    {
        $updateDeveloper = $this->service->update($this->developer, $model->id, $request->toArray());

        return new DevelopersResource($updateDeveloper);
    }

    public function show($model)
    {
        return new DevelopersResource($this->service->show($this->developer, $model->id));
    }
}
