<?php
class MyStorydex {
    private $image;
    private $title;
    private $content;

    private $imageProfile;
    private $author;
    private $date;

    public function __construct($image, $title, $content, $imageProfile, $author, $date) {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;

        $this->imageProfile = $imageProfile;
        $this->author = $author;
        $this->date = $date;
    }

    public function setPost($image, $title, $content, $imageProfile, $author, $date): void {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;

        $this->imageProfile = $imageProfile;
        $this->author = $author;
        $this->date = $date;
    }

    public function getImage() {
        echo $this->image;
    }

    public function getTitle() {
        echo $this->title;
    }

    public function getContent() {
        echo $this->content;
    }

    public function getImageProfile() {
        echo $this->imageProfile;
    }

    public function getAuthor() {
        echo $this->author;
    }

    public function getDate() {
        echo $this->date;
    }
}
?>