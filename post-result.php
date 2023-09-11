<?php
$pageTitle = "Post";
include "view-header.php";
?>
 <h1>Post Result</h1>
<?php
if(isset($_POST['my-name'])){
  <p>The value sent is:</p>
<?php
} else{
?>
  <p>Nothing posted to the page.</p>
<?php
}
include "view-footer.php";
?>
