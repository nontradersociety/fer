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

            if ( strpos($textinput, 'หน้าหี') !== false || strpos($textinput, 'จิ๋ม') !== false || strpos($textinput, 'เหี้ย') !== false || strpos($textinput, 'สัด') !== false || strpos($textinput, 'สัส') !== false || strpos($textinput, 'สั ส') !== false || strpos($textinput, 'สั ด') !== false || strpos($textinput, 'พ่อง') !== false || strpos($textinput, 'ควย') !== false || strpos($textinput, 'คว ย') !== false || strpos($textinput, 'ค ว ย') !== false || strpos($textinput, 'ค วย') !== false || strpos($textinput, 'fuck') !== false || strpos($textinput, 'ตีน') !== false || strpos($textinput, 'ตรีน') !== false || strpos($textinput, 'มึง') !== false || strpos($textinput, 'มรึง') !== false || strpos($textinput, 'เมิง') !== false || strpos($textinput, 'เมริง') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'พูดเพราะๆหน่อยได้ป่าว';
                } elseif ($rand == 1) {
                    $text = 'กรุณาใช้คำสุภาพด้วยนะ';
                } elseif ($rand == 2) {
                    $img = 'งดใช้คำหยาบคายในห้องนี้';
                } elseif ($rand == 3 ) {
                    $text = 'จะพูดคำหยาบทำไมเนี่ย';
                }
                $case = 1;
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

            if ( strpos($textinput, 'หวย') !== false || strpos($textinput, 'huay') !== false ) {
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

            if ( strpos($textinput, 'ป้าเย') !== false || strpos($textinput, 'เยเลน') !== false || strpos($textinput, 'เยลเลน') !== false || strpos($textinput, 'yellen') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $img = 'https://si.wsj.net/public/resources/images/BN-NM716_0412_4_P_20160411185052.jpg';
                } elseif ($rand == 1) {
                    $text = 'จะทุบมั๊ยรอบนี้';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://cms.marketplace.org/sites/default/files/styles/primary-image-400x222/public/GettyImages-464370304.jpg?itok=pnyHQwQr';
                } elseif ($rand == 3) {
                    $text = 'มันจะลงอีก ... ไม่ใช่ทองนะ หมายถึง UJ 555';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = 'คุณป้ามหาภัย มาทีไรบรรลัยทุกที';
                    $case = 1;
                } elseif ($rand == 5) {
                    $img = 'https://www.japantimes.co.jp/wp-content/uploads/2017/08/b-yellen-a-20170823.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://s.wsj.net/public/resources/images/BN-UG181_YELLEN_M_20170712112930.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://si.wsj.net/public/resources/images/BN-SC304_YELLEN_M_20170214110041.jpg';
                } elseif ($rand == 8) {
                    $img = 'https://i.cbc.ca/1.3889643.1481310324!/fileImage/httpImage/image.jpg_gen/derivatives/16x9_620/janet-yellen.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://thenypost.files.wordpress.com/2017/07/yellen1.jpg?quality=90&strip=all&w=1200';
                } else {
                    $text = 'พาไปทัวแกนโลกหน่อยนะ';
                    $case = 1;
                }
                $case = 2;
            }

            if ( strpos($textinput, 'ทรัม') !== false || strpos($textinput, 'trump') !== false  || strpos($textinput, 'ทรั้ม') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'คุณลุงผู้ที่รักความสงบ 55';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ได้ยินชื่อนี้แล้วเหมือนจะได้สัมผัสอากาศข้างบน';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'ให้ลุงพาไปทัวสวรรค์หน่อยมั๊ย';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'พาบินซัก 2000 จุดมั๊ย';
                    $case = 1;
                } elseif ($rand == 4) {
                    $img = 'https://timedotcom.files.wordpress.com/2017/07/donald-trump-nobody-scared.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://pixel.nymag.com/imgs/daily/intelligencer/2017/06/30/30-donald-trump-fired.w710.h473.2x.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://media.vanityfair.com/photos/58c88881ab44a73fea5578b5/master/pass/donald-trump-tax-returns.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://img.huffingtonpost.com/asset/58de79e92c00002000ff18da.jpeg?ops=scalefit_720_noupscale';
                } elseif ($rand == 8) {
                    $img = 'https://ichef-1.bbci.co.uk/news/660/cpsprodpb/0421/production/_87175010_urlkbvjv.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://media.gq.com/photos/599b326d01e054755c42cb30/3:2/w_560/GettyImages-836314276.jpg';
                } elseif ($rand == 10) {
                    $img = 'https://timedotcom.files.wordpress.com/2016/05/trump-fail-004.jpg?w=720&quality=85';
                } elseif ($rand == 11) {
                    $img = 'https://media4.s-nbcnews.com/j/newscms/2017_32/2097071/trump_mad_0d61c278f7c78f32989996b5440ebc8a.nbcnews-ux-2880-1000.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://images.dailykos.com/images/314831/story_image/Donald-Trump-angry-Reuters-380.jpg?1476933067';
                } elseif ($rand == 13) {
                    $img = 'https://www.ninetyfund.com/wp-content/uploads/2017/09/donald-trump.png';
                } elseif ($rand == 14) {
                    $img = 'https://c.o0bg.com/rf/image_960w/Boston/2011-2020/2015/09/09/BostonGlobe.com/Ideas/Images/Was8958386.jpg';
                } else {
                    $img = 'https://fortunedotcom.files.wordpress.com/2016/11/508400298.jpg';
                }
                $case = 2;
            }

            if ( strpos($textinput, 'คิม') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'คิมหันอ่ะหรอ...ราคาคุย 555';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'ให้พี่คิมพาบินหน่อยมั๊ย';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://www.thairath.co.th/media/CiHZjUdJ5HPNXJ92GO24KD8yMBIKRq5Yg0.jpg';
                } elseif ($rand == 3) {
                    $img = 'https://www.thairath.co.th/media/mSQWlZdCq5b6ZLkt5IK1zwWdopA72VoX.jpg';
                } elseif ($rand == 4) {
                    $img = 'https://i.ytimg.com/vi/9C69lICOH2g/maxresdefault.jpg';
                } elseif ($rand == 5) {
                    $img = 'https://www.matichon.co.th/wp-content/uploads/2017/09/IMG_0633-1.jpg';
                } elseif ($rand == 6) {
                    $img = 'https://static01.nyt.com/images/2017/05/21/world/asia/kim-img/kim-img-master768.jpg';
                } elseif ($rand == 7) {
                    $img = 'https://cdn2.i-scmp.com/sites/default/files/styles/980x551/public/2013/01/01/abb5b3297e6b64e98c8245cc0fdee397.jpg?itok=2BWS4nNp';
                } elseif ($rand == 8) {
                    $img = 'https://pixserv.clipmass.com/upload/picture/full/221/b8826737b0f11cd21ae235633c5dce81.jpg';
                } elseif ($rand == 9) {
                    $img = 'https://www.khaosod.co.th/wp-content/uploads/2017/05/509942-01-02.jpg';
                } elseif ($rand == 10) {
                    $img = 'https://nos.nl/data/image/2017/04/16/370796/xxl.jpg';
                } elseif ($rand == 11) {
                    $img = 'https://www.khaosod.co.th/wp-content/uploads/2017/07/nk_missile_to_us-170729_04.jpg';
                } elseif ($rand == 12) {
                    $img = 'https://f.ptcdn.info/133/024/000/1412435201-1405229631-o.jpg';
                } elseif ($rand == 13) {
                    $img = 'https://news.mthai.com/app/uploads/2016/07/13592799_1793028097584889_1803378336523713475_n.jpg';
                } elseif ($rand == 14) {
                    $img = 'https://static01.nyt.com/images/2017/08/11/world/11kim4/11kim4-superJumbo.jpg';
                } else {
                    $img = 'http://matemnews.com/wp-content/uploads/2017/09/kimm.jpg';
                }
                $case = 2;
            }

            if ( strpos($textinput, 'คิดถึงบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'คิดถึงจริงหรือป่าว';
                } elseif ($rand == 1) {
                    $text = 'พูดงี้เขินเลยยย';
                } elseif ($rand == 2) {
                    $text = 'มีใครคิดถึง MOD บ้างมั๊ยนะ';
                } elseif ($rand == 3) {
                    $text = 'คิดถึงก็โทรมา หรือจะแอดไลน์ดี';
                } else {
                    $text = 'คิดถึงเหมือนกันแหละ จุ๊บๆ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'รักบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'บอกกันแบบนี้ คืนนี้ที่ไหนกันดี';
                } elseif ($rand == 1) {
                    $text = 'รักเค้าหรอตัวเอง';
                } elseif ($rand == 2) {
                    $text = 'บอกรักกันงี้เลยหรอ เขินนะ คนเยอะแยะ';
                } elseif ($rand == 3) {
                    $text = 'พูดแบบนี้เอา mt4 มาเดี๋ยวโอน $ ไปให้ 555';
                } else {
                    $text = 'รักเหมือนกันแหละ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ไม่รักบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ไม่รักก็ไม่ต้องรัก';
                } elseif ($rand == 1) {
                    $text = 'ทำไมพูดแบบนี้ละ';
                } elseif ($rand == 2) {
                    $text = 'แน่ใจว่าไม่รัก ???';
                } elseif ($rand == 3) {
                    $text = 'ไม่ได้ทำอะไรผิดซักหน่อย';
                } else {
                    $text = 'ก็ไม่ได้อยากรักเหมือนกัน';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เกลียดบอท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'อยากเกลียดก็เกลียดไป';
                } elseif ($rand == 1) {
                    $text = 'ทำไมพูดแบบนี้ละ';
                } elseif ($rand == 2) {
                    $text = 'แน่ใจว่าเกลียด ???';
                } elseif ($rand == 3) {
                    $text = 'ไม่ได้ทำอะไรผิดซักหน่อย';
                } else {
                    $text = 'เกลียดเหมือนกันแหละ 555';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ไอ้บอท') !== false || strpos($textinput, 'ไอบอท') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'พูดให้มันดีๆหน่อย';
                } elseif ($rand == 1) {
                    $text = 'พูดไอ้กับใคร';
                } elseif ($rand == 2) {
                    $text = 'พูดเพราะเป็นมั๊ย';
                } elseif ($rand == 3) {
                    $text = 'เป็นใครมาจากไหนถึงใช้คำว่า ไอ้ อยากโดน ??';
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

            if ( strpos($textinput, 'กวนติง') !== false || strpos($textinput, 'สึด') !== false || strpos($textinput, 'เควี้ย') !== false || strpos($textinput, 'เชี้ย') !== false || strpos($textinput, 'กลาก') !== false || strpos($textinput, 'กราก') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แหนะๆ จะด่าก็มาเลย ไม่ต้องทำเป็นเนียน';
                } else {
                    $text = 'กลัวโดนด่ากลับละสิ ไม่ได้โง่นะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'โง่') !== false || strpos($textinput, 'stupid') !== false || strpos($textinput, 'Stupid') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'คุณอะโง่';
                } elseif ($rand == 1) {
                    $text = 'ทำไมต้องเอาปมด้อยตัวเองมาพูดอ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ว่าตัวเองทำไม 555';
                } else {
                    $text = 'หมายถึงตัวเองใช่ป่ะ ?? กินปลาซะนะจะได้ฉลาดๆ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เสียดาย') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $text = 'เสียดายดีกว่าเสียใจ';
                } elseif ($rand == 1) {
                    $text = 'ความสำเร็จต้องทำซ้ำได้ ไม่ต้องไปเสียดายนะ';
                } elseif ($rand == 2) {
                    $text = 'เสียดายทำไม มีเวลาให้ทำกำไรในตลาดตั้งเยอะแยะ';
                } elseif ($rand == 3) {
                    $text = 'เอาหน่า รอจังหวะแล้วเข้าใหม่';
                } elseif ($rand == 4) {
                    $text = 'อย่าไปเสียดาย เดี๋ยวบอกซิกให้เอาป่ะ 555';
                } elseif ($rand == 5) {
                    $text = 'เซ็งกันเลยละสิ เดี๋ยวพาไปแก้เครียด';
                } elseif ($rand == 6) {
                    $text = 'เสียดายพี่ตูนใช่มั๊ย เพราะๆเพลงนี้ 555';
                } elseif ($rand == 7) {
                    $text = 'อยากจะทำทุกสิ่ง อยากจะทำทุกอย่าง หากจะพอมีหวัง ให้คืนวันมันย้อนไป 555';
                } elseif ($rand == 8) {
                    $text = 'ไม่ต้องซี เริ่มต้นใหม่ไป';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ฉิบหาย') !== false || strpos($textinput, 'ฉิบผาย') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ฉิบอะไรบ้าป่าว';
                } elseif ($rand == 1) {
                    $text = 'What the fuck !!!';
                } else {
                    $text = 'อะไรใครหาย หาดิ๊';
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

            if ( strpos($textinput, 'รวน') !== false ) {
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

            if ( strpos($textinput, 'หิว') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22491697_1693628180656202_116602565607057498_n.jpg?oh=9565274767ecf25921e9b5c119b91aae&oe=5AABA6F3';
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22366558_1688105804541773_201235090864310341_n.jpg?oh=b95794045ae1d1b8d1a3ce796e054771&oe=5A7BAD1E';
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22448233_1687484741270546_8496100566807712587_n.jpg?oh=4132f8fe2923759030b670a2c3a46d8d&oe=5A7C202E';
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22221681_1684095844942769_8348154018004486401_n.jpg?oh=36b05393306f7fd2e85832cbf90994df&oe=5A742391';
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22228307_1684095584942795_6351904036547807229_n.jpg?oh=922f2b691b0a52cbd40492a983194977&oe=5A6D4D2D';
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22310386_1684095728276114_4065027234226412289_n.jpg?oh=5a4425049b1e9c890aaf4f92a55de51d&oe=5A788165';
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22090051_1681642531854767_6579216749155424623_n.jpg?oh=40117d0ac84436fe501c716ac29f6ff8&oe=5AA7D961';
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21557506_1666668403352180_1244606924793551897_n.jpg?oh=e95737f870614d216e5e61921bf7110e&oe=5A6F0AAC';
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/20994193_1645770805441940_5389767377977641457_n.jpg?oh=a692bfce2f4ed16b03692a4f36ba3f25&oe=5A6D76F5';
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/20228587_1606627489356272_6001114156515142436_n.jpg?oh=bb9dcd33d0da9af483fb976e56e9f13d&oe=5AB02565';
                } elseif ($rand == 10) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/19511608_1590359287649759_3473750033971233852_n.jpg?oh=f91543cfe54ec64d74e4b7c7056aa968&oe=5A71C53B';
                } elseif ($rand == 11) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t31.0-8/19143329_1571294106222944_9144120841680281456_o.jpg?oh=1bde635f51131c7e4d1eadad594c7dac&oe=5AAF0D93';
                } elseif ($rand == 12) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/18765947_1554005964618425_1041047060437650651_n.jpg?oh=482645031f762acb09934cb9f901d28e&oe=5A7523B6';
                } elseif ($rand == 13) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/18425365_1539811952704493_6081567633266493650_n.jpg?oh=447dfb854b4682f34f774908847a333a&oe=5AAE6FC2';
                } elseif ($rand == 14) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15822839_1398062340212789_2540425215817570183_n.jpg?oh=96a6bfca75fb58da82a654893097e9c9&oe=5AAF0776';
                } else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
                $case = 2;
            }

            if ( strpos($textinput, 'อาจารย์เดียร์') !== false ) {
                $rand = rand(0, 15);
                if ($rand == 0) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21032321_10155626812432354_4662141697016054569_n.jpg?oh=e3b7d1d57120bc12ebdf31ee6a87baea&oe=5A720B7F';
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t31.0-8/21752568_10155675794147354_4338224038696237861_o.jpg?oh=c1e4bdf3e58f1f0dbf1994d02b04f237&oe=5A79C38E';
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21192144_10155638887367354_137853621252962502_n.jpg?oh=71c6e62e1295fe1623877e14e40af9a5&oe=5AAA5B76';
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17342477_10155104394162354_4121161709451174937_n.jpg?oh=8c602ba83210af5b2ec9e79589a50f43&oe=5A581250';
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21032321_10155626812432354_4662141697016054569_n.jpg?oh=f38cc078912748d4e7dd59ee7f7ad563&oe=5A22F17F';
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/20638781_10155577837622354_5178496901361026877_n.jpg?oh=c3a1d08a54b5819bf4934afa0e3fea43&oe=5A293909';
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/20429619_10155539520822354_3692585598844473628_n.jpg?oh=0e7152cf57f301f038c986a0182e66a4&oe=5A135CFB';
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/19748554_10155455806367354_9209956962704196089_n.jpg?oh=ca39cbed9c768e99f90dec83e2493cd0&oe=5A122D54';
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/18951191_10155360825777354_992710615288693662_n.jpg?oh=1ef6afb3c59714b34207c7ed093860c9&oe=5A5B45F4';
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/18813462_10155335914657354_2333391613399244789_n.jpg?oh=e4baac3a4009588c209d8e72f4abc898&oe=5A204101';
                } elseif ($rand == 10) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22815176_10155796186057354_3089909814532017661_n.jpg?oh=5dccf0bd66a148aa3a1d7305a15e1001&oe=5A6EF922';
                } elseif ($rand == 11) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22539681_10155775080152354_5569975504409721188_n.jpg?oh=7393d83d6786a270079ff0e7356bb6bc&oe=5A7A505D';
                } elseif ($rand == 12) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22279583_10155748122467354_4328767145576280793_n.jpg?oh=5156cdd63651e6b9494993c3f14fc95e&oe=5AAE55DE';
                } elseif ($rand == 13) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21752046_10155689205437354_8473301956420566230_n.jpg?oh=63483dbecc6d8ea88ffb5ecdb913c8b8&oe=5A6A0199';
                } elseif ($rand == 14) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21761836_10155678777712354_8006739702253471315_n.jpg?oh=ac25a5344446c2581119d4c45bfba7e2&oe=5A632160';
                } else {
                    $text = 'เป็นอาจารย์ที่เก่งมากในการวิเคราะห์ตลาดทองคำ ใครอยากได้ความรู้อะไรสอบถามได้เลย';
                    $case = 1;
                }
                $case = 2;
            }

            if ( strpos($textinput, 'อาจารย์แมน') !== false || strpos($textinput, 'อ.แมน') !== false ) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = 'อ.แมน แฟนน่ารัก ^^';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22852070_10213154645153013_3124897876086884110_n.jpg?oh=a128eb3a85f115fcb51046671369254b&oe=5A98DC98';
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/14463020_10209511977968610_5947356336920460139_n.jpg?oh=e2a42331c40d6b76856d2d79d5e4cfa1&oe=5AAF03C8';
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22852070_10213154645153013_3124897876086884110_n.jpg?oh=a128eb3a85f115fcb51046671369254b&oe=5A98DC98';
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22310168_10213001281719023_419890656412232509_n.jpg?oh=fa92723f6e0112bda0364223109c254e&oe=5A8D7F28';
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/22008172_10212897968536258_410151284550634270_n.jpg?oh=59f281875df5013026d948b6d0ad076b&oe=5AAF583B';
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/384131_2577324544681_916456512_n.jpg?oh=b03d6ca05667281f7ded1c28b114f666&oe=5AADB416';
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/1917188_1245936980824_1411898_n.jpg?oh=c065aaf01ccd11709819525c6e794d91&oe=5A63571D';
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/223602_2177276103720_7875713_n.jpg?oh=eba51161472ca8f7efbb108d6e5eb84c&oe=5A9C3248';
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/21151330_10212708717445099_5429967283449282474_n.jpg?oh=8c95c51c393f0584b86c90be629e1494&oe=5A954201';
                } else {
                    $text = 'ร.อ.ดร.อภิธัช เสาะการ เป็นไง ... จัดเต็มให้หน่อย 555';
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

            if ( strpos($textinput, 'บิน') !== false ) {
                $rand = rand(0, 16);
                if ($rand == 0) {
                    $img = 'https://stickershop.line-scdn.net/stickershop/v1/product/1169980/LINEStorePC/main@2x.png;compress=true?__=20161019';
                    $case = 2;
                } elseif ($rand == 1) {
                    $text = '1000 จุดพอมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'panic หรือป่าว';
                } elseif ($rand == 3) {
                    $text = 'สงสัยจะไปดาวนาแม๊ก';
                } elseif ($rand == 4) {
                    $text = 'ต้านต่อไปราคาเท่าไหร่ Sell สวนเลยดีมั้ง 555';
                } elseif ($rand == 5) {
                    $text = 'บินซักกี่จุดดีละ';
                } elseif ($rand == 6) {
                    $text = 'กินเต็มแท่งมั๊ยนั่น';
                } elseif ($rand == 7) {
                    $text = 'ไปรอดาวพลูโตแปป';
                } elseif ($rand == 8) {
                    $text = 'เช็คข่าวหน่อย มีข่าวอะไรทำไมถึงบิน';
                } elseif ($rand == 9) {
                    $text = 'เจ้าลากกินขา s หรือป่าวเนี่ย';
                } elseif ($rand == 10) {
                    $text = 'เสียดายไม่มีออเดอร์กับเขาเลย';
                } elseif ($rand == 11) {
                    $img = 'https://i.ytimg.com/vi/DUnO7weCfdM/maxresdefault.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ทุบ') !== false ) {
                $rand = rand(0, 16);
                if ($rand == 0) {
                    $text = 'สงสัยจะไปแกนโลก';
                } elseif ($rand == 1) {
                    $text = 'แดงเป็นแกงพะแนงแล้ว';
                } elseif ($rand == 2) {
                    $img = 'https://static.seekingalpha.com/uploads/2016/1/12/saupload_Bear_market_6_1_thumb2.jpg';
                    $case = 2;
                } elseif ($rand == 3) {
                    $text = 'ทุบหนักๆ';
                } elseif ($rand == 4) {
                    $text = 'แนวรับต่อไปราคาเท่าไหร่ Buy สวนเลยดีมั้ย';
                } elseif ($rand == 5) {
                    $text = 'เอาให้มิด 555';
                } elseif ($rand == 6) {
                    $text = 'กินเต็มแท่งมั๊ยละนั่น';
                } elseif ($rand == 7) {
                    $text = 'Follow ตามเลยดีมั๊ยนะ 555';
                } elseif ($rand == 8) {
                    $text = 'เช็คข่าวหน่อย มีข่าวอะไร FOMC ออกมาพูดหรือป่าว';
                } elseif ($rand == 9) {
                    $text = 'สงสัยเจ้าลากกินขา b';
                } elseif ($rand == 10) {
                    $text = 'เสียดายไม่มีออเดอร์กับเขาเลย';
                } elseif ($rand == 11) {
                    $img = 'https://s-media-cache-ak0.pinimg.com/originals/67/ff/5b/67ff5b84711240eb6361bc4e4094a890.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if ( strpos($textinput, 'Sell') !== false || strpos($textinput, 'Buy') !== false ) {
                $rand = rand(0, 9);
                if ($rand == 0) {
                    $text = 'กี่ lot ดี';
                } elseif ($rand == 1) {
                    $text = '100 Lot เลยดีมั๊ย 555';
                } elseif ($rand == 2) {
                    $text = 'เดี๋ยวเทสตลาดซัก 1 Lot';
                } elseif ($rand == 3) {
                    $text = 'เทส High หรือ Low ดีละ';
                } elseif ($rand == 4) {
                    $text = 'กดซักเท่าไหร่ว่ามา';
                } elseif ($rand == 5) {
                    $text = 'พักกันบ้างก็ได้ จะเข้าออเดอร์กันทั้งวันเลยหรือไง';
                } elseif ($rand == 6) {
                    $text = 'วิเคราะห์แปปว่าจะ buy หรือ sell ดี';
                } elseif ($rand == 7) {
                    $text = 'มีใครขา s บ้าง';
                } elseif ($rand == 8) {
                    $text = 'ใครมอง b จะหาแนวร่วม 5555';
                } else {
                    $text = 'อยากจะกดแต่ใจไม่กล้า 55';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ปอด') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'ไม่ได้ป็อดหว่ะ';
                } elseif ($rand == 1) {
                    $text = 'ว่าใครป๊อด ซักตั้งมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'ดูเลเวลด้วย รุ่นนี้ไม่มีป๊อด';
                } elseif ($rand == 3) {
                    $text = 'เดี๋ยวเข้าออเดอร์โชว์ซักไม้ ทำให้เด็กมันดูหน่อย';
                } else {
                    $text = 'ศิษย์ใครดูด้วย สะกดไม่เป็นนะคำนี้อ่ะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ง่วง') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'ง่วงก็ไปนอนสิ';
                } elseif ($rand == 1) {
                    $text = 'ทำอะไรไม่หลับไม่นอน เฝ้ากราฟ ?';
                } elseif ($rand == 2) {
                    $text = 'เอาพอร์ตมา เดี๋ยวกดให้ 1 lot จะได้หายง่วง 55';
                } elseif ($rand == 3) {
                    $text = 'ไม่เคยนอนไง๊';
                } elseif ($rand == 4) {
                    $text = 'จะรีบนอนไปไหน';
                } elseif ($rand == 5) {
                    $text = 'ง่วงแล้วทำไมไม่นอน ?? สงสัยแก้พอร์ตอยู่';
                } else {
                    $text = 'พักบ้างอะไรบ้าง ไม่ต้องเฝ้ามากหรอกกราฟอ่ะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ติดบาย') !== false || strpos($textinput, 'ติดไม้บาย') !== false || strpos($textinput, 'ติดbuy') !== false || strpos($textinput, 'ติดไม้buy') !== false || strpos($textinput, 'ติดไม้ buy') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง buy limit ไว้';
                } else {
                    $text = 'หาจุดกลับตัวที่ขนาดใหญ่ๆหน่อย เราจะเอาจังหวะการชนแล้วเด้งทำกำไร';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ติดเซล') !== false || strpos($textinput, 'ติดไม้เซล') !== false || strpos($textinput, 'ติดsell') !== false || strpos($textinput, 'ติดไม้sell') !== false || strpos($textinput, 'ติดไม้ sell') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง sell limit ไว้';
                } else {
                    $text = 'หาจุดกลับตัวที่ขนาดใหญ่ๆหน่อย เราจะเอาจังหวะการชนแล้วเด้งทำกำไร';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เฮด') !== false || strpos($textinput, 'เฮจ') !== false || strpos($textinput, 'hedg') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'เป็นสิ่งที่ไม่น่าทำ แต่ถ้ามันจำเป็นก็ทำไปเถอะ';
                } else {
                    $text = 'ถึงกับเฮดเลยหรอ ขอให้ปลดได้ไวๆนะ';
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

            if ( strpos($textinput, 'จุดกลับตัว') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'จุดกลับตัว คือ จุดที่เมื่อราคาได้วิ่งมาชนแล้ว มี "แนวโน้ม" ที่จะกลับตัว';
                } elseif ($rand == 1) {
                    $text = 'สังเกตุกราฟด้วยนะว่ามาชนแล้วเด้งหรือแค่มาจ่อ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'แนวต้านสำคัญ') !== false ) {
                $text = 'แนวต้านสำคัญ คือ แนวราคาที่กราฟได้มาชนบ่อยๆแล้วไม่สามารถผ่านไปได้';
                $case = 1;
            }

            if (strpos($textinput, 'ชนแล้วเด้ง') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'กราฟชนแนวต้านแล้วเด้งใช่มั๊ย ? แสดงว่าแนวต้านแข็งแรง แต่ถ้าชนมากๆก็มีสิทธิ์ที่จะแตกได้';
                } else {
                    $text = 'แสดงว่าแนวราคานั้นมีขนาดแท่งเทียนที่มีขนาดใหญ่พอสมควร ทำให้มีการเด้งกลับ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'จ่อ') !== false ) {
                $text = 'กราฟมาจ่อแนวต้านแล้วหรอ ถ้าใครมีออเดอร์อยู่รีบเคลียร์ทิ้งนะ มันมีโอกาสที่จะทะลุได้เลย';
                $case = 1;
            }

            if ( strpos($textinput, 'adp-nonfarm') !== false ) {
                $text = 'ADP-Nonfarm คือ รายงานการจ้างงานแห่งชาติเอดีพี จะวัดค่าการเปลี่ยนแปลงรายเดือนเพื่อทราบถึงการจ้างงานภาคเอกชนที่ไม่ใช่เกษตรกรรมซึ่งได้ยึดตามข้อมูลการคิดเงินเดือนที่ได้ข้อมูลจากกิจการธุรกิจต่างๆ ประมาณ 400,000 แห่งทั่วทั้งสหรัฐอเมริกา';
                $case = 1;
            }

            if ( strpos($textinput, 'non-farm') !== false ) {
                $text = 'Non-farm payroll คือ รายงานตัวเลขการจ้างงานนอกภาคการเกษตร จะวัดค่าการเปลี่ยนแปลงในจำนวนของผู้ที่มีงานทำในระหว่างช่วงเดือนก่อนหน้านี้โดยไม่รวมอุตสาหกรรมภาคการเกษตร การสร้างงานนั้นเป็นดัชนีที่สำคัญที่บ่งชี้ถึงการใช้จ่ายของผู้บริโภคซึ่งถือเป็นส่วนที่มากที่สุดของกิจกรรมทางเศรษฐกิจ';
                $case = 1;
            }

            if ( strpos($textinput, 'สลับไม้') !== false ) {
                $text = 'การสลับไม้เล่น คือ การที่เราออกออเดอร์ไปแล้ว 1 ออเดอร์ แล้วกราฟเกิดวิ่งสวนทางทำให้เราต้องไปออกออเดอร์เพิ่มอีก 1 ออเดอร์ เมื่อกราฟได้วิ่งกลับลงมาที่ออเดอร์แรกอีกครั้ง เราจะทำการปิดออเดอร์นั้นทันที ซึ่งจะเหลือออเดอร์ที่ 2 ซึ่งราคาจะดีกว่า';
                $case = 1;
            }

            if ( strpos($textinput, 'xlot') !== false || strpos($textinput, 'x-lot') !== false || strpos($textinput, 'X-lot') !== false || strpos($textinput, 'X-Lot') !== false || strpos($textinput, 'Xlot') !== false || strpos($textinput, 'XLot') !== false ) {
                $text = 'X-lot เป็นวิธีที่ใช้ในการหาไม้ราคาดีที่สุดทั้งในกรณีถูกทางและผิดทาง
                    
วิธีการออกออเดอร์ตามทฤษฎี x-lot
                    
ไม้ที่ 1 size lot = x
ไม้ที่ 2 size lot = x
ไม้ที่ 3 size lot = x/2
ไม้ที่ 4 size lot = x/2
ไม้ที่ 5 size lot = x
ไม้ที่ 6 size lot = x
คำนวณ x โดยนำทุนไปหาร 10000 แล้วนำผลลัพธ์ไปหาร 5 ผลลัพธ์สุดท้าย คือ จำนวน x lot';
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

            if ( strpos($textinput, 'sideway') !== false || strpos($textinput, 'Sideway') !== false ) {
                $text = 'ตลาดแบบ Sideway คือ สภาวะที่ตลาดเลือกทิศทางไม่ได้ว่าจะขึ้นหรือจะลง วิ่งอยู่ในกรอบ นักลงทุนส่วนมากหากเจอสภาวะแบบนี้อาจไม่เข้าเทรดหรือถ้าเทรดก็เป็นแบบทำกำไรระยะสั้น ต้องใช้ประสบการณ์เพราะต้องเข้าเร็วออกเร็ว หากช้าอาจโดนกราฟลากได้';
                $case = 1;
            }

            if ( strpos($textinput, 'บายหรือเซล') !== false || strpos($textinput, 'บาย หรือ เซล') !== false || strpos($textinput, 'เซล หรือ บาย') !== false || strpos($textinput, 'เซลหรือบาย') !== false ) {
                $text = 'เช็คเหตุผลในการเข้าออเดอร์สิ
1. เช็คข่าวต่างๆที่มีผลต่อสกุลเงินที่เราเล่น
2. เช็คข่าวใน forexfactory เทียบดัวเลขคาดการณ์และครั้งก่อนว่าดีขึ้นหรือแย่ลง
3. ถ้าทองคำหรือคู่เงินที่เทียบ usd เข้าไปเช็ค USDX ว่าแข็งค่าหรืออ่อนค่า
4. หาจุดกลับตัวที่ใกล้ที่สุดและเข้าออเดอร์ตามที่วิเคราะห์ไว้';
                $case = 1;
            }

            if ( strpos($textinput, 'คัน') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'คันมือหรอ ?? จัดขำๆไป 5 lot ไป';
                } elseif ($rand == 1) {
                    $text = 'คันมากมั๊ย';
                } elseif ($rand == 2) {
                    $text = 'คันไร อย่าบอกนะว่าคัน ... 5555';
                } else {
                    $text = 'ใจเย็นๆ รอสัญญาณก่อน รีบเข้าเจ็บตัวได้นะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ตลาดเปิด') !== false || strpos($textinput, 'เปิดตลาด') !== false || strpos($textinput, 'ปิดตลาด') !== false || strpos($textinput, 'ตลาดปิด') !== false ) {
                $text = 'ช่วงเวลาตลาดเปิด-ปิด ( DST )
                
05:00-13:00 ตลาดออสเตเรีย AUD
07:00-14:00 ตลาดญี่ปุ่น JPY
08:20-15:00 ตลาดจีน CNY
14:00-22:00 ตลาดยุโรป EUR
15:00-23:00 ตลาดอังกฤษ GBP
20:20-04:00 ตลาดโคเมก USD';
                $case = 1;
            }

            if ( strpos($textinput, 'usdx') !== false || strpos($textinput, 'Usdx') !== false  || strpos($textinput, 'USDX') !== false || strpos($textinput, 'ดอลล่าดิบ') !== false || strpos($textinput, 'ดอลลาดิบ') !== false ) {
                $text = 'เช็ค usdx ได้ที่ https://www.investing.com/quotes/us-dollar-index';
                $case = 1;
            }

            if ( strpos($textinput, 'ดัชนีหลัก') !== false || strpos($textinput, 'major-indices') !== false ) {
                $text = 'เช็คดัชนีหลัก ได้ที่ https://th.investing.com/indices/major-indices';
                $case = 1;
            }

            if ( strpos($textinput, 'ดัชนีโลก') !== false || strpos($textinput, 'world-indices') !== false ) {
                $text = 'เช็คดัชนีโลก ได้ที่ https://th.investing.com/indices/world-indices';
                $case = 1;
            }

            if ( strpos($textinput, 'ดัชนีกองทุน') !== false || strpos($textinput, 'cfds') !== false || strpos($textinput, 'CFDs') !== false || strpos($textinput, 'CFDS') !== false ) {
                $text = 'เช็คดัชนีกองทุน ได้ที่ https://th.investing.com/indices/indices-cfds';
                $case = 1;
            }

            if ( strpos($textinput, 'ดัชนีหุ้นทั่วโลก') !== false || strpos($textinput, 'global-indices') !== false ) {
                $text = 'เช็คดัชนีหุ้นทั่วโลก ได้ที่ https://th.investing.com/indices/global-indices';
                $case = 1;
            }

            if ( strpos($textinput, 'ต้านแข็ง') !== false || strpos($textinput, 'รับแข็ง') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ถ้าโดนกระแทกบ่อยๆก็อาจจะทะลุได้นะ ระวังกันด้วย';
                } elseif ($rand == 1) {
                    $text = 'มันตรงกับจุดกลับตัว TF ไหนป่าว เช็คหน่อย';
                } elseif ($rand == 2) {
                    $text = 'เจอป้าเยกับลุงทรัมป์จะแข็งไหวหรอ 555';
                } else {
                    $text = 'ตรงกับจุดกลับตัวหลายคู่เลยมั๊ยนั่น';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ovt') !== false || strpos($textinput, 'OVT') !== false || strpos($textinput, 'Ovt') !== false || strpos($textinput, 'overtrade') !== false || strpos($textinput, 'Overtrade') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'เป็นสิ่งที่ไม่สมควรทำเลยนะ';
                } elseif ($rand == 1) {
                    $text = 'แน่ใจแล้วหรอ จะ overtrade อ่ะ';
                } elseif ($rand == 2) {
                    $text = 'ไม่ดีมั้ง พอร์ตจะเสี่ยงไป';
                } elseif ($rand == 3) {
                    $text = 'ระวังพอร์ตบินนะถ้ากราฟผันผวน';
                } else {
                    $text = 'ovt ?? รวยกับล้างมีเส้นบางๆกันอยู่นะ 555';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'ฝันดี') !== false ) {
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
                } else {
                    $text = 'Good Night ครับ ถ้ามีออเดอร์ตั้ง SL กำไรไว้ด้วยนะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'กราฟป่วย') !== false ) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'นั่นสิ เบื่อจริงๆเลย';
                } elseif ($rand == 1) {
                    $text = 'ป่วยบ่อยไปช่วงนี้';
                } elseif ($rand == 2) {
                    $text = 'มันกำลังรออะไรอยู่หรือป่าว เช็คข่าวหน่อย';
                } elseif ($rand == 3) {
                    $text = 'ว่าจะซัด lot หนักๆ หาจังหวะเข้าไม่ได้เลย';
                } elseif ($rand == 4) {
                    $text = 'หาที่เที่ยวดีกว่า 55';
                } elseif ($rand == 5) {
                    $text = 'นอนรอดีกว่า ZzzZz';
                } elseif ($rand == 6) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "405"
                    ];
                    $case = 4;
                } elseif ($rand == 7) {
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "401"
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

            if (strpos($textinput, 'บอทโหด') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'ธรรมด๊า';
                } elseif ($rand == 1) {
                    $text = 'โหดสัดรัสเซีย ไนจีเรียอ่ะ';
                } elseif ($rand == 1) {
                    $text = 'ดูเลเวลด้วย';
                } else {
                    $text = 'อยากเห็นยิ่งกว่านี้ป่ะ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'แม้ง') !== false || strpos($textinput, 'แม่ง') !== false ) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'พูดดีๆได้ป่ะ';
                } else {
                    $text = 'แม้งอะไรละ พูดให้มันดีๆ';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'หัวร้อน') !== false ) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = 'หัวร้อนใคร ?? ถ้ากับบอทแนะนำว่าอย่าเสี่ยง';
                } elseif ($rand == 1) {
                    $text = 'ไปนอนในถังน้ำแข็งไปจะได้หายร้อน';
                } elseif ($rand == 2) {
                    $text = 'ก็ที่นี่ประเทศไทยไง เลยร้อน 555';
                } elseif ($rand == 3) {
                    $text = 'จะร้อนอะไรกันนักกันหนา';
                } elseif ($rand == 4) {
                    $text = 'เมืองไทยนะ ไม่ใช่ขั้วโลกเหนือ';
                } elseif ($rand == 5) {
                    $text = 'เดี๋ยวพาไปให้หายเครียด 555';
                } elseif ($rand == 6) {
                    $text = 'หาที่ผ่อนคลายกันหน่อยมั๊ย';
                } else {
                    $text = 'ซักป๋องมั๊ยจะได้หายร้อน';
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

            if ( strpos($textinput, 'ล้างพอท') !== false || strpos($textinput, 'ล้างพอร์ต') !== false || strpos($textinput, 'ล้างพอต') !== false || strpos($textinput, 'ล้างพอร์ท') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'จงเชื่อในการสร้างใหม่';
                } elseif ($rand == 1) {
                    $text = 'ไม่ต้องเสียใจนะ สู้ๆ';
                } elseif ($rand == 2) {
                    $text = 'ล้างเพราะอะไรอ่ะ ovt หรอ';
                } elseif ($rand == 3) {
                    $text = 'ออกออเดอร์ถี่เกินไปหรือป่าว เวลาโดนลากพอร์ตเลยรับไม่ไหว';
                } else {
                    $text = 'ใจเย็นๆนะ เป็นกำลังใจให้';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'เสือก') !== false ) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'พอใจอ่ะ';
                } elseif ($rand == 1) {
                    $text = 'พูดดีๆเป็นป่าว';
                } elseif ($rand == 2) {
                    $text = 'ก็อยากรู้ มีปัญหาอะไรมั๊ย';
                } elseif ($rand == 3) {
                    $text = 'พูดแบบนี้สงสัยอยากโดนเล่น';
                } elseif ($rand == 4) {
                    $text = 'เคยนั่งอยู่ดีๆแล้วหงายหลังป่ะ';
                } elseif ($rand == 5) {
                    $text = 'อยากโดนเท้าคู่มั๊ย';
                } else {
                    $text = 'ก็พอใจจะทำไมละ ??';
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

            if ( strpos($textinput, 'แดก') !== false ) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'แดกไรกัน แดกด้วย';
                } elseif ($rand == 1) {
                    $text = 'จะแดกอะไรละ';
                } elseif ($rand == 2) {
                    $text = 'แดกไร ? ลูกตะกั่วมั๊ย 55';
                } else {
                    $text = 'พูดเพราะๆหน่อยดิวะ';
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

            if ( strpos($textinput, 'สวัสดีบอท') !== false || strpos($textinput, 'สวัสดีครับบอท') !== false || strpos($textinput, 'สวัสดีคับบอท') !== false || strpos($textinput, 'สวัสดีค่ะบอท') !== false || strpos($textinput, 'สวัสดีค่าบอท') !== false ) {
                $text = 'สวัสดีครับ';
                $case = 1;
            }

            if ( strpos($textinput, 'ปฏิทิน') !== false ) {
                $text = 'เช็คได้ที่ https://www.investing.com/economic-calendar/ หรือ https://www.forexfactory.com/calendar.php?day=today';
                $case = 1;
            }

            if ( strpos($textinput, 'แก้ไม้') !== false ) {
                $text = 'วิธีการแก้ไม้แบบปิดรวบ
https://goo.gl/cOQgUR';
                $case = 1;
            }

            if ( strpos($textinput, 'ตะกร้า') !== false || strpos($textinput, 'ตระกร้า') !== false || strpos($textinput, 'finviz') !== false ) {
                $text = 'เช็คอันดับค่าเงินได้ที่นี่ ( Refresh every 1 min )
http://www.tradersociety.org/finviz/';
                $case = 1;
            }

            if ( strpos($textinput, 'Volume') !== false || strpos($textinput, 'Volumes') !== false ) {
                $text = 'Volume คืออะไร ???
http://www.tradersociety.org/volumn-คืออะไร/';
                $case = 1;
            }

            if ( strpos($textinput, 'Fibo') !== false || strpos($textinput, 'fibo') !== false ) {
                $text = 'การใช้งาน Fibo Retractment
http://www.tradersociety.org/การใช้-fibonacci-retracement/';
                $case = 1;
            }
/*
            if ( strpos($textinput, 'ประเภทบัญชี') !== false ) {
                $text = 'ประเภทบัญชี
http://th.weltrade.com/trader/type_account/';
                $case = 1;
            }

            if ( strpos($textinput, 'Spread') !== false || strpos($textinput, 'spread') !== false ) {
                $text = 'ค่าสเปรดบัญชีประเภทต่างๆ
http://th.weltrade.com/trader/tools/';
                $case = 1;
            }

            if ( strpos($textinput, 'ฝากเงิน') !== false ) {
                $text = 'วิธีฝากเงิน
http://th.weltrade.com/trader/paysystems/';
                $case = 1;
            }

            if ( strpos($textinput, 'ถอนเงิน') !== false ) {
                $text = 'วิธีถอนเงิน
http://th.weltrade.com/trader/paysystems/';
                $case = 1;
            }
*/
            if ( strpos($textinput, 'ประเภทบัญชี') !== false ) {
                $text = 'ประเภทบัญชี
https://ignisforex.com/?page=Trading_Account_Types';
                $case = 1;
            }

            if ( strpos($textinput, 'weltrade') !== false || strpos($textinput, 'Weltrade') !== false || strpos($textinput, 'เวลเทรด') !== false ) {
                $text = 'Link การสมัคร (  รหัสพันธมิตรหรือรหัสผู้เเนะนำ :: 12411 )
http://th.weltrade.com/?r1=ipartner&r2=12411
หากใครใคร่สนับสนุนกลุ่มเราสามารถคลิกลิ้งด้านบนเพื่อเปิดบัญชีได้เลยครับ';
                $case = 1;
            }

            if ( strpos($textinput, 'crypto') !== false || strpos($textinput, 'digital') !== false || strpos($textinput, 'btc') !== false || strpos($textinput, 'eth') !== false || strpos($textinput, 'ltc') !== false || strpos($textinput, 'บิท') !== false || strpos($textinput, 'bitcoin') !== false || strpos($textinput, 'Bitcoin') !== false ) {
                $text = 'เช็คได้ที่นี่เลย
http://tradersociety.org/crypto/';
                $case = 1;
            }

            if ( strpos($textinput, 'ignis') !== false || strpos($textinput, 'โบรคอาจารย์เดีย') !== false || strpos($textinput, 'โบรค อ.เดีย') !== false || strpos($textinput, 'โบรคอ.เดีย') !== false ) {
                $text = 'Link การสมัคร
https://ignisforex.com/';
                $case = 1;
            }

            if ( strpos($textinput, 'บทวิเคราะห์') !== false || strpos($textinput, 'บทวิเคราะ') !== false ) {
                $text = 'ดูบทวิเคราะห์ประจำวัน-ย้อนหลังได้ที่ http://www.tradersociety.org มีการวิเคราะห์ข่าวทุกเช้า';
                $case = 1;
            }

            if ( strpos($textinput, 'ฮ่าๆๆ') !== false || strpos($textinput, '555+') !== false || strpos($textinput, 'ฮา') !== false ) {
                $rand = rand(0, 6);
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