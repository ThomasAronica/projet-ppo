<?php  include("connexion.php") ; ?>
<html><body>
<?php
// $NbreData : le nombre de données à afficher
// $NbrLigne : le nombre de lignes
// $NbrCol : calcul automatique
// -------------------------------------------------------
// (exemple)
$NbrLigne = 4;
// requete
$table = 'MATABLE';
$query = 'SELECT * FROM '.$table.$condition;
$result = mysql_query($query);
// -------------------------------------------------------
$NbreData = mysql_num_rows($result);
// ------------------------------------------------------- 
// creation d'un tableau array() par donnees
$k=0;
while ($val = mysql_fetch_array($result)) {
   $tableau1[$k] = $val['DONNEE'];
   $tableau2[$k] = $val['TYPE'];
   $k++;
}
// -------------------------------------------------------
// affichage
if ($NbreData != 0) {
$i = 0;
$NbrCol = 0;
echo '<table border="1">';
   for ($i=0; $i<$NbrLigne; $i++) {
      echo '<tr>';
      $j = 0;
      while (($i+($j*$NbrLigne))%$NbrLigne==$i && ($i+($j*$NbrLigne))<$NbreData) {
         echo '<td>';
          // --------------------------------------
          // AFFICHAGE de l'element
         $k = ($i+($j*$NbrLigne));
         echo $tableau1[$k];
         echo '<br>';
         echo '<i>'.$tableau2[$k].'</i>';
          // --------------------------------------
         echo '</td>';
         $j++;
         if ($NbrCol<$j) { $NbrCol=$j; }
      }
      echo '</tr>';
   }
echo '</table>';
} else {
echo 'pas de données à afficher';
}
?>
</body></html>
<?php
mysql_close(); 
?> 