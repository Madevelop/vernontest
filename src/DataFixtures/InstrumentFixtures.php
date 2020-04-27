<?php

namespace App\DataFixtures;

use App\Entity\Instrument;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class InstrumentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $instrument = new Instrument();
        $instrument->setTitle('Basse');
        $instrument->setDescription('the best one');
        $instrument->setStatus('publish');
        $manager->persist($instrument);

        $instrument2 = new Instrument();
        $instrument2->setTitle('Guitare');
        $instrument2->setDescription('bof');
        $instrument2->setStatus('draft');
        $manager->persist($instrument2);

        $manager->flush();
    }
}
