<html>
<head>
	<title>list</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>

</head>
<body>
	<?php require_once 'server.php'; ?>
    <div class="container">
	<?php  
         $mysqli = new mysqli('localhost','root','','blogs') or die(mysql_error($mysqli));
         $result3 = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
         //pre_r($result);
         // pre_r($result->fetch_assoc());
         ?>

        <div class="row justify-content-center">
        	<table class="table">
        		<thead>
        			<tr>
        				<th>Title</th>
        				<th>Category</th>
                        <th>Description</th>
                        
        				<th colspan="2">Action</th>
        			</tr>
        		</thead>
        <?php
          while($row =$result3->fetch_assoc()) : ?>
            <?php if($row['status']==0): ?>
        	<tr>
        		<td><?php echo $row['title']; ?></td>
        		<td><?php echo $row['category']; ?></td>
                <td><?php echo $row['description']; ?></td>
               
        		<td>
        			<a href="view.php?edit=<?php echo $row['id'];?>" class="btn btn-info">Edit</a>
        			<a href="editdel.php?delete= <?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                    <a href="<?php echo $row['id'];?>" class="btn btn-primary">View</a>
        		</td>
        	</tr>
            <?php endif; ?>

           <?php endwhile; ?>

        	</table>

        </div>



         <?php
             function pre_r( $array ){
             echo '<pre>';
             print_r($array);
             echo '</pre>';
     }
     ?>
</div>
</body>
</html>
