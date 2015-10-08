<?php
/**************************************************************************
 * Chat.php, VideoBundle
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
 * @ORM\Table(name="tp_chat")
 * @ORM\Entity(repositoryClass="TPM1Agile2\Bundle\VideoBundle\Repository\ChatRepository")
 * 
 */
class Chat{
	
	/**
	 * Chat Unique ID.
	 * 
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 * @var integer
	 */
	private $id;
	
	/**
	 * Chat message
	 * 
	 * @ORM\Column(type="string", length=255, nullable=false)
	 * @var string
	 */
	private $message;
	
	/**
	 * Chat created date
	 *
	 * @ORM\Column(name="created_at", type="datetime", nullable=false)
	 * @var \DateTime
	 */
	private $createdAt;
	
	/**
	 * Chat user 
	 * 	 
	 * @ORM\ManyToOne(targetEntity="TPM1Agile2\Bundle\UserBundle\Entity\User", inversedBy="chats")
	 * @ORM\JoinColumn(name="id_user" , referencedColumnName="id" , nullable=false)
	 * @var \MG\MemoryGameBundle\Entity\HumanPlayer
	 */
	private $user;
	

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
     * Set message
     *
     * @param string $message
     * @return Chat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Chat
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set user
     *
     * @param \TPM1Agile2\Bundle\UserBundle\Entity\User $user
     * @return Chat
     */
    public function setUser(\TPM1Agile2\Bundle\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \TPM1Agile2\Bundle\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
