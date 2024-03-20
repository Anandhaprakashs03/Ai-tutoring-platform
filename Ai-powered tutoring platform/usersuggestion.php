
<?php
    session_start();
    
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="styleusersuggestion">
<center><h1>Reviews</h1></center><hr>

<?php
$i=0;
if($_SERVER['REQUEST_METHOD']=="GET"){
$localhost = "localhost";
$usernamew = "root";
$passwordw = "";
$db = "ai-powerrd tutorial platform";
$conn = mysqli_connect($localhost,$usernamew,$passwordw,$db);
if(!$conn){
echo "Connection error";
}
else{
echo "";
$fname=$_SESSION["username"];
$result=mysqli_query($conn,"select * from reviewtable where username='$fname'")
				or die("FAILED!!".mysqli_error($conn));
	        $i=0;
echo "<table class='cont-head'>";
echo "<tr >";
echo "<td>Sr</td><td>Comment</td><td>Time of Review</td>"; 
echo "</td>";
echo "</tr>";
echo "</table><hr>";
echo "<table class='cont table table-hover table-dark'>";
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
    $i++;
    echo "<tr>";
     echo  "<td>".$i."</td> <td>".$row['comment']."</td><td>".$row['time']."</td>";
    echo "</tr>";
}
echo "</table>";
echo "<span class='badge'>$i</span>";
}
else{
echo "0 results";
}
}
}
?>