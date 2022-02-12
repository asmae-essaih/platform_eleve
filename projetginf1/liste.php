<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'ensat') or die("Impossible de se connecter à la base de données");
$s = "select * from eleve";
$result = mysqli_query($connect, $s);

?>

<!DOCTYPE html>
<html>

<body>

   <h1> LISTE DES ELEVES </h1>

   <table align="center" border="">
      <tr>
         <td> NOM </td>
         <td> PRENOM </td>
         <td> FILIERE </td>
         <td> Image </td>
      </tr>
      <?php
      session_start();
      while ($rows = mysqli_fetch_assoc($result)) {
      ?>
         <tr>
            <td><?php echo $rows['nom']; ?></td>
            <td><?php echo $rows['prenom']; ?></td>
            <td><?php echo $rows['filiere']; ?></td>
            <td><img src=<?php echo "uploads/" . $rows['image']; ?> alt="picture" height="100" width="100"></td>

         </tr>
      <?php
      }
      ?>


   </table>
   <table>
      <tr>
         <td>
            <button><a href='ajouter.php'>AJOUTER</a></button>
         </td>
      </tr>
      <tr>
         <td>
            <button><a href="deconnexion.php">DECONNEXION</a></button>
         </td>
      </tr>
   </table>

</body>

</html>