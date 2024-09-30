<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use Illuminate\Http\JsonResponse;
use App\Http\Requests\Api\Task\CreateRequest;
use App\Http\Resources\TaskResource;
use App\Service\TaskService;
use Illuminate\Http\Request;


class TaskContrller extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService){
        $this->taskService = $taskService;
    }

    public function index() 
    {
        return response()->json(['message' => 'Hello KC']);
    }
    public function store(CreateRequest $createRequest)
    {
        $request = $createRequest->validated();
        
        $result = $this->taskService->create($request);
        
        // $result = false;
        if ($result) {
            return new TaskResource($result);
        }

        return response()->json(['message'=> 'error']);
    }
}   
