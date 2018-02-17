<!DOCTYPE html>
<html lang="en">
<?php include $GLOBALS['application']->getURIHtml()."head.php"?>

<body>
    <?php include $GLOBALS['application']->getURIHtml()."noscript.html"?>
    <?php include $GLOBALS['application']->getURIHtml()."header_middle.php"?> 

    <?php $client = $GLOBALS['account']->getPerson();?>

    <div class="container">
  <h2>Datos Personales</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>document</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $client->getDocument()?></td>
        <td><?php echo $client->getName()?></td>
        <td><?php echo $client->getLastName()?></td>
        <td><?php echo $client->getAddress()?></td>
        <td><?php echo $client->getEmail()?></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="container">
  <h2>Mi Caja de Herramientas</h2>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
</div>



    <?php include $GLOBALS['application']->getURIHtml().'footer.php'?>
    <?php include $GLOBALS['application']->getURIHtml().'script.php'?>
</body>
</html>