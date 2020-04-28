<?php

namespace App\DataFixtures;

use App\Entity\Song;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SongFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $song1 = new Song();
        $song1->setTitle('Walkabout');
        $song1->setAlbum('One Hot Minute');
        $song1->setGroupe('Red Hot Chili Peppers');
        $song1->addInstrument($this->getReference('instru1'));
        $song1->addInstrument($this->getReference('instru2'));
        $manager->persist($song1);


        $song2 = new Song();
        $song2->setTitle('Paranoid Android');
        $song2->setAlbum('OK Computer');
        $song2->setGroupe('Radiohead');
        $song2->addInstrument($this->getReference('instru2'));
        $manager->persist($song2);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            InstrumentFixtures::class,
        );
    }
}
