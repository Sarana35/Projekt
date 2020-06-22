<?php

//Dieser header- Befehl sorgt dafür,
//dass Umlaute innerhalb des Nachrichtentextbereiches (textarea)
//korekt dargestellt werden.

header('content-type: text/html; charset=UTF-8');

//Definition der Variablen:

    $salut = $_POST ['salut'] ;
    $lname = $_POST ['lname'] ;
    $fname = $_POST ['fname'] ;
    $email = $_POST ['email'] ;
    $phone = $_POST ['phone'] ;
    $message = $_POST ['message'] ;

//Definition der Position der einzufügenden Variableninhalte innerhalb der E-Mail:

$an = 'svenja.pfaff@it-bfw.de';
$betreff = 'Webformular-Nachricht';
$nachricht = 
    // 1x \n= neue Zeile | 2x \n\n = neuer Absatz
"
    Nachricht von bplaced.net-Webformular: \n
    $salut $lname, $fname \n
    $email \n   
    $phone \n\n
    
    $message
";

//Hier folgt der eigentliche Hauptbefehl.
//d.h. der Inhalt wird vom Webserver per E-Mail gesendet.

mail ($an, $betreff, $nachricht, "From:" . $email);

//Rückmeldetext an den Formularausfüller, dass er das Formular abgeschickt hat:

echo 'Ihre Nachricht wurde erfolgreich gesendet. Sie werden baldmöglichst eine Antwort erhalten.
<a href="index.html">Zurück zum Formular...</a>';

?>