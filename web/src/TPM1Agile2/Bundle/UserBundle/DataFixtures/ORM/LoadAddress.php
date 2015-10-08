<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 06/10/2015
 * Time: 14:16
 */

namespace TPM1Agile2\Bundle\UserBundle\DataFixtures\ORM;

use TPM1Agile2\Bundle\UserBundle\Entity\Address;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAddress implements FixtureInterface, OrderedFixtureInterface
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $address = new Address();

        $data = array(
            'name' => 'Nom de la voie',
            'zipCode' => '35000',
            'city' => 'Rennes',
            'Comment' => 'appartement 2 bis'
        );

        $address->hydrate($data);

        $manager->persist($address);
        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     *
     */
    public function getOrder()
    {
        return 1; // the order in which fixtures will be loaded
    }
}