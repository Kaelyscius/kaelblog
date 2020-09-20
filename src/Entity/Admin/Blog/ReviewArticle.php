<?php

namespace App\Entity\Admin\Blog;

use App\Repository\Admin\Blog\ReviewArticleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReviewArticleRepository::class)
 */
class ReviewArticle extends AbstractArticle
{

    /**
     * @ORM\Column(type="float")
     */
	private ?float $score;

    /**
     * @ORM\Column(type="string", length=255)
     */
	private ?string $externalLink;

    public function getScore(): ?float
    {
        return $this->score;
    }

    public function setScore(float $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getExternalLink(): ?string
    {
        return $this->externalLink;
    }

    public function setExternalLink(string $externalLink): self
    {
        $this->externalLink = $externalLink;

        return $this;
    }
}
