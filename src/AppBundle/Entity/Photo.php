<?php

namespace AppBundle\Entity;

use Iphp\FileStoreBundle\Mapping\Annotation as FileStore;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 * @FileStore\Uploadable
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PhotoRepository")
 */
class Photo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    protected  $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePublished", type="datetime")
     */
    protected  $datePublished;

    /**
     * @var array
     * @ORM\Column(type="array", nullable=true)
     */
    protected  $photoInfo;

    /**
     * @var File
     *
     * @FileStore\UploadableField(mapping="photo", fileDataProperty ="photoInfo")
     */
    protected  $photoUpload;

    /**
     * @var Post
     * @ORM\OneToOne(targetEntity="Post", inversedBy="photo")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $post;

    public function __construct()
    {
        $this->datePublished = new \DateTime();
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->title;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Photo
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set datePublished
     *
     * @param \DateTime $datePublished
     *
     * @return Photo
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;

        return $this;
    }

    /**
     * Get datePublished
     *
     * @return \DateTime
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @return Post
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param Post $post
     *
     * @return Photo
     */
    public function setPost($post)
    {
        $this->post = $post;

        return $this;
    }

    /**
     * @return array
     */
    public function getPhotoInfo()
    {
        return $this->photoInfo;
    }

    /**
     * @param array $photoInfo
     * @return Photo
     */
    public function setPhotoInfo($photoInfo)
    {
        $this->photoInfo = $photoInfo;

        return $this;
    }

    /**
     * @return File
     */
    public function getPhotoUpload()
    {
        return $this->photoUpload;
    }

    /**
     * @param File $photoUpload
     * @return Photo
     */
    public function setPhotoUpload($photoUpload)
    {
        $this->photoUpload = $photoUpload;

        return $this;
    }


}

