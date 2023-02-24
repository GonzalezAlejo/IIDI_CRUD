<?php

namespace App\View\Components;
use App\Models\task;
use Illuminate\View\Component;

class TaskFormBody extends Component
{
    private $task_to_edit;
    /**
     * Create a new component instance.
     *@param \app\Models\task $task
     * @return void
     */
    
    public function __construct($task = null)
    {   
        if(is_null($task))
        {
            $task = task::make([
                'title' => "",
                'description' => "",
            ]);
        }
        $this->task_to_edit = $task;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params = [
            'task_to_edit' => $this->task_to_edit,
        ];
        
        return view('components.task-form-body',$params);
    }
}
