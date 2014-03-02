<?php
//ligação à BD
include('con_db.php');
//procurar categorias disponiveis
$sql_cat="SELECT * FROM categories ORDER BY name_categorie ASC";
$consultation =mysql_query($sql_cat);
//apresentar categorias disponiveis
while($show=mysql_fetch_array($consultation)){
$name_categorie=$show['name_categorie'];
$id_categorie=$show['id_categorie'];
echo "<p><a href=\"articles_categorie.php?id_categorie\">$name_categorie</a>";
}
?>

