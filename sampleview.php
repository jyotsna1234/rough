
<?php
/*<font color="<?=$color?>">
<?=$name?></font>*/ 
ini_set('display_error',1);
foreach($query as $row)
{
	print $row->id;
	print "<br>";
}
 
?>