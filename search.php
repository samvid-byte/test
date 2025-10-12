<?php
//establish connection to mysql database
$con=mysql_connect("localhost","root","");
if(!$con)
{
die("Could not connect to database:" .mysqli_connect_error());
}

mysql_select_db("sans",$con);
//execute select query
$result=mysql_query("SELECT * FROM `dictionary` WHERE main_word='$_POST[t1]'", $con);
// check for errors in query
if(!$result){
echo "Query Error:" .mysql_error();
}
else{
//get number of rows
$num_rows=mysql_numrows($result);
//echo "Number of rows:".$num_rows."<br>";
if($num_rows>=1){
echo"<p><center><strong><u>RESULT</u></strong></center></p>";
echo "<table border='1'><tr>";
echo "<th>Main Word</th>";
echo "<th>Sanskrit Word</th>";
echo "<th>English Word</th>";
echo "<th>Comment</th></tr>";
while($rows=mysql_fetch_array($result))
{
echo "<td>".$rows[0]."</td>";
echo "<td>".$rows[1]."</td>";
echo "<td>".$rows[2]."</td>";
echo "<td>".$rows[3]."</td></tr>";
}
}
else{echo"<p style='color:red; font-size:30px';>"."N.B. - Data not found"."</p>";}
}
mysql_close($con);
echo "</table>";
?>