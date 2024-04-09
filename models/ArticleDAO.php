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

        public function addArticle($article,$user) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("INSERT into articles (title,imagePath,content,userID);");
            $stmt->bind_param("sssi",$article->getTitle(),$article->getImgPath(),$article->getContent(),$user->getUserID());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function updateArticle($article) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("UPDATE set title = ?, imagePath = ?, content=? where userID =?;");
            $stmt->bind_param("sssi",$article->getTitle(),$article->getImgPath(),$article->getContent(),$article->getUserID());
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function deleteArticle($article) {
            $connection = $this->getConnection();
            $stmt = $connection->prepare("UPDATE FROM articles where userID =?;");
            $stmt->bind_param("i",$article->getUserID());
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

        public function getArticle($userid){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM users WHERE userID = ?;"); 
            $stmt->bind_param("i", $userid);
            $stmt->execute();
            $result = $stmt->get_result();
            if($row = $result->fetch_assoc()){
                $user = new User();
                $user->load($row);
            }    
            $stmt->close();
            $connection->close();
            return $user;
        }


    }
?>
