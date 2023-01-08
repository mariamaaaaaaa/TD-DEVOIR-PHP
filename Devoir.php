<?php
//EXERCICE 1
//Les variables qui ont un nom valide sont:
$mavar;
$var5;
$_mavar;
$_5var;
$__élément1;

//Exercice2
$n=18;
if(($n%3 ==0 and $n%5==0 )){
	echo "le nombre est à la fois multiple de 3 et 5";
}
//je verifie ces condition ci-dessous car l'utilisateur peu saisir un nombre qui est multiple de 3 et non de 5 ou bien un nombre qui est multiple de 5 et non de 3, si aucun des deux conditions (elseif) n'est vérifié le programme lui renvoie que le nombre n'est ni multiple de 3 et de 5
elseif($n%3==0 and $n%5 !=0){
    echo "le nombre est multiple de 3 et non de 5";

}
elseif($n%5==0 and $n%3!=0){
    echo "le nombre est multiple de 5 et non de 3";

}
else{
	echo "le nombre n'est pas multiple de 3 et de 5";
}

//Exercice3
$n=123;
$i=1;
$x=0;
//Avec la boucle  while
while($x!=$n){
$x=rand(0,1000);
$i++;
}
echo "le nombre de coup réalisé est de $i coups ";

//Avec une boucle for
$n=123;
$x=0;
for($i=1;$x!=$n;$i++){
$x=rand(0,1000);
}
echo "le nombre de coup réalisé est de $i coups";

//Exercice4
$a=400;
$b=10;

    $res = $a * $b;
    while($a > 1){
        $r = $a % $b;
    if($r == 0 ){
      $result = $res / $b;
        break; 
             }
        $a = $b;
        $b = $r;
    }
    echo "Le ppcm est $result";

//Exercice5
$pi=3.14;
$r=5;
//perimetre cercle = 2 * pi * r
//diametre cercle = perimetre /pi
//surface cercle = r * r * pi
$perimetre= 2 * $pi * $r;
$diametre= $perimetre / $pi;
$surface= $r * $r * $pi;
echo   "<p>" ."Le périmètre du cercle est de " , $perimetre . "</p>";
echo   "<p>" . "Le diamètre du cercle est de " , $diametre . "</p>";
echo  "<p>" . "La surface du cercle est de ", $surface . "</p>";

//Exercice6
$n=18;
for($i=1; $i<=$n;$i++){
    if($n%$i==0){
        echo "<p>". $i ," est un diviseur de ",$n ."</p>" ;
    }
}

//Exercice 7
//un nombre est parfait s'il est egal a la somme de ses diviseurs
$n=6;
$s=0;
for($i=1; $i<$n;$i++){
    if($n%$i==0){
        $s=$s+$i;
    }
    }
if($s==$n){
        echo " $n est un nombre parfait"; 
     }
else {
        echo "$n n'est pas un nombre parfait";  
            }

//Exercice 8
$tab=array("Diouf"=>array("maya","dakar",21),
"Ba"=>array("Kya","Casa",30),
"Fall"=>array("Diarra","Atlanta",25));
print_r($tab);

//Exercice 9
$tab=array("Diouf"=>array("prenom"=>"maya","ville"=>"Dakar","age"=>21),
"Ba"=>array("prenom"=>"Kya","ville"=>"Casa","age"=>30),
"Fall"=>array("prenom"=>"Diarra","ville"=>"Atlanta","age"=>25));
print_r($tab);

//Exercice 10
//Lecture tableau de l'exercice 8 avec la boucle foreach
$tab=array("Diouf"=>array("maya","Dakar",21),
 "Ba"=>array("Kya","Casa",30),
 "Fall"=>array("Diarra","Atlanta",25));
 foreach($tab as $cle=>$valeur){
 echo "Elément $cle : " ;
 foreach($valeur as $ind=>$val){
 echo "elément $ind :", $val, " ";
 }
 }
 //Lecture tableau de l'exercice 9 avec la boucle foreach
 $tab=array("Diouf"=>array("prenom"=>"maya","ville"=>"Dakar","age"=>21),
 "Ba"=>array("prenom"=>"Kya","ville"=>"Casa","age"=>30),
 "Fall"=>array("prenom"=>"Diarra","ville"=>"Atlanta","age"=>25));
foreach($tab as $cle=>$valeur){
 echo "Element $cle :";
 foreach($valeur as $cle2=>$val)
 {
 echo " $cle2 :", $val, "
 ";
 }
 }

 //Exercice 12
 <!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
