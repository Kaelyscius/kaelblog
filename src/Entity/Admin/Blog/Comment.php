<?php

namespace App\Entity\Admin\Blog;

use App\Repository\Admin\Blog\CommentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CommentRepository::class)
 */
class Comment
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
	private ?int $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
	private ?string $status;

    /**
     * @ORM\Column(type="string", length=50)
     */
	private ?string $ipUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
	private ?string $author;

    /**
     * @ORM\Column(type="boolean")
     */
	private ?bool $softDelete;

    /**
     * @ORM\ManyToOne(targetEntity=AbstractArticle::class, inversedBy="comment")
     * @ORM\JoinColumn(nullable=false)
     */
	private ?AbstractArticle $articles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getIpUser(): ?string
    {
        return $this->ipUser;
    }

    public function setIpUser(string $ipUser): self
    {
        $this->ipUser = $ipUser;

        return $this;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getSoftDelete(): ?bool
    {
        return $this->softDelete;
    }

    public function setSoftDelete(bool $softDelete): self
    {
        $this->softDelete = $softDelete;

        return $this;
    }

    public function getArticles(): ?AbstractArticle
    {
        return $this->articles;
    }

    public function setArticles(?AbstractArticle $articles): self
    {
        $this->articles = $articles;

        return $this;
    }
}
