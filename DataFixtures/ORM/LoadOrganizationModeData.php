<?php

namespace Innova\LearningPathBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Innova\LearningPathBundle\Entity\OrganizationMode;

class LoadOrganizationModeData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $organizationMode = new OrganizationMode();
        $organizationMode->setName('admin');
        $manager->persist($organizationMode);

        $organizationMode = new OrganizationMode();
        $organizationMode->setName('admin2');
        $manager->persist($organizationMode);

        $manager->flush();
    }
}
