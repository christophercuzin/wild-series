<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    const PROGRAMS = [
        [
            'title' => 'the witcher',
            'synopsis' => 'C\'est l\'histoire de Geralt de riv sorceleur de son etat qui chasse des monstres',
            'poster' => 'assets/images/the-witcher.jpg',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_fantastique',
        ],

        [
            'title' => 'the walking dead ',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font attaqué par des zombies',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_horreur',
        ],

        [
            'title' => 'l\'attaque des titans',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font ataqué par des titans',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_anime',
        ],

        [
            'title' => 'jessica jones',
            'synopsis' => 'jessica jones detective privé a la force surhumaine combat le crime',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_action',
        ],

        [
            'title' => 'brooklyn nine-nine',
            'synopsis' => 'Cette comédie chorale suit les personnages et les affaires d\'un commissariat de 
            Brooklyn, loin des dangers et des affaires plus spectaculaires du très chic Manhattan.',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_comedie',
        ],
        [
            'title' => 'the witcher',
            'synopsis' => 'C\'est l\'histoire de Geralt de riv sorceleur de son etat qui chasse des monstres',
            'poster' => 'assets/images/the-witcher.jpg',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_fantastique',
        ],

        [
            'title' => 'the walking dead ',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font attaqué par des zombies',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_horreur',
        ],

        [
            'title' => 'l\'attaque des titans',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font ataqué par des titans',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_anime',
        ],

        [
            'title' => 'jessica jones',
            'synopsis' => 'jessica jones detective privé a la force surhumaine combat le crime',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_action',
        ],

        [
            'title' => 'brooklyn nine-nine',
            'synopsis' => 'Cette comédie chorale suit les personnages et les affaires d\'un commissariat de 
            Brooklyn, loin des dangers et des affaires plus spectaculaires du très chic Manhattan.',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_comedie',
        ],
        [
            'title' => 'the witcher',
            'synopsis' => 'C\'est l\'histoire de Geralt de riv sorceleur de son etat qui chasse des monstres',
            'poster' => 'assets/images/the-witcher.jpg',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_fantastique',
        ],

        [
            'title' => 'the walking dead ',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font attaqué par des zombies',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_horreur',
        ],

        [
            'title' => 'l\'attaque des titans',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font ataqué par des titans',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_anime',
        ],

        [
            'title' => 'jessica jones',
            'synopsis' => 'jessica jones detective privé a la force surhumaine combat le crime',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_action',
        ],

        [
            'title' => 'brooklyn nine-nine',
            'synopsis' => 'Cette comédie chorale suit les personnages et les affaires d\'un commissariat de 
            Brooklyn, loin des dangers et des affaires plus spectaculaires du très chic Manhattan.',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_comedie',
        ],
        [
            'title' => 'the witcher',
            'synopsis' => 'C\'est l\'histoire de Geralt de riv sorceleur de son etat qui chasse des monstres',
            'poster' => 'assets/images/the-witcher.jpg',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_fantastique',
        ],

        [
            'title' => 'the walking dead ',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font attaqué par des zombies',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_horreur',
        ],

        [
            'title' => 'l\'attaque des titans',
            'synopsis' => 'C\'est l\'histoire de gens qui ce font ataqué par des titans',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_anime',
        ],

        [
            'title' => 'jessica jones',
            'synopsis' => 'jessica jones detective privé a la force surhumaine combat le crime',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_action',
        ],

        [
            'title' => 'brooklyn nine-nine',
            'synopsis' => 'Cette comédie chorale suit les personnages et les affaires d\'un commissariat de 
            Brooklyn, loin des dangers et des affaires plus spectaculaires du très chic Manhattan.',
            'poster' => '',
            'country' => ' U.S.A., Pologne',
            'year' => 2019,
            'category' => 'category_comedie',
        ],

    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::PROGRAMS as $programDetails){
                $program = new Program();
                $program
                ->setTitle($programDetails['title'])
                ->setSynopsis($programDetails['synopsis'])
                ->setPoster($programDetails['poster'])
                ->setCountry($programDetails['country'])
                ->setYear($programDetails['year'])
                ->setCategory($this->getReference($programDetails['category']));  
                $manager->persist($program);
                $this->addReference('program_' . $program->getSeasons(), $program);
        }
        $manager->flush();
    }

    public function getDependencies()

    {

        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend

        return [

          CategoryFixtures::class,

        ];

    }
}
