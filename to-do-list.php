<?php

$taskList = ["first", "second"];

function showAllTask($inputTasks){
    foreach($inputTasks as $task){
        echo $task . "\n";
    }

}
function addTask($inputTasks)
echo "to be implemented"
do{
    echo "Uzdevumu parvaldnieks\n";
    echo "Apskatit uzdevumu => 1\n";
    echo "Ievadit jaunu uzdevumu => 2\n";
    echo "Apskatit vienu uzdevumu => 3\n";
    $choice = readline("Izvelies darbibu:");
    switch ($choice) {
        case '1':
          showAllTask($taskList)
          break;
        case '2':
          addTask($taskList);
          break;
        case '3':
          echo "To be implemented\n";
          break;
        default:
          echo "Invalid option!\n";
      }
$name = readline("Ievadi savu vārdu:\n");
echo "your name is $name";

}while ($continue != "N");

}




