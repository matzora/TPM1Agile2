<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 12/08/2015
 * Time: 00:18
 */
namespace TPM1Agile2\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use TPM1Agile2\Bundle\UserBundle\Entity\Address;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks()
 *
 * @ApiDoc(
 * description="home made function to create new instance of entity",
 * view= { "user"}
 * )
 */
class User extends BaseUser
{

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
     * @ORM\PrePersist
     */
    public function setCreatedValue()
    {
        $now = new \DateTime();
        $this->setCreateDate($now);
    }

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ApiDoc(
     * description="unique id",
     * view= { "user"}
     * )
     */
    protected $id;

    /**
     * @ORm\Column(name="gender", type="boolean")
     * @ApiDoc(
     * description="user gender",
     * view= { "user"}
     * )
     */
    protected $gender;

    /**
     * @ORm\Column(name="firstname", type="string", length=255)
     * @ApiDoc(
     * description="user firstname",
     * view= { "user"}
     * )
     */
    protected $firstname;

    /**
     * @ORm\Column(name="lastname", type="string", length=255)
     * @ApiDoc(
     * description="user lastname",
     * view= { "user"}
     * )
     */
    protected $lastname;

    /**
     * @ORm\Column(name="phone", type="integer", length=9)
     * @ApiDoc(
     * description="user phone number",
     * view= { "user"}
     * )
     */
    protected $phone;

    /**
     * @ORm\Column(name="licence_plate", type="string", length=9, nullable=true)
     * @ApiDoc(
     * description="user licence plate if driver",
     * view= { "user"}
     * )
     */
    protected $licencePlate;

    /**
     * @ORm\Column(name="status", type="string", length=255)
     * @ApiDoc(
     * description="user status (student, teacher..)",
     * view= { "user"}
     * )
     */
    protected $status;

    /**
     * @ORm\Column(name="structure", type="string", length=255)
     * @ApiDoc(
     * description="user work structure",
     * view= { "user"}
     * )
     */
    protected $structure;

    /**
     * @ORm\Column(name="age", type="boolean")
     * @ApiDoc(
     * description="user age",
     * view= { "user"}
     * )
     */
    protected $age;

    /**
     * @ORm\Column(name="type", type="string", length=255)
     * @ApiDoc(
     * description="user type(driver, passenger..)",
     * view= { "user"}
     * )
     */
    protected $type;

    /**
     * @ORM\ManyToOne(targetEntity="TPM1Agile2\Bundle\UserBundle\Entity\Address", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     * @ApiDoc(
     * description="user address",
     * view= { "user"}
     * )
     */
    protected $address;

    /**
     *
     * @var \DateTime @ORM\Column(name="createDate", type="datetime", nullable=false)
     */
    protected $createDate;

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
     * Set gender
     *
     * @param boolean $gender            
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        
        return $this;
    }

    /**
     * Get gender
     *
     * @return boolean
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set firstname
     *
     * @param string $firstname            
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname            
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set phone
     *
     * @param integer $phone            
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        
        return $this;
    }

    /**
     * Get phone
     *
     * @return integer
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set licencePlate
     *
     * @param string $licencePlate            
     * @return User
     */
    public function setLicencePlate($licencePlate)
    {
        $this->licencePlate = $licencePlate;
        
        return $this;
    }

    /**
     * Get licencePlate
     *
     * @return string
     */
    public function getLicencePlate()
    {
        return $this->licencePlate;
    }

    /**
     * Set status
     *
     * @param string $status            
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;
        
        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set structure
     *
     * @param string $structure            
     * @return User
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
        
        return $this;
    }

    /**
     * Get structure
     *
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * Set age
     *
     * @param boolean $age            
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;
        
        return $this;
    }

    /**
     * Get age
     *
     * @return boolean
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set type
     *
     * @param string $type            
     * @return User
     */
    public function setType($type)
    {
        $this->type = $type;
        
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set address
     *
     * @param Address $address            
     * @return User
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
        
        return $this;
    }

    /**
     * Get address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    public function setEmail($email)
    {
        $email = is_null($email) ? '' : $email;
        parent::setEmail($email);
        $this->setUsername($email);
        
        return $this;
    }

    /**
     * get createDate
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     *
     * @param \DateTime|null $time            
     * @return $this
     */
    public function setCreateDate(\DateTime $time)
    {
        $this->createDate = $time;
        return $this;
    }
}
