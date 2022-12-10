<?php
//начальные вопросы
$taskQuestion = "Какая сегодня задача стоит перед вами?";
$timeQuestion = "Сколько примерно времени займет эта задача";
//ввод данных
$name = readline("Как вас зовут? ");

$task1 = readline($taskQuestion);
$taskTime1 = (int)readline($timeQuestion);

$task2 = readline($taskQuestion);
$taskTime2 = (int)readline($timeQuestion);

$task3 = readline($taskQuestion);
$taskTime3 = (int)readline($timeQuestion);

//логика
$totalTime = $taskTime1 + $taskTime2 + $taskTime3;

//вывод результата
echo "
{$name}, сегодня у вас запланировано 3 приоритетных задачи на день:
- {$task1} ({$taskTime1}ч)
- {$task2} ({$taskTime2}ч)
- {$task3} ({$taskTime3}ч)
Примерное время выполнения плана = {$totalTime}ч";