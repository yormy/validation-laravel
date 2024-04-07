<?php

namespace Yormy\ValidationLaravel\Database\Seeders;

use Illuminate\Database\Seeder;

class BannedEmailsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('banned_emails')->delete();

        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 1,
                'banned' => '0-mail.com',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'banned' => '027168.com',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 3,
                'banned' => '0815.ru',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 4,
                'banned' => '0815.ry',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 5,
                'banned' => '0815.su',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 6,
                'banned' => '0845.ru',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 7,
                'banned' => '0box.eu',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 8,
                'banned' => '0clickemail.com',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 9,
                'banned' => '0n0ff.net',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 10,
                'banned' => '0nelce.com',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 11,
                'banned' => '0v.ro',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 12,
                'banned' => '0w.ro',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 13,
                'banned' => '0wnd.net',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 14,
                'banned' => '0wnd.org',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 15,
                'banned' => '0x207.info',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 16,
                'banned' => '1-8.biz',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 17,
                'banned' => '1-tm.com',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 18,
                'banned' => '10-minute-mail.com',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 19,
                'banned' => '1000rebates.stream',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 20,
                'banned' => '100likers.com',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 21,
                'banned' => '105kg.ru',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 22,
                'banned' => '10dk.email',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 23,
                'banned' => '10mail.com',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 24,
                'banned' => '10mail.org',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 25,
                'banned' => '10mail.tk',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 26,
                'banned' => '10minmail.de',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 27,
                'banned' => '10minut.com.pl',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 28,
                'banned' => '10minut.xyz',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 29,
                'banned' => '10minutemail.be',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 30,
                'banned' => '10minutemail.cf',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 31,
                'banned' => '10minutemail.co.uk',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 32,
                'banned' => '10minutemail.co.za',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 33,
                'banned' => '10minutemail.com',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 34,
                'banned' => '10minutemail.de',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 35,
                'banned' => '10minutemail.ga',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 36,
                'banned' => '10minutemail.gq',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 37,
                'banned' => '10minutemail.ml',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 38,
                'banned' => '10minutemail.net',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 39,
                'banned' => '10minutemail.nl',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 40,
                'banned' => '10minutemail.pro',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 41,
                'banned' => '10minutemail.us',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 42,
                'banned' => '10minutemailbox.com',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 43,
                'banned' => '10minutemails.in',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 44,
                'banned' => '10minutenemail.de',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 45,
                'banned' => '10minutenmail.xyz',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 46,
                'banned' => '10minutesmail.com',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 47,
                'banned' => '10minutesmail.fr',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 48,
                'banned' => '10minutmail.pl',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 49,
                'banned' => '10x9.com',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 50,
                'banned' => '11163.com',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 51,
                'banned' => '123-m.com',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 52,
                'banned' => '12hosting.net',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 53,
                'banned' => '12houremail.com',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 54,
                'banned' => '12minutemail.com',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 55,
                'banned' => '12minutemail.net',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 56,
                'banned' => '12storage.com',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 57,
                'banned' => '140unichars.com',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 58,
                'banned' => '147.cl',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 59,
                'banned' => '14n.co.uk',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 60,
                'banned' => '15qm.com',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 61,
                'banned' => '1blackmoon.com',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 62,
                'banned' => '1ce.us',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 63,
                'banned' => '1chuan.com',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 64,
                'banned' => '1clck2.com',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 65,
                'banned' => '1fsdfdsfsdf.tk',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 66,
                'banned' => '1mail.ml',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 67,
                'banned' => '1pad.de',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 68,
                'banned' => '1s.fr',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 69,
                'banned' => '1secmail.com',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 70,
                'banned' => '1secmail.net',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 71,
                'banned' => '1secmail.org',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 72,
                'banned' => '1st-forms.com',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 73,
                'banned' => '1to1mail.org',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 74,
                'banned' => '1usemail.com',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 75,
                'banned' => '1webmail.info',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 76,
                'banned' => '1zhuan.com',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 77,
                'banned' => '2012-2016.ru',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 78,
                'banned' => '20email.eu',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 79,
                'banned' => '20email.it',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 80,
                'banned' => '20mail.eu',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 81,
                'banned' => '20mail.in',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 82,
                'banned' => '20mail.it',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 83,
                'banned' => '20minutemail.com',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 84,
                'banned' => '20minutemail.it',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 85,
                'banned' => '20mm.eu',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 86,
                'banned' => '2120001.net',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 87,
                'banned' => '21cn.com',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 88,
                'banned' => '247web.net',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 89,
                'banned' => '24hinbox.com',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 90,
                'banned' => '24hourmail.com',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 91,
                'banned' => '24hourmail.net',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 92,
                'banned' => '2anom.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 93,
                'banned' => '2chmail.net',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 94,
                'banned' => '2ether.net',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 95,
                'banned' => '2fdgdfgdfgdf.tk',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 96,
                'banned' => '2odem.com',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 97,
                'banned' => '2prong.com',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 98,
                'banned' => '2wc.info',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 99,
                'banned' => '300book.info',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 100,
                'banned' => '30mail.ir',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 101,
                'banned' => '30minutemail.com',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 102,
                'banned' => '30wave.com',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 103,
                'banned' => '3202.com',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 104,
                'banned' => '36ru.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 105,
                'banned' => '3d-painting.com',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 106,
                'banned' => '3l6.com',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 107,
                'banned' => '3mail.ga',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 108,
                'banned' => '3trtretgfrfe.tk',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 109,
                'banned' => '4-n.us',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 110,
                'banned' => '4057.com',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 111,
                'banned' => '418.dk',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 112,
                'banned' => '42o.org',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 113,
                'banned' => '4gfdsgfdgfd.tk',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 114,
                'banned' => '4k5.net',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 115,
                'banned' => '4mail.cf',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 116,
                'banned' => '4mail.ga',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 117,
                'banned' => '4nextmail.com',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 118,
                'banned' => '4nmv.ru',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 119,
                'banned' => '4tb.host',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 120,
                'banned' => '4warding.com',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 121,
                'banned' => '4warding.net',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 122,
                'banned' => '4warding.org',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 123,
                'banned' => '50set.ru',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 124,
                'banned' => '55hosting.net',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 125,
                'banned' => '5ghgfhfghfgh.tk',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 126,
                'banned' => '5gramos.com',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 127,
                'banned' => '5july.org',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 128,
                'banned' => '5mail.cf',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 129,
                'banned' => '5mail.ga',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 130,
                'banned' => '5minutemail.net',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 131,
                'banned' => '5oz.ru',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 132,
                'banned' => '5tb.in',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 133,
                'banned' => '5x25.com',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 134,
                'banned' => '5ymail.com',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 135,
                'banned' => '60minutemail.com',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 136,
                'banned' => '672643.net',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 137,
                'banned' => '675hosting.com',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 138,
                'banned' => '675hosting.net',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 139,
                'banned' => '675hosting.org',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 140,
                'banned' => '6hjgjhgkilkj.tk',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 141,
                'banned' => '6ip.us',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 142,
                'banned' => '6mail.cf',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 143,
                'banned' => '6mail.ga',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 144,
                'banned' => '6mail.ml',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 145,
                'banned' => '6paq.com',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 146,
                'banned' => '6somok.ru',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 147,
                'banned' => '6url.com',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 148,
                'banned' => '75hosting.com',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 149,
                'banned' => '75hosting.net',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 150,
                'banned' => '75hosting.org',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 151,
                'banned' => '7days-printing.com',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 152,
                'banned' => '7mail.ga',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 153,
                'banned' => '7mail.ml',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 154,
                'banned' => '7tags.com',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 155,
                'banned' => '80665.com',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 156,
                'banned' => '8127ep.com',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 157,
                'banned' => '8mail.cf',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 158,
                'banned' => '8mail.ga',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 159,
                'banned' => '8mail.ml',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 160,
                'banned' => '99.com',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 161,
                'banned' => '99cows.com',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 162,
                'banned' => '99experts.com',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 163,
                'banned' => '9mail.cf',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 164,
                'banned' => '9me.site',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 165,
                'banned' => '9mot.ru',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 166,
                'banned' => '9ox.net',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 167,
                'banned' => '9q.ro',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 168,
                'banned' => 'a-bc.net',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 169,
                'banned' => 'a45.in',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 170,
                'banned' => 'a7996.com',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 171,
                'banned' => 'aa5zy64.com',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 172,
                'banned' => 'abacuswe.us',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 173,
                'banned' => 'abakiss.com',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 174,
                'banned' => 'abcmail.email',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 175,
                'banned' => 'abilitywe.us',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 176,
                'banned' => 'abovewe.us',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 177,
                'banned' => 'absolutewe.us',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 178,
                'banned' => 'abundantwe.us',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 179,
                'banned' => 'abusemail.de',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 180,
                'banned' => 'abuser.eu',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 181,
                'banned' => 'abyssmail.com',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 182,
                'banned' => 'ac20mail.in',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 183,
                'banned' => 'academiccommunity.com',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 184,
                'banned' => 'academywe.us',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 185,
                'banned' => 'acceleratewe.us',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 186,
                'banned' => 'accentwe.us',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 187,
                'banned' => 'acceptwe.us',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 188,
                'banned' => 'acclaimwe.us',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 189,
                'banned' => 'accordwe.us',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 190,
                'banned' => 'accreditedwe.us',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 191,
                'banned' => 'acentri.com',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 192,
                'banned' => 'achievementwe.us',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 193,
                'banned' => 'achievewe.us',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 194,
                'banned' => 'acornwe.us',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 195,
                'banned' => 'acrossgracealley.com',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 196,
                'banned' => 'acrylicwe.us',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 197,
                'banned' => 'activatewe.us',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 198,
                'banned' => 'activitywe.us',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 199,
                'banned' => 'acucre.com',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 200,
                'banned' => 'acuitywe.us',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 201,
                'banned' => 'acumenwe.us',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 202,
                'banned' => 'adaptivewe.us',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 203,
                'banned' => 'adaptwe.us',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 204,
                'banned' => 'add3000.pp.ua',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 205,
                'banned' => 'addictingtrailers.com',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 206,
                'banned' => 'adeptwe.us',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 207,
                'banned' => 'adfskj.com',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 208,
                'banned' => 'adios.email',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 209,
                'banned' => 'adiq.eu',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 210,
                'banned' => 'aditus.info',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 211,
                'banned' => 'admiralwe.us',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 212,
                'banned' => 'ado888.biz',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 213,
                'banned' => 'adobeccepdm.com',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 214,
                'banned' => 'adoniswe.us',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 215,
                'banned' => 'adpugh.org',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 216,
                'banned' => 'adroh.com',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 217,
                'banned' => 'adsd.org',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 218,
                'banned' => 'adubiz.info',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 219,
                'banned' => 'advantagewe.us',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 220,
                'banned' => 'advantimo.com',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 221,
                'banned' => 'adventurewe.us',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 222,
                'banned' => 'adventwe.us',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 223,
                'banned' => 'advisorwe.us',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 224,
                'banned' => 'advocatewe.us',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 225,
                'banned' => 'adwaterandstir.com',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 226,
                'banned' => 'aegde.com',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 227,
                'banned' => 'aegia.net',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 228,
                'banned' => 'aegiscorp.net',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 229,
                'banned' => 'aegiswe.us',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 230,
                'banned' => 'aelo.es',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 231,
                'banned' => 'aeonpsi.com',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 232,
                'banned' => 'afarek.com',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 233,
                'banned' => 'affiliate-nebenjob.info',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 234,
                'banned' => 'affiliatedwe.us',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 235,
                'banned' => 'affilikingz.de',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 236,
                'banned' => 'affinitywe.us',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 237,
                'banned' => 'affluentwe.us',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 238,
                'banned' => 'affordablewe.us',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 239,
                'banned' => 'afia.pro',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 240,
                'banned' => 'afrobacon.com',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 241,
                'banned' => 'afterhourswe.us',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 242,
                'banned' => 'agedmail.com',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 243,
                'banned' => 'agendawe.us',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 244,
                'banned' => 'agger.ro',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 245,
                'banned' => 'agilewe.us',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 246,
                'banned' => 'agorawe.us',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 247,
                'banned' => 'agtx.net',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 248,
                'banned' => 'aheadwe.us',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 249,
                'banned' => 'ahem.email',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 250,
                'banned' => 'ahk.jp',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 251,
                'banned' => 'ahmedkhlef.com',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 252,
                'banned' => 'air2token.com',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 253,
                'banned' => 'airmailbox.website',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 254,
                'banned' => 'airsi.de',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 255,
                'banned' => 'ajaxapp.net',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 256,
                'banned' => 'akapost.com',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 257,
                'banned' => 'akerd.com',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 258,
                'banned' => 'akgq701.com',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 259,
                'banned' => 'akmail.in',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 260,
                'banned' => 'akugu.com',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 261,
                'banned' => 'al-qaeda.us',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 262,
                'banned' => 'albionwe.us',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 263,
                'banned' => 'alchemywe.us',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 264,
                'banned' => 'alfaceti.com',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 265,
                'banned' => 'aliaswe.us',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 266,
                'banned' => 'alienware13.com',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 267,
                'banned' => 'aligamel.com',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 268,
                'banned' => 'alina-schiesser.ch',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 269,
                'banned' => 'alisongamel.com',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 270,
                'banned' => 'alivance.com',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 271,
                'banned' => 'alivewe.us',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 272,
                'banned' => 'all-cats.ru',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 273,
                'banned' => 'allaccesswe.us',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 274,
                'banned' => 'allamericanwe.us',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 275,
                'banned' => 'allaroundwe.us',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 276,
                'banned' => 'alldirectbuy.com',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 277,
                'banned' => 'allegiancewe.us',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 278,
                'banned' => 'allegrowe.us',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 279,
                'banned' => 'allemojikeyboard.com',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 280,
                'banned' => 'allgoodwe.us',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 281,
                'banned' => 'alliancewe.us',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 282,
                'banned' => 'allinonewe.us',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 283,
                'banned' => 'allofthem.net',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 284,
                'banned' => 'alloutwe.us',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 285,
                'banned' => 'allowed.org',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 286,
                'banned' => 'alloywe.us',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 287,
                'banned' => 'allprowe.us',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 288,
                'banned' => 'allseasonswe.us',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 289,
                'banned' => 'allstarwe.us',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 290,
                'banned' => 'allthegoodnamesaretaken.org',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 291,
                'banned' => 'allurewe.us',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 292,
                'banned' => 'almondwe.us',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 293,
                'banned' => 'alph.wtf',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 294,
                'banned' => 'alpha-web.net',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 295,
                'banned' => 'alphaomegawe.us',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 296,
                'banned' => 'alpinewe.us',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 297,
                'banned' => 'altairwe.us',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 298,
                'banned' => 'altitudewe.us',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 299,
                'banned' => 'altuswe.us',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 300,
                'banned' => 'ama-trade.de',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 301,
                'banned' => 'ama-trans.de',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 302,
                'banned' => 'amadeuswe.us',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 303,
                'banned' => 'amail.club',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 304,
                'banned' => 'amail.com',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 305,
                'banned' => 'amail1.com',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 306,
                'banned' => 'amail4.me',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 307,
                'banned' => 'amazon-aws.org',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 308,
                'banned' => 'amberwe.us',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 309,
                'banned' => 'ambiancewe.us',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 310,
                'banned' => 'ambitiouswe.us',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 311,
                'banned' => 'amelabs.com',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 312,
                'banned' => 'americanawe.us',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 313,
                'banned' => 'americasbestwe.us',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 314,
                'banned' => 'americaswe.us',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 315,
                'banned' => 'amicuswe.us',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 316,
                'banned' => 'amilegit.com',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 317,
                'banned' => 'amiri.net',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 318,
                'banned' => 'amiriindustries.com',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 319,
                'banned' => 'amplewe.us',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 320,
                'banned' => 'amplifiedwe.us',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 321,
                'banned' => 'amplifywe.us',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 322,
                'banned' => 'ampsylike.com',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 323,
                'banned' => 'analogwe.us',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 324,
                'banned' => 'analysiswe.us',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 325,
                'banned' => 'analyticalwe.us',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 326,
                'banned' => 'analyticswe.us',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 327,
                'banned' => 'analyticwe.us',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 328,
                'banned' => 'anappfor.com',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 329,
                'banned' => 'anappthat.com',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 330,
                'banned' => 'andreihusanu.ro',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 331,
                'banned' => 'andthen.us',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 332,
                'banned' => 'animesos.com',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 333,
                'banned' => 'anit.ro',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 334,
                'banned' => 'ano-mail.net',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 335,
                'banned' => 'anon-mail.de',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 336,
                'banned' => 'anonbox.net',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 337,
                'banned' => 'anonmail.top',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 338,
                'banned' => 'anonmails.de',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 339,
                'banned' => 'anonymail.dk',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 340,
                'banned' => 'anonymbox.com',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 341,
                'banned' => 'anonymized.org',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 342,
                'banned' => 'anonymousness.com',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 343,
                'banned' => 'anotherdomaincyka.tk',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 344,
                'banned' => 'ansibleemail.com',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 345,
                'banned' => 'anthony-junkmail.com',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 346,
                'banned' => 'antireg.com',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 347,
                'banned' => 'antireg.ru',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 348,
                'banned' => 'antispam.de',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 349,
                'banned' => 'antispam24.de',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 350,
                'banned' => 'antispammail.de',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 351,
                'banned' => 'any.pink',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 352,
                'banned' => 'anyalias.com',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 353,
                'banned' => 'aoeuhtns.com',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 354,
                'banned' => 'apfelkorps.de',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 355,
                'banned' => 'aphlog.com',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 356,
                'banned' => 'apkmd.com',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 357,
                'banned' => 'appc.se',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 358,
                'banned' => 'appinventor.nl',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 359,
                'banned' => 'appixie.com',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 360,
                'banned' => 'apps.dj',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 361,
                'banned' => 'appzily.com',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 362,
                'banned' => 'arduino.hk',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 363,
                'banned' => 'ariaz.jetzt',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 364,
                'banned' => 'armyspy.com',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 365,
                'banned' => 'aron.us',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 366,
                'banned' => 'arroisijewellery.com',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 367,
                'banned' => 'art-en-ligne.pro',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 368,
                'banned' => 'artman-conception.com',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 369,
                'banned' => 'arur01.tk',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 370,
                'banned' => 'arurgitu.gq',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 371,
                'banned' => 'arvato-community.de',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 372,
                'banned' => 'aschenbrandt.net',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 373,
                'banned' => 'asdasd.nl',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 374,
                'banned' => 'asdasd.ru',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 375,
                'banned' => 'ashleyandrew.com',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 376,
                'banned' => 'ask-mail.com',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 377,
                'banned' => 'asorent.com',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 378,
                'banned' => 'ass.pp.ua',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 379,
                'banned' => 'astonut.tk',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 380,
                'banned' => 'astroempires.info',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 381,
                'banned' => 'asu.mx',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 382,
                'banned' => 'asu.su',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 383,
                'banned' => 'at.hm',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 384,
                'banned' => 'at0mik.org',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 385,
                'banned' => 'atnextmail.com',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 386,
                'banned' => 'attnetwork.com',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 387,
                'banned' => 'augmentationtechnology.com',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 388,
                'banned' => 'ausgefallen.info',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 389,
                'banned' => 'auti.st',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 390,
                'banned' => 'autorobotica.com',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 391,
                'banned' => 'autosouvenir39.ru',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 392,
                'banned' => 'autotwollow.com',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 393,
                'banned' => 'autowb.com',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 394,
                'banned' => 'aver.com',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 395,
                'banned' => 'averdov.com',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 396,
                'banned' => 'avia-tonic.fr',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 397,
                'banned' => 'avls.pt',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 398,
                'banned' => 'awatum.de',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 399,
                'banned' => 'awdrt.org',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 400,
                'banned' => 'awiki.org',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 401,
                'banned' => 'awsoo.com',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 402,
                'banned' => 'axiz.org',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 403,
                'banned' => 'axon7zte.com',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 404,
                'banned' => 'axsup.net',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 405,
                'banned' => 'ayakamail.cf',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 406,
                'banned' => 'azazazatashkent.tk',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 407,
                'banned' => 'azcomputerworks.com',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 408,
                'banned' => 'azmeil.tk',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 409,
                'banned' => 'b1of96u.com',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 410,
                'banned' => 'b2bx.net',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 411,
                'banned' => 'b2cmail.de',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 412,
                'banned' => 'badgerland.eu',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 413,
                'banned' => 'badoop.com',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 414,
                'banned' => 'badpotato.tk',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 415,
                'banned' => 'balaket.com',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 416,
                'banned' => 'bangban.uk',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 417,
                'banned' => 'banit.club',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 418,
                'banned' => 'banit.me',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 419,
                'banned' => 'bank-opros1.ru',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 420,
                'banned' => 'bareed.ws',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 421,
                'banned' => 'barooko.com',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 422,
                'banned' => 'barryogorman.com',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 423,
                'banned' => 'bartdevos.be',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 424,
                'banned' => 'basscode.org',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 425,
                'banned' => 'bauwerke-online.com',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 426,
                'banned' => 'bazaaboom.com',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 427,
                'banned' => 'bbbbyyzz.info',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 428,
                'banned' => 'bbhost.us',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 429,
                'banned' => 'bbitf.com',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 430,
                'banned' => 'bbitj.com',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 431,
                'banned' => 'bbitq.com',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 432,
                'banned' => 'bcaoo.com',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 433,
                'banned' => 'bcast.ws',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 434,
                'banned' => 'bcb.ro',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 435,
                'banned' => 'bccto.me',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 436,
                'banned' => 'bdmuzic.pw',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 437,
                'banned' => 'beaconmessenger.com',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 438,
                'banned' => 'bearsarefuzzy.com',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 439,
                'banned' => 'beddly.com',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 440,
                'banned' => 'beefmilk.com',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 441,
                'banned' => 'belamail.org',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 442,
                'banned' => 'belljonestax.com',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 443,
                'banned' => 'beluckygame.com',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 444,
                'banned' => 'benipaula.org',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 445,
                'banned' => 'bepureme.com',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 446,
                'banned' => 'beribase.ru',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 447,
                'banned' => 'beribaza.ru',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 448,
                'banned' => 'berirabotay.ru',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 449,
                'banned' => 'best-john-boats.com',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 450,
                'banned' => 'bestchoiceusedcar.com',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 451,
                'banned' => 'bestlistbase.com',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 452,
                'banned' => 'bestoption25.club',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 453,
                'banned' => 'bestparadize.com',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 454,
                'banned' => 'bestsoundeffects.com',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 455,
                'banned' => 'besttempmail.com',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 456,
                'banned' => 'betr.co',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 457,
                'banned' => 'bgtmail.com',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 458,
                'banned' => 'bgx.ro',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 459,
                'banned' => 'bheps.com',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 460,
                'banned' => 'bidourlnks.com',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 461,
                'banned' => 'big1.us',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 462,
                'banned' => 'bigprofessor.so',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 463,
                'banned' => 'bigstring.com',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 464,
                'banned' => 'bigwhoop.co.za',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 465,
                'banned' => 'bij.pl',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 466,
                'banned' => 'binka.me',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 467,
                'banned' => 'binkmail.com',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 468,
                'banned' => 'binnary.com',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 469,
                'banned' => 'bio-muesli.info',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 470,
                'banned' => 'bio-muesli.net',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 471,
                'banned' => 'bione.co',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 472,
                'banned' => 'bitwhites.top',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 473,
                'banned' => 'bitymails.us',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 474,
                'banned' => 'blackgoldagency.ru',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 475,
                'banned' => 'blackmarket.to',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 476,
                'banned' => 'bladesmail.net',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 477,
                'banned' => 'blip.ch',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 478,
                'banned' => 'blnkt.net',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 479,
                'banned' => 'block521.com',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 480,
                'banned' => 'blogmyway.org',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 481,
                'banned' => 'blogos.net',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 482,
                'banned' => 'blogspam.ro',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 483,
                'banned' => 'blondemorkin.com',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 484,
                'banned' => 'bluedumpling.info',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 485,
                'banned' => 'bluewerks.com',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 486,
                'banned' => 'bnote.com',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 487,
                'banned' => 'boatmail.us',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 488,
                'banned' => 'bobmail.info',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 489,
                'banned' => 'bobmurchison.com',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 490,
                'banned' => 'bofthew.com',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 491,
                'banned' => 'bonobo.email',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 492,
                'banned' => 'boofx.com',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 493,
                'banned' => 'bookthemmore.com',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 494,
                'banned' => 'bootybay.de',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 495,
                'banned' => 'borged.com',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 496,
                'banned' => 'borged.net',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 497,
                'banned' => 'borged.org',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 498,
                'banned' => 'bot.nu',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 499,
                'banned' => 'boun.cr',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 500,
                'banned' => 'bouncr.com',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 501,
                'banned' => 'boxformail.in',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 502,
                'banned' => 'boximail.com',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 503,
                'banned' => 'boxmail.lol',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 504,
                'banned' => 'boxomail.live',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 505,
                'banned' => 'boxtemp.com.br',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 506,
                'banned' => 'bptfp.net',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 507,
                'banned' => 'brand-app.biz',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 508,
                'banned' => 'brandallday.net',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 509,
                'banned' => 'brasx.org',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 510,
                'banned' => 'breakthru.com',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 511,
                'banned' => 'brefmail.com',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 512,
                'banned' => 'brennendesreich.de',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 513,
                'banned' => 'briggsmarcus.com',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 514,
                'banned' => 'broadbandninja.com',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 515,
                'banned' => 'bsnow.net',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 516,
                'banned' => 'bspamfree.org',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 517,
                'banned' => 'bspooky.com',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 518,
                'banned' => 'bst-72.com',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 519,
                'banned' => 'btb-notes.com',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 520,
                'banned' => 'btc.email',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 521,
                'banned' => 'btcmail.pw',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 522,
                'banned' => 'btcmod.com',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 523,
                'banned' => 'btizet.pl',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 524,
                'banned' => 'buccalmassage.ru',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 525,
                'banned' => 'budaya-tionghoa.com',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 526,
                'banned' => 'budayationghoa.com',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 527,
                'banned' => 'buffemail.com',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 528,
                'banned' => 'bugfoo.com',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 529,
                'banned' => 'bugmenever.com',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 530,
                'banned' => 'bugmenot.com',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 531,
                'banned' => 'bukhariansiddur.com',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 532,
                'banned' => 'bulrushpress.com',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 533,
                'banned' => 'bum.net',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 534,
                'banned' => 'bumpymail.com',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 535,
                'banned' => 'bunchofidiots.com',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 536,
                'banned' => 'bund.us',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 537,
                'banned' => 'bundes-li.ga',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 538,
                'banned' => 'bunsenhoneydew.com',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 539,
                'banned' => 'burnthespam.info',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 540,
                'banned' => 'burstmail.info',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 541,
                'banned' => 'businessbackend.com',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 542,
                'banned' => 'businesssuccessislifesuccess.com',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 543,
                'banned' => 'buspad.org',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 544,
                'banned' => 'bussitussi.com',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 545,
                'banned' => 'buymoreplays.com',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 546,
                'banned' => 'buyordie.info',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 547,
                'banned' => 'buyusdomain.com',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 548,
                'banned' => 'buyusedlibrarybooks.org',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 549,
                'banned' => 'buzzcluby.com',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 550,
                'banned' => 'byebyemail.com',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 551,
                'banned' => 'byespm.com',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 552,
                'banned' => 'byom.de',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 553,
                'banned' => 'c51vsgq.com',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 554,
                'banned' => 'cachedot.net',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 555,
                'banned' => 'californiafitnessdeals.com',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 556,
                'banned' => 'cam4you.cc',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 557,
                'banned' => 'camping-grill.info',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 558,
                'banned' => 'candymail.de',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 559,
                'banned' => 'cane.pw',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 560,
                'banned' => 'capitalistdilemma.com',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 561,
                'banned' => 'car101.pro',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 562,
                'banned' => 'carbtc.net',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 563,
                'banned' => 'cars2.club',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 564,
                'banned' => 'carsencyclopedia.com',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 565,
                'banned' => 'cartelera.org',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 566,
                'banned' => 'caseedu.tk',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 567,
                'banned' => 'cashflow35.com',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 568,
                'banned' => 'casualdx.com',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 569,
                'banned' => 'catgroup.uk',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 570,
                'banned' => 'cavi.mx',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 571,
                'banned' => 'cbair.com',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 572,
                'banned' => 'cbes.net',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 573,
                'banned' => 'cc.liamria',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 574,
                'banned' => 'ccmail.uk',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 575,
                'banned' => 'cdfaq.com',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 576,
                'banned' => 'cdpa.cc',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 577,
                'banned' => 'ceed.se',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 578,
                'banned' => 'cek.pm',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 579,
                'banned' => 'cellurl.com',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 580,
                'banned' => 'centermail.com',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 581,
                'banned' => 'centermail.net',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 582,
                'banned' => 'cetpass.com',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 583,
                'banned' => 'cfo2go.ro',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 584,
                'banned' => 'chacuo.net',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 585,
                'banned' => 'chaichuang.com',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 586,
                'banned' => 'chalupaurybnicku.cz',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 587,
                'banned' => 'chammy.info',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 588,
                'banned' => 'chasefreedomactivate.com',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 589,
                'banned' => 'chatich.com',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 590,
                'banned' => 'cheaphub.net',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 591,
                'banned' => 'cheatmail.de',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 592,
                'banned' => 'chenbot.email',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 593,
                'banned' => 'chewydonut.com',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 594,
                'banned' => 'chibakenma.ml',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 595,
                'banned' => 'chickenkiller.com',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 596,
                'banned' => 'chielo.com',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 597,
                'banned' => 'childsavetrust.org',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 598,
                'banned' => 'chilkat.com',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 599,
                'banned' => 'chinamkm.com',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 600,
                'banned' => 'chithinh.com',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 601,
                'banned' => 'chitthi.in',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 602,
                'banned' => 'choco.la',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 603,
                'banned' => 'chogmail.com',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 604,
                'banned' => 'choicemail1.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 605,
                'banned' => 'chong-mail.com',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 606,
                'banned' => 'chong-mail.net',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 607,
                'banned' => 'chong-mail.org',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 608,
                'banned' => 'chumpstakingdumps.com',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 609,
                'banned' => 'cigar-auctions.com',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 610,
                'banned' => 'civikli.com',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 611,
                'banned' => 'civx.org',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 612,
                'banned' => 'ckaazaza.tk',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 613,
                'banned' => 'ckiso.com',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 614,
                'banned' => 'cl-cl.org',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 615,
                'banned' => 'cl0ne.net',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 616,
                'banned' => 'claimab.com',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 617,
                'banned' => 'clandest.in',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 618,
                'banned' => 'classesmail.com',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 619,
                'banned' => 'clearwatermail.info',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 620,
                'banned' => 'click-email.com',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 621,
                'banned' => 'clickdeal.co',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 622,
                'banned' => 'clipmail.eu',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 623,
                'banned' => 'clixser.com',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 624,
                'banned' => 'clonemoi.tk',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 625,
                'banned' => 'cloud-mail.top',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 626,
                'banned' => 'cloudns.cx',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 627,
                'banned' => 'clout.wiki',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 628,
                'banned' => 'clrmail.com',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 629,
                'banned' => 'cmail.club',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 630,
                'banned' => 'cmail.com',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 631,
                'banned' => 'cmail.net',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 632,
                'banned' => 'cmail.org',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 633,
                'banned' => 'cnamed.com',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 634,
                'banned' => 'cndps.com',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 635,
                'banned' => 'cnew.ir',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 636,
                'banned' => 'cnmsg.net',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 637,
                'banned' => 'cnsds.de',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 638,
                'banned' => 'co.cc',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 639,
                'banned' => 'cobarekyo1.ml',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 640,
                'banned' => 'cocoro.uk',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 641,
                'banned' => 'cocovpn.com',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 642,
                'banned' => 'codeandscotch.com',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 643,
                'banned' => 'codivide.com',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 644,
                'banned' => 'coffeetimer24.com',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 645,
                'banned' => 'coieo.com',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 646,
                'banned' => 'coin-host.net',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 647,
                'banned' => 'coinlink.club',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 648,
                'banned' => 'coldemail.info',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 649,
                'banned' => 'compareshippingrates.org',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 650,
                'banned' => 'completegolfswing.com',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 651,
                'banned' => 'comwest.de',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 652,
                'banned' => 'conf.work',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 653,
                'banned' => 'consumerriot.com',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 654,
                'banned' => 'contbay.com',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 655,
                'banned' => 'cooh-2.site',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 656,
                'banned' => 'coolandwacky.us',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 657,
                'banned' => 'coolimpool.org',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 658,
                'banned' => 'coreclip.com',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 659,
                'banned' => 'cosmorph.com',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 660,
                'banned' => 'courrieltemporaire.com',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 661,
                'banned' => 'coza.ro',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 662,
                'banned' => 'crankhole.com',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 663,
                'banned' => 'crapmail.org',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 664,
                'banned' => 'crastination.de',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 665,
                'banned' => 'crazespaces.pw',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 666,
                'banned' => 'crazymailing.com',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 667,
                'banned' => 'cream.pink',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 668,
                'banned' => 'crepeau12.com',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 669,
                'banned' => 'cringemonster.com',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 670,
                'banned' => 'cross-law.ga',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 671,
                'banned' => 'cross-law.gq',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 672,
                'banned' => 'crossmailjet.com',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 673,
                'banned' => 'crossroadsmail.com',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 674,
                'banned' => 'crunchcompass.com',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 675,
                'banned' => 'crusthost.com',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 676,
                'banned' => 'cs.email',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 677,
                'banned' => 'csh.ro',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 678,
                'banned' => 'cszbl.com',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 679,
                'banned' => 'ctmailing.us',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 680,
                'banned' => 'ctos.ch',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 681,
                'banned' => 'cu.cc',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 682,
                'banned' => 'cubiclink.com',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 683,
                'banned' => 'cuendita.com',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 684,
                'banned' => 'cuirushi.org',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 685,
                'banned' => 'cuoly.com',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 686,
                'banned' => 'cupbest.com',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 687,
                'banned' => 'curlhph.tk',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 688,
                'banned' => 'curryworld.de',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 689,
                'banned' => 'cust.in',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 690,
                'banned' => 'cutout.club',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 691,
                'banned' => 'cutradition.com',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 692,
                'banned' => 'cuvox.de',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 693,
                'banned' => 'cyber-innovation.club',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 694,
                'banned' => 'cyber-phone.eu',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 695,
                'banned' => 'cylab.org',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 696,
                'banned' => 'd1yun.com',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 697,
                'banned' => 'd3p.dk',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 698,
                'banned' => 'daabox.com',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 699,
                'banned' => 'dab.ro',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 700,
                'banned' => 'dacoolest.com',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 701,
                'banned' => 'daemsteam.com',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 702,
                'banned' => 'daibond.info',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 703,
                'banned' => 'daily-email.com',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 704,
                'banned' => 'daintly.com',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 705,
                'banned' => 'damai.webcam',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 706,
                'banned' => 'dammexe.net',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 707,
                'banned' => 'damnthespam.com',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 708,
                'banned' => 'dandikmail.com',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 709,
                'banned' => 'darkharvestfilms.com',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 710,
                'banned' => 'daryxfox.net',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 711,
                'banned' => 'dasdasdascyka.tk',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 712,
                'banned' => 'dash-pads.com',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 713,
                'banned' => 'dataarca.com',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 714,
                'banned' => 'datarca.com',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 715,
                'banned' => 'datazo.ca',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 716,
                'banned' => 'datenschutz.ru',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 717,
                'banned' => 'datum2.com',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 718,
                'banned' => 'davidkoh.net',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 719,
                'banned' => 'davidlcreative.com',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 720,
                'banned' => 'dawin.com',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 721,
                'banned' => 'daymail.life',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 722,
                'banned' => 'daymailonline.com',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 723,
                'banned' => 'dayrep.com',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 724,
                'banned' => 'dbunker.com',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 725,
                'banned' => 'dcctb.com',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 726,
                'banned' => 'dcemail.com',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 727,
                'banned' => 'ddcrew.com',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 728,
                'banned' => 'de-a.org',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 729,
                'banned' => 'dea-21olympic.com',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 730,
                'banned' => 'deadaddress.com',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 731,
                'banned' => 'deadchildren.org',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 732,
                'banned' => 'deadfake.cf',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 733,
                'banned' => 'deadfake.ga',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 734,
                'banned' => 'deadfake.ml',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 735,
                'banned' => 'deadfake.tk',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 736,
                'banned' => 'deadspam.com',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 737,
                'banned' => 'deagot.com',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 738,
                'banned' => 'dealja.com',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 739,
                'banned' => 'dealrek.com',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 740,
                'banned' => 'deekayen.us',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 741,
                'banned' => 'defomail.com',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 742,
                'banned' => 'degradedfun.net',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 743,
                'banned' => 'deinbox.com',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 744,
                'banned' => 'delayload.com',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 745,
                'banned' => 'delayload.net',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 746,
                'banned' => 'delikkt.de',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 747,
                'banned' => 'delivrmail.com',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 748,
                'banned' => 'demen.ml',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 749,
                'banned' => 'dengekibunko.ga',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 750,
                'banned' => 'dengekibunko.gq',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 751,
                'banned' => 'dengekibunko.ml',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 752,
                'banned' => 'der-kombi.de',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 753,
                'banned' => 'derkombi.de',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 754,
                'banned' => 'derluxuswagen.de',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 755,
                'banned' => 'desoz.com',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 756,
                'banned' => 'despam.it',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 757,
                'banned' => 'despammed.com',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 758,
                'banned' => 'dev-null.cf',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 759,
                'banned' => 'dev-null.ga',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 760,
                'banned' => 'dev-null.gq',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 761,
                'banned' => 'dev-null.ml',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 762,
                'banned' => 'developermail.com',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 763,
                'banned' => 'devnullmail.com',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 764,
                'banned' => 'deyom.com',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 765,
                'banned' => 'dharmatel.net',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 766,
                'banned' => 'dhm.ro',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 767,
                'banned' => 'dhy.cc',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 768,
                'banned' => 'dialogus.com',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 769,
                'banned' => 'diapaulpainting.com',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 770,
                'banned' => 'dicopto.com',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 771,
                'banned' => 'digdig.org',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 772,
                'banned' => 'digital-message.com',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 773,
                'banned' => 'digitalesbusiness.info',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 774,
                'banned' => 'digitalmail.info',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 775,
                'banned' => 'digitalmariachis.com',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 776,
                'banned' => 'digitalsanctuary.com',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 777,
                'banned' => 'dildosfromspace.com',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 778,
                'banned' => 'dim-coin.com',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 779,
                'banned' => 'dingbone.com',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 780,
                'banned' => 'diolang.com',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 781,
                'banned' => 'directmail24.net',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 782,
                'banned' => 'disaq.com',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 783,
                'banned' => 'disbox.net',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 784,
                'banned' => 'disbox.org',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 785,
                'banned' => 'discard.cf',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 786,
                'banned' => 'discard.email',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 787,
                'banned' => 'discard.ga',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 788,
                'banned' => 'discard.gq',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 789,
                'banned' => 'discard.ml',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 790,
                'banned' => 'discard.tk',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 791,
                'banned' => 'discardmail.com',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 792,
                'banned' => 'discardmail.de',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 793,
                'banned' => 'discos4.com',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 794,
                'banned' => 'dishcatfish.com',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 795,
                'banned' => 'disign-concept.eu',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 796,
                'banned' => 'disign-revelation.com',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 797,
                'banned' => 'dispo.in',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 798,
                'banned' => 'dispomail.eu',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 799,
                'banned' => 'disposable-e.ml',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 800,
                'banned' => 'disposable-email.ml',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 801,
                'banned' => 'disposable.cf',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 802,
                'banned' => 'disposable.ga',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 803,
                'banned' => 'disposable.ml',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 804,
                'banned' => 'disposable.site',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 805,
                'banned' => 'disposableaddress.com',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 806,
                'banned' => 'disposableemailaddresses.com',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 807,
                'banned' => 'disposableinbox.com',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 808,
                'banned' => 'disposablemails.com',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 809,
                'banned' => 'dispose.it',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 810,
                'banned' => 'disposeamail.com',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 811,
                'banned' => 'disposemail.com',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 812,
                'banned' => 'disposemymail.com',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 813,
                'banned' => 'dispostable.com',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 814,
                'banned' => 'divad.ga',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 815,
                'banned' => 'divermail.com',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 816,
                'banned' => 'divismail.ru',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 817,
                'banned' => 'diwaq.com',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 818,
                'banned' => 'dlemail.ru',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 819,
                'banned' => 'dmarc.ro',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 820,
                'banned' => 'dndent.com',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 821,
                'banned' => 'dnses.ro',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 822,
                'banned' => 'doanart.com',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 823,
                'banned' => 'dob.jp',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 824,
                'banned' => 'dodgeit.com',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 825,
                'banned' => 'dodgemail.de',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 826,
                'banned' => 'dodgit.com',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 827,
                'banned' => 'dodgit.org',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 828,
                'banned' => 'dodsi.com',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 829,
                'banned' => 'doiea.com',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 830,
                'banned' => 'dolphinnet.net',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 831,
                'banned' => 'domforfb1.tk',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 832,
                'banned' => 'domforfb18.tk',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 833,
                'banned' => 'domforfb19.tk',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 834,
                'banned' => 'domforfb2.tk',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 835,
                'banned' => 'domforfb23.tk',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 836,
                'banned' => 'domforfb27.tk',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 837,
                'banned' => 'domforfb29.tk',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 838,
                'banned' => 'domforfb3.tk',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 839,
                'banned' => 'domforfb4.tk',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 840,
                'banned' => 'domforfb5.tk',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 841,
                'banned' => 'domforfb6.tk',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 842,
                'banned' => 'domforfb7.tk',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 843,
                'banned' => 'domforfb8.tk',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 844,
                'banned' => 'domforfb9.tk',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 845,
                'banned' => 'domozmail.com',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 846,
                'banned' => 'donebyngle.com',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 847,
                'banned' => 'donemail.ru',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 848,
                'banned' => 'dongqing365.com',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 849,
                'banned' => 'dontreg.com',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 850,
                'banned' => 'dontsendmespam.de',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 851,
                'banned' => 'doojazz.com',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 852,
                'banned' => 'doquier.tk',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 853,
                'banned' => 'dotman.de',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 854,
                'banned' => 'dotmsg.com',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 855,
                'banned' => 'dotslashrage.com',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 856,
                'banned' => 'doublemail.de',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 857,
                'banned' => 'douchelounge.com',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 858,
                'banned' => 'dozvon-spb.ru',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 859,
                'banned' => 'dp76.com',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 860,
                'banned' => 'dr69.site',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 861,
                'banned' => 'drdrb.com',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 862,
                'banned' => 'drdrb.net',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 863,
                'banned' => 'dred.ru',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 864,
                'banned' => 'drevo.si',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 865,
                'banned' => 'drivetagdev.com',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 866,
                'banned' => 'drmail.in',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 867,
                'banned' => 'droolingfanboy.de',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 868,
                'banned' => 'dropcake.de',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 869,
                'banned' => 'dropjar.com',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 870,
                'banned' => 'droplar.com',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 871,
                'banned' => 'dropmail.me',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 872,
                'banned' => 'dropsin.net',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 873,
                'banned' => 'drowblock.com',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 874,
                'banned' => 'dsgvo.party',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 875,
                'banned' => 'dsgvo.ru',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 876,
                'banned' => 'dshfjdafd.cloud',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 877,
                'banned' => 'dsiay.com',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 878,
                'banned' => 'dspwebservices.com',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 879,
                'banned' => 'duam.net',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 880,
                'banned' => 'duck2.club',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 881,
                'banned' => 'dudmail.com',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 882,
                'banned' => 'duk33.com',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 883,
                'banned' => 'dukedish.com',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 884,
                'banned' => 'dump-email.info',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 885,
                'banned' => 'dumpandjunk.com',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 886,
                'banned' => 'dumpmail.de',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 887,
                'banned' => 'dumpyemail.com',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 888,
                'banned' => 'durandinterstellar.com',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 889,
                'banned' => 'duskmail.com',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 890,
                'banned' => 'dwse.edu.pl',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 891,
                'banned' => 'dyceroprojects.com',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 892,
                'banned' => 'dz17.net',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 893,
                'banned' => 'e-mail.com',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 894,
                'banned' => 'e-mail.org',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 895,
                'banned' => 'e-marketstore.ru',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 896,
                'banned' => 'e-tomarigi.com',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 897,
                'banned' => 'e3z.de',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 898,
                'banned' => 'e4ward.com',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 899,
                'banned' => 'eanok.com',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 900,
                'banned' => 'easy-trash-mail.com',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 901,
                'banned' => 'easynetwork.info',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 902,
                'banned' => 'easytrashmail.com',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 903,
                'banned' => 'eatmea2z.club',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 904,
                'banned' => 'eay.jp',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 905,
                'banned' => 'ebbob.com',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 906,
                'banned' => 'ebeschlussbuch.de',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 907,
                'banned' => 'ecallheandi.com',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 908,
                'banned' => 'ecolo-online.fr',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 909,
                'banned' => 'edgex.ru',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 910,
                'banned' => 'edinburgh-airporthotels.com',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 911,
                'banned' => 'edv.to',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 912,
                'banned' => 'ee1.pl',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 913,
                'banned' => 'ee2.pl',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 914,
                'banned' => 'eeedv.de',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 915,
                'banned' => 'eelmail.com',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 916,
                'banned' => 'efxs.ca',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 917,
                'banned' => 'egzones.com',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 918,
                'banned' => 'einmalmail.de',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 919,
                'banned' => 'einrot.com',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 920,
                'banned' => 'einrot.de',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 921,
                'banned' => 'eintagsmail.de',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 922,
                'banned' => 'elearningjournal.org',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 923,
                'banned' => 'electro.mn',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 924,
                'banned' => 'elitevipatlantamodels.com',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 925,
                'banned' => 'elki-mkzn.ru',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 926,
                'banned' => 'email-fake.cf',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 927,
                'banned' => 'email-fake.com',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 928,
                'banned' => 'email-fake.ga',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 929,
                'banned' => 'email-fake.gq',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 930,
                'banned' => 'email-fake.ml',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 931,
                'banned' => 'email-fake.tk',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 932,
                'banned' => 'email-jetable.fr',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 933,
                'banned' => 'email-lab.com',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 934,
                'banned' => 'email-temp.com',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 935,
                'banned' => 'email.edu.pl',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 936,
                'banned' => 'email.net',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 937,
                'banned' => 'email1.pro',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 938,
                'banned' => 'email60.com',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 939,
                'banned' => 'emailage.cf',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 940,
                'banned' => 'emailage.ga',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 941,
                'banned' => 'emailage.gq',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 942,
                'banned' => 'emailage.ml',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 943,
                'banned' => 'emailage.tk',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 944,
                'banned' => 'emailate.com',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 945,
                'banned' => 'emailbin.net',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 946,
                'banned' => 'emailcu.icu',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 947,
                'banned' => 'emaildienst.de',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 948,
                'banned' => 'emaildrop.io',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 949,
                'banned' => 'emailfake.com',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 950,
                'banned' => 'emailfake.ml',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 951,
                'banned' => 'emailfreedom.ml',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 952,
                'banned' => 'emailgenerator.de',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 953,
                'banned' => 'emailgo.de',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 954,
                'banned' => 'emailias.com',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 955,
                'banned' => 'emailigo.de',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 956,
                'banned' => 'emailinfive.com',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 957,
                'banned' => 'emailisvalid.com',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 958,
                'banned' => 'emaillime.com',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 959,
                'banned' => 'emailmiser.com',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 960,
                'banned' => 'emailna.co',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 961,
                'banned' => 'emailnax.com',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 962,
                'banned' => 'emailo.pro',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 963,
                'banned' => 'emailondeck.com',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 964,
                'banned' => 'emailportal.info',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 965,
                'banned' => 'emailproxsy.com',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 966,
                'banned' => 'emailresort.com',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 967,
                'banned' => 'emails.ga',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 968,
                'banned' => 'emailsecurer.com',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 969,
                'banned' => 'emailsensei.com',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 970,
                'banned' => 'emailsingularity.net',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 971,
                'banned' => 'emailspam.cf',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 972,
                'banned' => 'emailspam.ga',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 973,
                'banned' => 'emailspam.gq',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 974,
                'banned' => 'emailspam.ml',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 975,
                'banned' => 'emailspam.tk',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 976,
                'banned' => 'emailsy.info',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 977,
                'banned' => 'emailtech.info',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 978,
                'banned' => 'emailtemporanea.com',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 979,
                'banned' => 'emailtemporanea.net',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 980,
                'banned' => 'emailtemporar.ro',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 981,
                'banned' => 'emailtemporario.com.br',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 982,
                'banned' => 'emailthe.net',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 983,
                'banned' => 'emailtmp.com',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 984,
                'banned' => 'emailto.de',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 985,
                'banned' => 'emailure.net',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 986,
                'banned' => 'emailwarden.com',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 987,
                'banned' => 'emailxfer.com',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 988,
                'banned' => 'emailz.cf',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 989,
                'banned' => 'emailz.ga',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 990,
                'banned' => 'emailz.gq',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 991,
                'banned' => 'emailz.ml',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 992,
                'banned' => 'emeil.in',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 993,
                'banned' => 'emeil.ir',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 994,
                'banned' => 'emeraldwebmail.com',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 995,
                'banned' => 'emil.com',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 996,
                'banned' => 'emkei.cf',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 997,
                'banned' => 'emkei.ga',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 998,
                'banned' => 'emkei.gq',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 999,
                'banned' => 'emkei.ml',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 1000,
                'banned' => 'emkei.tk',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'banned' => 'eml.pp.ua',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 1002,
                'banned' => 'emlhub.com',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 1003,
                'banned' => 'emlpro.com',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 1004,
                'banned' => 'emltmp.com',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 1005,
                'banned' => 'empireanime.ga',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 1006,
                'banned' => 'emstjzh.com',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 1007,
                'banned' => 'emz.net',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 1008,
                'banned' => 'enayu.com',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 1009,
                'banned' => 'enterto.com',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 1010,
                'banned' => 'envy17.com',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 1011,
                'banned' => 'eoffice.top',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 1012,
                'banned' => 'eoopy.com',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 1013,
                'banned' => 'epb.ro',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 1014,
                'banned' => 'ephemail.net',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 1015,
                'banned' => 'ephemeral.email',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 1016,
                'banned' => 'eposta.buzz',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 1017,
                'banned' => 'eposta.work',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 1018,
                'banned' => 'eqiluxspam.ga',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 1019,
                'banned' => 'ereplyzy.com',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 1020,
                'banned' => 'ericjohnson.ml',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 1021,
                'banned' => 'eripo.net',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 1022,
                'banned' => 'ero-tube.org',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 1023,
                'banned' => 'esadverse.com',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 1024,
                'banned' => 'esbano-ru.ru',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 1025,
                'banned' => 'esc.la',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 1026,
                'banned' => 'escapehatchapp.com',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 1027,
                'banned' => 'esemay.com',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 1028,
                'banned' => 'esgeneri.com',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 1029,
                'banned' => 'esiix.com',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 1030,
                'banned' => 'esprity.com',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 1031,
                'banned' => 'estate-invest.fr',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 1032,
                'banned' => 'eth2btc.info',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 1033,
                'banned' => 'ether123.net',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 1034,
                'banned' => 'ethereum1.top',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 1035,
                'banned' => 'ethersports.org',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 1036,
                'banned' => 'ethersportz.info',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 1037,
                'banned' => 'etotvibor.ru',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 1038,
                'banned' => 'etranquil.com',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 1039,
                'banned' => 'etranquil.net',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 1040,
                'banned' => 'etranquil.org',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 1041,
                'banned' => 'euaqa.com',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 1042,
                'banned' => 'evanfox.info',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 1043,
                'banned' => 'eveav.com',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 1044,
                'banned' => 'evilcomputer.com',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 1045,
                'banned' => 'evopo.com',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 1046,
                'banned' => 'evyush.com',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 1047,
                'banned' => 'exdonuts.com',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 1048,
                'banned' => 'exelica.com',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 1049,
                'banned' => 'existiert.net',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 1050,
                'banned' => 'exitstageleft.net',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 1051,
                'banned' => 'explodemail.com',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 1052,
                'banned' => 'express.net.ua',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 1053,
                'banned' => 'extracurricularsociety.com',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 1054,
                'banned' => 'extremail.ru',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 1055,
                'banned' => 'eyepaste.com',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 1056,
                'banned' => 'ez.lv',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 1057,
                'banned' => 'ezehe.com',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 1058,
                'banned' => 'ezfill.com',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 1059,
                'banned' => 'ezstest.com',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 1060,
                'banned' => 'ezztt.com',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 1061,
                'banned' => 'f4k.es',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 1062,
                'banned' => 'f5.si',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 1063,
                'banned' => 'facebook-email.cf',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 1064,
                'banned' => 'facebook-email.ga',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 1065,
                'banned' => 'facebook-email.ml',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 1066,
                'banned' => 'facebookmail.gq',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 1067,
                'banned' => 'facebookmail.ml',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 1068,
                'banned' => 'fackme.gq',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 1069,
                'banned' => 'fadingemail.com',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 1070,
                'banned' => 'faecesmail.me',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 1071,
                'banned' => 'fag.wf',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 1072,
                'banned' => 'failbone.com',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 1073,
                'banned' => 'faithkills.com',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 1074,
                'banned' => 'fake-box.com',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 1075,
                'banned' => 'fake-email.pp.ua',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 1076,
                'banned' => 'fake-mail.cf',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 1077,
                'banned' => 'fake-mail.ga',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 1078,
                'banned' => 'fake-mail.ml',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 1079,
                'banned' => 'fakedemail.com',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 1080,
                'banned' => 'fakeinbox.cf',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 1081,
                'banned' => 'fakeinbox.com',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 1082,
                'banned' => 'fakeinbox.ga',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 1083,
                'banned' => 'fakeinbox.info',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 1084,
                'banned' => 'fakeinbox.ml',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 1085,
                'banned' => 'fakeinbox.tk',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 1086,
                'banned' => 'fakeinformation.com',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 1087,
                'banned' => 'fakemail.fr',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 1088,
                'banned' => 'fakemail.io',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 1089,
                'banned' => 'fakemailgenerator.com',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 1090,
                'banned' => 'fakemailz.com',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 1091,
                'banned' => 'fallinhay.com',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 1092,
                'banned' => 'fammix.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 1093,
                'banned' => 'fanclub.pm',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 1094,
                'banned' => 'fangoh.com',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 1095,
                'banned' => 'fansworldwide.de',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 1096,
                'banned' => 'fantasymail.de',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 1097,
                'banned' => 'farrse.co.uk',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 1098,
                'banned' => 'fast-email.info',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 1099,
                'banned' => 'fast-mail.fr',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 1100,
                'banned' => 'fastacura.com',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 1101,
                'banned' => 'fastchevy.com',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 1102,
                'banned' => 'fastchrysler.com',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 1103,
                'banned' => 'fasternet.biz',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 1104,
                'banned' => 'fastkawasaki.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 1105,
                'banned' => 'fastmazda.com',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 1106,
                'banned' => 'fastmitsubishi.com',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 1107,
                'banned' => 'fastnissan.com',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 1108,
                'banned' => 'fastsubaru.com',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 1109,
                'banned' => 'fastsuzuki.com',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 1110,
                'banned' => 'fasttoyota.com',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 1111,
                'banned' => 'fastyamaha.com',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 1112,
                'banned' => 'fatflap.com',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 1113,
                'banned' => 'fbma.tk',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 1114,
                'banned' => 'fddns.ml',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 1115,
                'banned' => 'fdfdsfds.com',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 1116,
                'banned' => 'femailtor.com',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 1117,
                'banned' => 'fer-gabon.org',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 1118,
                'banned' => 'fermaxxi.ru',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 1119,
                'banned' => 'fettometern.com',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 1120,
                'banned' => 'fexbox.org',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 1121,
                'banned' => 'fexbox.ru',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 1122,
                'banned' => 'fexpost.com',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 1123,
                'banned' => 'fextemp.com',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 1124,
                'banned' => 'ficken.de',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 1125,
                'banned' => 'fictionsite.com',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 1126,
                'banned' => 'fightallspam.com',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 1127,
                'banned' => 'figjs.com',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 1128,
                'banned' => 'figshot.com',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 1129,
                'banned' => 'figurescoin.com',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 1130,
                'banned' => 'fiifke.de',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 1131,
                'banned' => 'filbert4u.com',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 1132,
                'banned' => 'filberts4u.com',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 1133,
                'banned' => 'film-blog.biz',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 1134,
                'banned' => 'filzmail.com',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 1135,
                'banned' => 'findemail.info',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 1136,
                'banned' => 'findu.pl',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 1137,
                'banned' => 'finews.biz',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 1138,
                'banned' => 'fir.hk',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 1139,
                'banned' => 'firemailbox.club',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 1140,
                'banned' => 'fitnesrezink.ru',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 1141,
                'banned' => 'fivemail.de',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 1142,
                'banned' => 'fixmail.tk',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 1143,
                'banned' => 'fizmail.com',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 1144,
                'banned' => 'fleckens.hu',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 1145,
                'banned' => 'flemail.ru',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 1146,
                'banned' => 'fliegender.fish',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 1147,
                'banned' => 'flowu.com',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 1148,
                'banned' => 'flu.cc',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 1149,
                'banned' => 'fluidsoft.us',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 1150,
                'banned' => 'flurred.com',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 1151,
                'banned' => 'fly-ts.de',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 1152,
                'banned' => 'flyinggeek.net',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 1153,
                'banned' => 'flymail.tk',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 1154,
                'banned' => 'flyspam.com',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 1155,
                'banned' => 'foobarbot.net',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 1156,
                'banned' => 'footard.com',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 1157,
                'banned' => 'foreastate.com',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 1158,
                'banned' => 'forecastertests.com',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 1159,
                'banned' => 'foreskin.cf',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 1160,
                'banned' => 'foreskin.ga',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 1161,
                'banned' => 'foreskin.gq',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 1162,
                'banned' => 'foreskin.ml',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 1163,
                'banned' => 'foreskin.tk',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 1164,
                'banned' => 'forgetmail.com',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 1165,
                'banned' => 'fornow.eu',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 1166,
                'banned' => 'forspam.net',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 1167,
                'banned' => 'forward.cat',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 1168,
                'banned' => 'fosil.pro',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 1169,
                'banned' => 'foxja.com',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 1170,
                'banned' => 'foxtrotter.info',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 1171,
                'banned' => 'fr.cr',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 1172,
                'banned' => 'fr.nf',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 1173,
                'banned' => 'fr33mail.info',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 1174,
                'banned' => 'fragolina2.tk',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 1175,
                'banned' => 'frapmail.com',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 1176,
                'banned' => 'frappina.tk',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 1177,
                'banned' => 'free-email.cf',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 1178,
                'banned' => 'free-email.ga',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 1179,
                'banned' => 'free-temp.net',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 1180,
                'banned' => 'freebabysittercam.com',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 1181,
                'banned' => 'freeblackbootytube.com',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 1182,
                'banned' => 'freecat.net',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 1183,
                'banned' => 'freedom4you.info',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 1184,
                'banned' => 'freedompop.us',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 1185,
                'banned' => 'freefattymovies.com',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 1186,
                'banned' => 'freehotmail.net',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 1187,
                'banned' => 'freeinbox.email',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 1188,
                'banned' => 'freelance-france.eu',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 1189,
                'banned' => 'freeletter.me',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 1190,
                'banned' => 'freemail.ms',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 1191,
                'banned' => 'freemails.cf',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 1192,
                'banned' => 'freemails.ga',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 1193,
                'banned' => 'freemails.ml',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 1194,
                'banned' => 'freemeil.ga',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 1195,
                'banned' => 'freemeil.gq',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 1196,
                'banned' => 'freemeil.ml',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 1197,
                'banned' => 'freeml.net',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 1198,
                'banned' => 'freeplumpervideos.com',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 1199,
                'banned' => 'freerubli.ru',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 1200,
                'banned' => 'freeschoolgirlvids.com',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 1201,
                'banned' => 'freesistercam.com',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 1202,
                'banned' => 'freeteenbums.com',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 1203,
                'banned' => 'freundin.ru',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 1204,
                'banned' => 'friendlymail.co.uk',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 1205,
                'banned' => 'front14.org',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 1206,
                'banned' => 'frwdmail.com',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 1207,
                'banned' => 'ftp.sh',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 1208,
                'banned' => 'ftpinc.ca',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 1209,
                'banned' => 'fuckedupload.com',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 1210,
                'banned' => 'fuckingduh.com',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 1211,
                'banned' => 'fuckme69.club',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 1212,
                'banned' => 'fucknloveme.top',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 1213,
                'banned' => 'fuckxxme.top',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 1214,
                'banned' => 'fudgerub.com',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 1215,
                'banned' => 'fuirio.com',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 1216,
                'banned' => 'fukaru.com',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 1217,
                'banned' => 'fukurou.ch',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 1218,
                'banned' => 'fullangle.org',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 1219,
                'banned' => 'fulvie.com',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 1220,
                'banned' => 'fun64.com',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 1221,
                'banned' => 'funnycodesnippets.com',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 1222,
                'banned' => 'funnymail.de',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 1223,
                'banned' => 'furzauflunge.de',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 1224,
                'banned' => 'futuramind.com',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 1225,
                'banned' => 'fuwa.be',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 1226,
                'banned' => 'fuwa.li',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 1227,
                'banned' => 'fuwamofu.com',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 1228,
                'banned' => 'fuwari.be',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 1229,
                'banned' => 'fux0ringduh.com',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 1230,
                'banned' => 'fxnxs.com',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 1231,
                'banned' => 'fyii.de',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 1232,
                'banned' => 'g14l71lb.com',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 1233,
                'banned' => 'g1xmail.top',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 1234,
                'banned' => 'g2xmail.top',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 1235,
                'banned' => 'g3xmail.top',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 1236,
                'banned' => 'g4hdrop.us',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 1237,
                'banned' => 'gafy.net',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 1238,
                'banned' => 'gage.ga',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 1239,
                'banned' => 'galaxy.tv',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 1240,
                'banned' => 'gally.jp',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 1241,
                'banned' => 'gamail.top',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 1242,
                'banned' => 'gamegregious.com',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 1243,
                'banned' => 'gamgling.com',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 1244,
                'banned' => 'garasikita.pw',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 1245,
                'banned' => 'garbagecollector.org',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 1246,
                'banned' => 'garbagemail.org',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 1247,
                'banned' => 'gardenscape.ca',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 1248,
                'banned' => 'garizo.com',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 1249,
                'banned' => 'garliclife.com',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 1250,
                'banned' => 'garrymccooey.com',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 1251,
                'banned' => 'gav0.com',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 1252,
                'banned' => 'gawab.com',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 1253,
                'banned' => 'gbcmail.win',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 1254,
                'banned' => 'gbmail.top',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 1255,
                'banned' => 'gcmail.top',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 1256,
                'banned' => 'gdmail.top',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 1257,
                'banned' => 'gedmail.win',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 1258,
                'banned' => 'geekforex.com',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 1259,
                'banned' => 'geew.ru',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 1260,
                'banned' => 'gehensiemirnichtaufdensack.de',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 1261,
                'banned' => 'geldwaschmaschine.de',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 1262,
                'banned' => 'gelitik.in',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 1263,
                'banned' => 'genderfuck.net',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 1264,
                'banned' => 'geronra.com',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 1265,
                'banned' => 'geschent.biz',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 1266,
                'banned' => 'get-mail.cf',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 1267,
                'banned' => 'get-mail.ga',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 1268,
                'banned' => 'get-mail.ml',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 1269,
                'banned' => 'get-mail.tk',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 1270,
                'banned' => 'get.pp.ua',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 1271,
                'banned' => 'get1mail.com',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 1272,
                'banned' => 'get2mail.fr',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 1273,
                'banned' => 'getairmail.cf',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 1274,
                'banned' => 'getairmail.com',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 1275,
                'banned' => 'getairmail.ga',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 1276,
                'banned' => 'getairmail.gq',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 1277,
                'banned' => 'getairmail.ml',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 1278,
                'banned' => 'getairmail.tk',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 1279,
                'banned' => 'geteit.com',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 1280,
                'banned' => 'getfun.men',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 1281,
                'banned' => 'getmails.eu',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 1282,
                'banned' => 'getnada.com',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 1283,
                'banned' => 'getnowtoday.cf',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 1284,
                'banned' => 'getonemail.com',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 1285,
                'banned' => 'getonemail.net',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 1286,
                'banned' => 'getover.de',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 1287,
                'banned' => 'getsimpleemail.com',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 1288,
                'banned' => 'gett.icu',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 1289,
                'banned' => 'gexik.com',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 1290,
                'banned' => 'ggmal.ml',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 1291,
                'banned' => 'ghosttexter.de',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 1292,
                'banned' => 'giacmosuaviet.info',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 1293,
                'banned' => 'giaiphapmuasam.com',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 1294,
                'banned' => 'giantmail.de',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 1295,
                'banned' => 'gifto12.com',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 1296,
                'banned' => 'ginzi.be',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 1297,
                'banned' => 'ginzi.co.uk',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 1298,
                'banned' => 'ginzi.es',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 1299,
                'banned' => 'ginzi.net',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 1300,
                'banned' => 'ginzy.co.uk',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 1301,
                'banned' => 'ginzy.eu',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 1302,
                'banned' => 'girlmail.win',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 1303,
                'banned' => 'girlsindetention.com',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 1304,
                'banned' => 'girlsundertheinfluence.com',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 1305,
                'banned' => 'gishpuppy.com',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 1306,
                'banned' => 'giveh2o.info',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 1307,
                'banned' => 'givememail.club',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 1308,
                'banned' => 'givmail.com',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 1309,
                'banned' => 'gixenmixen.com',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 1310,
                'banned' => 'glitch.sx',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 1311,
                'banned' => 'globaltouron.com',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 1312,
                'banned' => 'glubex.com',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 1313,
                'banned' => 'glucosegrin.com',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 1314,
                'banned' => 'gmal.com',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 1315,
                'banned' => 'gmatch.org',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 1316,
                'banned' => 'gmial.com',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 1317,
                'banned' => 'gmx1mail.top',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 1318,
                'banned' => 'gmxmail.top',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 1319,
                'banned' => 'gmxmail.win',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 1320,
                'banned' => 'gnctr-calgary.com',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 1321,
                'banned' => 'go2usa.info',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 1322,
                'banned' => 'go2vpn.net',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 1323,
                'banned' => 'goatmail.uk',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 1324,
                'banned' => 'goemailgo.com',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 1325,
                'banned' => 'golemico.com',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 1326,
                'banned' => 'gomail.in',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 1327,
                'banned' => 'goonby.com',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 1328,
                'banned' => 'goplaygame.ru',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 1329,
                'banned' => 'gorillaswithdirtyarmpits.com',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 1330,
                'banned' => 'goround.info',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 1331,
                'banned' => 'gosuslugi-spravka.ru',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 1332,
                'banned' => 'gothere.biz',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 1333,
                'banned' => 'gotmail.com',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 1334,
                'banned' => 'gotmail.net',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 1335,
                'banned' => 'gotmail.org',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 1336,
                'banned' => 'gowikibooks.com',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 1337,
                'banned' => 'gowikicampus.com',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 1338,
                'banned' => 'gowikicars.com',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 1339,
                'banned' => 'gowikifilms.com',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 1340,
                'banned' => 'gowikigames.com',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 1341,
                'banned' => 'gowikimusic.com',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 1342,
                'banned' => 'gowikinetwork.com',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 1343,
                'banned' => 'gowikitravel.com',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 1344,
                'banned' => 'gowikitv.com',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 1345,
                'banned' => 'grandmamail.com',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 1346,
                'banned' => 'grandmasmail.com',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 1347,
                'banned' => 'great-host.in',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 1348,
                'banned' => 'greencafe24.com',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 1349,
                'banned' => 'greendike.com',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 1350,
                'banned' => 'greenhousemail.com',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 1351,
                'banned' => 'greensloth.com',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 1352,
                'banned' => 'greggamel.com',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 1353,
                'banned' => 'greggamel.net',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 1354,
                'banned' => 'gregorsky.zone',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 1355,
                'banned' => 'gregorygamel.com',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 1356,
                'banned' => 'gregorygamel.net',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 1357,
                'banned' => 'grish.de',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 1358,
                'banned' => 'griuc.schule',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 1359,
                'banned' => 'grn.cc',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 1360,
                'banned' => 'groupbuff.com',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 1361,
                'banned' => 'grr.la',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 1362,
                'banned' => 'grugrug.ru',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 1363,
                'banned' => 'gruz-m.ru',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 1364,
                'banned' => 'gs-arc.org',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 1365,
                'banned' => 'gsredcross.org',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 1366,
                'banned' => 'gsrv.co.uk',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 1367,
                'banned' => 'gsxstring.ga',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 1368,
                'banned' => 'gudanglowongan.com',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 1369,
                'banned' => 'guerillamail.biz',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 1370,
                'banned' => 'guerillamail.com',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 1371,
                'banned' => 'guerillamail.de',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 1372,
                'banned' => 'guerillamail.info',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 1373,
                'banned' => 'guerillamail.net',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 1374,
                'banned' => 'guerillamail.org',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 1375,
                'banned' => 'guerillamailblock.com',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 1376,
                'banned' => 'guerrillamail.biz',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 1377,
                'banned' => 'guerrillamail.com',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 1378,
                'banned' => 'guerrillamail.de',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 1379,
                'banned' => 'guerrillamail.info',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 1380,
                'banned' => 'guerrillamail.net',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 1381,
                'banned' => 'guerrillamail.org',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 1382,
                'banned' => 'guerrillamailblock.com',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 1383,
                'banned' => 'gufum.com',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 1384,
                'banned' => 'gustr.com',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 1385,
                'banned' => 'gxemail.men',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 1386,
                'banned' => 'gynzi.co.uk',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 1387,
                'banned' => 'gynzi.es',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 1388,
                'banned' => 'gynzy.at',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 1389,
                'banned' => 'gynzy.es',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 1390,
                'banned' => 'gynzy.eu',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 1391,
                'banned' => 'gynzy.gr',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 1392,
                'banned' => 'gynzy.info',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 1393,
                'banned' => 'gynzy.lt',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 1394,
                'banned' => 'gynzy.mobi',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 1395,
                'banned' => 'gynzy.pl',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 1396,
                'banned' => 'gynzy.ro',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 1397,
                'banned' => 'gynzy.sk',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 1398,
                'banned' => 'gzb.ro',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 1399,
                'banned' => 'h8s.org',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 1400,
                'banned' => 'habitue.net',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 1401,
                'banned' => 'hacccc.com',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 1402,
                'banned' => 'hackersquad.tk',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 1403,
                'banned' => 'hackthatbit.ch',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 1404,
                'banned' => 'hahawrong.com',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 1405,
                'banned' => 'haida-edu.cn',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 1406,
                'banned' => 'hairs24.ru',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 1407,
                'banned' => 'haltospam.com',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 1408,
                'banned' => 'hamham.uk',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 1409,
                'banned' => 'hangxomcuatoilatotoro.ml',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 1410,
                'banned' => 'happy2023year.com',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 1411,
                'banned' => 'happydomik.ru',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 1412,
                'banned' => 'harakirimail.com',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 1413,
                'banned' => 'haribu.com',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 1414,
                'banned' => 'hartbot.de',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 1415,
                'banned' => 'hasanmail.ml',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 1416,
                'banned' => 'hat-geld.de',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 1417,
                'banned' => 'hatespam.org',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 1418,
                'banned' => 'hawrong.com',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 1419,
                'banned' => 'haydoo.com',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 1420,
                'banned' => 'hazelnut4u.com',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 1421,
                'banned' => 'hazelnuts4u.com',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 1422,
                'banned' => 'hazmatshipping.org',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 1423,
                'banned' => 'hccmail.win',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 1424,
                'banned' => 'headstrong.de',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 1425,
                'banned' => 'heathenhammer.com',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 1426,
                'banned' => 'heathenhero.com',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 1427,
                'banned' => 'hecat.es',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 1428,
                'banned' => 'heisei.be',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 1429,
                'banned' => 'hellodream.mobi',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 1430,
                'banned' => 'helloricky.com',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 1431,
                'banned' => 'helpinghandtaxcenter.org',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 1432,
                'banned' => 'helpjobs.ru',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 1433,
                'banned' => 'heros3.com',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 1434,
                'banned' => 'herp.in',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 1435,
                'banned' => 'herpderp.nl',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 1436,
                'banned' => 'hezll.com',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 1437,
                'banned' => 'hi5.si',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 1438,
                'banned' => 'hiddentragedy.com',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 1439,
                'banned' => 'hidebox.org',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 1440,
                'banned' => 'hidebusiness.xyz',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 1441,
                'banned' => 'hidemail.de',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 1442,
                'banned' => 'hidemail.pro',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 1443,
                'banned' => 'hidemail.us',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 1444,
                'banned' => 'hidzz.com',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 1445,
                'banned' => 'highbros.org',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 1446,
                'banned' => 'hiltonvr.com',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 1447,
                'banned' => 'himail.online',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 1448,
                'banned' => 'hmail.us',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 1449,
                'banned' => 'hmamail.com',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 1450,
                'banned' => 'hmh.ro',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 1451,
                'banned' => 'hoanggiaanh.com',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 1452,
                'banned' => 'hoanglong.tech',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 1453,
                'banned' => 'hochsitze.com',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 1454,
                'banned' => 'hola.org',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 1455,
                'banned' => 'holl.ga',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 1456,
                'banned' => 'honeys.be',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 1457,
                'banned' => 'honor-8.com',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 1458,
                'banned' => 'hopemail.biz',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 1459,
                'banned' => 'hornyalwary.top',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 1460,
                'banned' => 'host1s.com',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 1461,
                'banned' => 'hostcalls.com',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 1462,
                'banned' => 'hostguru.top',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 1463,
                'banned' => 'hostingmail.me',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 1464,
                'banned' => 'hostlaba.com',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 1465,
                'banned' => 'hot-mail.cf',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 1466,
                'banned' => 'hot-mail.ga',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 1467,
                'banned' => 'hot-mail.gq',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 1468,
                'banned' => 'hot-mail.ml',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 1469,
                'banned' => 'hot-mail.tk',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 1470,
                'banned' => 'hotmai.com',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 1471,
                'banned' => 'hotmailproduct.com',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 1472,
                'banned' => 'hotmial.com',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 1473,
                'banned' => 'hotpop.com',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 1474,
                'banned' => 'hotprice.co',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 1475,
                'banned' => 'hotsoup.be',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 1476,
                'banned' => 'housat.com',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 1477,
                'banned' => 'hpc.tw',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 1478,
                'banned' => 'hs.vc',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 1479,
                'banned' => 'ht.cx',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 1480,
                'banned' => 'huangniu8.com',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 1481,
                'banned' => 'hukkmu.tk',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 1482,
                'banned' => 'hulapla.de',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 1483,
                'banned' => 'humaility.com',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 1484,
                'banned' => 'hungpackage.com',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 1485,
                'banned' => 'hushmail.cf',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 1486,
                'banned' => 'huskion.net',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 1487,
                'banned' => 'hvastudiesucces.nl',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 1488,
                'banned' => 'hwsye.net',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 1489,
                'banned' => 'hypenated-domain.com',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 1490,
                'banned' => 'i2pmail.org',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 1491,
                'banned' => 'i6.cloudns.cc',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 1492,
                'banned' => 'iaoss.com',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 1493,
                'banned' => 'ibnuh.bz',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 1494,
                'banned' => 'icantbelieveineedtoexplainthisshit.com',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 1495,
                'banned' => 'icemail.club',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 1496,
                'banned' => 'ichigo.me',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 1497,
                'banned' => 'icx.in',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 1498,
                'banned' => 'icx.ro',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 1499,
                'banned' => 'icznn.com',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 1500,
                'banned' => 'idx4.com',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 1501,
                'banned' => 'idxue.com',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 1502,
                'banned' => 'ieatspam.eu',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 1503,
                'banned' => 'ieatspam.info',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 1504,
                'banned' => 'ieh-mail.de',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 1505,
                'banned' => 'iencm.com',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 1506,
                'banned' => 'iffymedia.com',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 1507,
                'banned' => 'ige.es',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 1508,
                'banned' => 'igg.biz',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 1509,
                'banned' => 'ignoremail.com',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 1510,
                'banned' => 'ihateyoualot.info',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 1511,
                'banned' => 'ihazspam.ca',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 1512,
                'banned' => 'iheartspam.org',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 1513,
                'banned' => 'ikbenspamvrij.nl',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 1514,
                'banned' => 'illistnoise.com',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 1515,
                'banned' => 'ilovespam.com',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 1516,
                'banned' => 'imail1.net',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 1517,
                'banned' => 'imails.info',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 1518,
                'banned' => 'imailt.com',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 1519,
                'banned' => 'imgof.com',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 1520,
                'banned' => 'imgv.de',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 1521,
                'banned' => 'immo-gerance.info',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 1522,
                'banned' => 'imperialcnk.com',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 1523,
                'banned' => 'imstations.com',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 1524,
                'banned' => 'imul.info',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 1525,
                'banned' => 'in-ulm.de',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 1526,
                'banned' => 'in2reach.com',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 1527,
                'banned' => 'inactivemachine.com',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 1528,
                'banned' => 'inbax.tk',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 1529,
                'banned' => 'inbound.plus',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 1530,
                'banned' => 'inbox.si',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 1531,
                'banned' => 'inbox2.info',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 1532,
                'banned' => 'inboxalias.com',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 1533,
                'banned' => 'inboxbear.com',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 1534,
                'banned' => 'inboxclean.com',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 1535,
                'banned' => 'inboxclean.org',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 1536,
                'banned' => 'inboxdesign.me',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 1537,
                'banned' => 'inboxed.im',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 1538,
                'banned' => 'inboxed.pw',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 1539,
                'banned' => 'inboxkitten.com',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 1540,
                'banned' => 'inboxproxy.com',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 1541,
                'banned' => 'inboxstore.me',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 1542,
                'banned' => 'inclusiveprogress.com',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 1543,
                'banned' => 'incognitomail.com',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 1544,
                'banned' => 'incognitomail.net',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 1545,
                'banned' => 'incognitomail.org',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 1546,
                'banned' => 'incq.com',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 1547,
                'banned' => 'ind.st',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 1548,
                'banned' => 'indieclad.com',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 1549,
                'banned' => 'indirect.ws',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 1550,
                'banned' => 'indomaed.pw',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 1551,
                'banned' => 'indomina.cf',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 1552,
                'banned' => 'indoserver.stream',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 1553,
                'banned' => 'indosukses.press',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 1554,
                'banned' => 'ineec.net',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 1555,
                'banned' => 'infocom.zp.ua',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 1556,
                'banned' => 'inggo.org',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 1557,
                'banned' => 'inkiny.com',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 1558,
                'banned' => 'inkomail.com',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 1559,
                'banned' => 'inmynetwork.tk',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 1560,
                'banned' => 'inoutmail.de',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 1561,
                'banned' => 'inoutmail.eu',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 1562,
                'banned' => 'inoutmail.info',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 1563,
                'banned' => 'inoutmail.net',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 1564,
                'banned' => 'inpwa.com',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 1565,
                'banned' => 'insanumingeniumhomebrew.com',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 1566,
                'banned' => 'insorg-mail.info',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 1567,
                'banned' => 'instaddr.ch',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 1568,
                'banned' => 'instaddr.uk',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 1569,
                'banned' => 'instaddr.win',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 1570,
                'banned' => 'instance-email.com',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 1571,
                'banned' => 'instant-mail.de',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 1572,
                'banned' => 'instantblingmail.info',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 1573,
                'banned' => 'instantemailaddress.com',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 1574,
                'banned' => 'instantmail.fr',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 1575,
                'banned' => 'instmail.uk',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 1576,
                'banned' => 'internet-v-stavropole.ru',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 1577,
                'banned' => 'internetkeno.com',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 1578,
                'banned' => 'internetoftags.com',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 1579,
                'banned' => 'interstats.org',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 1580,
                'banned' => 'intersteller.com',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 1581,
                'banned' => 'intopwa.com',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 1582,
                'banned' => 'intopwa.net',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 1583,
                'banned' => 'intopwa.org',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 1584,
                'banned' => 'investore.co',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 1585,
                'banned' => 'iozak.com',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 1586,
                'banned' => 'ip4.pp.ua',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 1587,
                'banned' => 'ip6.li',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 1588,
                'banned' => 'ip6.pp.ua',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 1589,
                'banned' => 'ipoo.org',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 1590,
                'banned' => 'ippandansei.tk',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 1591,
                'banned' => 'ipsur.org',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 1592,
                'banned' => 'irabops.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 1593,
                'banned' => 'irc.so',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 1594,
                'banned' => 'irish2me.com',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 1595,
                'banned' => 'irishspringrealty.com',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 1596,
                'banned' => 'iroid.com',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 1597,
                'banned' => 'ironiebehindert.de',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 1598,
                'banned' => 'irssi.tv',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 1599,
                'banned' => 'is.af',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 1600,
                'banned' => 'isdaq.com',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 1601,
                'banned' => 'ishop2k.com',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 1602,
                'banned' => 'isosq.com',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 1603,
                'banned' => 'istii.ro',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 1604,
                'banned' => 'isukrainestillacountry.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 1605,
                'banned' => 'it7.ovh',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 1606,
                'banned' => 'italy-mail.com',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 1607,
                'banned' => 'itcompu.com',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 1608,
                'banned' => 'itfast.net',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 1609,
                'banned' => 'itsjiff.com',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 1610,
                'banned' => 'itunesgiftcodegenerator.com',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 1611,
                'banned' => 'iubridge.com',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 1612,
                'banned' => 'iuemail.men',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 1613,
                'banned' => 'iwi.net',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 1614,
                'banned' => 'ixaks.com',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 1615,
                'banned' => 'ixx.io',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 1616,
                'banned' => 'j-p.us',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 1617,
                'banned' => 'jafps.com',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 1618,
                'banned' => 'jaga.email',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 1619,
                'banned' => 'jajxz.com',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 1620,
                'banned' => 'janproz.com',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 1621,
                'banned' => 'jaqis.com',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 1622,
                'banned' => 'jdmadventures.com',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 1623,
                'banned' => 'jdz.ro',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 1624,
                'banned' => 'je-recycle.info',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 1625,
                'banned' => 'jellow.ml',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 1626,
                'banned' => 'jellyrolls.com',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 1627,
                'banned' => 'jeoce.com',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 1628,
                'banned' => 'jet-renovation.fr',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 1629,
                'banned' => 'jetable.com',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 1630,
                'banned' => 'jetable.net',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 1631,
                'banned' => 'jetable.org',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 1632,
                'banned' => 'jetable.pp.ua',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 1633,
                'banned' => 'ji5.de',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 1634,
                'banned' => 'ji6.de',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 1635,
                'banned' => 'ji7.de',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 1636,
                'banned' => 'jiooq.com',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 1637,
                'banned' => 'jmail.ovh',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 1638,
                'banned' => 'jmail.ro',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 1639,
                'banned' => 'jnxjn.com',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 1640,
                'banned' => 'jobbikszimpatizans.hu',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 1641,
                'banned' => 'jobbrett.com',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 1642,
                'banned' => 'jobposts.net',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 1643,
                'banned' => 'jobs-to-be-done.net',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 1644,
                'banned' => 'joelpet.com',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 1645,
                'banned' => 'joetestalot.com',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 1646,
                'banned' => 'jopho.com',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 1647,
                'banned' => 'joseihorumon.info',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 1648,
                'banned' => 'josse.ltd',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 1649,
                'banned' => 'jourrapide.com',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 1650,
                'banned' => 'jpco.org',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 1651,
                'banned' => 'jsrsolutions.com',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 1652,
                'banned' => 'jumonji.tk',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 1653,
                'banned' => 'jungkamushukum.com',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 1654,
                'banned' => 'junk.to',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 1655,
                'banned' => 'junk1e.com',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 1656,
                'banned' => 'junkmail.ga',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 1657,
                'banned' => 'junkmail.gq',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 1658,
                'banned' => 'just-email.com',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 1659,
                'banned' => 'justemail.ml',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 1660,
                'banned' => 'juyouxi.com',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 1661,
                'banned' => 'jwork.ru',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 1662,
                'banned' => 'kademen.com',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 1663,
                'banned' => 'kadokawa.cf',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 1664,
                'banned' => 'kadokawa.ga',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 1665,
                'banned' => 'kadokawa.gq',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 1666,
                'banned' => 'kadokawa.ml',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 1667,
                'banned' => 'kadokawa.tk',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 1668,
                'banned' => 'kaengu.ru',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 1669,
                'banned' => 'kagi.be',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 1670,
                'banned' => 'kakadua.net',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 1671,
                'banned' => 'kalapi.org',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 1672,
                'banned' => 'kamen-market.ru',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 1673,
                'banned' => 'kamsg.com',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 1674,
                'banned' => 'kaovo.com',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 1675,
                'banned' => 'kappala.info',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 1676,
                'banned' => 'kara-turk.net',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 1677,
                'banned' => 'karatraman.ml',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 1678,
                'banned' => 'kariplan.com',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 1679,
                'banned' => 'karta-kykyruza.ru',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 1680,
                'banned' => 'kartvelo.com',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 1681,
                'banned' => 'kasmail.com',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 1682,
                'banned' => 'kaspop.com',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 1683,
                'banned' => 'katztube.com',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 1684,
                'banned' => 'kazelink.ml',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 1685,
                'banned' => 'kbox.li',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 1686,
                'banned' => 'kcrw.de',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 1687,
                'banned' => 'keepmymail.com',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 1688,
                'banned' => 'keinhirn.de',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 1689,
                'banned' => 'keipino.de',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 1690,
                'banned' => 'kekita.com',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 1691,
                'banned' => 'kellychibale-researchgroup-uct.com',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 1692,
                'banned' => 'kemptvillebaseball.com',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 1693,
                'banned' => 'kennedy808.com',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 1694,
                'banned' => 'kiani.com',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 1695,
                'banned' => 'killmail.com',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 1696,
                'banned' => 'killmail.net',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 1697,
                'banned' => 'kimsdisk.com',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 1698,
                'banned' => 'kinda.email',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 1699,
                'banned' => 'kindamail.com',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 1700,
                'banned' => 'kingsq.ga',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 1701,
                'banned' => 'kino-100.ru',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 1702,
                'banned' => 'kiois.com',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 1703,
                'banned' => 'kismail.ru',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 1704,
                'banned' => 'kisstwink.com',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 1705,
                'banned' => 'kitnastar.com',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 1706,
                'banned' => 'kjkszpjcompany.com',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 1707,
                'banned' => 'kkmail.be',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 1708,
                'banned' => 'kkoup.com',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 1709,
                'banned' => 'kksm.be',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 1710,
                'banned' => 'klassmaster.com',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 1711,
                'banned' => 'klassmaster.net',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 1712,
                'banned' => 'klick-tipp.us',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 1713,
                'banned' => 'klipschx12.com',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 1714,
                'banned' => 'kloap.com',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 1715,
                'banned' => 'klovenode.com',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 1716,
                'banned' => 'kludgemush.com',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 1717,
                'banned' => 'klzlk.com',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 1718,
                'banned' => 'kmail.li',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 1719,
                'banned' => 'kmail.live',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 1720,
                'banned' => 'kmhow.com',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 1721,
                'banned' => 'knickerbockerban.de',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 1722,
                'banned' => 'knol-power.nl',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 1723,
                'banned' => 'kobrandly.com',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 1724,
                'banned' => 'kommunity.biz',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 1725,
                'banned' => 'kon42.com',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 1726,
                'banned' => 'konultant-jurist.ru',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 1727,
                'banned' => 'kook.ml',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 1728,
                'banned' => 'kopagas.com',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 1729,
                'banned' => 'kopaka.net',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 1730,
                'banned' => 'korona-nedvizhimosti.ru',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 1731,
                'banned' => 'koshu.ru',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 1732,
                'banned' => 'kosmetik-obatkuat.com',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 1733,
                'banned' => 'kostenlosemailadresse.de',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 1734,
                'banned' => 'koszmail.pl',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 1735,
                'banned' => 'kpay.be',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 1736,
                'banned' => 'kpooa.com',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 1737,
                'banned' => 'kpost.be',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 1738,
                'banned' => 'krd.ag',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 1739,
                'banned' => 'krsw.tk',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 1740,
                'banned' => 'kruay.com',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 1741,
                'banned' => 'krypton.tk',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 1742,
                'banned' => 'ksmtrck.tk',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 1743,
                'banned' => 'kuhrap.com',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 1744,
                'banned' => 'kulmeo.com',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 1745,
                'banned' => 'kulturbetrieb.info',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 1746,
                'banned' => 'kurzepost.de',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 1747,
                'banned' => 'kutakbisajauhjauh.gq',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 1748,
                'banned' => 'kvhrr.com',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 1749,
                'banned' => 'kvhrs.com',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 1750,
                'banned' => 'kvhrw.com',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 1751,
                'banned' => 'kwift.net',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 1752,
                'banned' => 'kwilco.net',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 1753,
                'banned' => 'kyal.pl',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 1754,
                'banned' => 'kyois.com',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 1755,
                'banned' => 'kzccv.com',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 1756,
                'banned' => 'l-c-a.us',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 1757,
                'banned' => 'l33r.eu',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 1758,
                'banned' => 'l6factors.com',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 1759,
                'banned' => 'labetteraverouge.at',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 1760,
                'banned' => 'labworld.org',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 1761,
                'banned' => 'lacedmail.com',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 1762,
                'banned' => 'lackmail.net',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 1763,
                'banned' => 'lackmail.ru',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 1764,
                'banned' => 'lacto.info',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 1765,
                'banned' => 'lags.us',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 1766,
                'banned' => 'lain.ch',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 1767,
                'banned' => 'lak.pp.ua',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 1768,
                'banned' => 'lakelivingstonrealestate.com',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 1769,
                'banned' => 'lakqs.com',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 1770,
                'banned' => 'lamasticots.com',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 1771,
                'banned' => 'lambsauce.de',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 1772,
                'banned' => 'landmail.co',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 1773,
                'banned' => 'laoeq.com',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 1774,
                'banned' => 'larisia.com',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 1775,
                'banned' => 'larland.com',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 1776,
                'banned' => 'last-chance.pro',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 1777,
                'banned' => 'lastmail.co',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 1778,
                'banned' => 'lastmail.com',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 1779,
                'banned' => 'lawlita.com',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 1780,
                'banned' => 'lazyinbox.com',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 1781,
                'banned' => 'lazyinbox.us',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 1782,
                'banned' => 'ldaho.biz',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 1783,
                'banned' => 'ldop.com',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 1784,
                'banned' => 'ldtp.com',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 1785,
                'banned' => 'le-tim.ru',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 1786,
                'banned' => 'lee.mx',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 1787,
                'banned' => 'leeching.net',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 1788,
                'banned' => 'leetmail.co',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 1789,
                'banned' => 'legalrc.loan',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 1790,
                'banned' => 'lellno.gq',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 1791,
                'banned' => 'lenovog4.com',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 1792,
                'banned' => 'lerbhe.com',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 1793,
                'banned' => 'letmeinonthis.com',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 1794,
                'banned' => 'letthemeatspam.com',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 1795,
                'banned' => 'lez.se',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 1796,
                'banned' => 'lgxscreen.com',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 1797,
                'banned' => 'lhsdv.com',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 1798,
                'banned' => 'liamcyrus.com',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 1799,
                'banned' => 'lifebyfood.com',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 1800,
                'banned' => 'lifetimefriends.info',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 1801,
                'banned' => 'lifetotech.com',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 1802,
                'banned' => 'ligsb.com',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 1803,
                'banned' => 'lillemap.net',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 1804,
                'banned' => 'lilo.me',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 1805,
                'banned' => 'lilspam.com',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 1806,
                'banned' => 'lindenbaumjapan.com',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 1807,
                'banned' => 'link2mail.net',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 1808,
                'banned' => 'linkedintuts2016.pw',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 1809,
                'banned' => 'linshiyouxiang.net',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 1810,
                'banned' => 'linuxmail.so',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 1811,
                'banned' => 'litedrop.com',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 1812,
                'banned' => 'liveradio.tk',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 1813,
                'banned' => 'lkgn.se',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 1814,
                'banned' => 'llogin.ru',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 1815,
                'banned' => 'loadby.us',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 1816,
                'banned' => 'loan101.pro',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 1817,
                'banned' => 'loaoa.com',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 1818,
                'banned' => 'loapq.com',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 1819,
                'banned' => 'locanto1.club',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 1820,
                'banned' => 'locantofuck.top',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 1821,
                'banned' => 'locantowsite.club',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 1822,
                'banned' => 'locomodev.net',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 1823,
                'banned' => 'login-email.cf',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 1824,
                'banned' => 'login-email.ga',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 1825,
                'banned' => 'login-email.ml',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 1826,
                'banned' => 'login-email.tk',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 1827,
                'banned' => 'logular.com',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 1828,
                'banned' => 'loh.pp.ua',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 1829,
                'banned' => 'loin.in',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 1830,
                'banned' => 'lolfreak.net',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 1831,
                'banned' => 'lolmail.biz',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 1832,
                'banned' => 'lookugly.com',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 1833,
                'banned' => 'lordsofts.com',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 1834,
                'banned' => 'lortemail.dk',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 1835,
                'banned' => 'losemymail.com',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 1836,
                'banned' => 'lovemeet.faith',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 1837,
                'banned' => 'lovemeleaveme.com',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 1838,
                'banned' => 'lpfmgmtltd.com',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 1839,
                'banned' => 'lr7.us',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 1840,
                'banned' => 'lr78.com',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 1841,
                'banned' => 'lroid.com',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 1842,
                'banned' => 'lru.me',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 1843,
                'banned' => 'ls-server.ru',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 1844,
                'banned' => 'lsyx24.com',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 1845,
                'banned' => 'luckymail.org',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 1846,
                'banned' => 'lukecarriere.com',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 1847,
                'banned' => 'lukemail.info',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 1848,
                'banned' => 'lukop.dk',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 1849,
                'banned' => 'luv2.us',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 1850,
                'banned' => 'lyfestylecreditsolutions.com',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 1851,
                'banned' => 'lyft.live',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 1852,
                'banned' => 'lyricspad.net',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 1853,
                'banned' => 'lzoaq.com',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 1854,
                'banned' => 'm21.cc',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 1855,
                'banned' => 'm4ilweb.info',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 1856,
                'banned' => 'maboard.com',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 1857,
                'banned' => 'mac-24.com',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 1858,
                'banned' => 'macr2.com',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 1859,
                'banned' => 'macromaid.com',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 1860,
                'banned' => 'macromice.info',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 1861,
                'banned' => 'magamail.com',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 1862,
                'banned' => 'maggotymeat.ga',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 1863,
                'banned' => 'magicbox.ro',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 1864,
                'banned' => 'magim.be',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 1865,
                'banned' => 'magspam.net',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 1866,
                'banned' => 'maidlow.info',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 1867,
                'banned' => 'mail-card.net',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 1868,
                'banned' => 'mail-easy.fr',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 1869,
                'banned' => 'mail-filter.com',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 1870,
                'banned' => 'mail-help.net',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 1871,
                'banned' => 'mail-hosting.co',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 1872,
                'banned' => 'mail-hub.info',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 1873,
                'banned' => 'mail-now.top',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 1874,
                'banned' => 'mail-owl.com',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 1875,
                'banned' => 'mail-share.com',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 1876,
                'banned' => 'mail-temporaire.com',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 1877,
                'banned' => 'mail-temporaire.fr',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 1878,
                'banned' => 'mail-tester.com',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 1879,
                'banned' => 'mail.by',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 1880,
                'banned' => 'mail.wtf',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 1881,
                'banned' => 'mail0.ga',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 1882,
                'banned' => 'mail1.top',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 1883,
                'banned' => 'mail114.net',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 1884,
                'banned' => 'mail1a.de',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 1885,
                'banned' => 'mail1web.org',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 1886,
                'banned' => 'mail21.cc',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 1887,
                'banned' => 'mail22.club',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 1888,
                'banned' => 'mail2rss.org',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 1889,
                'banned' => 'mail333.com',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 1890,
                'banned' => 'mail4trash.com',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 1891,
                'banned' => 'mail666.ru',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 1892,
                'banned' => 'mail7.io',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 1893,
                'banned' => 'mail707.com',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 1894,
                'banned' => 'mail72.com',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 1895,
                'banned' => 'mailapp.top',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 1896,
                'banned' => 'mailback.com',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 1897,
                'banned' => 'mailbidon.com',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 1898,
                'banned' => 'mailbiscuit.com',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 1899,
                'banned' => 'mailbiz.biz',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 1900,
                'banned' => 'mailblocks.com',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 1901,
                'banned' => 'mailbox.in.ua',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 1902,
                'banned' => 'mailbox52.ga',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 1903,
                'banned' => 'mailbox80.biz',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 1904,
                'banned' => 'mailbox82.biz',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 1905,
                'banned' => 'mailbox87.de',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 1906,
                'banned' => 'mailbox92.biz',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 1907,
                'banned' => 'mailboxy.fun',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 1908,
                'banned' => 'mailbucket.org',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 1909,
                'banned' => 'mailcat.biz',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 1910,
                'banned' => 'mailcatch.com',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 1911,
                'banned' => 'mailchop.com',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 1912,
                'banned' => 'mailcker.com',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 1913,
                'banned' => 'maildax.me',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 1914,
                'banned' => 'mailde.de',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 1915,
                'banned' => 'mailde.info',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 1916,
                'banned' => 'maildrop.cc',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 1917,
                'banned' => 'maildrop.cf',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 1918,
                'banned' => 'maildrop.ga',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 1919,
                'banned' => 'maildrop.gq',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 1920,
                'banned' => 'maildrop.ml',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 1921,
                'banned' => 'maildu.de',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 1922,
                'banned' => 'maildx.com',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 1923,
                'banned' => 'maileater.com',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 1924,
                'banned' => 'mailed.in',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 1925,
                'banned' => 'mailed.ro',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 1926,
                'banned' => 'maileimer.de',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 1927,
                'banned' => 'maileme101.com',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 1928,
                'banned' => 'mailers.edu.pl',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 1929,
                'banned' => 'mailexpire.com',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 1930,
                'banned' => 'mailf5.com',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 1931,
                'banned' => 'mailfa.tk',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 1932,
                'banned' => 'mailfall.com',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 1933,
                'banned' => 'mailfirst.icu',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 1934,
                'banned' => 'mailforspam.com',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 1935,
                'banned' => 'mailfree.ga',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 1936,
                'banned' => 'mailfree.gq',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 1937,
                'banned' => 'mailfree.ml',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 1938,
                'banned' => 'mailfreeonline.com',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 1939,
                'banned' => 'mailfs.com',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 1940,
                'banned' => 'mailguard.me',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 1941,
                'banned' => 'mailgutter.com',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 1942,
                'banned' => 'mailhazard.com',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 1943,
                'banned' => 'mailhazard.us',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 1944,
                'banned' => 'mailhex.com',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 1945,
                'banned' => 'mailhub.pro',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 1946,
                'banned' => 'mailhz.me',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 1947,
                'banned' => 'mailimate.com',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 1948,
                'banned' => 'mailin8r.com',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 1949,
                'banned' => 'mailinatar.com',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 1950,
                'banned' => 'mailinater.com',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 1951,
                'banned' => 'mailinator.co.uk',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 1952,
                'banned' => 'mailinator.com',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 1953,
                'banned' => 'mailinator.gq',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 1954,
                'banned' => 'mailinator.info',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 1955,
                'banned' => 'mailinator.net',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 1956,
                'banned' => 'mailinator.org',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 1957,
                'banned' => 'mailinator.us',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 1958,
                'banned' => 'mailinator0.com',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 1959,
                'banned' => 'mailinator1.com',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 1960,
                'banned' => 'mailinator2.com',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 1961,
                'banned' => 'mailinator2.net',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 1962,
                'banned' => 'mailinator3.com',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 1963,
                'banned' => 'mailinator4.com',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 1964,
                'banned' => 'mailinator5.com',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 1965,
                'banned' => 'mailinator6.com',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 1966,
                'banned' => 'mailinator7.com',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 1967,
                'banned' => 'mailinator8.com',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 1968,
                'banned' => 'mailinator9.com',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 1969,
                'banned' => 'mailincubator.com',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 1970,
                'banned' => 'mailismagic.com',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 1971,
                'banned' => 'mailita.tk',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 1972,
                'banned' => 'mailjunk.cf',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 1973,
                'banned' => 'mailjunk.ga',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 1974,
                'banned' => 'mailjunk.gq',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 1975,
                'banned' => 'mailjunk.ml',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 1976,
                'banned' => 'mailjunk.tk',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 1977,
                'banned' => 'mailmate.com',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 1978,
                'banned' => 'mailme.gq',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 1979,
                'banned' => 'mailme.ir',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 1980,
                'banned' => 'mailme.lv',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 1981,
                'banned' => 'mailme24.com',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 1982,
                'banned' => 'mailmetrash.com',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 1983,
                'banned' => 'mailmoat.com',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 1984,
                'banned' => 'mailmoth.com',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 1985,
                'banned' => 'mailms.com',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 1986,
                'banned' => 'mailna.biz',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 1987,
                'banned' => 'mailna.co',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 1988,
                'banned' => 'mailna.in',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 1989,
                'banned' => 'mailna.me',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 1990,
                'banned' => 'mailnator.com',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 1991,
                'banned' => 'mailnesia.com',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 1992,
                'banned' => 'mailnull.com',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 1993,
                'banned' => 'mailonaut.com',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 1994,
                'banned' => 'mailorc.com',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 1995,
                'banned' => 'mailorg.org',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 1996,
                'banned' => 'mailosaur.net',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 1997,
                'banned' => 'mailox.fun',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 1998,
                'banned' => 'mailpick.biz',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 1999,
                'banned' => 'mailpluss.com',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 2000,
                'banned' => 'mailpooch.com',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 2001,
                'banned' => 'mailpoof.com',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 2002,
                'banned' => 'mailpress.gq',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 2003,
                'banned' => 'mailproxsy.com',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 2004,
                'banned' => 'mailquack.com',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 2005,
                'banned' => 'mailrock.biz',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 2006,
                'banned' => 'mailsac.com',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 2007,
                'banned' => 'mailscrap.com',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 2008,
                'banned' => 'mailseal.de',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 2009,
                'banned' => 'mailshell.com',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 2010,
                'banned' => 'mailshiv.com',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 2011,
                'banned' => 'mailsiphon.com',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 2012,
                'banned' => 'mailslapping.com',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 2013,
                'banned' => 'mailslite.com',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 2014,
                'banned' => 'mailsucker.net',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 2015,
                'banned' => 'mailt.net',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 2016,
                'banned' => 'mailt.top',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 2017,
                'banned' => 'mailtechx.com',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 2018,
                'banned' => 'mailtemp.info',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 2019,
                'banned' => 'mailtemporaire.com',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 2020,
                'banned' => 'mailtemporaire.fr',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 2021,
                'banned' => 'mailto.plus',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 2022,
                'banned' => 'mailtome.de',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 2023,
                'banned' => 'mailtothis.com',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 2024,
                'banned' => 'mailtraps.com',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 2025,
                'banned' => 'mailtrash.net',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 2026,
                'banned' => 'mailtrix.net',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 2027,
                'banned' => 'mailtv.net',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 2028,
                'banned' => 'mailtv.tv',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 2029,
                'banned' => 'mailuniverse.co.uk',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 2030,
                'banned' => 'mailzi.ru',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 2031,
                'banned' => 'mailzilla.com',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 2032,
                'banned' => 'mailzilla.org',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 2033,
                'banned' => 'mainerfolg.info',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 2034,
                'banned' => 'makemenaughty.club',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 2035,
                'banned' => 'makemetheking.com',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 2036,
                'banned' => 'malahov.de',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 2037,
                'banned' => 'malayalamdtp.com',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 2038,
                'banned' => 'mama3.org',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 2039,
                'banned' => 'mamulenok.ru',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 2040,
                'banned' => 'mandraghen.cf',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 2041,
                'banned' => 'manifestgenerator.com',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 2042,
                'banned' => 'mannawo.com',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 2043,
                'banned' => 'mansiondev.com',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 2044,
                'banned' => 'manybrain.com',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 2045,
                'banned' => 'mark-compressoren.ru',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 2046,
                'banned' => 'marketlink.info',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 2047,
                'banned' => 'markmurfin.com',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 2048,
                'banned' => 'mask03.ru',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 2049,
                'banned' => 'masonline.info',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 2050,
                'banned' => 'maswae.world',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 2051,
                'banned' => 'matamuasu.ga',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 2052,
                'banned' => 'matchpol.net',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 2053,
                'banned' => 'matra.site',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 2054,
                'banned' => 'max-mail.org',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 2055,
                'banned' => 'mbox.re',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 2056,
                'banned' => 'mbx.cc',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 2057,
                'banned' => 'mcache.net',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 2058,
                'banned' => 'mciek.com',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 2059,
                'banned' => 'mdhc.tk',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 2060,
                'banned' => 'mdz.email',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 2061,
                'banned' => 'meantinc.com',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 2062,
                'banned' => 'mebelnu.info',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 2063,
                'banned' => 'mechanicalresumes.com',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 2064,
                'banned' => 'medkabinet-uzi.ru',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 2065,
                'banned' => 'meepsheep.eu',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 2066,
                'banned' => 'meidecn.com',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 2067,
                'banned' => 'meinspamschutz.de',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 2068,
                'banned' => 'meltedbrownies.com',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 2069,
                'banned' => 'meltmail.com',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 2070,
                'banned' => 'memsg.site',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 2071,
                'banned' => 'mentonit.net',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 2072,
                'banned' => 'mepost.pw',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 2073,
                'banned' => 'merepost.com',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 2074,
                'banned' => 'merry.pink',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 2075,
                'banned' => 'meruado.uk',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 2076,
                'banned' => 'messagebeamer.de',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 2077,
                'banned' => 'messwiththebestdielikethe.rest',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 2078,
                'banned' => 'metadownload.org',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 2079,
                'banned' => 'metaintern.net',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 2080,
                'banned' => 'metalunits.com',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 2081,
                'banned' => 'mezimages.net',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 2082,
                'banned' => 'mfsa.info',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 2083,
                'banned' => 'mfsa.ru',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 2084,
                'banned' => 'mhzayt.online',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 2085,
                'banned' => 'miaferrari.com',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 2086,
                'banned' => 'miauj.com',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 2087,
                'banned' => 'midcoastcustoms.com',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 2088,
                'banned' => 'midcoastcustoms.net',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 2089,
                'banned' => 'midcoastsolutions.com',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 2090,
                'banned' => 'midcoastsolutions.net',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 2091,
                'banned' => 'midiharmonica.com',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 2092,
                'banned' => 'midlertidig.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 2093,
                'banned' => 'midlertidig.net',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 2094,
                'banned' => 'midlertidig.org',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 2095,
                'banned' => 'mierdamail.com',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 2096,
                'banned' => 'migmail.net',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 2097,
                'banned' => 'migmail.pl',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 2098,
                'banned' => 'migumail.com',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 2099,
                'banned' => 'mihep.com',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 2100,
                'banned' => 'mijnhva.nl',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 2101,
                'banned' => 'minimail.gq',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 2102,
                'banned' => 'ministry-of-silly-walks.de',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 2103,
                'banned' => 'minsmail.com',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 2104,
                'banned' => 'mintemail.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 2105,
                'banned' => 'mirai.re',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 2106,
                'banned' => 'misterpinball.de',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 2107,
                'banned' => 'miucce.com',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 2108,
                'banned' => 'mji.ro',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 2109,
                'banned' => 'mjj.edu.ge',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 2110,
                'banned' => 'mjukglass.nu',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 2111,
                'banned' => 'mkpfilm.com',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 2112,
                'banned' => 'ml8.ca',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 2113,
                'banned' => 'mliok.com',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 2114,
                'banned' => 'mm.my',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 2115,
                'banned' => 'mm5.se',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 2116,
                'banned' => 'mnode.me',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 2117,
                'banned' => 'moakt.cc',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 2118,
                'banned' => 'moakt.co',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 2119,
                'banned' => 'moakt.com',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 2120,
                'banned' => 'moakt.ws',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 2121,
                'banned' => 'mobileninja.co.uk',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 2122,
                'banned' => 'mobilevpn.top',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 2123,
                'banned' => 'moburl.com',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 2124,
                'banned' => 'mockmyid.com',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 2125,
                'banned' => 'moeri.org',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 2126,
                'banned' => 'mofu.be',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 2127,
                'banned' => 'mohmal.com',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 2128,
                'banned' => 'mohmal.im',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 2129,
                'banned' => 'mohmal.in',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 2130,
                'banned' => 'mohmal.tech',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 2131,
                'banned' => 'moimoi.re',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 2132,
                'banned' => 'molms.com',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 2133,
                'banned' => 'momentics.ru',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 2134,
                'banned' => 'monachat.tk',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 2135,
                'banned' => 'monadi.ml',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 2136,
                'banned' => 'moneypipe.net',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 2137,
                'banned' => 'monumentmail.com',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 2138,
                'banned' => 'moonwake.com',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 2139,
                'banned' => 'moot.es',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 2140,
                'banned' => 'moreawesomethanyou.com',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 2141,
                'banned' => 'moreorcs.com',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 2142,
                'banned' => 'morriesworld.ml',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 2143,
                'banned' => 'morsin.com',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 2144,
                'banned' => 'moruzza.com',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 2145,
                'banned' => 'motique.de',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 2146,
                'banned' => 'mountainregionallibrary.net',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 2147,
                'banned' => 'mox.pp.ua',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 2148,
                'banned' => 'moy-elektrik.ru',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 2149,
                'banned' => 'moza.pl',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 2150,
                'banned' => 'mozej.com',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 2151,
                'banned' => 'mp-j.ga',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 2152,
                'banned' => 'mr24.co',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 2153,
                'banned' => 'mrvpm.net',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 2154,
                'banned' => 'mrvpt.com',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 2155,
                'banned' => 'msgos.com',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 2156,
                'banned' => 'mspeciosa.com',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 2157,
                'banned' => 'msrc.ml',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 2158,
                'banned' => 'mswork.ru',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 2159,
                'banned' => 'msxd.com',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 2160,
                'banned' => 'mt2009.com',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 2161,
                'banned' => 'mt2014.com',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 2162,
                'banned' => 'mt2015.com',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 2163,
                'banned' => 'mtmdev.com',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 2164,
                'banned' => 'muathegame.com',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 2165,
                'banned' => 'muchomail.com',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 2166,
                'banned' => 'mucincanon.com',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 2167,
                'banned' => 'muehlacker.tk',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 2168,
                'banned' => 'muell.icu',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 2169,
                'banned' => 'muell.io',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 2170,
                'banned' => 'muell.monster',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 2171,
                'banned' => 'muell.xyz',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 2172,
                'banned' => 'muellemail.com',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 2173,
                'banned' => 'muellmail.com',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 2174,
                'banned' => 'munoubengoshi.gq',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 2175,
                'banned' => 'musiccode.me',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 2176,
                'banned' => 'mutant.me',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 2177,
                'banned' => 'mvrht.com',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 2178,
                'banned' => 'mvrht.net',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 2179,
                'banned' => 'mwarner.org',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 2180,
                'banned' => 'mxclip.com',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 2181,
                'banned' => 'mxfuel.com',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 2182,
                'banned' => 'my-pomsies.ru',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 2183,
                'banned' => 'my-teddyy.ru',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 2184,
                'banned' => 'my10minutemail.com',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 2185,
                'banned' => 'mybitti.de',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 2186,
                'banned' => 'mycleaninbox.net',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 2187,
                'banned' => 'mycorneroftheinter.net',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 2188,
                'banned' => 'myde.ml',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 2189,
                'banned' => 'mydefipet.live',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 2190,
                'banned' => 'mydemo.equipment',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 2191,
                'banned' => 'myecho.es',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 2192,
                'banned' => 'myemailboxy.com',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 2193,
                'banned' => 'mygeoweb.info',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 2194,
                'banned' => 'myindohome.services',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 2195,
                'banned' => 'myinfoinc.com',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 2196,
                'banned' => 'myinterserver.ml',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 2197,
                'banned' => 'mykickassideas.com',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 2198,
                'banned' => 'mymail-in.net',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 2199,
                'banned' => 'mymail90.com',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 2200,
                'banned' => 'mymailoasis.com',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 2201,
                'banned' => 'mymaily.lol',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 2202,
                'banned' => 'mynetstore.de',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 2203,
                'banned' => 'myopang.com',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 2204,
                'banned' => 'mypacks.net',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 2205,
                'banned' => 'mypartyclip.de',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 2206,
                'banned' => 'myphantomemail.com',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 2207,
                'banned' => 'mysamp.de',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 2208,
                'banned' => 'myspaceinc.com',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 2209,
                'banned' => 'myspaceinc.net',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 2210,
                'banned' => 'myspaceinc.org',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 2211,
                'banned' => 'myspacepimpedup.com',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 2212,
                'banned' => 'myspamless.com',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 2213,
                'banned' => 'mystvpn.com',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 2214,
                'banned' => 'mysugartime.ru',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 2215,
                'banned' => 'mytemp.email',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 2216,
                'banned' => 'mytempemail.com',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 2217,
                'banned' => 'mytempmail.com',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 2218,
                'banned' => 'mytrashmail.com',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 2219,
                'banned' => 'mywarnernet.net',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 2220,
                'banned' => 'mywrld.site',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 2221,
                'banned' => 'mywrld.top',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 2222,
                'banned' => 'myzx.com',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 2223,
                'banned' => 'mzico.com',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 2224,
                'banned' => 'n1nja.org',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 2225,
                'banned' => 'na-cat.com',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 2226,
                'banned' => 'nabuma.com',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 2227,
                'banned' => 'nada.email',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 2228,
                'banned' => 'nada.ltd',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 2229,
                'banned' => 'nagi.be',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 2230,
                'banned' => 'nakedtruth.biz',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 2231,
                'banned' => 'nanonym.ch',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 2232,
                'banned' => 'naslazhdai.ru',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 2233,
                'banned' => 'nationalgardeningclub.com',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 2234,
                'banned' => 'nawmin.info',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 2235,
                'banned' => 'naymedia.com',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 2236,
                'banned' => 'nbzmr.com',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 2237,
                'banned' => 'negated.com',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 2238,
                'banned' => 'neko2.net',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 2239,
                'banned' => 'nekochan.fr',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 2240,
                'banned' => 'nekosan.uk',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 2241,
                'banned' => 'neomailbox.com',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 2242,
                'banned' => 'neotlozhniy-zaim.ru',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 2243,
                'banned' => 'nepwk.com',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 2244,
                'banned' => 'nervmich.net',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 2245,
                'banned' => 'nervtmich.net',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 2246,
                'banned' => 'net1mail.com',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 2247,
                'banned' => 'netcom.ws',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 2248,
                'banned' => 'netmails.com',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 2249,
                'banned' => 'netmails.net',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 2250,
                'banned' => 'netricity.nl',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 2251,
                'banned' => 'netris.net',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 2252,
                'banned' => 'netviewer-france.com',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 2253,
                'banned' => 'netzidiot.de',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 2254,
                'banned' => 'nevermail.de',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 2255,
                'banned' => 'newbpotato.tk',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 2256,
                'banned' => 'newfilm24.ru',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 2257,
                'banned' => 'newideasfornewpeople.info',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 2258,
                'banned' => 'newmail.top',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 2259,
                'banned' => 'next.ovh',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 2260,
                'banned' => 'nextmail.info',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 2261,
                'banned' => 'nextstopvalhalla.com',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 2262,
                'banned' => 'nezdiro.org',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 2263,
                'banned' => 'nezid.com',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 2264,
                'banned' => 'nezumi.be',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 2265,
                'banned' => 'nezzart.com',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 2266,
                'banned' => 'nfast.net',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 2267,
                'banned' => 'nguyenusedcars.com',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 2268,
                'banned' => 'nh3.ro',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 2269,
                'banned' => 'nice-4u.com',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 2270,
                'banned' => 'nicknassar.com',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 2271,
                'banned' => 'nincsmail.com',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 2272,
                'banned' => 'nincsmail.hu',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 2273,
                'banned' => 'niseko.be',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 2274,
                'banned' => 'niwl.net',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 2275,
                'banned' => 'nm7.cc',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 2276,
                'banned' => 'nmail.cf',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 2277,
                'banned' => 'nnh.com',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 2278,
                'banned' => 'nnot.net',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 2279,
                'banned' => 'nnoway.ru',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 2280,
                'banned' => 'no-spam.ws',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 2281,
                'banned' => 'no-ux.com',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 2282,
                'banned' => 'noblepioneer.com',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 2283,
                'banned' => 'nobugmail.com',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 2284,
                'banned' => 'nobulk.com',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 2285,
                'banned' => 'nobuma.com',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 2286,
                'banned' => 'noclickemail.com',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 2287,
                'banned' => 'nodezine.com',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 2288,
                'banned' => 'nogmailspam.info',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 2289,
                'banned' => 'noicd.com',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 2290,
                'banned' => 'nokiamail.com',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 2291,
                'banned' => 'nolemail.ga',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 2292,
                'banned' => 'nomail.cf',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 2293,
                'banned' => 'nomail.ga',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 2294,
                'banned' => 'nomail.pw',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 2295,
                'banned' => 'nomail2me.com',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 2296,
                'banned' => 'nomorespamemails.com',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 2297,
                'banned' => 'nonspam.eu',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 2298,
                'banned' => 'nonspammer.de',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 2299,
                'banned' => 'nonze.ro',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 2300,
                'banned' => 'noref.in',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 2301,
                'banned' => 'norseforce.com',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 2302,
                'banned' => 'norwegischlernen.info',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 2303,
                'banned' => 'nospam4.us',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 2304,
                'banned' => 'nospamfor.us',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 2305,
                'banned' => 'nospamthanks.info',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 2306,
                'banned' => 'nothingtoseehere.ca',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 2307,
                'banned' => 'notif.me',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 2308,
                'banned' => 'notmailinator.com',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 2309,
                'banned' => 'notrnailinator.com',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 2310,
                'banned' => 'notsharingmy.info',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 2311,
                'banned' => 'now.im',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 2312,
                'banned' => 'nowhere.org',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 2313,
                'banned' => 'nowmymail.com',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 2314,
                'banned' => 'nowmymail.net',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 2315,
                'banned' => 'nproxi.com',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 2316,
                'banned' => 'nthrl.com',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 2317,
                'banned' => 'ntlhelp.net',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 2318,
                'banned' => 'nubescontrol.com',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 2319,
                'banned' => 'nullbox.info',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 2320,
                'banned' => 'nurfuerspam.de',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 2321,
                'banned' => 'nut.cc',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 2322,
                'banned' => 'nutpa.net',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 2323,
                'banned' => 'nuts2trade.com',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 2324,
                'banned' => 'nvhrw.com',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 2325,
                'banned' => 'nwldx.com',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 2326,
                'banned' => 'nwytg.com',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 2327,
                'banned' => 'nwytg.net',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 2328,
                'banned' => 'ny7.me',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 2329,
                'banned' => 'nyasan.com',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 2330,
                'banned' => 'nypato.com',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 2331,
                'banned' => 'nyrmusic.com',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 2332,
                'banned' => 'o2stk.org',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 2333,
                'banned' => 'o7i.net',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 2334,
                'banned' => 'oalsp.com',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 2335,
                'banned' => 'obfusko.com',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 2336,
                'banned' => 'objectmail.com',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 2337,
                'banned' => 'obobbo.com',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 2338,
                'banned' => 'oborudovanieizturcii.ru',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 2339,
                'banned' => 'obxpestcontrol.com',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 2340,
                'banned' => 'octovie.com',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 2341,
                'banned' => 'odaymail.com',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 2342,
                'banned' => 'odem.com',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 2343,
                'banned' => 'odnorazovoe.ru',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 2344,
                'banned' => 'oepia.com',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 2345,
                'banned' => 'oerpub.org',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 2346,
                'banned' => 'offshore-proxies.net',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 2347,
                'banned' => 'ofisher.net',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 2348,
                'banned' => 'ohaaa.de',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 2349,
                'banned' => 'ohi.tw',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 2350,
                'banned' => 'oida.icu',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 2351,
                'banned' => 'oing.cf',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 2352,
                'banned' => 'okclprojects.com',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 2353,
                'banned' => 'okinawa.li',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 2354,
                'banned' => 'okrent.us',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 2355,
                'banned' => 'okzk.com',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 2356,
                'banned' => 'olimp-case.ru',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 2357,
                'banned' => 'olypmall.ru',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 2358,
                'banned' => 'omail.pro',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 2359,
                'banned' => 'omnievents.org',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 2360,
                'banned' => 'omtecha.com',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 2361,
                'banned' => 'one-mail.top',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 2362,
                'banned' => 'one-time.email',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 2363,
                'banned' => 'one2mail.info',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 2364,
                'banned' => 'onekisspresave.com',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 2365,
                'banned' => 'onemail.host',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 2366,
                'banned' => 'oneoffemail.com',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 2367,
                'banned' => 'oneoffmail.com',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 2368,
                'banned' => 'onetm.jp',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 2369,
                'banned' => 'onewaymail.com',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 2370,
                'banned' => 'onlatedotcom.info',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 2371,
                'banned' => 'online.ms',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 2372,
                'banned' => 'onlineidea.info',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 2373,
                'banned' => 'onlyapp.net',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 2374,
                'banned' => 'onqin.com',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 2375,
                'banned' => 'ontyne.biz',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 2376,
                'banned' => 'oohioo.com',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 2377,
                'banned' => 'oolus.com',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 2378,
                'banned' => 'oonies-shoprus.ru',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 2379,
                'banned' => 'oopi.org',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 2380,
                'banned' => 'oosln.com',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 2381,
                'banned' => 'opayq.com',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 2382,
                'banned' => 'openavz.com',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 2383,
                'banned' => 'opendns.ro',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 2384,
                'banned' => 'opentrash.com',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 2385,
                'banned' => 'opmmedia.ga',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 2386,
                'banned' => 'opp24.com',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 2387,
                'banned' => 'optimaweb.me',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 2388,
                'banned' => 'opwebw.com',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 2389,
                'banned' => 'oranek.com',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 2390,
                'banned' => 'ordinaryamerican.net',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 2391,
                'banned' => 'oreidresume.com',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 2392,
                'banned' => 'orgmbx.cc',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 2393,
                'banned' => 'oroki.de',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 2394,
                'banned' => 'oshietechan.link',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 2395,
                'banned' => 'otherinbox.com',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 2396,
                'banned' => 'ourklips.com',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 2397,
                'banned' => 'ourpreviewdomain.com',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 2398,
                'banned' => 'outlawspam.com',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 2399,
                'banned' => 'outlook.edu.pl',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 2400,
                'banned' => 'outmail.win',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 2401,
                'banned' => 'ovomail.co',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 2402,
                'banned' => 'ovpn.to',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 2403,
                'banned' => 'owleyes.ch',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 2404,
                'banned' => 'owlpic.com',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 2405,
                'banned' => 'ownsyou.de',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 2406,
                'banned' => 'oxopoha.com',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 2407,
                'banned' => 'ozatvn.com',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 2408,
                'banned' => 'ozyl.de',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 2409,
                'banned' => 'p-banlis.ru',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 2410,
                'banned' => 'p33.org',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 2411,
                'banned' => 'p71ce1m.com',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 2412,
                'banned' => 'pa9e.com',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 2413,
                'banned' => 'pachilly.com',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 2414,
                'banned' => 'packiu.com',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 2415,
                'banned' => 'pagamenti.tk',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 2416,
                'banned' => 'paharpurmim.ga',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 2417,
                'banned' => 'pakadebu.ga',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 2418,
                'banned' => 'pamaweb.com',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 2419,
                'banned' => 'pancakemail.com',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 2420,
                'banned' => 'papierkorb.me',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 2421,
                'banned' => 'paplease.com',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 2422,
                'banned' => 'para2019.ru',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 2423,
                'banned' => 'parlimentpetitioner.tk',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 2424,
                'banned' => 'pastebitch.com',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 2425,
                'banned' => 'patonce.com',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 2426,
                'banned' => 'pavilionx2.com',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 2427,
                'banned' => 'payperex2.com',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 2428,
                'banned' => 'payspun.com',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 2429,
                'banned' => 'pe.hu',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 2430,
                'banned' => 'pecinan.com',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 2431,
                'banned' => 'pecinan.net',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 2432,
                'banned' => 'pecinan.org',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 2433,
                'banned' => 'penisgoes.in',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 2434,
                'banned' => 'penoto.tk',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 2435,
                'banned' => 'pepbot.com',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 2436,
                'banned' => 'peterdethier.com',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 2437,
                'banned' => 'petloca.com',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 2438,
                'banned' => 'petrzilka.net',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 2439,
                'banned' => 'pewpewpewpew.pw',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 2440,
                'banned' => 'pfui.ru',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 2441,
                'banned' => 'phone-elkey.ru',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 2442,
                'banned' => 'photo-impact.eu',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 2443,
                'banned' => 'photomark.net',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 2444,
                'banned' => 'pi.vu',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 2445,
                'banned' => 'piaa.me',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 2446,
                'banned' => 'pig.pp.ua',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 2447,
                'banned' => 'pii.at',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 2448,
                'banned' => 'piki.si',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 2449,
                'banned' => 'pimpedupmyspace.com',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 2450,
                'banned' => 'pinehill-seattle.org',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 2451,
                'banned' => 'pingir.com',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 2452,
                'banned' => 'pipemail.space',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 2453,
                'banned' => 'pisls.com',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 2454,
                'banned' => 'pitaniezdorovie.ru',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 2455,
                'banned' => 'pivo-bar.ru',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 2456,
                'banned' => 'pixiil.com',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 2457,
                'banned' => 'pizzajunk.com',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 2458,
                'banned' => 'pjjkp.com',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 2459,
                'banned' => 'placebomail10.com',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 2460,
                'banned' => 'pleasenoham.org',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 2461,
                'banned' => 'plexfirm.com',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 2462,
                'banned' => 'plexolan.de',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 2463,
                'banned' => 'plhk.ru',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 2464,
                'banned' => 'ploae.com',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 2465,
                'banned' => 'plw.me',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 2466,
                'banned' => 'poehali-otdihat.ru',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 2467,
                'banned' => 'pojok.ml',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 2468,
                'banned' => 'pokemail.net',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 2469,
                'banned' => 'pokiemobile.com',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 2470,
                'banned' => 'polarkingxx.ml',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 2471,
                'banned' => 'politikerclub.de',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 2472,
                'banned' => 'polyfaust.net',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 2473,
                'banned' => 'pooae.com',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 2474,
                'banned' => 'poofy.org',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 2475,
                'banned' => 'pookmail.com',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 2476,
                'banned' => 'poopiebutt.club',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 2477,
                'banned' => 'popcornfarm7.com',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 2478,
                'banned' => 'popcornfly.com',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 2479,
                'banned' => 'popesodomy.com',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 2480,
                'banned' => 'popgx.com',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 2481,
                'banned' => 'porjoton.com',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 2482,
                'banned' => 'porsh.net',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 2483,
                'banned' => 'posdz.com',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 2484,
                'banned' => 'posta.store',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 2485,
                'banned' => 'postacin.com',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 2486,
                'banned' => 'postonline.me',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 2487,
                'banned' => 'poutineyourface.com',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 2488,
                'banned' => 'powered.name',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 2489,
                'banned' => 'powerencry.com',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 2490,
                'banned' => 'powlearn.com',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 2491,
                'banned' => 'pp7rvv.com',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 2492,
                'banned' => 'ppetw.com',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 2493,
                'banned' => 'pptrvv.com',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 2494,
                'banned' => 'pqoia.com',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 2495,
                'banned' => 'pratikmail.com',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 2496,
                'banned' => 'pratikmail.net',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 2497,
                'banned' => 'pratikmail.org',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 2498,
                'banned' => 'prazdnik-37.ru',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 2499,
                'banned' => 'predatorrat.cf',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 2500,
                'banned' => 'predatorrat.ga',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 2501,
                'banned' => 'predatorrat.gq',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 2502,
                'banned' => 'predatorrat.ml',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 2503,
                'banned' => 'predatorrat.tk',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 2504,
                'banned' => 'premium-mail.fr',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 2505,
                'banned' => 'primabananen.net',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 2506,
                'banned' => 'prin.be',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 2507,
                'banned' => 'privacy.net',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 2508,
                'banned' => 'privatdemail.net',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 2509,
                'banned' => 'privmail.edu.pl',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 2510,
                'banned' => 'privy-mail.com',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 2511,
                'banned' => 'privy-mail.de',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 2512,
                'banned' => 'privymail.de',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 2513,
                'banned' => 'pro-tag.org',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 2514,
                'banned' => 'pro5g.com',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 2515,
                'banned' => 'procrackers.com',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 2516,
                'banned' => 'profast.top',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 2517,
                'banned' => 'projectcl.com',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 2518,
                'banned' => 'promailt.com',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 2519,
                'banned' => 'proprietativalcea.ro',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 2520,
                'banned' => 'propscore.com',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 2521,
                'banned' => 'protempmail.com',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 2522,
                'banned' => 'proxymail.eu',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 2523,
                'banned' => 'proxyparking.com',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 2524,
                'banned' => 'prtnx.com',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 2525,
                'banned' => 'prtshr.com',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 2526,
                'banned' => 'prtz.eu',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 2527,
                'banned' => 'psh.me',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 2528,
                'banned' => 'psles.com',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 2529,
                'banned' => 'psnator.com',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 2530,
                'banned' => 'psoxs.com',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 2531,
                'banned' => 'puglieisi.com',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 2532,
                'banned' => 'puji.pro',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 2533,
                'banned' => 'punkass.com',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 2534,
                'banned' => 'puppetmail.de',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 2535,
                'banned' => 'purcell.email',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 2536,
                'banned' => 'purelogistics.org',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 2537,
                'banned' => 'put2.net',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 2538,
                'banned' => 'puttanamaiala.tk',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 2539,
                'banned' => 'putthisinyourspamdatabase.com',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 2540,
                'banned' => 'pwpwa.com',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 2541,
                'banned' => 'pwrby.com',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 2542,
                'banned' => 'qasti.com',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 2543,
                'banned' => 'qbfree.us',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 2544,
                'banned' => 'qc.to',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 2545,
                'banned' => 'qibl.at',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 2546,
                'banned' => 'qiott.com',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 2547,
                'banned' => 'qipmail.net',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 2548,
                'banned' => 'qiq.us',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 2549,
                'banned' => 'qisdo.com',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 2550,
                'banned' => 'qisoa.com',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 2551,
                'banned' => 'qmrbe.com',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 2552,
                'banned' => 'qoika.com',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 2553,
                'banned' => 'qopow.com',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 2554,
                'banned' => 'qq.my',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 2555,
                'banned' => 'qsl.ro',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 2556,
                'banned' => 'qtum-ico.com',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 2557,
                'banned' => 'quadrafit.com',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 2558,
                'banned' => 'quick-mail.cc',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 2559,
                'banned' => 'quickemail.info',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 2560,
                'banned' => 'quickinbox.com',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 2561,
                'banned' => 'quickmail.nl',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 2562,
                'banned' => 'quicksend.ch',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 2563,
                'banned' => 'quipas.com',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 2564,
                'banned' => 'ququb.com',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 2565,
                'banned' => 'qvy.me',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 2566,
                'banned' => 'qwickmail.com',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 2567,
                'banned' => 'r4nd0m.de',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 2568,
                'banned' => 'ra3.us',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 2569,
                'banned' => 'rabin.ca',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 2570,
                'banned' => 'rabiot.reisen',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 2571,
                'banned' => 'rackabzar.com',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 2572,
                'banned' => 'raetp9.com',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 2573,
                'banned' => 'rainbowly.ml',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 2574,
                'banned' => 'raketenmann.de',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 2575,
                'banned' => 'ramenmail.de',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 2576,
                'banned' => 'rancidhome.net',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 2577,
                'banned' => 'randomail.io',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 2578,
                'banned' => 'randomail.net',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 2579,
                'banned' => 'rapt.be',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 2580,
                'banned' => 'raqid.com',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 2581,
                'banned' => 'rax.la',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 2582,
                'banned' => 'raxtest.com',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 2583,
                'banned' => 'razemail.com',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 2584,
                'banned' => 'razuz.com',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 2585,
                'banned' => 'rbb.org',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 2586,
                'banned' => 'rcasd.com',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 2587,
                'banned' => 'rcpt.at',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 2588,
                'banned' => 'rdklcrv.xyz',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 2589,
                'banned' => 're-gister.com',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 2590,
                'banned' => 'reality-concept.club',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 2591,
                'banned' => 'reallymymail.com',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 2592,
                'banned' => 'realquickemail.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 2593,
                'banned' => 'realtyalerts.ca',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 2594,
                'banned' => 'rebates.stream',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 2595,
                'banned' => 'receiveee.com',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 2596,
                'banned' => 'recipeforfailure.com',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 2597,
                'banned' => 'recode.me',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 2598,
                'banned' => 'reconmail.com',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 2599,
                'banned' => 'recyclemail.dk',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 2600,
                'banned' => 'redfeathercrow.com',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 2601,
                'banned' => 'reftoken.net',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 2602,
                'banned' => 'regbypass.com',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 2603,
                'banned' => 'regspaces.tk',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 2604,
                'banned' => 'reimondo.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 2605,
                'banned' => 'rejectmail.com',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 2606,
                'banned' => 'rejo.technology',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 2607,
                'banned' => 'reliable-mail.com',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 2608,
                'banned' => 'remail.cf',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 2609,
                'banned' => 'remail.ga',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 2610,
                'banned' => 'remarkable.rocks',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 2611,
                'banned' => 'remote.li',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 2612,
                'banned' => 'reptilegenetics.com',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 2613,
                'banned' => 'resgedvgfed.tk',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 2614,
                'banned' => 'revolvingdoorhoax.org',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 2615,
                'banned' => 'rfc822.org',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 2616,
                'banned' => 'rhyta.com',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 2617,
                'banned' => 'richfinances.pw',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 2618,
                'banned' => 'riddermark.de',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 2619,
                'banned' => 'rifkian.ga',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 2620,
                'banned' => 'rippb.com',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 2621,
                'banned' => 'risingsuntouch.com',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 2622,
                'banned' => 'riski.cf',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 2623,
                'banned' => 'risu.be',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 2624,
                'banned' => 'rklips.com',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 2625,
                'banned' => 'rkomo.com',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 2626,
                'banned' => 'rm2rf.com',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 2627,
                'banned' => 'rma.ec',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 2628,
                'banned' => 'rmqkr.net',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 2629,
                'banned' => 'rnailinator.com',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 2630,
                'banned' => 'ro.lt',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 2631,
                'banned' => 'robertspcrepair.com',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 2632,
                'banned' => 'robot-mail.com',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 2633,
                'banned' => 'rollindo.agency',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 2634,
                'banned' => 'ronnierage.net',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 2635,
                'banned' => 'rootfest.net',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 2636,
                'banned' => 'rosebearmylove.ru',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 2637,
                'banned' => 'rotaniliam.com',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 2638,
                'banned' => 'rover.info',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 2639,
                'banned' => 'rowe-solutions.com',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 2640,
                'banned' => 'royal.net',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 2641,
                'banned' => 'royaldoodles.org',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 2642,
                'banned' => 'royalmarket.life',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 2643,
                'banned' => 'royandk.com',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 2644,
                'banned' => 'rppkn.com',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 2645,
                'banned' => 'rsvhr.com',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 2646,
                'banned' => 'rtrtr.com',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 2647,
                'banned' => 'rtskiya.xyz',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 2648,
                'banned' => 'rudymail.ml',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 2649,
                'banned' => 'rumgel.com',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 2650,
                'banned' => 'runi.ca',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 2651,
                'banned' => 'rupayamail.com',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 2652,
                'banned' => 'ruru.be',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 2653,
                'banned' => 'rustydoor.com',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 2654,
                'banned' => 'rvb.ro',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 2655,
                'banned' => 'ryteto.me',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 2656,
                'banned' => 's0ny.net',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 2657,
                'banned' => 's33db0x.com',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 2658,
                'banned' => 'sabrestlouis.com',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 2659,
                'banned' => 'sackboii.com',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 2660,
                'banned' => 'saeoil.com',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 2661,
                'banned' => 'safaat.cf',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 2662,
                'banned' => 'safermail.info',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 2663,
                'banned' => 'safersignup.de',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 2664,
                'banned' => 'safetymail.info',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 2665,
                'banned' => 'safetypost.de',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 2666,
                'banned' => 'saharanightstempe.com',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 2667,
                'banned' => 'salmeow.tk',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 2668,
                'banned' => 'samsclass.info',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 2669,
                'banned' => 'sandcars.net',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 2670,
                'banned' => 'sandelf.de',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 2671,
                'banned' => 'sandwhichvideo.com',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 2672,
                'banned' => 'sanfinder.com',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 2673,
                'banned' => 'sanim.net',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 2674,
                'banned' => 'sanstr.com',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 2675,
                'banned' => 'sast.ro',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 2676,
                'banned' => 'satisfyme.club',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 2677,
                'banned' => 'satukosong.com',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 2678,
                'banned' => 'sausen.com',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 2679,
                'banned' => 'saynotospams.com',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 2680,
                'banned' => 'scatmail.com',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 2681,
                'banned' => 'scay.net',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 2682,
                'banned' => 'schachrol.com',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 2683,
                'banned' => 'schafmail.de',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 2684,
                'banned' => 'schmeissweg.tk',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 2685,
                'banned' => 'schrott-email.de',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 2686,
                'banned' => 'scrsot.com',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 2687,
                'banned' => 'sd3.in',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 2688,
                'banned' => 'sdvft.com',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 2689,
                'banned' => 'sdvgeft.com',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 2690,
                'banned' => 'sdvrecft.com',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 2691,
                'banned' => 'secmail.pw',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 2692,
                'banned' => 'secretemail.de',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 2693,
                'banned' => 'secure-mail.biz',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 2694,
                'banned' => 'secure-mail.cc',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 2695,
                'banned' => 'secured-link.net',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 2696,
                'banned' => 'securehost.com.es',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 2697,
                'banned' => 'seekapps.com',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 2698,
                'banned' => 'seekjobs4u.com',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 2699,
                'banned' => 'sejaa.lv',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 2700,
                'banned' => 'selfdestructingmail.com',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 2701,
                'banned' => 'selfdestructingmail.org',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 2702,
                'banned' => 'send22u.info',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 2703,
                'banned' => 'sendfree.org',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 2704,
                'banned' => 'sendingspecialflyers.com',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 2705,
                'banned' => 'sendnow.win',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 2706,
                'banned' => 'sendspamhere.com',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 2707,
                'banned' => 'senseless-entertainment.com',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 2708,
                'banned' => 'server.ms',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 2709,
                'banned' => 'services391.com',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 2710,
                'banned' => 'sexforswingers.com',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 2711,
                'banned' => 'sexical.com',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 2712,
                'banned' => 'sexyalwasmi.top',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 2713,
                'banned' => 'sfolkar.com',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 2714,
                'banned' => 'shadap.org',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 2715,
                'banned' => 'shalar.net',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 2716,
                'banned' => 'sharedmailbox.org',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 2717,
                'banned' => 'sharkfaces.com',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 2718,
                'banned' => 'sharklasers.com',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 2719,
                'banned' => 'shchiba.uk',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 2720,
                'banned' => 'sheryli.com',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 2721,
                'banned' => 'shhmail.com',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 2722,
                'banned' => 'shhuut.org',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 2723,
                'banned' => 'shieldedmail.com',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 2724,
                'banned' => 'shieldemail.com',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 2725,
                'banned' => 'shiftmail.com',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 2726,
                'banned' => 'shipfromto.com',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 2727,
                'banned' => 'shiphazmat.org',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 2728,
                'banned' => 'shipping-regulations.com',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 2729,
                'banned' => 'shippingterms.org',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 2730,
                'banned' => 'shitaway.tk',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 2731,
                'banned' => 'shitmail.de',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 2732,
                'banned' => 'shitmail.me',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 2733,
                'banned' => 'shitmail.org',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 2734,
                'banned' => 'shmeriously.com',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 2735,
                'banned' => 'shopxda.com',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 2736,
                'banned' => 'shortmail.net',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 2737,
                'banned' => 'shotmail.ru',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 2738,
                'banned' => 'showslow.de',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 2739,
                'banned' => 'shrib.com',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 2740,
                'banned' => 'shut.name',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 2741,
                'banned' => 'shut.ws',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 2742,
                'banned' => 'siberpay.com',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 2743,
                'banned' => 'sidelka-mytischi.ru',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 2744,
                'banned' => 'siftportal.ru',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 2745,
                'banned' => 'sify.com',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 2746,
                'banned' => 'sika3.com',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 2747,
                'banned' => 'sikux.com',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 2748,
                'banned' => 'silenceofthespam.com',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 2749,
                'banned' => 'siliwangi.ga',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 2750,
                'banned' => 'silvercoin.life',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 2751,
                'banned' => 'sim-simka.ru',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 2752,
                'banned' => 'simaenaga.com',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 2753,
                'banned' => 'simpleitsecurity.info',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 2754,
                'banned' => 'sin.cl',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 2755,
                'banned' => 'sinaite.net',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 2756,
                'banned' => 'sinema.ml',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 2757,
                'banned' => 'sinfiltro.cl',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 2758,
                'banned' => 'singlespride.com',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 2759,
                'banned' => 'sinnlos-mail.de',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 2760,
                'banned' => 'sino.tw',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 2761,
                'banned' => 'siteposter.net',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 2762,
                'banned' => 'sizzlemctwizzle.com',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 2763,
                'banned' => 'sjuaq.com',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 2764,
                'banned' => 'skeefmail.com',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 2765,
                'banned' => 'skrx.tk',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 2766,
                'banned' => 'sky-inbox.com',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 2767,
                'banned' => 'sky-ts.de',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 2768,
                'banned' => 'skygazerhub.com',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 2769,
                'banned' => 'skyrt.de',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 2770,
                'banned' => 'slapsfromlastnight.com',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 2771,
                'banned' => 'slaskpost.se',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 2772,
                'banned' => 'slave-auctions.net',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 2773,
                'banned' => 'slippery.email',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 2774,
                'banned' => 'slipry.net',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 2775,
                'banned' => 'slopsbox.com',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 2776,
                'banned' => 'slothmail.net',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 2777,
                'banned' => 'slushmail.com',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 2778,
                'banned' => 'sluteen.com',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 2779,
                'banned' => 'sly.io',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 2780,
                'banned' => 'smallker.tk',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 2781,
                'banned' => 'smapfree24.com',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 2782,
                'banned' => 'smapfree24.de',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 2783,
                'banned' => 'smapfree24.eu',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 2784,
                'banned' => 'smapfree24.info',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 2785,
                'banned' => 'smapfree24.org',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 2786,
                'banned' => 'smartnator.com',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 2787,
                'banned' => 'smarttalent.pw',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 2788,
                'banned' => 'smashmail.de',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 2789,
                'banned' => 'smellfear.com',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 2790,
                'banned' => 'smellrear.com',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 2791,
                'banned' => 'smellypotato.tk',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 2792,
                'banned' => 'smtp99.com',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 2793,
                'banned' => 'smwg.info',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 2794,
                'banned' => 'snakebutt.com',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 2795,
                'banned' => 'snakemail.com',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 2796,
                'banned' => 'snapwet.com',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 2797,
                'banned' => 'sneakmail.de',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 2798,
                'banned' => 'snece.com',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 2799,
                'banned' => 'social-mailer.tk',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 2800,
                'banned' => 'socialfurry.org',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 2801,
                'banned' => 'sociallymediocre.com',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 2802,
                'banned' => 'sofia.re',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 2803,
                'banned' => 'sofimail.com',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 2804,
                'banned' => 'sofort-mail.de',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 2805,
                'banned' => 'sofortmail.de',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 2806,
                'banned' => 'sofrge.com',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 2807,
                'banned' => 'softkey-office.ru',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 2808,
                'banned' => 'softpls.asia',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 2809,
                'banned' => 'sogetthis.com',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 2810,
                'banned' => 'sohai.ml',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 2811,
                'banned' => 'sohus.cn',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 2812,
                'banned' => 'soioa.com',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 2813,
                'banned' => 'soisz.com',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 2814,
                'banned' => 'solar-impact.pro',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 2815,
                'banned' => 'solvemail.info',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 2816,
                'banned' => 'solventtrap.wiki',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 2817,
                'banned' => 'songsign.com',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 2818,
                'banned' => 'sonshi.cf',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 2819,
                'banned' => 'soodmail.com',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 2820,
                'banned' => 'soodomail.com',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 2821,
                'banned' => 'soodonims.com',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 2822,
                'banned' => 'soombo.com',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 2823,
                'banned' => 'soon.it',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 2824,
                'banned' => 'spacebazzar.ru',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 2825,
                'banned' => 'spam-be-gone.com',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 2826,
                'banned' => 'spam.care',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 2827,
                'banned' => 'spam.la',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 2828,
                'banned' => 'spam.org.es',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 2829,
                'banned' => 'spam.su',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 2830,
                'banned' => 'spam4.me',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 2831,
                'banned' => 'spamail.de',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 2832,
                'banned' => 'spamarrest.com',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 2833,
                'banned' => 'spamavert.com',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 2834,
                'banned' => 'spambob.com',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 2835,
                'banned' => 'spambob.net',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 2836,
                'banned' => 'spambob.org',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 2837,
                'banned' => 'spambog.com',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 2838,
                'banned' => 'spambog.de',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 2839,
                'banned' => 'spambog.net',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 2840,
                'banned' => 'spambog.ru',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 2841,
                'banned' => 'spambooger.com',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 2842,
                'banned' => 'spambox.info',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 2843,
                'banned' => 'spambox.me',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 2844,
                'banned' => 'spambox.org',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 2845,
                'banned' => 'spambox.us',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 2846,
                'banned' => 'spamcero.com',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 2847,
                'banned' => 'spamcon.org',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 2848,
                'banned' => 'spamcorptastic.com',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 2849,
                'banned' => 'spamcowboy.com',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 2850,
                'banned' => 'spamcowboy.net',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 2851,
                'banned' => 'spamcowboy.org',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 2852,
                'banned' => 'spamday.com',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 2853,
                'banned' => 'spamdecoy.net',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 2854,
                'banned' => 'spamex.com',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 2855,
                'banned' => 'spamfellas.com',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 2856,
                'banned' => 'spamfighter.cf',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 2857,
                'banned' => 'spamfighter.ga',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 2858,
                'banned' => 'spamfighter.gq',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 2859,
                'banned' => 'spamfighter.ml',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 2860,
                'banned' => 'spamfighter.tk',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 2861,
                'banned' => 'spamfree.eu',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 2862,
                'banned' => 'spamfree24.com',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 2863,
                'banned' => 'spamfree24.de',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 2864,
                'banned' => 'spamfree24.eu',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 2865,
                'banned' => 'spamfree24.info',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 2866,
                'banned' => 'spamfree24.net',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 2867,
                'banned' => 'spamfree24.org',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 2868,
                'banned' => 'spamgoes.in',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 2869,
                'banned' => 'spamherelots.com',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 2870,
                'banned' => 'spamhereplease.com',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 2871,
                'banned' => 'spamhole.com',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 2872,
                'banned' => 'spamify.com',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 2873,
                'banned' => 'spaminator.de',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 2874,
                'banned' => 'spamkill.info',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 2875,
                'banned' => 'spaml.com',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 2876,
                'banned' => 'spaml.de',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 2877,
                'banned' => 'spamlot.net',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 2878,
                'banned' => 'spammer.fail',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 2879,
                'banned' => 'spammotel.com',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 2880,
                'banned' => 'spammy.host',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 2881,
                'banned' => 'spamobox.com',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 2882,
                'banned' => 'spamoff.de',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 2883,
                'banned' => 'spamsalad.in',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 2884,
                'banned' => 'spamsandwich.com',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 2885,
                'banned' => 'spamslicer.com',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 2886,
                'banned' => 'spamsphere.com',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 2887,
                'banned' => 'spamspot.com',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 2888,
                'banned' => 'spamstack.net',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 2889,
                'banned' => 'spamthis.co.uk',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 2890,
                'banned' => 'spamthis.network',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 2891,
                'banned' => 'spamthisplease.com',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 2892,
                'banned' => 'spamtrail.com',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 2893,
                'banned' => 'spamtrap.ro',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 2894,
                'banned' => 'spamtroll.net',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 2895,
                'banned' => 'spamwc.cf',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 2896,
                'banned' => 'spamwc.ga',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 2897,
                'banned' => 'spamwc.gq',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 2898,
                'banned' => 'spamwc.ml',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 2899,
                'banned' => 'speedgaus.net',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 2900,
                'banned' => 'sperma.cf',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 2901,
                'banned' => 'spikio.com',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 2902,
                'banned' => 'spindl-e.com',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 2903,
                'banned' => 'spoofmail.de',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 2904,
                'banned' => 'sportrid.com',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 2905,
                'banned' => 'spr.io',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 2906,
                'banned' => 'spritzzone.de',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 2907,
                'banned' => 'spruzme.com',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 2908,
                'banned' => 'spybox.de',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 2909,
                'banned' => 'spymail.com',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 2910,
                'banned' => 'spymail.one',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 2911,
                'banned' => 'squizzy.de',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 2912,
                'banned' => 'squizzy.net',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 2913,
                'banned' => 'sroff.com',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 2914,
                'banned' => 'sry.li',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 2915,
                'banned' => 'ssoia.com',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 2916,
                'banned' => 'stanfordujjain.com',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 2917,
                'banned' => 'starlight-breaker.net',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 2918,
                'banned' => 'starpower.space',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 2919,
                'banned' => 'startfu.com',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 2920,
                'banned' => 'startkeys.com',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 2921,
                'banned' => 'statdvr.com',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 2922,
                'banned' => 'stathost.net',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 2923,
                'banned' => 'statiix.com',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 2924,
                'banned' => 'stayhome.li',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 2925,
                'banned' => 'steam-area.ru',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 2926,
                'banned' => 'steambot.net',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 2927,
                'banned' => 'stexsy.com',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 2928,
                'banned' => 'stinkefinger.net',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 2929,
                'banned' => 'stop-my-spam.cf',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 2930,
                'banned' => 'stop-my-spam.com',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 2931,
                'banned' => 'stop-my-spam.ga',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 2932,
                'banned' => 'stop-my-spam.ml',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 2933,
                'banned' => 'stop-my-spam.pp.ua',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 2934,
                'banned' => 'stop-my-spam.tk',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 2935,
                'banned' => 'stopspam.app',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 2936,
                'banned' => 'storiqax.top',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 2937,
                'banned' => 'storj99.com',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 2938,
                'banned' => 'storj99.top',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 2939,
                'banned' => 'streetwisemail.com',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 2940,
                'banned' => 'stromox.com',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 2941,
                'banned' => 'stuckmail.com',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 2942,
                'banned' => 'stuffmail.de',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 2943,
                'banned' => 'stumpfwerk.com',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 2944,
                'banned' => 'stylist-volos.ru',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 2945,
                'banned' => 'submic.com',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 2946,
                'banned' => 'suburbanthug.com',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 2947,
                'banned' => 'suckmyd.com',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 2948,
                'banned' => 'sudern.de',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 2949,
                'banned' => 'sueshaw.com',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 2950,
                'banned' => 'suexamplesb.com',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 2951,
                'banned' => 'suioe.com',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 2952,
                'banned' => 'super-auswahl.de',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 2953,
                'banned' => 'superblohey.com',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 2954,
                'banned' => 'supergreatmail.com',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 2955,
                'banned' => 'supermailer.jp',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 2956,
                'banned' => 'superplatyna.com',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 2957,
                'banned' => 'superrito.com',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 2958,
                'banned' => 'supersave.net',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 2959,
                'banned' => 'superstachel.de',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 2960,
                'banned' => 'superyp.com',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 2961,
                'banned' => 'suremail.info',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 2962,
                'banned' => 'sute.jp',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 2963,
                'banned' => 'svip520.cn',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 2964,
                'banned' => 'svk.jp',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 2965,
                'banned' => 'svxr.org',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 2966,
                'banned' => 'sweetpotato.ml',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 2967,
                'banned' => 'sweetxxx.de',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 2968,
                'banned' => 'swift-mail.net',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 2969,
                'banned' => 'swift10minutemail.com',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 2970,
                'banned' => 'syinxun.com',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 2971,
                'banned' => 'sylvannet.com',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 2972,
                'banned' => 'symphonyresume.com',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 2973,
                'banned' => 'syosetu.gq',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 2974,
                'banned' => 'syujob.accountants',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 2975,
                'banned' => 'szerz.com',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 2976,
                'banned' => 'tafmail.com',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 2977,
                'banned' => 'tafoi.gr',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 2978,
                'banned' => 'taglead.com',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 2979,
                'banned' => 'tagmymedia.com',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 2980,
                'banned' => 'tagyourself.com',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 2981,
                'banned' => 'talkinator.com',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 2982,
                'banned' => 'tanukis.org',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 2983,
                'banned' => 'tapchicuoihoi.com',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 2984,
                'banned' => 'taphear.com',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 2985,
                'banned' => 'tapi.re',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 2986,
                'banned' => 'tarzanmail.cf',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 2987,
                'banned' => 'tastrg.com',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 2988,
                'banned' => 'taukah.com',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 2989,
                'banned' => 'tb-on-line.net',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 2990,
                'banned' => 'tcwlm.com',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 2991,
                'banned' => 'tcwlx.com',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 2992,
                'banned' => 'tdtda.com',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 2993,
                'banned' => 'tech69.com',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 2994,
                'banned' => 'techblast.ch',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 2995,
                'banned' => 'techemail.com',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 2996,
                'banned' => 'techgroup.me',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 2997,
                'banned' => 'technoproxy.ru',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 2998,
                'banned' => 'teerest.com',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 2999,
                'banned' => 'teewars.org',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 3000,
                'banned' => 'tefl.ro',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 3001,
                'banned' => 'telecomix.pl',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 3002,
                'banned' => 'teleg.eu',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 3003,
                'banned' => 'teleworm.com',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 3004,
                'banned' => 'teleworm.us',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 3005,
                'banned' => 'tellos.xyz',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 3006,
                'banned' => 'teml.net',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 3007,
                'banned' => 'temp-link.net',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 3008,
                'banned' => 'temp-mail.com',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 3009,
                'banned' => 'temp-mail.de',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 3010,
                'banned' => 'temp-mail.org',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 3011,
                'banned' => 'temp-mail.pp.ua',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 3012,
                'banned' => 'temp-mail.ru',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 3013,
                'banned' => 'temp-mails.com',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 3014,
                'banned' => 'tempail.com',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 3015,
                'banned' => 'tempalias.com',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 3016,
                'banned' => 'tempe-mail.com',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 3017,
                'banned' => 'tempemail.biz',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 3018,
                'banned' => 'tempemail.co.za',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 3019,
                'banned' => 'tempemail.com',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 3020,
                'banned' => 'tempemail.net',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 3021,
                'banned' => 'tempinbox.co.uk',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 3022,
                'banned' => 'tempinbox.com',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 3023,
                'banned' => 'tempmail.cn',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 3024,
                'banned' => 'tempmail.co',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 3025,
                'banned' => 'tempmail.de',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 3026,
                'banned' => 'tempmail.eu',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 3027,
                'banned' => 'tempmail.it',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 3028,
                'banned' => 'tempmail.pp.ua',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 3029,
                'banned' => 'tempmail.us',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 3030,
                'banned' => 'tempmail.ws',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 3031,
                'banned' => 'tempmail2.com',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 3032,
                'banned' => 'tempmaildemo.com',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 3033,
                'banned' => 'tempmailer.com',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 3034,
                'banned' => 'tempmailer.de',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 3035,
                'banned' => 'tempmailer.net',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 3036,
                'banned' => 'tempmailo.com',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 3037,
                'banned' => 'tempomail.fr',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 3038,
                'banned' => 'tempomail.org',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 3039,
                'banned' => 'temporarily.de',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 3040,
                'banned' => 'temporarioemail.com.br',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 3041,
                'banned' => 'temporary-mail.net',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 3042,
                'banned' => 'temporaryemail.net',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 3043,
                'banned' => 'temporaryemail.us',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 3044,
                'banned' => 'temporaryforwarding.com',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 3045,
                'banned' => 'temporaryinbox.com',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 3046,
                'banned' => 'temporarymailaddress.com',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 3047,
                'banned' => 'tempr.email',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 3048,
                'banned' => 'tempsky.com',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 3049,
                'banned' => 'tempthe.net',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 3050,
                'banned' => 'tempymail.com',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 3051,
                'banned' => 'tensi.org',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 3052,
                'banned' => 'ternaklele.ga',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 3053,
                'banned' => 'testore.co',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 3054,
                'banned' => 'testudine.com',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 3055,
                'banned' => 'thanksnospam.info',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 3056,
                'banned' => 'thankyou2010.com',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 3057,
                'banned' => 'thatim.info',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 3058,
                'banned' => 'thc.st',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 3059,
                'banned' => 'theaviors.com',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 3060,
                'banned' => 'thebearshark.com',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 3061,
                'banned' => 'thecarinformation.com',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 3062,
                'banned' => 'thechildrensfocus.com',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 3063,
                'banned' => 'thecity.biz',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 3064,
                'banned' => 'thecloudindex.com',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 3065,
                'banned' => 'thediamants.org',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 3066,
                'banned' => 'thedirhq.info',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 3067,
                'banned' => 'theeyeoftruth.com',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 3068,
                'banned' => 'thejoker5.com',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 3069,
                'banned' => 'thelightningmail.net',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 3070,
                'banned' => 'thelimestones.com',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 3071,
                'banned' => 'thembones.com.au',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 3072,
                'banned' => 'themegreview.com',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 3073,
                'banned' => 'themostemail.com',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 3074,
                'banned' => 'thereddoors.online',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 3075,
                'banned' => 'theroyalweb.club',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 3076,
                'banned' => 'thescrappermovie.com',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 3077,
                'banned' => 'thespamfather.com',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 3078,
                'banned' => 'theteastory.info',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 3079,
                'banned' => 'thex.ro',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 3080,
                'banned' => 'thichanthit.com',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 3081,
                'banned' => 'thietbivanphong.asia',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 3082,
                'banned' => 'thisisnotmyrealemail.com',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 3083,
                'banned' => 'thismail.net',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 3084,
                'banned' => 'thisurl.website',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 3085,
                'banned' => 'thnikka.com',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 3086,
                'banned' => 'thoas.ru',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 3087,
                'banned' => 'thraml.com',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 3088,
                'banned' => 'thrma.com',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 3089,
                'banned' => 'throam.com',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 3090,
                'banned' => 'thrott.com',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 3091,
                'banned' => 'throwam.com',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 3092,
                'banned' => 'throwawayemailaddress.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 3093,
                'banned' => 'throwawaymail.com',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 3094,
                'banned' => 'throwawaymail.pp.ua',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 3095,
                'banned' => 'throya.com',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 3096,
                'banned' => 'thrubay.com',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 3097,
                'banned' => 'thunderbolt.science',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 3098,
                'banned' => 'thunkinator.org',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 3099,
                'banned' => 'thxmate.com',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 3100,
                'banned' => 'tiapz.com',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 3101,
                'banned' => 'tic.ec',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 3102,
                'banned' => 'tilien.com',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 3103,
                'banned' => 'timgiarevn.com',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 3104,
                'banned' => 'timkassouf.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 3105,
                'banned' => 'tinoza.org',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 3106,
                'banned' => 'tinyurl24.com',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 3107,
                'banned' => 'tipsb.com',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 3108,
                'banned' => 'tittbit.in',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 3109,
                'banned' => 'tiv.cc',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 3110,
                'banned' => 'tizi.com',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 3111,
                'banned' => 'tkitc.de',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 3112,
                'banned' => 'tlpn.org',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 3113,
                'banned' => 'tmail.com',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 3114,
                'banned' => 'tmail.io',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 3115,
                'banned' => 'tmail.ws',
                'notes' => NULL,
            ),
            115 =>
            array (
                'id' => 3116,
                'banned' => 'tmail3.com',
                'notes' => NULL,
            ),
            116 =>
            array (
                'id' => 3117,
                'banned' => 'tmail9.com',
                'notes' => NULL,
            ),
            117 =>
            array (
                'id' => 3118,
                'banned' => 'tmailinator.com',
                'notes' => NULL,
            ),
            118 =>
            array (
                'id' => 3119,
                'banned' => 'tmails.net',
                'notes' => NULL,
            ),
            119 =>
            array (
                'id' => 3120,
                'banned' => 'tmmbt.net',
                'notes' => NULL,
            ),
            120 =>
            array (
                'id' => 3121,
                'banned' => 'tmpbox.net',
                'notes' => NULL,
            ),
            121 =>
            array (
                'id' => 3122,
                'banned' => 'tmpemails.com',
                'notes' => NULL,
            ),
            122 =>
            array (
                'id' => 3123,
                'banned' => 'tmpeml.com',
                'notes' => NULL,
            ),
            123 =>
            array (
                'id' => 3124,
                'banned' => 'tmpeml.info',
                'notes' => NULL,
            ),
            124 =>
            array (
                'id' => 3125,
                'banned' => 'tmpjr.me',
                'notes' => NULL,
            ),
            125 =>
            array (
                'id' => 3126,
                'banned' => 'tmpmail.net',
                'notes' => NULL,
            ),
            126 =>
            array (
                'id' => 3127,
                'banned' => 'tmpmail.org',
                'notes' => NULL,
            ),
            127 =>
            array (
                'id' => 3128,
                'banned' => 'tmpx.sa.com',
                'notes' => NULL,
            ),
            128 =>
            array (
                'id' => 3129,
                'banned' => 'toddsbighug.com',
                'notes' => NULL,
            ),
            129 =>
            array (
                'id' => 3130,
                'banned' => 'tofeat.com',
                'notes' => NULL,
            ),
            130 =>
            array (
                'id' => 3131,
                'banned' => 'toiea.com',
                'notes' => NULL,
            ),
            131 =>
            array (
                'id' => 3132,
                'banned' => 'tokem.co',
                'notes' => NULL,
            ),
            132 =>
            array (
                'id' => 3133,
                'banned' => 'tokenmail.de',
                'notes' => NULL,
            ),
            133 =>
            array (
                'id' => 3134,
                'banned' => 'tonaeto.com',
                'notes' => NULL,
            ),
            134 =>
            array (
                'id' => 3135,
                'banned' => 'tonne.to',
                'notes' => NULL,
            ),
            135 =>
            array (
                'id' => 3136,
                'banned' => 'tonymanso.com',
                'notes' => NULL,
            ),
            136 =>
            array (
                'id' => 3137,
                'banned' => 'toomail.biz',
                'notes' => NULL,
            ),
            137 =>
            array (
                'id' => 3138,
                'banned' => 'toon.ml',
                'notes' => NULL,
            ),
            138 =>
            array (
                'id' => 3139,
                'banned' => 'top-shop-tovar.ru',
                'notes' => NULL,
            ),
            139 =>
            array (
                'id' => 3140,
                'banned' => 'top101.de',
                'notes' => NULL,
            ),
            140 =>
            array (
                'id' => 3141,
                'banned' => 'top1mail.ru',
                'notes' => NULL,
            ),
            141 =>
            array (
                'id' => 3142,
                'banned' => 'top1post.ru',
                'notes' => NULL,
            ),
            142 =>
            array (
                'id' => 3143,
                'banned' => 'topinrock.cf',
                'notes' => NULL,
            ),
            143 =>
            array (
                'id' => 3144,
                'banned' => 'topmail2.com',
                'notes' => NULL,
            ),
            144 =>
            array (
                'id' => 3145,
                'banned' => 'topmail2.net',
                'notes' => NULL,
            ),
            145 =>
            array (
                'id' => 3146,
                'banned' => 'topofertasdehoy.com',
                'notes' => NULL,
            ),
            146 =>
            array (
                'id' => 3147,
                'banned' => 'topranklist.de',
                'notes' => NULL,
            ),
            147 =>
            array (
                'id' => 3148,
                'banned' => 'toprumours.com',
                'notes' => NULL,
            ),
            148 =>
            array (
                'id' => 3149,
                'banned' => 'tormail.org',
                'notes' => NULL,
            ),
            149 =>
            array (
                'id' => 3150,
                'banned' => 'toss.pw',
                'notes' => NULL,
            ),
            150 =>
            array (
                'id' => 3151,
                'banned' => 'tosunkaya.com',
                'notes' => NULL,
            ),
            151 =>
            array (
                'id' => 3152,
                'banned' => 'totallynotfake.net',
                'notes' => NULL,
            ),
            152 =>
            array (
                'id' => 3153,
                'banned' => 'totalvista.com',
                'notes' => NULL,
            ),
            153 =>
            array (
                'id' => 3154,
                'banned' => 'totesmail.com',
                'notes' => NULL,
            ),
            154 =>
            array (
                'id' => 3155,
                'banned' => 'totoan.info',
                'notes' => NULL,
            ),
            155 =>
            array (
                'id' => 3156,
                'banned' => 'tourcc.com',
                'notes' => NULL,
            ),
            156 =>
            array (
                'id' => 3157,
                'banned' => 'tp-qa-mail.com',
                'notes' => NULL,
            ),
            157 =>
            array (
                'id' => 3158,
                'banned' => 'tpwlb.com',
                'notes' => NULL,
            ),
            158 =>
            array (
                'id' => 3159,
                'banned' => 'tqoai.com',
                'notes' => NULL,
            ),
            159 =>
            array (
                'id' => 3160,
                'banned' => 'tqosi.com',
                'notes' => NULL,
            ),
            160 =>
            array (
                'id' => 3161,
                'banned' => 'tradermail.info',
                'notes' => NULL,
            ),
            161 =>
            array (
                'id' => 3162,
                'banned' => 'tranceversal.com',
                'notes' => NULL,
            ),
            162 =>
            array (
                'id' => 3163,
                'banned' => 'trash-amil.com',
                'notes' => NULL,
            ),
            163 =>
            array (
                'id' => 3164,
                'banned' => 'trash-mail.at',
                'notes' => NULL,
            ),
            164 =>
            array (
                'id' => 3165,
                'banned' => 'trash-mail.cf',
                'notes' => NULL,
            ),
            165 =>
            array (
                'id' => 3166,
                'banned' => 'trash-mail.com',
                'notes' => NULL,
            ),
            166 =>
            array (
                'id' => 3167,
                'banned' => 'trash-mail.de',
                'notes' => NULL,
            ),
            167 =>
            array (
                'id' => 3168,
                'banned' => 'trash-mail.ga',
                'notes' => NULL,
            ),
            168 =>
            array (
                'id' => 3169,
                'banned' => 'trash-mail.gq',
                'notes' => NULL,
            ),
            169 =>
            array (
                'id' => 3170,
                'banned' => 'trash-mail.ml',
                'notes' => NULL,
            ),
            170 =>
            array (
                'id' => 3171,
                'banned' => 'trash-mail.tk',
                'notes' => NULL,
            ),
            171 =>
            array (
                'id' => 3172,
                'banned' => 'trash-me.com',
                'notes' => NULL,
            ),
            172 =>
            array (
                'id' => 3173,
                'banned' => 'trash2009.com',
                'notes' => NULL,
            ),
            173 =>
            array (
                'id' => 3174,
                'banned' => 'trash2010.com',
                'notes' => NULL,
            ),
            174 =>
            array (
                'id' => 3175,
                'banned' => 'trash2011.com',
                'notes' => NULL,
            ),
            175 =>
            array (
                'id' => 3176,
                'banned' => 'trashcanmail.com',
                'notes' => NULL,
            ),
            176 =>
            array (
                'id' => 3177,
                'banned' => 'trashdevil.com',
                'notes' => NULL,
            ),
            177 =>
            array (
                'id' => 3178,
                'banned' => 'trashdevil.de',
                'notes' => NULL,
            ),
            178 =>
            array (
                'id' => 3179,
                'banned' => 'trashemail.de',
                'notes' => NULL,
            ),
            179 =>
            array (
                'id' => 3180,
                'banned' => 'trashemails.de',
                'notes' => NULL,
            ),
            180 =>
            array (
                'id' => 3181,
                'banned' => 'trashinbox.com',
                'notes' => NULL,
            ),
            181 =>
            array (
                'id' => 3182,
                'banned' => 'trashmail.at',
                'notes' => NULL,
            ),
            182 =>
            array (
                'id' => 3183,
                'banned' => 'trashmail.com',
                'notes' => NULL,
            ),
            183 =>
            array (
                'id' => 3184,
                'banned' => 'trashmail.de',
                'notes' => NULL,
            ),
            184 =>
            array (
                'id' => 3185,
                'banned' => 'trashmail.gq',
                'notes' => NULL,
            ),
            185 =>
            array (
                'id' => 3186,
                'banned' => 'trashmail.io',
                'notes' => NULL,
            ),
            186 =>
            array (
                'id' => 3187,
                'banned' => 'trashmail.me',
                'notes' => NULL,
            ),
            187 =>
            array (
                'id' => 3188,
                'banned' => 'trashmail.net',
                'notes' => NULL,
            ),
            188 =>
            array (
                'id' => 3189,
                'banned' => 'trashmail.org',
                'notes' => NULL,
            ),
            189 =>
            array (
                'id' => 3190,
                'banned' => 'trashmail.ws',
                'notes' => NULL,
            ),
            190 =>
            array (
                'id' => 3191,
                'banned' => 'trashmailer.com',
                'notes' => NULL,
            ),
            191 =>
            array (
                'id' => 3192,
                'banned' => 'trashmailgenerator.de',
                'notes' => NULL,
            ),
            192 =>
            array (
                'id' => 3193,
                'banned' => 'trashmails.com',
                'notes' => NULL,
            ),
            193 =>
            array (
                'id' => 3194,
                'banned' => 'trashymail.com',
                'notes' => NULL,
            ),
            194 =>
            array (
                'id' => 3195,
                'banned' => 'trashymail.net',
                'notes' => NULL,
            ),
            195 =>
            array (
                'id' => 3196,
                'banned' => 'trasz.com',
                'notes' => NULL,
            ),
            196 =>
            array (
                'id' => 3197,
                'banned' => 'trayna.com',
                'notes' => NULL,
            ),
            197 =>
            array (
                'id' => 3198,
                'banned' => 'trbvm.com',
                'notes' => NULL,
            ),
            198 =>
            array (
                'id' => 3199,
                'banned' => 'trbvn.com',
                'notes' => NULL,
            ),
            199 =>
            array (
                'id' => 3200,
                'banned' => 'trbvo.com',
                'notes' => NULL,
            ),
            200 =>
            array (
                'id' => 3201,
                'banned' => 'trend-maker.ru',
                'notes' => NULL,
            ),
            201 =>
            array (
                'id' => 3202,
                'banned' => 'trgfu.com',
                'notes' => NULL,
            ),
            202 =>
            array (
                'id' => 3203,
                'banned' => 'trgovinanaveliko.info',
                'notes' => NULL,
            ),
            203 =>
            array (
                'id' => 3204,
                'banned' => 'trialmail.de',
                'notes' => NULL,
            ),
            204 =>
            array (
                'id' => 3205,
                'banned' => 'trickmail.net',
                'notes' => NULL,
            ),
            205 =>
            array (
                'id' => 3206,
                'banned' => 'trillianpro.com',
                'notes' => NULL,
            ),
            206 =>
            array (
                'id' => 3207,
                'banned' => 'triots.com',
                'notes' => NULL,
            ),
            207 =>
            array (
                'id' => 3208,
                'banned' => 'trixtrux1.ru',
                'notes' => NULL,
            ),
            208 =>
            array (
                'id' => 3209,
                'banned' => 'trollproject.com',
                'notes' => NULL,
            ),
            209 =>
            array (
                'id' => 3210,
                'banned' => 'tropicalbass.info',
                'notes' => NULL,
            ),
            210 =>
            array (
                'id' => 3211,
                'banned' => 'trungtamtoeic.com',
                'notes' => NULL,
            ),
            211 =>
            array (
                'id' => 3212,
                'banned' => 'truthfinderlogin.com',
                'notes' => NULL,
            ),
            212 =>
            array (
                'id' => 3213,
                'banned' => 'tryalert.com',
                'notes' => NULL,
            ),
            213 =>
            array (
                'id' => 3214,
                'banned' => 'tryninja.io',
                'notes' => NULL,
            ),
            214 =>
            array (
                'id' => 3215,
                'banned' => 'tryzoe.com',
                'notes' => NULL,
            ),
            215 =>
            array (
                'id' => 3216,
                'banned' => 'ttirv.org',
                'notes' => NULL,
            ),
            216 =>
            array (
                'id' => 3217,
                'banned' => 'ttszuo.xyz',
                'notes' => NULL,
            ),
            217 =>
            array (
                'id' => 3218,
                'banned' => 'tualias.com',
                'notes' => NULL,
            ),
            218 =>
            array (
                'id' => 3219,
                'banned' => 'tuofs.com',
                'notes' => NULL,
            ),
            219 =>
            array (
                'id' => 3220,
                'banned' => 'turoid.com',
                'notes' => NULL,
            ),
            220 =>
            array (
                'id' => 3221,
                'banned' => 'turual.com',
                'notes' => NULL,
            ),
            221 =>
            array (
                'id' => 3222,
                'banned' => 'turuma.com',
                'notes' => NULL,
            ),
            222 =>
            array (
                'id' => 3223,
                'banned' => 'tutuapp.bid',
                'notes' => NULL,
            ),
            223 =>
            array (
                'id' => 3224,
                'banned' => 'tvchd.com',
                'notes' => NULL,
            ),
            224 =>
            array (
                'id' => 3225,
                'banned' => 'tverya.com',
                'notes' => NULL,
            ),
            225 =>
            array (
                'id' => 3226,
                'banned' => 'twinmail.de',
                'notes' => NULL,
            ),
            226 =>
            array (
                'id' => 3227,
                'banned' => 'twkly.ml',
                'notes' => NULL,
            ),
            227 =>
            array (
                'id' => 3228,
                'banned' => 'twocowmail.net',
                'notes' => NULL,
            ),
            228 =>
            array (
                'id' => 3229,
                'banned' => 'twoweirdtricks.com',
                'notes' => NULL,
            ),
            229 =>
            array (
                'id' => 3230,
                'banned' => 'twzhhq.online',
                'notes' => NULL,
            ),
            230 =>
            array (
                'id' => 3231,
                'banned' => 'txen.de',
                'notes' => NULL,
            ),
            231 =>
            array (
                'id' => 3232,
                'banned' => 'txtadvertise.com',
                'notes' => NULL,
            ),
            232 =>
            array (
                'id' => 3233,
                'banned' => 'tyhe.ro',
                'notes' => NULL,
            ),
            233 =>
            array (
                'id' => 3234,
                'banned' => 'tyldd.com',
                'notes' => NULL,
            ),
            234 =>
            array (
                'id' => 3235,
                'banned' => 'tympe.net',
                'notes' => NULL,
            ),
            235 =>
            array (
                'id' => 3236,
                'banned' => 'uacro.com',
                'notes' => NULL,
            ),
            236 =>
            array (
                'id' => 3237,
                'banned' => 'uber-mail.com',
                'notes' => NULL,
            ),
            237 =>
            array (
                'id' => 3238,
                'banned' => 'ubismail.net',
                'notes' => NULL,
            ),
            238 =>
            array (
                'id' => 3239,
                'banned' => 'ubm.md',
                'notes' => NULL,
            ),
            239 =>
            array (
                'id' => 3240,
                'banned' => 'ucche.us',
                'notes' => NULL,
            ),
            240 =>
            array (
                'id' => 3241,
                'banned' => 'ucupdong.ml',
                'notes' => NULL,
            ),
            241 =>
            array (
                'id' => 3242,
                'banned' => 'uemail99.com',
                'notes' => NULL,
            ),
            242 =>
            array (
                'id' => 3243,
                'banned' => 'ufacturing.com',
                'notes' => NULL,
            ),
            243 =>
            array (
                'id' => 3244,
                'banned' => 'uggsrock.com',
                'notes' => NULL,
            ),
            244 =>
            array (
                'id' => 3245,
                'banned' => 'uguuchantele.com',
                'notes' => NULL,
            ),
            245 =>
            array (
                'id' => 3246,
                'banned' => 'uhe2.com',
                'notes' => NULL,
            ),
            246 =>
            array (
                'id' => 3247,
                'banned' => 'uhhu.ru',
                'notes' => NULL,
            ),
            247 =>
            array (
                'id' => 3248,
                'banned' => 'uiu.us',
                'notes' => NULL,
            ),
            248 =>
            array (
                'id' => 3249,
                'banned' => 'ujijima1129.gq',
                'notes' => NULL,
            ),
            249 =>
            array (
                'id' => 3250,
                'banned' => 'uk.to',
                'notes' => NULL,
            ),
            250 =>
            array (
                'id' => 3251,
                'banned' => 'ultra.fyi',
                'notes' => NULL,
            ),
            251 =>
            array (
                'id' => 3252,
                'banned' => 'ultrada.ru',
                'notes' => NULL,
            ),
            252 =>
            array (
                'id' => 3253,
                'banned' => 'uma3.be',
                'notes' => NULL,
            ),
            253 =>
            array (
                'id' => 3254,
                'banned' => 'umail.net',
                'notes' => NULL,
            ),
            254 =>
            array (
                'id' => 3255,
                'banned' => 'undo.it',
                'notes' => NULL,
            ),
            255 =>
            array (
                'id' => 3256,
                'banned' => 'unicodeworld.com',
                'notes' => NULL,
            ),
            256 =>
            array (
                'id' => 3257,
                'banned' => 'unids.com',
                'notes' => NULL,
            ),
            257 =>
            array (
                'id' => 3258,
                'banned' => 'unimark.org',
                'notes' => NULL,
            ),
            258 =>
            array (
                'id' => 3259,
                'banned' => 'unit7lahaina.com',
                'notes' => NULL,
            ),
            259 =>
            array (
                'id' => 3260,
                'banned' => 'unmail.ru',
                'notes' => NULL,
            ),
            260 =>
            array (
                'id' => 3261,
                'banned' => 'uooos.com',
                'notes' => NULL,
            ),
            261 =>
            array (
                'id' => 3262,
                'banned' => 'uorak.com',
                'notes' => NULL,
            ),
            262 =>
            array (
                'id' => 3263,
                'banned' => 'upliftnow.com',
                'notes' => NULL,
            ),
            263 =>
            array (
                'id' => 3264,
                'banned' => 'uplipht.com',
                'notes' => NULL,
            ),
            264 =>
            array (
                'id' => 3265,
                'banned' => 'uploadnolimit.com',
                'notes' => NULL,
            ),
            265 =>
            array (
                'id' => 3266,
                'banned' => 'upozowac.info',
                'notes' => NULL,
            ),
            266 =>
            array (
                'id' => 3267,
                'banned' => 'urfunktion.se',
                'notes' => NULL,
            ),
            267 =>
            array (
                'id' => 3268,
                'banned' => 'urhen.com',
                'notes' => NULL,
            ),
            268 =>
            array (
                'id' => 3269,
                'banned' => 'uroid.com',
                'notes' => NULL,
            ),
            269 =>
            array (
                'id' => 3270,
                'banned' => 'us.af',
                'notes' => NULL,
            ),
            270 =>
            array (
                'id' => 3271,
                'banned' => 'us.to',
                'notes' => NULL,
            ),
            271 =>
            array (
                'id' => 3272,
                'banned' => 'usa.cc',
                'notes' => NULL,
            ),
            272 =>
            array (
                'id' => 3273,
                'banned' => 'usako.net',
                'notes' => NULL,
            ),
            273 =>
            array (
                'id' => 3274,
                'banned' => 'usbc.be',
                'notes' => NULL,
            ),
            274 =>
            array (
                'id' => 3275,
                'banned' => 'used-product.fr',
                'notes' => NULL,
            ),
            275 =>
            array (
                'id' => 3276,
                'banned' => 'ushijima1129.cf',
                'notes' => NULL,
            ),
            276 =>
            array (
                'id' => 3277,
                'banned' => 'ushijima1129.ga',
                'notes' => NULL,
            ),
            277 =>
            array (
                'id' => 3278,
                'banned' => 'ushijima1129.gq',
                'notes' => NULL,
            ),
            278 =>
            array (
                'id' => 3279,
                'banned' => 'ushijima1129.ml',
                'notes' => NULL,
            ),
            279 =>
            array (
                'id' => 3280,
                'banned' => 'ushijima1129.tk',
                'notes' => NULL,
            ),
            280 =>
            array (
                'id' => 3281,
                'banned' => 'utiket.us',
                'notes' => NULL,
            ),
            281 =>
            array (
                'id' => 3282,
                'banned' => 'uu.gl',
                'notes' => NULL,
            ),
            282 =>
            array (
                'id' => 3283,
                'banned' => 'uu2.ovh',
                'notes' => NULL,
            ),
            283 =>
            array (
                'id' => 3284,
                'banned' => 'uuf.me',
                'notes' => NULL,
            ),
            284 =>
            array (
                'id' => 3285,
                'banned' => 'uwork4.us',
                'notes' => NULL,
            ),
            285 =>
            array (
                'id' => 3286,
                'banned' => 'uyhip.com',
                'notes' => NULL,
            ),
            286 =>
            array (
                'id' => 3287,
                'banned' => 'vaasfc4.tk',
                'notes' => NULL,
            ),
            287 =>
            array (
                'id' => 3288,
                'banned' => 'vaati.org',
                'notes' => NULL,
            ),
            288 =>
            array (
                'id' => 3289,
                'banned' => 'valemail.net',
                'notes' => NULL,
            ),
            289 =>
            array (
                'id' => 3290,
                'banned' => 'valhalladev.com',
                'notes' => NULL,
            ),
            290 =>
            array (
                'id' => 3291,
                'banned' => 'vankin.de',
                'notes' => NULL,
            ),
            291 =>
            array (
                'id' => 3292,
                'banned' => 'vctel.com',
                'notes' => NULL,
            ),
            292 =>
            array (
                'id' => 3293,
                'banned' => 'vda.ro',
                'notes' => NULL,
            ),
            293 =>
            array (
                'id' => 3294,
                'banned' => 'vddaz.com',
                'notes' => NULL,
            ),
            294 =>
            array (
                'id' => 3295,
                'banned' => 'vdig.com',
                'notes' => NULL,
            ),
            295 =>
            array (
                'id' => 3296,
                'banned' => 'veanlo.com',
                'notes' => NULL,
            ),
            296 =>
            array (
                'id' => 3297,
                'banned' => 'vemomail.win',
                'notes' => NULL,
            ),
            297 =>
            array (
                'id' => 3298,
                'banned' => 'venompen.com',
                'notes' => NULL,
            ),
            298 =>
            array (
                'id' => 3299,
                'banned' => 'veo.kr',
                'notes' => NULL,
            ),
            299 =>
            array (
                'id' => 3300,
                'banned' => 'ver0.cf',
                'notes' => NULL,
            ),
            300 =>
            array (
                'id' => 3301,
                'banned' => 'ver0.ga',
                'notes' => NULL,
            ),
            301 =>
            array (
                'id' => 3302,
                'banned' => 'ver0.gq',
                'notes' => NULL,
            ),
            302 =>
            array (
                'id' => 3303,
                'banned' => 'ver0.ml',
                'notes' => NULL,
            ),
            303 =>
            array (
                'id' => 3304,
                'banned' => 'ver0.tk',
                'notes' => NULL,
            ),
            304 =>
            array (
                'id' => 3305,
                'banned' => 'vercelli.cf',
                'notes' => NULL,
            ),
            305 =>
            array (
                'id' => 3306,
                'banned' => 'vercelli.ga',
                'notes' => NULL,
            ),
            306 =>
            array (
                'id' => 3307,
                'banned' => 'vercelli.gq',
                'notes' => NULL,
            ),
            307 =>
            array (
                'id' => 3308,
                'banned' => 'vercelli.ml',
                'notes' => NULL,
            ),
            308 =>
            array (
                'id' => 3309,
                'banned' => 'verdejo.com',
                'notes' => NULL,
            ),
            309 =>
            array (
                'id' => 3310,
                'banned' => 'vermutlich.net',
                'notes' => NULL,
            ),
            310 =>
            array (
                'id' => 3311,
                'banned' => 'veryday.ch',
                'notes' => NULL,
            ),
            311 =>
            array (
                'id' => 3312,
                'banned' => 'veryday.eu',
                'notes' => NULL,
            ),
            312 =>
            array (
                'id' => 3313,
                'banned' => 'veryday.info',
                'notes' => NULL,
            ),
            313 =>
            array (
                'id' => 3314,
                'banned' => 'veryrealemail.com',
                'notes' => NULL,
            ),
            314 =>
            array (
                'id' => 3315,
                'banned' => 'vesa.pw',
                'notes' => NULL,
            ),
            315 =>
            array (
                'id' => 3316,
                'banned' => 'vevs.de',
                'notes' => NULL,
            ),
            316 =>
            array (
                'id' => 3317,
                'banned' => 'vfemail.net',
                'notes' => NULL,
            ),
            317 =>
            array (
                'id' => 3318,
                'banned' => 'via.tokyo.jp',
                'notes' => NULL,
            ),
            318 =>
            array (
                'id' => 3319,
                'banned' => 'vickaentb.tk',
                'notes' => NULL,
            ),
            319 =>
            array (
                'id' => 3320,
                'banned' => 'victime.ninja',
                'notes' => NULL,
            ),
            320 =>
            array (
                'id' => 3321,
                'banned' => 'victoriantwins.com',
                'notes' => NULL,
            ),
            321 =>
            array (
                'id' => 3322,
                'banned' => 'vidchart.com',
                'notes' => NULL,
            ),
            322 =>
            array (
                'id' => 3323,
                'banned' => 'viditag.com',
                'notes' => NULL,
            ),
            323 =>
            array (
                'id' => 3324,
                'banned' => 'viewcastmedia.com',
                'notes' => NULL,
            ),
            324 =>
            array (
                'id' => 3325,
                'banned' => 'viewcastmedia.net',
                'notes' => NULL,
            ),
            325 =>
            array (
                'id' => 3326,
                'banned' => 'viewcastmedia.org',
                'notes' => NULL,
            ),
            326 =>
            array (
                'id' => 3327,
                'banned' => 'vikingsonly.com',
                'notes' => NULL,
            ),
            327 =>
            array (
                'id' => 3328,
                'banned' => 'vinernet.com',
                'notes' => NULL,
            ),
            328 =>
            array (
                'id' => 3329,
                'banned' => 'vintomaper.com',
                'notes' => NULL,
            ),
            329 =>
            array (
                'id' => 3330,
                'banned' => 'vipepe.com',
                'notes' => NULL,
            ),
            330 =>
            array (
                'id' => 3331,
                'banned' => 'vipmail.name',
                'notes' => NULL,
            ),
            331 =>
            array (
                'id' => 3332,
                'banned' => 'vipmail.pw',
                'notes' => NULL,
            ),
            332 =>
            array (
                'id' => 3333,
                'banned' => 'vipxm.net',
                'notes' => NULL,
            ),
            333 =>
            array (
                'id' => 3334,
                'banned' => 'viralplays.com',
                'notes' => NULL,
            ),
            334 =>
            array (
                'id' => 3335,
                'banned' => 'virtualemail.info',
                'notes' => NULL,
            ),
            335 =>
            array (
                'id' => 3336,
                'banned' => 'visal007.tk',
                'notes' => NULL,
            ),
            336 =>
            array (
                'id' => 3337,
                'banned' => 'visal168.cf',
                'notes' => NULL,
            ),
            337 =>
            array (
                'id' => 3338,
                'banned' => 'visal168.ga',
                'notes' => NULL,
            ),
            338 =>
            array (
                'id' => 3339,
                'banned' => 'visal168.gq',
                'notes' => NULL,
            ),
            339 =>
            array (
                'id' => 3340,
                'banned' => 'visal168.ml',
                'notes' => NULL,
            ),
            340 =>
            array (
                'id' => 3341,
                'banned' => 'visal168.tk',
                'notes' => NULL,
            ),
            341 =>
            array (
                'id' => 3342,
                'banned' => 'vixletdev.com',
                'notes' => NULL,
            ),
            342 =>
            array (
                'id' => 3343,
                'banned' => 'vixtricks.com',
                'notes' => NULL,
            ),
            343 =>
            array (
                'id' => 3344,
                'banned' => 'vkcode.ru',
                'notes' => NULL,
            ),
            344 =>
            array (
                'id' => 3345,
                'banned' => 'vmailing.info',
                'notes' => NULL,
            ),
            345 =>
            array (
                'id' => 3346,
                'banned' => 'vmani.com',
                'notes' => NULL,
            ),
            346 =>
            array (
                'id' => 3347,
                'banned' => 'vmpanda.com',
                'notes' => NULL,
            ),
            347 =>
            array (
                'id' => 3348,
                'banned' => 'vnedu.me',
                'notes' => NULL,
            ),
            348 =>
            array (
                'id' => 3349,
                'banned' => 'voidbay.com',
                'notes' => NULL,
            ),
            349 =>
            array (
                'id' => 3350,
                'banned' => 'volaj.com',
                'notes' => NULL,
            ),
            350 =>
            array (
                'id' => 3351,
                'banned' => 'voltaer.com',
                'notes' => NULL,
            ),
            351 =>
            array (
                'id' => 3352,
                'banned' => 'vomoto.com',
                'notes' => NULL,
            ),
            352 =>
            array (
                'id' => 3353,
                'banned' => 'vorga.org',
                'notes' => NULL,
            ),
            353 =>
            array (
                'id' => 3354,
                'banned' => 'votiputox.org',
                'notes' => NULL,
            ),
            354 =>
            array (
                'id' => 3355,
                'banned' => 'voxelcore.com',
                'notes' => NULL,
            ),
            355 =>
            array (
                'id' => 3356,
                'banned' => 'vpn.st',
                'notes' => NULL,
            ),
            356 =>
            array (
                'id' => 3357,
                'banned' => 'vps30.com',
                'notes' => NULL,
            ),
            357 =>
            array (
                'id' => 3358,
                'banned' => 'vps911.net',
                'notes' => NULL,
            ),
            358 =>
            array (
                'id' => 3359,
                'banned' => 'vradportal.com',
                'notes' => NULL,
            ),
            359 =>
            array (
                'id' => 3360,
                'banned' => 'vremonte24-store.ru',
                'notes' => NULL,
            ),
            360 =>
            array (
                'id' => 3361,
                'banned' => 'vrmtr.com',
                'notes' => NULL,
            ),
            361 =>
            array (
                'id' => 3362,
                'banned' => 'vsimcard.com',
                'notes' => NULL,
            ),
            362 =>
            array (
                'id' => 3363,
                'banned' => 'vssms.com',
                'notes' => NULL,
            ),
            363 =>
            array (
                'id' => 3364,
                'banned' => 'vtxmail.us',
                'notes' => NULL,
            ),
            364 =>
            array (
                'id' => 3365,
                'banned' => 'vubby.com',
                'notes' => NULL,
            ),
            365 =>
            array (
                'id' => 3366,
                'banned' => 'vuiy.pw',
                'notes' => NULL,
            ),
            366 =>
            array (
                'id' => 3367,
                'banned' => 'vusra.com',
                'notes' => NULL,
            ),
            367 =>
            array (
                'id' => 3368,
                'banned' => 'vztc.com',
                'notes' => NULL,
            ),
            368 =>
            array (
                'id' => 3369,
                'banned' => 'w-asertun.ru',
                'notes' => NULL,
            ),
            369 =>
            array (
                'id' => 3370,
                'banned' => 'w3internet.co.uk',
                'notes' => NULL,
            ),
            370 =>
            array (
                'id' => 3371,
                'banned' => 'wakingupesther.com',
                'notes' => NULL,
            ),
            371 =>
            array (
                'id' => 3372,
                'banned' => 'walala.org',
                'notes' => NULL,
            ),
            372 =>
            array (
                'id' => 3373,
                'banned' => 'walkmail.net',
                'notes' => NULL,
            ),
            373 =>
            array (
                'id' => 3374,
                'banned' => 'walkmail.ru',
                'notes' => NULL,
            ),
            374 =>
            array (
                'id' => 3375,
                'banned' => 'wallm.com',
                'notes' => NULL,
            ),
            375 =>
            array (
                'id' => 3376,
                'banned' => 'wanko.be',
                'notes' => NULL,
            ),
            376 =>
            array (
                'id' => 3377,
                'banned' => 'watch-harry-potter.com',
                'notes' => NULL,
            ),
            377 =>
            array (
                'id' => 3378,
                'banned' => 'watchever.biz',
                'notes' => NULL,
            ),
            378 =>
            array (
                'id' => 3379,
                'banned' => 'watchfull.net',
                'notes' => NULL,
            ),
            379 =>
            array (
                'id' => 3380,
                'banned' => 'watchironman3onlinefreefullmovie.com',
                'notes' => NULL,
            ),
            380 =>
            array (
                'id' => 3381,
                'banned' => 'waterisgone.com',
                'notes' => NULL,
            ),
            381 =>
            array (
                'id' => 3382,
                'banned' => 'wazabi.club',
                'notes' => NULL,
            ),
            382 =>
            array (
                'id' => 3383,
                'banned' => 'wbdev.tech',
                'notes' => NULL,
            ),
            383 =>
            array (
                'id' => 3384,
                'banned' => 'wbml.net',
                'notes' => NULL,
            ),
            384 =>
            array (
                'id' => 3385,
                'banned' => 'web-contact.info',
                'notes' => NULL,
            ),
            385 =>
            array (
                'id' => 3386,
                'banned' => 'web-ideal.fr',
                'notes' => NULL,
            ),
            386 =>
            array (
                'id' => 3387,
                'banned' => 'web-inc.net',
                'notes' => NULL,
            ),
            387 =>
            array (
                'id' => 3388,
                'banned' => 'web-mail.pp.ua',
                'notes' => NULL,
            ),
            388 =>
            array (
                'id' => 3389,
                'banned' => 'web2mailco.com',
                'notes' => NULL,
            ),
            389 =>
            array (
                'id' => 3390,
                'banned' => 'webcontact-france.eu',
                'notes' => NULL,
            ),
            390 =>
            array (
                'id' => 3391,
                'banned' => 'webemail.me',
                'notes' => NULL,
            ),
            391 =>
            array (
                'id' => 3392,
                'banned' => 'webhook.site',
                'notes' => NULL,
            ),
            392 =>
            array (
                'id' => 3393,
                'banned' => 'webm4il.info',
                'notes' => NULL,
            ),
            393 =>
            array (
                'id' => 3394,
                'banned' => 'webmail24.top',
                'notes' => NULL,
            ),
            394 =>
            array (
                'id' => 3395,
                'banned' => 'webtrip.ch',
                'notes' => NULL,
            ),
            395 =>
            array (
                'id' => 3396,
                'banned' => 'webuser.in',
                'notes' => NULL,
            ),
            396 =>
            array (
                'id' => 3397,
                'banned' => 'wee.my',
                'notes' => NULL,
            ),
            397 =>
            array (
                'id' => 3398,
                'banned' => 'wef.gr',
                'notes' => NULL,
            ),
            398 =>
            array (
                'id' => 3399,
                'banned' => 'weg-werf-email.de',
                'notes' => NULL,
            ),
            399 =>
            array (
                'id' => 3400,
                'banned' => 'wegwerf-email-addressen.de',
                'notes' => NULL,
            ),
            400 =>
            array (
                'id' => 3401,
                'banned' => 'wegwerf-email-adressen.de',
                'notes' => NULL,
            ),
            401 =>
            array (
                'id' => 3402,
                'banned' => 'wegwerf-email.at',
                'notes' => NULL,
            ),
            402 =>
            array (
                'id' => 3403,
                'banned' => 'wegwerf-email.de',
                'notes' => NULL,
            ),
            403 =>
            array (
                'id' => 3404,
                'banned' => 'wegwerf-email.net',
                'notes' => NULL,
            ),
            404 =>
            array (
                'id' => 3405,
                'banned' => 'wegwerf-emails.de',
                'notes' => NULL,
            ),
            405 =>
            array (
                'id' => 3406,
                'banned' => 'wegwerfadresse.de',
                'notes' => NULL,
            ),
            406 =>
            array (
                'id' => 3407,
                'banned' => 'wegwerfemail.com',
                'notes' => NULL,
            ),
            407 =>
            array (
                'id' => 3408,
                'banned' => 'wegwerfemail.de',
                'notes' => NULL,
            ),
            408 =>
            array (
                'id' => 3409,
                'banned' => 'wegwerfemail.info',
                'notes' => NULL,
            ),
            409 =>
            array (
                'id' => 3410,
                'banned' => 'wegwerfemail.net',
                'notes' => NULL,
            ),
            410 =>
            array (
                'id' => 3411,
                'banned' => 'wegwerfemail.org',
                'notes' => NULL,
            ),
            411 =>
            array (
                'id' => 3412,
                'banned' => 'wegwerfemailadresse.com',
                'notes' => NULL,
            ),
            412 =>
            array (
                'id' => 3413,
                'banned' => 'wegwerfmail.de',
                'notes' => NULL,
            ),
            413 =>
            array (
                'id' => 3414,
                'banned' => 'wegwerfmail.info',
                'notes' => NULL,
            ),
            414 =>
            array (
                'id' => 3415,
                'banned' => 'wegwerfmail.net',
                'notes' => NULL,
            ),
            415 =>
            array (
                'id' => 3416,
                'banned' => 'wegwerfmail.org',
                'notes' => NULL,
            ),
            416 =>
            array (
                'id' => 3417,
                'banned' => 'wegwerpmailadres.nl',
                'notes' => NULL,
            ),
            417 =>
            array (
                'id' => 3418,
                'banned' => 'wegwrfmail.de',
                'notes' => NULL,
            ),
            418 =>
            array (
                'id' => 3419,
                'banned' => 'wegwrfmail.net',
                'notes' => NULL,
            ),
            419 =>
            array (
                'id' => 3420,
                'banned' => 'wegwrfmail.org',
                'notes' => NULL,
            ),
            420 =>
            array (
                'id' => 3421,
                'banned' => 'weizixu.com',
                'notes' => NULL,
            ),
            421 =>
            array (
                'id' => 3422,
                'banned' => 'wekawa.com',
                'notes' => NULL,
            ),
            422 =>
            array (
                'id' => 3423,
                'banned' => 'welikecookies.com',
                'notes' => NULL,
            ),
            423 =>
            array (
                'id' => 3424,
                'banned' => 'wellsfargocomcardholders.com',
                'notes' => NULL,
            ),
            424 =>
            array (
                'id' => 3425,
                'banned' => 'wemel.top',
                'notes' => NULL,
            ),
            425 =>
            array (
                'id' => 3426,
                'banned' => 'wetrainbayarea.com',
                'notes' => NULL,
            ),
            426 =>
            array (
                'id' => 3427,
                'banned' => 'wetrainbayarea.org',
                'notes' => NULL,
            ),
            427 =>
            array (
                'id' => 3428,
                'banned' => 'wfgdfhj.tk',
                'notes' => NULL,
            ),
            428 =>
            array (
                'id' => 3429,
                'banned' => 'wg0.com',
                'notes' => NULL,
            ),
            429 =>
            array (
                'id' => 3430,
                'banned' => 'wh4f.org',
                'notes' => NULL,
            ),
            430 =>
            array (
                'id' => 3431,
                'banned' => 'whaaaaaaaaaat.com',
                'notes' => NULL,
            ),
            431 =>
            array (
                'id' => 3432,
                'banned' => 'whatiaas.com',
                'notes' => NULL,
            ),
            432 =>
            array (
                'id' => 3433,
                'banned' => 'whatifanalytics.com',
                'notes' => NULL,
            ),
            433 =>
            array (
                'id' => 3434,
                'banned' => 'whatpaas.com',
                'notes' => NULL,
            ),
            434 =>
            array (
                'id' => 3435,
                'banned' => 'whatsaas.com',
                'notes' => NULL,
            ),
            435 =>
            array (
                'id' => 3436,
                'banned' => 'whiffles.org',
                'notes' => NULL,
            ),
            436 =>
            array (
                'id' => 3437,
                'banned' => 'whopy.com',
                'notes' => NULL,
            ),
            437 =>
            array (
                'id' => 3438,
                'banned' => 'whyspam.me',
                'notes' => NULL,
            ),
            438 =>
            array (
                'id' => 3439,
                'banned' => 'wibblesmith.com',
                'notes' => NULL,
            ),
            439 =>
            array (
                'id' => 3440,
                'banned' => 'wickmail.net',
                'notes' => NULL,
            ),
            440 =>
            array (
                'id' => 3441,
                'banned' => 'widaryanto.info',
                'notes' => NULL,
            ),
            441 =>
            array (
                'id' => 3442,
                'banned' => 'widget.gg',
                'notes' => NULL,
            ),
            442 =>
            array (
                'id' => 3443,
                'banned' => 'wiemei.com',
                'notes' => NULL,
            ),
            443 =>
            array (
                'id' => 3444,
                'banned' => 'wierie.tk',
                'notes' => NULL,
            ),
            444 =>
            array (
                'id' => 3445,
                'banned' => 'wifimaple.com',
                'notes' => NULL,
            ),
            445 =>
            array (
                'id' => 3446,
                'banned' => 'wifioak.com',
                'notes' => NULL,
            ),
            446 =>
            array (
                'id' => 3447,
                'banned' => 'wikidocuslava.ru',
                'notes' => NULL,
            ),
            447 =>
            array (
                'id' => 3448,
                'banned' => 'wilemail.com',
                'notes' => NULL,
            ),
            448 =>
            array (
                'id' => 3449,
                'banned' => 'willhackforfood.biz',
                'notes' => NULL,
            ),
            449 =>
            array (
                'id' => 3450,
                'banned' => 'willselfdestruct.com',
                'notes' => NULL,
            ),
            450 =>
            array (
                'id' => 3451,
                'banned' => 'wimsg.com',
                'notes' => NULL,
            ),
            451 =>
            array (
                'id' => 3452,
                'banned' => 'winemaven.info',
                'notes' => NULL,
            ),
            452 =>
            array (
                'id' => 3453,
                'banned' => 'wins.com.br',
                'notes' => NULL,
            ),
            453 =>
            array (
                'id' => 3454,
                'banned' => 'wlist.ro',
                'notes' => NULL,
            ),
            454 =>
            array (
                'id' => 3455,
                'banned' => 'wmail.cf',
                'notes' => NULL,
            ),
            455 =>
            array (
                'id' => 3456,
                'banned' => 'wmail.club',
                'notes' => NULL,
            ),
            456 =>
            array (
                'id' => 3457,
                'banned' => 'wokcy.com',
                'notes' => NULL,
            ),
            457 =>
            array (
                'id' => 3458,
                'banned' => 'wolfmail.ml',
                'notes' => NULL,
            ),
            458 =>
            array (
                'id' => 3459,
                'banned' => 'wolfsmail.tk',
                'notes' => NULL,
            ),
            459 =>
            array (
                'id' => 3460,
                'banned' => 'wollan.info',
                'notes' => NULL,
            ),
            460 =>
            array (
                'id' => 3461,
                'banned' => 'worldspace.link',
                'notes' => NULL,
            ),
            461 =>
            array (
                'id' => 3462,
                'banned' => 'wpdork.com',
                'notes' => NULL,
            ),
            462 =>
            array (
                'id' => 3463,
                'banned' => 'wpg.im',
                'notes' => NULL,
            ),
            463 =>
            array (
                'id' => 3464,
                'banned' => 'wralawfirm.com',
                'notes' => NULL,
            ),
            464 =>
            array (
                'id' => 3465,
                'banned' => 'writeme.us',
                'notes' => NULL,
            ),
            465 =>
            array (
                'id' => 3466,
                'banned' => 'wronghead.com',
                'notes' => NULL,
            ),
            466 =>
            array (
                'id' => 3467,
                'banned' => 'ws.gy',
                'notes' => NULL,
            ),
            467 =>
            array (
                'id' => 3468,
                'banned' => 'wsym.de',
                'notes' => NULL,
            ),
            468 =>
            array (
                'id' => 3469,
                'banned' => 'wudet.men',
                'notes' => NULL,
            ),
            469 =>
            array (
                'id' => 3470,
                'banned' => 'wuespdj.xyz',
                'notes' => NULL,
            ),
            470 =>
            array (
                'id' => 3471,
                'banned' => 'wupics.com',
                'notes' => NULL,
            ),
            471 =>
            array (
                'id' => 3472,
                'banned' => 'wuuvo.com',
                'notes' => NULL,
            ),
            472 =>
            array (
                'id' => 3473,
                'banned' => 'wuzup.net',
                'notes' => NULL,
            ),
            473 =>
            array (
                'id' => 3474,
                'banned' => 'wuzupmail.net',
                'notes' => NULL,
            ),
            474 =>
            array (
                'id' => 3475,
                'banned' => 'wwjmp.com',
                'notes' => NULL,
            ),
            475 =>
            array (
                'id' => 3476,
                'banned' => 'wwwnew.eu',
                'notes' => NULL,
            ),
            476 =>
            array (
                'id' => 3477,
                'banned' => 'wxnw.net',
                'notes' => NULL,
            ),
            477 =>
            array (
                'id' => 3478,
                'banned' => 'x24.com',
                'notes' => NULL,
            ),
            478 =>
            array (
                'id' => 3479,
                'banned' => 'xagloo.co',
                'notes' => NULL,
            ),
            479 =>
            array (
                'id' => 3480,
                'banned' => 'xagloo.com',
                'notes' => NULL,
            ),
            480 =>
            array (
                'id' => 3481,
                'banned' => 'xbaby69.top',
                'notes' => NULL,
            ),
            481 =>
            array (
                'id' => 3482,
                'banned' => 'xcode.ro',
                'notes' => NULL,
            ),
            482 =>
            array (
                'id' => 3483,
                'banned' => 'xcodes.net',
                'notes' => NULL,
            ),
            483 =>
            array (
                'id' => 3484,
                'banned' => 'xcompress.com',
                'notes' => NULL,
            ),
            484 =>
            array (
                'id' => 3485,
                'banned' => 'xcoxc.com',
                'notes' => NULL,
            ),
            485 =>
            array (
                'id' => 3486,
                'banned' => 'xcpy.com',
                'notes' => NULL,
            ),
            486 =>
            array (
                'id' => 3487,
                'banned' => 'xemaps.com',
                'notes' => NULL,
            ),
            487 =>
            array (
                'id' => 3488,
                'banned' => 'xemne.com',
                'notes' => NULL,
            ),
            488 =>
            array (
                'id' => 3489,
                'banned' => 'xents.com',
                'notes' => NULL,
            ),
            489 =>
            array (
                'id' => 3490,
                'banned' => 'xjoi.com',
                'notes' => NULL,
            ),
            490 =>
            array (
                'id' => 3491,
                'banned' => 'xkx.me',
                'notes' => NULL,
            ),
            491 =>
            array (
                'id' => 3492,
                'banned' => 'xl.cx',
                'notes' => NULL,
            ),
            492 =>
            array (
                'id' => 3493,
                'banned' => 'xmail.com',
                'notes' => NULL,
            ),
            493 =>
            array (
                'id' => 3494,
                'banned' => 'xmailer.be',
                'notes' => NULL,
            ),
            494 =>
            array (
                'id' => 3495,
                'banned' => 'xmaily.com',
                'notes' => NULL,
            ),
            495 =>
            array (
                'id' => 3496,
                'banned' => 'xn--9kq967o.com',
                'notes' => NULL,
            ),
            496 =>
            array (
                'id' => 3497,
                'banned' => 'xn--d-bga.net',
                'notes' => NULL,
            ),
            497 =>
            array (
                'id' => 3498,
                'banned' => 'xojxe.com',
                'notes' => NULL,
            ),
            498 =>
            array (
                'id' => 3499,
                'banned' => 'xost.us',
                'notes' => NULL,
            ),
            499 =>
            array (
                'id' => 3500,
                'banned' => 'xoxox.cc',
                'notes' => NULL,
            ),
        ));
        \DB::table('banned_emails')->insert(array (
            0 =>
            array (
                'id' => 3501,
                'banned' => 'xperiae5.com',
                'notes' => NULL,
            ),
            1 =>
            array (
                'id' => 3502,
                'banned' => 'xrap.de',
                'notes' => NULL,
            ),
            2 =>
            array (
                'id' => 3503,
                'banned' => 'xrho.com',
                'notes' => NULL,
            ),
            3 =>
            array (
                'id' => 3504,
                'banned' => 'xvx.us',
                'notes' => NULL,
            ),
            4 =>
            array (
                'id' => 3505,
                'banned' => 'xwaretech.com',
                'notes' => NULL,
            ),
            5 =>
            array (
                'id' => 3506,
                'banned' => 'xwaretech.info',
                'notes' => NULL,
            ),
            6 =>
            array (
                'id' => 3507,
                'banned' => 'xwaretech.net',
                'notes' => NULL,
            ),
            7 =>
            array (
                'id' => 3508,
                'banned' => 'xww.ro',
                'notes' => NULL,
            ),
            8 =>
            array (
                'id' => 3509,
                'banned' => 'xxhamsterxx.ga',
                'notes' => NULL,
            ),
            9 =>
            array (
                'id' => 3510,
                'banned' => 'xxi2.com',
                'notes' => NULL,
            ),
            10 =>
            array (
                'id' => 3511,
                'banned' => 'xxlocanto.us',
                'notes' => NULL,
            ),
            11 =>
            array (
                'id' => 3512,
                'banned' => 'xxolocanto.us',
                'notes' => NULL,
            ),
            12 =>
            array (
                'id' => 3513,
                'banned' => 'xxqx3802.com',
                'notes' => NULL,
            ),
            13 =>
            array (
                'id' => 3514,
                'banned' => 'xy9ce.tk',
                'notes' => NULL,
            ),
            14 =>
            array (
                'id' => 3515,
                'banned' => 'xyzfree.net',
                'notes' => NULL,
            ),
            15 =>
            array (
                'id' => 3516,
                'banned' => 'xzsok.com',
                'notes' => NULL,
            ),
            16 =>
            array (
                'id' => 3517,
                'banned' => 'yabai-oppai.tk',
                'notes' => NULL,
            ),
            17 =>
            array (
                'id' => 3518,
                'banned' => 'yahmail.top',
                'notes' => NULL,
            ),
            18 =>
            array (
                'id' => 3519,
                'banned' => 'yahooproduct.net',
                'notes' => NULL,
            ),
            19 =>
            array (
                'id' => 3520,
                'banned' => 'yamail.win',
                'notes' => NULL,
            ),
            20 =>
            array (
                'id' => 3521,
                'banned' => 'yanet.me',
                'notes' => NULL,
            ),
            21 =>
            array (
                'id' => 3522,
                'banned' => 'yannmail.win',
                'notes' => NULL,
            ),
            22 =>
            array (
                'id' => 3523,
                'banned' => 'yapped.net',
                'notes' => NULL,
            ),
            23 =>
            array (
                'id' => 3524,
                'banned' => 'yaqp.com',
                'notes' => NULL,
            ),
            24 =>
            array (
                'id' => 3525,
                'banned' => 'yarnpedia.ga',
                'notes' => NULL,
            ),
            25 =>
            array (
                'id' => 3526,
                'banned' => 'ycare.de',
                'notes' => NULL,
            ),
            26 =>
            array (
                'id' => 3527,
                'banned' => 'ycn.ro',
                'notes' => NULL,
            ),
            27 =>
            array (
                'id' => 3528,
                'banned' => 'ye.vc',
                'notes' => NULL,
            ),
            28 =>
            array (
                'id' => 3529,
                'banned' => 'yedi.org',
                'notes' => NULL,
            ),
            29 =>
            array (
                'id' => 3530,
                'banned' => 'yeezus.ru',
                'notes' => NULL,
            ),
            30 =>
            array (
                'id' => 3531,
                'banned' => 'yep.it',
                'notes' => NULL,
            ),
            31 =>
            array (
                'id' => 3532,
                'banned' => 'yermail.net',
                'notes' => NULL,
            ),
            32 =>
            array (
                'id' => 3533,
                'banned' => 'yhg.biz',
                'notes' => NULL,
            ),
            33 =>
            array (
                'id' => 3534,
                'banned' => 'ynmrealty.com',
                'notes' => NULL,
            ),
            34 =>
            array (
                'id' => 3535,
                'banned' => 'yodx.ro',
                'notes' => NULL,
            ),
            35 =>
            array (
                'id' => 3536,
                'banned' => 'yogamaven.com',
                'notes' => NULL,
            ),
            36 =>
            array (
                'id' => 3537,
                'banned' => 'yoggm.com',
                'notes' => NULL,
            ),
            37 =>
            array (
                'id' => 3538,
                'banned' => 'yomail.info',
                'notes' => NULL,
            ),
            38 =>
            array (
                'id' => 3539,
                'banned' => 'yoo.ro',
                'notes' => NULL,
            ),
            39 =>
            array (
                'id' => 3540,
                'banned' => 'yopmail.com',
                'notes' => NULL,
            ),
            40 =>
            array (
                'id' => 3541,
                'banned' => 'yopmail.fr',
                'notes' => NULL,
            ),
            41 =>
            array (
                'id' => 3542,
                'banned' => 'yopmail.gq',
                'notes' => NULL,
            ),
            42 =>
            array (
                'id' => 3543,
                'banned' => 'yopmail.net',
                'notes' => NULL,
            ),
            43 =>
            array (
                'id' => 3544,
                'banned' => 'yopmail.pp.ua',
                'notes' => NULL,
            ),
            44 =>
            array (
                'id' => 3545,
                'banned' => 'yordanmail.cf',
                'notes' => NULL,
            ),
            45 =>
            array (
                'id' => 3546,
                'banned' => 'you-spam.com',
                'notes' => NULL,
            ),
            46 =>
            array (
                'id' => 3547,
                'banned' => 'yougotgoated.com',
                'notes' => NULL,
            ),
            47 =>
            array (
                'id' => 3548,
                'banned' => 'youmail.ga',
                'notes' => NULL,
            ),
            48 =>
            array (
                'id' => 3549,
                'banned' => 'youmailr.com',
                'notes' => NULL,
            ),
            49 =>
            array (
                'id' => 3550,
                'banned' => 'youneedmore.info',
                'notes' => NULL,
            ),
            50 =>
            array (
                'id' => 3551,
                'banned' => 'youpymail.com',
                'notes' => NULL,
            ),
            51 =>
            array (
                'id' => 3552,
                'banned' => 'yourdomain.com',
                'notes' => NULL,
            ),
            52 =>
            array (
                'id' => 3553,
                'banned' => 'youremail.cf',
                'notes' => NULL,
            ),
            53 =>
            array (
                'id' => 3554,
                'banned' => 'yourewronghereswhy.com',
                'notes' => NULL,
            ),
            54 =>
            array (
                'id' => 3555,
                'banned' => 'yourlms.biz',
                'notes' => NULL,
            ),
            55 =>
            array (
                'id' => 3556,
                'banned' => 'yourspamgoesto.space',
                'notes' => NULL,
            ),
            56 =>
            array (
                'id' => 3557,
                'banned' => 'yourtube.ml',
                'notes' => NULL,
            ),
            57 =>
            array (
                'id' => 3558,
                'banned' => 'yroid.com',
                'notes' => NULL,
            ),
            58 =>
            array (
                'id' => 3559,
                'banned' => 'yspend.com',
                'notes' => NULL,
            ),
            59 =>
            array (
                'id' => 3560,
                'banned' => 'ytpayy.com',
                'notes' => NULL,
            ),
            60 =>
            array (
                'id' => 3561,
                'banned' => 'yugasandrika.com',
                'notes' => NULL,
            ),
            61 =>
            array (
                'id' => 3562,
                'banned' => 'yui.it',
                'notes' => NULL,
            ),
            62 =>
            array (
                'id' => 3563,
                'banned' => 'yuoia.com',
                'notes' => NULL,
            ),
            63 =>
            array (
                'id' => 3564,
                'banned' => 'yuurok.com',
                'notes' => NULL,
            ),
            64 =>
            array (
                'id' => 3565,
                'banned' => 'yxzx.net',
                'notes' => NULL,
            ),
            65 =>
            array (
                'id' => 3566,
                'banned' => 'yyolf.net',
                'notes' => NULL,
            ),
            66 =>
            array (
                'id' => 3567,
                'banned' => 'z-o-e-v-a.ru',
                'notes' => NULL,
            ),
            67 =>
            array (
                'id' => 3568,
                'banned' => 'z0d.eu',
                'notes' => NULL,
            ),
            68 =>
            array (
                'id' => 3569,
                'banned' => 'z1p.biz',
                'notes' => NULL,
            ),
            69 =>
            array (
                'id' => 3570,
                'banned' => 'z86.ru',
                'notes' => NULL,
            ),
            70 =>
            array (
                'id' => 3571,
                'banned' => 'zain.site',
                'notes' => NULL,
            ),
            71 =>
            array (
                'id' => 3572,
                'banned' => 'zainmax.net',
                'notes' => NULL,
            ),
            72 =>
            array (
                'id' => 3573,
                'banned' => 'zaktouni.fr',
                'notes' => NULL,
            ),
            73 =>
            array (
                'id' => 3574,
                'banned' => 'zarabotokdoma11.ru',
                'notes' => NULL,
            ),
            74 =>
            array (
                'id' => 3575,
                'banned' => 'zasod.com',
                'notes' => NULL,
            ),
            75 =>
            array (
                'id' => 3576,
                'banned' => 'zaym-zaym.ru',
                'notes' => NULL,
            ),
            76 =>
            array (
                'id' => 3577,
                'banned' => 'zcrcd.com',
                'notes' => NULL,
            ),
            77 =>
            array (
                'id' => 3578,
                'banned' => 'zdenka.net',
                'notes' => NULL,
            ),
            78 =>
            array (
                'id' => 3579,
                'banned' => 'ze.tc',
                'notes' => NULL,
            ),
            79 =>
            array (
                'id' => 3580,
                'banned' => 'zebins.com',
                'notes' => NULL,
            ),
            80 =>
            array (
                'id' => 3581,
                'banned' => 'zebins.eu',
                'notes' => NULL,
            ),
            81 =>
            array (
                'id' => 3582,
                'banned' => 'zehnminuten.de',
                'notes' => NULL,
            ),
            82 =>
            array (
                'id' => 3583,
                'banned' => 'zehnminutenmail.de',
                'notes' => NULL,
            ),
            83 =>
            array (
                'id' => 3584,
                'banned' => 'zemzar.net',
                'notes' => NULL,
            ),
            84 =>
            array (
                'id' => 3585,
                'banned' => 'zepp.dk',
                'notes' => NULL,
            ),
            85 =>
            array (
                'id' => 3586,
                'banned' => 'zetmail.com',
                'notes' => NULL,
            ),
            86 =>
            array (
                'id' => 3587,
                'banned' => 'zfymail.com',
                'notes' => NULL,
            ),
            87 =>
            array (
                'id' => 3588,
                'banned' => 'zhaoqian.ninja',
                'notes' => NULL,
            ),
            88 =>
            array (
                'id' => 3589,
                'banned' => 'zhaoyuanedu.cn',
                'notes' => NULL,
            ),
            89 =>
            array (
                'id' => 3590,
                'banned' => 'zhcne.com',
                'notes' => NULL,
            ),
            90 =>
            array (
                'id' => 3591,
                'banned' => 'zhewei88.com',
                'notes' => NULL,
            ),
            91 =>
            array (
                'id' => 3592,
                'banned' => 'zhorachu.com',
                'notes' => NULL,
            ),
            92 =>
            array (
                'id' => 3593,
                'banned' => 'zik.dj',
                'notes' => NULL,
            ),
            93 =>
            array (
                'id' => 3594,
                'banned' => 'zipcad.com',
                'notes' => NULL,
            ),
            94 =>
            array (
                'id' => 3595,
                'banned' => 'zipcatfish.com',
                'notes' => NULL,
            ),
            95 =>
            array (
                'id' => 3596,
                'banned' => 'zipo1.gq',
                'notes' => NULL,
            ),
            96 =>
            array (
                'id' => 3597,
                'banned' => 'zippymail.info',
                'notes' => NULL,
            ),
            97 =>
            array (
                'id' => 3598,
                'banned' => 'zipsendtest.com',
                'notes' => NULL,
            ),
            98 =>
            array (
                'id' => 3599,
                'banned' => 'zoaxe.com',
                'notes' => NULL,
            ),
            99 =>
            array (
                'id' => 3600,
                'banned' => 'zoemail.com',
                'notes' => NULL,
            ),
            100 =>
            array (
                'id' => 3601,
                'banned' => 'zoemail.net',
                'notes' => NULL,
            ),
            101 =>
            array (
                'id' => 3602,
                'banned' => 'zoemail.org',
                'notes' => NULL,
            ),
            102 =>
            array (
                'id' => 3603,
                'banned' => 'zoetropes.org',
                'notes' => NULL,
            ),
            103 =>
            array (
                'id' => 3604,
                'banned' => 'zombie-hive.com',
                'notes' => NULL,
            ),
            104 =>
            array (
                'id' => 3605,
                'banned' => 'zomg.info',
                'notes' => NULL,
            ),
            105 =>
            array (
                'id' => 3606,
                'banned' => 'zsero.com',
                'notes' => NULL,
            ),
            106 =>
            array (
                'id' => 3607,
                'banned' => 'zumpul.com',
                'notes' => NULL,
            ),
            107 =>
            array (
                'id' => 3608,
                'banned' => 'zv68.com',
                'notes' => NULL,
            ),
            108 =>
            array (
                'id' => 3609,
                'banned' => 'zxcv.com',
                'notes' => NULL,
            ),
            109 =>
            array (
                'id' => 3610,
                'banned' => 'zxcvbnm.com',
                'notes' => NULL,
            ),
            110 =>
            array (
                'id' => 3611,
                'banned' => 'zymuying.com',
                'notes' => NULL,
            ),
            111 =>
            array (
                'id' => 3612,
                'banned' => 'zzi.us',
                'notes' => NULL,
            ),
            112 =>
            array (
                'id' => 3613,
                'banned' => 'zzrgg.com',
                'notes' => NULL,
            ),
            113 =>
            array (
                'id' => 3614,
                'banned' => 'zzz.com',
                'notes' => NULL,
            ),
            114 =>
            array (
                'id' => 3615,
                'banned' => 'test@example.com',
                'notes' => NULL,
            ),
        ));


    }
}
