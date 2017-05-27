<?php 

$matricule=44;
$age=22;

if (($matricule % $age ) === 0) {
    $divisible=true;
} else { 
    $divisible=false;
}

##var_dump($divisible);
?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Document</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>

<?php 

if ($divisible==true) { ?>
<div class="alert alert-success">
<strong>Mon matricule est parfaitement divisible par mon âge!</strong> 
</div>
<?php } else { ?>
<div class="alert alert-warning">
<strong>Mon matricule n'est pas parfaitement divisible par mon âge!</strong> 
</div>
<?php }  ?>


</body>

</html>
