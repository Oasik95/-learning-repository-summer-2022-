<!DOCTYPE html>
<html>
<head>
	
	<title>train</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<h2 class = "title" align="center">MANGE TRAIN TRIP</h2>
	<div class="search_trip">
	<form >
		
		
		
			<table align="center">
				<tr>
					<td>SEARCH TRIP</td>
					<td><input type="text"  name="SEARCH" value="" size="30" onkeyup="showResult(this.value)"></td>
				</tr>
				
			</table>
			
	</form>

</div>

	<table align="center">
<?php

header("Content-type: text/html");


?>

<div id="livesearch"></div>
<table align="center" border="2px" cellpadding="2px" cellspacing="4px">

<tr>

<th>SERIAL NO</th>

<th>LEAVING FROM</th>

<th>GOING TO</th>

<th>TIME</th>

<th>DATE</th>

<th>COST</th>

<th>Picture</th>

</tr>
<tbody id="liveb">

<?php

require_once('../model/trainlist.php');

global $get_page;
if(isset($_GET["page"]))
{
	$get_page = $_GET["page"];
}

if($get_page=="" || $get_page=="1")
{
	$target_page =1;
}
else
{
 $target_page=($get_page*3)-3;
}
 $result=traintriplist($target_page);
 if(mysqli_num_rows($result) > 0){
while ($row = mysqli_fetch_array($result)) {
	echo "<tr>";
	echo "<td>" . $row['serial'] . "</td>";
	echo "<td>" . $row['leaving_from'] . "</td>";
	echo "<td>" . $row['going_to'] . "</td>";
	echo "<td>" . $row['time'] . "</td>";
	echo "<td>" . $row['date'] . "</td>";
	echo "<td>" . $row['cost'] . "</td>";
	echo "<td><img src='" . $row['upload_location'] . "'alt=' not found' width='100' height='100'></td>";
	
	echo "</tr>";

}
mysqli_free_result($result);

 }

?>
</tbody>
	</table>
	<div  style ="background-color:white;width:300px;margin:0 auto;text-align:center;" >
	
<?php 
 $count=row_count();
 $i=$count/3;
 $page=ceil($i);
 for($target=1; $target<=$page;$target++)
 {
	echo " <a href='../view/train.php?page=$target'> $target</a>";
 }
 ?>	
 </div>

 
	<div class="add_new_trip">
	<form action="../controller/trainaddCheak.php" method="post" enctype="multipart/form-data"onsubmit="return validateadd()">

				<table align="center">
				<h2>ADD NEW TRIP<h2/>
					<tr>
						<td>LEAVING</td>
						<td><input type="text" id ="LEAVING" name="LEAVING" value=""></td>
					</tr>
					<tr>
						<td>GOING</td>
						<td><input type="text" id ="GOING" name="GOING" value=""></td>
					</tr>
					<tr>
						<td>TIME</td>
						<td><input type="text" id ="TIME" name="TIME" value=""></td>
					</tr>
					<tr>
						<td>DATE</td>
						<td><input type="text" id="DATE" name="DATE" value=""></td>
					</tr>
					<tr>
						<td>COST</td>
						<td><input type="text" id="COST" name="COST" value=""></td>
					</tr>
					<tr>
						<td>select Image</td>
						<td><input type="file" name="filename" value=""></td>
						
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="add_box" id="submit" name="" value="ADD"></td>
					</tr>									
				</table>
		</form>
        </div>
		<script>
            function validateadd(){
                let LEAVING = document.getElementById('LEAVING').value;
				let GOING = document.getElementById('GOING').value;
				let TIME = document.getElementById('TIME').value;
				let DATE = document.getElementById('DATE').value;
				let COST = document.getElementById('COST').value;

                if(LEAVING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(GOING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(TIME != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(DATE != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(COST != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
            }
        </script>
		</table>

		<div class="delet_trip">
	<form action="../controller/deletetrian.php" method="post" enctype="" onsubmit="return validatedelete()">
				<table align="center">
					<tr>
						<h2>DELET TRIP<h2/>
						<td>SERIAL</td>
						<td><input type="text" id="SERIAL" name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" class="delet_box" name="" id ="submit" value="DELET"></td>
					</tr>
				</table>
		</form>
		</div>
		<script>
            function validatedelete(){
                let SERIAL = document.getElementById('SERIAL').value;

                if(SERIAL != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
            }
        </script>
		<div class="update_trip">
		<form action="../controller/updatetrain.php" method="post" enctype="" onsubmit="return validateupdate()">

				<table align="center">
					<tr>
						<h2>UPDATE TRIP<h2/>
						<td>SERIAL</td>
						<td><input type="text" id="SERIAL_2" name="SERIAL" value=""></td>
					</tr>
					<tr>
						<td>LEAVING</td>
						<td><input type="text" id ="LEAVING_2" name="LEAVING" value=""></td>
					</tr>
					<tr>
						<td>GOING</td>
						<td><input type="text" id="GOING_2" name="GOING" value=""></td>
					</tr>
					<tr>
						<td>TIME</td>
						<td><input type="text" id="TIME_2" name="TIME" value=""></td>
					</tr>
					<tr>
						<td>DATE</td>
						<td><input type="text" id="DATE_2" name="DATE" value=""></td>
					</tr>
					<tr>
						<td>COST</td>
						<td><input type="text" id="COST2" name="COST" value=""></td>
					</tr>
					<tr>
					<tr>
						<td></td>
						<td><input type="submit" class="update_box" id="submit" name="" value="UPDATE"></td>
					</tr>
				</table>

		

		</form>
		</div>
		<script>
            function validateupdate(){
				let SERIAL = document.getElementById('SERIAL_2').value;
                let LEAVING = document.getElementById('LEAVING_2').value;
				let GOING = document.getElementById('GOING_2').value;
				let TIME = document.getElementById('TIME_2').value;
				let DATE = document.getElementById('DATE_2').value;
				let COST = document.getElementById('COST2').value;

                if(SERIAL != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }

                if(LEAVING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(GOING != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(TIME != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(DATE != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
				if(COST != ""){
                    return true;
                }else{
                    alert('INVALIDE INFORMATION');
                    return false;
                }
            }
        </script>
		
 <br>

		<script>
			function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","../controller/searchtrain.php?SEARCH="+str,true);
  xmlhttp.send();
}
function showDistance() {
	let LEAVING_FROM = document.getElementById('FROM').value;
    let GOING_TO = document.getElementById('TO').value;

  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("Distance").innerHTML=this.responseText;
      document.getElementById("Distance").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","../controller/distance.php?FROM="+LEAVING_FROM+"&TO="+GOING_TO,true);
  xmlhttp.send();
}
			 </script>


<div class="update_trip">
<form action="../controller/distance.php" method="post" >
<table align="center">
<h2>VIEW DISTANCE<h2/>
	<tr>
		<td>FROM</td>
		<td><input type="text" id="FROM" name="FROM" value=""></td>
	</tr>
	<tr>
		<td>TO</td>
		<td><input type="text" id="TO" name="TO" value=""></td>
	</tr>
	<tr>
		<td>DISTANCE :</td>
		<td><div id="Distance"></div></td>
	</tr>
	
	<tr>
		<td></td>
		<td><input type="button" class="add_box" name="" id="submit" value="CALCULATE" onclick="showDistance()"/></td> 
	</tr>
</table>
</form>
</div>
<div class="color">
 <a href="../view/travelhome.html"> Back to home </a>
		</div>
</body>
</html>