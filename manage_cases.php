<?php

$host="localhost";

$user="root";

$password="";

$db="project";

$data=mysqli_connect($host,$user,$password,$db);

$sql="SELECT * FROM cases";

$result=mysqli_query($data,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Dashboard</title>

	<?php
	include 'admin_css.php'
	?>

    <style type="text/css">
    .table_th
    {
        padding: 20px;
        font-size: 20px;
    }
    .table_td
    {
        padding: 20px;
        font-size: 20px;
    }
    </style>
	
</head>
<body>

	<?php

	include 'admin_sidebar.php';

	?>
	
	<div class="content">
		<h1> This is manage cases!</h1>
	

    <table border="1px">
        <tr>
            <th class="table_th">Case Name</th>
            <th class="table_th">Station</th>
            <th class="table_th">Case Stating</th>
            <th class="table_th">Incident Date</th>
            <th class="table_th">Incident place</th>
            <th class="table_th">Description</th>
        </tr>

        <?php
        while($info=$result -> fetch_assoc())

        {
        ?>

        <tr>
            
            <td class="table_td">
                <?php echo "{$info['casesname']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['station']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['casestating']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['incidentdate']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['incidentplace']}"; ?>
            </td>
            <td class="table_td">
                <?php echo "{$info['description']}"; ?>
            </td>

        <?php

        }

        ?>
    </table>
    </div>

</body>
</html>
