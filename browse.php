<?php
	include_once "function.php";
?>
<!-- browse categories -->

<div id='upload_result'>
    <?php 
        if(isset($_REQUEST['result']) && $_REQUEST['result']!=0)
        {		
            echo upload_error($_REQUEST['result']);
        }
    ?>
</div>
<br/><br/>

<!-- Query media - MOST VIEWS-->
<?php

    $query = "SELECT * from media where username != 'NULL' ORDER BY viewcount DESC"; 
    $result = mysql_query( $query );
    if (!$result){
       die ("Could not query the media table in the database: <br />". mysql_error());
    }

?>

<?php include('display_media.php');?>

<!-- Query media - NEWEST-->
<?php

    $query = "SELECT * from media where username != 'NULL' ORDER BY upload_time DESC"; 
    $result = mysql_query( $query );
    if (!$result){
       die ("Could not query the media table in the database: <br />". mysql_error());
    }

?>

<?php include('display_media.php');?>

