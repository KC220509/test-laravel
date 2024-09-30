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
            // $params["status"] = 1;

            return $this->model->create($params);

        } catch (Exception $e){
            Log::error($e);
            return false;
        }
    }

    public function update($task, $params)
    {

        return $task->update($params);
    }
}