<?php

namespace App\DataFixtures;

use App\Entity\Telefoon;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TelefoonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new Telefoon();
            $user->setNaam("telefoon" . $i);
            $user->setMerk("merk" . rand(0,3));
            $user->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi est lectus, ultrices luctus ligula quis, vehicula congue purus. Donec interdum ligula dui, eget feugiat justo mattis at. Sed pretium felis eget elit elementum, a iaculis libero aliquet. Nunc at odio non nulla eleifend eleifend in scelerisque arcu. Nullam interdum commodo purus, ut gravida neque dignissim id. Integer metus lorem, elementum non nisl quis, hendrerit pulvinar dui. Pellentesque et cursus odio. Ut sed velit eget mauris porta dapibus. Vestibulum vel nisi feugiat, semper nisl vel, dapibus massa. Fusce nunc velit, suscipit et lobortis nec, sagittis ut enim. Proin gravida porta mi a lobortis. In aliquet vestibulum pretium. Pellentesque pulvinar risus id ipsum eleifend, vel vulputate purus sollicitudin. Suspendisse potenti. ");
            $manager->persist($user);
        }

        $manager->flush();
    }
}
