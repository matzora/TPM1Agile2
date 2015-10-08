<?php
/**************************************************************************
 * Description.php, VideoBundle
 *
 * Maxime Léau Copyright 2015
 * Description :
 * Author(s) : Maxime Léau <maxime.leau@imie-rennes.fr>
 * Licence : All right reserved.
 * Last update : October 8, 2015
 *
 **************************************************************************/
namespace TPM1Agile2\Bundle\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Video entity
 * 
 * @ORM\Table(name="tp_description")
 * @ORM\Entity(repositoryClass="TPM1Agile2\Bundle\VideoBundle\Repository\DescriptionRepository")
 * 
 */
class Description{
	
	/**
	 * Description Unique ID.
	 * 
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var integer
	 */
	private $id;
	
	/**
	 * Description author
	 * 
	 * @ORM\Column(type="string", length=255, nullable=false)
	 * @var string
	 */
	private $author;
	
	/**
	 * Description global description
	 * 
	 * @ORM\Column(name="global_description", type="string", length=255, nullable=false)
	 * @var string
	 */
	private $globalDescription;
	
	/**
	 * Description posted date
	 *
	 * @ORM\Column(name="posted_at", type="datetime", nullable=false)
	 * @var \DateTime
	 */
	private $postedAt;
	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Description
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set globalDescription
     *
     * @param string $globalDescription
     * @return Description
     */
    public function setGlobalDescription($globalDescription)
    {
        $this->globalDescription = $globalDescription;

        return $this;
    }

    /**
     * Get globalDescription
     *
     * @return string 
     */
    public function getGlobalDescription()
    {
        return $this->globalDescription;
    }

    /**
     * Set postedAt
     *
     * @param \DateTime $postedAt
     * @return Description
     */
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime 
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }
}
