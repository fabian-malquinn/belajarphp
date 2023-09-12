<?php
    echo "_____Object_____";
    echo "<br>";
    // deklarasi class laptop
    class Hello{

        var $str;
    }

    // membuat object message. ini disebut instansias
    $message = new Hello();
    $message ->str="Hello World!"; //memberikan nilai
    echo $message ->str; //mencetak nilainya (pengolahannya)
    echo "<br><br>";
?>