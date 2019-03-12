<html>
<head>
	<title>blog</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <?php require_once 'server.php'; ?>
	
    <div class="container">
	<?php  
         $mysqli = new mysqli('localhost','root','','blogs') or die(mysql_error($mysqli));
         $result = $mysqli->query("SELECT * FROM data ") or die($mysqli->error);
         $result1 = $mysqli->query("SELECT * FROM comment ") or die($mysqli->error);
         //pre_r($result);
         // pre_r($result->fetch_assoc());
         ?>
    <div class="row">
       <?php
          $row =$result->fetch_assoc(); ?>
                 <div>
                <h1>Title :<?php echo $row['title']; ?></h1>
                <h3>Category :<?php echo $row['category']; ?></h3>
                <br>
                <p>Description:<?php echo $row['description']; ?></p>
                <form method="POST" action="commentview.php">
                <h6>Comment Section:</h6>
                <div class="form-group">
                <textarea  rows="3" cols="10" name="comment" class="form control commentsec" placeholder="Enter comment"></textarea>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" name="comment1">comment</button>
                </div>

                
                <?php  while($row =$result1->fetch_assoc()): ?>
                  <p><?php echo $row['comment']; ?></p>  
                <?php endwhile; ?>
                </form>
                
                
                
                </div>
         <div> 
         
    </div>
    </div>
    </div>
    </body>
    </html>
