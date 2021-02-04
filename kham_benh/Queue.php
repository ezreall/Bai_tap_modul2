<?php
include_once "Patient.php";

class Queue
{
    public $patientQueue;
    public $complete;

    public function __construct()
    {
        $this->patientQueue = [];
        $this->complete = [];
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return "$this->patientQueue";
    }

    public function enqueue($patient)
    {
        array_push($this->patientQueue,$patient);
    }

    public function dequeue()
    {
        $index = 0;
        $max = $this->patientQueue[0]->code;
        for ($i = 1; $i < count($this->patientQueue) ;$i++){
            if ($this->patientQueue[$i]->code > $max){
                $max = $this->patientQueue[$i]->code;
                $index = $i;
            }
        }
        array_push($this->complete,$this->patientQueue[$index]);
        array_splice($this->patientQueue,$index,1);
    }
}
