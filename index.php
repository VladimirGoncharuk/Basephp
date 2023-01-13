<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Таблицы php</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="Enter your description here" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
$a0 = 0;
$b0 = 0;
$a1 = 1;
$b1 = 1;
?>
  <div class="container">
  <table class="table table-striped table-hover caption-top">
  <caption class="text-center fs-2"> Таблица истинности PHP</caption>
    <thead class="table-dark">
      <tr>
        <th scope="col">A</th>
        <th scope="col">B</th>
        <th scope="col">!A</th>
        <th scope="col">A||B</th>
        <th scope="col">A&&B</th>
        <th scope="col">AxorB</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo $a0; ?></th>
        <th scope="row"><?php echo $b0; ?></th>
        <td><?php var_export(!$a0); ?></td>
        <td><?php var_export($a0 || $b0); ?></td>
        <td><?php var_export($a0 && $b0); ?></td>
        <td><?php var_export($a0 xor $b0); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $a0; ?></th>
        <th scope="row"><?php echo $b1; ?></th>
        <td><?php var_export(!$a0); ?></td>
        <td><?php var_export($a0 || $b1); ?></td>
        <td><?php var_export($a0 && $b1); ?></td>
        <td><?php var_export($a0 xor $b1); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $a1; ?></th>
        <th scope="row"><?php echo $b0; ?></th>
        <td><?php var_export(!$a1); ?></td>
        <td><?php var_export($a1 || $b0); ?></td>
        <td><?php var_export($a1 && $b0); ?></td>
        <td><?php var_export($a1 xor $b0); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $a1; ?></th>
        <th scope="row"><?php echo $b1; ?></th>
        <td><?php var_export(!$a1); ?></td>
        <td><?php var_export($a1 || $b1); ?></td>
        <td><?php var_export($a1 && $b1); ?></td>
        <td><?php var_export($a1 xor $b1); ?></td>

      </tr>
    </tbody>
  </table>
  </div>  
  <?php
  $c1 = true;
  $c2 = false;
  $c3= 1;
  $c4= 0;
  $c5 = -1 ;
  $c6 ="1";
  $c7 = null;
  $c8 = "php";
  ?>
  <div class="container">
  <table class="table table-striped table-hover caption-top">
  <caption class="text-center fs-2"> Гибкое сравнение в PHP</caption>
    <thead class="table-dark">
      <tr>
       <th scope="col"></th>
        <th scope="col">true</th>
        <th scope="col">false</th>
        <th scope="col">1</th>
        <th scope="col">0</th>
        <th scope="col">-1</th>
        <th scope="col">"1"</th>
        <th scope="col">null</th>
        <th scope="col">"php"</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo "true"; ?></th>
        
        <td><?php var_export($c1==$c1); ?></td>
        <td><?php var_export($c1==$c2); ?></td>
        <td><?php var_export($c1==$c3); ?></td>
        <td><?php var_export($c1==$c4); ?></td>
        <td><?php var_export($c1==$c5); ?></td>
        <td><?php var_export($c1==$c6); ?></td>
        <td><?php var_export($c1==$c7); ?></td>
        <td><?php var_export($c1==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo "false"; ?></th>
        
        <td><?php var_export($c2==$c1); ?></td>
        <td><?php var_export($c2==$c2); ?></td>
        <td><?php var_export($c2==$c3); ?></td>
        <td><?php var_export($c2==$c4); ?></td>
        <td><?php var_export($c2==$c5); ?></td>
        <td><?php var_export($c2==$c6); ?></td>
        <td><?php var_export($c2==$c7); ?></td>
        <td><?php var_export($c2==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c3; ?></th>
        
        <td><?php var_export($c3==$c1); ?></td>
        <td><?php var_export($c3==$c2); ?></td>
        <td><?php var_export($c3==$c3); ?></td>
        <td><?php var_export($c3==$c4); ?></td>
        <td><?php var_export($c3==$c5); ?></td>
        <td><?php var_export($c3==$c6); ?></td>
        <td><?php var_export($c3==$c7); ?></td>
        <td><?php var_export($c3==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c4; ?></th>
        
        <td><?php var_export($c4==$c1); ?></td>
        <td><?php var_export($c4==$c2); ?></td>
        <td><?php var_export($c4==$c3); ?></td>
        <td><?php var_export($c4==$c4); ?></td>
        <td><?php var_export($c4==$c5); ?></td>
        <td><?php var_export($c4==$c6); ?></td>
        <td><?php var_export($c4==$c7); ?></td>
        <td><?php var_export($c4==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c5; ?></th>
        
        <td><?php var_export($c5==$c1); ?></td>
        <td><?php var_export($c5==$c2); ?></td>
        <td><?php var_export($c5==$c3); ?></td>
        <td><?php var_export($c5==$c4); ?></td>
        <td><?php var_export($c5==$c5); ?></td>
        <td><?php var_export($c5==$c6); ?></td>
        <td><?php var_export($c5==$c7); ?></td>
        <td><?php var_export($c5==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo '"1"'; ?></th>
        
        <td><?php var_export($c6==$c1); ?></td>
        <td><?php var_export($c6==$c2); ?></td>
        <td><?php var_export($c6==$c3); ?></td>
        <td><?php var_export($c6==$c4); ?></td>
        <td><?php var_export($c6==$c5); ?></td>
        <td><?php var_export($c6==$c6); ?></td>
        <td><?php var_export($c6==$c7); ?></td>
        <td><?php var_export($c6==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo "null"; ?></th>
        
        <td><?php var_export($c7==$c1); ?></td>
        <td><?php var_export($c7==$c2); ?></td>
        <td><?php var_export($c7==$c3); ?></td>
        <td><?php var_export($c7==$c4); ?></td>
        <td><?php var_export($c7==$c5); ?></td>
        <td><?php var_export($c7==$c6); ?></td>
        <td><?php var_export($c7==$c7); ?></td>
        <td><?php var_export($c7==$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c8; ?></th>
        
        <td><?php var_export($c8==$c1); ?></td>
        <td><?php var_export($c8==$c2); ?></td>
        <td><?php var_export($c8==$c3); ?></td>
        <td><?php var_export($c8==$c4); ?></td>
        <td><?php var_export($c8==$c5); ?></td>
        <td><?php var_export($c8==$c6); ?></td>
        <td><?php var_export($c8==$c7); ?></td>
        <td><?php var_export($c8==$c8); ?></td>

      </tr>
    </tbody>
  </table>
  </div>
  
  <div class="container">
  <table class="table table-striped table-hover caption-top">
  <caption class="text-center fs-2"> Жёсткое сравнение в PHP</caption>
    <thead class="table-dark">
      <tr>
        <th scope="col"></th>
        <th scope="col">true</th>
        <th scope="col">false</th>
        <th scope="col">1</th>
        <th scope="col">0</th>
        <th scope="col">-1</th>
        <th scope="col">"1"</th>
        <th scope="col">null</th>
        <th scope="col">"php"</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"><?php echo "true"; ?></th>
        
        <td><?php var_export($c1===$c1); ?></td>
        <td><?php var_export($c1===$c2); ?></td>
        <td><?php var_export($c1===$c3); ?></td>
        <td><?php var_export($c1===$c4); ?></td>
        <td><?php var_export($c1===$c5); ?></td>
        <td><?php var_export($c1===$c6); ?></td>
        <td><?php var_export($c1===$c7); ?></td>
        <td><?php var_export($c1===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo "false"; ?></th>
        
        <td><?php var_export($c2===$c1); ?></td>
        <td><?php var_export($c2===$c2); ?></td>
        <td><?php var_export($c2===$c3); ?></td>
        <td><?php var_export($c2===$c4); ?></td>
        <td><?php var_export($c2===$c5); ?></td>
        <td><?php var_export($c2===$c6); ?></td>
        <td><?php var_export($c2===$c7); ?></td>
        <td><?php var_export($c2===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c3; ?></th>
        
        <td><?php var_export($c3===$c1); ?></td>
        <td><?php var_export($c3===$c2); ?></td>
        <td><?php var_export($c3===$c3); ?></td>
        <td><?php var_export($c3===$c4); ?></td>
        <td><?php var_export($c3===$c5); ?></td>
        <td><?php var_export($c3===$c6); ?></td>
        <td><?php var_export($c3===$c7); ?></td>
        <td><?php var_export($c3===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c4; ?></th>
        
        <td><?php var_export($c4===$c1); ?></td>
        <td><?php var_export($c4===$c2); ?></td>
        <td><?php var_export($c4===$c3); ?></td>
        <td><?php var_export($c4===$c4); ?></td>
        <td><?php var_export($c4===$c5); ?></td>
        <td><?php var_export($c4===$c6); ?></td>
        <td><?php var_export($c4===$c7); ?></td>
        <td><?php var_export($c4===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c5; ?></th>
        
        <td><?php var_export($c5===$c1); ?></td>
        <td><?php var_export($c5===$c2); ?></td>
        <td><?php var_export($c5===$c3); ?></td>
        <td><?php var_export($c5===$c4); ?></td>
        <td><?php var_export($c5===$c5); ?></td>
        <td><?php var_export($c5===$c6); ?></td>
        <td><?php var_export($c5===$c7); ?></td>
        <td><?php var_export($c5===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo '"1"'; ?></th>
        
        <td><?php var_export($c6===$c1); ?></td>
        <td><?php var_export($c6===$c2); ?></td>
        <td><?php var_export($c6===$c3); ?></td>
        <td><?php var_export($c6===$c4); ?></td>
        <td><?php var_export($c6===$c5); ?></td>
        <td><?php var_export($c6===$c6); ?></td>
        <td><?php var_export($c6===$c7); ?></td>
        <td><?php var_export($c6===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo "null"; ?></th>
        
        <td><?php var_export($c7===$c1); ?></td>
        <td><?php var_export($c7===$c2); ?></td>
        <td><?php var_export($c7===$c3); ?></td>
        <td><?php var_export($c7===$c4); ?></td>
        <td><?php var_export($c7===$c5); ?></td>
        <td><?php var_export($c7===$c6); ?></td>
        <td><?php var_export($c7===$c7); ?></td>
        <td><?php var_export($c7===$c8); ?></td>

      </tr>
      <tr>
        <th scope="row"><?php echo $c8; ?></th>
        
        <td><?php var_export($c8===$c1); ?></td>
        <td><?php var_export($c8===$c2); ?></td>
        <td><?php var_export($c8===$c3); ?></td>
        <td><?php var_export($c8===$c4); ?></td>
        <td><?php var_export($c8===$c5); ?></td>
        <td><?php var_export($c8===$c6); ?></td>
        <td><?php var_export($c8===$c7); ?></td>
        <td><?php var_export($c8===$c8); ?></td>

      </tr>
    </tbody>
  </table>
  </div>
  <div class="container text-center fs-3">
    <p > <strong>Гибкое сравнение в PHP</strong>. Значения сравниваются  после преобразования <strong>типов</strong>.
    <strong>Жёсткое сравнение в PHP</strong>. Сравниваются и <strong>тип</strong>, и <strong>значение</strong>.
  </p>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>