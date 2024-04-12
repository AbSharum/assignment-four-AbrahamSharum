<div class="container">
        <div class="col">
            <form action="start.php" method="GET">
            <a href="start.php?action=articleAdd" class="btn btn-dark">Add Article</a>
            <button class="btn btn-dark" type="submit" name="action" value="articleUpdate">Update Article</button>
            <button class="btn btn-dark" type="submit" name="action" value="articleDelete">Delete Article</button>
            <table class="table table-bordered table-striped mt-3 table-dark">
                <thead class><tr><th class="text-center">Article ID</th><th>Article Title</th><th>Image Path</th><th>Content</th></tr></thead>
                <tbody>
                    <?php
                        $_SESSION['currentPage'] = $_GET['action'];
                        for($index=0;$index<count($data);$index++){
                            echo "<tr><td class=\"text-center\"><input type=\"radio\" name=\"articleID\" value=\"".$data[$index]->getArticleID()."\" required></td>";
                            echo "<td>".$data[$index]->getTitle()."</td>";
                            echo "<td>".$data[$index]->getImgPath()."</td>";
                            echo "<td>".$data[$index]->getContent()."</td></tr>\n";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>