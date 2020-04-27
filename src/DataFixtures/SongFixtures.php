<?php

namespace App\DataFixtures;

use App\Entity\Song;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SongFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $song1 = new Song();
        $song1->setTitle('Walkabout');
        $song1->setAlbum('One Hot Minute');
        $song1->setGroupe('Red Hot Chili Peppers');
        $manager->persist($song1);


        $song2 = new Song();
        $song2->setTitle('Paranoid Android');
        $song2->setAlbum('OK Computer');
        $song2->setGroupe('Radiohead');
        $manager->persist($song2);

        $manager->flush();
    }
}
