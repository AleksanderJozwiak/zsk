<?php
  // print_r($_POST);
  if (!empty($_POST['name']) && !empty($_POST['figure'])) {
  switch ($_POST['figure']) {
    case 'kwadrat':
        header('location: square.php');
      break;
    case 'prostokat':
        echo 'prostokat';
      break;
  }
  }else {
    ?>
    <script>
      history.back();
    </script>
    <?php
  }
 ?>
