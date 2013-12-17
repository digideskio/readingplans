<?php

class bibleplan {
    function getVersion() {
        return '1.0.2';
    }

    function getId() {
        return 'esvliterarystudybible';
    }

    function getName() {
        return 'ESV Literary Study Bible Plan';
    }

    function getInfo() {
        $info = "ESV Literary Study Bible<br /><a target='_new' href='http://www.esv.org/biblereadingplans'>www.esv.org</a>";
        return $info;
    }

    function getData() {
        $data = array(
            1 => 'Ecclesiastes 3:1-8;Genesis 1;1Chronicles 1;Luke 1:1-25',
            2 => 'Psalm 1;Genesis 2;1Chronicles 2;Luke 1:26-56',
            3 => 'Psalm 2;Genesis 3;1Chronicles 3;Luke 1:57-80',
            4 => 'Psalm 3;Genesis 4;1Chronicles 4;Luke 2:1-21',
            5 => 'Psalm 4;Genesis 5;1Chronicles 5;Luke 2:22-52',
            6 => 'Psalm 5;Genesis 6;1Chronicles 6;Luke 3:1-22',
            7 => 'Psalm 6;Genesis 7;1Chronicles 7;Luke 3:23-4:13',
            8 => 'Psalm 7;Genesis 8:1-19;1Chronicles 8;Luke 4:14-44',
            9 => 'Psalm 8;Genesis 8:20-9:19;1Chronicles 9;Luke 5:1-6:16',
            10 => 'Psalm 9;Genesis 9:20-10:32;1Chronicles 10;Luke 6:17-49',
            11 => 'Psalm 10;Genesis 11;1Chronicles 11;Luke 7:1-35',
            12 => 'Psalm 11;Genesis 12-13:1;1Chronicles 12;Luke 7:36-8:3',
            13 => 'Psalm 12;Genesis 13:2-18;1Chronicles 13;Luke 8:4-21',
            14 => 'Psalm 13;Genesis 14;1Chronicles 14;Luke 8:22-56',
            15 => 'Psalm 14;Genesis 15;1Chronicles 15:1-16:3;Luke 9:1-50',
            16 => 'Psalm 15;Genesis 16;1Chronicles 16:4-43;Luke 9:51-10:24',
            17 => 'Psalm 16;Genesis 17;1Chronicles 17;Luke 10:25-42',
            18 => 'Psalm 17;Genesis 18:1-15;1Chronicles 18-20;Luke 11:1-36',
            19 => 'Psalm 18;Genesis 18:16-33;1Chronicles 21:1-17;Luke 11:37-12:12',
            20 => 'Psalm 19;Genesis 19;1Chronicles 21:18-22:19;Luke 12:13-48',
            21 => 'Psalm 20;Genesis 20;1Chronicles 23-24;Luke 12:49-13:9',
            22 => 'Psalm 21;Genesis 21:1-21;1Chronicles 25;Luke 13:10-35',
            23 => 'Psalm 22;Genesis 21:22-34;1Chronicles 26;Luke 14',
            24 => 'Psalm 23;Genesis 22;1Chronicles 27;Luke 15',
            25 => 'Psalm 24;Genesis 23;1Chronicles 28;Luke 16:1-17:10',
            26 => 'Psalm 25;Genesis 24;1Chronicles 29:1-22a;Luke 17:11-37',
            27 => 'Psalm 26;Genesis 25:1-18;1Chronicles 29:22b-30;Luke 18:1-30',
            28 => 'Psalm 27;Genesis 25:19-34;2Chronicles 1;Luke 18:31-19:27',
            29 => 'Psalm 28;Genesis 26;2Chronicles 2;Luke 19:28-46',
            30 => 'Psalm 29;Genesis 27:1-40;2Chronicles 3;Luke 19:47-20:44',
            31 => 'Psalm 30;Genesis 27:41-28:9;2Chronicles 4;Luke 20:45-21:38',
            32 => 'Psalm 31;Genesis 28:10-22;2Chronicles 5;Luke 22:1-46',
            33 => 'Psalm 32;Genesis 29:1-30;2Chronicles 6;Luke 22:47-23:25',
            34 => 'Psalm 33;Genesis 29:31-30:43;2Chronicles 7;Luke 23:26-56',
            35 => 'Psalm 34;Genesis 31;2Chronicles 8;Luke 24',
            36 => 'Psalm 35;Genesis 32;2Chronicles 9;Acts 1',
            37 => 'Psalm 36;Genesis 33;2Chronicles 10;Acts 2',
            38 => 'Psalm 37;Genesis 34;2Chronicles 11;Acts 3:1-4:31',
            39 => 'Psalm 38;Genesis 35;2Chronicles 12;Acts 4:32-6:7',
            40 => 'Psalm 39;Genesis 36;2Chronicles 13;Acts 6:8-7:60',
            41 => 'Psalm 40;Genesis 37;2Chronicles 14;Acts 8',
            42 => 'Psalm 41;Genesis 38;2Chronicles 15;Acts 9:1-31',
            43 => 'Psalm 42-43;Genesis 39;2Chronicles 16;Acts 9:32-43',
            44 => 'Psalm 44;Genesis 40;2Chronicles 17;Acts 10:1-11:18',
            45 => 'Psalm 45;Genesis 41:1-36;2Chronicles 18:1-19:3;Acts 11:19-30',
            46 => 'Psalm 46;Genesis 41:37-57;2Chronicles 19:4-11;Acts 12',
            47 => 'Psalm 47;Genesis 42;2Chronicles 20;Acts 13-14',
            48 => 'Psalm 48;Genesis 43;2Chronicles 21;Acts 15:1-35',
            49 => 'Psalm 49;Genesis 44;2Chronicles 22;Acts 15:36-17:15',
            50 => 'Psalm 50;Genesis 45;2Chronicles 23;Acts 17:16-34',
            51 => 'Psalm 51;Genesis 46:1-47:12;2Chronicles 24;Acts 18:1-22',
            52 => 'Psalm 52;Genesis 47:13-26;2Chronicles 25;Acts 18:23-19:22',
            53 => 'Psalm 53;Genesis 47:27-48:22;2Chronicles 26;Acts 19:23-20:16',
            54 => 'Psalm 54;Genesis 49;2Chronicles 27;Acts 20:17-21:16',
            55 => 'Psalm 55;Genesis 50:1-14;2Chronicles 28;Acts 21:17-23:11',
            56 => 'Psalm 56;Genesis 50:15-26;2Chronicles 29;Acts 23:12-24:27',
            57 => 'Psalm 57;Exodus 1:1-21;2Chronicles 30;Acts 25-26',
            58 => 'Psalm 58;Exodus 1:22-2:22;2Chronicles 31;Acts 27:1-28:15',
            59 => 'Psalm 59;Exodus 2:23-3:22;2Chronicles 32;Acts 28:16-31',
            60 => 'Psalm 60;Exodus 4;2Chronicles 33;Romans 1:1-17',
            61 => 'Psalm 61;Exodus 5:1-6:9;2Chronicles 34;Romans 1:18-32',
            62 => 'Psalm 62;Exodus 6:10-7:13;2Chronicles 35:1-19;Romans 2:1-16',
            63 => 'Psalm 63;Exodus 7:14-8:19;2Chronicles 35:20-27;Romans 2:17-3:8',
            64 => 'Psalm 64;Exodus 8:20-9:12;2Chronicles 36;Romans 3:9-20',
            65 => 'Psalm 65;Exodus 9:13-10:29;Ezra 1;Romans 3:21-31',
            66 => 'Psalm 66;Exodus 11:1-12:30;Ezra 2;Romans 4',
            67 => 'Psalm 67;Exodus 12:31-13:22;Ezra 3;Romans 5:1-11',
            68 => 'Psalm 68;Exodus 14;Ezra 4;Romans 5:12-21',
            69 => 'Psalm 69;Exodus 15:1-21;Ezra 5;Romans 6',
            70 => 'Psalm 70;Exodus 15:22-16:36;Ezra 6;Romans 7',
            71 => 'Psalm 71;Exodus 17;Ezra 7;Romans 8:1-17',
            72 => 'Psalm 72;Exodus 18;Ezra 8;Romans 8:18-39',
            73 => 'Psalm 73;Exodus 19;Ezra 9;Romans 9:1-29',
            74 => 'Psalm 74;Exodus 20:1-17;Ezra 10;Romans 9:30-10:21',
            75 => 'Psalm 75;Exodus 20:18-21:11;Nehemiah 1;Romans 11',
            76 => 'Psalm 76;Exodus 21:12-22:15;Nehemiah 2;Romans 12',
            77 => 'Psalm 77;Exodus 22:16-23:9;Nehemiah 3;Romans 13',
            78 => 'Psalm 78;Exodus 23:10-33;Nehemiah 4;Romans 14',
            79 => 'Psalm 79;Exodus 24;Nehemiah 5;Romans 15:1-13',
            80 => 'Psalm 80;Exodus 25;Nehemiah 6;Romans 15:14-33',
            81 => 'Psalm 81;Exodus 26;Nehemiah 7;Romans 16',
            82 => 'Psalm 82;Exodus 27:1-19;Nehemiah 8;1Corinthians 1:1-17',
            83 => 'Psalm 83;Exodus 27:20-28:43;Nehemiah 9;1Corinthians 1:18-31',
            84 => 'Psalm 84;Exodus 29;Nehemiah 10;1Corinthians 2',
            85 => 'Psalm 85;Exodus 30-31;Nehemiah 11:1-12:26;1Corinthians 3',
            86 => 'Psalm 86;Exodus 32;Nehemiah 12:27-47;1Corinthians 4',
            87 => 'Psalm 87;Exodus 33;Nehemiah 13;1Corinthians 5',
            88 => 'Psalm 88;Exodus 34;Ester 1;1Corinthians 6',
            89 => 'Psalm 89;Exodus 35:1-29;Ester 2;1Corinthians 7',
            90 => 'Psalm 90;Exodus 35:30-36:38;Ester 3;1Corinthians 8',
            91 => 'Psalm 91;Exodus 37;Ester 4;1Corinthians 9',
            92 => 'Psalm 92;Exodus 38;Ester 5;1Corinthians 10:1-11:1',
            93 => 'Psalm 93;Exodus 39;Ester 6;1Corinthians 11:2-34',
            94 => 'Psalm 94;Exodus 40;Ester 7;1Corinthians 12',
            95 => 'Psalm 95;Leviticus 1;Ester 8;1Corinthians 13',
            96 => 'Psalm 96;Leviticus 2;Ester 9-10;1Corinthians 14',
            97 => 'Psalm 97;Leviticus 3;Isaiah 1;1Corinthians 15',
            98 => 'Psalm 98;Leviticus 4:1-5:13;Isaiah 2;1Corinthians 16',
            99 => 'Psalm 99;Leviticus 5:14-6:7;Isaiah 3-4;2Corinthians 1:1-11',
            100 => 'Psalm 100;Leviticus 6:8-7:38;Isaiah 5;2Corinthians 1:12-2:11',
            101 => 'Psalm 101;Leviticus 8;Isaiah 6;2Corinthians 2:12-3:18',
            102 => 'Psalm 102;Leviticus 9;Isaiah 7-8;2Corinthians 4:1-5:10',
            103 => 'Psalm 103;Leviticus 10;Isaiah 9:1-7;2Corinthians 5:11-6:10',
            104 => 'Psalm 104;Leviticus 11;Isaiah 9:8-10:34;2Corinthians 6:11-7:16',
            105 => 'Psalm 105;Leviticus 12;Isaiah 11-12;2Corinthians 8-9',
            106 => 'Psalm 106;Leviticus 13;Isaiah 13-14;2Corinthians 10:1-12',
            107 => 'Psalm 107;Leviticus 14:1-32;Isaiah 15-16;2Corinthians 10:13-12:13',
            108 => 'Psalm 108;Leviticus 14:33-57;Isaiah 17-18;2Corinthians 12:14-13:14',
            109 => 'Psalm 109;Leviticus 15;Isaiah 19-20;Galatians 1:1-10',
            110 => 'Psalm 110;Leviticus 16;Isaiah 21;Galatians 1:11-24',
            111 => 'Psalm 111;Leviticus 17;Isaiah 22;Galatians 2',
            112 => 'Psalm 112;Leviticus 18;Isaiah 23;Galatians 3',
            113 => 'Psalm 113;Leviticus 19;Isaiah 24;Galatians 4',
            114 => 'Psalm 114;Leviticus 20;Isaiah 25;Galatians 5',
            115 => 'Psalm 115;Leviticus 21:1-22:16;Isaiah 26-27;Galatians 6',
            116 => 'Psalm 116;Leviticus 22:17-33;Isaiah 28;Ephesians 1',
            117 => 'Psalm 117;Leviticus 23;Isaiah 29:1-30:17;Ephesians 2',
            118 => 'Psalm 118;Leviticus 24;Isaiah 30:18-32:20;Ephesians 3',
            119 => 'Psalm 119:1-88;Leviticus 25;Isaiah 33-34;Ephesians 4:1-16',
            120 => 'Psalm 119:89-176;Leviticus 26;Isaiah 35;Ephesians 4:17-32',
            121 => 'Psalm 120;Leviticus 27;Isaiah 36-37;Ephesians 5:1-21',
            122 => 'Psalm 121;Numbers 1;Isaiah 38;Ephesians 5:22-6:9',
            123 => 'Psalm 122;Numbers 2;Isaiah 39;Ephesians 6:10-24',
            124 => 'Psalm 123;Numbers 3-4;Isaiah 40;Philippians 1:1-26',
            125 => 'Psalm 124;Numbers 5;Isaiah 41;Philippians 1:27-2:11',
            126 => 'Psalm 125;Numbers 6;Isaiah 42;Philippians 2:12-30',
            127 => 'Psalm 126;Numbers 7;Isaiah 43:1-44:5;Philippians 3:1-4:1',
            128 => 'Psalm 127;Numbers 8;Isaiah 44:6-28;Philippians 4:2-23',
            129 => 'Psalm 128;Numbers 9:1-14;Isaiah 45;Colossians 1:1-20',
            130 => 'Psalm 129;Numbers 9:15-10:10;Isaiah 46-47;Colossians 1:21-2:5',
            131 => 'Psalm 130;Numbers 10:11-36;Isaiah 48-49;Colossians 2:6-23',
            132 => 'Psalm 131;Numbers 11;Isaiah 50;Colossians 3:1-17',
            133 => 'Psalm 132;Numbers 12;Isaiah 51:1-52:12;Colossians 3:18-4:18',
            134 => 'Psalm 133;Numbers 13-14;Isaiah 52:13-53:12;1Thessalonians 1',
            135 => 'Psalm 134;Numbers 15;Isaiah 54;1Thessalonians 2:1-16',
            136 => 'Psalm 135;Numbers 16-17;Isaiah 55;1Thessalonians 2:17-3:13',
            137 => 'Psalm 136;Numbers 18-19;Isaiah 56-57;1Thessalonians 4:1-12',
            138 => 'Psalm 137;Numbers 20-21;Isaiah 58;1Thessalonians 4:13-5:11',
            139 => 'Psalm 138;Numbers 22;Isaiah 59;1Thessalonians 5:12-22',
            140 => 'Psalm 139;Numbers 23-24;Isaiah 60;1Thessalonians 5:23-28',
            141 => 'Psalm 140;Numbers 25;Isaiah 61-62;2Thessalonians 1',
            142 => 'Psalm 141;Numbers 26;Isaiah 63-64;2Thessalonians 2:1-12',
            143 => 'Psalm 142;Numbers 27;Isaiah 65;2Thessalonians 2:13-3:5',
            144 => 'Psalm 143;Numbers 28-29;Isaiah 66;2Thessalonians 3:6-18',
            145 => 'Psalm 144;Numbers 30;Obadiah 1-14;1Timothy 1',
            146 => 'Psalm 145;Numbers 31;Obadiah 15-21;1Timothy 2',
            147 => 'Psalm 146;Numbers 32;Joel 1;1Timothy 3',
            148 => 'Psalm 147;Numbers 33:1-49;Joel 2:1-17;1Timothy 4',
            149 => 'Psalm 148;Numbers 33:50-34:29;Joel 2:18-27;1Timothy 5:1-6:2',
            150 => 'Psalm 149;Numbers 35-36;Joel 2:28-3:21;1Timothy 6:3-21',
            151 => 'Psalm 150;Deuteronomy 1;Jonah 1;2Timothy 1:1-7 ',
            152 => 'Proverbs 1:1-7;Deuteronomy 2;Jonah 2;2Timothy 1:8-18 ',
            153 => 'Proverbs 1:8-19;Deuteronomy 3;Jonah 3;2Timothy 2 ',
            154 => 'Proverbs 1:20-33;Deuteronomy 4;Jonah 4;2Timothy 3:1-9 ',
            155 => 'Proverbs 2;Deuteronomy 5;Hosea 1:1-2:1;2Timothy 3:10-4:8 ',
            156 => 'Proverbs 3:1-12;Deuteronomy 6;Hosea 2:2-23;2Timothy 4:9-22 ',
            157 => 'Proverbs 3:13-20;Deuteronomy 7;Hosea 3;Titus 1:1-4 ',
            158 => 'Proverbs 3:21-35;Deuteronomy 8:1-9:5;Hosea 4-5;Titus 1:5-16 ',
            159 => 'Proverbs 4;Deuteronomy 9:6-10:11;Hosea 6-7;Titus 2 ',
            160 => 'Proverbs 5;Deuteronomy 10:12-11:32;Hosea 8;Titus 3:1-8a',
            161 => 'Proverbs 6:1-19;Deuteronomy 12;Hosea 9;Titus 3:8b-11',
            162 => 'Proverbs 6:20-35;Deuteronomy 13;Hosea 10;Titus 3:12-15',
            163 => 'Proverbs 7;Deuteronomy 14;Hosea 11:1-11;Philemon 1-3',
            164 => 'Proverbs 8;Deuteronomy 15:1-18;Hosea 11:12-13:16;Philemon 4-7',
            165 => 'Proverbs 9;Deuteronomy 15:19-16:17;Hosea 14;Philemon 8-22 ',
            166 => 'Proverbs 10;Deuteronomy 16:18-17:20;Amos 1:1-2:5;Philemon 23-25',
            167 => 'Proverbs 11-12;Deuteronomy 18;Amos 2:6-16;Matthew 1:1-17',
            168 => 'Proverbs 13-14;Deuteronomy 19;Amos 3;Matthew 1:18-2:12',
            169 => 'Proverbs 15-16;Deuteronomy 20;Amos 4;Matthew 2:13-23',
            170 => 'Proverbs 17-18;Deuteronomy 21:1-22:12;Amos 5;Matthew 3',
            171 => 'Proverbs 19-20;Deuteronomy 22:13-30;Amos 6;Matthew 4:1-11',
            172 => 'Proverbs 21-22;Deuteronomy 23:1-14;Amos 7-8;Matthew 4:12-25',
            173 => 'Proverbs 23-24;Deuteronomy 23:15-25:19;Amos 9;Matthew 5:1-16',
            174 => 'Proverbs 25-26;Deuteronomy 26;Micah 1-2;Matthew 5:17-48',
            175 => 'Proverbs 27-28;Deuteronomy 27;Micah 3;Matthew 6:1-18',
            176 => 'Proverbs 29;Deuteronomy 28:1-14;Micah 4;Matthew 6:19-24',
            177 => 'Proverbs 30:1-31:9;Deuteronomy 28:15-68;Micah 5;Matthew 6:25-34',
            178 => 'Proverbs 31:10-31;Deuteronomy 29:1-30:10;Micah 6;Matthew 7:1-12',
            179 => 'Ecclesiastes 1:1-3;Deuteronomy 30:11-20;Micah 7:1-13;Matthew 7:13-29',
            180 => 'Ecclesiastes 1:4-11;Deuteronomy 31:1-29;Micah 7:14-20;Matthew 8',
            181 => 'Ecclesiastes 1:12-18;Deuteronomy 31:30-32:47;Nahum 1;Matthew 9',
            182 => 'Ecclesiastes 2:1-11;Deuteronomy 32:48-33:29;Nahum 2:1-3:4;Matthew 10',
            183 => 'Ecclesiastes 2:12-17;Deuteronomy 34;Nahum 3:5-19;Matthew 11',
            184 => 'Ecclesiastes 2:18-23;Joshua 1;Zephaniah 1:1-2:3;Matthew 12',
            185 => 'Ecclesiastes 2:24-26;Joshua 2;Zephaniah 2:4-15;Matthew 13',
            186 => 'Ecclesiastes 3:1-8;Joshua 3;Zephaniah 3:1-8;Matthew 14',
            187 => 'Ecclesiastes 3:9-22;Joshua 4;Zephaniah 3:9-20;Matthew 15',
            188 => 'Ecclesiastes 4;Joshua 5;Jeremiah 1:1-10;Matthew 16',
            189 => 'Ecclesiastes 5:1-7;Joshua 6;Jeremiah 1:11-19;Matthew 17',
            190 => 'Ecclesiastes 5:8-17;Joshua 7;Jeremiah 2:1-3:5;Matthew 18',
            191 => 'Ecclesiastes 5:18-20;Joshua 8;Jeremiah 3:6-4:4;Matthew 19:1-20:16',
            192 => 'Ecclesiastes 6;Joshua 9;Jeremiah 4:5-31;Matthew 20:17-21:11',
            193 => 'Ecclesiastes 7:1-14;Joshua 10;Jeremiah 5;Matthew 21:12-27',
            194 => 'Ecclesiastes 7:15-29;Joshua 11-12;Jeremiah 6;Matthew 21:28-22:14',
            195 => 'Ecclesiastes 8;Joshua 13-14;Jeremiah 7:1-8:3;Matthew 22:15-46',
            196 => 'Ecclesiastes 9:1-10;Joshua 15;Jeremiah 8:4-9:22;Matthew 23',
            197 => 'Ecclesiastes 9:11-18;Joshua 16-17;Jeremiah 9:23-10:25;Matthew 24',
            198 => 'Ecclesiastes 10;Joshua 18-19;Jeremiah 11:1-17;Matthew 25',
            199 => 'Ecclesiastes 11:1-8;Joshua 20;Jeremiah 11:18-12:17;Matthew 26:1-29',
            200 => 'Ecclesiastes 11:9-12:8;Joshua 21;Jeremiah 13;Matthew 26:30-75',
            201 => 'Ecclesiastes 12:9-14;Joshua 22;Jeremiah 14:1-15:9;Matthew 27:1-26',
            202 => 'SongOfSongs 1:1-8;Joshua 23-24;Jeremiah 15:10-16:21;Matthew 27:27-66',
            203 => 'SongOfSongs 1:9-2:7;Judges 1;Jeremiah 17;Matthew 28',
            204 => 'SongOfSongs 2:8-17;Judges 2:1-3:6;Jeremiah 18;Hebrews 1',
            205 => 'SongOfSongs 3;Judges 3:7-31;Jeremiah 19;Hebrews 2',
            206 => 'SongOfSongs 4:1-8;Judges 4;Jeremiah 20;Hebrews 3:1-6',
            207 => 'SongOfSongs 4:9-5:1;Judges 5;Jeremiah 21;Hebrews 3:7-4:13',
            208 => 'SongOfSongs 5:2-9;Judges 6;Jeremiah 22:1-23:8;Hebrews 4:14-5:10',
            209 => 'SongOfSongs 5:10-6:3;Judges 7;Jeremiah 23:9-40;Hebrews 5:11-6:20',
            210 => 'SongOfSongs 6:4-12;Judges 8;Jeremiah 24;Hebrews 7',
            211 => 'SongOfSongs 6:13-7:9;Judges 9;Jeremiah 25:1-14;Hebrews 8:1-9:10',
            212 => 'SongOfSongs 7:10-13;Judges 10:1-11:3;Jeremiah 25:15-38;Hebrews 9:11-10:18',
            213 => 'SongOfSongs 8:1-7;Judges 11:4-40;Jeremiah 26;Hebrews 10:19-39',
            214 => 'SongOfSongs 8:8-14;Judges 12;Jeremiah 27-28;Hebrews 11:1-12:2',
            215 => 'Psalm 1;Judges 13;Jeremiah 29;Hebrews 12:3-29',
            216 => 'Psalm 2;Judges 14;Jeremiah 30;Hebrews 13:1-19',
            217 => 'Psalm 3;Judges 15;Jeremiah 31;Hebrews 13:20-25',
            218 => 'Psalm 4;Judges 16;Jeremiah 32;Mark 1',
            219 => 'Psalm 5;Judges 17;Jeremiah 33;Mark 2-3',
            220 => 'Psalm 6;Judges 18;Jeremiah 34;Mark 4:1-34',
            221 => 'Psalm 7;Judges 19;Jeremiah 35;Mark 4:35-5:43',
            222 => 'Psalm 8;Judges 20;Jeremiah 36;Mark 6',
            223 => 'Psalm 9;Judges 21;Jeremiah 37;Mark 7:1-8:26',
            224 => 'Psalm 10;Ruth 1;Jeremiah 38;Mark 8:27-9:50',
            225 => 'Psalm 11;Ruth 2;Jeremiah 39;Mark 10',
            226 => 'Psalm 12;Ruth 3;Jeremiah 40-41;Mark 11',
            227 => 'Psalm 13;Ruth 4;Jeremiah 42-43;Mark 12',
            228 => 'Psalm 14;1Samuel 1:1-2:11;Jeremiah 44-45;Mark 13',
            229 => 'Psalm 15;1Samuel 2:12-36;Jeremiah 46-47;Mark 14',
            230 => 'Psalm 16;1Samuel 3;Jeremiah 48;Mark 15',
            231 => 'Psalm 17;1Samuel 4;Jeremiah 49;Mark 16',
            232 => 'Psalm 18;1Samuel 5:1-7:2;Jeremiah 50;1Peter 1:1-12',
            233 => 'Psalm 19;1Samuel 7:3-17;Jeremiah 51;1Peter 1:13-2:3',
            234 => 'Psalm 20;1Samuel 8;Jeremiah 52;1Peter 2:4-10',
            235 => 'Psalm 21;1Samuel 9:1-10:16;Lamentations 1;1Peter 2:11-3:12',
            236 => 'Psalm 22;1Samuel 10:17-11:15;Lamentations 2;1Peter 3:13-4:19',
            237 => 'Psalm 23;1Samuel 12;Lamentations 3;1Peter 5',
            238 => 'Psalm 24;1Samuel 13;Lamentations 4;2Peter 1:1-11',
            239 => 'Psalm 25;1Samuel 14;Lamentations 5;2Peter 1:12-21',
            240 => 'Psalm 26;1Samuel 15;Habakkuk 1:1-11;2Peter 2',
            241 => 'Psalm 27;1Samuel 16;Habakkuk 1:12-2:20;2Peter 3',
            242 => 'Psalm 28;1Samuel 17;Habakkuk 3;Luke 1:1-25',
            243 => 'Psalm 29;1Samuel 18;Daniel 1;Luke 1:26-56',
            244 => 'Psalm 30;1Samuel 19;Daniel 2;Luke 1:57-80',
            245 => 'Psalm 31;1Samuel 20;Daniel 3;Luke 2:1-21',
            246 => 'Psalm 32;1Samuel 21-22;Daniel 4;Luke 2:22-52',
            247 => 'Psalm 33;1Samuel 23-24;Daniel 5;Luke 3:1-22',
            248 => 'Psalm 34;1Samuel 25;Daniel 6;Luke 3:23-4:13',
            249 => 'Psalm 35;1Samuel 26;Daniel 7;Luke 4:14-44',
            250 => 'Psalm 36;1Samuel 27;Daniel 8;Luke 5:1-6:16',
            251 => 'Psalm 37;1Samuel 28;Daniel 9;Luke 6:17-49',
            252 => 'Psalm 38;1Samuel 29-30;Daniel 10:1-11:1;Luke 7:1-35',
            253 => 'Psalm 39;1Samuel 31;Daniel 11:2-45;Luke 7:36-8:3',
            254 => 'Psalm 40;2Samuel 1;Daniel 12;Luke 8:4-21',
            255 => 'Psalm 41;2Samuel 2;Ezekiel 1;Luke 8:22-56',
            256 => 'Psalm 42-43;2Samuel 3;Ezekiel 2-3;Luke 9:1-50',
            257 => 'Psalm 44;2Samuel 4;Ezekiel 4:1-5:4;Luke 9:51-10:24',
            258 => 'Psalm 45;2Samuel 5;Ezekiel 5:5-17;Luke 10:25-42',
            259 => 'Psalm 46;2Samuel 6;Ezekiel 6;Luke 11:1-36',
            260 => 'Psalm 47;2Samuel 7;Ezekiel 7;Luke 11:37-12:12',
            261 => 'Psalm 48;2Samuel 8;Ezekiel 8;Luke 12:13-48',
            262 => 'Psalm 49;2Samuel 9;Ezekiel 9;Luke 12:49-13:9',
            263 => 'Psalm 50;2Samuel 10;Ezekiel 10:1-11:13;Luke 13:10-35',
            264 => 'Psalm 51;2Samuel 11;Ezekiel 11:14-25;Luke 14',
            265 => 'Psalm 52;2Samuel 12;Ezekiel 12;Luke 15',
            266 => 'Psalm 53;2Samuel 13;Ezekiel 13;Luke 16:1-17:10',
            267 => 'Psalm 54;2Samuel 14:1-24;Ezekiel 14-15;Luke 17:11-37',
            268 => 'Psalm 55;2Samuel 14:25-15:12;Ezekiel 16;Luke 18:1-30',
            269 => 'Psalm 56;2Samuel 15:13-16:14;Ezekiel 17;Luke 18:31-19:27',
            270 => 'Psalm 57;2Samuel 16:15-17:23;Ezekiel 18;Luke 19:28-46',
            271 => 'Psalm 58;2Samuel 17:24-18:33;Ezekiel 19;Luke 19:47-20:44',
            272 => 'Psalm 59;2Samuel 19;Ezekiel 20;Luke 20:45-21:38',
            273 => 'Psalm 60;2Samuel 20;Ezekiel 21;Luke 22:1-46 ',
            274 => 'Psalm 61;2Samuel 21;Ezekiel 22;Luke 22:47-23:25 ',
            275 => 'Psalm 62;2Samuel 22:1-23:7;Ezekiel 23;Luke 23:26-56 ',
            276 => 'Psalm 63;2Samuel 23:8-39;Ezekiel 24;Luke 24 ',
            277 => 'Psalm 64;2Samuel 24;Ezekiel 25;Romans 1:1-17 ',
            278 => 'Psalm 65;1Kings 1:1-27;Ezekiel 26;Romans 1:18-32 ',
            279 => 'Psalm 66;1Kings 1:28-53;Ezekiel 27;Romans 2:1-16 ',
            280 => 'Psalm 67;1Kings 2;Ezekiel 28;Romans 2:17-3:8 ',
            281 => 'Psalm 68;1Kings 3;Ezekiel 29-30;Romans 3:9-20 ',
            282 => 'Psalm 69;1Kings 4;Ezekiel 31;Romans 3:21-31',
            283 => 'Psalm 70;1Kings 5;Ezekiel 32;Romans 4',
            284 => 'Psalm 71;1Kings 6;Ezekiel 33;Romans 5:1-11',
            285 => 'Psalm 72;1Kings 7;Ezekiel 34;Romans 5:12-21',
            286 => 'Psalm 73;1Kings 8:1-21;Ezekiel 35;Romans 6',
            287 => 'Psalm 74;1Kings 8:22-66;Ezekiel 36;Romans 7',
            288 => 'Psalm 75;1Kings 9:1-9;Ezekiel 37;Romans 8:1-17',
            289 => 'Psalm 76;1Kings 9:10-10:29;Ezekiel 38;Romans 8:18-39',
            290 => 'Psalm 77;1Kings 11;Ezekiel 39;Romans 9:1-29 ',
            291 => 'Psalm 78;1Kings 12:1-15;Ezekiel 40;Romans 9:30-10:21',
            292 => 'Psalm 79;1Kings 12:16-33;Ezekiel 41-42;Romans 11',
            293 => 'Psalm 80;1Kings 13;Ezekiel 43;Romans 12',
            294 => 'Psalm 81;1Kings 14:1-20;Ezekiel 44;Romans 13',
            295 => 'Psalm 82;1Kings 14:21-15:24;Ezekiel 45;Romans 14',
            296 => 'Psalm 83;1Kings 15:25-16:34;Ezekiel 46;Romans 15:1-13',
            297 => 'Psalm 84;1Kings 17;Ezekiel 47:1-12;Romans 15:14-33',
            298 => 'Psalm 85;1Kings 18:1-19;Ezekiel 47:13-48:35;Romans 16',
            299 => 'Psalm 86;1Kings 18:20-46;Haggai 1;James 1',
            300 => 'Psalm 87;1Kings 19;Haggai 2;James 2:1-13',
            301 => 'Psalm 88;1Kings 20;Zechariah 1:1-17;James 2:14-26',
            302 => 'Psalm 89;1Kings 21;Zechariah 1:18-2:13;James 3:1-12',
            303 => 'Psalm 90;1Kings 22:1-40;Zechariah 3;James 3:13-18',
            304 => 'Psalm 91;1Kings 22:41-53;Zechariah 4;James 4:1-10',
            305 => 'Psalm 92;2Kings 1;Zechariah 5;James 4:11-5:12',
            306 => 'Psalm 93;2Kings 2;Zechariah 6;James 5:13-20',
            307 => 'Psalm 94;2Kings 3;Zechariah 7;John 1:1-18',
            308 => 'Psalm 95;2Kings 4;Zechariah 8;John 1:19-51',
            309 => 'Psalm 96;2Kings 5;Zechariah 9;John 2',
            310 => 'Psalm 97;2Kings 6:1-23;Zechariah 10;John 3:1-21',
            311 => 'Psalm 98;2Kings 6:24-7:20;Zechariah 11;John 3:22-36',
            312 => 'Psalm 99;2Kings 8;Zechariah 12-13;John 4:1-42',
            313 => 'Psalm 100;2Kings 9;Zechariah 14;John 4:43-5:18',
            314 => 'Psalm 101;2Kings 10;Malachi 1:1-2:9;John 5:19-47',
            315 => 'Psalm 102;2Kings 11;Malachi 2:10-17;John 6:1-21',
            316 => 'Psalm 103;2Kings 12;Malachi 3:1-12;John 6:22-71',
            317 => 'Psalm 104;2Kings 13;Malachi 3:13-4:6;John 7',
            318 => 'Psalm 105;2Kings 14:1-22;Isaiah 1;John 8',
            319 => 'Psalm 106;2Kings 14:23-15:38;Isaiah 2;John 9',
            320 => 'Psalm 107;2Kings 16;Isaiah 3-4;John 10:1-18',
            321 => 'Psalm 108;2Kings 17:1-23;Isaiah 5;John 10:19-42',
            322 => 'Psalm 109;2Kings 17:24-41;Isaiah 6;John 11:1-54',
            323 => 'Psalm 110;2Kings 18;Isaiah 7-8;John 11:55-12:19',
            324 => 'Psalm 111;2Kings 19;Isaiah 9:1-7;John 12:20-50',
            325 => 'Psalm 112;2Kings 20;Isaiah 9:8-10:34;John 13',
            326 => 'Psalm 113;2Kings 21;Isaiah 11-12;John 14',
            327 => 'Psalm 114;2Kings 22;Isaiah 13-14;John 15:1-17',
            328 => 'Psalm 115;2Kings 23:1-30;Isaiah 15-16;John 15:18-16:15',
            329 => 'Psalm 116;2Kings 23:31-24:17;Isaiah 17-18;John 16:16-33',
            330 => 'Psalm 117;2Kings 24:18-25:21;Isaiah 19-20;John 17',
            331 => 'Psalm 118;2Kings 25:22-30;Isaiah 21;John 18:1-27',
            332 => 'Psalm 119:1-88;Job 1;Isaiah 22;John 18:28-19:16',
            333 => 'Psalm 119:89-176;Job 2;Isaiah 23;John 19:17-42',
            334 => 'Psalm 120;Job 3;Isaiah 24;John 20',
            335 => 'Psalm 121;Job 4-5;Isaiah 25;John 21',
            336 => 'Psalm 122;Job 6-7;Isaiah 26-27;1John 1:1-2:6',
            337 => 'Psalm 123;Job 8;Isaiah 28;1John 2:7-17',
            338 => 'Psalm 124;Job 9-10;Isaiah 29:1-30:17;1John 2:18-3:3',
            339 => 'Psalm 125;Job 11;Isaiah 30:18-32:20;1John 3:4-24',
            340 => 'Psalm 126;Job 12;Isaiah 33-34;1John 4',
            341 => 'Psalm 127;Job 13;Isaiah 35;1John 5',
            342 => 'Psalm 128;Job 14;Isaiah 36-37;2John',
            343 => 'Psalm 129;Job 15;Isaiah 38;3John',
            344 => 'Psalm 130;Job 16-17;Isaiah 39;Jude',
            345 => 'Psalm 131;Job 18;Isaiah 40;Revelation 1',
            346 => 'Psalm 132;Job 19;Isaiah 41;Revelation 2',
            347 => 'Psalm 133;Job 20;Isaiah 42;Revelation 3',
            348 => 'Psalm 134;Job 21;Isaiah 43:1-44:5;Revelation 4',
            349 => 'Psalm 135;Job 22;Isaiah 44:6-28;Revelation 5',
            350 => 'Psalm 136;Job 23-24;Isaiah 45;Revelation 6',
            351 => 'Psalm 137;Job 25-26;Isaiah 46-47;Revelation 7:1-8:5',
            352 => 'Psalm 138;Job 27;Isaiah 48-49;Revelation 8:6-9:21',
            353 => 'Psalm 139;Job 28;Isaiah 50;Revelation 10',
            354 => 'Psalm 140;Job 29;Isaiah 51:1-52:12;Revelation 11',
            355 => 'Psalm 141;Job 30;Isaiah 52:13-53:12;Revelation 12',
            356 => 'Psalm 142;Job 31;Isaiah 54;Revelation 13',
            357 => 'Psalm 143;Job 32;Isaiah 55;Revelation 14',
            358 => 'Psalm 144;Job 33;Isaiah 56-57;Revelation 15',
            359 => 'Psalm 145;Job 34-35;Isaiah 58;Revelation 16',
            360 => 'Psalm 146;Job 36:1-21;Isaiah 59;Revelation 17',
            361 => 'Psalm 147;Job 36:22-37:24;Isaiah 60;Revelation 18',
            362 => 'Psalm 148;Job 38;Isaiah 61-62;Revelation 19',
            363 => 'Psalm 149;Job 39:1-40:5;Isaiah 63-64;Revelation 20',
            364 => 'Psalm 150;Job 40:6-42:6;Isaiah 65;Revelation 21:1-22:5',
            365 => 'Psalm 90;Job 42:7-17;Isaiah 66;Revelation 22:6-21'
        );
        return $data;
    }
}
$bibleplan = new bibleplan();

/**
 * Prepares data for json by trimming it and removing any partial verse annotations
 * @param  array $day Bible references for a day
 * @return array      Pepared bible references
 */
function prepare($day) {
      $references = array();
      foreach (explode(";", $day) as $ref) {
            if (strpos($ref, ",") !== FALSE) {
                  foreach (explode(",", $ref) as $str) {
                        $references[] = trim(preg_replace('/[a-z]{1}(?=-|$)/', '', $str));
                  }
            } else {
                  $references[] = trim(preg_replace('/[a-z]{1}(?=-|$)/', '', $ref));
            }
      }
      return $references;
}
$plan = array();
$tmp_plan = array();
$tmp_plan2 = array();
foreach ($bibleplan->getData() as $day) {
   $d = prepare($day);
   $tmp_plan[] = $d; 
   $tmp_plan2 = array_merge($tmp_plan2, $d);
}

$plan['data2'] = $tmp_plan;
$plan['data'] = $tmp_plan2;
$plan['id'] = $bibleplan->getId();
$plan['name'] = $bibleplan->getName();
$plan['info'] = $bibleplan->getInfo();

$plan_json = json_encode($plan);

file_put_contents($bibleplan->getId().'.json', $plan_json);
?>