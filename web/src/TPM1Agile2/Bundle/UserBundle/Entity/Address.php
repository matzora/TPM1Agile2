<?php
namespace TPM1Agile2\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TPM1Agile2\Bundle\UIBundle\Entity\AddressRepository")
 */
class Address
{

    /**
     *
     * @var integer @ORM\Column(name="id", type="integer")
     *      @ORM\Id
     *      @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @var string @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     *
     * @var integer @ORM\Column(name="ZipCode", type="integer")
     */
    private $zipCode;

    /**
     *
     * @var string @ORM\Column(name="City", type="string", length=50)
     */
    private $city;

    /**
     *
     * @var string @ORM\Column(name="Comment", type="string", length=255, nullable=true)
     */
    private $comment;

    public function hydrate(array $data)
    {
        foreach ($data as $key => $value) {
            // On récupère le nom du setter correspondant à la clé
            $method = 'set' . ucfirst($key);
            
            // Si le setter correspondant existe
            if (method_exists($this, $method)) {
                // On appelle le setter
                $this->$method($value);
            }
        }
    }

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param string $name            
     * @return Address
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return integer
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set zipCode
     *
     * @param integer $zipCode            
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        
        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set city
     *
     * @param string $city            
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        
        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set comment
     *
     * @param string $comment            
     * @return Address
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        
        return $this;
    }
}
