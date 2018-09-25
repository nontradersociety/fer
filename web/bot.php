<?php
$access_token = 'NtmlKtxAxVjctOzBvePoaBQ+BELTcQWoCKb8vKkps6tmtmjwjOpn4ptAgnMX7nOWXSjllDoHz+lgWqwych0ED1zUjge4IivCK+2s3Tr6THU8ByozejZvurZw7fp3JmmH35/HQjbOZBGkMcsaatrB8gdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
    // Loop through each event
    foreach ($events['events'] as $event) {
        // Reply only when message sent is in 'text' format
        if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
            // Get text sent
            $textinput = $event['message']['text'];
            // Get replyToken
            $replyToken = $event['replyToken'];
            $case = 0;
            // Build message to reply back
            /*
                        if (strpos($textinput, 'comeheremod') !== false ) {
                            $myfile = fopen("data.txt", "w") or die("Unable to open file!");
                            $txt = "1";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            $case = 1;
                            $rand = rand(0, 1);
                            $case = 1;
                            if($rand == 0){
                                $text = 'คิดถึงกันใช่มั๊ยละ';
                            }else{
                                $text = 'เตะออกแล้วเชิญเข้ามาทำไม น้อยใจ !!';
                            }
                        }
                        if(strpos($textinput, 'ไปไกลๆเลยสัด') !== false){
                            $myfile = fopen("data.txt", "w") or die("Unable to open file!");
                            $txt = "2";
                            fwrite($myfile, $txt);
                            fclose($myfile);
                            $text = 'Bye Bye';
                            $case = 1;
                        }
                        $myfile = fopen("data.txt", "r") or die("Unable to open file!");
                        $data = fread($myfile,filesize("data.txt"));
                        if($data == "1") {*/
            if (strpos($textinput, 'บอล') !== false) {
                $message = '
';
                $html = file_get_contents('http://livescore.siamsport.co.th/widget/fixtures_results/1204/1');
                /*** a new dom object ***/
                $dom = new domDocument;
                /*** load the html into the object ***/
                $dom->loadHTML($html);
                /*** discard white space ***/
                $dom->preserveWhiteSpace = false;
                /*** the table by its tag name ***/
                $tables = getElementsByClass($dom, 'div', 'scoreBox');
                /*** get all rows from the table ***/
//$rows = $tables->item(0)->getElementsByTagName('tr');
                /*** loop over the table rows ***/
                foreach ($tables as $key => $row) {
                    $div = $row->getElementsByTagName('div');
                    $message .= '----- ' . $div->item(0)->nodeValue . ' -----
';
                    foreach ($row->getElementsByTagName('tr') as $data) {
                        $message .= $data->nodeValue . '
';
                    }
                }
                $message = strip_tags($message);
                $text = $message;
                $case = 1;
            }

            if (strpos($textinput, 'ถ่ายทอด') !== false || strpos($textinput, 'ช่อง') !== false) {
                $message = '
';
                $html = file_get_contents('http://livescore.siamsport.co.th/widget/live_table');
                /*** a new dom object ***/
                $dom = new domDocument;
                /*** load the html into the object ***/
                $dom->loadHTML($html);
                /*** discard white space ***/
                $dom->preserveWhiteSpace = false;
                /*** the table by its tag name ***/
                $tables = $dom->getElementsByTagName('table');
                /*** get all rows from the table ***/
//$rows = $tables->item(0)->getElementsByTagName('tr');
                /*** loop over the table rows ***/
                foreach ($tables as $key => $row) {
                    if ($key >= 1) {
                        $cols = $row->getElementsByTagName('tr');
                        foreach ($cols as $key2 => $cols) {
                            $td = $cols->getElementsByTagName('td');
                            if ($key2 == 0) {
                            } elseif ($key2 == 1) {
                                $message .= '----- ' . $cols->nodeValue . ' -----
';
                            } else {
                                $message .= $td->item(0)->nodeValue . ' | ';
                                $message .= $td->item(1)->nodeValue . ' | ';
                                $message .= $td->item(2)->nodeValue . '
';
                            }
                        }
                    }
                }
                $message = strip_tags($message);
                $text = $message;
                $case = 1;
            }

            if (strpos($textinput, 'สาว') !== false) {
                $rand = rand(1, 29);
                switch ($rand) {
                    case 1:
                        $text = 'https://www.instagram.com/nookzii/';
                        $case = 1;
                        break;
                    case 2:
                        $text = 'https://www.instagram.com/bunny_ployfon/';
                        $case = 1;
                        break;
                    case 3:
                        $text = 'https://www.instagram.com/bamzilla/';
                        $case = 1;
                        break;
                    case 4:
                        $text = 'https://www.instagram.com/nannyy/';
                        $case = 1;
                        break;
                    case 5:
                        $text = 'https://www.instagram.com/alexz_sarocha/';
                        $case = 1;
                        break;
                    case 6:
                        $text = 'https://www.instagram.com/berryying/';
                        $case = 1;
                        break;
                    case 7:
                        $text = 'https://www.instagram.com/_nungnink_/';
                        $case = 1;
                        break;
                    case 8:
                        $text = 'https://www.instagram.com/beth_lookgade/';
                        $case = 1;
                        break;
                    case 9:
                        $text = 'https://www.instagram.com/elle_elin/';
                        $case = 1;
                        break;
                    case 10:
                        $text = 'https://www.instagram.com/fearythanyarat/';
                        $case = 1;
                        break;
                    case 11:
                        $text = 'https://www.instagram.com/bunny.fuengfah/';
                        $case = 1;
                        break;
                    case 12:
                        $text = 'https://www.instagram.com/n_kang_nung/';
                        $case = 1;
                        break;
                    case 13:
                        $text = 'https://www.instagram.com/dejarvu/';
                        $case = 1;
                        break;
                    case 14:
                        $text = 'https://www.instagram.com/wpearita/';
                        $case = 1;
                        break;
                    case 15:
                        $text = 'https://www.instagram.com/miikuskie/';
                        $case = 1;
                        break;
                    case 16:
                        $text = 'https://www.instagram.com/cutegirlthailand/';
                        $case = 1;
                        break;
                    case 17:
                        $text = 'https://www.instagram.com/jomjamspch/';
                        $case = 1;
                        break;
                    case 18:
                        $text = 'https://www.instagram.com/nuchcheeber/';
                        $case = 1;
                        break;
                    case 19:
                        $text = 'https://www.instagram.com/skykikijung/';
                        $case = 1;
                        break;
                    case 20:
                        $text = 'https://www.instagram.com/crystal_girls_/';
                        $case = 1;
                        break;
                    case 21:
                        $text = 'https://www.instagram.com/donutacm/';
                        $case = 1;
                        break;
                    case 22:
                        $text = 'https://www.instagram.com/jaaeynano/';
                        $case = 1;
                        break;
                    case 23:
                        $text = 'https://www.instagram.com/fhm_ohly/';
                        $case = 1;
                        break;
                    case 24:
                        $text = 'https://www.instagram.com/padpudd/';
                        $case = 1;
                        break;
                    case 25:
                        $text = 'https://www.instagram.com/fhm_tanya/';
                        $case = 1;
                        break;
                    case 26:
                        $img = 'https://scontent-kul1-1.xx.fbcdn.net/v/t1.0-0/p350x350/16265186_10210453831156519_7957454316529614986_n.jpg?oh=4cff46558aaa4064c6cbb740a5ba2508&oe=591C5013';
                        $case = 2;
                        break;
                    case 27:
                        $img = 'https://scontent-kul1-1.xx.fbcdn.net/v/t1.0-9/16142628_10210453831076517_6780299885516424767_n.jpg?oh=485e0dd80b787a79ceb299be998ac152&oe=58FFF81B';
                        $case = 2;
                        break;
                    case 28:
                        $img = 'https://scontent-kul1-1.xx.fbcdn.net/v/t1.0-9/16195768_10210453831116518_1834306896464001100_n.jpg?oh=096fdcfcf742753b5a3468281ebac8b3&oe=5909F9D0';
                        $case = 2;
                        break;
                    case 29:
                        $img = 'https://scontent-kul1-1.xx.fbcdn.net/v/t1.0-9/16143305_10210453831516528_4406585939313454026_n.jpg?oh=1d266be09bf56aadc21ea57df61a9048&oe=594ADC78';
                        $case = 2;
                        break;
                }
            }

            if (strpos($textinput, 'ขอเพลง') !== false) {
                $rand = rand(1, 20);
                switch ($rand) {
                    case 1: //pull me under non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1440978912587798/?type=3&theater';
                        $case = 1;
                        break;
                    case 2: //คิดถึง silly fools non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1110728128946213/?type=3&theater';
                        $case = 1;
                        break;
                    case 3: //elevate non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1052510024768024/?type=3&theater';
                        $case = 1;
                        break;
                    case 4: //olivia bossanova 2
                        $text = 'https://www.youtube.com/watch?v=5tZfAK2JUdU';
                        $case = 1;
                        break;
                    case 5: //50 Cent - P.I.M.P.
                        $text = 'https://www.youtube.com/watch?v=UDApZhXTpH8';
                        $case = 1;
                        break;
                    case 6: //Eminem - Lose Yourself
                        $text = 'https://www.youtube.com/watch?v=_Yhyp-_hX2s';
                        $case = 1;
                        break;
                    case 7: //Eminem - Not Afraid
                        $text = 'https://www.youtube.com/watch?v=j5-yKhDd64s';
                        $case = 1;
                        break;
                    case 8: //LMFAO - Party Rock
                        $text = 'https://www.youtube.com/watch?v=KQ6zr6kCPj8';
                        $case = 1;
                        break;
                    case 9: //REDFOO - New Thang
                        $text = 'https://www.youtube.com/watch?v=c_3xZgvy6fo';
                        $case = 1;
                        break;
                    case 10: //Redfoo - Let's Get Ridiculous
                        $text = 'https://www.youtube.com/watch?v=CdLhdrNgGu4';
                        $case = 1;
                        break;
                    case 11: //Flo Rida - GDFR
                        $text = 'https://www.youtube.com/watch?v=F8Cg572dafQ';
                        $case = 1;
                        break;
                    case 12: // เรือเล็กควรออกจากฝั่ง non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/805809092771453/?type=3&theater';
                        $case = 1;
                        break;
                    case 13: //Pitbull, Ne-Yo
                        $text = 'https://www.youtube.com/watch?v=bTXJQ5ql5Fw';
                        $case = 1;
                        break;
                    case 14: //Pitbull - Give Me Everything
                        $text = 'https://www.youtube.com/watch?v=EPo5wWmKEaI';
                        $case = 1;
                        break;
                    case 15: //Jennifer Lopez - On The Floor
                        $text = 'https://www.youtube.com/watch?v=t4H_Zoh7G5A';
                        $case = 1;
                        break;
                    case 16: //Shakira - Waka Wak
                        $text = 'https://www.youtube.com/watch?v=pRpeEdMmmQ0';
                        $case = 1;
                        break;
                    case 17: //Katy Perry - Roar
                        $text = 'https://www.youtube.com/watch?v=CevxZvSJLk8';
                        $case = 1;
                        break;
                    case 18: //Lady Gaga - Bad Romance
                        $text = 'https://www.youtube.com/watch?v=qrO4YZeyl0I';
                        $case = 1;
                        break;
                    case 19: //Lady Gaga - Telephone
                        $text = 'https://www.youtube.com/watch?v=GQ95z6ywcBY';
                        $case = 1;
                        break;
                    case 20: //Britney Spears - Toxic
                        $text = 'https://www.youtube.com/watch?v=LOZuxwVk7TU';
                        $case = 1;
                        break;
                }
            }

            if ( strpos($textinput, 'กะเทย') !== false || strpos($textinput, 'กระเทย') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) { //กระเทยไม่สวย
                    $img = 'https://scontent-fbkk5-7.us-fbcdn.net/v1/t.1-48/1426l78O9684I4108ZPH0J4S8_842023153_K1DlXQOI5DHP/dskvvc.qpjhg.xmwo/w/data/941/941285-img.rnda2g.2.jpg';
                } elseif ($rand == 1) {
                    $img = 'https://scontent-fbkk5-7.us-fbcdn.net/v1/t.1-48/1426l78O9684I4108ZPH0J4S8_842023153_K1DlXQOI5DHP/dskvvc.qpjhg.xmwo/p/data/263/263989-535f8dd40ec2a.jpg';
                } elseif ($rand == 2) {
                    $img = 'https://pbs.twimg.com/media/BrUGtjbCAAAaOae.jpg';
                } elseif ($rand == 3) {
                    $img = 'https://pbs.twimg.com/media/CBo6hveUsAAqZCL.jpg';
                } elseif ($rand == 4) { //โยชิ
                    $img = 'https://image.dek-d.com/27/0331/9080/118067941';
                } elseif ($rand == 5) { //เฟรม
                    $img = 'https://1.bp.blogspot.com/-yJTg4mWLNIA/V4tREp20TsI/AAAAAAAAFUo/cUi9vOmT-9QV8WGiRMJpVmMQ1e2cfoFLgCLcB/s640/2016-07-17_16-05-07.png';
                } else { //เฟรม
                    $img = 'https://f2.jarm.com/news/00/1c/rx/1470709798_20.jpg';
                }
                $case = 2;
            }

            if ( strpos($textinput, 'หวย') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = '000 1000x1000 ไป';
                } elseif ($rand == 1) {
                    $text = 'ใครมีเลขเด็ดก็บอกกันบ้าง';
                } elseif ($rand == 2) {
                    $text = 'จะรวยหรือจะเรียบวะเนี่ย';
                } elseif ($rand == 3) {
                    $text = 'มือทำรวยหวยทำจน';
                } elseif ($rand == 4) {
                    $text = 'บนหรือล่างดีละ';
                } elseif ($rand == 5) {
                    $text = 'เล่นเลขอะไรกันดี';
                } elseif ($rand == 6) {
                    $text = 'เล่นหุ้นดีกว่า';
                } elseif ($rand == 7) {
                    $text = 'เขาว่ากันว่างวดนี้ 9 มา 555';
                } elseif ($rand == 8) {
                    $img = 'https://i.pinimg.com/736x/e4/98/d4/e498d4495017d47d0afcce7323639a38--crossword-puzzle.jpg';
                    $case = 2;
                } elseif ($rand == 9) {
                    $img = 'https://2.bp.blogspot.com/-XjyZ3IgoLB8/Vkve8Xkd7JI/AAAAAAAAAGc/zd941Rv2Iik/s1600/10.jpg';
                    $case = 2;
                } else {
                    $text = 'รวมสำนักอาจารย์ http://www.007lotto.com/';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'โต๊ด') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'โต๊ดได้น้อยอ่ะ บาทละ 100 เอง';
                } elseif ($rand == 1) {
                    $text = 'มีทีเด็ดก็ตรงหนักๆไปเลย';
                } elseif ($rand == 2) {
                    $text = 'เล่นตรงดีกว่า 1000x1000 ไปเลย 555';
                } else {
                    $text = 'ชอบเล่นตรงมากกว่าอ่ะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เก๋า') !== false || strpos($textinput, 'ไฝว้') !== false || strpos($textinput, 'ขมับ') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'ลองซักตั้งมั๊ย';
                } elseif ($rand == 1) {
                    $text = 'รถถังฝั่งธนรู้จักป่ะ แววูฟรอวันหอน !!!';
                } elseif ($rand == 2) {
                    $text = 'ไง ??? ได้ข่าวว่าฮอตหรอ';
                } elseif ($rand == 3) {
                    $text = 'อยากโดนขมับป่ะละ';
                } elseif ($rand == 4) {
                    $text = 'อยากเจอจังว่าจะราคาคุยป่าว';
                } elseif ($rand == 5) {
                    $text = 'ส่งโลมาดิ๊ ขอเจอหน่อย';
                } elseif ($rand == 6) {
                    $text = 'ระวังพิมพ์ๆอยู่แล้วหงายหลัง';
                } elseif ($rand == 7) {
                    $text = 'จะแค่ไหนกันเชียว';
                } elseif ($rand == 8) {
                    $text = 'คิดว่าแน่ ??';
                } elseif ($rand == 9) {
                    $text = 'พูดแล้วมาให้ไว อย่าให้รอนาน';
                } elseif ($rand == 10) {
                    $text = 'ไม่เก๋าจริงอย่ามาห้าว';
                } elseif ($rand == 11) {
                    $text = 'บ่นไร เดี๋ยวนั่งๆอยู่ก็หงายหลังหรอก';
                } elseif ($rand == 12) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "7"
                    ];
                    $case = 4;
                } elseif ($rand == 13) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "520"
                    ];
                    $case = 4;
                } elseif ($rand == 14) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "5",
                        "stickerId" => "527"
                    ];
                    $case = 4;
                } else{
                    $text = 'อยากจะไฝว้';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'โม้') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ไม่ได้โม้ซักหน่อย';
                } elseif ($rand == 1) {
                    $text = 'ไม่ใช่สมรักษ์นะ ... ไม่ได้โม้ 555';
                } else {
                    $text = 'ว่าใครขี้โม้ ?';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'หิว') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/41666377_2086524668033216_2962612296968306688_n.jpg?_nc_cat=111&oh=746e376b794035f878a69867f29a7966&oe=5C2C1300';
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/41406711_2081436165208733_4081266241795260416_n.jpg?_nc_cat=106&oh=b6fb4a4e7f45286759573a552c2d243e&oe=5C60CF4D';
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/41452159_2079025628783120_7944850643242450944_n.jpg?_nc_cat=104&oh=479d30af7731d26e3f4521451fbfb601&oe=5C2B9C9C';
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/41302178_2079025525449797_7889831734223568896_n.jpg?_nc_cat=102&oh=c7c0c7d8bf043c093ee4932472f41758&oe=5C34002F';
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/40526229_2071719922847024_3964923128299126784_n.jpg?_nc_cat=109&oh=04162ceabdbe5ed378702713939950b1&oe=5C607249';
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/40567826_2069165536435796_6183874293370191872_n.jpg?_nc_cat=103&oh=de064609bcfc31c305de6ffe790fcdf5&oe=5C5C592D';
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/40410005_2069164666435883_7752830476573736960_n.jpg?_nc_cat=102&oh=3cccf5393942e46dffac2aab49d6b08c&oe=5C2F6AC5';
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/40319026_2067964449889238_1581670007954210816_n.jpg?_nc_cat=109&oh=17413c091570a528b0334364f971ac2e&oe=5C1AA50B';
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/40209204_2063188067033543_133535176092286976_n.jpg?_nc_cat=111&oh=8bb95db096cab227572c43c9840cf539&oe=5C28176C';
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/37594928_2003893716296312_1694883932832530432_n.jpg?_nc_cat=105&oh=c4efcff7034c783726ef08ad739410e5&oe=5C1983F8';
                } elseif ($rand == 10) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/37598012_2003292043023146_2180520021044756480_n.jpg?_nc_cat=111&oh=2c2e99094f813647c371eee26f2d21c7&oe=5C2B4656';
                } elseif ($rand == 11) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/37606793_2001575799861437_7539845157194039296_n.jpg?_nc_cat=107&oh=106c7767f0e86719ceb7de363407b65c&oe=5C24AC9D';
                } elseif ($rand == 12) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/36814450_1981013961917621_365646452992507904_n.jpg?_nc_cat=105&oh=bb32f3b611aedae38b091e825e55b947&oe=5C1AFEAD';
                } elseif ($rand == 13) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/36617498_1976721709013513_1975849762645082112_n.jpg?_nc_cat=105&oh=5bddc043627a25e7c408c69938dd1eea&oe=5C1901ED';
                } elseif ($rand == 14) {
                    $img = 'https://scontent.fbkk5-4.fna.fbcdn.net/v/t1.0-9/36580724_1974934392525578_6851075730269274112_n.jpg?_nc_cat=101&oh=77098cd3dd95344087cdfe111c6971a5&oe=5C3093C3';
                } else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
                $case = 2;
            }

            if ( strpos($textinput, 'ตู่') !== false || strpos($textinput, 'ประยุท') !== false || strpos($textinput, 'จันทร์โอชา') !== false || strpos($textinput, 'จันทรโอชา') !== false || strpos($textinput, 'ปรับทัศนคติ') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'เอิ่มมม...งานนี้ mod จะไม่ยุ่ง 5555';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://news.mthai.com/app/uploads/2015/04/1.330.jpg';
                } elseif ($rand == 2) {
                    $img = 'https://gdb.voanews.com/BB5B585E-6006-4388-BD55-621E103AD3CA_cx0_cy2_cw0_w1023_r1_s.jpg';
                } elseif ($rand == 3) {
                    $img = 'https://i.ytimg.com/vi/iVeNF7qIPhg/maxresdefault.jpg';
                } elseif ($rand == 4) {
                    $img = 'https://timedotcom.files.wordpress.com/2014/06/thailand-coup.jpg?w=720&quality=85';
                } elseif ($rand == 5) {
                    $img = 'https://i.ytimg.com/vi/koh1YEA5LSs/maxresdefault.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://truststoreonline.com/wp-content/uploads/2017/09/30-13.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://www.matichonweekly.com/wp-content/uploads/2017/02/201507221240497-20061002145931.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://truststoreonline.com/wp-content/uploads/2017/10/CiHZjUdJ5HPNXJ92GO302E70Q09n8gAbil-1.jpg';
                } elseif ($rand == 9) {
                    $text = 'เปลี่ยนเรื่องคุยกันดีกว่า 55555';
                    $case = 1;
                } else {
                    $text = 'ระวังบินนะ 55';
                    $case = 1;
                }
                $case = 2;
            }

            if ( strpos($textinput, 'ง่วง') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'ง่วงก็ไปนอนสิ';
                } elseif ($rand == 1) {
                    $text = 'ทำอะไรไม่หลับไม่นอน ?';
                } elseif ($rand == 2) {
                    $text = 'ง่วงก็นอนได้แล้ว ฝันดีนะครับ ตื่นขอมาขอให้ Chat ลูกค้า 999+ เลย';
                } elseif ($rand == 3) {
                    $text = 'ไม่เคยนอนไง๊';
                } elseif ($rand == 4) {
                    $text = 'จะรีบนอนไปไหน';
                }elseif ($rand == 2) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "405"
                    ];
                    $case = 4;
                } else {
                    $text = 'พักบ้างอะไรบ้าง เดี๋ยวจะไม่มีแรงขายวันอื่นๆ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เหนื่อย') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'หากเหนื่อยนักขอจงหยุดพักเสียก่อน อย่าใจร้อนรีบไปเดี๋ยวมันไม่เข้าที 555';
                } elseif ($rand == 1) {
                    $text = 'เหนื่อยก็ไปพักผ่อนไป';
                } elseif ($rand == 2) {
                    $text = 'ทำอะไรมาเหนื่อย';
                } else {
                    $text = 'เหนื่อยมากมั๊ย';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เพลีย') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'แหนะๆ ไปทำอะไรมาเพลีย';
                } elseif ($rand == 1) {
                    $text = 'เพลียกราฟหรือเพลียอะไร';
                } elseif ($rand == 2) {
                    $text = 'เบียร์ซักป๋องมั๊ยเลือดจะได้สูบฉีด';
                } elseif ($rand == 3) {
                    $text = 'ไปทำอะไรมานะ เอ๊ะ ...';
                }  else {
                    $text = 'หลับนอนบ้างอย่าหมกมุ่น 555';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ฝันดี') !== false || strpos($textinput, 'ฝานดี') !== false || strpos($textinput, 'นอน') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'ฝันดีนะครับ';
                } elseif ($rand == 1) {
                    $text = 'Good Night.';
                } elseif ($rand == 2) {
                    $text = 'Sweet Dream ครับ';
                } elseif ($rand == 3) {
                    $text = 'นอนแล้วหรอ อ้าว ... ใครยืนอยู่ปลายเตียงอ่ะ';
                } elseif ($rand == 4) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "3",
                        "stickerId" => "193"
                    ];
                    $case = 4;
                } elseif ($rand == 5) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "42"
                    ];
                    $case = 4;
                } elseif ($rand == 6) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "46"
                    ];
                    $case = 4;
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เซ็ง') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ใจเย็นๆ สูดหายใจเข้าลึกๆ';
                } elseif ($rand == 1) {
                    $text = 'เซ็งอะไร';
                } else {
                    $text = 'คืนนี้ไปไหนว่ามา จะจัดให้หายเซ็ง';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เงียบ') !== false ) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = 'ให้พักบ้างเถอะ ซัด m-150 ไป 2 ลังละ';
                } elseif ($rand == 1) {
                    $text = 'จะให้พูดอะไรมากมาย เหนื่อยเป็นเข้าใจป่ะ';
                } elseif ($rand == 2) {
                    $text = 'พอใจอ่ะ มีปัญหา ?';
                } elseif ($rand == 3) {
                    $text = 'กลัวรำคาญไงก็เงียบบ้างอะไรบ้าง';
                } elseif ($rand == 4) {
                    $img = 'https://usercontent2.hubstatic.com/5309187_f260.jpg';
                    $case = 2;
                } elseif ($rand == 5) {
                    $text = 'จัดให้ 1 single https://www.youtube.com/watch?v=JGfF0QBzIfE';
                } elseif ($rand == 6) {
                    $text = 'หนักหัวใคร ?';
                } elseif ($rand == 7) {
                    $text = 'ไม่ได้เงียบซักหน่อย ดูพวกคุณคุยกันอยู่';
                } else {
                    $text = 'เดี๋ยวเปิดเพลงให้ปะจะได้ไม่เงียบ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เหล้า') !== false || strpos($textinput, 'เบียร์') !== false || strpos($textinput, 'เมา') !== false || strpos($textinput, 'ปาร์ตี้') !== false || strpos($textinput, 'ปาตี้') !== false || strpos($textinput, 'party') !== false || strpos($textinput, 'Party') !== false || strpos($textinput, 'pub') !== false || strpos($textinput, 'Pub') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'จัดไปอย่าให้เสีย';
                } elseif ($rand == 1) {
                    $img = 'https://www.heinemann-dutyfree.com/media/catalog/product/cache/13/image/9df78eab33525d08d6e5fb8d27136e95/5/1/518250.jpg';
                    $case = 2;
                } elseif ($rand == 2) {
                    $text = 'ทองหล่อไป อย่างเด็ด';
                } elseif ($rand == 3) {
                    $text = 'ไปๆๆ ร้านไหนว่ามา';
                } elseif ($rand == 4) {
                    $text = 'ไปข้าวสารหรือสีลมดี';
                } elseif ($rand == 5) {
                    $img = 'https://img01.siam2nite.com/4lO4GumrZBHQ3ewvMiQahlje3KE=/smart/locations/832/cover_large_p18s7p8d9dvdl1to31lsf1oje1k985.jpg';
                    $case = 2;
                } elseif ($rand == 6) {
                    $text = 'คอแข็งพอป่าว';
                } elseif ($rand == 7) {
                    $text = 'ที่ไหนว่ามา the pimp ดีมั๊ย';
                } elseif ($rand == 8) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "132"
                    ];
                    $case = 4;
                } elseif ($rand == 9) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "28"
                    ];
                    $case = 4;
                } else {
                    $text = 'ร้านนั่งเล่น ทองหล่อปะละ เอาเงินไปละลายหน่อย';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'สดชื่น') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ระวังลื่นถ้าสดจัด';
                } elseif ($rand == 1) {
                    $text = 'พึ่งอาบน้ำมาหรอเลยสดชื่นอ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ไปทำอะไรมาสดชื่น อย่าบอกนะ .... 555';
                } elseif ($rand == 3) {
                    $text = 'จะสดอะไรกันบ่อยๆ';
                } elseif ($rand == 4) {
                    $text = 'สดมากไปจะกลายสลดนะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เกรียน') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ว่าใครเกรียน';
                } elseif ($rand == 1) {
                    $text = 'ไม่ได้เกรียนแค่สกินเฮด';
                } elseif ($rand == 2) {
                    $text = 'อยากเกรียมมั๊ยละ';
                } elseif ($rand == 3) {
                    $text = 'หัวเกรียนนักเรียนไทย';
                } else {
                    $text = 'คุณนั่นแหละเกรียน';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'กาก') !== false || strpos($textinput, 'กา ก') !== false || strpos($textinput, 'ก า ก') !== false || strpos($textinput, 'ก าก') !== false || strpos($textinput, 'kak') !== false || strpos($textinput, 'Kak') !== false || strpos($textinput, 'KAK') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'ไม่สนิทอย่าติดตลก';
                } elseif ($rand == 1) {
                    $text = 'ไร้สาระ'; //มึง
                } elseif ($rand == 2) {
                    $text = 'กากพ่... 555'; // พ่อง
                } elseif ($rand == 3) {
                    $text = 'หนักหัวคุณไง๊';
                } elseif ($rand == 4) {
                    $text = 'แล้วไง';
                } elseif ($rand == 5) {
                    $text = 'ก็คุณไงกากอ่ะ';
                } elseif ($rand == 6) {
                    $text = 'เดี่ยวกันหน่อยป่ะละ';
                } elseif ($rand == 7) {
                    $text = 'อ้าวเป็นขี้กลากหรอ น่าสงสารจัง';
                } elseif ($rand == 8) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "7"
                    ];
                    $case = 4;
                } elseif ($rand == 9) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "118"
                    ];
                    $case = 4;
                } else {
                    $text = 'เอ้า ... ว่าตัวเองซะงั้น';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กฎระเบียบ') !== false) {
                $text = '⚠️ กฎระเบียบของห้อง ⚠️
❌ เนื้อหาที่ละเมิดต่อ สถาบันชาติ ศาสนา พระมหากษัตริย์ และพระบรมวงศานุวงศ์
❌ เนื้อหาที่เกี่ยวกับการเมือง อันจะก่อให้เกิดการแบ่งฝักฝ่าย และการโต้เถียงและแตกแยกกันในหมู่สมาชิก
❌ เนื้อหาที่ว่ากล่าวให้ร้าย แก่สมาชิกผู้อื่นหรือที่เป็นการยุยงให้ผู้อื่นเกิดความขัดแย้งซึ่งกันและกัน
❌ เนื้อหาที่เกี่ยวกับธุรกิจลูกโซ่ MLM
❌ Invite สมาชิกท่านอื่นเข้ามา
❌ เนื้อหาหรือข้อความใดๆออกไปเผยแพร่ภายนอก
⚠️ ก่อนโพสข้อความหรือเนื้อหาใดๆ ควรตรวจสอบให้เรียบร้อย ซึ่งเมื่อโพสต์ไปแล้วหากผิดระเบียบข้อบังคับ ผู้โพสต์ต้องรับผลที่เกิดขึ้น ⚠️
💥 Admin มีสิทธิ์ที่จะ Ban สมาชิกที่ทำผิดกฎหรือที่พิจารณาแล้วว่าไม่เหมาะสมได้ทันที ซึ่งหากเกิดข้อพิพาท ทาง Admin จะปรึกษากันและทำตามคะแนนเสียงส่วนใหญ่ 💥';
                $case = 1;
            }

            if ( strpos($textinput, 'fercushion') !== false || strpos($textinput, 'Fercushion') !== false  || strpos($textinput, 'Fer cushion') !== false || strpos($textinput, 'fer cushion') !== false ) {
                $text = '🔆 FER CUSHION 🔆
⠀
เมคอัพผสมรองพื้นครีมบำรุงและสารกันแดด SPF50PA+++ เนื้อแมทควบคุมความมันด้วยสูตรออยฟรีและ Argan oil ช่วยปกปิดริ้วรอยและจุดด่างดำ ช่วยกระจายแสงบนใบหน้า ควบคุมความมัน ลบเลือนริ้วรอยและเติมเต็มร่องลึกด้วยส่วนผสมจากธรรมชาติ  กันน้ำกันเหงื่อ99% ไม่เยิ้มระหว่างวัน ผลิตจาก พืชซินนาม่อน และ ผสานกันแดดระดับนาโนยูวี มีBHA ช่วยลดการอักเสบของผิวและลดสาเหตุของการเกิดสิวอุดตัน
⠀
ขนาด 12 กรัม ราคา 399฿
⠀
เลขจดแจ้ง : 10-1-6100018488
⠀
No.Pกล่องขาวชมพู สำหรับผิวมากกก
No.Lกล่องทองขาวออร่า
No.1 กล่องสีดำ สำหรับผิวขาว
No.2 กล่องชมพู  สำหรับผิวขาวเหลือง
No.3 กล่องขาว สำหรับผิวสองสี-ผิวคล้ำ
No.4กล่องสีชมพูลายริ้ว สำหรับสาวผิวเข้ม
⠀
คุณสมบัติพิเศษ No.Pink เอาไปผสมได้ทุกสี กลางคืนเหมือนมีประกายทำบัตออน-ไฮไลต์ได้';
                $case = 1;
            }

            if ( strpos($textinput, 'ส่วนประกอบ') !== false ) {
                $text = '🔆 ส่วนประกอบ 🔆
                
 CYCLOPENTASILOXANE ,
 PEG-10 DIMETHICONE ,
 DISTEARDIMONIUM HECTORITE ,
 OCTYL METHOXYCINNAMATE ,
 TITANIUM DIOXIDE ,
 TOCOPHEROL ,
 DIMETHICONE CROSsPOLyMER ,
 GLYCERYL CAPRYLATE ,
 GLYCERY UNDECYLENATE ,
 SALICYLIC ACID ,
 CI77492,CI77491,CI77499';
                $case = 1;
            }

            if ( strpos($textinput, 'รีวิว') !== false ) {
                $text = 'ใครอยากได้รีวิวเข้าไปดูได้ที่ Album รูปนะครับ';
                $case = 1;
            }

            if ( strpos($textinput, 'สวัสดี') !== false ) {
                $text = 'Fer Cushion ยินดีต้อนรับตัวแทนคนสวยครับ ^^';
                $case = 1;
            }

            if ( strpos($textinput, 'บอทน่ารัก') !== false ) {
                $rand = rand(0,4);
                if ($rand == 0) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "100"
                    ];
                    $case = 4;
                } elseif ($rand == 1) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "119"
                    ];
                    $case = 4;
                } elseif ($rand == 2) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "410"
                    ];
                    $case = 4;
                } elseif ($rand == 3) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "407"
                    ];
                    $case = 4;
                } else {
                    $text = 'บอกแบบนี้เขินเลย 555';
                    $case = 1;
                }
            }

            if ( strpos($textinput, 'บอทขี้เหล่') !== false || strpos($textinput, 'บอทไม่น่ารัก') !== false || strpos($textinput, 'บอทน่าเกลียด') !== false ) {
                $rand = rand(0,4);
                if ($rand == 0) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "6"
                    ];
                    $case = 4;
                } elseif ($rand == 1) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "16"
                    ];
                    $case = 4;
                } elseif ($rand == 2) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "19"
                    ];
                    $case = 4;
                } elseif ($rand == 3) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "519"
                    ];
                    $case = 4;
                } else {
                    $text = 'คุณนั่นแหละ :p';
                    $case = 1;
                }
            }

            if ( strpos($textinput, 'ฮ่าๆๆ') !== false || strpos($textinput, '555') !== false || strpos($textinput, 'ฮา') !== false || strpos($textinput, 'ขำ') !== false || strpos($textinput, 'ก๊าก') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "100"
                    ];
                    $case = 4;
                } elseif ($rand == 1) {
                    $text = '5555';
                    $case = 1;
                } elseif ($rand == 2) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "110"
                    ];
                    $case = 4;
                } elseif ($rand == 3) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "2",
                        "stickerId" => "163"
                    ];
                    $case = 4;
                }
            }
            if (strpos($textinput, 'อะไรคือ') !== false) {
                $text_ex = explode(':', $textinput);
                //เอาข้อความมาแยก : ได้เป็น Array
                if ($text_ex[0] == "อะไรคือ") { //ถ้าข้อความคือ "อยากรู้" ให้ทำการดึงข้อมูลจาก Wikipedia หาจากไทยก่อน //https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=PHP
                    $ch1 = curl_init();
                    curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
                    curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($ch1, CURLOPT_URL, 'https://th.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=' . $text_ex[1]);
                    $result1 = curl_exec($ch1);
                    curl_close($ch1);
                    $obj = json_decode($result1, true);
                    foreach ($obj['query']['pages'] as $key => $val) {
                        $result_text = $val['extract'];
                    }
                    if (empty($result_text)) {//ถ้าไม่พบให้หาจาก en
                        $ch1 = curl_init();
                        curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, false);
                        curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch1, CURLOPT_URL, 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=' . $text_ex[1]);
                        $result1 = curl_exec($ch1);
                        curl_close($ch1);
                        $obj = json_decode($result1, true);
                        foreach ($obj['query']['pages'] as $key => $val) {
                            $result_text = $val['extract'];
                        }
                    }
                    if (empty($result_text)) {//หาจาก en ไม่พบก็บอกว่า ไม่พบข้อมูล ตอบกลับไป
                        $result_text = 'ไม่พบข้อมูล';
                    }
                    $text = $result_text;
                }
                $case = 1;
            }
            if ($case == 1) {
                $messages = [
                    'type' => 'text',
                    'text' => $text
                ];
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            } elseif ($case == 2) {
                $messages = [
                    'type' => 'image',
                    'originalContentUrl' => $img,
                    'previewImageUrl' => $img
                ];
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            } elseif ($case == 3) {
                $messages = $array;
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            } elseif ($case == 4) {
                $messages = $array;
                // Make a POST Request to Messaging API to reply to sender
                $url = 'https://api.line.me/v2/bot/message/reply';
                $data = [
                    'replyToken' => $replyToken,
                    'messages' => [$messages],
                ];
                $post = json_encode($data);
                $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
                $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                echo $result . "\r\n";
            }
        }
    }
//} openbot
}
function getElementsByClass(&$parentNode, $tagName, $className) {
    $nodes=array();
    $childNodeList = $parentNode->getElementsByTagName($tagName);
    for ($i = 0; $i < $childNodeList->length; $i++) {
        $temp = $childNodeList->item($i);
        if (stripos($temp->getAttribute('class'), $className) !== false) {
            $nodes[]=$temp;
        }
    }
    return $nodes;
}
echo "OK";