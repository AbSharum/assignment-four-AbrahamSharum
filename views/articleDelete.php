
<div class="container text-bg-dark m-3">
    
    <h3>Delete Article Form</h3>
    <p class="lead">Select to confirm the removal of an existing article from the database.</p>
    <h5><?php 
    $_SESSION['currentPage'] = $_GET['action'];
    echo $data->getArticleID()." ".$data->getTitle()?></h5>

  <form action="start.php?action=articleDelete" method="POST">
    <div class="form-group p-2">
        <input type="hidden" name="articleID" value="<?php echo $data->getArticleID(); ?>">
        <input type="submit" name="submit" value="Confirm" class="btn btn-dark">
        <input type="submit" name="submit" value="Cancel" class="btn btn-dark">
    </div>
  </form>
</div>