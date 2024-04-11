
<div class="container text-bg-dark m-3">
    <h3>Update Article Form</h3>
    <p class="lead">Use the following form to modify information for an existing article in the database.</p>

  <form action="start.php?action=articleUpdate" method="POST">
    <div class="form-group p-2">
      <input type="hidden" name="articleID" value="<?php echo $data->getArticleID(); ?>">
      <label for="username">Title:</label>
      <input type="text" class="form-control" id="title" name="title" value="<?php echo $data->getTitle(); ?>">
    </div>
    <div class="form-group p-2">
      <label for="lastname">Img Path (Example: myImage.jpg):</label>
      <input type="text" class="form-control" id="imgPath" name="imgPath" value="<?php echo $data->getImgPath(); ?>">
    </div>
    <div class="form-group p-2">
      <label for="firstname">Content (Limit: 126 Characters)</label>
      <input type="text" class="form-control" id="content" name="content" value="<?php echo $data->getContent(); ?>">
    </div>
    <div class="form-group p-2">
        <button type="submit" name="submit" value="Confirm" class="btn btn-dark">Save Changes</button>
        <button type="submit" name="submit" value="Cancel" class="btn btn-dark">Cancel</button>
    </div>
  </form>
</div>