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
        $addressRepository = $this->container->get('doctrine')
            ->getManager()
            ->getRepository('TPM1Agile2UserBundle:Address');

        $address = $addressRepository->findAll(array());

        // On ajoute un administrateur
        $users[] = array(
            'gender' => 1,
            'firstname' => 'admin',
            'lastname' => 'admin',
            'email' => 'admin@admin.com',
            'enabled' => true,
            'roles' => array(
                'ROLE_ADMIN'
            ),
            'plainPassword' => 'lol',
            'phone' => '123456789',
            'licencePlate' => '123456789',
            'status' => 'status',
            'structure' => 'structure',
            'age' => 1,
            'type' => 'type',
            'address' => $address[0],
            'createDate' => new \DateTime('2015-01-01')
        );

        // On ajoute un utilisateur lambda
        $users[] = array(
            'gender' => 1,
            'firstname' => 'Alexandre',
            'lastname' => 'LISCIA',
            'email' => 'alexandre.liscia@admin.com',
            'enabled' => true,
            'roles' => array(
                'ROLE_USER'
            ),
            'plainPassword' => 'lol',
            'phone' => '123456789',
            'licencePlate' => '123456789',
            'status' => 'Etudiant',
            'structure' => 'IMIE',
            'age' => 1,
            'type' => 'Conducteur',
            'address' => $address[0],
            'createDate' => new \DateTime('2015-01-01')
        );

        /*
         * Création des utilisateurs en masse
         */

        $type = array(
            'Conducteur',
            'Passager'
        );

        $status = array(
            'Etudiant',
            'Enseignant',
            'Salarié'
        );

        $j = 0;
        while ($j < 50) {
            $a = rand(0, (count($address) - 1));

            // Calcul des dates
            $dateFin = strtotime('2015-12-31');
            $dateDebut = strtotime('2014-01-01');
            $nbJoursAleatoire = rand(0, round(($dateFin - $dateDebut) / (60 * 60 * 24)));

            $d = date("Y-m-d", strtotime("2014-01-01 + " . $nbJoursAleatoire . " days"));

            $users[] = array(
                'gender' => rand(0, 1),
                'firstname' => 'toto',
                'lastname' => 'toto',
                'email' => 'toto' . $j . '@admin.com',
                'enabled' => true,
                'roles' => array(
                    'ROLE_USER'
                ),
                'plainPassword' => 'lol',
                'phone' => '123456789',
                'licencePlate' => '123456789',
                'status' => $status[rand(0, 2)],
                'structure' => 'IMIE',
                'age' => rand(18, 30),
                'type' => $type[rand(0, 1)],
                'address' => $address[$a],
                'createDate' => new \DateTime($d)
            );
            $j++;
        }

        $userManager = $this->container->get('fos_user.user_manager');

        foreach ($users as $userData) {
            $user = $userManager->createUser();
            $user->hydrate($userData);
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
        return 2; // the order in which fixtures will be loaded
    }
}