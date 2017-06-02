<?php
namespace BlogEcrivain\Domain;
class Comment
{
    /**
     * Comment id.
     *
     * @var integer
     */
    private $id;
    /**
     * Comment author.
     *
     * @var \BlogEcrivain\Domain\User
     */
    private $author;
    /**
     * Comment content.
     *
     * @var integer
     */
    private $content;
    /**
     * Associated article.
     *
     * @var \BlogEcrivain\Domain\Article
     */
    private $article;
    /**
     *
     * @var string
     */
    private $email;
    /**
     *
     * @var string
     */
    private $website;

    /**
     * Reported comment.
     *
     * @var integer
     */
    private $reported;


    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
        return $this;
    }
    public function getAuthor() {
        return $this->author;
    }
    public function setAuthor(User $author) {
        $this->author = $author;
        return $this;
    }
    public function getContent() {
        return $this->content;
    }
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }
    public function getArticle() {
        return $this->article;
    }
    public function setArticle(Article $article) {
        $this->article = $article;
        return $this;
    }

    public function getEmail() {
        return $this->email;
    }
    public function getWebsite() {
        return $this->website;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function setWebsite($website) {
        $this->website = $website;
        return $this;
    }

    public function getReported(){
        return $this->reported;
    }
    public function setReported($reported){
        $this->reported = $reported;
        return $this;
    }
}
