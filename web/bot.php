<?php
$access_token = '2VpxkqV0Vz54m3WU3OVwQVE29YtZ3a0yQYuTla4cm6wvb69soXq7hMWvfGl5KH8OmgABT6iunly2fcdr0X/UG+kswxOSiP13+fqi09GYzbtuwrU+/BHjYhODTi5rVypFd1vVUVr2XmytvsgPxdivwAdB04t89/1O/w1cDnyilFU=';

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

            if (strpos($textinput, 'คะแนน') !== false) {
                $text = 'ดูเอาเอง -> http://livescore.siamsport.co.th/widget/standing/1204';
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

            if (strpos($textinput, 'fuck') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'fuck พ่องมึงดิ';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'Bullshit !!';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://i.ytimg.com/vi/m-KTUvkMEIw/maxresdefault.jpg';
                    $case = 2;
                } elseif ($rand == 3) {
                    $text = 'fuck แม่งมึงอะ';
                    $case = 1;
                } else {
                    $text = 'นี่มึงอยากมีเรื่องใช่่ป่ะ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'หวย') !== false || strpos($textinput, 'huay') !== false) {
                $rand = rand(0, 5);
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
                } else {
                    $text = 'รวมสำนักอาจารย์ http://www.lotteryhot.net';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ป้าเย') !== false || strpos($textinput, 'เยเลน') !== false || strpos($textinput, 'เยลเลน') !== false || strpos($textinput, 'yellen') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $img = 'https://si.wsj.net/public/resources/images/BN-NM716_0412_4_P_20160411185052.jpg';
                    $case = 2;
                } elseif ($rand == 1) {
                    $text = 'จะทุบมั๊ยรอบนี้';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://cms.marketplace.org/sites/default/files/styles/primary-image-400x222/public/GettyImages-464370304.jpg?itok=pnyHQwQr';
                    $case = 2;
                } elseif ($rand == 3) {
                    $text = 'มันจะลงอีก ... ไม่ใช่ทองนะ หมายถึง UJ 555';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = 'คุณป้ามหาภัย มาทีไรบรรลัยทุกที';
                    $case = 1;
                } else {
                    $text = 'พาไปทัวแกนโลกหน่อยนะ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'ทรัม') !== false || strpos($textinput, 'trump') !== false  || strpos($textinput, 'ทรั้ม') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'คุณลุงผู้ที่รักความสงบ 55';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ได้ยินชื่อนี้แล้วเหมือนจะได้สัมผัสอากาศข้างบน';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'พาไปทัวสวรรค์หน่อยคุณลุง';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'ลุงจะพาไปบินซักกี่จุดดีรอบนี้';
                    $case = 1;
                } else {
                    $img = 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQO5I7lwKP0KPUnNjVQzn3DmFqTyYDY01HTzyNLxrttnwoG6lIR';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'คิดถึง') !== false || strpos($textinput, 'miss') !== false || strpos($textinput, 'miz') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'คิดถึงใครกันนะ';
                } elseif ($rand == 1) {
                    $text = 'พูดงี้เขินเลยยย';
                } elseif ($rand == 2) {
                    $text = 'มีใครคิดถึง MOD บ้างมั๊ยนะ';
                } elseif ($rand == 3) {
                    $text = 'คิดถึงก็โทรมา ^^';
                } else {
                    $text = 'คิดถึงเหมือนกันแหละ จุ๊บๆ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'รัก') !== false || strpos($textinput, 'love') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '1 2 3 4 5 I love You <3';
                } elseif ($rand == 1) {
                    $text = 'รักเค้าหรอตัวเอง';
                } elseif ($rand == 2) {
                    $text = 'บอกรักกันงี้เลยหรอ เขินนะ คนเยอะแยะ';
                } elseif ($rand == 3) {
                    $text = 'รักใคร ?? Mod ใช้มั๊ย';
                } else {
                    $text = 'รักเหมือนกันแหละ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'รวย') !== false || strpos($textinput, 'rich') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'คนไหนรวยขอดูหน้าหน่อยดิ๊';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'รวยแล้วก็มาแบ่งกันใช้บ้าง';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'รวยจริงป่าว';
                    $case = 1;
                } elseif ($rand == 3) {
                    $img = 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSh862u6VgxFLw_TwAdB0C3FxORXZPyLKB1DBsrdkYmkTUDjpMyDw';
                    $case = 2;
                } else {
                    $text = 'เอามาเติมพอร์ตหน่อยดิ๊';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'โต๊ด') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'โต๊ดได้น้อยอ่ะ บาทละ 100 เอง';
                } elseif ($rand == 1) {
                    $text = 'มีทีเด็ดก็ตรงหนักๆไปเลย';
                } else {
                    $text = 'ชอบเล่นตรงมากกว่าอ่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ตีน') !== false || strpos($textinput, 'ตรีน') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'พูดตีนกับใคร';
                } else {
                    $text = 'ใครจะกินตีน ?';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เก๋า') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ลองซักตั้งมั๊ย';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'รถถังฝั่งธนรู้จักป่ะ แววูฟรอวันหอน !!!';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'ไง ??? ได้ข่าวว่าฮอตหรอ';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'อยากโดนขมับป่ะละ';
                    $case = 1;
                } else{
                    $text = 'อยากจะไฝว้';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'โม้') !== false) {
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

            if (strpos($textinput, 'kickmod') !== false || strpos($textinput, 'Kickmod') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'เดี๋ยวจะ kick คนพิมพ์ก่อนเลย';
                } elseif ($rand == 1) {
                    $text = 'kick ก็ไม่ไป';
                } else {
                    $text = 'ทำไรอ่ะ อยากโดน free kick ว่างั้น';
                }
                $case = 1;
            }

            /*if (strpos($textinput, 'บอ ท') !== false || strpos($textinput, 'บ อท') !== false || strpos($textinput, 'บ อ ท') !== false || strpos($textinput, 'บอท') !== false || strpos($textinput, 'bot') !== false || strpos($textinput, 'Bot') !== false) {

                $rand = rand(0, 7);
                if($rand == 0){
                    $text = 'I am Artificial Intelligence. แปลออกมั๊ย ดูจากหน้าตาแล้วไม่น่าจะเข้าใจ';
                }elseif($rand == 1){
                    $text = 'เรียกจังเลยบอท เดี๋ยวขมับซักทีดีมั้ง';
                }elseif($rand == 2){
                    $text = 'บอทอะไร ไหนใครบอท';
                }elseif($rand == 3){
                    $text = 'ใครบอท บ้าหรือป่าว';
                }elseif($rand == 4){
                    $text = 'ก็บอกอยู่ว่าไม่ใช่บอท ชักหัวร้อนละนะ';
                }elseif($rand == 5){
                    $text = 'พูดภาษาคนไม่รู้เรื่อง ?';
                }elseif($rand == 6){
                    $text = 'เฮ้ออออ ... เพลียกับพวกนี้จริงๆ';
                }else{
                    $text = 'ก็บอกอยู่ห้องนี้ไม่มีบอท ฟังภาษาคนไม่รู้เรื่องไง๊';
                }
                $case = 1;
            }*/

            if (strpos($textinput, 'มึง') !== false || strpos($textinput, 'กู') !== false || strpos($textinput, 'มรึง') !== false || strpos($textinput, 'เมิง') !== false || strpos($textinput, 'เมริง') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'พูดจาให้มันเพราะๆหน่อยเป็นมั๊ย';
                } elseif ($rand == 1) {
                    $text = 'มึง-กู กับใคร สนิทกับกูไง๊';
                } elseif ($rand == 2) {
                    $text = 'อย่าใช้ภาษาพ่อขุนรามกูไม่ชอบ';
                } else {
                    $text = 'มึงจะใช้ภาษาพ่อขุนรามกับกูใช่ป่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'รวน') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ไม่ได้รวน ช่วงนี้มึนๆนิดหน่อย';
                } elseif ($rand == 1) {
                    $text = 'อากาศมันร้อนอ่ะเลยไม่ค่อย 100%';
                } elseif ($rand == 2) {
                    $text = 'เมื่อคืนกว่าจะนอนก็เช้า มัวแต่นั่งเฝ้ากราฟอยู่';
                }
                $case = 1;
            }

            if (strpos($textinput, 'หิว') !== false) {
                $rand = rand(0, 20);
                if ($rand == 0) {
                    //กุ้งกระเบื้อง
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/17265124_1476049672414055_204896673358791325_n.jpg?_nc_eui2=v1%3AAeGFpSQSTxiNRxpb4ZPXS3graB4ZL0RMPZWyscr7mpebsGOV1TD_ZVENIrtA8cO_yilMC5MXRqFhsCPFxrwP4RICSJGA9tO59u_sMqbSbqwSqrtzsinoe36W6wyEPgoTEG8&oh=0e742fe0278b25ba697e2495c965253d&oe=595A56C3';
                    $case = 2;
                } elseif ($rand == 1) {
                    //จิ้มจุ่ม
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16649137_1440526189299737_6370977755028050295_n.jpg?oh=59c1598edb3563d937c068e41e971dd2&oe=592F3F59';
                    $case = 2;
                } elseif ($rand == 2) {
                    //ปลาช่อน
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17156104_1470691309616558_7660918045911158451_n.jpg?oh=b9d6f5a7373a77ee1a4d0638457e591e&oe=5971EECA';
                    $case = 2;
                } elseif ($rand == 3) {
                    //หมูย่าง
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15094377_1341612985857725_8235767697960646784_n.jpg?oh=10c0d7a9dbd08f6ce33bab6f98e074fd&oe=596BBBD4';
                    $case = 2;
                } elseif ($rand == 4) {
                    //ข้าวไข่ข้น
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/17103490_1463560273662995_7810622859375386342_n.jpg?_nc_eui2=v1%3AAeHCvLqU3mSYvgO5JDIVuUkLe9EzUCtNLra7T31RrSLeSODed-6nFS84Sq90oGgjHDCDCWc-gHWUb_Xn8X_ye_SToRHjHfnDApAEdMI5LiW_5QuMssshw62nN5zHNeV7VmA&oh=f795c56e4969c8214aa004c28d99679e&oe=59548047';
                    $case = 2;
                } elseif ($rand == 5) {
                    //ต้มยำกุ้ง
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17424960_1485227591496263_9094034156353889153_n.jpg?oh=f866cc9b359195a632c86459a5373520&oe=5972284C';
                    $case = 2;
                } elseif ($rand == 6) {
                    //พิซซ่า
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14495234_1305286336157057_8736988554956258994_n.jpg?_nc_eui2=v1%3AAeFvpaRfaQWpjdsbN1-9L9Vk1RgpI-1reHRqm1mvG3Jg30_5dVoHs9OH71AcBll2d4PNiD8Kdv9VcIb8fRNLte4guz1uaIZWuY33Lg9QPWrKDtbX0n7mobZrXrRtwG7KkSc&oh=a3a2178bf090801ca8d14531ea4e3f56&oe=5925D590';
                    $case = 2;
                } elseif ($rand == 7) {
                    //ส้มตำปู
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15283911_1361427370542953_7761482730005432833_n.jpg?_nc_eui2=v1%3AAeG04oMKnr0W2psGRE1Ikf4UJLaf410XsMhUVRR5q0-9QYMbGaljmN2DJpe2CXVe7CnzssgV9adesms8eiWPsniFd3ILYv4LpoOkRLBWGkdC0-laJd38nzCaDWLCJ9WYC28&oh=b30aa391507571c1bedef57b15ccf637&oe=5963960B';
                    $case = 2;
                } elseif ($rand == 8) {
                    //ปีกไก่ทอด
                    $img = 'https://3.bp.blogspot.com/-u9QmBob0h3o/VtkSVOTRUvI/AAAAAAAAAmM/AouDAlu0bR8/s400/%25E0%25B8%259B%25E0%25B8%25B5%25E0%25B8%2581%25E0%25B9%2584%25E0%25B8%2581%25E0%25B9%2588%25E0%25B8%2597%25E0%25B8%25AD%25E0%25B8%2594%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%259B%25E0%25B8%25A5%25E0%25B8%25B2_Fried%2Bchicken%2Bwing%2Bsauce.jpg';
                    $case = 2;
                } elseif ($rand == 9) {
                    //กุ้งเผา
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15037097_1342648472420843_5223539816342288929_n.jpg?_nc_eui2=v1%3AAeHOwYti5iVuowj-c7cOevqsJ0jf-9ha_uPlIxTf8K8S8d9xlGxmCmlpaX4okhuhqZb1hdOszbcpcr8kc-9aoQ6fDZdlYMn6auIZmrc7fqaD58HGAuhJiB9C0oDKYtmxhGQ&oh=d57c162254c4a9f405b1ba26b1b00a27&oe=59693763';
                    $case = 2;
                } elseif ($rand == 10) {
                    //ไก่ป๊อป
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/16681712_1451438271541862_6825978108435665747_n.jpg?_nc_eui2=v1%3AAeFF_EqcZj5d4zF17chNdlKrAE07gS-8I37k3WTEEEsMoEh3rm7OulxBJA5tBtP-5Kx-WvUiaDcd_kzN5jVoc5FM-9Wk88YxT6DEaUpuX1XYl23v9eoSHuYUFKDGQzEWupo&oh=232d9f34ace74412039ed58534ea03e8&oe=59570945';
                    $case = 2;
                } elseif ($rand == 11) {
                    //น้ำแข็งใส
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15747600_1393550303997326_9089658969736741474_n.jpg?_nc_eui2=v1%3AAeGy-OD_V7UrJJYgfDpLFcE2siCxQGEitNcXt9dftS0X97sRyBpxQs__BP-uy0Ic3IpMfyDsW_3fghvGh_Cq8rj4s1hutIT3_VgD5opfsNdEromZxgnAnrseJPA8APDV8TE&oh=3a9007c7ac5def2a346d586814cef4c0&oe=5961BD8A';
                    $case = 2;
                } elseif ($rand == 12) {
                    //ไข่กระทะ
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17264695_1474786209207068_4295172918554949738_n.jpg?oh=241f3969a6e8a4e29fb41f34c0eba878&oe=5964F26F';
                    $case = 2;
                } elseif ($rand == 13) {
                    //หมูซีอิ๊ว
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/13692523_1238803829471975_3260471915492857128_n.jpg?_nc_eui2=v1%3AAeHNoU5fI4ArJnIOdmAagk0J8kIelEyjpb_9MTiA18DKSHWmQ5jr1w8nFdRAyqWDlcB6KrwqIFeQYML7gwyf9XxsctMTAw2NbA8pwz7DpLdyKp8bP2APKMmAt2uWtSWV5zg&oh=777292fbb415865af77c1937c0bf984d&oe=5972EC44';
                    $case = 2;
                } elseif ($rand == 14) {
                    //แพนเค้ก
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14980612_1341613305857693_8945739289078424763_n.jpg?_nc_eui2=v1%3AAeFUF3mXBczyX9d4YUa4iX-0AEh1jrlgn99qc6Y_l5fpRLhEtRPzhWUOpo0JoUnuz1yrUUCepLhsrPDb0qalIbyxczFbrmZgyWUAZdk0WaQjWtRoibigLuY642IrDA9eVwY&oh=446a57ba44b65c144a8a869ce2faceb3&oe=59283395';
                    $case = 2;
                } elseif ($rand == 15) {
                    //ชุดอาหารเช้า
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17021898_1463560270329662_4250689607678676065_n.jpg?oh=afc180bc30089eaf5ff040ccfbc875e7&oe=5966F552';
                    $case = 2;
                } elseif ($rand == 16) {
                    //ยำวุ้นเส้น
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16105742_1413775201974836_575481321260019986_n.jpg?oh=afce246cbb7dbaadf91b5f5945aec74e&oe=5950D630';
                    $case = 2;
                } elseif ($rand == 17) {
                    //ข้าวมันไก่
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15822830_1398785470140476_4077958426210198193_n.jpg?oh=91dff053b4da292708bb4632ed5c933a&oe=5950984C';
                    $case = 2;
                } elseif ($rand == 18) {
                    //กุ้งมังกร
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15253486_1361426980542992_5388301921217323842_n.jpg?oh=a9bc05b7fecdb719b05fba65c6702b86&oe=5953025E';
                    $case = 2;
                } elseif ($rand == 19) {
                    //หอยเชลล์
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/14368762_1292834917402199_2041695389417822745_n.jpg?oh=aa60e07e76689db14f0a9c75c8f258b5&oe=596C2FEF';
                    $case = 2;
                } else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'เตี๋ยว') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'ก๋วยเตี๋ยวหมูน้ำตกใส่ไข่ร้านพี่นนจัดไป';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/13920658_519863781555401_3026708436745190096_n.jpg?oh=dc77891f0b78bb6dbaa70c5e1fcd8ee7&oe=592530B4';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17425058_1483414298344259_1931199174478394490_n.jpg?oh=5f853590f4d61f195b57c5c7ec43682a&oe=59537948';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17201333_611002365774875_1925728978534279915_n.jpg?oh=81eca42ced60b813cc3bcaafccbd9627&oe=59537445';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16998688_606368339571611_7856330434991689198_n.jpg?oh=deb0fe2948a91cce67bd3158d867fa6d&oe=596F6E85';
                    $case = 2;
                } else {
                    $text = 'ไปเลยร้านพี่นนที่สุพรรณบุรี อย่างเด็ด';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'อาจารย์หมวย') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'อ.หมวย UJ รู้จักป่าว';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/14642422_210542886032805_7675869105965990138_n.jpg?oh=6fd3badac2b44bd95d2a9a7ac77ba754&oe=59617CEB';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/13244813_110020342751727_3817456280435157227_n.jpg?oh=a3ec4a960ad9889a9461851337e48185&oe=59711188';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/13417416_134726200281141_1649590718476967130_n.jpg?oh=4c154ad20970958bbc5dd73d5ba2ca59&oe=592E665E';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/13419055_138052733281821_9046111837315737418_n.jpg?oh=50ac80d0994d8ad04b3d69e643a3e96d&oe=5964C9F6';
                    $case = 2;
                } else {
                    $text = 'ที่ชอบกินหมูกระทะอะนะ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'อาจารย์หยก') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/10171191_756253384394684_4411628768631656336_n.jpg?oh=c1c5d0afa38a95cf4d06024b6c52e94a&oe=596CF484';
                    $case = 2;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/10628506_840056136014408_8923413406145159611_n.jpg?oh=d0db63559726241b08af34ea8b8eab79&oe=595C374D';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16996532_1408804965806186_2277513094450733648_n.jpg?oh=6e0819aaf5d3c9ee9f31f00325ccca47&oe=5950CC44';
                    $case = 2;
                } else {
                    $text = 'หารูปยากหน่อยนะ เป็นคนไม่ยอมเปิดเผยตัวตน 555';
                    $case = 1;
                }
            }

            /*if ( strpos($textinput, 'อาจารย์นน') !== false ) {
                $rand = rand(0, 5);
                if($rand == 0){
                    $text = 'ถนัดใช้ fibo + หลักจิตวิทยาเศรษฐศาสตร์ ใครสนใจไปสอบถามได้';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16682017_1442764355742587_3708055595342157983_n.jpg?oh=8971bd4d3cc3b67a54ee5c17d5fcc902&oe=595657D9';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/1917063_103156016370101_5458952_n.jpg?oh=1f51bbc443d6a4daa0ddbe91c921eabc&oe=5969CE8C';
                    $case = 2;
                }else {
                    $text = 'ชวนไปซ้อมดนตรีดีกว่า 55';
                    $case = 1;
                }
            }*/

            if (strpos($textinput, 'อาจารย์โบ') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'ซิ่งไปกับ อ. กันดีกว่า';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/16807681_1386867288001489_422059173499568390_n.jpg?oh=dcabe39e3467d710ff447a1480ec03a4&oe=596CCE92';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/16708277_1378869288801289_570203938737589629_n.jpg?oh=feba672fba2ebe3c6c849b9ab6df3aa4&oe=592C2E07';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/181392_407913152563579_517848466_n.jpg?oh=49ce38b5ff3052219fcfdf8aafe501fd&oe=5966D8C0';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/1530602_681132338574991_614543285_n.jpg?oh=8e54b3f457f7140dbd4274d7ac0cf708&oe=596F6849';
                    $case = 2;
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/181873_501457559875804_2057874305_n.jpg?oh=405c1d5e5e1e96fb3ea8ac53e81f299b&oe=5950B230';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'แอ็ค') !== false || strpos($textinput, 'แอค') !== false || strpos($textinput, 'acme') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'หมายถึง คุณวรวัฒน์ นาคแนวดี ใช่มั๊ย';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/14680641_1207250915984703_5166523048446004053_n.jpg?oh=6c2dc997ad6ddee7dfb6043c95255c28&oe=59619AF3';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16832276_1337523219624138_7156412505552632856_n.jpg?oh=a1fe318c02c443f3bcf4e7f51954a2a5&oe=59324C22';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16711599_1330312867011840_5278709608965655057_n.jpg?oh=53e29adee7a28c049a27ba71159bdf39&oe=595FE27E';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15400548_1264708023572325_6454274480658165148_n.jpg?oh=b527678259fabd966451ebf047640b87&oe=59693A0E';
                    $case = 2;
                } else {
                    $text = 'เป็นอาจารย์ที่พวกเราเคารพนับถือ';
                    $case = 1;
                }

            }

            if (strpos($textinput, 'อาจารย์เดียร์') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'หมายถึง คุณศราวุฒิ ม่วงชู ใช่มั๊ย';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/15621963_10154794339812354_8344217722931743911_n.jpg?oh=0de51450e09782eecd5fd5fd9f582445&oe=596A4906';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/13508878_10154262811077354_2697326683941775815_n.jpg?oh=a452a37395ee17cb3ec4425567bc6b97&oe=596306A4';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/13226652_10154185379792354_2113191577035189210_n.jpg?oh=85c81c1d629f7a23b1dadd201d692e1c&oe=5953C587';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/7670_10153932320632354_5658525607111014161_n.jpg?oh=6945b0f5de5943fff1709a09c7c65743&oe=5960E3A0';
                    $case = 2;
                } else {
                    $text = 'เป็นอาจารย์ที่เก่งมากในการวิเคราะห์ตลาดทองคำ ใครอยากได้ความรู้อะไรสอบถามได้เลย';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'อาจารย์แมน') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'อ.แมน แฟนน่ารัก ^^';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/11140317_10206572731289280_7624345875123365488_n.jpg?oh=da3a4568443fc1873f019efcbb471792&oe=5954F6A7';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/384131_2577324544681_916456512_n.jpg?oh=4cc5f01dbdd59fc3e8217c1bd34d95b6&oe=5998D916';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/1917188_1245936980824_1411898_n.jpg?oh=f820612f698220532eb342fd3858887f&oe=594E7C1D';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = '';
                    $case = 2;
                } else {
                    $text = 'หมายถึง ร.ต.ดร.อภิธัช เสาะการ ใช่ป่ะ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'ตู่') !== false || strpos($textinput, 'ประยุท') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'เอิ่มมม...งานนี้ mod จะไม่ยุ่ง 5555';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/17498614_1367257446646499_2349975282543094170_n.jpg?oh=35f7c25a9e3ed85dc7436db92140190f&oe=595E62C9';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/16299460_1303713733000871_2674624396863235577_n.jpg?oh=a477680df3c0427877ddc6defd69e787&oe=596B0076';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://wd.thaibuffer.com/o/photo/803/kapook_world-800424.png';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://wd.thaibuffer.com/o/photo/803/kapook_world-800427.png';
                    $case = 2;
                } else {
                    $text = 'ระวังบินนะ 55';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'ควย') !== false || strpos($textinput, 'คว ย') !== false || strpos($textinput, 'ค ว ย') !== false || strpos($textinput, 'ค วย') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'เอาไว้ฟาดหัวมึงอะครับ';
                } elseif ($rand == 1) {
                    $text = 'ควยอะไรละครับ';
                } elseif ($rand == 2) {
                    $text = 'กูมีไม่ต้องแจก';
                } else {
                    $text = 'อ้าวๆ อยากมีเรื่องว่างั้น';
                }
                $case = 1;
            }

            if (strpos($textinput, 'บิน') !== false) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'ไปดาวไซย่าเลยมั๊ย';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = '1000 จุดไป';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'panic หรือป่าว';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'สงสัยจะไปดาวนาแม๊ก';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = 'ต้านต่อไปราคาเท่าไหร่ Sell สวนเลยดีมั้ง 555';
                    $case = 1;
                } elseif ($rand == 5) {
                    $text = 'บินซักกี่จุดดีละ';
                    $case = 1;
                } elseif ($rand == 6) {
                    $text = 'กินเต็มแท่งมั๊ยนั่น';
                    $case = 1;
                } else {
                    $img = 'https://i.ytimg.com/vi/DUnO7weCfdM/maxresdefault.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'ทุบ') !== false) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'สงสัยจะไปแกนโลก';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'แดงเป็นแกงพะแนงแล้ว';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'panic หรือป่าว';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'ทุบหนักๆ';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = 'แนวรับต่อไปราคาเท่าไหร่ Buy สวนเลยดีมั้ย';
                    $case = 1;
                } elseif ($rand == 5) {
                    $text = 'เอาให้มิด 555';
                    $case = 1;
                } elseif ($rand == 6) {
                    $text = 'กินเต็มแท่งมั๊ยละนั่น';
                    $case = 1;
                } else {
                    $img = 'https://s-media-cache-ak0.pinimg.com/originals/67/ff/5b/67ff5b84711240eb6361bc4e4094a890.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'ทองคำ') !== false || strpos($textinput, 'gold') !== false || strpos($textinput, 'xau') !== false || strpos($textinput, 'Xau') !== false || strpos($textinput, 'XAU') !== false || strpos($textinput, 'Gold') !== false || strpos($textinput, 'GOLD') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'buy หรือ sell ดีละ';
                } elseif ($rand == 1) {
                    $text = 'ช่วงนี้เหมือนจะผันผวนมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'วันนี้ SPDR เทขายหรือเข้าซื้ออ่ะ';
                } elseif ($rand == 3) {
                    $text = 'ราคามันจะไปทางไหนของมันเนี่ย';
                } elseif ($rand == 4) {
                    $text = 'วันนี้มีข่าวอะไรส่งผลกระทบกับมันบ้าง เช็คหน่อย';
                } elseif ($rand == 5) {
                    $text = 'พักทองไปเล่นคู่เงินกันบ้างมั๊ย';
                } else {
                    $text = 'ตอนนี้เล่นหน้าไหนกัน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'uj') !== false || strpos($textinput, 'UJ') !== false || strpos($textinput, 'Uj') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'buy หรือ sell ดีละ';
                } elseif ($rand == 1) {
                    $text = 'ช่วงนี้เหมือนจะผันผวนมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'วันนี้ usdx เป็นไงบ้าง';
                } elseif ($rand == 3) {
                    $text = 'เหมือนจะเล่นยากจังช่วงนี้';
                } elseif ($rand == 4) {
                    $text = 'วันนี้ไม่มีออเดอร์เลยอ่ะ';
                } else {
                    $text = 'ตอนนี้เล่นหน้าไหนกัน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'buy') !== false || strpos($textinput, 'sell') !== false || strpos($textinput, 'Sell') !== false || strpos($textinput, 'Buy') !== false) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'กี่ lot ดี';
                } elseif ($rand == 1) {
                    $text = '100 Lot เลยดีมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'เทสตลาดซัก 1 Lot';
                } elseif ($rand == 3) {
                    $text = 'เทส High หรือ Low ดีละ';
                } elseif ($rand == 4) {
                    $text = 'กดซักเท่าไหร่ว่ามา';
                } elseif ($rand == 5) {
                    $text = 'พักกันบ้างก็ได้ จะเข้าออเดอร์กันทั้งวันเลยหรือไง';
                } elseif ($rand == 6) {
                    $text = 'วิเคราะห์แปปว่าจะ buy หรือ sell ดี';
                } else {
                    $text = 'อยากจะกดแต่ใจไม่กล้า 55';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ปอด') !== false || strpos($textinput, 'ป็อด') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ไม่ได้ป็อดหว่ะ';
                } elseif ($rand == 1) {
                    $text = 'ตลาดมันผันผวนไม่อยากเข้าไปเสี่ยง';
                } elseif ($rand == 2) {
                    $text = 'ดูเลเวลด้วย รุ่นนี้ไม่มีป๊อด';
                } else {
                    $text = 'ศิษย์ใครดูด้วย สะกดไม่เป็นนะคำนี้อ่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'นอน') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'พึ่งกี่โมงเอง จะรีบนอนไปไหน';
                } elseif ($rand == 1) {
                    $text = 'ง่วงก็ไปนอนไป';
                } elseif ($rand == 2) {
                    $text = 'นอนแล้วหรอ อ้าว ... ใครยืนอยู่ปลายเตียงอ่ะ';
                } elseif ($rand == 3) {
                    $text = 'ไม่เคยนอนไง๊';
                } else {
                    $text = 'อยู่เป็นเพื่อนกันก่อนเซ่ ทิ้งกันเฉยเลย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ติดบาย') !== false || strpos($textinput, 'ติดbuy') !== false || strpos($textinput, 'ติดไม้buy') !== false || strpos($textinput, 'ติดไม้ buy') !== false) {
                $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง buy limit ไว้';
                $case = 1;
            }

            if (strpos($textinput, 'ติดเซล') !== false || strpos($textinput, 'ติดsell') !== false || strpos($textinput, 'ติดไม้sell') !== false || strpos($textinput, 'ติดไม้ sell') !== false) {
                $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง sell limit ไว้';
                $case = 1;
            }

            if (strpos($textinput, 'เฮด') !== false || strpos($textinput, 'เฮจ') !== false || strpos($textinput, 'hedg') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'เป็นสิ่งที่ไม่น่าทำ แต่ถ้ามันจำเป็นก็ทำไปเถอะ';
                } else {
                    $text = 'ถึงกับเฮดเลยหรอ ขอให้ปลดได้ไวๆนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เหนื่อย') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'หากเหนื่อยนักขอจงหยุดพักเสียก่อน อย่าใจร้อนรีบไปเดี๋ยวมันไม่เข้าที';
                } elseif ($rand == 1) {
                    $text = 'เหนื่อยก็ไปพักผ่อนไป';
                } else {
                    $text = 'เหนื่อยมากมั๊ย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กลับตัว') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'จุดกลับตัว คือ จุดที่เมื่อราคาได้วิ่งมาชนแล้ว มี "แนวโน้ม" ที่จะกลับตัว';
                } elseif ($rand == 1) {
                    $text = 'สังเกตุกราฟด้วยนะว่ามาชนแล้วเด้งหรือแค่มาจ่อ';
                } else {
                    $img = 'https://img.in.th/images/4f495cb2b586e6bbcf68ba057a8e2c4a.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, 'แนวต้านจริง') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แนวต้านจริง คือ เนื้อเทียน';
                } else {
                    $img = 'https://img.in.th/images/4f495cb2b586e6bbcf68ba057a8e2c4a.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, 'แนวต้านหลอก') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แนวต้านหลอก คือ ไส้เทียน';
                } else {
                    $img = 'https://img.in.th/images/4f495cb2b586e6bbcf68ba057a8e2c4a.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, 'แนวต้านสำคัญ') !== false) {
                $text = 'แนวต้านสำคัญ คือ แนวราคาที่กราฟได้มาชนบ่อยๆแล้วไม่สามารถผ่านไปได้';
                $case = 1;
            }

            if (strpos($textinput, 'เด้ง') !== false) {
                $text = 'กราฟชนแนวต้านแล้วเด้งใช่มั๊ย ? แสดงว่าแนวต้านแข็งแรง แต่ถ้าชนมากๆก็มีสิทธิ์ที่จะแตกได้';
                $case = 1;
            }

            if (strpos($textinput, 'จ่อ') !== false) {
                $text = 'กราฟมาจ่อแนวต้านแล้วหรอ ถ้าใครมีออเดอร์อยู่รีบเคลียร์ทิ้งนะ มันมีโอกาสที่จะทะลุได้เลย';
                $case = 1;
            }

            if (strpos($textinput, 'adp') !== false || strpos($textinput, 'Adp') !== false || strpos($textinput, 'ADP') !== false ) {
                $text = 'ADP-Nonfarm คือ รายงานการจ้างงานแห่งชาติเอดีพี จะวัดค่าการเปลี่ยนแปลงรายเดือนเพื่อทราบถึงการจ้างงานภาคเอกชนที่ไม่ใช่เกษตรกรรมซึ่งได้ยึดตามข้อมูลการคิดเงินเดือนที่ได้ข้อมูลจากกิจการธุรกิจต่างๆ ประมาณ 400,000 แห่งทั่วทั้งสหรัฐอเมริกา';
                $case = 1;
            }

            if (strpos($textinput, 'Farm') !== false || strpos($textinput, 'farm') !== false || strpos($textinput, 'nfp') !== false || strpos($textinput, 'NFP') !== false  ) {
                $text = 'Non-farm payroll คือ รายงานตัวเลขการจ้างงานนอกภาคการเกษตร จะวัดค่าการเปลี่ยนแปลงในจำนวนของผู้ที่มีงานทำในระหว่างช่วงเดือนก่อนหน้านี้โดยไม่รวมอุตสาหกรรมภาคการเกษตร การสร้างงานนั้นเป็นดัชนีที่สำคัญที่บ่งชี้ถึงการใช้จ่ายของผู้บริโภคซึ่งถือเป็นส่วนที่มากที่สุดของกิจกรรมทางเศรษฐกิจ';
                $case = 1;
            }

            if (strpos($textinput, 'สลับไม้') !== false) {
                $text = 'การสลับไม้เล่น คือ การที่เราออกออเดอร์ไปแล้ว 1 ออเดอร์ แล้วกราฟเกิดวิ่งสวนทางทำให้เราต้องไปออกออเดอร์เพิ่มอีก 1 ออเดอร์ เมื่อกราฟได้วิ่งกลับลงมาที่ออเดอร์แรกอีกครั้ง เราจะทำการปิดออเดอร์นั้นทันที ซึ่งจะเหลือออเดอร์ที่ 2 ซึ่งราคาจะดีกว่า';
                $case = 1;
            }

            if (strpos($textinput, 'xlot') !== false || strpos($textinput, 'x-lot') !== false) {
                $text = 'X-lot เป็นวิธีที่ใช้ในการหาไม้ราคาดีที่สุดทั้งในกรณีถูกทางและผิดทาง
                    
วิธีการออกออเดอร์ตามทฤษฎี x-lot
                    
ไม้ที่ 1 size lot = x
ไม้ที่ 2 size lot = x
ไม้ที่ 3 size lot = x/2
ไม้ที่ 4 size lot = x/2
ไม้ที่ 5 size lot = x
ไม้ที่ 6 size lot = x';
                $case = 1;
            }

            if (strpos($textinput, 'เพลีย') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'แหนะๆ ไปทำอะไรมาเพลีย';
                } elseif ($rand == 1) {
                    $text = 'เพลียกราฟหรือเพลียอะไร';
                } elseif ($rand == 2) {
                    $text = 'เบียร์ซักป๋องมั๊ยเลือดจะได้สูบฉีด';
                } else {
                    $text = 'ไม่หลับไม่นอนก็เป็นงี้แหละ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ง่วง') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ง่วงก็ไปนอนสิ';
                } elseif ($rand == 1) {
                    $text = 'ทำอะไรไม่หลับไม่นอน เฝ้ากราฟ ?';
                } else {
                    $text = 'พักบ้างอะไรบ้าง ไม่ต้องเฝ้ามากหรอกกราฟอ่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'บายหรือเซล') !== false || strpos($textinput, 'บาย หรือ เซล') !== false || strpos($textinput, 'เซล หรือ บาย') !== false || strpos($textinput, 'เซลหรือบาย') !== false  ) {
                $text = 'เช็คเหตุผลในการเข้าออเดอร์สิ

1. เช็คข่าวต่างๆที่มีผลต่อสกุลเงิน usd
2. เช็คข่าวใน forexfactory เทียบดัวเลขคาดการณ์และครั้งก่อนว่าดีขึ้นหรือแย่่ลง
3. เช็ค USDX ว่าแข็งค่าหรืออ่อนค่า
4. หาจุดกลับตัวที่ใกล้ที่สุดและเข้าออเดอร์ตามที่วิเคราะห์ไว้';
                $case = 1;
            }

            if (strpos($textinput, 'คัน') !== false) {
                $text = 'ใจเย็นๆ รอสัญญาณก่อน รีบเข้าเจ็บตัวได้นะ';
                $case = 1;
            }

            if (strpos($textinput, 'ตลาดเปิด') !== false || strpos($textinput, 'เปิดตลาด') !== false) {
                $text = 'ช่วงเวลาตลาดเปิด ( เวลาปกติไม่ใช่ DST )
                
05:00 ตลาดออสเตเรีย AUD
07:00 ตลาดญี่ปุ่น JPY
08:20 ตลาดจีน CNY
13:00 ตลาดยุโรป EUR
14:00 ตลาดอังกฤษ GBP
19:20 ตลาดโคเมก USD';
                $case = 1;
            }

            if (strpos($textinput, 'แข็ง') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ถ้าโดนกระแทกบ่อยๆก็อาจจะทะลุได้นะ ระวังกันด้วย';
                } elseif ($rand == 1) {
                    $text = 'มันตรงกับจุดกลับตัว TF ไหนป่าว เช็คหน่อย';
                } elseif ($rand == 2) {
                    $text = 'เจอป้าเยกับลุงทรัมป์จะแข็งไหวหรอ 555';
                } else {
                    $text = 'ตรงกับจุดกลับตัวหลายคู่เลยมั๊ย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ฝันดี') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ฝันดีนะครับ';
                } elseif ($rand == 1) {
                    $text = 'Good Night.';
                } elseif ($rand == 2) {
                    $text = 'Sweet Dream ครับ';
                } else {
                    $text = 'Good Night ครับ ถ้ามีออเดอร์ตั้ง SL กำไรไว้ด้วยนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เซ็ง') !== false) {
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

            if (strpos($textinput, 'เงียบ') !== false) {
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
                    $text = 'ฟังเพลงเพราะของ อ.แอ็คดีกว่า https://www.youtube.com/watch?v=gpisNZ7QuoE';
                } elseif ($rand == 5) {
                    $text = 'จัดให้ 1 single https://www.youtube.com/watch?v=5MXzaw5Xe9w';
                } elseif ($rand == 6) {
                    $text = 'หนักหัวใคร ?';
                } elseif ($rand == 7) {
                    $text = 'ไม่ได้เงียบซักหน่อย ดูพวกคุณคุยกันอยู่';
                } else {
                    $text = 'เดี๋ยวเปิดเพลงให้ปะจะได้ไม่เงียบ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'โหด') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ธรรมด๊า';
                } elseif ($rand == 1) {
                    $text = 'โหดสัดรัสเซีย ไนจีเรียอ่ะ';
                } elseif ($rand == 1) {
                    $text = 'โหดสัดรัสเซีย ไนจีเรียอ่ะ';
                }  else {
                    $text = 'อยากเห็นยิ่งกว่านี้ป่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'แม้ง') !== false || strpos($textinput, 'แม่ง') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'พูดดีๆได้ป่ะ';
                } else {
                    $text = 'แม้งอะไรละ พูดให้มันดีๆ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เกรียน') !== false || strpos($textinput, 'เกียน') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ว่าใครเกรียนเดี๋ยวโดนเตะออกจากห้อง';
                } elseif ($rand == 1) {
                    $text = 'มึงอะเกรียน';
                } elseif ($rand == 2) {
                    $text = 'เดี๋ยวมึงจะเกรียม';
                } else {
                    $text = 'ไม่เกรียนแค่สกินเฮด';
                }
                $case = 1;
            }


            if (strpos($textinput, 'เหล้า') !== false || strpos($textinput, 'เบียร์') !== false || strpos($textinput, 'เมา') !== false || strpos($textinput, 'ปาร์ตี้') !== false || strpos($textinput, 'ปาตี้') !== false || strpos($textinput, 'party') !== false || strpos($textinput, 'Party') !== false || strpos($textinput, 'pub') !== false || strpos($textinput, 'Pub') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'จัดไปอย่าให้เสีย ที่ไหนว่ามา the pimp ดีมั๊ย';
                } elseif ($rand == 1) {
                    $text = '3 วัน 2 คืน ไปชิลๆ';
                } elseif ($rand == 2) {
                    $text = 'ทองหล่อไป อย่างเด็ด';
                } elseif ($rand == 3) {
                    $text = 'ไปๆๆ ร้านไหนว่ามา';
                } elseif ($rand == 4) {
                    $text = 'ไปข้าวสารหรือสีลมดี';
                } else {
                    $text = 'ร้านนั่งเล่น ทองหล่อปะละ เอาเงินไปละลายหน่อย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ล้าง') !== false || strpos($textinput, 'คัท') !== false || strpos($textinput, 'คัด') !== false || strpos($textinput, 'cut') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'จงเชื่อในการสร้างใหม่';
                } elseif ($rand == 1) {
                    $text = 'ไม่ต้องเสียใจนะ สู้ๆ';
                } else {
                    $text = 'ใจเย็นๆนะ เป็นกำลังใจให้';
                }
                $case = 1;
            }

            if (strpos($textinput, 'หี') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'แม่งมึงอะดิ';
                } elseif ($rand == 1) {
                    $text = 'ทำไม คันหรอ';
                } else {
                    $text = 'พูดจาดีๆหน่อยสัส';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ปัญญาอ่อน') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ปัญญาที่จัดรายการปริศนาฟ้าแลปอะหรอ';
                } elseif ($rand == 1) {
                    $text = 'ปัญญา นิรันด์กุล ใช่ป่ะ';
                } else {
                    $text = 'ว่าตัวเองทำไมครับ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'แดก') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ต้องพูดว่ารับประทาน';
                } elseif ($rand == 1) {
                    $text = 'จะแดกอะไรละ';
                } else {
                    $text = 'พูดเพราะๆหน่อยดิวะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'สดชื่น') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ระวังลื่นถ้าสดจัด';
                } elseif ($rand == 1) {
                    $text = 'พึ่งอาบน้ำมาหรอเลยสดชื่นอ่ะ 555';
                } else {
                    $text = 'สดมากไปจะกลายสลดนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กะทะ') !== false || strpos($textinput, 'กระทะ') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'หมูกระทะจะเยียวยาทุกสิ่ง';
                } elseif ($rand == 1) {
                    $text = 'ไม่เบื่อไง๊ กินกันบ่อยเกิน';
                } elseif ($rand == 2) {
                    $text = 'หมูกระทะอีกแล้วหรอ';
                } else {
                    $text = 'กินกันบ่อยๆระวังอ้วน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กาก') !== false || strpos($textinput, 'กา ก') !== false || strpos($textinput, 'ก า ก') !== false || strpos($textinput, 'ก าก') !== false || strpos($textinput, 'kak') !== false || strpos($textinput, 'Kak') !== false || strpos($textinput, 'KAK') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'ไม่สนิทอย่าติดตลก';
                } elseif ($rand == 1) {
                    $text = 'มึงอะกาก';
                } elseif ($rand == 2) {
                    $text = 'กากพ่อง';
                } elseif ($rand == 3) {
                    $text = 'หนักหัวมึงไง๊';
                } elseif ($rand == 4) {
                    $text = 'แล้วไง';
                } elseif ($rand == 5) {
                    $text = 'ก็มึงไงกากอ่ะ';
                } else {
                    $text = 'เอ้า ... ว่าตัวเองซะงั้น';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ลอร์ด') !== false || strpos($textinput, 'ลอจ') !== false || strpos($textinput, 'lord') !== false || strpos($textinput, 'ลอท') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ไปจริงหรอ';
                } elseif ($rand == 1) {
                    $text = 'กำลังเมื่อยพอดีเลย';
                } elseif ($rand == 2) {
                    $text = 'แต่งตัวแปป';
                } elseif ($rand == 3) {
                    $text = 'ไปด้วยดิ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กฎระเบียบ') !== false || strpos($textinput, 'กฎ') !== false) {
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

            if (strpos($textinput, 'สวัสดีบอท') !== false || strpos($textinput, 'สวัสดีครับบอท') !== false || strpos($textinput, 'สวัสดีคับบอท') !== false || strpos($textinput, 'สวัสดีค่ะบอท') !== false || strpos($textinput, 'สวัสดีค่าบอท') !== false) {
                $text = 'สวัสดีครับ';
                $case = 1;
            }

            if (strpos($textinput, 'ปฏิทิน') !== false) {
                $text = 'เช็คได้ที่ https://www.investing.com/economic-calendar/ หรือ https://www.forexfactory.com/calendar.php?day=today';
                $case = 1;
            }

            if (strpos($textinput, 'แก้ไม้') !== false) {
                $text = 'วิธีการแก้ไม้แบบปิดรวบ

http://www.tradersociety.org/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B9%89%E0%B9%84%E0%B8%A1%E0%B9%89/';
                $case = 1;
            }

            if (strpos($textinput, 'ตะกร้า') !== false || strpos($textinput, 'ตระกร้า') !== false || strpos($textinput, 'finviz') !== false) {
                $text = 'เช็คอันดับค่าเงินได้ที่นี่ ( Refresh every 1 min )

http://www.tradersociety.org/finviz/';
                $case = 1;
            }

            if (strpos($textinput, 'Volumn') !== false || strpos($textinput, 'volumn') !== false) {
                $text = 'Volumn คืออะไร ???

http://www.tradersociety.org/volumn-คืออะไร/';
                $case = 1;
            }

            if (strpos($textinput, 'Fibo') !== false || strpos($textinput, 'fibo') !== false) {
                $text = 'การใช้งาน Fibo Retractment

http://www.tradersociety.org/การใช้-fibonacci-retracement/';
                $case = 1;
            }

            if (strpos($textinput, 'ยืนยันตน') !== false || strpos($textinput, 'verify') !== false) {
                $text = 'วิธีการ Verify เอกสาร

https://www.youtube.com/watch?v=c1aJdZBIWO0';
                $case = 1;
            }

            if (strpos($textinput, 'copytrade') !== false) {
                $text = 'วิธีการ CopyTrade

https://www.youtube.com/watch?v=f6MjuI4A1bw';
                $case = 1;
            }

            if (strpos($textinput, 'ฝากเงิน') !== false) {
                $text = 'วิธีฝากเงินผ่านหน้าเว็บ

https://www.youtube.com/watch?v=913IcRuVdu0

หรือหากต้องการฝากกับแอดมิน add line id : tradersociety ได้เลยครับ';
                $case = 1;
            }

            if (strpos($textinput, 'ถอนเงิน') !== false) {
                $text = 'วิธีถอนเงินผ่านหน้าเว็บ

https://www.youtube.com/watch?v=uJqwt9Cd3k4

หรือหากต้องการถอนกับแอดมิน add line id : tradersociety ได้เลยครับ';
                $case = 1;
            }

            if (strpos($textinput, 'วิเคราะห์') !== false || strpos($textinput, 'วิเคราะ') !== false) {
                $text = 'ดูบทวิเคราะห์ประจำวัน-ย้อนหลังได้ที่ http://www.tradersociety.org หรือ add line id @tradersociety ครับ มีการวิเคราะห์ข่าวทุกเช้า ';
                $case = 1;
            }

            if (strpos($textinput, 'เงินไม่เข้า') !== false || strpos($textinput, 'เงินยังไม่เข้า') !== false) {
                $text = 'หลังจากทำตามขั้นตอนของระบบแล้ว รอ 1-3 วันทำการ ถ้ายังไม่เข้า รบกวนส่งหลักฐานไปที่ finance@168fx.com และ support@168fx.com ครับ';
                $case = 1;
            }

            if (strpos($textinput, 'สัด') !== false || strpos($textinput, 'สัส') !== false || strpos($textinput, 'สั ส') !== false || strpos($textinput, 'สั ด') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'สัดกับใครวะ';
                } elseif ($rand == 1) {
                    $text = 'เพื่อนเล่นมึงหรอ';
                } elseif ($rand == 2) {
                    $text = 'ทำไมละสัด';
                } else {
                    $text = 'ด่ากู ? เดี๋ยวจะโดนไม่ใช่น้อย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'สาส') !== false || strpos($textinput, 'สาด') !== false  || strpos($textinput, 'ส า ส') !== false || strpos($textinput, 'ส า ด') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'จะสาดน้ำไง๊';
                } elseif ($rand == 1) {
                    $text = 'แสรดดดดดด';
                } else {
                    $text = 'ทำไมละสาดดด';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ฮ่าๆๆ') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "100"
                    ];
                    $case = 4;
                } elseif ($rand == 1) {
                    $text = 'จะขำอะไรกันนักหนา';
                } elseif ($rand == 2) {
                    $text = 'พอได้ละมั้ง';
                } elseif ($rand == 3) {
                    $text = 'พอๆๆ น้ำหูน้ำตาไหลหมดละ';
                } elseif ($rand == 3) {
                    $text = '5555';
                } else {
                    $text = 'ขำจนท้องแข็งละ';
                }
                $case = 1;
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