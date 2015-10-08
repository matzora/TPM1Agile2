<?php
/**************************************************************************
 * Video.php, VideoBundle
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
 * @ORM\Table(name="tp_video")
 * @ORM\Entity(repositoryClass="TPM1Agile2\Bundle\VideoBundle\Repository\VideoRepository")
 * 
 */
class Video{
	
	/**
	 * Video Unique ID.
	 * 
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var integer
	 */
	private $id;
	
	/**
	 * Video url
	 * 
	 * @ORM\Column(type="string", length=255, nullable=false)
	 * @var string
	 */
	private $url;
	
	/**
	 * Video model
	 * 
	 * @ORM\Column(type="string", length=255, nullable=false)
	 * @var string
	 */
	private $model;
	
	/**
	 * Video Description
	 * 
     * @ORM\OneToOne(targetEntity="TPM1Agile2\Bundle\VideoBundle\Entity\Description", cascade={"persist"})
	 * @var \TPM1Agile2\Bundle\VideoBundle\Entity\Description
	 */
	private $description;
	

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
     * Set url
     *
     * @param string $url
     * @return Video
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set model
     *
     * @param string $model
     * @return Video
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set description
     *
     * @param \TPM1Agile2\Bundle\VideoBundle\Entity\Description $description
     * @return Video
     */
    public function setDescription(\TPM1Agile2\Bundle\VideoBundle\Entity\Description $description = null)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return \TPM1Agile2\Bundle\VideoBundle\Entity\Description 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
