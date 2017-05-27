<?php
$etudiants = [
    'Maha'=> [
        'matricule'=> '11165432',
        'cheveux'=> 'brune',
        'taille' => '1,60m'
        ],
    'Yann'=> [
        'matricule'=> '11123432',
        'cheveux'=> 'chauve',
        'taille' => '1,80m'
        ],
    'Raph'=> [
        'matricule'=> '11157432',
        'cheveux'=> 'blond',
        'taille' => '1,87m'
        ],
    ];
    
     echo $etudiants['Maha']['cheveux'];
 
 echo $etudiants['Raph']['taille'];
 
// foreach($etudiants as $prénom => $info){ 
    // foreach ($info as $etc) { 
     //   echo $etc;
   //  }
    //  }
?>



<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>
    <style type="text/css">
        th{border: 1px solid black;
        }
        
         td{border: 1px solid black;
        }
         ul{border: 1px solid black;
        }
    </style>
</head>

<body>
<table>
    <thead>
        <tr> 
       <?php foreach ($etudiants as $prénom=>$info) { ?>
       <th>
           <?php echo $prénom; ?>
       </th>
       <?php } ?> 
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
               <?php echo $etudiants['Maha']['cheveux'];?>
            </td>
            <td>
            <?php echo $etudiants['Yann']['cheveux'];?>
            </td>
        </tr>
    </tbody>
    <ul>
            <li>
               <?php echo $etudiants['Maha']['cheveux'];?>
            </li>
            <li>
            <?php echo $etudiants['Yann']['cheveux'];?>
            </li>
        </ul>
</table>




</body>

</html>