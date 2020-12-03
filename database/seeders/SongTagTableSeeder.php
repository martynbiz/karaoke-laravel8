<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SongTagTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('song_tag')->delete();
        
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 1,
                'song_id' => 1,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2018-04-28 12:17:39',
            ),
            1 => 
            array (
                'id' => 2,
                'song_id' => 1,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2018-04-28 12:17:39',
            ),
            2 => 
            array (
                'id' => 3,
                'song_id' => 1,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2018-04-28 12:17:39',
            ),
            3 => 
            array (
                'id' => 4,
                'song_id' => 1,
                'tag_id' => 4,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2018-04-28 12:17:39',
            ),
            4 => 
            array (
                'id' => 5,
                'song_id' => 1,
                'tag_id' => 5,
                'created_at' => '2018-04-28 12:17:39',
                'updated_at' => '2018-04-28 12:17:39',
            ),
            5 => 
            array (
                'id' => 6,
                'song_id' => 2,
                'tag_id' => 6,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2018-04-28 12:17:41',
            ),
            6 => 
            array (
                'id' => 7,
                'song_id' => 2,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2018-04-28 12:17:41',
            ),
            7 => 
            array (
                'id' => 8,
                'song_id' => 2,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2018-04-28 12:17:41',
            ),
            8 => 
            array (
                'id' => 9,
                'song_id' => 2,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2018-04-28 12:17:41',
            ),
            9 => 
            array (
                'id' => 10,
                'song_id' => 2,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:41',
                'updated_at' => '2018-04-28 12:17:41',
            ),
            10 => 
            array (
                'id' => 11,
                'song_id' => 3,
                'tag_id' => 8,
                'created_at' => '2018-04-28 12:17:42',
                'updated_at' => '2018-04-28 12:17:42',
            ),
            11 => 
            array (
                'id' => 12,
                'song_id' => 3,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:42',
                'updated_at' => '2018-04-28 12:17:42',
            ),
            12 => 
            array (
                'id' => 13,
                'song_id' => 3,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:42',
                'updated_at' => '2018-04-28 12:17:42',
            ),
            13 => 
            array (
                'id' => 14,
                'song_id' => 3,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:17:42',
                'updated_at' => '2018-04-28 12:17:42',
            ),
            14 => 
            array (
                'id' => 15,
                'song_id' => 4,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:43',
                'updated_at' => '2018-04-28 12:17:43',
            ),
            15 => 
            array (
                'id' => 16,
                'song_id' => 4,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:17:43',
                'updated_at' => '2018-04-28 12:17:43',
            ),
            16 => 
            array (
                'id' => 17,
                'song_id' => 4,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:43',
                'updated_at' => '2018-04-28 12:17:43',
            ),
            17 => 
            array (
                'id' => 18,
                'song_id' => 4,
                'tag_id' => 8,
                'created_at' => '2018-04-28 12:17:43',
                'updated_at' => '2018-04-28 12:17:43',
            ),
            18 => 
            array (
                'id' => 19,
                'song_id' => 5,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:44',
                'updated_at' => '2018-04-28 12:17:44',
            ),
            19 => 
            array (
                'id' => 20,
                'song_id' => 5,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:45',
                'updated_at' => '2018-04-28 12:17:45',
            ),
            20 => 
            array (
                'id' => 21,
                'song_id' => 5,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:17:45',
                'updated_at' => '2018-04-28 12:17:45',
            ),
            21 => 
            array (
                'id' => 22,
                'song_id' => 5,
                'tag_id' => 8,
                'created_at' => '2018-04-28 12:17:45',
                'updated_at' => '2018-04-28 12:17:45',
            ),
            22 => 
            array (
                'id' => 23,
                'song_id' => 6,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:17:46',
                'updated_at' => '2018-04-28 12:17:46',
            ),
            23 => 
            array (
                'id' => 24,
                'song_id' => 6,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:46',
                'updated_at' => '2018-04-28 12:17:46',
            ),
            24 => 
            array (
                'id' => 25,
                'song_id' => 10,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:17:51',
                'updated_at' => '2018-04-28 12:17:51',
            ),
            25 => 
            array (
                'id' => 26,
                'song_id' => 10,
                'tag_id' => 11,
                'created_at' => '2018-04-28 12:17:51',
                'updated_at' => '2018-04-28 12:17:51',
            ),
            26 => 
            array (
                'id' => 27,
                'song_id' => 10,
                'tag_id' => 12,
                'created_at' => '2018-04-28 12:17:51',
                'updated_at' => '2018-04-28 12:17:51',
            ),
            27 => 
            array (
                'id' => 28,
                'song_id' => 11,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2018-04-28 12:17:53',
            ),
            28 => 
            array (
                'id' => 29,
                'song_id' => 11,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2018-04-28 12:17:53',
            ),
            29 => 
            array (
                'id' => 30,
                'song_id' => 11,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2018-04-28 12:17:53',
            ),
            30 => 
            array (
                'id' => 31,
                'song_id' => 11,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:17:53',
                'updated_at' => '2018-04-28 12:17:53',
            ),
            31 => 
            array (
                'id' => 32,
                'song_id' => 12,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2018-04-28 12:17:54',
            ),
            32 => 
            array (
                'id' => 33,
                'song_id' => 12,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2018-04-28 12:17:54',
            ),
            33 => 
            array (
                'id' => 34,
                'song_id' => 12,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2018-04-28 12:17:54',
            ),
            34 => 
            array (
                'id' => 35,
                'song_id' => 12,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2018-04-28 12:17:54',
            ),
            35 => 
            array (
                'id' => 36,
                'song_id' => 12,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:54',
                'updated_at' => '2018-04-28 12:17:54',
            ),
            36 => 
            array (
                'id' => 37,
                'song_id' => 13,
                'tag_id' => 19,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2018-04-28 12:17:56',
            ),
            37 => 
            array (
                'id' => 38,
                'song_id' => 13,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2018-04-28 12:17:56',
            ),
            38 => 
            array (
                'id' => 39,
                'song_id' => 13,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2018-04-28 12:17:56',
            ),
            39 => 
            array (
                'id' => 40,
                'song_id' => 13,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2018-04-28 12:17:56',
            ),
            40 => 
            array (
                'id' => 41,
                'song_id' => 13,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:56',
                'updated_at' => '2018-04-28 12:17:56',
            ),
            41 => 
            array (
                'id' => 42,
                'song_id' => 14,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:17:57',
                'updated_at' => '2018-04-28 12:17:57',
            ),
            42 => 
            array (
                'id' => 43,
                'song_id' => 14,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:17:57',
                'updated_at' => '2018-04-28 12:17:57',
            ),
            43 => 
            array (
                'id' => 44,
                'song_id' => 14,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:17:57',
                'updated_at' => '2018-04-28 12:17:57',
            ),
            44 => 
            array (
                'id' => 45,
                'song_id' => 14,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:17:57',
                'updated_at' => '2018-04-28 12:17:57',
            ),
            45 => 
            array (
                'id' => 46,
                'song_id' => 14,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:57',
                'updated_at' => '2018-04-28 12:17:57',
            ),
            46 => 
            array (
                'id' => 47,
                'song_id' => 15,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:17:59',
                'updated_at' => '2018-04-28 12:17:59',
            ),
            47 => 
            array (
                'id' => 48,
                'song_id' => 15,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:17:59',
                'updated_at' => '2018-04-28 12:17:59',
            ),
            48 => 
            array (
                'id' => 49,
                'song_id' => 15,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:17:59',
                'updated_at' => '2018-04-28 12:17:59',
            ),
            49 => 
            array (
                'id' => 50,
                'song_id' => 15,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:17:59',
                'updated_at' => '2018-04-28 12:17:59',
            ),
            50 => 
            array (
                'id' => 51,
                'song_id' => 15,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:17:59',
                'updated_at' => '2018-04-28 12:17:59',
            ),
            51 => 
            array (
                'id' => 52,
                'song_id' => 16,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:00',
                'updated_at' => '2018-04-28 12:18:00',
            ),
            52 => 
            array (
                'id' => 53,
                'song_id' => 16,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:00',
                'updated_at' => '2018-04-28 12:18:00',
            ),
            53 => 
            array (
                'id' => 54,
                'song_id' => 16,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:00',
                'updated_at' => '2018-04-28 12:18:00',
            ),
            54 => 
            array (
                'id' => 55,
                'song_id' => 16,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:18:00',
                'updated_at' => '2018-04-28 12:18:00',
            ),
            55 => 
            array (
                'id' => 56,
                'song_id' => 16,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:00',
                'updated_at' => '2018-04-28 12:18:00',
            ),
            56 => 
            array (
                'id' => 57,
                'song_id' => 17,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2018-04-28 12:18:01',
            ),
            57 => 
            array (
                'id' => 58,
                'song_id' => 17,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2018-04-28 12:18:01',
            ),
            58 => 
            array (
                'id' => 59,
                'song_id' => 17,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2018-04-28 12:18:01',
            ),
            59 => 
            array (
                'id' => 60,
                'song_id' => 17,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2018-04-28 12:18:01',
            ),
            60 => 
            array (
                'id' => 61,
                'song_id' => 17,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:18:01',
                'updated_at' => '2018-04-28 12:18:01',
            ),
            61 => 
            array (
                'id' => 62,
                'song_id' => 18,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2018-04-28 12:18:03',
            ),
            62 => 
            array (
                'id' => 63,
                'song_id' => 18,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2018-04-28 12:18:03',
            ),
            63 => 
            array (
                'id' => 64,
                'song_id' => 18,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2018-04-28 12:18:03',
            ),
            64 => 
            array (
                'id' => 65,
                'song_id' => 18,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2018-04-28 12:18:03',
            ),
            65 => 
            array (
                'id' => 66,
                'song_id' => 18,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:03',
                'updated_at' => '2018-04-28 12:18:03',
            ),
            66 => 
            array (
                'id' => 67,
                'song_id' => 19,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:04',
                'updated_at' => '2018-04-28 12:18:04',
            ),
            67 => 
            array (
                'id' => 68,
                'song_id' => 19,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:04',
                'updated_at' => '2018-04-28 12:18:04',
            ),
            68 => 
            array (
                'id' => 69,
                'song_id' => 19,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:18:04',
                'updated_at' => '2018-04-28 12:18:04',
            ),
            69 => 
            array (
                'id' => 70,
                'song_id' => 19,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:04',
                'updated_at' => '2018-04-28 12:18:04',
            ),
            70 => 
            array (
                'id' => 71,
                'song_id' => 19,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:04',
                'updated_at' => '2018-04-28 12:18:04',
            ),
            71 => 
            array (
                'id' => 72,
                'song_id' => 20,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:06',
                'updated_at' => '2018-04-28 12:18:06',
            ),
            72 => 
            array (
                'id' => 73,
                'song_id' => 20,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:18:06',
                'updated_at' => '2018-04-28 12:18:06',
            ),
            73 => 
            array (
                'id' => 74,
                'song_id' => 20,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:06',
                'updated_at' => '2018-04-28 12:18:06',
            ),
            74 => 
            array (
                'id' => 75,
                'song_id' => 20,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:06',
                'updated_at' => '2018-04-28 12:18:06',
            ),
            75 => 
            array (
                'id' => 76,
                'song_id' => 20,
                'tag_id' => 19,
                'created_at' => '2018-04-28 12:18:06',
                'updated_at' => '2018-04-28 12:18:06',
            ),
            76 => 
            array (
                'id' => 77,
                'song_id' => 22,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:18:08',
                'updated_at' => '2018-04-28 12:18:08',
            ),
            77 => 
            array (
                'id' => 78,
                'song_id' => 22,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:18:08',
                'updated_at' => '2018-04-28 12:18:08',
            ),
            78 => 
            array (
                'id' => 79,
                'song_id' => 22,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:09',
                'updated_at' => '2018-04-28 12:18:09',
            ),
            79 => 
            array (
                'id' => 80,
                'song_id' => 22,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:09',
                'updated_at' => '2018-04-28 12:18:09',
            ),
            80 => 
            array (
                'id' => 81,
                'song_id' => 23,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:18:10',
                'updated_at' => '2018-04-28 12:18:10',
            ),
            81 => 
            array (
                'id' => 82,
                'song_id' => 23,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:10',
                'updated_at' => '2018-04-28 12:18:10',
            ),
            82 => 
            array (
                'id' => 83,
                'song_id' => 23,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:18:10',
                'updated_at' => '2018-04-28 12:18:10',
            ),
            83 => 
            array (
                'id' => 84,
                'song_id' => 23,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:10',
                'updated_at' => '2018-04-28 12:18:10',
            ),
            84 => 
            array (
                'id' => 85,
                'song_id' => 24,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:18:12',
                'updated_at' => '2018-04-28 12:18:12',
            ),
            85 => 
            array (
                'id' => 86,
                'song_id' => 24,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:18:12',
                'updated_at' => '2018-04-28 12:18:12',
            ),
            86 => 
            array (
                'id' => 87,
                'song_id' => 24,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:12',
                'updated_at' => '2018-04-28 12:18:12',
            ),
            87 => 
            array (
                'id' => 88,
                'song_id' => 24,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:12',
                'updated_at' => '2018-04-28 12:18:12',
            ),
            88 => 
            array (
                'id' => 89,
                'song_id' => 25,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2018-04-28 12:18:13',
            ),
            89 => 
            array (
                'id' => 90,
                'song_id' => 25,
                'tag_id' => 26,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2018-04-28 12:18:13',
            ),
            90 => 
            array (
                'id' => 91,
                'song_id' => 25,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2018-04-28 12:18:13',
            ),
            91 => 
            array (
                'id' => 92,
                'song_id' => 25,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2018-04-28 12:18:13',
            ),
            92 => 
            array (
                'id' => 93,
                'song_id' => 25,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:18:13',
                'updated_at' => '2018-04-28 12:18:13',
            ),
            93 => 
            array (
                'id' => 94,
                'song_id' => 26,
                'tag_id' => 27,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2018-04-28 12:18:15',
            ),
            94 => 
            array (
                'id' => 95,
                'song_id' => 26,
                'tag_id' => 28,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2018-04-28 12:18:15',
            ),
            95 => 
            array (
                'id' => 96,
                'song_id' => 26,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2018-04-28 12:18:15',
            ),
            96 => 
            array (
                'id' => 97,
                'song_id' => 26,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2018-04-28 12:18:15',
            ),
            97 => 
            array (
                'id' => 98,
                'song_id' => 26,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:15',
                'updated_at' => '2018-04-28 12:18:15',
            ),
            98 => 
            array (
                'id' => 99,
                'song_id' => 27,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2018-04-28 12:18:16',
            ),
            99 => 
            array (
                'id' => 100,
                'song_id' => 27,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2018-04-28 12:18:16',
            ),
            100 => 
            array (
                'id' => 101,
                'song_id' => 27,
                'tag_id' => 31,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2018-04-28 12:18:16',
            ),
            101 => 
            array (
                'id' => 102,
                'song_id' => 27,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2018-04-28 12:18:16',
            ),
            102 => 
            array (
                'id' => 103,
                'song_id' => 27,
                'tag_id' => 27,
                'created_at' => '2018-04-28 12:18:16',
                'updated_at' => '2018-04-28 12:18:16',
            ),
            103 => 
            array (
                'id' => 104,
                'song_id' => 28,
                'tag_id' => 32,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2018-04-28 12:18:18',
            ),
            104 => 
            array (
                'id' => 105,
                'song_id' => 28,
                'tag_id' => 33,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2018-04-28 12:18:18',
            ),
            105 => 
            array (
                'id' => 106,
                'song_id' => 28,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2018-04-28 12:18:18',
            ),
            106 => 
            array (
                'id' => 107,
                'song_id' => 28,
                'tag_id' => 27,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2018-04-28 12:18:18',
            ),
            107 => 
            array (
                'id' => 108,
                'song_id' => 28,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:18:18',
                'updated_at' => '2018-04-28 12:18:18',
            ),
            108 => 
            array (
                'id' => 109,
                'song_id' => 29,
                'tag_id' => 34,
                'created_at' => '2018-04-28 12:18:19',
                'updated_at' => '2018-04-28 12:18:19',
            ),
            109 => 
            array (
                'id' => 110,
                'song_id' => 29,
                'tag_id' => 35,
                'created_at' => '2018-04-28 12:18:19',
                'updated_at' => '2018-04-28 12:18:19',
            ),
            110 => 
            array (
                'id' => 111,
                'song_id' => 29,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:19',
                'updated_at' => '2018-04-28 12:18:19',
            ),
            111 => 
            array (
                'id' => 112,
                'song_id' => 29,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:18:19',
                'updated_at' => '2018-04-28 12:18:19',
            ),
            112 => 
            array (
                'id' => 113,
                'song_id' => 30,
                'tag_id' => 36,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2018-04-28 12:18:20',
            ),
            113 => 
            array (
                'id' => 114,
                'song_id' => 30,
                'tag_id' => 37,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2018-04-28 12:18:20',
            ),
            114 => 
            array (
                'id' => 115,
                'song_id' => 30,
                'tag_id' => 38,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2018-04-28 12:18:20',
            ),
            115 => 
            array (
                'id' => 116,
                'song_id' => 30,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2018-04-28 12:18:20',
            ),
            116 => 
            array (
                'id' => 117,
                'song_id' => 30,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:20',
                'updated_at' => '2018-04-28 12:18:20',
            ),
            117 => 
            array (
                'id' => 118,
                'song_id' => 31,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2018-04-28 12:18:22',
            ),
            118 => 
            array (
                'id' => 119,
                'song_id' => 31,
                'tag_id' => 40,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2018-04-28 12:18:22',
            ),
            119 => 
            array (
                'id' => 120,
                'song_id' => 31,
                'tag_id' => 41,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2018-04-28 12:18:22',
            ),
            120 => 
            array (
                'id' => 121,
                'song_id' => 31,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2018-04-28 12:18:22',
            ),
            121 => 
            array (
                'id' => 122,
                'song_id' => 31,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:22',
                'updated_at' => '2018-04-28 12:18:22',
            ),
            122 => 
            array (
                'id' => 123,
                'song_id' => 32,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2018-04-28 12:18:23',
            ),
            123 => 
            array (
                'id' => 124,
                'song_id' => 32,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2018-04-28 12:18:23',
            ),
            124 => 
            array (
                'id' => 125,
                'song_id' => 32,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2018-04-28 12:18:23',
            ),
            125 => 
            array (
                'id' => 126,
                'song_id' => 32,
                'tag_id' => 40,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2018-04-28 12:18:23',
            ),
            126 => 
            array (
                'id' => 127,
                'song_id' => 32,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:23',
                'updated_at' => '2018-04-28 12:18:23',
            ),
            127 => 
            array (
                'id' => 128,
                'song_id' => 33,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:25',
                'updated_at' => '2018-04-28 12:18:25',
            ),
            128 => 
            array (
                'id' => 129,
                'song_id' => 33,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:25',
                'updated_at' => '2018-04-28 12:18:25',
            ),
            129 => 
            array (
                'id' => 130,
                'song_id' => 33,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:25',
                'updated_at' => '2018-04-28 12:18:25',
            ),
            130 => 
            array (
                'id' => 131,
                'song_id' => 33,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:25',
                'updated_at' => '2018-04-28 12:18:25',
            ),
            131 => 
            array (
                'id' => 132,
                'song_id' => 33,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:25',
                'updated_at' => '2018-04-28 12:18:25',
            ),
            132 => 
            array (
                'id' => 133,
                'song_id' => 34,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:26',
                'updated_at' => '2018-04-28 12:18:26',
            ),
            133 => 
            array (
                'id' => 134,
                'song_id' => 34,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:26',
                'updated_at' => '2018-04-28 12:18:26',
            ),
            134 => 
            array (
                'id' => 135,
                'song_id' => 34,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:26',
                'updated_at' => '2018-04-28 12:18:26',
            ),
            135 => 
            array (
                'id' => 136,
                'song_id' => 34,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:26',
                'updated_at' => '2018-04-28 12:18:26',
            ),
            136 => 
            array (
                'id' => 137,
                'song_id' => 34,
                'tag_id' => 40,
                'created_at' => '2018-04-28 12:18:26',
                'updated_at' => '2018-04-28 12:18:26',
            ),
            137 => 
            array (
                'id' => 138,
                'song_id' => 35,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:28',
                'updated_at' => '2018-04-28 12:18:28',
            ),
            138 => 
            array (
                'id' => 139,
                'song_id' => 35,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:28',
                'updated_at' => '2018-04-28 12:18:28',
            ),
            139 => 
            array (
                'id' => 140,
                'song_id' => 35,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:28',
                'updated_at' => '2018-04-28 12:18:28',
            ),
            140 => 
            array (
                'id' => 141,
                'song_id' => 35,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:28',
                'updated_at' => '2018-04-28 12:18:28',
            ),
            141 => 
            array (
                'id' => 142,
                'song_id' => 35,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:28',
                'updated_at' => '2018-04-28 12:18:28',
            ),
            142 => 
            array (
                'id' => 143,
                'song_id' => 36,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:29',
                'updated_at' => '2018-04-28 12:18:29',
            ),
            143 => 
            array (
                'id' => 144,
                'song_id' => 36,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:29',
                'updated_at' => '2018-04-28 12:18:29',
            ),
            144 => 
            array (
                'id' => 145,
                'song_id' => 36,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:29',
                'updated_at' => '2018-04-28 12:18:29',
            ),
            145 => 
            array (
                'id' => 146,
                'song_id' => 36,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:29',
                'updated_at' => '2018-04-28 12:18:29',
            ),
            146 => 
            array (
                'id' => 147,
                'song_id' => 36,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:29',
                'updated_at' => '2018-04-28 12:18:29',
            ),
            147 => 
            array (
                'id' => 148,
                'song_id' => 37,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:31',
                'updated_at' => '2018-04-28 12:18:31',
            ),
            148 => 
            array (
                'id' => 149,
                'song_id' => 37,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:31',
                'updated_at' => '2018-04-28 12:18:31',
            ),
            149 => 
            array (
                'id' => 150,
                'song_id' => 37,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:31',
                'updated_at' => '2018-04-28 12:18:31',
            ),
            150 => 
            array (
                'id' => 151,
                'song_id' => 37,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:31',
                'updated_at' => '2018-04-28 12:18:31',
            ),
            151 => 
            array (
                'id' => 152,
                'song_id' => 37,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:31',
                'updated_at' => '2018-04-28 12:18:31',
            ),
            152 => 
            array (
                'id' => 153,
                'song_id' => 38,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:18:33',
                'updated_at' => '2018-04-28 12:18:33',
            ),
            153 => 
            array (
                'id' => 154,
                'song_id' => 38,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:33',
                'updated_at' => '2018-04-28 12:18:33',
            ),
            154 => 
            array (
                'id' => 155,
                'song_id' => 38,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:33',
                'updated_at' => '2018-04-28 12:18:33',
            ),
            155 => 
            array (
                'id' => 156,
                'song_id' => 38,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:33',
                'updated_at' => '2018-04-28 12:18:33',
            ),
            156 => 
            array (
                'id' => 157,
                'song_id' => 39,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:34',
                'updated_at' => '2018-04-28 12:18:34',
            ),
            157 => 
            array (
                'id' => 158,
                'song_id' => 39,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:34',
                'updated_at' => '2018-04-28 12:18:34',
            ),
            158 => 
            array (
                'id' => 159,
                'song_id' => 39,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:18:34',
                'updated_at' => '2018-04-28 12:18:34',
            ),
            159 => 
            array (
                'id' => 160,
                'song_id' => 39,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:34',
                'updated_at' => '2018-04-28 12:18:34',
            ),
            160 => 
            array (
                'id' => 161,
                'song_id' => 40,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2018-04-28 12:18:36',
            ),
            161 => 
            array (
                'id' => 162,
                'song_id' => 40,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2018-04-28 12:18:36',
            ),
            162 => 
            array (
                'id' => 163,
                'song_id' => 40,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2018-04-28 12:18:36',
            ),
            163 => 
            array (
                'id' => 164,
                'song_id' => 40,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2018-04-28 12:18:36',
            ),
            164 => 
            array (
                'id' => 165,
                'song_id' => 40,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:36',
                'updated_at' => '2018-04-28 12:18:36',
            ),
            165 => 
            array (
                'id' => 166,
                'song_id' => 41,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:18:37',
                'updated_at' => '2018-04-28 12:18:37',
            ),
            166 => 
            array (
                'id' => 167,
                'song_id' => 41,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:18:37',
                'updated_at' => '2018-04-28 12:18:37',
            ),
            167 => 
            array (
                'id' => 168,
                'song_id' => 41,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:37',
                'updated_at' => '2018-04-28 12:18:37',
            ),
            168 => 
            array (
                'id' => 169,
                'song_id' => 41,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:18:37',
                'updated_at' => '2018-04-28 12:18:37',
            ),
            169 => 
            array (
                'id' => 170,
                'song_id' => 41,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:37',
                'updated_at' => '2018-04-28 12:18:37',
            ),
            170 => 
            array (
                'id' => 171,
                'song_id' => 42,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2018-04-28 12:18:39',
            ),
            171 => 
            array (
                'id' => 172,
                'song_id' => 42,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2018-04-28 12:18:39',
            ),
            172 => 
            array (
                'id' => 173,
                'song_id' => 42,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2018-04-28 12:18:39',
            ),
            173 => 
            array (
                'id' => 174,
                'song_id' => 42,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2018-04-28 12:18:39',
            ),
            174 => 
            array (
                'id' => 175,
                'song_id' => 42,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:39',
                'updated_at' => '2018-04-28 12:18:39',
            ),
            175 => 
            array (
                'id' => 176,
                'song_id' => 43,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:40',
                'updated_at' => '2018-04-28 12:18:40',
            ),
            176 => 
            array (
                'id' => 177,
                'song_id' => 43,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:40',
                'updated_at' => '2018-04-28 12:18:40',
            ),
            177 => 
            array (
                'id' => 178,
                'song_id' => 43,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:40',
                'updated_at' => '2018-04-28 12:18:40',
            ),
            178 => 
            array (
                'id' => 179,
                'song_id' => 43,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:40',
                'updated_at' => '2018-04-28 12:18:40',
            ),
            179 => 
            array (
                'id' => 180,
                'song_id' => 43,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:40',
                'updated_at' => '2018-04-28 12:18:40',
            ),
            180 => 
            array (
                'id' => 181,
                'song_id' => 44,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:41',
                'updated_at' => '2018-04-28 12:18:41',
            ),
            181 => 
            array (
                'id' => 182,
                'song_id' => 44,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:41',
                'updated_at' => '2018-04-28 12:18:41',
            ),
            182 => 
            array (
                'id' => 183,
                'song_id' => 44,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:41',
                'updated_at' => '2018-04-28 12:18:41',
            ),
            183 => 
            array (
                'id' => 184,
                'song_id' => 44,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:41',
                'updated_at' => '2018-04-28 12:18:41',
            ),
            184 => 
            array (
                'id' => 185,
                'song_id' => 44,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:41',
                'updated_at' => '2018-04-28 12:18:41',
            ),
            185 => 
            array (
                'id' => 186,
                'song_id' => 45,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:43',
                'updated_at' => '2018-04-28 12:18:43',
            ),
            186 => 
            array (
                'id' => 187,
                'song_id' => 45,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:43',
                'updated_at' => '2018-04-28 12:18:43',
            ),
            187 => 
            array (
                'id' => 188,
                'song_id' => 45,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:43',
                'updated_at' => '2018-04-28 12:18:43',
            ),
            188 => 
            array (
                'id' => 189,
                'song_id' => 45,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:43',
                'updated_at' => '2018-04-28 12:18:43',
            ),
            189 => 
            array (
                'id' => 190,
                'song_id' => 45,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:43',
                'updated_at' => '2018-04-28 12:18:43',
            ),
            190 => 
            array (
                'id' => 191,
                'song_id' => 46,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:44',
                'updated_at' => '2018-04-28 12:18:44',
            ),
            191 => 
            array (
                'id' => 192,
                'song_id' => 46,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:44',
                'updated_at' => '2018-04-28 12:18:44',
            ),
            192 => 
            array (
                'id' => 193,
                'song_id' => 46,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:44',
                'updated_at' => '2018-04-28 12:18:44',
            ),
            193 => 
            array (
                'id' => 194,
                'song_id' => 46,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:44',
                'updated_at' => '2018-04-28 12:18:44',
            ),
            194 => 
            array (
                'id' => 195,
                'song_id' => 46,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:44',
                'updated_at' => '2018-04-28 12:18:44',
            ),
            195 => 
            array (
                'id' => 196,
                'song_id' => 47,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:46',
                'updated_at' => '2018-04-28 12:18:46',
            ),
            196 => 
            array (
                'id' => 197,
                'song_id' => 47,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:46',
                'updated_at' => '2018-04-28 12:18:46',
            ),
            197 => 
            array (
                'id' => 198,
                'song_id' => 47,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:46',
                'updated_at' => '2018-04-28 12:18:46',
            ),
            198 => 
            array (
                'id' => 199,
                'song_id' => 47,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:46',
                'updated_at' => '2018-04-28 12:18:46',
            ),
            199 => 
            array (
                'id' => 200,
                'song_id' => 47,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:46',
                'updated_at' => '2018-04-28 12:18:46',
            ),
            200 => 
            array (
                'id' => 201,
                'song_id' => 48,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:18:47',
                'updated_at' => '2018-04-28 12:18:47',
            ),
            201 => 
            array (
                'id' => 202,
                'song_id' => 49,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:49',
                'updated_at' => '2018-04-28 12:18:49',
            ),
            202 => 
            array (
                'id' => 203,
                'song_id' => 49,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:49',
                'updated_at' => '2018-04-28 12:18:49',
            ),
            203 => 
            array (
                'id' => 204,
                'song_id' => 49,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:49',
                'updated_at' => '2018-04-28 12:18:49',
            ),
            204 => 
            array (
                'id' => 205,
                'song_id' => 49,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:49',
                'updated_at' => '2018-04-28 12:18:49',
            ),
            205 => 
            array (
                'id' => 206,
                'song_id' => 49,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:49',
                'updated_at' => '2018-04-28 12:18:49',
            ),
            206 => 
            array (
                'id' => 207,
                'song_id' => 51,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:52',
                'updated_at' => '2018-04-28 12:18:52',
            ),
            207 => 
            array (
                'id' => 208,
                'song_id' => 51,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:52',
                'updated_at' => '2018-04-28 12:18:52',
            ),
            208 => 
            array (
                'id' => 209,
                'song_id' => 51,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:52',
                'updated_at' => '2018-04-28 12:18:52',
            ),
            209 => 
            array (
                'id' => 210,
                'song_id' => 51,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:52',
                'updated_at' => '2018-04-28 12:18:52',
            ),
            210 => 
            array (
                'id' => 211,
                'song_id' => 51,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:52',
                'updated_at' => '2018-04-28 12:18:52',
            ),
            211 => 
            array (
                'id' => 212,
                'song_id' => 52,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:53',
                'updated_at' => '2018-04-28 12:18:53',
            ),
            212 => 
            array (
                'id' => 213,
                'song_id' => 52,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:18:53',
                'updated_at' => '2018-04-28 12:18:53',
            ),
            213 => 
            array (
                'id' => 214,
                'song_id' => 52,
                'tag_id' => 46,
                'created_at' => '2018-04-28 12:18:53',
                'updated_at' => '2018-04-28 12:18:53',
            ),
            214 => 
            array (
                'id' => 215,
                'song_id' => 52,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:53',
                'updated_at' => '2018-04-28 12:18:53',
            ),
            215 => 
            array (
                'id' => 216,
                'song_id' => 52,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:18:53',
                'updated_at' => '2018-04-28 12:18:53',
            ),
            216 => 
            array (
                'id' => 217,
                'song_id' => 53,
                'tag_id' => 48,
                'created_at' => '2018-04-28 12:18:55',
                'updated_at' => '2018-04-28 12:18:55',
            ),
            217 => 
            array (
                'id' => 218,
                'song_id' => 53,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:18:55',
                'updated_at' => '2018-04-28 12:18:55',
            ),
            218 => 
            array (
                'id' => 219,
                'song_id' => 53,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:18:55',
                'updated_at' => '2018-04-28 12:18:55',
            ),
            219 => 
            array (
                'id' => 220,
                'song_id' => 53,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:18:55',
                'updated_at' => '2018-04-28 12:18:55',
            ),
            220 => 
            array (
                'id' => 221,
                'song_id' => 53,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:55',
                'updated_at' => '2018-04-28 12:18:55',
            ),
            221 => 
            array (
                'id' => 222,
                'song_id' => 54,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2018-04-28 12:18:56',
            ),
            222 => 
            array (
                'id' => 223,
                'song_id' => 54,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2018-04-28 12:18:56',
            ),
            223 => 
            array (
                'id' => 224,
                'song_id' => 54,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2018-04-28 12:18:56',
            ),
            224 => 
            array (
                'id' => 225,
                'song_id' => 54,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2018-04-28 12:18:56',
            ),
            225 => 
            array (
                'id' => 226,
                'song_id' => 54,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:56',
                'updated_at' => '2018-04-28 12:18:56',
            ),
            226 => 
            array (
                'id' => 227,
                'song_id' => 55,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:18:58',
                'updated_at' => '2018-04-28 12:18:58',
            ),
            227 => 
            array (
                'id' => 228,
                'song_id' => 55,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:18:58',
                'updated_at' => '2018-04-28 12:18:58',
            ),
            228 => 
            array (
                'id' => 229,
                'song_id' => 55,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:18:58',
                'updated_at' => '2018-04-28 12:18:58',
            ),
            229 => 
            array (
                'id' => 230,
                'song_id' => 55,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:58',
                'updated_at' => '2018-04-28 12:18:58',
            ),
            230 => 
            array (
                'id' => 231,
                'song_id' => 55,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:18:58',
                'updated_at' => '2018-04-28 12:18:58',
            ),
            231 => 
            array (
                'id' => 232,
                'song_id' => 56,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:18:59',
                'updated_at' => '2018-04-28 12:18:59',
            ),
            232 => 
            array (
                'id' => 233,
                'song_id' => 56,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:18:59',
                'updated_at' => '2018-04-28 12:18:59',
            ),
            233 => 
            array (
                'id' => 234,
                'song_id' => 56,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:18:59',
                'updated_at' => '2018-04-28 12:18:59',
            ),
            234 => 
            array (
                'id' => 235,
                'song_id' => 56,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:18:59',
                'updated_at' => '2018-04-28 12:18:59',
            ),
            235 => 
            array (
                'id' => 236,
                'song_id' => 56,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:18:59',
                'updated_at' => '2018-04-28 12:18:59',
            ),
            236 => 
            array (
                'id' => 237,
                'song_id' => 57,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:01',
                'updated_at' => '2018-04-28 12:19:01',
            ),
            237 => 
            array (
                'id' => 238,
                'song_id' => 57,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:19:01',
                'updated_at' => '2018-04-28 12:19:01',
            ),
            238 => 
            array (
                'id' => 239,
                'song_id' => 57,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:01',
                'updated_at' => '2018-04-28 12:19:01',
            ),
            239 => 
            array (
                'id' => 240,
                'song_id' => 57,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:01',
                'updated_at' => '2018-04-28 12:19:01',
            ),
            240 => 
            array (
                'id' => 241,
                'song_id' => 57,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:01',
                'updated_at' => '2018-04-28 12:19:01',
            ),
            241 => 
            array (
                'id' => 242,
                'song_id' => 58,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:02',
                'updated_at' => '2018-04-28 12:19:02',
            ),
            242 => 
            array (
                'id' => 243,
                'song_id' => 58,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:19:02',
                'updated_at' => '2018-04-28 12:19:02',
            ),
            243 => 
            array (
                'id' => 244,
                'song_id' => 58,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:02',
                'updated_at' => '2018-04-28 12:19:02',
            ),
            244 => 
            array (
                'id' => 245,
                'song_id' => 58,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:19:02',
                'updated_at' => '2018-04-28 12:19:02',
            ),
            245 => 
            array (
                'id' => 246,
                'song_id' => 58,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:02',
                'updated_at' => '2018-04-28 12:19:02',
            ),
            246 => 
            array (
                'id' => 247,
                'song_id' => 59,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:04',
                'updated_at' => '2018-04-28 12:19:04',
            ),
            247 => 
            array (
                'id' => 248,
                'song_id' => 59,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:04',
                'updated_at' => '2018-04-28 12:19:04',
            ),
            248 => 
            array (
                'id' => 249,
                'song_id' => 59,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:04',
                'updated_at' => '2018-04-28 12:19:04',
            ),
            249 => 
            array (
                'id' => 250,
                'song_id' => 59,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:19:04',
                'updated_at' => '2018-04-28 12:19:04',
            ),
            250 => 
            array (
                'id' => 251,
                'song_id' => 59,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:04',
                'updated_at' => '2018-04-28 12:19:04',
            ),
            251 => 
            array (
                'id' => 252,
                'song_id' => 60,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:05',
                'updated_at' => '2018-04-28 12:19:05',
            ),
            252 => 
            array (
                'id' => 253,
                'song_id' => 60,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:19:05',
                'updated_at' => '2018-04-28 12:19:05',
            ),
            253 => 
            array (
                'id' => 254,
                'song_id' => 60,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:05',
                'updated_at' => '2018-04-28 12:19:05',
            ),
            254 => 
            array (
                'id' => 255,
                'song_id' => 60,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:05',
                'updated_at' => '2018-04-28 12:19:05',
            ),
            255 => 
            array (
                'id' => 256,
                'song_id' => 60,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:05',
                'updated_at' => '2018-04-28 12:19:05',
            ),
            256 => 
            array (
                'id' => 257,
                'song_id' => 61,
                'tag_id' => 51,
                'created_at' => '2018-04-28 12:19:06',
                'updated_at' => '2018-04-28 12:19:06',
            ),
            257 => 
            array (
                'id' => 258,
                'song_id' => 61,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:06',
                'updated_at' => '2018-04-28 12:19:06',
            ),
            258 => 
            array (
                'id' => 259,
                'song_id' => 61,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:06',
                'updated_at' => '2018-04-28 12:19:06',
            ),
            259 => 
            array (
                'id' => 260,
                'song_id' => 61,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:06',
                'updated_at' => '2018-04-28 12:19:06',
            ),
            260 => 
            array (
                'id' => 261,
                'song_id' => 61,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:19:06',
                'updated_at' => '2018-04-28 12:19:06',
            ),
            261 => 
            array (
                'id' => 262,
                'song_id' => 63,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:09',
                'updated_at' => '2018-04-28 12:19:09',
            ),
            262 => 
            array (
                'id' => 263,
                'song_id' => 63,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:19:09',
                'updated_at' => '2018-04-28 12:19:09',
            ),
            263 => 
            array (
                'id' => 264,
                'song_id' => 63,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:19:09',
                'updated_at' => '2018-04-28 12:19:09',
            ),
            264 => 
            array (
                'id' => 265,
                'song_id' => 63,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:09',
                'updated_at' => '2018-04-28 12:19:09',
            ),
            265 => 
            array (
                'id' => 266,
                'song_id' => 63,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:19:09',
                'updated_at' => '2018-04-28 12:19:09',
            ),
            266 => 
            array (
                'id' => 267,
                'song_id' => 64,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:11',
                'updated_at' => '2018-04-28 12:19:11',
            ),
            267 => 
            array (
                'id' => 268,
                'song_id' => 64,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:19:11',
                'updated_at' => '2018-04-28 12:19:11',
            ),
            268 => 
            array (
                'id' => 269,
                'song_id' => 64,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:19:11',
                'updated_at' => '2018-04-28 12:19:11',
            ),
            269 => 
            array (
                'id' => 270,
                'song_id' => 64,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:19:11',
                'updated_at' => '2018-04-28 12:19:11',
            ),
            270 => 
            array (
                'id' => 271,
                'song_id' => 64,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:11',
                'updated_at' => '2018-04-28 12:19:11',
            ),
            271 => 
            array (
                'id' => 272,
                'song_id' => 65,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:13',
                'updated_at' => '2018-04-28 12:19:13',
            ),
            272 => 
            array (
                'id' => 273,
                'song_id' => 65,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:13',
                'updated_at' => '2018-04-28 12:19:13',
            ),
            273 => 
            array (
                'id' => 274,
                'song_id' => 65,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:19:13',
                'updated_at' => '2018-04-28 12:19:13',
            ),
            274 => 
            array (
                'id' => 275,
                'song_id' => 65,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:19:13',
                'updated_at' => '2018-04-28 12:19:13',
            ),
            275 => 
            array (
                'id' => 276,
                'song_id' => 65,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:19:13',
                'updated_at' => '2018-04-28 12:19:13',
            ),
            276 => 
            array (
                'id' => 277,
                'song_id' => 66,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:14',
                'updated_at' => '2018-04-28 12:19:14',
            ),
            277 => 
            array (
                'id' => 278,
                'song_id' => 66,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:19:14',
                'updated_at' => '2018-04-28 12:19:14',
            ),
            278 => 
            array (
                'id' => 279,
                'song_id' => 66,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:19:14',
                'updated_at' => '2018-04-28 12:19:14',
            ),
            279 => 
            array (
                'id' => 280,
                'song_id' => 66,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:19:14',
                'updated_at' => '2018-04-28 12:19:14',
            ),
            280 => 
            array (
                'id' => 281,
                'song_id' => 66,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:19:14',
                'updated_at' => '2018-04-28 12:19:14',
            ),
            281 => 
            array (
                'id' => 282,
                'song_id' => 67,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:16',
                'updated_at' => '2018-04-28 12:19:16',
            ),
            282 => 
            array (
                'id' => 283,
                'song_id' => 67,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:19:16',
                'updated_at' => '2018-04-28 12:19:16',
            ),
            283 => 
            array (
                'id' => 284,
                'song_id' => 67,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:19:16',
                'updated_at' => '2018-04-28 12:19:16',
            ),
            284 => 
            array (
                'id' => 285,
                'song_id' => 67,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:16',
                'updated_at' => '2018-04-28 12:19:16',
            ),
            285 => 
            array (
                'id' => 286,
                'song_id' => 67,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:19:16',
                'updated_at' => '2018-04-28 12:19:16',
            ),
            286 => 
            array (
                'id' => 287,
                'song_id' => 68,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:17',
                'updated_at' => '2018-04-28 12:19:17',
            ),
            287 => 
            array (
                'id' => 288,
                'song_id' => 68,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:17',
                'updated_at' => '2018-04-28 12:19:17',
            ),
            288 => 
            array (
                'id' => 289,
                'song_id' => 68,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:17',
                'updated_at' => '2018-04-28 12:19:17',
            ),
            289 => 
            array (
                'id' => 290,
                'song_id' => 68,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:17',
                'updated_at' => '2018-04-28 12:19:17',
            ),
            290 => 
            array (
                'id' => 291,
                'song_id' => 69,
                'tag_id' => 55,
                'created_at' => '2018-04-28 12:19:18',
                'updated_at' => '2018-04-28 12:19:18',
            ),
            291 => 
            array (
                'id' => 292,
                'song_id' => 69,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:18',
                'updated_at' => '2018-04-28 12:19:18',
            ),
            292 => 
            array (
                'id' => 293,
                'song_id' => 69,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:18',
                'updated_at' => '2018-04-28 12:19:18',
            ),
            293 => 
            array (
                'id' => 294,
                'song_id' => 69,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:18',
                'updated_at' => '2018-04-28 12:19:18',
            ),
            294 => 
            array (
                'id' => 295,
                'song_id' => 69,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:18',
                'updated_at' => '2018-04-28 12:19:18',
            ),
            295 => 
            array (
                'id' => 296,
                'song_id' => 70,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:20',
                'updated_at' => '2018-04-28 12:19:20',
            ),
            296 => 
            array (
                'id' => 297,
                'song_id' => 70,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:20',
                'updated_at' => '2018-04-28 12:19:20',
            ),
            297 => 
            array (
                'id' => 298,
                'song_id' => 70,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:19:20',
                'updated_at' => '2018-04-28 12:19:20',
            ),
            298 => 
            array (
                'id' => 299,
                'song_id' => 70,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:20',
                'updated_at' => '2018-04-28 12:19:20',
            ),
            299 => 
            array (
                'id' => 300,
                'song_id' => 70,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:20',
                'updated_at' => '2018-04-28 12:19:20',
            ),
            300 => 
            array (
                'id' => 301,
                'song_id' => 71,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:21',
                'updated_at' => '2018-04-28 12:19:21',
            ),
            301 => 
            array (
                'id' => 302,
                'song_id' => 71,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:21',
                'updated_at' => '2018-04-28 12:19:21',
            ),
            302 => 
            array (
                'id' => 303,
                'song_id' => 71,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:21',
                'updated_at' => '2018-04-28 12:19:21',
            ),
            303 => 
            array (
                'id' => 304,
                'song_id' => 71,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:19:21',
                'updated_at' => '2018-04-28 12:19:21',
            ),
            304 => 
            array (
                'id' => 305,
                'song_id' => 71,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:21',
                'updated_at' => '2018-04-28 12:19:21',
            ),
            305 => 
            array (
                'id' => 306,
                'song_id' => 72,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:23',
                'updated_at' => '2018-04-28 12:19:23',
            ),
            306 => 
            array (
                'id' => 307,
                'song_id' => 72,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:23',
                'updated_at' => '2018-04-28 12:19:23',
            ),
            307 => 
            array (
                'id' => 308,
                'song_id' => 72,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:19:23',
                'updated_at' => '2018-04-28 12:19:23',
            ),
            308 => 
            array (
                'id' => 309,
                'song_id' => 72,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:23',
                'updated_at' => '2018-04-28 12:19:23',
            ),
            309 => 
            array (
                'id' => 310,
                'song_id' => 73,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:24',
                'updated_at' => '2018-04-28 12:19:24',
            ),
            310 => 
            array (
                'id' => 311,
                'song_id' => 73,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:24',
                'updated_at' => '2018-04-28 12:19:24',
            ),
            311 => 
            array (
                'id' => 312,
                'song_id' => 73,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:19:24',
                'updated_at' => '2018-04-28 12:19:24',
            ),
            312 => 
            array (
                'id' => 313,
                'song_id' => 73,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:24',
                'updated_at' => '2018-04-28 12:19:24',
            ),
            313 => 
            array (
                'id' => 314,
                'song_id' => 73,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:24',
                'updated_at' => '2018-04-28 12:19:24',
            ),
            314 => 
            array (
                'id' => 315,
                'song_id' => 74,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2018-04-28 12:19:26',
            ),
            315 => 
            array (
                'id' => 316,
                'song_id' => 74,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2018-04-28 12:19:26',
            ),
            316 => 
            array (
                'id' => 317,
                'song_id' => 74,
                'tag_id' => 58,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2018-04-28 12:19:26',
            ),
            317 => 
            array (
                'id' => 318,
                'song_id' => 74,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:19:26',
                'updated_at' => '2018-04-28 12:19:26',
            ),
            318 => 
            array (
                'id' => 319,
                'song_id' => 75,
                'tag_id' => 59,
                'created_at' => '2018-04-28 12:19:27',
                'updated_at' => '2018-04-28 12:19:27',
            ),
            319 => 
            array (
                'id' => 320,
                'song_id' => 75,
                'tag_id' => 60,
                'created_at' => '2018-04-28 12:19:27',
                'updated_at' => '2018-04-28 12:19:27',
            ),
            320 => 
            array (
                'id' => 321,
                'song_id' => 75,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:19:27',
                'updated_at' => '2018-04-28 12:19:27',
            ),
            321 => 
            array (
                'id' => 322,
                'song_id' => 75,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:19:27',
                'updated_at' => '2018-04-28 12:19:27',
            ),
            322 => 
            array (
                'id' => 323,
                'song_id' => 76,
                'tag_id' => 61,
                'created_at' => '2018-04-28 12:19:29',
                'updated_at' => '2018-04-28 12:19:29',
            ),
            323 => 
            array (
                'id' => 324,
                'song_id' => 76,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:19:29',
                'updated_at' => '2018-04-28 12:19:29',
            ),
            324 => 
            array (
                'id' => 325,
                'song_id' => 76,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:19:29',
                'updated_at' => '2018-04-28 12:19:29',
            ),
            325 => 
            array (
                'id' => 326,
                'song_id' => 76,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:29',
                'updated_at' => '2018-04-28 12:19:29',
            ),
            326 => 
            array (
                'id' => 327,
                'song_id' => 77,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:19:30',
                'updated_at' => '2018-04-28 12:19:30',
            ),
            327 => 
            array (
                'id' => 328,
                'song_id' => 77,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:19:30',
                'updated_at' => '2018-04-28 12:19:30',
            ),
            328 => 
            array (
                'id' => 329,
                'song_id' => 77,
                'tag_id' => 61,
                'created_at' => '2018-04-28 12:19:30',
                'updated_at' => '2018-04-28 12:19:30',
            ),
            329 => 
            array (
                'id' => 330,
                'song_id' => 77,
                'tag_id' => 60,
                'created_at' => '2018-04-28 12:19:30',
                'updated_at' => '2018-04-28 12:19:30',
            ),
            330 => 
            array (
                'id' => 331,
                'song_id' => 78,
                'tag_id' => 62,
                'created_at' => '2018-04-28 12:19:32',
                'updated_at' => '2018-04-28 12:19:32',
            ),
            331 => 
            array (
                'id' => 332,
                'song_id' => 78,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:19:32',
                'updated_at' => '2018-04-28 12:19:32',
            ),
            332 => 
            array (
                'id' => 333,
                'song_id' => 78,
                'tag_id' => 61,
                'created_at' => '2018-04-28 12:19:32',
                'updated_at' => '2018-04-28 12:19:32',
            ),
            333 => 
            array (
                'id' => 334,
                'song_id' => 78,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:19:32',
                'updated_at' => '2018-04-28 12:19:32',
            ),
            334 => 
            array (
                'id' => 335,
                'song_id' => 79,
                'tag_id' => 63,
                'created_at' => '2018-04-28 12:19:33',
                'updated_at' => '2018-04-28 12:19:33',
            ),
            335 => 
            array (
                'id' => 336,
                'song_id' => 79,
                'tag_id' => 56,
                'created_at' => '2018-04-28 12:19:33',
                'updated_at' => '2018-04-28 12:19:33',
            ),
            336 => 
            array (
                'id' => 337,
                'song_id' => 79,
                'tag_id' => 61,
                'created_at' => '2018-04-28 12:19:33',
                'updated_at' => '2018-04-28 12:19:33',
            ),
            337 => 
            array (
                'id' => 338,
                'song_id' => 79,
                'tag_id' => 57,
                'created_at' => '2018-04-28 12:19:33',
                'updated_at' => '2018-04-28 12:19:33',
            ),
            338 => 
            array (
                'id' => 339,
                'song_id' => 80,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:19:35',
                'updated_at' => '2018-04-28 12:19:35',
            ),
            339 => 
            array (
                'id' => 340,
                'song_id' => 80,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:35',
                'updated_at' => '2018-04-28 12:19:35',
            ),
            340 => 
            array (
                'id' => 341,
                'song_id' => 80,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:35',
                'updated_at' => '2018-04-28 12:19:35',
            ),
            341 => 
            array (
                'id' => 342,
                'song_id' => 80,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:19:35',
                'updated_at' => '2018-04-28 12:19:35',
            ),
            342 => 
            array (
                'id' => 343,
                'song_id' => 80,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:35',
                'updated_at' => '2018-04-28 12:19:35',
            ),
            343 => 
            array (
                'id' => 344,
                'song_id' => 81,
                'tag_id' => 64,
                'created_at' => '2018-04-28 12:19:36',
                'updated_at' => '2018-04-28 12:19:36',
            ),
            344 => 
            array (
                'id' => 345,
                'song_id' => 81,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:36',
                'updated_at' => '2018-04-28 12:19:36',
            ),
            345 => 
            array (
                'id' => 346,
                'song_id' => 81,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:36',
                'updated_at' => '2018-04-28 12:19:36',
            ),
            346 => 
            array (
                'id' => 347,
                'song_id' => 81,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:36',
                'updated_at' => '2018-04-28 12:19:36',
            ),
            347 => 
            array (
                'id' => 348,
                'song_id' => 81,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:36',
                'updated_at' => '2018-04-28 12:19:36',
            ),
            348 => 
            array (
                'id' => 349,
                'song_id' => 82,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:38',
                'updated_at' => '2018-04-28 12:19:38',
            ),
            349 => 
            array (
                'id' => 350,
                'song_id' => 82,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:38',
                'updated_at' => '2018-04-28 12:19:38',
            ),
            350 => 
            array (
                'id' => 351,
                'song_id' => 82,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:38',
                'updated_at' => '2018-04-28 12:19:38',
            ),
            351 => 
            array (
                'id' => 352,
                'song_id' => 82,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:38',
                'updated_at' => '2018-04-28 12:19:38',
            ),
            352 => 
            array (
                'id' => 353,
                'song_id' => 83,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:39',
                'updated_at' => '2018-04-28 12:19:39',
            ),
            353 => 
            array (
                'id' => 354,
                'song_id' => 83,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:39',
                'updated_at' => '2018-04-28 12:19:39',
            ),
            354 => 
            array (
                'id' => 355,
                'song_id' => 83,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:39',
                'updated_at' => '2018-04-28 12:19:39',
            ),
            355 => 
            array (
                'id' => 356,
                'song_id' => 83,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:19:39',
                'updated_at' => '2018-04-28 12:19:39',
            ),
            356 => 
            array (
                'id' => 357,
                'song_id' => 84,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:41',
                'updated_at' => '2018-04-28 12:19:41',
            ),
            357 => 
            array (
                'id' => 358,
                'song_id' => 84,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:41',
                'updated_at' => '2018-04-28 12:19:41',
            ),
            358 => 
            array (
                'id' => 359,
                'song_id' => 84,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:41',
                'updated_at' => '2018-04-28 12:19:41',
            ),
            359 => 
            array (
                'id' => 360,
                'song_id' => 84,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:41',
                'updated_at' => '2018-04-28 12:19:41',
            ),
            360 => 
            array (
                'id' => 361,
                'song_id' => 85,
                'tag_id' => 65,
                'created_at' => '2018-04-28 12:19:42',
                'updated_at' => '2018-04-28 12:19:42',
            ),
            361 => 
            array (
                'id' => 362,
                'song_id' => 85,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:42',
                'updated_at' => '2018-04-28 12:19:42',
            ),
            362 => 
            array (
                'id' => 363,
                'song_id' => 85,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:42',
                'updated_at' => '2018-04-28 12:19:42',
            ),
            363 => 
            array (
                'id' => 364,
                'song_id' => 85,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:19:42',
                'updated_at' => '2018-04-28 12:19:42',
            ),
            364 => 
            array (
                'id' => 365,
                'song_id' => 85,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:42',
                'updated_at' => '2018-04-28 12:19:42',
            ),
            365 => 
            array (
                'id' => 366,
                'song_id' => 86,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:44',
                'updated_at' => '2018-04-28 12:19:44',
            ),
            366 => 
            array (
                'id' => 367,
                'song_id' => 86,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:44',
                'updated_at' => '2018-04-28 12:19:44',
            ),
            367 => 
            array (
                'id' => 368,
                'song_id' => 86,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:44',
                'updated_at' => '2018-04-28 12:19:44',
            ),
            368 => 
            array (
                'id' => 369,
                'song_id' => 86,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:44',
                'updated_at' => '2018-04-28 12:19:44',
            ),
            369 => 
            array (
                'id' => 370,
                'song_id' => 86,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:44',
                'updated_at' => '2018-04-28 12:19:44',
            ),
            370 => 
            array (
                'id' => 371,
                'song_id' => 87,
                'tag_id' => 66,
                'created_at' => '2018-04-28 12:19:45',
                'updated_at' => '2018-04-28 12:19:45',
            ),
            371 => 
            array (
                'id' => 372,
                'song_id' => 87,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:45',
                'updated_at' => '2018-04-28 12:19:45',
            ),
            372 => 
            array (
                'id' => 373,
                'song_id' => 87,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:19:46',
                'updated_at' => '2018-04-28 12:19:46',
            ),
            373 => 
            array (
                'id' => 374,
                'song_id' => 87,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:46',
                'updated_at' => '2018-04-28 12:19:46',
            ),
            374 => 
            array (
                'id' => 375,
                'song_id' => 87,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:46',
                'updated_at' => '2018-04-28 12:19:46',
            ),
            375 => 
            array (
                'id' => 376,
                'song_id' => 88,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:47',
                'updated_at' => '2018-04-28 12:19:47',
            ),
            376 => 
            array (
                'id' => 377,
                'song_id' => 88,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:19:47',
                'updated_at' => '2018-04-28 12:19:47',
            ),
            377 => 
            array (
                'id' => 378,
                'song_id' => 88,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:19:47',
                'updated_at' => '2018-04-28 12:19:47',
            ),
            378 => 
            array (
                'id' => 379,
                'song_id' => 88,
                'tag_id' => 66,
                'created_at' => '2018-04-28 12:19:47',
                'updated_at' => '2018-04-28 12:19:47',
            ),
            379 => 
            array (
                'id' => 380,
                'song_id' => 88,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:19:47',
                'updated_at' => '2018-04-28 12:19:47',
            ),
            380 => 
            array (
                'id' => 381,
                'song_id' => 89,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:19:48',
                'updated_at' => '2018-04-28 12:19:48',
            ),
            381 => 
            array (
                'id' => 382,
                'song_id' => 89,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:19:48',
                'updated_at' => '2018-04-28 12:19:48',
            ),
            382 => 
            array (
                'id' => 383,
                'song_id' => 89,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:19:48',
                'updated_at' => '2018-04-28 12:19:48',
            ),
            383 => 
            array (
                'id' => 384,
                'song_id' => 89,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:48',
                'updated_at' => '2018-04-28 12:19:48',
            ),
            384 => 
            array (
                'id' => 385,
                'song_id' => 89,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:48',
                'updated_at' => '2018-04-28 12:19:48',
            ),
            385 => 
            array (
                'id' => 386,
                'song_id' => 90,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:19:50',
                'updated_at' => '2018-04-28 12:19:50',
            ),
            386 => 
            array (
                'id' => 387,
                'song_id' => 90,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:19:50',
                'updated_at' => '2018-04-28 12:19:50',
            ),
            387 => 
            array (
                'id' => 388,
                'song_id' => 90,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:50',
                'updated_at' => '2018-04-28 12:19:50',
            ),
            388 => 
            array (
                'id' => 389,
                'song_id' => 90,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:19:50',
                'updated_at' => '2018-04-28 12:19:50',
            ),
            389 => 
            array (
                'id' => 390,
                'song_id' => 90,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:50',
                'updated_at' => '2018-04-28 12:19:50',
            ),
            390 => 
            array (
                'id' => 391,
                'song_id' => 91,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:19:51',
                'updated_at' => '2018-04-28 12:19:51',
            ),
            391 => 
            array (
                'id' => 392,
                'song_id' => 91,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:19:51',
                'updated_at' => '2018-04-28 12:19:51',
            ),
            392 => 
            array (
                'id' => 393,
                'song_id' => 91,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:51',
                'updated_at' => '2018-04-28 12:19:51',
            ),
            393 => 
            array (
                'id' => 394,
                'song_id' => 91,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:19:51',
                'updated_at' => '2018-04-28 12:19:51',
            ),
            394 => 
            array (
                'id' => 395,
                'song_id' => 91,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:19:51',
                'updated_at' => '2018-04-28 12:19:51',
            ),
            395 => 
            array (
                'id' => 396,
                'song_id' => 92,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:19:53',
                'updated_at' => '2018-04-28 12:19:53',
            ),
            396 => 
            array (
                'id' => 397,
                'song_id' => 92,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:19:53',
                'updated_at' => '2018-04-28 12:19:53',
            ),
            397 => 
            array (
                'id' => 398,
                'song_id' => 92,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:19:53',
                'updated_at' => '2018-04-28 12:19:53',
            ),
            398 => 
            array (
                'id' => 399,
                'song_id' => 92,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:19:53',
                'updated_at' => '2018-04-28 12:19:53',
            ),
            399 => 
            array (
                'id' => 400,
                'song_id' => 92,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:19:53',
                'updated_at' => '2018-04-28 12:19:53',
            ),
            400 => 
            array (
                'id' => 401,
                'song_id' => 93,
                'tag_id' => 70,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2018-04-28 12:19:54',
            ),
            401 => 
            array (
                'id' => 402,
                'song_id' => 93,
                'tag_id' => 71,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2018-04-28 12:19:54',
            ),
            402 => 
            array (
                'id' => 403,
                'song_id' => 93,
                'tag_id' => 72,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2018-04-28 12:19:54',
            ),
            403 => 
            array (
                'id' => 404,
                'song_id' => 93,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2018-04-28 12:19:54',
            ),
            404 => 
            array (
                'id' => 405,
                'song_id' => 93,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:19:54',
                'updated_at' => '2018-04-28 12:19:54',
            ),
            405 => 
            array (
                'id' => 406,
                'song_id' => 94,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:56',
                'updated_at' => '2018-04-28 12:19:56',
            ),
            406 => 
            array (
                'id' => 407,
                'song_id' => 94,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:19:56',
                'updated_at' => '2018-04-28 12:19:56',
            ),
            407 => 
            array (
                'id' => 408,
                'song_id' => 94,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:56',
                'updated_at' => '2018-04-28 12:19:56',
            ),
            408 => 
            array (
                'id' => 409,
                'song_id' => 94,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:19:56',
                'updated_at' => '2018-04-28 12:19:56',
            ),
            409 => 
            array (
                'id' => 410,
                'song_id' => 95,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:57',
                'updated_at' => '2018-04-28 12:19:57',
            ),
            410 => 
            array (
                'id' => 411,
                'song_id' => 95,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:19:57',
                'updated_at' => '2018-04-28 12:19:57',
            ),
            411 => 
            array (
                'id' => 412,
                'song_id' => 95,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:57',
                'updated_at' => '2018-04-28 12:19:57',
            ),
            412 => 
            array (
                'id' => 413,
                'song_id' => 95,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:19:57',
                'updated_at' => '2018-04-28 12:19:57',
            ),
            413 => 
            array (
                'id' => 414,
                'song_id' => 96,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:19:59',
                'updated_at' => '2018-04-28 12:19:59',
            ),
            414 => 
            array (
                'id' => 415,
                'song_id' => 96,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:19:59',
                'updated_at' => '2018-04-28 12:19:59',
            ),
            415 => 
            array (
                'id' => 416,
                'song_id' => 96,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:19:59',
                'updated_at' => '2018-04-28 12:19:59',
            ),
            416 => 
            array (
                'id' => 417,
                'song_id' => 96,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:19:59',
                'updated_at' => '2018-04-28 12:19:59',
            ),
            417 => 
            array (
                'id' => 418,
                'song_id' => 97,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:00',
                'updated_at' => '2018-04-28 12:20:00',
            ),
            418 => 
            array (
                'id' => 419,
                'song_id' => 97,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:00',
                'updated_at' => '2018-04-28 12:20:00',
            ),
            419 => 
            array (
                'id' => 420,
                'song_id' => 97,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:20:00',
                'updated_at' => '2018-04-28 12:20:00',
            ),
            420 => 
            array (
                'id' => 421,
                'song_id' => 97,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:00',
                'updated_at' => '2018-04-28 12:20:00',
            ),
            421 => 
            array (
                'id' => 422,
                'song_id' => 97,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:20:00',
                'updated_at' => '2018-04-28 12:20:00',
            ),
            422 => 
            array (
                'id' => 423,
                'song_id' => 98,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:20:02',
                'updated_at' => '2018-04-28 12:20:02',
            ),
            423 => 
            array (
                'id' => 424,
                'song_id' => 98,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:02',
                'updated_at' => '2018-04-28 12:20:02',
            ),
            424 => 
            array (
                'id' => 425,
                'song_id' => 98,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:20:02',
                'updated_at' => '2018-04-28 12:20:02',
            ),
            425 => 
            array (
                'id' => 426,
                'song_id' => 98,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:02',
                'updated_at' => '2018-04-28 12:20:02',
            ),
            426 => 
            array (
                'id' => 427,
                'song_id' => 98,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:20:02',
                'updated_at' => '2018-04-28 12:20:02',
            ),
            427 => 
            array (
                'id' => 428,
                'song_id' => 99,
                'tag_id' => 74,
                'created_at' => '2018-04-28 12:20:03',
                'updated_at' => '2018-04-28 12:20:03',
            ),
            428 => 
            array (
                'id' => 429,
                'song_id' => 99,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:03',
                'updated_at' => '2018-04-28 12:20:03',
            ),
            429 => 
            array (
                'id' => 430,
                'song_id' => 99,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:03',
                'updated_at' => '2018-04-28 12:20:03',
            ),
            430 => 
            array (
                'id' => 431,
                'song_id' => 99,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:20:03',
                'updated_at' => '2018-04-28 12:20:03',
            ),
            431 => 
            array (
                'id' => 432,
                'song_id' => 99,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:20:03',
                'updated_at' => '2018-04-28 12:20:03',
            ),
            432 => 
            array (
                'id' => 433,
                'song_id' => 100,
                'tag_id' => 75,
                'created_at' => '2018-04-28 12:20:05',
                'updated_at' => '2018-04-28 12:20:05',
            ),
            433 => 
            array (
                'id' => 434,
                'song_id' => 100,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:05',
                'updated_at' => '2018-04-28 12:20:05',
            ),
            434 => 
            array (
                'id' => 435,
                'song_id' => 100,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:05',
                'updated_at' => '2018-04-28 12:20:05',
            ),
            435 => 
            array (
                'id' => 436,
                'song_id' => 100,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:20:05',
                'updated_at' => '2018-04-28 12:20:05',
            ),
            436 => 
            array (
                'id' => 437,
                'song_id' => 100,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:20:05',
                'updated_at' => '2018-04-28 12:20:05',
            ),
            437 => 
            array (
                'id' => 438,
                'song_id' => 101,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:06',
                'updated_at' => '2018-04-28 12:20:06',
            ),
            438 => 
            array (
                'id' => 439,
                'song_id' => 101,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:06',
                'updated_at' => '2018-04-28 12:20:06',
            ),
            439 => 
            array (
                'id' => 440,
                'song_id' => 101,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:20:06',
                'updated_at' => '2018-04-28 12:20:06',
            ),
            440 => 
            array (
                'id' => 441,
                'song_id' => 101,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:06',
                'updated_at' => '2018-04-28 12:20:06',
            ),
            441 => 
            array (
                'id' => 442,
                'song_id' => 101,
                'tag_id' => 70,
                'created_at' => '2018-04-28 12:20:06',
                'updated_at' => '2018-04-28 12:20:06',
            ),
            442 => 
            array (
                'id' => 443,
                'song_id' => 102,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:08',
                'updated_at' => '2018-04-28 12:20:08',
            ),
            443 => 
            array (
                'id' => 444,
                'song_id' => 102,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:08',
                'updated_at' => '2018-04-28 12:20:08',
            ),
            444 => 
            array (
                'id' => 445,
                'song_id' => 102,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:20:08',
                'updated_at' => '2018-04-28 12:20:08',
            ),
            445 => 
            array (
                'id' => 446,
                'song_id' => 102,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:08',
                'updated_at' => '2018-04-28 12:20:08',
            ),
            446 => 
            array (
                'id' => 447,
                'song_id' => 102,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:08',
                'updated_at' => '2018-04-28 12:20:08',
            ),
            447 => 
            array (
                'id' => 448,
                'song_id' => 103,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:20:09',
                'updated_at' => '2018-04-28 12:20:09',
            ),
            448 => 
            array (
                'id' => 449,
                'song_id' => 103,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:09',
                'updated_at' => '2018-04-28 12:20:09',
            ),
            449 => 
            array (
                'id' => 450,
                'song_id' => 103,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:20:09',
                'updated_at' => '2018-04-28 12:20:09',
            ),
            450 => 
            array (
                'id' => 451,
                'song_id' => 103,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:09',
                'updated_at' => '2018-04-28 12:20:09',
            ),
            451 => 
            array (
                'id' => 452,
                'song_id' => 103,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:09',
                'updated_at' => '2018-04-28 12:20:09',
            ),
            452 => 
            array (
                'id' => 453,
                'song_id' => 104,
                'tag_id' => 77,
                'created_at' => '2018-04-28 12:20:11',
                'updated_at' => '2018-04-28 12:20:11',
            ),
            453 => 
            array (
                'id' => 454,
                'song_id' => 104,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:11',
                'updated_at' => '2018-04-28 12:20:11',
            ),
            454 => 
            array (
                'id' => 455,
                'song_id' => 104,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:20:11',
                'updated_at' => '2018-04-28 12:20:11',
            ),
            455 => 
            array (
                'id' => 456,
                'song_id' => 104,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:11',
                'updated_at' => '2018-04-28 12:20:11',
            ),
            456 => 
            array (
                'id' => 457,
                'song_id' => 104,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:11',
                'updated_at' => '2018-04-28 12:20:11',
            ),
            457 => 
            array (
                'id' => 458,
                'song_id' => 105,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:12',
                'updated_at' => '2018-04-28 12:20:12',
            ),
            458 => 
            array (
                'id' => 459,
                'song_id' => 105,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:20:12',
                'updated_at' => '2018-04-28 12:20:12',
            ),
            459 => 
            array (
                'id' => 460,
                'song_id' => 105,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:12',
                'updated_at' => '2018-04-28 12:20:12',
            ),
            460 => 
            array (
                'id' => 461,
                'song_id' => 105,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:20:12',
                'updated_at' => '2018-04-28 12:20:12',
            ),
            461 => 
            array (
                'id' => 462,
                'song_id' => 105,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:12',
                'updated_at' => '2018-04-28 12:20:12',
            ),
            462 => 
            array (
                'id' => 463,
                'song_id' => 106,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:14',
                'updated_at' => '2018-04-28 12:20:14',
            ),
            463 => 
            array (
                'id' => 464,
                'song_id' => 106,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:20:14',
                'updated_at' => '2018-04-28 12:20:14',
            ),
            464 => 
            array (
                'id' => 465,
                'song_id' => 106,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:14',
                'updated_at' => '2018-04-28 12:20:14',
            ),
            465 => 
            array (
                'id' => 466,
                'song_id' => 106,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:20:14',
                'updated_at' => '2018-04-28 12:20:14',
            ),
            466 => 
            array (
                'id' => 467,
                'song_id' => 106,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:14',
                'updated_at' => '2018-04-28 12:20:14',
            ),
            467 => 
            array (
                'id' => 468,
                'song_id' => 107,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:16',
                'updated_at' => '2018-04-28 12:20:16',
            ),
            468 => 
            array (
                'id' => 469,
                'song_id' => 107,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:20:16',
                'updated_at' => '2018-04-28 12:20:16',
            ),
            469 => 
            array (
                'id' => 470,
                'song_id' => 107,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:16',
                'updated_at' => '2018-04-28 12:20:16',
            ),
            470 => 
            array (
                'id' => 471,
                'song_id' => 107,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:20:16',
                'updated_at' => '2018-04-28 12:20:16',
            ),
            471 => 
            array (
                'id' => 472,
                'song_id' => 107,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:16',
                'updated_at' => '2018-04-28 12:20:16',
            ),
            472 => 
            array (
                'id' => 473,
                'song_id' => 108,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2018-04-28 12:20:17',
            ),
            473 => 
            array (
                'id' => 474,
                'song_id' => 108,
                'tag_id' => 79,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2018-04-28 12:20:17',
            ),
            474 => 
            array (
                'id' => 475,
                'song_id' => 108,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2018-04-28 12:20:17',
            ),
            475 => 
            array (
                'id' => 476,
                'song_id' => 108,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2018-04-28 12:20:17',
            ),
            476 => 
            array (
                'id' => 477,
                'song_id' => 108,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:20:17',
                'updated_at' => '2018-04-28 12:20:17',
            ),
            477 => 
            array (
                'id' => 478,
                'song_id' => 109,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2018-04-28 12:20:18',
            ),
            478 => 
            array (
                'id' => 479,
                'song_id' => 109,
                'tag_id' => 81,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2018-04-28 12:20:18',
            ),
            479 => 
            array (
                'id' => 480,
                'song_id' => 109,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2018-04-28 12:20:18',
            ),
            480 => 
            array (
                'id' => 481,
                'song_id' => 109,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2018-04-28 12:20:18',
            ),
            481 => 
            array (
                'id' => 482,
                'song_id' => 109,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:18',
                'updated_at' => '2018-04-28 12:20:18',
            ),
            482 => 
            array (
                'id' => 483,
                'song_id' => 110,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:20',
                'updated_at' => '2018-04-28 12:20:20',
            ),
            483 => 
            array (
                'id' => 484,
                'song_id' => 110,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:20:20',
                'updated_at' => '2018-04-28 12:20:20',
            ),
            484 => 
            array (
                'id' => 485,
                'song_id' => 110,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:20',
                'updated_at' => '2018-04-28 12:20:20',
            ),
            485 => 
            array (
                'id' => 486,
                'song_id' => 110,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:20',
                'updated_at' => '2018-04-28 12:20:20',
            ),
            486 => 
            array (
                'id' => 487,
                'song_id' => 110,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:20:20',
                'updated_at' => '2018-04-28 12:20:20',
            ),
            487 => 
            array (
                'id' => 488,
                'song_id' => 111,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:22',
                'updated_at' => '2018-04-28 12:20:22',
            ),
            488 => 
            array (
                'id' => 489,
                'song_id' => 111,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:22',
                'updated_at' => '2018-04-28 12:20:22',
            ),
            489 => 
            array (
                'id' => 490,
                'song_id' => 111,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:20:22',
                'updated_at' => '2018-04-28 12:20:22',
            ),
            490 => 
            array (
                'id' => 491,
                'song_id' => 111,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:22',
                'updated_at' => '2018-04-28 12:20:22',
            ),
            491 => 
            array (
                'id' => 492,
                'song_id' => 112,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:23',
                'updated_at' => '2018-04-28 12:20:23',
            ),
            492 => 
            array (
                'id' => 493,
                'song_id' => 112,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:23',
                'updated_at' => '2018-04-28 12:20:23',
            ),
            493 => 
            array (
                'id' => 494,
                'song_id' => 112,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:20:23',
                'updated_at' => '2018-04-28 12:20:23',
            ),
            494 => 
            array (
                'id' => 495,
                'song_id' => 112,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:23',
                'updated_at' => '2018-04-28 12:20:23',
            ),
            495 => 
            array (
                'id' => 496,
                'song_id' => 113,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:20:25',
                'updated_at' => '2018-04-28 12:20:25',
            ),
            496 => 
            array (
                'id' => 497,
                'song_id' => 113,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:25',
                'updated_at' => '2018-04-28 12:20:25',
            ),
            497 => 
            array (
                'id' => 498,
                'song_id' => 113,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:20:25',
                'updated_at' => '2018-04-28 12:20:25',
            ),
            498 => 
            array (
                'id' => 499,
                'song_id' => 113,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:25',
                'updated_at' => '2018-04-28 12:20:25',
            ),
            499 => 
            array (
                'id' => 500,
                'song_id' => 113,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:25',
                'updated_at' => '2018-04-28 12:20:25',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 501,
                'song_id' => 114,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:20:26',
                'updated_at' => '2018-04-28 12:20:26',
            ),
            1 => 
            array (
                'id' => 502,
                'song_id' => 114,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:26',
                'updated_at' => '2018-04-28 12:20:26',
            ),
            2 => 
            array (
                'id' => 503,
                'song_id' => 114,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:26',
                'updated_at' => '2018-04-28 12:20:26',
            ),
            3 => 
            array (
                'id' => 504,
                'song_id' => 114,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:20:26',
                'updated_at' => '2018-04-28 12:20:26',
            ),
            4 => 
            array (
                'id' => 505,
                'song_id' => 115,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:20:27',
                'updated_at' => '2018-04-28 12:20:27',
            ),
            5 => 
            array (
                'id' => 506,
                'song_id' => 115,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:20:27',
                'updated_at' => '2018-04-28 12:20:27',
            ),
            6 => 
            array (
                'id' => 507,
                'song_id' => 115,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:27',
                'updated_at' => '2018-04-28 12:20:27',
            ),
            7 => 
            array (
                'id' => 508,
                'song_id' => 115,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:20:27',
                'updated_at' => '2018-04-28 12:20:27',
            ),
            8 => 
            array (
                'id' => 509,
                'song_id' => 116,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:29',
                'updated_at' => '2018-04-28 12:20:29',
            ),
            9 => 
            array (
                'id' => 510,
                'song_id' => 116,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:20:29',
                'updated_at' => '2018-04-28 12:20:29',
            ),
            10 => 
            array (
                'id' => 511,
                'song_id' => 116,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:20:29',
                'updated_at' => '2018-04-28 12:20:29',
            ),
            11 => 
            array (
                'id' => 512,
                'song_id' => 116,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:20:29',
                'updated_at' => '2018-04-28 12:20:29',
            ),
            12 => 
            array (
                'id' => 513,
                'song_id' => 116,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:20:29',
                'updated_at' => '2018-04-28 12:20:29',
            ),
            13 => 
            array (
                'id' => 514,
                'song_id' => 121,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2018-04-28 12:20:38',
            ),
            14 => 
            array (
                'id' => 515,
                'song_id' => 121,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2018-04-28 12:20:38',
            ),
            15 => 
            array (
                'id' => 516,
                'song_id' => 121,
                'tag_id' => 85,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2018-04-28 12:20:38',
            ),
            16 => 
            array (
                'id' => 517,
                'song_id' => 121,
                'tag_id' => 86,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2018-04-28 12:20:38',
            ),
            17 => 
            array (
                'id' => 518,
                'song_id' => 121,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:38',
                'updated_at' => '2018-04-28 12:20:38',
            ),
            18 => 
            array (
                'id' => 519,
                'song_id' => 122,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:40',
                'updated_at' => '2018-04-28 12:20:40',
            ),
            19 => 
            array (
                'id' => 520,
                'song_id' => 122,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:40',
                'updated_at' => '2018-04-28 12:20:40',
            ),
            20 => 
            array (
                'id' => 521,
                'song_id' => 122,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:20:40',
                'updated_at' => '2018-04-28 12:20:40',
            ),
            21 => 
            array (
                'id' => 522,
                'song_id' => 122,
                'tag_id' => 85,
                'created_at' => '2018-04-28 12:20:40',
                'updated_at' => '2018-04-28 12:20:40',
            ),
            22 => 
            array (
                'id' => 523,
                'song_id' => 122,
                'tag_id' => 37,
                'created_at' => '2018-04-28 12:20:40',
                'updated_at' => '2018-04-28 12:20:40',
            ),
            23 => 
            array (
                'id' => 524,
                'song_id' => 123,
                'tag_id' => 87,
                'created_at' => '2018-04-28 12:20:41',
                'updated_at' => '2018-04-28 12:20:41',
            ),
            24 => 
            array (
                'id' => 525,
                'song_id' => 123,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:41',
                'updated_at' => '2018-04-28 12:20:41',
            ),
            25 => 
            array (
                'id' => 526,
                'song_id' => 123,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:41',
                'updated_at' => '2018-04-28 12:20:41',
            ),
            26 => 
            array (
                'id' => 527,
                'song_id' => 123,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:41',
                'updated_at' => '2018-04-28 12:20:41',
            ),
            27 => 
            array (
                'id' => 528,
                'song_id' => 123,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:20:41',
                'updated_at' => '2018-04-28 12:20:41',
            ),
            28 => 
            array (
                'id' => 529,
                'song_id' => 124,
                'tag_id' => 88,
                'created_at' => '2018-04-28 12:20:43',
                'updated_at' => '2018-04-28 12:20:43',
            ),
            29 => 
            array (
                'id' => 530,
                'song_id' => 124,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:43',
                'updated_at' => '2018-04-28 12:20:43',
            ),
            30 => 
            array (
                'id' => 531,
                'song_id' => 124,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:43',
                'updated_at' => '2018-04-28 12:20:43',
            ),
            31 => 
            array (
                'id' => 532,
                'song_id' => 124,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:20:43',
                'updated_at' => '2018-04-28 12:20:43',
            ),
            32 => 
            array (
                'id' => 533,
                'song_id' => 124,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:43',
                'updated_at' => '2018-04-28 12:20:43',
            ),
            33 => 
            array (
                'id' => 534,
                'song_id' => 125,
                'tag_id' => 89,
                'created_at' => '2018-04-28 12:20:45',
                'updated_at' => '2018-04-28 12:20:45',
            ),
            34 => 
            array (
                'id' => 535,
                'song_id' => 125,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:45',
                'updated_at' => '2018-04-28 12:20:45',
            ),
            35 => 
            array (
                'id' => 536,
                'song_id' => 125,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:45',
                'updated_at' => '2018-04-28 12:20:45',
            ),
            36 => 
            array (
                'id' => 537,
                'song_id' => 125,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:45',
                'updated_at' => '2018-04-28 12:20:45',
            ),
            37 => 
            array (
                'id' => 538,
                'song_id' => 125,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:20:45',
                'updated_at' => '2018-04-28 12:20:45',
            ),
            38 => 
            array (
                'id' => 539,
                'song_id' => 126,
                'tag_id' => 90,
                'created_at' => '2018-04-28 12:20:46',
                'updated_at' => '2018-04-28 12:20:46',
            ),
            39 => 
            array (
                'id' => 540,
                'song_id' => 126,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:46',
                'updated_at' => '2018-04-28 12:20:46',
            ),
            40 => 
            array (
                'id' => 541,
                'song_id' => 126,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:46',
                'updated_at' => '2018-04-28 12:20:46',
            ),
            41 => 
            array (
                'id' => 542,
                'song_id' => 126,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:46',
                'updated_at' => '2018-04-28 12:20:46',
            ),
            42 => 
            array (
                'id' => 543,
                'song_id' => 126,
                'tag_id' => 89,
                'created_at' => '2018-04-28 12:20:46',
                'updated_at' => '2018-04-28 12:20:46',
            ),
            43 => 
            array (
                'id' => 544,
                'song_id' => 129,
                'tag_id' => 91,
                'created_at' => '2018-04-28 12:20:51',
                'updated_at' => '2018-04-28 12:20:51',
            ),
            44 => 
            array (
                'id' => 545,
                'song_id' => 129,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:51',
                'updated_at' => '2018-04-28 12:20:51',
            ),
            45 => 
            array (
                'id' => 546,
                'song_id' => 129,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:51',
                'updated_at' => '2018-04-28 12:20:51',
            ),
            46 => 
            array (
                'id' => 547,
                'song_id' => 129,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:51',
                'updated_at' => '2018-04-28 12:20:51',
            ),
            47 => 
            array (
                'id' => 548,
                'song_id' => 129,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:20:51',
                'updated_at' => '2018-04-28 12:20:51',
            ),
            48 => 
            array (
                'id' => 549,
                'song_id' => 130,
                'tag_id' => 92,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2018-04-28 12:20:52',
            ),
            49 => 
            array (
                'id' => 550,
                'song_id' => 130,
                'tag_id' => 93,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2018-04-28 12:20:52',
            ),
            50 => 
            array (
                'id' => 551,
                'song_id' => 130,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2018-04-28 12:20:52',
            ),
            51 => 
            array (
                'id' => 552,
                'song_id' => 130,
                'tag_id' => 84,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2018-04-28 12:20:52',
            ),
            52 => 
            array (
                'id' => 553,
                'song_id' => 130,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:52',
                'updated_at' => '2018-04-28 12:20:52',
            ),
            53 => 
            array (
                'id' => 554,
                'song_id' => 131,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:54',
                'updated_at' => '2018-04-28 12:20:54',
            ),
            54 => 
            array (
                'id' => 555,
                'song_id' => 131,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:20:54',
                'updated_at' => '2018-04-28 12:20:54',
            ),
            55 => 
            array (
                'id' => 556,
                'song_id' => 131,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:54',
                'updated_at' => '2018-04-28 12:20:54',
            ),
            56 => 
            array (
                'id' => 557,
                'song_id' => 131,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:20:54',
                'updated_at' => '2018-04-28 12:20:54',
            ),
            57 => 
            array (
                'id' => 558,
                'song_id' => 132,
                'tag_id' => 94,
                'created_at' => '2018-04-28 12:20:56',
                'updated_at' => '2018-04-28 12:20:56',
            ),
            58 => 
            array (
                'id' => 559,
                'song_id' => 132,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:20:56',
                'updated_at' => '2018-04-28 12:20:56',
            ),
            59 => 
            array (
                'id' => 560,
                'song_id' => 132,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:20:56',
                'updated_at' => '2018-04-28 12:20:56',
            ),
            60 => 
            array (
                'id' => 561,
                'song_id' => 132,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:20:56',
                'updated_at' => '2018-04-28 12:20:56',
            ),
            61 => 
            array (
                'id' => 562,
                'song_id' => 134,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2018-04-28 12:21:00',
            ),
            62 => 
            array (
                'id' => 563,
                'song_id' => 134,
                'tag_id' => 96,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2018-04-28 12:21:00',
            ),
            63 => 
            array (
                'id' => 564,
                'song_id' => 134,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2018-04-28 12:21:00',
            ),
            64 => 
            array (
                'id' => 565,
                'song_id' => 134,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2018-04-28 12:21:00',
            ),
            65 => 
            array (
                'id' => 566,
                'song_id' => 134,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:21:00',
                'updated_at' => '2018-04-28 12:21:00',
            ),
            66 => 
            array (
                'id' => 567,
                'song_id' => 135,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:01',
                'updated_at' => '2018-04-28 12:21:01',
            ),
            67 => 
            array (
                'id' => 568,
                'song_id' => 135,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:01',
                'updated_at' => '2018-04-28 12:21:01',
            ),
            68 => 
            array (
                'id' => 569,
                'song_id' => 135,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:01',
                'updated_at' => '2018-04-28 12:21:01',
            ),
            69 => 
            array (
                'id' => 570,
                'song_id' => 135,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:01',
                'updated_at' => '2018-04-28 12:21:01',
            ),
            70 => 
            array (
                'id' => 571,
                'song_id' => 135,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:21:01',
                'updated_at' => '2018-04-28 12:21:01',
            ),
            71 => 
            array (
                'id' => 572,
                'song_id' => 136,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:03',
                'updated_at' => '2018-04-28 12:21:03',
            ),
            72 => 
            array (
                'id' => 573,
                'song_id' => 136,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:03',
                'updated_at' => '2018-04-28 12:21:03',
            ),
            73 => 
            array (
                'id' => 574,
                'song_id' => 136,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:03',
                'updated_at' => '2018-04-28 12:21:03',
            ),
            74 => 
            array (
                'id' => 575,
                'song_id' => 136,
                'tag_id' => 96,
                'created_at' => '2018-04-28 12:21:03',
                'updated_at' => '2018-04-28 12:21:03',
            ),
            75 => 
            array (
                'id' => 576,
                'song_id' => 136,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:03',
                'updated_at' => '2018-04-28 12:21:03',
            ),
            76 => 
            array (
                'id' => 577,
                'song_id' => 138,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:06',
                'updated_at' => '2018-04-28 12:21:06',
            ),
            77 => 
            array (
                'id' => 578,
                'song_id' => 138,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:06',
                'updated_at' => '2018-04-28 12:21:06',
            ),
            78 => 
            array (
                'id' => 579,
                'song_id' => 138,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:06',
                'updated_at' => '2018-04-28 12:21:06',
            ),
            79 => 
            array (
                'id' => 580,
                'song_id' => 138,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:06',
                'updated_at' => '2018-04-28 12:21:06',
            ),
            80 => 
            array (
                'id' => 581,
                'song_id' => 138,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:21:06',
                'updated_at' => '2018-04-28 12:21:06',
            ),
            81 => 
            array (
                'id' => 582,
                'song_id' => 139,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:07',
                'updated_at' => '2018-04-28 12:21:07',
            ),
            82 => 
            array (
                'id' => 583,
                'song_id' => 139,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:07',
                'updated_at' => '2018-04-28 12:21:07',
            ),
            83 => 
            array (
                'id' => 584,
                'song_id' => 139,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:07',
                'updated_at' => '2018-04-28 12:21:07',
            ),
            84 => 
            array (
                'id' => 585,
                'song_id' => 139,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:07',
                'updated_at' => '2018-04-28 12:21:07',
            ),
            85 => 
            array (
                'id' => 586,
                'song_id' => 139,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:21:07',
                'updated_at' => '2018-04-28 12:21:07',
            ),
            86 => 
            array (
                'id' => 587,
                'song_id' => 140,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:21:08',
                'updated_at' => '2018-04-28 12:21:08',
            ),
            87 => 
            array (
                'id' => 588,
                'song_id' => 140,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:08',
                'updated_at' => '2018-04-28 12:21:08',
            ),
            88 => 
            array (
                'id' => 589,
                'song_id' => 140,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:08',
                'updated_at' => '2018-04-28 12:21:08',
            ),
            89 => 
            array (
                'id' => 590,
                'song_id' => 140,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:08',
                'updated_at' => '2018-04-28 12:21:08',
            ),
            90 => 
            array (
                'id' => 591,
                'song_id' => 140,
                'tag_id' => 96,
                'created_at' => '2018-04-28 12:21:08',
                'updated_at' => '2018-04-28 12:21:08',
            ),
            91 => 
            array (
                'id' => 592,
                'song_id' => 142,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:12',
                'updated_at' => '2018-04-28 12:21:12',
            ),
            92 => 
            array (
                'id' => 593,
                'song_id' => 142,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:12',
                'updated_at' => '2018-04-28 12:21:12',
            ),
            93 => 
            array (
                'id' => 594,
                'song_id' => 142,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:12',
                'updated_at' => '2018-04-28 12:21:12',
            ),
            94 => 
            array (
                'id' => 595,
                'song_id' => 142,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:12',
                'updated_at' => '2018-04-28 12:21:12',
            ),
            95 => 
            array (
                'id' => 596,
                'song_id' => 142,
                'tag_id' => 96,
                'created_at' => '2018-04-28 12:21:12',
                'updated_at' => '2018-04-28 12:21:12',
            ),
            96 => 
            array (
                'id' => 597,
                'song_id' => 143,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:13',
                'updated_at' => '2018-04-28 12:21:13',
            ),
            97 => 
            array (
                'id' => 598,
                'song_id' => 143,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:21:13',
                'updated_at' => '2018-04-28 12:21:13',
            ),
            98 => 
            array (
                'id' => 599,
                'song_id' => 143,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:13',
                'updated_at' => '2018-04-28 12:21:13',
            ),
            99 => 
            array (
                'id' => 600,
                'song_id' => 143,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:13',
                'updated_at' => '2018-04-28 12:21:13',
            ),
            100 => 
            array (
                'id' => 601,
                'song_id' => 143,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:21:13',
                'updated_at' => '2018-04-28 12:21:13',
            ),
            101 => 
            array (
                'id' => 602,
                'song_id' => 145,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:21:16',
                'updated_at' => '2018-04-28 12:21:16',
            ),
            102 => 
            array (
                'id' => 603,
                'song_id' => 145,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:16',
                'updated_at' => '2018-04-28 12:21:16',
            ),
            103 => 
            array (
                'id' => 604,
                'song_id' => 145,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:21:16',
                'updated_at' => '2018-04-28 12:21:16',
            ),
            104 => 
            array (
                'id' => 605,
                'song_id' => 145,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:21:16',
                'updated_at' => '2018-04-28 12:21:16',
            ),
            105 => 
            array (
                'id' => 606,
                'song_id' => 145,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:21:16',
                'updated_at' => '2018-04-28 12:21:16',
            ),
            106 => 
            array (
                'id' => 607,
                'song_id' => 146,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:21:18',
                'updated_at' => '2018-04-28 12:21:18',
            ),
            107 => 
            array (
                'id' => 608,
                'song_id' => 146,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:21:18',
                'updated_at' => '2018-04-28 12:21:18',
            ),
            108 => 
            array (
                'id' => 609,
                'song_id' => 146,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:18',
                'updated_at' => '2018-04-28 12:21:18',
            ),
            109 => 
            array (
                'id' => 610,
                'song_id' => 146,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:21:18',
                'updated_at' => '2018-04-28 12:21:18',
            ),
            110 => 
            array (
                'id' => 611,
                'song_id' => 146,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:21:18',
                'updated_at' => '2018-04-28 12:21:18',
            ),
            111 => 
            array (
                'id' => 612,
                'song_id' => 147,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:21:19',
                'updated_at' => '2018-04-28 12:21:19',
            ),
            112 => 
            array (
                'id' => 613,
                'song_id' => 147,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:21:20',
                'updated_at' => '2018-04-28 12:21:20',
            ),
            113 => 
            array (
                'id' => 614,
                'song_id' => 147,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:20',
                'updated_at' => '2018-04-28 12:21:20',
            ),
            114 => 
            array (
                'id' => 615,
                'song_id' => 147,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:21:20',
                'updated_at' => '2018-04-28 12:21:20',
            ),
            115 => 
            array (
                'id' => 616,
                'song_id' => 147,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:21:20',
                'updated_at' => '2018-04-28 12:21:20',
            ),
            116 => 
            array (
                'id' => 617,
                'song_id' => 148,
                'tag_id' => 98,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2018-04-28 12:21:21',
            ),
            117 => 
            array (
                'id' => 618,
                'song_id' => 148,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2018-04-28 12:21:21',
            ),
            118 => 
            array (
                'id' => 619,
                'song_id' => 148,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2018-04-28 12:21:21',
            ),
            119 => 
            array (
                'id' => 620,
                'song_id' => 148,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2018-04-28 12:21:21',
            ),
            120 => 
            array (
                'id' => 621,
                'song_id' => 148,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:21:21',
                'updated_at' => '2018-04-28 12:21:21',
            ),
            121 => 
            array (
                'id' => 622,
                'song_id' => 149,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:21:22',
                'updated_at' => '2018-04-28 12:21:22',
            ),
            122 => 
            array (
                'id' => 623,
                'song_id' => 149,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:22',
                'updated_at' => '2018-04-28 12:21:22',
            ),
            123 => 
            array (
                'id' => 624,
                'song_id' => 149,
                'tag_id' => 98,
                'created_at' => '2018-04-28 12:21:22',
                'updated_at' => '2018-04-28 12:21:22',
            ),
            124 => 
            array (
                'id' => 625,
                'song_id' => 149,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:21:22',
                'updated_at' => '2018-04-28 12:21:22',
            ),
            125 => 
            array (
                'id' => 626,
                'song_id' => 150,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:24',
                'updated_at' => '2018-04-28 12:21:24',
            ),
            126 => 
            array (
                'id' => 627,
                'song_id' => 150,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:24',
                'updated_at' => '2018-04-28 12:21:24',
            ),
            127 => 
            array (
                'id' => 628,
                'song_id' => 150,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:24',
                'updated_at' => '2018-04-28 12:21:24',
            ),
            128 => 
            array (
                'id' => 629,
                'song_id' => 150,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:24',
                'updated_at' => '2018-04-28 12:21:24',
            ),
            129 => 
            array (
                'id' => 630,
                'song_id' => 151,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:26',
                'updated_at' => '2018-04-28 12:21:26',
            ),
            130 => 
            array (
                'id' => 631,
                'song_id' => 151,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:26',
                'updated_at' => '2018-04-28 12:21:26',
            ),
            131 => 
            array (
                'id' => 632,
                'song_id' => 151,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:26',
                'updated_at' => '2018-04-28 12:21:26',
            ),
            132 => 
            array (
                'id' => 633,
                'song_id' => 151,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:21:26',
                'updated_at' => '2018-04-28 12:21:26',
            ),
            133 => 
            array (
                'id' => 634,
                'song_id' => 152,
                'tag_id' => 100,
                'created_at' => '2018-04-28 12:21:27',
                'updated_at' => '2018-04-28 12:21:27',
            ),
            134 => 
            array (
                'id' => 635,
                'song_id' => 152,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:27',
                'updated_at' => '2018-04-28 12:21:27',
            ),
            135 => 
            array (
                'id' => 636,
                'song_id' => 152,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:27',
                'updated_at' => '2018-04-28 12:21:27',
            ),
            136 => 
            array (
                'id' => 637,
                'song_id' => 152,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:27',
                'updated_at' => '2018-04-28 12:21:27',
            ),
            137 => 
            array (
                'id' => 638,
                'song_id' => 153,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:29',
                'updated_at' => '2018-04-28 12:21:29',
            ),
            138 => 
            array (
                'id' => 639,
                'song_id' => 153,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:29',
                'updated_at' => '2018-04-28 12:21:29',
            ),
            139 => 
            array (
                'id' => 640,
                'song_id' => 153,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:29',
                'updated_at' => '2018-04-28 12:21:29',
            ),
            140 => 
            array (
                'id' => 641,
                'song_id' => 153,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:21:29',
                'updated_at' => '2018-04-28 12:21:29',
            ),
            141 => 
            array (
                'id' => 642,
                'song_id' => 154,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:30',
                'updated_at' => '2018-04-28 12:21:30',
            ),
            142 => 
            array (
                'id' => 643,
                'song_id' => 154,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:30',
                'updated_at' => '2018-04-28 12:21:30',
            ),
            143 => 
            array (
                'id' => 644,
                'song_id' => 154,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:30',
                'updated_at' => '2018-04-28 12:21:30',
            ),
            144 => 
            array (
                'id' => 645,
                'song_id' => 154,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:30',
                'updated_at' => '2018-04-28 12:21:30',
            ),
            145 => 
            array (
                'id' => 646,
                'song_id' => 155,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:21:31',
                'updated_at' => '2018-04-28 12:21:31',
            ),
            146 => 
            array (
                'id' => 647,
                'song_id' => 155,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:32',
                'updated_at' => '2018-04-28 12:21:32',
            ),
            147 => 
            array (
                'id' => 648,
                'song_id' => 155,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:21:32',
                'updated_at' => '2018-04-28 12:21:32',
            ),
            148 => 
            array (
                'id' => 649,
                'song_id' => 155,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:32',
                'updated_at' => '2018-04-28 12:21:32',
            ),
            149 => 
            array (
                'id' => 650,
                'song_id' => 156,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:33',
                'updated_at' => '2018-04-28 12:21:33',
            ),
            150 => 
            array (
                'id' => 651,
                'song_id' => 156,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:33',
                'updated_at' => '2018-04-28 12:21:33',
            ),
            151 => 
            array (
                'id' => 652,
                'song_id' => 156,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:33',
                'updated_at' => '2018-04-28 12:21:33',
            ),
            152 => 
            array (
                'id' => 653,
                'song_id' => 156,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:21:33',
                'updated_at' => '2018-04-28 12:21:33',
            ),
            153 => 
            array (
                'id' => 654,
                'song_id' => 156,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:33',
                'updated_at' => '2018-04-28 12:21:33',
            ),
            154 => 
            array (
                'id' => 655,
                'song_id' => 157,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:34',
                'updated_at' => '2018-04-28 12:21:34',
            ),
            155 => 
            array (
                'id' => 656,
                'song_id' => 157,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:21:34',
                'updated_at' => '2018-04-28 12:21:34',
            ),
            156 => 
            array (
                'id' => 657,
                'song_id' => 157,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:34',
                'updated_at' => '2018-04-28 12:21:34',
            ),
            157 => 
            array (
                'id' => 658,
                'song_id' => 157,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:21:34',
                'updated_at' => '2018-04-28 12:21:34',
            ),
            158 => 
            array (
                'id' => 659,
                'song_id' => 158,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:36',
                'updated_at' => '2018-04-28 12:21:36',
            ),
            159 => 
            array (
                'id' => 660,
                'song_id' => 158,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:21:36',
                'updated_at' => '2018-04-28 12:21:36',
            ),
            160 => 
            array (
                'id' => 661,
                'song_id' => 158,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:36',
                'updated_at' => '2018-04-28 12:21:36',
            ),
            161 => 
            array (
                'id' => 662,
                'song_id' => 158,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:36',
                'updated_at' => '2018-04-28 12:21:36',
            ),
            162 => 
            array (
                'id' => 663,
                'song_id' => 159,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:38',
                'updated_at' => '2018-04-28 12:21:38',
            ),
            163 => 
            array (
                'id' => 664,
                'song_id' => 159,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:38',
                'updated_at' => '2018-04-28 12:21:38',
            ),
            164 => 
            array (
                'id' => 665,
                'song_id' => 159,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:38',
                'updated_at' => '2018-04-28 12:21:38',
            ),
            165 => 
            array (
                'id' => 666,
                'song_id' => 159,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:38',
                'updated_at' => '2018-04-28 12:21:38',
            ),
            166 => 
            array (
                'id' => 667,
                'song_id' => 160,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:39',
                'updated_at' => '2018-04-28 12:21:39',
            ),
            167 => 
            array (
                'id' => 668,
                'song_id' => 160,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:39',
                'updated_at' => '2018-04-28 12:21:39',
            ),
            168 => 
            array (
                'id' => 669,
                'song_id' => 160,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:21:39',
                'updated_at' => '2018-04-28 12:21:39',
            ),
            169 => 
            array (
                'id' => 670,
                'song_id' => 160,
                'tag_id' => 37,
                'created_at' => '2018-04-28 12:21:39',
                'updated_at' => '2018-04-28 12:21:39',
            ),
            170 => 
            array (
                'id' => 671,
                'song_id' => 161,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:40',
                'updated_at' => '2018-04-28 12:21:40',
            ),
            171 => 
            array (
                'id' => 672,
                'song_id' => 161,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:40',
                'updated_at' => '2018-04-28 12:21:40',
            ),
            172 => 
            array (
                'id' => 673,
                'song_id' => 161,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:40',
                'updated_at' => '2018-04-28 12:21:40',
            ),
            173 => 
            array (
                'id' => 674,
                'song_id' => 161,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:21:40',
                'updated_at' => '2018-04-28 12:21:40',
            ),
            174 => 
            array (
                'id' => 675,
                'song_id' => 161,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:40',
                'updated_at' => '2018-04-28 12:21:40',
            ),
            175 => 
            array (
                'id' => 676,
                'song_id' => 162,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:42',
                'updated_at' => '2018-04-28 12:21:42',
            ),
            176 => 
            array (
                'id' => 677,
                'song_id' => 162,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:42',
                'updated_at' => '2018-04-28 12:21:42',
            ),
            177 => 
            array (
                'id' => 678,
                'song_id' => 162,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:42',
                'updated_at' => '2018-04-28 12:21:42',
            ),
            178 => 
            array (
                'id' => 679,
                'song_id' => 162,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:21:42',
                'updated_at' => '2018-04-28 12:21:42',
            ),
            179 => 
            array (
                'id' => 680,
                'song_id' => 163,
                'tag_id' => 72,
                'created_at' => '2018-04-28 12:21:43',
                'updated_at' => '2018-04-28 12:21:43',
            ),
            180 => 
            array (
                'id' => 681,
                'song_id' => 163,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:43',
                'updated_at' => '2018-04-28 12:21:43',
            ),
            181 => 
            array (
                'id' => 682,
                'song_id' => 163,
                'tag_id' => 70,
                'created_at' => '2018-04-28 12:21:43',
                'updated_at' => '2018-04-28 12:21:43',
            ),
            182 => 
            array (
                'id' => 683,
                'song_id' => 163,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:21:43',
                'updated_at' => '2018-04-28 12:21:43',
            ),
            183 => 
            array (
                'id' => 684,
                'song_id' => 163,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:43',
                'updated_at' => '2018-04-28 12:21:43',
            ),
            184 => 
            array (
                'id' => 685,
                'song_id' => 164,
                'tag_id' => 102,
                'created_at' => '2018-04-28 12:21:45',
                'updated_at' => '2018-04-28 12:21:45',
            ),
            185 => 
            array (
                'id' => 686,
                'song_id' => 164,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:21:45',
                'updated_at' => '2018-04-28 12:21:45',
            ),
            186 => 
            array (
                'id' => 687,
                'song_id' => 164,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:21:45',
                'updated_at' => '2018-04-28 12:21:45',
            ),
            187 => 
            array (
                'id' => 688,
                'song_id' => 164,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:45',
                'updated_at' => '2018-04-28 12:21:45',
            ),
            188 => 
            array (
                'id' => 689,
                'song_id' => 164,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:45',
                'updated_at' => '2018-04-28 12:21:45',
            ),
            189 => 
            array (
                'id' => 690,
                'song_id' => 165,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2018-04-28 12:21:46',
            ),
            190 => 
            array (
                'id' => 691,
                'song_id' => 165,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2018-04-28 12:21:46',
            ),
            191 => 
            array (
                'id' => 692,
                'song_id' => 165,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2018-04-28 12:21:46',
            ),
            192 => 
            array (
                'id' => 693,
                'song_id' => 165,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:21:46',
                'updated_at' => '2018-04-28 12:21:46',
            ),
            193 => 
            array (
                'id' => 694,
                'song_id' => 166,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:21:48',
                'updated_at' => '2018-04-28 12:21:48',
            ),
            194 => 
            array (
                'id' => 695,
                'song_id' => 166,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:48',
                'updated_at' => '2018-04-28 12:21:48',
            ),
            195 => 
            array (
                'id' => 696,
                'song_id' => 166,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:48',
                'updated_at' => '2018-04-28 12:21:48',
            ),
            196 => 
            array (
                'id' => 697,
                'song_id' => 166,
                'tag_id' => 75,
                'created_at' => '2018-04-28 12:21:48',
                'updated_at' => '2018-04-28 12:21:48',
            ),
            197 => 
            array (
                'id' => 698,
                'song_id' => 166,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:21:48',
                'updated_at' => '2018-04-28 12:21:48',
            ),
            198 => 
            array (
                'id' => 699,
                'song_id' => 167,
                'tag_id' => 107,
                'created_at' => '2018-04-28 12:21:49',
                'updated_at' => '2018-04-28 12:21:49',
            ),
            199 => 
            array (
                'id' => 700,
                'song_id' => 167,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:21:49',
                'updated_at' => '2018-04-28 12:21:49',
            ),
            200 => 
            array (
                'id' => 701,
                'song_id' => 167,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:49',
                'updated_at' => '2018-04-28 12:21:49',
            ),
            201 => 
            array (
                'id' => 702,
                'song_id' => 167,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:49',
                'updated_at' => '2018-04-28 12:21:49',
            ),
            202 => 
            array (
                'id' => 703,
                'song_id' => 167,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:21:49',
                'updated_at' => '2018-04-28 12:21:49',
            ),
            203 => 
            array (
                'id' => 704,
                'song_id' => 168,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:50',
                'updated_at' => '2018-04-28 12:21:50',
            ),
            204 => 
            array (
                'id' => 705,
                'song_id' => 168,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:21:50',
                'updated_at' => '2018-04-28 12:21:50',
            ),
            205 => 
            array (
                'id' => 706,
                'song_id' => 168,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:21:50',
                'updated_at' => '2018-04-28 12:21:50',
            ),
            206 => 
            array (
                'id' => 707,
                'song_id' => 168,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:21:50',
                'updated_at' => '2018-04-28 12:21:50',
            ),
            207 => 
            array (
                'id' => 708,
                'song_id' => 168,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:50',
                'updated_at' => '2018-04-28 12:21:50',
            ),
            208 => 
            array (
                'id' => 709,
                'song_id' => 169,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:52',
                'updated_at' => '2018-04-28 12:21:52',
            ),
            209 => 
            array (
                'id' => 710,
                'song_id' => 169,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:52',
                'updated_at' => '2018-04-28 12:21:52',
            ),
            210 => 
            array (
                'id' => 711,
                'song_id' => 169,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:52',
                'updated_at' => '2018-04-28 12:21:52',
            ),
            211 => 
            array (
                'id' => 712,
                'song_id' => 169,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:52',
                'updated_at' => '2018-04-28 12:21:52',
            ),
            212 => 
            array (
                'id' => 713,
                'song_id' => 170,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:53',
                'updated_at' => '2018-04-28 12:21:53',
            ),
            213 => 
            array (
                'id' => 714,
                'song_id' => 170,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:53',
                'updated_at' => '2018-04-28 12:21:53',
            ),
            214 => 
            array (
                'id' => 715,
                'song_id' => 170,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:53',
                'updated_at' => '2018-04-28 12:21:53',
            ),
            215 => 
            array (
                'id' => 716,
                'song_id' => 170,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:53',
                'updated_at' => '2018-04-28 12:21:53',
            ),
            216 => 
            array (
                'id' => 717,
                'song_id' => 171,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:55',
                'updated_at' => '2018-04-28 12:21:55',
            ),
            217 => 
            array (
                'id' => 718,
                'song_id' => 171,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:55',
                'updated_at' => '2018-04-28 12:21:55',
            ),
            218 => 
            array (
                'id' => 719,
                'song_id' => 171,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:55',
                'updated_at' => '2018-04-28 12:21:55',
            ),
            219 => 
            array (
                'id' => 720,
                'song_id' => 171,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:55',
                'updated_at' => '2018-04-28 12:21:55',
            ),
            220 => 
            array (
                'id' => 721,
                'song_id' => 172,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:56',
                'updated_at' => '2018-04-28 12:21:56',
            ),
            221 => 
            array (
                'id' => 722,
                'song_id' => 172,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:56',
                'updated_at' => '2018-04-28 12:21:56',
            ),
            222 => 
            array (
                'id' => 723,
                'song_id' => 172,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:56',
                'updated_at' => '2018-04-28 12:21:56',
            ),
            223 => 
            array (
                'id' => 724,
                'song_id' => 172,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:56',
                'updated_at' => '2018-04-28 12:21:56',
            ),
            224 => 
            array (
                'id' => 725,
                'song_id' => 173,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:21:59',
                'updated_at' => '2018-04-28 12:21:59',
            ),
            225 => 
            array (
                'id' => 726,
                'song_id' => 173,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:21:59',
                'updated_at' => '2018-04-28 12:21:59',
            ),
            226 => 
            array (
                'id' => 727,
                'song_id' => 173,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:21:59',
                'updated_at' => '2018-04-28 12:21:59',
            ),
            227 => 
            array (
                'id' => 728,
                'song_id' => 173,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:21:59',
                'updated_at' => '2018-04-28 12:21:59',
            ),
            228 => 
            array (
                'id' => 729,
                'song_id' => 175,
                'tag_id' => 108,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2018-04-28 12:22:01',
            ),
            229 => 
            array (
                'id' => 730,
                'song_id' => 175,
                'tag_id' => 109,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2018-04-28 12:22:01',
            ),
            230 => 
            array (
                'id' => 731,
                'song_id' => 175,
                'tag_id' => 110,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2018-04-28 12:22:01',
            ),
            231 => 
            array (
                'id' => 732,
                'song_id' => 175,
                'tag_id' => 111,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2018-04-28 12:22:01',
            ),
            232 => 
            array (
                'id' => 733,
                'song_id' => 175,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:22:01',
                'updated_at' => '2018-04-28 12:22:01',
            ),
            233 => 
            array (
                'id' => 734,
                'song_id' => 176,
                'tag_id' => 112,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2018-04-28 12:22:03',
            ),
            234 => 
            array (
                'id' => 735,
                'song_id' => 176,
                'tag_id' => 113,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2018-04-28 12:22:03',
            ),
            235 => 
            array (
                'id' => 736,
                'song_id' => 176,
                'tag_id' => 114,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2018-04-28 12:22:03',
            ),
            236 => 
            array (
                'id' => 737,
                'song_id' => 176,
                'tag_id' => 115,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2018-04-28 12:22:03',
            ),
            237 => 
            array (
                'id' => 738,
                'song_id' => 176,
                'tag_id' => 108,
                'created_at' => '2018-04-28 12:22:03',
                'updated_at' => '2018-04-28 12:22:03',
            ),
            238 => 
            array (
                'id' => 739,
                'song_id' => 177,
                'tag_id' => 116,
                'created_at' => '2018-04-28 12:22:05',
                'updated_at' => '2018-04-28 12:22:05',
            ),
            239 => 
            array (
                'id' => 740,
                'song_id' => 177,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:22:05',
                'updated_at' => '2018-04-28 12:22:05',
            ),
            240 => 
            array (
                'id' => 741,
                'song_id' => 177,
                'tag_id' => 108,
                'created_at' => '2018-04-28 12:22:05',
                'updated_at' => '2018-04-28 12:22:05',
            ),
            241 => 
            array (
                'id' => 742,
                'song_id' => 178,
                'tag_id' => 117,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2018-04-28 12:22:06',
            ),
            242 => 
            array (
                'id' => 743,
                'song_id' => 178,
                'tag_id' => 118,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2018-04-28 12:22:06',
            ),
            243 => 
            array (
                'id' => 744,
                'song_id' => 178,
                'tag_id' => 108,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2018-04-28 12:22:06',
            ),
            244 => 
            array (
                'id' => 745,
                'song_id' => 178,
                'tag_id' => 114,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2018-04-28 12:22:06',
            ),
            245 => 
            array (
                'id' => 746,
                'song_id' => 178,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:22:06',
                'updated_at' => '2018-04-28 12:22:06',
            ),
            246 => 
            array (
                'id' => 747,
                'song_id' => 180,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2018-04-28 12:22:09',
            ),
            247 => 
            array (
                'id' => 748,
                'song_id' => 180,
                'tag_id' => 120,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2018-04-28 12:22:09',
            ),
            248 => 
            array (
                'id' => 749,
                'song_id' => 180,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2018-04-28 12:22:09',
            ),
            249 => 
            array (
                'id' => 750,
                'song_id' => 180,
                'tag_id' => 81,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2018-04-28 12:22:09',
            ),
            250 => 
            array (
                'id' => 751,
                'song_id' => 180,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:09',
                'updated_at' => '2018-04-28 12:22:09',
            ),
            251 => 
            array (
                'id' => 752,
                'song_id' => 181,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:10',
                'updated_at' => '2018-04-28 12:22:10',
            ),
            252 => 
            array (
                'id' => 753,
                'song_id' => 181,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:10',
                'updated_at' => '2018-04-28 12:22:10',
            ),
            253 => 
            array (
                'id' => 754,
                'song_id' => 181,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:10',
                'updated_at' => '2018-04-28 12:22:10',
            ),
            254 => 
            array (
                'id' => 755,
                'song_id' => 181,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:22:10',
                'updated_at' => '2018-04-28 12:22:10',
            ),
            255 => 
            array (
                'id' => 756,
                'song_id' => 181,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:22:10',
                'updated_at' => '2018-04-28 12:22:10',
            ),
            256 => 
            array (
                'id' => 757,
                'song_id' => 182,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:12',
                'updated_at' => '2018-04-28 12:22:12',
            ),
            257 => 
            array (
                'id' => 758,
                'song_id' => 182,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:12',
                'updated_at' => '2018-04-28 12:22:12',
            ),
            258 => 
            array (
                'id' => 759,
                'song_id' => 182,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:12',
                'updated_at' => '2018-04-28 12:22:12',
            ),
            259 => 
            array (
                'id' => 760,
                'song_id' => 182,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:22:12',
                'updated_at' => '2018-04-28 12:22:12',
            ),
            260 => 
            array (
                'id' => 761,
                'song_id' => 182,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:22:12',
                'updated_at' => '2018-04-28 12:22:12',
            ),
            261 => 
            array (
                'id' => 762,
                'song_id' => 183,
                'tag_id' => 121,
                'created_at' => '2018-04-28 12:22:13',
                'updated_at' => '2018-04-28 12:22:13',
            ),
            262 => 
            array (
                'id' => 763,
                'song_id' => 183,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:13',
                'updated_at' => '2018-04-28 12:22:13',
            ),
            263 => 
            array (
                'id' => 764,
                'song_id' => 183,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:22:13',
                'updated_at' => '2018-04-28 12:22:13',
            ),
            264 => 
            array (
                'id' => 765,
                'song_id' => 183,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:13',
                'updated_at' => '2018-04-28 12:22:13',
            ),
            265 => 
            array (
                'id' => 766,
                'song_id' => 183,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:13',
                'updated_at' => '2018-04-28 12:22:13',
            ),
            266 => 
            array (
                'id' => 767,
                'song_id' => 184,
                'tag_id' => 122,
                'created_at' => '2018-04-28 12:22:15',
                'updated_at' => '2018-04-28 12:22:15',
            ),
            267 => 
            array (
                'id' => 768,
                'song_id' => 184,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:15',
                'updated_at' => '2018-04-28 12:22:15',
            ),
            268 => 
            array (
                'id' => 769,
                'song_id' => 184,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:15',
                'updated_at' => '2018-04-28 12:22:15',
            ),
            269 => 
            array (
                'id' => 770,
                'song_id' => 184,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:15',
                'updated_at' => '2018-04-28 12:22:15',
            ),
            270 => 
            array (
                'id' => 771,
                'song_id' => 184,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:22:15',
                'updated_at' => '2018-04-28 12:22:15',
            ),
            271 => 
            array (
                'id' => 772,
                'song_id' => 185,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:16',
                'updated_at' => '2018-04-28 12:22:16',
            ),
            272 => 
            array (
                'id' => 773,
                'song_id' => 185,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:16',
                'updated_at' => '2018-04-28 12:22:16',
            ),
            273 => 
            array (
                'id' => 774,
                'song_id' => 185,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:16',
                'updated_at' => '2018-04-28 12:22:16',
            ),
            274 => 
            array (
                'id' => 775,
                'song_id' => 185,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:22:16',
                'updated_at' => '2018-04-28 12:22:16',
            ),
            275 => 
            array (
                'id' => 776,
                'song_id' => 185,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:22:16',
                'updated_at' => '2018-04-28 12:22:16',
            ),
            276 => 
            array (
                'id' => 777,
                'song_id' => 187,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:19',
                'updated_at' => '2018-04-28 12:22:19',
            ),
            277 => 
            array (
                'id' => 778,
                'song_id' => 187,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:19',
                'updated_at' => '2018-04-28 12:22:19',
            ),
            278 => 
            array (
                'id' => 779,
                'song_id' => 187,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:22:19',
                'updated_at' => '2018-04-28 12:22:19',
            ),
            279 => 
            array (
                'id' => 780,
                'song_id' => 187,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:19',
                'updated_at' => '2018-04-28 12:22:19',
            ),
            280 => 
            array (
                'id' => 781,
                'song_id' => 187,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:22:19',
                'updated_at' => '2018-04-28 12:22:19',
            ),
            281 => 
            array (
                'id' => 782,
                'song_id' => 188,
                'tag_id' => 123,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2018-04-28 12:22:20',
            ),
            282 => 
            array (
                'id' => 783,
                'song_id' => 188,
                'tag_id' => 124,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2018-04-28 12:22:20',
            ),
            283 => 
            array (
                'id' => 784,
                'song_id' => 188,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2018-04-28 12:22:20',
            ),
            284 => 
            array (
                'id' => 785,
                'song_id' => 188,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2018-04-28 12:22:20',
            ),
            285 => 
            array (
                'id' => 786,
                'song_id' => 188,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:22:20',
                'updated_at' => '2018-04-28 12:22:20',
            ),
            286 => 
            array (
                'id' => 787,
                'song_id' => 189,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:22:22',
                'updated_at' => '2018-04-28 12:22:22',
            ),
            287 => 
            array (
                'id' => 788,
                'song_id' => 189,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:22',
                'updated_at' => '2018-04-28 12:22:22',
            ),
            288 => 
            array (
                'id' => 789,
                'song_id' => 189,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:22',
                'updated_at' => '2018-04-28 12:22:22',
            ),
            289 => 
            array (
                'id' => 790,
                'song_id' => 189,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:22',
                'updated_at' => '2018-04-28 12:22:22',
            ),
            290 => 
            array (
                'id' => 791,
                'song_id' => 189,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:22:22',
                'updated_at' => '2018-04-28 12:22:22',
            ),
            291 => 
            array (
                'id' => 792,
                'song_id' => 190,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2018-04-28 12:22:23',
            ),
            292 => 
            array (
                'id' => 793,
                'song_id' => 190,
                'tag_id' => 127,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2018-04-28 12:22:23',
            ),
            293 => 
            array (
                'id' => 794,
                'song_id' => 190,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2018-04-28 12:22:23',
            ),
            294 => 
            array (
                'id' => 795,
                'song_id' => 190,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2018-04-28 12:22:23',
            ),
            295 => 
            array (
                'id' => 796,
                'song_id' => 190,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:23',
                'updated_at' => '2018-04-28 12:22:23',
            ),
            296 => 
            array (
                'id' => 797,
                'song_id' => 191,
                'tag_id' => 128,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2018-04-28 12:22:25',
            ),
            297 => 
            array (
                'id' => 798,
                'song_id' => 191,
                'tag_id' => 129,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2018-04-28 12:22:25',
            ),
            298 => 
            array (
                'id' => 799,
                'song_id' => 191,
                'tag_id' => 130,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2018-04-28 12:22:25',
            ),
            299 => 
            array (
                'id' => 800,
                'song_id' => 191,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2018-04-28 12:22:25',
            ),
            300 => 
            array (
                'id' => 801,
                'song_id' => 191,
                'tag_id' => 119,
                'created_at' => '2018-04-28 12:22:25',
                'updated_at' => '2018-04-28 12:22:25',
            ),
            301 => 
            array (
                'id' => 802,
                'song_id' => 192,
                'tag_id' => 131,
                'created_at' => '2018-04-28 12:22:27',
                'updated_at' => '2018-04-28 12:22:27',
            ),
            302 => 
            array (
                'id' => 803,
                'song_id' => 192,
                'tag_id' => 132,
                'created_at' => '2018-04-28 12:22:27',
                'updated_at' => '2018-04-28 12:22:27',
            ),
            303 => 
            array (
                'id' => 804,
                'song_id' => 192,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:22:27',
                'updated_at' => '2018-04-28 12:22:27',
            ),
            304 => 
            array (
                'id' => 805,
                'song_id' => 192,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:22:27',
                'updated_at' => '2018-04-28 12:22:27',
            ),
            305 => 
            array (
                'id' => 806,
                'song_id' => 193,
                'tag_id' => 133,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2018-04-28 12:22:28',
            ),
            306 => 
            array (
                'id' => 807,
                'song_id' => 193,
                'tag_id' => 134,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2018-04-28 12:22:28',
            ),
            307 => 
            array (
                'id' => 808,
                'song_id' => 193,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2018-04-28 12:22:28',
            ),
            308 => 
            array (
                'id' => 809,
                'song_id' => 193,
                'tag_id' => 131,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2018-04-28 12:22:28',
            ),
            309 => 
            array (
                'id' => 810,
                'song_id' => 193,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:22:28',
                'updated_at' => '2018-04-28 12:22:28',
            ),
            310 => 
            array (
                'id' => 811,
                'song_id' => 194,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:30',
                'updated_at' => '2018-04-28 12:22:30',
            ),
            311 => 
            array (
                'id' => 812,
                'song_id' => 194,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:30',
                'updated_at' => '2018-04-28 12:22:30',
            ),
            312 => 
            array (
                'id' => 813,
                'song_id' => 194,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:30',
                'updated_at' => '2018-04-28 12:22:30',
            ),
            313 => 
            array (
                'id' => 814,
                'song_id' => 194,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:30',
                'updated_at' => '2018-04-28 12:22:30',
            ),
            314 => 
            array (
                'id' => 815,
                'song_id' => 195,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:31',
                'updated_at' => '2018-04-28 12:22:31',
            ),
            315 => 
            array (
                'id' => 816,
                'song_id' => 195,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:31',
                'updated_at' => '2018-04-28 12:22:31',
            ),
            316 => 
            array (
                'id' => 817,
                'song_id' => 195,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:31',
                'updated_at' => '2018-04-28 12:22:31',
            ),
            317 => 
            array (
                'id' => 818,
                'song_id' => 195,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:31',
                'updated_at' => '2018-04-28 12:22:31',
            ),
            318 => 
            array (
                'id' => 819,
                'song_id' => 196,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:33',
                'updated_at' => '2018-04-28 12:22:33',
            ),
            319 => 
            array (
                'id' => 820,
                'song_id' => 196,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:33',
                'updated_at' => '2018-04-28 12:22:33',
            ),
            320 => 
            array (
                'id' => 821,
                'song_id' => 196,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:33',
                'updated_at' => '2018-04-28 12:22:33',
            ),
            321 => 
            array (
                'id' => 822,
                'song_id' => 196,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:33',
                'updated_at' => '2018-04-28 12:22:33',
            ),
            322 => 
            array (
                'id' => 823,
                'song_id' => 197,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:34',
                'updated_at' => '2018-04-28 12:22:34',
            ),
            323 => 
            array (
                'id' => 824,
                'song_id' => 197,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:34',
                'updated_at' => '2018-04-28 12:22:34',
            ),
            324 => 
            array (
                'id' => 825,
                'song_id' => 197,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:22:34',
                'updated_at' => '2018-04-28 12:22:34',
            ),
            325 => 
            array (
                'id' => 826,
                'song_id' => 197,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:34',
                'updated_at' => '2018-04-28 12:22:34',
            ),
            326 => 
            array (
                'id' => 827,
                'song_id' => 197,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:22:34',
                'updated_at' => '2018-04-28 12:22:34',
            ),
            327 => 
            array (
                'id' => 828,
                'song_id' => 198,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2018-04-28 12:22:36',
            ),
            328 => 
            array (
                'id' => 829,
                'song_id' => 198,
                'tag_id' => 136,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2018-04-28 12:22:36',
            ),
            329 => 
            array (
                'id' => 830,
                'song_id' => 198,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2018-04-28 12:22:36',
            ),
            330 => 
            array (
                'id' => 831,
                'song_id' => 198,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2018-04-28 12:22:36',
            ),
            331 => 
            array (
                'id' => 832,
                'song_id' => 198,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:22:36',
                'updated_at' => '2018-04-28 12:22:36',
            ),
            332 => 
            array (
                'id' => 833,
                'song_id' => 199,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:37',
                'updated_at' => '2018-04-28 12:22:37',
            ),
            333 => 
            array (
                'id' => 834,
                'song_id' => 199,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:37',
                'updated_at' => '2018-04-28 12:22:37',
            ),
            334 => 
            array (
                'id' => 835,
                'song_id' => 199,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:37',
                'updated_at' => '2018-04-28 12:22:37',
            ),
            335 => 
            array (
                'id' => 836,
                'song_id' => 199,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:37',
                'updated_at' => '2018-04-28 12:22:37',
            ),
            336 => 
            array (
                'id' => 837,
                'song_id' => 200,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:39',
                'updated_at' => '2018-04-28 12:22:39',
            ),
            337 => 
            array (
                'id' => 838,
                'song_id' => 200,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:39',
                'updated_at' => '2018-04-28 12:22:39',
            ),
            338 => 
            array (
                'id' => 839,
                'song_id' => 200,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:39',
                'updated_at' => '2018-04-28 12:22:39',
            ),
            339 => 
            array (
                'id' => 840,
                'song_id' => 200,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:39',
                'updated_at' => '2018-04-28 12:22:39',
            ),
            340 => 
            array (
                'id' => 841,
                'song_id' => 200,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:22:39',
                'updated_at' => '2018-04-28 12:22:39',
            ),
            341 => 
            array (
                'id' => 842,
                'song_id' => 201,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:22:40',
                'updated_at' => '2018-04-28 12:22:40',
            ),
            342 => 
            array (
                'id' => 843,
                'song_id' => 201,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:22:40',
                'updated_at' => '2018-04-28 12:22:40',
            ),
            343 => 
            array (
                'id' => 844,
                'song_id' => 201,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:40',
                'updated_at' => '2018-04-28 12:22:40',
            ),
            344 => 
            array (
                'id' => 845,
                'song_id' => 201,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:40',
                'updated_at' => '2018-04-28 12:22:40',
            ),
            345 => 
            array (
                'id' => 846,
                'song_id' => 203,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:22:43',
                'updated_at' => '2018-04-28 12:22:43',
            ),
            346 => 
            array (
                'id' => 847,
                'song_id' => 203,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:22:43',
                'updated_at' => '2018-04-28 12:22:43',
            ),
            347 => 
            array (
                'id' => 848,
                'song_id' => 203,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:22:43',
                'updated_at' => '2018-04-28 12:22:43',
            ),
            348 => 
            array (
                'id' => 849,
                'song_id' => 203,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:22:43',
                'updated_at' => '2018-04-28 12:22:43',
            ),
            349 => 
            array (
                'id' => 850,
                'song_id' => 203,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:22:43',
                'updated_at' => '2018-04-28 12:22:43',
            ),
            350 => 
            array (
                'id' => 851,
                'song_id' => 204,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:44',
                'updated_at' => '2018-04-28 12:22:44',
            ),
            351 => 
            array (
                'id' => 852,
                'song_id' => 204,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:22:44',
                'updated_at' => '2018-04-28 12:22:44',
            ),
            352 => 
            array (
                'id' => 853,
                'song_id' => 204,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:44',
                'updated_at' => '2018-04-28 12:22:44',
            ),
            353 => 
            array (
                'id' => 854,
                'song_id' => 204,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:22:44',
                'updated_at' => '2018-04-28 12:22:44',
            ),
            354 => 
            array (
                'id' => 855,
                'song_id' => 205,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:46',
                'updated_at' => '2018-04-28 12:22:46',
            ),
            355 => 
            array (
                'id' => 856,
                'song_id' => 205,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:22:46',
                'updated_at' => '2018-04-28 12:22:46',
            ),
            356 => 
            array (
                'id' => 857,
                'song_id' => 205,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:22:46',
                'updated_at' => '2018-04-28 12:22:46',
            ),
            357 => 
            array (
                'id' => 858,
                'song_id' => 205,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:46',
                'updated_at' => '2018-04-28 12:22:46',
            ),
            358 => 
            array (
                'id' => 859,
                'song_id' => 206,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:47',
                'updated_at' => '2018-04-28 12:22:47',
            ),
            359 => 
            array (
                'id' => 860,
                'song_id' => 206,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:22:47',
                'updated_at' => '2018-04-28 12:22:47',
            ),
            360 => 
            array (
                'id' => 861,
                'song_id' => 206,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:22:47',
                'updated_at' => '2018-04-28 12:22:47',
            ),
            361 => 
            array (
                'id' => 862,
                'song_id' => 206,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:47',
                'updated_at' => '2018-04-28 12:22:47',
            ),
            362 => 
            array (
                'id' => 863,
                'song_id' => 207,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:49',
                'updated_at' => '2018-04-28 12:22:49',
            ),
            363 => 
            array (
                'id' => 864,
                'song_id' => 207,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:22:49',
                'updated_at' => '2018-04-28 12:22:49',
            ),
            364 => 
            array (
                'id' => 865,
                'song_id' => 207,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:22:49',
                'updated_at' => '2018-04-28 12:22:49',
            ),
            365 => 
            array (
                'id' => 866,
                'song_id' => 207,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:49',
                'updated_at' => '2018-04-28 12:22:49',
            ),
            366 => 
            array (
                'id' => 867,
                'song_id' => 208,
                'tag_id' => 137,
                'created_at' => '2018-04-28 12:22:51',
                'updated_at' => '2018-04-28 12:22:51',
            ),
            367 => 
            array (
                'id' => 868,
                'song_id' => 208,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:22:51',
                'updated_at' => '2018-04-28 12:22:51',
            ),
            368 => 
            array (
                'id' => 869,
                'song_id' => 208,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:22:51',
                'updated_at' => '2018-04-28 12:22:51',
            ),
            369 => 
            array (
                'id' => 870,
                'song_id' => 208,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:51',
                'updated_at' => '2018-04-28 12:22:51',
            ),
            370 => 
            array (
                'id' => 871,
                'song_id' => 210,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:22:54',
                'updated_at' => '2018-04-28 12:22:54',
            ),
            371 => 
            array (
                'id' => 872,
                'song_id' => 210,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:22:54',
                'updated_at' => '2018-04-28 12:22:54',
            ),
            372 => 
            array (
                'id' => 873,
                'song_id' => 210,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:54',
                'updated_at' => '2018-04-28 12:22:54',
            ),
            373 => 
            array (
                'id' => 874,
                'song_id' => 210,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:22:54',
                'updated_at' => '2018-04-28 12:22:54',
            ),
            374 => 
            array (
                'id' => 875,
                'song_id' => 211,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:22:55',
                'updated_at' => '2018-04-28 12:22:55',
            ),
            375 => 
            array (
                'id' => 876,
                'song_id' => 211,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:22:55',
                'updated_at' => '2018-04-28 12:22:55',
            ),
            376 => 
            array (
                'id' => 877,
                'song_id' => 211,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:55',
                'updated_at' => '2018-04-28 12:22:55',
            ),
            377 => 
            array (
                'id' => 878,
                'song_id' => 211,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:22:55',
                'updated_at' => '2018-04-28 12:22:55',
            ),
            378 => 
            array (
                'id' => 879,
                'song_id' => 212,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:22:57',
                'updated_at' => '2018-04-28 12:22:57',
            ),
            379 => 
            array (
                'id' => 880,
                'song_id' => 212,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:22:57',
                'updated_at' => '2018-04-28 12:22:57',
            ),
            380 => 
            array (
                'id' => 881,
                'song_id' => 212,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:57',
                'updated_at' => '2018-04-28 12:22:57',
            ),
            381 => 
            array (
                'id' => 882,
                'song_id' => 212,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:22:57',
                'updated_at' => '2018-04-28 12:22:57',
            ),
            382 => 
            array (
                'id' => 883,
                'song_id' => 213,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:22:58',
                'updated_at' => '2018-04-28 12:22:58',
            ),
            383 => 
            array (
                'id' => 884,
                'song_id' => 213,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:22:58',
                'updated_at' => '2018-04-28 12:22:58',
            ),
            384 => 
            array (
                'id' => 885,
                'song_id' => 213,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:22:58',
                'updated_at' => '2018-04-28 12:22:58',
            ),
            385 => 
            array (
                'id' => 886,
                'song_id' => 213,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:22:58',
                'updated_at' => '2018-04-28 12:22:58',
            ),
            386 => 
            array (
                'id' => 887,
                'song_id' => 214,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:00',
                'updated_at' => '2018-04-28 12:23:00',
            ),
            387 => 
            array (
                'id' => 888,
                'song_id' => 214,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:00',
                'updated_at' => '2018-04-28 12:23:00',
            ),
            388 => 
            array (
                'id' => 889,
                'song_id' => 214,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:23:00',
                'updated_at' => '2018-04-28 12:23:00',
            ),
            389 => 
            array (
                'id' => 890,
                'song_id' => 214,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:00',
                'updated_at' => '2018-04-28 12:23:00',
            ),
            390 => 
            array (
                'id' => 891,
                'song_id' => 215,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:01',
                'updated_at' => '2018-04-28 12:23:01',
            ),
            391 => 
            array (
                'id' => 892,
                'song_id' => 215,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:01',
                'updated_at' => '2018-04-28 12:23:01',
            ),
            392 => 
            array (
                'id' => 893,
                'song_id' => 215,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:01',
                'updated_at' => '2018-04-28 12:23:01',
            ),
            393 => 
            array (
                'id' => 894,
                'song_id' => 215,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:23:01',
                'updated_at' => '2018-04-28 12:23:01',
            ),
            394 => 
            array (
                'id' => 895,
                'song_id' => 216,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:03',
                'updated_at' => '2018-04-28 12:23:03',
            ),
            395 => 
            array (
                'id' => 896,
                'song_id' => 216,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:03',
                'updated_at' => '2018-04-28 12:23:03',
            ),
            396 => 
            array (
                'id' => 897,
                'song_id' => 216,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:03',
                'updated_at' => '2018-04-28 12:23:03',
            ),
            397 => 
            array (
                'id' => 898,
                'song_id' => 216,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:23:03',
                'updated_at' => '2018-04-28 12:23:03',
            ),
            398 => 
            array (
                'id' => 899,
                'song_id' => 217,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:05',
                'updated_at' => '2018-04-28 12:23:05',
            ),
            399 => 
            array (
                'id' => 900,
                'song_id' => 217,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:05',
                'updated_at' => '2018-04-28 12:23:05',
            ),
            400 => 
            array (
                'id' => 901,
                'song_id' => 217,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:05',
                'updated_at' => '2018-04-28 12:23:05',
            ),
            401 => 
            array (
                'id' => 902,
                'song_id' => 217,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:23:05',
                'updated_at' => '2018-04-28 12:23:05',
            ),
            402 => 
            array (
                'id' => 903,
                'song_id' => 218,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:06',
                'updated_at' => '2018-04-28 12:23:06',
            ),
            403 => 
            array (
                'id' => 904,
                'song_id' => 218,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:06',
                'updated_at' => '2018-04-28 12:23:06',
            ),
            404 => 
            array (
                'id' => 905,
                'song_id' => 218,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:23:06',
                'updated_at' => '2018-04-28 12:23:06',
            ),
            405 => 
            array (
                'id' => 906,
                'song_id' => 218,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:06',
                'updated_at' => '2018-04-28 12:23:06',
            ),
            406 => 
            array (
                'id' => 907,
                'song_id' => 219,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:07',
                'updated_at' => '2018-04-28 12:23:07',
            ),
            407 => 
            array (
                'id' => 908,
                'song_id' => 219,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:07',
                'updated_at' => '2018-04-28 12:23:07',
            ),
            408 => 
            array (
                'id' => 909,
                'song_id' => 219,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:07',
                'updated_at' => '2018-04-28 12:23:07',
            ),
            409 => 
            array (
                'id' => 910,
                'song_id' => 219,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:23:07',
                'updated_at' => '2018-04-28 12:23:07',
            ),
            410 => 
            array (
                'id' => 911,
                'song_id' => 219,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:07',
                'updated_at' => '2018-04-28 12:23:07',
            ),
            411 => 
            array (
                'id' => 912,
                'song_id' => 220,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:23:09',
                'updated_at' => '2018-04-28 12:23:09',
            ),
            412 => 
            array (
                'id' => 913,
                'song_id' => 220,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:09',
                'updated_at' => '2018-04-28 12:23:09',
            ),
            413 => 
            array (
                'id' => 914,
                'song_id' => 220,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:23:09',
                'updated_at' => '2018-04-28 12:23:09',
            ),
            414 => 
            array (
                'id' => 915,
                'song_id' => 220,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:23:09',
                'updated_at' => '2018-04-28 12:23:09',
            ),
            415 => 
            array (
                'id' => 916,
                'song_id' => 220,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:23:09',
                'updated_at' => '2018-04-28 12:23:09',
            ),
            416 => 
            array (
                'id' => 917,
                'song_id' => 221,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:23:11',
                'updated_at' => '2018-04-28 12:23:11',
            ),
            417 => 
            array (
                'id' => 918,
                'song_id' => 221,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:23:11',
                'updated_at' => '2018-04-28 12:23:11',
            ),
            418 => 
            array (
                'id' => 919,
                'song_id' => 221,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:23:11',
                'updated_at' => '2018-04-28 12:23:11',
            ),
            419 => 
            array (
                'id' => 920,
                'song_id' => 221,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:11',
                'updated_at' => '2018-04-28 12:23:11',
            ),
            420 => 
            array (
                'id' => 921,
                'song_id' => 221,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:23:11',
                'updated_at' => '2018-04-28 12:23:11',
            ),
            421 => 
            array (
                'id' => 922,
                'song_id' => 222,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:23:12',
                'updated_at' => '2018-04-28 12:23:12',
            ),
            422 => 
            array (
                'id' => 923,
                'song_id' => 222,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:23:12',
                'updated_at' => '2018-04-28 12:23:12',
            ),
            423 => 
            array (
                'id' => 924,
                'song_id' => 222,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:12',
                'updated_at' => '2018-04-28 12:23:12',
            ),
            424 => 
            array (
                'id' => 925,
                'song_id' => 222,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:23:12',
                'updated_at' => '2018-04-28 12:23:12',
            ),
            425 => 
            array (
                'id' => 926,
                'song_id' => 222,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:23:12',
                'updated_at' => '2018-04-28 12:23:12',
            ),
            426 => 
            array (
                'id' => 927,
                'song_id' => 224,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:15',
                'updated_at' => '2018-04-28 12:23:15',
            ),
            427 => 
            array (
                'id' => 928,
                'song_id' => 224,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:23:15',
                'updated_at' => '2018-04-28 12:23:15',
            ),
            428 => 
            array (
                'id' => 929,
                'song_id' => 224,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:23:15',
                'updated_at' => '2018-04-28 12:23:15',
            ),
            429 => 
            array (
                'id' => 930,
                'song_id' => 224,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:23:15',
                'updated_at' => '2018-04-28 12:23:15',
            ),
            430 => 
            array (
                'id' => 931,
                'song_id' => 224,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:15',
                'updated_at' => '2018-04-28 12:23:15',
            ),
            431 => 
            array (
                'id' => 932,
                'song_id' => 225,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:23:17',
                'updated_at' => '2018-04-28 12:23:17',
            ),
            432 => 
            array (
                'id' => 933,
                'song_id' => 225,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:17',
                'updated_at' => '2018-04-28 12:23:17',
            ),
            433 => 
            array (
                'id' => 934,
                'song_id' => 225,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:23:17',
                'updated_at' => '2018-04-28 12:23:17',
            ),
            434 => 
            array (
                'id' => 935,
                'song_id' => 225,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:17',
                'updated_at' => '2018-04-28 12:23:17',
            ),
            435 => 
            array (
                'id' => 936,
                'song_id' => 225,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:17',
                'updated_at' => '2018-04-28 12:23:17',
            ),
            436 => 
            array (
                'id' => 937,
                'song_id' => 226,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:18',
                'updated_at' => '2018-04-28 12:23:18',
            ),
            437 => 
            array (
                'id' => 938,
                'song_id' => 226,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:23:18',
                'updated_at' => '2018-04-28 12:23:18',
            ),
            438 => 
            array (
                'id' => 939,
                'song_id' => 226,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:23:18',
                'updated_at' => '2018-04-28 12:23:18',
            ),
            439 => 
            array (
                'id' => 940,
                'song_id' => 226,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:18',
                'updated_at' => '2018-04-28 12:23:18',
            ),
            440 => 
            array (
                'id' => 941,
                'song_id' => 227,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:20',
                'updated_at' => '2018-04-28 12:23:20',
            ),
            441 => 
            array (
                'id' => 942,
                'song_id' => 227,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:23:20',
                'updated_at' => '2018-04-28 12:23:20',
            ),
            442 => 
            array (
                'id' => 943,
                'song_id' => 227,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:20',
                'updated_at' => '2018-04-28 12:23:20',
            ),
            443 => 
            array (
                'id' => 944,
                'song_id' => 227,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:20',
                'updated_at' => '2018-04-28 12:23:20',
            ),
            444 => 
            array (
                'id' => 945,
                'song_id' => 227,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:23:20',
                'updated_at' => '2018-04-28 12:23:20',
            ),
            445 => 
            array (
                'id' => 946,
                'song_id' => 229,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:22',
                'updated_at' => '2018-04-28 12:23:22',
            ),
            446 => 
            array (
                'id' => 947,
                'song_id' => 229,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:22',
                'updated_at' => '2018-04-28 12:23:22',
            ),
            447 => 
            array (
                'id' => 948,
                'song_id' => 229,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:22',
                'updated_at' => '2018-04-28 12:23:22',
            ),
            448 => 
            array (
                'id' => 949,
                'song_id' => 229,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:23:22',
                'updated_at' => '2018-04-28 12:23:22',
            ),
            449 => 
            array (
                'id' => 950,
                'song_id' => 230,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:24',
                'updated_at' => '2018-04-28 12:23:24',
            ),
            450 => 
            array (
                'id' => 951,
                'song_id' => 230,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:24',
                'updated_at' => '2018-04-28 12:23:24',
            ),
            451 => 
            array (
                'id' => 952,
                'song_id' => 230,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:24',
                'updated_at' => '2018-04-28 12:23:24',
            ),
            452 => 
            array (
                'id' => 953,
                'song_id' => 230,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:24',
                'updated_at' => '2018-04-28 12:23:24',
            ),
            453 => 
            array (
                'id' => 954,
                'song_id' => 231,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:25',
                'updated_at' => '2018-04-28 12:23:25',
            ),
            454 => 
            array (
                'id' => 955,
                'song_id' => 231,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:25',
                'updated_at' => '2018-04-28 12:23:25',
            ),
            455 => 
            array (
                'id' => 956,
                'song_id' => 231,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:25',
                'updated_at' => '2018-04-28 12:23:25',
            ),
            456 => 
            array (
                'id' => 957,
                'song_id' => 231,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:25',
                'updated_at' => '2018-04-28 12:23:25',
            ),
            457 => 
            array (
                'id' => 958,
                'song_id' => 233,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:28',
                'updated_at' => '2018-04-28 12:23:28',
            ),
            458 => 
            array (
                'id' => 959,
                'song_id' => 233,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:28',
                'updated_at' => '2018-04-28 12:23:28',
            ),
            459 => 
            array (
                'id' => 960,
                'song_id' => 233,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:28',
                'updated_at' => '2018-04-28 12:23:28',
            ),
            460 => 
            array (
                'id' => 961,
                'song_id' => 233,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:23:28',
                'updated_at' => '2018-04-28 12:23:28',
            ),
            461 => 
            array (
                'id' => 962,
                'song_id' => 234,
                'tag_id' => 142,
                'created_at' => '2018-04-28 12:23:30',
                'updated_at' => '2018-04-28 12:23:30',
            ),
            462 => 
            array (
                'id' => 963,
                'song_id' => 234,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:30',
                'updated_at' => '2018-04-28 12:23:30',
            ),
            463 => 
            array (
                'id' => 964,
                'song_id' => 234,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:30',
                'updated_at' => '2018-04-28 12:23:30',
            ),
            464 => 
            array (
                'id' => 965,
                'song_id' => 234,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:30',
                'updated_at' => '2018-04-28 12:23:30',
            ),
            465 => 
            array (
                'id' => 966,
                'song_id' => 235,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:31',
                'updated_at' => '2018-04-28 12:23:31',
            ),
            466 => 
            array (
                'id' => 967,
                'song_id' => 235,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:31',
                'updated_at' => '2018-04-28 12:23:31',
            ),
            467 => 
            array (
                'id' => 968,
                'song_id' => 235,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:31',
                'updated_at' => '2018-04-28 12:23:31',
            ),
            468 => 
            array (
                'id' => 969,
                'song_id' => 235,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:31',
                'updated_at' => '2018-04-28 12:23:31',
            ),
            469 => 
            array (
                'id' => 970,
                'song_id' => 236,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:33',
                'updated_at' => '2018-04-28 12:23:33',
            ),
            470 => 
            array (
                'id' => 971,
                'song_id' => 236,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:33',
                'updated_at' => '2018-04-28 12:23:33',
            ),
            471 => 
            array (
                'id' => 972,
                'song_id' => 236,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:33',
                'updated_at' => '2018-04-28 12:23:33',
            ),
            472 => 
            array (
                'id' => 973,
                'song_id' => 236,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:33',
                'updated_at' => '2018-04-28 12:23:33',
            ),
            473 => 
            array (
                'id' => 974,
                'song_id' => 237,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:34',
                'updated_at' => '2018-04-28 12:23:34',
            ),
            474 => 
            array (
                'id' => 975,
                'song_id' => 237,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:34',
                'updated_at' => '2018-04-28 12:23:34',
            ),
            475 => 
            array (
                'id' => 976,
                'song_id' => 237,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:34',
                'updated_at' => '2018-04-28 12:23:34',
            ),
            476 => 
            array (
                'id' => 977,
                'song_id' => 237,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:23:34',
                'updated_at' => '2018-04-28 12:23:34',
            ),
            477 => 
            array (
                'id' => 978,
                'song_id' => 238,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:23:36',
                'updated_at' => '2018-04-28 12:23:36',
            ),
            478 => 
            array (
                'id' => 979,
                'song_id' => 238,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:23:36',
                'updated_at' => '2018-04-28 12:23:36',
            ),
            479 => 
            array (
                'id' => 980,
                'song_id' => 238,
                'tag_id' => 141,
                'created_at' => '2018-04-28 12:23:36',
                'updated_at' => '2018-04-28 12:23:36',
            ),
            480 => 
            array (
                'id' => 981,
                'song_id' => 238,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:36',
                'updated_at' => '2018-04-28 12:23:36',
            ),
            481 => 
            array (
                'id' => 982,
                'song_id' => 239,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:37',
                'updated_at' => '2018-04-28 12:23:37',
            ),
            482 => 
            array (
                'id' => 983,
                'song_id' => 239,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:23:37',
                'updated_at' => '2018-04-28 12:23:37',
            ),
            483 => 
            array (
                'id' => 984,
                'song_id' => 239,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:23:37',
                'updated_at' => '2018-04-28 12:23:37',
            ),
            484 => 
            array (
                'id' => 985,
                'song_id' => 239,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:23:37',
                'updated_at' => '2018-04-28 12:23:37',
            ),
            485 => 
            array (
                'id' => 986,
                'song_id' => 239,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:23:37',
                'updated_at' => '2018-04-28 12:23:37',
            ),
            486 => 
            array (
                'id' => 987,
                'song_id' => 240,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:39',
                'updated_at' => '2018-04-28 12:23:39',
            ),
            487 => 
            array (
                'id' => 988,
                'song_id' => 240,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:39',
                'updated_at' => '2018-04-28 12:23:39',
            ),
            488 => 
            array (
                'id' => 989,
                'song_id' => 240,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:39',
                'updated_at' => '2018-04-28 12:23:39',
            ),
            489 => 
            array (
                'id' => 990,
                'song_id' => 240,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:39',
                'updated_at' => '2018-04-28 12:23:39',
            ),
            490 => 
            array (
                'id' => 991,
                'song_id' => 241,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:40',
                'updated_at' => '2018-04-28 12:23:40',
            ),
            491 => 
            array (
                'id' => 992,
                'song_id' => 241,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:40',
                'updated_at' => '2018-04-28 12:23:40',
            ),
            492 => 
            array (
                'id' => 993,
                'song_id' => 241,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:40',
                'updated_at' => '2018-04-28 12:23:40',
            ),
            493 => 
            array (
                'id' => 994,
                'song_id' => 241,
                'tag_id' => 55,
                'created_at' => '2018-04-28 12:23:40',
                'updated_at' => '2018-04-28 12:23:40',
            ),
            494 => 
            array (
                'id' => 995,
                'song_id' => 242,
                'tag_id' => 132,
                'created_at' => '2018-04-28 12:23:41',
                'updated_at' => '2018-04-28 12:23:41',
            ),
            495 => 
            array (
                'id' => 996,
                'song_id' => 242,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:41',
                'updated_at' => '2018-04-28 12:23:41',
            ),
            496 => 
            array (
                'id' => 997,
                'song_id' => 242,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:41',
                'updated_at' => '2018-04-28 12:23:41',
            ),
            497 => 
            array (
                'id' => 998,
                'song_id' => 242,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:23:41',
                'updated_at' => '2018-04-28 12:23:41',
            ),
            498 => 
            array (
                'id' => 999,
                'song_id' => 243,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:43',
                'updated_at' => '2018-04-28 12:23:43',
            ),
            499 => 
            array (
                'id' => 1000,
                'song_id' => 243,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:43',
                'updated_at' => '2018-04-28 12:23:43',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'song_id' => 243,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:43',
                'updated_at' => '2018-04-28 12:23:43',
            ),
            1 => 
            array (
                'id' => 1002,
                'song_id' => 243,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:23:43',
                'updated_at' => '2018-04-28 12:23:43',
            ),
            2 => 
            array (
                'id' => 1003,
                'song_id' => 244,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:45',
                'updated_at' => '2018-04-28 12:23:45',
            ),
            3 => 
            array (
                'id' => 1004,
                'song_id' => 244,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:45',
                'updated_at' => '2018-04-28 12:23:45',
            ),
            4 => 
            array (
                'id' => 1005,
                'song_id' => 244,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:45',
                'updated_at' => '2018-04-28 12:23:45',
            ),
            5 => 
            array (
                'id' => 1006,
                'song_id' => 244,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:23:45',
                'updated_at' => '2018-04-28 12:23:45',
            ),
            6 => 
            array (
                'id' => 1007,
                'song_id' => 245,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:23:46',
                'updated_at' => '2018-04-28 12:23:46',
            ),
            7 => 
            array (
                'id' => 1008,
                'song_id' => 245,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:46',
                'updated_at' => '2018-04-28 12:23:46',
            ),
            8 => 
            array (
                'id' => 1009,
                'song_id' => 245,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:46',
                'updated_at' => '2018-04-28 12:23:46',
            ),
            9 => 
            array (
                'id' => 1010,
                'song_id' => 245,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:46',
                'updated_at' => '2018-04-28 12:23:46',
            ),
            10 => 
            array (
                'id' => 1011,
                'song_id' => 246,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:49',
                'updated_at' => '2018-04-28 12:23:49',
            ),
            11 => 
            array (
                'id' => 1012,
                'song_id' => 246,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:23:49',
                'updated_at' => '2018-04-28 12:23:49',
            ),
            12 => 
            array (
                'id' => 1013,
                'song_id' => 246,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:49',
                'updated_at' => '2018-04-28 12:23:49',
            ),
            13 => 
            array (
                'id' => 1014,
                'song_id' => 246,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:49',
                'updated_at' => '2018-04-28 12:23:49',
            ),
            14 => 
            array (
                'id' => 1015,
                'song_id' => 247,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:50',
                'updated_at' => '2018-04-28 12:23:50',
            ),
            15 => 
            array (
                'id' => 1016,
                'song_id' => 247,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:50',
                'updated_at' => '2018-04-28 12:23:50',
            ),
            16 => 
            array (
                'id' => 1017,
                'song_id' => 247,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:23:50',
                'updated_at' => '2018-04-28 12:23:50',
            ),
            17 => 
            array (
                'id' => 1018,
                'song_id' => 247,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:50',
                'updated_at' => '2018-04-28 12:23:50',
            ),
            18 => 
            array (
                'id' => 1019,
                'song_id' => 248,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:52',
                'updated_at' => '2018-04-28 12:23:52',
            ),
            19 => 
            array (
                'id' => 1020,
                'song_id' => 248,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:52',
                'updated_at' => '2018-04-28 12:23:52',
            ),
            20 => 
            array (
                'id' => 1021,
                'song_id' => 248,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:52',
                'updated_at' => '2018-04-28 12:23:52',
            ),
            21 => 
            array (
                'id' => 1022,
                'song_id' => 248,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:52',
                'updated_at' => '2018-04-28 12:23:52',
            ),
            22 => 
            array (
                'id' => 1023,
                'song_id' => 249,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:53',
                'updated_at' => '2018-04-28 12:23:53',
            ),
            23 => 
            array (
                'id' => 1024,
                'song_id' => 249,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:53',
                'updated_at' => '2018-04-28 12:23:53',
            ),
            24 => 
            array (
                'id' => 1025,
                'song_id' => 249,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:53',
                'updated_at' => '2018-04-28 12:23:53',
            ),
            25 => 
            array (
                'id' => 1026,
                'song_id' => 249,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:23:53',
                'updated_at' => '2018-04-28 12:23:53',
            ),
            26 => 
            array (
                'id' => 1027,
                'song_id' => 250,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:23:55',
                'updated_at' => '2018-04-28 12:23:55',
            ),
            27 => 
            array (
                'id' => 1028,
                'song_id' => 250,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:23:55',
                'updated_at' => '2018-04-28 12:23:55',
            ),
            28 => 
            array (
                'id' => 1029,
                'song_id' => 250,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:23:55',
                'updated_at' => '2018-04-28 12:23:55',
            ),
            29 => 
            array (
                'id' => 1030,
                'song_id' => 250,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:23:55',
                'updated_at' => '2018-04-28 12:23:55',
            ),
            30 => 
            array (
                'id' => 1031,
                'song_id' => 251,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:56',
                'updated_at' => '2018-04-28 12:23:56',
            ),
            31 => 
            array (
                'id' => 1032,
                'song_id' => 251,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:23:56',
                'updated_at' => '2018-04-28 12:23:56',
            ),
            32 => 
            array (
                'id' => 1033,
                'song_id' => 251,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:23:56',
                'updated_at' => '2018-04-28 12:23:56',
            ),
            33 => 
            array (
                'id' => 1034,
                'song_id' => 251,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:56',
                'updated_at' => '2018-04-28 12:23:56',
            ),
            34 => 
            array (
                'id' => 1035,
                'song_id' => 251,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:23:56',
                'updated_at' => '2018-04-28 12:23:56',
            ),
            35 => 
            array (
                'id' => 1036,
                'song_id' => 252,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:58',
                'updated_at' => '2018-04-28 12:23:58',
            ),
            36 => 
            array (
                'id' => 1037,
                'song_id' => 252,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:23:58',
                'updated_at' => '2018-04-28 12:23:58',
            ),
            37 => 
            array (
                'id' => 1038,
                'song_id' => 252,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:23:58',
                'updated_at' => '2018-04-28 12:23:58',
            ),
            38 => 
            array (
                'id' => 1039,
                'song_id' => 252,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:23:58',
                'updated_at' => '2018-04-28 12:23:58',
            ),
            39 => 
            array (
                'id' => 1040,
                'song_id' => 252,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:58',
                'updated_at' => '2018-04-28 12:23:58',
            ),
            40 => 
            array (
                'id' => 1041,
                'song_id' => 253,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:23:59',
                'updated_at' => '2018-04-28 12:23:59',
            ),
            41 => 
            array (
                'id' => 1042,
                'song_id' => 253,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:23:59',
                'updated_at' => '2018-04-28 12:23:59',
            ),
            42 => 
            array (
                'id' => 1043,
                'song_id' => 253,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:23:59',
                'updated_at' => '2018-04-28 12:23:59',
            ),
            43 => 
            array (
                'id' => 1044,
                'song_id' => 253,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:23:59',
                'updated_at' => '2018-04-28 12:23:59',
            ),
            44 => 
            array (
                'id' => 1045,
                'song_id' => 253,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:23:59',
                'updated_at' => '2018-04-28 12:23:59',
            ),
            45 => 
            array (
                'id' => 1046,
                'song_id' => 254,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:01',
                'updated_at' => '2018-04-28 12:24:01',
            ),
            46 => 
            array (
                'id' => 1047,
                'song_id' => 254,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:01',
                'updated_at' => '2018-04-28 12:24:01',
            ),
            47 => 
            array (
                'id' => 1048,
                'song_id' => 254,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:24:01',
                'updated_at' => '2018-04-28 12:24:01',
            ),
            48 => 
            array (
                'id' => 1049,
                'song_id' => 254,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:24:01',
                'updated_at' => '2018-04-28 12:24:01',
            ),
            49 => 
            array (
                'id' => 1050,
                'song_id' => 254,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:24:01',
                'updated_at' => '2018-04-28 12:24:01',
            ),
            50 => 
            array (
                'id' => 1051,
                'song_id' => 255,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:02',
                'updated_at' => '2018-04-28 12:24:02',
            ),
            51 => 
            array (
                'id' => 1052,
                'song_id' => 255,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:02',
                'updated_at' => '2018-04-28 12:24:02',
            ),
            52 => 
            array (
                'id' => 1053,
                'song_id' => 255,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:24:02',
                'updated_at' => '2018-04-28 12:24:02',
            ),
            53 => 
            array (
                'id' => 1054,
                'song_id' => 255,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:24:02',
                'updated_at' => '2018-04-28 12:24:02',
            ),
            54 => 
            array (
                'id' => 1055,
                'song_id' => 255,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:24:02',
                'updated_at' => '2018-04-28 12:24:02',
            ),
            55 => 
            array (
                'id' => 1056,
                'song_id' => 256,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:04',
                'updated_at' => '2018-04-28 12:24:04',
            ),
            56 => 
            array (
                'id' => 1057,
                'song_id' => 256,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:04',
                'updated_at' => '2018-04-28 12:24:04',
            ),
            57 => 
            array (
                'id' => 1058,
                'song_id' => 256,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:24:04',
                'updated_at' => '2018-04-28 12:24:04',
            ),
            58 => 
            array (
                'id' => 1059,
                'song_id' => 256,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:24:04',
                'updated_at' => '2018-04-28 12:24:04',
            ),
            59 => 
            array (
                'id' => 1060,
                'song_id' => 256,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:24:04',
                'updated_at' => '2018-04-28 12:24:04',
            ),
            60 => 
            array (
                'id' => 1061,
                'song_id' => 257,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:05',
                'updated_at' => '2018-04-28 12:24:05',
            ),
            61 => 
            array (
                'id' => 1062,
                'song_id' => 257,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:05',
                'updated_at' => '2018-04-28 12:24:05',
            ),
            62 => 
            array (
                'id' => 1063,
                'song_id' => 257,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:24:05',
                'updated_at' => '2018-04-28 12:24:05',
            ),
            63 => 
            array (
                'id' => 1064,
                'song_id' => 257,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:24:05',
                'updated_at' => '2018-04-28 12:24:05',
            ),
            64 => 
            array (
                'id' => 1065,
                'song_id' => 257,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:24:05',
                'updated_at' => '2018-04-28 12:24:05',
            ),
            65 => 
            array (
                'id' => 1066,
                'song_id' => 258,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:24:06',
                'updated_at' => '2018-04-28 12:24:06',
            ),
            66 => 
            array (
                'id' => 1067,
                'song_id' => 258,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:06',
                'updated_at' => '2018-04-28 12:24:06',
            ),
            67 => 
            array (
                'id' => 1068,
                'song_id' => 258,
                'tag_id' => 75,
                'created_at' => '2018-04-28 12:24:06',
                'updated_at' => '2018-04-28 12:24:06',
            ),
            68 => 
            array (
                'id' => 1069,
                'song_id' => 258,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:06',
                'updated_at' => '2018-04-28 12:24:06',
            ),
            69 => 
            array (
                'id' => 1070,
                'song_id' => 259,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:08',
                'updated_at' => '2018-04-28 12:24:08',
            ),
            70 => 
            array (
                'id' => 1071,
                'song_id' => 259,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:08',
                'updated_at' => '2018-04-28 12:24:08',
            ),
            71 => 
            array (
                'id' => 1072,
                'song_id' => 259,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:24:08',
                'updated_at' => '2018-04-28 12:24:08',
            ),
            72 => 
            array (
                'id' => 1073,
                'song_id' => 259,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:24:08',
                'updated_at' => '2018-04-28 12:24:08',
            ),
            73 => 
            array (
                'id' => 1074,
                'song_id' => 259,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:24:08',
                'updated_at' => '2018-04-28 12:24:08',
            ),
            74 => 
            array (
                'id' => 1075,
                'song_id' => 260,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:09',
                'updated_at' => '2018-04-28 12:24:09',
            ),
            75 => 
            array (
                'id' => 1076,
                'song_id' => 260,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:09',
                'updated_at' => '2018-04-28 12:24:09',
            ),
            76 => 
            array (
                'id' => 1077,
                'song_id' => 260,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:24:09',
                'updated_at' => '2018-04-28 12:24:09',
            ),
            77 => 
            array (
                'id' => 1078,
                'song_id' => 260,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:24:09',
                'updated_at' => '2018-04-28 12:24:09',
            ),
            78 => 
            array (
                'id' => 1079,
                'song_id' => 260,
                'tag_id' => 106,
                'created_at' => '2018-04-28 12:24:09',
                'updated_at' => '2018-04-28 12:24:09',
            ),
            79 => 
            array (
                'id' => 1080,
                'song_id' => 261,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:11',
                'updated_at' => '2018-04-28 12:24:11',
            ),
            80 => 
            array (
                'id' => 1081,
                'song_id' => 261,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:11',
                'updated_at' => '2018-04-28 12:24:11',
            ),
            81 => 
            array (
                'id' => 1082,
                'song_id' => 261,
                'tag_id' => 74,
                'created_at' => '2018-04-28 12:24:11',
                'updated_at' => '2018-04-28 12:24:11',
            ),
            82 => 
            array (
                'id' => 1083,
                'song_id' => 261,
                'tag_id' => 64,
                'created_at' => '2018-04-28 12:24:11',
                'updated_at' => '2018-04-28 12:24:11',
            ),
            83 => 
            array (
                'id' => 1084,
                'song_id' => 262,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:12',
                'updated_at' => '2018-04-28 12:24:12',
            ),
            84 => 
            array (
                'id' => 1085,
                'song_id' => 262,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:12',
                'updated_at' => '2018-04-28 12:24:12',
            ),
            85 => 
            array (
                'id' => 1086,
                'song_id' => 262,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:12',
                'updated_at' => '2018-04-28 12:24:12',
            ),
            86 => 
            array (
                'id' => 1087,
                'song_id' => 262,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:24:12',
                'updated_at' => '2018-04-28 12:24:12',
            ),
            87 => 
            array (
                'id' => 1088,
                'song_id' => 263,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:14',
                'updated_at' => '2018-04-28 12:24:14',
            ),
            88 => 
            array (
                'id' => 1089,
                'song_id' => 263,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:14',
                'updated_at' => '2018-04-28 12:24:14',
            ),
            89 => 
            array (
                'id' => 1090,
                'song_id' => 263,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:24:14',
                'updated_at' => '2018-04-28 12:24:14',
            ),
            90 => 
            array (
                'id' => 1091,
                'song_id' => 263,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:14',
                'updated_at' => '2018-04-28 12:24:14',
            ),
            91 => 
            array (
                'id' => 1092,
                'song_id' => 264,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:16',
                'updated_at' => '2018-04-28 12:24:16',
            ),
            92 => 
            array (
                'id' => 1093,
                'song_id' => 264,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:16',
                'updated_at' => '2018-04-28 12:24:16',
            ),
            93 => 
            array (
                'id' => 1094,
                'song_id' => 264,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:24:16',
                'updated_at' => '2018-04-28 12:24:16',
            ),
            94 => 
            array (
                'id' => 1095,
                'song_id' => 264,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:16',
                'updated_at' => '2018-04-28 12:24:16',
            ),
            95 => 
            array (
                'id' => 1096,
                'song_id' => 265,
                'tag_id' => 143,
                'created_at' => '2018-04-28 12:24:18',
                'updated_at' => '2018-04-28 12:24:18',
            ),
            96 => 
            array (
                'id' => 1097,
                'song_id' => 265,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:24:18',
                'updated_at' => '2018-04-28 12:24:18',
            ),
            97 => 
            array (
                'id' => 1098,
                'song_id' => 265,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:24:18',
                'updated_at' => '2018-04-28 12:24:18',
            ),
            98 => 
            array (
                'id' => 1099,
                'song_id' => 265,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:24:18',
                'updated_at' => '2018-04-28 12:24:18',
            ),
            99 => 
            array (
                'id' => 1100,
                'song_id' => 266,
                'tag_id' => 144,
                'created_at' => '2018-04-28 12:24:19',
                'updated_at' => '2018-04-28 12:24:19',
            ),
            100 => 
            array (
                'id' => 1101,
                'song_id' => 266,
                'tag_id' => 145,
                'created_at' => '2018-04-28 12:24:19',
                'updated_at' => '2018-04-28 12:24:19',
            ),
            101 => 
            array (
                'id' => 1102,
                'song_id' => 266,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:24:19',
                'updated_at' => '2018-04-28 12:24:19',
            ),
            102 => 
            array (
                'id' => 1103,
                'song_id' => 267,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:24:21',
                'updated_at' => '2018-04-28 12:24:21',
            ),
            103 => 
            array (
                'id' => 1104,
                'song_id' => 267,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:24:21',
                'updated_at' => '2018-04-28 12:24:21',
            ),
            104 => 
            array (
                'id' => 1105,
                'song_id' => 267,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:24:21',
                'updated_at' => '2018-04-28 12:24:21',
            ),
            105 => 
            array (
                'id' => 1106,
                'song_id' => 267,
                'tag_id' => 94,
                'created_at' => '2018-04-28 12:24:21',
                'updated_at' => '2018-04-28 12:24:21',
            ),
            106 => 
            array (
                'id' => 1107,
                'song_id' => 268,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:24:22',
                'updated_at' => '2018-04-28 12:24:22',
            ),
            107 => 
            array (
                'id' => 1108,
                'song_id' => 268,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:24:22',
                'updated_at' => '2018-04-28 12:24:22',
            ),
            108 => 
            array (
                'id' => 1109,
                'song_id' => 268,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:24:22',
                'updated_at' => '2018-04-28 12:24:22',
            ),
            109 => 
            array (
                'id' => 1110,
                'song_id' => 268,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:22',
                'updated_at' => '2018-04-28 12:24:22',
            ),
            110 => 
            array (
                'id' => 1111,
                'song_id' => 270,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:24:25',
                'updated_at' => '2018-04-28 12:24:25',
            ),
            111 => 
            array (
                'id' => 1112,
                'song_id' => 270,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:24:25',
                'updated_at' => '2018-04-28 12:24:25',
            ),
            112 => 
            array (
                'id' => 1113,
                'song_id' => 270,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:24:25',
                'updated_at' => '2018-04-28 12:24:25',
            ),
            113 => 
            array (
                'id' => 1114,
                'song_id' => 270,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:25',
                'updated_at' => '2018-04-28 12:24:25',
            ),
            114 => 
            array (
                'id' => 1115,
                'song_id' => 275,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:24:32',
                'updated_at' => '2018-04-28 12:24:32',
            ),
            115 => 
            array (
                'id' => 1116,
                'song_id' => 275,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:24:32',
                'updated_at' => '2018-04-28 12:24:32',
            ),
            116 => 
            array (
                'id' => 1117,
                'song_id' => 275,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:24:32',
                'updated_at' => '2018-04-28 12:24:32',
            ),
            117 => 
            array (
                'id' => 1118,
                'song_id' => 275,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:32',
                'updated_at' => '2018-04-28 12:24:32',
            ),
            118 => 
            array (
                'id' => 1119,
                'song_id' => 276,
                'tag_id' => 146,
                'created_at' => '2018-04-28 12:24:34',
                'updated_at' => '2018-04-28 12:24:34',
            ),
            119 => 
            array (
                'id' => 1120,
                'song_id' => 276,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:24:34',
                'updated_at' => '2018-04-28 12:24:34',
            ),
            120 => 
            array (
                'id' => 1121,
                'song_id' => 276,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:24:34',
                'updated_at' => '2018-04-28 12:24:34',
            ),
            121 => 
            array (
                'id' => 1122,
                'song_id' => 276,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:34',
                'updated_at' => '2018-04-28 12:24:34',
            ),
            122 => 
            array (
                'id' => 1123,
                'song_id' => 276,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:24:34',
                'updated_at' => '2018-04-28 12:24:34',
            ),
            123 => 
            array (
                'id' => 1124,
                'song_id' => 277,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:24:35',
                'updated_at' => '2018-04-28 12:24:35',
            ),
            124 => 
            array (
                'id' => 1125,
                'song_id' => 277,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:35',
                'updated_at' => '2018-04-28 12:24:35',
            ),
            125 => 
            array (
                'id' => 1126,
                'song_id' => 277,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:24:35',
                'updated_at' => '2018-04-28 12:24:35',
            ),
            126 => 
            array (
                'id' => 1127,
                'song_id' => 277,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:35',
                'updated_at' => '2018-04-28 12:24:35',
            ),
            127 => 
            array (
                'id' => 1128,
                'song_id' => 277,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:24:35',
                'updated_at' => '2018-04-28 12:24:35',
            ),
            128 => 
            array (
                'id' => 1129,
                'song_id' => 278,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:24:37',
                'updated_at' => '2018-04-28 12:24:37',
            ),
            129 => 
            array (
                'id' => 1130,
                'song_id' => 278,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:24:37',
                'updated_at' => '2018-04-28 12:24:37',
            ),
            130 => 
            array (
                'id' => 1131,
                'song_id' => 278,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:37',
                'updated_at' => '2018-04-28 12:24:37',
            ),
            131 => 
            array (
                'id' => 1132,
                'song_id' => 278,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:37',
                'updated_at' => '2018-04-28 12:24:37',
            ),
            132 => 
            array (
                'id' => 1133,
                'song_id' => 279,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:24:38',
                'updated_at' => '2018-04-28 12:24:38',
            ),
            133 => 
            array (
                'id' => 1134,
                'song_id' => 279,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:38',
                'updated_at' => '2018-04-28 12:24:38',
            ),
            134 => 
            array (
                'id' => 1135,
                'song_id' => 279,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:24:38',
                'updated_at' => '2018-04-28 12:24:38',
            ),
            135 => 
            array (
                'id' => 1136,
                'song_id' => 279,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:38',
                'updated_at' => '2018-04-28 12:24:38',
            ),
            136 => 
            array (
                'id' => 1137,
                'song_id' => 280,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:40',
                'updated_at' => '2018-04-28 12:24:40',
            ),
            137 => 
            array (
                'id' => 1138,
                'song_id' => 280,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:40',
                'updated_at' => '2018-04-28 12:24:40',
            ),
            138 => 
            array (
                'id' => 1139,
                'song_id' => 280,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:24:40',
                'updated_at' => '2018-04-28 12:24:40',
            ),
            139 => 
            array (
                'id' => 1140,
                'song_id' => 280,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:40',
                'updated_at' => '2018-04-28 12:24:40',
            ),
            140 => 
            array (
                'id' => 1141,
                'song_id' => 280,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:24:40',
                'updated_at' => '2018-04-28 12:24:40',
            ),
            141 => 
            array (
                'id' => 1142,
                'song_id' => 281,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:24:41',
                'updated_at' => '2018-04-28 12:24:41',
            ),
            142 => 
            array (
                'id' => 1143,
                'song_id' => 281,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:24:41',
                'updated_at' => '2018-04-28 12:24:41',
            ),
            143 => 
            array (
                'id' => 1144,
                'song_id' => 281,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:24:41',
                'updated_at' => '2018-04-28 12:24:41',
            ),
            144 => 
            array (
                'id' => 1145,
                'song_id' => 281,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:41',
                'updated_at' => '2018-04-28 12:24:41',
            ),
            145 => 
            array (
                'id' => 1146,
                'song_id' => 281,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:41',
                'updated_at' => '2018-04-28 12:24:41',
            ),
            146 => 
            array (
                'id' => 1147,
                'song_id' => 282,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:24:42',
                'updated_at' => '2018-04-28 12:24:42',
            ),
            147 => 
            array (
                'id' => 1148,
                'song_id' => 282,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:42',
                'updated_at' => '2018-04-28 12:24:42',
            ),
            148 => 
            array (
                'id' => 1149,
                'song_id' => 282,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:24:42',
                'updated_at' => '2018-04-28 12:24:42',
            ),
            149 => 
            array (
                'id' => 1150,
                'song_id' => 282,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:24:42',
                'updated_at' => '2018-04-28 12:24:42',
            ),
            150 => 
            array (
                'id' => 1151,
                'song_id' => 282,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:42',
                'updated_at' => '2018-04-28 12:24:42',
            ),
            151 => 
            array (
                'id' => 1152,
                'song_id' => 283,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:24:44',
                'updated_at' => '2018-04-28 12:24:44',
            ),
            152 => 
            array (
                'id' => 1153,
                'song_id' => 283,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:24:44',
                'updated_at' => '2018-04-28 12:24:44',
            ),
            153 => 
            array (
                'id' => 1154,
                'song_id' => 283,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:24:44',
                'updated_at' => '2018-04-28 12:24:44',
            ),
            154 => 
            array (
                'id' => 1155,
                'song_id' => 283,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:24:44',
                'updated_at' => '2018-04-28 12:24:44',
            ),
            155 => 
            array (
                'id' => 1156,
                'song_id' => 283,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:24:44',
                'updated_at' => '2018-04-28 12:24:44',
            ),
            156 => 
            array (
                'id' => 1157,
                'song_id' => 284,
                'tag_id' => 147,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2018-04-28 12:24:45',
            ),
            157 => 
            array (
                'id' => 1158,
                'song_id' => 284,
                'tag_id' => 148,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2018-04-28 12:24:45',
            ),
            158 => 
            array (
                'id' => 1159,
                'song_id' => 284,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2018-04-28 12:24:45',
            ),
            159 => 
            array (
                'id' => 1160,
                'song_id' => 284,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2018-04-28 12:24:45',
            ),
            160 => 
            array (
                'id' => 1161,
                'song_id' => 284,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:45',
                'updated_at' => '2018-04-28 12:24:45',
            ),
            161 => 
            array (
                'id' => 1162,
                'song_id' => 285,
                'tag_id' => 149,
                'created_at' => '2018-04-28 12:24:47',
                'updated_at' => '2018-04-28 12:24:47',
            ),
            162 => 
            array (
                'id' => 1163,
                'song_id' => 285,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:47',
                'updated_at' => '2018-04-28 12:24:47',
            ),
            163 => 
            array (
                'id' => 1164,
                'song_id' => 285,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:47',
                'updated_at' => '2018-04-28 12:24:47',
            ),
            164 => 
            array (
                'id' => 1165,
                'song_id' => 285,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:24:47',
                'updated_at' => '2018-04-28 12:24:47',
            ),
            165 => 
            array (
                'id' => 1166,
                'song_id' => 286,
                'tag_id' => 150,
                'created_at' => '2018-04-28 12:24:48',
                'updated_at' => '2018-04-28 12:24:48',
            ),
            166 => 
            array (
                'id' => 1167,
                'song_id' => 286,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:48',
                'updated_at' => '2018-04-28 12:24:48',
            ),
            167 => 
            array (
                'id' => 1168,
                'song_id' => 286,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:48',
                'updated_at' => '2018-04-28 12:24:48',
            ),
            168 => 
            array (
                'id' => 1169,
                'song_id' => 286,
                'tag_id' => 81,
                'created_at' => '2018-04-28 12:24:48',
                'updated_at' => '2018-04-28 12:24:48',
            ),
            169 => 
            array (
                'id' => 1170,
                'song_id' => 287,
                'tag_id' => 151,
                'created_at' => '2018-04-28 12:24:50',
                'updated_at' => '2018-04-28 12:24:50',
            ),
            170 => 
            array (
                'id' => 1171,
                'song_id' => 287,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:50',
                'updated_at' => '2018-04-28 12:24:50',
            ),
            171 => 
            array (
                'id' => 1172,
                'song_id' => 287,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:50',
                'updated_at' => '2018-04-28 12:24:50',
            ),
            172 => 
            array (
                'id' => 1173,
                'song_id' => 287,
                'tag_id' => 81,
                'created_at' => '2018-04-28 12:24:50',
                'updated_at' => '2018-04-28 12:24:50',
            ),
            173 => 
            array (
                'id' => 1174,
                'song_id' => 288,
                'tag_id' => 152,
                'created_at' => '2018-04-28 12:24:51',
                'updated_at' => '2018-04-28 12:24:51',
            ),
            174 => 
            array (
                'id' => 1175,
                'song_id' => 288,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:51',
                'updated_at' => '2018-04-28 12:24:51',
            ),
            175 => 
            array (
                'id' => 1176,
                'song_id' => 288,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:51',
                'updated_at' => '2018-04-28 12:24:51',
            ),
            176 => 
            array (
                'id' => 1177,
                'song_id' => 288,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:24:51',
                'updated_at' => '2018-04-28 12:24:51',
            ),
            177 => 
            array (
                'id' => 1178,
                'song_id' => 289,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:24:52',
                'updated_at' => '2018-04-28 12:24:52',
            ),
            178 => 
            array (
                'id' => 1179,
                'song_id' => 289,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:24:52',
                'updated_at' => '2018-04-28 12:24:52',
            ),
            179 => 
            array (
                'id' => 1180,
                'song_id' => 289,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:24:52',
                'updated_at' => '2018-04-28 12:24:52',
            ),
            180 => 
            array (
                'id' => 1181,
                'song_id' => 289,
                'tag_id' => 147,
                'created_at' => '2018-04-28 12:24:52',
                'updated_at' => '2018-04-28 12:24:52',
            ),
            181 => 
            array (
                'id' => 1182,
                'song_id' => 290,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:54',
                'updated_at' => '2018-04-28 12:24:54',
            ),
            182 => 
            array (
                'id' => 1183,
                'song_id' => 290,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:54',
                'updated_at' => '2018-04-28 12:24:54',
            ),
            183 => 
            array (
                'id' => 1184,
                'song_id' => 290,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:24:54',
                'updated_at' => '2018-04-28 12:24:54',
            ),
            184 => 
            array (
                'id' => 1185,
                'song_id' => 290,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:54',
                'updated_at' => '2018-04-28 12:24:54',
            ),
            185 => 
            array (
                'id' => 1186,
                'song_id' => 291,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:55',
                'updated_at' => '2018-04-28 12:24:55',
            ),
            186 => 
            array (
                'id' => 1187,
                'song_id' => 291,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:55',
                'updated_at' => '2018-04-28 12:24:55',
            ),
            187 => 
            array (
                'id' => 1188,
                'song_id' => 291,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:24:55',
                'updated_at' => '2018-04-28 12:24:55',
            ),
            188 => 
            array (
                'id' => 1189,
                'song_id' => 291,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:55',
                'updated_at' => '2018-04-28 12:24:55',
            ),
            189 => 
            array (
                'id' => 1190,
                'song_id' => 292,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:56',
                'updated_at' => '2018-04-28 12:24:56',
            ),
            190 => 
            array (
                'id' => 1191,
                'song_id' => 292,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:56',
                'updated_at' => '2018-04-28 12:24:56',
            ),
            191 => 
            array (
                'id' => 1192,
                'song_id' => 292,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:24:56',
                'updated_at' => '2018-04-28 12:24:56',
            ),
            192 => 
            array (
                'id' => 1193,
                'song_id' => 292,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:56',
                'updated_at' => '2018-04-28 12:24:56',
            ),
            193 => 
            array (
                'id' => 1194,
                'song_id' => 293,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:24:58',
                'updated_at' => '2018-04-28 12:24:58',
            ),
            194 => 
            array (
                'id' => 1195,
                'song_id' => 293,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:58',
                'updated_at' => '2018-04-28 12:24:58',
            ),
            195 => 
            array (
                'id' => 1196,
                'song_id' => 293,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:24:58',
                'updated_at' => '2018-04-28 12:24:58',
            ),
            196 => 
            array (
                'id' => 1197,
                'song_id' => 293,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:24:58',
                'updated_at' => '2018-04-28 12:24:58',
            ),
            197 => 
            array (
                'id' => 1198,
                'song_id' => 294,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:24:59',
                'updated_at' => '2018-04-28 12:24:59',
            ),
            198 => 
            array (
                'id' => 1199,
                'song_id' => 294,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:24:59',
                'updated_at' => '2018-04-28 12:24:59',
            ),
            199 => 
            array (
                'id' => 1200,
                'song_id' => 294,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:24:59',
                'updated_at' => '2018-04-28 12:24:59',
            ),
            200 => 
            array (
                'id' => 1201,
                'song_id' => 294,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:24:59',
                'updated_at' => '2018-04-28 12:24:59',
            ),
            201 => 
            array (
                'id' => 1202,
                'song_id' => 298,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:25:05',
                'updated_at' => '2018-04-28 12:25:05',
            ),
            202 => 
            array (
                'id' => 1203,
                'song_id' => 298,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:05',
                'updated_at' => '2018-04-28 12:25:05',
            ),
            203 => 
            array (
                'id' => 1204,
                'song_id' => 298,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:05',
                'updated_at' => '2018-04-28 12:25:05',
            ),
            204 => 
            array (
                'id' => 1205,
                'song_id' => 298,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:25:05',
                'updated_at' => '2018-04-28 12:25:05',
            ),
            205 => 
            array (
                'id' => 1206,
                'song_id' => 298,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:25:05',
                'updated_at' => '2018-04-28 12:25:05',
            ),
            206 => 
            array (
                'id' => 1207,
                'song_id' => 299,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:06',
                'updated_at' => '2018-04-28 12:25:06',
            ),
            207 => 
            array (
                'id' => 1208,
                'song_id' => 299,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:25:06',
                'updated_at' => '2018-04-28 12:25:06',
            ),
            208 => 
            array (
                'id' => 1209,
                'song_id' => 299,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:06',
                'updated_at' => '2018-04-28 12:25:06',
            ),
            209 => 
            array (
                'id' => 1210,
                'song_id' => 299,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:25:06',
                'updated_at' => '2018-04-28 12:25:06',
            ),
            210 => 
            array (
                'id' => 1211,
                'song_id' => 300,
                'tag_id' => 154,
                'created_at' => '2018-04-28 12:25:08',
                'updated_at' => '2018-04-28 12:25:08',
            ),
            211 => 
            array (
                'id' => 1212,
                'song_id' => 300,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:08',
                'updated_at' => '2018-04-28 12:25:08',
            ),
            212 => 
            array (
                'id' => 1213,
                'song_id' => 300,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:08',
                'updated_at' => '2018-04-28 12:25:08',
            ),
            213 => 
            array (
                'id' => 1214,
                'song_id' => 300,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:25:08',
                'updated_at' => '2018-04-28 12:25:08',
            ),
            214 => 
            array (
                'id' => 1215,
                'song_id' => 300,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:25:08',
                'updated_at' => '2018-04-28 12:25:08',
            ),
            215 => 
            array (
                'id' => 1216,
                'song_id' => 301,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:25:09',
                'updated_at' => '2018-04-28 12:25:09',
            ),
            216 => 
            array (
                'id' => 1217,
                'song_id' => 301,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:09',
                'updated_at' => '2018-04-28 12:25:09',
            ),
            217 => 
            array (
                'id' => 1218,
                'song_id' => 301,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:25:09',
                'updated_at' => '2018-04-28 12:25:09',
            ),
            218 => 
            array (
                'id' => 1219,
                'song_id' => 301,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:25:09',
                'updated_at' => '2018-04-28 12:25:09',
            ),
            219 => 
            array (
                'id' => 1220,
                'song_id' => 302,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:25:11',
                'updated_at' => '2018-04-28 12:25:11',
            ),
            220 => 
            array (
                'id' => 1221,
                'song_id' => 302,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:11',
                'updated_at' => '2018-04-28 12:25:11',
            ),
            221 => 
            array (
                'id' => 1222,
                'song_id' => 302,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:25:11',
                'updated_at' => '2018-04-28 12:25:11',
            ),
            222 => 
            array (
                'id' => 1223,
                'song_id' => 302,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:25:11',
                'updated_at' => '2018-04-28 12:25:11',
            ),
            223 => 
            array (
                'id' => 1224,
                'song_id' => 302,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:25:11',
                'updated_at' => '2018-04-28 12:25:11',
            ),
            224 => 
            array (
                'id' => 1225,
                'song_id' => 303,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:25:12',
                'updated_at' => '2018-04-28 12:25:12',
            ),
            225 => 
            array (
                'id' => 1226,
                'song_id' => 303,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:25:12',
                'updated_at' => '2018-04-28 12:25:12',
            ),
            226 => 
            array (
                'id' => 1227,
                'song_id' => 303,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:12',
                'updated_at' => '2018-04-28 12:25:12',
            ),
            227 => 
            array (
                'id' => 1228,
                'song_id' => 303,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:25:12',
                'updated_at' => '2018-04-28 12:25:12',
            ),
            228 => 
            array (
                'id' => 1229,
                'song_id' => 304,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:25:13',
                'updated_at' => '2018-04-28 12:25:13',
            ),
            229 => 
            array (
                'id' => 1230,
                'song_id' => 304,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:25:13',
                'updated_at' => '2018-04-28 12:25:13',
            ),
            230 => 
            array (
                'id' => 1231,
                'song_id' => 304,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:13',
                'updated_at' => '2018-04-28 12:25:13',
            ),
            231 => 
            array (
                'id' => 1232,
                'song_id' => 304,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:25:13',
                'updated_at' => '2018-04-28 12:25:13',
            ),
            232 => 
            array (
                'id' => 1233,
                'song_id' => 305,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:25:15',
                'updated_at' => '2018-04-28 12:25:15',
            ),
            233 => 
            array (
                'id' => 1234,
                'song_id' => 305,
                'tag_id' => 73,
                'created_at' => '2018-04-28 12:25:15',
                'updated_at' => '2018-04-28 12:25:15',
            ),
            234 => 
            array (
                'id' => 1235,
                'song_id' => 305,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:15',
                'updated_at' => '2018-04-28 12:25:15',
            ),
            235 => 
            array (
                'id' => 1236,
                'song_id' => 305,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:25:15',
                'updated_at' => '2018-04-28 12:25:15',
            ),
            236 => 
            array (
                'id' => 1237,
                'song_id' => 306,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:25:17',
                'updated_at' => '2018-04-28 12:25:17',
            ),
            237 => 
            array (
                'id' => 1238,
                'song_id' => 306,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:17',
                'updated_at' => '2018-04-28 12:25:17',
            ),
            238 => 
            array (
                'id' => 1239,
                'song_id' => 306,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:17',
                'updated_at' => '2018-04-28 12:25:17',
            ),
            239 => 
            array (
                'id' => 1240,
                'song_id' => 306,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:25:17',
                'updated_at' => '2018-04-28 12:25:17',
            ),
            240 => 
            array (
                'id' => 1241,
                'song_id' => 307,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:25:18',
                'updated_at' => '2018-04-28 12:25:18',
            ),
            241 => 
            array (
                'id' => 1242,
                'song_id' => 307,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:18',
                'updated_at' => '2018-04-28 12:25:18',
            ),
            242 => 
            array (
                'id' => 1243,
                'song_id' => 307,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:25:18',
                'updated_at' => '2018-04-28 12:25:18',
            ),
            243 => 
            array (
                'id' => 1244,
                'song_id' => 307,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:18',
                'updated_at' => '2018-04-28 12:25:18',
            ),
            244 => 
            array (
                'id' => 1245,
                'song_id' => 307,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:25:18',
                'updated_at' => '2018-04-28 12:25:18',
            ),
            245 => 
            array (
                'id' => 1246,
                'song_id' => 308,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:20',
                'updated_at' => '2018-04-28 12:25:20',
            ),
            246 => 
            array (
                'id' => 1247,
                'song_id' => 308,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:25:20',
                'updated_at' => '2018-04-28 12:25:20',
            ),
            247 => 
            array (
                'id' => 1248,
                'song_id' => 308,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:20',
                'updated_at' => '2018-04-28 12:25:20',
            ),
            248 => 
            array (
                'id' => 1249,
                'song_id' => 308,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:25:20',
                'updated_at' => '2018-04-28 12:25:20',
            ),
            249 => 
            array (
                'id' => 1250,
                'song_id' => 308,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:25:20',
                'updated_at' => '2018-04-28 12:25:20',
            ),
            250 => 
            array (
                'id' => 1251,
                'song_id' => 309,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:21',
                'updated_at' => '2018-04-28 12:25:21',
            ),
            251 => 
            array (
                'id' => 1252,
                'song_id' => 309,
                'tag_id' => 153,
                'created_at' => '2018-04-28 12:25:21',
                'updated_at' => '2018-04-28 12:25:21',
            ),
            252 => 
            array (
                'id' => 1253,
                'song_id' => 309,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:21',
                'updated_at' => '2018-04-28 12:25:21',
            ),
            253 => 
            array (
                'id' => 1254,
                'song_id' => 309,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:25:21',
                'updated_at' => '2018-04-28 12:25:21',
            ),
            254 => 
            array (
                'id' => 1255,
                'song_id' => 309,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:25:21',
                'updated_at' => '2018-04-28 12:25:21',
            ),
            255 => 
            array (
                'id' => 1256,
                'song_id' => 310,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:23',
                'updated_at' => '2018-04-28 12:25:23',
            ),
            256 => 
            array (
                'id' => 1257,
                'song_id' => 310,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:23',
                'updated_at' => '2018-04-28 12:25:23',
            ),
            257 => 
            array (
                'id' => 1258,
                'song_id' => 310,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:23',
                'updated_at' => '2018-04-28 12:25:23',
            ),
            258 => 
            array (
                'id' => 1259,
                'song_id' => 310,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:23',
                'updated_at' => '2018-04-28 12:25:23',
            ),
            259 => 
            array (
                'id' => 1260,
                'song_id' => 311,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:25',
                'updated_at' => '2018-04-28 12:25:25',
            ),
            260 => 
            array (
                'id' => 1261,
                'song_id' => 311,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:25',
                'updated_at' => '2018-04-28 12:25:25',
            ),
            261 => 
            array (
                'id' => 1262,
                'song_id' => 311,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:25',
                'updated_at' => '2018-04-28 12:25:25',
            ),
            262 => 
            array (
                'id' => 1263,
                'song_id' => 311,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:25',
                'updated_at' => '2018-04-28 12:25:25',
            ),
            263 => 
            array (
                'id' => 1264,
                'song_id' => 312,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:27',
                'updated_at' => '2018-04-28 12:25:27',
            ),
            264 => 
            array (
                'id' => 1265,
                'song_id' => 312,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:27',
                'updated_at' => '2018-04-28 12:25:27',
            ),
            265 => 
            array (
                'id' => 1266,
                'song_id' => 312,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:27',
                'updated_at' => '2018-04-28 12:25:27',
            ),
            266 => 
            array (
                'id' => 1267,
                'song_id' => 312,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:27',
                'updated_at' => '2018-04-28 12:25:27',
            ),
            267 => 
            array (
                'id' => 1268,
                'song_id' => 313,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:29',
                'updated_at' => '2018-04-28 12:25:29',
            ),
            268 => 
            array (
                'id' => 1269,
                'song_id' => 313,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:29',
                'updated_at' => '2018-04-28 12:25:29',
            ),
            269 => 
            array (
                'id' => 1270,
                'song_id' => 313,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:29',
                'updated_at' => '2018-04-28 12:25:29',
            ),
            270 => 
            array (
                'id' => 1271,
                'song_id' => 313,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:29',
                'updated_at' => '2018-04-28 12:25:29',
            ),
            271 => 
            array (
                'id' => 1272,
                'song_id' => 314,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:30',
                'updated_at' => '2018-04-28 12:25:30',
            ),
            272 => 
            array (
                'id' => 1273,
                'song_id' => 314,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:30',
                'updated_at' => '2018-04-28 12:25:30',
            ),
            273 => 
            array (
                'id' => 1274,
                'song_id' => 314,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:30',
                'updated_at' => '2018-04-28 12:25:30',
            ),
            274 => 
            array (
                'id' => 1275,
                'song_id' => 314,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:30',
                'updated_at' => '2018-04-28 12:25:30',
            ),
            275 => 
            array (
                'id' => 1276,
                'song_id' => 315,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:32',
                'updated_at' => '2018-04-28 12:25:32',
            ),
            276 => 
            array (
                'id' => 1277,
                'song_id' => 315,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:32',
                'updated_at' => '2018-04-28 12:25:32',
            ),
            277 => 
            array (
                'id' => 1278,
                'song_id' => 315,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:32',
                'updated_at' => '2018-04-28 12:25:32',
            ),
            278 => 
            array (
                'id' => 1279,
                'song_id' => 315,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:25:32',
                'updated_at' => '2018-04-28 12:25:32',
            ),
            279 => 
            array (
                'id' => 1280,
                'song_id' => 316,
                'tag_id' => 155,
                'created_at' => '2018-04-28 12:25:33',
                'updated_at' => '2018-04-28 12:25:33',
            ),
            280 => 
            array (
                'id' => 1281,
                'song_id' => 316,
                'tag_id' => 156,
                'created_at' => '2018-04-28 12:25:33',
                'updated_at' => '2018-04-28 12:25:33',
            ),
            281 => 
            array (
                'id' => 1282,
                'song_id' => 316,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:33',
                'updated_at' => '2018-04-28 12:25:33',
            ),
            282 => 
            array (
                'id' => 1283,
                'song_id' => 316,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:33',
                'updated_at' => '2018-04-28 12:25:33',
            ),
            283 => 
            array (
                'id' => 1284,
                'song_id' => 317,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:35',
                'updated_at' => '2018-04-28 12:25:35',
            ),
            284 => 
            array (
                'id' => 1285,
                'song_id' => 317,
                'tag_id' => 156,
                'created_at' => '2018-04-28 12:25:35',
                'updated_at' => '2018-04-28 12:25:35',
            ),
            285 => 
            array (
                'id' => 1286,
                'song_id' => 317,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:35',
                'updated_at' => '2018-04-28 12:25:35',
            ),
            286 => 
            array (
                'id' => 1287,
                'song_id' => 317,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:25:35',
                'updated_at' => '2018-04-28 12:25:35',
            ),
            287 => 
            array (
                'id' => 1288,
                'song_id' => 318,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:36',
                'updated_at' => '2018-04-28 12:25:36',
            ),
            288 => 
            array (
                'id' => 1289,
                'song_id' => 318,
                'tag_id' => 155,
                'created_at' => '2018-04-28 12:25:36',
                'updated_at' => '2018-04-28 12:25:36',
            ),
            289 => 
            array (
                'id' => 1290,
                'song_id' => 318,
                'tag_id' => 156,
                'created_at' => '2018-04-28 12:25:36',
                'updated_at' => '2018-04-28 12:25:36',
            ),
            290 => 
            array (
                'id' => 1291,
                'song_id' => 318,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:36',
                'updated_at' => '2018-04-28 12:25:36',
            ),
            291 => 
            array (
                'id' => 1292,
                'song_id' => 319,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:38',
                'updated_at' => '2018-04-28 12:25:38',
            ),
            292 => 
            array (
                'id' => 1293,
                'song_id' => 319,
                'tag_id' => 155,
                'created_at' => '2018-04-28 12:25:38',
                'updated_at' => '2018-04-28 12:25:38',
            ),
            293 => 
            array (
                'id' => 1294,
                'song_id' => 319,
                'tag_id' => 156,
                'created_at' => '2018-04-28 12:25:38',
                'updated_at' => '2018-04-28 12:25:38',
            ),
            294 => 
            array (
                'id' => 1295,
                'song_id' => 319,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:38',
                'updated_at' => '2018-04-28 12:25:38',
            ),
            295 => 
            array (
                'id' => 1296,
                'song_id' => 319,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:25:38',
                'updated_at' => '2018-04-28 12:25:38',
            ),
            296 => 
            array (
                'id' => 1297,
                'song_id' => 322,
                'tag_id' => 157,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2018-04-28 12:25:42',
            ),
            297 => 
            array (
                'id' => 1298,
                'song_id' => 322,
                'tag_id' => 158,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2018-04-28 12:25:42',
            ),
            298 => 
            array (
                'id' => 1299,
                'song_id' => 322,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2018-04-28 12:25:42',
            ),
            299 => 
            array (
                'id' => 1300,
                'song_id' => 322,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2018-04-28 12:25:42',
            ),
            300 => 
            array (
                'id' => 1301,
                'song_id' => 322,
                'tag_id' => 136,
                'created_at' => '2018-04-28 12:25:42',
                'updated_at' => '2018-04-28 12:25:42',
            ),
            301 => 
            array (
                'id' => 1302,
                'song_id' => 323,
                'tag_id' => 159,
                'created_at' => '2018-04-28 12:25:44',
                'updated_at' => '2018-04-28 12:25:44',
            ),
            302 => 
            array (
                'id' => 1303,
                'song_id' => 323,
                'tag_id' => 160,
                'created_at' => '2018-04-28 12:25:44',
                'updated_at' => '2018-04-28 12:25:44',
            ),
            303 => 
            array (
                'id' => 1304,
                'song_id' => 323,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:44',
                'updated_at' => '2018-04-28 12:25:44',
            ),
            304 => 
            array (
                'id' => 1305,
                'song_id' => 323,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:25:44',
                'updated_at' => '2018-04-28 12:25:44',
            ),
            305 => 
            array (
                'id' => 1306,
                'song_id' => 324,
                'tag_id' => 161,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2018-04-28 12:25:45',
            ),
            306 => 
            array (
                'id' => 1307,
                'song_id' => 324,
                'tag_id' => 162,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2018-04-28 12:25:45',
            ),
            307 => 
            array (
                'id' => 1308,
                'song_id' => 324,
                'tag_id' => 163,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2018-04-28 12:25:45',
            ),
            308 => 
            array (
                'id' => 1309,
                'song_id' => 324,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2018-04-28 12:25:45',
            ),
            309 => 
            array (
                'id' => 1310,
                'song_id' => 324,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:25:45',
                'updated_at' => '2018-04-28 12:25:45',
            ),
            310 => 
            array (
                'id' => 1311,
                'song_id' => 325,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:47',
                'updated_at' => '2018-04-28 12:25:47',
            ),
            311 => 
            array (
                'id' => 1312,
                'song_id' => 325,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:47',
                'updated_at' => '2018-04-28 12:25:47',
            ),
            312 => 
            array (
                'id' => 1313,
                'song_id' => 325,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:25:47',
                'updated_at' => '2018-04-28 12:25:47',
            ),
            313 => 
            array (
                'id' => 1314,
                'song_id' => 325,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:25:47',
                'updated_at' => '2018-04-28 12:25:47',
            ),
            314 => 
            array (
                'id' => 1315,
                'song_id' => 326,
                'tag_id' => 164,
                'created_at' => '2018-04-28 12:25:49',
                'updated_at' => '2018-04-28 12:25:49',
            ),
            315 => 
            array (
                'id' => 1316,
                'song_id' => 326,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:25:50',
                'updated_at' => '2018-04-28 12:25:50',
            ),
            316 => 
            array (
                'id' => 1317,
                'song_id' => 326,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:25:50',
                'updated_at' => '2018-04-28 12:25:50',
            ),
            317 => 
            array (
                'id' => 1318,
                'song_id' => 326,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:25:50',
                'updated_at' => '2018-04-28 12:25:50',
            ),
            318 => 
            array (
                'id' => 1319,
                'song_id' => 327,
                'tag_id' => 165,
                'created_at' => '2018-04-28 12:25:51',
                'updated_at' => '2018-04-28 12:25:51',
            ),
            319 => 
            array (
                'id' => 1320,
                'song_id' => 327,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:51',
                'updated_at' => '2018-04-28 12:25:51',
            ),
            320 => 
            array (
                'id' => 1321,
                'song_id' => 327,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:25:51',
                'updated_at' => '2018-04-28 12:25:51',
            ),
            321 => 
            array (
                'id' => 1322,
                'song_id' => 327,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:51',
                'updated_at' => '2018-04-28 12:25:51',
            ),
            322 => 
            array (
                'id' => 1323,
                'song_id' => 328,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:53',
                'updated_at' => '2018-04-28 12:25:53',
            ),
            323 => 
            array (
                'id' => 1324,
                'song_id' => 328,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:53',
                'updated_at' => '2018-04-28 12:25:53',
            ),
            324 => 
            array (
                'id' => 1325,
                'song_id' => 328,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:25:53',
                'updated_at' => '2018-04-28 12:25:53',
            ),
            325 => 
            array (
                'id' => 1326,
                'song_id' => 328,
                'tag_id' => 34,
                'created_at' => '2018-04-28 12:25:53',
                'updated_at' => '2018-04-28 12:25:53',
            ),
            326 => 
            array (
                'id' => 1327,
                'song_id' => 329,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:25:54',
                'updated_at' => '2018-04-28 12:25:54',
            ),
            327 => 
            array (
                'id' => 1328,
                'song_id' => 329,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:25:54',
                'updated_at' => '2018-04-28 12:25:54',
            ),
            328 => 
            array (
                'id' => 1329,
                'song_id' => 329,
                'tag_id' => 165,
                'created_at' => '2018-04-28 12:25:54',
                'updated_at' => '2018-04-28 12:25:54',
            ),
            329 => 
            array (
                'id' => 1330,
                'song_id' => 329,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:54',
                'updated_at' => '2018-04-28 12:25:54',
            ),
            330 => 
            array (
                'id' => 1331,
                'song_id' => 330,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:55',
                'updated_at' => '2018-04-28 12:25:55',
            ),
            331 => 
            array (
                'id' => 1332,
                'song_id' => 330,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:55',
                'updated_at' => '2018-04-28 12:25:55',
            ),
            332 => 
            array (
                'id' => 1333,
                'song_id' => 330,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:55',
                'updated_at' => '2018-04-28 12:25:55',
            ),
            333 => 
            array (
                'id' => 1334,
                'song_id' => 330,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:55',
                'updated_at' => '2018-04-28 12:25:55',
            ),
            334 => 
            array (
                'id' => 1335,
                'song_id' => 331,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:57',
                'updated_at' => '2018-04-28 12:25:57',
            ),
            335 => 
            array (
                'id' => 1336,
                'song_id' => 331,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:57',
                'updated_at' => '2018-04-28 12:25:57',
            ),
            336 => 
            array (
                'id' => 1337,
                'song_id' => 331,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:57',
                'updated_at' => '2018-04-28 12:25:57',
            ),
            337 => 
            array (
                'id' => 1338,
                'song_id' => 331,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:25:57',
                'updated_at' => '2018-04-28 12:25:57',
            ),
            338 => 
            array (
                'id' => 1339,
                'song_id' => 332,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:25:58',
                'updated_at' => '2018-04-28 12:25:58',
            ),
            339 => 
            array (
                'id' => 1340,
                'song_id' => 332,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:25:58',
                'updated_at' => '2018-04-28 12:25:58',
            ),
            340 => 
            array (
                'id' => 1341,
                'song_id' => 332,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:25:58',
                'updated_at' => '2018-04-28 12:25:58',
            ),
            341 => 
            array (
                'id' => 1342,
                'song_id' => 332,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:25:58',
                'updated_at' => '2018-04-28 12:25:58',
            ),
            342 => 
            array (
                'id' => 1343,
                'song_id' => 333,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:26:00',
                'updated_at' => '2018-04-28 12:26:00',
            ),
            343 => 
            array (
                'id' => 1344,
                'song_id' => 333,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:00',
                'updated_at' => '2018-04-28 12:26:00',
            ),
            344 => 
            array (
                'id' => 1345,
                'song_id' => 333,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:26:00',
                'updated_at' => '2018-04-28 12:26:00',
            ),
            345 => 
            array (
                'id' => 1346,
                'song_id' => 333,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:00',
                'updated_at' => '2018-04-28 12:26:00',
            ),
            346 => 
            array (
                'id' => 1347,
                'song_id' => 334,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:26:01',
                'updated_at' => '2018-04-28 12:26:01',
            ),
            347 => 
            array (
                'id' => 1348,
                'song_id' => 334,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:01',
                'updated_at' => '2018-04-28 12:26:01',
            ),
            348 => 
            array (
                'id' => 1349,
                'song_id' => 334,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:01',
                'updated_at' => '2018-04-28 12:26:01',
            ),
            349 => 
            array (
                'id' => 1350,
                'song_id' => 334,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:26:01',
                'updated_at' => '2018-04-28 12:26:01',
            ),
            350 => 
            array (
                'id' => 1351,
                'song_id' => 335,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:26:03',
                'updated_at' => '2018-04-28 12:26:03',
            ),
            351 => 
            array (
                'id' => 1352,
                'song_id' => 335,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:26:03',
                'updated_at' => '2018-04-28 12:26:03',
            ),
            352 => 
            array (
                'id' => 1353,
                'song_id' => 335,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:26:03',
                'updated_at' => '2018-04-28 12:26:03',
            ),
            353 => 
            array (
                'id' => 1354,
                'song_id' => 335,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:03',
                'updated_at' => '2018-04-28 12:26:03',
            ),
            354 => 
            array (
                'id' => 1355,
                'song_id' => 336,
                'tag_id' => 166,
                'created_at' => '2018-04-28 12:26:04',
                'updated_at' => '2018-04-28 12:26:04',
            ),
            355 => 
            array (
                'id' => 1356,
                'song_id' => 336,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:26:04',
                'updated_at' => '2018-04-28 12:26:04',
            ),
            356 => 
            array (
                'id' => 1357,
                'song_id' => 336,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:04',
                'updated_at' => '2018-04-28 12:26:04',
            ),
            357 => 
            array (
                'id' => 1358,
                'song_id' => 336,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:26:04',
                'updated_at' => '2018-04-28 12:26:04',
            ),
            358 => 
            array (
                'id' => 1359,
                'song_id' => 337,
                'tag_id' => 167,
                'created_at' => '2018-04-28 12:26:05',
                'updated_at' => '2018-04-28 12:26:05',
            ),
            359 => 
            array (
                'id' => 1360,
                'song_id' => 337,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:26:05',
                'updated_at' => '2018-04-28 12:26:05',
            ),
            360 => 
            array (
                'id' => 1361,
                'song_id' => 337,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:05',
                'updated_at' => '2018-04-28 12:26:05',
            ),
            361 => 
            array (
                'id' => 1362,
                'song_id' => 337,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:05',
                'updated_at' => '2018-04-28 12:26:05',
            ),
            362 => 
            array (
                'id' => 1363,
                'song_id' => 337,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:26:05',
                'updated_at' => '2018-04-28 12:26:05',
            ),
            363 => 
            array (
                'id' => 1364,
                'song_id' => 338,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:07',
                'updated_at' => '2018-04-28 12:26:07',
            ),
            364 => 
            array (
                'id' => 1365,
                'song_id' => 338,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:07',
                'updated_at' => '2018-04-28 12:26:07',
            ),
            365 => 
            array (
                'id' => 1366,
                'song_id' => 338,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:26:07',
                'updated_at' => '2018-04-28 12:26:07',
            ),
            366 => 
            array (
                'id' => 1367,
                'song_id' => 338,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:26:07',
                'updated_at' => '2018-04-28 12:26:07',
            ),
            367 => 
            array (
                'id' => 1368,
                'song_id' => 338,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:26:07',
                'updated_at' => '2018-04-28 12:26:07',
            ),
            368 => 
            array (
                'id' => 1369,
                'song_id' => 339,
                'tag_id' => 168,
                'created_at' => '2018-04-28 12:26:08',
                'updated_at' => '2018-04-28 12:26:08',
            ),
            369 => 
            array (
                'id' => 1370,
                'song_id' => 339,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:08',
                'updated_at' => '2018-04-28 12:26:08',
            ),
            370 => 
            array (
                'id' => 1371,
                'song_id' => 339,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:26:08',
                'updated_at' => '2018-04-28 12:26:08',
            ),
            371 => 
            array (
                'id' => 1372,
                'song_id' => 339,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:26:08',
                'updated_at' => '2018-04-28 12:26:08',
            ),
            372 => 
            array (
                'id' => 1373,
                'song_id' => 339,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:08',
                'updated_at' => '2018-04-28 12:26:08',
            ),
            373 => 
            array (
                'id' => 1374,
                'song_id' => 340,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:26:10',
                'updated_at' => '2018-04-28 12:26:10',
            ),
            374 => 
            array (
                'id' => 1375,
                'song_id' => 340,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:26:10',
                'updated_at' => '2018-04-28 12:26:10',
            ),
            375 => 
            array (
                'id' => 1376,
                'song_id' => 340,
                'tag_id' => 167,
                'created_at' => '2018-04-28 12:26:10',
                'updated_at' => '2018-04-28 12:26:10',
            ),
            376 => 
            array (
                'id' => 1377,
                'song_id' => 340,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:10',
                'updated_at' => '2018-04-28 12:26:10',
            ),
            377 => 
            array (
                'id' => 1378,
                'song_id' => 340,
                'tag_id' => 168,
                'created_at' => '2018-04-28 12:26:10',
                'updated_at' => '2018-04-28 12:26:10',
            ),
            378 => 
            array (
                'id' => 1379,
                'song_id' => 341,
                'tag_id' => 169,
                'created_at' => '2018-04-28 12:26:11',
                'updated_at' => '2018-04-28 12:26:11',
            ),
            379 => 
            array (
                'id' => 1380,
                'song_id' => 341,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:26:11',
                'updated_at' => '2018-04-28 12:26:11',
            ),
            380 => 
            array (
                'id' => 1381,
                'song_id' => 341,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:11',
                'updated_at' => '2018-04-28 12:26:11',
            ),
            381 => 
            array (
                'id' => 1382,
                'song_id' => 341,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:11',
                'updated_at' => '2018-04-28 12:26:11',
            ),
            382 => 
            array (
                'id' => 1383,
                'song_id' => 341,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:26:11',
                'updated_at' => '2018-04-28 12:26:11',
            ),
            383 => 
            array (
                'id' => 1384,
                'song_id' => 343,
                'tag_id' => 170,
                'created_at' => '2018-04-28 12:26:14',
                'updated_at' => '2018-04-28 12:26:14',
            ),
            384 => 
            array (
                'id' => 1385,
                'song_id' => 343,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:14',
                'updated_at' => '2018-04-28 12:26:14',
            ),
            385 => 
            array (
                'id' => 1386,
                'song_id' => 343,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:14',
                'updated_at' => '2018-04-28 12:26:14',
            ),
            386 => 
            array (
                'id' => 1387,
                'song_id' => 343,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:26:14',
                'updated_at' => '2018-04-28 12:26:14',
            ),
            387 => 
            array (
                'id' => 1388,
                'song_id' => 343,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:26:14',
                'updated_at' => '2018-04-28 12:26:14',
            ),
            388 => 
            array (
                'id' => 1389,
                'song_id' => 344,
                'tag_id' => 171,
                'created_at' => '2018-04-28 12:26:15',
                'updated_at' => '2018-04-28 12:26:15',
            ),
            389 => 
            array (
                'id' => 1390,
                'song_id' => 344,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:26:15',
                'updated_at' => '2018-04-28 12:26:15',
            ),
            390 => 
            array (
                'id' => 1391,
                'song_id' => 344,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:26:15',
                'updated_at' => '2018-04-28 12:26:15',
            ),
            391 => 
            array (
                'id' => 1392,
                'song_id' => 344,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:26:15',
                'updated_at' => '2018-04-28 12:26:15',
            ),
            392 => 
            array (
                'id' => 1393,
                'song_id' => 344,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:26:15',
                'updated_at' => '2018-04-28 12:26:15',
            ),
            393 => 
            array (
                'id' => 1394,
                'song_id' => 345,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:26:17',
                'updated_at' => '2018-04-28 12:26:17',
            ),
            394 => 
            array (
                'id' => 1395,
                'song_id' => 345,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:26:17',
                'updated_at' => '2018-04-28 12:26:17',
            ),
            395 => 
            array (
                'id' => 1396,
                'song_id' => 345,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:26:17',
                'updated_at' => '2018-04-28 12:26:17',
            ),
            396 => 
            array (
                'id' => 1397,
                'song_id' => 345,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:26:17',
                'updated_at' => '2018-04-28 12:26:17',
            ),
            397 => 
            array (
                'id' => 1398,
                'song_id' => 346,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:18',
                'updated_at' => '2018-04-28 12:26:18',
            ),
            398 => 
            array (
                'id' => 1399,
                'song_id' => 346,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:26:18',
                'updated_at' => '2018-04-28 12:26:18',
            ),
            399 => 
            array (
                'id' => 1400,
                'song_id' => 346,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:18',
                'updated_at' => '2018-04-28 12:26:18',
            ),
            400 => 
            array (
                'id' => 1401,
                'song_id' => 346,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:26:18',
                'updated_at' => '2018-04-28 12:26:18',
            ),
            401 => 
            array (
                'id' => 1402,
                'song_id' => 346,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:26:18',
                'updated_at' => '2018-04-28 12:26:18',
            ),
            402 => 
            array (
                'id' => 1403,
                'song_id' => 347,
                'tag_id' => 172,
                'created_at' => '2018-04-28 12:26:20',
                'updated_at' => '2018-04-28 12:26:20',
            ),
            403 => 
            array (
                'id' => 1404,
                'song_id' => 347,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:26:20',
                'updated_at' => '2018-04-28 12:26:20',
            ),
            404 => 
            array (
                'id' => 1405,
                'song_id' => 347,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:26:20',
                'updated_at' => '2018-04-28 12:26:20',
            ),
            405 => 
            array (
                'id' => 1406,
                'song_id' => 347,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:26:20',
                'updated_at' => '2018-04-28 12:26:20',
            ),
            406 => 
            array (
                'id' => 1407,
                'song_id' => 348,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:26:22',
                'updated_at' => '2018-04-28 12:26:22',
            ),
            407 => 
            array (
                'id' => 1408,
                'song_id' => 348,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:26:22',
                'updated_at' => '2018-04-28 12:26:22',
            ),
            408 => 
            array (
                'id' => 1409,
                'song_id' => 348,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:26:22',
                'updated_at' => '2018-04-28 12:26:22',
            ),
            409 => 
            array (
                'id' => 1410,
                'song_id' => 348,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:26:22',
                'updated_at' => '2018-04-28 12:26:22',
            ),
            410 => 
            array (
                'id' => 1411,
                'song_id' => 348,
                'tag_id' => 148,
                'created_at' => '2018-04-28 12:26:22',
                'updated_at' => '2018-04-28 12:26:22',
            ),
            411 => 
            array (
                'id' => 1412,
                'song_id' => 349,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:26:23',
                'updated_at' => '2018-04-28 12:26:23',
            ),
            412 => 
            array (
                'id' => 1413,
                'song_id' => 349,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:23',
                'updated_at' => '2018-04-28 12:26:23',
            ),
            413 => 
            array (
                'id' => 1414,
                'song_id' => 349,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:23',
                'updated_at' => '2018-04-28 12:26:23',
            ),
            414 => 
            array (
                'id' => 1415,
                'song_id' => 349,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:23',
                'updated_at' => '2018-04-28 12:26:23',
            ),
            415 => 
            array (
                'id' => 1416,
                'song_id' => 350,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:26:24',
                'updated_at' => '2018-04-28 12:26:24',
            ),
            416 => 
            array (
                'id' => 1417,
                'song_id' => 350,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:24',
                'updated_at' => '2018-04-28 12:26:24',
            ),
            417 => 
            array (
                'id' => 1418,
                'song_id' => 350,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:24',
                'updated_at' => '2018-04-28 12:26:24',
            ),
            418 => 
            array (
                'id' => 1419,
                'song_id' => 350,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:24',
                'updated_at' => '2018-04-28 12:26:24',
            ),
            419 => 
            array (
                'id' => 1420,
                'song_id' => 351,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:26:26',
                'updated_at' => '2018-04-28 12:26:26',
            ),
            420 => 
            array (
                'id' => 1421,
                'song_id' => 351,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:26',
                'updated_at' => '2018-04-28 12:26:26',
            ),
            421 => 
            array (
                'id' => 1422,
                'song_id' => 351,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:26',
                'updated_at' => '2018-04-28 12:26:26',
            ),
            422 => 
            array (
                'id' => 1423,
                'song_id' => 351,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:26',
                'updated_at' => '2018-04-28 12:26:26',
            ),
            423 => 
            array (
                'id' => 1424,
                'song_id' => 352,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:26:27',
                'updated_at' => '2018-04-28 12:26:27',
            ),
            424 => 
            array (
                'id' => 1425,
                'song_id' => 352,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:27',
                'updated_at' => '2018-04-28 12:26:27',
            ),
            425 => 
            array (
                'id' => 1426,
                'song_id' => 352,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:27',
                'updated_at' => '2018-04-28 12:26:27',
            ),
            426 => 
            array (
                'id' => 1427,
                'song_id' => 352,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:27',
                'updated_at' => '2018-04-28 12:26:27',
            ),
            427 => 
            array (
                'id' => 1428,
                'song_id' => 353,
                'tag_id' => 140,
                'created_at' => '2018-04-28 12:26:29',
                'updated_at' => '2018-04-28 12:26:29',
            ),
            428 => 
            array (
                'id' => 1429,
                'song_id' => 353,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:29',
                'updated_at' => '2018-04-28 12:26:29',
            ),
            429 => 
            array (
                'id' => 1430,
                'song_id' => 353,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:29',
                'updated_at' => '2018-04-28 12:26:29',
            ),
            430 => 
            array (
                'id' => 1431,
                'song_id' => 353,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:29',
                'updated_at' => '2018-04-28 12:26:29',
            ),
            431 => 
            array (
                'id' => 1432,
                'song_id' => 354,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:30',
                'updated_at' => '2018-04-28 12:26:30',
            ),
            432 => 
            array (
                'id' => 1433,
                'song_id' => 354,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:30',
                'updated_at' => '2018-04-28 12:26:30',
            ),
            433 => 
            array (
                'id' => 1434,
                'song_id' => 354,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:30',
                'updated_at' => '2018-04-28 12:26:30',
            ),
            434 => 
            array (
                'id' => 1435,
                'song_id' => 354,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:30',
                'updated_at' => '2018-04-28 12:26:30',
            ),
            435 => 
            array (
                'id' => 1436,
                'song_id' => 354,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:30',
                'updated_at' => '2018-04-28 12:26:30',
            ),
            436 => 
            array (
                'id' => 1437,
                'song_id' => 355,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:32',
                'updated_at' => '2018-04-28 12:26:32',
            ),
            437 => 
            array (
                'id' => 1438,
                'song_id' => 355,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:32',
                'updated_at' => '2018-04-28 12:26:32',
            ),
            438 => 
            array (
                'id' => 1439,
                'song_id' => 355,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:32',
                'updated_at' => '2018-04-28 12:26:32',
            ),
            439 => 
            array (
                'id' => 1440,
                'song_id' => 355,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:32',
                'updated_at' => '2018-04-28 12:26:32',
            ),
            440 => 
            array (
                'id' => 1441,
                'song_id' => 355,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:32',
                'updated_at' => '2018-04-28 12:26:32',
            ),
            441 => 
            array (
                'id' => 1442,
                'song_id' => 356,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:33',
                'updated_at' => '2018-04-28 12:26:33',
            ),
            442 => 
            array (
                'id' => 1443,
                'song_id' => 356,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:33',
                'updated_at' => '2018-04-28 12:26:33',
            ),
            443 => 
            array (
                'id' => 1444,
                'song_id' => 356,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:33',
                'updated_at' => '2018-04-28 12:26:33',
            ),
            444 => 
            array (
                'id' => 1445,
                'song_id' => 356,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:33',
                'updated_at' => '2018-04-28 12:26:33',
            ),
            445 => 
            array (
                'id' => 1446,
                'song_id' => 357,
                'tag_id' => 173,
                'created_at' => '2018-04-28 12:26:35',
                'updated_at' => '2018-04-28 12:26:35',
            ),
            446 => 
            array (
                'id' => 1447,
                'song_id' => 357,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:35',
                'updated_at' => '2018-04-28 12:26:35',
            ),
            447 => 
            array (
                'id' => 1448,
                'song_id' => 357,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:35',
                'updated_at' => '2018-04-28 12:26:35',
            ),
            448 => 
            array (
                'id' => 1449,
                'song_id' => 357,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:35',
                'updated_at' => '2018-04-28 12:26:35',
            ),
            449 => 
            array (
                'id' => 1450,
                'song_id' => 357,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:35',
                'updated_at' => '2018-04-28 12:26:35',
            ),
            450 => 
            array (
                'id' => 1451,
                'song_id' => 358,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:36',
                'updated_at' => '2018-04-28 12:26:36',
            ),
            451 => 
            array (
                'id' => 1452,
                'song_id' => 358,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:36',
                'updated_at' => '2018-04-28 12:26:36',
            ),
            452 => 
            array (
                'id' => 1453,
                'song_id' => 358,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:36',
                'updated_at' => '2018-04-28 12:26:36',
            ),
            453 => 
            array (
                'id' => 1454,
                'song_id' => 358,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:36',
                'updated_at' => '2018-04-28 12:26:36',
            ),
            454 => 
            array (
                'id' => 1455,
                'song_id' => 358,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:36',
                'updated_at' => '2018-04-28 12:26:36',
            ),
            455 => 
            array (
                'id' => 1456,
                'song_id' => 359,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:38',
                'updated_at' => '2018-04-28 12:26:38',
            ),
            456 => 
            array (
                'id' => 1457,
                'song_id' => 359,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:38',
                'updated_at' => '2018-04-28 12:26:38',
            ),
            457 => 
            array (
                'id' => 1458,
                'song_id' => 359,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:38',
                'updated_at' => '2018-04-28 12:26:38',
            ),
            458 => 
            array (
                'id' => 1459,
                'song_id' => 359,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:38',
                'updated_at' => '2018-04-28 12:26:38',
            ),
            459 => 
            array (
                'id' => 1460,
                'song_id' => 360,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:39',
                'updated_at' => '2018-04-28 12:26:39',
            ),
            460 => 
            array (
                'id' => 1461,
                'song_id' => 360,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:39',
                'updated_at' => '2018-04-28 12:26:39',
            ),
            461 => 
            array (
                'id' => 1462,
                'song_id' => 360,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:39',
                'updated_at' => '2018-04-28 12:26:39',
            ),
            462 => 
            array (
                'id' => 1463,
                'song_id' => 360,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:39',
                'updated_at' => '2018-04-28 12:26:39',
            ),
            463 => 
            array (
                'id' => 1464,
                'song_id' => 361,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:41',
                'updated_at' => '2018-04-28 12:26:41',
            ),
            464 => 
            array (
                'id' => 1465,
                'song_id' => 361,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:41',
                'updated_at' => '2018-04-28 12:26:41',
            ),
            465 => 
            array (
                'id' => 1466,
                'song_id' => 361,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:26:41',
                'updated_at' => '2018-04-28 12:26:41',
            ),
            466 => 
            array (
                'id' => 1467,
                'song_id' => 361,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:41',
                'updated_at' => '2018-04-28 12:26:41',
            ),
            467 => 
            array (
                'id' => 1468,
                'song_id' => 363,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:43',
                'updated_at' => '2018-04-28 12:26:43',
            ),
            468 => 
            array (
                'id' => 1469,
                'song_id' => 363,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:43',
                'updated_at' => '2018-04-28 12:26:43',
            ),
            469 => 
            array (
                'id' => 1470,
                'song_id' => 363,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:43',
                'updated_at' => '2018-04-28 12:26:43',
            ),
            470 => 
            array (
                'id' => 1471,
                'song_id' => 363,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:44',
                'updated_at' => '2018-04-28 12:26:44',
            ),
            471 => 
            array (
                'id' => 1472,
                'song_id' => 364,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:45',
                'updated_at' => '2018-04-28 12:26:45',
            ),
            472 => 
            array (
                'id' => 1473,
                'song_id' => 364,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:45',
                'updated_at' => '2018-04-28 12:26:45',
            ),
            473 => 
            array (
                'id' => 1474,
                'song_id' => 364,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:45',
                'updated_at' => '2018-04-28 12:26:45',
            ),
            474 => 
            array (
                'id' => 1475,
                'song_id' => 364,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:45',
                'updated_at' => '2018-04-28 12:26:45',
            ),
            475 => 
            array (
                'id' => 1476,
                'song_id' => 365,
                'tag_id' => 174,
                'created_at' => '2018-04-28 12:26:46',
                'updated_at' => '2018-04-28 12:26:46',
            ),
            476 => 
            array (
                'id' => 1477,
                'song_id' => 365,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:46',
                'updated_at' => '2018-04-28 12:26:46',
            ),
            477 => 
            array (
                'id' => 1478,
                'song_id' => 365,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:46',
                'updated_at' => '2018-04-28 12:26:46',
            ),
            478 => 
            array (
                'id' => 1479,
                'song_id' => 365,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:46',
                'updated_at' => '2018-04-28 12:26:46',
            ),
            479 => 
            array (
                'id' => 1480,
                'song_id' => 365,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:46',
                'updated_at' => '2018-04-28 12:26:46',
            ),
            480 => 
            array (
                'id' => 1481,
                'song_id' => 366,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:48',
                'updated_at' => '2018-04-28 12:26:48',
            ),
            481 => 
            array (
                'id' => 1482,
                'song_id' => 366,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:48',
                'updated_at' => '2018-04-28 12:26:48',
            ),
            482 => 
            array (
                'id' => 1483,
                'song_id' => 366,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:48',
                'updated_at' => '2018-04-28 12:26:48',
            ),
            483 => 
            array (
                'id' => 1484,
                'song_id' => 366,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:48',
                'updated_at' => '2018-04-28 12:26:48',
            ),
            484 => 
            array (
                'id' => 1485,
                'song_id' => 367,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:49',
                'updated_at' => '2018-04-28 12:26:49',
            ),
            485 => 
            array (
                'id' => 1486,
                'song_id' => 367,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:49',
                'updated_at' => '2018-04-28 12:26:49',
            ),
            486 => 
            array (
                'id' => 1487,
                'song_id' => 367,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:49',
                'updated_at' => '2018-04-28 12:26:49',
            ),
            487 => 
            array (
                'id' => 1488,
                'song_id' => 367,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:49',
                'updated_at' => '2018-04-28 12:26:49',
            ),
            488 => 
            array (
                'id' => 1489,
                'song_id' => 369,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:52',
                'updated_at' => '2018-04-28 12:26:52',
            ),
            489 => 
            array (
                'id' => 1490,
                'song_id' => 369,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:52',
                'updated_at' => '2018-04-28 12:26:52',
            ),
            490 => 
            array (
                'id' => 1491,
                'song_id' => 369,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:52',
                'updated_at' => '2018-04-28 12:26:52',
            ),
            491 => 
            array (
                'id' => 1492,
                'song_id' => 369,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:52',
                'updated_at' => '2018-04-28 12:26:52',
            ),
            492 => 
            array (
                'id' => 1493,
                'song_id' => 370,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:54',
                'updated_at' => '2018-04-28 12:26:54',
            ),
            493 => 
            array (
                'id' => 1494,
                'song_id' => 370,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:54',
                'updated_at' => '2018-04-28 12:26:54',
            ),
            494 => 
            array (
                'id' => 1495,
                'song_id' => 370,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:54',
                'updated_at' => '2018-04-28 12:26:54',
            ),
            495 => 
            array (
                'id' => 1496,
                'song_id' => 370,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:54',
                'updated_at' => '2018-04-28 12:26:54',
            ),
            496 => 
            array (
                'id' => 1497,
                'song_id' => 370,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:26:54',
                'updated_at' => '2018-04-28 12:26:54',
            ),
            497 => 
            array (
                'id' => 1498,
                'song_id' => 371,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:55',
                'updated_at' => '2018-04-28 12:26:55',
            ),
            498 => 
            array (
                'id' => 1499,
                'song_id' => 371,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:55',
                'updated_at' => '2018-04-28 12:26:55',
            ),
            499 => 
            array (
                'id' => 1500,
                'song_id' => 371,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:55',
                'updated_at' => '2018-04-28 12:26:55',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'song_id' => 371,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:26:55',
                'updated_at' => '2018-04-28 12:26:55',
            ),
            1 => 
            array (
                'id' => 1502,
                'song_id' => 372,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:57',
                'updated_at' => '2018-04-28 12:26:57',
            ),
            2 => 
            array (
                'id' => 1503,
                'song_id' => 372,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:26:57',
                'updated_at' => '2018-04-28 12:26:57',
            ),
            3 => 
            array (
                'id' => 1504,
                'song_id' => 372,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:26:57',
                'updated_at' => '2018-04-28 12:26:57',
            ),
            4 => 
            array (
                'id' => 1505,
                'song_id' => 372,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:57',
                'updated_at' => '2018-04-28 12:26:57',
            ),
            5 => 
            array (
                'id' => 1506,
                'song_id' => 373,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:26:58',
                'updated_at' => '2018-04-28 12:26:58',
            ),
            6 => 
            array (
                'id' => 1507,
                'song_id' => 373,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:26:58',
                'updated_at' => '2018-04-28 12:26:58',
            ),
            7 => 
            array (
                'id' => 1508,
                'song_id' => 373,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:26:58',
                'updated_at' => '2018-04-28 12:26:58',
            ),
            8 => 
            array (
                'id' => 1509,
                'song_id' => 373,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:26:58',
                'updated_at' => '2018-04-28 12:26:58',
            ),
            9 => 
            array (
                'id' => 1510,
                'song_id' => 373,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:26:58',
                'updated_at' => '2018-04-28 12:26:58',
            ),
            10 => 
            array (
                'id' => 1511,
                'song_id' => 374,
                'tag_id' => 175,
                'created_at' => '2018-04-28 12:27:00',
                'updated_at' => '2018-04-28 12:27:00',
            ),
            11 => 
            array (
                'id' => 1512,
                'song_id' => 374,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:00',
                'updated_at' => '2018-04-28 12:27:00',
            ),
            12 => 
            array (
                'id' => 1513,
                'song_id' => 374,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:27:00',
                'updated_at' => '2018-04-28 12:27:00',
            ),
            13 => 
            array (
                'id' => 1514,
                'song_id' => 374,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:00',
                'updated_at' => '2018-04-28 12:27:00',
            ),
            14 => 
            array (
                'id' => 1515,
                'song_id' => 375,
                'tag_id' => 176,
                'created_at' => '2018-04-28 12:27:01',
                'updated_at' => '2018-04-28 12:27:01',
            ),
            15 => 
            array (
                'id' => 1516,
                'song_id' => 375,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:01',
                'updated_at' => '2018-04-28 12:27:01',
            ),
            16 => 
            array (
                'id' => 1517,
                'song_id' => 375,
                'tag_id' => 128,
                'created_at' => '2018-04-28 12:27:01',
                'updated_at' => '2018-04-28 12:27:01',
            ),
            17 => 
            array (
                'id' => 1518,
                'song_id' => 375,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:01',
                'updated_at' => '2018-04-28 12:27:01',
            ),
            18 => 
            array (
                'id' => 1519,
                'song_id' => 376,
                'tag_id' => 177,
                'created_at' => '2018-04-28 12:27:03',
                'updated_at' => '2018-04-28 12:27:03',
            ),
            19 => 
            array (
                'id' => 1520,
                'song_id' => 376,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:27:03',
                'updated_at' => '2018-04-28 12:27:03',
            ),
            20 => 
            array (
                'id' => 1521,
                'song_id' => 376,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:03',
                'updated_at' => '2018-04-28 12:27:03',
            ),
            21 => 
            array (
                'id' => 1522,
                'song_id' => 376,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:03',
                'updated_at' => '2018-04-28 12:27:03',
            ),
            22 => 
            array (
                'id' => 1523,
                'song_id' => 376,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:27:03',
                'updated_at' => '2018-04-28 12:27:03',
            ),
            23 => 
            array (
                'id' => 1524,
                'song_id' => 378,
                'tag_id' => 178,
                'created_at' => '2018-04-28 12:27:06',
                'updated_at' => '2018-04-28 12:27:06',
            ),
            24 => 
            array (
                'id' => 1525,
                'song_id' => 378,
                'tag_id' => 179,
                'created_at' => '2018-04-28 12:27:06',
                'updated_at' => '2018-04-28 12:27:06',
            ),
            25 => 
            array (
                'id' => 1526,
                'song_id' => 378,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:27:06',
                'updated_at' => '2018-04-28 12:27:06',
            ),
            26 => 
            array (
                'id' => 1527,
                'song_id' => 378,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:06',
                'updated_at' => '2018-04-28 12:27:06',
            ),
            27 => 
            array (
                'id' => 1528,
                'song_id' => 379,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:07',
                'updated_at' => '2018-04-28 12:27:07',
            ),
            28 => 
            array (
                'id' => 1529,
                'song_id' => 379,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:07',
                'updated_at' => '2018-04-28 12:27:07',
            ),
            29 => 
            array (
                'id' => 1530,
                'song_id' => 379,
                'tag_id' => 36,
                'created_at' => '2018-04-28 12:27:07',
                'updated_at' => '2018-04-28 12:27:07',
            ),
            30 => 
            array (
                'id' => 1531,
                'song_id' => 379,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:07',
                'updated_at' => '2018-04-28 12:27:07',
            ),
            31 => 
            array (
                'id' => 1532,
                'song_id' => 379,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:27:07',
                'updated_at' => '2018-04-28 12:27:07',
            ),
            32 => 
            array (
                'id' => 1533,
                'song_id' => 381,
                'tag_id' => 180,
                'created_at' => '2018-04-28 12:27:10',
                'updated_at' => '2018-04-28 12:27:10',
            ),
            33 => 
            array (
                'id' => 1534,
                'song_id' => 381,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:10',
                'updated_at' => '2018-04-28 12:27:10',
            ),
            34 => 
            array (
                'id' => 1535,
                'song_id' => 381,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:10',
                'updated_at' => '2018-04-28 12:27:10',
            ),
            35 => 
            array (
                'id' => 1536,
                'song_id' => 381,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:27:10',
                'updated_at' => '2018-04-28 12:27:10',
            ),
            36 => 
            array (
                'id' => 1537,
                'song_id' => 381,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:27:10',
                'updated_at' => '2018-04-28 12:27:10',
            ),
            37 => 
            array (
                'id' => 1538,
                'song_id' => 382,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:11',
                'updated_at' => '2018-04-28 12:27:11',
            ),
            38 => 
            array (
                'id' => 1539,
                'song_id' => 382,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:27:11',
                'updated_at' => '2018-04-28 12:27:11',
            ),
            39 => 
            array (
                'id' => 1540,
                'song_id' => 382,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:11',
                'updated_at' => '2018-04-28 12:27:11',
            ),
            40 => 
            array (
                'id' => 1541,
                'song_id' => 382,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:11',
                'updated_at' => '2018-04-28 12:27:11',
            ),
            41 => 
            array (
                'id' => 1542,
                'song_id' => 383,
                'tag_id' => 181,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2018-04-28 12:27:13',
            ),
            42 => 
            array (
                'id' => 1543,
                'song_id' => 383,
                'tag_id' => 182,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2018-04-28 12:27:13',
            ),
            43 => 
            array (
                'id' => 1544,
                'song_id' => 383,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2018-04-28 12:27:13',
            ),
            44 => 
            array (
                'id' => 1545,
                'song_id' => 383,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2018-04-28 12:27:13',
            ),
            45 => 
            array (
                'id' => 1546,
                'song_id' => 383,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:13',
                'updated_at' => '2018-04-28 12:27:13',
            ),
            46 => 
            array (
                'id' => 1547,
                'song_id' => 384,
                'tag_id' => 183,
                'created_at' => '2018-04-28 12:27:14',
                'updated_at' => '2018-04-28 12:27:14',
            ),
            47 => 
            array (
                'id' => 1548,
                'song_id' => 384,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:14',
                'updated_at' => '2018-04-28 12:27:14',
            ),
            48 => 
            array (
                'id' => 1549,
                'song_id' => 384,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:27:14',
                'updated_at' => '2018-04-28 12:27:14',
            ),
            49 => 
            array (
                'id' => 1550,
                'song_id' => 384,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:14',
                'updated_at' => '2018-04-28 12:27:14',
            ),
            50 => 
            array (
                'id' => 1551,
                'song_id' => 384,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:27:14',
                'updated_at' => '2018-04-28 12:27:14',
            ),
            51 => 
            array (
                'id' => 1552,
                'song_id' => 385,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:16',
                'updated_at' => '2018-04-28 12:27:16',
            ),
            52 => 
            array (
                'id' => 1553,
                'song_id' => 385,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:27:16',
                'updated_at' => '2018-04-28 12:27:16',
            ),
            53 => 
            array (
                'id' => 1554,
                'song_id' => 385,
                'tag_id' => 181,
                'created_at' => '2018-04-28 12:27:16',
                'updated_at' => '2018-04-28 12:27:16',
            ),
            54 => 
            array (
                'id' => 1555,
                'song_id' => 385,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:27:16',
                'updated_at' => '2018-04-28 12:27:16',
            ),
            55 => 
            array (
                'id' => 1556,
                'song_id' => 385,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:16',
                'updated_at' => '2018-04-28 12:27:16',
            ),
            56 => 
            array (
                'id' => 1557,
                'song_id' => 386,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:17',
                'updated_at' => '2018-04-28 12:27:17',
            ),
            57 => 
            array (
                'id' => 1558,
                'song_id' => 386,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:17',
                'updated_at' => '2018-04-28 12:27:17',
            ),
            58 => 
            array (
                'id' => 1559,
                'song_id' => 386,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:17',
                'updated_at' => '2018-04-28 12:27:17',
            ),
            59 => 
            array (
                'id' => 1560,
                'song_id' => 386,
                'tag_id' => 122,
                'created_at' => '2018-04-28 12:27:17',
                'updated_at' => '2018-04-28 12:27:17',
            ),
            60 => 
            array (
                'id' => 1561,
                'song_id' => 387,
                'tag_id' => 184,
                'created_at' => '2018-04-28 12:27:19',
                'updated_at' => '2018-04-28 12:27:19',
            ),
            61 => 
            array (
                'id' => 1562,
                'song_id' => 387,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:19',
                'updated_at' => '2018-04-28 12:27:19',
            ),
            62 => 
            array (
                'id' => 1563,
                'song_id' => 387,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:19',
                'updated_at' => '2018-04-28 12:27:19',
            ),
            63 => 
            array (
                'id' => 1564,
                'song_id' => 387,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:19',
                'updated_at' => '2018-04-28 12:27:19',
            ),
            64 => 
            array (
                'id' => 1565,
                'song_id' => 387,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:27:19',
                'updated_at' => '2018-04-28 12:27:19',
            ),
            65 => 
            array (
                'id' => 1566,
                'song_id' => 388,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:20',
                'updated_at' => '2018-04-28 12:27:20',
            ),
            66 => 
            array (
                'id' => 1567,
                'song_id' => 388,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:27:20',
                'updated_at' => '2018-04-28 12:27:20',
            ),
            67 => 
            array (
                'id' => 1568,
                'song_id' => 388,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:20',
                'updated_at' => '2018-04-28 12:27:20',
            ),
            68 => 
            array (
                'id' => 1569,
                'song_id' => 388,
                'tag_id' => 122,
                'created_at' => '2018-04-28 12:27:20',
                'updated_at' => '2018-04-28 12:27:20',
            ),
            69 => 
            array (
                'id' => 1570,
                'song_id' => 390,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:23',
                'updated_at' => '2018-04-28 12:27:23',
            ),
            70 => 
            array (
                'id' => 1571,
                'song_id' => 390,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:23',
                'updated_at' => '2018-04-28 12:27:23',
            ),
            71 => 
            array (
                'id' => 1572,
                'song_id' => 390,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:23',
                'updated_at' => '2018-04-28 12:27:23',
            ),
            72 => 
            array (
                'id' => 1573,
                'song_id' => 390,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:27:23',
                'updated_at' => '2018-04-28 12:27:23',
            ),
            73 => 
            array (
                'id' => 1574,
                'song_id' => 391,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:24',
                'updated_at' => '2018-04-28 12:27:24',
            ),
            74 => 
            array (
                'id' => 1575,
                'song_id' => 391,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:27:24',
                'updated_at' => '2018-04-28 12:27:24',
            ),
            75 => 
            array (
                'id' => 1576,
                'song_id' => 391,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:24',
                'updated_at' => '2018-04-28 12:27:24',
            ),
            76 => 
            array (
                'id' => 1577,
                'song_id' => 391,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:24',
                'updated_at' => '2018-04-28 12:27:24',
            ),
            77 => 
            array (
                'id' => 1578,
                'song_id' => 391,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:27:24',
                'updated_at' => '2018-04-28 12:27:24',
            ),
            78 => 
            array (
                'id' => 1579,
                'song_id' => 392,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:26',
                'updated_at' => '2018-04-28 12:27:26',
            ),
            79 => 
            array (
                'id' => 1580,
                'song_id' => 392,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:26',
                'updated_at' => '2018-04-28 12:27:26',
            ),
            80 => 
            array (
                'id' => 1581,
                'song_id' => 392,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:26',
                'updated_at' => '2018-04-28 12:27:26',
            ),
            81 => 
            array (
                'id' => 1582,
                'song_id' => 392,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:27:26',
                'updated_at' => '2018-04-28 12:27:26',
            ),
            82 => 
            array (
                'id' => 1583,
                'song_id' => 392,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:27:26',
                'updated_at' => '2018-04-28 12:27:26',
            ),
            83 => 
            array (
                'id' => 1584,
                'song_id' => 393,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:27',
                'updated_at' => '2018-04-28 12:27:27',
            ),
            84 => 
            array (
                'id' => 1585,
                'song_id' => 393,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:27',
                'updated_at' => '2018-04-28 12:27:27',
            ),
            85 => 
            array (
                'id' => 1586,
                'song_id' => 393,
                'tag_id' => 131,
                'created_at' => '2018-04-28 12:27:27',
                'updated_at' => '2018-04-28 12:27:27',
            ),
            86 => 
            array (
                'id' => 1587,
                'song_id' => 393,
                'tag_id' => 130,
                'created_at' => '2018-04-28 12:27:27',
                'updated_at' => '2018-04-28 12:27:27',
            ),
            87 => 
            array (
                'id' => 1588,
                'song_id' => 393,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:27:27',
                'updated_at' => '2018-04-28 12:27:27',
            ),
            88 => 
            array (
                'id' => 1589,
                'song_id' => 394,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:29',
                'updated_at' => '2018-04-28 12:27:29',
            ),
            89 => 
            array (
                'id' => 1590,
                'song_id' => 394,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:27:29',
                'updated_at' => '2018-04-28 12:27:29',
            ),
            90 => 
            array (
                'id' => 1591,
                'song_id' => 394,
                'tag_id' => 67,
                'created_at' => '2018-04-28 12:27:29',
                'updated_at' => '2018-04-28 12:27:29',
            ),
            91 => 
            array (
                'id' => 1592,
                'song_id' => 394,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:29',
                'updated_at' => '2018-04-28 12:27:29',
            ),
            92 => 
            array (
                'id' => 1593,
                'song_id' => 394,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:27:29',
                'updated_at' => '2018-04-28 12:27:29',
            ),
            93 => 
            array (
                'id' => 1594,
                'song_id' => 395,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:31',
                'updated_at' => '2018-04-28 12:27:31',
            ),
            94 => 
            array (
                'id' => 1595,
                'song_id' => 395,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:27:31',
                'updated_at' => '2018-04-28 12:27:31',
            ),
            95 => 
            array (
                'id' => 1596,
                'song_id' => 395,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:27:31',
                'updated_at' => '2018-04-28 12:27:31',
            ),
            96 => 
            array (
                'id' => 1597,
                'song_id' => 395,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:31',
                'updated_at' => '2018-04-28 12:27:31',
            ),
            97 => 
            array (
                'id' => 1598,
                'song_id' => 395,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:31',
                'updated_at' => '2018-04-28 12:27:31',
            ),
            98 => 
            array (
                'id' => 1599,
                'song_id' => 397,
                'tag_id' => 185,
                'created_at' => '2018-04-28 12:27:34',
                'updated_at' => '2018-04-28 12:27:34',
            ),
            99 => 
            array (
                'id' => 1600,
                'song_id' => 397,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:34',
                'updated_at' => '2018-04-28 12:27:34',
            ),
            100 => 
            array (
                'id' => 1601,
                'song_id' => 397,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:34',
                'updated_at' => '2018-04-28 12:27:34',
            ),
            101 => 
            array (
                'id' => 1602,
                'song_id' => 397,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:34',
                'updated_at' => '2018-04-28 12:27:34',
            ),
            102 => 
            array (
                'id' => 1603,
                'song_id' => 397,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:34',
                'updated_at' => '2018-04-28 12:27:34',
            ),
            103 => 
            array (
                'id' => 1604,
                'song_id' => 398,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:35',
                'updated_at' => '2018-04-28 12:27:35',
            ),
            104 => 
            array (
                'id' => 1605,
                'song_id' => 398,
                'tag_id' => 130,
                'created_at' => '2018-04-28 12:27:35',
                'updated_at' => '2018-04-28 12:27:35',
            ),
            105 => 
            array (
                'id' => 1606,
                'song_id' => 398,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:27:35',
                'updated_at' => '2018-04-28 12:27:35',
            ),
            106 => 
            array (
                'id' => 1607,
                'song_id' => 398,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:27:35',
                'updated_at' => '2018-04-28 12:27:35',
            ),
            107 => 
            array (
                'id' => 1608,
                'song_id' => 398,
                'tag_id' => 29,
                'created_at' => '2018-04-28 12:27:35',
                'updated_at' => '2018-04-28 12:27:35',
            ),
            108 => 
            array (
                'id' => 1609,
                'song_id' => 399,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:37',
                'updated_at' => '2018-04-28 12:27:37',
            ),
            109 => 
            array (
                'id' => 1610,
                'song_id' => 399,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:27:37',
                'updated_at' => '2018-04-28 12:27:37',
            ),
            110 => 
            array (
                'id' => 1611,
                'song_id' => 399,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:27:37',
                'updated_at' => '2018-04-28 12:27:37',
            ),
            111 => 
            array (
                'id' => 1612,
                'song_id' => 399,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:37',
                'updated_at' => '2018-04-28 12:27:37',
            ),
            112 => 
            array (
                'id' => 1613,
                'song_id' => 400,
                'tag_id' => 186,
                'created_at' => '2018-04-28 12:27:38',
                'updated_at' => '2018-04-28 12:27:38',
            ),
            113 => 
            array (
                'id' => 1614,
                'song_id' => 400,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:38',
                'updated_at' => '2018-04-28 12:27:38',
            ),
            114 => 
            array (
                'id' => 1615,
                'song_id' => 400,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:27:38',
                'updated_at' => '2018-04-28 12:27:38',
            ),
            115 => 
            array (
                'id' => 1616,
                'song_id' => 400,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:27:38',
                'updated_at' => '2018-04-28 12:27:38',
            ),
            116 => 
            array (
                'id' => 1617,
                'song_id' => 400,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:38',
                'updated_at' => '2018-04-28 12:27:38',
            ),
            117 => 
            array (
                'id' => 1618,
                'song_id' => 401,
                'tag_id' => 187,
                'created_at' => '2018-04-28 12:27:40',
                'updated_at' => '2018-04-28 12:27:40',
            ),
            118 => 
            array (
                'id' => 1619,
                'song_id' => 401,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:27:40',
                'updated_at' => '2018-04-28 12:27:40',
            ),
            119 => 
            array (
                'id' => 1620,
                'song_id' => 401,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:40',
                'updated_at' => '2018-04-28 12:27:40',
            ),
            120 => 
            array (
                'id' => 1621,
                'song_id' => 401,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:27:40',
                'updated_at' => '2018-04-28 12:27:40',
            ),
            121 => 
            array (
                'id' => 1622,
                'song_id' => 401,
                'tag_id' => 91,
                'created_at' => '2018-04-28 12:27:40',
                'updated_at' => '2018-04-28 12:27:40',
            ),
            122 => 
            array (
                'id' => 1623,
                'song_id' => 402,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:41',
                'updated_at' => '2018-04-28 12:27:41',
            ),
            123 => 
            array (
                'id' => 1624,
                'song_id' => 402,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:41',
                'updated_at' => '2018-04-28 12:27:41',
            ),
            124 => 
            array (
                'id' => 1625,
                'song_id' => 402,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:41',
                'updated_at' => '2018-04-28 12:27:41',
            ),
            125 => 
            array (
                'id' => 1626,
                'song_id' => 402,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:41',
                'updated_at' => '2018-04-28 12:27:41',
            ),
            126 => 
            array (
                'id' => 1627,
                'song_id' => 403,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:43',
                'updated_at' => '2018-04-28 12:27:43',
            ),
            127 => 
            array (
                'id' => 1628,
                'song_id' => 403,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:27:43',
                'updated_at' => '2018-04-28 12:27:43',
            ),
            128 => 
            array (
                'id' => 1629,
                'song_id' => 403,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:43',
                'updated_at' => '2018-04-28 12:27:43',
            ),
            129 => 
            array (
                'id' => 1630,
                'song_id' => 403,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:43',
                'updated_at' => '2018-04-28 12:27:43',
            ),
            130 => 
            array (
                'id' => 1631,
                'song_id' => 404,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:44',
                'updated_at' => '2018-04-28 12:27:44',
            ),
            131 => 
            array (
                'id' => 1632,
                'song_id' => 404,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:45',
                'updated_at' => '2018-04-28 12:27:45',
            ),
            132 => 
            array (
                'id' => 1633,
                'song_id' => 404,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:45',
                'updated_at' => '2018-04-28 12:27:45',
            ),
            133 => 
            array (
                'id' => 1634,
                'song_id' => 404,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:45',
                'updated_at' => '2018-04-28 12:27:45',
            ),
            134 => 
            array (
                'id' => 1635,
                'song_id' => 405,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:46',
                'updated_at' => '2018-04-28 12:27:46',
            ),
            135 => 
            array (
                'id' => 1636,
                'song_id' => 405,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:46',
                'updated_at' => '2018-04-28 12:27:46',
            ),
            136 => 
            array (
                'id' => 1637,
                'song_id' => 405,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:46',
                'updated_at' => '2018-04-28 12:27:46',
            ),
            137 => 
            array (
                'id' => 1638,
                'song_id' => 405,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:46',
                'updated_at' => '2018-04-28 12:27:46',
            ),
            138 => 
            array (
                'id' => 1639,
                'song_id' => 406,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:48',
                'updated_at' => '2018-04-28 12:27:48',
            ),
            139 => 
            array (
                'id' => 1640,
                'song_id' => 406,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:48',
                'updated_at' => '2018-04-28 12:27:48',
            ),
            140 => 
            array (
                'id' => 1641,
                'song_id' => 406,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:48',
                'updated_at' => '2018-04-28 12:27:48',
            ),
            141 => 
            array (
                'id' => 1642,
                'song_id' => 406,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:48',
                'updated_at' => '2018-04-28 12:27:48',
            ),
            142 => 
            array (
                'id' => 1643,
                'song_id' => 407,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:49',
                'updated_at' => '2018-04-28 12:27:49',
            ),
            143 => 
            array (
                'id' => 1644,
                'song_id' => 407,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:49',
                'updated_at' => '2018-04-28 12:27:49',
            ),
            144 => 
            array (
                'id' => 1645,
                'song_id' => 407,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:49',
                'updated_at' => '2018-04-28 12:27:49',
            ),
            145 => 
            array (
                'id' => 1646,
                'song_id' => 407,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:49',
                'updated_at' => '2018-04-28 12:27:49',
            ),
            146 => 
            array (
                'id' => 1647,
                'song_id' => 409,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:52',
                'updated_at' => '2018-04-28 12:27:52',
            ),
            147 => 
            array (
                'id' => 1648,
                'song_id' => 409,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:52',
                'updated_at' => '2018-04-28 12:27:52',
            ),
            148 => 
            array (
                'id' => 1649,
                'song_id' => 409,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:52',
                'updated_at' => '2018-04-28 12:27:52',
            ),
            149 => 
            array (
                'id' => 1650,
                'song_id' => 409,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:52',
                'updated_at' => '2018-04-28 12:27:52',
            ),
            150 => 
            array (
                'id' => 1651,
                'song_id' => 410,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:27:54',
                'updated_at' => '2018-04-28 12:27:54',
            ),
            151 => 
            array (
                'id' => 1652,
                'song_id' => 410,
                'tag_id' => 82,
                'created_at' => '2018-04-28 12:27:54',
                'updated_at' => '2018-04-28 12:27:54',
            ),
            152 => 
            array (
                'id' => 1653,
                'song_id' => 410,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:54',
                'updated_at' => '2018-04-28 12:27:54',
            ),
            153 => 
            array (
                'id' => 1654,
                'song_id' => 410,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:27:54',
                'updated_at' => '2018-04-28 12:27:54',
            ),
            154 => 
            array (
                'id' => 1655,
                'song_id' => 411,
                'tag_id' => 188,
                'created_at' => '2018-04-28 12:27:55',
                'updated_at' => '2018-04-28 12:27:55',
            ),
            155 => 
            array (
                'id' => 1656,
                'song_id' => 411,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:27:55',
                'updated_at' => '2018-04-28 12:27:55',
            ),
            156 => 
            array (
                'id' => 1657,
                'song_id' => 411,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:55',
                'updated_at' => '2018-04-28 12:27:55',
            ),
            157 => 
            array (
                'id' => 1658,
                'song_id' => 411,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:27:55',
                'updated_at' => '2018-04-28 12:27:55',
            ),
            158 => 
            array (
                'id' => 1659,
                'song_id' => 411,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:55',
                'updated_at' => '2018-04-28 12:27:55',
            ),
            159 => 
            array (
                'id' => 1660,
                'song_id' => 412,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:27:57',
                'updated_at' => '2018-04-28 12:27:57',
            ),
            160 => 
            array (
                'id' => 1661,
                'song_id' => 412,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:57',
                'updated_at' => '2018-04-28 12:27:57',
            ),
            161 => 
            array (
                'id' => 1662,
                'song_id' => 412,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:27:57',
                'updated_at' => '2018-04-28 12:27:57',
            ),
            162 => 
            array (
                'id' => 1663,
                'song_id' => 412,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:27:57',
                'updated_at' => '2018-04-28 12:27:57',
            ),
            163 => 
            array (
                'id' => 1664,
                'song_id' => 413,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:58',
                'updated_at' => '2018-04-28 12:27:58',
            ),
            164 => 
            array (
                'id' => 1665,
                'song_id' => 413,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:27:58',
                'updated_at' => '2018-04-28 12:27:58',
            ),
            165 => 
            array (
                'id' => 1666,
                'song_id' => 413,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:27:58',
                'updated_at' => '2018-04-28 12:27:58',
            ),
            166 => 
            array (
                'id' => 1667,
                'song_id' => 413,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:58',
                'updated_at' => '2018-04-28 12:27:58',
            ),
            167 => 
            array (
                'id' => 1668,
                'song_id' => 414,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:27:59',
                'updated_at' => '2018-04-28 12:27:59',
            ),
            168 => 
            array (
                'id' => 1669,
                'song_id' => 414,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:27:59',
                'updated_at' => '2018-04-28 12:27:59',
            ),
            169 => 
            array (
                'id' => 1670,
                'song_id' => 414,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:27:59',
                'updated_at' => '2018-04-28 12:27:59',
            ),
            170 => 
            array (
                'id' => 1671,
                'song_id' => 414,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:27:59',
                'updated_at' => '2018-04-28 12:27:59',
            ),
            171 => 
            array (
                'id' => 1672,
                'song_id' => 415,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:01',
                'updated_at' => '2018-04-28 12:28:01',
            ),
            172 => 
            array (
                'id' => 1673,
                'song_id' => 415,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:01',
                'updated_at' => '2018-04-28 12:28:01',
            ),
            173 => 
            array (
                'id' => 1674,
                'song_id' => 415,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:01',
                'updated_at' => '2018-04-28 12:28:01',
            ),
            174 => 
            array (
                'id' => 1675,
                'song_id' => 415,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:01',
                'updated_at' => '2018-04-28 12:28:01',
            ),
            175 => 
            array (
                'id' => 1676,
                'song_id' => 416,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:02',
                'updated_at' => '2018-04-28 12:28:02',
            ),
            176 => 
            array (
                'id' => 1677,
                'song_id' => 416,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:02',
                'updated_at' => '2018-04-28 12:28:02',
            ),
            177 => 
            array (
                'id' => 1678,
                'song_id' => 416,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:02',
                'updated_at' => '2018-04-28 12:28:02',
            ),
            178 => 
            array (
                'id' => 1679,
                'song_id' => 416,
                'tag_id' => 177,
                'created_at' => '2018-04-28 12:28:02',
                'updated_at' => '2018-04-28 12:28:02',
            ),
            179 => 
            array (
                'id' => 1680,
                'song_id' => 417,
                'tag_id' => 189,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2018-04-28 12:28:04',
            ),
            180 => 
            array (
                'id' => 1681,
                'song_id' => 417,
                'tag_id' => 190,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2018-04-28 12:28:04',
            ),
            181 => 
            array (
                'id' => 1682,
                'song_id' => 417,
                'tag_id' => 53,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2018-04-28 12:28:04',
            ),
            182 => 
            array (
                'id' => 1683,
                'song_id' => 417,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2018-04-28 12:28:04',
            ),
            183 => 
            array (
                'id' => 1684,
                'song_id' => 417,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:04',
                'updated_at' => '2018-04-28 12:28:04',
            ),
            184 => 
            array (
                'id' => 1685,
                'song_id' => 418,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:05',
                'updated_at' => '2018-04-28 12:28:05',
            ),
            185 => 
            array (
                'id' => 1686,
                'song_id' => 418,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:28:05',
                'updated_at' => '2018-04-28 12:28:05',
            ),
            186 => 
            array (
                'id' => 1687,
                'song_id' => 418,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:05',
                'updated_at' => '2018-04-28 12:28:05',
            ),
            187 => 
            array (
                'id' => 1688,
                'song_id' => 418,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:05',
                'updated_at' => '2018-04-28 12:28:05',
            ),
            188 => 
            array (
                'id' => 1689,
                'song_id' => 418,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:05',
                'updated_at' => '2018-04-28 12:28:05',
            ),
            189 => 
            array (
                'id' => 1690,
                'song_id' => 419,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:07',
                'updated_at' => '2018-04-28 12:28:07',
            ),
            190 => 
            array (
                'id' => 1691,
                'song_id' => 419,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:07',
                'updated_at' => '2018-04-28 12:28:07',
            ),
            191 => 
            array (
                'id' => 1692,
                'song_id' => 419,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:07',
                'updated_at' => '2018-04-28 12:28:07',
            ),
            192 => 
            array (
                'id' => 1693,
                'song_id' => 419,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:07',
                'updated_at' => '2018-04-28 12:28:07',
            ),
            193 => 
            array (
                'id' => 1694,
                'song_id' => 419,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:07',
                'updated_at' => '2018-04-28 12:28:07',
            ),
            194 => 
            array (
                'id' => 1695,
                'song_id' => 420,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:08',
                'updated_at' => '2018-04-28 12:28:08',
            ),
            195 => 
            array (
                'id' => 1696,
                'song_id' => 420,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:08',
                'updated_at' => '2018-04-28 12:28:08',
            ),
            196 => 
            array (
                'id' => 1697,
                'song_id' => 420,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:08',
                'updated_at' => '2018-04-28 12:28:08',
            ),
            197 => 
            array (
                'id' => 1698,
                'song_id' => 420,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:08',
                'updated_at' => '2018-04-28 12:28:08',
            ),
            198 => 
            array (
                'id' => 1699,
                'song_id' => 420,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:08',
                'updated_at' => '2018-04-28 12:28:08',
            ),
            199 => 
            array (
                'id' => 1700,
                'song_id' => 421,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:10',
                'updated_at' => '2018-04-28 12:28:10',
            ),
            200 => 
            array (
                'id' => 1701,
                'song_id' => 421,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:28:10',
                'updated_at' => '2018-04-28 12:28:10',
            ),
            201 => 
            array (
                'id' => 1702,
                'song_id' => 421,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:10',
                'updated_at' => '2018-04-28 12:28:10',
            ),
            202 => 
            array (
                'id' => 1703,
                'song_id' => 421,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:28:10',
                'updated_at' => '2018-04-28 12:28:10',
            ),
            203 => 
            array (
                'id' => 1704,
                'song_id' => 421,
                'tag_id' => 130,
                'created_at' => '2018-04-28 12:28:10',
                'updated_at' => '2018-04-28 12:28:10',
            ),
            204 => 
            array (
                'id' => 1705,
                'song_id' => 422,
                'tag_id' => 191,
                'created_at' => '2018-04-28 12:28:12',
                'updated_at' => '2018-04-28 12:28:12',
            ),
            205 => 
            array (
                'id' => 1706,
                'song_id' => 422,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:28:12',
                'updated_at' => '2018-04-28 12:28:12',
            ),
            206 => 
            array (
                'id' => 1707,
                'song_id' => 422,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:12',
                'updated_at' => '2018-04-28 12:28:12',
            ),
            207 => 
            array (
                'id' => 1708,
                'song_id' => 422,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:28:12',
                'updated_at' => '2018-04-28 12:28:12',
            ),
            208 => 
            array (
                'id' => 1709,
                'song_id' => 422,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:28:12',
                'updated_at' => '2018-04-28 12:28:12',
            ),
            209 => 
            array (
                'id' => 1710,
                'song_id' => 423,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:28:13',
                'updated_at' => '2018-04-28 12:28:13',
            ),
            210 => 
            array (
                'id' => 1711,
                'song_id' => 423,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:13',
                'updated_at' => '2018-04-28 12:28:13',
            ),
            211 => 
            array (
                'id' => 1712,
                'song_id' => 423,
                'tag_id' => 135,
                'created_at' => '2018-04-28 12:28:13',
                'updated_at' => '2018-04-28 12:28:13',
            ),
            212 => 
            array (
                'id' => 1713,
                'song_id' => 423,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:13',
                'updated_at' => '2018-04-28 12:28:13',
            ),
            213 => 
            array (
                'id' => 1714,
                'song_id' => 423,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:13',
                'updated_at' => '2018-04-28 12:28:13',
            ),
            214 => 
            array (
                'id' => 1715,
                'song_id' => 425,
                'tag_id' => 104,
                'created_at' => '2018-04-28 12:28:16',
                'updated_at' => '2018-04-28 12:28:16',
            ),
            215 => 
            array (
                'id' => 1716,
                'song_id' => 425,
                'tag_id' => 103,
                'created_at' => '2018-04-28 12:28:16',
                'updated_at' => '2018-04-28 12:28:16',
            ),
            216 => 
            array (
                'id' => 1717,
                'song_id' => 425,
                'tag_id' => 74,
                'created_at' => '2018-04-28 12:28:16',
                'updated_at' => '2018-04-28 12:28:16',
            ),
            217 => 
            array (
                'id' => 1718,
                'song_id' => 425,
                'tag_id' => 105,
                'created_at' => '2018-04-28 12:28:16',
                'updated_at' => '2018-04-28 12:28:16',
            ),
            218 => 
            array (
                'id' => 1719,
                'song_id' => 425,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:16',
                'updated_at' => '2018-04-28 12:28:16',
            ),
            219 => 
            array (
                'id' => 1720,
                'song_id' => 426,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:17',
                'updated_at' => '2018-04-28 12:28:17',
            ),
            220 => 
            array (
                'id' => 1721,
                'song_id' => 426,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:17',
                'updated_at' => '2018-04-28 12:28:17',
            ),
            221 => 
            array (
                'id' => 1722,
                'song_id' => 426,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:17',
                'updated_at' => '2018-04-28 12:28:17',
            ),
            222 => 
            array (
                'id' => 1723,
                'song_id' => 426,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:28:17',
                'updated_at' => '2018-04-28 12:28:17',
            ),
            223 => 
            array (
                'id' => 1724,
                'song_id' => 426,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:17',
                'updated_at' => '2018-04-28 12:28:17',
            ),
            224 => 
            array (
                'id' => 1725,
                'song_id' => 427,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:19',
                'updated_at' => '2018-04-28 12:28:19',
            ),
            225 => 
            array (
                'id' => 1726,
                'song_id' => 427,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:19',
                'updated_at' => '2018-04-28 12:28:19',
            ),
            226 => 
            array (
                'id' => 1727,
                'song_id' => 427,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:19',
                'updated_at' => '2018-04-28 12:28:19',
            ),
            227 => 
            array (
                'id' => 1728,
                'song_id' => 427,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:28:19',
                'updated_at' => '2018-04-28 12:28:19',
            ),
            228 => 
            array (
                'id' => 1729,
                'song_id' => 427,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:19',
                'updated_at' => '2018-04-28 12:28:19',
            ),
            229 => 
            array (
                'id' => 1730,
                'song_id' => 428,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:20',
                'updated_at' => '2018-04-28 12:28:20',
            ),
            230 => 
            array (
                'id' => 1731,
                'song_id' => 428,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:28:20',
                'updated_at' => '2018-04-28 12:28:20',
            ),
            231 => 
            array (
                'id' => 1732,
                'song_id' => 428,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:20',
                'updated_at' => '2018-04-28 12:28:20',
            ),
            232 => 
            array (
                'id' => 1733,
                'song_id' => 428,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:20',
                'updated_at' => '2018-04-28 12:28:20',
            ),
            233 => 
            array (
                'id' => 1734,
                'song_id' => 428,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:20',
                'updated_at' => '2018-04-28 12:28:20',
            ),
            234 => 
            array (
                'id' => 1735,
                'song_id' => 429,
                'tag_id' => 192,
                'created_at' => '2018-04-28 12:28:22',
                'updated_at' => '2018-04-28 12:28:22',
            ),
            235 => 
            array (
                'id' => 1736,
                'song_id' => 429,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:22',
                'updated_at' => '2018-04-28 12:28:22',
            ),
            236 => 
            array (
                'id' => 1737,
                'song_id' => 429,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:22',
                'updated_at' => '2018-04-28 12:28:22',
            ),
            237 => 
            array (
                'id' => 1738,
                'song_id' => 429,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:28:22',
                'updated_at' => '2018-04-28 12:28:22',
            ),
            238 => 
            array (
                'id' => 1739,
                'song_id' => 429,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:28:22',
                'updated_at' => '2018-04-28 12:28:22',
            ),
            239 => 
            array (
                'id' => 1740,
                'song_id' => 430,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:28:23',
                'updated_at' => '2018-04-28 12:28:23',
            ),
            240 => 
            array (
                'id' => 1741,
                'song_id' => 430,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:23',
                'updated_at' => '2018-04-28 12:28:23',
            ),
            241 => 
            array (
                'id' => 1742,
                'song_id' => 430,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:28:23',
                'updated_at' => '2018-04-28 12:28:23',
            ),
            242 => 
            array (
                'id' => 1743,
                'song_id' => 430,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:28:23',
                'updated_at' => '2018-04-28 12:28:23',
            ),
            243 => 
            array (
                'id' => 1744,
                'song_id' => 430,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:23',
                'updated_at' => '2018-04-28 12:28:23',
            ),
            244 => 
            array (
                'id' => 1745,
                'song_id' => 431,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:24',
                'updated_at' => '2018-04-28 12:28:24',
            ),
            245 => 
            array (
                'id' => 1746,
                'song_id' => 431,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:24',
                'updated_at' => '2018-04-28 12:28:24',
            ),
            246 => 
            array (
                'id' => 1747,
                'song_id' => 431,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:28:24',
                'updated_at' => '2018-04-28 12:28:24',
            ),
            247 => 
            array (
                'id' => 1748,
                'song_id' => 431,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:28:24',
                'updated_at' => '2018-04-28 12:28:24',
            ),
            248 => 
            array (
                'id' => 1749,
                'song_id' => 433,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:27',
                'updated_at' => '2018-04-28 12:28:27',
            ),
            249 => 
            array (
                'id' => 1750,
                'song_id' => 433,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:27',
                'updated_at' => '2018-04-28 12:28:27',
            ),
            250 => 
            array (
                'id' => 1751,
                'song_id' => 433,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:28:27',
                'updated_at' => '2018-04-28 12:28:27',
            ),
            251 => 
            array (
                'id' => 1752,
                'song_id' => 433,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:27',
                'updated_at' => '2018-04-28 12:28:27',
            ),
            252 => 
            array (
                'id' => 1753,
                'song_id' => 435,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:30',
                'updated_at' => '2018-04-28 12:28:30',
            ),
            253 => 
            array (
                'id' => 1754,
                'song_id' => 435,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:30',
                'updated_at' => '2018-04-28 12:28:30',
            ),
            254 => 
            array (
                'id' => 1755,
                'song_id' => 435,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:28:30',
                'updated_at' => '2018-04-28 12:28:30',
            ),
            255 => 
            array (
                'id' => 1756,
                'song_id' => 435,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:30',
                'updated_at' => '2018-04-28 12:28:30',
            ),
            256 => 
            array (
                'id' => 1757,
                'song_id' => 436,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:32',
                'updated_at' => '2018-04-28 12:28:32',
            ),
            257 => 
            array (
                'id' => 1758,
                'song_id' => 436,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:32',
                'updated_at' => '2018-04-28 12:28:32',
            ),
            258 => 
            array (
                'id' => 1759,
                'song_id' => 436,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:28:32',
                'updated_at' => '2018-04-28 12:28:32',
            ),
            259 => 
            array (
                'id' => 1760,
                'song_id' => 436,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:28:32',
                'updated_at' => '2018-04-28 12:28:32',
            ),
            260 => 
            array (
                'id' => 1761,
                'song_id' => 437,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:33',
                'updated_at' => '2018-04-28 12:28:33',
            ),
            261 => 
            array (
                'id' => 1762,
                'song_id' => 437,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:33',
                'updated_at' => '2018-04-28 12:28:33',
            ),
            262 => 
            array (
                'id' => 1763,
                'song_id' => 437,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:33',
                'updated_at' => '2018-04-28 12:28:33',
            ),
            263 => 
            array (
                'id' => 1764,
                'song_id' => 437,
                'tag_id' => 80,
                'created_at' => '2018-04-28 12:28:33',
                'updated_at' => '2018-04-28 12:28:33',
            ),
            264 => 
            array (
                'id' => 1765,
                'song_id' => 438,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:34',
                'updated_at' => '2018-04-28 12:28:34',
            ),
            265 => 
            array (
                'id' => 1766,
                'song_id' => 438,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:35',
                'updated_at' => '2018-04-28 12:28:35',
            ),
            266 => 
            array (
                'id' => 1767,
                'song_id' => 438,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:28:35',
                'updated_at' => '2018-04-28 12:28:35',
            ),
            267 => 
            array (
                'id' => 1768,
                'song_id' => 438,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:28:35',
                'updated_at' => '2018-04-28 12:28:35',
            ),
            268 => 
            array (
                'id' => 1769,
                'song_id' => 439,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:28:36',
                'updated_at' => '2018-04-28 12:28:36',
            ),
            269 => 
            array (
                'id' => 1770,
                'song_id' => 439,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:36',
                'updated_at' => '2018-04-28 12:28:36',
            ),
            270 => 
            array (
                'id' => 1771,
                'song_id' => 439,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:28:36',
                'updated_at' => '2018-04-28 12:28:36',
            ),
            271 => 
            array (
                'id' => 1772,
                'song_id' => 439,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:36',
                'updated_at' => '2018-04-28 12:28:36',
            ),
            272 => 
            array (
                'id' => 1773,
                'song_id' => 442,
                'tag_id' => 193,
                'created_at' => '2018-04-28 12:28:41',
                'updated_at' => '2018-04-28 12:28:41',
            ),
            273 => 
            array (
                'id' => 1774,
                'song_id' => 442,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:41',
                'updated_at' => '2018-04-28 12:28:41',
            ),
            274 => 
            array (
                'id' => 1775,
                'song_id' => 442,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:41',
                'updated_at' => '2018-04-28 12:28:41',
            ),
            275 => 
            array (
                'id' => 1776,
                'song_id' => 442,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:41',
                'updated_at' => '2018-04-28 12:28:41',
            ),
            276 => 
            array (
                'id' => 1777,
                'song_id' => 443,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:42',
                'updated_at' => '2018-04-28 12:28:42',
            ),
            277 => 
            array (
                'id' => 1778,
                'song_id' => 443,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:42',
                'updated_at' => '2018-04-28 12:28:42',
            ),
            278 => 
            array (
                'id' => 1779,
                'song_id' => 443,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:42',
                'updated_at' => '2018-04-28 12:28:42',
            ),
            279 => 
            array (
                'id' => 1780,
                'song_id' => 443,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:42',
                'updated_at' => '2018-04-28 12:28:42',
            ),
            280 => 
            array (
                'id' => 1781,
                'song_id' => 444,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:45',
                'updated_at' => '2018-04-28 12:28:45',
            ),
            281 => 
            array (
                'id' => 1782,
                'song_id' => 444,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:45',
                'updated_at' => '2018-04-28 12:28:45',
            ),
            282 => 
            array (
                'id' => 1783,
                'song_id' => 444,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:45',
                'updated_at' => '2018-04-28 12:28:45',
            ),
            283 => 
            array (
                'id' => 1784,
                'song_id' => 444,
                'tag_id' => 37,
                'created_at' => '2018-04-28 12:28:45',
                'updated_at' => '2018-04-28 12:28:45',
            ),
            284 => 
            array (
                'id' => 1785,
                'song_id' => 445,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:47',
                'updated_at' => '2018-04-28 12:28:47',
            ),
            285 => 
            array (
                'id' => 1786,
                'song_id' => 445,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:47',
                'updated_at' => '2018-04-28 12:28:47',
            ),
            286 => 
            array (
                'id' => 1787,
                'song_id' => 445,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:47',
                'updated_at' => '2018-04-28 12:28:47',
            ),
            287 => 
            array (
                'id' => 1788,
                'song_id' => 445,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:28:47',
                'updated_at' => '2018-04-28 12:28:47',
            ),
            288 => 
            array (
                'id' => 1789,
                'song_id' => 446,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:49',
                'updated_at' => '2018-04-28 12:28:49',
            ),
            289 => 
            array (
                'id' => 1790,
                'song_id' => 446,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:49',
                'updated_at' => '2018-04-28 12:28:49',
            ),
            290 => 
            array (
                'id' => 1791,
                'song_id' => 446,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:49',
                'updated_at' => '2018-04-28 12:28:49',
            ),
            291 => 
            array (
                'id' => 1792,
                'song_id' => 446,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:49',
                'updated_at' => '2018-04-28 12:28:49',
            ),
            292 => 
            array (
                'id' => 1793,
                'song_id' => 447,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:50',
                'updated_at' => '2018-04-28 12:28:50',
            ),
            293 => 
            array (
                'id' => 1794,
                'song_id' => 447,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:50',
                'updated_at' => '2018-04-28 12:28:50',
            ),
            294 => 
            array (
                'id' => 1795,
                'song_id' => 447,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:50',
                'updated_at' => '2018-04-28 12:28:50',
            ),
            295 => 
            array (
                'id' => 1796,
                'song_id' => 447,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:50',
                'updated_at' => '2018-04-28 12:28:50',
            ),
            296 => 
            array (
                'id' => 1797,
                'song_id' => 448,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:51',
                'updated_at' => '2018-04-28 12:28:51',
            ),
            297 => 
            array (
                'id' => 1798,
                'song_id' => 448,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:52',
                'updated_at' => '2018-04-28 12:28:52',
            ),
            298 => 
            array (
                'id' => 1799,
                'song_id' => 448,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:52',
                'updated_at' => '2018-04-28 12:28:52',
            ),
            299 => 
            array (
                'id' => 1800,
                'song_id' => 448,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:52',
                'updated_at' => '2018-04-28 12:28:52',
            ),
            300 => 
            array (
                'id' => 1801,
                'song_id' => 449,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:53',
                'updated_at' => '2018-04-28 12:28:53',
            ),
            301 => 
            array (
                'id' => 1802,
                'song_id' => 449,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:53',
                'updated_at' => '2018-04-28 12:28:53',
            ),
            302 => 
            array (
                'id' => 1803,
                'song_id' => 449,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:53',
                'updated_at' => '2018-04-28 12:28:53',
            ),
            303 => 
            array (
                'id' => 1804,
                'song_id' => 449,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:53',
                'updated_at' => '2018-04-28 12:28:53',
            ),
            304 => 
            array (
                'id' => 1805,
                'song_id' => 450,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:55',
                'updated_at' => '2018-04-28 12:28:55',
            ),
            305 => 
            array (
                'id' => 1806,
                'song_id' => 450,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:55',
                'updated_at' => '2018-04-28 12:28:55',
            ),
            306 => 
            array (
                'id' => 1807,
                'song_id' => 450,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:55',
                'updated_at' => '2018-04-28 12:28:55',
            ),
            307 => 
            array (
                'id' => 1808,
                'song_id' => 450,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:55',
                'updated_at' => '2018-04-28 12:28:55',
            ),
            308 => 
            array (
                'id' => 1809,
                'song_id' => 450,
                'tag_id' => 130,
                'created_at' => '2018-04-28 12:28:55',
                'updated_at' => '2018-04-28 12:28:55',
            ),
            309 => 
            array (
                'id' => 1810,
                'song_id' => 451,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:56',
                'updated_at' => '2018-04-28 12:28:56',
            ),
            310 => 
            array (
                'id' => 1811,
                'song_id' => 451,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:56',
                'updated_at' => '2018-04-28 12:28:56',
            ),
            311 => 
            array (
                'id' => 1812,
                'song_id' => 451,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:56',
                'updated_at' => '2018-04-28 12:28:56',
            ),
            312 => 
            array (
                'id' => 1813,
                'song_id' => 451,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:56',
                'updated_at' => '2018-04-28 12:28:56',
            ),
            313 => 
            array (
                'id' => 1814,
                'song_id' => 452,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:58',
                'updated_at' => '2018-04-28 12:28:58',
            ),
            314 => 
            array (
                'id' => 1815,
                'song_id' => 452,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:58',
                'updated_at' => '2018-04-28 12:28:58',
            ),
            315 => 
            array (
                'id' => 1816,
                'song_id' => 452,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:58',
                'updated_at' => '2018-04-28 12:28:58',
            ),
            316 => 
            array (
                'id' => 1817,
                'song_id' => 452,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:28:58',
                'updated_at' => '2018-04-28 12:28:58',
            ),
            317 => 
            array (
                'id' => 1818,
                'song_id' => 453,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:28:59',
                'updated_at' => '2018-04-28 12:28:59',
            ),
            318 => 
            array (
                'id' => 1819,
                'song_id' => 453,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:28:59',
                'updated_at' => '2018-04-28 12:28:59',
            ),
            319 => 
            array (
                'id' => 1820,
                'song_id' => 453,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:28:59',
                'updated_at' => '2018-04-28 12:28:59',
            ),
            320 => 
            array (
                'id' => 1821,
                'song_id' => 453,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:28:59',
                'updated_at' => '2018-04-28 12:28:59',
            ),
            321 => 
            array (
                'id' => 1822,
                'song_id' => 454,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:00',
                'updated_at' => '2018-04-28 12:29:00',
            ),
            322 => 
            array (
                'id' => 1823,
                'song_id' => 454,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:01',
                'updated_at' => '2018-04-28 12:29:01',
            ),
            323 => 
            array (
                'id' => 1824,
                'song_id' => 454,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:29:01',
                'updated_at' => '2018-04-28 12:29:01',
            ),
            324 => 
            array (
                'id' => 1825,
                'song_id' => 454,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:01',
                'updated_at' => '2018-04-28 12:29:01',
            ),
            325 => 
            array (
                'id' => 1826,
                'song_id' => 455,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:02',
                'updated_at' => '2018-04-28 12:29:02',
            ),
            326 => 
            array (
                'id' => 1827,
                'song_id' => 455,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:02',
                'updated_at' => '2018-04-28 12:29:02',
            ),
            327 => 
            array (
                'id' => 1828,
                'song_id' => 455,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:29:02',
                'updated_at' => '2018-04-28 12:29:02',
            ),
            328 => 
            array (
                'id' => 1829,
                'song_id' => 455,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:02',
                'updated_at' => '2018-04-28 12:29:02',
            ),
            329 => 
            array (
                'id' => 1830,
                'song_id' => 455,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:29:02',
                'updated_at' => '2018-04-28 12:29:02',
            ),
            330 => 
            array (
                'id' => 1831,
                'song_id' => 456,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:03',
                'updated_at' => '2018-04-28 12:29:03',
            ),
            331 => 
            array (
                'id' => 1832,
                'song_id' => 456,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:03',
                'updated_at' => '2018-04-28 12:29:03',
            ),
            332 => 
            array (
                'id' => 1833,
                'song_id' => 456,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:03',
                'updated_at' => '2018-04-28 12:29:03',
            ),
            333 => 
            array (
                'id' => 1834,
                'song_id' => 456,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:29:03',
                'updated_at' => '2018-04-28 12:29:03',
            ),
            334 => 
            array (
                'id' => 1835,
                'song_id' => 457,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:05',
                'updated_at' => '2018-04-28 12:29:05',
            ),
            335 => 
            array (
                'id' => 1836,
                'song_id' => 457,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:05',
                'updated_at' => '2018-04-28 12:29:05',
            ),
            336 => 
            array (
                'id' => 1837,
                'song_id' => 457,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:05',
                'updated_at' => '2018-04-28 12:29:05',
            ),
            337 => 
            array (
                'id' => 1838,
                'song_id' => 457,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:29:05',
                'updated_at' => '2018-04-28 12:29:05',
            ),
            338 => 
            array (
                'id' => 1839,
                'song_id' => 458,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:06',
                'updated_at' => '2018-04-28 12:29:06',
            ),
            339 => 
            array (
                'id' => 1840,
                'song_id' => 458,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:06',
                'updated_at' => '2018-04-28 12:29:06',
            ),
            340 => 
            array (
                'id' => 1841,
                'song_id' => 458,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:06',
                'updated_at' => '2018-04-28 12:29:06',
            ),
            341 => 
            array (
                'id' => 1842,
                'song_id' => 458,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:29:06',
                'updated_at' => '2018-04-28 12:29:06',
            ),
            342 => 
            array (
                'id' => 1843,
                'song_id' => 459,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:08',
                'updated_at' => '2018-04-28 12:29:08',
            ),
            343 => 
            array (
                'id' => 1844,
                'song_id' => 459,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:08',
                'updated_at' => '2018-04-28 12:29:08',
            ),
            344 => 
            array (
                'id' => 1845,
                'song_id' => 459,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:08',
                'updated_at' => '2018-04-28 12:29:08',
            ),
            345 => 
            array (
                'id' => 1846,
                'song_id' => 459,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:29:08',
                'updated_at' => '2018-04-28 12:29:08',
            ),
            346 => 
            array (
                'id' => 1847,
                'song_id' => 460,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:10',
                'updated_at' => '2018-04-28 12:29:10',
            ),
            347 => 
            array (
                'id' => 1848,
                'song_id' => 460,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:10',
                'updated_at' => '2018-04-28 12:29:10',
            ),
            348 => 
            array (
                'id' => 1849,
                'song_id' => 460,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:10',
                'updated_at' => '2018-04-28 12:29:10',
            ),
            349 => 
            array (
                'id' => 1850,
                'song_id' => 460,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:29:10',
                'updated_at' => '2018-04-28 12:29:10',
            ),
            350 => 
            array (
                'id' => 1851,
                'song_id' => 461,
                'tag_id' => 194,
                'created_at' => '2018-04-28 12:29:11',
                'updated_at' => '2018-04-28 12:29:11',
            ),
            351 => 
            array (
                'id' => 1852,
                'song_id' => 461,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:11',
                'updated_at' => '2018-04-28 12:29:11',
            ),
            352 => 
            array (
                'id' => 1853,
                'song_id' => 461,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:29:11',
                'updated_at' => '2018-04-28 12:29:11',
            ),
            353 => 
            array (
                'id' => 1854,
                'song_id' => 461,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:11',
                'updated_at' => '2018-04-28 12:29:11',
            ),
            354 => 
            array (
                'id' => 1855,
                'song_id' => 461,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:11',
                'updated_at' => '2018-04-28 12:29:11',
            ),
            355 => 
            array (
                'id' => 1856,
                'song_id' => 462,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:13',
                'updated_at' => '2018-04-28 12:29:13',
            ),
            356 => 
            array (
                'id' => 1857,
                'song_id' => 462,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:13',
                'updated_at' => '2018-04-28 12:29:13',
            ),
            357 => 
            array (
                'id' => 1858,
                'song_id' => 462,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:13',
                'updated_at' => '2018-04-28 12:29:13',
            ),
            358 => 
            array (
                'id' => 1859,
                'song_id' => 462,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:29:13',
                'updated_at' => '2018-04-28 12:29:13',
            ),
            359 => 
            array (
                'id' => 1860,
                'song_id' => 463,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:14',
                'updated_at' => '2018-04-28 12:29:14',
            ),
            360 => 
            array (
                'id' => 1861,
                'song_id' => 463,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:14',
                'updated_at' => '2018-04-28 12:29:14',
            ),
            361 => 
            array (
                'id' => 1862,
                'song_id' => 463,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:14',
                'updated_at' => '2018-04-28 12:29:14',
            ),
            362 => 
            array (
                'id' => 1863,
                'song_id' => 463,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:29:14',
                'updated_at' => '2018-04-28 12:29:14',
            ),
            363 => 
            array (
                'id' => 1864,
                'song_id' => 464,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:15',
                'updated_at' => '2018-04-28 12:29:15',
            ),
            364 => 
            array (
                'id' => 1865,
                'song_id' => 464,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:15',
                'updated_at' => '2018-04-28 12:29:15',
            ),
            365 => 
            array (
                'id' => 1866,
                'song_id' => 464,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:15',
                'updated_at' => '2018-04-28 12:29:15',
            ),
            366 => 
            array (
                'id' => 1867,
                'song_id' => 464,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:29:15',
                'updated_at' => '2018-04-28 12:29:15',
            ),
            367 => 
            array (
                'id' => 1868,
                'song_id' => 465,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:17',
                'updated_at' => '2018-04-28 12:29:17',
            ),
            368 => 
            array (
                'id' => 1869,
                'song_id' => 465,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:17',
                'updated_at' => '2018-04-28 12:29:17',
            ),
            369 => 
            array (
                'id' => 1870,
                'song_id' => 465,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:17',
                'updated_at' => '2018-04-28 12:29:17',
            ),
            370 => 
            array (
                'id' => 1871,
                'song_id' => 465,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:29:17',
                'updated_at' => '2018-04-28 12:29:17',
            ),
            371 => 
            array (
                'id' => 1872,
                'song_id' => 467,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:20',
                'updated_at' => '2018-04-28 12:29:20',
            ),
            372 => 
            array (
                'id' => 1873,
                'song_id' => 467,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:20',
                'updated_at' => '2018-04-28 12:29:20',
            ),
            373 => 
            array (
                'id' => 1874,
                'song_id' => 467,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:20',
                'updated_at' => '2018-04-28 12:29:20',
            ),
            374 => 
            array (
                'id' => 1875,
                'song_id' => 467,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:29:20',
                'updated_at' => '2018-04-28 12:29:20',
            ),
            375 => 
            array (
                'id' => 1876,
                'song_id' => 468,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:21',
                'updated_at' => '2018-04-28 12:29:21',
            ),
            376 => 
            array (
                'id' => 1877,
                'song_id' => 468,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:21',
                'updated_at' => '2018-04-28 12:29:21',
            ),
            377 => 
            array (
                'id' => 1878,
                'song_id' => 468,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:21',
                'updated_at' => '2018-04-28 12:29:21',
            ),
            378 => 
            array (
                'id' => 1879,
                'song_id' => 468,
                'tag_id' => 69,
                'created_at' => '2018-04-28 12:29:21',
                'updated_at' => '2018-04-28 12:29:21',
            ),
            379 => 
            array (
                'id' => 1880,
                'song_id' => 469,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:23',
                'updated_at' => '2018-04-28 12:29:23',
            ),
            380 => 
            array (
                'id' => 1881,
                'song_id' => 469,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:29:23',
                'updated_at' => '2018-04-28 12:29:23',
            ),
            381 => 
            array (
                'id' => 1882,
                'song_id' => 469,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:29:23',
                'updated_at' => '2018-04-28 12:29:23',
            ),
            382 => 
            array (
                'id' => 1883,
                'song_id' => 469,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:29:23',
                'updated_at' => '2018-04-28 12:29:23',
            ),
            383 => 
            array (
                'id' => 1884,
                'song_id' => 470,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:29:24',
                'updated_at' => '2018-04-28 12:29:24',
            ),
            384 => 
            array (
                'id' => 1885,
                'song_id' => 470,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:24',
                'updated_at' => '2018-04-28 12:29:24',
            ),
            385 => 
            array (
                'id' => 1886,
                'song_id' => 470,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:29:24',
                'updated_at' => '2018-04-28 12:29:24',
            ),
            386 => 
            array (
                'id' => 1887,
                'song_id' => 470,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:24',
                'updated_at' => '2018-04-28 12:29:24',
            ),
            387 => 
            array (
                'id' => 1888,
                'song_id' => 470,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:29:24',
                'updated_at' => '2018-04-28 12:29:24',
            ),
            388 => 
            array (
                'id' => 1889,
                'song_id' => 471,
                'tag_id' => 195,
                'created_at' => '2018-04-28 12:29:25',
                'updated_at' => '2018-04-28 12:29:25',
            ),
            389 => 
            array (
                'id' => 1890,
                'song_id' => 471,
                'tag_id' => 196,
                'created_at' => '2018-04-28 12:29:26',
                'updated_at' => '2018-04-28 12:29:26',
            ),
            390 => 
            array (
                'id' => 1891,
                'song_id' => 471,
                'tag_id' => 197,
                'created_at' => '2018-04-28 12:29:26',
                'updated_at' => '2018-04-28 12:29:26',
            ),
            391 => 
            array (
                'id' => 1892,
                'song_id' => 471,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:29:26',
                'updated_at' => '2018-04-28 12:29:26',
            ),
            392 => 
            array (
                'id' => 1893,
                'song_id' => 471,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:29:26',
                'updated_at' => '2018-04-28 12:29:26',
            ),
            393 => 
            array (
                'id' => 1894,
                'song_id' => 472,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:29:27',
                'updated_at' => '2018-04-28 12:29:27',
            ),
            394 => 
            array (
                'id' => 1895,
                'song_id' => 472,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:29:27',
                'updated_at' => '2018-04-28 12:29:27',
            ),
            395 => 
            array (
                'id' => 1896,
                'song_id' => 472,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:27',
                'updated_at' => '2018-04-28 12:29:27',
            ),
            396 => 
            array (
                'id' => 1897,
                'song_id' => 472,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:27',
                'updated_at' => '2018-04-28 12:29:27',
            ),
            397 => 
            array (
                'id' => 1898,
                'song_id' => 473,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:29:28',
                'updated_at' => '2018-04-28 12:29:28',
            ),
            398 => 
            array (
                'id' => 1899,
                'song_id' => 473,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:28',
                'updated_at' => '2018-04-28 12:29:28',
            ),
            399 => 
            array (
                'id' => 1900,
                'song_id' => 473,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:29:28',
                'updated_at' => '2018-04-28 12:29:28',
            ),
            400 => 
            array (
                'id' => 1901,
                'song_id' => 473,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:28',
                'updated_at' => '2018-04-28 12:29:28',
            ),
            401 => 
            array (
                'id' => 1902,
                'song_id' => 477,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:34',
                'updated_at' => '2018-04-28 12:29:34',
            ),
            402 => 
            array (
                'id' => 1903,
                'song_id' => 477,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:29:34',
                'updated_at' => '2018-04-28 12:29:34',
            ),
            403 => 
            array (
                'id' => 1904,
                'song_id' => 477,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:34',
                'updated_at' => '2018-04-28 12:29:34',
            ),
            404 => 
            array (
                'id' => 1905,
                'song_id' => 477,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:29:34',
                'updated_at' => '2018-04-28 12:29:34',
            ),
            405 => 
            array (
                'id' => 1906,
                'song_id' => 478,
                'tag_id' => 198,
                'created_at' => '2018-04-28 12:29:36',
                'updated_at' => '2018-04-28 12:29:36',
            ),
            406 => 
            array (
                'id' => 1907,
                'song_id' => 478,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:36',
                'updated_at' => '2018-04-28 12:29:36',
            ),
            407 => 
            array (
                'id' => 1908,
                'song_id' => 478,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:36',
                'updated_at' => '2018-04-28 12:29:36',
            ),
            408 => 
            array (
                'id' => 1909,
                'song_id' => 478,
                'tag_id' => 126,
                'created_at' => '2018-04-28 12:29:36',
                'updated_at' => '2018-04-28 12:29:36',
            ),
            409 => 
            array (
                'id' => 1910,
                'song_id' => 478,
                'tag_id' => 34,
                'created_at' => '2018-04-28 12:29:36',
                'updated_at' => '2018-04-28 12:29:36',
            ),
            410 => 
            array (
                'id' => 1911,
                'song_id' => 479,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2018-04-28 12:29:38',
            ),
            411 => 
            array (
                'id' => 1912,
                'song_id' => 479,
                'tag_id' => 200,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2018-04-28 12:29:38',
            ),
            412 => 
            array (
                'id' => 1913,
                'song_id' => 479,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2018-04-28 12:29:38',
            ),
            413 => 
            array (
                'id' => 1914,
                'song_id' => 479,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2018-04-28 12:29:38',
            ),
            414 => 
            array (
                'id' => 1915,
                'song_id' => 479,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:38',
                'updated_at' => '2018-04-28 12:29:38',
            ),
            415 => 
            array (
                'id' => 1916,
                'song_id' => 480,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:39',
                'updated_at' => '2018-04-28 12:29:39',
            ),
            416 => 
            array (
                'id' => 1917,
                'song_id' => 480,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:39',
                'updated_at' => '2018-04-28 12:29:39',
            ),
            417 => 
            array (
                'id' => 1918,
                'song_id' => 480,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:29:39',
                'updated_at' => '2018-04-28 12:29:39',
            ),
            418 => 
            array (
                'id' => 1919,
                'song_id' => 480,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:39',
                'updated_at' => '2018-04-28 12:29:39',
            ),
            419 => 
            array (
                'id' => 1920,
                'song_id' => 480,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:39',
                'updated_at' => '2018-04-28 12:29:39',
            ),
            420 => 
            array (
                'id' => 1921,
                'song_id' => 481,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:41',
                'updated_at' => '2018-04-28 12:29:41',
            ),
            421 => 
            array (
                'id' => 1922,
                'song_id' => 481,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:41',
                'updated_at' => '2018-04-28 12:29:41',
            ),
            422 => 
            array (
                'id' => 1923,
                'song_id' => 481,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:41',
                'updated_at' => '2018-04-28 12:29:41',
            ),
            423 => 
            array (
                'id' => 1924,
                'song_id' => 481,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:41',
                'updated_at' => '2018-04-28 12:29:41',
            ),
            424 => 
            array (
                'id' => 1925,
                'song_id' => 481,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:41',
                'updated_at' => '2018-04-28 12:29:41',
            ),
            425 => 
            array (
                'id' => 1926,
                'song_id' => 482,
                'tag_id' => 201,
                'created_at' => '2018-04-28 12:29:42',
                'updated_at' => '2018-04-28 12:29:42',
            ),
            426 => 
            array (
                'id' => 1927,
                'song_id' => 482,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:42',
                'updated_at' => '2018-04-28 12:29:42',
            ),
            427 => 
            array (
                'id' => 1928,
                'song_id' => 483,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:44',
                'updated_at' => '2018-04-28 12:29:44',
            ),
            428 => 
            array (
                'id' => 1929,
                'song_id' => 483,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:44',
                'updated_at' => '2018-04-28 12:29:44',
            ),
            429 => 
            array (
                'id' => 1930,
                'song_id' => 483,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:44',
                'updated_at' => '2018-04-28 12:29:44',
            ),
            430 => 
            array (
                'id' => 1931,
                'song_id' => 483,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:44',
                'updated_at' => '2018-04-28 12:29:44',
            ),
            431 => 
            array (
                'id' => 1932,
                'song_id' => 483,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:44',
                'updated_at' => '2018-04-28 12:29:44',
            ),
            432 => 
            array (
                'id' => 1933,
                'song_id' => 484,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:45',
                'updated_at' => '2018-04-28 12:29:45',
            ),
            433 => 
            array (
                'id' => 1934,
                'song_id' => 484,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:45',
                'updated_at' => '2018-04-28 12:29:45',
            ),
            434 => 
            array (
                'id' => 1935,
                'song_id' => 484,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:45',
                'updated_at' => '2018-04-28 12:29:45',
            ),
            435 => 
            array (
                'id' => 1936,
                'song_id' => 484,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:45',
                'updated_at' => '2018-04-28 12:29:45',
            ),
            436 => 
            array (
                'id' => 1937,
                'song_id' => 484,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:45',
                'updated_at' => '2018-04-28 12:29:45',
            ),
            437 => 
            array (
                'id' => 1938,
                'song_id' => 485,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:47',
                'updated_at' => '2018-04-28 12:29:47',
            ),
            438 => 
            array (
                'id' => 1939,
                'song_id' => 485,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:47',
                'updated_at' => '2018-04-28 12:29:47',
            ),
            439 => 
            array (
                'id' => 1940,
                'song_id' => 485,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:47',
                'updated_at' => '2018-04-28 12:29:47',
            ),
            440 => 
            array (
                'id' => 1941,
                'song_id' => 485,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:29:47',
                'updated_at' => '2018-04-28 12:29:47',
            ),
            441 => 
            array (
                'id' => 1942,
                'song_id' => 485,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:47',
                'updated_at' => '2018-04-28 12:29:47',
            ),
            442 => 
            array (
                'id' => 1943,
                'song_id' => 486,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:48',
                'updated_at' => '2018-04-28 12:29:48',
            ),
            443 => 
            array (
                'id' => 1944,
                'song_id' => 486,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:48',
                'updated_at' => '2018-04-28 12:29:48',
            ),
            444 => 
            array (
                'id' => 1945,
                'song_id' => 486,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:29:48',
                'updated_at' => '2018-04-28 12:29:48',
            ),
            445 => 
            array (
                'id' => 1946,
                'song_id' => 486,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:48',
                'updated_at' => '2018-04-28 12:29:48',
            ),
            446 => 
            array (
                'id' => 1947,
                'song_id' => 486,
                'tag_id' => 34,
                'created_at' => '2018-04-28 12:29:48',
                'updated_at' => '2018-04-28 12:29:48',
            ),
            447 => 
            array (
                'id' => 1948,
                'song_id' => 487,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:50',
                'updated_at' => '2018-04-28 12:29:50',
            ),
            448 => 
            array (
                'id' => 1949,
                'song_id' => 487,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:50',
                'updated_at' => '2018-04-28 12:29:50',
            ),
            449 => 
            array (
                'id' => 1950,
                'song_id' => 487,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:29:50',
                'updated_at' => '2018-04-28 12:29:50',
            ),
            450 => 
            array (
                'id' => 1951,
                'song_id' => 487,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:50',
                'updated_at' => '2018-04-28 12:29:50',
            ),
            451 => 
            array (
                'id' => 1952,
                'song_id' => 487,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:50',
                'updated_at' => '2018-04-28 12:29:50',
            ),
            452 => 
            array (
                'id' => 1953,
                'song_id' => 488,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:51',
                'updated_at' => '2018-04-28 12:29:51',
            ),
            453 => 
            array (
                'id' => 1954,
                'song_id' => 488,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:51',
                'updated_at' => '2018-04-28 12:29:51',
            ),
            454 => 
            array (
                'id' => 1955,
                'song_id' => 488,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:51',
                'updated_at' => '2018-04-28 12:29:51',
            ),
            455 => 
            array (
                'id' => 1956,
                'song_id' => 488,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:51',
                'updated_at' => '2018-04-28 12:29:51',
            ),
            456 => 
            array (
                'id' => 1957,
                'song_id' => 488,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:51',
                'updated_at' => '2018-04-28 12:29:51',
            ),
            457 => 
            array (
                'id' => 1958,
                'song_id' => 489,
                'tag_id' => 202,
                'created_at' => '2018-04-28 12:29:53',
                'updated_at' => '2018-04-28 12:29:53',
            ),
            458 => 
            array (
                'id' => 1959,
                'song_id' => 489,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:53',
                'updated_at' => '2018-04-28 12:29:53',
            ),
            459 => 
            array (
                'id' => 1960,
                'song_id' => 489,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:53',
                'updated_at' => '2018-04-28 12:29:53',
            ),
            460 => 
            array (
                'id' => 1961,
                'song_id' => 489,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:53',
                'updated_at' => '2018-04-28 12:29:53',
            ),
            461 => 
            array (
                'id' => 1962,
                'song_id' => 489,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:53',
                'updated_at' => '2018-04-28 12:29:53',
            ),
            462 => 
            array (
                'id' => 1963,
                'song_id' => 490,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:54',
                'updated_at' => '2018-04-28 12:29:54',
            ),
            463 => 
            array (
                'id' => 1964,
                'song_id' => 490,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:54',
                'updated_at' => '2018-04-28 12:29:54',
            ),
            464 => 
            array (
                'id' => 1965,
                'song_id' => 490,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:29:54',
                'updated_at' => '2018-04-28 12:29:54',
            ),
            465 => 
            array (
                'id' => 1966,
                'song_id' => 490,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:54',
                'updated_at' => '2018-04-28 12:29:54',
            ),
            466 => 
            array (
                'id' => 1967,
                'song_id' => 490,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:54',
                'updated_at' => '2018-04-28 12:29:54',
            ),
            467 => 
            array (
                'id' => 1968,
                'song_id' => 491,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:56',
                'updated_at' => '2018-04-28 12:29:56',
            ),
            468 => 
            array (
                'id' => 1969,
                'song_id' => 491,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:56',
                'updated_at' => '2018-04-28 12:29:56',
            ),
            469 => 
            array (
                'id' => 1970,
                'song_id' => 491,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:56',
                'updated_at' => '2018-04-28 12:29:56',
            ),
            470 => 
            array (
                'id' => 1971,
                'song_id' => 491,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:56',
                'updated_at' => '2018-04-28 12:29:56',
            ),
            471 => 
            array (
                'id' => 1972,
                'song_id' => 491,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:56',
                'updated_at' => '2018-04-28 12:29:56',
            ),
            472 => 
            array (
                'id' => 1973,
                'song_id' => 492,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:57',
                'updated_at' => '2018-04-28 12:29:57',
            ),
            473 => 
            array (
                'id' => 1974,
                'song_id' => 492,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:57',
                'updated_at' => '2018-04-28 12:29:57',
            ),
            474 => 
            array (
                'id' => 1975,
                'song_id' => 492,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:57',
                'updated_at' => '2018-04-28 12:29:57',
            ),
            475 => 
            array (
                'id' => 1976,
                'song_id' => 492,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:29:57',
                'updated_at' => '2018-04-28 12:29:57',
            ),
            476 => 
            array (
                'id' => 1977,
                'song_id' => 492,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:57',
                'updated_at' => '2018-04-28 12:29:57',
            ),
            477 => 
            array (
                'id' => 1978,
                'song_id' => 493,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:29:58',
                'updated_at' => '2018-04-28 12:29:58',
            ),
            478 => 
            array (
                'id' => 1979,
                'song_id' => 493,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:29:58',
                'updated_at' => '2018-04-28 12:29:58',
            ),
            479 => 
            array (
                'id' => 1980,
                'song_id' => 493,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:29:58',
                'updated_at' => '2018-04-28 12:29:58',
            ),
            480 => 
            array (
                'id' => 1981,
                'song_id' => 493,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:29:58',
                'updated_at' => '2018-04-28 12:29:58',
            ),
            481 => 
            array (
                'id' => 1982,
                'song_id' => 493,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:29:58',
                'updated_at' => '2018-04-28 12:29:58',
            ),
            482 => 
            array (
                'id' => 1983,
                'song_id' => 494,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:30:00',
                'updated_at' => '2018-04-28 12:30:00',
            ),
            483 => 
            array (
                'id' => 1984,
                'song_id' => 494,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:00',
                'updated_at' => '2018-04-28 12:30:00',
            ),
            484 => 
            array (
                'id' => 1985,
                'song_id' => 494,
                'tag_id' => 199,
                'created_at' => '2018-04-28 12:30:00',
                'updated_at' => '2018-04-28 12:30:00',
            ),
            485 => 
            array (
                'id' => 1986,
                'song_id' => 494,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:30:00',
                'updated_at' => '2018-04-28 12:30:00',
            ),
            486 => 
            array (
                'id' => 1987,
                'song_id' => 494,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:30:00',
                'updated_at' => '2018-04-28 12:30:00',
            ),
            487 => 
            array (
                'id' => 1988,
                'song_id' => 495,
                'tag_id' => 203,
                'created_at' => '2018-04-28 12:30:01',
                'updated_at' => '2018-04-28 12:30:01',
            ),
            488 => 
            array (
                'id' => 1989,
                'song_id' => 495,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:01',
                'updated_at' => '2018-04-28 12:30:01',
            ),
            489 => 
            array (
                'id' => 1990,
                'song_id' => 495,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:30:01',
                'updated_at' => '2018-04-28 12:30:01',
            ),
            490 => 
            array (
                'id' => 1991,
                'song_id' => 495,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:30:01',
                'updated_at' => '2018-04-28 12:30:01',
            ),
            491 => 
            array (
                'id' => 1992,
                'song_id' => 495,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:30:01',
                'updated_at' => '2018-04-28 12:30:01',
            ),
            492 => 
            array (
                'id' => 1993,
                'song_id' => 496,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:30:03',
                'updated_at' => '2018-04-28 12:30:03',
            ),
            493 => 
            array (
                'id' => 1994,
                'song_id' => 496,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:30:03',
                'updated_at' => '2018-04-28 12:30:03',
            ),
            494 => 
            array (
                'id' => 1995,
                'song_id' => 496,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:30:03',
                'updated_at' => '2018-04-28 12:30:03',
            ),
            495 => 
            array (
                'id' => 1996,
                'song_id' => 496,
                'tag_id' => 72,
                'created_at' => '2018-04-28 12:30:03',
                'updated_at' => '2018-04-28 12:30:03',
            ),
            496 => 
            array (
                'id' => 1997,
                'song_id' => 496,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:03',
                'updated_at' => '2018-04-28 12:30:03',
            ),
            497 => 
            array (
                'id' => 1998,
                'song_id' => 497,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:30:04',
                'updated_at' => '2018-04-28 12:30:04',
            ),
            498 => 
            array (
                'id' => 1999,
                'song_id' => 497,
                'tag_id' => 99,
                'created_at' => '2018-04-28 12:30:04',
                'updated_at' => '2018-04-28 12:30:04',
            ),
            499 => 
            array (
                'id' => 2000,
                'song_id' => 497,
                'tag_id' => 122,
                'created_at' => '2018-04-28 12:30:04',
                'updated_at' => '2018-04-28 12:30:04',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'song_id' => 497,
                'tag_id' => 37,
                'created_at' => '2018-04-28 12:30:04',
                'updated_at' => '2018-04-28 12:30:04',
            ),
            1 => 
            array (
                'id' => 2002,
                'song_id' => 497,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:30:04',
                'updated_at' => '2018-04-28 12:30:04',
            ),
            2 => 
            array (
                'id' => 2003,
                'song_id' => 500,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:09',
                'updated_at' => '2018-04-28 12:30:09',
            ),
            3 => 
            array (
                'id' => 2004,
                'song_id' => 500,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:09',
                'updated_at' => '2018-04-28 12:30:09',
            ),
            4 => 
            array (
                'id' => 2005,
                'song_id' => 500,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:09',
                'updated_at' => '2018-04-28 12:30:09',
            ),
            5 => 
            array (
                'id' => 2006,
                'song_id' => 500,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:30:09',
                'updated_at' => '2018-04-28 12:30:09',
            ),
            6 => 
            array (
                'id' => 2007,
                'song_id' => 500,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:09',
                'updated_at' => '2018-04-28 12:30:09',
            ),
            7 => 
            array (
                'id' => 2008,
                'song_id' => 501,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:10',
                'updated_at' => '2018-04-28 12:30:10',
            ),
            8 => 
            array (
                'id' => 2009,
                'song_id' => 501,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:10',
                'updated_at' => '2018-04-28 12:30:10',
            ),
            9 => 
            array (
                'id' => 2010,
                'song_id' => 501,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:10',
                'updated_at' => '2018-04-28 12:30:10',
            ),
            10 => 
            array (
                'id' => 2011,
                'song_id' => 501,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:30:10',
                'updated_at' => '2018-04-28 12:30:10',
            ),
            11 => 
            array (
                'id' => 2012,
                'song_id' => 502,
                'tag_id' => 204,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2018-04-28 12:30:12',
            ),
            12 => 
            array (
                'id' => 2013,
                'song_id' => 502,
                'tag_id' => 205,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2018-04-28 12:30:12',
            ),
            13 => 
            array (
                'id' => 2014,
                'song_id' => 502,
                'tag_id' => 89,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2018-04-28 12:30:12',
            ),
            14 => 
            array (
                'id' => 2015,
                'song_id' => 502,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2018-04-28 12:30:12',
            ),
            15 => 
            array (
                'id' => 2016,
                'song_id' => 502,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:30:12',
                'updated_at' => '2018-04-28 12:30:12',
            ),
            16 => 
            array (
                'id' => 2017,
                'song_id' => 503,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:13',
                'updated_at' => '2018-04-28 12:30:13',
            ),
            17 => 
            array (
                'id' => 2018,
                'song_id' => 503,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:13',
                'updated_at' => '2018-04-28 12:30:13',
            ),
            18 => 
            array (
                'id' => 2019,
                'song_id' => 503,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:30:13',
                'updated_at' => '2018-04-28 12:30:13',
            ),
            19 => 
            array (
                'id' => 2020,
                'song_id' => 503,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:13',
                'updated_at' => '2018-04-28 12:30:13',
            ),
            20 => 
            array (
                'id' => 2021,
                'song_id' => 503,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:13',
                'updated_at' => '2018-04-28 12:30:13',
            ),
            21 => 
            array (
                'id' => 2022,
                'song_id' => 504,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:14',
                'updated_at' => '2018-04-28 12:30:14',
            ),
            22 => 
            array (
                'id' => 2023,
                'song_id' => 504,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:14',
                'updated_at' => '2018-04-28 12:30:14',
            ),
            23 => 
            array (
                'id' => 2024,
                'song_id' => 504,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:14',
                'updated_at' => '2018-04-28 12:30:14',
            ),
            24 => 
            array (
                'id' => 2025,
                'song_id' => 504,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:14',
                'updated_at' => '2018-04-28 12:30:14',
            ),
            25 => 
            array (
                'id' => 2026,
                'song_id' => 504,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:30:14',
                'updated_at' => '2018-04-28 12:30:14',
            ),
            26 => 
            array (
                'id' => 2027,
                'song_id' => 505,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:16',
                'updated_at' => '2018-04-28 12:30:16',
            ),
            27 => 
            array (
                'id' => 2028,
                'song_id' => 505,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:16',
                'updated_at' => '2018-04-28 12:30:16',
            ),
            28 => 
            array (
                'id' => 2029,
                'song_id' => 505,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:16',
                'updated_at' => '2018-04-28 12:30:16',
            ),
            29 => 
            array (
                'id' => 2030,
                'song_id' => 505,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:30:16',
                'updated_at' => '2018-04-28 12:30:16',
            ),
            30 => 
            array (
                'id' => 2031,
                'song_id' => 506,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:17',
                'updated_at' => '2018-04-28 12:30:17',
            ),
            31 => 
            array (
                'id' => 2032,
                'song_id' => 506,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:18',
                'updated_at' => '2018-04-28 12:30:18',
            ),
            32 => 
            array (
                'id' => 2033,
                'song_id' => 506,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:18',
                'updated_at' => '2018-04-28 12:30:18',
            ),
            33 => 
            array (
                'id' => 2034,
                'song_id' => 506,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:18',
                'updated_at' => '2018-04-28 12:30:18',
            ),
            34 => 
            array (
                'id' => 2035,
                'song_id' => 506,
                'tag_id' => 54,
                'created_at' => '2018-04-28 12:30:18',
                'updated_at' => '2018-04-28 12:30:18',
            ),
            35 => 
            array (
                'id' => 2036,
                'song_id' => 507,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:19',
                'updated_at' => '2018-04-28 12:30:19',
            ),
            36 => 
            array (
                'id' => 2037,
                'song_id' => 507,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:19',
                'updated_at' => '2018-04-28 12:30:19',
            ),
            37 => 
            array (
                'id' => 2038,
                'song_id' => 507,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:19',
                'updated_at' => '2018-04-28 12:30:19',
            ),
            38 => 
            array (
                'id' => 2039,
                'song_id' => 507,
                'tag_id' => 129,
                'created_at' => '2018-04-28 12:30:19',
                'updated_at' => '2018-04-28 12:30:19',
            ),
            39 => 
            array (
                'id' => 2040,
                'song_id' => 508,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:30:20',
                'updated_at' => '2018-04-28 12:30:20',
            ),
            40 => 
            array (
                'id' => 2041,
                'song_id' => 508,
                'tag_id' => 65,
                'created_at' => '2018-04-28 12:30:20',
                'updated_at' => '2018-04-28 12:30:20',
            ),
            41 => 
            array (
                'id' => 2042,
                'song_id' => 508,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:20',
                'updated_at' => '2018-04-28 12:30:20',
            ),
            42 => 
            array (
                'id' => 2043,
                'song_id' => 508,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:20',
                'updated_at' => '2018-04-28 12:30:20',
            ),
            43 => 
            array (
                'id' => 2044,
                'song_id' => 508,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:20',
                'updated_at' => '2018-04-28 12:30:20',
            ),
            44 => 
            array (
                'id' => 2045,
                'song_id' => 509,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:30:22',
                'updated_at' => '2018-04-28 12:30:22',
            ),
            45 => 
            array (
                'id' => 2046,
                'song_id' => 509,
                'tag_id' => 65,
                'created_at' => '2018-04-28 12:30:22',
                'updated_at' => '2018-04-28 12:30:22',
            ),
            46 => 
            array (
                'id' => 2047,
                'song_id' => 509,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:30:22',
                'updated_at' => '2018-04-28 12:30:22',
            ),
            47 => 
            array (
                'id' => 2048,
                'song_id' => 509,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:30:22',
                'updated_at' => '2018-04-28 12:30:22',
            ),
            48 => 
            array (
                'id' => 2049,
                'song_id' => 509,
                'tag_id' => 9,
                'created_at' => '2018-04-28 12:30:22',
                'updated_at' => '2018-04-28 12:30:22',
            ),
            49 => 
            array (
                'id' => 2050,
                'song_id' => 511,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:30:25',
                'updated_at' => '2018-04-28 12:30:25',
            ),
            50 => 
            array (
                'id' => 2051,
                'song_id' => 511,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:25',
                'updated_at' => '2018-04-28 12:30:25',
            ),
            51 => 
            array (
                'id' => 2052,
                'song_id' => 511,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:30:25',
                'updated_at' => '2018-04-28 12:30:25',
            ),
            52 => 
            array (
                'id' => 2053,
                'song_id' => 511,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:25',
                'updated_at' => '2018-04-28 12:30:25',
            ),
            53 => 
            array (
                'id' => 2054,
                'song_id' => 511,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:30:25',
                'updated_at' => '2018-04-28 12:30:25',
            ),
            54 => 
            array (
                'id' => 2055,
                'song_id' => 512,
                'tag_id' => 206,
                'created_at' => '2018-04-28 12:30:27',
                'updated_at' => '2018-04-28 12:30:27',
            ),
            55 => 
            array (
                'id' => 2056,
                'song_id' => 512,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:30:27',
                'updated_at' => '2018-04-28 12:30:27',
            ),
            56 => 
            array (
                'id' => 2057,
                'song_id' => 512,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:27',
                'updated_at' => '2018-04-28 12:30:27',
            ),
            57 => 
            array (
                'id' => 2058,
                'song_id' => 512,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:27',
                'updated_at' => '2018-04-28 12:30:27',
            ),
            58 => 
            array (
                'id' => 2059,
                'song_id' => 512,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:30:27',
                'updated_at' => '2018-04-28 12:30:27',
            ),
            59 => 
            array (
                'id' => 2060,
                'song_id' => 513,
                'tag_id' => 207,
                'created_at' => '2018-04-28 12:30:28',
                'updated_at' => '2018-04-28 12:30:28',
            ),
            60 => 
            array (
                'id' => 2061,
                'song_id' => 513,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:30:28',
                'updated_at' => '2018-04-28 12:30:28',
            ),
            61 => 
            array (
                'id' => 2062,
                'song_id' => 513,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:30:28',
                'updated_at' => '2018-04-28 12:30:28',
            ),
            62 => 
            array (
                'id' => 2063,
                'song_id' => 513,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:28',
                'updated_at' => '2018-04-28 12:30:28',
            ),
            63 => 
            array (
                'id' => 2064,
                'song_id' => 513,
                'tag_id' => 148,
                'created_at' => '2018-04-28 12:30:28',
                'updated_at' => '2018-04-28 12:30:28',
            ),
            64 => 
            array (
                'id' => 2065,
                'song_id' => 514,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:30:30',
                'updated_at' => '2018-04-28 12:30:30',
            ),
            65 => 
            array (
                'id' => 2066,
                'song_id' => 514,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:30',
                'updated_at' => '2018-04-28 12:30:30',
            ),
            66 => 
            array (
                'id' => 2067,
                'song_id' => 514,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:30:30',
                'updated_at' => '2018-04-28 12:30:30',
            ),
            67 => 
            array (
                'id' => 2068,
                'song_id' => 514,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:30:30',
                'updated_at' => '2018-04-28 12:30:30',
            ),
            68 => 
            array (
                'id' => 2069,
                'song_id' => 515,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:31',
                'updated_at' => '2018-04-28 12:30:31',
            ),
            69 => 
            array (
                'id' => 2070,
                'song_id' => 515,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:31',
                'updated_at' => '2018-04-28 12:30:31',
            ),
            70 => 
            array (
                'id' => 2071,
                'song_id' => 515,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:31',
                'updated_at' => '2018-04-28 12:30:31',
            ),
            71 => 
            array (
                'id' => 2072,
                'song_id' => 515,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:31',
                'updated_at' => '2018-04-28 12:30:31',
            ),
            72 => 
            array (
                'id' => 2073,
                'song_id' => 515,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:31',
                'updated_at' => '2018-04-28 12:30:31',
            ),
            73 => 
            array (
                'id' => 2074,
                'song_id' => 516,
                'tag_id' => 208,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2018-04-28 12:30:33',
            ),
            74 => 
            array (
                'id' => 2075,
                'song_id' => 516,
                'tag_id' => 209,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2018-04-28 12:30:33',
            ),
            75 => 
            array (
                'id' => 2076,
                'song_id' => 516,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2018-04-28 12:30:33',
            ),
            76 => 
            array (
                'id' => 2077,
                'song_id' => 516,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2018-04-28 12:30:33',
            ),
            77 => 
            array (
                'id' => 2078,
                'song_id' => 516,
                'tag_id' => 62,
                'created_at' => '2018-04-28 12:30:33',
                'updated_at' => '2018-04-28 12:30:33',
            ),
            78 => 
            array (
                'id' => 2079,
                'song_id' => 517,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:34',
                'updated_at' => '2018-04-28 12:30:34',
            ),
            79 => 
            array (
                'id' => 2080,
                'song_id' => 517,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:34',
                'updated_at' => '2018-04-28 12:30:34',
            ),
            80 => 
            array (
                'id' => 2081,
                'song_id' => 517,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:34',
                'updated_at' => '2018-04-28 12:30:34',
            ),
            81 => 
            array (
                'id' => 2082,
                'song_id' => 517,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:34',
                'updated_at' => '2018-04-28 12:30:34',
            ),
            82 => 
            array (
                'id' => 2083,
                'song_id' => 517,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:34',
                'updated_at' => '2018-04-28 12:30:34',
            ),
            83 => 
            array (
                'id' => 2084,
                'song_id' => 518,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:36',
                'updated_at' => '2018-04-28 12:30:36',
            ),
            84 => 
            array (
                'id' => 2085,
                'song_id' => 518,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:36',
                'updated_at' => '2018-04-28 12:30:36',
            ),
            85 => 
            array (
                'id' => 2086,
                'song_id' => 518,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:36',
                'updated_at' => '2018-04-28 12:30:36',
            ),
            86 => 
            array (
                'id' => 2087,
                'song_id' => 518,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:36',
                'updated_at' => '2018-04-28 12:30:36',
            ),
            87 => 
            array (
                'id' => 2088,
                'song_id' => 518,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:36',
                'updated_at' => '2018-04-28 12:30:36',
            ),
            88 => 
            array (
                'id' => 2089,
                'song_id' => 519,
                'tag_id' => 210,
                'created_at' => '2018-04-28 12:30:37',
                'updated_at' => '2018-04-28 12:30:37',
            ),
            89 => 
            array (
                'id' => 2090,
                'song_id' => 519,
                'tag_id' => 211,
                'created_at' => '2018-04-28 12:30:37',
                'updated_at' => '2018-04-28 12:30:37',
            ),
            90 => 
            array (
                'id' => 2091,
                'song_id' => 519,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:30:37',
                'updated_at' => '2018-04-28 12:30:37',
            ),
            91 => 
            array (
                'id' => 2092,
                'song_id' => 520,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:38',
                'updated_at' => '2018-04-28 12:30:38',
            ),
            92 => 
            array (
                'id' => 2093,
                'song_id' => 520,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:38',
                'updated_at' => '2018-04-28 12:30:38',
            ),
            93 => 
            array (
                'id' => 2094,
                'song_id' => 520,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:38',
                'updated_at' => '2018-04-28 12:30:38',
            ),
            94 => 
            array (
                'id' => 2095,
                'song_id' => 520,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:38',
                'updated_at' => '2018-04-28 12:30:38',
            ),
            95 => 
            array (
                'id' => 2096,
                'song_id' => 520,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:38',
                'updated_at' => '2018-04-28 12:30:38',
            ),
            96 => 
            array (
                'id' => 2097,
                'song_id' => 521,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:40',
                'updated_at' => '2018-04-28 12:30:40',
            ),
            97 => 
            array (
                'id' => 2098,
                'song_id' => 521,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:40',
                'updated_at' => '2018-04-28 12:30:40',
            ),
            98 => 
            array (
                'id' => 2099,
                'song_id' => 521,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:40',
                'updated_at' => '2018-04-28 12:30:40',
            ),
            99 => 
            array (
                'id' => 2100,
                'song_id' => 521,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:30:40',
                'updated_at' => '2018-04-28 12:30:40',
            ),
            100 => 
            array (
                'id' => 2101,
                'song_id' => 522,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:41',
                'updated_at' => '2018-04-28 12:30:41',
            ),
            101 => 
            array (
                'id' => 2102,
                'song_id' => 522,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:41',
                'updated_at' => '2018-04-28 12:30:41',
            ),
            102 => 
            array (
                'id' => 2103,
                'song_id' => 522,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:41',
                'updated_at' => '2018-04-28 12:30:41',
            ),
            103 => 
            array (
                'id' => 2104,
                'song_id' => 522,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:41',
                'updated_at' => '2018-04-28 12:30:41',
            ),
            104 => 
            array (
                'id' => 2105,
                'song_id' => 522,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:30:41',
                'updated_at' => '2018-04-28 12:30:41',
            ),
            105 => 
            array (
                'id' => 2106,
                'song_id' => 523,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:43',
                'updated_at' => '2018-04-28 12:30:43',
            ),
            106 => 
            array (
                'id' => 2107,
                'song_id' => 523,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:43',
                'updated_at' => '2018-04-28 12:30:43',
            ),
            107 => 
            array (
                'id' => 2108,
                'song_id' => 523,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:43',
                'updated_at' => '2018-04-28 12:30:43',
            ),
            108 => 
            array (
                'id' => 2109,
                'song_id' => 523,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:43',
                'updated_at' => '2018-04-28 12:30:43',
            ),
            109 => 
            array (
                'id' => 2110,
                'song_id' => 524,
                'tag_id' => 212,
                'created_at' => '2018-04-28 12:30:44',
                'updated_at' => '2018-04-28 12:30:44',
            ),
            110 => 
            array (
                'id' => 2111,
                'song_id' => 524,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:44',
                'updated_at' => '2018-04-28 12:30:44',
            ),
            111 => 
            array (
                'id' => 2112,
                'song_id' => 524,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:44',
                'updated_at' => '2018-04-28 12:30:44',
            ),
            112 => 
            array (
                'id' => 2113,
                'song_id' => 524,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:30:44',
                'updated_at' => '2018-04-28 12:30:44',
            ),
            113 => 
            array (
                'id' => 2114,
                'song_id' => 524,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:44',
                'updated_at' => '2018-04-28 12:30:44',
            ),
            114 => 
            array (
                'id' => 2115,
                'song_id' => 525,
                'tag_id' => 213,
                'created_at' => '2018-04-28 12:30:46',
                'updated_at' => '2018-04-28 12:30:46',
            ),
            115 => 
            array (
                'id' => 2116,
                'song_id' => 526,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:48',
                'updated_at' => '2018-04-28 12:30:48',
            ),
            116 => 
            array (
                'id' => 2117,
                'song_id' => 526,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:48',
                'updated_at' => '2018-04-28 12:30:48',
            ),
            117 => 
            array (
                'id' => 2118,
                'song_id' => 526,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:48',
                'updated_at' => '2018-04-28 12:30:48',
            ),
            118 => 
            array (
                'id' => 2119,
                'song_id' => 526,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:48',
                'updated_at' => '2018-04-28 12:30:48',
            ),
            119 => 
            array (
                'id' => 2120,
                'song_id' => 527,
                'tag_id' => 214,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2018-04-28 12:30:49',
            ),
            120 => 
            array (
                'id' => 2121,
                'song_id' => 527,
                'tag_id' => 215,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2018-04-28 12:30:49',
            ),
            121 => 
            array (
                'id' => 2122,
                'song_id' => 527,
                'tag_id' => 216,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2018-04-28 12:30:49',
            ),
            122 => 
            array (
                'id' => 2123,
                'song_id' => 527,
                'tag_id' => 217,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2018-04-28 12:30:49',
            ),
            123 => 
            array (
                'id' => 2124,
                'song_id' => 527,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:30:49',
                'updated_at' => '2018-04-28 12:30:49',
            ),
            124 => 
            array (
                'id' => 2125,
                'song_id' => 528,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:51',
                'updated_at' => '2018-04-28 12:30:51',
            ),
            125 => 
            array (
                'id' => 2126,
                'song_id' => 528,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:30:51',
                'updated_at' => '2018-04-28 12:30:51',
            ),
            126 => 
            array (
                'id' => 2127,
                'song_id' => 528,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:51',
                'updated_at' => '2018-04-28 12:30:51',
            ),
            127 => 
            array (
                'id' => 2128,
                'song_id' => 528,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:30:51',
                'updated_at' => '2018-04-28 12:30:51',
            ),
            128 => 
            array (
                'id' => 2129,
                'song_id' => 528,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:51',
                'updated_at' => '2018-04-28 12:30:51',
            ),
            129 => 
            array (
                'id' => 2130,
                'song_id' => 529,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:52',
                'updated_at' => '2018-04-28 12:30:52',
            ),
            130 => 
            array (
                'id' => 2131,
                'song_id' => 529,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:52',
                'updated_at' => '2018-04-28 12:30:52',
            ),
            131 => 
            array (
                'id' => 2132,
                'song_id' => 529,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:52',
                'updated_at' => '2018-04-28 12:30:52',
            ),
            132 => 
            array (
                'id' => 2133,
                'song_id' => 529,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:52',
                'updated_at' => '2018-04-28 12:30:52',
            ),
            133 => 
            array (
                'id' => 2134,
                'song_id' => 529,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:52',
                'updated_at' => '2018-04-28 12:30:52',
            ),
            134 => 
            array (
                'id' => 2135,
                'song_id' => 530,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:54',
                'updated_at' => '2018-04-28 12:30:54',
            ),
            135 => 
            array (
                'id' => 2136,
                'song_id' => 530,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:30:54',
                'updated_at' => '2018-04-28 12:30:54',
            ),
            136 => 
            array (
                'id' => 2137,
                'song_id' => 530,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:54',
                'updated_at' => '2018-04-28 12:30:54',
            ),
            137 => 
            array (
                'id' => 2138,
                'song_id' => 530,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:54',
                'updated_at' => '2018-04-28 12:30:54',
            ),
            138 => 
            array (
                'id' => 2139,
                'song_id' => 530,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:54',
                'updated_at' => '2018-04-28 12:30:54',
            ),
            139 => 
            array (
                'id' => 2140,
                'song_id' => 532,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:30:57',
                'updated_at' => '2018-04-28 12:30:57',
            ),
            140 => 
            array (
                'id' => 2141,
                'song_id' => 532,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:30:57',
                'updated_at' => '2018-04-28 12:30:57',
            ),
            141 => 
            array (
                'id' => 2142,
                'song_id' => 532,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:30:57',
                'updated_at' => '2018-04-28 12:30:57',
            ),
            142 => 
            array (
                'id' => 2143,
                'song_id' => 532,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:30:57',
                'updated_at' => '2018-04-28 12:30:57',
            ),
            143 => 
            array (
                'id' => 2144,
                'song_id' => 533,
                'tag_id' => 218,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2018-04-28 12:30:58',
            ),
            144 => 
            array (
                'id' => 2145,
                'song_id' => 533,
                'tag_id' => 219,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2018-04-28 12:30:58',
            ),
            145 => 
            array (
                'id' => 2146,
                'song_id' => 533,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2018-04-28 12:30:58',
            ),
            146 => 
            array (
                'id' => 2147,
                'song_id' => 533,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2018-04-28 12:30:58',
            ),
            147 => 
            array (
                'id' => 2148,
                'song_id' => 533,
                'tag_id' => 164,
                'created_at' => '2018-04-28 12:30:58',
                'updated_at' => '2018-04-28 12:30:58',
            ),
            148 => 
            array (
                'id' => 2149,
                'song_id' => 534,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:30:59',
                'updated_at' => '2018-04-28 12:30:59',
            ),
            149 => 
            array (
                'id' => 2150,
                'song_id' => 534,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:30:59',
                'updated_at' => '2018-04-28 12:30:59',
            ),
            150 => 
            array (
                'id' => 2151,
                'song_id' => 534,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:30:59',
                'updated_at' => '2018-04-28 12:30:59',
            ),
            151 => 
            array (
                'id' => 2152,
                'song_id' => 534,
                'tag_id' => 164,
                'created_at' => '2018-04-28 12:30:59',
                'updated_at' => '2018-04-28 12:30:59',
            ),
            152 => 
            array (
                'id' => 2153,
                'song_id' => 535,
                'tag_id' => 220,
                'created_at' => '2018-04-28 12:31:01',
                'updated_at' => '2018-04-28 12:31:01',
            ),
            153 => 
            array (
                'id' => 2154,
                'song_id' => 535,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:31:01',
                'updated_at' => '2018-04-28 12:31:01',
            ),
            154 => 
            array (
                'id' => 2155,
                'song_id' => 535,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:01',
                'updated_at' => '2018-04-28 12:31:01',
            ),
            155 => 
            array (
                'id' => 2156,
                'song_id' => 535,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:01',
                'updated_at' => '2018-04-28 12:31:01',
            ),
            156 => 
            array (
                'id' => 2157,
                'song_id' => 535,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:31:01',
                'updated_at' => '2018-04-28 12:31:01',
            ),
            157 => 
            array (
                'id' => 2158,
                'song_id' => 537,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:04',
                'updated_at' => '2018-04-28 12:31:04',
            ),
            158 => 
            array (
                'id' => 2159,
                'song_id' => 537,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:04',
                'updated_at' => '2018-04-28 12:31:04',
            ),
            159 => 
            array (
                'id' => 2160,
                'song_id' => 537,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:31:04',
                'updated_at' => '2018-04-28 12:31:04',
            ),
            160 => 
            array (
                'id' => 2161,
                'song_id' => 537,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:04',
                'updated_at' => '2018-04-28 12:31:04',
            ),
            161 => 
            array (
                'id' => 2162,
                'song_id' => 537,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:04',
                'updated_at' => '2018-04-28 12:31:04',
            ),
            162 => 
            array (
                'id' => 2163,
                'song_id' => 538,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:06',
                'updated_at' => '2018-04-28 12:31:06',
            ),
            163 => 
            array (
                'id' => 2164,
                'song_id' => 538,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:06',
                'updated_at' => '2018-04-28 12:31:06',
            ),
            164 => 
            array (
                'id' => 2165,
                'song_id' => 538,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:31:06',
                'updated_at' => '2018-04-28 12:31:06',
            ),
            165 => 
            array (
                'id' => 2166,
                'song_id' => 538,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:06',
                'updated_at' => '2018-04-28 12:31:06',
            ),
            166 => 
            array (
                'id' => 2167,
                'song_id' => 538,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:06',
                'updated_at' => '2018-04-28 12:31:06',
            ),
            167 => 
            array (
                'id' => 2168,
                'song_id' => 539,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:07',
                'updated_at' => '2018-04-28 12:31:07',
            ),
            168 => 
            array (
                'id' => 2169,
                'song_id' => 539,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:07',
                'updated_at' => '2018-04-28 12:31:07',
            ),
            169 => 
            array (
                'id' => 2170,
                'song_id' => 539,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:31:07',
                'updated_at' => '2018-04-28 12:31:07',
            ),
            170 => 
            array (
                'id' => 2171,
                'song_id' => 539,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:07',
                'updated_at' => '2018-04-28 12:31:07',
            ),
            171 => 
            array (
                'id' => 2172,
                'song_id' => 539,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:07',
                'updated_at' => '2018-04-28 12:31:07',
            ),
            172 => 
            array (
                'id' => 2173,
                'song_id' => 540,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:09',
                'updated_at' => '2018-04-28 12:31:09',
            ),
            173 => 
            array (
                'id' => 2174,
                'song_id' => 540,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:09',
                'updated_at' => '2018-04-28 12:31:09',
            ),
            174 => 
            array (
                'id' => 2175,
                'song_id' => 540,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:31:09',
                'updated_at' => '2018-04-28 12:31:09',
            ),
            175 => 
            array (
                'id' => 2176,
                'song_id' => 540,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:09',
                'updated_at' => '2018-04-28 12:31:09',
            ),
            176 => 
            array (
                'id' => 2177,
                'song_id' => 540,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:31:09',
                'updated_at' => '2018-04-28 12:31:09',
            ),
            177 => 
            array (
                'id' => 2178,
                'song_id' => 541,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:10',
                'updated_at' => '2018-04-28 12:31:10',
            ),
            178 => 
            array (
                'id' => 2179,
                'song_id' => 541,
                'tag_id' => 68,
                'created_at' => '2018-04-28 12:31:10',
                'updated_at' => '2018-04-28 12:31:10',
            ),
            179 => 
            array (
                'id' => 2180,
                'song_id' => 541,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:10',
                'updated_at' => '2018-04-28 12:31:10',
            ),
            180 => 
            array (
                'id' => 2181,
                'song_id' => 541,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:10',
                'updated_at' => '2018-04-28 12:31:10',
            ),
            181 => 
            array (
                'id' => 2182,
                'song_id' => 541,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:31:10',
                'updated_at' => '2018-04-28 12:31:10',
            ),
            182 => 
            array (
                'id' => 2183,
                'song_id' => 543,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:31:13',
                'updated_at' => '2018-04-28 12:31:13',
            ),
            183 => 
            array (
                'id' => 2184,
                'song_id' => 543,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:31:13',
                'updated_at' => '2018-04-28 12:31:13',
            ),
            184 => 
            array (
                'id' => 2185,
                'song_id' => 543,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:13',
                'updated_at' => '2018-04-28 12:31:13',
            ),
            185 => 
            array (
                'id' => 2186,
                'song_id' => 543,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:31:13',
                'updated_at' => '2018-04-28 12:31:13',
            ),
            186 => 
            array (
                'id' => 2187,
                'song_id' => 543,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:31:13',
                'updated_at' => '2018-04-28 12:31:13',
            ),
            187 => 
            array (
                'id' => 2188,
                'song_id' => 544,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:31:15',
                'updated_at' => '2018-04-28 12:31:15',
            ),
            188 => 
            array (
                'id' => 2189,
                'song_id' => 544,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:31:15',
                'updated_at' => '2018-04-28 12:31:15',
            ),
            189 => 
            array (
                'id' => 2190,
                'song_id' => 544,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:15',
                'updated_at' => '2018-04-28 12:31:15',
            ),
            190 => 
            array (
                'id' => 2191,
                'song_id' => 544,
                'tag_id' => 76,
                'created_at' => '2018-04-28 12:31:15',
                'updated_at' => '2018-04-28 12:31:15',
            ),
            191 => 
            array (
                'id' => 2192,
                'song_id' => 544,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:31:15',
                'updated_at' => '2018-04-28 12:31:15',
            ),
            192 => 
            array (
                'id' => 2193,
                'song_id' => 545,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:31:16',
                'updated_at' => '2018-04-28 12:31:16',
            ),
            193 => 
            array (
                'id' => 2194,
                'song_id' => 545,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:16',
                'updated_at' => '2018-04-28 12:31:16',
            ),
            194 => 
            array (
                'id' => 2195,
                'song_id' => 545,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:16',
                'updated_at' => '2018-04-28 12:31:16',
            ),
            195 => 
            array (
                'id' => 2196,
                'song_id' => 545,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:16',
                'updated_at' => '2018-04-28 12:31:16',
            ),
            196 => 
            array (
                'id' => 2197,
                'song_id' => 545,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:17',
                'updated_at' => '2018-04-28 12:31:17',
            ),
            197 => 
            array (
                'id' => 2198,
                'song_id' => 546,
                'tag_id' => 221,
                'created_at' => '2018-04-28 12:31:18',
                'updated_at' => '2018-04-28 12:31:18',
            ),
            198 => 
            array (
                'id' => 2199,
                'song_id' => 546,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:31:18',
                'updated_at' => '2018-04-28 12:31:18',
            ),
            199 => 
            array (
                'id' => 2200,
                'song_id' => 546,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:18',
                'updated_at' => '2018-04-28 12:31:18',
            ),
            200 => 
            array (
                'id' => 2201,
                'song_id' => 546,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:31:18',
                'updated_at' => '2018-04-28 12:31:18',
            ),
            201 => 
            array (
                'id' => 2202,
                'song_id' => 546,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:31:18',
                'updated_at' => '2018-04-28 12:31:18',
            ),
            202 => 
            array (
                'id' => 2203,
                'song_id' => 547,
                'tag_id' => 201,
                'created_at' => '2018-04-28 12:31:19',
                'updated_at' => '2018-04-28 12:31:19',
            ),
            203 => 
            array (
                'id' => 2204,
                'song_id' => 549,
                'tag_id' => 222,
                'created_at' => '2018-04-28 12:31:22',
                'updated_at' => '2018-04-28 12:31:22',
            ),
            204 => 
            array (
                'id' => 2205,
                'song_id' => 549,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:31:22',
                'updated_at' => '2018-04-28 12:31:22',
            ),
            205 => 
            array (
                'id' => 2206,
                'song_id' => 549,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:31:22',
                'updated_at' => '2018-04-28 12:31:22',
            ),
            206 => 
            array (
                'id' => 2207,
                'song_id' => 549,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:31:22',
                'updated_at' => '2018-04-28 12:31:22',
            ),
            207 => 
            array (
                'id' => 2208,
                'song_id' => 549,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:22',
                'updated_at' => '2018-04-28 12:31:22',
            ),
            208 => 
            array (
                'id' => 2209,
                'song_id' => 550,
                'tag_id' => 223,
                'created_at' => '2018-04-28 12:31:24',
                'updated_at' => '2018-04-28 12:31:24',
            ),
            209 => 
            array (
                'id' => 2210,
                'song_id' => 550,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:31:24',
                'updated_at' => '2018-04-28 12:31:24',
            ),
            210 => 
            array (
                'id' => 2211,
                'song_id' => 550,
                'tag_id' => 36,
                'created_at' => '2018-04-28 12:31:24',
                'updated_at' => '2018-04-28 12:31:24',
            ),
            211 => 
            array (
                'id' => 2212,
                'song_id' => 550,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:31:24',
                'updated_at' => '2018-04-28 12:31:24',
            ),
            212 => 
            array (
                'id' => 2213,
                'song_id' => 552,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:31:27',
                'updated_at' => '2018-04-28 12:31:27',
            ),
            213 => 
            array (
                'id' => 2214,
                'song_id' => 552,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:27',
                'updated_at' => '2018-04-28 12:31:27',
            ),
            214 => 
            array (
                'id' => 2215,
                'song_id' => 552,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:27',
                'updated_at' => '2018-04-28 12:31:27',
            ),
            215 => 
            array (
                'id' => 2216,
                'song_id' => 552,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:31:27',
                'updated_at' => '2018-04-28 12:31:27',
            ),
            216 => 
            array (
                'id' => 2217,
                'song_id' => 553,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:31:28',
                'updated_at' => '2018-04-28 12:31:28',
            ),
            217 => 
            array (
                'id' => 2218,
                'song_id' => 553,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:28',
                'updated_at' => '2018-04-28 12:31:28',
            ),
            218 => 
            array (
                'id' => 2219,
                'song_id' => 553,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:28',
                'updated_at' => '2018-04-28 12:31:28',
            ),
            219 => 
            array (
                'id' => 2220,
                'song_id' => 553,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:31:28',
                'updated_at' => '2018-04-28 12:31:28',
            ),
            220 => 
            array (
                'id' => 2221,
                'song_id' => 554,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:31:30',
                'updated_at' => '2018-04-28 12:31:30',
            ),
            221 => 
            array (
                'id' => 2222,
                'song_id' => 554,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:30',
                'updated_at' => '2018-04-28 12:31:30',
            ),
            222 => 
            array (
                'id' => 2223,
                'song_id' => 554,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:30',
                'updated_at' => '2018-04-28 12:31:30',
            ),
            223 => 
            array (
                'id' => 2224,
                'song_id' => 554,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:31:30',
                'updated_at' => '2018-04-28 12:31:30',
            ),
            224 => 
            array (
                'id' => 2225,
                'song_id' => 556,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:31:32',
                'updated_at' => '2018-04-28 12:31:32',
            ),
            225 => 
            array (
                'id' => 2226,
                'song_id' => 556,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:31:32',
                'updated_at' => '2018-04-28 12:31:32',
            ),
            226 => 
            array (
                'id' => 2227,
                'song_id' => 556,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:32',
                'updated_at' => '2018-04-28 12:31:32',
            ),
            227 => 
            array (
                'id' => 2228,
                'song_id' => 556,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:32',
                'updated_at' => '2018-04-28 12:31:32',
            ),
            228 => 
            array (
                'id' => 2229,
                'song_id' => 557,
                'tag_id' => 224,
                'created_at' => '2018-04-28 12:31:34',
                'updated_at' => '2018-04-28 12:31:34',
            ),
            229 => 
            array (
                'id' => 2230,
                'song_id' => 557,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:31:34',
                'updated_at' => '2018-04-28 12:31:34',
            ),
            230 => 
            array (
                'id' => 2231,
                'song_id' => 557,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:34',
                'updated_at' => '2018-04-28 12:31:34',
            ),
            231 => 
            array (
                'id' => 2232,
                'song_id' => 557,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:34',
                'updated_at' => '2018-04-28 12:31:34',
            ),
            232 => 
            array (
                'id' => 2233,
                'song_id' => 557,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:34',
                'updated_at' => '2018-04-28 12:31:34',
            ),
            233 => 
            array (
                'id' => 2234,
                'song_id' => 558,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:35',
                'updated_at' => '2018-04-28 12:31:35',
            ),
            234 => 
            array (
                'id' => 2235,
                'song_id' => 558,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:35',
                'updated_at' => '2018-04-28 12:31:35',
            ),
            235 => 
            array (
                'id' => 2236,
                'song_id' => 558,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:35',
                'updated_at' => '2018-04-28 12:31:35',
            ),
            236 => 
            array (
                'id' => 2237,
                'song_id' => 558,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:31:35',
                'updated_at' => '2018-04-28 12:31:35',
            ),
            237 => 
            array (
                'id' => 2238,
                'song_id' => 558,
                'tag_id' => 224,
                'created_at' => '2018-04-28 12:31:35',
                'updated_at' => '2018-04-28 12:31:35',
            ),
            238 => 
            array (
                'id' => 2239,
                'song_id' => 559,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:37',
                'updated_at' => '2018-04-28 12:31:37',
            ),
            239 => 
            array (
                'id' => 2240,
                'song_id' => 559,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:37',
                'updated_at' => '2018-04-28 12:31:37',
            ),
            240 => 
            array (
                'id' => 2241,
                'song_id' => 559,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:37',
                'updated_at' => '2018-04-28 12:31:37',
            ),
            241 => 
            array (
                'id' => 2242,
                'song_id' => 559,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:37',
                'updated_at' => '2018-04-28 12:31:37',
            ),
            242 => 
            array (
                'id' => 2243,
                'song_id' => 560,
                'tag_id' => 225,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2018-04-28 12:31:38',
            ),
            243 => 
            array (
                'id' => 2244,
                'song_id' => 560,
                'tag_id' => 226,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2018-04-28 12:31:38',
            ),
            244 => 
            array (
                'id' => 2245,
                'song_id' => 560,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2018-04-28 12:31:38',
            ),
            245 => 
            array (
                'id' => 2246,
                'song_id' => 560,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2018-04-28 12:31:38',
            ),
            246 => 
            array (
                'id' => 2247,
                'song_id' => 560,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:38',
                'updated_at' => '2018-04-28 12:31:38',
            ),
            247 => 
            array (
                'id' => 2248,
                'song_id' => 561,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:40',
                'updated_at' => '2018-04-28 12:31:40',
            ),
            248 => 
            array (
                'id' => 2249,
                'song_id' => 561,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:40',
                'updated_at' => '2018-04-28 12:31:40',
            ),
            249 => 
            array (
                'id' => 2250,
                'song_id' => 561,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:40',
                'updated_at' => '2018-04-28 12:31:40',
            ),
            250 => 
            array (
                'id' => 2251,
                'song_id' => 561,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:40',
                'updated_at' => '2018-04-28 12:31:40',
            ),
            251 => 
            array (
                'id' => 2252,
                'song_id' => 562,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:41',
                'updated_at' => '2018-04-28 12:31:41',
            ),
            252 => 
            array (
                'id' => 2253,
                'song_id' => 562,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:41',
                'updated_at' => '2018-04-28 12:31:41',
            ),
            253 => 
            array (
                'id' => 2254,
                'song_id' => 562,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:41',
                'updated_at' => '2018-04-28 12:31:41',
            ),
            254 => 
            array (
                'id' => 2255,
                'song_id' => 562,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:31:41',
                'updated_at' => '2018-04-28 12:31:41',
            ),
            255 => 
            array (
                'id' => 2256,
                'song_id' => 562,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:31:41',
                'updated_at' => '2018-04-28 12:31:41',
            ),
            256 => 
            array (
                'id' => 2257,
                'song_id' => 563,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:43',
                'updated_at' => '2018-04-28 12:31:43',
            ),
            257 => 
            array (
                'id' => 2258,
                'song_id' => 563,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:43',
                'updated_at' => '2018-04-28 12:31:43',
            ),
            258 => 
            array (
                'id' => 2259,
                'song_id' => 563,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:43',
                'updated_at' => '2018-04-28 12:31:43',
            ),
            259 => 
            array (
                'id' => 2260,
                'song_id' => 563,
                'tag_id' => 122,
                'created_at' => '2018-04-28 12:31:43',
                'updated_at' => '2018-04-28 12:31:43',
            ),
            260 => 
            array (
                'id' => 2261,
                'song_id' => 564,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:44',
                'updated_at' => '2018-04-28 12:31:44',
            ),
            261 => 
            array (
                'id' => 2262,
                'song_id' => 564,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:44',
                'updated_at' => '2018-04-28 12:31:44',
            ),
            262 => 
            array (
                'id' => 2263,
                'song_id' => 564,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:44',
                'updated_at' => '2018-04-28 12:31:44',
            ),
            263 => 
            array (
                'id' => 2264,
                'song_id' => 564,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:31:44',
                'updated_at' => '2018-04-28 12:31:44',
            ),
            264 => 
            array (
                'id' => 2265,
                'song_id' => 565,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:46',
                'updated_at' => '2018-04-28 12:31:46',
            ),
            265 => 
            array (
                'id' => 2266,
                'song_id' => 565,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:31:46',
                'updated_at' => '2018-04-28 12:31:46',
            ),
            266 => 
            array (
                'id' => 2267,
                'song_id' => 565,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:46',
                'updated_at' => '2018-04-28 12:31:46',
            ),
            267 => 
            array (
                'id' => 2268,
                'song_id' => 565,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:31:46',
                'updated_at' => '2018-04-28 12:31:46',
            ),
            268 => 
            array (
                'id' => 2269,
                'song_id' => 566,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:31:47',
                'updated_at' => '2018-04-28 12:31:47',
            ),
            269 => 
            array (
                'id' => 2270,
                'song_id' => 566,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:47',
                'updated_at' => '2018-04-28 12:31:47',
            ),
            270 => 
            array (
                'id' => 2271,
                'song_id' => 566,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:31:47',
                'updated_at' => '2018-04-28 12:31:47',
            ),
            271 => 
            array (
                'id' => 2272,
                'song_id' => 566,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:31:47',
                'updated_at' => '2018-04-28 12:31:47',
            ),
            272 => 
            array (
                'id' => 2273,
                'song_id' => 566,
                'tag_id' => 189,
                'created_at' => '2018-04-28 12:31:47',
                'updated_at' => '2018-04-28 12:31:47',
            ),
            273 => 
            array (
                'id' => 2274,
                'song_id' => 567,
                'tag_id' => 227,
                'created_at' => '2018-04-28 12:31:49',
                'updated_at' => '2018-04-28 12:31:49',
            ),
            274 => 
            array (
                'id' => 2275,
                'song_id' => 567,
                'tag_id' => 228,
                'created_at' => '2018-04-28 12:31:49',
                'updated_at' => '2018-04-28 12:31:49',
            ),
            275 => 
            array (
                'id' => 2276,
                'song_id' => 567,
                'tag_id' => 23,
                'created_at' => '2018-04-28 12:31:49',
                'updated_at' => '2018-04-28 12:31:49',
            ),
            276 => 
            array (
                'id' => 2277,
                'song_id' => 567,
                'tag_id' => 132,
                'created_at' => '2018-04-28 12:31:49',
                'updated_at' => '2018-04-28 12:31:49',
            ),
            277 => 
            array (
                'id' => 2278,
                'song_id' => 572,
                'tag_id' => 229,
                'created_at' => '2018-04-28 12:31:56',
                'updated_at' => '2018-04-28 12:31:56',
            ),
            278 => 
            array (
                'id' => 2279,
                'song_id' => 572,
                'tag_id' => 139,
                'created_at' => '2018-04-28 12:31:56',
                'updated_at' => '2018-04-28 12:31:56',
            ),
            279 => 
            array (
                'id' => 2280,
                'song_id' => 572,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:56',
                'updated_at' => '2018-04-28 12:31:56',
            ),
            280 => 
            array (
                'id' => 2281,
                'song_id' => 572,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:31:56',
                'updated_at' => '2018-04-28 12:31:56',
            ),
            281 => 
            array (
                'id' => 2282,
                'song_id' => 572,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:31:56',
                'updated_at' => '2018-04-28 12:31:56',
            ),
            282 => 
            array (
                'id' => 2283,
                'song_id' => 573,
                'tag_id' => 230,
                'created_at' => '2018-04-28 12:31:57',
                'updated_at' => '2018-04-28 12:31:57',
            ),
            283 => 
            array (
                'id' => 2284,
                'song_id' => 573,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:31:57',
                'updated_at' => '2018-04-28 12:31:57',
            ),
            284 => 
            array (
                'id' => 2285,
                'song_id' => 573,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:31:57',
                'updated_at' => '2018-04-28 12:31:57',
            ),
            285 => 
            array (
                'id' => 2286,
                'song_id' => 573,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:31:57',
                'updated_at' => '2018-04-28 12:31:57',
            ),
            286 => 
            array (
                'id' => 2287,
                'song_id' => 573,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:57',
                'updated_at' => '2018-04-28 12:31:57',
            ),
            287 => 
            array (
                'id' => 2288,
                'song_id' => 574,
                'tag_id' => 231,
                'created_at' => '2018-04-28 12:31:59',
                'updated_at' => '2018-04-28 12:31:59',
            ),
            288 => 
            array (
                'id' => 2289,
                'song_id' => 574,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:31:59',
                'updated_at' => '2018-04-28 12:31:59',
            ),
            289 => 
            array (
                'id' => 2290,
                'song_id' => 574,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:31:59',
                'updated_at' => '2018-04-28 12:31:59',
            ),
            290 => 
            array (
                'id' => 2291,
                'song_id' => 574,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:31:59',
                'updated_at' => '2018-04-28 12:31:59',
            ),
            291 => 
            array (
                'id' => 2292,
                'song_id' => 574,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:31:59',
                'updated_at' => '2018-04-28 12:31:59',
            ),
            292 => 
            array (
                'id' => 2293,
                'song_id' => 576,
                'tag_id' => 47,
                'created_at' => '2018-04-28 12:32:02',
                'updated_at' => '2018-04-28 12:32:02',
            ),
            293 => 
            array (
                'id' => 2294,
                'song_id' => 576,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:32:02',
                'updated_at' => '2018-04-28 12:32:02',
            ),
            294 => 
            array (
                'id' => 2295,
                'song_id' => 576,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:02',
                'updated_at' => '2018-04-28 12:32:02',
            ),
            295 => 
            array (
                'id' => 2296,
                'song_id' => 576,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:02',
                'updated_at' => '2018-04-28 12:32:02',
            ),
            296 => 
            array (
                'id' => 2297,
                'song_id' => 576,
                'tag_id' => 95,
                'created_at' => '2018-04-28 12:32:02',
                'updated_at' => '2018-04-28 12:32:02',
            ),
            297 => 
            array (
                'id' => 2298,
                'song_id' => 577,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:32:03',
                'updated_at' => '2018-04-28 12:32:03',
            ),
            298 => 
            array (
                'id' => 2299,
                'song_id' => 577,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:03',
                'updated_at' => '2018-04-28 12:32:03',
            ),
            299 => 
            array (
                'id' => 2300,
                'song_id' => 577,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:03',
                'updated_at' => '2018-04-28 12:32:03',
            ),
            300 => 
            array (
                'id' => 2301,
                'song_id' => 577,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:32:03',
                'updated_at' => '2018-04-28 12:32:03',
            ),
            301 => 
            array (
                'id' => 2302,
                'song_id' => 577,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:03',
                'updated_at' => '2018-04-28 12:32:03',
            ),
            302 => 
            array (
                'id' => 2303,
                'song_id' => 578,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:32:05',
                'updated_at' => '2018-04-28 12:32:05',
            ),
            303 => 
            array (
                'id' => 2304,
                'song_id' => 578,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:05',
                'updated_at' => '2018-04-28 12:32:05',
            ),
            304 => 
            array (
                'id' => 2305,
                'song_id' => 578,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:05',
                'updated_at' => '2018-04-28 12:32:05',
            ),
            305 => 
            array (
                'id' => 2306,
                'song_id' => 578,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:32:05',
                'updated_at' => '2018-04-28 12:32:05',
            ),
            306 => 
            array (
                'id' => 2307,
                'song_id' => 578,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:05',
                'updated_at' => '2018-04-28 12:32:05',
            ),
            307 => 
            array (
                'id' => 2308,
                'song_id' => 579,
                'tag_id' => 52,
                'created_at' => '2018-04-28 12:32:07',
                'updated_at' => '2018-04-28 12:32:07',
            ),
            308 => 
            array (
                'id' => 2309,
                'song_id' => 579,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:07',
                'updated_at' => '2018-04-28 12:32:07',
            ),
            309 => 
            array (
                'id' => 2310,
                'song_id' => 579,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:07',
                'updated_at' => '2018-04-28 12:32:07',
            ),
            310 => 
            array (
                'id' => 2311,
                'song_id' => 579,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:07',
                'updated_at' => '2018-04-28 12:32:07',
            ),
            311 => 
            array (
                'id' => 2312,
                'song_id' => 579,
                'tag_id' => 17,
                'created_at' => '2018-04-28 12:32:07',
                'updated_at' => '2018-04-28 12:32:07',
            ),
            312 => 
            array (
                'id' => 2313,
                'song_id' => 580,
                'tag_id' => 55,
                'created_at' => '2018-04-28 12:32:09',
                'updated_at' => '2018-04-28 12:32:09',
            ),
            313 => 
            array (
                'id' => 2314,
                'song_id' => 580,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:09',
                'updated_at' => '2018-04-28 12:32:09',
            ),
            314 => 
            array (
                'id' => 2315,
                'song_id' => 580,
                'tag_id' => 189,
                'created_at' => '2018-04-28 12:32:09',
                'updated_at' => '2018-04-28 12:32:09',
            ),
            315 => 
            array (
                'id' => 2316,
                'song_id' => 580,
                'tag_id' => 190,
                'created_at' => '2018-04-28 12:32:09',
                'updated_at' => '2018-04-28 12:32:09',
            ),
            316 => 
            array (
                'id' => 2317,
                'song_id' => 580,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:09',
                'updated_at' => '2018-04-28 12:32:09',
            ),
            317 => 
            array (
                'id' => 2318,
                'song_id' => 581,
                'tag_id' => 232,
                'created_at' => '2018-04-28 12:32:10',
                'updated_at' => '2018-04-28 12:32:10',
            ),
            318 => 
            array (
                'id' => 2319,
                'song_id' => 581,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:10',
                'updated_at' => '2018-04-28 12:32:10',
            ),
            319 => 
            array (
                'id' => 2320,
                'song_id' => 581,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:32:10',
                'updated_at' => '2018-04-28 12:32:10',
            ),
            320 => 
            array (
                'id' => 2321,
                'song_id' => 581,
                'tag_id' => 44,
                'created_at' => '2018-04-28 12:32:10',
                'updated_at' => '2018-04-28 12:32:10',
            ),
            321 => 
            array (
                'id' => 2322,
                'song_id' => 581,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:32:10',
                'updated_at' => '2018-04-28 12:32:10',
            ),
            322 => 
            array (
                'id' => 2323,
                'song_id' => 582,
                'tag_id' => 233,
                'created_at' => '2018-04-28 12:32:12',
                'updated_at' => '2018-04-28 12:32:12',
            ),
            323 => 
            array (
                'id' => 2324,
                'song_id' => 582,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:12',
                'updated_at' => '2018-04-28 12:32:12',
            ),
            324 => 
            array (
                'id' => 2325,
                'song_id' => 582,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:12',
                'updated_at' => '2018-04-28 12:32:12',
            ),
            325 => 
            array (
                'id' => 2326,
                'song_id' => 582,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:32:12',
                'updated_at' => '2018-04-28 12:32:12',
            ),
            326 => 
            array (
                'id' => 2327,
                'song_id' => 582,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:32:12',
                'updated_at' => '2018-04-28 12:32:12',
            ),
            327 => 
            array (
                'id' => 2328,
                'song_id' => 583,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:13',
                'updated_at' => '2018-04-28 12:32:13',
            ),
            328 => 
            array (
                'id' => 2329,
                'song_id' => 583,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:13',
                'updated_at' => '2018-04-28 12:32:13',
            ),
            329 => 
            array (
                'id' => 2330,
                'song_id' => 583,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:32:13',
                'updated_at' => '2018-04-28 12:32:13',
            ),
            330 => 
            array (
                'id' => 2331,
                'song_id' => 583,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:32:13',
                'updated_at' => '2018-04-28 12:32:13',
            ),
            331 => 
            array (
                'id' => 2332,
                'song_id' => 583,
                'tag_id' => 233,
                'created_at' => '2018-04-28 12:32:13',
                'updated_at' => '2018-04-28 12:32:13',
            ),
            332 => 
            array (
                'id' => 2333,
                'song_id' => 585,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:16',
                'updated_at' => '2018-04-28 12:32:16',
            ),
            333 => 
            array (
                'id' => 2334,
                'song_id' => 585,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:16',
                'updated_at' => '2018-04-28 12:32:16',
            ),
            334 => 
            array (
                'id' => 2335,
                'song_id' => 585,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:32:16',
                'updated_at' => '2018-04-28 12:32:16',
            ),
            335 => 
            array (
                'id' => 2336,
                'song_id' => 585,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:32:16',
                'updated_at' => '2018-04-28 12:32:16',
            ),
            336 => 
            array (
                'id' => 2337,
                'song_id' => 585,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:16',
                'updated_at' => '2018-04-28 12:32:16',
            ),
            337 => 
            array (
                'id' => 2338,
                'song_id' => 586,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:18',
                'updated_at' => '2018-04-28 12:32:18',
            ),
            338 => 
            array (
                'id' => 2339,
                'song_id' => 586,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:18',
                'updated_at' => '2018-04-28 12:32:18',
            ),
            339 => 
            array (
                'id' => 2340,
                'song_id' => 586,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:32:18',
                'updated_at' => '2018-04-28 12:32:18',
            ),
            340 => 
            array (
                'id' => 2341,
                'song_id' => 586,
                'tag_id' => 226,
                'created_at' => '2018-04-28 12:32:18',
                'updated_at' => '2018-04-28 12:32:18',
            ),
            341 => 
            array (
                'id' => 2342,
                'song_id' => 586,
                'tag_id' => 125,
                'created_at' => '2018-04-28 12:32:18',
                'updated_at' => '2018-04-28 12:32:18',
            ),
            342 => 
            array (
                'id' => 2343,
                'song_id' => 587,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:19',
                'updated_at' => '2018-04-28 12:32:19',
            ),
            343 => 
            array (
                'id' => 2344,
                'song_id' => 587,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:32:19',
                'updated_at' => '2018-04-28 12:32:19',
            ),
            344 => 
            array (
                'id' => 2345,
                'song_id' => 587,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:19',
                'updated_at' => '2018-04-28 12:32:19',
            ),
            345 => 
            array (
                'id' => 2346,
                'song_id' => 587,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:19',
                'updated_at' => '2018-04-28 12:32:19',
            ),
            346 => 
            array (
                'id' => 2347,
                'song_id' => 587,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:32:19',
                'updated_at' => '2018-04-28 12:32:19',
            ),
            347 => 
            array (
                'id' => 2348,
                'song_id' => 588,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:32:20',
                'updated_at' => '2018-04-28 12:32:20',
            ),
            348 => 
            array (
                'id' => 2349,
                'song_id' => 588,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:32:20',
                'updated_at' => '2018-04-28 12:32:20',
            ),
            349 => 
            array (
                'id' => 2350,
                'song_id' => 588,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:32:20',
                'updated_at' => '2018-04-28 12:32:20',
            ),
            350 => 
            array (
                'id' => 2351,
                'song_id' => 588,
                'tag_id' => 22,
                'created_at' => '2018-04-28 12:32:20',
                'updated_at' => '2018-04-28 12:32:20',
            ),
            351 => 
            array (
                'id' => 2352,
                'song_id' => 589,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:22',
                'updated_at' => '2018-04-28 12:32:22',
            ),
            352 => 
            array (
                'id' => 2353,
                'song_id' => 589,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:32:22',
                'updated_at' => '2018-04-28 12:32:22',
            ),
            353 => 
            array (
                'id' => 2354,
                'song_id' => 589,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:22',
                'updated_at' => '2018-04-28 12:32:22',
            ),
            354 => 
            array (
                'id' => 2355,
                'song_id' => 589,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:32:22',
                'updated_at' => '2018-04-28 12:32:22',
            ),
            355 => 
            array (
                'id' => 2356,
                'song_id' => 589,
                'tag_id' => 232,
                'created_at' => '2018-04-28 12:32:22',
                'updated_at' => '2018-04-28 12:32:22',
            ),
            356 => 
            array (
                'id' => 2357,
                'song_id' => 590,
                'tag_id' => 234,
                'created_at' => '2018-04-28 12:32:24',
                'updated_at' => '2018-04-28 12:32:24',
            ),
            357 => 
            array (
                'id' => 2358,
                'song_id' => 590,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:24',
                'updated_at' => '2018-04-28 12:32:24',
            ),
            358 => 
            array (
                'id' => 2359,
                'song_id' => 590,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:24',
                'updated_at' => '2018-04-28 12:32:24',
            ),
            359 => 
            array (
                'id' => 2360,
                'song_id' => 590,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:32:24',
                'updated_at' => '2018-04-28 12:32:24',
            ),
            360 => 
            array (
                'id' => 2361,
                'song_id' => 590,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:32:24',
                'updated_at' => '2018-04-28 12:32:24',
            ),
            361 => 
            array (
                'id' => 2362,
                'song_id' => 591,
                'tag_id' => 235,
                'created_at' => '2018-04-28 12:32:26',
                'updated_at' => '2018-04-28 12:32:26',
            ),
            362 => 
            array (
                'id' => 2363,
                'song_id' => 591,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:26',
                'updated_at' => '2018-04-28 12:32:26',
            ),
            363 => 
            array (
                'id' => 2364,
                'song_id' => 591,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:26',
                'updated_at' => '2018-04-28 12:32:26',
            ),
            364 => 
            array (
                'id' => 2365,
                'song_id' => 591,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:32:26',
                'updated_at' => '2018-04-28 12:32:26',
            ),
            365 => 
            array (
                'id' => 2366,
                'song_id' => 591,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:32:26',
                'updated_at' => '2018-04-28 12:32:26',
            ),
            366 => 
            array (
                'id' => 2367,
                'song_id' => 592,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:27',
                'updated_at' => '2018-04-28 12:32:27',
            ),
            367 => 
            array (
                'id' => 2368,
                'song_id' => 592,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:27',
                'updated_at' => '2018-04-28 12:32:27',
            ),
            368 => 
            array (
                'id' => 2369,
                'song_id' => 592,
                'tag_id' => 25,
                'created_at' => '2018-04-28 12:32:27',
                'updated_at' => '2018-04-28 12:32:27',
            ),
            369 => 
            array (
                'id' => 2370,
                'song_id' => 592,
                'tag_id' => 234,
                'created_at' => '2018-04-28 12:32:27',
                'updated_at' => '2018-04-28 12:32:27',
            ),
            370 => 
            array (
                'id' => 2371,
                'song_id' => 592,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:32:27',
                'updated_at' => '2018-04-28 12:32:27',
            ),
            371 => 
            array (
                'id' => 2372,
                'song_id' => 593,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:29',
                'updated_at' => '2018-04-28 12:32:29',
            ),
            372 => 
            array (
                'id' => 2373,
                'song_id' => 593,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:29',
                'updated_at' => '2018-04-28 12:32:29',
            ),
            373 => 
            array (
                'id' => 2374,
                'song_id' => 593,
                'tag_id' => 234,
                'created_at' => '2018-04-28 12:32:29',
                'updated_at' => '2018-04-28 12:32:29',
            ),
            374 => 
            array (
                'id' => 2375,
                'song_id' => 593,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:32:29',
                'updated_at' => '2018-04-28 12:32:29',
            ),
            375 => 
            array (
                'id' => 2376,
                'song_id' => 593,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:32:29',
                'updated_at' => '2018-04-28 12:32:29',
            ),
            376 => 
            array (
                'id' => 2377,
                'song_id' => 594,
                'tag_id' => 13,
                'created_at' => '2018-04-28 12:32:30',
                'updated_at' => '2018-04-28 12:32:30',
            ),
            377 => 
            array (
                'id' => 2378,
                'song_id' => 594,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:30',
                'updated_at' => '2018-04-28 12:32:30',
            ),
            378 => 
            array (
                'id' => 2379,
                'song_id' => 594,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:32:30',
                'updated_at' => '2018-04-28 12:32:30',
            ),
            379 => 
            array (
                'id' => 2380,
                'song_id' => 594,
                'tag_id' => 15,
                'created_at' => '2018-04-28 12:32:30',
                'updated_at' => '2018-04-28 12:32:30',
            ),
            380 => 
            array (
                'id' => 2381,
                'song_id' => 594,
                'tag_id' => 24,
                'created_at' => '2018-04-28 12:32:30',
                'updated_at' => '2018-04-28 12:32:30',
            ),
            381 => 
            array (
                'id' => 2382,
                'song_id' => 595,
                'tag_id' => 236,
                'created_at' => '2018-04-28 12:32:32',
                'updated_at' => '2018-04-28 12:32:32',
            ),
            382 => 
            array (
                'id' => 2383,
                'song_id' => 595,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:32:32',
                'updated_at' => '2018-04-28 12:32:32',
            ),
            383 => 
            array (
                'id' => 2384,
                'song_id' => 595,
                'tag_id' => 10,
                'created_at' => '2018-04-28 12:32:32',
                'updated_at' => '2018-04-28 12:32:32',
            ),
            384 => 
            array (
                'id' => 2385,
                'song_id' => 595,
                'tag_id' => 143,
                'created_at' => '2018-04-28 12:32:32',
                'updated_at' => '2018-04-28 12:32:32',
            ),
            385 => 
            array (
                'id' => 2386,
                'song_id' => 596,
                'tag_id' => 237,
                'created_at' => '2018-04-28 12:32:34',
                'updated_at' => '2018-04-28 12:32:34',
            ),
            386 => 
            array (
                'id' => 2387,
                'song_id' => 596,
                'tag_id' => 238,
                'created_at' => '2018-04-28 12:32:34',
                'updated_at' => '2018-04-28 12:32:34',
            ),
            387 => 
            array (
                'id' => 2388,
                'song_id' => 596,
                'tag_id' => 83,
                'created_at' => '2018-04-28 12:32:34',
                'updated_at' => '2018-04-28 12:32:34',
            ),
            388 => 
            array (
                'id' => 2389,
                'song_id' => 596,
                'tag_id' => 94,
                'created_at' => '2018-04-28 12:32:34',
                'updated_at' => '2018-04-28 12:32:34',
            ),
            389 => 
            array (
                'id' => 2390,
                'song_id' => 598,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:36',
                'updated_at' => '2018-04-28 12:32:36',
            ),
            390 => 
            array (
                'id' => 2391,
                'song_id' => 598,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:32:36',
                'updated_at' => '2018-04-28 12:32:36',
            ),
            391 => 
            array (
                'id' => 2392,
                'song_id' => 598,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:32:36',
                'updated_at' => '2018-04-28 12:32:36',
            ),
            392 => 
            array (
                'id' => 2393,
                'song_id' => 598,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:36',
                'updated_at' => '2018-04-28 12:32:36',
            ),
            393 => 
            array (
                'id' => 2394,
                'song_id' => 598,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:36',
                'updated_at' => '2018-04-28 12:32:36',
            ),
            394 => 
            array (
                'id' => 2395,
                'song_id' => 599,
                'tag_id' => 239,
                'created_at' => '2018-04-28 12:32:38',
                'updated_at' => '2018-04-28 12:32:38',
            ),
            395 => 
            array (
                'id' => 2396,
                'song_id' => 599,
                'tag_id' => 42,
                'created_at' => '2018-04-28 12:32:38',
                'updated_at' => '2018-04-28 12:32:38',
            ),
            396 => 
            array (
                'id' => 2397,
                'song_id' => 599,
                'tag_id' => 39,
                'created_at' => '2018-04-28 12:32:38',
                'updated_at' => '2018-04-28 12:32:38',
            ),
            397 => 
            array (
                'id' => 2398,
                'song_id' => 599,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:38',
                'updated_at' => '2018-04-28 12:32:38',
            ),
            398 => 
            array (
                'id' => 2399,
                'song_id' => 599,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:32:38',
                'updated_at' => '2018-04-28 12:32:38',
            ),
            399 => 
            array (
                'id' => 2400,
                'song_id' => 600,
                'tag_id' => 240,
                'created_at' => '2018-04-28 12:32:39',
                'updated_at' => '2018-04-28 12:32:39',
            ),
            400 => 
            array (
                'id' => 2401,
                'song_id' => 600,
                'tag_id' => 241,
                'created_at' => '2018-04-28 12:32:39',
                'updated_at' => '2018-04-28 12:32:39',
            ),
            401 => 
            array (
                'id' => 2402,
                'song_id' => 600,
                'tag_id' => 242,
                'created_at' => '2018-04-28 12:32:39',
                'updated_at' => '2018-04-28 12:32:39',
            ),
            402 => 
            array (
                'id' => 2403,
                'song_id' => 601,
                'tag_id' => 1,
                'created_at' => '2018-04-28 12:32:41',
                'updated_at' => '2018-04-28 12:32:41',
            ),
            403 => 
            array (
                'id' => 2404,
                'song_id' => 601,
                'tag_id' => 3,
                'created_at' => '2018-04-28 12:32:41',
                'updated_at' => '2018-04-28 12:32:41',
            ),
            404 => 
            array (
                'id' => 2405,
                'song_id' => 601,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:32:41',
                'updated_at' => '2018-04-28 12:32:41',
            ),
            405 => 
            array (
                'id' => 2406,
                'song_id' => 601,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:32:41',
                'updated_at' => '2018-04-28 12:32:41',
            ),
            406 => 
            array (
                'id' => 2407,
                'song_id' => 601,
                'tag_id' => 45,
                'created_at' => '2018-04-28 12:32:41',
                'updated_at' => '2018-04-28 12:32:41',
            ),
            407 => 
            array (
                'id' => 2408,
                'song_id' => 602,
                'tag_id' => 243,
                'created_at' => '2018-04-28 12:32:42',
                'updated_at' => '2018-04-28 12:32:42',
            ),
            408 => 
            array (
                'id' => 2409,
                'song_id' => 602,
                'tag_id' => 78,
                'created_at' => '2018-04-28 12:32:42',
                'updated_at' => '2018-04-28 12:32:42',
            ),
            409 => 
            array (
                'id' => 2410,
                'song_id' => 602,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:32:42',
                'updated_at' => '2018-04-28 12:32:42',
            ),
            410 => 
            array (
                'id' => 2411,
                'song_id' => 602,
                'tag_id' => 79,
                'created_at' => '2018-04-28 12:32:42',
                'updated_at' => '2018-04-28 12:32:42',
            ),
            411 => 
            array (
                'id' => 2412,
                'song_id' => 602,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:32:42',
                'updated_at' => '2018-04-28 12:32:42',
            ),
            412 => 
            array (
                'id' => 2413,
                'song_id' => 603,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2018-04-28 12:32:44',
            ),
            413 => 
            array (
                'id' => 2414,
                'song_id' => 603,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2018-04-28 12:32:44',
            ),
            414 => 
            array (
                'id' => 2415,
                'song_id' => 603,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2018-04-28 12:32:44',
            ),
            415 => 
            array (
                'id' => 2416,
                'song_id' => 603,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:32:44',
                'updated_at' => '2018-04-28 12:32:44',
            ),
            416 => 
            array (
                'id' => 2417,
                'song_id' => 605,
                'tag_id' => 247,
                'created_at' => '2018-04-28 12:32:47',
                'updated_at' => '2018-04-28 12:32:47',
            ),
            417 => 
            array (
                'id' => 2418,
                'song_id' => 605,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:32:47',
                'updated_at' => '2018-04-28 12:32:47',
            ),
            418 => 
            array (
                'id' => 2419,
                'song_id' => 605,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:32:47',
                'updated_at' => '2018-04-28 12:32:47',
            ),
            419 => 
            array (
                'id' => 2420,
                'song_id' => 605,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:32:47',
                'updated_at' => '2018-04-28 12:32:47',
            ),
            420 => 
            array (
                'id' => 2421,
                'song_id' => 606,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:32:49',
                'updated_at' => '2018-04-28 12:32:49',
            ),
            421 => 
            array (
                'id' => 2422,
                'song_id' => 606,
                'tag_id' => 247,
                'created_at' => '2018-04-28 12:32:49',
                'updated_at' => '2018-04-28 12:32:49',
            ),
            422 => 
            array (
                'id' => 2423,
                'song_id' => 606,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:32:49',
                'updated_at' => '2018-04-28 12:32:49',
            ),
            423 => 
            array (
                'id' => 2424,
                'song_id' => 606,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:32:49',
                'updated_at' => '2018-04-28 12:32:49',
            ),
            424 => 
            array (
                'id' => 2425,
                'song_id' => 607,
                'tag_id' => 248,
                'created_at' => '2018-04-28 12:32:50',
                'updated_at' => '2018-04-28 12:32:50',
            ),
            425 => 
            array (
                'id' => 2426,
                'song_id' => 607,
                'tag_id' => 249,
                'created_at' => '2018-04-28 12:32:50',
                'updated_at' => '2018-04-28 12:32:50',
            ),
            426 => 
            array (
                'id' => 2427,
                'song_id' => 607,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:32:51',
                'updated_at' => '2018-04-28 12:32:51',
            ),
            427 => 
            array (
                'id' => 2428,
                'song_id' => 607,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:32:51',
                'updated_at' => '2018-04-28 12:32:51',
            ),
            428 => 
            array (
                'id' => 2429,
                'song_id' => 607,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:32:51',
                'updated_at' => '2018-04-28 12:32:51',
            ),
            429 => 
            array (
                'id' => 2430,
                'song_id' => 609,
                'tag_id' => 250,
                'created_at' => '2018-04-28 12:32:53',
                'updated_at' => '2018-04-28 12:32:53',
            ),
            430 => 
            array (
                'id' => 2431,
                'song_id' => 609,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:32:53',
                'updated_at' => '2018-04-28 12:32:53',
            ),
            431 => 
            array (
                'id' => 2432,
                'song_id' => 609,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:32:53',
                'updated_at' => '2018-04-28 12:32:53',
            ),
            432 => 
            array (
                'id' => 2433,
                'song_id' => 609,
                'tag_id' => 49,
                'created_at' => '2018-04-28 12:32:53',
                'updated_at' => '2018-04-28 12:32:53',
            ),
            433 => 
            array (
                'id' => 2434,
                'song_id' => 609,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:32:53',
                'updated_at' => '2018-04-28 12:32:53',
            ),
            434 => 
            array (
                'id' => 2435,
                'song_id' => 610,
                'tag_id' => 251,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2018-04-28 12:32:55',
            ),
            435 => 
            array (
                'id' => 2436,
                'song_id' => 610,
                'tag_id' => 252,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2018-04-28 12:32:55',
            ),
            436 => 
            array (
                'id' => 2437,
                'song_id' => 610,
                'tag_id' => 253,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2018-04-28 12:32:55',
            ),
            437 => 
            array (
                'id' => 2438,
                'song_id' => 610,
                'tag_id' => 254,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2018-04-28 12:32:55',
            ),
            438 => 
            array (
                'id' => 2439,
                'song_id' => 610,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:32:55',
                'updated_at' => '2018-04-28 12:32:55',
            ),
            439 => 
            array (
                'id' => 2440,
                'song_id' => 611,
                'tag_id' => 255,
                'created_at' => '2018-04-28 12:32:56',
                'updated_at' => '2018-04-28 12:32:56',
            ),
            440 => 
            array (
                'id' => 2441,
                'song_id' => 611,
                'tag_id' => 250,
                'created_at' => '2018-04-28 12:32:56',
                'updated_at' => '2018-04-28 12:32:56',
            ),
            441 => 
            array (
                'id' => 2442,
                'song_id' => 611,
                'tag_id' => 247,
                'created_at' => '2018-04-28 12:32:56',
                'updated_at' => '2018-04-28 12:32:56',
            ),
            442 => 
            array (
                'id' => 2443,
                'song_id' => 611,
                'tag_id' => 50,
                'created_at' => '2018-04-28 12:32:56',
                'updated_at' => '2018-04-28 12:32:56',
            ),
            443 => 
            array (
                'id' => 2444,
                'song_id' => 611,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:32:56',
                'updated_at' => '2018-04-28 12:32:56',
            ),
            444 => 
            array (
                'id' => 2445,
                'song_id' => 612,
                'tag_id' => 256,
                'created_at' => '2018-04-28 12:32:58',
                'updated_at' => '2018-04-28 12:32:58',
            ),
            445 => 
            array (
                'id' => 2446,
                'song_id' => 612,
                'tag_id' => 251,
                'created_at' => '2018-04-28 12:32:58',
                'updated_at' => '2018-04-28 12:32:58',
            ),
            446 => 
            array (
                'id' => 2447,
                'song_id' => 612,
                'tag_id' => 252,
                'created_at' => '2018-04-28 12:32:58',
                'updated_at' => '2018-04-28 12:32:58',
            ),
            447 => 
            array (
                'id' => 2448,
                'song_id' => 612,
                'tag_id' => 253,
                'created_at' => '2018-04-28 12:32:58',
                'updated_at' => '2018-04-28 12:32:58',
            ),
            448 => 
            array (
                'id' => 2449,
                'song_id' => 612,
                'tag_id' => 254,
                'created_at' => '2018-04-28 12:32:58',
                'updated_at' => '2018-04-28 12:32:58',
            ),
            449 => 
            array (
                'id' => 2450,
                'song_id' => 617,
                'tag_id' => 257,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2018-04-28 12:33:05',
            ),
            450 => 
            array (
                'id' => 2451,
                'song_id' => 617,
                'tag_id' => 258,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2018-04-28 12:33:05',
            ),
            451 => 
            array (
                'id' => 2452,
                'song_id' => 617,
                'tag_id' => 259,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2018-04-28 12:33:05',
            ),
            452 => 
            array (
                'id' => 2453,
                'song_id' => 617,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2018-04-28 12:33:05',
            ),
            453 => 
            array (
                'id' => 2454,
                'song_id' => 617,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:05',
                'updated_at' => '2018-04-28 12:33:05',
            ),
            454 => 
            array (
                'id' => 2455,
                'song_id' => 618,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:33:06',
                'updated_at' => '2018-04-28 12:33:06',
            ),
            455 => 
            array (
                'id' => 2456,
                'song_id' => 618,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:06',
                'updated_at' => '2018-04-28 12:33:06',
            ),
            456 => 
            array (
                'id' => 2457,
                'song_id' => 618,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:06',
                'updated_at' => '2018-04-28 12:33:06',
            ),
            457 => 
            array (
                'id' => 2458,
                'song_id' => 618,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:06',
                'updated_at' => '2018-04-28 12:33:06',
            ),
            458 => 
            array (
                'id' => 2459,
                'song_id' => 618,
                'tag_id' => 258,
                'created_at' => '2018-04-28 12:33:06',
                'updated_at' => '2018-04-28 12:33:06',
            ),
            459 => 
            array (
                'id' => 2460,
                'song_id' => 619,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:08',
                'updated_at' => '2018-04-28 12:33:08',
            ),
            460 => 
            array (
                'id' => 2461,
                'song_id' => 619,
                'tag_id' => 138,
                'created_at' => '2018-04-28 12:33:08',
                'updated_at' => '2018-04-28 12:33:08',
            ),
            461 => 
            array (
                'id' => 2462,
                'song_id' => 620,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:33:10',
                'updated_at' => '2018-04-28 12:33:10',
            ),
            462 => 
            array (
                'id' => 2463,
                'song_id' => 620,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:10',
                'updated_at' => '2018-04-28 12:33:10',
            ),
            463 => 
            array (
                'id' => 2464,
                'song_id' => 620,
                'tag_id' => 18,
                'created_at' => '2018-04-28 12:33:10',
                'updated_at' => '2018-04-28 12:33:10',
            ),
            464 => 
            array (
                'id' => 2465,
                'song_id' => 620,
                'tag_id' => 30,
                'created_at' => '2018-04-28 12:33:10',
                'updated_at' => '2018-04-28 12:33:10',
            ),
            465 => 
            array (
                'id' => 2466,
                'song_id' => 621,
                'tag_id' => 261,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2018-04-28 12:33:11',
            ),
            466 => 
            array (
                'id' => 2467,
                'song_id' => 621,
                'tag_id' => 262,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2018-04-28 12:33:11',
            ),
            467 => 
            array (
                'id' => 2468,
                'song_id' => 621,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2018-04-28 12:33:11',
            ),
            468 => 
            array (
                'id' => 2469,
                'song_id' => 621,
                'tag_id' => 21,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2018-04-28 12:33:11',
            ),
            469 => 
            array (
                'id' => 2470,
                'song_id' => 621,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:33:11',
                'updated_at' => '2018-04-28 12:33:11',
            ),
            470 => 
            array (
                'id' => 2471,
                'song_id' => 622,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:12',
                'updated_at' => '2018-04-28 12:33:12',
            ),
            471 => 
            array (
                'id' => 2472,
                'song_id' => 622,
                'tag_id' => 43,
                'created_at' => '2018-04-28 12:33:12',
                'updated_at' => '2018-04-28 12:33:12',
            ),
            472 => 
            array (
                'id' => 2473,
                'song_id' => 623,
                'tag_id' => 263,
                'created_at' => '2018-04-28 12:33:14',
                'updated_at' => '2018-04-28 12:33:14',
            ),
            473 => 
            array (
                'id' => 2474,
                'song_id' => 623,
                'tag_id' => 14,
                'created_at' => '2018-04-28 12:33:14',
                'updated_at' => '2018-04-28 12:33:14',
            ),
            474 => 
            array (
                'id' => 2475,
                'song_id' => 623,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:14',
                'updated_at' => '2018-04-28 12:33:14',
            ),
            475 => 
            array (
                'id' => 2476,
                'song_id' => 623,
                'tag_id' => 260,
                'created_at' => '2018-04-28 12:33:14',
                'updated_at' => '2018-04-28 12:33:14',
            ),
            476 => 
            array (
                'id' => 2477,
                'song_id' => 625,
                'tag_id' => 264,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2018-04-28 12:33:17',
            ),
            477 => 
            array (
                'id' => 2478,
                'song_id' => 625,
                'tag_id' => 265,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2018-04-28 12:33:17',
            ),
            478 => 
            array (
                'id' => 2479,
                'song_id' => 625,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2018-04-28 12:33:17',
            ),
            479 => 
            array (
                'id' => 2480,
                'song_id' => 625,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2018-04-28 12:33:17',
            ),
            480 => 
            array (
                'id' => 2481,
                'song_id' => 625,
                'tag_id' => 263,
                'created_at' => '2018-04-28 12:33:17',
                'updated_at' => '2018-04-28 12:33:17',
            ),
            481 => 
            array (
                'id' => 2482,
                'song_id' => 626,
                'tag_id' => 266,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2018-04-28 12:33:19',
            ),
            482 => 
            array (
                'id' => 2483,
                'song_id' => 626,
                'tag_id' => 267,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2018-04-28 12:33:19',
            ),
            483 => 
            array (
                'id' => 2484,
                'song_id' => 626,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2018-04-28 12:33:19',
            ),
            484 => 
            array (
                'id' => 2485,
                'song_id' => 626,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2018-04-28 12:33:19',
            ),
            485 => 
            array (
                'id' => 2486,
                'song_id' => 626,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:19',
                'updated_at' => '2018-04-28 12:33:19',
            ),
            486 => 
            array (
                'id' => 2487,
                'song_id' => 627,
                'tag_id' => 268,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2018-04-28 12:33:20',
            ),
            487 => 
            array (
                'id' => 2488,
                'song_id' => 627,
                'tag_id' => 269,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2018-04-28 12:33:20',
            ),
            488 => 
            array (
                'id' => 2489,
                'song_id' => 627,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2018-04-28 12:33:20',
            ),
            489 => 
            array (
                'id' => 2490,
                'song_id' => 627,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2018-04-28 12:33:20',
            ),
            490 => 
            array (
                'id' => 2491,
                'song_id' => 627,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:20',
                'updated_at' => '2018-04-28 12:33:20',
            ),
            491 => 
            array (
                'id' => 2492,
                'song_id' => 628,
                'tag_id' => 270,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2018-04-28 12:33:21',
            ),
            492 => 
            array (
                'id' => 2493,
                'song_id' => 628,
                'tag_id' => 271,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2018-04-28 12:33:21',
            ),
            493 => 
            array (
                'id' => 2494,
                'song_id' => 628,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2018-04-28 12:33:21',
            ),
            494 => 
            array (
                'id' => 2495,
                'song_id' => 628,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2018-04-28 12:33:21',
            ),
            495 => 
            array (
                'id' => 2496,
                'song_id' => 628,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:21',
                'updated_at' => '2018-04-28 12:33:21',
            ),
            496 => 
            array (
                'id' => 2497,
                'song_id' => 637,
                'tag_id' => 272,
                'created_at' => '2018-04-28 12:33:34',
                'updated_at' => '2018-04-28 12:33:34',
            ),
            497 => 
            array (
                'id' => 2498,
                'song_id' => 637,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:34',
                'updated_at' => '2018-04-28 12:33:34',
            ),
            498 => 
            array (
                'id' => 2499,
                'song_id' => 637,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:34',
                'updated_at' => '2018-04-28 12:33:34',
            ),
            499 => 
            array (
                'id' => 2500,
                'song_id' => 637,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:34',
                'updated_at' => '2018-04-28 12:33:34',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'song_id' => 637,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:34',
                'updated_at' => '2018-04-28 12:33:34',
            ),
            1 => 
            array (
                'id' => 2502,
                'song_id' => 638,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:36',
                'updated_at' => '2018-04-28 12:33:36',
            ),
            2 => 
            array (
                'id' => 2503,
                'song_id' => 638,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:36',
                'updated_at' => '2018-04-28 12:33:36',
            ),
            3 => 
            array (
                'id' => 2504,
                'song_id' => 638,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:36',
                'updated_at' => '2018-04-28 12:33:36',
            ),
            4 => 
            array (
                'id' => 2505,
                'song_id' => 638,
                'tag_id' => 248,
                'created_at' => '2018-04-28 12:33:36',
                'updated_at' => '2018-04-28 12:33:36',
            ),
            5 => 
            array (
                'id' => 2506,
                'song_id' => 638,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:36',
                'updated_at' => '2018-04-28 12:33:36',
            ),
            6 => 
            array (
                'id' => 2507,
                'song_id' => 639,
                'tag_id' => 97,
                'created_at' => '2018-04-28 12:33:38',
                'updated_at' => '2018-04-28 12:33:38',
            ),
            7 => 
            array (
                'id' => 2508,
                'song_id' => 640,
                'tag_id' => 273,
                'created_at' => '2018-04-28 12:33:39',
                'updated_at' => '2018-04-28 12:33:39',
            ),
            8 => 
            array (
                'id' => 2509,
                'song_id' => 640,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:39',
                'updated_at' => '2018-04-28 12:33:39',
            ),
            9 => 
            array (
                'id' => 2510,
                'song_id' => 640,
                'tag_id' => 16,
                'created_at' => '2018-04-28 12:33:39',
                'updated_at' => '2018-04-28 12:33:39',
            ),
            10 => 
            array (
                'id' => 2511,
                'song_id' => 640,
                'tag_id' => 7,
                'created_at' => '2018-04-28 12:33:39',
                'updated_at' => '2018-04-28 12:33:39',
            ),
            11 => 
            array (
                'id' => 2512,
                'song_id' => 640,
                'tag_id' => 2,
                'created_at' => '2018-04-28 12:33:39',
                'updated_at' => '2018-04-28 12:33:39',
            ),
            12 => 
            array (
                'id' => 2513,
                'song_id' => 641,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:41',
                'updated_at' => '2018-04-28 12:33:41',
            ),
            13 => 
            array (
                'id' => 2514,
                'song_id' => 641,
                'tag_id' => 246,
                'created_at' => '2018-04-28 12:33:41',
                'updated_at' => '2018-04-28 12:33:41',
            ),
            14 => 
            array (
                'id' => 2515,
                'song_id' => 641,
                'tag_id' => 264,
                'created_at' => '2018-04-28 12:33:41',
                'updated_at' => '2018-04-28 12:33:41',
            ),
            15 => 
            array (
                'id' => 2516,
                'song_id' => 641,
                'tag_id' => 101,
                'created_at' => '2018-04-28 12:33:41',
                'updated_at' => '2018-04-28 12:33:41',
            ),
            16 => 
            array (
                'id' => 2517,
                'song_id' => 641,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:41',
                'updated_at' => '2018-04-28 12:33:41',
            ),
            17 => 
            array (
                'id' => 2518,
                'song_id' => 642,
                'tag_id' => 274,
                'created_at' => '2018-04-28 12:33:42',
                'updated_at' => '2018-04-28 12:33:42',
            ),
            18 => 
            array (
                'id' => 2519,
                'song_id' => 642,
                'tag_id' => 248,
                'created_at' => '2018-04-28 12:33:42',
                'updated_at' => '2018-04-28 12:33:42',
            ),
            19 => 
            array (
                'id' => 2520,
                'song_id' => 642,
                'tag_id' => 245,
                'created_at' => '2018-04-28 12:33:42',
                'updated_at' => '2018-04-28 12:33:42',
            ),
            20 => 
            array (
                'id' => 2521,
                'song_id' => 642,
                'tag_id' => 20,
                'created_at' => '2018-04-28 12:33:42',
                'updated_at' => '2018-04-28 12:33:42',
            ),
            21 => 
            array (
                'id' => 2522,
                'song_id' => 642,
                'tag_id' => 244,
                'created_at' => '2018-04-28 12:33:42',
                'updated_at' => '2018-04-28 12:33:42',
            ),
            22 => 
            array (
                'id' => 2523,
                'song_id' => 643,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:46:18',
                'updated_at' => '2019-10-29 22:46:18',
            ),
            23 => 
            array (
                'id' => 2524,
                'song_id' => 643,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:46:18',
                'updated_at' => '2019-10-29 22:46:18',
            ),
            24 => 
            array (
                'id' => 2525,
                'song_id' => 643,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:46:18',
                'updated_at' => '2019-10-29 22:46:18',
            ),
            25 => 
            array (
                'id' => 2526,
                'song_id' => 643,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:18',
                'updated_at' => '2019-10-29 22:46:18',
            ),
            26 => 
            array (
                'id' => 2527,
                'song_id' => 644,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-29 22:46:19',
            ),
            27 => 
            array (
                'id' => 2528,
                'song_id' => 644,
                'tag_id' => 336,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-29 22:46:19',
            ),
            28 => 
            array (
                'id' => 2529,
                'song_id' => 644,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-29 22:46:19',
            ),
            29 => 
            array (
                'id' => 2530,
                'song_id' => 644,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-29 22:46:19',
            ),
            30 => 
            array (
                'id' => 2531,
                'song_id' => 644,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:46:19',
                'updated_at' => '2019-10-29 22:46:19',
            ),
            31 => 
            array (
                'id' => 2532,
                'song_id' => 645,
                'tag_id' => 337,
                'created_at' => '2019-10-29 22:46:21',
                'updated_at' => '2019-10-29 22:46:21',
            ),
            32 => 
            array (
                'id' => 2533,
                'song_id' => 645,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:46:21',
                'updated_at' => '2019-10-29 22:46:21',
            ),
            33 => 
            array (
                'id' => 2534,
                'song_id' => 645,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:46:21',
                'updated_at' => '2019-10-29 22:46:21',
            ),
            34 => 
            array (
                'id' => 2535,
                'song_id' => 645,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:46:21',
                'updated_at' => '2019-10-29 22:46:21',
            ),
            35 => 
            array (
                'id' => 2536,
                'song_id' => 645,
                'tag_id' => 71,
                'created_at' => '2019-10-29 22:46:21',
                'updated_at' => '2019-10-29 22:46:21',
            ),
            36 => 
            array (
                'id' => 2537,
                'song_id' => 646,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:22',
                'updated_at' => '2019-10-29 22:46:22',
            ),
            37 => 
            array (
                'id' => 2538,
                'song_id' => 646,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:46:22',
                'updated_at' => '2019-10-29 22:46:22',
            ),
            38 => 
            array (
                'id' => 2539,
                'song_id' => 646,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:46:22',
                'updated_at' => '2019-10-29 22:46:22',
            ),
            39 => 
            array (
                'id' => 2540,
                'song_id' => 646,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:22',
                'updated_at' => '2019-10-29 22:46:22',
            ),
            40 => 
            array (
                'id' => 2541,
                'song_id' => 647,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:24',
                'updated_at' => '2019-10-29 22:46:24',
            ),
            41 => 
            array (
                'id' => 2542,
                'song_id' => 647,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:24',
                'updated_at' => '2019-10-29 22:46:24',
            ),
            42 => 
            array (
                'id' => 2543,
                'song_id' => 647,
                'tag_id' => 37,
                'created_at' => '2019-10-29 22:46:24',
                'updated_at' => '2019-10-29 22:46:24',
            ),
            43 => 
            array (
                'id' => 2544,
                'song_id' => 647,
                'tag_id' => 10,
                'created_at' => '2019-10-29 22:46:24',
                'updated_at' => '2019-10-29 22:46:24',
            ),
            44 => 
            array (
                'id' => 2545,
                'song_id' => 648,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:25',
                'updated_at' => '2019-10-29 22:46:25',
            ),
            45 => 
            array (
                'id' => 2546,
                'song_id' => 648,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:25',
                'updated_at' => '2019-10-29 22:46:25',
            ),
            46 => 
            array (
                'id' => 2547,
                'song_id' => 648,
                'tag_id' => 34,
                'created_at' => '2019-10-29 22:46:25',
                'updated_at' => '2019-10-29 22:46:25',
            ),
            47 => 
            array (
                'id' => 2548,
                'song_id' => 648,
                'tag_id' => 91,
                'created_at' => '2019-10-29 22:46:25',
                'updated_at' => '2019-10-29 22:46:25',
            ),
            48 => 
            array (
                'id' => 2549,
                'song_id' => 649,
                'tag_id' => 338,
                'created_at' => '2019-10-29 22:46:27',
                'updated_at' => '2019-10-29 22:46:27',
            ),
            49 => 
            array (
                'id' => 2550,
                'song_id' => 649,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:27',
                'updated_at' => '2019-10-29 22:46:27',
            ),
            50 => 
            array (
                'id' => 2551,
                'song_id' => 649,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:46:27',
                'updated_at' => '2019-10-29 22:46:27',
            ),
            51 => 
            array (
                'id' => 2552,
                'song_id' => 649,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:46:27',
                'updated_at' => '2019-10-29 22:46:27',
            ),
            52 => 
            array (
                'id' => 2553,
                'song_id' => 650,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:28',
                'updated_at' => '2019-10-29 22:46:28',
            ),
            53 => 
            array (
                'id' => 2554,
                'song_id' => 650,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:46:28',
                'updated_at' => '2019-10-29 22:46:28',
            ),
            54 => 
            array (
                'id' => 2555,
                'song_id' => 650,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:28',
                'updated_at' => '2019-10-29 22:46:28',
            ),
            55 => 
            array (
                'id' => 2556,
                'song_id' => 650,
                'tag_id' => 338,
                'created_at' => '2019-10-29 22:46:28',
                'updated_at' => '2019-10-29 22:46:28',
            ),
            56 => 
            array (
                'id' => 2557,
                'song_id' => 651,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:30',
                'updated_at' => '2019-10-29 22:46:30',
            ),
            57 => 
            array (
                'id' => 2558,
                'song_id' => 651,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:46:30',
                'updated_at' => '2019-10-29 22:46:30',
            ),
            58 => 
            array (
                'id' => 2559,
                'song_id' => 651,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:30',
                'updated_at' => '2019-10-29 22:46:30',
            ),
            59 => 
            array (
                'id' => 2560,
                'song_id' => 651,
                'tag_id' => 31,
                'created_at' => '2019-10-29 22:46:30',
                'updated_at' => '2019-10-29 22:46:30',
            ),
            60 => 
            array (
                'id' => 2561,
                'song_id' => 652,
                'tag_id' => 339,
                'created_at' => '2019-10-29 22:46:31',
                'updated_at' => '2019-10-29 22:46:31',
            ),
            61 => 
            array (
                'id' => 2562,
                'song_id' => 652,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:31',
                'updated_at' => '2019-10-29 22:46:31',
            ),
            62 => 
            array (
                'id' => 2563,
                'song_id' => 652,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:46:31',
                'updated_at' => '2019-10-29 22:46:31',
            ),
            63 => 
            array (
                'id' => 2564,
                'song_id' => 652,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:31',
                'updated_at' => '2019-10-29 22:46:31',
            ),
            64 => 
            array (
                'id' => 2565,
                'song_id' => 653,
                'tag_id' => 340,
                'created_at' => '2019-10-29 22:46:33',
                'updated_at' => '2019-10-29 22:46:33',
            ),
            65 => 
            array (
                'id' => 2566,
                'song_id' => 653,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:33',
                'updated_at' => '2019-10-29 22:46:33',
            ),
            66 => 
            array (
                'id' => 2567,
                'song_id' => 653,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:46:33',
                'updated_at' => '2019-10-29 22:46:33',
            ),
            67 => 
            array (
                'id' => 2568,
                'song_id' => 654,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:34',
                'updated_at' => '2019-10-29 22:46:34',
            ),
            68 => 
            array (
                'id' => 2569,
                'song_id' => 654,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:34',
                'updated_at' => '2019-10-29 22:46:34',
            ),
            69 => 
            array (
                'id' => 2570,
                'song_id' => 654,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:46:34',
                'updated_at' => '2019-10-29 22:46:34',
            ),
            70 => 
            array (
                'id' => 2571,
                'song_id' => 654,
                'tag_id' => 34,
                'created_at' => '2019-10-29 22:46:34',
                'updated_at' => '2019-10-29 22:46:34',
            ),
            71 => 
            array (
                'id' => 2572,
                'song_id' => 655,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:36',
                'updated_at' => '2019-10-29 22:46:36',
            ),
            72 => 
            array (
                'id' => 2573,
                'song_id' => 655,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:46:36',
                'updated_at' => '2019-10-29 22:46:36',
            ),
            73 => 
            array (
                'id' => 2574,
                'song_id' => 655,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:36',
                'updated_at' => '2019-10-29 22:46:36',
            ),
            74 => 
            array (
                'id' => 2575,
                'song_id' => 655,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:46:36',
                'updated_at' => '2019-10-29 22:46:36',
            ),
            75 => 
            array (
                'id' => 2576,
                'song_id' => 656,
                'tag_id' => 341,
                'created_at' => '2019-10-29 22:46:37',
                'updated_at' => '2019-10-29 22:46:37',
            ),
            76 => 
            array (
                'id' => 2577,
                'song_id' => 656,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:37',
                'updated_at' => '2019-10-29 22:46:37',
            ),
            77 => 
            array (
                'id' => 2578,
                'song_id' => 656,
                'tag_id' => 34,
                'created_at' => '2019-10-29 22:46:37',
                'updated_at' => '2019-10-29 22:46:37',
            ),
            78 => 
            array (
                'id' => 2579,
                'song_id' => 656,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:37',
                'updated_at' => '2019-10-29 22:46:37',
            ),
            79 => 
            array (
                'id' => 2580,
                'song_id' => 657,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:39',
                'updated_at' => '2019-10-29 22:46:39',
            ),
            80 => 
            array (
                'id' => 2581,
                'song_id' => 657,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:39',
                'updated_at' => '2019-10-29 22:46:39',
            ),
            81 => 
            array (
                'id' => 2582,
                'song_id' => 657,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:46:39',
                'updated_at' => '2019-10-29 22:46:39',
            ),
            82 => 
            array (
                'id' => 2583,
                'song_id' => 657,
                'tag_id' => 34,
                'created_at' => '2019-10-29 22:46:39',
                'updated_at' => '2019-10-29 22:46:39',
            ),
            83 => 
            array (
                'id' => 2584,
                'song_id' => 658,
                'tag_id' => 342,
                'created_at' => '2019-10-29 22:46:41',
                'updated_at' => '2019-10-29 22:46:41',
            ),
            84 => 
            array (
                'id' => 2585,
                'song_id' => 658,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:41',
                'updated_at' => '2019-10-29 22:46:41',
            ),
            85 => 
            array (
                'id' => 2586,
                'song_id' => 658,
                'tag_id' => 20,
                'created_at' => '2019-10-29 22:46:41',
                'updated_at' => '2019-10-29 22:46:41',
            ),
            86 => 
            array (
                'id' => 2587,
                'song_id' => 658,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:41',
                'updated_at' => '2019-10-29 22:46:41',
            ),
            87 => 
            array (
                'id' => 2588,
                'song_id' => 659,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:42',
                'updated_at' => '2019-10-29 22:46:42',
            ),
            88 => 
            array (
                'id' => 2589,
                'song_id' => 659,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:46:42',
                'updated_at' => '2019-10-29 22:46:42',
            ),
            89 => 
            array (
                'id' => 2590,
                'song_id' => 659,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:46:42',
                'updated_at' => '2019-10-29 22:46:42',
            ),
            90 => 
            array (
                'id' => 2591,
                'song_id' => 659,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:42',
                'updated_at' => '2019-10-29 22:46:42',
            ),
            91 => 
            array (
                'id' => 2592,
                'song_id' => 660,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:44',
                'updated_at' => '2019-10-29 22:46:44',
            ),
            92 => 
            array (
                'id' => 2593,
                'song_id' => 660,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:44',
                'updated_at' => '2019-10-29 22:46:44',
            ),
            93 => 
            array (
                'id' => 2594,
                'song_id' => 660,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:46:44',
                'updated_at' => '2019-10-29 22:46:44',
            ),
            94 => 
            array (
                'id' => 2595,
                'song_id' => 660,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:46:44',
                'updated_at' => '2019-10-29 22:46:44',
            ),
            95 => 
            array (
                'id' => 2596,
                'song_id' => 661,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:45',
                'updated_at' => '2019-10-29 22:46:45',
            ),
            96 => 
            array (
                'id' => 2597,
                'song_id' => 661,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:45',
                'updated_at' => '2019-10-29 22:46:45',
            ),
            97 => 
            array (
                'id' => 2598,
                'song_id' => 661,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:46:45',
                'updated_at' => '2019-10-29 22:46:45',
            ),
            98 => 
            array (
                'id' => 2599,
                'song_id' => 661,
                'tag_id' => 34,
                'created_at' => '2019-10-29 22:46:45',
                'updated_at' => '2019-10-29 22:46:45',
            ),
            99 => 
            array (
                'id' => 2600,
                'song_id' => 662,
                'tag_id' => 343,
                'created_at' => '2019-10-29 22:46:47',
                'updated_at' => '2019-10-29 22:46:47',
            ),
            100 => 
            array (
                'id' => 2601,
                'song_id' => 662,
                'tag_id' => 3,
                'created_at' => '2019-10-29 22:46:47',
                'updated_at' => '2019-10-29 22:46:47',
            ),
            101 => 
            array (
                'id' => 2602,
                'song_id' => 662,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:47',
                'updated_at' => '2019-10-29 22:46:47',
            ),
            102 => 
            array (
                'id' => 2603,
                'song_id' => 662,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:46:47',
                'updated_at' => '2019-10-29 22:46:47',
            ),
            103 => 
            array (
                'id' => 2604,
                'song_id' => 662,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:46:47',
                'updated_at' => '2019-10-29 22:46:47',
            ),
            104 => 
            array (
                'id' => 2605,
                'song_id' => 663,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:46:48',
                'updated_at' => '2019-10-29 22:46:48',
            ),
            105 => 
            array (
                'id' => 2606,
                'song_id' => 663,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:46:48',
                'updated_at' => '2019-10-29 22:46:48',
            ),
            106 => 
            array (
                'id' => 2607,
                'song_id' => 663,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:46:48',
                'updated_at' => '2019-10-29 22:46:48',
            ),
            107 => 
            array (
                'id' => 2608,
                'song_id' => 663,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:46:48',
                'updated_at' => '2019-10-29 22:46:48',
            ),
            108 => 
            array (
                'id' => 2609,
                'song_id' => 664,
                'tag_id' => 344,
                'created_at' => '2019-10-29 22:46:49',
                'updated_at' => '2019-10-29 22:46:49',
            ),
            109 => 
            array (
                'id' => 2610,
                'song_id' => 664,
                'tag_id' => 345,
                'created_at' => '2019-10-29 22:46:49',
                'updated_at' => '2019-10-29 22:46:49',
            ),
            110 => 
            array (
                'id' => 2611,
                'song_id' => 664,
                'tag_id' => 103,
                'created_at' => '2019-10-29 22:46:49',
                'updated_at' => '2019-10-29 22:46:49',
            ),
            111 => 
            array (
                'id' => 2612,
                'song_id' => 664,
                'tag_id' => 105,
                'created_at' => '2019-10-29 22:46:49',
                'updated_at' => '2019-10-29 22:46:49',
            ),
            112 => 
            array (
                'id' => 2613,
                'song_id' => 664,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:46:50',
                'updated_at' => '2019-10-29 22:46:50',
            ),
            113 => 
            array (
                'id' => 2614,
                'song_id' => 665,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:46:51',
                'updated_at' => '2019-10-29 22:46:51',
            ),
            114 => 
            array (
                'id' => 2615,
                'song_id' => 665,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:46:51',
                'updated_at' => '2019-10-29 22:46:51',
            ),
            115 => 
            array (
                'id' => 2616,
                'song_id' => 665,
                'tag_id' => 336,
                'created_at' => '2019-10-29 22:46:51',
                'updated_at' => '2019-10-29 22:46:51',
            ),
            116 => 
            array (
                'id' => 2617,
                'song_id' => 665,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:46:51',
                'updated_at' => '2019-10-29 22:46:51',
            ),
            117 => 
            array (
                'id' => 2618,
                'song_id' => 674,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:04',
                'updated_at' => '2019-10-29 22:47:04',
            ),
            118 => 
            array (
                'id' => 2619,
                'song_id' => 674,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:47:04',
                'updated_at' => '2019-10-29 22:47:04',
            ),
            119 => 
            array (
                'id' => 2620,
                'song_id' => 674,
                'tag_id' => 99,
                'created_at' => '2019-10-29 22:47:04',
                'updated_at' => '2019-10-29 22:47:04',
            ),
            120 => 
            array (
                'id' => 2621,
                'song_id' => 674,
                'tag_id' => 122,
                'created_at' => '2019-10-29 22:47:04',
                'updated_at' => '2019-10-29 22:47:04',
            ),
            121 => 
            array (
                'id' => 2622,
                'song_id' => 675,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:47:07',
                'updated_at' => '2019-10-29 22:47:07',
            ),
            122 => 
            array (
                'id' => 2623,
                'song_id' => 675,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:47:07',
                'updated_at' => '2019-10-29 22:47:07',
            ),
            123 => 
            array (
                'id' => 2624,
                'song_id' => 675,
                'tag_id' => 95,
                'created_at' => '2019-10-29 22:47:07',
                'updated_at' => '2019-10-29 22:47:07',
            ),
            124 => 
            array (
                'id' => 2625,
                'song_id' => 675,
                'tag_id' => 47,
                'created_at' => '2019-10-29 22:47:07',
                'updated_at' => '2019-10-29 22:47:07',
            ),
            125 => 
            array (
                'id' => 2626,
                'song_id' => 675,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:07',
                'updated_at' => '2019-10-29 22:47:07',
            ),
            126 => 
            array (
                'id' => 2627,
                'song_id' => 677,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:10',
                'updated_at' => '2019-10-29 22:47:10',
            ),
            127 => 
            array (
                'id' => 2628,
                'song_id' => 677,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:47:10',
                'updated_at' => '2019-10-29 22:47:10',
            ),
            128 => 
            array (
                'id' => 2629,
                'song_id' => 677,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:47:10',
                'updated_at' => '2019-10-29 22:47:10',
            ),
            129 => 
            array (
                'id' => 2630,
                'song_id' => 677,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:10',
                'updated_at' => '2019-10-29 22:47:10',
            ),
            130 => 
            array (
                'id' => 2631,
                'song_id' => 677,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:10',
                'updated_at' => '2019-10-29 22:47:10',
            ),
            131 => 
            array (
                'id' => 2632,
                'song_id' => 678,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:11',
                'updated_at' => '2019-10-29 22:47:11',
            ),
            132 => 
            array (
                'id' => 2633,
                'song_id' => 678,
                'tag_id' => 15,
                'created_at' => '2019-10-29 22:47:11',
                'updated_at' => '2019-10-29 22:47:11',
            ),
            133 => 
            array (
                'id' => 2634,
                'song_id' => 678,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:11',
                'updated_at' => '2019-10-29 22:47:11',
            ),
            134 => 
            array (
                'id' => 2635,
                'song_id' => 678,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:47:11',
                'updated_at' => '2019-10-29 22:47:11',
            ),
            135 => 
            array (
                'id' => 2636,
                'song_id' => 678,
                'tag_id' => 85,
                'created_at' => '2019-10-29 22:47:11',
                'updated_at' => '2019-10-29 22:47:11',
            ),
            136 => 
            array (
                'id' => 2637,
                'song_id' => 679,
                'tag_id' => 346,
                'created_at' => '2019-10-29 22:47:12',
                'updated_at' => '2019-10-29 22:47:12',
            ),
            137 => 
            array (
                'id' => 2638,
                'song_id' => 679,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:12',
                'updated_at' => '2019-10-29 22:47:12',
            ),
            138 => 
            array (
                'id' => 2639,
                'song_id' => 679,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:47:12',
                'updated_at' => '2019-10-29 22:47:12',
            ),
            139 => 
            array (
                'id' => 2640,
                'song_id' => 679,
                'tag_id' => 23,
                'created_at' => '2019-10-29 22:47:12',
                'updated_at' => '2019-10-29 22:47:12',
            ),
            140 => 
            array (
                'id' => 2641,
                'song_id' => 680,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:13',
                'updated_at' => '2019-10-29 22:47:13',
            ),
            141 => 
            array (
                'id' => 2642,
                'song_id' => 680,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:13',
                'updated_at' => '2019-10-29 22:47:13',
            ),
            142 => 
            array (
                'id' => 2643,
                'song_id' => 680,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:47:13',
                'updated_at' => '2019-10-29 22:47:13',
            ),
            143 => 
            array (
                'id' => 2644,
                'song_id' => 680,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:47:13',
                'updated_at' => '2019-10-29 22:47:13',
            ),
            144 => 
            array (
                'id' => 2645,
                'song_id' => 681,
                'tag_id' => 347,
                'created_at' => '2019-10-29 22:47:15',
                'updated_at' => '2019-10-29 22:47:15',
            ),
            145 => 
            array (
                'id' => 2646,
                'song_id' => 681,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:15',
                'updated_at' => '2019-10-29 22:47:15',
            ),
            146 => 
            array (
                'id' => 2647,
                'song_id' => 681,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:47:15',
                'updated_at' => '2019-10-29 22:47:15',
            ),
            147 => 
            array (
                'id' => 2648,
                'song_id' => 681,
                'tag_id' => 122,
                'created_at' => '2019-10-29 22:47:15',
                'updated_at' => '2019-10-29 22:47:15',
            ),
            148 => 
            array (
                'id' => 2649,
                'song_id' => 681,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:47:15',
                'updated_at' => '2019-10-29 22:47:15',
            ),
            149 => 
            array (
                'id' => 2650,
                'song_id' => 682,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:16',
                'updated_at' => '2019-10-29 22:47:16',
            ),
            150 => 
            array (
                'id' => 2651,
                'song_id' => 682,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:47:16',
                'updated_at' => '2019-10-29 22:47:16',
            ),
            151 => 
            array (
                'id' => 2652,
                'song_id' => 682,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:47:16',
                'updated_at' => '2019-10-29 22:47:16',
            ),
            152 => 
            array (
                'id' => 2653,
                'song_id' => 682,
                'tag_id' => 336,
                'created_at' => '2019-10-29 22:47:16',
                'updated_at' => '2019-10-29 22:47:16',
            ),
            153 => 
            array (
                'id' => 2654,
                'song_id' => 683,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:18',
                'updated_at' => '2019-10-29 22:47:18',
            ),
            154 => 
            array (
                'id' => 2655,
                'song_id' => 683,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:47:18',
                'updated_at' => '2019-10-29 22:47:18',
            ),
            155 => 
            array (
                'id' => 2656,
                'song_id' => 683,
                'tag_id' => 336,
                'created_at' => '2019-10-29 22:47:18',
                'updated_at' => '2019-10-29 22:47:18',
            ),
            156 => 
            array (
                'id' => 2657,
                'song_id' => 683,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:47:18',
                'updated_at' => '2019-10-29 22:47:18',
            ),
            157 => 
            array (
                'id' => 2658,
                'song_id' => 684,
                'tag_id' => 348,
                'created_at' => '2019-10-29 22:47:19',
                'updated_at' => '2019-10-29 22:47:19',
            ),
            158 => 
            array (
                'id' => 2659,
                'song_id' => 684,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:19',
                'updated_at' => '2019-10-29 22:47:19',
            ),
            159 => 
            array (
                'id' => 2660,
                'song_id' => 684,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:47:19',
                'updated_at' => '2019-10-29 22:47:19',
            ),
            160 => 
            array (
                'id' => 2661,
                'song_id' => 684,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:19',
                'updated_at' => '2019-10-29 22:47:19',
            ),
            161 => 
            array (
                'id' => 2662,
                'song_id' => 685,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:47:21',
                'updated_at' => '2019-10-29 22:47:21',
            ),
            162 => 
            array (
                'id' => 2663,
                'song_id' => 685,
                'tag_id' => 97,
                'created_at' => '2019-10-29 22:47:21',
                'updated_at' => '2019-10-29 22:47:21',
            ),
            163 => 
            array (
                'id' => 2664,
                'song_id' => 685,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:21',
                'updated_at' => '2019-10-29 22:47:21',
            ),
            164 => 
            array (
                'id' => 2665,
                'song_id' => 685,
                'tag_id' => 34,
                'created_at' => '2019-10-29 22:47:21',
                'updated_at' => '2019-10-29 22:47:21',
            ),
            165 => 
            array (
                'id' => 2666,
                'song_id' => 685,
                'tag_id' => 106,
                'created_at' => '2019-10-29 22:47:21',
                'updated_at' => '2019-10-29 22:47:21',
            ),
            166 => 
            array (
                'id' => 2667,
                'song_id' => 687,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:23',
                'updated_at' => '2019-10-29 22:47:23',
            ),
            167 => 
            array (
                'id' => 2668,
                'song_id' => 687,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:23',
                'updated_at' => '2019-10-29 22:47:23',
            ),
            168 => 
            array (
                'id' => 2669,
                'song_id' => 687,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:23',
                'updated_at' => '2019-10-29 22:47:23',
            ),
            169 => 
            array (
                'id' => 2670,
                'song_id' => 687,
                'tag_id' => 140,
                'created_at' => '2019-10-29 22:47:23',
                'updated_at' => '2019-10-29 22:47:23',
            ),
            170 => 
            array (
                'id' => 2671,
                'song_id' => 688,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:25',
                'updated_at' => '2019-10-29 22:47:25',
            ),
            171 => 
            array (
                'id' => 2672,
                'song_id' => 688,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:25',
                'updated_at' => '2019-10-29 22:47:25',
            ),
            172 => 
            array (
                'id' => 2673,
                'song_id' => 688,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:25',
                'updated_at' => '2019-10-29 22:47:25',
            ),
            173 => 
            array (
                'id' => 2674,
                'song_id' => 688,
                'tag_id' => 140,
                'created_at' => '2019-10-29 22:47:25',
                'updated_at' => '2019-10-29 22:47:25',
            ),
            174 => 
            array (
                'id' => 2675,
                'song_id' => 689,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:30',
                'updated_at' => '2019-10-29 22:47:30',
            ),
            175 => 
            array (
                'id' => 2676,
                'song_id' => 689,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:31',
                'updated_at' => '2019-10-29 22:47:31',
            ),
            176 => 
            array (
                'id' => 2677,
                'song_id' => 689,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:31',
                'updated_at' => '2019-10-29 22:47:31',
            ),
            177 => 
            array (
                'id' => 2678,
                'song_id' => 689,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:47:31',
                'updated_at' => '2019-10-29 22:47:31',
            ),
            178 => 
            array (
                'id' => 2679,
                'song_id' => 690,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:32',
                'updated_at' => '2019-10-29 22:47:32',
            ),
            179 => 
            array (
                'id' => 2680,
                'song_id' => 690,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:32',
                'updated_at' => '2019-10-29 22:47:32',
            ),
            180 => 
            array (
                'id' => 2681,
                'song_id' => 690,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:32',
                'updated_at' => '2019-10-29 22:47:32',
            ),
            181 => 
            array (
                'id' => 2682,
                'song_id' => 690,
                'tag_id' => 140,
                'created_at' => '2019-10-29 22:47:32',
                'updated_at' => '2019-10-29 22:47:32',
            ),
            182 => 
            array (
                'id' => 2683,
                'song_id' => 691,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:33',
                'updated_at' => '2019-10-29 22:47:33',
            ),
            183 => 
            array (
                'id' => 2684,
                'song_id' => 691,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:33',
                'updated_at' => '2019-10-29 22:47:33',
            ),
            184 => 
            array (
                'id' => 2685,
                'song_id' => 691,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:33',
                'updated_at' => '2019-10-29 22:47:33',
            ),
            185 => 
            array (
                'id' => 2686,
                'song_id' => 691,
                'tag_id' => 140,
                'created_at' => '2019-10-29 22:47:33',
                'updated_at' => '2019-10-29 22:47:33',
            ),
            186 => 
            array (
                'id' => 2687,
                'song_id' => 692,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:34',
                'updated_at' => '2019-10-29 22:47:34',
            ),
            187 => 
            array (
                'id' => 2688,
                'song_id' => 692,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:47:34',
                'updated_at' => '2019-10-29 22:47:34',
            ),
            188 => 
            array (
                'id' => 2689,
                'song_id' => 692,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:34',
                'updated_at' => '2019-10-29 22:47:34',
            ),
            189 => 
            array (
                'id' => 2690,
                'song_id' => 692,
                'tag_id' => 140,
                'created_at' => '2019-10-29 22:47:34',
                'updated_at' => '2019-10-29 22:47:34',
            ),
            190 => 
            array (
                'id' => 2691,
                'song_id' => 693,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:47:36',
                'updated_at' => '2019-10-29 22:47:36',
            ),
            191 => 
            array (
                'id' => 2692,
                'song_id' => 693,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:47:36',
                'updated_at' => '2019-10-29 22:47:36',
            ),
            192 => 
            array (
                'id' => 2693,
                'song_id' => 693,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:36',
                'updated_at' => '2019-10-29 22:47:36',
            ),
            193 => 
            array (
                'id' => 2694,
                'song_id' => 693,
                'tag_id' => 10,
                'created_at' => '2019-10-29 22:47:36',
                'updated_at' => '2019-10-29 22:47:36',
            ),
            194 => 
            array (
                'id' => 2695,
                'song_id' => 694,
                'tag_id' => 349,
                'created_at' => '2019-10-29 22:47:37',
                'updated_at' => '2019-10-29 22:47:37',
            ),
            195 => 
            array (
                'id' => 2696,
                'song_id' => 694,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:47:37',
                'updated_at' => '2019-10-29 22:47:37',
            ),
            196 => 
            array (
                'id' => 2697,
                'song_id' => 694,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:37',
                'updated_at' => '2019-10-29 22:47:37',
            ),
            197 => 
            array (
                'id' => 2698,
                'song_id' => 694,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:37',
                'updated_at' => '2019-10-29 22:47:37',
            ),
            198 => 
            array (
                'id' => 2699,
                'song_id' => 694,
                'tag_id' => 44,
                'created_at' => '2019-10-29 22:47:37',
                'updated_at' => '2019-10-29 22:47:37',
            ),
            199 => 
            array (
                'id' => 2700,
                'song_id' => 695,
                'tag_id' => 350,
                'created_at' => '2019-10-29 22:47:53',
                'updated_at' => '2019-10-29 22:47:53',
            ),
            200 => 
            array (
                'id' => 2701,
                'song_id' => 695,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:47:53',
                'updated_at' => '2019-10-29 22:47:53',
            ),
            201 => 
            array (
                'id' => 2702,
                'song_id' => 695,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:47:53',
                'updated_at' => '2019-10-29 22:47:53',
            ),
            202 => 
            array (
                'id' => 2703,
                'song_id' => 695,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:47:53',
                'updated_at' => '2019-10-29 22:47:53',
            ),
            203 => 
            array (
                'id' => 2704,
                'song_id' => 695,
                'tag_id' => 83,
                'created_at' => '2019-10-29 22:47:53',
                'updated_at' => '2019-10-29 22:47:53',
            ),
            204 => 
            array (
                'id' => 2705,
                'song_id' => 696,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:47:55',
                'updated_at' => '2019-10-29 22:47:55',
            ),
            205 => 
            array (
                'id' => 2706,
                'song_id' => 696,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:47:55',
                'updated_at' => '2019-10-29 22:47:55',
            ),
            206 => 
            array (
                'id' => 2707,
                'song_id' => 696,
                'tag_id' => 269,
                'created_at' => '2019-10-29 22:47:55',
                'updated_at' => '2019-10-29 22:47:55',
            ),
            207 => 
            array (
                'id' => 2708,
                'song_id' => 696,
                'tag_id' => 10,
                'created_at' => '2019-10-29 22:47:55',
                'updated_at' => '2019-10-29 22:47:55',
            ),
            208 => 
            array (
                'id' => 2709,
                'song_id' => 697,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:47:57',
                'updated_at' => '2019-10-29 22:47:57',
            ),
            209 => 
            array (
                'id' => 2710,
                'song_id' => 697,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:47:57',
                'updated_at' => '2019-10-29 22:47:57',
            ),
            210 => 
            array (
                'id' => 2711,
                'song_id' => 697,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:47:57',
                'updated_at' => '2019-10-29 22:47:57',
            ),
            211 => 
            array (
                'id' => 2712,
                'song_id' => 697,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:47:57',
                'updated_at' => '2019-10-29 22:47:57',
            ),
            212 => 
            array (
                'id' => 2713,
                'song_id' => 697,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:47:57',
                'updated_at' => '2019-10-29 22:47:57',
            ),
            213 => 
            array (
                'id' => 2714,
                'song_id' => 698,
                'tag_id' => 351,
                'created_at' => '2019-10-29 22:47:59',
                'updated_at' => '2019-10-29 22:47:59',
            ),
            214 => 
            array (
                'id' => 2715,
                'song_id' => 698,
                'tag_id' => 69,
                'created_at' => '2019-10-29 22:47:59',
                'updated_at' => '2019-10-29 22:47:59',
            ),
            215 => 
            array (
                'id' => 2716,
                'song_id' => 698,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:47:59',
                'updated_at' => '2019-10-29 22:47:59',
            ),
            216 => 
            array (
                'id' => 2717,
                'song_id' => 698,
                'tag_id' => 3,
                'created_at' => '2019-10-29 22:47:59',
                'updated_at' => '2019-10-29 22:47:59',
            ),
            217 => 
            array (
                'id' => 2718,
                'song_id' => 698,
                'tag_id' => 20,
                'created_at' => '2019-10-29 22:47:59',
                'updated_at' => '2019-10-29 22:47:59',
            ),
            218 => 
            array (
                'id' => 2719,
                'song_id' => 700,
                'tag_id' => 83,
                'created_at' => '2019-10-29 22:48:02',
                'updated_at' => '2019-10-29 22:48:02',
            ),
            219 => 
            array (
                'id' => 2720,
                'song_id' => 700,
                'tag_id' => 125,
                'created_at' => '2019-10-29 22:48:02',
                'updated_at' => '2019-10-29 22:48:02',
            ),
            220 => 
            array (
                'id' => 2721,
                'song_id' => 700,
                'tag_id' => 67,
                'created_at' => '2019-10-29 22:48:02',
                'updated_at' => '2019-10-29 22:48:02',
            ),
            221 => 
            array (
                'id' => 2722,
                'song_id' => 700,
                'tag_id' => 37,
                'created_at' => '2019-10-29 22:48:02',
                'updated_at' => '2019-10-29 22:48:02',
            ),
            222 => 
            array (
                'id' => 2723,
                'song_id' => 700,
                'tag_id' => 53,
                'created_at' => '2019-10-29 22:48:02',
                'updated_at' => '2019-10-29 22:48:02',
            ),
            223 => 
            array (
                'id' => 2724,
                'song_id' => 701,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:48:04',
                'updated_at' => '2019-10-29 22:48:04',
            ),
            224 => 
            array (
                'id' => 2725,
                'song_id' => 701,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:04',
                'updated_at' => '2019-10-29 22:48:04',
            ),
            225 => 
            array (
                'id' => 2726,
                'song_id' => 701,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:04',
                'updated_at' => '2019-10-29 22:48:04',
            ),
            226 => 
            array (
                'id' => 2727,
                'song_id' => 701,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:04',
                'updated_at' => '2019-10-29 22:48:04',
            ),
            227 => 
            array (
                'id' => 2728,
                'song_id' => 701,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:04',
                'updated_at' => '2019-10-29 22:48:04',
            ),
            228 => 
            array (
                'id' => 2729,
                'song_id' => 702,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:48:05',
                'updated_at' => '2019-10-29 22:48:05',
            ),
            229 => 
            array (
                'id' => 2730,
                'song_id' => 702,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:05',
                'updated_at' => '2019-10-29 22:48:05',
            ),
            230 => 
            array (
                'id' => 2731,
                'song_id' => 702,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:05',
                'updated_at' => '2019-10-29 22:48:05',
            ),
            231 => 
            array (
                'id' => 2732,
                'song_id' => 702,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:05',
                'updated_at' => '2019-10-29 22:48:05',
            ),
            232 => 
            array (
                'id' => 2733,
                'song_id' => 703,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:48:07',
                'updated_at' => '2019-10-29 22:48:07',
            ),
            233 => 
            array (
                'id' => 2734,
                'song_id' => 703,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:07',
                'updated_at' => '2019-10-29 22:48:07',
            ),
            234 => 
            array (
                'id' => 2735,
                'song_id' => 703,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:07',
                'updated_at' => '2019-10-29 22:48:07',
            ),
            235 => 
            array (
                'id' => 2736,
                'song_id' => 703,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:07',
                'updated_at' => '2019-10-29 22:48:07',
            ),
            236 => 
            array (
                'id' => 2737,
                'song_id' => 703,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:48:07',
                'updated_at' => '2019-10-29 22:48:07',
            ),
            237 => 
            array (
                'id' => 2738,
                'song_id' => 704,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:48:08',
                'updated_at' => '2019-10-29 22:48:08',
            ),
            238 => 
            array (
                'id' => 2739,
                'song_id' => 704,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:08',
                'updated_at' => '2019-10-29 22:48:08',
            ),
            239 => 
            array (
                'id' => 2740,
                'song_id' => 704,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:08',
                'updated_at' => '2019-10-29 22:48:08',
            ),
            240 => 
            array (
                'id' => 2741,
                'song_id' => 704,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:08',
                'updated_at' => '2019-10-29 22:48:08',
            ),
            241 => 
            array (
                'id' => 2742,
                'song_id' => 704,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:48:08',
                'updated_at' => '2019-10-29 22:48:08',
            ),
            242 => 
            array (
                'id' => 2743,
                'song_id' => 705,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:48:10',
                'updated_at' => '2019-10-29 22:48:10',
            ),
            243 => 
            array (
                'id' => 2744,
                'song_id' => 705,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:10',
                'updated_at' => '2019-10-29 22:48:10',
            ),
            244 => 
            array (
                'id' => 2745,
                'song_id' => 705,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:10',
                'updated_at' => '2019-10-29 22:48:10',
            ),
            245 => 
            array (
                'id' => 2746,
                'song_id' => 705,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:10',
                'updated_at' => '2019-10-29 22:48:10',
            ),
            246 => 
            array (
                'id' => 2747,
                'song_id' => 706,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:12',
                'updated_at' => '2019-10-29 22:48:12',
            ),
            247 => 
            array (
                'id' => 2748,
                'song_id' => 706,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:48:12',
                'updated_at' => '2019-10-29 22:48:12',
            ),
            248 => 
            array (
                'id' => 2749,
                'song_id' => 706,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:12',
                'updated_at' => '2019-10-29 22:48:12',
            ),
            249 => 
            array (
                'id' => 2750,
                'song_id' => 706,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:12',
                'updated_at' => '2019-10-29 22:48:12',
            ),
            250 => 
            array (
                'id' => 2751,
                'song_id' => 706,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:48:12',
                'updated_at' => '2019-10-29 22:48:12',
            ),
            251 => 
            array (
                'id' => 2752,
                'song_id' => 707,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:13',
                'updated_at' => '2019-10-29 22:48:13',
            ),
            252 => 
            array (
                'id' => 2753,
                'song_id' => 707,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:13',
                'updated_at' => '2019-10-29 22:48:13',
            ),
            253 => 
            array (
                'id' => 2754,
                'song_id' => 707,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:13',
                'updated_at' => '2019-10-29 22:48:13',
            ),
            254 => 
            array (
                'id' => 2755,
                'song_id' => 707,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:13',
                'updated_at' => '2019-10-29 22:48:13',
            ),
            255 => 
            array (
                'id' => 2756,
                'song_id' => 707,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:48:13',
                'updated_at' => '2019-10-29 22:48:13',
            ),
            256 => 
            array (
                'id' => 2757,
                'song_id' => 708,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:15',
                'updated_at' => '2019-10-29 22:48:15',
            ),
            257 => 
            array (
                'id' => 2758,
                'song_id' => 708,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:15',
                'updated_at' => '2019-10-29 22:48:15',
            ),
            258 => 
            array (
                'id' => 2759,
                'song_id' => 708,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:15',
                'updated_at' => '2019-10-29 22:48:15',
            ),
            259 => 
            array (
                'id' => 2760,
                'song_id' => 708,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:15',
                'updated_at' => '2019-10-29 22:48:15',
            ),
            260 => 
            array (
                'id' => 2761,
                'song_id' => 708,
                'tag_id' => 54,
                'created_at' => '2019-10-29 22:48:15',
                'updated_at' => '2019-10-29 22:48:15',
            ),
            261 => 
            array (
                'id' => 2762,
                'song_id' => 709,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:16',
                'updated_at' => '2019-10-29 22:48:16',
            ),
            262 => 
            array (
                'id' => 2763,
                'song_id' => 709,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:16',
                'updated_at' => '2019-10-29 22:48:16',
            ),
            263 => 
            array (
                'id' => 2764,
                'song_id' => 709,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:16',
                'updated_at' => '2019-10-29 22:48:16',
            ),
            264 => 
            array (
                'id' => 2765,
                'song_id' => 709,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:16',
                'updated_at' => '2019-10-29 22:48:16',
            ),
            265 => 
            array (
                'id' => 2766,
                'song_id' => 710,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:17',
                'updated_at' => '2019-10-29 22:48:17',
            ),
            266 => 
            array (
                'id' => 2767,
                'song_id' => 710,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:17',
                'updated_at' => '2019-10-29 22:48:17',
            ),
            267 => 
            array (
                'id' => 2768,
                'song_id' => 710,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:48:17',
                'updated_at' => '2019-10-29 22:48:17',
            ),
            268 => 
            array (
                'id' => 2769,
                'song_id' => 710,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:17',
                'updated_at' => '2019-10-29 22:48:17',
            ),
            269 => 
            array (
                'id' => 2770,
                'song_id' => 710,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:48:17',
                'updated_at' => '2019-10-29 22:48:17',
            ),
            270 => 
            array (
                'id' => 2771,
                'song_id' => 711,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:19',
                'updated_at' => '2019-10-29 22:48:19',
            ),
            271 => 
            array (
                'id' => 2772,
                'song_id' => 711,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:19',
                'updated_at' => '2019-10-29 22:48:19',
            ),
            272 => 
            array (
                'id' => 2773,
                'song_id' => 711,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:48:19',
                'updated_at' => '2019-10-29 22:48:19',
            ),
            273 => 
            array (
                'id' => 2774,
                'song_id' => 711,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:19',
                'updated_at' => '2019-10-29 22:48:19',
            ),
            274 => 
            array (
                'id' => 2775,
                'song_id' => 711,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:48:19',
                'updated_at' => '2019-10-29 22:48:19',
            ),
            275 => 
            array (
                'id' => 2776,
                'song_id' => 712,
                'tag_id' => 352,
                'created_at' => '2019-10-29 22:48:20',
                'updated_at' => '2019-10-29 22:48:20',
            ),
            276 => 
            array (
                'id' => 2777,
                'song_id' => 712,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:20',
                'updated_at' => '2019-10-29 22:48:20',
            ),
            277 => 
            array (
                'id' => 2778,
                'song_id' => 712,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:20',
                'updated_at' => '2019-10-29 22:48:20',
            ),
            278 => 
            array (
                'id' => 2779,
                'song_id' => 712,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:48:20',
                'updated_at' => '2019-10-29 22:48:20',
            ),
            279 => 
            array (
                'id' => 2780,
                'song_id' => 712,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:20',
                'updated_at' => '2019-10-29 22:48:20',
            ),
            280 => 
            array (
                'id' => 2781,
                'song_id' => 713,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:22',
                'updated_at' => '2019-10-29 22:48:22',
            ),
            281 => 
            array (
                'id' => 2782,
                'song_id' => 713,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:48:22',
                'updated_at' => '2019-10-29 22:48:22',
            ),
            282 => 
            array (
                'id' => 2783,
                'song_id' => 713,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:48:22',
                'updated_at' => '2019-10-29 22:48:22',
            ),
            283 => 
            array (
                'id' => 2784,
                'song_id' => 713,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:48:22',
                'updated_at' => '2019-10-29 22:48:22',
            ),
            284 => 
            array (
                'id' => 2785,
                'song_id' => 713,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:48:22',
                'updated_at' => '2019-10-29 22:48:22',
            ),
            285 => 
            array (
                'id' => 2786,
                'song_id' => 714,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:48:23',
                'updated_at' => '2019-10-29 22:48:23',
            ),
            286 => 
            array (
                'id' => 2787,
                'song_id' => 714,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:48:23',
                'updated_at' => '2019-10-29 22:48:23',
            ),
            287 => 
            array (
                'id' => 2788,
                'song_id' => 714,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:23',
                'updated_at' => '2019-10-29 22:48:23',
            ),
            288 => 
            array (
                'id' => 2789,
                'song_id' => 714,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:23',
                'updated_at' => '2019-10-29 22:48:23',
            ),
            289 => 
            array (
                'id' => 2790,
                'song_id' => 714,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:48:23',
                'updated_at' => '2019-10-29 22:48:23',
            ),
            290 => 
            array (
                'id' => 2791,
                'song_id' => 715,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:48:24',
                'updated_at' => '2019-10-29 22:48:24',
            ),
            291 => 
            array (
                'id' => 2792,
                'song_id' => 715,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:48:24',
                'updated_at' => '2019-10-29 22:48:24',
            ),
            292 => 
            array (
                'id' => 2793,
                'song_id' => 715,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:24',
                'updated_at' => '2019-10-29 22:48:24',
            ),
            293 => 
            array (
                'id' => 2794,
                'song_id' => 715,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:24',
                'updated_at' => '2019-10-29 22:48:24',
            ),
            294 => 
            array (
                'id' => 2795,
                'song_id' => 715,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:48:24',
                'updated_at' => '2019-10-29 22:48:24',
            ),
            295 => 
            array (
                'id' => 2796,
                'song_id' => 716,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:48:26',
                'updated_at' => '2019-10-29 22:48:26',
            ),
            296 => 
            array (
                'id' => 2797,
                'song_id' => 716,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:48:26',
                'updated_at' => '2019-10-29 22:48:26',
            ),
            297 => 
            array (
                'id' => 2798,
                'song_id' => 716,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:26',
                'updated_at' => '2019-10-29 22:48:26',
            ),
            298 => 
            array (
                'id' => 2799,
                'song_id' => 716,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:26',
                'updated_at' => '2019-10-29 22:48:26',
            ),
            299 => 
            array (
                'id' => 2800,
                'song_id' => 716,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:26',
                'updated_at' => '2019-10-29 22:48:26',
            ),
            300 => 
            array (
                'id' => 2801,
                'song_id' => 717,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:48:27',
                'updated_at' => '2019-10-29 22:48:27',
            ),
            301 => 
            array (
                'id' => 2802,
                'song_id' => 717,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:48:27',
                'updated_at' => '2019-10-29 22:48:27',
            ),
            302 => 
            array (
                'id' => 2803,
                'song_id' => 717,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:48:27',
                'updated_at' => '2019-10-29 22:48:27',
            ),
            303 => 
            array (
                'id' => 2804,
                'song_id' => 717,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:27',
                'updated_at' => '2019-10-29 22:48:27',
            ),
            304 => 
            array (
                'id' => 2805,
                'song_id' => 717,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:48:27',
                'updated_at' => '2019-10-29 22:48:27',
            ),
            305 => 
            array (
                'id' => 2806,
                'song_id' => 718,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:48:28',
                'updated_at' => '2019-10-29 22:48:28',
            ),
            306 => 
            array (
                'id' => 2807,
                'song_id' => 718,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:48:28',
                'updated_at' => '2019-10-29 22:48:28',
            ),
            307 => 
            array (
                'id' => 2808,
                'song_id' => 718,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:28',
                'updated_at' => '2019-10-29 22:48:28',
            ),
            308 => 
            array (
                'id' => 2809,
                'song_id' => 718,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:48:28',
                'updated_at' => '2019-10-29 22:48:28',
            ),
            309 => 
            array (
                'id' => 2810,
                'song_id' => 719,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:30',
                'updated_at' => '2019-10-29 22:48:30',
            ),
            310 => 
            array (
                'id' => 2811,
                'song_id' => 719,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:30',
                'updated_at' => '2019-10-29 22:48:30',
            ),
            311 => 
            array (
                'id' => 2812,
                'song_id' => 719,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:48:30',
                'updated_at' => '2019-10-29 22:48:30',
            ),
            312 => 
            array (
                'id' => 2813,
                'song_id' => 719,
                'tag_id' => 52,
                'created_at' => '2019-10-29 22:48:30',
                'updated_at' => '2019-10-29 22:48:30',
            ),
            313 => 
            array (
                'id' => 2814,
                'song_id' => 720,
                'tag_id' => 353,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-29 22:48:31',
            ),
            314 => 
            array (
                'id' => 2815,
                'song_id' => 720,
                'tag_id' => 354,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-29 22:48:31',
            ),
            315 => 
            array (
                'id' => 2816,
                'song_id' => 720,
                'tag_id' => 108,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-29 22:48:31',
            ),
            316 => 
            array (
                'id' => 2817,
                'song_id' => 720,
                'tag_id' => 103,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-29 22:48:31',
            ),
            317 => 
            array (
                'id' => 2818,
                'song_id' => 720,
                'tag_id' => 85,
                'created_at' => '2019-10-29 22:48:31',
                'updated_at' => '2019-10-29 22:48:31',
            ),
            318 => 
            array (
                'id' => 2819,
                'song_id' => 721,
                'tag_id' => 355,
                'created_at' => '2019-10-29 22:48:33',
                'updated_at' => '2019-10-29 22:48:33',
            ),
            319 => 
            array (
                'id' => 2820,
                'song_id' => 721,
                'tag_id' => 108,
                'created_at' => '2019-10-29 22:48:33',
                'updated_at' => '2019-10-29 22:48:33',
            ),
            320 => 
            array (
                'id' => 2821,
                'song_id' => 721,
                'tag_id' => 117,
                'created_at' => '2019-10-29 22:48:33',
                'updated_at' => '2019-10-29 22:48:33',
            ),
            321 => 
            array (
                'id' => 2822,
                'song_id' => 721,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:48:33',
                'updated_at' => '2019-10-29 22:48:33',
            ),
            322 => 
            array (
                'id' => 2823,
                'song_id' => 721,
                'tag_id' => 128,
                'created_at' => '2019-10-29 22:48:33',
                'updated_at' => '2019-10-29 22:48:33',
            ),
            323 => 
            array (
                'id' => 2824,
                'song_id' => 722,
                'tag_id' => 356,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-29 22:48:34',
            ),
            324 => 
            array (
                'id' => 2825,
                'song_id' => 722,
                'tag_id' => 357,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-29 22:48:34',
            ),
            325 => 
            array (
                'id' => 2826,
                'song_id' => 722,
                'tag_id' => 108,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-29 22:48:34',
            ),
            326 => 
            array (
                'id' => 2827,
                'song_id' => 722,
                'tag_id' => 117,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-29 22:48:34',
            ),
            327 => 
            array (
                'id' => 2828,
                'song_id' => 722,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:48:34',
                'updated_at' => '2019-10-29 22:48:34',
            ),
            328 => 
            array (
                'id' => 2829,
                'song_id' => 723,
                'tag_id' => 358,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-29 22:48:36',
            ),
            329 => 
            array (
                'id' => 2830,
                'song_id' => 723,
                'tag_id' => 359,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-29 22:48:36',
            ),
            330 => 
            array (
                'id' => 2831,
                'song_id' => 723,
                'tag_id' => 360,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-29 22:48:36',
            ),
            331 => 
            array (
                'id' => 2832,
                'song_id' => 723,
                'tag_id' => 108,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-29 22:48:36',
            ),
            332 => 
            array (
                'id' => 2833,
                'song_id' => 723,
                'tag_id' => 117,
                'created_at' => '2019-10-29 22:48:36',
                'updated_at' => '2019-10-29 22:48:36',
            ),
            333 => 
            array (
                'id' => 2834,
                'song_id' => 724,
                'tag_id' => 361,
                'created_at' => '2019-10-29 22:48:37',
                'updated_at' => '2019-10-29 22:48:37',
            ),
            334 => 
            array (
                'id' => 2835,
                'song_id' => 724,
                'tag_id' => 362,
                'created_at' => '2019-10-29 22:48:37',
                'updated_at' => '2019-10-29 22:48:37',
            ),
            335 => 
            array (
                'id' => 2836,
                'song_id' => 724,
                'tag_id' => 353,
                'created_at' => '2019-10-29 22:48:37',
                'updated_at' => '2019-10-29 22:48:37',
            ),
            336 => 
            array (
                'id' => 2837,
                'song_id' => 724,
                'tag_id' => 113,
                'created_at' => '2019-10-29 22:48:37',
                'updated_at' => '2019-10-29 22:48:37',
            ),
            337 => 
            array (
                'id' => 2838,
                'song_id' => 725,
                'tag_id' => 363,
                'created_at' => '2019-10-29 22:48:38',
                'updated_at' => '2019-10-29 22:48:38',
            ),
            338 => 
            array (
                'id' => 2839,
                'song_id' => 725,
                'tag_id' => 364,
                'created_at' => '2019-10-29 22:48:38',
                'updated_at' => '2019-10-29 22:48:38',
            ),
            339 => 
            array (
                'id' => 2840,
                'song_id' => 725,
                'tag_id' => 365,
                'created_at' => '2019-10-29 22:48:38',
                'updated_at' => '2019-10-29 22:48:38',
            ),
            340 => 
            array (
                'id' => 2841,
                'song_id' => 725,
                'tag_id' => 366,
                'created_at' => '2019-10-29 22:48:39',
                'updated_at' => '2019-10-29 22:48:39',
            ),
            341 => 
            array (
                'id' => 2842,
                'song_id' => 725,
                'tag_id' => 108,
                'created_at' => '2019-10-29 22:48:39',
                'updated_at' => '2019-10-29 22:48:39',
            ),
            342 => 
            array (
                'id' => 2843,
                'song_id' => 726,
                'tag_id' => 367,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-29 22:48:40',
            ),
            343 => 
            array (
                'id' => 2844,
                'song_id' => 726,
                'tag_id' => 368,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-29 22:48:40',
            ),
            344 => 
            array (
                'id' => 2845,
                'song_id' => 726,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-29 22:48:40',
            ),
            345 => 
            array (
                'id' => 2846,
                'song_id' => 726,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-29 22:48:40',
            ),
            346 => 
            array (
                'id' => 2847,
                'song_id' => 726,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:48:40',
                'updated_at' => '2019-10-29 22:48:40',
            ),
            347 => 
            array (
                'id' => 2848,
                'song_id' => 727,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:48:41',
                'updated_at' => '2019-10-29 22:48:41',
            ),
            348 => 
            array (
                'id' => 2849,
                'song_id' => 727,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:41',
                'updated_at' => '2019-10-29 22:48:41',
            ),
            349 => 
            array (
                'id' => 2850,
                'song_id' => 727,
                'tag_id' => 1,
                'created_at' => '2019-10-29 22:48:41',
                'updated_at' => '2019-10-29 22:48:41',
            ),
            350 => 
            array (
                'id' => 2851,
                'song_id' => 727,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:41',
                'updated_at' => '2019-10-29 22:48:41',
            ),
            351 => 
            array (
                'id' => 2852,
                'song_id' => 728,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:48:43',
                'updated_at' => '2019-10-29 22:48:43',
            ),
            352 => 
            array (
                'id' => 2853,
                'song_id' => 728,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:48:43',
                'updated_at' => '2019-10-29 22:48:43',
            ),
            353 => 
            array (
                'id' => 2854,
                'song_id' => 728,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:48:43',
                'updated_at' => '2019-10-29 22:48:43',
            ),
            354 => 
            array (
                'id' => 2855,
                'song_id' => 728,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:48:43',
                'updated_at' => '2019-10-29 22:48:43',
            ),
            355 => 
            array (
                'id' => 2856,
                'song_id' => 729,
                'tag_id' => 369,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-29 22:48:44',
            ),
            356 => 
            array (
                'id' => 2857,
                'song_id' => 729,
                'tag_id' => 370,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-29 22:48:44',
            ),
            357 => 
            array (
                'id' => 2858,
                'song_id' => 729,
                'tag_id' => 371,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-29 22:48:44',
            ),
            358 => 
            array (
                'id' => 2859,
                'song_id' => 729,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-29 22:48:44',
            ),
            359 => 
            array (
                'id' => 2860,
                'song_id' => 729,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:48:44',
                'updated_at' => '2019-10-29 22:48:44',
            ),
            360 => 
            array (
                'id' => 2861,
                'song_id' => 730,
                'tag_id' => 372,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-29 22:49:33',
            ),
            361 => 
            array (
                'id' => 2862,
                'song_id' => 730,
                'tag_id' => 373,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-29 22:49:33',
            ),
            362 => 
            array (
                'id' => 2863,
                'song_id' => 730,
                'tag_id' => 374,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-29 22:49:33',
            ),
            363 => 
            array (
                'id' => 2864,
                'song_id' => 730,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-29 22:49:33',
            ),
            364 => 
            array (
                'id' => 2865,
                'song_id' => 730,
                'tag_id' => 336,
                'created_at' => '2019-10-29 22:49:33',
                'updated_at' => '2019-10-29 22:49:33',
            ),
            365 => 
            array (
                'id' => 2866,
                'song_id' => 731,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:49:34',
                'updated_at' => '2019-10-29 22:49:34',
            ),
            366 => 
            array (
                'id' => 2867,
                'song_id' => 731,
                'tag_id' => 374,
                'created_at' => '2019-10-29 22:49:34',
                'updated_at' => '2019-10-29 22:49:34',
            ),
            367 => 
            array (
                'id' => 2868,
                'song_id' => 731,
                'tag_id' => 370,
                'created_at' => '2019-10-29 22:49:34',
                'updated_at' => '2019-10-29 22:49:34',
            ),
            368 => 
            array (
                'id' => 2869,
                'song_id' => 731,
                'tag_id' => 23,
                'created_at' => '2019-10-29 22:49:34',
                'updated_at' => '2019-10-29 22:49:34',
            ),
            369 => 
            array (
                'id' => 2870,
                'song_id' => 732,
                'tag_id' => 375,
                'created_at' => '2019-10-29 22:49:35',
                'updated_at' => '2019-10-29 22:49:35',
            ),
            370 => 
            array (
                'id' => 2871,
                'song_id' => 732,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:49:35',
                'updated_at' => '2019-10-29 22:49:35',
            ),
            371 => 
            array (
                'id' => 2872,
                'song_id' => 732,
                'tag_id' => 23,
                'created_at' => '2019-10-29 22:49:35',
                'updated_at' => '2019-10-29 22:49:35',
            ),
            372 => 
            array (
                'id' => 2873,
                'song_id' => 732,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:49:35',
                'updated_at' => '2019-10-29 22:49:35',
            ),
            373 => 
            array (
                'id' => 2874,
                'song_id' => 733,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:49:36',
                'updated_at' => '2019-10-29 22:49:36',
            ),
            374 => 
            array (
                'id' => 2875,
                'song_id' => 733,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:37',
                'updated_at' => '2019-10-29 22:49:37',
            ),
            375 => 
            array (
                'id' => 2876,
                'song_id' => 733,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:49:37',
                'updated_at' => '2019-10-29 22:49:37',
            ),
            376 => 
            array (
                'id' => 2877,
                'song_id' => 733,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:49:37',
                'updated_at' => '2019-10-29 22:49:37',
            ),
            377 => 
            array (
                'id' => 2878,
                'song_id' => 734,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:49:38',
                'updated_at' => '2019-10-29 22:49:38',
            ),
            378 => 
            array (
                'id' => 2879,
                'song_id' => 734,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:38',
                'updated_at' => '2019-10-29 22:49:38',
            ),
            379 => 
            array (
                'id' => 2880,
                'song_id' => 734,
                'tag_id' => 19,
                'created_at' => '2019-10-29 22:49:38',
                'updated_at' => '2019-10-29 22:49:38',
            ),
            380 => 
            array (
                'id' => 2881,
                'song_id' => 734,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:49:38',
                'updated_at' => '2019-10-29 22:49:38',
            ),
            381 => 
            array (
                'id' => 2882,
                'song_id' => 735,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:49:40',
                'updated_at' => '2019-10-29 22:49:40',
            ),
            382 => 
            array (
                'id' => 2883,
                'song_id' => 735,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:49:40',
                'updated_at' => '2019-10-29 22:49:40',
            ),
            383 => 
            array (
                'id' => 2884,
                'song_id' => 735,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:40',
                'updated_at' => '2019-10-29 22:49:40',
            ),
            384 => 
            array (
                'id' => 2885,
                'song_id' => 735,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:49:40',
                'updated_at' => '2019-10-29 22:49:40',
            ),
            385 => 
            array (
                'id' => 2886,
                'song_id' => 736,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:49:41',
                'updated_at' => '2019-10-29 22:49:41',
            ),
            386 => 
            array (
                'id' => 2887,
                'song_id' => 736,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:41',
                'updated_at' => '2019-10-29 22:49:41',
            ),
            387 => 
            array (
                'id' => 2888,
                'song_id' => 736,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:49:41',
                'updated_at' => '2019-10-29 22:49:41',
            ),
            388 => 
            array (
                'id' => 2889,
                'song_id' => 736,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:49:41',
                'updated_at' => '2019-10-29 22:49:41',
            ),
            389 => 
            array (
                'id' => 2890,
                'song_id' => 737,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:49:42',
                'updated_at' => '2019-10-29 22:49:42',
            ),
            390 => 
            array (
                'id' => 2891,
                'song_id' => 737,
                'tag_id' => 69,
                'created_at' => '2019-10-29 22:49:42',
                'updated_at' => '2019-10-29 22:49:42',
            ),
            391 => 
            array (
                'id' => 2892,
                'song_id' => 737,
                'tag_id' => 45,
                'created_at' => '2019-10-29 22:49:42',
                'updated_at' => '2019-10-29 22:49:42',
            ),
            392 => 
            array (
                'id' => 2893,
                'song_id' => 737,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:49:42',
                'updated_at' => '2019-10-29 22:49:42',
            ),
            393 => 
            array (
                'id' => 2894,
                'song_id' => 737,
                'tag_id' => 105,
                'created_at' => '2019-10-29 22:49:42',
                'updated_at' => '2019-10-29 22:49:42',
            ),
            394 => 
            array (
                'id' => 2895,
                'song_id' => 738,
                'tag_id' => 103,
                'created_at' => '2019-10-29 22:49:44',
                'updated_at' => '2019-10-29 22:49:44',
            ),
            395 => 
            array (
                'id' => 2896,
                'song_id' => 738,
                'tag_id' => 78,
                'created_at' => '2019-10-29 22:49:44',
                'updated_at' => '2019-10-29 22:49:44',
            ),
            396 => 
            array (
                'id' => 2897,
                'song_id' => 738,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:49:44',
                'updated_at' => '2019-10-29 22:49:44',
            ),
            397 => 
            array (
                'id' => 2898,
                'song_id' => 739,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:49:45',
                'updated_at' => '2019-10-29 22:49:45',
            ),
            398 => 
            array (
                'id' => 2899,
                'song_id' => 739,
                'tag_id' => 189,
                'created_at' => '2019-10-29 22:49:45',
                'updated_at' => '2019-10-29 22:49:45',
            ),
            399 => 
            array (
                'id' => 2900,
                'song_id' => 739,
                'tag_id' => 53,
                'created_at' => '2019-10-29 22:49:45',
                'updated_at' => '2019-10-29 22:49:45',
            ),
            400 => 
            array (
                'id' => 2901,
                'song_id' => 739,
                'tag_id' => 190,
                'created_at' => '2019-10-29 22:49:45',
                'updated_at' => '2019-10-29 22:49:45',
            ),
            401 => 
            array (
                'id' => 2902,
                'song_id' => 739,
                'tag_id' => 139,
                'created_at' => '2019-10-29 22:49:45',
                'updated_at' => '2019-10-29 22:49:45',
            ),
            402 => 
            array (
                'id' => 2903,
                'song_id' => 740,
                'tag_id' => 15,
                'created_at' => '2019-10-29 22:49:47',
                'updated_at' => '2019-10-29 22:49:47',
            ),
            403 => 
            array (
                'id' => 2904,
                'song_id' => 740,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:47',
                'updated_at' => '2019-10-29 22:49:47',
            ),
            404 => 
            array (
                'id' => 2905,
                'song_id' => 740,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:47',
                'updated_at' => '2019-10-29 22:49:47',
            ),
            405 => 
            array (
                'id' => 2906,
                'song_id' => 740,
                'tag_id' => 224,
                'created_at' => '2019-10-29 22:49:47',
                'updated_at' => '2019-10-29 22:49:47',
            ),
            406 => 
            array (
                'id' => 2907,
                'song_id' => 740,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:49:47',
                'updated_at' => '2019-10-29 22:49:47',
            ),
            407 => 
            array (
                'id' => 2908,
                'song_id' => 741,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:48',
                'updated_at' => '2019-10-29 22:49:48',
            ),
            408 => 
            array (
                'id' => 2909,
                'song_id' => 741,
                'tag_id' => 15,
                'created_at' => '2019-10-29 22:49:48',
                'updated_at' => '2019-10-29 22:49:48',
            ),
            409 => 
            array (
                'id' => 2910,
                'song_id' => 741,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:49:48',
                'updated_at' => '2019-10-29 22:49:48',
            ),
            410 => 
            array (
                'id' => 2911,
                'song_id' => 741,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:48',
                'updated_at' => '2019-10-29 22:49:48',
            ),
            411 => 
            array (
                'id' => 2912,
                'song_id' => 741,
                'tag_id' => 224,
                'created_at' => '2019-10-29 22:49:48',
                'updated_at' => '2019-10-29 22:49:48',
            ),
            412 => 
            array (
                'id' => 2913,
                'song_id' => 742,
                'tag_id' => 376,
                'created_at' => '2019-10-29 22:49:49',
                'updated_at' => '2019-10-29 22:49:49',
            ),
            413 => 
            array (
                'id' => 2914,
                'song_id' => 742,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:49',
                'updated_at' => '2019-10-29 22:49:49',
            ),
            414 => 
            array (
                'id' => 2915,
                'song_id' => 742,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:49',
                'updated_at' => '2019-10-29 22:49:49',
            ),
            415 => 
            array (
                'id' => 2916,
                'song_id' => 742,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:49',
                'updated_at' => '2019-10-29 22:49:49',
            ),
            416 => 
            array (
                'id' => 2917,
                'song_id' => 742,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:49:50',
                'updated_at' => '2019-10-29 22:49:50',
            ),
            417 => 
            array (
                'id' => 2918,
                'song_id' => 743,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:51',
                'updated_at' => '2019-10-29 22:49:51',
            ),
            418 => 
            array (
                'id' => 2919,
                'song_id' => 743,
                'tag_id' => 225,
                'created_at' => '2019-10-29 22:49:51',
                'updated_at' => '2019-10-29 22:49:51',
            ),
            419 => 
            array (
                'id' => 2920,
                'song_id' => 743,
                'tag_id' => 226,
                'created_at' => '2019-10-29 22:49:51',
                'updated_at' => '2019-10-29 22:49:51',
            ),
            420 => 
            array (
                'id' => 2921,
                'song_id' => 743,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:49:51',
                'updated_at' => '2019-10-29 22:49:51',
            ),
            421 => 
            array (
                'id' => 2922,
                'song_id' => 743,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:51',
                'updated_at' => '2019-10-29 22:49:51',
            ),
            422 => 
            array (
                'id' => 2923,
                'song_id' => 744,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:52',
                'updated_at' => '2019-10-29 22:49:52',
            ),
            423 => 
            array (
                'id' => 2924,
                'song_id' => 744,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:52',
                'updated_at' => '2019-10-29 22:49:52',
            ),
            424 => 
            array (
                'id' => 2925,
                'song_id' => 744,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:52',
                'updated_at' => '2019-10-29 22:49:52',
            ),
            425 => 
            array (
                'id' => 2926,
                'song_id' => 744,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:49:52',
                'updated_at' => '2019-10-29 22:49:52',
            ),
            426 => 
            array (
                'id' => 2927,
                'song_id' => 744,
                'tag_id' => 376,
                'created_at' => '2019-10-29 22:49:52',
                'updated_at' => '2019-10-29 22:49:52',
            ),
            427 => 
            array (
                'id' => 2928,
                'song_id' => 745,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:54',
                'updated_at' => '2019-10-29 22:49:54',
            ),
            428 => 
            array (
                'id' => 2929,
                'song_id' => 745,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:49:54',
                'updated_at' => '2019-10-29 22:49:54',
            ),
            429 => 
            array (
                'id' => 2930,
                'song_id' => 745,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:54',
                'updated_at' => '2019-10-29 22:49:54',
            ),
            430 => 
            array (
                'id' => 2931,
                'song_id' => 745,
                'tag_id' => 139,
                'created_at' => '2019-10-29 22:49:54',
                'updated_at' => '2019-10-29 22:49:54',
            ),
            431 => 
            array (
                'id' => 2932,
                'song_id' => 745,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:49:54',
                'updated_at' => '2019-10-29 22:49:54',
            ),
            432 => 
            array (
                'id' => 2933,
                'song_id' => 746,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:57',
                'updated_at' => '2019-10-29 22:49:57',
            ),
            433 => 
            array (
                'id' => 2934,
                'song_id' => 746,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:57',
                'updated_at' => '2019-10-29 22:49:57',
            ),
            434 => 
            array (
                'id' => 2935,
                'song_id' => 746,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:57',
                'updated_at' => '2019-10-29 22:49:57',
            ),
            435 => 
            array (
                'id' => 2936,
                'song_id' => 746,
                'tag_id' => 376,
                'created_at' => '2019-10-29 22:49:57',
                'updated_at' => '2019-10-29 22:49:57',
            ),
            436 => 
            array (
                'id' => 2937,
                'song_id' => 746,
                'tag_id' => 122,
                'created_at' => '2019-10-29 22:49:57',
                'updated_at' => '2019-10-29 22:49:57',
            ),
            437 => 
            array (
                'id' => 2938,
                'song_id' => 748,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:49:59',
                'updated_at' => '2019-10-29 22:49:59',
            ),
            438 => 
            array (
                'id' => 2939,
                'song_id' => 748,
                'tag_id' => 16,
                'created_at' => '2019-10-29 22:49:59',
                'updated_at' => '2019-10-29 22:49:59',
            ),
            439 => 
            array (
                'id' => 2940,
                'song_id' => 748,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:49:59',
                'updated_at' => '2019-10-29 22:49:59',
            ),
            440 => 
            array (
                'id' => 2941,
                'song_id' => 748,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:49:59',
                'updated_at' => '2019-10-29 22:49:59',
            ),
            441 => 
            array (
                'id' => 2942,
                'song_id' => 748,
                'tag_id' => 376,
                'created_at' => '2019-10-29 22:49:59',
                'updated_at' => '2019-10-29 22:49:59',
            ),
            442 => 
            array (
                'id' => 2943,
                'song_id' => 749,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:01',
                'updated_at' => '2019-10-29 22:50:01',
            ),
            443 => 
            array (
                'id' => 2944,
                'song_id' => 749,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:50:01',
                'updated_at' => '2019-10-29 22:50:01',
            ),
            444 => 
            array (
                'id' => 2945,
                'song_id' => 749,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:50:01',
                'updated_at' => '2019-10-29 22:50:01',
            ),
            445 => 
            array (
                'id' => 2946,
                'song_id' => 749,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:01',
                'updated_at' => '2019-10-29 22:50:01',
            ),
            446 => 
            array (
                'id' => 2947,
                'song_id' => 750,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:02',
                'updated_at' => '2019-10-29 22:50:02',
            ),
            447 => 
            array (
                'id' => 2948,
                'song_id' => 750,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:50:03',
                'updated_at' => '2019-10-29 22:50:03',
            ),
            448 => 
            array (
                'id' => 2949,
                'song_id' => 750,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:50:03',
                'updated_at' => '2019-10-29 22:50:03',
            ),
            449 => 
            array (
                'id' => 2950,
                'song_id' => 750,
                'tag_id' => 69,
                'created_at' => '2019-10-29 22:50:03',
                'updated_at' => '2019-10-29 22:50:03',
            ),
            450 => 
            array (
                'id' => 2951,
                'song_id' => 751,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:04',
                'updated_at' => '2019-10-29 22:50:04',
            ),
            451 => 
            array (
                'id' => 2952,
                'song_id' => 751,
                'tag_id' => 22,
                'created_at' => '2019-10-29 22:50:04',
                'updated_at' => '2019-10-29 22:50:04',
            ),
            452 => 
            array (
                'id' => 2953,
                'song_id' => 751,
                'tag_id' => 24,
                'created_at' => '2019-10-29 22:50:04',
                'updated_at' => '2019-10-29 22:50:04',
            ),
            453 => 
            array (
                'id' => 2954,
                'song_id' => 751,
                'tag_id' => 349,
                'created_at' => '2019-10-29 22:50:04',
                'updated_at' => '2019-10-29 22:50:04',
            ),
            454 => 
            array (
                'id' => 2955,
                'song_id' => 751,
                'tag_id' => 99,
                'created_at' => '2019-10-29 22:50:04',
                'updated_at' => '2019-10-29 22:50:04',
            ),
            455 => 
            array (
                'id' => 2956,
                'song_id' => 752,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:50:05',
                'updated_at' => '2019-10-29 22:50:05',
            ),
            456 => 
            array (
                'id' => 2957,
                'song_id' => 752,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:16',
                'updated_at' => '2019-10-29 22:50:16',
            ),
            457 => 
            array (
                'id' => 2958,
                'song_id' => 752,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:50:17',
                'updated_at' => '2019-10-29 22:50:17',
            ),
            458 => 
            array (
                'id' => 2959,
                'song_id' => 752,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:50:17',
                'updated_at' => '2019-10-29 22:50:17',
            ),
            459 => 
            array (
                'id' => 2960,
                'song_id' => 752,
                'tag_id' => 21,
                'created_at' => '2019-10-29 22:50:17',
                'updated_at' => '2019-10-29 22:50:17',
            ),
            460 => 
            array (
                'id' => 2961,
                'song_id' => 753,
                'tag_id' => 377,
                'created_at' => '2019-10-29 22:50:19',
                'updated_at' => '2019-10-29 22:50:19',
            ),
            461 => 
            array (
                'id' => 2962,
                'song_id' => 753,
                'tag_id' => 56,
                'created_at' => '2019-10-29 22:50:19',
                'updated_at' => '2019-10-29 22:50:19',
            ),
            462 => 
            array (
                'id' => 2963,
                'song_id' => 753,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:50:19',
                'updated_at' => '2019-10-29 22:50:19',
            ),
            463 => 
            array (
                'id' => 2964,
                'song_id' => 753,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:50:19',
                'updated_at' => '2019-10-29 22:50:19',
            ),
            464 => 
            array (
                'id' => 2965,
                'song_id' => 754,
                'tag_id' => 56,
                'created_at' => '2019-10-29 22:50:20',
                'updated_at' => '2019-10-29 22:50:20',
            ),
            465 => 
            array (
                'id' => 2966,
                'song_id' => 754,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:20',
                'updated_at' => '2019-10-29 22:50:20',
            ),
            466 => 
            array (
                'id' => 2967,
                'song_id' => 754,
                'tag_id' => 104,
                'created_at' => '2019-10-29 22:50:20',
                'updated_at' => '2019-10-29 22:50:20',
            ),
            467 => 
            array (
                'id' => 2968,
                'song_id' => 754,
                'tag_id' => 29,
                'created_at' => '2019-10-29 22:50:20',
                'updated_at' => '2019-10-29 22:50:20',
            ),
            468 => 
            array (
                'id' => 2969,
                'song_id' => 755,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:22',
                'updated_at' => '2019-10-29 22:50:22',
            ),
            469 => 
            array (
                'id' => 2970,
                'song_id' => 755,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:50:22',
                'updated_at' => '2019-10-29 22:50:22',
            ),
            470 => 
            array (
                'id' => 2971,
                'song_id' => 755,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:50:22',
                'updated_at' => '2019-10-29 22:50:22',
            ),
            471 => 
            array (
                'id' => 2972,
                'song_id' => 755,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:22',
                'updated_at' => '2019-10-29 22:50:22',
            ),
            472 => 
            array (
                'id' => 2973,
                'song_id' => 755,
                'tag_id' => 72,
                'created_at' => '2019-10-29 22:50:22',
                'updated_at' => '2019-10-29 22:50:22',
            ),
            473 => 
            array (
                'id' => 2974,
                'song_id' => 756,
                'tag_id' => 52,
                'created_at' => '2019-10-29 22:50:23',
                'updated_at' => '2019-10-29 22:50:23',
            ),
            474 => 
            array (
                'id' => 2975,
                'song_id' => 756,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:50:23',
                'updated_at' => '2019-10-29 22:50:23',
            ),
            475 => 
            array (
                'id' => 2976,
                'song_id' => 756,
                'tag_id' => 39,
                'created_at' => '2019-10-29 22:50:23',
                'updated_at' => '2019-10-29 22:50:23',
            ),
            476 => 
            array (
                'id' => 2977,
                'song_id' => 756,
                'tag_id' => 17,
                'created_at' => '2019-10-29 22:50:23',
                'updated_at' => '2019-10-29 22:50:23',
            ),
            477 => 
            array (
                'id' => 2978,
                'song_id' => 756,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:23',
                'updated_at' => '2019-10-29 22:50:23',
            ),
            478 => 
            array (
                'id' => 2979,
                'song_id' => 757,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:50:25',
                'updated_at' => '2019-10-29 22:50:25',
            ),
            479 => 
            array (
                'id' => 2980,
                'song_id' => 757,
                'tag_id' => 42,
                'created_at' => '2019-10-29 22:50:25',
                'updated_at' => '2019-10-29 22:50:25',
            ),
            480 => 
            array (
                'id' => 2981,
                'song_id' => 757,
                'tag_id' => 44,
                'created_at' => '2019-10-29 22:50:25',
                'updated_at' => '2019-10-29 22:50:25',
            ),
            481 => 
            array (
                'id' => 2982,
                'song_id' => 757,
                'tag_id' => 18,
                'created_at' => '2019-10-29 22:50:25',
                'updated_at' => '2019-10-29 22:50:25',
            ),
            482 => 
            array (
                'id' => 2983,
                'song_id' => 757,
                'tag_id' => 206,
                'created_at' => '2019-10-29 22:50:25',
                'updated_at' => '2019-10-29 22:50:25',
            ),
            483 => 
            array (
                'id' => 2984,
                'song_id' => 759,
                'tag_id' => 80,
                'created_at' => '2019-10-29 22:50:28',
                'updated_at' => '2019-10-29 22:50:28',
            ),
            484 => 
            array (
                'id' => 2985,
                'song_id' => 759,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:50:28',
                'updated_at' => '2019-10-29 22:50:28',
            ),
            485 => 
            array (
                'id' => 2986,
                'song_id' => 759,
                'tag_id' => 3,
                'created_at' => '2019-10-29 22:50:28',
                'updated_at' => '2019-10-29 22:50:28',
            ),
            486 => 
            array (
                'id' => 2987,
                'song_id' => 759,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:28',
                'updated_at' => '2019-10-29 22:50:28',
            ),
            487 => 
            array (
                'id' => 2988,
                'song_id' => 759,
                'tag_id' => 169,
                'created_at' => '2019-10-29 22:50:28',
                'updated_at' => '2019-10-29 22:50:28',
            ),
            488 => 
            array (
                'id' => 2989,
                'song_id' => 760,
                'tag_id' => 25,
                'created_at' => '2019-10-29 22:50:29',
                'updated_at' => '2019-10-29 22:50:29',
            ),
            489 => 
            array (
                'id' => 2990,
                'song_id' => 760,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:50:29',
                'updated_at' => '2019-10-29 22:50:29',
            ),
            490 => 
            array (
                'id' => 2991,
                'song_id' => 760,
                'tag_id' => 9,
                'created_at' => '2019-10-29 22:50:29',
                'updated_at' => '2019-10-29 22:50:29',
            ),
            491 => 
            array (
                'id' => 2992,
                'song_id' => 760,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:29',
                'updated_at' => '2019-10-29 22:50:29',
            ),
            492 => 
            array (
                'id' => 2993,
                'song_id' => 760,
                'tag_id' => 129,
                'created_at' => '2019-10-29 22:50:29',
                'updated_at' => '2019-10-29 22:50:29',
            ),
            493 => 
            array (
                'id' => 2994,
                'song_id' => 761,
                'tag_id' => 378,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-29 22:50:31',
            ),
            494 => 
            array (
                'id' => 2995,
                'song_id' => 761,
                'tag_id' => 379,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-29 22:50:31',
            ),
            495 => 
            array (
                'id' => 2996,
                'song_id' => 761,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-29 22:50:31',
            ),
            496 => 
            array (
                'id' => 2997,
                'song_id' => 761,
                'tag_id' => 335,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-29 22:50:31',
            ),
            497 => 
            array (
                'id' => 2998,
                'song_id' => 761,
                'tag_id' => 367,
                'created_at' => '2019-10-29 22:50:31',
                'updated_at' => '2019-10-29 22:50:31',
            ),
            498 => 
            array (
                'id' => 2999,
                'song_id' => 762,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:50:33',
                'updated_at' => '2019-10-29 22:50:33',
            ),
            499 => 
            array (
                'id' => 3000,
                'song_id' => 762,
                'tag_id' => 13,
                'created_at' => '2019-10-29 22:50:33',
                'updated_at' => '2019-10-29 22:50:33',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'song_id' => 762,
                'tag_id' => 14,
                'created_at' => '2019-10-29 22:50:33',
                'updated_at' => '2019-10-29 22:50:33',
            ),
            1 => 
            array (
                'id' => 3002,
                'song_id' => 762,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:33',
                'updated_at' => '2019-10-29 22:50:33',
            ),
            2 => 
            array (
                'id' => 3003,
                'song_id' => 762,
                'tag_id' => 126,
                'created_at' => '2019-10-29 22:50:34',
                'updated_at' => '2019-10-29 22:50:34',
            ),
            3 => 
            array (
                'id' => 3004,
                'song_id' => 765,
                'tag_id' => 380,
                'created_at' => '2019-10-29 22:50:38',
                'updated_at' => '2019-10-29 22:50:38',
            ),
            4 => 
            array (
                'id' => 3005,
                'song_id' => 765,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:38',
                'updated_at' => '2019-10-29 22:50:38',
            ),
            5 => 
            array (
                'id' => 3006,
                'song_id' => 765,
                'tag_id' => 7,
                'created_at' => '2019-10-29 22:50:38',
                'updated_at' => '2019-10-29 22:50:38',
            ),
            6 => 
            array (
                'id' => 3007,
                'song_id' => 765,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:38',
                'updated_at' => '2019-10-29 22:50:38',
            ),
            7 => 
            array (
                'id' => 3008,
                'song_id' => 765,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:50:38',
                'updated_at' => '2019-10-29 22:50:38',
            ),
            8 => 
            array (
                'id' => 3009,
                'song_id' => 766,
                'tag_id' => 381,
                'created_at' => '2019-10-29 22:50:39',
                'updated_at' => '2019-10-29 22:50:39',
            ),
            9 => 
            array (
                'id' => 3010,
                'song_id' => 766,
                'tag_id' => 333,
                'created_at' => '2019-10-29 22:50:39',
                'updated_at' => '2019-10-29 22:50:39',
            ),
            10 => 
            array (
                'id' => 3011,
                'song_id' => 766,
                'tag_id' => 334,
                'created_at' => '2019-10-29 22:50:39',
                'updated_at' => '2019-10-29 22:50:39',
            ),
            11 => 
            array (
                'id' => 3012,
                'song_id' => 766,
                'tag_id' => 3,
                'created_at' => '2019-10-29 22:50:39',
                'updated_at' => '2019-10-29 22:50:39',
            ),
            12 => 
            array (
                'id' => 3013,
                'song_id' => 766,
                'tag_id' => 80,
                'created_at' => '2019-10-29 22:50:40',
                'updated_at' => '2019-10-29 22:50:40',
            ),
            13 => 
            array (
                'id' => 3014,
                'song_id' => 767,
                'tag_id' => 127,
                'created_at' => '2019-10-29 22:50:41',
                'updated_at' => '2019-10-29 22:50:41',
            ),
            14 => 
            array (
                'id' => 3015,
                'song_id' => 767,
                'tag_id' => 105,
                'created_at' => '2019-10-29 22:50:41',
                'updated_at' => '2019-10-29 22:50:41',
            ),
            15 => 
            array (
                'id' => 3016,
                'song_id' => 767,
                'tag_id' => 2,
                'created_at' => '2019-10-29 22:50:41',
                'updated_at' => '2019-10-29 22:50:41',
            ),
            16 => 
            array (
                'id' => 3017,
                'song_id' => 767,
                'tag_id' => 103,
                'created_at' => '2019-10-29 22:50:41',
                'updated_at' => '2019-10-29 22:50:41',
            ),
            17 => 
            array (
                'id' => 3018,
                'song_id' => 767,
                'tag_id' => 130,
                'created_at' => '2019-10-29 22:50:41',
                'updated_at' => '2019-10-29 22:50:41',
            ),
            18 => 
            array (
                'id' => 3019,
                'song_id' => 771,
                'tag_id' => 382,
                'created_at' => '2019-10-29 22:50:47',
                'updated_at' => '2019-10-29 22:50:47',
            ),
            19 => 
            array (
                'id' => 3020,
                'song_id' => 771,
                'tag_id' => 245,
                'created_at' => '2019-10-29 22:50:47',
                'updated_at' => '2019-10-29 22:50:47',
            ),
            20 => 
            array (
                'id' => 3021,
                'song_id' => 771,
                'tag_id' => 246,
                'created_at' => '2019-10-29 22:50:47',
                'updated_at' => '2019-10-29 22:50:47',
            ),
            21 => 
            array (
                'id' => 3022,
                'song_id' => 771,
                'tag_id' => 264,
                'created_at' => '2019-10-29 22:50:47',
                'updated_at' => '2019-10-29 22:50:47',
            ),
            22 => 
            array (
                'id' => 3023,
                'song_id' => 771,
                'tag_id' => 101,
                'created_at' => '2019-10-29 22:50:47',
                'updated_at' => '2019-10-29 22:50:47',
            ),
            23 => 
            array (
                'id' => 3024,
                'song_id' => 774,
                'tag_id' => 383,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-29 22:50:51',
            ),
            24 => 
            array (
                'id' => 3025,
                'song_id' => 774,
                'tag_id' => 384,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-29 22:50:51',
            ),
            25 => 
            array (
                'id' => 3026,
                'song_id' => 774,
                'tag_id' => 245,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-29 22:50:51',
            ),
            26 => 
            array (
                'id' => 3027,
                'song_id' => 774,
                'tag_id' => 246,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-29 22:50:51',
            ),
            27 => 
            array (
                'id' => 3028,
                'song_id' => 774,
                'tag_id' => 244,
                'created_at' => '2019-10-29 22:50:51',
                'updated_at' => '2019-10-29 22:50:51',
            ),
            28 => 
            array (
                'id' => 3029,
                'song_id' => 776,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:40',
                'updated_at' => '2019-10-31 21:07:40',
            ),
            29 => 
            array (
                'id' => 3030,
                'song_id' => 776,
                'tag_id' => 17,
                'created_at' => '2019-10-31 21:07:40',
                'updated_at' => '2019-10-31 21:07:40',
            ),
            30 => 
            array (
                'id' => 3031,
                'song_id' => 776,
                'tag_id' => 222,
                'created_at' => '2019-10-31 21:07:40',
                'updated_at' => '2019-10-31 21:07:40',
            ),
            31 => 
            array (
                'id' => 3032,
                'song_id' => 776,
                'tag_id' => 101,
                'created_at' => '2019-10-31 21:07:40',
                'updated_at' => '2019-10-31 21:07:40',
            ),
            32 => 
            array (
                'id' => 3033,
                'song_id' => 777,
                'tag_id' => 406,
                'created_at' => '2019-10-31 21:07:41',
                'updated_at' => '2019-10-31 21:07:41',
            ),
            33 => 
            array (
                'id' => 3034,
                'song_id' => 777,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:41',
                'updated_at' => '2019-10-31 21:07:41',
            ),
            34 => 
            array (
                'id' => 3035,
                'song_id' => 777,
                'tag_id' => 189,
                'created_at' => '2019-10-31 21:07:41',
                'updated_at' => '2019-10-31 21:07:41',
            ),
            35 => 
            array (
                'id' => 3036,
                'song_id' => 777,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:41',
                'updated_at' => '2019-10-31 21:07:41',
            ),
            36 => 
            array (
                'id' => 3037,
                'song_id' => 777,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:07:41',
                'updated_at' => '2019-10-31 21:07:41',
            ),
            37 => 
            array (
                'id' => 3038,
                'song_id' => 778,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:42',
                'updated_at' => '2019-10-31 21:07:42',
            ),
            38 => 
            array (
                'id' => 3039,
                'song_id' => 778,
                'tag_id' => 406,
                'created_at' => '2019-10-31 21:07:42',
                'updated_at' => '2019-10-31 21:07:42',
            ),
            39 => 
            array (
                'id' => 3040,
                'song_id' => 778,
                'tag_id' => 189,
                'created_at' => '2019-10-31 21:07:42',
                'updated_at' => '2019-10-31 21:07:42',
            ),
            40 => 
            array (
                'id' => 3041,
                'song_id' => 778,
                'tag_id' => 55,
                'created_at' => '2019-10-31 21:07:42',
                'updated_at' => '2019-10-31 21:07:42',
            ),
            41 => 
            array (
                'id' => 3042,
                'song_id' => 778,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:42',
                'updated_at' => '2019-10-31 21:07:42',
            ),
            42 => 
            array (
                'id' => 3043,
                'song_id' => 779,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:44',
                'updated_at' => '2019-10-31 21:07:44',
            ),
            43 => 
            array (
                'id' => 3044,
                'song_id' => 779,
                'tag_id' => 189,
                'created_at' => '2019-10-31 21:07:44',
                'updated_at' => '2019-10-31 21:07:44',
            ),
            44 => 
            array (
                'id' => 3045,
                'song_id' => 779,
                'tag_id' => 406,
                'created_at' => '2019-10-31 21:07:44',
                'updated_at' => '2019-10-31 21:07:44',
            ),
            45 => 
            array (
                'id' => 3046,
                'song_id' => 779,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:44',
                'updated_at' => '2019-10-31 21:07:44',
            ),
            46 => 
            array (
                'id' => 3047,
                'song_id' => 779,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:07:44',
                'updated_at' => '2019-10-31 21:07:44',
            ),
            47 => 
            array (
                'id' => 3048,
                'song_id' => 780,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:45',
                'updated_at' => '2019-10-31 21:07:45',
            ),
            48 => 
            array (
                'id' => 3049,
                'song_id' => 780,
                'tag_id' => 189,
                'created_at' => '2019-10-31 21:07:45',
                'updated_at' => '2019-10-31 21:07:45',
            ),
            49 => 
            array (
                'id' => 3050,
                'song_id' => 780,
                'tag_id' => 53,
                'created_at' => '2019-10-31 21:07:45',
                'updated_at' => '2019-10-31 21:07:45',
            ),
            50 => 
            array (
                'id' => 3051,
                'song_id' => 780,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:45',
                'updated_at' => '2019-10-31 21:07:45',
            ),
            51 => 
            array (
                'id' => 3052,
                'song_id' => 780,
                'tag_id' => 190,
                'created_at' => '2019-10-31 21:07:45',
                'updated_at' => '2019-10-31 21:07:45',
            ),
            52 => 
            array (
                'id' => 3053,
                'song_id' => 781,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:47',
                'updated_at' => '2019-10-31 21:07:47',
            ),
            53 => 
            array (
                'id' => 3054,
                'song_id' => 781,
                'tag_id' => 189,
                'created_at' => '2019-10-31 21:07:47',
                'updated_at' => '2019-10-31 21:07:47',
            ),
            54 => 
            array (
                'id' => 3055,
                'song_id' => 781,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:47',
                'updated_at' => '2019-10-31 21:07:47',
            ),
            55 => 
            array (
                'id' => 3056,
                'song_id' => 781,
                'tag_id' => 406,
                'created_at' => '2019-10-31 21:07:47',
                'updated_at' => '2019-10-31 21:07:47',
            ),
            56 => 
            array (
                'id' => 3057,
                'song_id' => 781,
                'tag_id' => 53,
                'created_at' => '2019-10-31 21:07:47',
                'updated_at' => '2019-10-31 21:07:47',
            ),
            57 => 
            array (
                'id' => 3058,
                'song_id' => 782,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:48',
                'updated_at' => '2019-10-31 21:07:48',
            ),
            58 => 
            array (
                'id' => 3059,
                'song_id' => 782,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:07:48',
                'updated_at' => '2019-10-31 21:07:48',
            ),
            59 => 
            array (
                'id' => 3060,
                'song_id' => 782,
                'tag_id' => 190,
                'created_at' => '2019-10-31 21:07:48',
                'updated_at' => '2019-10-31 21:07:48',
            ),
            60 => 
            array (
                'id' => 3061,
                'song_id' => 782,
                'tag_id' => 17,
                'created_at' => '2019-10-31 21:07:48',
                'updated_at' => '2019-10-31 21:07:48',
            ),
            61 => 
            array (
                'id' => 3062,
                'song_id' => 782,
                'tag_id' => 189,
                'created_at' => '2019-10-31 21:07:48',
                'updated_at' => '2019-10-31 21:07:48',
            ),
            62 => 
            array (
                'id' => 3063,
                'song_id' => 784,
                'tag_id' => 1,
                'created_at' => '2019-10-31 21:07:52',
                'updated_at' => '2019-10-31 21:07:52',
            ),
            63 => 
            array (
                'id' => 3064,
                'song_id' => 784,
                'tag_id' => 7,
                'created_at' => '2019-10-31 21:07:52',
                'updated_at' => '2019-10-31 21:07:52',
            ),
            64 => 
            array (
                'id' => 3065,
                'song_id' => 784,
                'tag_id' => 22,
                'created_at' => '2019-10-31 21:07:52',
                'updated_at' => '2019-10-31 21:07:52',
            ),
            65 => 
            array (
                'id' => 3066,
                'song_id' => 784,
                'tag_id' => 164,
                'created_at' => '2019-10-31 21:07:52',
                'updated_at' => '2019-10-31 21:07:52',
            ),
            66 => 
            array (
                'id' => 3067,
                'song_id' => 784,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:52',
                'updated_at' => '2019-10-31 21:07:52',
            ),
            67 => 
            array (
                'id' => 3068,
                'song_id' => 785,
                'tag_id' => 83,
                'created_at' => '2019-10-31 21:07:53',
                'updated_at' => '2019-10-31 21:07:53',
            ),
            68 => 
            array (
                'id' => 3069,
                'song_id' => 785,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:53',
                'updated_at' => '2019-10-31 21:07:53',
            ),
            69 => 
            array (
                'id' => 3070,
                'song_id' => 785,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:53',
                'updated_at' => '2019-10-31 21:07:53',
            ),
            70 => 
            array (
                'id' => 3071,
                'song_id' => 785,
                'tag_id' => 54,
                'created_at' => '2019-10-31 21:07:53',
                'updated_at' => '2019-10-31 21:07:53',
            ),
            71 => 
            array (
                'id' => 3072,
                'song_id' => 786,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:54',
                'updated_at' => '2019-10-31 21:07:54',
            ),
            72 => 
            array (
                'id' => 3073,
                'song_id' => 786,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:54',
                'updated_at' => '2019-10-31 21:07:54',
            ),
            73 => 
            array (
                'id' => 3074,
                'song_id' => 786,
                'tag_id' => 54,
                'created_at' => '2019-10-31 21:07:54',
                'updated_at' => '2019-10-31 21:07:54',
            ),
            74 => 
            array (
                'id' => 3075,
                'song_id' => 786,
                'tag_id' => 42,
                'created_at' => '2019-10-31 21:07:54',
                'updated_at' => '2019-10-31 21:07:54',
            ),
            75 => 
            array (
                'id' => 3076,
                'song_id' => 786,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:07:54',
                'updated_at' => '2019-10-31 21:07:54',
            ),
            76 => 
            array (
                'id' => 3077,
                'song_id' => 787,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:56',
                'updated_at' => '2019-10-31 21:07:56',
            ),
            77 => 
            array (
                'id' => 3078,
                'song_id' => 787,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:56',
                'updated_at' => '2019-10-31 21:07:56',
            ),
            78 => 
            array (
                'id' => 3079,
                'song_id' => 787,
                'tag_id' => 54,
                'created_at' => '2019-10-31 21:07:56',
                'updated_at' => '2019-10-31 21:07:56',
            ),
            79 => 
            array (
                'id' => 3080,
                'song_id' => 787,
                'tag_id' => 42,
                'created_at' => '2019-10-31 21:07:56',
                'updated_at' => '2019-10-31 21:07:56',
            ),
            80 => 
            array (
                'id' => 3081,
                'song_id' => 788,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:57',
                'updated_at' => '2019-10-31 21:07:57',
            ),
            81 => 
            array (
                'id' => 3082,
                'song_id' => 788,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:57',
                'updated_at' => '2019-10-31 21:07:57',
            ),
            82 => 
            array (
                'id' => 3083,
                'song_id' => 788,
                'tag_id' => 42,
                'created_at' => '2019-10-31 21:07:57',
                'updated_at' => '2019-10-31 21:07:57',
            ),
            83 => 
            array (
                'id' => 3084,
                'song_id' => 788,
                'tag_id' => 54,
                'created_at' => '2019-10-31 21:07:57',
                'updated_at' => '2019-10-31 21:07:57',
            ),
            84 => 
            array (
                'id' => 3085,
                'song_id' => 788,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:07:57',
                'updated_at' => '2019-10-31 21:07:57',
            ),
            85 => 
            array (
                'id' => 3086,
                'song_id' => 789,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:07:59',
                'updated_at' => '2019-10-31 21:07:59',
            ),
            86 => 
            array (
                'id' => 3087,
                'song_id' => 789,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:07:59',
                'updated_at' => '2019-10-31 21:07:59',
            ),
            87 => 
            array (
                'id' => 3088,
                'song_id' => 789,
                'tag_id' => 54,
                'created_at' => '2019-10-31 21:07:59',
                'updated_at' => '2019-10-31 21:07:59',
            ),
            88 => 
            array (
                'id' => 3089,
                'song_id' => 789,
                'tag_id' => 67,
                'created_at' => '2019-10-31 21:07:59',
                'updated_at' => '2019-10-31 21:07:59',
            ),
            89 => 
            array (
                'id' => 3090,
                'song_id' => 789,
                'tag_id' => 42,
                'created_at' => '2019-10-31 21:07:59',
                'updated_at' => '2019-10-31 21:07:59',
            ),
            90 => 
            array (
                'id' => 3091,
                'song_id' => 790,
                'tag_id' => 25,
                'created_at' => '2019-10-31 21:08:00',
                'updated_at' => '2019-10-31 21:08:00',
            ),
            91 => 
            array (
                'id' => 3092,
                'song_id' => 790,
                'tag_id' => 13,
                'created_at' => '2019-10-31 21:08:00',
                'updated_at' => '2019-10-31 21:08:00',
            ),
            92 => 
            array (
                'id' => 3093,
                'song_id' => 790,
                'tag_id' => 9,
                'created_at' => '2019-10-31 21:08:00',
                'updated_at' => '2019-10-31 21:08:00',
            ),
            93 => 
            array (
                'id' => 3094,
                'song_id' => 790,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:08:00',
                'updated_at' => '2019-10-31 21:08:00',
            ),
            94 => 
            array (
                'id' => 3095,
                'song_id' => 790,
                'tag_id' => 129,
                'created_at' => '2019-10-31 21:08:00',
                'updated_at' => '2019-10-31 21:08:00',
            ),
            95 => 
            array (
                'id' => 3096,
                'song_id' => 791,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:08:02',
                'updated_at' => '2019-10-31 21:08:02',
            ),
            96 => 
            array (
                'id' => 3097,
                'song_id' => 791,
                'tag_id' => 21,
                'created_at' => '2019-10-31 21:08:02',
                'updated_at' => '2019-10-31 21:08:02',
            ),
            97 => 
            array (
                'id' => 3098,
                'song_id' => 791,
                'tag_id' => 18,
                'created_at' => '2019-10-31 21:08:02',
                'updated_at' => '2019-10-31 21:08:02',
            ),
            98 => 
            array (
                'id' => 3099,
                'song_id' => 791,
                'tag_id' => 15,
                'created_at' => '2019-10-31 21:08:02',
                'updated_at' => '2019-10-31 21:08:02',
            ),
            99 => 
            array (
                'id' => 3100,
                'song_id' => 792,
                'tag_id' => 407,
                'created_at' => '2019-10-31 21:08:04',
                'updated_at' => '2019-10-31 21:08:04',
            ),
            100 => 
            array (
                'id' => 3101,
                'song_id' => 792,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:04',
                'updated_at' => '2019-10-31 21:08:04',
            ),
            101 => 
            array (
                'id' => 3102,
                'song_id' => 792,
                'tag_id' => 22,
                'created_at' => '2019-10-31 21:08:04',
                'updated_at' => '2019-10-31 21:08:04',
            ),
            102 => 
            array (
                'id' => 3103,
                'song_id' => 792,
                'tag_id' => 24,
                'created_at' => '2019-10-31 21:08:04',
                'updated_at' => '2019-10-31 21:08:04',
            ),
            103 => 
            array (
                'id' => 3104,
                'song_id' => 792,
                'tag_id' => 157,
                'created_at' => '2019-10-31 21:08:04',
                'updated_at' => '2019-10-31 21:08:04',
            ),
            104 => 
            array (
                'id' => 3105,
                'song_id' => 795,
                'tag_id' => 408,
                'created_at' => '2019-10-31 21:08:08',
                'updated_at' => '2019-10-31 21:08:08',
            ),
            105 => 
            array (
                'id' => 3106,
                'song_id' => 795,
                'tag_id' => 409,
                'created_at' => '2019-10-31 21:08:08',
                'updated_at' => '2019-10-31 21:08:08',
            ),
            106 => 
            array (
                'id' => 3107,
                'song_id' => 796,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:08:10',
                'updated_at' => '2019-10-31 21:08:10',
            ),
            107 => 
            array (
                'id' => 3108,
                'song_id' => 796,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:10',
                'updated_at' => '2019-10-31 21:08:10',
            ),
            108 => 
            array (
                'id' => 3109,
                'song_id' => 796,
                'tag_id' => 245,
                'created_at' => '2019-10-31 21:08:10',
                'updated_at' => '2019-10-31 21:08:10',
            ),
            109 => 
            array (
                'id' => 3110,
                'song_id' => 796,
                'tag_id' => 7,
                'created_at' => '2019-10-31 21:08:10',
                'updated_at' => '2019-10-31 21:08:10',
            ),
            110 => 
            array (
                'id' => 3111,
                'song_id' => 796,
                'tag_id' => 125,
                'created_at' => '2019-10-31 21:08:10',
                'updated_at' => '2019-10-31 21:08:10',
            ),
            111 => 
            array (
                'id' => 3112,
                'song_id' => 797,
                'tag_id' => 245,
                'created_at' => '2019-10-31 21:08:12',
                'updated_at' => '2019-10-31 21:08:12',
            ),
            112 => 
            array (
                'id' => 3113,
                'song_id' => 797,
                'tag_id' => 25,
                'created_at' => '2019-10-31 21:08:12',
                'updated_at' => '2019-10-31 21:08:12',
            ),
            113 => 
            array (
                'id' => 3114,
                'song_id' => 797,
                'tag_id' => 244,
                'created_at' => '2019-10-31 21:08:12',
                'updated_at' => '2019-10-31 21:08:12',
            ),
            114 => 
            array (
                'id' => 3115,
                'song_id' => 797,
                'tag_id' => 20,
                'created_at' => '2019-10-31 21:08:12',
                'updated_at' => '2019-10-31 21:08:12',
            ),
            115 => 
            array (
                'id' => 3116,
                'song_id' => 797,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:08:12',
                'updated_at' => '2019-10-31 21:08:12',
            ),
            116 => 
            array (
                'id' => 3117,
                'song_id' => 798,
                'tag_id' => 23,
                'created_at' => '2019-10-31 21:22:17',
                'updated_at' => '2019-10-31 21:22:17',
            ),
            117 => 
            array (
                'id' => 3118,
                'song_id' => 798,
                'tag_id' => 131,
                'created_at' => '2019-10-31 21:22:17',
                'updated_at' => '2019-10-31 21:22:17',
            ),
            118 => 
            array (
                'id' => 3119,
                'song_id' => 798,
                'tag_id' => 132,
                'created_at' => '2019-10-31 21:22:17',
                'updated_at' => '2019-10-31 21:22:17',
            ),
            119 => 
            array (
                'id' => 3120,
                'song_id' => 798,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:22:17',
                'updated_at' => '2019-10-31 21:22:17',
            ),
            120 => 
            array (
                'id' => 3121,
                'song_id' => 799,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:22:18',
                'updated_at' => '2019-10-31 21:22:18',
            ),
            121 => 
            array (
                'id' => 3122,
                'song_id' => 799,
                'tag_id' => 7,
                'created_at' => '2019-10-31 21:22:18',
                'updated_at' => '2019-10-31 21:22:18',
            ),
            122 => 
            array (
                'id' => 3123,
                'song_id' => 799,
                'tag_id' => 45,
                'created_at' => '2019-10-31 21:22:18',
                'updated_at' => '2019-10-31 21:22:18',
            ),
            123 => 
            array (
                'id' => 3124,
                'song_id' => 799,
                'tag_id' => 69,
                'created_at' => '2019-10-31 21:22:18',
                'updated_at' => '2019-10-31 21:22:18',
            ),
            124 => 
            array (
                'id' => 3125,
                'song_id' => 800,
                'tag_id' => 23,
                'created_at' => '2019-10-31 21:22:20',
                'updated_at' => '2019-10-31 21:22:20',
            ),
            125 => 
            array (
                'id' => 3126,
                'song_id' => 800,
                'tag_id' => 22,
                'created_at' => '2019-10-31 21:22:20',
                'updated_at' => '2019-10-31 21:22:20',
            ),
            126 => 
            array (
                'id' => 3127,
                'song_id' => 800,
                'tag_id' => 97,
                'created_at' => '2019-10-31 21:22:20',
                'updated_at' => '2019-10-31 21:22:20',
            ),
            127 => 
            array (
                'id' => 3128,
                'song_id' => 800,
                'tag_id' => 16,
                'created_at' => '2019-10-31 21:22:20',
                'updated_at' => '2019-10-31 21:22:20',
            ),
            128 => 
            array (
                'id' => 3129,
                'song_id' => 802,
                'tag_id' => 412,
                'created_at' => '2019-10-31 21:22:24',
                'updated_at' => '2019-10-31 21:22:24',
            ),
            129 => 
            array (
                'id' => 3130,
                'song_id' => 802,
                'tag_id' => 20,
                'created_at' => '2019-10-31 21:22:24',
                'updated_at' => '2019-10-31 21:22:24',
            ),
            130 => 
            array (
                'id' => 3131,
                'song_id' => 802,
                'tag_id' => 7,
                'created_at' => '2019-10-31 21:22:24',
                'updated_at' => '2019-10-31 21:22:24',
            ),
            131 => 
            array (
                'id' => 3132,
                'song_id' => 802,
                'tag_id' => 2,
                'created_at' => '2019-10-31 21:22:24',
                'updated_at' => '2019-10-31 21:22:24',
            ),
            132 => 
            array (
                'id' => 3133,
                'song_id' => 802,
                'tag_id' => 282,
                'created_at' => '2019-10-31 21:22:24',
                'updated_at' => '2019-10-31 21:22:24',
            ),
            133 => 
            array (
                'id' => 3134,
                'song_id' => 803,
                'tag_id' => 413,
                'created_at' => '2019-10-31 21:22:25',
                'updated_at' => '2019-10-31 21:22:25',
            ),
            134 => 
            array (
                'id' => 3135,
                'song_id' => 803,
                'tag_id' => 69,
                'created_at' => '2019-10-31 21:22:25',
                'updated_at' => '2019-10-31 21:22:25',
            ),
            135 => 
            array (
                'id' => 3136,
                'song_id' => 803,
                'tag_id' => 22,
                'created_at' => '2019-10-31 21:22:25',
                'updated_at' => '2019-10-31 21:22:25',
            ),
            136 => 
            array (
                'id' => 3137,
                'song_id' => 803,
                'tag_id' => 3,
                'created_at' => '2019-10-31 21:22:25',
                'updated_at' => '2019-10-31 21:22:25',
            ),
            137 => 
            array (
                'id' => 3138,
                'song_id' => 803,
                'tag_id' => 164,
                'created_at' => '2019-10-31 21:22:25',
                'updated_at' => '2019-10-31 21:22:25',
            ),
            138 => 
            array (
                'id' => 3139,
                'song_id' => 804,
                'tag_id' => 414,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 21:22:26',
            ),
            139 => 
            array (
                'id' => 3140,
                'song_id' => 804,
                'tag_id' => 415,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 21:22:26',
            ),
            140 => 
            array (
                'id' => 3141,
                'song_id' => 804,
                'tag_id' => 20,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 21:22:26',
            ),
            141 => 
            array (
                'id' => 3142,
                'song_id' => 804,
                'tag_id' => 281,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 21:22:26',
            ),
            142 => 
            array (
                'id' => 3143,
                'song_id' => 804,
                'tag_id' => 14,
                'created_at' => '2019-10-31 21:22:26',
                'updated_at' => '2019-10-31 21:22:26',
            ),
            143 => 
            array (
                'id' => 3144,
                'song_id' => 805,
                'tag_id' => 416,
                'created_at' => '2019-10-31 23:40:06',
                'updated_at' => '2019-10-31 23:40:06',
            ),
            144 => 
            array (
                'id' => 3145,
                'song_id' => 805,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:40:06',
                'updated_at' => '2019-10-31 23:40:06',
            ),
            145 => 
            array (
                'id' => 3146,
                'song_id' => 805,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:06',
                'updated_at' => '2019-10-31 23:40:06',
            ),
            146 => 
            array (
                'id' => 3147,
                'song_id' => 805,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:06',
                'updated_at' => '2019-10-31 23:40:06',
            ),
            147 => 
            array (
                'id' => 3148,
                'song_id' => 805,
                'tag_id' => 49,
                'created_at' => '2019-10-31 23:40:06',
                'updated_at' => '2019-10-31 23:40:06',
            ),
            148 => 
            array (
                'id' => 3149,
                'song_id' => 806,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:40:07',
                'updated_at' => '2019-10-31 23:40:07',
            ),
            149 => 
            array (
                'id' => 3150,
                'song_id' => 806,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:07',
                'updated_at' => '2019-10-31 23:40:07',
            ),
            150 => 
            array (
                'id' => 3151,
                'song_id' => 806,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:07',
                'updated_at' => '2019-10-31 23:40:07',
            ),
            151 => 
            array (
                'id' => 3152,
                'song_id' => 806,
                'tag_id' => 416,
                'created_at' => '2019-10-31 23:40:07',
                'updated_at' => '2019-10-31 23:40:07',
            ),
            152 => 
            array (
                'id' => 3153,
                'song_id' => 806,
                'tag_id' => 49,
                'created_at' => '2019-10-31 23:40:07',
                'updated_at' => '2019-10-31 23:40:07',
            ),
            153 => 
            array (
                'id' => 3154,
                'song_id' => 807,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:40:09',
                'updated_at' => '2019-10-31 23:40:09',
            ),
            154 => 
            array (
                'id' => 3155,
                'song_id' => 807,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:09',
                'updated_at' => '2019-10-31 23:40:09',
            ),
            155 => 
            array (
                'id' => 3156,
                'song_id' => 807,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:09',
                'updated_at' => '2019-10-31 23:40:09',
            ),
            156 => 
            array (
                'id' => 3157,
                'song_id' => 807,
                'tag_id' => 416,
                'created_at' => '2019-10-31 23:40:09',
                'updated_at' => '2019-10-31 23:40:09',
            ),
            157 => 
            array (
                'id' => 3158,
                'song_id' => 807,
                'tag_id' => 49,
                'created_at' => '2019-10-31 23:40:09',
                'updated_at' => '2019-10-31 23:40:09',
            ),
            158 => 
            array (
                'id' => 3159,
                'song_id' => 808,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:40:10',
                'updated_at' => '2019-10-31 23:40:10',
            ),
            159 => 
            array (
                'id' => 3160,
                'song_id' => 808,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:10',
                'updated_at' => '2019-10-31 23:40:10',
            ),
            160 => 
            array (
                'id' => 3161,
                'song_id' => 808,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:10',
                'updated_at' => '2019-10-31 23:40:10',
            ),
            161 => 
            array (
                'id' => 3162,
                'song_id' => 808,
                'tag_id' => 416,
                'created_at' => '2019-10-31 23:40:10',
                'updated_at' => '2019-10-31 23:40:10',
            ),
            162 => 
            array (
                'id' => 3163,
                'song_id' => 808,
                'tag_id' => 49,
                'created_at' => '2019-10-31 23:40:10',
                'updated_at' => '2019-10-31 23:40:10',
            ),
            163 => 
            array (
                'id' => 3164,
                'song_id' => 809,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:40:12',
                'updated_at' => '2019-10-31 23:40:12',
            ),
            164 => 
            array (
                'id' => 3165,
                'song_id' => 809,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:12',
                'updated_at' => '2019-10-31 23:40:12',
            ),
            165 => 
            array (
                'id' => 3166,
                'song_id' => 809,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:12',
                'updated_at' => '2019-10-31 23:40:12',
            ),
            166 => 
            array (
                'id' => 3167,
                'song_id' => 809,
                'tag_id' => 416,
                'created_at' => '2019-10-31 23:40:12',
                'updated_at' => '2019-10-31 23:40:12',
            ),
            167 => 
            array (
                'id' => 3168,
                'song_id' => 809,
                'tag_id' => 49,
                'created_at' => '2019-10-31 23:40:12',
                'updated_at' => '2019-10-31 23:40:12',
            ),
            168 => 
            array (
                'id' => 3169,
                'song_id' => 810,
                'tag_id' => 15,
                'created_at' => '2019-10-31 23:40:14',
                'updated_at' => '2019-10-31 23:40:14',
            ),
            169 => 
            array (
                'id' => 3170,
                'song_id' => 810,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:14',
                'updated_at' => '2019-10-31 23:40:14',
            ),
            170 => 
            array (
                'id' => 3171,
                'song_id' => 810,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:14',
                'updated_at' => '2019-10-31 23:40:14',
            ),
            171 => 
            array (
                'id' => 3172,
                'song_id' => 810,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:14',
                'updated_at' => '2019-10-31 23:40:14',
            ),
            172 => 
            array (
                'id' => 3173,
                'song_id' => 810,
                'tag_id' => 416,
                'created_at' => '2019-10-31 23:40:14',
                'updated_at' => '2019-10-31 23:40:14',
            ),
            173 => 
            array (
                'id' => 3174,
                'song_id' => 811,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:16',
                'updated_at' => '2019-10-31 23:40:16',
            ),
            174 => 
            array (
                'id' => 3175,
                'song_id' => 811,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:16',
                'updated_at' => '2019-10-31 23:40:16',
            ),
            175 => 
            array (
                'id' => 3176,
                'song_id' => 811,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:16',
                'updated_at' => '2019-10-31 23:40:16',
            ),
            176 => 
            array (
                'id' => 3177,
                'song_id' => 811,
                'tag_id' => 139,
                'created_at' => '2019-10-31 23:40:16',
                'updated_at' => '2019-10-31 23:40:16',
            ),
            177 => 
            array (
                'id' => 3178,
                'song_id' => 811,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:16',
                'updated_at' => '2019-10-31 23:40:16',
            ),
            178 => 
            array (
                'id' => 3179,
                'song_id' => 812,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:17',
                'updated_at' => '2019-10-31 23:40:17',
            ),
            179 => 
            array (
                'id' => 3180,
                'song_id' => 812,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:17',
                'updated_at' => '2019-10-31 23:40:17',
            ),
            180 => 
            array (
                'id' => 3181,
                'song_id' => 812,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:17',
                'updated_at' => '2019-10-31 23:40:17',
            ),
            181 => 
            array (
                'id' => 3182,
                'song_id' => 812,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:17',
                'updated_at' => '2019-10-31 23:40:17',
            ),
            182 => 
            array (
                'id' => 3183,
                'song_id' => 813,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:18',
                'updated_at' => '2019-10-31 23:40:18',
            ),
            183 => 
            array (
                'id' => 3184,
                'song_id' => 813,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:18',
                'updated_at' => '2019-10-31 23:40:18',
            ),
            184 => 
            array (
                'id' => 3185,
                'song_id' => 813,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:18',
                'updated_at' => '2019-10-31 23:40:18',
            ),
            185 => 
            array (
                'id' => 3186,
                'song_id' => 813,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:18',
                'updated_at' => '2019-10-31 23:40:18',
            ),
            186 => 
            array (
                'id' => 3187,
                'song_id' => 814,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:20',
                'updated_at' => '2019-10-31 23:40:20',
            ),
            187 => 
            array (
                'id' => 3188,
                'song_id' => 814,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:20',
                'updated_at' => '2019-10-31 23:40:20',
            ),
            188 => 
            array (
                'id' => 3189,
                'song_id' => 814,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:20',
                'updated_at' => '2019-10-31 23:40:20',
            ),
            189 => 
            array (
                'id' => 3190,
                'song_id' => 814,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:20',
                'updated_at' => '2019-10-31 23:40:20',
            ),
            190 => 
            array (
                'id' => 3191,
                'song_id' => 815,
                'tag_id' => 53,
                'created_at' => '2019-10-31 23:40:21',
                'updated_at' => '2019-10-31 23:40:21',
            ),
            191 => 
            array (
                'id' => 3192,
                'song_id' => 815,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:21',
                'updated_at' => '2019-10-31 23:40:21',
            ),
            192 => 
            array (
                'id' => 3193,
                'song_id' => 815,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:40:21',
                'updated_at' => '2019-10-31 23:40:21',
            ),
            193 => 
            array (
                'id' => 3194,
                'song_id' => 815,
                'tag_id' => 54,
                'created_at' => '2019-10-31 23:40:21',
                'updated_at' => '2019-10-31 23:40:21',
            ),
            194 => 
            array (
                'id' => 3195,
                'song_id' => 815,
                'tag_id' => 67,
                'created_at' => '2019-10-31 23:40:21',
                'updated_at' => '2019-10-31 23:40:21',
            ),
            195 => 
            array (
                'id' => 3196,
                'song_id' => 816,
                'tag_id' => 53,
                'created_at' => '2019-10-31 23:40:23',
                'updated_at' => '2019-10-31 23:40:23',
            ),
            196 => 
            array (
                'id' => 3197,
                'song_id' => 816,
                'tag_id' => 54,
                'created_at' => '2019-10-31 23:40:23',
                'updated_at' => '2019-10-31 23:40:23',
            ),
            197 => 
            array (
                'id' => 3198,
                'song_id' => 816,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:40:23',
                'updated_at' => '2019-10-31 23:40:23',
            ),
            198 => 
            array (
                'id' => 3199,
                'song_id' => 816,
                'tag_id' => 55,
                'created_at' => '2019-10-31 23:40:23',
                'updated_at' => '2019-10-31 23:40:23',
            ),
            199 => 
            array (
                'id' => 3200,
                'song_id' => 816,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:23',
                'updated_at' => '2019-10-31 23:40:23',
            ),
            200 => 
            array (
                'id' => 3201,
                'song_id' => 817,
                'tag_id' => 53,
                'created_at' => '2019-10-31 23:40:24',
                'updated_at' => '2019-10-31 23:40:24',
            ),
            201 => 
            array (
                'id' => 3202,
                'song_id' => 817,
                'tag_id' => 54,
                'created_at' => '2019-10-31 23:40:24',
                'updated_at' => '2019-10-31 23:40:24',
            ),
            202 => 
            array (
                'id' => 3203,
                'song_id' => 817,
                'tag_id' => 55,
                'created_at' => '2019-10-31 23:40:24',
                'updated_at' => '2019-10-31 23:40:24',
            ),
            203 => 
            array (
                'id' => 3204,
                'song_id' => 817,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:40:24',
                'updated_at' => '2019-10-31 23:40:24',
            ),
            204 => 
            array (
                'id' => 3205,
                'song_id' => 817,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:24',
                'updated_at' => '2019-10-31 23:40:24',
            ),
            205 => 
            array (
                'id' => 3206,
                'song_id' => 818,
                'tag_id' => 53,
                'created_at' => '2019-10-31 23:40:26',
                'updated_at' => '2019-10-31 23:40:26',
            ),
            206 => 
            array (
                'id' => 3207,
                'song_id' => 818,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:40:26',
                'updated_at' => '2019-10-31 23:40:26',
            ),
            207 => 
            array (
                'id' => 3208,
                'song_id' => 818,
                'tag_id' => 54,
                'created_at' => '2019-10-31 23:40:26',
                'updated_at' => '2019-10-31 23:40:26',
            ),
            208 => 
            array (
                'id' => 3209,
                'song_id' => 818,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:26',
                'updated_at' => '2019-10-31 23:40:26',
            ),
            209 => 
            array (
                'id' => 3210,
                'song_id' => 818,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:26',
                'updated_at' => '2019-10-31 23:40:26',
            ),
            210 => 
            array (
                'id' => 3211,
                'song_id' => 819,
                'tag_id' => 53,
                'created_at' => '2019-10-31 23:40:27',
                'updated_at' => '2019-10-31 23:40:27',
            ),
            211 => 
            array (
                'id' => 3212,
                'song_id' => 819,
                'tag_id' => 54,
                'created_at' => '2019-10-31 23:40:27',
                'updated_at' => '2019-10-31 23:40:27',
            ),
            212 => 
            array (
                'id' => 3213,
                'song_id' => 819,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:27',
                'updated_at' => '2019-10-31 23:40:27',
            ),
            213 => 
            array (
                'id' => 3214,
                'song_id' => 819,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:27',
                'updated_at' => '2019-10-31 23:40:27',
            ),
            214 => 
            array (
                'id' => 3215,
                'song_id' => 820,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:29',
                'updated_at' => '2019-10-31 23:40:29',
            ),
            215 => 
            array (
                'id' => 3216,
                'song_id' => 820,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:40:29',
                'updated_at' => '2019-10-31 23:40:29',
            ),
            216 => 
            array (
                'id' => 3217,
                'song_id' => 820,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:40:29',
                'updated_at' => '2019-10-31 23:40:29',
            ),
            217 => 
            array (
                'id' => 3218,
                'song_id' => 820,
                'tag_id' => 45,
                'created_at' => '2019-10-31 23:40:29',
                'updated_at' => '2019-10-31 23:40:29',
            ),
            218 => 
            array (
                'id' => 3219,
                'song_id' => 821,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:30',
                'updated_at' => '2019-10-31 23:40:30',
            ),
            219 => 
            array (
                'id' => 3220,
                'song_id' => 822,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:32',
                'updated_at' => '2019-10-31 23:40:32',
            ),
            220 => 
            array (
                'id' => 3221,
                'song_id' => 822,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:40:32',
                'updated_at' => '2019-10-31 23:40:32',
            ),
            221 => 
            array (
                'id' => 3222,
                'song_id' => 822,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:40:32',
                'updated_at' => '2019-10-31 23:40:32',
            ),
            222 => 
            array (
                'id' => 3223,
                'song_id' => 822,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:32',
                'updated_at' => '2019-10-31 23:40:32',
            ),
            223 => 
            array (
                'id' => 3224,
                'song_id' => 823,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:34',
                'updated_at' => '2019-10-31 23:40:34',
            ),
            224 => 
            array (
                'id' => 3225,
                'song_id' => 823,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:40:34',
                'updated_at' => '2019-10-31 23:40:34',
            ),
            225 => 
            array (
                'id' => 3226,
                'song_id' => 823,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:40:34',
                'updated_at' => '2019-10-31 23:40:34',
            ),
            226 => 
            array (
                'id' => 3227,
                'song_id' => 823,
                'tag_id' => 10,
                'created_at' => '2019-10-31 23:40:34',
                'updated_at' => '2019-10-31 23:40:34',
            ),
            227 => 
            array (
                'id' => 3228,
                'song_id' => 824,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:35',
                'updated_at' => '2019-10-31 23:40:35',
            ),
            228 => 
            array (
                'id' => 3229,
                'song_id' => 824,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:35',
                'updated_at' => '2019-10-31 23:40:35',
            ),
            229 => 
            array (
                'id' => 3230,
                'song_id' => 824,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:35',
                'updated_at' => '2019-10-31 23:40:35',
            ),
            230 => 
            array (
                'id' => 3231,
                'song_id' => 824,
                'tag_id' => 207,
                'created_at' => '2019-10-31 23:40:35',
                'updated_at' => '2019-10-31 23:40:35',
            ),
            231 => 
            array (
                'id' => 3232,
                'song_id' => 825,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:37',
                'updated_at' => '2019-10-31 23:40:37',
            ),
            232 => 
            array (
                'id' => 3233,
                'song_id' => 825,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:37',
                'updated_at' => '2019-10-31 23:40:37',
            ),
            233 => 
            array (
                'id' => 3234,
                'song_id' => 825,
                'tag_id' => 148,
                'created_at' => '2019-10-31 23:40:37',
                'updated_at' => '2019-10-31 23:40:37',
            ),
            234 => 
            array (
                'id' => 3235,
                'song_id' => 825,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:37',
                'updated_at' => '2019-10-31 23:40:37',
            ),
            235 => 
            array (
                'id' => 3236,
                'song_id' => 825,
                'tag_id' => 207,
                'created_at' => '2019-10-31 23:40:37',
                'updated_at' => '2019-10-31 23:40:37',
            ),
            236 => 
            array (
                'id' => 3237,
                'song_id' => 826,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:38',
                'updated_at' => '2019-10-31 23:40:38',
            ),
            237 => 
            array (
                'id' => 3238,
                'song_id' => 826,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:38',
                'updated_at' => '2019-10-31 23:40:38',
            ),
            238 => 
            array (
                'id' => 3239,
                'song_id' => 826,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:38',
                'updated_at' => '2019-10-31 23:40:38',
            ),
            239 => 
            array (
                'id' => 3240,
                'song_id' => 826,
                'tag_id' => 207,
                'created_at' => '2019-10-31 23:40:38',
                'updated_at' => '2019-10-31 23:40:38',
            ),
            240 => 
            array (
                'id' => 3241,
                'song_id' => 827,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:40',
                'updated_at' => '2019-10-31 23:40:40',
            ),
            241 => 
            array (
                'id' => 3242,
                'song_id' => 827,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:40',
                'updated_at' => '2019-10-31 23:40:40',
            ),
            242 => 
            array (
                'id' => 3243,
                'song_id' => 827,
                'tag_id' => 148,
                'created_at' => '2019-10-31 23:40:40',
                'updated_at' => '2019-10-31 23:40:40',
            ),
            243 => 
            array (
                'id' => 3244,
                'song_id' => 827,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:40',
                'updated_at' => '2019-10-31 23:40:40',
            ),
            244 => 
            array (
                'id' => 3245,
                'song_id' => 828,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:40:41',
                'updated_at' => '2019-10-31 23:40:41',
            ),
            245 => 
            array (
                'id' => 3246,
                'song_id' => 828,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:40:41',
                'updated_at' => '2019-10-31 23:40:41',
            ),
            246 => 
            array (
                'id' => 3247,
                'song_id' => 828,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:40:41',
                'updated_at' => '2019-10-31 23:40:41',
            ),
            247 => 
            array (
                'id' => 3248,
                'song_id' => 828,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:40:41',
                'updated_at' => '2019-10-31 23:40:41',
            ),
            248 => 
            array (
                'id' => 3249,
                'song_id' => 828,
                'tag_id' => 207,
                'created_at' => '2019-10-31 23:40:41',
                'updated_at' => '2019-10-31 23:40:41',
            ),
            249 => 
            array (
                'id' => 3250,
                'song_id' => 829,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:43',
                'updated_at' => '2019-10-31 23:40:43',
            ),
            250 => 
            array (
                'id' => 3251,
                'song_id' => 829,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:43',
                'updated_at' => '2019-10-31 23:40:43',
            ),
            251 => 
            array (
                'id' => 3252,
                'song_id' => 829,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:40:43',
                'updated_at' => '2019-10-31 23:40:43',
            ),
            252 => 
            array (
                'id' => 3253,
                'song_id' => 829,
                'tag_id' => 47,
                'created_at' => '2019-10-31 23:40:43',
                'updated_at' => '2019-10-31 23:40:43',
            ),
            253 => 
            array (
                'id' => 3254,
                'song_id' => 829,
                'tag_id' => 106,
                'created_at' => '2019-10-31 23:40:43',
                'updated_at' => '2019-10-31 23:40:43',
            ),
            254 => 
            array (
                'id' => 3255,
                'song_id' => 830,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:40:44',
                'updated_at' => '2019-10-31 23:40:44',
            ),
            255 => 
            array (
                'id' => 3256,
                'song_id' => 830,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:44',
                'updated_at' => '2019-10-31 23:40:44',
            ),
            256 => 
            array (
                'id' => 3257,
                'song_id' => 830,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:40:44',
                'updated_at' => '2019-10-31 23:40:44',
            ),
            257 => 
            array (
                'id' => 3258,
                'song_id' => 830,
                'tag_id' => 95,
                'created_at' => '2019-10-31 23:40:44',
                'updated_at' => '2019-10-31 23:40:44',
            ),
            258 => 
            array (
                'id' => 3259,
                'song_id' => 831,
                'tag_id' => 417,
                'created_at' => '2019-10-31 23:40:46',
                'updated_at' => '2019-10-31 23:40:46',
            ),
            259 => 
            array (
                'id' => 3260,
                'song_id' => 831,
                'tag_id' => 137,
                'created_at' => '2019-10-31 23:40:46',
                'updated_at' => '2019-10-31 23:40:46',
            ),
            260 => 
            array (
                'id' => 3261,
                'song_id' => 831,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:46',
                'updated_at' => '2019-10-31 23:40:46',
            ),
            261 => 
            array (
                'id' => 3262,
                'song_id' => 831,
                'tag_id' => 62,
                'created_at' => '2019-10-31 23:40:46',
                'updated_at' => '2019-10-31 23:40:46',
            ),
            262 => 
            array (
                'id' => 3263,
                'song_id' => 831,
                'tag_id' => 5,
                'created_at' => '2019-10-31 23:40:46',
                'updated_at' => '2019-10-31 23:40:46',
            ),
            263 => 
            array (
                'id' => 3264,
                'song_id' => 832,
                'tag_id' => 418,
                'created_at' => '2019-10-31 23:40:48',
                'updated_at' => '2019-10-31 23:40:48',
            ),
            264 => 
            array (
                'id' => 3265,
                'song_id' => 832,
                'tag_id' => 137,
                'created_at' => '2019-10-31 23:40:48',
                'updated_at' => '2019-10-31 23:40:48',
            ),
            265 => 
            array (
                'id' => 3266,
                'song_id' => 832,
                'tag_id' => 62,
                'created_at' => '2019-10-31 23:40:48',
                'updated_at' => '2019-10-31 23:40:48',
            ),
            266 => 
            array (
                'id' => 3267,
                'song_id' => 832,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:48',
                'updated_at' => '2019-10-31 23:40:48',
            ),
            267 => 
            array (
                'id' => 3268,
                'song_id' => 832,
                'tag_id' => 5,
                'created_at' => '2019-10-31 23:40:48',
                'updated_at' => '2019-10-31 23:40:48',
            ),
            268 => 
            array (
                'id' => 3269,
                'song_id' => 833,
                'tag_id' => 23,
                'created_at' => '2019-10-31 23:40:49',
                'updated_at' => '2019-10-31 23:40:49',
            ),
            269 => 
            array (
                'id' => 3270,
                'song_id' => 833,
                'tag_id' => 16,
                'created_at' => '2019-10-31 23:40:49',
                'updated_at' => '2019-10-31 23:40:49',
            ),
            270 => 
            array (
                'id' => 3271,
                'song_id' => 833,
                'tag_id' => 286,
                'created_at' => '2019-10-31 23:40:49',
                'updated_at' => '2019-10-31 23:40:49',
            ),
            271 => 
            array (
                'id' => 3272,
                'song_id' => 833,
                'tag_id' => 97,
                'created_at' => '2019-10-31 23:40:49',
                'updated_at' => '2019-10-31 23:40:49',
            ),
            272 => 
            array (
                'id' => 3273,
                'song_id' => 834,
                'tag_id' => 419,
                'created_at' => '2019-10-31 23:40:51',
                'updated_at' => '2019-10-31 23:40:51',
            ),
            273 => 
            array (
                'id' => 3274,
                'song_id' => 834,
                'tag_id' => 62,
                'created_at' => '2019-10-31 23:40:51',
                'updated_at' => '2019-10-31 23:40:51',
            ),
            274 => 
            array (
                'id' => 3275,
                'song_id' => 834,
                'tag_id' => 78,
                'created_at' => '2019-10-31 23:40:51',
                'updated_at' => '2019-10-31 23:40:51',
            ),
            275 => 
            array (
                'id' => 3276,
                'song_id' => 834,
                'tag_id' => 137,
                'created_at' => '2019-10-31 23:40:51',
                'updated_at' => '2019-10-31 23:40:51',
            ),
            276 => 
            array (
                'id' => 3277,
                'song_id' => 834,
                'tag_id' => 418,
                'created_at' => '2019-10-31 23:40:51',
                'updated_at' => '2019-10-31 23:40:51',
            ),
            277 => 
            array (
                'id' => 3278,
                'song_id' => 835,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:40:52',
                'updated_at' => '2019-10-31 23:40:52',
            ),
            278 => 
            array (
                'id' => 3279,
                'song_id' => 835,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:40:52',
                'updated_at' => '2019-10-31 23:40:52',
            ),
            279 => 
            array (
                'id' => 3280,
                'song_id' => 835,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:52',
                'updated_at' => '2019-10-31 23:40:52',
            ),
            280 => 
            array (
                'id' => 3281,
                'song_id' => 835,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:40:52',
                'updated_at' => '2019-10-31 23:40:52',
            ),
            281 => 
            array (
                'id' => 3282,
                'song_id' => 836,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:40:54',
                'updated_at' => '2019-10-31 23:40:54',
            ),
            282 => 
            array (
                'id' => 3283,
                'song_id' => 836,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:40:54',
                'updated_at' => '2019-10-31 23:40:54',
            ),
            283 => 
            array (
                'id' => 3284,
                'song_id' => 836,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:54',
                'updated_at' => '2019-10-31 23:40:54',
            ),
            284 => 
            array (
                'id' => 3285,
                'song_id' => 836,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:40:54',
                'updated_at' => '2019-10-31 23:40:54',
            ),
            285 => 
            array (
                'id' => 3286,
                'song_id' => 837,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:40:55',
                'updated_at' => '2019-10-31 23:40:55',
            ),
            286 => 
            array (
                'id' => 3287,
                'song_id' => 837,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:40:55',
                'updated_at' => '2019-10-31 23:40:55',
            ),
            287 => 
            array (
                'id' => 3288,
                'song_id' => 837,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:55',
                'updated_at' => '2019-10-31 23:40:55',
            ),
            288 => 
            array (
                'id' => 3289,
                'song_id' => 837,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:40:55',
                'updated_at' => '2019-10-31 23:40:55',
            ),
            289 => 
            array (
                'id' => 3290,
                'song_id' => 838,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:40:57',
                'updated_at' => '2019-10-31 23:40:57',
            ),
            290 => 
            array (
                'id' => 3291,
                'song_id' => 838,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:40:57',
                'updated_at' => '2019-10-31 23:40:57',
            ),
            291 => 
            array (
                'id' => 3292,
                'song_id' => 838,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:57',
                'updated_at' => '2019-10-31 23:40:57',
            ),
            292 => 
            array (
                'id' => 3293,
                'song_id' => 838,
                'tag_id' => 122,
                'created_at' => '2019-10-31 23:40:57',
                'updated_at' => '2019-10-31 23:40:57',
            ),
            293 => 
            array (
                'id' => 3294,
                'song_id' => 839,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:40:58',
                'updated_at' => '2019-10-31 23:40:58',
            ),
            294 => 
            array (
                'id' => 3295,
                'song_id' => 839,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:40:58',
                'updated_at' => '2019-10-31 23:40:58',
            ),
            295 => 
            array (
                'id' => 3296,
                'song_id' => 839,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:40:58',
                'updated_at' => '2019-10-31 23:40:58',
            ),
            296 => 
            array (
                'id' => 3297,
                'song_id' => 839,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:40:58',
                'updated_at' => '2019-10-31 23:40:58',
            ),
            297 => 
            array (
                'id' => 3298,
                'song_id' => 840,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:00',
                'updated_at' => '2019-10-31 23:41:00',
            ),
            298 => 
            array (
                'id' => 3299,
                'song_id' => 840,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:41:00',
                'updated_at' => '2019-10-31 23:41:00',
            ),
            299 => 
            array (
                'id' => 3300,
                'song_id' => 840,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:00',
                'updated_at' => '2019-10-31 23:41:00',
            ),
            300 => 
            array (
                'id' => 3301,
                'song_id' => 840,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:00',
                'updated_at' => '2019-10-31 23:41:00',
            ),
            301 => 
            array (
                'id' => 3302,
                'song_id' => 841,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:01',
                'updated_at' => '2019-10-31 23:41:01',
            ),
            302 => 
            array (
                'id' => 3303,
                'song_id' => 841,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:01',
                'updated_at' => '2019-10-31 23:41:01',
            ),
            303 => 
            array (
                'id' => 3304,
                'song_id' => 841,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:41:01',
                'updated_at' => '2019-10-31 23:41:01',
            ),
            304 => 
            array (
                'id' => 3305,
                'song_id' => 841,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:01',
                'updated_at' => '2019-10-31 23:41:01',
            ),
            305 => 
            array (
                'id' => 3306,
                'song_id' => 842,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:03',
                'updated_at' => '2019-10-31 23:41:03',
            ),
            306 => 
            array (
                'id' => 3307,
                'song_id' => 842,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:41:03',
                'updated_at' => '2019-10-31 23:41:03',
            ),
            307 => 
            array (
                'id' => 3308,
                'song_id' => 842,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:03',
                'updated_at' => '2019-10-31 23:41:03',
            ),
            308 => 
            array (
                'id' => 3309,
                'song_id' => 842,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:41:03',
                'updated_at' => '2019-10-31 23:41:03',
            ),
            309 => 
            array (
                'id' => 3310,
                'song_id' => 843,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:05',
                'updated_at' => '2019-10-31 23:41:05',
            ),
            310 => 
            array (
                'id' => 3311,
                'song_id' => 843,
                'tag_id' => 21,
                'created_at' => '2019-10-31 23:41:05',
                'updated_at' => '2019-10-31 23:41:05',
            ),
            311 => 
            array (
                'id' => 3312,
                'song_id' => 843,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:05',
                'updated_at' => '2019-10-31 23:41:05',
            ),
            312 => 
            array (
                'id' => 3313,
                'song_id' => 843,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:05',
                'updated_at' => '2019-10-31 23:41:05',
            ),
            313 => 
            array (
                'id' => 3314,
                'song_id' => 844,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:07',
                'updated_at' => '2019-10-31 23:41:07',
            ),
            314 => 
            array (
                'id' => 3315,
                'song_id' => 844,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:07',
                'updated_at' => '2019-10-31 23:41:07',
            ),
            315 => 
            array (
                'id' => 3316,
                'song_id' => 844,
                'tag_id' => 34,
                'created_at' => '2019-10-31 23:41:07',
                'updated_at' => '2019-10-31 23:41:07',
            ),
            316 => 
            array (
                'id' => 3317,
                'song_id' => 844,
                'tag_id' => 10,
                'created_at' => '2019-10-31 23:41:07',
                'updated_at' => '2019-10-31 23:41:07',
            ),
            317 => 
            array (
                'id' => 3318,
                'song_id' => 844,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:07',
                'updated_at' => '2019-10-31 23:41:07',
            ),
            318 => 
            array (
                'id' => 3319,
                'song_id' => 845,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:08',
                'updated_at' => '2019-10-31 23:41:08',
            ),
            319 => 
            array (
                'id' => 3320,
                'song_id' => 845,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:08',
                'updated_at' => '2019-10-31 23:41:08',
            ),
            320 => 
            array (
                'id' => 3321,
                'song_id' => 845,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:08',
                'updated_at' => '2019-10-31 23:41:08',
            ),
            321 => 
            array (
                'id' => 3322,
                'song_id' => 845,
                'tag_id' => 17,
                'created_at' => '2019-10-31 23:41:08',
                'updated_at' => '2019-10-31 23:41:08',
            ),
            322 => 
            array (
                'id' => 3323,
                'song_id' => 847,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:11',
                'updated_at' => '2019-10-31 23:41:11',
            ),
            323 => 
            array (
                'id' => 3324,
                'song_id' => 847,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:11',
                'updated_at' => '2019-10-31 23:41:11',
            ),
            324 => 
            array (
                'id' => 3325,
                'song_id' => 847,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:11',
                'updated_at' => '2019-10-31 23:41:11',
            ),
            325 => 
            array (
                'id' => 3326,
                'song_id' => 847,
                'tag_id' => 43,
                'created_at' => '2019-10-31 23:41:11',
                'updated_at' => '2019-10-31 23:41:11',
            ),
            326 => 
            array (
                'id' => 3327,
                'song_id' => 848,
                'tag_id' => 7,
                'created_at' => '2019-10-31 23:41:13',
                'updated_at' => '2019-10-31 23:41:13',
            ),
            327 => 
            array (
                'id' => 3328,
                'song_id' => 848,
                'tag_id' => 44,
                'created_at' => '2019-10-31 23:41:13',
                'updated_at' => '2019-10-31 23:41:13',
            ),
            328 => 
            array (
                'id' => 3329,
                'song_id' => 848,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:13',
                'updated_at' => '2019-10-31 23:41:13',
            ),
            329 => 
            array (
                'id' => 3330,
                'song_id' => 848,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:13',
                'updated_at' => '2019-10-31 23:41:13',
            ),
            330 => 
            array (
                'id' => 3331,
                'song_id' => 848,
                'tag_id' => 43,
                'created_at' => '2019-10-31 23:41:13',
                'updated_at' => '2019-10-31 23:41:13',
            ),
            331 => 
            array (
                'id' => 3332,
                'song_id' => 849,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:14',
                'updated_at' => '2019-10-31 23:41:14',
            ),
            332 => 
            array (
                'id' => 3333,
                'song_id' => 849,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:14',
                'updated_at' => '2019-10-31 23:41:14',
            ),
            333 => 
            array (
                'id' => 3334,
                'song_id' => 849,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:14',
                'updated_at' => '2019-10-31 23:41:14',
            ),
            334 => 
            array (
                'id' => 3335,
                'song_id' => 849,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:14',
                'updated_at' => '2019-10-31 23:41:14',
            ),
            335 => 
            array (
                'id' => 3336,
                'song_id' => 849,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:41:14',
                'updated_at' => '2019-10-31 23:41:14',
            ),
            336 => 
            array (
                'id' => 3337,
                'song_id' => 850,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:16',
                'updated_at' => '2019-10-31 23:41:16',
            ),
            337 => 
            array (
                'id' => 3338,
                'song_id' => 850,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:16',
                'updated_at' => '2019-10-31 23:41:16',
            ),
            338 => 
            array (
                'id' => 3339,
                'song_id' => 850,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:16',
                'updated_at' => '2019-10-31 23:41:16',
            ),
            339 => 
            array (
                'id' => 3340,
                'song_id' => 850,
                'tag_id' => 39,
                'created_at' => '2019-10-31 23:41:16',
                'updated_at' => '2019-10-31 23:41:16',
            ),
            340 => 
            array (
                'id' => 3341,
                'song_id' => 850,
                'tag_id' => 135,
                'created_at' => '2019-10-31 23:41:16',
                'updated_at' => '2019-10-31 23:41:16',
            ),
            341 => 
            array (
                'id' => 3342,
                'song_id' => 851,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:18',
                'updated_at' => '2019-10-31 23:41:18',
            ),
            342 => 
            array (
                'id' => 3343,
                'song_id' => 851,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:18',
                'updated_at' => '2019-10-31 23:41:18',
            ),
            343 => 
            array (
                'id' => 3344,
                'song_id' => 851,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:18',
                'updated_at' => '2019-10-31 23:41:18',
            ),
            344 => 
            array (
                'id' => 3345,
                'song_id' => 851,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:18',
                'updated_at' => '2019-10-31 23:41:18',
            ),
            345 => 
            array (
                'id' => 3346,
                'song_id' => 852,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:19',
                'updated_at' => '2019-10-31 23:41:19',
            ),
            346 => 
            array (
                'id' => 3347,
                'song_id' => 852,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:19',
                'updated_at' => '2019-10-31 23:41:19',
            ),
            347 => 
            array (
                'id' => 3348,
                'song_id' => 852,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:19',
                'updated_at' => '2019-10-31 23:41:19',
            ),
            348 => 
            array (
                'id' => 3349,
                'song_id' => 852,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:19',
                'updated_at' => '2019-10-31 23:41:19',
            ),
            349 => 
            array (
                'id' => 3350,
                'song_id' => 852,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:41:19',
                'updated_at' => '2019-10-31 23:41:19',
            ),
            350 => 
            array (
                'id' => 3351,
                'song_id' => 853,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:21',
                'updated_at' => '2019-10-31 23:41:21',
            ),
            351 => 
            array (
                'id' => 3352,
                'song_id' => 853,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:21',
                'updated_at' => '2019-10-31 23:41:21',
            ),
            352 => 
            array (
                'id' => 3353,
                'song_id' => 853,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:21',
                'updated_at' => '2019-10-31 23:41:21',
            ),
            353 => 
            array (
                'id' => 3354,
                'song_id' => 853,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:21',
                'updated_at' => '2019-10-31 23:41:21',
            ),
            354 => 
            array (
                'id' => 3355,
                'song_id' => 853,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:41:21',
                'updated_at' => '2019-10-31 23:41:21',
            ),
            355 => 
            array (
                'id' => 3356,
                'song_id' => 854,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:22',
                'updated_at' => '2019-10-31 23:41:22',
            ),
            356 => 
            array (
                'id' => 3357,
                'song_id' => 854,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:22',
                'updated_at' => '2019-10-31 23:41:22',
            ),
            357 => 
            array (
                'id' => 3358,
                'song_id' => 854,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:22',
                'updated_at' => '2019-10-31 23:41:22',
            ),
            358 => 
            array (
                'id' => 3359,
                'song_id' => 854,
                'tag_id' => 135,
                'created_at' => '2019-10-31 23:41:22',
                'updated_at' => '2019-10-31 23:41:22',
            ),
            359 => 
            array (
                'id' => 3360,
                'song_id' => 854,
                'tag_id' => 24,
                'created_at' => '2019-10-31 23:41:22',
                'updated_at' => '2019-10-31 23:41:22',
            ),
            360 => 
            array (
                'id' => 3361,
                'song_id' => 855,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:24',
                'updated_at' => '2019-10-31 23:41:24',
            ),
            361 => 
            array (
                'id' => 3362,
                'song_id' => 855,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:24',
                'updated_at' => '2019-10-31 23:41:24',
            ),
            362 => 
            array (
                'id' => 3363,
                'song_id' => 855,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:24',
                'updated_at' => '2019-10-31 23:41:24',
            ),
            363 => 
            array (
                'id' => 3364,
                'song_id' => 855,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:24',
                'updated_at' => '2019-10-31 23:41:24',
            ),
            364 => 
            array (
                'id' => 3365,
                'song_id' => 855,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:24',
                'updated_at' => '2019-10-31 23:41:24',
            ),
            365 => 
            array (
                'id' => 3366,
                'song_id' => 856,
                'tag_id' => 119,
                'created_at' => '2019-10-31 23:41:26',
                'updated_at' => '2019-10-31 23:41:26',
            ),
            366 => 
            array (
                'id' => 3367,
                'song_id' => 856,
                'tag_id' => 287,
                'created_at' => '2019-10-31 23:41:26',
                'updated_at' => '2019-10-31 23:41:26',
            ),
            367 => 
            array (
                'id' => 3368,
                'song_id' => 856,
                'tag_id' => 43,
                'created_at' => '2019-10-31 23:41:26',
                'updated_at' => '2019-10-31 23:41:26',
            ),
            368 => 
            array (
                'id' => 3369,
                'song_id' => 856,
                'tag_id' => 214,
                'created_at' => '2019-10-31 23:41:26',
                'updated_at' => '2019-10-31 23:41:26',
            ),
            369 => 
            array (
                'id' => 3370,
                'song_id' => 856,
                'tag_id' => 17,
                'created_at' => '2019-10-31 23:41:26',
                'updated_at' => '2019-10-31 23:41:26',
            ),
            370 => 
            array (
                'id' => 3371,
                'song_id' => 857,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:27',
                'updated_at' => '2019-10-31 23:41:27',
            ),
            371 => 
            array (
                'id' => 3372,
                'song_id' => 857,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:27',
                'updated_at' => '2019-10-31 23:41:27',
            ),
            372 => 
            array (
                'id' => 3373,
                'song_id' => 857,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:27',
                'updated_at' => '2019-10-31 23:41:27',
            ),
            373 => 
            array (
                'id' => 3374,
                'song_id' => 857,
                'tag_id' => 2,
                'created_at' => '2019-10-31 23:41:27',
                'updated_at' => '2019-10-31 23:41:27',
            ),
            374 => 
            array (
                'id' => 3375,
                'song_id' => 858,
                'tag_id' => 52,
                'created_at' => '2019-10-31 23:41:29',
                'updated_at' => '2019-10-31 23:41:29',
            ),
            375 => 
            array (
                'id' => 3376,
                'song_id' => 858,
                'tag_id' => 42,
                'created_at' => '2019-10-31 23:41:29',
                'updated_at' => '2019-10-31 23:41:29',
            ),
            376 => 
            array (
                'id' => 3377,
                'song_id' => 858,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:29',
                'updated_at' => '2019-10-31 23:41:29',
            ),
            377 => 
            array (
                'id' => 3378,
                'song_id' => 858,
                'tag_id' => 135,
                'created_at' => '2019-10-31 23:41:29',
                'updated_at' => '2019-10-31 23:41:29',
            ),
            378 => 
            array (
                'id' => 3379,
                'song_id' => 858,
                'tag_id' => 18,
                'created_at' => '2019-10-31 23:41:29',
                'updated_at' => '2019-10-31 23:41:29',
            ),
            379 => 
            array (
                'id' => 3380,
                'song_id' => 859,
                'tag_id' => 13,
                'created_at' => '2019-10-31 23:41:30',
                'updated_at' => '2019-10-31 23:41:30',
            ),
            380 => 
            array (
                'id' => 3381,
                'song_id' => 859,
                'tag_id' => 25,
                'created_at' => '2019-10-31 23:41:30',
                'updated_at' => '2019-10-31 23:41:30',
            ),
            381 => 
            array (
                'id' => 3382,
                'song_id' => 859,
                'tag_id' => 14,
                'created_at' => '2019-10-31 23:41:30',
                'updated_at' => '2019-10-31 23:41:30',
            ),
            382 => 
            array (
                'id' => 3383,
                'song_id' => 859,
                'tag_id' => 88,
                'created_at' => '2019-10-31 23:41:30',
                'updated_at' => '2019-10-31 23:41:30',
            ),
            383 => 
            array (
                'id' => 3384,
                'song_id' => 859,
                'tag_id' => 47,
                'created_at' => '2019-10-31 23:41:30',
                'updated_at' => '2019-10-31 23:41:30',
            ),
            384 => 
            array (
                'id' => 3385,
                'song_id' => 860,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:13',
                'updated_at' => '2019-11-01 00:15:13',
            ),
            385 => 
            array (
                'id' => 3386,
                'song_id' => 860,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:13',
                'updated_at' => '2019-11-01 00:15:13',
            ),
            386 => 
            array (
                'id' => 3387,
                'song_id' => 860,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:13',
                'updated_at' => '2019-11-01 00:15:13',
            ),
            387 => 
            array (
                'id' => 3388,
                'song_id' => 860,
                'tag_id' => 16,
                'created_at' => '2019-11-01 00:15:13',
                'updated_at' => '2019-11-01 00:15:13',
            ),
            388 => 
            array (
                'id' => 3389,
                'song_id' => 861,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:15',
                'updated_at' => '2019-11-01 00:15:15',
            ),
            389 => 
            array (
                'id' => 3390,
                'song_id' => 861,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:15',
                'updated_at' => '2019-11-01 00:15:15',
            ),
            390 => 
            array (
                'id' => 3391,
                'song_id' => 861,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:15',
                'updated_at' => '2019-11-01 00:15:15',
            ),
            391 => 
            array (
                'id' => 3392,
                'song_id' => 861,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:15',
                'updated_at' => '2019-11-01 00:15:15',
            ),
            392 => 
            array (
                'id' => 3393,
                'song_id' => 862,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:16',
                'updated_at' => '2019-11-01 00:15:16',
            ),
            393 => 
            array (
                'id' => 3394,
                'song_id' => 862,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:16',
                'updated_at' => '2019-11-01 00:15:16',
            ),
            394 => 
            array (
                'id' => 3395,
                'song_id' => 862,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:16',
                'updated_at' => '2019-11-01 00:15:16',
            ),
            395 => 
            array (
                'id' => 3396,
                'song_id' => 862,
                'tag_id' => 18,
                'created_at' => '2019-11-01 00:15:16',
                'updated_at' => '2019-11-01 00:15:16',
            ),
            396 => 
            array (
                'id' => 3397,
                'song_id' => 863,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:17',
                'updated_at' => '2019-11-01 00:15:17',
            ),
            397 => 
            array (
                'id' => 3398,
                'song_id' => 863,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:17',
                'updated_at' => '2019-11-01 00:15:17',
            ),
            398 => 
            array (
                'id' => 3399,
                'song_id' => 863,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:17',
                'updated_at' => '2019-11-01 00:15:17',
            ),
            399 => 
            array (
                'id' => 3400,
                'song_id' => 863,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:17',
                'updated_at' => '2019-11-01 00:15:17',
            ),
            400 => 
            array (
                'id' => 3401,
                'song_id' => 864,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:19',
                'updated_at' => '2019-11-01 00:15:19',
            ),
            401 => 
            array (
                'id' => 3402,
                'song_id' => 864,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:19',
                'updated_at' => '2019-11-01 00:15:19',
            ),
            402 => 
            array (
                'id' => 3403,
                'song_id' => 864,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:19',
                'updated_at' => '2019-11-01 00:15:19',
            ),
            403 => 
            array (
                'id' => 3404,
                'song_id' => 864,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:19',
                'updated_at' => '2019-11-01 00:15:19',
            ),
            404 => 
            array (
                'id' => 3405,
                'song_id' => 865,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:21',
                'updated_at' => '2019-11-01 00:15:21',
            ),
            405 => 
            array (
                'id' => 3406,
                'song_id' => 865,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:21',
                'updated_at' => '2019-11-01 00:15:21',
            ),
            406 => 
            array (
                'id' => 3407,
                'song_id' => 865,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:21',
                'updated_at' => '2019-11-01 00:15:21',
            ),
            407 => 
            array (
                'id' => 3408,
                'song_id' => 865,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:21',
                'updated_at' => '2019-11-01 00:15:21',
            ),
            408 => 
            array (
                'id' => 3409,
                'song_id' => 866,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:22',
                'updated_at' => '2019-11-01 00:15:22',
            ),
            409 => 
            array (
                'id' => 3410,
                'song_id' => 866,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:22',
                'updated_at' => '2019-11-01 00:15:22',
            ),
            410 => 
            array (
                'id' => 3411,
                'song_id' => 866,
                'tag_id' => 17,
                'created_at' => '2019-11-01 00:15:22',
                'updated_at' => '2019-11-01 00:15:22',
            ),
            411 => 
            array (
                'id' => 3412,
                'song_id' => 866,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:22',
                'updated_at' => '2019-11-01 00:15:22',
            ),
            412 => 
            array (
                'id' => 3413,
                'song_id' => 867,
                'tag_id' => 421,
                'created_at' => '2019-11-01 00:15:24',
                'updated_at' => '2019-11-01 00:15:24',
            ),
            413 => 
            array (
                'id' => 3414,
                'song_id' => 867,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:24',
                'updated_at' => '2019-11-01 00:15:24',
            ),
            414 => 
            array (
                'id' => 3415,
                'song_id' => 867,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:24',
                'updated_at' => '2019-11-01 00:15:24',
            ),
            415 => 
            array (
                'id' => 3416,
                'song_id' => 868,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:25',
                'updated_at' => '2019-11-01 00:15:25',
            ),
            416 => 
            array (
                'id' => 3417,
                'song_id' => 868,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:25',
                'updated_at' => '2019-11-01 00:15:25',
            ),
            417 => 
            array (
                'id' => 3418,
                'song_id' => 868,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:25',
                'updated_at' => '2019-11-01 00:15:25',
            ),
            418 => 
            array (
                'id' => 3419,
                'song_id' => 868,
                'tag_id' => 18,
                'created_at' => '2019-11-01 00:15:25',
                'updated_at' => '2019-11-01 00:15:25',
            ),
            419 => 
            array (
                'id' => 3420,
                'song_id' => 869,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:27',
                'updated_at' => '2019-11-01 00:15:27',
            ),
            420 => 
            array (
                'id' => 3421,
                'song_id' => 869,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:27',
                'updated_at' => '2019-11-01 00:15:27',
            ),
            421 => 
            array (
                'id' => 3422,
                'song_id' => 869,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:27',
                'updated_at' => '2019-11-01 00:15:27',
            ),
            422 => 
            array (
                'id' => 3423,
                'song_id' => 869,
                'tag_id' => 189,
                'created_at' => '2019-11-01 00:15:27',
                'updated_at' => '2019-11-01 00:15:27',
            ),
            423 => 
            array (
                'id' => 3424,
                'song_id' => 870,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:28',
                'updated_at' => '2019-11-01 00:15:28',
            ),
            424 => 
            array (
                'id' => 3425,
                'song_id' => 870,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:28',
                'updated_at' => '2019-11-01 00:15:28',
            ),
            425 => 
            array (
                'id' => 3426,
                'song_id' => 870,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:28',
                'updated_at' => '2019-11-01 00:15:28',
            ),
            426 => 
            array (
                'id' => 3427,
                'song_id' => 870,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:28',
                'updated_at' => '2019-11-01 00:15:28',
            ),
            427 => 
            array (
                'id' => 3428,
                'song_id' => 871,
                'tag_id' => 14,
                'created_at' => '2019-11-01 00:15:30',
                'updated_at' => '2019-11-01 00:15:30',
            ),
            428 => 
            array (
                'id' => 3429,
                'song_id' => 871,
                'tag_id' => 7,
                'created_at' => '2019-11-01 00:15:30',
                'updated_at' => '2019-11-01 00:15:30',
            ),
            429 => 
            array (
                'id' => 3430,
                'song_id' => 871,
                'tag_id' => 13,
                'created_at' => '2019-11-01 00:15:30',
                'updated_at' => '2019-11-01 00:15:30',
            ),
            430 => 
            array (
                'id' => 3431,
                'song_id' => 871,
                'tag_id' => 2,
                'created_at' => '2019-11-01 00:15:30',
                'updated_at' => '2019-11-01 00:15:30',
            ),
            431 => 
            array (
                'id' => 3432,
                'song_id' => 872,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:32',
                'updated_at' => '2020-01-20 21:01:32',
            ),
            432 => 
            array (
                'id' => 3433,
                'song_id' => 872,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:32',
                'updated_at' => '2020-01-20 21:01:32',
            ),
            433 => 
            array (
                'id' => 3434,
                'song_id' => 872,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:01:32',
                'updated_at' => '2020-01-20 21:01:32',
            ),
            434 => 
            array (
                'id' => 3435,
                'song_id' => 872,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:01:32',
                'updated_at' => '2020-01-20 21:01:32',
            ),
            435 => 
            array (
                'id' => 3436,
                'song_id' => 872,
                'tag_id' => 207,
                'created_at' => '2020-01-20 21:01:32',
                'updated_at' => '2020-01-20 21:01:32',
            ),
            436 => 
            array (
                'id' => 3437,
                'song_id' => 874,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:01:35',
                'updated_at' => '2020-01-20 21:01:35',
            ),
            437 => 
            array (
                'id' => 3438,
                'song_id' => 874,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:35',
                'updated_at' => '2020-01-20 21:01:35',
            ),
            438 => 
            array (
                'id' => 3439,
                'song_id' => 874,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:35',
                'updated_at' => '2020-01-20 21:01:35',
            ),
            439 => 
            array (
                'id' => 3440,
                'song_id' => 874,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:01:35',
                'updated_at' => '2020-01-20 21:01:35',
            ),
            440 => 
            array (
                'id' => 3441,
                'song_id' => 875,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:37',
                'updated_at' => '2020-01-20 21:01:37',
            ),
            441 => 
            array (
                'id' => 3442,
                'song_id' => 875,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:37',
                'updated_at' => '2020-01-20 21:01:37',
            ),
            442 => 
            array (
                'id' => 3443,
                'song_id' => 875,
                'tag_id' => 34,
                'created_at' => '2020-01-20 21:01:37',
                'updated_at' => '2020-01-20 21:01:37',
            ),
            443 => 
            array (
                'id' => 3444,
                'song_id' => 875,
                'tag_id' => 236,
                'created_at' => '2020-01-20 21:01:37',
                'updated_at' => '2020-01-20 21:01:37',
            ),
            444 => 
            array (
                'id' => 3445,
                'song_id' => 876,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:38',
                'updated_at' => '2020-01-20 21:01:38',
            ),
            445 => 
            array (
                'id' => 3446,
                'song_id' => 876,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:01:38',
                'updated_at' => '2020-01-20 21:01:38',
            ),
            446 => 
            array (
                'id' => 3447,
                'song_id' => 876,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:38',
                'updated_at' => '2020-01-20 21:01:38',
            ),
            447 => 
            array (
                'id' => 3448,
                'song_id' => 876,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:38',
                'updated_at' => '2020-01-20 21:01:38',
            ),
            448 => 
            array (
                'id' => 3449,
                'song_id' => 877,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:39',
                'updated_at' => '2020-01-20 21:01:39',
            ),
            449 => 
            array (
                'id' => 3450,
                'song_id' => 877,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:39',
                'updated_at' => '2020-01-20 21:01:39',
            ),
            450 => 
            array (
                'id' => 3451,
                'song_id' => 877,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:39',
                'updated_at' => '2020-01-20 21:01:39',
            ),
            451 => 
            array (
                'id' => 3452,
                'song_id' => 877,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:01:39',
                'updated_at' => '2020-01-20 21:01:39',
            ),
            452 => 
            array (
                'id' => 3453,
                'song_id' => 878,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:41',
                'updated_at' => '2020-01-20 21:01:41',
            ),
            453 => 
            array (
                'id' => 3454,
                'song_id' => 878,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:41',
                'updated_at' => '2020-01-20 21:01:41',
            ),
            454 => 
            array (
                'id' => 3455,
                'song_id' => 878,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:41',
                'updated_at' => '2020-01-20 21:01:41',
            ),
            455 => 
            array (
                'id' => 3456,
                'song_id' => 878,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:01:41',
                'updated_at' => '2020-01-20 21:01:41',
            ),
            456 => 
            array (
                'id' => 3457,
                'song_id' => 879,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:42',
                'updated_at' => '2020-01-20 21:01:42',
            ),
            457 => 
            array (
                'id' => 3458,
                'song_id' => 879,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:42',
                'updated_at' => '2020-01-20 21:01:42',
            ),
            458 => 
            array (
                'id' => 3459,
                'song_id' => 879,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:01:42',
                'updated_at' => '2020-01-20 21:01:42',
            ),
            459 => 
            array (
                'id' => 3460,
                'song_id' => 879,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:42',
                'updated_at' => '2020-01-20 21:01:42',
            ),
            460 => 
            array (
                'id' => 3461,
                'song_id' => 880,
                'tag_id' => 1,
                'created_at' => '2020-01-20 21:01:43',
                'updated_at' => '2020-01-20 21:01:43',
            ),
            461 => 
            array (
                'id' => 3462,
                'song_id' => 880,
                'tag_id' => 3,
                'created_at' => '2020-01-20 21:01:43',
                'updated_at' => '2020-01-20 21:01:43',
            ),
            462 => 
            array (
                'id' => 3463,
                'song_id' => 880,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:43',
                'updated_at' => '2020-01-20 21:01:43',
            ),
            463 => 
            array (
                'id' => 3464,
                'song_id' => 880,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:43',
                'updated_at' => '2020-01-20 21:01:43',
            ),
            464 => 
            array (
                'id' => 3465,
                'song_id' => 880,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:01:43',
                'updated_at' => '2020-01-20 21:01:43',
            ),
            465 => 
            array (
                'id' => 3466,
                'song_id' => 881,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:45',
                'updated_at' => '2020-01-20 21:01:45',
            ),
            466 => 
            array (
                'id' => 3467,
                'song_id' => 881,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:45',
                'updated_at' => '2020-01-20 21:01:45',
            ),
            467 => 
            array (
                'id' => 3468,
                'song_id' => 881,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:01:45',
                'updated_at' => '2020-01-20 21:01:45',
            ),
            468 => 
            array (
                'id' => 3469,
                'song_id' => 881,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:45',
                'updated_at' => '2020-01-20 21:01:45',
            ),
            469 => 
            array (
                'id' => 3470,
                'song_id' => 881,
                'tag_id' => 34,
                'created_at' => '2020-01-20 21:01:45',
                'updated_at' => '2020-01-20 21:01:45',
            ),
            470 => 
            array (
                'id' => 3471,
                'song_id' => 883,
                'tag_id' => 422,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            471 => 
            array (
                'id' => 3472,
                'song_id' => 883,
                'tag_id' => 10,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            472 => 
            array (
                'id' => 3473,
                'song_id' => 883,
                'tag_id' => 269,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            473 => 
            array (
                'id' => 3474,
                'song_id' => 883,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            474 => 
            array (
                'id' => 3475,
                'song_id' => 883,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:01:47',
                'updated_at' => '2020-01-20 21:01:47',
            ),
            475 => 
            array (
                'id' => 3476,
                'song_id' => 885,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:49',
                'updated_at' => '2020-01-20 21:01:49',
            ),
            476 => 
            array (
                'id' => 3477,
                'song_id' => 885,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:49',
                'updated_at' => '2020-01-20 21:01:49',
            ),
            477 => 
            array (
                'id' => 3478,
                'song_id' => 885,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:49',
                'updated_at' => '2020-01-20 21:01:49',
            ),
            478 => 
            array (
                'id' => 3479,
                'song_id' => 885,
                'tag_id' => 34,
                'created_at' => '2020-01-20 21:01:49',
                'updated_at' => '2020-01-20 21:01:49',
            ),
            479 => 
            array (
                'id' => 3480,
                'song_id' => 885,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:49',
                'updated_at' => '2020-01-20 21:01:49',
            ),
            480 => 
            array (
                'id' => 3481,
                'song_id' => 886,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:51',
                'updated_at' => '2020-01-20 21:01:51',
            ),
            481 => 
            array (
                'id' => 3482,
                'song_id' => 886,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:51',
                'updated_at' => '2020-01-20 21:01:51',
            ),
            482 => 
            array (
                'id' => 3483,
                'song_id' => 886,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:51',
                'updated_at' => '2020-01-20 21:01:51',
            ),
            483 => 
            array (
                'id' => 3484,
                'song_id' => 886,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:51',
                'updated_at' => '2020-01-20 21:01:51',
            ),
            484 => 
            array (
                'id' => 3485,
                'song_id' => 887,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:52',
                'updated_at' => '2020-01-20 21:01:52',
            ),
            485 => 
            array (
                'id' => 3486,
                'song_id' => 887,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:01:52',
                'updated_at' => '2020-01-20 21:01:52',
            ),
            486 => 
            array (
                'id' => 3487,
                'song_id' => 887,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:52',
                'updated_at' => '2020-01-20 21:01:52',
            ),
            487 => 
            array (
                'id' => 3488,
                'song_id' => 887,
                'tag_id' => 19,
                'created_at' => '2020-01-20 21:01:52',
                'updated_at' => '2020-01-20 21:01:52',
            ),
            488 => 
            array (
                'id' => 3489,
                'song_id' => 888,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:54',
                'updated_at' => '2020-01-20 21:01:54',
            ),
            489 => 
            array (
                'id' => 3490,
                'song_id' => 888,
                'tag_id' => 126,
                'created_at' => '2020-01-20 21:01:54',
                'updated_at' => '2020-01-20 21:01:54',
            ),
            490 => 
            array (
                'id' => 3491,
                'song_id' => 888,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:01:54',
                'updated_at' => '2020-01-20 21:01:54',
            ),
            491 => 
            array (
                'id' => 3492,
                'song_id' => 888,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:54',
                'updated_at' => '2020-01-20 21:01:54',
            ),
            492 => 
            array (
                'id' => 3493,
                'song_id' => 890,
                'tag_id' => 423,
                'created_at' => '2020-01-20 21:01:57',
                'updated_at' => '2020-01-20 21:01:57',
            ),
            493 => 
            array (
                'id' => 3494,
                'song_id' => 890,
                'tag_id' => 56,
                'created_at' => '2020-01-20 21:01:57',
                'updated_at' => '2020-01-20 21:01:57',
            ),
            494 => 
            array (
                'id' => 3495,
                'song_id' => 890,
                'tag_id' => 377,
                'created_at' => '2020-01-20 21:01:57',
                'updated_at' => '2020-01-20 21:01:57',
            ),
            495 => 
            array (
                'id' => 3496,
                'song_id' => 890,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:57',
                'updated_at' => '2020-01-20 21:01:57',
            ),
            496 => 
            array (
                'id' => 3497,
                'song_id' => 890,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:01:57',
                'updated_at' => '2020-01-20 21:01:57',
            ),
            497 => 
            array (
                'id' => 3498,
                'song_id' => 891,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:58',
                'updated_at' => '2020-01-20 21:01:58',
            ),
            498 => 
            array (
                'id' => 3499,
                'song_id' => 891,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:01:58',
                'updated_at' => '2020-01-20 21:01:58',
            ),
            499 => 
            array (
                'id' => 3500,
                'song_id' => 891,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:01:58',
                'updated_at' => '2020-01-20 21:01:58',
            ),
        ));
        \DB::table('song_tag')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'song_id' => 891,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:01:58',
                'updated_at' => '2020-01-20 21:01:58',
            ),
            1 => 
            array (
                'id' => 3502,
                'song_id' => 892,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:01:59',
                'updated_at' => '2020-01-20 21:01:59',
            ),
            2 => 
            array (
                'id' => 3503,
                'song_id' => 892,
                'tag_id' => 20,
                'created_at' => '2020-01-20 21:01:59',
                'updated_at' => '2020-01-20 21:01:59',
            ),
            3 => 
            array (
                'id' => 3504,
                'song_id' => 892,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:01:59',
                'updated_at' => '2020-01-20 21:01:59',
            ),
            4 => 
            array (
                'id' => 3505,
                'song_id' => 892,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:01:59',
                'updated_at' => '2020-01-20 21:01:59',
            ),
            5 => 
            array (
                'id' => 3506,
                'song_id' => 892,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:01:59',
                'updated_at' => '2020-01-20 21:01:59',
            ),
            6 => 
            array (
                'id' => 3507,
                'song_id' => 893,
                'tag_id' => 424,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            7 => 
            array (
                'id' => 3508,
                'song_id' => 893,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            8 => 
            array (
                'id' => 3509,
                'song_id' => 893,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            9 => 
            array (
                'id' => 3510,
                'song_id' => 893,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            10 => 
            array (
                'id' => 3511,
                'song_id' => 893,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:01',
                'updated_at' => '2020-01-20 21:02:01',
            ),
            11 => 
            array (
                'id' => 3512,
                'song_id' => 894,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:02',
                'updated_at' => '2020-01-20 21:02:02',
            ),
            12 => 
            array (
                'id' => 3513,
                'song_id' => 894,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:02',
                'updated_at' => '2020-01-20 21:02:02',
            ),
            13 => 
            array (
                'id' => 3514,
                'song_id' => 894,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:02',
                'updated_at' => '2020-01-20 21:02:02',
            ),
            14 => 
            array (
                'id' => 3515,
                'song_id' => 894,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:02:02',
                'updated_at' => '2020-01-20 21:02:02',
            ),
            15 => 
            array (
                'id' => 3516,
                'song_id' => 894,
                'tag_id' => 43,
                'created_at' => '2020-01-20 21:02:02',
                'updated_at' => '2020-01-20 21:02:02',
            ),
            16 => 
            array (
                'id' => 3517,
                'song_id' => 895,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:04',
                'updated_at' => '2020-01-20 21:02:04',
            ),
            17 => 
            array (
                'id' => 3518,
                'song_id' => 895,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:04',
                'updated_at' => '2020-01-20 21:02:04',
            ),
            18 => 
            array (
                'id' => 3519,
                'song_id' => 895,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:04',
                'updated_at' => '2020-01-20 21:02:04',
            ),
            19 => 
            array (
                'id' => 3520,
                'song_id' => 895,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:02:04',
                'updated_at' => '2020-01-20 21:02:04',
            ),
            20 => 
            array (
                'id' => 3521,
                'song_id' => 896,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:05',
                'updated_at' => '2020-01-20 21:02:05',
            ),
            21 => 
            array (
                'id' => 3522,
                'song_id' => 896,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:05',
                'updated_at' => '2020-01-20 21:02:05',
            ),
            22 => 
            array (
                'id' => 3523,
                'song_id' => 896,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:05',
                'updated_at' => '2020-01-20 21:02:05',
            ),
            23 => 
            array (
                'id' => 3524,
                'song_id' => 896,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:02:05',
                'updated_at' => '2020-01-20 21:02:05',
            ),
            24 => 
            array (
                'id' => 3525,
                'song_id' => 898,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:08',
                'updated_at' => '2020-01-20 21:02:08',
            ),
            25 => 
            array (
                'id' => 3526,
                'song_id' => 898,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:08',
                'updated_at' => '2020-01-20 21:02:08',
            ),
            26 => 
            array (
                'id' => 3527,
                'song_id' => 898,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:08',
                'updated_at' => '2020-01-20 21:02:08',
            ),
            27 => 
            array (
                'id' => 3528,
                'song_id' => 898,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:02:08',
                'updated_at' => '2020-01-20 21:02:08',
            ),
            28 => 
            array (
                'id' => 3529,
                'song_id' => 899,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:09',
                'updated_at' => '2020-01-20 21:02:09',
            ),
            29 => 
            array (
                'id' => 3530,
                'song_id' => 899,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:09',
                'updated_at' => '2020-01-20 21:02:09',
            ),
            30 => 
            array (
                'id' => 3531,
                'song_id' => 899,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:09',
                'updated_at' => '2020-01-20 21:02:09',
            ),
            31 => 
            array (
                'id' => 3532,
                'song_id' => 899,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:02:09',
                'updated_at' => '2020-01-20 21:02:09',
            ),
            32 => 
            array (
                'id' => 3533,
                'song_id' => 900,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:11',
                'updated_at' => '2020-01-20 21:02:11',
            ),
            33 => 
            array (
                'id' => 3534,
                'song_id' => 900,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:11',
                'updated_at' => '2020-01-20 21:02:11',
            ),
            34 => 
            array (
                'id' => 3535,
                'song_id' => 900,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:11',
                'updated_at' => '2020-01-20 21:02:11',
            ),
            35 => 
            array (
                'id' => 3536,
                'song_id' => 900,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:11',
                'updated_at' => '2020-01-20 21:02:11',
            ),
            36 => 
            array (
                'id' => 3537,
                'song_id' => 901,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:12',
                'updated_at' => '2020-01-20 21:02:12',
            ),
            37 => 
            array (
                'id' => 3538,
                'song_id' => 901,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:02:12',
                'updated_at' => '2020-01-20 21:02:12',
            ),
            38 => 
            array (
                'id' => 3539,
                'song_id' => 901,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:12',
                'updated_at' => '2020-01-20 21:02:12',
            ),
            39 => 
            array (
                'id' => 3540,
                'song_id' => 901,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:12',
                'updated_at' => '2020-01-20 21:02:12',
            ),
            40 => 
            array (
                'id' => 3541,
                'song_id' => 902,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:13',
                'updated_at' => '2020-01-20 21:02:13',
            ),
            41 => 
            array (
                'id' => 3542,
                'song_id' => 902,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:02:13',
                'updated_at' => '2020-01-20 21:02:13',
            ),
            42 => 
            array (
                'id' => 3543,
                'song_id' => 902,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:13',
                'updated_at' => '2020-01-20 21:02:13',
            ),
            43 => 
            array (
                'id' => 3544,
                'song_id' => 902,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:13',
                'updated_at' => '2020-01-20 21:02:13',
            ),
            44 => 
            array (
                'id' => 3545,
                'song_id' => 902,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:13',
                'updated_at' => '2020-01-20 21:02:13',
            ),
            45 => 
            array (
                'id' => 3546,
                'song_id' => 903,
                'tag_id' => 425,
                'created_at' => '2020-01-20 21:02:15',
                'updated_at' => '2020-01-20 21:02:15',
            ),
            46 => 
            array (
                'id' => 3547,
                'song_id' => 903,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:15',
                'updated_at' => '2020-01-20 21:02:15',
            ),
            47 => 
            array (
                'id' => 3548,
                'song_id' => 903,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:02:15',
                'updated_at' => '2020-01-20 21:02:15',
            ),
            48 => 
            array (
                'id' => 3549,
                'song_id' => 903,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:15',
                'updated_at' => '2020-01-20 21:02:15',
            ),
            49 => 
            array (
                'id' => 3550,
                'song_id' => 905,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:18',
                'updated_at' => '2020-01-20 21:02:18',
            ),
            50 => 
            array (
                'id' => 3551,
                'song_id' => 905,
                'tag_id' => 83,
                'created_at' => '2020-01-20 21:02:18',
                'updated_at' => '2020-01-20 21:02:18',
            ),
            51 => 
            array (
                'id' => 3552,
                'song_id' => 905,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:02:18',
                'updated_at' => '2020-01-20 21:02:18',
            ),
            52 => 
            array (
                'id' => 3553,
                'song_id' => 905,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:02:18',
                'updated_at' => '2020-01-20 21:02:18',
            ),
            53 => 
            array (
                'id' => 3554,
                'song_id' => 905,
                'tag_id' => 103,
                'created_at' => '2020-01-20 21:02:18',
                'updated_at' => '2020-01-20 21:02:18',
            ),
            54 => 
            array (
                'id' => 3555,
                'song_id' => 907,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:20',
                'updated_at' => '2020-01-20 21:02:20',
            ),
            55 => 
            array (
                'id' => 3556,
                'song_id' => 907,
                'tag_id' => 21,
                'created_at' => '2020-01-20 21:02:20',
                'updated_at' => '2020-01-20 21:02:20',
            ),
            56 => 
            array (
                'id' => 3557,
                'song_id' => 907,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:02:20',
                'updated_at' => '2020-01-20 21:02:20',
            ),
            57 => 
            array (
                'id' => 3558,
                'song_id' => 907,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:20',
                'updated_at' => '2020-01-20 21:02:20',
            ),
            58 => 
            array (
                'id' => 3559,
                'song_id' => 907,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:02:20',
                'updated_at' => '2020-01-20 21:02:20',
            ),
            59 => 
            array (
                'id' => 3560,
                'song_id' => 908,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:21',
                'updated_at' => '2020-01-20 21:02:21',
            ),
            60 => 
            array (
                'id' => 3561,
                'song_id' => 908,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:02:21',
                'updated_at' => '2020-01-20 21:02:21',
            ),
            61 => 
            array (
                'id' => 3562,
                'song_id' => 908,
                'tag_id' => 21,
                'created_at' => '2020-01-20 21:02:21',
                'updated_at' => '2020-01-20 21:02:21',
            ),
            62 => 
            array (
                'id' => 3563,
                'song_id' => 908,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:02:21',
                'updated_at' => '2020-01-20 21:02:21',
            ),
            63 => 
            array (
                'id' => 3564,
                'song_id' => 908,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:21',
                'updated_at' => '2020-01-20 21:02:21',
            ),
            64 => 
            array (
                'id' => 3565,
                'song_id' => 909,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:02:22',
                'updated_at' => '2020-01-20 21:02:22',
            ),
            65 => 
            array (
                'id' => 3566,
                'song_id' => 909,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:22',
                'updated_at' => '2020-01-20 21:02:22',
            ),
            66 => 
            array (
                'id' => 3567,
                'song_id' => 909,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:02:22',
                'updated_at' => '2020-01-20 21:02:22',
            ),
            67 => 
            array (
                'id' => 3568,
                'song_id' => 909,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:22',
                'updated_at' => '2020-01-20 21:02:22',
            ),
            68 => 
            array (
                'id' => 3569,
                'song_id' => 909,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:22',
                'updated_at' => '2020-01-20 21:02:22',
            ),
            69 => 
            array (
                'id' => 3570,
                'song_id' => 911,
                'tag_id' => 69,
                'created_at' => '2020-01-20 21:02:25',
                'updated_at' => '2020-01-20 21:02:25',
            ),
            70 => 
            array (
                'id' => 3571,
                'song_id' => 911,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:02:25',
                'updated_at' => '2020-01-20 21:02:25',
            ),
            71 => 
            array (
                'id' => 3572,
                'song_id' => 911,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:02:25',
                'updated_at' => '2020-01-20 21:02:25',
            ),
            72 => 
            array (
                'id' => 3573,
                'song_id' => 911,
                'tag_id' => 294,
                'created_at' => '2020-01-20 21:02:25',
                'updated_at' => '2020-01-20 21:02:25',
            ),
            73 => 
            array (
                'id' => 3574,
                'song_id' => 911,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:02:25',
                'updated_at' => '2020-01-20 21:02:25',
            ),
            74 => 
            array (
                'id' => 3575,
                'song_id' => 912,
                'tag_id' => 69,
                'created_at' => '2020-01-20 21:02:26',
                'updated_at' => '2020-01-20 21:02:26',
            ),
            75 => 
            array (
                'id' => 3576,
                'song_id' => 912,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:02:26',
                'updated_at' => '2020-01-20 21:02:26',
            ),
            76 => 
            array (
                'id' => 3577,
                'song_id' => 912,
                'tag_id' => 3,
                'created_at' => '2020-01-20 21:02:26',
                'updated_at' => '2020-01-20 21:02:26',
            ),
            77 => 
            array (
                'id' => 3578,
                'song_id' => 912,
                'tag_id' => 413,
                'created_at' => '2020-01-20 21:02:26',
                'updated_at' => '2020-01-20 21:02:26',
            ),
            78 => 
            array (
                'id' => 3579,
                'song_id' => 913,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:02:28',
                'updated_at' => '2020-01-20 21:02:28',
            ),
            79 => 
            array (
                'id' => 3580,
                'song_id' => 913,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:02:28',
                'updated_at' => '2020-01-20 21:02:28',
            ),
            80 => 
            array (
                'id' => 3581,
                'song_id' => 913,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:28',
                'updated_at' => '2020-01-20 21:02:28',
            ),
            81 => 
            array (
                'id' => 3582,
                'song_id' => 913,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:28',
                'updated_at' => '2020-01-20 21:02:28',
            ),
            82 => 
            array (
                'id' => 3583,
                'song_id' => 913,
                'tag_id' => 226,
                'created_at' => '2020-01-20 21:02:28',
                'updated_at' => '2020-01-20 21:02:28',
            ),
            83 => 
            array (
                'id' => 3584,
                'song_id' => 914,
                'tag_id' => 15,
                'created_at' => '2020-01-20 21:02:29',
                'updated_at' => '2020-01-20 21:02:29',
            ),
            84 => 
            array (
                'id' => 3585,
                'song_id' => 914,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:29',
                'updated_at' => '2020-01-20 21:02:29',
            ),
            85 => 
            array (
                'id' => 3586,
                'song_id' => 914,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:29',
                'updated_at' => '2020-01-20 21:02:29',
            ),
            86 => 
            array (
                'id' => 3587,
                'song_id' => 914,
                'tag_id' => 80,
                'created_at' => '2020-01-20 21:02:29',
                'updated_at' => '2020-01-20 21:02:29',
            ),
            87 => 
            array (
                'id' => 3588,
                'song_id' => 914,
                'tag_id' => 3,
                'created_at' => '2020-01-20 21:02:29',
                'updated_at' => '2020-01-20 21:02:29',
            ),
            88 => 
            array (
                'id' => 3589,
                'song_id' => 915,
                'tag_id' => 157,
                'created_at' => '2020-01-20 21:02:30',
                'updated_at' => '2020-01-20 21:02:30',
            ),
            89 => 
            array (
                'id' => 3590,
                'song_id' => 915,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:02:30',
                'updated_at' => '2020-01-20 21:02:30',
            ),
            90 => 
            array (
                'id' => 3591,
                'song_id' => 915,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:02:30',
                'updated_at' => '2020-01-20 21:02:30',
            ),
            91 => 
            array (
                'id' => 3592,
                'song_id' => 915,
                'tag_id' => 126,
                'created_at' => '2020-01-20 21:02:30',
                'updated_at' => '2020-01-20 21:02:30',
            ),
            92 => 
            array (
                'id' => 3593,
                'song_id' => 915,
                'tag_id' => 345,
                'created_at' => '2020-01-20 21:02:31',
                'updated_at' => '2020-01-20 21:02:31',
            ),
            93 => 
            array (
                'id' => 3594,
                'song_id' => 916,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:32',
                'updated_at' => '2020-01-20 21:02:32',
            ),
            94 => 
            array (
                'id' => 3595,
                'song_id' => 916,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:32',
                'updated_at' => '2020-01-20 21:02:32',
            ),
            95 => 
            array (
                'id' => 3596,
                'song_id' => 916,
                'tag_id' => 55,
                'created_at' => '2020-01-20 21:02:32',
                'updated_at' => '2020-01-20 21:02:32',
            ),
            96 => 
            array (
                'id' => 3597,
                'song_id' => 916,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:02:32',
                'updated_at' => '2020-01-20 21:02:32',
            ),
            97 => 
            array (
                'id' => 3598,
                'song_id' => 917,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:33',
                'updated_at' => '2020-01-20 21:02:33',
            ),
            98 => 
            array (
                'id' => 3599,
                'song_id' => 917,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:02:33',
                'updated_at' => '2020-01-20 21:02:33',
            ),
            99 => 
            array (
                'id' => 3600,
                'song_id' => 917,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:02:33',
                'updated_at' => '2020-01-20 21:02:33',
            ),
            100 => 
            array (
                'id' => 3601,
                'song_id' => 917,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:33',
                'updated_at' => '2020-01-20 21:02:33',
            ),
            101 => 
            array (
                'id' => 3602,
                'song_id' => 918,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:34',
                'updated_at' => '2020-01-20 21:02:34',
            ),
            102 => 
            array (
                'id' => 3603,
                'song_id' => 918,
                'tag_id' => 55,
                'created_at' => '2020-01-20 21:02:34',
                'updated_at' => '2020-01-20 21:02:34',
            ),
            103 => 
            array (
                'id' => 3604,
                'song_id' => 918,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:34',
                'updated_at' => '2020-01-20 21:02:34',
            ),
            104 => 
            array (
                'id' => 3605,
                'song_id' => 918,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:02:34',
                'updated_at' => '2020-01-20 21:02:34',
            ),
            105 => 
            array (
                'id' => 3606,
                'song_id' => 918,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:02:34',
                'updated_at' => '2020-01-20 21:02:34',
            ),
            106 => 
            array (
                'id' => 3607,
                'song_id' => 919,
                'tag_id' => 426,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            107 => 
            array (
                'id' => 3608,
                'song_id' => 919,
                'tag_id' => 427,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            108 => 
            array (
                'id' => 3609,
                'song_id' => 919,
                'tag_id' => 428,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            109 => 
            array (
                'id' => 3610,
                'song_id' => 919,
                'tag_id' => 429,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            110 => 
            array (
                'id' => 3611,
                'song_id' => 919,
                'tag_id' => 19,
                'created_at' => '2020-01-20 21:02:36',
                'updated_at' => '2020-01-20 21:02:36',
            ),
            111 => 
            array (
                'id' => 3612,
                'song_id' => 920,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:37',
                'updated_at' => '2020-01-20 21:02:37',
            ),
            112 => 
            array (
                'id' => 3613,
                'song_id' => 920,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:37',
                'updated_at' => '2020-01-20 21:02:37',
            ),
            113 => 
            array (
                'id' => 3614,
                'song_id' => 920,
                'tag_id' => 53,
                'created_at' => '2020-01-20 21:02:37',
                'updated_at' => '2020-01-20 21:02:37',
            ),
            114 => 
            array (
                'id' => 3615,
                'song_id' => 920,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:02:37',
                'updated_at' => '2020-01-20 21:02:37',
            ),
            115 => 
            array (
                'id' => 3616,
                'song_id' => 921,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:02:38',
                'updated_at' => '2020-01-20 21:02:38',
            ),
            116 => 
            array (
                'id' => 3617,
                'song_id' => 921,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:38',
                'updated_at' => '2020-01-20 21:02:38',
            ),
            117 => 
            array (
                'id' => 3618,
                'song_id' => 921,
                'tag_id' => 74,
                'created_at' => '2020-01-20 21:02:38',
                'updated_at' => '2020-01-20 21:02:38',
            ),
            118 => 
            array (
                'id' => 3619,
                'song_id' => 921,
                'tag_id' => 19,
                'created_at' => '2020-01-20 21:02:38',
                'updated_at' => '2020-01-20 21:02:38',
            ),
            119 => 
            array (
                'id' => 3620,
                'song_id' => 921,
                'tag_id' => 106,
                'created_at' => '2020-01-20 21:02:38',
                'updated_at' => '2020-01-20 21:02:38',
            ),
            120 => 
            array (
                'id' => 3621,
                'song_id' => 922,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:40',
                'updated_at' => '2020-01-20 21:02:40',
            ),
            121 => 
            array (
                'id' => 3622,
                'song_id' => 922,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:40',
                'updated_at' => '2020-01-20 21:02:40',
            ),
            122 => 
            array (
                'id' => 3623,
                'song_id' => 922,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:40',
                'updated_at' => '2020-01-20 21:02:40',
            ),
            123 => 
            array (
                'id' => 3624,
                'song_id' => 922,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:02:40',
                'updated_at' => '2020-01-20 21:02:40',
            ),
            124 => 
            array (
                'id' => 3625,
                'song_id' => 922,
                'tag_id' => 125,
                'created_at' => '2020-01-20 21:02:40',
                'updated_at' => '2020-01-20 21:02:40',
            ),
            125 => 
            array (
                'id' => 3626,
                'song_id' => 923,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:41',
                'updated_at' => '2020-01-20 21:02:41',
            ),
            126 => 
            array (
                'id' => 3627,
                'song_id' => 923,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:41',
                'updated_at' => '2020-01-20 21:02:41',
            ),
            127 => 
            array (
                'id' => 3628,
                'song_id' => 923,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:02:41',
                'updated_at' => '2020-01-20 21:02:41',
            ),
            128 => 
            array (
                'id' => 3629,
                'song_id' => 923,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:41',
                'updated_at' => '2020-01-20 21:02:41',
            ),
            129 => 
            array (
                'id' => 3630,
                'song_id' => 923,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:41',
                'updated_at' => '2020-01-20 21:02:41',
            ),
            130 => 
            array (
                'id' => 3631,
                'song_id' => 924,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:43',
                'updated_at' => '2020-01-20 21:02:43',
            ),
            131 => 
            array (
                'id' => 3632,
                'song_id' => 924,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:43',
                'updated_at' => '2020-01-20 21:02:43',
            ),
            132 => 
            array (
                'id' => 3633,
                'song_id' => 924,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:02:43',
                'updated_at' => '2020-01-20 21:02:43',
            ),
            133 => 
            array (
                'id' => 3634,
                'song_id' => 924,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:02:43',
                'updated_at' => '2020-01-20 21:02:43',
            ),
            134 => 
            array (
                'id' => 3635,
                'song_id' => 924,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:43',
                'updated_at' => '2020-01-20 21:02:43',
            ),
            135 => 
            array (
                'id' => 3636,
                'song_id' => 925,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:02:44',
                'updated_at' => '2020-01-20 21:02:44',
            ),
            136 => 
            array (
                'id' => 3637,
                'song_id' => 925,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:44',
                'updated_at' => '2020-01-20 21:02:44',
            ),
            137 => 
            array (
                'id' => 3638,
                'song_id' => 925,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:02:44',
                'updated_at' => '2020-01-20 21:02:44',
            ),
            138 => 
            array (
                'id' => 3639,
                'song_id' => 925,
                'tag_id' => 148,
                'created_at' => '2020-01-20 21:02:44',
                'updated_at' => '2020-01-20 21:02:44',
            ),
            139 => 
            array (
                'id' => 3640,
                'song_id' => 925,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:44',
                'updated_at' => '2020-01-20 21:02:44',
            ),
            140 => 
            array (
                'id' => 3641,
                'song_id' => 926,
                'tag_id' => 430,
                'created_at' => '2020-01-20 21:02:46',
                'updated_at' => '2020-01-20 21:02:46',
            ),
            141 => 
            array (
                'id' => 3642,
                'song_id' => 926,
                'tag_id' => 125,
                'created_at' => '2020-01-20 21:02:46',
                'updated_at' => '2020-01-20 21:02:46',
            ),
            142 => 
            array (
                'id' => 3643,
                'song_id' => 926,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:46',
                'updated_at' => '2020-01-20 21:02:46',
            ),
            143 => 
            array (
                'id' => 3644,
                'song_id' => 926,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:46',
                'updated_at' => '2020-01-20 21:02:46',
            ),
            144 => 
            array (
                'id' => 3645,
                'song_id' => 926,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:46',
                'updated_at' => '2020-01-20 21:02:46',
            ),
            145 => 
            array (
                'id' => 3646,
                'song_id' => 927,
                'tag_id' => 431,
                'created_at' => '2020-01-20 21:02:47',
                'updated_at' => '2020-01-20 21:02:47',
            ),
            146 => 
            array (
                'id' => 3647,
                'song_id' => 927,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:47',
                'updated_at' => '2020-01-20 21:02:47',
            ),
            147 => 
            array (
                'id' => 3648,
                'song_id' => 927,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:47',
                'updated_at' => '2020-01-20 21:02:47',
            ),
            148 => 
            array (
                'id' => 3649,
                'song_id' => 927,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:47',
                'updated_at' => '2020-01-20 21:02:47',
            ),
            149 => 
            array (
                'id' => 3650,
                'song_id' => 928,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:49',
                'updated_at' => '2020-01-20 21:02:49',
            ),
            150 => 
            array (
                'id' => 3651,
                'song_id' => 928,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:49',
                'updated_at' => '2020-01-20 21:02:49',
            ),
            151 => 
            array (
                'id' => 3652,
                'song_id' => 928,
                'tag_id' => 1,
                'created_at' => '2020-01-20 21:02:49',
                'updated_at' => '2020-01-20 21:02:49',
            ),
            152 => 
            array (
                'id' => 3653,
                'song_id' => 928,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:49',
                'updated_at' => '2020-01-20 21:02:49',
            ),
            153 => 
            array (
                'id' => 3654,
                'song_id' => 928,
                'tag_id' => 413,
                'created_at' => '2020-01-20 21:02:49',
                'updated_at' => '2020-01-20 21:02:49',
            ),
            154 => 
            array (
                'id' => 3655,
                'song_id' => 929,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:50',
                'updated_at' => '2020-01-20 21:02:50',
            ),
            155 => 
            array (
                'id' => 3656,
                'song_id' => 929,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:50',
                'updated_at' => '2020-01-20 21:02:50',
            ),
            156 => 
            array (
                'id' => 3657,
                'song_id' => 929,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:50',
                'updated_at' => '2020-01-20 21:02:50',
            ),
            157 => 
            array (
                'id' => 3658,
                'song_id' => 929,
                'tag_id' => 80,
                'created_at' => '2020-01-20 21:02:50',
                'updated_at' => '2020-01-20 21:02:50',
            ),
            158 => 
            array (
                'id' => 3659,
                'song_id' => 930,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:02:51',
                'updated_at' => '2020-01-20 21:02:51',
            ),
            159 => 
            array (
                'id' => 3660,
                'song_id' => 930,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:51',
                'updated_at' => '2020-01-20 21:02:51',
            ),
            160 => 
            array (
                'id' => 3661,
                'song_id' => 930,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:02:51',
                'updated_at' => '2020-01-20 21:02:51',
            ),
            161 => 
            array (
                'id' => 3662,
                'song_id' => 930,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:51',
                'updated_at' => '2020-01-20 21:02:51',
            ),
            162 => 
            array (
                'id' => 3663,
                'song_id' => 931,
                'tag_id' => 432,
                'created_at' => '2020-01-20 21:02:52',
                'updated_at' => '2020-01-20 21:02:52',
            ),
            163 => 
            array (
                'id' => 3664,
                'song_id' => 931,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:52',
                'updated_at' => '2020-01-20 21:02:52',
            ),
            164 => 
            array (
                'id' => 3665,
                'song_id' => 931,
                'tag_id' => 45,
                'created_at' => '2020-01-20 21:02:52',
                'updated_at' => '2020-01-20 21:02:52',
            ),
            165 => 
            array (
                'id' => 3666,
                'song_id' => 931,
                'tag_id' => 78,
                'created_at' => '2020-01-20 21:02:52',
                'updated_at' => '2020-01-20 21:02:52',
            ),
            166 => 
            array (
                'id' => 3667,
                'song_id' => 931,
                'tag_id' => 280,
                'created_at' => '2020-01-20 21:02:52',
                'updated_at' => '2020-01-20 21:02:52',
            ),
            167 => 
            array (
                'id' => 3668,
                'song_id' => 932,
                'tag_id' => 52,
                'created_at' => '2020-01-20 21:02:54',
                'updated_at' => '2020-01-20 21:02:54',
            ),
            168 => 
            array (
                'id' => 3669,
                'song_id' => 932,
                'tag_id' => 42,
                'created_at' => '2020-01-20 21:02:54',
                'updated_at' => '2020-01-20 21:02:54',
            ),
            169 => 
            array (
                'id' => 3670,
                'song_id' => 932,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:54',
                'updated_at' => '2020-01-20 21:02:54',
            ),
            170 => 
            array (
                'id' => 3671,
                'song_id' => 932,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:02:54',
                'updated_at' => '2020-01-20 21:02:54',
            ),
            171 => 
            array (
                'id' => 3672,
                'song_id' => 932,
                'tag_id' => 39,
                'created_at' => '2020-01-20 21:02:54',
                'updated_at' => '2020-01-20 21:02:54',
            ),
            172 => 
            array (
                'id' => 3673,
                'song_id' => 934,
                'tag_id' => 52,
                'created_at' => '2020-01-20 21:02:56',
                'updated_at' => '2020-01-20 21:02:56',
            ),
            173 => 
            array (
                'id' => 3674,
                'song_id' => 934,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:57',
                'updated_at' => '2020-01-20 21:02:57',
            ),
            174 => 
            array (
                'id' => 3675,
                'song_id' => 934,
                'tag_id' => 42,
                'created_at' => '2020-01-20 21:02:57',
                'updated_at' => '2020-01-20 21:02:57',
            ),
            175 => 
            array (
                'id' => 3676,
                'song_id' => 934,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:57',
                'updated_at' => '2020-01-20 21:02:57',
            ),
            176 => 
            array (
                'id' => 3677,
                'song_id' => 934,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:02:57',
                'updated_at' => '2020-01-20 21:02:57',
            ),
            177 => 
            array (
                'id' => 3678,
                'song_id' => 935,
                'tag_id' => 52,
                'created_at' => '2020-01-20 21:02:58',
                'updated_at' => '2020-01-20 21:02:58',
            ),
            178 => 
            array (
                'id' => 3679,
                'song_id' => 935,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:02:58',
                'updated_at' => '2020-01-20 21:02:58',
            ),
            179 => 
            array (
                'id' => 3680,
                'song_id' => 935,
                'tag_id' => 42,
                'created_at' => '2020-01-20 21:02:58',
                'updated_at' => '2020-01-20 21:02:58',
            ),
            180 => 
            array (
                'id' => 3681,
                'song_id' => 935,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:02:58',
                'updated_at' => '2020-01-20 21:02:58',
            ),
            181 => 
            array (
                'id' => 3682,
                'song_id' => 935,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:02:58',
                'updated_at' => '2020-01-20 21:02:58',
            ),
            182 => 
            array (
                'id' => 3683,
                'song_id' => 936,
                'tag_id' => 52,
                'created_at' => '2020-01-20 21:03:00',
                'updated_at' => '2020-01-20 21:03:00',
            ),
            183 => 
            array (
                'id' => 3684,
                'song_id' => 936,
                'tag_id' => 42,
                'created_at' => '2020-01-20 21:03:00',
                'updated_at' => '2020-01-20 21:03:00',
            ),
            184 => 
            array (
                'id' => 3685,
                'song_id' => 936,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:03:00',
                'updated_at' => '2020-01-20 21:03:00',
            ),
            185 => 
            array (
                'id' => 3686,
                'song_id' => 936,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:00',
                'updated_at' => '2020-01-20 21:03:00',
            ),
            186 => 
            array (
                'id' => 3687,
                'song_id' => 936,
                'tag_id' => 39,
                'created_at' => '2020-01-20 21:03:00',
                'updated_at' => '2020-01-20 21:03:00',
            ),
            187 => 
            array (
                'id' => 3688,
                'song_id' => 937,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:01',
                'updated_at' => '2020-01-20 21:03:01',
            ),
            188 => 
            array (
                'id' => 3689,
                'song_id' => 937,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:01',
                'updated_at' => '2020-01-20 21:03:01',
            ),
            189 => 
            array (
                'id' => 3690,
                'song_id' => 937,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:01',
                'updated_at' => '2020-01-20 21:03:01',
            ),
            190 => 
            array (
                'id' => 3691,
                'song_id' => 937,
                'tag_id' => 235,
                'created_at' => '2020-01-20 21:03:01',
                'updated_at' => '2020-01-20 21:03:01',
            ),
            191 => 
            array (
                'id' => 3692,
                'song_id' => 937,
                'tag_id' => 139,
                'created_at' => '2020-01-20 21:03:01',
                'updated_at' => '2020-01-20 21:03:01',
            ),
            192 => 
            array (
                'id' => 3693,
                'song_id' => 938,
                'tag_id' => 235,
                'created_at' => '2020-01-20 21:03:03',
                'updated_at' => '2020-01-20 21:03:03',
            ),
            193 => 
            array (
                'id' => 3694,
                'song_id' => 938,
                'tag_id' => 139,
                'created_at' => '2020-01-20 21:03:03',
                'updated_at' => '2020-01-20 21:03:03',
            ),
            194 => 
            array (
                'id' => 3695,
                'song_id' => 938,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:03',
                'updated_at' => '2020-01-20 21:03:03',
            ),
            195 => 
            array (
                'id' => 3696,
                'song_id' => 938,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:03',
                'updated_at' => '2020-01-20 21:03:03',
            ),
            196 => 
            array (
                'id' => 3697,
                'song_id' => 938,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:03',
                'updated_at' => '2020-01-20 21:03:03',
            ),
            197 => 
            array (
                'id' => 3698,
                'song_id' => 939,
                'tag_id' => 139,
                'created_at' => '2020-01-20 21:03:05',
                'updated_at' => '2020-01-20 21:03:05',
            ),
            198 => 
            array (
                'id' => 3699,
                'song_id' => 939,
                'tag_id' => 235,
                'created_at' => '2020-01-20 21:03:05',
                'updated_at' => '2020-01-20 21:03:05',
            ),
            199 => 
            array (
                'id' => 3700,
                'song_id' => 939,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:05',
                'updated_at' => '2020-01-20 21:03:05',
            ),
            200 => 
            array (
                'id' => 3701,
                'song_id' => 939,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:03:05',
                'updated_at' => '2020-01-20 21:03:05',
            ),
            201 => 
            array (
                'id' => 3702,
                'song_id' => 939,
                'tag_id' => 44,
                'created_at' => '2020-01-20 21:03:05',
                'updated_at' => '2020-01-20 21:03:05',
            ),
            202 => 
            array (
                'id' => 3703,
                'song_id' => 940,
                'tag_id' => 21,
                'created_at' => '2020-01-20 21:03:06',
                'updated_at' => '2020-01-20 21:03:06',
            ),
            203 => 
            array (
                'id' => 3704,
                'song_id' => 940,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:06',
                'updated_at' => '2020-01-20 21:03:06',
            ),
            204 => 
            array (
                'id' => 3705,
                'song_id' => 940,
                'tag_id' => 17,
                'created_at' => '2020-01-20 21:03:06',
                'updated_at' => '2020-01-20 21:03:06',
            ),
            205 => 
            array (
                'id' => 3706,
                'song_id' => 940,
                'tag_id' => 18,
                'created_at' => '2020-01-20 21:03:06',
                'updated_at' => '2020-01-20 21:03:06',
            ),
            206 => 
            array (
                'id' => 3707,
                'song_id' => 940,
                'tag_id' => 140,
                'created_at' => '2020-01-20 21:03:06',
                'updated_at' => '2020-01-20 21:03:06',
            ),
            207 => 
            array (
                'id' => 3708,
                'song_id' => 941,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:07',
                'updated_at' => '2020-01-20 21:03:07',
            ),
            208 => 
            array (
                'id' => 3709,
                'song_id' => 941,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:07',
                'updated_at' => '2020-01-20 21:03:07',
            ),
            209 => 
            array (
                'id' => 3710,
                'song_id' => 941,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:07',
                'updated_at' => '2020-01-20 21:03:07',
            ),
            210 => 
            array (
                'id' => 3711,
                'song_id' => 941,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:03:07',
                'updated_at' => '2020-01-20 21:03:07',
            ),
            211 => 
            array (
                'id' => 3712,
                'song_id' => 942,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:09',
                'updated_at' => '2020-01-20 21:03:09',
            ),
            212 => 
            array (
                'id' => 3713,
                'song_id' => 942,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:09',
                'updated_at' => '2020-01-20 21:03:09',
            ),
            213 => 
            array (
                'id' => 3714,
                'song_id' => 942,
                'tag_id' => 16,
                'created_at' => '2020-01-20 21:03:09',
                'updated_at' => '2020-01-20 21:03:09',
            ),
            214 => 
            array (
                'id' => 3715,
                'song_id' => 942,
                'tag_id' => 22,
                'created_at' => '2020-01-20 21:03:09',
                'updated_at' => '2020-01-20 21:03:09',
            ),
            215 => 
            array (
                'id' => 3716,
                'song_id' => 942,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:09',
                'updated_at' => '2020-01-20 21:03:09',
            ),
            216 => 
            array (
                'id' => 3717,
                'song_id' => 943,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:03:10',
                'updated_at' => '2020-01-20 21:03:10',
            ),
            217 => 
            array (
                'id' => 3718,
                'song_id' => 943,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:03:10',
                'updated_at' => '2020-01-20 21:03:10',
            ),
            218 => 
            array (
                'id' => 3719,
                'song_id' => 943,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:10',
                'updated_at' => '2020-01-20 21:03:10',
            ),
            219 => 
            array (
                'id' => 3720,
                'song_id' => 943,
                'tag_id' => 232,
                'created_at' => '2020-01-20 21:03:10',
                'updated_at' => '2020-01-20 21:03:10',
            ),
            220 => 
            array (
                'id' => 3721,
                'song_id' => 944,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:12',
                'updated_at' => '2020-01-20 21:03:12',
            ),
            221 => 
            array (
                'id' => 3722,
                'song_id' => 944,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:03:12',
                'updated_at' => '2020-01-20 21:03:12',
            ),
            222 => 
            array (
                'id' => 3723,
                'song_id' => 944,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:03:12',
                'updated_at' => '2020-01-20 21:03:12',
            ),
            223 => 
            array (
                'id' => 3724,
                'song_id' => 944,
                'tag_id' => 3,
                'created_at' => '2020-01-20 21:03:12',
                'updated_at' => '2020-01-20 21:03:12',
            ),
            224 => 
            array (
                'id' => 3725,
                'song_id' => 945,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:13',
                'updated_at' => '2020-01-20 21:03:13',
            ),
            225 => 
            array (
                'id' => 3726,
                'song_id' => 945,
                'tag_id' => 132,
                'created_at' => '2020-01-20 21:03:13',
                'updated_at' => '2020-01-20 21:03:13',
            ),
            226 => 
            array (
                'id' => 3727,
                'song_id' => 945,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:03:13',
                'updated_at' => '2020-01-20 21:03:13',
            ),
            227 => 
            array (
                'id' => 3728,
                'song_id' => 945,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:03:13',
                'updated_at' => '2020-01-20 21:03:13',
            ),
            228 => 
            array (
                'id' => 3729,
                'song_id' => 945,
                'tag_id' => 130,
                'created_at' => '2020-01-20 21:03:13',
                'updated_at' => '2020-01-20 21:03:13',
            ),
            229 => 
            array (
                'id' => 3730,
                'song_id' => 947,
                'tag_id' => 56,
                'created_at' => '2020-01-20 21:03:16',
                'updated_at' => '2020-01-20 21:03:16',
            ),
            230 => 
            array (
                'id' => 3731,
                'song_id' => 947,
                'tag_id' => 7,
                'created_at' => '2020-01-20 21:03:16',
                'updated_at' => '2020-01-20 21:03:16',
            ),
            231 => 
            array (
                'id' => 3732,
                'song_id' => 947,
                'tag_id' => 2,
                'created_at' => '2020-01-20 21:03:16',
                'updated_at' => '2020-01-20 21:03:16',
            ),
            232 => 
            array (
                'id' => 3733,
                'song_id' => 947,
                'tag_id' => 24,
                'created_at' => '2020-01-20 21:03:16',
                'updated_at' => '2020-01-20 21:03:16',
            ),
            233 => 
            array (
                'id' => 3734,
                'song_id' => 948,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:17',
                'updated_at' => '2020-01-20 21:03:17',
            ),
            234 => 
            array (
                'id' => 3735,
                'song_id' => 948,
                'tag_id' => 25,
                'created_at' => '2020-01-20 21:03:17',
                'updated_at' => '2020-01-20 21:03:17',
            ),
            235 => 
            array (
                'id' => 3736,
                'song_id' => 948,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:17',
                'updated_at' => '2020-01-20 21:03:17',
            ),
            236 => 
            array (
                'id' => 3737,
                'song_id' => 948,
                'tag_id' => 9,
                'created_at' => '2020-01-20 21:03:17',
                'updated_at' => '2020-01-20 21:03:17',
            ),
            237 => 
            array (
                'id' => 3738,
                'song_id' => 948,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:03:17',
                'updated_at' => '2020-01-20 21:03:17',
            ),
            238 => 
            array (
                'id' => 3739,
                'song_id' => 949,
                'tag_id' => 13,
                'created_at' => '2020-01-20 21:03:18',
                'updated_at' => '2020-01-20 21:03:18',
            ),
            239 => 
            array (
                'id' => 3740,
                'song_id' => 949,
                'tag_id' => 23,
                'created_at' => '2020-01-20 21:03:18',
                'updated_at' => '2020-01-20 21:03:18',
            ),
            240 => 
            array (
                'id' => 3741,
                'song_id' => 949,
                'tag_id' => 54,
                'created_at' => '2020-01-20 21:03:18',
                'updated_at' => '2020-01-20 21:03:18',
            ),
            241 => 
            array (
                'id' => 3742,
                'song_id' => 949,
                'tag_id' => 3,
                'created_at' => '2020-01-20 21:03:18',
                'updated_at' => '2020-01-20 21:03:18',
            ),
            242 => 
            array (
                'id' => 3743,
                'song_id' => 949,
                'tag_id' => 14,
                'created_at' => '2020-01-20 21:03:18',
                'updated_at' => '2020-01-20 21:03:18',
            ),
        ));
        
        
    }
}