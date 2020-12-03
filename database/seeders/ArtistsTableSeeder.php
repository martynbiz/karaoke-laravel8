<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artists')->delete();
        
        \DB::table('artists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Abba',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:15',
                'updated_at' => '2018-04-27 23:15:49',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Adele',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:15:50',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Aerosmith',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:15:52',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Alanis Morissette',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:15:54',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Alannah Myles',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:15:56',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Alicia Keys & Jay-Z',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:15:57',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Amy Winehouse',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:15:59',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Animals, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:00',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Ariana Grande',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:02',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Artic Monkeys',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:03',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Avril Lavigne',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:04',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'B-52\'s, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:06',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Babyshambles',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:07',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Beatles, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:09',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Bee Gees, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:10',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Black Sabbath',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:12',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Blondie',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:13',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Blue Öyster Cult',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:15',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Blur',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:16',
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Bob Dylan',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:18',
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Bob Marley',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:20',
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'Boney M',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:21',
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Bruce Springsteen',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:24',
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Carly Simon',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:25',
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'Carpenters, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:27',
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Cat Stevens',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:28',
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'Charlatans',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:30',
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Chic',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:32',
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Chuck Berry',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:34',
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Coldplay',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:35',
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'Cranberries, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:16',
                'updated_at' => '2018-04-27 23:16:37',
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Creedence Clearwater Revival',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:38',
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Cult, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:40',
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Cure, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:42',
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Daft Punk',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:43',
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'David Bowie',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:44',
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'Deep Purple',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:46',
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'Devo',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:48',
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'Disney',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:49',
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Dixie Chicks, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:50',
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'Dolly Parton',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:52',
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Don McLean',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:54',
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Doors, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:55',
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Dr Dre & Eminem',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:57',
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'Dusty Springfield',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:16:58',
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Earth, Wind and Fire',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:00',
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'Elton John',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:01',
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Elvis Presley',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:03',
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Eminem',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:04',
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Eric Clapton',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:06',
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'Fleetwood Mac',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:07',
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'Flight of the Conchords',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:09',
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'Florence + the Machine',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:17',
                'updated_at' => '2018-04-27 23:17:10',
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Fool\'s Garden',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:12',
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Foster the People',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:13',
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Frank Sinatra',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:15',
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Franz Ferdinand',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:16',
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Gerry & The Pacemakers',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:18',
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Gloria Gaynor',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:19',
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Gorillaz',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:21',
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'Green Day',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:23',
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Guns N Roses',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:25',
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Heart',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:26',
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Hole',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:28',
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Human League',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:29',
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Iggy Pop',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:30',
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Iggy Pop & The Stooges',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:32',
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Iron Maiden',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:33',
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Jack White',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:35',
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'James Taylor',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:36',
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'Jefferson Airplane',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:38',
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Jet',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:39',
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Jimi Hendrix',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:41',
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'John Lennon',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:18',
                'updated_at' => '2018-04-27 23:17:43',
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Johnny Cash',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:44',
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Journey',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:47',
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Joy Division',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:48',
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Justin Bieber',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:49',
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'KC & The Sunshine Band',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:51',
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'Kanye West',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:52',
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'Kasabian',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:54',
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'Keane',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:55',
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'Knack, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:57',
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Kool and The Gang',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:17:58',
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'Kula Shaker',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:00',
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'La Roux',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:02',
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Lady Gaga',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:03',
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'Led Zeppelin',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:05',
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Lenny Kravitz',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:07',
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Libertines, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:08',
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Lily Allen',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:09',
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'Lou Bega',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:11',
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'Lou Reed',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:12',
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'Lynyrd Skynyrd',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:14',
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'Madness',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:16',
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Madonna',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:17',
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Marilyn Manson',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:19',
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Mark Ronson & Bruno Mars',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:20',
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Maroon 5',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:22',
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'Marvin Gaye',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:24',
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'Metallica',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:26',
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Michael Jackson',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:28',
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Motley Crue',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:29',
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Mr. Big',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:19',
                'updated_at' => '2018-04-27 23:18:30',
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Nancy Sinatra',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:32',
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Neil Diamond',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:33',
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'New Order',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:35',
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Nirvana',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:37',
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Oasis',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:38',
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Offspring, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:40',
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'One Direction',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:41',
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'OneRepublic',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:43',
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Overtones, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:45',
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'PSY',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:46',
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Paloma Faith',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:48',
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Paolo Nutini',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:50',
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Pharrell Williams',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:51',
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Pink',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:53',
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Pink Floyd',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:54',
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Pixies, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:56',
            ),
            120 => 
            array (
                'id' => 121,
                'name' => 'Placebo',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:58',
            ),
            121 => 
            array (
                'id' => 122,
                'name' => 'Pogues, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:20',
                'updated_at' => '2018-04-27 23:18:59',
            ),
            122 => 
            array (
                'id' => 123,
                'name' => 'Primal Scream',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:01',
            ),
            123 => 
            array (
                'id' => 124,
                'name' => 'Proclaimers, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:02',
            ),
            124 => 
            array (
                'id' => 125,
                'name' => 'Public Enemy',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:04',
            ),
            125 => 
            array (
                'id' => 126,
                'name' => 'Pulp',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:06',
            ),
            126 => 
            array (
                'id' => 127,
                'name' => 'Queen',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:08',
            ),
            127 => 
            array (
                'id' => 128,
                'name' => 'REM',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:09',
            ),
            128 => 
            array (
                'id' => 129,
                'name' => 'Radiohead',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:11',
            ),
            129 => 
            array (
                'id' => 130,
                'name' => 'Red Hot Chili Peppers',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:12',
            ),
            130 => 
            array (
                'id' => 131,
                'name' => 'Richard Ashcroft',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:14',
            ),
            131 => 
            array (
                'id' => 132,
                'name' => 'Rick Ashley',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:16',
            ),
            132 => 
            array (
                'id' => 133,
                'name' => 'Robbie Williams',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:17',
            ),
            133 => 
            array (
                'id' => 134,
                'name' => 'Rock Of Ages',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:19',
            ),
            134 => 
            array (
                'id' => 135,
                'name' => 'Rod Stewart',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:20',
            ),
            135 => 
            array (
                'id' => 136,
                'name' => 'Rolling Stones',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:21',
            ),
            136 => 
            array (
                'id' => 137,
                'name' => 'Rolling Stones, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:23',
            ),
            137 => 
            array (
                'id' => 138,
                'name' => 'Roy Orbison',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:25',
            ),
            138 => 
            array (
                'id' => 139,
                'name' => 'Rufus Wainright',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:26',
            ),
            139 => 
            array (
                'id' => 140,
                'name' => 'Selena Gomez & The Scene',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:27',
            ),
            140 => 
            array (
                'id' => 141,
                'name' => 'Semisonic',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:21',
                'updated_at' => '2018-04-27 23:19:29',
            ),
            141 => 
            array (
                'id' => 142,
                'name' => 'Sheryl Crow',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:31',
            ),
            142 => 
            array (
                'id' => 143,
                'name' => 'Shirley Bassey',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:33',
            ),
            143 => 
            array (
                'id' => 144,
                'name' => 'Smash',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:34',
            ),
            144 => 
            array (
                'id' => 145,
                'name' => 'Smiths, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:36',
            ),
            145 => 
            array (
                'id' => 146,
                'name' => 'Soft Cell',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:38',
            ),
            146 => 
            array (
                'id' => 147,
                'name' => 'Steppenwolf',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:39',
            ),
            147 => 
            array (
                'id' => 148,
                'name' => 'Stereophonics',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:42',
            ),
            148 => 
            array (
                'id' => 149,
                'name' => 'Stevie Wonder',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:44',
            ),
            149 => 
            array (
                'id' => 150,
                'name' => 'Stone Roses, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:45',
            ),
            150 => 
            array (
                'id' => 151,
                'name' => 'Stranglers, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:46',
            ),
            151 => 
            array (
                'id' => 152,
                'name' => 'Strokes, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:48',
            ),
            152 => 
            array (
                'id' => 153,
                'name' => 'Survivor',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:50',
            ),
            153 => 
            array (
                'id' => 154,
                'name' => 'T-rex',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:51',
            ),
            154 => 
            array (
                'id' => 155,
                'name' => 'Take That',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:53',
            ),
            155 => 
            array (
                'id' => 156,
                'name' => 'Taylor Swift',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:54',
            ),
            156 => 
            array (
                'id' => 157,
                'name' => 'Team America World Police',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:55',
            ),
            157 => 
            array (
                'id' => 158,
                'name' => 'Texas',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:57',
            ),
            158 => 
            array (
                'id' => 159,
                'name' => 'The Pretty Reckless',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:19:58',
            ),
            159 => 
            array (
                'id' => 160,
                'name' => 'Thin Lizzy',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:00',
            ),
            160 => 
            array (
                'id' => 161,
                'name' => 'Traditional',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:02',
            ),
            161 => 
            array (
                'id' => 162,
                'name' => 'Undertones, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:04',
            ),
            162 => 
            array (
                'id' => 163,
                'name' => 'Velvet Underground',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:05',
            ),
            163 => 
            array (
                'id' => 164,
                'name' => 'Verve, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:07',
            ),
            164 => 
            array (
                'id' => 165,
                'name' => 'Waterboys',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:08',
            ),
            165 => 
            array (
                'id' => 166,
                'name' => 'White Snake',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:10',
            ),
            166 => 
            array (
                'id' => 167,
                'name' => 'White Stripes, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:11',
            ),
            167 => 
            array (
                'id' => 168,
                'name' => 'Whitney Houston',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:13',
            ),
            168 => 
            array (
                'id' => 169,
                'name' => 'Who, the',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:15',
            ),
            169 => 
            array (
                'id' => 170,
                'name' => 'Willie Nelson',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:17',
            ),
            170 => 
            array (
                'id' => 171,
                'name' => 'Womack & Womack',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:18',
            ),
            171 => 
            array (
                'id' => 172,
                'name' => 'Yeah Yeah Yeahs',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:20',
            ),
            172 => 
            array (
                'id' => 173,
                'name' => 'Ylvis',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:22',
            ),
            173 => 
            array (
                'id' => 174,
                'name' => 'Yvonne Elliman',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:23',
            ),
            174 => 
            array (
                'id' => 175,
                'name' => 'Zedd ft. Foxes',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:25',
            ),
            175 => 
            array (
                'id' => 176,
                'name' => 'AKB48',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:27',
            ),
            176 => 
            array (
                'id' => 177,
                'name' => 'BAAD',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:28',
            ),
            177 => 
            array (
                'id' => 178,
                'name' => 'BABYMETAL',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:22',
                'updated_at' => '2018-04-27 23:20:31',
            ),
            178 => 
            array (
                'id' => 179,
                'name' => 'LinkedHorizon',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:33',
            ),
            179 => 
            array (
                'id' => 180,
                'name' => 'Mr. Children',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:34',
            ),
            180 => 
            array (
                'id' => 181,
                'name' => 'ONE OK ROCK',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:36',
            ),
            181 => 
            array (
                'id' => 182,
                'name' => 'はっぴいえんど',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:37',
            ),
            182 => 
            array (
                'id' => 183,
                'name' => 'ウルフルズ',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:38',
            ),
            183 => 
            array (
                'id' => 184,
                'name' => 'キャンディーズ',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:40',
            ),
            184 => 
            array (
                'id' => 185,
                'name' => 'サザンオールスターズ',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:42',
            ),
            185 => 
            array (
                'id' => 186,
                'name' => 'スピッツ',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:43',
            ),
            186 => 
            array (
                'id' => 187,
                'name' => 'ディズニー',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:45',
            ),
            187 => 
            array (
                'id' => 188,
                'name' => 'ドラゴンボール',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:46',
            ),
            188 => 
            array (
                'id' => 189,
                'name' => 'ドラゴンボールＺ',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:47',
            ),
            189 => 
            array (
                'id' => 190,
                'name' => 'ピンクレイディー',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:49',
            ),
            190 => 
            array (
                'id' => 191,
                'name' => '千本桜',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:50',
            ),
            191 => 
            array (
                'id' => 192,
                'name' => '宇多田 ヒカル',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:52',
            ),
            192 => 
            array (
                'id' => 193,
                'name' => '松任谷由実',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:53',
            ),
            193 => 
            array (
                'id' => 194,
                'name' => '梶芽衣子',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:55',
            ),
            194 => 
            array (
                'id' => 195,
                'name' => '美空ひばり',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:56',
            ),
            195 => 
            array (
                'id' => 196,
                'name' => '長渕 剛',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:20:58',
            ),
            196 => 
            array (
                'id' => 197,
                'name' => '高橋洋子',
                'has_meta' => 1,
                'created_at' => '2018-04-27 23:00:23',
                'updated_at' => '2018-04-27 23:21:00',
            ),
            197 => 
            array (
                'id' => 198,
                'name' => 'Band Aid',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:50:55',
            ),
            198 => 
            array (
                'id' => 199,
                'name' => 'Bobby Helms',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:50:57',
            ),
            199 => 
            array (
                'id' => 200,
                'name' => 'Brenda Lee',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:50:58',
            ),
            200 => 
            array (
                'id' => 201,
                'name' => 'Britney Spears',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:50:59',
            ),
            201 => 
            array (
                'id' => 202,
                'name' => 'Bruno Mars',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:01',
            ),
            202 => 
            array (
                'id' => 203,
                'name' => 'Celine Dion',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:02',
            ),
            203 => 
            array (
                'id' => 204,
                'name' => 'Cher',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:04',
            ),
            204 => 
            array (
                'id' => 205,
                'name' => 'Childish Gambino',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:05',
            ),
            205 => 
            array (
                'id' => 206,
                'name' => 'Chris Rea',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:07',
            ),
            206 => 
            array (
                'id' => 207,
                'name' => 'Christmas Traditional',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:08',
            ),
            207 => 
            array (
                'id' => 208,
                'name' => 'Crazy World Of Arthur Brown',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:09',
            ),
            208 => 
            array (
                'id' => 209,
                'name' => 'Dandy Warhols',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:11',
            ),
            209 => 
            array (
                'id' => 210,
                'name' => 'Darkness, the',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:12',
            ),
            210 => 
            array (
                'id' => 211,
                'name' => 'Dean Martin',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:14',
            ),
            211 => 
            array (
                'id' => 212,
                'name' => 'Elbow',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:08',
                'updated_at' => '2019-10-29 22:51:15',
            ),
            212 => 
            array (
                'id' => 213,
                'name' => 'Foo Fighters',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:16',
            ),
            213 => 
            array (
                'id' => 214,
                'name' => 'Foreigner',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:18',
            ),
            214 => 
            array (
                'id' => 215,
                'name' => 'Frankie Goes To Hollywood',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:19',
            ),
            215 => 
            array (
                'id' => 216,
                'name' => 'Gene Autry',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:20',
            ),
            216 => 
            array (
                'id' => 217,
                'name' => 'George Michael',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:22',
            ),
            217 => 
            array (
                'id' => 218,
                'name' => 'Gwen Stafani',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:23',
            ),
            218 => 
            array (
                'id' => 219,
                'name' => 'Isaac Hayes',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:25',
            ),
            219 => 
            array (
                'id' => 220,
                'name' => 'John Lennon & Yoko Ono',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:26',
            ),
            220 => 
            array (
                'id' => 221,
                'name' => 'Kate Bush',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:28',
            ),
            221 => 
            array (
                'id' => 222,
                'name' => 'Kate Nash',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:29',
            ),
            222 => 
            array (
                'id' => 223,
                'name' => 'Killers, the',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:31',
            ),
            223 => 
            array (
                'id' => 224,
                'name' => 'Kinks, the',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:33',
            ),
            224 => 
            array (
                'id' => 225,
                'name' => 'Kylie Minogue',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:09',
                'updated_at' => '2019-10-29 22:51:34',
            ),
            225 => 
            array (
                'id' => 226,
                'name' => 'Lonely Island, the',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:35',
            ),
            226 => 
            array (
                'id' => 227,
                'name' => 'Lou Monte',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:36',
            ),
            227 => 
            array (
                'id' => 228,
                'name' => 'Mariah Carey',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:38',
            ),
            228 => 
            array (
                'id' => 229,
                'name' => 'Martina McBride',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:39',
            ),
            229 => 
            array (
                'id' => 230,
                'name' => 'Michael Buble',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:41',
            ),
            230 => 
            array (
                'id' => 231,
                'name' => 'Nelly Furtado',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:42',
            ),
            231 => 
            array (
                'id' => 232,
                'name' => 'Outcast',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:44',
            ),
            232 => 
            array (
                'id' => 233,
                'name' => 'Pogues feat. Kirsty MacColl',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:45',
            ),
            233 => 
            array (
                'id' => 234,
                'name' => 'Pretty Reckless, the',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:10',
                'updated_at' => '2019-10-29 22:51:46',
            ),
            234 => 
            array (
                'id' => 235,
                'name' => 'Sam Smith',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:48',
            ),
            235 => 
            array (
                'id' => 236,
                'name' => 'Shaggy',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:49',
            ),
            236 => 
            array (
                'id' => 237,
                'name' => 'Shakin\' Stevens',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:51',
            ),
            237 => 
            array (
                'id' => 238,
                'name' => 'Shed Seven',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:52',
            ),
            238 => 
            array (
                'id' => 239,
                'name' => 'Sonny & Cher',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:54',
            ),
            239 => 
            array (
                'id' => 240,
                'name' => 'The Lovin\' Spoonful',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:56',
            ),
            240 => 
            array (
                'id' => 241,
                'name' => 'Thurl Ravenscroft',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:57',
            ),
            241 => 
            array (
                'id' => 242,
                'name' => 'Toto',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:51:59',
            ),
            242 => 
            array (
                'id' => 243,
                'name' => 'Wham!',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:52:00',
            ),
            243 => 
            array (
                'id' => 244,
                'name' => 'Wizzard',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:52:01',
            ),
            244 => 
            array (
                'id' => 245,
                'name' => 'Cro',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:11',
                'updated_at' => '2019-10-29 22:52:03',
            ),
            245 => 
            array (
                'id' => 247,
                'name' => 'ザ・カーナビーツ',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:12',
                'updated_at' => '2019-10-29 22:52:06',
            ),
            246 => 
            array (
                'id' => 248,
                'name' => 'シャ乱Q',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:12',
                'updated_at' => '2019-10-29 22:52:07',
            ),
            247 => 
            array (
                'id' => 249,
                'name' => 'バラクーダー',
                'has_meta' => 1,
                'created_at' => '2019-10-29 22:46:12',
                'updated_at' => '2019-10-29 22:52:09',
            ),
            248 => 
            array (
                'id' => 250,
                'name' => 'Backstreet Boys',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:30',
                'updated_at' => '2019-10-31 21:08:13',
            ),
            249 => 
            array (
                'id' => 251,
                'name' => 'Corrs, the',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:31',
                'updated_at' => '2019-10-31 21:08:15',
            ),
            250 => 
            array (
                'id' => 252,
                'name' => 'Diana Ross',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:31',
                'updated_at' => '2019-10-31 21:08:16',
            ),
            251 => 
            array (
                'id' => 253,
                'name' => 'Dixie Chicks',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:31',
                'updated_at' => '2019-10-31 21:08:17',
            ),
            252 => 
            array (
                'id' => 254,
                'name' => 'KT Tunstall',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:31',
                'updated_at' => '2019-10-31 21:08:19',
            ),
            253 => 
            array (
                'id' => 255,
                'name' => 'Lovin\' Spoonful',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:32',
                'updated_at' => '2019-10-31 21:08:21',
            ),
            254 => 
            array (
                'id' => 256,
                'name' => 'Nickelback',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:32',
                'updated_at' => '2019-10-31 21:08:22',
            ),
            255 => 
            array (
                'id' => 257,
                'name' => 'THE TIMERS',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:33',
                'updated_at' => '2019-10-31 21:08:24',
            ),
            256 => 
            array (
                'id' => 258,
                'name' => '坂本九',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:07:33',
                'updated_at' => '2019-10-31 21:08:25',
            ),
            257 => 
            array (
                'id' => 259,
                'name' => 'Nina Simone',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:22:15',
                'updated_at' => '2019-10-31 21:22:28',
            ),
            258 => 
            array (
                'id' => 260,
                'name' => 'Pickett, Bobby Boris',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:22:15',
                'updated_at' => '2019-10-31 21:22:30',
            ),
            259 => 
            array (
                'id' => 261,
                'name' => 'Ray Parker Jr.',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:22:16',
                'updated_at' => '2019-10-31 21:22:31',
            ),
            260 => 
            array (
                'id' => 262,
                'name' => 'The Rocky Horror Show',
                'has_meta' => 1,
                'created_at' => '2019-10-31 21:22:16',
                'updated_at' => '2019-10-31 21:22:32',
            ),
            261 => 
            array (
                'id' => 263,
                'name' => 'AC DC',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:56',
                'updated_at' => '2019-10-31 23:41:32',
            ),
            262 => 
            array (
                'id' => 264,
                'name' => 'Billy Idol',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:56',
                'updated_at' => '2019-10-31 23:41:33',
            ),
            263 => 
            array (
                'id' => 265,
                'name' => 'Cyndi Lauper',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:56',
                'updated_at' => '2019-10-31 23:41:35',
            ),
            264 => 
            array (
                'id' => 266,
                'name' => 'Depeche Mode',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:56',
                'updated_at' => '2019-10-31 23:41:36',
            ),
            265 => 
            array (
                'id' => 267,
                'name' => 'Eurythmics',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:57',
                'updated_at' => '2019-10-31 23:41:38',
            ),
            266 => 
            array (
                'id' => 268,
                'name' => 'Massive Attack',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:57',
                'updated_at' => '2019-10-31 23:41:39',
            ),
            267 => 
            array (
                'id' => 269,
                'name' => 'Portishead',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:58',
                'updated_at' => '2019-10-31 23:41:40',
            ),
            268 => 
            array (
                'id' => 270,
                'name' => 'Roxette',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:58',
                'updated_at' => '2019-10-31 23:41:42',
            ),
            269 => 
            array (
                'id' => 271,
                'name' => 'Simple Minds',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:58',
                'updated_at' => '2019-10-31 23:41:43',
            ),
            270 => 
            array (
                'id' => 272,
                'name' => 'Travis',
                'has_meta' => 1,
                'created_at' => '2019-10-31 23:39:59',
                'updated_at' => '2019-10-31 23:41:44',
            ),
            271 => 
            array (
                'id' => 273,
                'name' => 'U2',
                'has_meta' => 1,
                'created_at' => '2019-11-01 00:15:12',
                'updated_at' => '2019-11-01 00:15:31',
            ),
            272 => 
            array (
                'id' => 274,
                'name' => 'Alphaville',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            273 => 
            array (
                'id' => 275,
                'name' => 'Beach Boys',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            274 => 
            array (
                'id' => 276,
                'name' => 'Bon Jovi',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:21',
                'updated_at' => '2020-01-20 21:03:23',
            ),
            275 => 
            array (
                'id' => 277,
                'name' => 'Bonnie Tyler',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:21',
                'updated_at' => '2020-01-20 21:03:24',
            ),
            276 => 
            array (
                'id' => 278,
                'name' => 'Bryan Adams',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:26',
            ),
            277 => 
            array (
                'id' => 279,
                'name' => 'Carly Rei Jepsen',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:27',
            ),
            278 => 
            array (
                'id' => 280,
                'name' => 'Chaka Demus And Pliers',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:28',
            ),
            279 => 
            array (
                'id' => 281,
                'name' => 'Cindi Lauper',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:30',
            ),
            280 => 
            array (
                'id' => 282,
                'name' => 'Deacon Blue',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:31',
            ),
            281 => 
            array (
                'id' => 283,
                'name' => 'Dire Straits',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:32',
            ),
            282 => 
            array (
                'id' => 284,
                'name' => 'Duran Duran',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:34',
            ),
            283 => 
            array (
                'id' => 285,
                'name' => 'Ed Sheeran',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            284 => 
            array (
                'id' => 286,
                'name' => 'Frankie Valli & The Four Seasons',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:36',
            ),
            285 => 
            array (
                'id' => 287,
                'name' => 'Garbage',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:22',
                'updated_at' => '2020-01-20 21:03:38',
            ),
            286 => 
            array (
                'id' => 288,
                'name' => 'Hollies',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:23',
                'updated_at' => '2020-01-20 21:03:39',
            ),
            287 => 
            array (
                'id' => 289,
                'name' => 'Ike & Tina Turner',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:23',
                'updated_at' => '2020-01-20 21:03:40',
            ),
            288 => 
            array (
                'id' => 290,
                'name' => 'James Brown',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:23',
                'updated_at' => '2020-01-20 21:03:42',
            ),
            289 => 
            array (
                'id' => 291,
                'name' => 'Kingsmen, the',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:23',
                'updated_at' => '2020-01-20 21:03:43',
            ),
            290 => 
            array (
                'id' => 292,
                'name' => 'Kiss',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:23',
                'updated_at' => '2020-01-20 21:03:45',
            ),
            291 => 
            array (
                'id' => 293,
                'name' => 'Lewis Capaldi',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:23',
                'updated_at' => '2020-01-20 21:03:46',
            ),
            292 => 
            array (
                'id' => 294,
                'name' => 'Neil Young',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:24',
                'updated_at' => '2020-01-20 21:03:48',
            ),
            293 => 
            array (
                'id' => 295,
                'name' => 'Pet Shop Boys',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:24',
                'updated_at' => '2020-01-20 21:03:49',
            ),
            294 => 
            array (
                'id' => 296,
                'name' => 'Scissor Sisters',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:24',
                'updated_at' => '2020-01-20 21:03:51',
            ),
            295 => 
            array (
                'id' => 297,
                'name' => 'Seal',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:24',
                'updated_at' => '2020-01-20 21:03:52',
            ),
            296 => 
            array (
                'id' => 298,
                'name' => 'Shamen',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:03:53',
            ),
            297 => 
            array (
                'id' => 299,
                'name' => 'Sugar hill gang',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:03:55',
            ),
            298 => 
            array (
                'id' => 300,
                'name' => 'Supergrass',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:03:56',
            ),
            299 => 
            array (
                'id' => 301,
                'name' => 'The Jam',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:03:57',
            ),
            300 => 
            array (
                'id' => 302,
                'name' => 'The Smashing Pumpkins',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:03:58',
            ),
            301 => 
            array (
                'id' => 303,
                'name' => 'Tina Turner',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:04:00',
            ),
            302 => 
            array (
                'id' => 304,
                'name' => 'Tom Jones',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:04:01',
            ),
            303 => 
            array (
                'id' => 305,
                'name' => 'Tom Jones & Mousse T',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:04:03',
            ),
            304 => 
            array (
                'id' => 306,
                'name' => 'Ub40',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:04:04',
            ),
            305 => 
            array (
                'id' => 307,
                'name' => 'Van Morrison',
                'has_meta' => 1,
                'created_at' => '2020-01-20 21:01:25',
                'updated_at' => '2020-01-20 21:04:06',
            ),
        ));
        
        
    }
}