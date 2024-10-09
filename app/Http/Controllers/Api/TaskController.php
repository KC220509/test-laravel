<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
// use Illuminate\Http\JsonResponse;
use App\Http\Requests\Api\Task\CreateRequest;
use App\Http\Requests\Api\Task\DeleteRequest;
use App\Http\Requests\Api\Task\UpdateRequest;
use App\Http\Resources\TaskResource;
use App\Models\Task;
use App\Service\TaskService;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService){
        $this->taskService = $taskService;
    }

    public function index($limit = 3)
    {
        $tasks = $this->taskService->pagination($limit);

        return response()->json($tasks);
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

    public function show(Task $task){
        return new TaskResource(resource: $task);
    }

    public function update(Task $task, UpdateRequest $updateRequest)
    {

        $request = $updateRequest->validated();
        
        $result = $this->taskService->update($task,$request);
        
        if ($result) {
            return response()->json(['message' => 'Cập nhật thành công'], 200, [], JSON_UNESCAPED_UNICODE);

        }
        return response()->json(['message'=> 'Cập nhật không thành công'], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function soft_delete($id)
    {
        $task = $this->taskService->findId($id);

        if (!$task) {
            return response()->json(['message'=> 'Dữ liệu không tồn tại'], 200, [], JSON_UNESCAPED_UNICODE);
        }

        $result = $this->taskService->softDelete($task);
           
        if ($result) {
            return response()->json(['message' => 'Xoá dữ liệu thành công'], 200, [], JSON_UNESCAPED_UNICODE);

        }
        return response()->json(['message'=> 'Xoá dữ liệu không thành công'], 200, [], JSON_UNESCAPED_UNICODE);
   
    }

    public function restore_delete($id)
    {
        $task = $this->taskService->findIdSoftDelete($id);

        $result = $this->taskService->restore($task);
        if ($result) {
            return response()->json(['message'=> 'Khôi phục dữ liệu thành công'], 200, [], JSON_UNESCAPED_UNICODE);
        }
        
        return response()->json(['message'=> 'Khôi phục dữ liệu không thành công'], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function destroy(Task $task)
    {
        return $task->delete();
    }
}   
