<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArtistTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('artist_tag')->delete();
        
        \DB::table('artist_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'artist_id' => 1,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:33:45',
                'updated_at' => '2018-04-28 12:33:45',
            ),
            1 => 
            array (
                'id' => 2,
                'artist_id' => 1,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:33:45',
                'updated_at' => '2018-04-28 12:33:45',
            ),
            2 => 
            array (
                'id' => 3,
                'artist_id' => 1,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:33:45',
                'updated_at' => '2018-04-28 12:33:45',
            ),
            3 => 
            array (
                'id' => 4,
                'artist_id' => 1,
                'tag_id' => 8,
                'created_at' => '2018-04-28 12:33:45',
                'updated_at' => '2018-04-28 12:33:45',
            ),
            4 => 
            array (
                'id' => 5,
                'artist_id' => 1,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:33:45',
                'updated_at' => '2018-04-28 12:33:45',
            ),
            5 => 
            array (
                'id' => 6,
                'artist_id' => 2,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:33:47',
                'updated_at' => '2018-04-28 12:33:47',
            ),
            6 => 
            array (
                'id' => 7,
                'artist_id' => 2,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:47',
                'updated_at' => '2018-04-28 12:33:47',
            ),
            7 => 
            array (
                'id' => 8,
                'artist_id' => 2,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:33:47',
                'updated_at' => '2018-04-28 12:33:47',
            ),
            8 => 
            array (
                'id' => 9,
                'artist_id' => 2,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:33:47',
                'updated_at' => '2018-04-28 12:33:47',
            ),
            9 => 
            array (
                'id' => 10,
                'artist_id' => 2,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:33:47',
                'updated_at' => '2018-04-28 12:33:47',
            ),
            10 => 
            array (
                'id' => 11,
                'artist_id' => 3,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:48',
                'updated_at' => '2018-04-28 12:33:48',
            ),
            11 => 
            array (
                'id' => 12,
                'artist_id' => 3,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:33:48',
                'updated_at' => '2018-04-28 12:33:48',
            ),
            12 => 
            array (
                'id' => 13,
                'artist_id' => 3,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:33:48',
                'updated_at' => '2018-04-28 12:33:48',
            ),
            13 => 
            array (
                'id' => 14,
                'artist_id' => 3,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:33:48',
                'updated_at' => '2018-04-28 12:33:48',
            ),
            14 => 
            array (
                'id' => 15,
                'artist_id' => 3,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:33:48',
                'updated_at' => '2018-04-28 12:33:48',
            ),
            15 => 
            array (
                'id' => 16,
                'artist_id' => 4,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:50',
                'updated_at' => '2018-04-28 12:33:50',
            ),
            16 => 
            array (
                'id' => 17,
                'artist_id' => 4,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:50',
                'updated_at' => '2018-04-28 12:33:50',
            ),
            17 => 
            array (
                'id' => 18,
                'artist_id' => 4,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:33:50',
                'updated_at' => '2018-04-28 12:33:50',
            ),
            18 => 
            array (
                'id' => 19,
                'artist_id' => 4,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:33:50',
                'updated_at' => '2018-04-28 12:33:50',
            ),
            19 => 
            array (
                'id' => 20,
                'artist_id' => 4,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:33:50',
                'updated_at' => '2018-04-28 12:33:50',
            ),
            20 => 
            array (
                'id' => 21,
                'artist_id' => 5,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:51',
                'updated_at' => '2018-04-28 12:33:51',
            ),
            21 => 
            array (
                'id' => 22,
                'artist_id' => 5,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:51',
                'updated_at' => '2018-04-28 12:33:51',
            ),
            22 => 
            array (
                'id' => 23,
                'artist_id' => 5,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:33:51',
                'updated_at' => '2018-04-28 12:33:51',
            ),
            23 => 
            array (
                'id' => 24,
                'artist_id' => 5,
                'tag_id' => 19,
                'created_at' => '2018-04-28 12:33:51',
                'updated_at' => '2018-04-28 12:33:51',
            ),
            24 => 
            array (
                'id' => 25,
                'artist_id' => 5,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:33:51',
                'updated_at' => '2018-04-28 12:33:51',
            ),
            25 => 
            array (
                'id' => 26,
                'artist_id' => 7,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:33:54',
                'updated_at' => '2018-04-28 12:33:54',
            ),
            26 => 
            array (
                'id' => 27,
                'artist_id' => 7,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:33:54',
                'updated_at' => '2018-04-28 12:33:54',
            ),
            27 => 
            array (
                'id' => 28,
                'artist_id' => 7,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:54',
                'updated_at' => '2018-04-28 12:33:54',
            ),
            28 => 
            array (
                'id' => 29,
                'artist_id' => 7,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:33:54',
                'updated_at' => '2018-04-28 12:33:54',
            ),
            29 => 
            array (
                'id' => 30,
                'artist_id' => 7,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:33:54',
                'updated_at' => '2018-04-28 12:33:54',
            ),
            30 => 
            array (
                'id' => 31,
                'artist_id' => 8,
                'tag_id' => 275,
                'created_at' => '2018-04-28 12:33:56',
                'updated_at' => '2018-04-28 12:33:56',
            ),
            31 => 
            array (
                'id' => 32,
                'artist_id' => 9,
                'tag_id' => 276,
                'created_at' => '2018-04-28 12:33:57',
                'updated_at' => '2018-04-28 12:33:57',
            ),
            32 => 
            array (
                'id' => 33,
                'artist_id' => 9,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:33:57',
                'updated_at' => '2018-04-28 12:33:57',
            ),
            33 => 
            array (
                'id' => 34,
                'artist_id' => 9,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:57',
                'updated_at' => '2018-04-28 12:33:57',
            ),
            34 => 
            array (
                'id' => 35,
                'artist_id' => 9,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:33:57',
                'updated_at' => '2018-04-28 12:33:57',
            ),
            35 => 
            array (
                'id' => 36,
                'artist_id' => 10,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:33:59',
                'updated_at' => '2018-04-28 12:33:59',
            ),
            36 => 
            array (
                'id' => 37,
                'artist_id' => 10,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:33:59',
                'updated_at' => '2018-04-28 12:33:59',
            ),
            37 => 
            array (
                'id' => 38,
                'artist_id' => 10,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:59',
                'updated_at' => '2018-04-28 12:33:59',
            ),
            38 => 
            array (
                'id' => 39,
                'artist_id' => 10,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:33:59',
                'updated_at' => '2018-04-28 12:33:59',
            ),
            39 => 
            array (
                'id' => 40,
                'artist_id' => 10,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:33:59',
                'updated_at' => '2018-04-28 12:33:59',
            ),
            40 => 
            array (
                'id' => 41,
                'artist_id' => 11,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:34:00',
                'updated_at' => '2018-04-28 12:34:00',
            ),
            41 => 
            array (
                'id' => 42,
                'artist_id' => 11,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:34:00',
                'updated_at' => '2018-04-28 12:34:00',
            ),
            42 => 
            array (
                'id' => 43,
                'artist_id' => 11,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:00',
                'updated_at' => '2018-04-28 12:34:00',
            ),
            43 => 
            array (
                'id' => 44,
                'artist_id' => 11,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:34:00',
                'updated_at' => '2018-04-28 12:34:00',
            ),
            44 => 
            array (
                'id' => 45,
                'artist_id' => 11,
                'tag_id' => 19,
                'created_at' => '2018-04-28 12:34:00',
                'updated_at' => '2018-04-28 12:34:00',
            ),
            45 => 
            array (
                'id' => 46,
                'artist_id' => 12,
                'tag_id' => 277,
                'created_at' => '2018-04-28 12:34:02',
                'updated_at' => '2018-04-28 12:34:02',
            ),
            46 => 
            array (
                'id' => 47,
                'artist_id' => 12,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:34:02',
                'updated_at' => '2018-04-28 12:34:02',
            ),
            47 => 
            array (
                'id' => 48,
                'artist_id' => 12,
                'tag_id' => 70,
                'created_at' => '2018-04-28 12:34:02',
                'updated_at' => '2018-04-28 12:34:02',
            ),
            48 => 
            array (
                'id' => 49,
                'artist_id' => 13,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:34:03',
                'updated_at' => '2018-04-28 12:34:03',
            ),
            49 => 
            array (
                'id' => 50,
                'artist_id' => 13,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:34:03',
                'updated_at' => '2018-04-28 12:34:03',
            ),
            50 => 
            array (
                'id' => 51,
                'artist_id' => 13,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:34:03',
                'updated_at' => '2018-04-28 12:34:03',
            ),
            51 => 
            array (
                'id' => 52,
                'artist_id' => 13,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:03',
                'updated_at' => '2018-04-28 12:34:03',
            ),
            52 => 
            array (
                'id' => 53,
                'artist_id' => 13,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:34:03',
                'updated_at' => '2018-04-28 12:34:03',
            ),
            53 => 
            array (
                'id' => 54,
                'artist_id' => 14,
                'tag_id' => 278,
                'created_at' => '2018-04-28 12:34:05',
                'updated_at' => '2018-04-28 12:34:05',
            ),
            54 => 
            array (
                'id' => 55,
                'artist_id' => 14,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:05',
                'updated_at' => '2018-04-28 12:34:05',
            ),
            55 => 
            array (
                'id' => 56,
                'artist_id' => 14,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:34:05',
                'updated_at' => '2018-04-28 12:34:05',
            ),
            56 => 
            array (
                'id' => 57,
                'artist_id' => 14,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:34:05',
                'updated_at' => '2018-04-28 12:34:05',
            ),
            57 => 
            array (
                'id' => 58,
                'artist_id' => 14,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:34:05',
                'updated_at' => '2018-04-28 12:34:05',
            ),
            58 => 
            array (
                'id' => 59,
                'artist_id' => 15,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:34:06',
                'updated_at' => '2018-04-28 12:34:06',
            ),
            59 => 
            array (
                'id' => 60,
                'artist_id' => 15,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:34:06',
                'updated_at' => '2018-04-28 12:34:06',
            ),
            60 => 
            array (
                'id' => 61,
                'artist_id' => 16,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:34:08',
                'updated_at' => '2018-04-28 12:34:08',
            ),
            61 => 
            array (
                'id' => 62,
                'artist_id' => 16,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:34:08',
                'updated_at' => '2018-04-28 12:34:08',
            ),
            62 => 
            array (
                'id' => 63,
                'artist_id' => 16,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:08',
                'updated_at' => '2018-04-28 12:34:08',
            ),
            63 => 
            array (
                'id' => 64,
                'artist_id' => 16,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:34:08',
                'updated_at' => '2018-04-28 12:34:08',
            ),
            64 => 
            array (
                'id' => 65,
                'artist_id' => 16,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:08',
                'updated_at' => '2018-04-28 12:34:08',
            ),
            65 => 
            array (
                'id' => 66,
                'artist_id' => 17,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:34:10',
                'updated_at' => '2018-04-28 12:34:10',
            ),
            66 => 
            array (
                'id' => 67,
                'artist_id' => 17,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:34:10',
                'updated_at' => '2018-04-28 12:34:10',
            ),
            67 => 
            array (
                'id' => 68,
                'artist_id' => 17,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:10',
                'updated_at' => '2018-04-28 12:34:10',
            ),
            68 => 
            array (
                'id' => 69,
                'artist_id' => 17,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:34:10',
                'updated_at' => '2018-04-28 12:34:10',
            ),
            69 => 
            array (
                'id' => 70,
                'artist_id' => 17,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:34:10',
                'updated_at' => '2018-04-28 12:34:10',
            ),
            70 => 
            array (
                'id' => 71,
                'artist_id' => 18,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:11',
                'updated_at' => '2018-04-28 12:34:11',
            ),
            71 => 
            array (
                'id' => 72,
                'artist_id' => 18,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:34:11',
                'updated_at' => '2018-04-28 12:34:11',
            ),
            72 => 
            array (
                'id' => 73,
                'artist_id' => 18,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:11',
                'updated_at' => '2018-04-28 12:34:11',
            ),
            73 => 
            array (
                'id' => 74,
                'artist_id' => 18,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:34:11',
                'updated_at' => '2018-04-28 12:34:11',
            ),
            74 => 
            array (
                'id' => 75,
                'artist_id' => 18,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:34:11',
                'updated_at' => '2018-04-28 12:34:11',
            ),
            75 => 
            array (
                'id' => 76,
                'artist_id' => 19,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:34:13',
                'updated_at' => '2018-04-28 12:34:13',
            ),
            76 => 
            array (
                'id' => 77,
                'artist_id' => 19,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:13',
                'updated_at' => '2018-04-28 12:34:13',
            ),
            77 => 
            array (
                'id' => 78,
                'artist_id' => 19,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:34:13',
                'updated_at' => '2018-04-28 12:34:13',
            ),
            78 => 
            array (
                'id' => 79,
                'artist_id' => 19,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:34:13',
                'updated_at' => '2018-04-28 12:34:13',
            ),
            79 => 
            array (
                'id' => 80,
                'artist_id' => 19,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:34:13',
                'updated_at' => '2018-04-28 12:34:13',
            ),
            80 => 
            array (
                'id' => 81,
                'artist_id' => 20,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:34:14',
                'updated_at' => '2018-04-28 12:34:14',
            ),
            81 => 
            array (
                'id' => 82,
                'artist_id' => 20,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:34:14',
                'updated_at' => '2018-04-28 12:34:14',
            ),
            82 => 
            array (
                'id' => 83,
                'artist_id' => 20,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:14',
                'updated_at' => '2018-04-28 12:34:14',
            ),
            83 => 
            array (
                'id' => 84,
                'artist_id' => 20,
                'tag_id' => 55,
                'created_at' => '2018-04-28 12:34:14',
                'updated_at' => '2018-04-28 12:34:14',
            ),
            84 => 
            array (
                'id' => 85,
                'artist_id' => 20,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:14',
                'updated_at' => '2018-04-28 12:34:14',
            ),
            85 => 
            array (
                'id' => 86,
                'artist_id' => 21,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:34:16',
                'updated_at' => '2018-04-28 12:34:16',
            ),
            86 => 
            array (
                'id' => 87,
                'artist_id' => 21,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:34:16',
                'updated_at' => '2018-04-28 12:34:16',
            ),
            87 => 
            array (
                'id' => 88,
                'artist_id' => 21,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:34:16',
                'updated_at' => '2018-04-28 12:34:16',
            ),
            88 => 
            array (
                'id' => 89,
                'artist_id' => 21,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:16',
                'updated_at' => '2018-04-28 12:34:16',
            ),
            89 => 
            array (
                'id' => 90,
                'artist_id' => 22,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:34:18',
                'updated_at' => '2018-04-28 12:34:18',
            ),
            90 => 
            array (
                'id' => 91,
                'artist_id' => 22,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:34:18',
                'updated_at' => '2018-04-28 12:34:18',
            ),
            91 => 
            array (
                'id' => 92,
                'artist_id' => 22,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:34:18',
                'updated_at' => '2018-04-28 12:34:18',
            ),
            92 => 
            array (
                'id' => 93,
                'artist_id' => 22,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:34:18',
                'updated_at' => '2018-04-28 12:34:18',
            ),
            93 => 
            array (
                'id' => 94,
                'artist_id' => 23,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:20',
                'updated_at' => '2018-04-28 12:34:20',
            ),
            94 => 
            array (
                'id' => 95,
                'artist_id' => 23,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:20',
                'updated_at' => '2018-04-28 12:34:20',
            ),
            95 => 
            array (
                'id' => 96,
                'artist_id' => 23,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:34:20',
                'updated_at' => '2018-04-28 12:34:20',
            ),
            96 => 
            array (
                'id' => 97,
                'artist_id' => 23,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:34:20',
                'updated_at' => '2018-04-28 12:34:20',
            ),
            97 => 
            array (
                'id' => 98,
                'artist_id' => 23,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:34:20',
                'updated_at' => '2018-04-28 12:34:20',
            ),
            98 => 
            array (
                'id' => 99,
                'artist_id' => 24,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:34:22',
                'updated_at' => '2018-04-28 12:34:22',
            ),
            99 => 
            array (
                'id' => 100,
                'artist_id' => 24,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:34:22',
                'updated_at' => '2018-04-28 12:34:22',
            ),
            100 => 
            array (
                'id' => 101,
                'artist_id' => 24,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:34:22',
                'updated_at' => '2018-04-28 12:34:22',
            ),
            101 => 
            array (
                'id' => 102,
                'artist_id' => 24,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:34:22',
                'updated_at' => '2018-04-28 12:34:22',
            ),
            102 => 
            array (
                'id' => 103,
                'artist_id' => 24,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:22',
                'updated_at' => '2018-04-28 12:34:22',
            ),
            103 => 
            array (
                'id' => 104,
                'artist_id' => 26,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:34:25',
                'updated_at' => '2018-04-28 12:34:25',
            ),
            104 => 
            array (
                'id' => 105,
                'artist_id' => 26,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:34:25',
                'updated_at' => '2018-04-28 12:34:25',
            ),
            105 => 
            array (
                'id' => 106,
                'artist_id' => 26,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:25',
                'updated_at' => '2018-04-28 12:34:25',
            ),
            106 => 
            array (
                'id' => 107,
                'artist_id' => 26,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:34:25',
                'updated_at' => '2018-04-28 12:34:25',
            ),
            107 => 
            array (
                'id' => 108,
                'artist_id' => 26,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:25',
                'updated_at' => '2018-04-28 12:34:25',
            ),
            108 => 
            array (
                'id' => 109,
                'artist_id' => 27,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:34:32',
                'updated_at' => '2018-04-28 12:34:32',
            ),
            109 => 
            array (
                'id' => 110,
                'artist_id' => 27,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:34:32',
                'updated_at' => '2018-04-28 12:34:32',
            ),
            110 => 
            array (
                'id' => 111,
                'artist_id' => 27,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:34:32',
                'updated_at' => '2018-04-28 12:34:32',
            ),
            111 => 
            array (
                'id' => 112,
                'artist_id' => 27,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:34:32',
                'updated_at' => '2018-04-28 12:34:32',
            ),
            112 => 
            array (
                'id' => 113,
                'artist_id' => 27,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:34:32',
                'updated_at' => '2018-04-28 12:34:32',
            ),
            113 => 
            array (
                'id' => 114,
                'artist_id' => 28,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:34:35',
                'updated_at' => '2018-04-28 12:34:35',
            ),
            114 => 
            array (
                'id' => 115,
                'artist_id' => 28,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:34:35',
                'updated_at' => '2018-04-28 12:34:35',
            ),
            115 => 
            array (
                'id' => 116,
                'artist_id' => 28,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:34:35',
                'updated_at' => '2018-04-28 12:34:35',
            ),
            116 => 
            array (
                'id' => 117,
                'artist_id' => 28,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:34:35',
                'updated_at' => '2018-04-28 12:34:35',
            ),
            117 => 
            array (
                'id' => 118,
                'artist_id' => 28,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:34:35',
                'updated_at' => '2018-04-28 12:34:35',
            ),
            118 => 
            array (
                'id' => 119,
                'artist_id' => 29,
                'tag_id' => 70,
                'created_at' => '2018-04-28 12:34:36',
                'updated_at' => '2018-04-28 12:34:36',
            ),
            119 => 
            array (
                'id' => 120,
                'artist_id' => 29,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:36',
                'updated_at' => '2018-04-28 12:34:36',
            ),
            120 => 
            array (
                'id' => 121,
                'artist_id' => 29,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:34:36',
                'updated_at' => '2018-04-28 12:34:36',
            ),
            121 => 
            array (
                'id' => 122,
                'artist_id' => 29,
                'tag_id' => 72,
                'created_at' => '2018-04-28 12:34:36',
                'updated_at' => '2018-04-28 12:34:36',
            ),
            122 => 
            array (
                'id' => 123,
                'artist_id' => 29,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:36',
                'updated_at' => '2018-04-28 12:34:36',
            ),
            123 => 
            array (
                'id' => 124,
                'artist_id' => 30,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:38',
                'updated_at' => '2018-04-28 12:34:38',
            ),
            124 => 
            array (
                'id' => 125,
                'artist_id' => 30,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:34:38',
                'updated_at' => '2018-04-28 12:34:38',
            ),
            125 => 
            array (
                'id' => 126,
                'artist_id' => 30,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:34:38',
                'updated_at' => '2018-04-28 12:34:38',
            ),
            126 => 
            array (
                'id' => 127,
                'artist_id' => 30,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:34:38',
                'updated_at' => '2018-04-28 12:34:38',
            ),
            127 => 
            array (
                'id' => 128,
                'artist_id' => 30,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:34:38',
                'updated_at' => '2018-04-28 12:34:38',
            ),
            128 => 
            array (
                'id' => 129,
                'artist_id' => 32,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:42',
                'updated_at' => '2018-04-28 12:34:42',
            ),
            129 => 
            array (
                'id' => 130,
                'artist_id' => 32,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:42',
                'updated_at' => '2018-04-28 12:34:42',
            ),
            130 => 
            array (
                'id' => 131,
                'artist_id' => 32,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:34:42',
                'updated_at' => '2018-04-28 12:34:42',
            ),
            131 => 
            array (
                'id' => 132,
                'artist_id' => 32,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:34:42',
                'updated_at' => '2018-04-28 12:34:42',
            ),
            132 => 
            array (
                'id' => 133,
                'artist_id' => 32,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:34:42',
                'updated_at' => '2018-04-28 12:34:42',
            ),
            133 => 
            array (
                'id' => 134,
                'artist_id' => 34,
                'tag_id' => 279,
                'created_at' => '2018-04-28 12:34:45',
                'updated_at' => '2018-04-28 12:34:45',
            ),
            134 => 
            array (
                'id' => 135,
                'artist_id' => 34,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:34:45',
                'updated_at' => '2018-04-28 12:34:45',
            ),
            135 => 
            array (
                'id' => 136,
                'artist_id' => 34,
                'tag_id' => 77,
                'created_at' => '2018-04-28 12:34:45',
                'updated_at' => '2018-04-28 12:34:45',
            ),
            136 => 
            array (
                'id' => 137,
                'artist_id' => 34,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:45',
                'updated_at' => '2018-04-28 12:34:45',
            ),
            137 => 
            array (
                'id' => 138,
                'artist_id' => 34,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:34:45',
                'updated_at' => '2018-04-28 12:34:45',
            ),
            138 => 
            array (
                'id' => 139,
                'artist_id' => 35,
                'tag_id' => 280,
                'created_at' => '2018-04-28 12:34:47',
                'updated_at' => '2018-04-28 12:34:47',
            ),
            139 => 
            array (
                'id' => 140,
                'artist_id' => 35,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:34:47',
                'updated_at' => '2018-04-28 12:34:47',
            ),
            140 => 
            array (
                'id' => 141,
                'artist_id' => 35,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:34:47',
                'updated_at' => '2018-04-28 12:34:47',
            ),
            141 => 
            array (
                'id' => 142,
                'artist_id' => 35,
                'tag_id' => 79,
                'created_at' => '2018-04-28 12:34:47',
                'updated_at' => '2018-04-28 12:34:47',
            ),
            142 => 
            array (
                'id' => 143,
                'artist_id' => 35,
                'tag_id' => 5,
                'created_at' => '2018-04-28 12:34:47',
                'updated_at' => '2018-04-28 12:34:47',
            ),
            143 => 
            array (
                'id' => 144,
                'artist_id' => 36,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:48',
                'updated_at' => '2018-04-28 12:34:48',
            ),
            144 => 
            array (
                'id' => 145,
                'artist_id' => 36,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:34:48',
                'updated_at' => '2018-04-28 12:34:48',
            ),
            145 => 
            array (
                'id' => 146,
                'artist_id' => 36,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:48',
                'updated_at' => '2018-04-28 12:34:48',
            ),
            146 => 
            array (
                'id' => 147,
                'artist_id' => 36,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:34:48',
                'updated_at' => '2018-04-28 12:34:48',
            ),
            147 => 
            array (
                'id' => 148,
                'artist_id' => 36,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:34:48',
                'updated_at' => '2018-04-28 12:34:48',
            ),
            148 => 
            array (
                'id' => 149,
                'artist_id' => 37,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:34:50',
                'updated_at' => '2018-04-28 12:34:50',
            ),
            149 => 
            array (
                'id' => 150,
                'artist_id' => 37,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:50',
                'updated_at' => '2018-04-28 12:34:50',
            ),
            150 => 
            array (
                'id' => 151,
                'artist_id' => 37,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:50',
                'updated_at' => '2018-04-28 12:34:50',
            ),
            151 => 
            array (
                'id' => 152,
                'artist_id' => 37,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:34:50',
                'updated_at' => '2018-04-28 12:34:50',
            ),
            152 => 
            array (
                'id' => 153,
                'artist_id' => 37,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:34:50',
                'updated_at' => '2018-04-28 12:34:50',
            ),
            153 => 
            array (
                'id' => 154,
                'artist_id' => 38,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:34:52',
                'updated_at' => '2018-04-28 12:34:52',
            ),
            154 => 
            array (
                'id' => 155,
                'artist_id' => 38,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:34:52',
                'updated_at' => '2018-04-28 12:34:52',
            ),
            155 => 
            array (
                'id' => 156,
                'artist_id' => 38,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:34:52',
                'updated_at' => '2018-04-28 12:34:52',
            ),
            156 => 
            array (
                'id' => 157,
                'artist_id' => 38,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:34:52',
                'updated_at' => '2018-04-28 12:34:52',
            ),
            157 => 
            array (
                'id' => 158,
                'artist_id' => 38,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:52',
                'updated_at' => '2018-04-28 12:34:52',
            ),
            158 => 
            array (
                'id' => 159,
                'artist_id' => 39,
                'tag_id' => 281,
                'created_at' => '2018-04-28 12:34:53',
                'updated_at' => '2018-04-28 12:34:53',
            ),
            159 => 
            array (
                'id' => 160,
                'artist_id' => 39,
                'tag_id' => 282,
                'created_at' => '2018-04-28 12:34:53',
                'updated_at' => '2018-04-28 12:34:53',
            ),
            160 => 
            array (
                'id' => 161,
                'artist_id' => 39,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:34:53',
                'updated_at' => '2018-04-28 12:34:53',
            ),
            161 => 
            array (
                'id' => 162,
                'artist_id' => 39,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:34:53',
                'updated_at' => '2018-04-28 12:34:53',
            ),
            162 => 
            array (
                'id' => 163,
                'artist_id' => 41,
                'tag_id' => 283,
                'created_at' => '2018-04-28 12:34:56',
                'updated_at' => '2018-04-28 12:34:56',
            ),
            163 => 
            array (
                'id' => 164,
                'artist_id' => 41,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:34:56',
                'updated_at' => '2018-04-28 12:34:56',
            ),
            164 => 
            array (
                'id' => 165,
                'artist_id' => 41,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:34:56',
                'updated_at' => '2018-04-28 12:34:56',
            ),
            165 => 
            array (
                'id' => 166,
                'artist_id' => 41,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:34:56',
                'updated_at' => '2018-04-28 12:34:56',
            ),
            166 => 
            array (
                'id' => 167,
                'artist_id' => 41,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:34:56',
                'updated_at' => '2018-04-28 12:34:56',
            ),
            167 => 
            array (
                'id' => 168,
                'artist_id' => 42,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:34:57',
                'updated_at' => '2018-04-28 12:34:57',
            ),
            168 => 
            array (
                'id' => 169,
                'artist_id' => 42,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:34:57',
                'updated_at' => '2018-04-28 12:34:57',
            ),
            169 => 
            array (
                'id' => 170,
                'artist_id' => 42,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:34:57',
                'updated_at' => '2018-04-28 12:34:57',
            ),
            170 => 
            array (
                'id' => 171,
                'artist_id' => 42,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:34:57',
                'updated_at' => '2018-04-28 12:34:57',
            ),
            171 => 
            array (
                'id' => 172,
                'artist_id' => 42,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:34:57',
                'updated_at' => '2018-04-28 12:34:57',
            ),
            172 => 
            array (
                'id' => 173,
                'artist_id' => 43,
                'tag_id' => 284,
                'created_at' => '2018-04-28 12:34:59',
                'updated_at' => '2018-04-28 12:34:59',
            ),
            173 => 
            array (
                'id' => 174,
                'artist_id' => 43,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:34:59',
                'updated_at' => '2018-04-28 12:34:59',
            ),
            174 => 
            array (
                'id' => 175,
                'artist_id' => 45,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:35:02',
                'updated_at' => '2018-04-28 12:35:02',
            ),
            175 => 
            array (
                'id' => 176,
                'artist_id' => 45,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:35:02',
                'updated_at' => '2018-04-28 12:35:02',
            ),
            176 => 
            array (
                'id' => 177,
                'artist_id' => 45,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:35:02',
                'updated_at' => '2018-04-28 12:35:02',
            ),
            177 => 
            array (
                'id' => 178,
                'artist_id' => 45,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:02',
                'updated_at' => '2018-04-28 12:35:02',
            ),
            178 => 
            array (
                'id' => 179,
                'artist_id' => 45,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:35:02',
                'updated_at' => '2018-04-28 12:35:02',
            ),
            179 => 
            array (
                'id' => 180,
                'artist_id' => 46,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:35:03',
                'updated_at' => '2018-04-28 12:35:03',
            ),
            180 => 
            array (
                'id' => 181,
                'artist_id' => 46,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:35:03',
                'updated_at' => '2018-04-28 12:35:03',
            ),
            181 => 
            array (
                'id' => 182,
                'artist_id' => 46,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:35:03',
                'updated_at' => '2018-04-28 12:35:03',
            ),
            182 => 
            array (
                'id' => 183,
                'artist_id' => 46,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:35:03',
                'updated_at' => '2018-04-28 12:35:03',
            ),
            183 => 
            array (
                'id' => 184,
                'artist_id' => 46,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:03',
                'updated_at' => '2018-04-28 12:35:03',
            ),
            184 => 
            array (
                'id' => 185,
                'artist_id' => 47,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:05',
                'updated_at' => '2018-04-28 12:35:05',
            ),
            185 => 
            array (
                'id' => 186,
                'artist_id' => 47,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:05',
                'updated_at' => '2018-04-28 12:35:05',
            ),
            186 => 
            array (
                'id' => 187,
                'artist_id' => 47,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:35:05',
                'updated_at' => '2018-04-28 12:35:05',
            ),
            187 => 
            array (
                'id' => 188,
                'artist_id' => 47,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:05',
                'updated_at' => '2018-04-28 12:35:05',
            ),
            188 => 
            array (
                'id' => 189,
                'artist_id' => 47,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:35:05',
                'updated_at' => '2018-04-28 12:35:05',
            ),
            189 => 
            array (
                'id' => 190,
                'artist_id' => 48,
                'tag_id' => 72,
                'created_at' => '2018-04-28 12:35:06',
                'updated_at' => '2018-04-28 12:35:06',
            ),
            190 => 
            array (
                'id' => 191,
                'artist_id' => 48,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:06',
                'updated_at' => '2018-04-28 12:35:06',
            ),
            191 => 
            array (
                'id' => 192,
                'artist_id' => 48,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:06',
                'updated_at' => '2018-04-28 12:35:06',
            ),
            192 => 
            array (
                'id' => 193,
                'artist_id' => 48,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:35:06',
                'updated_at' => '2018-04-28 12:35:06',
            ),
            193 => 
            array (
                'id' => 194,
                'artist_id' => 48,
                'tag_id' => 70,
                'created_at' => '2018-04-28 12:35:06',
                'updated_at' => '2018-04-28 12:35:06',
            ),
            194 => 
            array (
                'id' => 195,
                'artist_id' => 49,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:35:08',
                'updated_at' => '2018-04-28 12:35:08',
            ),
            195 => 
            array (
                'id' => 196,
                'artist_id' => 49,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:35:08',
                'updated_at' => '2018-04-28 12:35:08',
            ),
            196 => 
            array (
                'id' => 197,
                'artist_id' => 49,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:35:08',
                'updated_at' => '2018-04-28 12:35:08',
            ),
            197 => 
            array (
                'id' => 198,
                'artist_id' => 49,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:08',
                'updated_at' => '2018-04-28 12:35:08',
            ),
            198 => 
            array (
                'id' => 199,
                'artist_id' => 50,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:09',
                'updated_at' => '2018-04-28 12:35:09',
            ),
            199 => 
            array (
                'id' => 200,
                'artist_id' => 50,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:35:09',
                'updated_at' => '2018-04-28 12:35:09',
            ),
            200 => 
            array (
                'id' => 201,
                'artist_id' => 50,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:09',
                'updated_at' => '2018-04-28 12:35:09',
            ),
            201 => 
            array (
                'id' => 202,
                'artist_id' => 50,
                'tag_id' => 75,
                'created_at' => '2018-04-28 12:35:09',
                'updated_at' => '2018-04-28 12:35:09',
            ),
            202 => 
            array (
                'id' => 203,
                'artist_id' => 50,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:35:09',
                'updated_at' => '2018-04-28 12:35:09',
            ),
            203 => 
            array (
                'id' => 204,
                'artist_id' => 51,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:11',
                'updated_at' => '2018-04-28 12:35:11',
            ),
            204 => 
            array (
                'id' => 205,
                'artist_id' => 51,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:11',
                'updated_at' => '2018-04-28 12:35:11',
            ),
            205 => 
            array (
                'id' => 206,
                'artist_id' => 51,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:35:11',
                'updated_at' => '2018-04-28 12:35:11',
            ),
            206 => 
            array (
                'id' => 207,
                'artist_id' => 51,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:35:11',
                'updated_at' => '2018-04-28 12:35:11',
            ),
            207 => 
            array (
                'id' => 208,
                'artist_id' => 51,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:11',
                'updated_at' => '2018-04-28 12:35:11',
            ),
            208 => 
            array (
                'id' => 209,
                'artist_id' => 52,
                'tag_id' => 285,
                'created_at' => '2018-04-28 12:35:12',
                'updated_at' => '2018-04-28 12:35:12',
            ),
            209 => 
            array (
                'id' => 210,
                'artist_id' => 52,
                'tag_id' => 108,
                'created_at' => '2018-04-28 12:35:12',
                'updated_at' => '2018-04-28 12:35:12',
            ),
            210 => 
            array (
                'id' => 211,
                'artist_id' => 52,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:35:12',
                'updated_at' => '2018-04-28 12:35:12',
            ),
            211 => 
            array (
                'id' => 212,
                'artist_id' => 52,
                'tag_id' => 114,
                'created_at' => '2018-04-28 12:35:12',
                'updated_at' => '2018-04-28 12:35:12',
            ),
            212 => 
            array (
                'id' => 213,
                'artist_id' => 52,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:12',
                'updated_at' => '2018-04-28 12:35:12',
            ),
            213 => 
            array (
                'id' => 214,
                'artist_id' => 53,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:35:13',
                'updated_at' => '2018-04-28 12:35:13',
            ),
            214 => 
            array (
                'id' => 215,
                'artist_id' => 53,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:13',
                'updated_at' => '2018-04-28 12:35:13',
            ),
            215 => 
            array (
                'id' => 216,
                'artist_id' => 53,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:13',
                'updated_at' => '2018-04-28 12:35:13',
            ),
            216 => 
            array (
                'id' => 217,
                'artist_id' => 53,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:35:13',
                'updated_at' => '2018-04-28 12:35:13',
            ),
            217 => 
            array (
                'id' => 218,
                'artist_id' => 53,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:13',
                'updated_at' => '2018-04-28 12:35:13',
            ),
            218 => 
            array (
                'id' => 219,
                'artist_id' => 54,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:15',
                'updated_at' => '2018-04-28 12:35:15',
            ),
            219 => 
            array (
                'id' => 220,
                'artist_id' => 54,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:15',
                'updated_at' => '2018-04-28 12:35:15',
            ),
            220 => 
            array (
                'id' => 221,
                'artist_id' => 54,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:35:15',
                'updated_at' => '2018-04-28 12:35:15',
            ),
            221 => 
            array (
                'id' => 222,
                'artist_id' => 54,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:35:15',
                'updated_at' => '2018-04-28 12:35:15',
            ),
            222 => 
            array (
                'id' => 223,
                'artist_id' => 54,
                'tag_id' => 127,
                'created_at' => '2018-04-28 12:35:15',
                'updated_at' => '2018-04-28 12:35:15',
            ),
            223 => 
            array (
                'id' => 224,
                'artist_id' => 55,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:17',
                'updated_at' => '2018-04-28 12:35:17',
            ),
            224 => 
            array (
                'id' => 225,
                'artist_id' => 55,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:35:17',
                'updated_at' => '2018-04-28 12:35:17',
            ),
            225 => 
            array (
                'id' => 226,
                'artist_id' => 55,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:17',
                'updated_at' => '2018-04-28 12:35:17',
            ),
            226 => 
            array (
                'id' => 227,
                'artist_id' => 55,
                'tag_id' => 204,
                'created_at' => '2018-04-28 12:35:17',
                'updated_at' => '2018-04-28 12:35:17',
            ),
            227 => 
            array (
                'id' => 228,
                'artist_id' => 55,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:35:17',
                'updated_at' => '2018-04-28 12:35:17',
            ),
            228 => 
            array (
                'id' => 229,
                'artist_id' => 56,
                'tag_id' => 286,
                'created_at' => '2018-04-28 12:35:18',
                'updated_at' => '2018-04-28 12:35:18',
            ),
            229 => 
            array (
                'id' => 230,
                'artist_id' => 56,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:35:18',
                'updated_at' => '2018-04-28 12:35:18',
            ),
            230 => 
            array (
                'id' => 231,
                'artist_id' => 56,
                'tag_id' => 131,
                'created_at' => '2018-04-28 12:35:18',
                'updated_at' => '2018-04-28 12:35:18',
            ),
            231 => 
            array (
                'id' => 232,
                'artist_id' => 56,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:35:18',
                'updated_at' => '2018-04-28 12:35:18',
            ),
            232 => 
            array (
                'id' => 233,
                'artist_id' => 56,
                'tag_id' => 132,
                'created_at' => '2018-04-28 12:35:18',
                'updated_at' => '2018-04-28 12:35:18',
            ),
            233 => 
            array (
                'id' => 234,
                'artist_id' => 57,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:20',
                'updated_at' => '2018-04-28 12:35:20',
            ),
            234 => 
            array (
                'id' => 235,
                'artist_id' => 57,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:35:20',
                'updated_at' => '2018-04-28 12:35:20',
            ),
            235 => 
            array (
                'id' => 236,
                'artist_id' => 57,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:20',
                'updated_at' => '2018-04-28 12:35:20',
            ),
            236 => 
            array (
                'id' => 237,
                'artist_id' => 57,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:20',
                'updated_at' => '2018-04-28 12:35:20',
            ),
            237 => 
            array (
                'id' => 238,
                'artist_id' => 57,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:35:20',
                'updated_at' => '2018-04-28 12:35:20',
            ),
            238 => 
            array (
                'id' => 239,
                'artist_id' => 58,
                'tag_id' => 287,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2018-04-28 12:35:21',
            ),
            239 => 
            array (
                'id' => 240,
                'artist_id' => 58,
                'tag_id' => 288,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2018-04-28 12:35:21',
            ),
            240 => 
            array (
                'id' => 241,
                'artist_id' => 58,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2018-04-28 12:35:21',
            ),
            241 => 
            array (
                'id' => 242,
                'artist_id' => 58,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2018-04-28 12:35:21',
            ),
            242 => 
            array (
                'id' => 243,
                'artist_id' => 58,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:35:21',
                'updated_at' => '2018-04-28 12:35:21',
            ),
            243 => 
            array (
                'id' => 244,
                'artist_id' => 59,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:35:23',
                'updated_at' => '2018-04-28 12:35:23',
            ),
            244 => 
            array (
                'id' => 245,
                'artist_id' => 59,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:35:23',
                'updated_at' => '2018-04-28 12:35:23',
            ),
            245 => 
            array (
                'id' => 246,
                'artist_id' => 59,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:35:23',
                'updated_at' => '2018-04-28 12:35:23',
            ),
            246 => 
            array (
                'id' => 247,
                'artist_id' => 59,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:23',
                'updated_at' => '2018-04-28 12:35:23',
            ),
            247 => 
            array (
                'id' => 248,
                'artist_id' => 59,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:35:23',
                'updated_at' => '2018-04-28 12:35:23',
            ),
            248 => 
            array (
                'id' => 249,
                'artist_id' => 60,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:25',
                'updated_at' => '2018-04-28 12:35:25',
            ),
            249 => 
            array (
                'id' => 250,
                'artist_id' => 60,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:35:25',
                'updated_at' => '2018-04-28 12:35:25',
            ),
            250 => 
            array (
                'id' => 251,
                'artist_id' => 60,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:35:25',
                'updated_at' => '2018-04-28 12:35:25',
            ),
            251 => 
            array (
                'id' => 252,
                'artist_id' => 60,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:25',
                'updated_at' => '2018-04-28 12:35:25',
            ),
            252 => 
            array (
                'id' => 253,
                'artist_id' => 60,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:25',
                'updated_at' => '2018-04-28 12:35:25',
            ),
            253 => 
            array (
                'id' => 254,
                'artist_id' => 61,
                'tag_id' => 289,
                'created_at' => '2018-04-28 12:35:26',
                'updated_at' => '2018-04-28 12:35:26',
            ),
            254 => 
            array (
                'id' => 255,
                'artist_id' => 61,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:35:26',
                'updated_at' => '2018-04-28 12:35:26',
            ),
            255 => 
            array (
                'id' => 256,
                'artist_id' => 61,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:26',
                'updated_at' => '2018-04-28 12:35:26',
            ),
            256 => 
            array (
                'id' => 257,
                'artist_id' => 61,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:35:26',
                'updated_at' => '2018-04-28 12:35:26',
            ),
            257 => 
            array (
                'id' => 258,
                'artist_id' => 61,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:26',
                'updated_at' => '2018-04-28 12:35:26',
            ),
            258 => 
            array (
                'id' => 259,
                'artist_id' => 62,
                'tag_id' => 290,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2018-04-28 12:35:28',
            ),
            259 => 
            array (
                'id' => 260,
                'artist_id' => 62,
                'tag_id' => 291,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2018-04-28 12:35:28',
            ),
            260 => 
            array (
                'id' => 261,
                'artist_id' => 62,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2018-04-28 12:35:28',
            ),
            261 => 
            array (
                'id' => 262,
                'artist_id' => 62,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2018-04-28 12:35:28',
            ),
            262 => 
            array (
                'id' => 263,
                'artist_id' => 62,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:28',
                'updated_at' => '2018-04-28 12:35:28',
            ),
            263 => 
            array (
                'id' => 264,
                'artist_id' => 63,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:29',
                'updated_at' => '2018-04-28 12:35:29',
            ),
            264 => 
            array (
                'id' => 265,
                'artist_id' => 63,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:29',
                'updated_at' => '2018-04-28 12:35:29',
            ),
            265 => 
            array (
                'id' => 266,
                'artist_id' => 63,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:35:29',
                'updated_at' => '2018-04-28 12:35:29',
            ),
            266 => 
            array (
                'id' => 267,
                'artist_id' => 63,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:35:29',
                'updated_at' => '2018-04-28 12:35:29',
            ),
            267 => 
            array (
                'id' => 268,
                'artist_id' => 63,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:35:29',
                'updated_at' => '2018-04-28 12:35:29',
            ),
            268 => 
            array (
                'id' => 269,
                'artist_id' => 64,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:35:31',
                'updated_at' => '2018-04-28 12:35:31',
            ),
            269 => 
            array (
                'id' => 270,
                'artist_id' => 64,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:35:31',
                'updated_at' => '2018-04-28 12:35:31',
            ),
            270 => 
            array (
                'id' => 271,
                'artist_id' => 64,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:31',
                'updated_at' => '2018-04-28 12:35:31',
            ),
            271 => 
            array (
                'id' => 272,
                'artist_id' => 64,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:31',
                'updated_at' => '2018-04-28 12:35:31',
            ),
            272 => 
            array (
                'id' => 273,
                'artist_id' => 64,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:35:31',
                'updated_at' => '2018-04-28 12:35:31',
            ),
            273 => 
            array (
                'id' => 274,
                'artist_id' => 65,
                'tag_id' => 148,
                'created_at' => '2018-04-28 12:35:32',
                'updated_at' => '2018-04-28 12:35:32',
            ),
            274 => 
            array (
                'id' => 275,
                'artist_id' => 65,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:35:32',
                'updated_at' => '2018-04-28 12:35:32',
            ),
            275 => 
            array (
                'id' => 276,
                'artist_id' => 65,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:35:32',
                'updated_at' => '2018-04-28 12:35:32',
            ),
            276 => 
            array (
                'id' => 277,
                'artist_id' => 65,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:35:32',
                'updated_at' => '2018-04-28 12:35:32',
            ),
            277 => 
            array (
                'id' => 278,
                'artist_id' => 65,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:32',
                'updated_at' => '2018-04-28 12:35:32',
            ),
            278 => 
            array (
                'id' => 279,
                'artist_id' => 66,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:35:33',
                'updated_at' => '2018-04-28 12:35:33',
            ),
            279 => 
            array (
                'id' => 280,
                'artist_id' => 66,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:33',
                'updated_at' => '2018-04-28 12:35:33',
            ),
            280 => 
            array (
                'id' => 281,
                'artist_id' => 66,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:35:33',
                'updated_at' => '2018-04-28 12:35:33',
            ),
            281 => 
            array (
                'id' => 282,
                'artist_id' => 66,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:33',
                'updated_at' => '2018-04-28 12:35:33',
            ),
            282 => 
            array (
                'id' => 283,
                'artist_id' => 66,
                'tag_id' => 231,
                'created_at' => '2018-04-28 12:35:33',
                'updated_at' => '2018-04-28 12:35:33',
            ),
            283 => 
            array (
                'id' => 284,
                'artist_id' => 67,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:36',
                'updated_at' => '2018-04-28 12:35:36',
            ),
            284 => 
            array (
                'id' => 285,
                'artist_id' => 67,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:35:36',
                'updated_at' => '2018-04-28 12:35:36',
            ),
            285 => 
            array (
                'id' => 286,
                'artist_id' => 67,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:35:36',
                'updated_at' => '2018-04-28 12:35:36',
            ),
            286 => 
            array (
                'id' => 287,
                'artist_id' => 67,
                'tag_id' => 226,
                'created_at' => '2018-04-28 12:35:36',
                'updated_at' => '2018-04-28 12:35:36',
            ),
            287 => 
            array (
                'id' => 288,
                'artist_id' => 67,
                'tag_id' => 231,
                'created_at' => '2018-04-28 12:35:36',
                'updated_at' => '2018-04-28 12:35:36',
            ),
            288 => 
            array (
                'id' => 289,
                'artist_id' => 68,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:35:37',
                'updated_at' => '2018-04-28 12:35:37',
            ),
            289 => 
            array (
                'id' => 290,
                'artist_id' => 68,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:35:37',
                'updated_at' => '2018-04-28 12:35:37',
            ),
            290 => 
            array (
                'id' => 291,
                'artist_id' => 68,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:35:37',
                'updated_at' => '2018-04-28 12:35:37',
            ),
            291 => 
            array (
                'id' => 292,
                'artist_id' => 68,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:35:37',
                'updated_at' => '2018-04-28 12:35:37',
            ),
            292 => 
            array (
                'id' => 293,
                'artist_id' => 68,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:35:37',
                'updated_at' => '2018-04-28 12:35:37',
            ),
            293 => 
            array (
                'id' => 294,
                'artist_id' => 69,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:39',
                'updated_at' => '2018-04-28 12:35:39',
            ),
            294 => 
            array (
                'id' => 295,
                'artist_id' => 69,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:35:39',
                'updated_at' => '2018-04-28 12:35:39',
            ),
            295 => 
            array (
                'id' => 296,
                'artist_id' => 69,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:35:39',
                'updated_at' => '2018-04-28 12:35:39',
            ),
            296 => 
            array (
                'id' => 297,
                'artist_id' => 69,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:39',
                'updated_at' => '2018-04-28 12:35:39',
            ),
            297 => 
            array (
                'id' => 298,
                'artist_id' => 69,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:35:39',
                'updated_at' => '2018-04-28 12:35:39',
            ),
            298 => 
            array (
                'id' => 299,
                'artist_id' => 70,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:35:40',
                'updated_at' => '2018-04-28 12:35:40',
            ),
            299 => 
            array (
                'id' => 300,
                'artist_id' => 70,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:35:40',
                'updated_at' => '2018-04-28 12:35:40',
            ),
            300 => 
            array (
                'id' => 301,
                'artist_id' => 70,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:35:40',
                'updated_at' => '2018-04-28 12:35:40',
            ),
            301 => 
            array (
                'id' => 302,
                'artist_id' => 70,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:40',
                'updated_at' => '2018-04-28 12:35:40',
            ),
            302 => 
            array (
                'id' => 303,
                'artist_id' => 70,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:40',
                'updated_at' => '2018-04-28 12:35:40',
            ),
            303 => 
            array (
                'id' => 304,
                'artist_id' => 71,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:35:42',
                'updated_at' => '2018-04-28 12:35:42',
            ),
            304 => 
            array (
                'id' => 305,
                'artist_id' => 71,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:42',
                'updated_at' => '2018-04-28 12:35:42',
            ),
            305 => 
            array (
                'id' => 306,
                'artist_id' => 71,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:35:42',
                'updated_at' => '2018-04-28 12:35:42',
            ),
            306 => 
            array (
                'id' => 307,
                'artist_id' => 71,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:35:42',
                'updated_at' => '2018-04-28 12:35:42',
            ),
            307 => 
            array (
                'id' => 308,
                'artist_id' => 71,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:42',
                'updated_at' => '2018-04-28 12:35:42',
            ),
            308 => 
            array (
                'id' => 309,
                'artist_id' => 72,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:44',
                'updated_at' => '2018-04-28 12:35:44',
            ),
            309 => 
            array (
                'id' => 310,
                'artist_id' => 72,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:44',
                'updated_at' => '2018-04-28 12:35:44',
            ),
            310 => 
            array (
                'id' => 311,
                'artist_id' => 72,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:35:44',
                'updated_at' => '2018-04-28 12:35:44',
            ),
            311 => 
            array (
                'id' => 312,
                'artist_id' => 72,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:44',
                'updated_at' => '2018-04-28 12:35:44',
            ),
            312 => 
            array (
                'id' => 313,
                'artist_id' => 72,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:35:44',
                'updated_at' => '2018-04-28 12:35:44',
            ),
            313 => 
            array (
                'id' => 314,
                'artist_id' => 73,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:45',
                'updated_at' => '2018-04-28 12:35:45',
            ),
            314 => 
            array (
                'id' => 315,
                'artist_id' => 73,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:45',
                'updated_at' => '2018-04-28 12:35:45',
            ),
            315 => 
            array (
                'id' => 316,
                'artist_id' => 73,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:35:45',
                'updated_at' => '2018-04-28 12:35:45',
            ),
            316 => 
            array (
                'id' => 317,
                'artist_id' => 73,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:35:45',
                'updated_at' => '2018-04-28 12:35:45',
            ),
            317 => 
            array (
                'id' => 318,
                'artist_id' => 73,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:35:45',
                'updated_at' => '2018-04-28 12:35:45',
            ),
            318 => 
            array (
                'id' => 319,
                'artist_id' => 74,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:47',
                'updated_at' => '2018-04-28 12:35:47',
            ),
            319 => 
            array (
                'id' => 320,
                'artist_id' => 74,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:47',
                'updated_at' => '2018-04-28 12:35:47',
            ),
            320 => 
            array (
                'id' => 321,
                'artist_id' => 74,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:35:47',
                'updated_at' => '2018-04-28 12:35:47',
            ),
            321 => 
            array (
                'id' => 322,
                'artist_id' => 74,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:35:47',
                'updated_at' => '2018-04-28 12:35:47',
            ),
            322 => 
            array (
                'id' => 323,
                'artist_id' => 74,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:47',
                'updated_at' => '2018-04-28 12:35:47',
            ),
            323 => 
            array (
                'id' => 324,
                'artist_id' => 75,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:35:48',
                'updated_at' => '2018-04-28 12:35:48',
            ),
            324 => 
            array (
                'id' => 325,
                'artist_id' => 75,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:35:48',
                'updated_at' => '2018-04-28 12:35:48',
            ),
            325 => 
            array (
                'id' => 326,
                'artist_id' => 75,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:35:48',
                'updated_at' => '2018-04-28 12:35:48',
            ),
            326 => 
            array (
                'id' => 327,
                'artist_id' => 75,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:48',
                'updated_at' => '2018-04-28 12:35:48',
            ),
            327 => 
            array (
                'id' => 328,
                'artist_id' => 75,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:48',
                'updated_at' => '2018-04-28 12:35:48',
            ),
            328 => 
            array (
                'id' => 329,
                'artist_id' => 76,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:35:50',
                'updated_at' => '2018-04-28 12:35:50',
            ),
            329 => 
            array (
                'id' => 330,
                'artist_id' => 76,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:50',
                'updated_at' => '2018-04-28 12:35:50',
            ),
            330 => 
            array (
                'id' => 331,
                'artist_id' => 76,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:35:50',
                'updated_at' => '2018-04-28 12:35:50',
            ),
            331 => 
            array (
                'id' => 332,
                'artist_id' => 76,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:35:50',
                'updated_at' => '2018-04-28 12:35:50',
            ),
            332 => 
            array (
                'id' => 333,
                'artist_id' => 76,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:35:50',
                'updated_at' => '2018-04-28 12:35:50',
            ),
            333 => 
            array (
                'id' => 334,
                'artist_id' => 77,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:35:52',
                'updated_at' => '2018-04-28 12:35:52',
            ),
            334 => 
            array (
                'id' => 335,
                'artist_id' => 77,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:35:52',
                'updated_at' => '2018-04-28 12:35:52',
            ),
            335 => 
            array (
                'id' => 336,
                'artist_id' => 77,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:35:52',
                'updated_at' => '2018-04-28 12:35:52',
            ),
            336 => 
            array (
                'id' => 337,
                'artist_id' => 77,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:52',
                'updated_at' => '2018-04-28 12:35:52',
            ),
            337 => 
            array (
                'id' => 338,
                'artist_id' => 77,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:52',
                'updated_at' => '2018-04-28 12:35:52',
            ),
            338 => 
            array (
                'id' => 339,
                'artist_id' => 78,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:35:54',
                'updated_at' => '2018-04-28 12:35:54',
            ),
            339 => 
            array (
                'id' => 340,
                'artist_id' => 78,
                'tag_id' => 252,
                'created_at' => '2018-04-28 12:35:54',
                'updated_at' => '2018-04-28 12:35:54',
            ),
            340 => 
            array (
                'id' => 341,
                'artist_id' => 78,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:35:54',
                'updated_at' => '2018-04-28 12:35:54',
            ),
            341 => 
            array (
                'id' => 342,
                'artist_id' => 78,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:35:54',
                'updated_at' => '2018-04-28 12:35:54',
            ),
            342 => 
            array (
                'id' => 343,
                'artist_id' => 80,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:35:57',
                'updated_at' => '2018-04-28 12:35:57',
            ),
            343 => 
            array (
                'id' => 344,
                'artist_id' => 80,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:35:57',
                'updated_at' => '2018-04-28 12:35:57',
            ),
            344 => 
            array (
                'id' => 345,
                'artist_id' => 80,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:35:57',
                'updated_at' => '2018-04-28 12:35:57',
            ),
            345 => 
            array (
                'id' => 346,
                'artist_id' => 80,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:35:57',
                'updated_at' => '2018-04-28 12:35:57',
            ),
            346 => 
            array (
                'id' => 347,
                'artist_id' => 81,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:35:59',
                'updated_at' => '2018-04-28 12:35:59',
            ),
            347 => 
            array (
                'id' => 348,
                'artist_id' => 81,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:35:59',
                'updated_at' => '2018-04-28 12:35:59',
            ),
            348 => 
            array (
                'id' => 349,
                'artist_id' => 81,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:35:59',
                'updated_at' => '2018-04-28 12:35:59',
            ),
            349 => 
            array (
                'id' => 350,
                'artist_id' => 81,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:35:59',
                'updated_at' => '2018-04-28 12:35:59',
            ),
            350 => 
            array (
                'id' => 351,
                'artist_id' => 81,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:35:59',
                'updated_at' => '2018-04-28 12:35:59',
            ),
            351 => 
            array (
                'id' => 352,
                'artist_id' => 82,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:36:00',
                'updated_at' => '2018-04-28 12:36:00',
            ),
            352 => 
            array (
                'id' => 353,
                'artist_id' => 82,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:36:00',
                'updated_at' => '2018-04-28 12:36:00',
            ),
            353 => 
            array (
                'id' => 354,
                'artist_id' => 82,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:00',
                'updated_at' => '2018-04-28 12:36:00',
            ),
            354 => 
            array (
                'id' => 355,
                'artist_id' => 82,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:36:00',
                'updated_at' => '2018-04-28 12:36:00',
            ),
            355 => 
            array (
                'id' => 356,
                'artist_id' => 82,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:00',
                'updated_at' => '2018-04-28 12:36:00',
            ),
            356 => 
            array (
                'id' => 357,
                'artist_id' => 84,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:36:03',
                'updated_at' => '2018-04-28 12:36:03',
            ),
            357 => 
            array (
                'id' => 358,
                'artist_id' => 84,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:36:03',
                'updated_at' => '2018-04-28 12:36:03',
            ),
            358 => 
            array (
                'id' => 359,
                'artist_id' => 84,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:03',
                'updated_at' => '2018-04-28 12:36:03',
            ),
            359 => 
            array (
                'id' => 360,
                'artist_id' => 84,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:36:03',
                'updated_at' => '2018-04-28 12:36:03',
            ),
            360 => 
            array (
                'id' => 361,
                'artist_id' => 84,
                'tag_id' => 132,
                'created_at' => '2018-04-28 12:36:03',
                'updated_at' => '2018-04-28 12:36:03',
            ),
            361 => 
            array (
                'id' => 362,
                'artist_id' => 85,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:36:05',
                'updated_at' => '2018-04-28 12:36:05',
            ),
            362 => 
            array (
                'id' => 363,
                'artist_id' => 85,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:36:05',
                'updated_at' => '2018-04-28 12:36:05',
            ),
            363 => 
            array (
                'id' => 364,
                'artist_id' => 85,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:05',
                'updated_at' => '2018-04-28 12:36:05',
            ),
            364 => 
            array (
                'id' => 365,
                'artist_id' => 85,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:36:05',
                'updated_at' => '2018-04-28 12:36:05',
            ),
            365 => 
            array (
                'id' => 366,
                'artist_id' => 85,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:05',
                'updated_at' => '2018-04-28 12:36:05',
            ),
            366 => 
            array (
                'id' => 367,
                'artist_id' => 86,
                'tag_id' => 292,
                'created_at' => '2018-04-28 12:36:06',
                'updated_at' => '2018-04-28 12:36:06',
            ),
            367 => 
            array (
                'id' => 368,
                'artist_id' => 86,
                'tag_id' => 147,
                'created_at' => '2018-04-28 12:36:06',
                'updated_at' => '2018-04-28 12:36:06',
            ),
            368 => 
            array (
                'id' => 369,
                'artist_id' => 86,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:36:06',
                'updated_at' => '2018-04-28 12:36:06',
            ),
            369 => 
            array (
                'id' => 370,
                'artist_id' => 86,
                'tag_id' => 148,
                'created_at' => '2018-04-28 12:36:06',
                'updated_at' => '2018-04-28 12:36:06',
            ),
            370 => 
            array (
                'id' => 371,
                'artist_id' => 86,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:36:06',
                'updated_at' => '2018-04-28 12:36:06',
            ),
            371 => 
            array (
                'id' => 372,
                'artist_id' => 87,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:08',
                'updated_at' => '2018-04-28 12:36:08',
            ),
            372 => 
            array (
                'id' => 373,
                'artist_id' => 87,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:36:08',
                'updated_at' => '2018-04-28 12:36:08',
            ),
            373 => 
            array (
                'id' => 374,
                'artist_id' => 87,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:36:08',
                'updated_at' => '2018-04-28 12:36:08',
            ),
            374 => 
            array (
                'id' => 375,
                'artist_id' => 87,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:36:08',
                'updated_at' => '2018-04-28 12:36:08',
            ),
            375 => 
            array (
                'id' => 376,
                'artist_id' => 87,
                'tag_id' => 225,
                'created_at' => '2018-04-28 12:36:08',
                'updated_at' => '2018-04-28 12:36:08',
            ),
            376 => 
            array (
                'id' => 377,
                'artist_id' => 88,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:09',
                'updated_at' => '2018-04-28 12:36:09',
            ),
            377 => 
            array (
                'id' => 378,
                'artist_id' => 88,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:09',
                'updated_at' => '2018-04-28 12:36:09',
            ),
            378 => 
            array (
                'id' => 379,
                'artist_id' => 88,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:36:09',
                'updated_at' => '2018-04-28 12:36:09',
            ),
            379 => 
            array (
                'id' => 380,
                'artist_id' => 88,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:36:09',
                'updated_at' => '2018-04-28 12:36:09',
            ),
            380 => 
            array (
                'id' => 381,
                'artist_id' => 88,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:36:09',
                'updated_at' => '2018-04-28 12:36:09',
            ),
            381 => 
            array (
                'id' => 382,
                'artist_id' => 89,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:11',
                'updated_at' => '2018-04-28 12:36:11',
            ),
            382 => 
            array (
                'id' => 383,
                'artist_id' => 89,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:36:11',
                'updated_at' => '2018-04-28 12:36:11',
            ),
            383 => 
            array (
                'id' => 384,
                'artist_id' => 89,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:11',
                'updated_at' => '2018-04-28 12:36:11',
            ),
            384 => 
            array (
                'id' => 385,
                'artist_id' => 89,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:11',
                'updated_at' => '2018-04-28 12:36:11',
            ),
            385 => 
            array (
                'id' => 386,
                'artist_id' => 89,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:36:11',
                'updated_at' => '2018-04-28 12:36:11',
            ),
            386 => 
            array (
                'id' => 387,
                'artist_id' => 91,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:14',
                'updated_at' => '2018-04-28 12:36:14',
            ),
            387 => 
            array (
                'id' => 388,
                'artist_id' => 91,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:36:14',
                'updated_at' => '2018-04-28 12:36:14',
            ),
            388 => 
            array (
                'id' => 389,
                'artist_id' => 91,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:36:14',
                'updated_at' => '2018-04-28 12:36:14',
            ),
            389 => 
            array (
                'id' => 390,
                'artist_id' => 91,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:36:14',
                'updated_at' => '2018-04-28 12:36:14',
            ),
            390 => 
            array (
                'id' => 391,
                'artist_id' => 91,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:36:14',
                'updated_at' => '2018-04-28 12:36:14',
            ),
            391 => 
            array (
                'id' => 392,
                'artist_id' => 92,
                'tag_id' => 293,
                'created_at' => '2018-04-28 12:36:15',
                'updated_at' => '2018-04-28 12:36:15',
            ),
            392 => 
            array (
                'id' => 393,
                'artist_id' => 92,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:15',
                'updated_at' => '2018-04-28 12:36:15',
            ),
            393 => 
            array (
                'id' => 394,
                'artist_id' => 92,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:36:15',
                'updated_at' => '2018-04-28 12:36:15',
            ),
            394 => 
            array (
                'id' => 395,
                'artist_id' => 92,
                'tag_id' => 154,
                'created_at' => '2018-04-28 12:36:15',
                'updated_at' => '2018-04-28 12:36:15',
            ),
            395 => 
            array (
                'id' => 396,
                'artist_id' => 92,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:36:15',
                'updated_at' => '2018-04-28 12:36:15',
            ),
            396 => 
            array (
                'id' => 397,
                'artist_id' => 93,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:17',
                'updated_at' => '2018-04-28 12:36:17',
            ),
            397 => 
            array (
                'id' => 398,
                'artist_id' => 93,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:17',
                'updated_at' => '2018-04-28 12:36:17',
            ),
            398 => 
            array (
                'id' => 399,
                'artist_id' => 93,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:36:17',
                'updated_at' => '2018-04-28 12:36:17',
            ),
            399 => 
            array (
                'id' => 400,
                'artist_id' => 93,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:36:17',
                'updated_at' => '2018-04-28 12:36:17',
            ),
            400 => 
            array (
                'id' => 401,
                'artist_id' => 93,
                'tag_id' => 231,
                'created_at' => '2018-04-28 12:36:17',
                'updated_at' => '2018-04-28 12:36:17',
            ),
            401 => 
            array (
                'id' => 402,
                'artist_id' => 94,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:19',
                'updated_at' => '2018-04-28 12:36:19',
            ),
            402 => 
            array (
                'id' => 403,
                'artist_id' => 94,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:36:19',
                'updated_at' => '2018-04-28 12:36:19',
            ),
            403 => 
            array (
                'id' => 404,
                'artist_id' => 94,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:19',
                'updated_at' => '2018-04-28 12:36:19',
            ),
            404 => 
            array (
                'id' => 405,
                'artist_id' => 94,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:36:19',
                'updated_at' => '2018-04-28 12:36:19',
            ),
            405 => 
            array (
                'id' => 406,
                'artist_id' => 94,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:36:19',
                'updated_at' => '2018-04-28 12:36:19',
            ),
            406 => 
            array (
                'id' => 407,
                'artist_id' => 95,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:36:20',
                'updated_at' => '2018-04-28 12:36:20',
            ),
            407 => 
            array (
                'id' => 408,
                'artist_id' => 95,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:20',
                'updated_at' => '2018-04-28 12:36:20',
            ),
            408 => 
            array (
                'id' => 409,
                'artist_id' => 95,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:36:20',
                'updated_at' => '2018-04-28 12:36:20',
            ),
            409 => 
            array (
                'id' => 410,
                'artist_id' => 95,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:36:20',
                'updated_at' => '2018-04-28 12:36:20',
            ),
            410 => 
            array (
                'id' => 411,
                'artist_id' => 95,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:36:20',
                'updated_at' => '2018-04-28 12:36:20',
            ),
            411 => 
            array (
                'id' => 412,
                'artist_id' => 96,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:22',
                'updated_at' => '2018-04-28 12:36:22',
            ),
            412 => 
            array (
                'id' => 413,
                'artist_id' => 96,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:36:22',
                'updated_at' => '2018-04-28 12:36:22',
            ),
            413 => 
            array (
                'id' => 414,
                'artist_id' => 96,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:36:22',
                'updated_at' => '2018-04-28 12:36:22',
            ),
            414 => 
            array (
                'id' => 415,
                'artist_id' => 96,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:22',
                'updated_at' => '2018-04-28 12:36:22',
            ),
            415 => 
            array (
                'id' => 416,
                'artist_id' => 96,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:36:22',
                'updated_at' => '2018-04-28 12:36:22',
            ),
            416 => 
            array (
                'id' => 417,
                'artist_id' => 97,
                'tag_id' => 156,
                'created_at' => '2018-04-28 12:36:24',
                'updated_at' => '2018-04-28 12:36:24',
            ),
            417 => 
            array (
                'id' => 418,
                'artist_id' => 97,
                'tag_id' => 155,
                'created_at' => '2018-04-28 12:36:24',
                'updated_at' => '2018-04-28 12:36:24',
            ),
            418 => 
            array (
                'id' => 419,
                'artist_id' => 97,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:36:24',
                'updated_at' => '2018-04-28 12:36:24',
            ),
            419 => 
            array (
                'id' => 420,
                'artist_id' => 97,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:24',
                'updated_at' => '2018-04-28 12:36:24',
            ),
            420 => 
            array (
                'id' => 421,
                'artist_id' => 97,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:24',
                'updated_at' => '2018-04-28 12:36:24',
            ),
            421 => 
            array (
                'id' => 422,
                'artist_id' => 99,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:27',
                'updated_at' => '2018-04-28 12:36:27',
            ),
            422 => 
            array (
                'id' => 423,
                'artist_id' => 99,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:27',
                'updated_at' => '2018-04-28 12:36:27',
            ),
            423 => 
            array (
                'id' => 424,
                'artist_id' => 99,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:36:27',
                'updated_at' => '2018-04-28 12:36:27',
            ),
            424 => 
            array (
                'id' => 425,
                'artist_id' => 99,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:27',
                'updated_at' => '2018-04-28 12:36:27',
            ),
            425 => 
            array (
                'id' => 426,
                'artist_id' => 99,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:36:27',
                'updated_at' => '2018-04-28 12:36:27',
            ),
            426 => 
            array (
                'id' => 427,
                'artist_id' => 100,
                'tag_id' => 294,
                'created_at' => '2018-04-28 12:36:28',
                'updated_at' => '2018-04-28 12:36:28',
            ),
            427 => 
            array (
                'id' => 428,
                'artist_id' => 100,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:36:28',
                'updated_at' => '2018-04-28 12:36:28',
            ),
            428 => 
            array (
                'id' => 429,
                'artist_id' => 100,
                'tag_id' => 164,
                'created_at' => '2018-04-28 12:36:28',
                'updated_at' => '2018-04-28 12:36:28',
            ),
            429 => 
            array (
                'id' => 430,
                'artist_id' => 100,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:36:28',
                'updated_at' => '2018-04-28 12:36:28',
            ),
            430 => 
            array (
                'id' => 431,
                'artist_id' => 100,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:36:28',
                'updated_at' => '2018-04-28 12:36:28',
            ),
            431 => 
            array (
                'id' => 432,
                'artist_id' => 101,
                'tag_id' => 165,
                'created_at' => '2018-04-28 12:36:30',
                'updated_at' => '2018-04-28 12:36:30',
            ),
            432 => 
            array (
                'id' => 433,
                'artist_id' => 101,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:36:30',
                'updated_at' => '2018-04-28 12:36:30',
            ),
            433 => 
            array (
                'id' => 434,
                'artist_id' => 101,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:36:30',
                'updated_at' => '2018-04-28 12:36:30',
            ),
            434 => 
            array (
                'id' => 435,
                'artist_id' => 101,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:36:30',
                'updated_at' => '2018-04-28 12:36:30',
            ),
            435 => 
            array (
                'id' => 436,
                'artist_id' => 101,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:30',
                'updated_at' => '2018-04-28 12:36:30',
            ),
            436 => 
            array (
                'id' => 437,
                'artist_id' => 102,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:31',
                'updated_at' => '2018-04-28 12:36:31',
            ),
            437 => 
            array (
                'id' => 438,
                'artist_id' => 102,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:31',
                'updated_at' => '2018-04-28 12:36:31',
            ),
            438 => 
            array (
                'id' => 439,
                'artist_id' => 102,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:36:31',
                'updated_at' => '2018-04-28 12:36:31',
            ),
            439 => 
            array (
                'id' => 440,
                'artist_id' => 102,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:36:31',
                'updated_at' => '2018-04-28 12:36:31',
            ),
            440 => 
            array (
                'id' => 441,
                'artist_id' => 102,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:36:31',
                'updated_at' => '2018-04-28 12:36:31',
            ),
            441 => 
            array (
                'id' => 442,
                'artist_id' => 103,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:36:33',
                'updated_at' => '2018-04-28 12:36:33',
            ),
            442 => 
            array (
                'id' => 443,
                'artist_id' => 103,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:36:33',
                'updated_at' => '2018-04-28 12:36:33',
            ),
            443 => 
            array (
                'id' => 444,
                'artist_id' => 103,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:36:33',
                'updated_at' => '2018-04-28 12:36:33',
            ),
            444 => 
            array (
                'id' => 445,
                'artist_id' => 103,
                'tag_id' => 168,
                'created_at' => '2018-04-28 12:36:33',
                'updated_at' => '2018-04-28 12:36:33',
            ),
            445 => 
            array (
                'id' => 446,
                'artist_id' => 103,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:33',
                'updated_at' => '2018-04-28 12:36:33',
            ),
            446 => 
            array (
                'id' => 447,
                'artist_id' => 104,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:36:34',
                'updated_at' => '2018-04-28 12:36:34',
            ),
            447 => 
            array (
                'id' => 448,
                'artist_id' => 104,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:34',
                'updated_at' => '2018-04-28 12:36:34',
            ),
            448 => 
            array (
                'id' => 449,
                'artist_id' => 104,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:34',
                'updated_at' => '2018-04-28 12:36:34',
            ),
            449 => 
            array (
                'id' => 450,
                'artist_id' => 104,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:34',
                'updated_at' => '2018-04-28 12:36:34',
            ),
            450 => 
            array (
                'id' => 451,
                'artist_id' => 104,
                'tag_id' => 168,
                'created_at' => '2018-04-28 12:36:34',
                'updated_at' => '2018-04-28 12:36:34',
            ),
            451 => 
            array (
                'id' => 452,
                'artist_id' => 105,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:36:36',
                'updated_at' => '2018-04-28 12:36:36',
            ),
            452 => 
            array (
                'id' => 453,
                'artist_id' => 105,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:36:36',
                'updated_at' => '2018-04-28 12:36:36',
            ),
            453 => 
            array (
                'id' => 454,
                'artist_id' => 105,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:36',
                'updated_at' => '2018-04-28 12:36:36',
            ),
            454 => 
            array (
                'id' => 455,
                'artist_id' => 105,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:36:36',
                'updated_at' => '2018-04-28 12:36:36',
            ),
            455 => 
            array (
                'id' => 456,
                'artist_id' => 105,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:36',
                'updated_at' => '2018-04-28 12:36:36',
            ),
            456 => 
            array (
                'id' => 457,
                'artist_id' => 106,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:36:37',
                'updated_at' => '2018-04-28 12:36:37',
            ),
            457 => 
            array (
                'id' => 458,
                'artist_id' => 106,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:37',
                'updated_at' => '2018-04-28 12:36:37',
            ),
            458 => 
            array (
                'id' => 459,
                'artist_id' => 106,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:37',
                'updated_at' => '2018-04-28 12:36:37',
            ),
            459 => 
            array (
                'id' => 460,
                'artist_id' => 106,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:36:37',
                'updated_at' => '2018-04-28 12:36:37',
            ),
            460 => 
            array (
                'id' => 461,
                'artist_id' => 106,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:37',
                'updated_at' => '2018-04-28 12:36:37',
            ),
            461 => 
            array (
                'id' => 462,
                'artist_id' => 107,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:36:39',
                'updated_at' => '2018-04-28 12:36:39',
            ),
            462 => 
            array (
                'id' => 463,
                'artist_id' => 107,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:36:39',
                'updated_at' => '2018-04-28 12:36:39',
            ),
            463 => 
            array (
                'id' => 464,
                'artist_id' => 107,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:36:39',
                'updated_at' => '2018-04-28 12:36:39',
            ),
            464 => 
            array (
                'id' => 465,
                'artist_id' => 107,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:36:39',
                'updated_at' => '2018-04-28 12:36:39',
            ),
            465 => 
            array (
                'id' => 466,
                'artist_id' => 107,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:39',
                'updated_at' => '2018-04-28 12:36:39',
            ),
            466 => 
            array (
                'id' => 467,
                'artist_id' => 108,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:36:40',
                'updated_at' => '2018-04-28 12:36:40',
            ),
            467 => 
            array (
                'id' => 468,
                'artist_id' => 108,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:40',
                'updated_at' => '2018-04-28 12:36:40',
            ),
            468 => 
            array (
                'id' => 469,
                'artist_id' => 108,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:41',
                'updated_at' => '2018-04-28 12:36:41',
            ),
            469 => 
            array (
                'id' => 470,
                'artist_id' => 108,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:36:41',
                'updated_at' => '2018-04-28 12:36:41',
            ),
            470 => 
            array (
                'id' => 471,
                'artist_id' => 108,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:36:41',
                'updated_at' => '2018-04-28 12:36:41',
            ),
            471 => 
            array (
                'id' => 472,
                'artist_id' => 109,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:36:42',
                'updated_at' => '2018-04-28 12:36:42',
            ),
            472 => 
            array (
                'id' => 473,
                'artist_id' => 109,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:42',
                'updated_at' => '2018-04-28 12:36:42',
            ),
            473 => 
            array (
                'id' => 474,
                'artist_id' => 109,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:36:42',
                'updated_at' => '2018-04-28 12:36:42',
            ),
            474 => 
            array (
                'id' => 475,
                'artist_id' => 109,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:42',
                'updated_at' => '2018-04-28 12:36:42',
            ),
            475 => 
            array (
                'id' => 476,
                'artist_id' => 109,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:36:42',
                'updated_at' => '2018-04-28 12:36:42',
            ),
            476 => 
            array (
                'id' => 477,
                'artist_id' => 110,
                'tag_id' => 295,
                'created_at' => '2018-04-28 12:36:44',
                'updated_at' => '2018-04-28 12:36:44',
            ),
            477 => 
            array (
                'id' => 478,
                'artist_id' => 111,
                'tag_id' => 296,
                'created_at' => '2018-04-28 12:36:45',
                'updated_at' => '2018-04-28 12:36:45',
            ),
            478 => 
            array (
                'id' => 479,
                'artist_id' => 111,
                'tag_id' => 297,
                'created_at' => '2018-04-28 12:36:45',
                'updated_at' => '2018-04-28 12:36:45',
            ),
            479 => 
            array (
                'id' => 480,
                'artist_id' => 111,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:45',
                'updated_at' => '2018-04-28 12:36:45',
            ),
            480 => 
            array (
                'id' => 481,
                'artist_id' => 111,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:36:45',
                'updated_at' => '2018-04-28 12:36:45',
            ),
            481 => 
            array (
                'id' => 482,
                'artist_id' => 112,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:47',
                'updated_at' => '2018-04-28 12:36:47',
            ),
            482 => 
            array (
                'id' => 483,
                'artist_id' => 112,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:36:47',
                'updated_at' => '2018-04-28 12:36:47',
            ),
            483 => 
            array (
                'id' => 484,
                'artist_id' => 112,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:47',
                'updated_at' => '2018-04-28 12:36:47',
            ),
            484 => 
            array (
                'id' => 485,
                'artist_id' => 112,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:36:47',
                'updated_at' => '2018-04-28 12:36:47',
            ),
            485 => 
            array (
                'id' => 486,
                'artist_id' => 112,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:36:47',
                'updated_at' => '2018-04-28 12:36:47',
            ),
            486 => 
            array (
                'id' => 487,
                'artist_id' => 114,
                'tag_id' => 178,
                'created_at' => '2018-04-28 12:36:50',
                'updated_at' => '2018-04-28 12:36:50',
            ),
            487 => 
            array (
                'id' => 488,
                'artist_id' => 114,
                'tag_id' => 179,
                'created_at' => '2018-04-28 12:36:50',
                'updated_at' => '2018-04-28 12:36:50',
            ),
            488 => 
            array (
                'id' => 489,
                'artist_id' => 114,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:50',
                'updated_at' => '2018-04-28 12:36:50',
            ),
            489 => 
            array (
                'id' => 490,
                'artist_id' => 114,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:36:50',
                'updated_at' => '2018-04-28 12:36:50',
            ),
            490 => 
            array (
                'id' => 491,
                'artist_id' => 115,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:36:52',
                'updated_at' => '2018-04-28 12:36:52',
            ),
            491 => 
            array (
                'id' => 492,
                'artist_id' => 115,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:36:52',
                'updated_at' => '2018-04-28 12:36:52',
            ),
            492 => 
            array (
                'id' => 493,
                'artist_id' => 115,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:36:52',
                'updated_at' => '2018-04-28 12:36:52',
            ),
            493 => 
            array (
                'id' => 494,
                'artist_id' => 115,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:52',
                'updated_at' => '2018-04-28 12:36:52',
            ),
            494 => 
            array (
                'id' => 495,
                'artist_id' => 115,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:36:52',
                'updated_at' => '2018-04-28 12:36:52',
            ),
            495 => 
            array (
                'id' => 496,
                'artist_id' => 116,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:36:54',
                'updated_at' => '2018-04-28 12:36:54',
            ),
            496 => 
            array (
                'id' => 497,
                'artist_id' => 116,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:36:54',
                'updated_at' => '2018-04-28 12:36:54',
            ),
            497 => 
            array (
                'id' => 498,
                'artist_id' => 116,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:36:54',
                'updated_at' => '2018-04-28 12:36:54',
            ),
            498 => 
            array (
                'id' => 499,
                'artist_id' => 116,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:36:54',
                'updated_at' => '2018-04-28 12:36:54',
            ),
            499 => 
            array (
                'id' => 500,
                'artist_id' => 116,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:54',
                'updated_at' => '2018-04-28 12:36:54',
            ),
        ));
        \DB::table('artist_tag')->insert(array (
            0 => 
            array (
                'id' => 501,
                'artist_id' => 117,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:36:55',
                'updated_at' => '2018-04-28 12:36:55',
            ),
            1 => 
            array (
                'id' => 502,
                'artist_id' => 117,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:36:55',
                'updated_at' => '2018-04-28 12:36:55',
            ),
            2 => 
            array (
                'id' => 503,
                'artist_id' => 117,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:36:55',
                'updated_at' => '2018-04-28 12:36:55',
            ),
            3 => 
            array (
                'id' => 504,
                'artist_id' => 117,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:36:55',
                'updated_at' => '2018-04-28 12:36:55',
            ),
            4 => 
            array (
                'id' => 505,
                'artist_id' => 117,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:36:55',
                'updated_at' => '2018-04-28 12:36:55',
            ),
            5 => 
            array (
                'id' => 506,
                'artist_id' => 118,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:36:57',
                'updated_at' => '2018-04-28 12:36:57',
            ),
            6 => 
            array (
                'id' => 507,
                'artist_id' => 118,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:36:57',
                'updated_at' => '2018-04-28 12:36:57',
            ),
            7 => 
            array (
                'id' => 508,
                'artist_id' => 118,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:36:57',
                'updated_at' => '2018-04-28 12:36:57',
            ),
            8 => 
            array (
                'id' => 509,
                'artist_id' => 118,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:57',
                'updated_at' => '2018-04-28 12:36:57',
            ),
            9 => 
            array (
                'id' => 510,
                'artist_id' => 118,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:36:57',
                'updated_at' => '2018-04-28 12:36:57',
            ),
            10 => 
            array (
                'id' => 511,
                'artist_id' => 119,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:36:59',
                'updated_at' => '2018-04-28 12:36:59',
            ),
            11 => 
            array (
                'id' => 512,
                'artist_id' => 119,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:36:59',
                'updated_at' => '2018-04-28 12:36:59',
            ),
            12 => 
            array (
                'id' => 513,
                'artist_id' => 119,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:36:59',
                'updated_at' => '2018-04-28 12:36:59',
            ),
            13 => 
            array (
                'id' => 514,
                'artist_id' => 119,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:36:59',
                'updated_at' => '2018-04-28 12:36:59',
            ),
            14 => 
            array (
                'id' => 515,
                'artist_id' => 119,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:36:59',
                'updated_at' => '2018-04-28 12:36:59',
            ),
            15 => 
            array (
                'id' => 516,
                'artist_id' => 121,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:37:02',
                'updated_at' => '2018-04-28 12:37:02',
            ),
            16 => 
            array (
                'id' => 517,
                'artist_id' => 121,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:02',
                'updated_at' => '2018-04-28 12:37:02',
            ),
            17 => 
            array (
                'id' => 518,
                'artist_id' => 121,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:02',
                'updated_at' => '2018-04-28 12:37:02',
            ),
            18 => 
            array (
                'id' => 519,
                'artist_id' => 121,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:37:02',
                'updated_at' => '2018-04-28 12:37:02',
            ),
            19 => 
            array (
                'id' => 520,
                'artist_id' => 121,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:02',
                'updated_at' => '2018-04-28 12:37:02',
            ),
            20 => 
            array (
                'id' => 521,
                'artist_id' => 122,
                'tag_id' => 298,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2018-04-28 12:37:05',
            ),
            21 => 
            array (
                'id' => 522,
                'artist_id' => 122,
                'tag_id' => 299,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2018-04-28 12:37:05',
            ),
            22 => 
            array (
                'id' => 523,
                'artist_id' => 122,
                'tag_id' => 300,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2018-04-28 12:37:05',
            ),
            23 => 
            array (
                'id' => 524,
                'artist_id' => 122,
                'tag_id' => 301,
                'created_at' => '2018-04-28 12:37:05',
                'updated_at' => '2018-04-28 12:37:05',
            ),
            24 => 
            array (
                'id' => 525,
                'artist_id' => 123,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:07',
                'updated_at' => '2018-04-28 12:37:07',
            ),
            25 => 
            array (
                'id' => 526,
                'artist_id' => 123,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:07',
                'updated_at' => '2018-04-28 12:37:07',
            ),
            26 => 
            array (
                'id' => 527,
                'artist_id' => 123,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:37:07',
                'updated_at' => '2018-04-28 12:37:07',
            ),
            27 => 
            array (
                'id' => 528,
                'artist_id' => 123,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:07',
                'updated_at' => '2018-04-28 12:37:07',
            ),
            28 => 
            array (
                'id' => 529,
                'artist_id' => 123,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:37:07',
                'updated_at' => '2018-04-28 12:37:07',
            ),
            29 => 
            array (
                'id' => 530,
                'artist_id' => 124,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:09',
                'updated_at' => '2018-04-28 12:37:09',
            ),
            30 => 
            array (
                'id' => 531,
                'artist_id' => 125,
                'tag_id' => 302,
                'created_at' => '2018-04-28 12:37:11',
                'updated_at' => '2018-04-28 12:37:11',
            ),
            31 => 
            array (
                'id' => 532,
                'artist_id' => 125,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:37:11',
                'updated_at' => '2018-04-28 12:37:11',
            ),
            32 => 
            array (
                'id' => 533,
                'artist_id' => 125,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:37:11',
                'updated_at' => '2018-04-28 12:37:11',
            ),
            33 => 
            array (
                'id' => 534,
                'artist_id' => 125,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:37:11',
                'updated_at' => '2018-04-28 12:37:11',
            ),
            34 => 
            array (
                'id' => 535,
                'artist_id' => 125,
                'tag_id' => 74,
                'created_at' => '2018-04-28 12:37:11',
                'updated_at' => '2018-04-28 12:37:11',
            ),
            35 => 
            array (
                'id' => 536,
                'artist_id' => 126,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:37:13',
                'updated_at' => '2018-04-28 12:37:13',
            ),
            36 => 
            array (
                'id' => 537,
                'artist_id' => 126,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:13',
                'updated_at' => '2018-04-28 12:37:13',
            ),
            37 => 
            array (
                'id' => 538,
                'artist_id' => 126,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:37:13',
                'updated_at' => '2018-04-28 12:37:13',
            ),
            38 => 
            array (
                'id' => 539,
                'artist_id' => 126,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:13',
                'updated_at' => '2018-04-28 12:37:13',
            ),
            39 => 
            array (
                'id' => 540,
                'artist_id' => 126,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:13',
                'updated_at' => '2018-04-28 12:37:13',
            ),
            40 => 
            array (
                'id' => 541,
                'artist_id' => 127,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:14',
                'updated_at' => '2018-04-28 12:37:14',
            ),
            41 => 
            array (
                'id' => 542,
                'artist_id' => 127,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:14',
                'updated_at' => '2018-04-28 12:37:14',
            ),
            42 => 
            array (
                'id' => 543,
                'artist_id' => 127,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:37:14',
                'updated_at' => '2018-04-28 12:37:14',
            ),
            43 => 
            array (
                'id' => 544,
                'artist_id' => 127,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:37:14',
                'updated_at' => '2018-04-28 12:37:14',
            ),
            44 => 
            array (
                'id' => 545,
                'artist_id' => 127,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:37:14',
                'updated_at' => '2018-04-28 12:37:14',
            ),
            45 => 
            array (
                'id' => 546,
                'artist_id' => 128,
                'tag_id' => 303,
                'created_at' => '2018-04-28 12:37:16',
                'updated_at' => '2018-04-28 12:37:16',
            ),
            46 => 
            array (
                'id' => 547,
                'artist_id' => 128,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:16',
                'updated_at' => '2018-04-28 12:37:16',
            ),
            47 => 
            array (
                'id' => 548,
                'artist_id' => 128,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:16',
                'updated_at' => '2018-04-28 12:37:16',
            ),
            48 => 
            array (
                'id' => 549,
                'artist_id' => 128,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:16',
                'updated_at' => '2018-04-28 12:37:16',
            ),
            49 => 
            array (
                'id' => 550,
                'artist_id' => 128,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:37:16',
                'updated_at' => '2018-04-28 12:37:16',
            ),
            50 => 
            array (
                'id' => 551,
                'artist_id' => 129,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:17',
                'updated_at' => '2018-04-28 12:37:17',
            ),
            51 => 
            array (
                'id' => 552,
                'artist_id' => 129,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:37:17',
                'updated_at' => '2018-04-28 12:37:17',
            ),
            52 => 
            array (
                'id' => 553,
                'artist_id' => 129,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:17',
                'updated_at' => '2018-04-28 12:37:17',
            ),
            53 => 
            array (
                'id' => 554,
                'artist_id' => 129,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:17',
                'updated_at' => '2018-04-28 12:37:17',
            ),
            54 => 
            array (
                'id' => 555,
                'artist_id' => 129,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:37:17',
                'updated_at' => '2018-04-28 12:37:17',
            ),
            55 => 
            array (
                'id' => 556,
                'artist_id' => 130,
                'tag_id' => 304,
                'created_at' => '2018-04-28 12:37:19',
                'updated_at' => '2018-04-28 12:37:19',
            ),
            56 => 
            array (
                'id' => 557,
                'artist_id' => 130,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:19',
                'updated_at' => '2018-04-28 12:37:19',
            ),
            57 => 
            array (
                'id' => 558,
                'artist_id' => 130,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:37:19',
                'updated_at' => '2018-04-28 12:37:19',
            ),
            58 => 
            array (
                'id' => 559,
                'artist_id' => 130,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:19',
                'updated_at' => '2018-04-28 12:37:19',
            ),
            59 => 
            array (
                'id' => 560,
                'artist_id' => 130,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:37:19',
                'updated_at' => '2018-04-28 12:37:19',
            ),
            60 => 
            array (
                'id' => 561,
                'artist_id' => 131,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:37:20',
                'updated_at' => '2018-04-28 12:37:20',
            ),
            61 => 
            array (
                'id' => 562,
                'artist_id' => 131,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:20',
                'updated_at' => '2018-04-28 12:37:20',
            ),
            62 => 
            array (
                'id' => 563,
                'artist_id' => 131,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:37:20',
                'updated_at' => '2018-04-28 12:37:20',
            ),
            63 => 
            array (
                'id' => 564,
                'artist_id' => 131,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:37:20',
                'updated_at' => '2018-04-28 12:37:20',
            ),
            64 => 
            array (
                'id' => 565,
                'artist_id' => 131,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:20',
                'updated_at' => '2018-04-28 12:37:20',
            ),
            65 => 
            array (
                'id' => 566,
                'artist_id' => 132,
                'tag_id' => 305,
                'created_at' => '2018-04-28 12:37:22',
                'updated_at' => '2018-04-28 12:37:22',
            ),
            66 => 
            array (
                'id' => 567,
                'artist_id' => 132,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:22',
                'updated_at' => '2018-04-28 12:37:22',
            ),
            67 => 
            array (
                'id' => 568,
                'artist_id' => 132,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:37:22',
                'updated_at' => '2018-04-28 12:37:22',
            ),
            68 => 
            array (
                'id' => 569,
                'artist_id' => 132,
                'tag_id' => 195,
                'created_at' => '2018-04-28 12:37:22',
                'updated_at' => '2018-04-28 12:37:22',
            ),
            69 => 
            array (
                'id' => 570,
                'artist_id' => 132,
                'tag_id' => 196,
                'created_at' => '2018-04-28 12:37:22',
                'updated_at' => '2018-04-28 12:37:22',
            ),
            70 => 
            array (
                'id' => 571,
                'artist_id' => 133,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:23',
                'updated_at' => '2018-04-28 12:37:23',
            ),
            71 => 
            array (
                'id' => 572,
                'artist_id' => 133,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:37:23',
                'updated_at' => '2018-04-28 12:37:23',
            ),
            72 => 
            array (
                'id' => 573,
                'artist_id' => 133,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:37:23',
                'updated_at' => '2018-04-28 12:37:23',
            ),
            73 => 
            array (
                'id' => 574,
                'artist_id' => 133,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:23',
                'updated_at' => '2018-04-28 12:37:23',
            ),
            74 => 
            array (
                'id' => 575,
                'artist_id' => 133,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:37:23',
                'updated_at' => '2018-04-28 12:37:23',
            ),
            75 => 
            array (
                'id' => 576,
                'artist_id' => 134,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:37:25',
                'updated_at' => '2018-04-28 12:37:25',
            ),
            76 => 
            array (
                'id' => 577,
                'artist_id' => 134,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:25',
                'updated_at' => '2018-04-28 12:37:25',
            ),
            77 => 
            array (
                'id' => 578,
                'artist_id' => 134,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:37:25',
                'updated_at' => '2018-04-28 12:37:25',
            ),
            78 => 
            array (
                'id' => 579,
                'artist_id' => 134,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:37:25',
                'updated_at' => '2018-04-28 12:37:25',
            ),
            79 => 
            array (
                'id' => 580,
                'artist_id' => 134,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:37:25',
                'updated_at' => '2018-04-28 12:37:25',
            ),
            80 => 
            array (
                'id' => 581,
                'artist_id' => 135,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:26',
                'updated_at' => '2018-04-28 12:37:26',
            ),
            81 => 
            array (
                'id' => 582,
                'artist_id' => 135,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:26',
                'updated_at' => '2018-04-28 12:37:26',
            ),
            82 => 
            array (
                'id' => 583,
                'artist_id' => 135,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:37:26',
                'updated_at' => '2018-04-28 12:37:26',
            ),
            83 => 
            array (
                'id' => 584,
                'artist_id' => 135,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:37:26',
                'updated_at' => '2018-04-28 12:37:26',
            ),
            84 => 
            array (
                'id' => 585,
                'artist_id' => 135,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:26',
                'updated_at' => '2018-04-28 12:37:26',
            ),
            85 => 
            array (
                'id' => 586,
                'artist_id' => 136,
                'tag_id' => 306,
                'created_at' => '2018-04-28 12:37:28',
                'updated_at' => '2018-04-28 12:37:28',
            ),
            86 => 
            array (
                'id' => 587,
                'artist_id' => 136,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:28',
                'updated_at' => '2018-04-28 12:37:28',
            ),
            87 => 
            array (
                'id' => 588,
                'artist_id' => 136,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:28',
                'updated_at' => '2018-04-28 12:37:28',
            ),
            88 => 
            array (
                'id' => 589,
                'artist_id' => 136,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:37:28',
                'updated_at' => '2018-04-28 12:37:28',
            ),
            89 => 
            array (
                'id' => 590,
                'artist_id' => 136,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:37:28',
                'updated_at' => '2018-04-28 12:37:28',
            ),
            90 => 
            array (
                'id' => 591,
                'artist_id' => 137,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:29',
                'updated_at' => '2018-04-28 12:37:29',
            ),
            91 => 
            array (
                'id' => 592,
                'artist_id' => 137,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:29',
                'updated_at' => '2018-04-28 12:37:29',
            ),
            92 => 
            array (
                'id' => 593,
                'artist_id' => 137,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:37:29',
                'updated_at' => '2018-04-28 12:37:29',
            ),
            93 => 
            array (
                'id' => 594,
                'artist_id' => 137,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:37:29',
                'updated_at' => '2018-04-28 12:37:29',
            ),
            94 => 
            array (
                'id' => 595,
                'artist_id' => 137,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:37:29',
                'updated_at' => '2018-04-28 12:37:29',
            ),
            95 => 
            array (
                'id' => 596,
                'artist_id' => 138,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:31',
                'updated_at' => '2018-04-28 12:37:31',
            ),
            96 => 
            array (
                'id' => 597,
                'artist_id' => 138,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:37:31',
                'updated_at' => '2018-04-28 12:37:31',
            ),
            97 => 
            array (
                'id' => 598,
                'artist_id' => 138,
                'tag_id' => 203,
                'created_at' => '2018-04-28 12:37:31',
                'updated_at' => '2018-04-28 12:37:31',
            ),
            98 => 
            array (
                'id' => 599,
                'artist_id' => 138,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:37:31',
                'updated_at' => '2018-04-28 12:37:31',
            ),
            99 => 
            array (
                'id' => 600,
                'artist_id' => 138,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:31',
                'updated_at' => '2018-04-28 12:37:31',
            ),
            100 => 
            array (
                'id' => 601,
                'artist_id' => 140,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:34',
                'updated_at' => '2018-04-28 12:37:34',
            ),
            101 => 
            array (
                'id' => 602,
                'artist_id' => 140,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:37:34',
                'updated_at' => '2018-04-28 12:37:34',
            ),
            102 => 
            array (
                'id' => 603,
                'artist_id' => 140,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:37:34',
                'updated_at' => '2018-04-28 12:37:34',
            ),
            103 => 
            array (
                'id' => 604,
                'artist_id' => 140,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:37:34',
                'updated_at' => '2018-04-28 12:37:34',
            ),
            104 => 
            array (
                'id' => 605,
                'artist_id' => 140,
                'tag_id' => 98,
                'created_at' => '2018-04-28 12:37:34',
                'updated_at' => '2018-04-28 12:37:34',
            ),
            105 => 
            array (
                'id' => 606,
                'artist_id' => 141,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:35',
                'updated_at' => '2018-04-28 12:37:35',
            ),
            106 => 
            array (
                'id' => 607,
                'artist_id' => 141,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:35',
                'updated_at' => '2018-04-28 12:37:35',
            ),
            107 => 
            array (
                'id' => 608,
                'artist_id' => 141,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:37:35',
                'updated_at' => '2018-04-28 12:37:35',
            ),
            108 => 
            array (
                'id' => 609,
                'artist_id' => 141,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:37:35',
                'updated_at' => '2018-04-28 12:37:35',
            ),
            109 => 
            array (
                'id' => 610,
                'artist_id' => 141,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:35',
                'updated_at' => '2018-04-28 12:37:35',
            ),
            110 => 
            array (
                'id' => 611,
                'artist_id' => 142,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:37:37',
                'updated_at' => '2018-04-28 12:37:37',
            ),
            111 => 
            array (
                'id' => 612,
                'artist_id' => 142,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:37',
                'updated_at' => '2018-04-28 12:37:37',
            ),
            112 => 
            array (
                'id' => 613,
                'artist_id' => 142,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:37',
                'updated_at' => '2018-04-28 12:37:37',
            ),
            113 => 
            array (
                'id' => 614,
                'artist_id' => 142,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:37:37',
                'updated_at' => '2018-04-28 12:37:37',
            ),
            114 => 
            array (
                'id' => 615,
                'artist_id' => 142,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:37',
                'updated_at' => '2018-04-28 12:37:37',
            ),
            115 => 
            array (
                'id' => 616,
                'artist_id' => 143,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:37:40',
                'updated_at' => '2018-04-28 12:37:40',
            ),
            116 => 
            array (
                'id' => 617,
                'artist_id' => 143,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:37:40',
                'updated_at' => '2018-04-28 12:37:40',
            ),
            117 => 
            array (
                'id' => 618,
                'artist_id' => 143,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:37:40',
                'updated_at' => '2018-04-28 12:37:40',
            ),
            118 => 
            array (
                'id' => 619,
                'artist_id' => 143,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:37:40',
                'updated_at' => '2018-04-28 12:37:40',
            ),
            119 => 
            array (
                'id' => 620,
                'artist_id' => 143,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:40',
                'updated_at' => '2018-04-28 12:37:40',
            ),
            120 => 
            array (
                'id' => 621,
                'artist_id' => 144,
                'tag_id' => 307,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2018-04-28 12:37:41',
            ),
            121 => 
            array (
                'id' => 622,
                'artist_id' => 144,
                'tag_id' => 308,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2018-04-28 12:37:41',
            ),
            122 => 
            array (
                'id' => 623,
                'artist_id' => 144,
                'tag_id' => 309,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2018-04-28 12:37:41',
            ),
            123 => 
            array (
                'id' => 624,
                'artist_id' => 144,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2018-04-28 12:37:41',
            ),
            124 => 
            array (
                'id' => 625,
                'artist_id' => 144,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:37:41',
                'updated_at' => '2018-04-28 12:37:41',
            ),
            125 => 
            array (
                'id' => 626,
                'artist_id' => 145,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:37:43',
                'updated_at' => '2018-04-28 12:37:43',
            ),
            126 => 
            array (
                'id' => 627,
                'artist_id' => 145,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:37:43',
                'updated_at' => '2018-04-28 12:37:43',
            ),
            127 => 
            array (
                'id' => 628,
                'artist_id' => 146,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:37:44',
                'updated_at' => '2018-04-28 12:37:44',
            ),
            128 => 
            array (
                'id' => 629,
                'artist_id' => 146,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:37:44',
                'updated_at' => '2018-04-28 12:37:44',
            ),
            129 => 
            array (
                'id' => 630,
                'artist_id' => 146,
                'tag_id' => 148,
                'created_at' => '2018-04-28 12:37:44',
                'updated_at' => '2018-04-28 12:37:44',
            ),
            130 => 
            array (
                'id' => 631,
                'artist_id' => 146,
                'tag_id' => 207,
                'created_at' => '2018-04-28 12:37:44',
                'updated_at' => '2018-04-28 12:37:44',
            ),
            131 => 
            array (
                'id' => 632,
                'artist_id' => 146,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:37:44',
                'updated_at' => '2018-04-28 12:37:44',
            ),
            132 => 
            array (
                'id' => 633,
                'artist_id' => 147,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:46',
                'updated_at' => '2018-04-28 12:37:46',
            ),
            133 => 
            array (
                'id' => 634,
                'artist_id' => 147,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:46',
                'updated_at' => '2018-04-28 12:37:46',
            ),
            134 => 
            array (
                'id' => 635,
                'artist_id' => 147,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:37:46',
                'updated_at' => '2018-04-28 12:37:46',
            ),
            135 => 
            array (
                'id' => 636,
                'artist_id' => 147,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:37:46',
                'updated_at' => '2018-04-28 12:37:46',
            ),
            136 => 
            array (
                'id' => 637,
                'artist_id' => 147,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:37:46',
                'updated_at' => '2018-04-28 12:37:46',
            ),
            137 => 
            array (
                'id' => 638,
                'artist_id' => 148,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:48',
                'updated_at' => '2018-04-28 12:37:48',
            ),
            138 => 
            array (
                'id' => 639,
                'artist_id' => 148,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:37:48',
                'updated_at' => '2018-04-28 12:37:48',
            ),
            139 => 
            array (
                'id' => 640,
                'artist_id' => 148,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:48',
                'updated_at' => '2018-04-28 12:37:48',
            ),
            140 => 
            array (
                'id' => 641,
                'artist_id' => 148,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:37:48',
                'updated_at' => '2018-04-28 12:37:48',
            ),
            141 => 
            array (
                'id' => 642,
                'artist_id' => 148,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:37:48',
                'updated_at' => '2018-04-28 12:37:48',
            ),
            142 => 
            array (
                'id' => 643,
                'artist_id' => 149,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:37:49',
                'updated_at' => '2018-04-28 12:37:49',
            ),
            143 => 
            array (
                'id' => 644,
                'artist_id' => 149,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:37:49',
                'updated_at' => '2018-04-28 12:37:49',
            ),
            144 => 
            array (
                'id' => 645,
                'artist_id' => 149,
                'tag_id' => 164,
                'created_at' => '2018-04-28 12:37:49',
                'updated_at' => '2018-04-28 12:37:49',
            ),
            145 => 
            array (
                'id' => 646,
                'artist_id' => 149,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:49',
                'updated_at' => '2018-04-28 12:37:49',
            ),
            146 => 
            array (
                'id' => 647,
                'artist_id' => 149,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:37:49',
                'updated_at' => '2018-04-28 12:37:49',
            ),
            147 => 
            array (
                'id' => 648,
                'artist_id' => 150,
                'tag_id' => 310,
                'created_at' => '2018-04-28 12:37:51',
                'updated_at' => '2018-04-28 12:37:51',
            ),
            148 => 
            array (
                'id' => 649,
                'artist_id' => 151,
                'tag_id' => 311,
                'created_at' => '2018-04-28 12:37:52',
                'updated_at' => '2018-04-28 12:37:52',
            ),
            149 => 
            array (
                'id' => 650,
                'artist_id' => 152,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:37:54',
                'updated_at' => '2018-04-28 12:37:54',
            ),
            150 => 
            array (
                'id' => 651,
                'artist_id' => 153,
                'tag_id' => 312,
                'created_at' => '2018-04-28 12:37:55',
                'updated_at' => '2018-04-28 12:37:55',
            ),
            151 => 
            array (
                'id' => 652,
                'artist_id' => 153,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:55',
                'updated_at' => '2018-04-28 12:37:55',
            ),
            152 => 
            array (
                'id' => 653,
                'artist_id' => 153,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:37:55',
                'updated_at' => '2018-04-28 12:37:55',
            ),
            153 => 
            array (
                'id' => 654,
                'artist_id' => 153,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:37:55',
                'updated_at' => '2018-04-28 12:37:55',
            ),
            154 => 
            array (
                'id' => 655,
                'artist_id' => 153,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:37:55',
                'updated_at' => '2018-04-28 12:37:55',
            ),
            155 => 
            array (
                'id' => 656,
                'artist_id' => 154,
                'tag_id' => 313,
                'created_at' => '2018-04-28 12:37:56',
                'updated_at' => '2018-04-28 12:37:56',
            ),
            156 => 
            array (
                'id' => 657,
                'artist_id' => 154,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:37:56',
                'updated_at' => '2018-04-28 12:37:56',
            ),
            157 => 
            array (
                'id' => 658,
                'artist_id' => 154,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:37:56',
                'updated_at' => '2018-04-28 12:37:56',
            ),
            158 => 
            array (
                'id' => 659,
                'artist_id' => 154,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:37:56',
                'updated_at' => '2018-04-28 12:37:56',
            ),
            159 => 
            array (
                'id' => 660,
                'artist_id' => 154,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:37:56',
                'updated_at' => '2018-04-28 12:37:56',
            ),
            160 => 
            array (
                'id' => 661,
                'artist_id' => 155,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:58',
                'updated_at' => '2018-04-28 12:37:58',
            ),
            161 => 
            array (
                'id' => 662,
                'artist_id' => 155,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:37:58',
                'updated_at' => '2018-04-28 12:37:58',
            ),
            162 => 
            array (
                'id' => 663,
                'artist_id' => 155,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:37:58',
                'updated_at' => '2018-04-28 12:37:58',
            ),
            163 => 
            array (
                'id' => 664,
                'artist_id' => 155,
                'tag_id' => 222,
                'created_at' => '2018-04-28 12:37:58',
                'updated_at' => '2018-04-28 12:37:58',
            ),
            164 => 
            array (
                'id' => 665,
                'artist_id' => 155,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:37:58',
                'updated_at' => '2018-04-28 12:37:58',
            ),
            165 => 
            array (
                'id' => 666,
                'artist_id' => 156,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:37:59',
                'updated_at' => '2018-04-28 12:37:59',
            ),
            166 => 
            array (
                'id' => 667,
                'artist_id' => 156,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:37:59',
                'updated_at' => '2018-04-28 12:37:59',
            ),
            167 => 
            array (
                'id' => 668,
                'artist_id' => 156,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:37:59',
                'updated_at' => '2018-04-28 12:37:59',
            ),
            168 => 
            array (
                'id' => 669,
                'artist_id' => 156,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:37:59',
                'updated_at' => '2018-04-28 12:37:59',
            ),
            169 => 
            array (
                'id' => 670,
                'artist_id' => 156,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:37:59',
                'updated_at' => '2018-04-28 12:37:59',
            ),
            170 => 
            array (
                'id' => 671,
                'artist_id' => 158,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:38:02',
                'updated_at' => '2018-04-28 12:38:02',
            ),
            171 => 
            array (
                'id' => 672,
                'artist_id' => 158,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:02',
                'updated_at' => '2018-04-28 12:38:02',
            ),
            172 => 
            array (
                'id' => 673,
                'artist_id' => 158,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:02',
                'updated_at' => '2018-04-28 12:38:02',
            ),
            173 => 
            array (
                'id' => 674,
                'artist_id' => 158,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:38:02',
                'updated_at' => '2018-04-28 12:38:02',
            ),
            174 => 
            array (
                'id' => 675,
                'artist_id' => 158,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:38:02',
                'updated_at' => '2018-04-28 12:38:02',
            ),
            175 => 
            array (
                'id' => 676,
                'artist_id' => 159,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:04',
                'updated_at' => '2018-04-28 12:38:04',
            ),
            176 => 
            array (
                'id' => 677,
                'artist_id' => 159,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:38:04',
                'updated_at' => '2018-04-28 12:38:04',
            ),
            177 => 
            array (
                'id' => 678,
                'artist_id' => 159,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:04',
                'updated_at' => '2018-04-28 12:38:04',
            ),
            178 => 
            array (
                'id' => 679,
                'artist_id' => 159,
                'tag_id' => 224,
                'created_at' => '2018-04-28 12:38:04',
                'updated_at' => '2018-04-28 12:38:04',
            ),
            179 => 
            array (
                'id' => 680,
                'artist_id' => 159,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:38:04',
                'updated_at' => '2018-04-28 12:38:04',
            ),
            180 => 
            array (
                'id' => 681,
                'artist_id' => 160,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:38:05',
                'updated_at' => '2018-04-28 12:38:05',
            ),
            181 => 
            array (
                'id' => 682,
                'artist_id' => 160,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:38:06',
                'updated_at' => '2018-04-28 12:38:06',
            ),
            182 => 
            array (
                'id' => 683,
                'artist_id' => 160,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:06',
                'updated_at' => '2018-04-28 12:38:06',
            ),
            183 => 
            array (
                'id' => 684,
                'artist_id' => 160,
                'tag_id' => 189,
                'created_at' => '2018-04-28 12:38:06',
                'updated_at' => '2018-04-28 12:38:06',
            ),
            184 => 
            array (
                'id' => 685,
                'artist_id' => 160,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:38:06',
                'updated_at' => '2018-04-28 12:38:06',
            ),
            185 => 
            array (
                'id' => 686,
                'artist_id' => 161,
                'tag_id' => 314,
                'created_at' => '2018-04-28 12:38:07',
                'updated_at' => '2018-04-28 12:38:07',
            ),
            186 => 
            array (
                'id' => 687,
                'artist_id' => 161,
                'tag_id' => 315,
                'created_at' => '2018-04-28 12:38:07',
                'updated_at' => '2018-04-28 12:38:07',
            ),
            187 => 
            array (
                'id' => 688,
                'artist_id' => 161,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:38:07',
                'updated_at' => '2018-04-28 12:38:07',
            ),
            188 => 
            array (
                'id' => 689,
                'artist_id' => 161,
                'tag_id' => 190,
                'created_at' => '2018-04-28 12:38:07',
                'updated_at' => '2018-04-28 12:38:07',
            ),
            189 => 
            array (
                'id' => 690,
                'artist_id' => 162,
                'tag_id' => 316,
                'created_at' => '2018-04-28 12:38:08',
                'updated_at' => '2018-04-28 12:38:08',
            ),
            190 => 
            array (
                'id' => 691,
                'artist_id' => 162,
                'tag_id' => 317,
                'created_at' => '2018-04-28 12:38:08',
                'updated_at' => '2018-04-28 12:38:08',
            ),
            191 => 
            array (
                'id' => 692,
                'artist_id' => 162,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:38:08',
                'updated_at' => '2018-04-28 12:38:08',
            ),
            192 => 
            array (
                'id' => 693,
                'artist_id' => 162,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:38:08',
                'updated_at' => '2018-04-28 12:38:08',
            ),
            193 => 
            array (
                'id' => 694,
                'artist_id' => 163,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:38:10',
                'updated_at' => '2018-04-28 12:38:10',
            ),
            194 => 
            array (
                'id' => 695,
                'artist_id' => 163,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:38:10',
                'updated_at' => '2018-04-28 12:38:10',
            ),
            195 => 
            array (
                'id' => 696,
                'artist_id' => 163,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:38:10',
                'updated_at' => '2018-04-28 12:38:10',
            ),
            196 => 
            array (
                'id' => 697,
                'artist_id' => 163,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:10',
                'updated_at' => '2018-04-28 12:38:10',
            ),
            197 => 
            array (
                'id' => 698,
                'artist_id' => 163,
                'tag_id' => 204,
                'created_at' => '2018-04-28 12:38:10',
                'updated_at' => '2018-04-28 12:38:10',
            ),
            198 => 
            array (
                'id' => 699,
                'artist_id' => 165,
                'tag_id' => 318,
                'created_at' => '2018-04-28 12:38:13',
                'updated_at' => '2018-04-28 12:38:13',
            ),
            199 => 
            array (
                'id' => 700,
                'artist_id' => 165,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:38:13',
                'updated_at' => '2018-04-28 12:38:13',
            ),
            200 => 
            array (
                'id' => 701,
                'artist_id' => 165,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:13',
                'updated_at' => '2018-04-28 12:38:13',
            ),
            201 => 
            array (
                'id' => 702,
                'artist_id' => 165,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:38:13',
                'updated_at' => '2018-04-28 12:38:13',
            ),
            202 => 
            array (
                'id' => 703,
                'artist_id' => 166,
                'tag_id' => 319,
                'created_at' => '2018-04-28 12:38:14',
                'updated_at' => '2018-04-28 12:38:14',
            ),
            203 => 
            array (
                'id' => 704,
                'artist_id' => 166,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:38:14',
                'updated_at' => '2018-04-28 12:38:14',
            ),
            204 => 
            array (
                'id' => 705,
                'artist_id' => 166,
                'tag_id' => 287,
                'created_at' => '2018-04-28 12:38:14',
                'updated_at' => '2018-04-28 12:38:14',
            ),
            205 => 
            array (
                'id' => 706,
                'artist_id' => 166,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:38:14',
                'updated_at' => '2018-04-28 12:38:14',
            ),
            206 => 
            array (
                'id' => 707,
                'artist_id' => 166,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:14',
                'updated_at' => '2018-04-28 12:38:14',
            ),
            207 => 
            array (
                'id' => 708,
                'artist_id' => 167,
                'tag_id' => 320,
                'created_at' => '2018-04-28 12:38:16',
                'updated_at' => '2018-04-28 12:38:16',
            ),
            208 => 
            array (
                'id' => 709,
                'artist_id' => 167,
                'tag_id' => 226,
                'created_at' => '2018-04-28 12:38:16',
                'updated_at' => '2018-04-28 12:38:16',
            ),
            209 => 
            array (
                'id' => 710,
                'artist_id' => 168,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:38:18',
                'updated_at' => '2018-04-28 12:38:18',
            ),
            210 => 
            array (
                'id' => 711,
                'artist_id' => 168,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:18',
                'updated_at' => '2018-04-28 12:38:18',
            ),
            211 => 
            array (
                'id' => 712,
                'artist_id' => 168,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:38:18',
                'updated_at' => '2018-04-28 12:38:18',
            ),
            212 => 
            array (
                'id' => 713,
                'artist_id' => 168,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:38:18',
                'updated_at' => '2018-04-28 12:38:18',
            ),
            213 => 
            array (
                'id' => 714,
                'artist_id' => 168,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:38:18',
                'updated_at' => '2018-04-28 12:38:18',
            ),
            214 => 
            array (
                'id' => 715,
                'artist_id' => 169,
                'tag_id' => 321,
                'created_at' => '2018-04-28 12:38:19',
                'updated_at' => '2018-04-28 12:38:19',
            ),
            215 => 
            array (
                'id' => 716,
                'artist_id' => 169,
                'tag_id' => 322,
                'created_at' => '2018-04-28 12:38:19',
                'updated_at' => '2018-04-28 12:38:19',
            ),
            216 => 
            array (
                'id' => 717,
                'artist_id' => 169,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:38:19',
                'updated_at' => '2018-04-28 12:38:19',
            ),
            217 => 
            array (
                'id' => 718,
                'artist_id' => 170,
                'tag_id' => 323,
                'created_at' => '2018-04-28 12:38:21',
                'updated_at' => '2018-04-28 12:38:21',
            ),
            218 => 
            array (
                'id' => 719,
                'artist_id' => 170,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:38:21',
                'updated_at' => '2018-04-28 12:38:21',
            ),
            219 => 
            array (
                'id' => 720,
                'artist_id' => 170,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:38:21',
                'updated_at' => '2018-04-28 12:38:21',
            ),
            220 => 
            array (
                'id' => 721,
                'artist_id' => 170,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:38:21',
                'updated_at' => '2018-04-28 12:38:21',
            ),
            221 => 
            array (
                'id' => 722,
                'artist_id' => 170,
                'tag_id' => 143,
                'created_at' => '2018-04-28 12:38:21',
                'updated_at' => '2018-04-28 12:38:21',
            ),
            222 => 
            array (
                'id' => 723,
                'artist_id' => 171,
                'tag_id' => 324,
                'created_at' => '2018-04-28 12:38:22',
                'updated_at' => '2018-04-28 12:38:22',
            ),
            223 => 
            array (
                'id' => 724,
                'artist_id' => 171,
                'tag_id' => 325,
                'created_at' => '2018-04-28 12:38:22',
                'updated_at' => '2018-04-28 12:38:22',
            ),
            224 => 
            array (
                'id' => 725,
                'artist_id' => 171,
                'tag_id' => 326,
                'created_at' => '2018-04-28 12:38:22',
                'updated_at' => '2018-04-28 12:38:22',
            ),
            225 => 
            array (
                'id' => 726,
                'artist_id' => 171,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:38:23',
                'updated_at' => '2018-04-28 12:38:23',
            ),
            226 => 
            array (
                'id' => 727,
                'artist_id' => 172,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:38:24',
                'updated_at' => '2018-04-28 12:38:24',
            ),
            227 => 
            array (
                'id' => 728,
                'artist_id' => 172,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:38:24',
                'updated_at' => '2018-04-28 12:38:24',
            ),
            228 => 
            array (
                'id' => 729,
                'artist_id' => 172,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:24',
                'updated_at' => '2018-04-28 12:38:24',
            ),
            229 => 
            array (
                'id' => 730,
                'artist_id' => 172,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:38:24',
                'updated_at' => '2018-04-28 12:38:24',
            ),
            230 => 
            array (
                'id' => 731,
                'artist_id' => 172,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:24',
                'updated_at' => '2018-04-28 12:38:24',
            ),
            231 => 
            array (
                'id' => 732,
                'artist_id' => 173,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:38:25',
                'updated_at' => '2018-04-28 12:38:25',
            ),
            232 => 
            array (
                'id' => 733,
                'artist_id' => 173,
                'tag_id' => 240,
                'created_at' => '2018-04-28 12:38:25',
                'updated_at' => '2018-04-28 12:38:25',
            ),
            233 => 
            array (
                'id' => 734,
                'artist_id' => 173,
                'tag_id' => 108,
                'created_at' => '2018-04-28 12:38:25',
                'updated_at' => '2018-04-28 12:38:25',
            ),
            234 => 
            array (
                'id' => 735,
                'artist_id' => 173,
                'tag_id' => 113,
                'created_at' => '2018-04-28 12:38:25',
                'updated_at' => '2018-04-28 12:38:25',
            ),
            235 => 
            array (
                'id' => 736,
                'artist_id' => 173,
                'tag_id' => 117,
                'created_at' => '2018-04-28 12:38:25',
                'updated_at' => '2018-04-28 12:38:25',
            ),
            236 => 
            array (
                'id' => 737,
                'artist_id' => 174,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:38:27',
                'updated_at' => '2018-04-28 12:38:27',
            ),
            237 => 
            array (
                'id' => 738,
                'artist_id' => 174,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:27',
                'updated_at' => '2018-04-28 12:38:27',
            ),
            238 => 
            array (
                'id' => 739,
                'artist_id' => 174,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:38:27',
                'updated_at' => '2018-04-28 12:38:27',
            ),
            239 => 
            array (
                'id' => 740,
                'artist_id' => 174,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:38:27',
                'updated_at' => '2018-04-28 12:38:27',
            ),
            240 => 
            array (
                'id' => 741,
                'artist_id' => 174,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:38:27',
                'updated_at' => '2018-04-28 12:38:27',
            ),
            241 => 
            array (
                'id' => 742,
                'artist_id' => 176,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:30',
                'updated_at' => '2018-04-28 12:38:30',
            ),
            242 => 
            array (
                'id' => 743,
                'artist_id' => 176,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:30',
                'updated_at' => '2018-04-28 12:38:30',
            ),
            243 => 
            array (
                'id' => 744,
                'artist_id' => 176,
                'tag_id' => 247,
                'created_at' => '2018-04-28 12:38:30',
                'updated_at' => '2018-04-28 12:38:30',
            ),
            244 => 
            array (
                'id' => 745,
                'artist_id' => 176,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:38:30',
                'updated_at' => '2018-04-28 12:38:30',
            ),
            245 => 
            array (
                'id' => 746,
                'artist_id' => 177,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:38:31',
                'updated_at' => '2018-04-28 12:38:31',
            ),
            246 => 
            array (
                'id' => 747,
                'artist_id' => 177,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:31',
                'updated_at' => '2018-04-28 12:38:31',
            ),
            247 => 
            array (
                'id' => 748,
                'artist_id' => 177,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:31',
                'updated_at' => '2018-04-28 12:38:31',
            ),
            248 => 
            array (
                'id' => 749,
                'artist_id' => 177,
                'tag_id' => 248,
                'created_at' => '2018-04-28 12:38:31',
                'updated_at' => '2018-04-28 12:38:31',
            ),
            249 => 
            array (
                'id' => 750,
                'artist_id' => 177,
                'tag_id' => 263,
                'created_at' => '2018-04-28 12:38:31',
                'updated_at' => '2018-04-28 12:38:31',
            ),
            250 => 
            array (
                'id' => 751,
                'artist_id' => 178,
                'tag_id' => 327,
                'created_at' => '2018-04-28 12:38:33',
                'updated_at' => '2018-04-28 12:38:33',
            ),
            251 => 
            array (
                'id' => 752,
                'artist_id' => 178,
                'tag_id' => 250,
                'created_at' => '2018-04-28 12:38:33',
                'updated_at' => '2018-04-28 12:38:33',
            ),
            252 => 
            array (
                'id' => 753,
                'artist_id' => 178,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:38:33',
                'updated_at' => '2018-04-28 12:38:33',
            ),
            253 => 
            array (
                'id' => 754,
                'artist_id' => 178,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:33',
                'updated_at' => '2018-04-28 12:38:33',
            ),
            254 => 
            array (
                'id' => 755,
                'artist_id' => 178,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:33',
                'updated_at' => '2018-04-28 12:38:33',
            ),
            255 => 
            array (
                'id' => 756,
                'artist_id' => 180,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:36',
                'updated_at' => '2018-04-28 12:38:36',
            ),
            256 => 
            array (
                'id' => 757,
                'artist_id' => 180,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:36',
                'updated_at' => '2018-04-28 12:38:36',
            ),
            257 => 
            array (
                'id' => 758,
                'artist_id' => 181,
                'tag_id' => 328,
                'created_at' => '2018-04-28 12:38:38',
                'updated_at' => '2018-04-28 12:38:38',
            ),
            258 => 
            array (
                'id' => 759,
                'artist_id' => 181,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:38:38',
                'updated_at' => '2018-04-28 12:38:38',
            ),
            259 => 
            array (
                'id' => 760,
                'artist_id' => 181,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:38',
                'updated_at' => '2018-04-28 12:38:38',
            ),
            260 => 
            array (
                'id' => 761,
                'artist_id' => 181,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:38',
                'updated_at' => '2018-04-28 12:38:38',
            ),
            261 => 
            array (
                'id' => 762,
                'artist_id' => 181,
                'tag_id' => 263,
                'created_at' => '2018-04-28 12:38:38',
                'updated_at' => '2018-04-28 12:38:38',
            ),
            262 => 
            array (
                'id' => 763,
                'artist_id' => 182,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:41',
                'updated_at' => '2018-04-28 12:38:41',
            ),
            263 => 
            array (
                'id' => 764,
                'artist_id' => 182,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:41',
                'updated_at' => '2018-04-28 12:38:41',
            ),
            264 => 
            array (
                'id' => 765,
                'artist_id' => 182,
                'tag_id' => 55,
                'created_at' => '2018-04-28 12:38:41',
                'updated_at' => '2018-04-28 12:38:41',
            ),
            265 => 
            array (
                'id' => 766,
                'artist_id' => 182,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:38:41',
                'updated_at' => '2018-04-28 12:38:41',
            ),
            266 => 
            array (
                'id' => 767,
                'artist_id' => 182,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:41',
                'updated_at' => '2018-04-28 12:38:41',
            ),
            267 => 
            array (
                'id' => 768,
                'artist_id' => 183,
                'tag_id' => 329,
                'created_at' => '2018-04-28 12:38:42',
                'updated_at' => '2018-04-28 12:38:42',
            ),
            268 => 
            array (
                'id' => 769,
                'artist_id' => 183,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:42',
                'updated_at' => '2018-04-28 12:38:42',
            ),
            269 => 
            array (
                'id' => 770,
                'artist_id' => 183,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:38:42',
                'updated_at' => '2018-04-28 12:38:42',
            ),
            270 => 
            array (
                'id' => 771,
                'artist_id' => 183,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:42',
                'updated_at' => '2018-04-28 12:38:42',
            ),
            271 => 
            array (
                'id' => 772,
                'artist_id' => 183,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:42',
                'updated_at' => '2018-04-28 12:38:42',
            ),
            272 => 
            array (
                'id' => 773,
                'artist_id' => 184,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:43',
                'updated_at' => '2018-04-28 12:38:43',
            ),
            273 => 
            array (
                'id' => 774,
                'artist_id' => 184,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:43',
                'updated_at' => '2018-04-28 12:38:43',
            ),
            274 => 
            array (
                'id' => 775,
                'artist_id' => 184,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:43',
                'updated_at' => '2018-04-28 12:38:43',
            ),
            275 => 
            array (
                'id' => 776,
                'artist_id' => 184,
                'tag_id' => 266,
                'created_at' => '2018-04-28 12:38:43',
                'updated_at' => '2018-04-28 12:38:43',
            ),
            276 => 
            array (
                'id' => 777,
                'artist_id' => 184,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:38:43',
                'updated_at' => '2018-04-28 12:38:43',
            ),
            277 => 
            array (
                'id' => 778,
                'artist_id' => 185,
                'tag_id' => 330,
                'created_at' => '2018-04-28 12:38:45',
                'updated_at' => '2018-04-28 12:38:45',
            ),
            278 => 
            array (
                'id' => 779,
                'artist_id' => 185,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:45',
                'updated_at' => '2018-04-28 12:38:45',
            ),
            279 => 
            array (
                'id' => 780,
                'artist_id' => 185,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:45',
                'updated_at' => '2018-04-28 12:38:45',
            ),
            280 => 
            array (
                'id' => 781,
                'artist_id' => 185,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:38:45',
                'updated_at' => '2018-04-28 12:38:45',
            ),
            281 => 
            array (
                'id' => 782,
                'artist_id' => 185,
                'tag_id' => 268,
                'created_at' => '2018-04-28 12:38:45',
                'updated_at' => '2018-04-28 12:38:45',
            ),
            282 => 
            array (
                'id' => 783,
                'artist_id' => 186,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:47',
                'updated_at' => '2018-04-28 12:38:47',
            ),
            283 => 
            array (
                'id' => 784,
                'artist_id' => 186,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:47',
                'updated_at' => '2018-04-28 12:38:47',
            ),
            284 => 
            array (
                'id' => 785,
                'artist_id' => 186,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:38:47',
                'updated_at' => '2018-04-28 12:38:47',
            ),
            285 => 
            array (
                'id' => 786,
                'artist_id' => 186,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:38:47',
                'updated_at' => '2018-04-28 12:38:47',
            ),
            286 => 
            array (
                'id' => 787,
                'artist_id' => 186,
                'tag_id' => 270,
                'created_at' => '2018-04-28 12:38:47',
                'updated_at' => '2018-04-28 12:38:47',
            ),
            287 => 
            array (
                'id' => 788,
                'artist_id' => 188,
                'tag_id' => 331,
                'created_at' => '2018-04-28 12:38:51',
                'updated_at' => '2018-04-28 12:38:51',
            ),
            288 => 
            array (
                'id' => 789,
                'artist_id' => 192,
                'tag_id' => 5,
                'created_at' => '2018-04-28 12:38:57',
                'updated_at' => '2018-04-28 12:38:57',
            ),
            289 => 
            array (
                'id' => 790,
                'artist_id' => 192,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:38:57',
                'updated_at' => '2018-04-28 12:38:57',
            ),
            290 => 
            array (
                'id' => 791,
                'artist_id' => 192,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:38:57',
                'updated_at' => '2018-04-28 12:38:57',
            ),
            291 => 
            array (
                'id' => 792,
                'artist_id' => 192,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:38:57',
                'updated_at' => '2018-04-28 12:38:57',
            ),
            292 => 
            array (
                'id' => 793,
                'artist_id' => 192,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:38:57',
                'updated_at' => '2018-04-28 12:38:57',
            ),
            293 => 
            array (
                'id' => 794,
                'artist_id' => 193,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:38:58',
                'updated_at' => '2018-04-28 12:38:58',
            ),
            294 => 
            array (
                'id' => 795,
                'artist_id' => 193,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:38:58',
                'updated_at' => '2018-04-28 12:38:58',
            ),
            295 => 
            array (
                'id' => 796,
                'artist_id' => 193,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:38:58',
                'updated_at' => '2018-04-28 12:38:58',
            ),
            296 => 
            array (
                'id' => 797,
                'artist_id' => 193,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:38:58',
                'updated_at' => '2018-04-28 12:38:58',
            ),
            297 => 
            array (
                'id' => 798,
                'artist_id' => 193,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:38:58',
                'updated_at' => '2018-04-28 12:38:58',
            ),
            298 => 
            array (
                'id' => 799,
                'artist_id' => 194,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:39:00',
                'updated_at' => '2018-04-28 12:39:00',
            ),
            299 => 
            array (
                'id' => 800,
                'artist_id' => 194,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:39:00',
                'updated_at' => '2018-04-28 12:39:00',
            ),
            300 => 
            array (
                'id' => 801,
                'artist_id' => 194,
                'tag_id' => 273,
                'created_at' => '2018-04-28 12:39:00',
                'updated_at' => '2018-04-28 12:39:00',
            ),
            301 => 
            array (
                'id' => 802,
                'artist_id' => 194,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:39:00',
                'updated_at' => '2018-04-28 12:39:00',
            ),
            302 => 
            array (
                'id' => 803,
                'artist_id' => 194,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:39:00',
                'updated_at' => '2018-04-28 12:39:00',
            ),
            303 => 
            array (
                'id' => 804,
                'artist_id' => 195,
                'tag_id' => 332,
                'created_at' => '2018-04-28 12:39:01',
                'updated_at' => '2018-04-28 12:39:01',
            ),
            304 => 
            array (
                'id' => 805,
                'artist_id' => 195,
                'tag_id' => 273,
                'created_at' => '2018-04-28 12:39:01',
                'updated_at' => '2018-04-28 12:39:01',
            ),
            305 => 
            array (
                'id' => 806,
                'artist_id' => 195,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:39:01',
                'updated_at' => '2018-04-28 12:39:01',
            ),
            306 => 
            array (
                'id' => 807,
                'artist_id' => 195,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:39:01',
                'updated_at' => '2018-04-28 12:39:01',
            ),
            307 => 
            array (
                'id' => 808,
                'artist_id' => 195,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:39:01',
                'updated_at' => '2018-04-28 12:39:01',
            ),
            308 => 
            array (
                'id' => 809,
                'artist_id' => 196,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:39:03',
                'updated_at' => '2018-04-28 12:39:03',
            ),
            309 => 
            array (
                'id' => 810,
                'artist_id' => 196,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:39:03',
                'updated_at' => '2018-04-28 12:39:03',
            ),
            310 => 
            array (
                'id' => 811,
                'artist_id' => 196,
                'tag_id' => 264,
                'created_at' => '2018-04-28 12:39:03',
                'updated_at' => '2018-04-28 12:39:03',
            ),
            311 => 
            array (
                'id' => 812,
                'artist_id' => 196,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:39:03',
                'updated_at' => '2018-04-28 12:39:03',
            ),
            312 => 
            array (
                'id' => 813,
                'artist_id' => 196,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:39:03',
                'updated_at' => '2018-04-28 12:39:03',
            ),
            313 => 
            array (
                'id' => 814,
                'artist_id' => 197,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:39:04',
                'updated_at' => '2018-04-28 12:39:04',
            ),
            314 => 
            array (
                'id' => 815,
                'artist_id' => 197,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:39:04',
                'updated_at' => '2018-04-28 12:39:04',
            ),
            315 => 
            array (
                'id' => 816,
                'artist_id' => 197,
                'tag_id' => 248,
                'created_at' => '2018-04-28 12:39:04',
                'updated_at' => '2018-04-28 12:39:04',
            ),
            316 => 
            array (
                'id' => 817,
                'artist_id' => 197,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:39:04',
                'updated_at' => '2018-04-28 12:39:04',
            ),
            317 => 
            array (
                'id' => 818,
                'artist_id' => 197,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:39:04',
                'updated_at' => '2018-04-28 12:39:04',
            ),
            318 => 
            array (
                'id' => 819,
                'artist_id' => 198,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:55',
                'updated_at' => '2019-10-29 22:50:55',
            ),
            319 => 
            array (
                'id' => 820,
                'artist_id' => 198,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:55',
                'updated_at' => '2019-10-29 22:50:55',
            ),
            320 => 
            array (
                'id' => 821,
                'artist_id' => 198,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:50:55',
                'updated_at' => '2019-10-29 22:50:55',
            ),
            321 => 
            array (
                'id' => 822,
                'artist_id' => 198,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:55',
                'updated_at' => '2019-10-29 22:50:55',
            ),
            322 => 
            array (
                'id' => 823,
                'artist_id' => 198,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:50:55',
                'updated_at' => '2019-10-29 22:50:55',
            ),
            323 => 
            array (
                'id' => 824,
                'artist_id' => 199,
                'tag_id' => 83,
                'created_at' => '2019-10-29 22:50:57',
                'updated_at' => '2019-10-29 22:50:57',
            ),
            324 => 
            array (
                'id' => 825,
                'artist_id' => 199,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:57',
                'updated_at' => '2019-10-29 22:50:57',
            ),
            325 => 
            array (
                'id' => 826,
                'artist_id' => 199,
                'tag_id' => 203,
                'created_at' => '2019-10-29 22:50:57',
                'updated_at' => '2019-10-29 22:50:57',
            ),
            326 => 
            array (
                'id' => 827,
                'artist_id' => 199,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:50:57',
                'updated_at' => '2019-10-29 22:50:57',
            ),
            327 => 
            array (
                'id' => 828,
                'artist_id' => 199,
                'tag_id' => 101,
                'created_at' => '2019-10-29 22:50:57',
                'updated_at' => '2019-10-29 22:50:57',
            ),
            328 => 
            array (
                'id' => 829,
                'artist_id' => 200,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:50:58',
                'updated_at' => '2019-10-29 22:50:58',
            ),
            329 => 
            array (
                'id' => 830,
                'artist_id' => 200,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:50:58',
                'updated_at' => '2019-10-29 22:50:58',
            ),
            330 => 
            array (
                'id' => 831,
                'artist_id' => 200,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:50:58',
                'updated_at' => '2019-10-29 22:50:58',
            ),
            331 => 
            array (
                'id' => 832,
                'artist_id' => 200,
                'tag_id' => 83,
                'created_at' => '2019-10-29 22:50:58',
                'updated_at' => '2019-10-29 22:50:58',
            ),
            332 => 
            array (
                'id' => 833,
                'artist_id' => 200,
                'tag_id' => 203,
                'created_at' => '2019-10-29 22:50:58',
                'updated_at' => '2019-10-29 22:50:58',
            ),
            333 => 
            array (
                'id' => 834,
                'artist_id' => 201,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:59',
                'updated_at' => '2019-10-29 22:50:59',
            ),
            334 => 
            array (
                'id' => 835,
                'artist_id' => 201,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:50:59',
                'updated_at' => '2019-10-29 22:50:59',
            ),
            335 => 
            array (
                'id' => 836,
                'artist_id' => 201,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:50:59',
                'updated_at' => '2019-10-29 22:50:59',
            ),
            336 => 
            array (
                'id' => 837,
                'artist_id' => 201,
                'tag_id' => 300,
                'created_at' => '2019-10-29 22:50:59',
                'updated_at' => '2019-10-29 22:50:59',
            ),
            337 => 
            array (
                'id' => 838,
                'artist_id' => 202,
                'tag_id' => 385,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-29 22:51:01',
            ),
            338 => 
            array (
                'id' => 839,
                'artist_id' => 202,
                'tag_id' => 386,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-29 22:51:01',
            ),
            339 => 
            array (
                'id' => 840,
                'artist_id' => 202,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-29 22:51:01',
            ),
            340 => 
            array (
                'id' => 841,
                'artist_id' => 202,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-29 22:51:01',
            ),
            341 => 
            array (
                'id' => 842,
                'artist_id' => 202,
                'tag_id' => 101,
                'created_at' => '2019-10-29 22:51:01',
                'updated_at' => '2019-10-29 22:51:01',
            ),
            342 => 
            array (
                'id' => 843,
                'artist_id' => 203,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:02',
                'updated_at' => '2019-10-29 22:51:02',
            ),
            343 => 
            array (
                'id' => 844,
                'artist_id' => 203,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:51:02',
                'updated_at' => '2019-10-29 22:51:02',
            ),
            344 => 
            array (
                'id' => 845,
                'artist_id' => 203,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:51:02',
                'updated_at' => '2019-10-29 22:51:02',
            ),
            345 => 
            array (
                'id' => 846,
                'artist_id' => 203,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:02',
                'updated_at' => '2019-10-29 22:51:02',
            ),
            346 => 
            array (
                'id' => 847,
                'artist_id' => 204,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:04',
                'updated_at' => '2019-10-29 22:51:04',
            ),
            347 => 
            array (
                'id' => 848,
                'artist_id' => 204,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:04',
                'updated_at' => '2019-10-29 22:51:04',
            ),
            348 => 
            array (
                'id' => 849,
                'artist_id' => 204,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:04',
                'updated_at' => '2019-10-29 22:51:04',
            ),
            349 => 
            array (
                'id' => 850,
                'artist_id' => 204,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:51:04',
                'updated_at' => '2019-10-29 22:51:04',
            ),
            350 => 
            array (
                'id' => 851,
                'artist_id' => 204,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:04',
                'updated_at' => '2019-10-29 22:51:04',
            ),
            351 => 
            array (
                'id' => 852,
                'artist_id' => 205,
                'tag_id' => 387,
                'created_at' => '2019-10-29 22:51:05',
                'updated_at' => '2019-10-29 22:51:05',
            ),
            352 => 
            array (
                'id' => 853,
                'artist_id' => 205,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:51:05',
                'updated_at' => '2019-10-29 22:51:05',
            ),
            353 => 
            array (
                'id' => 854,
                'artist_id' => 205,
                'tag_id' => 103,
                'created_at' => '2019-10-29 22:51:05',
                'updated_at' => '2019-10-29 22:51:05',
            ),
            354 => 
            array (
                'id' => 855,
                'artist_id' => 205,
                'tag_id' => 185,
                'created_at' => '2019-10-29 22:51:05',
                'updated_at' => '2019-10-29 22:51:05',
            ),
            355 => 
            array (
                'id' => 856,
                'artist_id' => 205,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:51:05',
                'updated_at' => '2019-10-29 22:51:05',
            ),
            356 => 
            array (
                'id' => 857,
                'artist_id' => 206,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:07',
                'updated_at' => '2019-10-29 22:51:07',
            ),
            357 => 
            array (
                'id' => 858,
                'artist_id' => 206,
                'tag_id' => 97,
                'created_at' => '2019-10-29 22:51:07',
                'updated_at' => '2019-10-29 22:51:07',
            ),
            358 => 
            array (
                'id' => 859,
                'artist_id' => 206,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:51:07',
                'updated_at' => '2019-10-29 22:51:07',
            ),
            359 => 
            array (
                'id' => 860,
                'artist_id' => 206,
                'tag_id' => 126,
                'created_at' => '2019-10-29 22:51:07',
                'updated_at' => '2019-10-29 22:51:07',
            ),
            360 => 
            array (
                'id' => 861,
                'artist_id' => 206,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:51:07',
                'updated_at' => '2019-10-29 22:51:07',
            ),
            361 => 
            array (
                'id' => 862,
                'artist_id' => 207,
                'tag_id' => 388,
                'created_at' => '2019-10-29 22:51:08',
                'updated_at' => '2019-10-29 22:51:08',
            ),
            362 => 
            array (
                'id' => 863,
                'artist_id' => 208,
                'tag_id' => 82,
                'created_at' => '2019-10-29 22:51:09',
                'updated_at' => '2019-10-29 22:51:09',
            ),
            363 => 
            array (
                'id' => 864,
                'artist_id' => 208,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:51:09',
                'updated_at' => '2019-10-29 22:51:09',
            ),
            364 => 
            array (
                'id' => 865,
                'artist_id' => 208,
                'tag_id' => 95,
                'created_at' => '2019-10-29 22:51:09',
                'updated_at' => '2019-10-29 22:51:09',
            ),
            365 => 
            array (
                'id' => 866,
                'artist_id' => 209,
                'tag_id' => 389,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-29 22:51:11',
            ),
            366 => 
            array (
                'id' => 867,
                'artist_id' => 209,
                'tag_id' => 390,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-29 22:51:11',
            ),
            367 => 
            array (
                'id' => 868,
                'artist_id' => 209,
                'tag_id' => 391,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-29 22:51:11',
            ),
            368 => 
            array (
                'id' => 869,
                'artist_id' => 209,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-29 22:51:11',
            ),
            369 => 
            array (
                'id' => 870,
                'artist_id' => 209,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:11',
                'updated_at' => '2019-10-29 22:51:11',
            ),
            370 => 
            array (
                'id' => 871,
                'artist_id' => 211,
                'tag_id' => 392,
                'created_at' => '2019-10-29 22:51:14',
                'updated_at' => '2019-10-29 22:51:14',
            ),
            371 => 
            array (
                'id' => 872,
                'artist_id' => 211,
                'tag_id' => 23,
                'created_at' => '2019-10-29 22:51:14',
                'updated_at' => '2019-10-29 22:51:14',
            ),
            372 => 
            array (
                'id' => 873,
                'artist_id' => 211,
                'tag_id' => 131,
                'created_at' => '2019-10-29 22:51:14',
                'updated_at' => '2019-10-29 22:51:14',
            ),
            373 => 
            array (
                'id' => 874,
                'artist_id' => 211,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:51:14',
                'updated_at' => '2019-10-29 22:51:14',
            ),
            374 => 
            array (
                'id' => 875,
                'artist_id' => 211,
                'tag_id' => 132,
                'created_at' => '2019-10-29 22:51:14',
                'updated_at' => '2019-10-29 22:51:14',
            ),
            375 => 
            array (
                'id' => 876,
                'artist_id' => 212,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:51:15',
                'updated_at' => '2019-10-29 22:51:15',
            ),
            376 => 
            array (
                'id' => 877,
                'artist_id' => 212,
                'tag_id' => 185,
                'created_at' => '2019-10-29 22:51:15',
                'updated_at' => '2019-10-29 22:51:15',
            ),
            377 => 
            array (
                'id' => 878,
                'artist_id' => 212,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:51:15',
                'updated_at' => '2019-10-29 22:51:15',
            ),
            378 => 
            array (
                'id' => 879,
                'artist_id' => 212,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:51:15',
                'updated_at' => '2019-10-29 22:51:15',
            ),
            379 => 
            array (
                'id' => 880,
                'artist_id' => 212,
                'tag_id' => 52,
                'created_at' => '2019-10-29 22:51:15',
                'updated_at' => '2019-10-29 22:51:15',
            ),
            380 => 
            array (
                'id' => 881,
                'artist_id' => 213,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:16',
                'updated_at' => '2019-10-29 22:51:16',
            ),
            381 => 
            array (
                'id' => 882,
                'artist_id' => 213,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:51:16',
                'updated_at' => '2019-10-29 22:51:16',
            ),
            382 => 
            array (
                'id' => 883,
                'artist_id' => 213,
                'tag_id' => 140,
                'created_at' => '2019-10-29 22:51:16',
                'updated_at' => '2019-10-29 22:51:16',
            ),
            383 => 
            array (
                'id' => 884,
                'artist_id' => 213,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:51:16',
                'updated_at' => '2019-10-29 22:51:16',
            ),
            384 => 
            array (
                'id' => 885,
                'artist_id' => 213,
                'tag_id' => 185,
                'created_at' => '2019-10-29 22:51:16',
                'updated_at' => '2019-10-29 22:51:16',
            ),
            385 => 
            array (
                'id' => 886,
                'artist_id' => 214,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:51:18',
                'updated_at' => '2019-10-29 22:51:18',
            ),
            386 => 
            array (
                'id' => 887,
                'artist_id' => 214,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:18',
                'updated_at' => '2019-10-29 22:51:18',
            ),
            387 => 
            array (
                'id' => 888,
                'artist_id' => 214,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:18',
                'updated_at' => '2019-10-29 22:51:18',
            ),
            388 => 
            array (
                'id' => 889,
                'artist_id' => 214,
                'tag_id' => 15,
                'created_at' => '2019-10-29 22:51:18',
                'updated_at' => '2019-10-29 22:51:18',
            ),
            389 => 
            array (
                'id' => 890,
                'artist_id' => 214,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:18',
                'updated_at' => '2019-10-29 22:51:18',
            ),
            390 => 
            array (
                'id' => 891,
                'artist_id' => 215,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:19',
                'updated_at' => '2019-10-29 22:51:19',
            ),
            391 => 
            array (
                'id' => 892,
                'artist_id' => 215,
                'tag_id' => 44,
                'created_at' => '2019-10-29 22:51:19',
                'updated_at' => '2019-10-29 22:51:19',
            ),
            392 => 
            array (
                'id' => 893,
                'artist_id' => 215,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:19',
                'updated_at' => '2019-10-29 22:51:19',
            ),
            393 => 
            array (
                'id' => 894,
                'artist_id' => 215,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:51:19',
                'updated_at' => '2019-10-29 22:51:19',
            ),
            394 => 
            array (
                'id' => 895,
                'artist_id' => 215,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:51:19',
                'updated_at' => '2019-10-29 22:51:19',
            ),
            395 => 
            array (
                'id' => 896,
                'artist_id' => 216,
                'tag_id' => 83,
                'created_at' => '2019-10-29 22:51:20',
                'updated_at' => '2019-10-29 22:51:20',
            ),
            396 => 
            array (
                'id' => 897,
                'artist_id' => 216,
                'tag_id' => 94,
                'created_at' => '2019-10-29 22:51:20',
                'updated_at' => '2019-10-29 22:51:20',
            ),
            397 => 
            array (
                'id' => 898,
                'artist_id' => 216,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:51:20',
                'updated_at' => '2019-10-29 22:51:20',
            ),
            398 => 
            array (
                'id' => 899,
                'artist_id' => 216,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:51:20',
                'updated_at' => '2019-10-29 22:51:20',
            ),
            399 => 
            array (
                'id' => 900,
                'artist_id' => 216,
                'tag_id' => 101,
                'created_at' => '2019-10-29 22:51:20',
                'updated_at' => '2019-10-29 22:51:20',
            ),
            400 => 
            array (
                'id' => 901,
                'artist_id' => 217,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:22',
                'updated_at' => '2019-10-29 22:51:22',
            ),
            401 => 
            array (
                'id' => 902,
                'artist_id' => 217,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:22',
                'updated_at' => '2019-10-29 22:51:22',
            ),
            402 => 
            array (
                'id' => 903,
                'artist_id' => 217,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:51:22',
                'updated_at' => '2019-10-29 22:51:22',
            ),
            403 => 
            array (
                'id' => 904,
                'artist_id' => 217,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:51:22',
                'updated_at' => '2019-10-29 22:51:22',
            ),
            404 => 
            array (
                'id' => 905,
                'artist_id' => 217,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:51:22',
                'updated_at' => '2019-10-29 22:51:22',
            ),
            405 => 
            array (
                'id' => 906,
                'artist_id' => 219,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:51:25',
                'updated_at' => '2019-10-29 22:51:25',
            ),
            406 => 
            array (
                'id' => 907,
                'artist_id' => 219,
                'tag_id' => 69,
                'created_at' => '2019-10-29 22:51:25',
                'updated_at' => '2019-10-29 22:51:25',
            ),
            407 => 
            array (
                'id' => 908,
                'artist_id' => 219,
                'tag_id' => 294,
                'created_at' => '2019-10-29 22:51:25',
                'updated_at' => '2019-10-29 22:51:25',
            ),
            408 => 
            array (
                'id' => 909,
                'artist_id' => 219,
                'tag_id' => 20,
                'created_at' => '2019-10-29 22:51:25',
                'updated_at' => '2019-10-29 22:51:25',
            ),
            409 => 
            array (
                'id' => 910,
                'artist_id' => 219,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:51:25',
                'updated_at' => '2019-10-29 22:51:25',
            ),
            410 => 
            array (
                'id' => 911,
                'artist_id' => 220,
                'tag_id' => 251,
                'created_at' => '2019-10-29 22:51:26',
                'updated_at' => '2019-10-29 22:51:26',
            ),
            411 => 
            array (
                'id' => 912,
                'artist_id' => 220,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:51:26',
                'updated_at' => '2019-10-29 22:51:26',
            ),
            412 => 
            array (
                'id' => 913,
                'artist_id' => 220,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:26',
                'updated_at' => '2019-10-29 22:51:26',
            ),
            413 => 
            array (
                'id' => 914,
                'artist_id' => 220,
                'tag_id' => 194,
                'created_at' => '2019-10-29 22:51:26',
                'updated_at' => '2019-10-29 22:51:26',
            ),
            414 => 
            array (
                'id' => 915,
                'artist_id' => 220,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:26',
                'updated_at' => '2019-10-29 22:51:26',
            ),
            415 => 
            array (
                'id' => 916,
                'artist_id' => 221,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:28',
                'updated_at' => '2019-10-29 22:51:28',
            ),
            416 => 
            array (
                'id' => 917,
                'artist_id' => 221,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:51:28',
                'updated_at' => '2019-10-29 22:51:28',
            ),
            417 => 
            array (
                'id' => 918,
                'artist_id' => 221,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:28',
                'updated_at' => '2019-10-29 22:51:28',
            ),
            418 => 
            array (
                'id' => 919,
                'artist_id' => 221,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:51:28',
                'updated_at' => '2019-10-29 22:51:28',
            ),
            419 => 
            array (
                'id' => 920,
                'artist_id' => 221,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:28',
                'updated_at' => '2019-10-29 22:51:28',
            ),
            420 => 
            array (
                'id' => 921,
                'artist_id' => 222,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:29',
                'updated_at' => '2019-10-29 22:51:29',
            ),
            421 => 
            array (
                'id' => 922,
                'artist_id' => 222,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:51:29',
                'updated_at' => '2019-10-29 22:51:29',
            ),
            422 => 
            array (
                'id' => 923,
                'artist_id' => 222,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:51:29',
                'updated_at' => '2019-10-29 22:51:29',
            ),
            423 => 
            array (
                'id' => 924,
                'artist_id' => 222,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:51:29',
                'updated_at' => '2019-10-29 22:51:29',
            ),
            424 => 
            array (
                'id' => 925,
                'artist_id' => 222,
                'tag_id' => 119,
                'created_at' => '2019-10-29 22:51:29',
                'updated_at' => '2019-10-29 22:51:29',
            ),
            425 => 
            array (
                'id' => 926,
                'artist_id' => 223,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:51:31',
                'updated_at' => '2019-10-29 22:51:31',
            ),
            426 => 
            array (
                'id' => 927,
                'artist_id' => 223,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:51:31',
                'updated_at' => '2019-10-29 22:51:31',
            ),
            427 => 
            array (
                'id' => 928,
                'artist_id' => 223,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:31',
                'updated_at' => '2019-10-29 22:51:31',
            ),
            428 => 
            array (
                'id' => 929,
                'artist_id' => 223,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:51:31',
                'updated_at' => '2019-10-29 22:51:31',
            ),
            429 => 
            array (
                'id' => 930,
                'artist_id' => 223,
                'tag_id' => 43,
                'created_at' => '2019-10-29 22:51:31',
                'updated_at' => '2019-10-29 22:51:31',
            ),
            430 => 
            array (
                'id' => 931,
                'artist_id' => 224,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:51:33',
                'updated_at' => '2019-10-29 22:51:33',
            ),
            431 => 
            array (
                'id' => 932,
                'artist_id' => 224,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:33',
                'updated_at' => '2019-10-29 22:51:33',
            ),
            432 => 
            array (
                'id' => 933,
                'artist_id' => 224,
                'tag_id' => 232,
                'created_at' => '2019-10-29 22:51:33',
                'updated_at' => '2019-10-29 22:51:33',
            ),
            433 => 
            array (
                'id' => 934,
                'artist_id' => 224,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:51:33',
                'updated_at' => '2019-10-29 22:51:33',
            ),
            434 => 
            array (
                'id' => 935,
                'artist_id' => 224,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:51:33',
                'updated_at' => '2019-10-29 22:51:33',
            ),
            435 => 
            array (
                'id' => 936,
                'artist_id' => 225,
                'tag_id' => 393,
                'created_at' => '2019-10-29 22:51:34',
                'updated_at' => '2019-10-29 22:51:34',
            ),
            436 => 
            array (
                'id' => 937,
                'artist_id' => 225,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:34',
                'updated_at' => '2019-10-29 22:51:34',
            ),
            437 => 
            array (
                'id' => 938,
                'artist_id' => 225,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:51:34',
                'updated_at' => '2019-10-29 22:51:34',
            ),
            438 => 
            array (
                'id' => 939,
                'artist_id' => 225,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:34',
                'updated_at' => '2019-10-29 22:51:34',
            ),
            439 => 
            array (
                'id' => 940,
                'artist_id' => 225,
                'tag_id' => 78,
                'created_at' => '2019-10-29 22:51:34',
                'updated_at' => '2019-10-29 22:51:34',
            ),
            440 => 
            array (
                'id' => 941,
                'artist_id' => 227,
                'tag_id' => 394,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-29 22:51:36',
            ),
            441 => 
            array (
                'id' => 942,
                'artist_id' => 227,
                'tag_id' => 395,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-29 22:51:36',
            ),
            442 => 
            array (
                'id' => 943,
                'artist_id' => 227,
                'tag_id' => 396,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-29 22:51:36',
            ),
            443 => 
            array (
                'id' => 944,
                'artist_id' => 227,
                'tag_id' => 101,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-29 22:51:36',
            ),
            444 => 
            array (
                'id' => 945,
                'artist_id' => 227,
                'tag_id' => 367,
                'created_at' => '2019-10-29 22:51:36',
                'updated_at' => '2019-10-29 22:51:36',
            ),
            445 => 
            array (
                'id' => 946,
                'artist_id' => 228,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:38',
                'updated_at' => '2019-10-29 22:51:38',
            ),
            446 => 
            array (
                'id' => 947,
                'artist_id' => 228,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:51:38',
                'updated_at' => '2019-10-29 22:51:38',
            ),
            447 => 
            array (
                'id' => 948,
                'artist_id' => 228,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:38',
                'updated_at' => '2019-10-29 22:51:38',
            ),
            448 => 
            array (
                'id' => 949,
                'artist_id' => 228,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:51:38',
                'updated_at' => '2019-10-29 22:51:38',
            ),
            449 => 
            array (
                'id' => 950,
                'artist_id' => 229,
                'tag_id' => 83,
                'created_at' => '2019-10-29 22:51:39',
                'updated_at' => '2019-10-29 22:51:39',
            ),
            450 => 
            array (
                'id' => 951,
                'artist_id' => 229,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:39',
                'updated_at' => '2019-10-29 22:51:39',
            ),
            451 => 
            array (
                'id' => 952,
                'artist_id' => 229,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:39',
                'updated_at' => '2019-10-29 22:51:39',
            ),
            452 => 
            array (
                'id' => 953,
                'artist_id' => 229,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:51:39',
                'updated_at' => '2019-10-29 22:51:39',
            ),
            453 => 
            array (
                'id' => 954,
                'artist_id' => 230,
                'tag_id' => 23,
                'created_at' => '2019-10-29 22:51:41',
                'updated_at' => '2019-10-29 22:51:41',
            ),
            454 => 
            array (
                'id' => 955,
                'artist_id' => 230,
                'tag_id' => 131,
                'created_at' => '2019-10-29 22:51:41',
                'updated_at' => '2019-10-29 22:51:41',
            ),
            455 => 
            array (
                'id' => 956,
                'artist_id' => 230,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:51:41',
                'updated_at' => '2019-10-29 22:51:41',
            ),
            456 => 
            array (
                'id' => 957,
                'artist_id' => 230,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:41',
                'updated_at' => '2019-10-29 22:51:41',
            ),
            457 => 
            array (
                'id' => 958,
                'artist_id' => 230,
                'tag_id' => 99,
                'created_at' => '2019-10-29 22:51:41',
                'updated_at' => '2019-10-29 22:51:41',
            ),
            458 => 
            array (
                'id' => 959,
                'artist_id' => 231,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:42',
                'updated_at' => '2019-10-29 22:51:42',
            ),
            459 => 
            array (
                'id' => 960,
                'artist_id' => 231,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:51:42',
                'updated_at' => '2019-10-29 22:51:42',
            ),
            460 => 
            array (
                'id' => 961,
                'artist_id' => 231,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:51:42',
                'updated_at' => '2019-10-29 22:51:42',
            ),
            461 => 
            array (
                'id' => 962,
                'artist_id' => 231,
                'tag_id' => 53,
                'created_at' => '2019-10-29 22:51:42',
                'updated_at' => '2019-10-29 22:51:42',
            ),
            462 => 
            array (
                'id' => 963,
                'artist_id' => 231,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:51:42',
                'updated_at' => '2019-10-29 22:51:42',
            ),
            463 => 
            array (
                'id' => 964,
                'artist_id' => 232,
                'tag_id' => 397,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-29 22:51:43',
            ),
            464 => 
            array (
                'id' => 965,
                'artist_id' => 232,
                'tag_id' => 398,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-29 22:51:43',
            ),
            465 => 
            array (
                'id' => 966,
                'artist_id' => 232,
                'tag_id' => 399,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-29 22:51:43',
            ),
            466 => 
            array (
                'id' => 967,
                'artist_id' => 232,
                'tag_id' => 165,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-29 22:51:43',
            ),
            467 => 
            array (
                'id' => 968,
                'artist_id' => 232,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:51:43',
                'updated_at' => '2019-10-29 22:51:43',
            ),
            468 => 
            array (
                'id' => 969,
                'artist_id' => 235,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:51:48',
                'updated_at' => '2019-10-29 22:51:48',
            ),
            469 => 
            array (
                'id' => 970,
                'artist_id' => 235,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:48',
                'updated_at' => '2019-10-29 22:51:48',
            ),
            470 => 
            array (
                'id' => 971,
                'artist_id' => 235,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:51:48',
                'updated_at' => '2019-10-29 22:51:48',
            ),
            471 => 
            array (
                'id' => 972,
                'artist_id' => 235,
                'tag_id' => 78,
                'created_at' => '2019-10-29 22:51:48',
                'updated_at' => '2019-10-29 22:51:48',
            ),
            472 => 
            array (
                'id' => 973,
                'artist_id' => 235,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:51:48',
                'updated_at' => '2019-10-29 22:51:48',
            ),
            473 => 
            array (
                'id' => 974,
                'artist_id' => 236,
                'tag_id' => 56,
                'created_at' => '2019-10-29 22:51:49',
                'updated_at' => '2019-10-29 22:51:49',
            ),
            474 => 
            array (
                'id' => 975,
                'artist_id' => 236,
                'tag_id' => 377,
                'created_at' => '2019-10-29 22:51:49',
                'updated_at' => '2019-10-29 22:51:49',
            ),
            475 => 
            array (
                'id' => 976,
                'artist_id' => 236,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:51:49',
                'updated_at' => '2019-10-29 22:51:49',
            ),
            476 => 
            array (
                'id' => 977,
                'artist_id' => 236,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:49',
                'updated_at' => '2019-10-29 22:51:49',
            ),
            477 => 
            array (
                'id' => 978,
                'artist_id' => 236,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:51:49',
                'updated_at' => '2019-10-29 22:51:49',
            ),
            478 => 
            array (
                'id' => 979,
                'artist_id' => 237,
                'tag_id' => 70,
                'created_at' => '2019-10-29 22:51:51',
                'updated_at' => '2019-10-29 22:51:51',
            ),
            479 => 
            array (
                'id' => 980,
                'artist_id' => 237,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:51',
                'updated_at' => '2019-10-29 22:51:51',
            ),
            480 => 
            array (
                'id' => 981,
                'artist_id' => 237,
                'tag_id' => 203,
                'created_at' => '2019-10-29 22:51:51',
                'updated_at' => '2019-10-29 22:51:51',
            ),
            481 => 
            array (
                'id' => 982,
                'artist_id' => 237,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:51',
                'updated_at' => '2019-10-29 22:51:51',
            ),
            482 => 
            array (
                'id' => 983,
                'artist_id' => 237,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:51:51',
                'updated_at' => '2019-10-29 22:51:51',
            ),
            483 => 
            array (
                'id' => 984,
                'artist_id' => 238,
                'tag_id' => 52,
                'created_at' => '2019-10-29 22:51:52',
                'updated_at' => '2019-10-29 22:51:52',
            ),
            484 => 
            array (
                'id' => 985,
                'artist_id' => 238,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:51:52',
                'updated_at' => '2019-10-29 22:51:52',
            ),
            485 => 
            array (
                'id' => 986,
                'artist_id' => 238,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:51:52',
                'updated_at' => '2019-10-29 22:51:52',
            ),
            486 => 
            array (
                'id' => 987,
                'artist_id' => 238,
                'tag_id' => 185,
                'created_at' => '2019-10-29 22:51:52',
                'updated_at' => '2019-10-29 22:51:52',
            ),
            487 => 
            array (
                'id' => 988,
                'artist_id' => 238,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:51:52',
                'updated_at' => '2019-10-29 22:51:52',
            ),
            488 => 
            array (
                'id' => 989,
                'artist_id' => 239,
                'tag_id' => 400,
                'created_at' => '2019-10-29 22:51:54',
                'updated_at' => '2019-10-29 22:51:54',
            ),
            489 => 
            array (
                'id' => 990,
                'artist_id' => 239,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:51:54',
                'updated_at' => '2019-10-29 22:51:54',
            ),
            490 => 
            array (
                'id' => 991,
                'artist_id' => 239,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:54',
                'updated_at' => '2019-10-29 22:51:54',
            ),
            491 => 
            array (
                'id' => 992,
                'artist_id' => 239,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:51:54',
                'updated_at' => '2019-10-29 22:51:54',
            ),
            492 => 
            array (
                'id' => 993,
                'artist_id' => 240,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:51:56',
                'updated_at' => '2019-10-29 22:51:56',
            ),
            493 => 
            array (
                'id' => 994,
                'artist_id' => 240,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:51:56',
                'updated_at' => '2019-10-29 22:51:56',
            ),
            494 => 
            array (
                'id' => 995,
                'artist_id' => 240,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:56',
                'updated_at' => '2019-10-29 22:51:56',
            ),
            495 => 
            array (
                'id' => 996,
                'artist_id' => 240,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:51:56',
                'updated_at' => '2019-10-29 22:51:56',
            ),
            496 => 
            array (
                'id' => 997,
                'artist_id' => 240,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:56',
                'updated_at' => '2019-10-29 22:51:56',
            ),
            497 => 
            array (
                'id' => 998,
                'artist_id' => 241,
                'tag_id' => 401,
                'created_at' => '2019-10-29 22:51:57',
                'updated_at' => '2019-10-29 22:51:57',
            ),
            498 => 
            array (
                'id' => 999,
                'artist_id' => 241,
                'tag_id' => 101,
                'created_at' => '2019-10-29 22:51:57',
                'updated_at' => '2019-10-29 22:51:57',
            ),
            499 => 
            array (
                'id' => 1000,
                'artist_id' => 241,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:51:57',
                'updated_at' => '2019-10-29 22:51:57',
            ),
        ));
        \DB::table('artist_tag')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'artist_id' => 241,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:51:57',
                'updated_at' => '2019-10-29 22:51:57',
            ),
            1 => 
            array (
                'id' => 1002,
                'artist_id' => 241,
                'tag_id' => 378,
                'created_at' => '2019-10-29 22:51:57',
                'updated_at' => '2019-10-29 22:51:57',
            ),
            2 => 
            array (
                'id' => 1003,
                'artist_id' => 242,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:51:58',
                'updated_at' => '2019-10-29 22:51:58',
            ),
            3 => 
            array (
                'id' => 1004,
                'artist_id' => 242,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:51:59',
                'updated_at' => '2019-10-29 22:51:59',
            ),
            4 => 
            array (
                'id' => 1005,
                'artist_id' => 242,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:51:59',
                'updated_at' => '2019-10-29 22:51:59',
            ),
            5 => 
            array (
                'id' => 1006,
                'artist_id' => 242,
                'tag_id' => 82,
                'created_at' => '2019-10-29 22:51:59',
                'updated_at' => '2019-10-29 22:51:59',
            ),
            6 => 
            array (
                'id' => 1007,
                'artist_id' => 242,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:51:59',
                'updated_at' => '2019-10-29 22:51:59',
            ),
            7 => 
            array (
                'id' => 1008,
                'artist_id' => 243,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:52:00',
                'updated_at' => '2019-10-29 22:52:00',
            ),
            8 => 
            array (
                'id' => 1009,
                'artist_id' => 243,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:52:00',
                'updated_at' => '2019-10-29 22:52:00',
            ),
            9 => 
            array (
                'id' => 1010,
                'artist_id' => 243,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:52:00',
                'updated_at' => '2019-10-29 22:52:00',
            ),
            10 => 
            array (
                'id' => 1011,
                'artist_id' => 243,
                'tag_id' => 44,
                'created_at' => '2019-10-29 22:52:00',
                'updated_at' => '2019-10-29 22:52:00',
            ),
            11 => 
            array (
                'id' => 1012,
                'artist_id' => 243,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:52:00',
                'updated_at' => '2019-10-29 22:52:00',
            ),
            12 => 
            array (
                'id' => 1013,
                'artist_id' => 244,
                'tag_id' => 80,
                'created_at' => '2019-10-29 22:52:01',
                'updated_at' => '2019-10-29 22:52:01',
            ),
            13 => 
            array (
                'id' => 1014,
                'artist_id' => 244,
                'tag_id' => 3,
                'created_at' => '2019-10-29 22:52:01',
                'updated_at' => '2019-10-29 22:52:01',
            ),
            14 => 
            array (
                'id' => 1015,
                'artist_id' => 244,
                'tag_id' => 49,
                'created_at' => '2019-10-29 22:52:01',
                'updated_at' => '2019-10-29 22:52:01',
            ),
            15 => 
            array (
                'id' => 1016,
                'artist_id' => 244,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:52:01',
                'updated_at' => '2019-10-29 22:52:01',
            ),
            16 => 
            array (
                'id' => 1017,
                'artist_id' => 244,
                'tag_id' => 50,
                'created_at' => '2019-10-29 22:52:01',
                'updated_at' => '2019-10-29 22:52:01',
            ),
            17 => 
            array (
                'id' => 1018,
                'artist_id' => 245,
                'tag_id' => 402,
                'created_at' => '2019-10-29 22:52:03',
                'updated_at' => '2019-10-29 22:52:03',
            ),
            18 => 
            array (
                'id' => 1019,
                'artist_id' => 245,
                'tag_id' => 103,
                'created_at' => '2019-10-29 22:52:03',
                'updated_at' => '2019-10-29 22:52:03',
            ),
            19 => 
            array (
                'id' => 1020,
                'artist_id' => 245,
                'tag_id' => 127,
                'created_at' => '2019-10-29 22:52:03',
                'updated_at' => '2019-10-29 22:52:03',
            ),
            20 => 
            array (
                'id' => 1021,
                'artist_id' => 245,
                'tag_id' => 105,
                'created_at' => '2019-10-29 22:52:03',
                'updated_at' => '2019-10-29 22:52:03',
            ),
            21 => 
            array (
                'id' => 1022,
                'artist_id' => 245,
                'tag_id' => 185,
                'created_at' => '2019-10-29 22:52:03',
                'updated_at' => '2019-10-29 22:52:03',
            ),
            22 => 
            array (
                'id' => 1023,
                'artist_id' => 247,
                'tag_id' => 403,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-29 22:52:06',
            ),
            23 => 
            array (
                'id' => 1024,
                'artist_id' => 247,
                'tag_id' => 404,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-29 22:52:06',
            ),
            24 => 
            array (
                'id' => 1025,
                'artist_id' => 247,
                'tag_id' => 245,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-29 22:52:06',
            ),
            25 => 
            array (
                'id' => 1026,
                'artist_id' => 247,
                'tag_id' => 382,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-29 22:52:06',
            ),
            26 => 
            array (
                'id' => 1027,
                'artist_id' => 247,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:52:06',
                'updated_at' => '2019-10-29 22:52:06',
            ),
            27 => 
            array (
                'id' => 1028,
                'artist_id' => 248,
                'tag_id' => 405,
                'created_at' => '2019-10-29 22:52:07',
                'updated_at' => '2019-10-29 22:52:07',
            ),
            28 => 
            array (
                'id' => 1029,
                'artist_id' => 248,
                'tag_id' => 244,
                'created_at' => '2019-10-29 22:52:07',
                'updated_at' => '2019-10-29 22:52:07',
            ),
            29 => 
            array (
                'id' => 1030,
                'artist_id' => 248,
                'tag_id' => 245,
                'created_at' => '2019-10-29 22:52:07',
                'updated_at' => '2019-10-29 22:52:07',
            ),
            30 => 
            array (
                'id' => 1031,
                'artist_id' => 248,
                'tag_id' => 260,
                'created_at' => '2019-10-29 22:52:07',
                'updated_at' => '2019-10-29 22:52:07',
            ),
            31 => 
            array (
                'id' => 1032,
                'artist_id' => 248,
                'tag_id' => 246,
                'created_at' => '2019-10-29 22:52:07',
                'updated_at' => '2019-10-29 22:52:07',
            ),
            32 => 
            array (
                'id' => 1033,
                'artist_id' => 249,
                'tag_id' => 332,
                'created_at' => '2019-10-29 22:52:09',
                'updated_at' => '2019-10-29 22:52:09',
            ),
            33 => 
            array (
                'id' => 1034,
                'artist_id' => 250,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:13',
                'updated_at' => '2019-10-31 21:08:13',
            ),
            34 => 
            array (
                'id' => 1035,
                'artist_id' => 250,
                'tag_id' => 222,
                'created_at' => '2019-10-31 21:08:13',
                'updated_at' => '2019-10-31 21:08:13',
            ),
            35 => 
            array (
                'id' => 1036,
                'artist_id' => 250,
                'tag_id' => 17,
                'created_at' => '2019-10-31 21:08:13',
                'updated_at' => '2019-10-31 21:08:13',
            ),
            36 => 
            array (
                'id' => 1037,
                'artist_id' => 250,
                'tag_id' => 185,
                'created_at' => '2019-10-31 21:08:13',
                'updated_at' => '2019-10-31 21:08:13',
            ),
            37 => 
            array (
                'id' => 1038,
                'artist_id' => 251,
                'tag_id' => 17,
                'created_at' => '2019-10-31 21:08:15',
                'updated_at' => '2019-10-31 21:08:15',
            ),
            38 => 
            array (
                'id' => 1039,
                'artist_id' => 252,
                'tag_id' => 22,
                'created_at' => '2019-10-31 21:08:16',
                'updated_at' => '2019-10-31 21:08:16',
            ),
            39 => 
            array (
                'id' => 1040,
                'artist_id' => 252,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:08:16',
                'updated_at' => '2019-10-31 21:08:16',
            ),
            40 => 
            array (
                'id' => 1041,
                'artist_id' => 252,
                'tag_id' => 1,
                'created_at' => '2019-10-31 21:08:16',
                'updated_at' => '2019-10-31 21:08:16',
            ),
            41 => 
            array (
                'id' => 1042,
                'artist_id' => 252,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:16',
                'updated_at' => '2019-10-31 21:08:16',
            ),
            42 => 
            array (
                'id' => 1043,
                'artist_id' => 252,
                'tag_id' => 164,
                'created_at' => '2019-10-31 21:08:16',
                'updated_at' => '2019-10-31 21:08:16',
            ),
            43 => 
            array (
                'id' => 1044,
                'artist_id' => 253,
                'tag_id' => 83,
                'created_at' => '2019-10-31 21:08:17',
                'updated_at' => '2019-10-31 21:08:17',
            ),
            44 => 
            array (
                'id' => 1045,
                'artist_id' => 253,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:08:17',
                'updated_at' => '2019-10-31 21:08:17',
            ),
            45 => 
            array (
                'id' => 1046,
                'artist_id' => 253,
                'tag_id' => 283,
                'created_at' => '2019-10-31 21:08:17',
                'updated_at' => '2019-10-31 21:08:17',
            ),
            46 => 
            array (
                'id' => 1047,
                'artist_id' => 253,
                'tag_id' => 53,
                'created_at' => '2019-10-31 21:08:17',
                'updated_at' => '2019-10-31 21:08:17',
            ),
            47 => 
            array (
                'id' => 1048,
                'artist_id' => 253,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:17',
                'updated_at' => '2019-10-31 21:08:17',
            ),
            48 => 
            array (
                'id' => 1049,
                'artist_id' => 254,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:08:19',
                'updated_at' => '2019-10-31 21:08:19',
            ),
            49 => 
            array (
                'id' => 1050,
                'artist_id' => 254,
                'tag_id' => 54,
                'created_at' => '2019-10-31 21:08:19',
                'updated_at' => '2019-10-31 21:08:19',
            ),
            50 => 
            array (
                'id' => 1051,
                'artist_id' => 254,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:19',
                'updated_at' => '2019-10-31 21:08:19',
            ),
            51 => 
            array (
                'id' => 1052,
                'artist_id' => 254,
                'tag_id' => 42,
                'created_at' => '2019-10-31 21:08:19',
                'updated_at' => '2019-10-31 21:08:19',
            ),
            52 => 
            array (
                'id' => 1053,
                'artist_id' => 254,
                'tag_id' => 18,
                'created_at' => '2019-10-31 21:08:19',
                'updated_at' => '2019-10-31 21:08:19',
            ),
            53 => 
            array (
                'id' => 1054,
                'artist_id' => 255,
                'tag_id' => 410,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 21:08:21',
            ),
            54 => 
            array (
                'id' => 1055,
                'artist_id' => 255,
                'tag_id' => 411,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 21:08:21',
            ),
            55 => 
            array (
                'id' => 1056,
                'artist_id' => 255,
                'tag_id' => 25,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 21:08:21',
            ),
            56 => 
            array (
                'id' => 1057,
                'artist_id' => 255,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 21:08:21',
            ),
            57 => 
            array (
                'id' => 1058,
                'artist_id' => 255,
                'tag_id' => 9,
                'created_at' => '2019-10-31 21:08:21',
                'updated_at' => '2019-10-31 21:08:21',
            ),
            58 => 
            array (
                'id' => 1059,
                'artist_id' => 256,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:08:22',
                'updated_at' => '2019-10-31 21:08:22',
            ),
            59 => 
            array (
                'id' => 1060,
                'artist_id' => 256,
                'tag_id' => 21,
                'created_at' => '2019-10-31 21:08:22',
                'updated_at' => '2019-10-31 21:08:22',
            ),
            60 => 
            array (
                'id' => 1061,
                'artist_id' => 256,
                'tag_id' => 15,
                'created_at' => '2019-10-31 21:08:22',
                'updated_at' => '2019-10-31 21:08:22',
            ),
            61 => 
            array (
                'id' => 1062,
                'artist_id' => 256,
                'tag_id' => 18,
                'created_at' => '2019-10-31 21:08:22',
                'updated_at' => '2019-10-31 21:08:22',
            ),
            62 => 
            array (
                'id' => 1063,
                'artist_id' => 256,
                'tag_id' => 19,
                'created_at' => '2019-10-31 21:08:22',
                'updated_at' => '2019-10-31 21:08:22',
            ),
            63 => 
            array (
                'id' => 1064,
                'artist_id' => 257,
                'tag_id' => 245,
                'created_at' => '2019-10-31 21:08:24',
                'updated_at' => '2019-10-31 21:08:24',
            ),
            64 => 
            array (
                'id' => 1065,
                'artist_id' => 257,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:08:24',
                'updated_at' => '2019-10-31 21:08:24',
            ),
            65 => 
            array (
                'id' => 1066,
                'artist_id' => 257,
                'tag_id' => 328,
                'created_at' => '2019-10-31 21:08:24',
                'updated_at' => '2019-10-31 21:08:24',
            ),
            66 => 
            array (
                'id' => 1067,
                'artist_id' => 257,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:24',
                'updated_at' => '2019-10-31 21:08:24',
            ),
            67 => 
            array (
                'id' => 1068,
                'artist_id' => 257,
                'tag_id' => 260,
                'created_at' => '2019-10-31 21:08:24',
                'updated_at' => '2019-10-31 21:08:24',
            ),
            68 => 
            array (
                'id' => 1069,
                'artist_id' => 258,
                'tag_id' => 245,
                'created_at' => '2019-10-31 21:08:25',
                'updated_at' => '2019-10-31 21:08:25',
            ),
            69 => 
            array (
                'id' => 1070,
                'artist_id' => 258,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:25',
                'updated_at' => '2019-10-31 21:08:25',
            ),
            70 => 
            array (
                'id' => 1071,
                'artist_id' => 258,
                'tag_id' => 9,
                'created_at' => '2019-10-31 21:08:25',
                'updated_at' => '2019-10-31 21:08:25',
            ),
            71 => 
            array (
                'id' => 1072,
                'artist_id' => 258,
                'tag_id' => 244,
                'created_at' => '2019-10-31 21:08:25',
                'updated_at' => '2019-10-31 21:08:25',
            ),
            72 => 
            array (
                'id' => 1073,
                'artist_id' => 258,
                'tag_id' => 25,
                'created_at' => '2019-10-31 21:08:25',
                'updated_at' => '2019-10-31 21:08:25',
            ),
            73 => 
            array (
                'id' => 1074,
                'artist_id' => 259,
                'tag_id' => 23,
                'created_at' => '2019-10-31 21:22:28',
                'updated_at' => '2019-10-31 21:22:28',
            ),
            74 => 
            array (
                'id' => 1075,
                'artist_id' => 259,
                'tag_id' => 22,
                'created_at' => '2019-10-31 21:22:28',
                'updated_at' => '2019-10-31 21:22:28',
            ),
            75 => 
            array (
                'id' => 1076,
                'artist_id' => 259,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:22:28',
                'updated_at' => '2019-10-31 21:22:28',
            ),
            76 => 
            array (
                'id' => 1077,
                'artist_id' => 259,
                'tag_id' => 97,
                'created_at' => '2019-10-31 21:22:28',
                'updated_at' => '2019-10-31 21:22:28',
            ),
            77 => 
            array (
                'id' => 1078,
                'artist_id' => 259,
                'tag_id' => 286,
                'created_at' => '2019-10-31 21:22:28',
                'updated_at' => '2019-10-31 21:22:28',
            ),
            78 => 
            array (
                'id' => 1079,
                'artist_id' => 261,
                'tag_id' => 7,
                'created_at' => '2019-10-31 21:22:31',
                'updated_at' => '2019-10-31 21:22:31',
            ),
            79 => 
            array (
                'id' => 1080,
                'artist_id' => 261,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:22:31',
                'updated_at' => '2019-10-31 21:22:31',
            ),
            80 => 
            array (
                'id' => 1081,
                'artist_id' => 261,
                'tag_id' => 20,
                'created_at' => '2019-10-31 21:22:31',
                'updated_at' => '2019-10-31 21:22:31',
            ),
            81 => 
            array (
                'id' => 1082,
                'artist_id' => 261,
                'tag_id' => 412,
                'created_at' => '2019-10-31 21:22:31',
                'updated_at' => '2019-10-31 21:22:31',
            ),
            82 => 
            array (
                'id' => 1083,
                'artist_id' => 261,
                'tag_id' => 204,
                'created_at' => '2019-10-31 21:22:31',
                'updated_at' => '2019-10-31 21:22:31',
            ),
            83 => 
            array (
                'id' => 1084,
                'artist_id' => 262,
                'tag_id' => 185,
                'created_at' => '2019-10-31 21:22:32',
                'updated_at' => '2019-10-31 21:22:32',
            ),
            84 => 
            array (
                'id' => 1085,
                'artist_id' => 263,
                'tag_id' => 420,
                'created_at' => '2019-10-31 23:41:32',
                'updated_at' => '2019-10-31 23:41:32',
            ),
            85 => 
            array (
                'id' => 1086,
                'artist_id' => 263,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:41:32',
                'updated_at' => '2019-10-31 23:41:32',
            ),
            86 => 
            array (
                'id' => 1087,
                'artist_id' => 263,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:41:32',
                'updated_at' => '2019-10-31 23:41:32',
            ),
            87 => 
            array (
                'id' => 1088,
                'artist_id' => 263,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:32',
                'updated_at' => '2019-10-31 23:41:32',
            ),
            88 => 
            array (
                'id' => 1089,
                'artist_id' => 263,
                'tag_id' => 49,
                'created_at' => '2019-10-31 23:41:32',
                'updated_at' => '2019-10-31 23:41:32',
            ),
            89 => 
            array (
                'id' => 1090,
                'artist_id' => 264,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:33',
                'updated_at' => '2019-10-31 23:41:33',
            ),
            90 => 
            array (
                'id' => 1091,
                'artist_id' => 264,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:33',
                'updated_at' => '2019-10-31 23:41:33',
            ),
            91 => 
            array (
                'id' => 1092,
                'artist_id' => 264,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:41:33',
                'updated_at' => '2019-10-31 23:41:33',
            ),
            92 => 
            array (
                'id' => 1093,
                'artist_id' => 264,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:41:33',
                'updated_at' => '2019-10-31 23:41:33',
            ),
            93 => 
            array (
                'id' => 1094,
                'artist_id' => 264,
                'tag_id' => 139,
                'created_at' => '2019-10-31 23:41:33',
                'updated_at' => '2019-10-31 23:41:33',
            ),
            94 => 
            array (
                'id' => 1095,
                'artist_id' => 265,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:35',
                'updated_at' => '2019-10-31 23:41:35',
            ),
            95 => 
            array (
                'id' => 1096,
                'artist_id' => 265,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:35',
                'updated_at' => '2019-10-31 23:41:35',
            ),
            96 => 
            array (
                'id' => 1097,
                'artist_id' => 265,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:41:35',
                'updated_at' => '2019-10-31 23:41:35',
            ),
            97 => 
            array (
                'id' => 1098,
                'artist_id' => 265,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:41:35',
                'updated_at' => '2019-10-31 23:41:35',
            ),
            98 => 
            array (
                'id' => 1099,
                'artist_id' => 265,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:35',
                'updated_at' => '2019-10-31 23:41:35',
            ),
            99 => 
            array (
                'id' => 1100,
                'artist_id' => 266,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:41:36',
                'updated_at' => '2019-10-31 23:41:36',
            ),
            100 => 
            array (
                'id' => 1101,
                'artist_id' => 266,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:41:36',
                'updated_at' => '2019-10-31 23:41:36',
            ),
            101 => 
            array (
                'id' => 1102,
                'artist_id' => 266,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:36',
                'updated_at' => '2019-10-31 23:41:36',
            ),
            102 => 
            array (
                'id' => 1103,
                'artist_id' => 266,
                'tag_id' => 148,
                'created_at' => '2019-10-31 23:41:36',
                'updated_at' => '2019-10-31 23:41:36',
            ),
            103 => 
            array (
                'id' => 1104,
                'artist_id' => 266,
                'tag_id' => 207,
                'created_at' => '2019-10-31 23:41:36',
                'updated_at' => '2019-10-31 23:41:36',
            ),
            104 => 
            array (
                'id' => 1105,
                'artist_id' => 267,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:38',
                'updated_at' => '2019-10-31 23:41:38',
            ),
            105 => 
            array (
                'id' => 1106,
                'artist_id' => 267,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:41:38',
                'updated_at' => '2019-10-31 23:41:38',
            ),
            106 => 
            array (
                'id' => 1107,
                'artist_id' => 267,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:38',
                'updated_at' => '2019-10-31 23:41:38',
            ),
            107 => 
            array (
                'id' => 1108,
                'artist_id' => 267,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:41:38',
                'updated_at' => '2019-10-31 23:41:38',
            ),
            108 => 
            array (
                'id' => 1109,
                'artist_id' => 267,
                'tag_id' => 207,
                'created_at' => '2019-10-31 23:41:38',
                'updated_at' => '2019-10-31 23:41:38',
            ),
            109 => 
            array (
                'id' => 1110,
                'artist_id' => 268,
                'tag_id' => 137,
                'created_at' => '2019-10-31 23:41:39',
                'updated_at' => '2019-10-31 23:41:39',
            ),
            110 => 
            array (
                'id' => 1111,
                'artist_id' => 268,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:41:39',
                'updated_at' => '2019-10-31 23:41:39',
            ),
            111 => 
            array (
                'id' => 1112,
                'artist_id' => 268,
                'tag_id' => 62,
                'created_at' => '2019-10-31 23:41:39',
                'updated_at' => '2019-10-31 23:41:39',
            ),
            112 => 
            array (
                'id' => 1113,
                'artist_id' => 268,
                'tag_id' => 418,
                'created_at' => '2019-10-31 23:41:39',
                'updated_at' => '2019-10-31 23:41:39',
            ),
            113 => 
            array (
                'id' => 1114,
                'artist_id' => 268,
                'tag_id' => 5,
                'created_at' => '2019-10-31 23:41:39',
                'updated_at' => '2019-10-31 23:41:39',
            ),
            114 => 
            array (
                'id' => 1115,
                'artist_id' => 269,
                'tag_id' => 137,
                'created_at' => '2019-10-31 23:41:40',
                'updated_at' => '2019-10-31 23:41:40',
            ),
            115 => 
            array (
                'id' => 1116,
                'artist_id' => 269,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:41:40',
                'updated_at' => '2019-10-31 23:41:40',
            ),
            116 => 
            array (
                'id' => 1117,
                'artist_id' => 269,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:41:40',
                'updated_at' => '2019-10-31 23:41:40',
            ),
            117 => 
            array (
                'id' => 1118,
                'artist_id' => 269,
                'tag_id' => 62,
                'created_at' => '2019-10-31 23:41:40',
                'updated_at' => '2019-10-31 23:41:40',
            ),
            118 => 
            array (
                'id' => 1119,
                'artist_id' => 269,
                'tag_id' => 417,
                'created_at' => '2019-10-31 23:41:40',
                'updated_at' => '2019-10-31 23:41:40',
            ),
            119 => 
            array (
                'id' => 1120,
                'artist_id' => 270,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:42',
                'updated_at' => '2019-10-31 23:41:42',
            ),
            120 => 
            array (
                'id' => 1121,
                'artist_id' => 270,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:42',
                'updated_at' => '2019-10-31 23:41:42',
            ),
            121 => 
            array (
                'id' => 1122,
                'artist_id' => 270,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:42',
                'updated_at' => '2019-10-31 23:41:42',
            ),
            122 => 
            array (
                'id' => 1123,
                'artist_id' => 270,
                'tag_id' => 8,
                'created_at' => '2019-10-31 23:41:42',
                'updated_at' => '2019-10-31 23:41:42',
            ),
            123 => 
            array (
                'id' => 1124,
                'artist_id' => 270,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:41:42',
                'updated_at' => '2019-10-31 23:41:42',
            ),
            124 => 
            array (
                'id' => 1125,
                'artist_id' => 271,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:41:43',
                'updated_at' => '2019-10-31 23:41:43',
            ),
            125 => 
            array (
                'id' => 1126,
                'artist_id' => 271,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:43',
                'updated_at' => '2019-10-31 23:41:43',
            ),
            126 => 
            array (
                'id' => 1127,
                'artist_id' => 271,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:43',
                'updated_at' => '2019-10-31 23:41:43',
            ),
            127 => 
            array (
                'id' => 1128,
                'artist_id' => 271,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:43',
                'updated_at' => '2019-10-31 23:41:43',
            ),
            128 => 
            array (
                'id' => 1129,
                'artist_id' => 271,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:43',
                'updated_at' => '2019-10-31 23:41:43',
            ),
            129 => 
            array (
                'id' => 1130,
                'artist_id' => 272,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:44',
                'updated_at' => '2019-10-31 23:41:44',
            ),
            130 => 
            array (
                'id' => 1131,
                'artist_id' => 272,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:44',
                'updated_at' => '2019-10-31 23:41:44',
            ),
            131 => 
            array (
                'id' => 1132,
                'artist_id' => 272,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:44',
                'updated_at' => '2019-10-31 23:41:44',
            ),
            132 => 
            array (
                'id' => 1133,
                'artist_id' => 272,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:44',
                'updated_at' => '2019-10-31 23:41:44',
            ),
            133 => 
            array (
                'id' => 1134,
                'artist_id' => 272,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:41:44',
                'updated_at' => '2019-10-31 23:41:44',
            ),
            134 => 
            array (
                'id' => 1135,
                'artist_id' => 273,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:31',
                'updated_at' => '2019-11-01 00:15:31',
            ),
            135 => 
            array (
                'id' => 1136,
                'artist_id' => 273,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:31',
                'updated_at' => '2019-11-01 00:15:31',
            ),
            136 => 
            array (
                'id' => 1137,
                'artist_id' => 273,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:31',
                'updated_at' => '2019-11-01 00:15:31',
            ),
            137 => 
            array (
                'id' => 1138,
                'artist_id' => 273,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:31',
                'updated_at' => '2019-11-01 00:15:31',
            ),
            138 => 
            array (
                'id' => 1139,
                'artist_id' => 273,
                'tag_id' => 18,
                'created_at' => '2019-11-01 00:15:31',
                'updated_at' => '2019-11-01 00:15:31',
            ),
            139 => 
            array (
                'id' => 1140,
                'artist_id' => 274,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            140 => 
            array (
                'id' => 1141,
                'artist_id' => 274,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            141 => 
            array (
                'id' => 1142,
                'artist_id' => 274,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            142 => 
            array (
                'id' => 1143,
                'artist_id' => 274,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            143 => 
            array (
                'id' => 1144,
                'artist_id' => 274,
                'tag_id' => 207,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            144 => 
            array (
                'id' => 1145,
                'artist_id' => 275,
                'tag_id' => 433,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            145 => 
            array (
                'id' => 1146,
                'artist_id' => 275,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            146 => 
            array (
                'id' => 1147,
                'artist_id' => 275,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            147 => 
            array (
                'id' => 1148,
                'artist_id' => 275,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            148 => 
            array (
                'id' => 1149,
                'artist_id' => 275,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:03:21',
                'updated_at' => '2020-01-20 21:03:21',
            ),
            149 => 
            array (
                'id' => 1150,
                'artist_id' => 276,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:23',
                'updated_at' => '2020-01-20 21:03:23',
            ),
            150 => 
            array (
                'id' => 1151,
                'artist_id' => 276,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:03:23',
                'updated_at' => '2020-01-20 21:03:23',
            ),
            151 => 
            array (
                'id' => 1152,
                'artist_id' => 276,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:23',
                'updated_at' => '2020-01-20 21:03:23',
            ),
            152 => 
            array (
                'id' => 1153,
                'artist_id' => 276,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:23',
                'updated_at' => '2020-01-20 21:03:23',
            ),
            153 => 
            array (
                'id' => 1154,
                'artist_id' => 276,
                'tag_id' => 168,
                'created_at' => '2020-01-20 21:03:23',
                'updated_at' => '2020-01-20 21:03:23',
            ),
            154 => 
            array (
                'id' => 1155,
                'artist_id' => 277,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:24',
                'updated_at' => '2020-01-20 21:03:24',
            ),
            155 => 
            array (
                'id' => 1156,
                'artist_id' => 277,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:24',
                'updated_at' => '2020-01-20 21:03:24',
            ),
            156 => 
            array (
                'id' => 1157,
                'artist_id' => 277,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:03:24',
                'updated_at' => '2020-01-20 21:03:24',
            ),
            157 => 
            array (
                'id' => 1158,
                'artist_id' => 277,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:24',
                'updated_at' => '2020-01-20 21:03:24',
            ),
            158 => 
            array (
                'id' => 1159,
                'artist_id' => 277,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:24',
                'updated_at' => '2020-01-20 21:03:24',
            ),
            159 => 
            array (
                'id' => 1160,
                'artist_id' => 278,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:26',
                'updated_at' => '2020-01-20 21:03:26',
            ),
            160 => 
            array (
                'id' => 1161,
                'artist_id' => 278,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:26',
                'updated_at' => '2020-01-20 21:03:26',
            ),
            161 => 
            array (
                'id' => 1162,
                'artist_id' => 278,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:26',
                'updated_at' => '2020-01-20 21:03:26',
            ),
            162 => 
            array (
                'id' => 1163,
                'artist_id' => 278,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:26',
                'updated_at' => '2020-01-20 21:03:26',
            ),
            163 => 
            array (
                'id' => 1164,
                'artist_id' => 278,
                'tag_id' => 19,
                'created_at' => '2020-01-20 21:03:26',
                'updated_at' => '2020-01-20 21:03:26',
            ),
            164 => 
            array (
                'id' => 1165,
                'artist_id' => 280,
                'tag_id' => 434,
                'created_at' => '2020-01-20 21:03:28',
                'updated_at' => '2020-01-20 21:03:28',
            ),
            165 => 
            array (
                'id' => 1166,
                'artist_id' => 280,
                'tag_id' => 377,
                'created_at' => '2020-01-20 21:03:28',
                'updated_at' => '2020-01-20 21:03:28',
            ),
            166 => 
            array (
                'id' => 1167,
                'artist_id' => 280,
                'tag_id' => 305,
                'created_at' => '2020-01-20 21:03:28',
                'updated_at' => '2020-01-20 21:03:28',
            ),
            167 => 
            array (
                'id' => 1168,
                'artist_id' => 281,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:30',
                'updated_at' => '2020-01-20 21:03:30',
            ),
            168 => 
            array (
                'id' => 1169,
                'artist_id' => 282,
                'tag_id' => 135,
                'created_at' => '2020-01-20 21:03:31',
                'updated_at' => '2020-01-20 21:03:31',
            ),
            169 => 
            array (
                'id' => 1170,
                'artist_id' => 282,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:31',
                'updated_at' => '2020-01-20 21:03:31',
            ),
            170 => 
            array (
                'id' => 1171,
                'artist_id' => 282,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:31',
                'updated_at' => '2020-01-20 21:03:31',
            ),
            171 => 
            array (
                'id' => 1172,
                'artist_id' => 282,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:31',
                'updated_at' => '2020-01-20 21:03:31',
            ),
            172 => 
            array (
                'id' => 1173,
                'artist_id' => 282,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:03:31',
                'updated_at' => '2020-01-20 21:03:31',
            ),
            173 => 
            array (
                'id' => 1174,
                'artist_id' => 283,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:32',
                'updated_at' => '2020-01-20 21:03:32',
            ),
            174 => 
            array (
                'id' => 1175,
                'artist_id' => 283,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:32',
                'updated_at' => '2020-01-20 21:03:32',
            ),
            175 => 
            array (
                'id' => 1176,
                'artist_id' => 283,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:32',
                'updated_at' => '2020-01-20 21:03:32',
            ),
            176 => 
            array (
                'id' => 1177,
                'artist_id' => 283,
                'tag_id' => 97,
                'created_at' => '2020-01-20 21:03:32',
                'updated_at' => '2020-01-20 21:03:32',
            ),
            177 => 
            array (
                'id' => 1178,
                'artist_id' => 283,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:03:32',
                'updated_at' => '2020-01-20 21:03:32',
            ),
            178 => 
            array (
                'id' => 1179,
                'artist_id' => 284,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:34',
                'updated_at' => '2020-01-20 21:03:34',
            ),
            179 => 
            array (
                'id' => 1180,
                'artist_id' => 284,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:34',
                'updated_at' => '2020-01-20 21:03:34',
            ),
            180 => 
            array (
                'id' => 1181,
                'artist_id' => 284,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:34',
                'updated_at' => '2020-01-20 21:03:34',
            ),
            181 => 
            array (
                'id' => 1182,
                'artist_id' => 284,
                'tag_id' => 207,
                'created_at' => '2020-01-20 21:03:34',
                'updated_at' => '2020-01-20 21:03:34',
            ),
            182 => 
            array (
                'id' => 1183,
                'artist_id' => 284,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:34',
                'updated_at' => '2020-01-20 21:03:34',
            ),
            183 => 
            array (
                'id' => 1184,
                'artist_id' => 285,
                'tag_id' => 435,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            184 => 
            array (
                'id' => 1185,
                'artist_id' => 285,
                'tag_id' => 436,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            185 => 
            array (
                'id' => 1186,
                'artist_id' => 285,
                'tag_id' => 67,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            186 => 
            array (
                'id' => 1187,
                'artist_id' => 285,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            187 => 
            array (
                'id' => 1188,
                'artist_id' => 285,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:03:35',
                'updated_at' => '2020-01-20 21:03:35',
            ),
            188 => 
            array (
                'id' => 1189,
                'artist_id' => 286,
                'tag_id' => 204,
                'created_at' => '2020-01-20 21:03:36',
                'updated_at' => '2020-01-20 21:03:36',
            ),
            189 => 
            array (
                'id' => 1190,
                'artist_id' => 287,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:38',
                'updated_at' => '2020-01-20 21:03:38',
            ),
            190 => 
            array (
                'id' => 1191,
                'artist_id' => 287,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:03:38',
                'updated_at' => '2020-01-20 21:03:38',
            ),
            191 => 
            array (
                'id' => 1192,
                'artist_id' => 287,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:03:38',
                'updated_at' => '2020-01-20 21:03:38',
            ),
            192 => 
            array (
                'id' => 1193,
                'artist_id' => 287,
                'tag_id' => 21,
                'created_at' => '2020-01-20 21:03:38',
                'updated_at' => '2020-01-20 21:03:38',
            ),
            193 => 
            array (
                'id' => 1194,
                'artist_id' => 287,
                'tag_id' => 42,
                'created_at' => '2020-01-20 21:03:38',
                'updated_at' => '2020-01-20 21:03:38',
            ),
            194 => 
            array (
                'id' => 1195,
                'artist_id' => 288,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:03:39',
                'updated_at' => '2020-01-20 21:03:39',
            ),
            195 => 
            array (
                'id' => 1196,
                'artist_id' => 288,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:03:39',
                'updated_at' => '2020-01-20 21:03:39',
            ),
            196 => 
            array (
                'id' => 1197,
                'artist_id' => 288,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:39',
                'updated_at' => '2020-01-20 21:03:39',
            ),
            197 => 
            array (
                'id' => 1198,
                'artist_id' => 288,
                'tag_id' => 55,
                'created_at' => '2020-01-20 21:03:39',
                'updated_at' => '2020-01-20 21:03:39',
            ),
            198 => 
            array (
                'id' => 1199,
                'artist_id' => 288,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:39',
                'updated_at' => '2020-01-20 21:03:39',
            ),
            199 => 
            array (
                'id' => 1200,
                'artist_id' => 289,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:03:40',
                'updated_at' => '2020-01-20 21:03:40',
            ),
            200 => 
            array (
                'id' => 1201,
                'artist_id' => 289,
                'tag_id' => 69,
                'created_at' => '2020-01-20 21:03:40',
                'updated_at' => '2020-01-20 21:03:40',
            ),
            201 => 
            array (
                'id' => 1202,
                'artist_id' => 289,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:03:40',
                'updated_at' => '2020-01-20 21:03:40',
            ),
            202 => 
            array (
                'id' => 1203,
                'artist_id' => 289,
                'tag_id' => 29,
                'created_at' => '2020-01-20 21:03:40',
                'updated_at' => '2020-01-20 21:03:40',
            ),
            203 => 
            array (
                'id' => 1204,
                'artist_id' => 289,
                'tag_id' => 75,
                'created_at' => '2020-01-20 21:03:40',
                'updated_at' => '2020-01-20 21:03:40',
            ),
            204 => 
            array (
                'id' => 1205,
                'artist_id' => 290,
                'tag_id' => 69,
                'created_at' => '2020-01-20 21:03:42',
                'updated_at' => '2020-01-20 21:03:42',
            ),
            205 => 
            array (
                'id' => 1206,
                'artist_id' => 290,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:03:42',
                'updated_at' => '2020-01-20 21:03:42',
            ),
            206 => 
            array (
                'id' => 1207,
                'artist_id' => 290,
                'tag_id' => 294,
                'created_at' => '2020-01-20 21:03:42',
                'updated_at' => '2020-01-20 21:03:42',
            ),
            207 => 
            array (
                'id' => 1208,
                'artist_id' => 290,
                'tag_id' => 97,
                'created_at' => '2020-01-20 21:03:42',
                'updated_at' => '2020-01-20 21:03:42',
            ),
            208 => 
            array (
                'id' => 1209,
                'artist_id' => 290,
                'tag_id' => 29,
                'created_at' => '2020-01-20 21:03:42',
                'updated_at' => '2020-01-20 21:03:42',
            ),
            209 => 
            array (
                'id' => 1210,
                'artist_id' => 291,
                'tag_id' => 437,
                'created_at' => '2020-01-20 21:03:43',
                'updated_at' => '2020-01-20 21:03:43',
            ),
            210 => 
            array (
                'id' => 1211,
                'artist_id' => 291,
                'tag_id' => 438,
                'created_at' => '2020-01-20 21:03:43',
                'updated_at' => '2020-01-20 21:03:43',
            ),
            211 => 
            array (
                'id' => 1212,
                'artist_id' => 292,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:03:45',
                'updated_at' => '2020-01-20 21:03:45',
            ),
            212 => 
            array (
                'id' => 1213,
                'artist_id' => 292,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:45',
                'updated_at' => '2020-01-20 21:03:45',
            ),
            213 => 
            array (
                'id' => 1214,
                'artist_id' => 292,
                'tag_id' => 80,
                'created_at' => '2020-01-20 21:03:45',
                'updated_at' => '2020-01-20 21:03:45',
            ),
            214 => 
            array (
                'id' => 1215,
                'artist_id' => 292,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:45',
                'updated_at' => '2020-01-20 21:03:45',
            ),
            215 => 
            array (
                'id' => 1216,
                'artist_id' => 292,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:45',
                'updated_at' => '2020-01-20 21:03:45',
            ),
            216 => 
            array (
                'id' => 1217,
                'artist_id' => 293,
                'tag_id' => 185,
                'created_at' => '2020-01-20 21:03:46',
                'updated_at' => '2020-01-20 21:03:46',
            ),
            217 => 
            array (
                'id' => 1218,
                'artist_id' => 293,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:46',
                'updated_at' => '2020-01-20 21:03:46',
            ),
            218 => 
            array (
                'id' => 1219,
                'artist_id' => 293,
                'tag_id' => 43,
                'created_at' => '2020-01-20 21:03:46',
                'updated_at' => '2020-01-20 21:03:46',
            ),
            219 => 
            array (
                'id' => 1220,
                'artist_id' => 293,
                'tag_id' => 135,
                'created_at' => '2020-01-20 21:03:46',
                'updated_at' => '2020-01-20 21:03:46',
            ),
            220 => 
            array (
                'id' => 1221,
                'artist_id' => 293,
                'tag_id' => 119,
                'created_at' => '2020-01-20 21:03:46',
                'updated_at' => '2020-01-20 21:03:46',
            ),
            221 => 
            array (
                'id' => 1222,
                'artist_id' => 294,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:48',
                'updated_at' => '2020-01-20 21:03:48',
            ),
            222 => 
            array (
                'id' => 1223,
                'artist_id' => 294,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:03:48',
                'updated_at' => '2020-01-20 21:03:48',
            ),
            223 => 
            array (
                'id' => 1224,
                'artist_id' => 294,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:48',
                'updated_at' => '2020-01-20 21:03:48',
            ),
            224 => 
            array (
                'id' => 1225,
                'artist_id' => 294,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:03:48',
                'updated_at' => '2020-01-20 21:03:48',
            ),
            225 => 
            array (
                'id' => 1226,
                'artist_id' => 294,
                'tag_id' => 55,
                'created_at' => '2020-01-20 21:03:48',
                'updated_at' => '2020-01-20 21:03:48',
            ),
            226 => 
            array (
                'id' => 1227,
                'artist_id' => 295,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:03:49',
                'updated_at' => '2020-01-20 21:03:49',
            ),
            227 => 
            array (
                'id' => 1228,
                'artist_id' => 295,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:49',
                'updated_at' => '2020-01-20 21:03:49',
            ),
            228 => 
            array (
                'id' => 1229,
                'artist_id' => 295,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:49',
                'updated_at' => '2020-01-20 21:03:49',
            ),
            229 => 
            array (
                'id' => 1230,
                'artist_id' => 295,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:03:49',
                'updated_at' => '2020-01-20 21:03:49',
            ),
            230 => 
            array (
                'id' => 1231,
                'artist_id' => 295,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:49',
                'updated_at' => '2020-01-20 21:03:49',
            ),
            231 => 
            array (
                'id' => 1232,
                'artist_id' => 296,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:50',
                'updated_at' => '2020-01-20 21:03:50',
            ),
            232 => 
            array (
                'id' => 1233,
                'artist_id' => 296,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:03:51',
                'updated_at' => '2020-01-20 21:03:51',
            ),
            233 => 
            array (
                'id' => 1234,
                'artist_id' => 296,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:03:51',
                'updated_at' => '2020-01-20 21:03:51',
            ),
            234 => 
            array (
                'id' => 1235,
                'artist_id' => 296,
                'tag_id' => 185,
                'created_at' => '2020-01-20 21:03:51',
                'updated_at' => '2020-01-20 21:03:51',
            ),
            235 => 
            array (
                'id' => 1236,
                'artist_id' => 296,
                'tag_id' => 80,
                'created_at' => '2020-01-20 21:03:51',
                'updated_at' => '2020-01-20 21:03:51',
            ),
            236 => 
            array (
                'id' => 1237,
                'artist_id' => 297,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:03:52',
                'updated_at' => '2020-01-20 21:03:52',
            ),
            237 => 
            array (
                'id' => 1238,
                'artist_id' => 297,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:52',
                'updated_at' => '2020-01-20 21:03:52',
            ),
            238 => 
            array (
                'id' => 1239,
                'artist_id' => 297,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:03:52',
                'updated_at' => '2020-01-20 21:03:52',
            ),
            239 => 
            array (
                'id' => 1240,
                'artist_id' => 297,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:03:52',
                'updated_at' => '2020-01-20 21:03:52',
            ),
            240 => 
            array (
                'id' => 1241,
                'artist_id' => 297,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:52',
                'updated_at' => '2020-01-20 21:03:52',
            ),
            241 => 
            array (
                'id' => 1242,
                'artist_id' => 298,
                'tag_id' => 439,
                'created_at' => '2020-01-20 21:03:53',
                'updated_at' => '2020-01-20 21:03:53',
            ),
            242 => 
            array (
                'id' => 1243,
                'artist_id' => 298,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:03:53',
                'updated_at' => '2020-01-20 21:03:53',
            ),
            243 => 
            array (
                'id' => 1244,
                'artist_id' => 298,
                'tag_id' => 185,
                'created_at' => '2020-01-20 21:03:53',
                'updated_at' => '2020-01-20 21:03:53',
            ),
            244 => 
            array (
                'id' => 1245,
                'artist_id' => 298,
                'tag_id' => 241,
                'created_at' => '2020-01-20 21:03:53',
                'updated_at' => '2020-01-20 21:03:53',
            ),
            245 => 
            array (
                'id' => 1246,
                'artist_id' => 299,
                'tag_id' => 103,
                'created_at' => '2020-01-20 21:03:54',
                'updated_at' => '2020-01-20 21:03:54',
            ),
            246 => 
            array (
                'id' => 1247,
                'artist_id' => 299,
                'tag_id' => 1,
                'created_at' => '2020-01-20 21:03:54',
                'updated_at' => '2020-01-20 21:03:54',
            ),
            247 => 
            array (
                'id' => 1248,
                'artist_id' => 299,
                'tag_id' => 105,
                'created_at' => '2020-01-20 21:03:54',
                'updated_at' => '2020-01-20 21:03:54',
            ),
            248 => 
            array (
                'id' => 1249,
                'artist_id' => 299,
                'tag_id' => 104,
                'created_at' => '2020-01-20 21:03:54',
                'updated_at' => '2020-01-20 21:03:54',
            ),
            249 => 
            array (
                'id' => 1250,
                'artist_id' => 299,
                'tag_id' => 3,
                'created_at' => '2020-01-20 21:03:54',
                'updated_at' => '2020-01-20 21:03:54',
            ),
            250 => 
            array (
                'id' => 1251,
                'artist_id' => 300,
                'tag_id' => 52,
                'created_at' => '2020-01-20 21:03:56',
                'updated_at' => '2020-01-20 21:03:56',
            ),
            251 => 
            array (
                'id' => 1252,
                'artist_id' => 300,
                'tag_id' => 42,
                'created_at' => '2020-01-20 21:03:56',
                'updated_at' => '2020-01-20 21:03:56',
            ),
            252 => 
            array (
                'id' => 1253,
                'artist_id' => 300,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:56',
                'updated_at' => '2020-01-20 21:03:56',
            ),
            253 => 
            array (
                'id' => 1254,
                'artist_id' => 300,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:03:56',
                'updated_at' => '2020-01-20 21:03:56',
            ),
            254 => 
            array (
                'id' => 1255,
                'artist_id' => 300,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:03:56',
                'updated_at' => '2020-01-20 21:03:56',
            ),
            255 => 
            array (
                'id' => 1256,
                'artist_id' => 301,
                'tag_id' => 139,
                'created_at' => '2020-01-20 21:03:57',
                'updated_at' => '2020-01-20 21:03:57',
            ),
            256 => 
            array (
                'id' => 1257,
                'artist_id' => 301,
                'tag_id' => 235,
                'created_at' => '2020-01-20 21:03:57',
                'updated_at' => '2020-01-20 21:03:57',
            ),
            257 => 
            array (
                'id' => 1258,
                'artist_id' => 301,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:57',
                'updated_at' => '2020-01-20 21:03:57',
            ),
            258 => 
            array (
                'id' => 1259,
                'artist_id' => 301,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:03:57',
                'updated_at' => '2020-01-20 21:03:57',
            ),
            259 => 
            array (
                'id' => 1260,
                'artist_id' => 301,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:57',
                'updated_at' => '2020-01-20 21:03:57',
            ),
            260 => 
            array (
                'id' => 1261,
                'artist_id' => 302,
                'tag_id' => 21,
                'created_at' => '2020-01-20 21:03:58',
                'updated_at' => '2020-01-20 21:03:58',
            ),
            261 => 
            array (
                'id' => 1262,
                'artist_id' => 302,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:58',
                'updated_at' => '2020-01-20 21:03:58',
            ),
            262 => 
            array (
                'id' => 1263,
                'artist_id' => 302,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:03:58',
                'updated_at' => '2020-01-20 21:03:58',
            ),
            263 => 
            array (
                'id' => 1264,
                'artist_id' => 302,
                'tag_id' => 140,
                'created_at' => '2020-01-20 21:03:58',
                'updated_at' => '2020-01-20 21:03:58',
            ),
            264 => 
            array (
                'id' => 1265,
                'artist_id' => 302,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:03:58',
                'updated_at' => '2020-01-20 21:03:58',
            ),
            265 => 
            array (
                'id' => 1266,
                'artist_id' => 303,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:04:00',
                'updated_at' => '2020-01-20 21:04:00',
            ),
            266 => 
            array (
                'id' => 1267,
                'artist_id' => 303,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:04:00',
                'updated_at' => '2020-01-20 21:04:00',
            ),
            267 => 
            array (
                'id' => 1268,
                'artist_id' => 303,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:04:00',
                'updated_at' => '2020-01-20 21:04:00',
            ),
            268 => 
            array (
                'id' => 1269,
                'artist_id' => 303,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:04:00',
                'updated_at' => '2020-01-20 21:04:00',
            ),
            269 => 
            array (
                'id' => 1270,
                'artist_id' => 303,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:04:00',
                'updated_at' => '2020-01-20 21:04:00',
            ),
            270 => 
            array (
                'id' => 1271,
                'artist_id' => 304,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:04:01',
                'updated_at' => '2020-01-20 21:04:01',
            ),
            271 => 
            array (
                'id' => 1272,
                'artist_id' => 304,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:04:01',
                'updated_at' => '2020-01-20 21:04:01',
            ),
            272 => 
            array (
                'id' => 1273,
                'artist_id' => 304,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:04:01',
                'updated_at' => '2020-01-20 21:04:01',
            ),
            273 => 
            array (
                'id' => 1274,
                'artist_id' => 304,
                'tag_id' => 101,
                'created_at' => '2020-01-20 21:04:01',
                'updated_at' => '2020-01-20 21:04:01',
            ),
            274 => 
            array (
                'id' => 1275,
                'artist_id' => 304,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:04:01',
                'updated_at' => '2020-01-20 21:04:01',
            ),
            275 => 
            array (
                'id' => 1276,
                'artist_id' => 306,
                'tag_id' => 56,
                'created_at' => '2020-01-20 21:04:04',
                'updated_at' => '2020-01-20 21:04:04',
            ),
            276 => 
            array (
                'id' => 1277,
                'artist_id' => 306,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:04:04',
                'updated_at' => '2020-01-20 21:04:04',
            ),
            277 => 
            array (
                'id' => 1278,
                'artist_id' => 306,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:04:04',
                'updated_at' => '2020-01-20 21:04:04',
            ),
            278 => 
            array (
                'id' => 1279,
                'artist_id' => 306,
                'tag_id' => 153,
                'created_at' => '2020-01-20 21:04:04',
                'updated_at' => '2020-01-20 21:04:04',
            ),
            279 => 
            array (
                'id' => 1280,
                'artist_id' => 306,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:04:04',
                'updated_at' => '2020-01-20 21:04:04',
            ),
            280 => 
            array (
                'id' => 1281,
                'artist_id' => 307,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:04:06',
                'updated_at' => '2020-01-20 21:04:06',
            ),
            281 => 
            array (
                'id' => 1282,
                'artist_id' => 307,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:04:06',
                'updated_at' => '2020-01-20 21:04:06',
            ),
            282 => 
            array (
                'id' => 1283,
                'artist_id' => 307,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:04:06',
                'updated_at' => '2020-01-20 21:04:06',
            ),
            283 => 
            array (
                'id' => 1284,
                'artist_id' => 307,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:04:06',
                'updated_at' => '2020-01-20 21:04:06',
            ),
            284 => 
            array (
                'id' => 1285,
                'artist_id' => 307,
                'tag_id' => 97,
                'created_at' => '2020-01-20 21:04:06',
                'updated_at' => '2020-01-20 21:04:06',
            ),
        ));
        
        
    }
}