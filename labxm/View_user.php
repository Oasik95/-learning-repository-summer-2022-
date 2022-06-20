<?php 

    $lines = file("user.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $data = array_map(function($v){
        list($username, $Email) = explode(":", $v);
        return ["username" => $username, "Email" => $Email];
    }, $lines);

    usort($data, function($a, $b){
        if($a["Email"] == $b["Email"])
            return 0;
        return $a["Email"] > $b["Email"] ? 1 : -1;
    });
?>

<!DOCTYPE html>
<html>
<head>
<table width="200" border="1">
    <tr>
        <td width="85">User Name</td>
        <td width="99">Email</td>
		
    </tr>
<?php foreach($data as $user){ ?>
    <tr>
        <td height="119"><?php print_r($data); ?></td>
        <td><?php echo $user["Email"]; ?></td>
        
    </tr>
	<tr>
	
	<td><a href="A_home.php"> Go Home </a></td>	
	<td></td>
    </th>	
<?php } ?>
</table>
</body>
</html>