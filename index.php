<?php
require_once 'classes' . DIRECTORY_SEPARATOR . 'Computer.php'

?>
<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
    <?php

$myComputer = new Computer(
    16,
    "nVidia 2020TI",
    4.5,
    512,
    'BigBen case',
    'Magic boardKey PL',
    'Stupid mouse Wireless',
    27.6,
    'MSI SuperStepMom Socket-666',
    'HyperX Cloud 3XXL Wireless'
);
echo $myComputer->getRAM();
echo $myComputer->getGPU();
echo $myComputer->getCPU();
echo $myComputer->getSSD();
echo $myComputer->getCase();
echo $myComputer->getKeyboard();
echo $myComputer->getMouse();
echo $myComputer->getScreen();
echo $myComputer->getMB();
echo $myComputer->getHeadphones();
    


    ?>
</body>
</html>