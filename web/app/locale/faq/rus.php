<?php

$oj_name = UOJConfig::$data['profile']['oj-name'];

$a3 = "
  <p>Средой оценки по умолчанию является Ubuntu Linux 20.04 LTS x64.</p>
  <p>Компилятор C — gcc 9.3.0, команда компиляции: <code>gcc code.c -o code -lm -O2 -DONLINE_JUDGE</code>.</p>
  <p>Компилятор C++ — g++ 9.3.0, команда компиляции: <code>g++ code.cpp -o code -lm -O2 -DONLINE_JUDGE</code>. Если выбран C++11, добавьте <code>-std=c++11</code> к команде компиляции.</p>
  <p>Версия JDK Java8 — openjdk 1.8.0_275, команда компиляции: <code>javac code.java</code>.</p>
  <p>Версия JDK Java11 — openjdk 11.0.9, команда компиляции: <code>javac code.java</code>.</p>
  <p>Компилятор Pascal — fpc 3.0.4, команда компиляции: <code>fpc code.pas -O2</code>.</p>
  <p>Python компилирует в оптимизированные байт-коды (<samp>.pyo</samp>). Поддерживаемые версии Python — Python 2.7 и 3.8.</p>
";

$a4 = "
<ul>
  <li>Accepted: Ответ правильный. Поздравляем с решением этой задачи.</li>
  <li>Wrong Answer: Ответ неправильный. Прохождение тестовых данных не обязательно означает правильность ответа; возможно, вы что-то упустили.</li>
  <li>Runtime Error: Ошибка выполнения. Проблемы, такие как незаконное обращение к памяти, выход за границы массива, смещение указателей или вызов отключенных системных функций, могут вызвать это. Нажмите для получения подробностей в отчете о проверке.</li>
  <li>Time Limit Exceeded: Перевышен лимит времени. Проверьте, нет ли в вашей программе бесконечного цикла или существует ли более быстрое решение.</li>
  <li>Memory Limit Exceeded: Перевышен лимит памяти. Данные могут требовать сжатия, или ваши массивы слишком большие. Проверьте на наличие утечек памяти.</li>
  <li>Output Limit Exceeded: Перевышен лимит вывода. Ваш вывод намного длиннее правильного ответа!</li>
  <li>Dangerous Syscalls: Опасные системные вызовы. Вы использовали некоторые системные функции (опасные)? Участники CTF должны связаться с отделом Cyber SWAT по вопросам сетевой обороны.</li>
  <li>Judgement Failed: Не удалось провести проверку. Возможно, есть проблемы с машиной проверки или сервером.</li>
  <li>No Comment: Нет подробностей. Если машина проверки ничего не говорит о вашей программе, вы можете сообщить нам о ситуации или отправить заново.</li>
</ul>
";

$q5 = "
Почему рекурсия до 10<sup>7</sup> уровней не вызывает переполнение стека?
";

$a5 = "<p>За исключением особых случаев, размер стека при оценке на " . $oj_name . " равен лимиту памяти задачи. Для получения дополнительной информации вы можете отправить электронное письмо сообществу разработчиков UOJ.</p>";

$q6 = "Я получил AC локально/на другом OJ, но не на " . $oj_name . ". Что мне делать?";
$a6 = "
<p>Для этого типа проблем, вот возможные причины:</p>
<ul>
  <li>В Linux символ новой строки — '\n', тогда как в Windows это '\r\n' (один дополнительный символ). Некоторые данные, сгенерированные в Windows, могут не работать в среде проверки Linux. Это очень часто встречается при вводе строк.</li>
  <li>Система проверки основана на Linux, что может вызывать ошибки выполнения из-за использования зарезервированных слов Linux, которые работают хорошо под Windows.</li>
  <li>Linux накладывает более строгие ограничения на доступ к памяти. Недопустимый доступ к указателям или индексам массива, который работает под Windows, может не работать в системе проверки.</li>
  <li>Серьезные утечки памяти могут вызвать модули защиты системы для завершения вашего процесса. Следовательно, любая память, выделенная с помощью malloc (или calloc, realloc, new), должна быть полностью освобождена с помощью free (или delete).</li>
  <li>Конечно, данные могут быть действительно неверными. Однако, если много людей успешно решило задачу, лучше не подозревать данные. В противном случае немедленно сообщите нам!</li>
</ul>
";

$q7 = $oj_name . " Руководство по использованию блога";
$a7 = $oj_name . " использует Markdown для своего блога. Для конкретных руководств по Markdown ищите в Интернете. Комментарии не поддерживают HTML, но могут использовать математические формулы.";

$q8 = "Как тестировать интерактивные задачи локально";
$a8 = "
<p>(Похоже, многие люди не знакомы с компиляцией нескольких исходных файлов вместе. Вот руководство UOJ для справки.)</p>
<p>Интерактивные задачи обычно предоставляют заголовочный файл для включения и исходный файл, называемый grader.</p>
<p>Для C++ : <code>g++ -o code grader.cpp code.cpp</code></p>
<p>Для C : <code>gcc -o code grader.c code.c</code></p>
<p>Если вы новичок в программировании, не волнуйтесь! Вы можете просто вставить содержимое файла grader после вашей инструкции include в ваш код.</p>
<p>Для Pascal : Обычно предоставляется grader. Вам нужно написать единицу Pascal. Grader будет использовать вашу единицу. Поэтому назовите ваш исходный файл как имя единицы + <code>.pas</code>, затем:</p>
<p>Для Pascal : <code>fpc grader.pas</code></p>
<p>Вот и все.</p>
";

$q9 = "Контактная информация";
$a9 = "Если вы хотите предложить задачи, организовать соревнования, сообщить о багах или предложить идеи для сайта, вы можете связаться с нами следующими способами:
<ul>
  <li>Сообщите о проблеме в официальном репозитории GitHub: https://github.com/Andrew82106/UOJ4PPSUC</li>
  <li>Присоединяйтесь к Cyber SWAT и обсуждайте свои идеи с текущим руководителем Отдела Алгоритмов</li>
</ul>
";

return [
    'q1' => 'Что такое ' . $oj_name . '?',
    'a1' => $oj_name . ' — это платформа для студентов PPSUC, чтобы развивать свои навыки программирования, разработанная и поддерживаемая PPSUC Cyber SWAT. ' . $oj_name . ' собирает задачи по программированию на Python, C/C++ и Java и организует соревнования по программированию. Все приглашаются принять участие.',
    'q4' => 'Как загрузить фотографию профиля после регистрации',
    'a4' => $oj_name . ' не предоставляет услуг хранения фотографий профиля. Однако, как и UOJ, ' . $oj_name . ' поддерживает Gravatar.',
    'q3' => 'Среда оценки ' . $oj_name . '?',
    'a3' => $a3,
    'q2' => 'Значения различных статусов оценки',
    'a2' => $a2,
    'a2' => $a4,
	'q5' => $q5,
	'a5' => $a5,
	'q6' => $q6,
	'a6' => $a6,
	'q7' => $q7,
	'a7' => $a7,
	'q8' => $q8,
	'a8' => $a8,
	'q9' => $q9,
	'a9' => $a9
];