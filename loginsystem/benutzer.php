<?php

$benutzer = array(
        array(
                'benutzername' => 'User1',
                'passwort' => '$2y$10$Ux/xbQpVgkphIUFed4IH0uaj3eOBuZNF8/f6pG41kpBE8EXBVLaAi',
                'vorname' => 'Hans',
                'nachname' => 'Müller',
                'email' => 'hansmueller@gmx.de',
    
        ),
        array(
                'benutzername' => 'User2',
                'passwort' => '$2y$10$p699/gr2cUoxOhuMMkYEA.4UjVM8Vaa1B/cR2AIWbvKxLWRABIgmC',
                'vorname' => 'Petra',
                'nachname' => 'Kamps',
                'email' => 'petrakamps@gmx.de',
    
        ),
        array(
                'benutzername' => 'User1',
                'passwort' => '$2y$10$Ii04i1pjrbk9Gfu9dbSDMOupziUqjn6dtqhr2nxSejv6M7/i7V51O',
                'vorname' => 'Jochen',
                'nachname' => 'Klumps',
                'email' => 'jochenklumps@gmx.de',
    
        ),        
    );
    
// Passwörter hashen    
// echo password_hash("geheim", PASSWORD_DEFAULT);

// In "benutzer.txt" daten reinschreiben
//file_put_contents("benutzer.txt", serialize($benutzer));

?>