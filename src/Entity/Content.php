<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContentRepository")
 */
class Content
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $bodytext;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Media")
     */
    private $media;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Group")
     */
    private $accessGroups;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Page", inversedBy="content")
     * @ORM\JoinColumn(nullable=false)
     */
    private $page;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hideTitle;

    public function __construct()
    {
        $this->media = new ArrayCollection();
        $this->accessGroups = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBodytext(): ?string
    {
        return $this->bodytext;
    }

    public function setBodytext(string $bodytext): self
    {
        $this->bodytext = $bodytext;

        return $this;
    }

    /**
     * @return Collection|Media[]
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): self
    {
        if (!$this->media->contains($medium)) {
            $this->media[] = $medium;
        }

        return $this;
    }

    public function removeMedium(Media $medium): self
    {
        if ($this->media->contains($medium)) {
            $this->media->removeElement($medium);
        }

        return $this;
    }

    /**
     * @return Collection|Group[]
     */
    public function getAccessGroups(): Collection
    {
        return $this->accessGroups;
    }

    public function addAccessGroup(Group $accessGroup): self
    {
        if (!$this->accessGroups->contains($accessGroup)) {
            $this->accessGroups[] = $accessGroup;
        }

        return $this;
    }

    public function removeAccessGroup(Group $accessGroup): self
    {
        if ($this->accessGroups->contains($accessGroup)) {
            $this->accessGroups->removeElement($accessGroup);
        }

        return $this;
    }

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getHideTitle(): ?bool
    {
        return $this->hideTitle;
    }

    public function setHideTitle(bool $hideTitle): self
    {
        $this->hideTitle = $hideTitle;

        return $this;
    }
}
