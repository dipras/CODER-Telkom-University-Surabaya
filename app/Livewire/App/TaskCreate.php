<?php

namespace App\Livewire\App;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Task as TaskModel;
use Illuminate\Support\Facades\Auth;

#[Title('Buat Tugas')]
#[Layout('layouts.app')]

class TaskCreate extends Component
{
    use WithFileUploads;

    public $task_name;
    public $task_due_date;
    public $task_meeting;
    public $task_description;
    public $task_file;

    public function render()
    {
        return view('livewire.app.task-create');
    }

    public function store()
    {
        $this->validate([
            'task_name' => 'required',
            'task_due_date' => 'required',
            'task_meeting' => 'required',
            'task_description' => 'required',
            'task_file' => 'nullable|mimes:pdf|max:5120',
        ]);

        $this->task_meeting = $this->operateTaskMeeting();

        $filePath = $this->task_file ? $this->task_file->store('uploads/tasks', 'public') : null;

        TaskModel::create([
            'slug' => $this->generateSlug(),
            'name' => $this->task_name,
            'due_date' => $this->task_due_date,
            'section' => "Pertemuan " . $this->task_meeting,
            'description' => $this->task_description,
            'file_name' => $filePath,
            'division_id' => $this->getDivisionProperty(),
        ]);

        $this->reset();

        session()->flash('message', 'Tugas berhasil dibuat.');

        return redirect()->route('app.e-learning.task');
    }

    protected function getDivisionProperty()
    {
        return Auth::user()->division_id;
    }

    protected function generateSlug()
    {
        $tasks = TaskModel::where('section', $this->task_meeting)->get();
        $taskCount = $tasks->count() + 1;
        $this->task_meeting = preg_replace('/[^0-9]/', '', $this->task_meeting);

        return strtolower("pertemuan-{$this->task_meeting}-tugas-{$taskCount}");
    }

    protected function operateTaskMeeting()
    {
        return ucwords(str_replace('-', ' ', $this->task_meeting));
    }
}
