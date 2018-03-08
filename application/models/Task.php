<?php
/**
 * Implements magic setter methods for each property of the Tasks model 
 */
require_once APPPATH . 'core/Entity.php';
class Task extends Entity {
    /**
     * Evaluates and sets the Task property
     */
    private $task;
    private $priority;
    private $size;
    private $group;
    public function setTask($value)
    {
        $this->task = $value;
    }
    /**
     * Evaluates and sets the Priority property
     */
    public function setPriority($value) 
    {
        $this->priority = $value;
    }
    /**
     * Evaluates and sets the Size property
     */
    public function setSize($value) 
    {
        $this->size = $value;
    }
    /**
     * Evaluates and sets the Group property
     */
    public function setGroup($value)
    {
        $this->group = $value;
    }
    public function getTask() {
        return $this->task;
    }
    public function getPriority() {
        return $this->priority;
    }
    public function getSize() {
        return $this->size;
    }
    
    public function getGroup() {
        return $this->group;
    }
} 