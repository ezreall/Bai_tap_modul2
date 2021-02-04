<?php
include "Queue.php";

$queue = new Queue();
$queue->enqueue(1);
$queue->enqueue(2);
$queue->enqueue(3);

$queue->dequeue();
$queue->dequeue();

var_dump($queue->isEmpty());

$queue->enqueue(4);
$queue->enqueue(5);

$queue->dequeue();
$queue->dequeue();
$queue->dequeue();

var_dump($queue->isEmpty());