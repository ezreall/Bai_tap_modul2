<?php
include_once "Queue.php";

$queue = new Queue;

$patient1 = new Patient('Smith',5);
$patient2 = new Patient('Jones',4);
$patient3 = new Patient('Fehrenbach',6);
$patient4 = new Patient('Brown',1);
$patient5 = new Patient('Ingram',1);

$queue->enqueue($patient1);
$queue->enqueue($patient2);
$queue->enqueue($patient3);
$queue->enqueue($patient4);
$queue->enqueue($patient5);

echo '<pre>';
print_r($queue->patientQueue);
echo '<pre>';

$queue->dequeue();

echo '<pre>';
print_r($queue->complete);
echo '<pre>';

echo '<pre>';
print_r($queue->patientQueue);
echo '<pre>';

$queue->dequeue();

echo '<pre>';
print_r($queue->complete);
echo '<pre>';

echo '<pre>';
print_r($queue->patientQueue);
echo '<pre>';