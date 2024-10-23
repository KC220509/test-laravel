<?php

namespace App\Service;

use App\Models\Task;
use Exception;
use Log;

class TaskService{

    protected $model;
    public function __construct(Task $task)
    {
        $this->model = $task;
    }

    public function create($params)
    {
        try {
            return $this->model->create($params);

        } catch (Exception $e){
            Log::error($e);
            return false;
        }
    }

    public function update($task, $params)
    {
        try {
            return $task->update($params);

        } catch (Exception $ex){
            Log::error($ex);
            return false;
        }
    }

    public function findId($id){
        return Task::find($id);
    }

    public function softDelete($task)
    {
        return $task->delete();
    }


    public function findIdSoftDelete($id)
    {
        return Task::withTrashed()->where("id", $id)->first();
    }

    public function restore($task)
    {
        return $task->restore();
    }


    // public function pagination($limit)
    // {
    //     return Task::select("name", "description", "status")
    //                 ->paginate($limit);
    // }

    public function getList()
    {
        return $this->model->orderBy("id","desc");
    }
}