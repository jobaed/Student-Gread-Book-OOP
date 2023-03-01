<?php

class Course
{
    protected $id, $name;
    protected $students = array();
    protected $greads = array();

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }

    public function addStudent($student)
    {
        $this->students[] = $student;
    }
    public function getStudents()
    {
        return $this->students;
    }
    public function addGreads($studentId, $gread)
    {
        $this->grades[$studentId] = $gread;
    }

    public function getGread($studentId)
    {
        return isset($this->grades[$studentId]) ? $this->grades[$studentId] : null;
    }

    public function getAvarage(){
        $total = 0;
        $count = count($this->greads);

        foreach($this->greads as $gread){
            $total += $gread;
        }

        return $count > 0 ? $total / $count : 0;
    }
}
