<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tags')->delete();
        
        \DB::table('tags')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Disco',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pop',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => '70s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => '70s pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Electronica',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Europop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => '80s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Swedish',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:42',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Oldies',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:46',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Love',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:17:51',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Favourite',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:51',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Best song ever',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:51',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Classic rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Hard rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Female vocalists',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => '90s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Alternative',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Canadian',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Soundtrack',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Alternative rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Soul',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:08',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Jazz',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:08',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'British',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:08',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => '60s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'The Animals',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Best of 2016',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Deep house',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Rnb',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Love at first listen',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Sexy',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Hino',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Fode essa buceta',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Ballad',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:19',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Harry styles',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:19',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => '2014',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Sad',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Heartbreak',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Indie rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Arctic monkeys',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Post-punk revival',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Indie',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Pop rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:33',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'New wave',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Dance',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'The Beatles',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Psychedelic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:47',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Bee Gees',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:55',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Heavy metal',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Cowbell',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:06',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Britpop',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:19:09',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Folk',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:19:17',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Singer-songwriter',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:17',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Folk rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:18',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Reggae',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Roots reggae',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Jamaica',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Dub',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:27',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Chill',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:27',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Jamaican',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:29',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Chillout',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:32',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Dub reggae',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:33',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Anti-war',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:36',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'James bond',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:42',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Carpenters',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:45',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Acoustic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:48',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Madchester',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:50',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Funk',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:19:51',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Rock and Roll',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => '50s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Rock n roll',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Southern Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:02',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'Political',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:03',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Blues rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:05',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Post-punk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:09',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'The Cure',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:11',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Electronic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'House',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Glam rock',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Epic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Progressive rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:25',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Country',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Dixie chicks',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => '00s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Alt-country',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Loving Arms',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:41',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Mellow',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:43',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Modern country',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:45',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Banjo',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:46',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Female',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:51',
                'updated_at' => '2019-10-31 23:47:14',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => '2006',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Cool music i love',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Classic country',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:20:56',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Psychedelic Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'The Doors',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Blues',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:21:08',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Disney',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Piano',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Duets',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:27',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Male vocalists',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:31',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Elvis',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:45',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Rap',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Hip-Hop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Hip hop',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Guitar',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:48',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Unplugged',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:21:49',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Comedy',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Lyrical genius',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'New zealands fourth most popular digi-folk parody duo',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'FoTC',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Folk comedy',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Humor',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'New Zealand',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Sex',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Genius',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:05',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Funny',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Club',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Indie pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Eargasm',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Too good for a fucking twilight sequel',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:13',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Beautiful',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:15',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Best of 2015',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Slaying vocals',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Cover',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:22',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Soft rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'German',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'Catchy',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Summer',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Happy',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Swing',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:22:27',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Easy listening',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:27',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Classics',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'New york',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Scottish',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => '10s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Trip-hop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:51',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Punk rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:54',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Punk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:22:54',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Grunge',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:23:09',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'NWOBHM',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:23:22',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'New Wave of British Heavy Metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:23:30',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Americana',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:18',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Cash',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:19',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Folsom',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:19',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'British rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:34',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Electropop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Synthpop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Addictive',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:47',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Born this way',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:48',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Catchy as fuck',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:50',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Party',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:24:51',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Ska',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:25:05',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'Latin',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:08',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Industrial metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:33',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Industrial',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:33',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => '2010s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Ryan tedder',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'Payphone',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:44',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => '2012',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:44',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Katy perry birthday',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Katy perry',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => '10 of 10 stars',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Motown',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:49',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Thrash metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:25:51',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'King of pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:04',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'Glam Metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:05',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Hair metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:08',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Glam',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:11',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Rock ballads',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:14',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Kill bill',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:15',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Neil',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:20',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Go drunk eosin cabs',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:35',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Favorites',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:26:46',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Story of my life',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:00',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'Cutieee',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:01',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'Melancholic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:03',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'K-pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:06',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'Korean',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:06',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Favorites 2012',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:10',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'Best of 2014',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'Diane warren',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'On re-re-repeat',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:14',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'Blue-Eyed Soul',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:19',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'Seen live',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:34',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'P!nk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:38',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'Pop-Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:40',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'Pixies',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:27:55',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'Irish',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'Celtic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => 'Shrek',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:28:12',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => 'Trainspotting',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:28:22',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => 'Scrubs',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:28:41',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => 'Experimental',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:11',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => 'Brutal Death Metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:25',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => 'Rickroll',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:25',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => 'RICKROLLED',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:26',
                'updated_at' => '2019-10-31 23:47:15',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Rock ballad',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:36',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'The rolling stones',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'British invasion',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Morose Deep dilate Crimson',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:42',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Rolling stones',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:29:53',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Rockabilly',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:01',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'American',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => '2013',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'The Smiths',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:27',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Synth pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:28',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Britrock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Alternative  Punk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Welsh',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:37',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => '2015 single',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:37',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'British i like',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:44',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Stereo mcs',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:46',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Awesome',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Nostalgic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Gorgeous',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'FM4',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Happy birthday',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Birthday',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'Manchester',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:01',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Rocky',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:18',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Boybands',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:22',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Haters gonna hate',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:24',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Post-grunge',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:34',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Female vocalist',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Garage Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Classical',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:31:49',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Easy Listening Instrumental',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:49',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'John Peel',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:56',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Juno',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:57',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Proto-punk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:31:59',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Classic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:10',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Whitesnake',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:12',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'The who',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:24',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Mod',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:26',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Love songs',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:32',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Trains',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:34',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'New Orleans',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:34',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Synth rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:38',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'Norwegian',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:39',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Eurodance',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:39',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Comedians',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:39',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Zedd',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:42',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'J-pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Japanese',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            245 => 
            array (
                'id' => 246,
                'name' => 'JPop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            246 => 
            array (
                'id' => 247,
                'name' => 'Idol',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:47',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            247 => 
            array (
                'id' => 248,
                'name' => 'Anime',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:50',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            248 => 
            array (
                'id' => 249,
                'name' => 'Slam dunk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:50',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            249 => 
            array (
                'id' => 250,
                'name' => 'Kawaii metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:53',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            250 => 
            array (
                'id' => 251,
                'name' => 'Noise',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            251 => 
            array (
                'id' => 252,
                'name' => 'Black metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            252 => 
            array (
                'id' => 253,
                'name' => 'Skinhead',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            253 => 
            array (
                'id' => 254,
                'name' => 'RAC',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            254 => 
            array (
                'id' => 255,
                'name' => 'Female fronted metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:56',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            255 => 
            array (
                'id' => 256,
                'name' => 'Goregrind',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:32:58',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            256 => 
            array (
                'id' => 257,
                'name' => 'Mr.Children',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            257 => 
            array (
                'id' => 258,
                'name' => 'MrChildren',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            258 => 
            array (
                'id' => 259,
                'name' => 'Mr Children',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            259 => 
            array (
                'id' => 260,
                'name' => 'J-rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:06',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            260 => 
            array (
                'id' => 261,
                'name' => 'Masterpiece',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            261 => 
            array (
                'id' => 262,
                'name' => 'Amazing',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            262 => 
            array (
                'id' => 263,
                'name' => 'Jrock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:14',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            263 => 
            array (
                'id' => 264,
                'name' => 'Asian',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            264 => 
            array (
                'id' => 265,
                'name' => 'Band',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            265 => 
            array (
                'id' => 266,
                'name' => '70\'s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            266 => 
            array (
                'id' => 267,
                'name' => 'Female vocals',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            267 => 
            array (
                'id' => 268,
                'name' => 'Southern all stars',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            268 => 
            array (
                'id' => 269,
                'name' => 'Romantic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            269 => 
            array (
                'id' => 270,
                'name' => 'Spitz',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            270 => 
            array (
                'id' => 271,
                'name' => 'Neo acoustic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            271 => 
            array (
                'id' => 272,
                'name' => 'Utada hikaru',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:34',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            272 => 
            array (
                'id' => 273,
                'name' => 'Enka',
                'is_valid' => 1,
                'created_at' => '2018-04-28 12:33:39',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            273 => 
            array (
                'id' => 274,
                'name' => 'Neon genesis evangelion',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:42',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            274 => 
            array (
                'id' => 275,
                'name' => 'Gvbwv',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:56',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            275 => 
            array (
                'id' => 276,
                'name' => 'Nickelodeon',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:33:57',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            276 => 
            array (
                'id' => 277,
                'name' => 'Surf pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:02',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            277 => 
            array (
                'id' => 278,
                'name' => 'Musical genius',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:05',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            278 => 
            array (
                'id' => 279,
                'name' => 'Gothic Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:45',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            279 => 
            array (
                'id' => 280,
                'name' => 'Techno',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:47',
                'updated_at' => '2019-10-31 23:47:16',
            ),
            280 => 
            array (
                'id' => 281,
                'name' => 'Musical',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:53',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            281 => 
            array (
                'id' => 282,
                'name' => 'Soundtracks',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:53',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            282 => 
            array (
                'id' => 283,
                'name' => 'Bluegrass',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:56',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            283 => 
            array (
                'id' => 284,
                'name' => 'Bluesrock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:34:59',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            284 => 
            array (
                'id' => 285,
                'name' => 'Guitar-based digi-bongo acapella-rap-funk-comedy folk duo',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:12',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            285 => 
            array (
                'id' => 286,
                'name' => 'Vocal jazz',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:18',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            286 => 
            array (
                'id' => 287,
                'name' => 'UK',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            287 => 
            array (
                'id' => 288,
                'name' => 'Rock-classic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            288 => 
            array (
                'id' => 289,
                'name' => 'Pop punk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:26',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            289 => 
            array (
                'id' => 290,
                'name' => 'Guns N\' Roses',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            290 => 
            array (
                'id' => 291,
                'name' => '80\'s',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            291 => 
            array (
                'id' => 292,
                'name' => 'Indietronica',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:36:06',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            292 => 
            array (
                'id' => 293,
                'name' => 'Mambo',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:36:15',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            293 => 
            array (
                'id' => 294,
                'name' => 'Rhythm and blues',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:36:28',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            294 => 
            array (
                'id' => 295,
                'name' => 'Crazy taxi',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:36:44',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            295 => 
            array (
                'id' => 296,
                'name' => 'Boyband',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:36:45',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            296 => 
            array (
                'id' => 297,
                'name' => 'X factor',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:36:45',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            297 => 
            array (
                'id' => 298,
                'name' => 'Irishpunk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            298 => 
            array (
                'id' => 299,
                'name' => 'Whiskey',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            299 => 
            array (
                'id' => 300,
                'name' => 'Legend',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            300 => 
            array (
                'id' => 301,
                'name' => 'Irishfolkpunk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            301 => 
            array (
                'id' => 302,
                'name' => 'Old school',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:11',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            302 => 
            array (
                'id' => 303,
                'name' => 'Adult Alternative',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:16',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            303 => 
            array (
                'id' => 304,
                'name' => 'Funk Rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:19',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            304 => 
            array (
                'id' => 305,
                'name' => 'All',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:22',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            305 => 
            array (
                'id' => 306,
                'name' => 'Rock\'n\'roll',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:28',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            306 => 
            array (
                'id' => 307,
                'name' => 'Spanish',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            307 => 
            array (
                'id' => 308,
                'name' => 'Rock andaluz',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            308 => 
            array (
                'id' => 309,
                'name' => 'Spain',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            309 => 
            array (
                'id' => 310,
                'name' => 'The stone roses',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:51',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            310 => 
            array (
                'id' => 311,
                'name' => 'The Stanglers',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:52',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            311 => 
            array (
                'id' => 312,
                'name' => 'AOR',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:55',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            312 => 
            array (
                'id' => 313,
                'name' => 'Dance music',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:37:56',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            313 => 
            array (
                'id' => 314,
                'name' => 'Ethnic',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:07',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            314 => 
            array (
                'id' => 315,
                'name' => 'Bossa Nova',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:07',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            315 => 
            array (
                'id' => 316,
                'name' => 'Power pop',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:08',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            316 => 
            array (
                'id' => 317,
                'name' => 'British Punk',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:08',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            317 => 
            array (
                'id' => 318,
                'name' => 'Neo progressive',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:13',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            318 => 
            array (
                'id' => 319,
                'name' => 'Male',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:14',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            319 => 
            array (
                'id' => 320,
                'name' => 'The White Stripes',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:16',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            320 => 
            array (
                'id' => 321,
                'name' => 'Rocknroll',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:19',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            321 => 
            array (
                'id' => 322,
                'name' => 'ClassicMetal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:19',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            322 => 
            array (
                'id' => 323,
                'name' => 'Outlaw country',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:21',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            323 => 
            array (
                'id' => 324,
                'name' => 'Family',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:22',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            324 => 
            array (
                'id' => 325,
                'name' => 'Duos',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:22',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            325 => 
            array (
                'id' => 326,
                'name' => 'Elektro-dance-disco',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:22',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            326 => 
            array (
                'id' => 327,
                'name' => 'Slamming Brutal Death Metal',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:33',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            327 => 
            array (
                'id' => 328,
                'name' => 'Japanese rock',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:38',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            328 => 
            array (
                'id' => 329,
                'name' => 'Ulfuls',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:42',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            329 => 
            array (
                'id' => 330,
                'name' => 'Japanese music',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:45',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            330 => 
            array (
                'id' => 331,
                'name' => 'Tv show',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:38:51',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            331 => 
            array (
                'id' => 332,
                'name' => '50s-80s kayoukyoku-enka',
                'is_valid' => 0,
                'created_at' => '2018-04-28 12:39:01',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            332 => 
            array (
                'id' => 333,
                'name' => 'Christmas',
                'is_valid' => 1,
                'created_at' => '2019-10-29 22:46:18',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            333 => 
            array (
                'id' => 334,
                'name' => 'Xmas',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:18',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            334 => 
            array (
                'id' => 335,
                'name' => 'Holiday',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            335 => 
            array (
                'id' => 336,
                'name' => 'Christmas Songs',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            336 => 
            array (
                'id' => 337,
                'name' => 'Christmas Music',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:21',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            337 => 
            array (
                'id' => 338,
                'name' => 'Teen pop',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:27',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            338 => 
            array (
                'id' => 339,
                'name' => 'Circus',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:31',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            339 => 
            array (
                'id' => 340,
                'name' => 'Ballads',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:33',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            340 => 
            array (
                'id' => 341,
                'name' => 'Diva',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:37',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            341 => 
            array (
                'id' => 342,
                'name' => 'Titanic',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:41',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            342 => 
            array (
                'id' => 343,
                'name' => '1971',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:47',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            343 => 
            array (
                'id' => 344,
                'name' => 'Trap',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:49',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            344 => 
            array (
                'id' => 345,
                'name' => '2018',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:46:49',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            345 => 
            array (
                'id' => 346,
                'name' => 'X-mas',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:47:12',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            346 => 
            array (
                'id' => 347,
                'name' => 'Uplifting',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:47:15',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            347 => 
            array (
                'id' => 348,
                'name' => 'Yule',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:47:19',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            348 => 
            array (
                'id' => 349,
                'name' => 'Calm',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:47:37',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            349 => 
            array (
                'id' => 350,
                'name' => 'Weihnachten',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:47:53',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            350 => 
            array (
                'id' => 351,
                'name' => 'Blaxploitation',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:47:59',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            351 => 
            array (
                'id' => 352,
                'name' => 'The Killers',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:20',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            352 => 
            array (
                'id' => 353,
                'name' => 'Justin Timberlake',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            353 => 
            array (
                'id' => 354,
                'name' => 'Leapsandloved',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            354 => 
            array (
                'id' => 355,
                'name' => 'Music to be on a boat to',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:33',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            355 => 
            array (
                'id' => 356,
                'name' => 'Big sexy hook',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            356 => 
            array (
                'id' => 357,
                'name' => 'Pirates',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            357 => 
            array (
                'id' => 358,
                'name' => 'Lol',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            358 => 
            array (
                'id' => 359,
                'name' => 'Hilarious',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            359 => 
            array (
                'id' => 360,
                'name' => 'Jizz',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            360 => 
            array (
                'id' => 361,
                'name' => 'Leapsandsongoftheday',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:37',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            361 => 
            array (
                'id' => 362,
                'name' => 'Classy',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:37',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            362 => 
            array (
                'id' => 363,
                'name' => 'Fallon',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:38',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            363 => 
            array (
                'id' => 364,
                'name' => 'Snl',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:38',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            364 => 
            array (
                'id' => 365,
                'name' => 'Te2 tops of 2013',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:38',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            365 => 
            array (
                'id' => 366,
                'name' => 'Mocking Pop Culture',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:39',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            366 => 
            array (
                'id' => 367,
                'name' => 'Novelty',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            367 => 
            array (
                'id' => 368,
                'name' => 'Joule christmas',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            368 => 
            array (
                'id' => 369,
                'name' => 'Country christmas',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            369 => 
            array (
                'id' => 370,
                'name' => 'Jazzysxmas',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            370 => 
            array (
                'id' => 371,
                'name' => 'Holiday party',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            371 => 
            array (
                'id' => 372,
                'name' => 'Winter',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:49:32',
                'updated_at' => '2019-10-31 23:47:17',
            ),
            372 => 
            array (
                'id' => 373,
                'name' => 'Snow',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            373 => 
            array (
                'id' => 374,
                'name' => 'Christmas Time',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            374 => 
            array (
                'id' => 375,
                'name' => 'Christmas jazz',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:49:35',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            375 => 
            array (
                'id' => 376,
                'name' => 'The pretty reckless',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:49:49',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            376 => 
            array (
                'id' => 377,
                'name' => 'Dancehall',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:18',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            377 => 
            array (
                'id' => 378,
                'name' => 'Grinch',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            378 => 
            array (
                'id' => 379,
                'name' => 'Dr Seuss',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            379 => 
            array (
                'id' => 380,
                'name' => 'Wham',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:38',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            380 => 
            array (
                'id' => 381,
                'name' => 'Christmas favorites',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:39',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            381 => 
            array (
                'id' => 382,
                'name' => 'Showa',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:47',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            382 => 
            array (
                'id' => 383,
                'name' => 'Group',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            383 => 
            array (
                'id' => 384,
                'name' => 'J-funk',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            384 => 
            array (
                'id' => 385,
                'name' => 'R&b',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            385 => 
            array (
                'id' => 386,
                'name' => 'Slow jams',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            386 => 
            array (
                'id' => 387,
                'name' => 'Underground hip-hop',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:05',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            387 => 
            array (
                'id' => 388,
                'name' => 'Jordi Savall',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:08',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            388 => 
            array (
                'id' => 389,
                'name' => 'Dream pop',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            389 => 
            array (
                'id' => 390,
                'name' => 'Groovy',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            390 => 
            array (
                'id' => 391,
                'name' => 'Jecks',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            391 => 
            array (
                'id' => 392,
                'name' => 'Lounge',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:14',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            392 => 
            array (
                'id' => 393,
                'name' => 'Australian',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:34',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            393 => 
            array (
                'id' => 394,
                'name' => 'Italian',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            394 => 
            array (
                'id' => 395,
                'name' => 'Crooner',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            395 => 
            array (
                'id' => 396,
                'name' => 'Vocal',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            396 => 
            array (
                'id' => 397,
                'name' => 'Death metal',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            397 => 
            array (
                'id' => 398,
                'name' => 'Technical Death Metal',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            398 => 
            array (
                'id' => 399,
                'name' => 'Progressive death metal',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            399 => 
            array (
                'id' => 400,
                'name' => 'American tragedy',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:54',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            400 => 
            array (
                'id' => 401,
                'name' => 'Narrator',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:51:57',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            401 => 
            array (
                'id' => 402,
                'name' => 'Raop',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:52:03',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            402 => 
            array (
                'id' => 403,
                'name' => 'Group Sounds',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            403 => 
            array (
                'id' => 404,
                'name' => 'Gs',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            404 => 
            array (
                'id' => 405,
                'name' => '90s-00s j-pop',
                'is_valid' => 0,
                'created_at' => '2019-10-29 22:52:07',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            405 => 
            array (
                'id' => 406,
                'name' => 'The corrs',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:07:41',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            406 => 
            array (
                'id' => 407,
                'name' => '2017',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:08:04',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            407 => 
            array (
                'id' => 408,
                'name' => 'Gay Music Chart - 2019 week 04',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:08:08',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            408 => 
            array (
                'id' => 409,
                'name' => 'Gay music chart - 2019 week 05',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:08:08',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            409 => 
            array (
                'id' => 410,
                'name' => 'Hippie',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            410 => 
            array (
                'id' => 411,
                'name' => 'Theme Time Radio Hour',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            411 => 
            array (
                'id' => 412,
                'name' => 'Ghostbusters',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:22:23',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            412 => 
            array (
                'id' => 413,
                'name' => 'Funky',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:22:25',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            413 => 
            array (
                'id' => 414,
                'name' => 'Rocky Horror Picture Show',
                'is_valid' => 0,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            414 => 
            array (
                'id' => 415,
                'name' => 'Musicals',
                'is_valid' => 1,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            415 => 
            array (
                'id' => 416,
                'name' => 'ACDC',
                'is_valid' => 0,
                'created_at' => '2019-10-31 23:40:06',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            416 => 
            array (
                'id' => 417,
                'name' => 'Trip hop',
                'is_valid' => 0,
                'created_at' => '2019-10-31 23:40:46',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            417 => 
            array (
                'id' => 418,
                'name' => 'Downtempo',
                'is_valid' => 0,
                'created_at' => '2019-10-31 23:40:48',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            418 => 
            array (
                'id' => 419,
                'name' => 'Melancholy',
                'is_valid' => 0,
                'created_at' => '2019-10-31 23:40:51',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            419 => 
            array (
                'id' => 420,
                'name' => 'AC/DC',
                'is_valid' => 0,
                'created_at' => '2019-10-31 23:41:32',
                'updated_at' => '2019-10-31 23:47:18',
            ),
            420 => 
            array (
                'id' => 421,
                'name' => 'Favourite Songs',
                'is_valid' => 1,
                'created_at' => '2019-11-01 00:15:24',
                'updated_at' => '2019-11-01 00:15:24',
            ),
            421 => 
            array (
                'id' => 422,
                'name' => 'JazzyfunA-K',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            422 => 
            array (
                'id' => 423,
                'name' => 'Ragga',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:01:57',
                'updated_at' => '2020-01-20 21:01:57',
            ),
            423 => 
            array (
                'id' => 424,
                'name' => 'Cyndi lauper',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            424 => 
            array (
                'id' => 425,
                'name' => 'New romantic',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:15',
                'updated_at' => '2020-01-20 21:02:15',
            ),
            425 => 
            array (
                'id' => 426,
                'name' => 'Canada',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            426 => 
            array (
                'id' => 427,
                'name' => 'Folk-rock',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            427 => 
            array (
                'id' => 428,
                'name' => 'Relax',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            428 => 
            array (
                'id' => 429,
                'name' => 'Toronto',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            429 => 
            array (
                'id' => 430,
                'name' => 'Covers',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:45',
                'updated_at' => '2020-01-20 21:02:45',
            ),
            430 => 
            array (
                'id' => 431,
                'name' => '2010',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:47',
                'updated_at' => '2020-01-20 21:02:47',
            ),
            431 => 
            array (
                'id' => 432,
                'name' => 'Rave',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:02:52',
                'updated_at' => '2020-01-20 21:02:52',
            ),
            432 => 
            array (
                'id' => 433,
                'name' => 'Surf',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            433 => 
            array (
                'id' => 434,
                'name' => 'Slack reggay',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:28',
                'updated_at' => '2020-01-20 21:03:28',
            ),
            434 => 
            array (
                'id' => 435,
                'name' => 'Easy-listening',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            435 => 
            array (
                'id' => 436,
                'name' => 'Grime',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            436 => 
            array (
                'id' => 437,
                'name' => 'Seattle',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:43',
                'updated_at' => '2020-01-20 21:03:43',
            ),
            437 => 
            array (
                'id' => 438,
                'name' => 'Psico rock',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:43',
                'updated_at' => '2020-01-20 21:03:43',
            ),
            438 => 
            array (
                'id' => 439,
                'name' => 'Trance  house psychedelic  progressive goa',
                'is_valid' => 1,
                'created_at' => '2020-01-20 21:03:53',
                'updated_at' => '2020-01-20 21:03:53',
            ),
        ));
        
        
    }
}