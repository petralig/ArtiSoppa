<?php
$host="localhost";
$username="petralig";
$password="petra123";
$dbname="petralig";

//$connect=mysql_connect($host,$username,$password);
//$db=mysql_select_db($databasename);

$DBH = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if(isset($_POST['user_comm']) && isset($_POST['user_name']))
{
  
    $data['viesti'] = $_POST['user_comm'];
    $data['kayttaja'] = $_POST['user_name'];
    $data['kuva'] = $_POST['image_id'];
    
    //$insert=mysql_query("insert into comments values('','$name','$comment',CURRENT_TIMESTAMP)");
    $insert=$DBH->prepare("INSERT INTO AS_Comments (Comment, Time, CUserID, CImageID) VALUES (:viesti, CURRENT_TIMESTAMP, :kayttaja, :kuva);");
    
    $insert->execute($data);
  
    //$id=mysql_insert_id($insert);
    $id=$DBH->lastInsertId($insert);

    //$select=mysql_query("select name,comment,post_time from comments where name='$name' and comment='$comment' and id='$id'");
    $select=$DBH->prepare("SELECT * FROM AS_Comments JOIN AS_User ON AS_User.UserID = AS_Comments.CUserID WHERE PostID = $id");
    $select->execute();
  
    //if($row=mysql_fetch_array($select))
    if($row=$select->fetchAll())
  {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['post_time'];
  ?>
      <div class="comment_div"> 
	    <p class="name">posted by:<?php echo $name;?></p>
        <p class="comment"><?php echo $comment;?></p>	
	    <p class="time"><?php echo $time;?></p>
	  </div>
  <?php
  }
exit;
}

?>