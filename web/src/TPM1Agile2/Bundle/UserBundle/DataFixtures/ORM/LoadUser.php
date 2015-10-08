<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 30/08/2015
 * Time: 23:05
 */
namespace TPM1Agile2\Bundle\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUser implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{

    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
       

        // On ajoute un administrateur
        $users[] = array(
            'username' => 'admin',
            'enabled' => true,
            'roles' => array(
                'ROLE_ADMIN'
            ),
            'plainPassword' => 'lol',
        );

        // On ajoute un utilisateur lambda
        $users[] = array(
            'username' => 'alexandre.liscia',
            'enabled' => true,
            'roles' => array(
                'ROLE_USER'
            ),
            'plainPassword' => 'lol',
        );
       

        $userManager = $this->container->get('fos_user.user_manager');

        foreach ($users as $userData) {
            $user = $userManager->createUser();
            $user->setUsername($userData['username']);
            $user->setEnabled($userData['enabled']);
            $user->setRoles($userData['roles']);
            $user->setPlainPassword($userData['plainPassword']);
            $user->setEmail($userData['username'] . "@prout.com");
            $manager->persist($user);
        }

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