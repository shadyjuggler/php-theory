<?php

$name = "John";

echo 'Hello, $name!\'' . "<br/>";
echo "Hello, $name!\$" . "<br/>";

$heredoc = <<<EOD
    Multi-line string,
    with varialbe;
    Insterting name: $name
EOD;

$nowdoc = <<<'EOD'
    Multi-line string,
    with no varible;
    Inserting name: $name
EOD;

echo $heredoc . "<br/>" . $nowdoc;