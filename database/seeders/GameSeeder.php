<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            [
                'title' => 'Warcraft III: Reforged',
                'description' => 'Warcraft III: Reforged is a stunning reimagining of the revolutionary real-time strategy game that laid the foundation for Azeroth’s most epic stories. It is a remake in the truest sense, featuring a thorough visual overhaul, a suite of contemporary social and matchmaking features, and more. Command the Night Elves, Undead, Orcs, and Humans as alliances shift and armies clash in this timeless real-time strategy game.',
                'genre' => 'Strategy',
                'price' => 29.99,
                'image' => 'path/to/image1.jpg',
            ],
            [
                'title' => 'World of Warcraft: Shadowlands',
                'description' => 'With a single act of destruction, Sylvanas Windrunner has ripped open the way to the afterlife. Azeroth’s staunchest defenders have been dragged into all-consuming darkness. An ancient force of death threatens to break its bonds and unravel reality. Hidden realms of wonder and horror await any who would pass to the other side. The Shadowlands is home to an entire realm of the departed; it is a world between worlds whose delicate balance preserves life and death itself.',
                'genre' => 'MMORPG',
                'price' => 49.99,
                'image' => 'path/to/image2.jpg',
            ],
            [
                'title'=> 'Diablo IV',
                'description' => 'Diablo IV is the newest incarnation of the genre defining ARPG players have come to know and love. Hellish new features, brutal challenges, and an indisputable return to darkness lie at the core of our hard work. Take a glimpse into the terror that awaits.',
                'genre' => 'Action RPG',
                'price' => 59.99,
                'image' => 'path/to/image3.jpg',
            ],
            [
                'title'=> 'Hollow Knight',
                'description' => 'Hollow Knight is a classically styled 2D action adventure across a vast interconnected world. Explore twisting caverns, ancient cities and deadly wastes; battle tainted creatures and befriend bizarre bugs; and solve ancient mysteries at the kingdom’s heart.',
                'genre' => 'Metroidvania',
                'price' => 14.99,
                'image' => 'path/to/image4.jpg',
            ],
            [
                'title'=> 'Mass Effect Legendary Edition',
                'description'=> 'One person is all that stands between humanity and the greatest threat it’s ever faced. Relive the legend of Commander Shepard in the highly acclaimed Mass Effect trilogy with the Mass Effect™ Legendary Edition. Includes single-player base content and over 40 DLC from Mass Effect, Mass Effect 2, and Mass Effect 3 games, including promo weapons, armors, and packs — remastered and optimized for 4K Ultra HD.',
                'genre' => 'Action RPG',
                'price' => 59.99,
                'image' => 'path/to/image5.jpg',
            ],
            [
                'title'=> 'Magus Pocus: Arcane Essence',
                'description'=> ' Is a 2D action and magic game where you explore a world full of mysteries and arcane powers. Enhance your spells, discover powerful relics, and face challenging enemies in a magical journey. Immerse yourself in a rich story filled with secrets that will only be revealed through exploration.',
                'genre' => 'Action RPG',
                'price' => 19.99,
                'image' => 'path/to/image6.jpg',
            ],
            [
                'title'=> 'The Witcher 3: Wild Hunt',
                'description'=> 'The Witcher 3: Wild Hunt is a story-driven, next-generation open world role-playing game set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.',
                'genre' => 'Action RPG',
                'price' => 29.99,
                'image' => 'path/to/image7.jpg',
            ],
            [
                'title'=> 'MU Legend',
                'description'=> 'MU Legend is the highly-anticipated action MMO and the follow-up to MU Online. It features fluid and stunning hack and slash combat, content that caters to both solo and party play, and a deep and intriguing world that will satisfy new players and fans alike. Players can choose from four distinct classes: Darklord, Whisperer, Blader, and Warmage - and engage in endless battles in the world of MU.',
                'genre' => 'MMORPG',
                'price' => 0.00,
                'image' => 'path/to/image8.jpg',
            ]
        ]);
    }
}
