<?php
class MyStorydex {
    private $image;
    private $title;
    private $content;
    private $date;

    public function __construct($image, $title, $content, $date) {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }

    public function setPost($image, $title, $content, $date): void {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;
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

    // ----------------------------------------------------------------------------------------

    public function setPost2($image, $title, $content, $date): void {
        $this->image = $image;
        $this->title = $title;
        $this->content = $content;
        $this->date = $date;
    }

    public function getImage2() {
        echo $this->image;
    }

    public function getTitle2() {
        echo $this->title;
    }

    public function getContent2() {
        echo $this->content;
    }

    public function getImageProfile2() {
        echo $this->imageProfile;
    }

    public function getAuthor2() {
        echo $this->author;
    }

    public function getDate2() {
        echo $this->date;
    }
}
?>