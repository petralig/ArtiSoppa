<html>
<head>
<link rel="stylesheet" type="text/css" href="comment_style.css">
<!-- <script type="text/javascript" src="jquery.js"> -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js">
<script type="text/javascript">

function post()
{
  var comment = document.getElementById("comment").value;
  var name = document.getElementById("username").value;
  if(comment && name)
  {
    $.ajax
    ({
      type: 'post',
      url: 'post_comments.php',
      data: 
      {
         user_comm:comment,
	     user_name:name
      },
      success: function(response) 
      {
	    document.getElementById("all_comments").innerHTML=response+document.getElementById("all_comments").innerHTML;
	    document.getElementById("comment").value="";
        document.getElementById("username").value="";
  
      }
    });
  }
  
  return false;
}
</script>

</head>

<body>


  <form method='post' action="" onsubmit="return post();">
  <textarea name="comment1" id="comment" placeholder="comment"></textarea>
  <br />
  <input name="name1" type="text" id="username" placeholder="name">
  <br />
  <input name="name1" type="text" id="username" placeholder="user ID">
  <br />
  <input type="submit" value="post comment">
  </form>

  <div id="all_comments">
  <?php
    $host="localhost";
    $username="petralig";
    $password="petra123";
    $dbname="petralig";

    //$connect=mysql_connect($host,$username,$password);
    //$db=mysql_select_db($databasename);
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    //$STH = $DBH->prepare("SELECT * FROM AS_User WHERE Email=:kayttaja AND
	//	Password = :passu"); 
    
    //$comm = mysql_query("select name,comment,post_time from comments order by post_time desc");
    
    $comm = $DBH->prepare("SELECT CUserID, Comment, Time FROM AS_Comments ORDER BY Time desc");
    $comm->execute();
    
    //while($row=mysql_fetch_array($comm))
    while($row=$comm->fetchAll())
    {
	  $name=$row['CUserID'];
	  $comment=$row['Comment'];
      $time=$row['Time'];
    ?>
	
	<div class="comment_div">
	  <p class="name">posted by:<?php echo $name;?></p>
      <p class="comment"><?php echo $comment;?></p>
	  <p class="time"><?php echo $time;?></p>
	</div>
  
    <?php
    }
    ?>
  </div>

</body>
</html>