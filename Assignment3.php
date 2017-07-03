<!DOCTYPE html>
<html>
<body>

<title>
    Checkerboard For-Loop
</title>

<table border = "1px" width = "300px" cellpadding = "1px" cellspacing = "1px">;



<?php



$numberofrows = 7;
$numberofcolumns = 7;


for ($index = 0; $index <= $numberofrows; $index++)
{
  echo "<tr> </tr>";
  
  
  for($j = 0; $j <= $numberofcolumns; $j++ )
  {
	  echo "<td> </td>";
	  
	  if (($j % 2) != ($index % 2))
	  {
		  echo "<td width = 35px height = 35px bgcolor = black> </td>";
	  }
	  
	  else if (($index %2) == ($j % 2))
	  {
		  echo "<td width = 35px height = 35px bgcolor = red> </td>";
		  
	  }
	  
	  
  }
  
}



echo "</table>";

?>


</body>
</html>