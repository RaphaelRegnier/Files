<?php
$employes = [
     [
        'prenom'=> 'Jacques',
        'age'=> 42,
        'numero' => '514-643-6938'
        ],
    [
        'prenom'=> 'Pauline',
        'age'=> 63,
        'numero' => '450-928-3928'
        ],
    ];
    $employes[]['prenom']='Line';
    $employes[2]['age']=36;
    $employes[2]['numero']='514-398-4872';
    $employes[1]['numero']='450-653-0917';
   // echo '<pre>';print_r($employes);'</pre>';
    
    ?>
    
   <!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
  <div>
<table class='table table-bordered table-striped'>
    <thead>
    <tr> 
        <th> Prenom
        </th>
        <th> Age
        </th>
        <th> Numéro
        </th>
        <th> Emplacement
        </th>
    </tr>
    </thead>
    <tbody>
         <?php foreach ($employes as $employe) { ?>
            <tr>
                <td>
                <?php  echo $employe['prenom']; ?>
              </td>
              <td>
                <?php  echo $employe['age']; ?>
              </td>
              <td>
                <?php  echo $employe['numero']; ?>
              </td>
              <td>
                <?php  
                if(substr($employe['numero'],0,-9)=='514') { echo 'Montréal';
                } else {
                    echo 'Environs';
                }?>
              </td>
             </tr>
            <?php } ?>
            </div>
        
    </tbody>
    
</table>

 <div class='alert alert-info'>
       <?php $number=count($employes);?>
           <strong> Le nombre d'employés et de <?php echo $number;?> </strong>
       </div>
       
</body>

</html> 
   
