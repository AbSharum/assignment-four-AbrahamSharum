<?php
class Article implements JsonSerializable {
    private $title;
    private $imgPath;
    private $content;
    private $userID;

    public function load($row){
        $this->setTitle($row['title']);
        $this->setImgPath($row["imagePath"]);
        $this->setContent($row["content"]);
        $this->setUserID($row['userID']);
    }



    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setImgPath($imgPath) {
        $this->imgPath = $imgPath;
    }

    public function getImgPath() {
        return $this->imgPath;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

    public function setUserID($userID) {
        $this->userID = $userID;
    }

    public function getUserID() {
        return $this->userID;
    }


    

    public function jsonSerialize(){
        return array(
            'title'=> $this->title,
            'imgagePath' => $this->imgPath,
            'content' => $this->content,
            'userID' => $this->userID,
        );
    }
}
?>