<html>
<head>
<title>Week 4 Homework</title>

</head>
<body>
<h2>Week4_Homework_Novpichseyhakreach </h2>


<?php
    require_once(__DIR__ . '/classes/Aba.php');
    require_once(__DIR__ . '/classes/Pipay.php');
    require_once(__DIR__ . '/classes/Wing.php');
    

    echo '<h2>2. code excercise 2</h2>';

    $paymentMethod = 
    [
        new Aba("item 01",1,5),
        new Wing("item 02",2,3),
        new Aba("item 03",4,1),
        new Aba("item 04",5,1),
        new Pipay("item 05",6,1),
        new Aba("item 06",10,1),
        new Wing("item 07",15,1),
        new Wing("item 08",2,1),
    ];
    echo '<h2>The number of sale by Aba method is:</h2>';
    displayAba($paymentMethod);

    function displayAba($paymentMethod)
    {
        echo '<table border="1">';
        foreach($paymentMethod as $payment){
            if(get_class($payment) == 'Aba'){
            echo '<tr>';
            echo '<td>' . $payment->getItem() . '</td>';
            echo '<td>' . get_class($payment) . '</td>';
            echo '<td>' . $payment->getMoney() . '</td>';
        echo '</tr>';
            }
        }
        echo '</table>';
    }

    echo '<h2>The number of sale by Pipay and Wing method is:</h2>';
    displayPipay($paymentMethod);

    function displayPipay($paymentMethod)
    {
        echo '<table border="1">';
        foreach($paymentMethod as $payment)
        {
            if(get_class($payment) == 'Pipay' || get_class($payment) == 'Wing'){
                echo '<tr>';
                echo '<td>' . $payment->getItem() . '</td>';
                echo '<td>' . get_class($payment) . '</td>';
                echo '<td>' . $payment->getMoney() . '</td>';
                echo '</tr>';
            }
        }
        echo '</table>'; 
    }

    echo '<h2>Display all sales ordering by biggest total amount is:</h2>';
    $cloneMethod = $paymentMethod;
    usort ($cloneMethod, function($item1,$item2){
        return $item2->getMoney() <=> $item1->getMoney();
    });
    displayclone($cloneMethod);

    function displayclone($paymentMethod)
    {
        echo '<table border="1">';
        foreach($paymentMethod as $payment)
        {
                echo '<tr>';
                echo '<td>' . $payment->getItem() . '</td>';
                echo '<td>' . get_class($payment) . '</td>';
                echo '<td>' . $payment->getMoney() . '</td>';
                echo '</tr>';
            
        }
        echo '</table>'; 
    }

?>
</body>
</html>