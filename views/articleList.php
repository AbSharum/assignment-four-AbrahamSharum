<div class="container">
        <div class="col">
            <form action="start.php" method="GET">
            <a href="start.php?action=articleAdd" class="btn btn-primary">Add Article</a>
            <button class="btn btn-primary" type="submit" name="action" value="articleUpdate">Update Article</button>
            <button class="btn btn-primary" type="submit" name="action" value="articleDelete">Delete Article</button>
            <table class="table table-bordered table-striped mt-3">
                <thead><tr><th class="text-center">User ID</th><th>Article Title</th><th>Image</th><th>Content</th></tr></thead>
                <tbody>
                    <?php

                        for($index=0;$index<count($data);$index++){
                            echo "<tr><td class=\"text-center\"><input type=\"radio\" name=\"userID\" value=\"".$data[$index]->getUserID()."\" required></td>";
                            echo "<td>".$data[$index]->getTitle()."</td>";
                            echo "<td> <img src=images/background.jpg" .$data[$index]->getImgPath()."> </td>";
                            echo "<td>".$data[$index]->getContent()."</td></tr>\n";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>