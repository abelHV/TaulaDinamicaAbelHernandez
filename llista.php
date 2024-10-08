<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Exemple arrays</title>
</head>
<body>
    <?php

      $count=0;
      $arr1 = [
        
        '0' => 'Abel',
        '1' => 'Hernandez',
        '2' => 'Valentin',
        '3' => '2-12-2005',
        '4' => '12345678c',
        '5' => 'Abel2',
        '6' => 'Hernandez2',
        '7' => 'Valentin2',
        '8' => '11-11-2005',
        '9' => '12345678A'
    ];

        echo "<table>
                <thead> 
                    <tr>
                        <th>Nom</th>
                        <th>Primer Cognom</th>
                        <th>Segon Cognom</th>
                        <th>Data naix</th>
                        <th>DNI</th>
                    </tr>
                </thead>";
                
            foreach ($arr1 as $element)
            {
                if( $count==0)
                {
                    echo "<tr>";
                }
                if ($count <=4)
                {
                    echo "<td>". $element . "</td>";
                    $count++;
                }
                if ($count == 5)
                {
                    $count=0;
                    echo "</tr>";
                }   
            } 
              
            echo "</table>
            <br>";

    ?>
    </body>
    </html>
   