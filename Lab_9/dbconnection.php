<?php
    include 'dbconnection.php';
    //createElement and appendChild()

    $result = mysql_query("select*from books");
    $xml = new DOMDocument("1.0");
    $books = $xml->createElement("books");
    $xml->appendChild($books);

    echo "<xmp>".$xml->saveXML()."</xmp>";

    $xml->save("reports.xml");
?>