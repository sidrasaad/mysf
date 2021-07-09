<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TaskAssigned extends Mailable
{
    use Queueable, SerializesModels;

    protected $title;
    protected $due_date;
    protected $assigned_by;
    protected $assigned_to;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        
        $this->title = $task->title;
        $this->due_date = $task->due_date;
        $this->assigned_by = $task->user->name;
        $this->from_email = $task->user->email;
        $this->assigned_to = $task->assigned_user->name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $due_date = explode('-', $this->due_date);
        $due_date = $due_date[2] . '-' . $due_date[1] . '-' . $due_date[0];
        return $this->subject("Task : ".$this->title)
            ->from($this->from_email)
             ->markdown('emails.task.assigned')
            ->with('title', $this->title)
            ->with('due_date',  $due_date)
            ->with('assigned_by',$this->assigned_by)
            ->with('assigned_to',$this->assigned_to);
    }
}
