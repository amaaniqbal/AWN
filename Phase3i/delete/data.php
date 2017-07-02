<?php
    $link = mysqli_connect('localhost','root','','admin');
    if(mysqli_connect_error()) {
        die("There was an error connecting to the database");
    }

    $page = isset($_POST['p'])? $_POST['p'] : '';
    
    if($page == 'del'){
        $myid = $_POST['id'];
        $id1 = str_replace(' ', ',', $myid);
        echo $id1;
        //echo json_encode($id1);
        $query = "delete from admin where id in($id1)";
        $result = mysqli_query($link, $query);
        if($result){
            //echo "Success";
        } else{
            echo "Error";
        }
    } else{
        $var = (($_GET["pagination_page_value"]-1)*20);  
        $result = $link->query("SELECT id, article_id, publisher, heading, date, views FROM admin LIMIT 20 OFFSET ".$var);
        if ( false==$result ) {
            printf("error: %s\n", mysqli_error($link));
        }
        while($row = $result->fetch_assoc()){
            ?>
    <tr id="<?php echo $row['id'] ?>">
        <td><input type="checkbox" class="checkitem" value="<?php echo $row['id'] ?>"/></td>
        <td><a href="#"><?php echo $row['article_id'] ?></a></td>
        <td><?php echo $row['publisher'] ?></td>
        <td><?php echo $row['heading'] ?></td>
        <td style="min-width:88px"><?php echo $row['date'] ?></td>
        <td><?php echo $row['views'] ?></td>
    </tr>
            <?php
        }
    }
?>