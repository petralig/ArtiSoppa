<container>
    <aside id="gal_aside">
        <br /><br /><br /><br /><br />
                <figure id="gal_profilepic">
                    <figcaption><h3>username</h3></figcaption>
                    <img src="http://placekitten.com/130/130"/>
                </figure>

                <p># of posts: __</p>
                <p># of followers: __</p>
                <p>notifications</p><br/>
                <p>favorite users</p>
                <div class="trendingfresh">
                    <img src="http://placekitten.com/g/40/40" />
                    <img src="http://placekitten.com/g/40/40" />
                    <img src="http://placekitten.com/g/40/40" />
                    <img src="http://placekitten.com/g/40/40" />
                    <img src="http://placekitten.com/g/40/40" />
                    <img src="http://placekitten.com/g/40/40" />
        </div>

    </aside>

    <section id="gal_section">
        <ul>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
            <li>
                <figure>
                    <a href="http://placekitten.com/g/400/300"><img src="http://placekitten.com/g/400/300"></a>
                    <figcaption>
                        <h3>Title</h3>
                    </figcaption>
                    <p><a class="link" href="#">like</a> &#124; <a class="link" href="http://placekitten.com/g/1200/600">comment</a> &#124; # of likes</p>
                </figure>
            </li>
        </ul>
        
        
    <?php
        //session_start();
        $getimages = ("SELECT * FROM AS_Images WHERE ImageUserID = ".$_SESSION["name"]);

        $getimages->fetchAll();

        echo "<h1>gallery of ".$_SESSION["name"]."</h1>";
        echo "<table border='2' align='center'>
        <figure>
            <figcaption>image title</figcaption>
        </figure>";
        while($getimages->fetchAll()) {
            echo "<figure><img src='https://10.114.32.136/artisoppa_13.12/image_upload/uploads/'" .["ImagePath"]."</figure>";
        }
    ?>
        </section>
</container>

<!-- while($row=$comm->fetchAll()) -->



<?php /*
if(isset($_SESSION["uid"])) {
    echo "<a href=\"logout.php\">Logout</a><br />";
    echo "<a href=\"img_upload.php\">Image Upload</a><br />";
    $con=mysql_connect("localhost","vishakha_admin","vishakha");
    
    if(!$con) {
        die("An Error Occured".mysql_error());
    } else {
        mysql_select_db("vishakha",$con);
        $qry="SELECT * FROM images WHERE fk_uid=".$_SESSION["uid"]."";
        $result=mysql_query($qry);
        //$row=mysql_fetch_array($result);
        echo "<center><h1>Image Gallery for ".$_SESSION["name"]."</h1></center>";
        echo "<table border=\"2\" align=\"center\">
        <th>Image Title</th>
        <th>Image Description</th>
        <th>Image</th>";

        while($row=mysql_fetch_array($result)) {
            echo "<tr><td align=\"center\">".$row["img_title"]."</td>
            <td align=\"center\">".$row["img_desc"]."</td>
            <td align=\"center\"><img
            src=http://localhost/vishakha/user_gallery/uploads/".$row["img_filename"]." height=\"200\"
            width=\"200\"/></td></tr>";
        }
        echo "</table>";
    } else {
        echo "You are already Logged Out"."<br />";
        echo "Click To Login"."<br />"."<a href=\"login.php\">Login</a>"."<br />";
    }
*/ ?>