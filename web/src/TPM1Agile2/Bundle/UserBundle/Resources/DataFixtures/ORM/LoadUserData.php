<?php
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class MyFixtures implements FixtureInterface, ContainerAwareInterface
{

    /**
     *
     * @var ContainerInterface
     */
    private $container;

    /**
     *
     * @param ContainerInterface|null $container            
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     *
     * @param ObjectManager $manager            
     */
    public function load(ObjectManager $manager)
    {
        // On va chercher de la manger de fos !
        $userManager = $this->container->get('fos_user.user_manager');
        
        // Creation du nouvel utilisateur
        $user = $userManager->createUser();
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $user->setPlainPassword('admin');
        $user->setEnabled(true);
        
        $manager->persist($user);
        $manager->flush();
    }
}