<title>Formulaire </title>
</head>
<body>
<form action="test.php" method="post">
<fieldset>
<legend><b>Saisissez vos coordonnées </b></legend>
<table border="0" >
<tr>
<td>Nom : </td>
<td><input type="text" name="nom" /></td>
</tr>
<tr>
<td>Prénom : </td>
<td> <input type="text" name="prenom" /></td>
</tr>
<tr>
<td>Adresse : </td>
<td><input type="text" name="adresse" /></td>
</tr>
<tr>
<td>Ville :</td>
<td><input type="text" name="ville" /></td>
</tr>
<tr>
<td>Code postal :</td>
<td><input type="text" name="code" maxlength="5"/></td>
</tr>
<tr>
<td>CONFIRMER</td>
<td><input type="submit" value="ENVOI" /></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>

//Exercice 13

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formulaire</title>
</head>
<body>
<form action="/htdocs/codes/test.php" method="post">
  <fieldset>
    <legend><b>Saisissez le prix HT et le taux de TVA </b></legend>
	<table border="0"  >
		<tr>
			<td>Prix Hors Taxes : </td>
			<td><input type="text" name="prixht" value="" /></td>
		</tr>
		<tr>
			<td>Taux de TVA (en %) : </td>
			<td><input type="text" name="tva" value=""/></td>
		</tr>
		
			<td><input type="submit" value="ENVOI" /></td>
		</tr>
	</table>
  </fieldset>
  </form>
  
</body>
</html

//Exercice 14
<?php
switch($_POST["choix"])
{
case "Vendre":
header("location:pagevente.htm");
break;
case "Acheter":
header("location:pageachat.htm");
break;
case "Louer":
header("location:pagelocation.htm");
break;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Formulaire</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" >
<fieldset>
<legend><b>Faites votre choix </b></legend>
<table border="0" >
<tr>
<td><input type="submit" name="choix" value="Vendre" /></td>
<td><input type="submit" name="choix" value="Acheter"
/></td>
<td><input type="submit" name="choix" value="Louer" /></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> Page des vendeurs immobiliers </title>
</head>
<body>
<h1>Vous voulez vendre</h1>
<a href="javascript:window.history.back()">RETOUR</a>
</body>
</html>

//Exercice 15
<?php
//Définition de la fonction
function initmaj(&$tab)
{
foreach($tab as $ind=>$val)
{
$tab[$ind]=ucfirst(strtolower($val));
}
return $tab;
}
//Utilisation
$tabch= array("maya","InfrmatiQue","iam");
print_r(initmaj($tabch));
?>
 
//Exercice 16
<?php
//Définition de la fonction
function sinus($x,$unit)
{
switch($unit)
{
case "R":
case"r":
return sin($x);
break;
case "D":
case"d":
return sin($x/180*PI());
break;
case "G":
case"g":
return sin($x/200*PI());
break;
}
}
//Utilisation
echo sinus(PI()/6,R),"<br />";
echo sinus(60,d),"<br />";
echo sinus(100,g),"<br />";
?>
Résultats affichés :
0.5
0.866025403784
1

//Exercice 17
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Fonction de lecture de tableaux multidimensionnels</title>
</head>
<body>
<?php
//Définition de la fonction
function tabmulti($tab,$bord)
{
echo "<table border=\"$bord\" width=\"100%\"><tbody>";
foreach($tab as $cle=>$tab2)
{
echo "<tr><th>$cle</th> ";
foreach($tab2 as $ind=>$val)
{
echo "<td>$val </td>";
}
echo "</tr>";
}
echo "</tbody> </table>";
}
//Définition des tableaux
$tab1 =
array("SENEGAL"=>array("Dakar","Diourbel","Touba","Tamba","Saint louis"),
"France"=>array("La defense","Lyon","nice","angers","dijon"
),
"Espagne"=>array("Madrid","Bilbao","Grenade","Barcelone","Séville")
);
//Appel de la fonction
tabmulti($tab1,1);
?>
</body>
</html>

//Exercice18
    echo 1;
    echo "<p>" . 22 . "</p>";
    echo "<p>" . 333 . "</p>";
    echo "<p>" . 4444 . "</p>";
    echo "<p>" . 55555 . "</p>";
    echo "<p>" . 666666 . "</p>";
    echo "<p>" . 7777777 . "</p>";
    echo "<p>" . 88888888 . "</p>";
    echo "<p>" . 999999999 . "</p>";
    echo  ("10101010101010101010") ;


  




?>