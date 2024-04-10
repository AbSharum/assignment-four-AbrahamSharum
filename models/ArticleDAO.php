<?php
    include_once 'Article.php';

    class ArticleDao {


        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "assign4user", "mvcpass", "assign4DB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addArticle($article) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("INSERT INTO articles (title,imagePath,content,userID) VALUES (?,?,?,?)");
            $stmt->bind_param("sssi",$article->getTitle(),$article->getImgPath(),$article->getContent(),$article->getUserID());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function updateArticle($article) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("UPDATE articles SET title = ?, imagePath = ?, content = ? where articleID =?;");
            $stmt->bind_param("sssi",$article->getTitle(),$article->getImgPath(),$article->getContent(),$article->getArticleID());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteArticle($articleID) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("DELETE FROM articles where articleID =?;");
            $stmt->bind_param("i",$articleID);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteArticleUserID($userID) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("DELETE FROM articles where userID =?;");
            $stmt->bind_param("i",$userID);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function getArticles(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $article = new article();
                $article->load($row);
                $articles[]=$article;
            }    
            $stmt->close();
            $connection->close();
            return $articles;
        }

        public function getArticle($articleID){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM articles WHERE articleID = ?;"); 
            $stmt->bind_param("i", $articleID);
            $stmt->execute();
            $result = $stmt->get_result();
            if($row = $result->fetch_assoc()){
                $article = new Article();
                $article->load($row);
            }    
            $stmt->close();
            $connection->close();
            return $article;
        }


    }
?>
