<html>
<head>
<title>Indian cricket players</title>
<style>
table{
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td{
padding:10px;
text-align:center;
border:1px solid black;
}
th{
background-color:lightgrey;
}
</style>
</head>
<body>
<h2 style="text-align:center;">list of indian cricket players</h2>
<?php
$players=array(
"virat kohli",
"rohit sharma",
"sachin tendulkar",
"MS dhoni",
"K L rahul",
"jadeja",
"bhuvaneshwar kumar",
"ishant sharma"
);
echo "<table>";
echo"<tr><th>s.no</th><th>player name</th></tr>";
foreach ($players as $x=>$player){
echo "<tr><td>".($x+1)."</td><td>".$player."</td></tr>";
}
echo "</table>";
?>
</body>
</html>



