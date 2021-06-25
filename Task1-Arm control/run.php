<?php

include "conection.php";
if (isset($_POST['run'])) {
  ?>
</head>
<body>

<h2>Range Values</h2>

<table border="2">
  <tr>
    <td>Engine 1</td>
    <td>Engine 2</td>
    <td>Engine 3</td>
    <td>Engine 4</td>
    <td>Engine 5</td>
    <td>Engine 6</td>
    <td>Status</td>


  </tr>
<?php

  $on=1;

  
    $st = mysqli_query($db, "UPDATE `robot-arm` SET `Status`='$on' WHERE id='1'");


  $query ="SELECT * FROM `robot-arm`";
  $records = mysqli_query($db,$query)or die( mysqli_error($db)); // fetch data from database

  while($data = mysqli_fetch_array($records))
  {
  ?>
    <tr>
      <td><?php echo $data['Engine 1']; ?></td>
      <td><?php echo $data['Engine 2']; ?></td>
      <td><?php echo $data['Engine 3']; ?></td>
      <td><?php echo $data['Engine 4']; ?></td>
      <td><?php echo $data['Engine 5']; ?></td>
      <td><?php echo $data['Engine 6']; ?></td>
      <td><?php echo $data['Status']; ?></td>

    </tr>
  <?php
}}
  ?>
  </table>
  <?php mysqli_close($db); // Close connection ?>
  </body>
  </html>
