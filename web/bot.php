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
                                $text = '§‘¥∂÷ß°—π„™Ë¡—Í¬≈–';
                            }else{
                                $text = '‡µ–ÕÕ°·≈È«‡™‘≠‡¢È“¡“∑”‰¡ πÈÕ¬„® !!';
                            }
                        }

                        if(strpos($textinput, '‰ª‰°≈Ê‡≈¬ —¥') !== false){
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

            if (strpos($textinput, '∫Õ≈') !== false) {
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

            if (strpos($textinput, '∂Ë“¬∑Õ¥') !== false || strpos($textinput, '™ËÕß') !== false) {
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

            if (strpos($textinput, '§–·ππ') !== false) {
                $text = '¥Ÿ‡Õ“‡Õß -> http://livescore.siamsport.co.th/widget/standing/1204';
                $case = 1;
            }

            if (strpos($textinput, ' “«') !== false) {
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

            if (strpos($textinput, '¢Õ‡æ≈ß') !== false) {
                $rand = rand(1, 29);
                switch ($rand) {
                    case 1: //pull me under non
                        $text = 'https://www.facebook.com/naiinon/videos/vb.100000271105382/1440978912587798/?type=3&theater';
                        $case = 1;
                        break;
                    case 2: //§‘¥∂÷ß silly fools non
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
                    case 12: // ‡√◊Õ‡≈Á°§«√ÕÕ°®“°Ω—Ëß non
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

            if (strpos($textinput, 'epic') !== false || strpos($textinput, 'Epic') !== false || strpos($textinput, 'EPIC') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'https://www.youtube.com/watch?v=gpisNZ7QuoE'; //Õ¬“°√ŸÈÀ—«„®µ—«‡Õß
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'https://www.youtube.com/watch?v=9XA6ngcwkVw'; //‰¡Ë‡ª≈’Ë¬π„®
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'https://www.youtube.com/watch?v=5MXzaw5Xe9w'; //Ω—π‰ª‡∂Õ–
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'https://www.youtube.com/watch?v=FLsLaU3Abc4'; //°“√√Õ§Õ¬
                    $case = 1;
                } else {
                    $text = 'https://www.youtube.com/watch?v=VX3oo0WPZug'; //‡Àß“¬‘Ëß°«Ë“‡Àß“
                    $case = 1;
                }
            }

            if (strpos($textinput, 'fuck') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'fuck æËÕß¡÷ß¥‘';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = 'Bullshit !!';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://i.ytimg.com/vi/m-KTUvkMEIw/maxresdefault.jpg';
                    $case = 2;
                } elseif ($rand == 3) {
                    $text = 'fuck ·¡Ëß¡÷ßÕ–';
                    $case = 1;
                } else {
                    $text = 'π’Ë¡÷ßÕ¬“°¡’‡√◊ËÕß„™ËËªË–';
                    $case = 1;
                }
            }

            if (strpos($textinput, '°–‡∑¬') !== false || strpos($textinput, '°√–‡∑¬') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) { //°√–‡∑¬‰¡Ë «¬
                    $img = 'https://scontent-fbkk5-7.us-fbcdn.net/v1/t.1-48/1426l78O9684I4108ZPH0J4S8_842023153_K1DlXQOI5DHP/dskvvc.qpjhg.xmwo/w/data/941/941285-img.rnda2g.2.jpg';
                    $case = 2;
                } elseif ($rand == 1) {
                    $img = 'https://scontent-fbkk5-7.us-fbcdn.net/v1/t.1-48/1426l78O9684I4108ZPH0J4S8_842023153_K1DlXQOI5DHP/dskvvc.qpjhg.xmwo/p/data/263/263989-535f8dd40ec2a.jpg';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://pbs.twimg.com/media/BrUGtjbCAAAaOae.jpg';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://pbs.twimg.com/media/CBo6hveUsAAqZCL.jpg';
                    $case = 2;
                } elseif ($rand == 4) { //‚¬™‘
                    $img = 'https://image.dek-d.com/27/0331/9080/118067941';
                    $case = 2;
                } elseif ($rand == 5) { //‡ø√¡
                    $img = 'https://1.bp.blogspot.com/-yJTg4mWLNIA/V4tREp20TsI/AAAAAAAAFUo/cUi9vOmT-9QV8WGiRMJpVmMQ1e2cfoFLgCLcB/s640/2016-07-17_16-05-07.png';
                    $case = 2;
                } else { //‡ø√¡
                    $img = 'https://f2.jarm.com/news/00/1c/rx/1470709798_20.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'À«¬') !== false || strpos($textinput, 'huay') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = '000 1000x1000 ‰ª';
                } elseif ($rand == 1) {
                    $text = '„§√¡’‡≈¢‡¥Á¥°Á∫Õ°°—π∫È“ß';
                } elseif ($rand == 2) {
                    $text = '®–√«¬À√◊Õ®–‡√’¬∫«–‡π’Ë¬';
                } elseif ($rand == 3) {
                    $text = '¡◊Õ∑”√«¬À«¬∑”®π';
                } elseif ($rand == 4) {
                    $text = '∫πÀ√◊Õ≈Ë“ß¥’≈–';
                } else {
                    $text = '√«¡ ”π—°Õ“®“√¬Ï http://www.lotteryhot.net';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ªÈ“‡¬') !== false || strpos($textinput, '‡¬‡≈π') !== false || strpos($textinput, '‡¬≈‡≈π') !== false || strpos($textinput, 'yellen') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $img = 'https://si.wsj.net/public/resources/images/BN-NM716_0412_4_P_20160411185052.jpg';
                    $case = 2;
                } elseif ($rand == 1) {
                    $text = '®–∑ÿ∫¡—Í¬√Õ∫π’È';
                    $case = 1;
                } elseif ($rand == 2) {
                    $img = 'https://cms.marketplace.org/sites/default/files/styles/primary-image-400x222/public/GettyImages-464370304.jpg?itok=pnyHQwQr';
                    $case = 2;
                } elseif ($rand == 3) {
                    $text = '¡—π®–≈ßÕ’° ... ‰¡Ë„™Ë∑Õßπ– À¡“¬∂÷ß UJ 555';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = '§ÿ≥ªÈ“¡À“¿—¬ ¡“∑’‰√∫√√≈—¬∑ÿ°∑’';
                    $case = 1;
                } else {
                    $text = 'æ“‰ª∑—«·°π‚≈°ÀπËÕ¬π–';
                    $case = 1;
                }
            }

            if (strpos($textinput, '∑√—¡') !== false || strpos($textinput, 'trump') !== false  || strpos($textinput, '∑√—È¡') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '§ÿ≥≈ÿßºŸÈ∑’Ë√—°§«“¡ ß∫ 55';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = '‰¥È¬‘π™◊ËÕπ’È·≈È«‡À¡◊Õπ®–‰¥È —¡º— Õ“°“»¢È“ß∫π';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'æ“‰ª∑—« «√√§ÏÀπËÕ¬§ÿ≥≈ÿß';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = '≈ÿß®–æ“‰ª∫‘π´—°°’Ë®ÿ¥¥’√Õ∫π’È';
                    $case = 1;
                } else {
                    $img = 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQO5I7lwKP0KPUnNjVQzn3DmFqTyYDY01HTzyNLxrttnwoG6lIR';
                    $case = 2;
                }
            }

            if (strpos($textinput, '§‘¥∂÷ß∫Õ∑') !== false || strpos($textinput, 'miss') !== false || strpos($textinput, 'miz') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '§‘¥∂÷ß„§√°—ππ–';
                } elseif ($rand == 1) {
                    $text = 'æŸ¥ß’È‡¢‘π‡≈¬¬¬';
                } elseif ($rand == 2) {
                    $text = '¡’„§√§‘¥∂÷ß MOD ∫È“ß¡—Í¬π–';
                } elseif ($rand == 3) {
                    $text = '§‘¥∂÷ß°Á‚∑√¡“ À√◊Õ®–·Õ¥‰≈πÏ¥’';
                } else {
                    $text = '§‘¥∂÷ß‡À¡◊Õπ°—π·À≈– ®ÿÍ∫Ê';
                }
                $case = 1;
            }

            if (strpos($textinput, '√—°∫Õ∑') !== false || strpos($textinput, 'love') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = '∫Õ°°—π·∫∫π’È §◊ππ’È∑’Ë‰Àπ°—π¥’';
                } elseif ($rand == 1) {
                    $text = '√—°‡§È“À√Õµ—«‡Õß';
                } elseif ($rand == 2) {
                    $text = '∫Õ°√—°°—πß’È‡≈¬À√Õ ‡¢‘ππ– §π‡¬Õ–·¬–';
                } elseif ($rand == 3) {
                    $text = '√—°„§√ ?? Mod „™È¡—Í¬';
                } else {
                    $text = '√—°‡À¡◊Õπ°—π·À≈–';
                }
                $case = 1;
            }

            if (strpos($textinput, '‰¡Ë√—°∫Õ∑') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = '‰¡Ë√—°°Á‰¡ËµÈÕß√—°';
                } elseif ($rand == 1) {
                    $text = '∑”‰¡æŸ¥·∫∫π’È≈–';
                } elseif ($rand == 2) {
                    $text = '·πË„®«Ë“‰¡Ë√—° ???';
                } elseif ($rand == 3) {
                    $text = '‰¡Ë‰¥È∑”Õ–‰√º‘¥´—°ÀπËÕ¬';
                } else {
                    $text = '°Á‰¡Ë‰¥ÈÕ¬“°√—°‡À¡◊Õπ°—π :p';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡°≈’¬¥∫Õ∑') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'Õ¬“°‡°≈’¬¥°Á‡°≈’¬¥‰ª';
                } elseif ($rand == 1) {
                    $text = '∑”‰¡æŸ¥·∫∫π’È≈–';
                } elseif ($rand == 2) {
                    $text = '·πË„®«Ë“‡°≈’¬¥ ???';
                } elseif ($rand == 3) {
                    $text = '‰¡Ë‰¥È∑”Õ–‰√º‘¥´—°ÀπËÕ¬';
                } else {
                    $text = '‡°≈’¬¥‡À¡◊Õπ°—π·À≈– 555';
                }
                $case = 1;
            }

            if (strpos($textinput, 'Õ’∫Õ∑') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'æŸ¥„ÀÈ¡—π¥’ÊÀπËÕ¬';
                } elseif ($rand == 1) {
                    $text = 'æŸ¥Õ’°—∫„§√';
                } elseif ($rand == 2) {
                    $text = 'æŸ¥‡æ√“–‡ªÁπ¡—Í¬';
                } elseif ($rand == 3) {
                    $text = '‡ªÁπ„§√¡“®“°‰Àπ∂÷ß„™È§”«Ë“ Õ’ Õ¬“°‚¥π ??';
                }
                $case = 1;
            }

            if (strpos($textinput, '‰ÕÈ∫Õ∑') !== false || strpos($textinput, '‰Õ∫Õ∑') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'æŸ¥„ÀÈ¡—π¥’ÊÀπËÕ¬';
                } elseif ($rand == 1) {
                    $text = 'æŸ¥‰ÕÈ°—∫„§√';
                } elseif ($rand == 2) {
                    $text = 'æŸ¥‡æ√“–‡ªÁπ¡—Í¬';
                } elseif ($rand == 3) {
                    $text = '‡ªÁπ„§√¡“®“°‰Àπ∂÷ß„™È§”«Ë“ ‰ÕÈ Õ¬“°‚¥π ??';
                }
                $case = 1;
            }

            if (strpos($textinput, '√«¬') !== false || strpos($textinput, 'rich') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = '§π‰Àπ√«¬¢Õ¥ŸÀπÈ“ÀπËÕ¬¥‘Í';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = '√«¬·≈È«°Á¡“·∫Ëß°—π„™È∫È“ß';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = '√«¬®√‘ßªË“«';
                    $case = 1;
                } elseif ($rand == 3) {
                    $img = 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSh862u6VgxFLw_TwAdB0C3FxORXZPyLKB1DBsrdkYmkTUDjpMyDw';
                    $case = 2;
                } elseif ($rand == 4) {
                    $text = '√«¬°—π®√‘ßæ«°π’È';
                    $case = 1;
                }elseif ($rand == 5) {
                    $text = ' ß —¬´—¥‰ª 10 lot ‡≈¬√«¬°—π‡≈¬';
                    $case = 1;
                } else {
                    $text = '‡Õ“¡“‡µ‘¡æÕ√ÏµÀπËÕ¬¥‘Í';
                    $case = 1;
                }
            }

            if (strpos($textinput, '‚µÍ¥') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '‚µÍ¥‰¥ÈπÈÕ¬ÕË– ∫“∑≈– 100 ‡Õß';
                } elseif ($rand == 1) {
                    $text = '¡’∑’‡¥Á¥°Áµ√ßÀπ—°Ê‰ª‡≈¬';
                } else {
                    $text = '™Õ∫‡≈Ëπµ√ß¡“°°«Ë“ÕË–';
                }
                $case = 1;
            }

            if (strpos($textinput, 'µ’π') !== false || strpos($textinput, 'µ√’π') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'æŸ¥µ’π°—∫„§√';
                } elseif ($rand == 1) {
                    $text = '‡Õ“‰«È¬Õ¥ÀπÈ“¡÷ßÕ–§√—∫';
                } elseif ($rand == 2) {
                    $text = 'µ’π ? ‡Õ“‰«È¬Õ¥ÀπÈ“¡÷ßÕË–';
                } elseif ($rand == 3) {
                    $text = '‡¥’Î¬«°Á¬—π‡¢È“„ÀÈ';
                } elseif ($rand == 4) {
                    $text = 'Õ¬“°Àß“¬À≈—ß«Ë“ß—Èπ ?';
                } else {
                    $text = '„§√®–°‘πµ’π ?';
                }
                $case = 1;
            }

            if (strpos($textinput, '°«πµ‘ß') !== false || strpos($textinput, ' ÷¥') !== false || strpos($textinput, '‡§«’È¬') !== false || strpos($textinput, '‡™’È¬') !== false || strpos($textinput, '°≈“°') !== false || strpos($textinput, '°√“°') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = '·Àπ–Ê ®–¥Ë“°Á¡“‡≈¬ ‰¡ËµÈÕß∑”‡ªÁπ‡π’¬π';
                } else {
                    $text = '°≈—«‚¥π¥Ë“°≈—∫≈– ‘ ‰¡Ë‰¥È‚ßËπ–';
                }
                $case = 1;
            }

            if (strpos($textinput, '‚ßË') !== false || strpos($textinput, 'stupid') !== false || strpos($textinput, 'Stupid') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '¡÷ßÕ–‚ßË';
                } elseif ($rand == 1) {
                    $text = '∑”‰¡µÈÕß‡Õ“ª¡¥ÈÕ¬µ—«‡Õß¡“æŸ¥ÕË–';
                } else {
                    $text = 'À¡“¬∂÷ßµ—«‡Õß„™ËªË– ?? °‘πª≈“´–π–®–‰¥È©≈“¥Ê';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡ ’¬¥“¬') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '‡ ’¬¥“¬¥’°«Ë“‡ ’¬„®';
                } elseif ($rand == 1) {
                    $text = '§«“¡ ”‡√Á®µÈÕß∑”´È”‰¥È ‰¡ËµÈÕß‰ª‡ ’¬¥“¬π–';
                } elseif ($rand == 2) {
                    $text = '‡ ’¬¥“¬∑”‰¡ ¡’‡«≈“„ÀÈ∑”°”‰√„πµ≈“¥µ—Èß‡¬Õ–·¬–';
                } else {
                    $text = '‰¡ËµÈÕß´’ ‡√‘Ë¡µÈπ„À¡Ë‰ª';
                }
                $case = 1;
            }

            if (strpos($textinput, '©‘∫À“¬') !== false || strpos($textinput, '©‘∫º“¬') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '©‘∫Õ–‰√∫È“ªË“«';
                } elseif ($rand == 1) {
                    $text = 'What the fuck !!!';
                } else {
                    $text = 'Õ–‰√„§√À“¬ À“¥‘Í';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡°Î“') !== false || strpos($textinput, '‰Ω«È') !== false || strpos($textinput, '¢¡—∫') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '≈Õß´—°µ—Èß¡—Í¬';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = '√∂∂—ßΩ—Ëß∏π√ŸÈ®—°ªË– ·««Ÿø√Õ«—πÀÕπ !!!';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = '‰ß ??? ‰¥È¢Ë“««Ë“ŒÕµÀ√Õ';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = 'Õ¬“°‚¥π¢¡—∫ªË–≈–';
                    $case = 1;
                } else{
                    $text = 'Õ¬“°®–‰Ω«È';
                    $case = 1;
                }
            }

            if (strpos($textinput, '‚¡È') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '‰¡Ë‰¥È‚¡È´—°ÀπËÕ¬';
                } elseif ($rand == 1) {
                    $text = '‰¡Ë„™Ë ¡√—°…Ïπ– ... ‰¡Ë‰¥È‚¡È 555';
                } else {
                    $text = '«Ë“„§√¢’È‚¡È ?';
                }
                $case = 1;
            }

            if (strpos($textinput, 'kickmod') !== false || strpos($textinput, 'Kickmod') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '‡¥’Î¬«®– kick §πæ‘¡æÏ°ËÕπ‡≈¬';
                } elseif ($rand == 1) {
                    $text = 'kick °Á‰¡Ë‰ª';
                } else {
                    $text = '∑”‰√ÕË– Õ¬“°‚¥π free kick «Ë“ß—Èπ';
                }
                $case = 1;
            }

            /*if (strpos($textinput, '∫Õ ∑') !== false || strpos($textinput, '∫ Õ∑') !== false || strpos($textinput, '∫ Õ ∑') !== false || strpos($textinput, '∫Õ∑') !== false || strpos($textinput, 'bot') !== false || strpos($textinput, 'Bot') !== false) {

                $rand = rand(0, 7);
                if($rand == 0){
                    $text = 'I am Artificial Intelligence. ·ª≈ÕÕ°¡—Í¬ ¥Ÿ®“°ÀπÈ“µ“·≈È«‰¡ËπË“®–‡¢È“„®';
                }elseif($rand == 1){
                    $text = '‡√’¬°®—ß‡≈¬∫Õ∑ ‡¥’Î¬«¢¡—∫´—°∑’¥’¡—Èß';
                }elseif($rand == 2){
                    $text = '∫Õ∑Õ–‰√ ‰Àπ„§√∫Õ∑';
                }elseif($rand == 3){
                    $text = '„§√∫Õ∑ ∫È“À√◊ÕªË“«';
                }elseif($rand == 4){
                    $text = '°Á∫Õ°Õ¬ŸË«Ë“‰¡Ë„™Ë∫Õ∑ ™—°À—«√ÈÕπ≈–π–';
                }elseif($rand == 5){
                    $text = 'æŸ¥¿“…“§π‰¡Ë√ŸÈ‡√◊ËÕß ?';
                }elseif($rand == 6){
                    $text = '‡ŒÈÕÕÕÕ ... ‡æ≈’¬°—∫æ«°π’È®√‘ßÊ';
                }else{
                    $text = '°Á∫Õ°Õ¬ŸËÀÈÕßπ’È‰¡Ë¡’∫Õ∑ ø—ß¿“…“§π‰¡Ë√ŸÈ‡√◊ËÕß‰ßÍ';
                }
                $case = 1;
            }*/

            if (strpos($textinput, '¡÷ß') !== false || strpos($textinput, '°Ÿ') !== false || strpos($textinput, '¡√÷ß') !== false || strpos($textinput, '‡¡‘ß') !== false || strpos($textinput, '‡¡√‘ß') !== false) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = '‡ÀÈ¬ !! æŸ¥®“„ÀÈ¡—π‡æ√“–ÊÀπËÕ¬';
                } elseif ($rand == 1) {
                    $text = '¡÷ß-°Ÿ °—∫„§√  π‘∑°—∫°Ÿ‰ßÍ';
                } elseif ($rand == 2) {
                    $text = 'Õ–‰√¢Õß¡÷ß«–';
                } elseif ($rand == 3) {
                    $text = '¡÷ß®–„™È¿“…“æËÕ¢ÿπ√“¡°—∫°Ÿ„™ËªË– ™—°À—«√ÈÕπ≈–π–';
                } elseif ($rand == 4) {
                    $text = '°Ÿ∫Õ°°’Ë§√—Èß≈–«Ë“„ÀÈæŸ¥¥’Ê';
                } elseif ($rand == 5) {
                    $text = 'Õ–‰√¡÷ß';
                } elseif ($rand == 6) {
                    $text = '¡÷ß®–æŸ¥°Ÿ-¡÷ß∑”‰¡«–';
                } else{
                    $text = 'æŸ¥¥’Ê‡ªÁπ¡—Í¬ —¥';
                }
                $case = 1;
            }

            if (strpos($textinput, '√«π') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '‰¡Ë‰¥È√«π ™Ë«ßπ’È¡÷πÊπ‘¥ÀπËÕ¬';
                } elseif ($rand == 1) {
                    $text = 'Õ“°“»¡—π√ÈÕπÕË–‡≈¬‰¡Ë§ËÕ¬ 100%';
                } elseif ($rand == 2) {
                    $text = '‡¡◊ËÕ§◊π°«Ë“®–πÕπ°Á‡™È“ ¡—«·µËπ—Ëß‡ΩÈ“°√“øÕ¬ŸË';
                }
                $case = 1;
            }

            if (strpos($textinput, 'À‘«') !== false) {
                $rand = rand(0, 20);
                if ($rand == 0) {
                    //°ÿÈß°√–‡∫◊ÈÕß
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/17265124_1476049672414055_204896673358791325_n.jpg?_nc_eui2=v1%3AAeGFpSQSTxiNRxpb4ZPXS3graB4ZL0RMPZWyscr7mpebsGOV1TD_ZVENIrtA8cO_yilMC5MXRqFhsCPFxrwP4RICSJGA9tO59u_sMqbSbqwSqrtzsinoe36W6wyEPgoTEG8&oh=0e742fe0278b25ba697e2495c965253d&oe=595A56C3';
                    $case = 2;
                } elseif ($rand == 1) {
                    //®‘È¡®ÿË¡
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16649137_1440526189299737_6370977755028050295_n.jpg?oh=59c1598edb3563d937c068e41e971dd2&oe=592F3F59';
                    $case = 2;
                } elseif ($rand == 2) {
                    //ª≈“™ËÕπ
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17156104_1470691309616558_7660918045911158451_n.jpg?oh=b9d6f5a7373a77ee1a4d0638457e591e&oe=5971EECA';
                    $case = 2;
                } elseif ($rand == 3) {
                    //À¡Ÿ¬Ë“ß
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15094377_1341612985857725_8235767697960646784_n.jpg?oh=10c0d7a9dbd08f6ce33bab6f98e074fd&oe=596BBBD4';
                    $case = 2;
                } elseif ($rand == 4) {
                    //¢È“«‰¢Ë¢Èπ
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/17103490_1463560273662995_7810622859375386342_n.jpg?_nc_eui2=v1%3AAeHCvLqU3mSYvgO5JDIVuUkLe9EzUCtNLra7T31RrSLeSODed-6nFS84Sq90oGgjHDCDCWc-gHWUb_Xn8X_ye_SToRHjHfnDApAEdMI5LiW_5QuMssshw62nN5zHNeV7VmA&oh=f795c56e4969c8214aa004c28d99679e&oe=59548047';
                    $case = 2;
                } elseif ($rand == 5) {
                    //µÈ¡¬”°ÿÈß
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17424960_1485227591496263_9094034156353889153_n.jpg?oh=f866cc9b359195a632c86459a5373520&oe=5972284C';
                    $case = 2;
                } elseif ($rand == 6) {
                    //æ‘´´Ë“
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14495234_1305286336157057_8736988554956258994_n.jpg?_nc_eui2=v1%3AAeFvpaRfaQWpjdsbN1-9L9Vk1RgpI-1reHRqm1mvG3Jg30_5dVoHs9OH71AcBll2d4PNiD8Kdv9VcIb8fRNLte4guz1uaIZWuY33Lg9QPWrKDtbX0n7mobZrXrRtwG7KkSc&oh=a3a2178bf090801ca8d14531ea4e3f56&oe=5925D590';
                    $case = 2;
                } elseif ($rand == 7) {
                    // È¡µ”ªŸ
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15283911_1361427370542953_7761482730005432833_n.jpg?_nc_eui2=v1%3AAeG04oMKnr0W2psGRE1Ikf4UJLaf410XsMhUVRR5q0-9QYMbGaljmN2DJpe2CXVe7CnzssgV9adesms8eiWPsniFd3ILYv4LpoOkRLBWGkdC0-laJd38nzCaDWLCJ9WYC28&oh=b30aa391507571c1bedef57b15ccf637&oe=5963960B';
                    $case = 2;
                } elseif ($rand == 8) {
                    //ª’°‰°Ë∑Õ¥
                    $img = 'https://3.bp.blogspot.com/-u9QmBob0h3o/VtkSVOTRUvI/AAAAAAAAAmM/AouDAlu0bR8/s400/%25E0%25B8%259B%25E0%25B8%25B5%25E0%25B8%2581%25E0%25B9%2584%25E0%25B8%2581%25E0%25B9%2588%25E0%25B8%2597%25E0%25B8%25AD%25E0%25B8%2594%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%259B%25E0%25B8%25A5%25E0%25B8%25B2_Fried%2Bchicken%2Bwing%2Bsauce.jpg';
                    $case = 2;
                } elseif ($rand == 9) {
                    //°ÿÈß‡º“
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15037097_1342648472420843_5223539816342288929_n.jpg?_nc_eui2=v1%3AAeHOwYti5iVuowj-c7cOevqsJ0jf-9ha_uPlIxTf8K8S8d9xlGxmCmlpaX4okhuhqZb1hdOszbcpcr8kc-9aoQ6fDZdlYMn6auIZmrc7fqaD58HGAuhJiB9C0oDKYtmxhGQ&oh=d57c162254c4a9f405b1ba26b1b00a27&oe=59693763';
                    $case = 2;
                } elseif ($rand == 10) {
                    //‰°ËªÍÕª
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/16681712_1451438271541862_6825978108435665747_n.jpg?_nc_eui2=v1%3AAeFF_EqcZj5d4zF17chNdlKrAE07gS-8I37k3WTEEEsMoEh3rm7OulxBJA5tBtP-5Kx-WvUiaDcd_kzN5jVoc5FM-9Wk88YxT6DEaUpuX1XYl23v9eoSHuYUFKDGQzEWupo&oh=232d9f34ace74412039ed58534ea03e8&oe=59570945';
                    $case = 2;
                } elseif ($rand == 11) {
                    //πÈ”·¢Áß„ 
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15747600_1393550303997326_9089658969736741474_n.jpg?_nc_eui2=v1%3AAeGy-OD_V7UrJJYgfDpLFcE2siCxQGEitNcXt9dftS0X97sRyBpxQs__BP-uy0Ic3IpMfyDsW_3fghvGh_Cq8rj4s1hutIT3_VgD5opfsNdEromZxgnAnrseJPA8APDV8TE&oh=3a9007c7ac5def2a346d586814cef4c0&oe=5961BD8A';
                    $case = 2;
                } elseif ($rand == 12) {
                    //‰¢Ë°√–∑–
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17264695_1474786209207068_4295172918554949738_n.jpg?oh=241f3969a6e8a4e29fb41f34c0eba878&oe=5964F26F';
                    $case = 2;
                } elseif ($rand == 13) {
                    //À¡Ÿ´’Õ‘Í«
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/13692523_1238803829471975_3260471915492857128_n.jpg?_nc_eui2=v1%3AAeHNoU5fI4ArJnIOdmAagk0J8kIelEyjpb_9MTiA18DKSHWmQ5jr1w8nFdRAyqWDlcB6KrwqIFeQYML7gwyf9XxsctMTAw2NbA8pwz7DpLdyKp8bP2APKMmAt2uWtSWV5zg&oh=777292fbb415865af77c1937c0bf984d&oe=5972EC44';
                    $case = 2;
                } elseif ($rand == 14) {
                    //·æπ‡§È°
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14980612_1341613305857693_8945739289078424763_n.jpg?_nc_eui2=v1%3AAeFUF3mXBczyX9d4YUa4iX-0AEh1jrlgn99qc6Y_l5fpRLhEtRPzhWUOpo0JoUnuz1yrUUCepLhsrPDb0qalIbyxczFbrmZgyWUAZdk0WaQjWtRoibigLuY642IrDA9eVwY&oh=446a57ba44b65c144a8a869ce2faceb3&oe=59283395';
                    $case = 2;
                } elseif ($rand == 15) {
                    //™ÿ¥Õ“À“√‡™È“
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17021898_1463560270329662_4250689607678676065_n.jpg?oh=afc180bc30089eaf5ff040ccfbc875e7&oe=5966F552';
                    $case = 2;
                } elseif ($rand == 16) {
                    //¬”«ÿÈπ‡ Èπ
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16105742_1413775201974836_575481321260019986_n.jpg?oh=afce246cbb7dbaadf91b5f5945aec74e&oe=5950D630';
                    $case = 2;
                } elseif ($rand == 17) {
                    //¢È“«¡—π‰°Ë
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15822830_1398785470140476_4077958426210198193_n.jpg?oh=91dff053b4da292708bb4632ed5c933a&oe=5950984C';
                    $case = 2;
                } elseif ($rand == 18) {
                    //°ÿÈß¡—ß°√
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15253486_1361426980542992_5388301921217323842_n.jpg?oh=a9bc05b7fecdb719b05fba65c6702b86&oe=5953025E';
                    $case = 2;
                } elseif ($rand == 19) {
                    //ÀÕ¬‡™≈≈Ï
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/14368762_1292834917402199_2041695389417822745_n.jpg?oh=aa60e07e76689db14f0a9c75c8f258b5&oe=596C2FEF';
                    $case = 2;
                } else {
                    $text = '°‘πÕ–‰√°—π¥’≈–';
                    $case = 1;
                }
            }

            if (strpos($textinput, '‡µ’Î¬«') !== false) {
                $rand = rand(0, 10);
                if ($rand == 0) {
                    $text = '°Î«¬‡µ’Î¬«À¡ŸπÈ”µ°„ Ë‰¢Ë√È“πæ’Ëππ®—¥‰ª';
                    $case = 1;
                } elseif ($rand == 1) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/13920658_519863781555401_3026708436745190096_n.jpg?oh=765e230908c1d0acbfae65c6ce7035ce&oe=594CBDB4';
                    $case = 2;
                } elseif ($rand == 2) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/17759933_622215077986937_7561433539968645256_n.jpg?oh=bf322fa4cb01123ddc698257cbbb5dad&oe=594CD153';
                    $case = 2;
                } elseif ($rand == 3) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/17798986_621653594709752_8635109469633504184_n.jpg?oh=f770a552924938b27dc3108f6844d8ed&oe=598BF9D8';
                    $case = 2;
                } elseif ($rand == 4) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/15672541_577039999171112_837219844315576863_n.jpg?oh=038ec78495578506a59e58a7a79725bf&oe=5980E59C';
                    $case = 2;
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/14732122_557620264446419_3272377450182637742_n.jpg?oh=5de6019353dd10b4433c06e661af8c20&oe=598F3162';
                    $case = 2;
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/14690900_550455421829570_544487863322192769_n.jpg?oh=dd1e9b5ee24376025ecefcd7085b7528&oe=5992B101';
                    $case = 2;
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/13082615_488131831395263_4384544117165089775_n.jpg?oh=d073762ba76400f9b667590b420a3742&oe=59926597';
                    $case = 2;
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t31.0-8/12363150_443535975854849_1520666602729577864_o.jpg?oh=06811f3288255e51fa9135cb4d4ee65c&oe=5994C51F';
                    $case = 2;
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/11898908_418731475001966_2588502630232562855_n.jpg?oh=ea83cd0ad13178e693584851c572182e&oe=59948544';
                    $case = 2;
                } else {
                    $text = '‰ª‡≈¬√È“πæ’Ëππ∑’Ë ÿæ√√≥∫ÿ√’ Õ¬Ë“ß‡¥Á¥';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'Õ“®“√¬ÏÀ¬°') !== false) {
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
                    $text = 'À“√Ÿª¬“°ÀπËÕ¬π– ‡ªÁπ§π‰¡Ë¬Õ¡‡ª‘¥‡º¬µ—«µπ 555';
                    $case = 1;
                }
            }

            /*if ( strpos($textinput, 'Õ“®“√¬Ïππ') !== false ) {
                $rand = rand(0, 5);
                if($rand == 0){
                    $text = '∂π—¥„™È fibo + À≈—°®‘µ«‘∑¬“‡»√…∞»“ µ√Ï „§√ π„®‰ª Õ∫∂“¡‰¥È';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16682017_1442764355742587_3708055595342157983_n.jpg?oh=8971bd4d3cc3b67a54ee5c17d5fcc902&oe=595657D9';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/1917063_103156016370101_5458952_n.jpg?oh=1f51bbc443d6a4daa0ddbe91c921eabc&oe=5969CE8C';
                    $case = 2;
                }else {
                    $text = '™«π‰ª´ÈÕ¡¥πµ√’¥’°«Ë“ 55';
                    $case = 1;
                }
            }*/

            if (strpos($textinput, '·ÕÁ§') !== false || strpos($textinput, '·Õ§') !== false || strpos($textinput, 'acme') !== false) {
                $rand = rand(0, 9);
                if ($rand == 0) {
                    $text = 'À¡“¬∂÷ß §ÿ≥«√«—≤πÏ π“§·π«¥’ „™Ë¡—Í¬';
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
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/12661835_1036387546404375_2097545346374459893_n.jpg?oh=db3c4574a6f77caa6095c715d0e59451&oe=598DF52E';
                    $case = 2;
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/11236424_941302239246240_6919555524224363128_n.jpg?oh=7df20b53c33f7c83377017d74e4b4348&oe=597EF86B';
                    $case = 2;
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t31.0-8/s960x960/1075597_578427552200379_1553780447_o.jpg?oh=a997005c57b8a4396a2298bdff5959e1&oe=5986E89F';
                    $case = 2;
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/17634434_1377398558969937_3946440824920587815_n.jpg?oh=b9764007a591e619305f3d61731b9f6c&oe=5991B451';
                    $case = 2;
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/15542245_1275607242482403_2429329037166609924_n.jpg?oh=16406b42cececdfab03a87afe978d7e5&oe=59897FB6';
                    $case = 2;
                } else {
                    $text = '‡ªÁπÕ“®“√¬Ï∑’Ëæ«°‡√“‡§“√æπ—∫∂◊Õ';
                    $case = 1;
                }

            }

            if (strpos($textinput, 'Õ“®“√¬Ï‡¥’¬√Ï') !== false) {
                $rand = rand(0, 9);
                if ($rand == 0) {
                    $text = 'À¡“¬∂÷ß §ÿ≥ √“«ÿ≤‘ ¡Ë«ß™Ÿ „™Ë¡—Í¬';
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
                } elseif ($rand == 5) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/17342477_10155104394162354_4121161709451174937_n.jpg?oh=112aa881a53252a1552e684aaac8cce3&oe=59925150';
                    $case = 2;
                } elseif ($rand == 6) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/14045967_10154430753372354_8639906337455271343_n.jpg?oh=8827379d3f7f1ab182037a5c79e86c91&oe=59981F92';
                    $case = 2;
                } elseif ($rand == 7) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/13263910_10154190861142354_8397028858465081773_n.jpg?oh=ee29370dc645945dc84350b2ed79b0c7&oe=59519E42';
                    $case = 2;
                } elseif ($rand == 8) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/13226652_10154185379792354_2113191577035189210_n.jpg?oh=c9644011228d684df10056ae7d364afc&oe=597B5287';
                    $case = 2;
                } elseif ($rand == 9) {
                    $img = 'https://scontent.fbkk5-5.fna.fbcdn.net/v/t1.0-9/12923135_10154100189882354_7011759519418963010_n.jpg?oh=6de08123ece2d4dd49a04f4f8bfce755&oe=597C0F43';
                    $case = 2;
                } else {
                    $text = '‡ªÁπÕ“®“√¬Ï∑’Ë‡°Ëß¡“°„π°“√«‘‡§√“–ÀÏµ≈“¥∑Õß§” „§√Õ¬“°‰¥È§«“¡√ŸÈÕ–‰√ Õ∫∂“¡‰¥È‡≈¬';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'Õ“®“√¬Ï·¡π') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'Õ.·¡π ·øππË“√—° ^^';
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
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/16142550_10210594984963108_1211239256004129371_n.jpg?oh=372de61dec066ab7fd55adca70fee5c2&oe=5951EF77';
                    $case = 2;
                } else {
                    $text = '√.µ.¥√.Õ¿‘∏—™ ‡ “–°“√ ‡ªÁπ‰ß ... ®—¥‡µÁ¡„ÀÈÀπËÕ¬ 555';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'µŸË') !== false || strpos($textinput, 'ª√–¬ÿ∑') !== false || strpos($textinput, '®—π∑√Ï‚Õ™“') !== false || strpos($textinput, '®—π∑√‚Õ™“') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = '‡Õ‘Ë¡¡¡...ß“ππ’È mod ®–‰¡Ë¬ÿËß 5555';
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
                    $text = '√–«—ß∫‘ππ– 55';
                    $case = 1;
                }
            }

            if (strpos($textinput, '∫‘π') !== false) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = '‰ª¥“«‰´¬Ë“‡≈¬¡—Í¬';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = '1000 ®ÿ¥‰ª';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'panic À√◊ÕªË“«';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = ' ß —¬®–‰ª¥“«π“·¡Í°';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = 'µÈ“πµËÕ‰ª√“§“‡∑Ë“‰À√Ë Sell  «π‡≈¬¥’¡—Èß 555';
                    $case = 1;
                } elseif ($rand == 5) {
                    $text = '∫‘π´—°°’Ë®ÿ¥¥’≈–';
                    $case = 1;
                } elseif ($rand == 6) {
                    $text = '°‘π‡µÁ¡·∑Ëß¡—Í¬π—Ëπ';
                    $case = 1;
                } elseif ($rand == 7) {
                    $text = '‰ª√Õ¥“«æ≈Ÿ‚µ·ªª';
                    $case = 1;
                } else {
                    $img = 'https://i.ytimg.com/vi/DUnO7weCfdM/maxresdefault.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, '∑ÿ∫') !== false) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = ' ß —¬®–‰ª·°π‚≈°';
                    $case = 1;
                } elseif ($rand == 1) {
                    $text = '·¥ß‡ªÁπ·°ßæ–·πß·≈È«';
                    $case = 1;
                } elseif ($rand == 2) {
                    $text = 'panic À√◊ÕªË“«';
                    $case = 1;
                } elseif ($rand == 3) {
                    $text = '∑ÿ∫Àπ—°Ê';
                    $case = 1;
                } elseif ($rand == 4) {
                    $text = '·π«√—∫µËÕ‰ª√“§“‡∑Ë“‰À√Ë Buy  «π‡≈¬¥’¡—È¬';
                    $case = 1;
                } elseif ($rand == 5) {
                    $text = '‡Õ“„ÀÈ¡‘¥ 555';
                    $case = 1;
                } elseif ($rand == 6) {
                    $text = '°‘π‡µÁ¡·∑Ëß¡—Í¬≈–π—Ëπ';
                    $case = 1;
                } elseif ($rand == 7) {
                    $text = 'Follow µ“¡‡≈¬¥’¡—Í¬π– 555';
                    $case = 1;
                } else {
                    $img = 'https://s-media-cache-ak0.pinimg.com/originals/67/ff/5b/67ff5b84711240eb6361bc4e4094a890.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, '∑Õß§”') !== false || strpos($textinput, 'gold') !== false || strpos($textinput, 'xau') !== false || strpos($textinput, 'Xau') !== false || strpos($textinput, 'XAU') !== false || strpos($textinput, 'Gold') !== false || strpos($textinput, 'GOLD') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = 'buy À√◊Õ sell ¥’≈–';
                } elseif ($rand == 1) {
                    $text = '™Ë«ßπ’È‡À¡◊Õπ®–º—πº«π¡—Í¬';
                } elseif ($rand == 2) {
                    $text = '«—ππ’È SPDR ‡∑¢“¬À√◊Õ‡¢È“´◊ÈÕÕË–';
                } elseif ($rand == 3) {
                    $text = '√“§“¡—π®–‰ª∑“ß‰Àπ¢Õß¡—π‡π’Ë¬';
                } elseif ($rand == 4) {
                    $text = '«—ππ’È¡’¢Ë“«Õ–‰√ Ëßº≈°√–∑∫°—∫¡—π∫È“ß ‡™Á§ÀπËÕ¬';
                } elseif ($rand == 5) {
                    $text = 'æ—°∑Õß‰ª‡≈Ëπ§ŸË‡ß‘π°—π∫È“ß¡—Í¬';
                } else {
                    $text = 'µÕππ’È‡≈ËπÀπÈ“‰Àπ°—π';
                }
                $case = 1;
            }

            if ( strpos($textinput, 'UJ') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'buy À√◊Õ sell ¥’≈–';
                } elseif ($rand == 1) {
                    $text = '™Ë«ßπ’È‡À¡◊Õπ®–º—πº«π¡—Í¬';
                } elseif ($rand == 2) {
                    $text = '«—ππ’È usdx ‡ªÁπ‰ß∫È“ß';
                } elseif ($rand == 3) {
                    $text = '‡À¡◊Õπ®–‡≈Ëπ¬“°®—ß™Ë«ßπ’È';
                } elseif ($rand == 4) {
                    $text = '«—ππ’È‰¡Ë¡’ÕÕ‡¥Õ√Ï‡≈¬ÕË–';
                } else {
                    $text = 'µÕππ’È‡≈ËπÀπÈ“‰Àπ°—π';
                }
                $case = 1;
            }

            if (strpos($textinput, 'Sell') !== false || strpos($textinput, 'Buy') !== false) {
                $rand = rand(0, 7);
                if ($rand == 0) {
                    $text = '°’Ë lot ¥’';
                } elseif ($rand == 1) {
                    $text = '100 Lot ‡≈¬¥’¡—Í¬';
                } elseif ($rand == 2) {
                    $text = '‡∑ µ≈“¥´—° 1 Lot';
                } elseif ($rand == 3) {
                    $text = '‡∑  High À√◊Õ Low ¥’≈–';
                } elseif ($rand == 4) {
                    $text = '°¥´—°‡∑Ë“‰À√Ë«Ë“¡“';
                } elseif ($rand == 5) {
                    $text = 'æ—°°—π∫È“ß°Á‰¥È ®–‡¢È“ÕÕ‡¥Õ√Ï°—π∑—Èß«—π‡≈¬À√◊Õ‰ß';
                } elseif ($rand == 6) {
                    $text = '«‘‡§√“–ÀÏ·ªª«Ë“®– buy À√◊Õ sell ¥’';
                } else {
                    $text = 'Õ¬“°®–°¥·µË„®‰¡Ë°≈È“ 55';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ªÕ¥') !== false || strpos($textinput, 'ªÁÕ¥') !== false || strpos($textinput, 'ªÍÕ¥') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '‰¡Ë‰¥ÈªÁÕ¥À«Ë–';
                } elseif ($rand == 1) {
                    $text = '«Ë“„§√ªÍÕ¥ ´—°µ—Èß¡—Í¬';
                } elseif ($rand == 2) {
                    $text = '¥Ÿ‡≈‡«≈¥È«¬ √ÿËππ’È‰¡Ë¡’ªÍÕ¥';
                } else {
                    $text = '»‘…¬Ï„§√¥Ÿ¥È«¬  –°¥‰¡Ë‡ªÁππ–§”π’ÈÕË–';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ßË«ß') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'ßË«ß°Á‰ªπÕπ ‘';
                } elseif ($rand == 1) {
                    $text = '∑”Õ–‰√‰¡ËÀ≈—∫‰¡ËπÕπ ‡ΩÈ“°√“ø ?';
                } elseif ($rand == 2) {
                    $text = '‡Õ“æÕ√Ïµ¡“ ‡¥’Î¬«°¥„ÀÈ 1 lot ®–‰¥ÈÀ“¬ßË«ß 55';
                } elseif ($rand == 3) {
                    $text = '‰¡Ë‡§¬πÕπ‰ßÍ';
                } elseif ($rand == 4) {
                    $text = '®–√’∫πÕπ‰ª‰Àπ';
                } else {
                    $text = 'æ—°∫È“ßÕ–‰√∫È“ß ‰¡ËµÈÕß‡ΩÈ“¡“°À√Õ°°√“øÕË–';
                }
                $case = 1;
            }

            if (strpos($textinput, 'µ‘¥∫“¬') !== false || strpos($textinput, 'µ‘¥‰¡È∫“¬') !== false || strpos($textinput, 'µ‘¥buy') !== false || strpos($textinput, 'µ‘¥‰¡Èbuy') !== false || strpos($textinput, 'µ‘¥‰¡È buy') !== false) {
                $text = '·°È‰¡È ‘ ‰ªÀ“®ÿ¥°≈—∫µ—«·≈È«µ—Èß buy limit ‰«È';
                $case = 1;
            }

            if (strpos($textinput, 'µ‘¥‡´≈') !== false || strpos($textinput, 'µ‘¥‰¡È‡´≈') !== false || strpos($textinput, 'µ‘¥sell') !== false || strpos($textinput, 'µ‘¥‰¡Èsell') !== false || strpos($textinput, 'µ‘¥‰¡È sell') !== false) {
                $text = '·°È‰¡È ‘ ‰ªÀ“®ÿ¥°≈—∫µ—«·≈È«µ—Èß sell limit ‰«È';
                $case = 1;
            }

            if (strpos($textinput, '‡Œ¥') !== false || strpos($textinput, '‡Œ®') !== false || strpos($textinput, 'hedg') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = '‡ªÁπ ‘Ëß∑’Ë‰¡ËπË“∑” ·µË∂È“¡—π®”‡ªÁπ°Á∑”‰ª‡∂Õ–';
                } else {
                    $text = '∂÷ß°—∫‡Œ¥‡≈¬À√Õ ¢Õ„ÀÈª≈¥‰¥È‰«Êπ–';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡Àπ◊ËÕ¬') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'À“°‡Àπ◊ËÕ¬π—°¢Õ®ßÀ¬ÿ¥æ—°‡ ’¬°ËÕπ Õ¬Ë“„®√ÈÕπ√’∫‰ª‡¥’Î¬«¡—π‰¡Ë‡¢È“∑’';
                } elseif ($rand == 1) {
                    $text = '‡Àπ◊ËÕ¬°Á‰ªæ—°ºËÕπ‰ª';
                } elseif ($rand == 2) {
                    $text = '∑”Õ–‰√¡“‡Àπ◊ËÕ¬';
                } else {
                    $text = '‡Àπ◊ËÕ¬¡“°¡—Í¬';
                }
                $case = 1;
            }

            if (strpos($textinput, '®ÿ¥°≈—∫µ—«') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '®ÿ¥°≈—∫µ—« §◊Õ ®ÿ¥∑’Ë‡¡◊ËÕ√“§“‰¥È«‘Ëß¡“™π·≈È« ¡’ "·π«‚πÈ¡" ∑’Ë®–°≈—∫µ—«';
                } elseif ($rand == 1) {
                    $text = ' —ß‡°µÿ°√“ø¥È«¬π–«Ë“¡“™π·≈È«‡¥ÈßÀ√◊Õ·§Ë¡“®ËÕ';
                } else {
                    $img = 'https://img.in.th/images/4f495cb2b586e6bbcf68ba057a8e2c4a.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, '·π«µÈ“π®√‘ß') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = '·π«µÈ“π®√‘ß §◊Õ ‡π◊ÈÕ‡∑’¬π';
                } else {
                    $img = 'https://img.in.th/images/4f495cb2b586e6bbcf68ba057a8e2c4a.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, '·π«µÈ“πÀ≈Õ°') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = '·π«µÈ“πÀ≈Õ° §◊Õ ‰ È‡∑’¬π';
                } else {
                    $img = 'https://img.in.th/images/4f495cb2b586e6bbcf68ba057a8e2c4a.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, '·π«µÈ“π ”§—≠') !== false) {
                $text = '·π«µÈ“π ”§—≠ §◊Õ ·π«√“§“∑’Ë°√“ø‰¥È¡“™π∫ËÕ¬Ê·≈È«‰¡Ë “¡“√∂ºË“π‰ª‰¥È';
                $case = 1;
            }

            if (strpos($textinput, '‡¥Èß') !== false) {
                $text = '°√“ø™π·π«µÈ“π·≈È«‡¥Èß„™Ë¡—Í¬ ? · ¥ß«Ë“·π«µÈ“π·¢Áß·√ß ·µË∂È“™π¡“°Ê°Á¡’ ‘∑∏‘Ï∑’Ë®–·µ°‰¥È';
                $case = 1;
            }

            if (strpos($textinput, '®ËÕ') !== false) {
                $text = '°√“ø¡“®ËÕ·π«µÈ“π·≈È«À√Õ ∂È“„§√¡’ÕÕ‡¥Õ√ÏÕ¬ŸË√’∫‡§≈’¬√Ï∑‘Èßπ– ¡—π¡’‚Õ°“ ∑’Ë®–∑–≈ÿ‰¥È‡≈¬';
                $case = 1;
            }

            if (strpos($textinput, 'adp-nonfarm') !== false || strpos($textinput, 'Adp-Nonfarm') !== false || strpos($textinput, 'ADP-Nonfarm') !== false ) {
                $text = 'ADP-Nonfarm §◊Õ √“¬ß“π°“√®È“ßß“π·ÀËß™“µ‘‡Õ¥’æ’ ®–«—¥§Ë“°“√‡ª≈’Ë¬π·ª≈ß√“¬‡¥◊Õπ‡æ◊ËÕ∑√“∫∂÷ß°“√®È“ßß“π¿“§‡Õ°™π∑’Ë‰¡Ë„™Ë‡°…µ√°√√¡´÷Ëß‰¥È¬÷¥µ“¡¢ÈÕ¡Ÿ≈°“√§‘¥‡ß‘π‡¥◊Õπ∑’Ë‰¥È¢ÈÕ¡Ÿ≈®“°°‘®°“√∏ÿ√°‘®µË“ßÊ ª√–¡“≥ 400,000 ·ÀËß∑—Ë«∑—Èß À√—∞Õ‡¡√‘°“';
                $case = 1;
            }

            if (strpos($textinput, 'nonfarm') !== false || strpos($textinput, 'non-farm') !== false || strpos($textinput, 'Non-Farm') !== false || strpos($textinput, 'Non-farm') !== false  ) {
                $text = 'Non-farm payroll §◊Õ √“¬ß“πµ—«‡≈¢°“√®È“ßß“ππÕ°¿“§°“√‡°…µ√ ®–«—¥§Ë“°“√‡ª≈’Ë¬π·ª≈ß„π®”π«π¢ÕßºŸÈ∑’Ë¡’ß“π∑”„π√–À«Ë“ß™Ë«ß‡¥◊Õπ°ËÕπÀπÈ“π’È‚¥¬‰¡Ë√«¡Õÿµ “À°√√¡¿“§°“√‡°…µ√ °“√ √È“ßß“ππ—Èπ‡ªÁπ¥—™π’∑’Ë ”§—≠∑’Ë∫Ëß™’È∂÷ß°“√„™È®Ë“¬¢ÕßºŸÈ∫√‘‚¿§´÷Ëß∂◊Õ‡ªÁπ Ë«π∑’Ë¡“°∑’Ë ÿ¥¢Õß°‘®°√√¡∑“ß‡»√…∞°‘®';
                $case = 1;
            }

            if (strpos($textinput, ' ≈—∫‰¡È') !== false) {
                $text = '°“√ ≈—∫‰¡È‡≈Ëπ §◊Õ °“√∑’Ë‡√“ÕÕ°ÕÕ‡¥Õ√Ï‰ª·≈È« 1 ÕÕ‡¥Õ√Ï ·≈È«°√“ø‡°‘¥«‘Ëß «π∑“ß∑”„ÀÈ‡√“µÈÕß‰ªÕÕ°ÕÕ‡¥Õ√Ï‡æ‘Ë¡Õ’° 1 ÕÕ‡¥Õ√Ï ‡¡◊ËÕ°√“ø‰¥È«‘Ëß°≈—∫≈ß¡“∑’ËÕÕ‡¥Õ√Ï·√°Õ’°§√—Èß ‡√“®–∑”°“√ª‘¥ÕÕ‡¥Õ√Ïπ—Èπ∑—π∑’ ´÷Ëß®–‡À≈◊ÕÕÕ‡¥Õ√Ï∑’Ë 2 ´÷Ëß√“§“®–¥’°«Ë“';
                $case = 1;
            }

            if (strpos($textinput, 'xlot') !== false || strpos($textinput, 'x-lot') !== false || strpos($textinput, 'X-lot') !== false || strpos($textinput, 'X-Lot') !== false || strpos($textinput, 'Xlot') !== false || strpos($textinput, 'XLot') !== false) {
                $text = 'X-lot ‡ªÁπ«‘∏’∑’Ë„™È„π°“√À“‰¡È√“§“¥’∑’Ë ÿ¥∑—Èß„π°√≥’∂Ÿ°∑“ß·≈–º‘¥∑“ß
                    
«‘∏’°“√ÕÕ°ÕÕ‡¥Õ√Ïµ“¡∑ƒ…Æ’ x-lot
                    
‰¡È∑’Ë 1 size lot = x
‰¡È∑’Ë 2 size lot = x
‰¡È∑’Ë 3 size lot = x/2
‰¡È∑’Ë 4 size lot = x/2
‰¡È∑’Ë 5 size lot = x
‰¡È∑’Ë 6 size lot = x

§”π«≥ x ‚¥¬π”∑ÿπ‰ªÀ“√ 10000 ·≈È«π”º≈≈—æ∏Ï‰ªÀ“√ 5 º≈≈—æ∏Ï ÿ¥∑È“¬ §◊Õ ®”π«π x lot';
                $case = 1;
            }

            if (strpos($textinput, '‡æ≈’¬') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '·Àπ–Ê ‰ª∑”Õ–‰√¡“‡æ≈’¬';
                } elseif ($rand == 1) {
                    $text = '‡æ≈’¬°√“øÀ√◊Õ‡æ≈’¬Õ–‰√';
                } elseif ($rand == 2) {
                    $text = '‡∫’¬√Ï´—°ªÎÕß¡—Í¬‡≈◊Õ¥®–‰¥È Ÿ∫©’¥';
                } elseif ($rand == 3) {
                    $text = '‰ª∑”Õ–‰√¡“π– ‡ÕÍ– ...';
                }  else {
                    $text = 'À≈—∫πÕπ∫È“ßÕ¬Ë“À¡°¡ÿËπ 555';
                }
                $case = 1;
            }

            if (strpos($textinput, 'sideway') !== false || strpos($textinput, 'Sideway') !== false) {

                $text = 'µ≈“¥·∫∫ Sideway §◊Õ  ¿“«–∑’Ëµ≈“¥‡≈◊Õ°∑‘»∑“ß‰¡Ë‰¥È«Ë“®–¢÷ÈπÀ√◊Õ®–≈ß «‘ËßÕ¬ŸË„π°√Õ∫ π—°≈ß∑ÿπ Ë«π¡“°À“°‡®Õ ¿“«–·∫∫π’ÈÕ“®‰¡Ë‡¢È“‡∑√¥À√◊Õ∂È“‡∑√¥°Á‡ªÁπ·∫∫∑”°”‰√√–¬– —Èπ µÈÕß„™Èª√– ∫°“√≥Ï‡æ√“–µÈÕß‡¢È“‡√Á«ÕÕ°‡√Á« À“°™È“Õ“®‚¥π°√“ø≈“°‰¥È';
                $case = 1;
            }

            if (strpos($textinput, '∫“¬À√◊Õ‡´≈') !== false || strpos($textinput, '∫“¬ À√◊Õ ‡´≈') !== false || strpos($textinput, '‡´≈ À√◊Õ ∫“¬') !== false || strpos($textinput, '‡´≈À√◊Õ∫“¬') !== false  ) {
                $text = '‡™Á§‡Àµÿº≈„π°“√‡¢È“ÕÕ‡¥Õ√Ï ‘

1. ‡™Á§¢Ë“«µË“ßÊ∑’Ë¡’º≈µËÕ °ÿ≈‡ß‘π usd
2. ‡™Á§¢Ë“«„π forexfactory ‡∑’¬∫¥—«‡≈¢§“¥°“√≥Ï·≈–§√—Èß°ËÕπ«Ë“¥’¢÷ÈπÀ√◊Õ·¬ËË≈ß
3. ‡™Á§ USDX «Ë“·¢Áß§Ë“À√◊ÕÕËÕπ§Ë“
4. À“®ÿ¥°≈—∫µ—«∑’Ë„°≈È∑’Ë ÿ¥·≈–‡¢È“ÕÕ‡¥Õ√Ïµ“¡∑’Ë«‘‡§√“–ÀÏ‰«È';
                $case = 1;
            }

            if (strpos($textinput, '§—π') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '§—π¡◊ÕÀ√Õ ?? ®—¥¢”Ê‰ª 5 lot ‰ª';
                } elseif ($rand == 1) {
                    $text = '§—π¡“°¡—Í¬';
                } elseif ($rand == 2) {
                    $text = '§—π‰√ Õ¬Ë“∫Õ°π–«Ë“§—π ... 5555';
                } else {
                    $text = '„®‡¬ÁπÊ √Õ —≠≠“≥°ËÕπ √’∫‡¢È“‡®Á∫µ—«‰¥Èπ–';
                }
                $case = 1;
            }

            if (strpos($textinput, 'µ≈“¥‡ª‘¥') !== false || strpos($textinput, '‡ª‘¥µ≈“¥') !== false) {
                $text = '™Ë«ß‡«≈“µ≈“¥‡ª‘¥ ( ‡«≈“ª°µ‘‰¡Ë„™Ë DST )
                
05:00 µ≈“¥ÕÕ ‡µ‡√’¬ AUD
07:00 µ≈“¥≠’ËªÿËπ JPY
08:20 µ≈“¥®’π CNY
13:00 µ≈“¥¬ÿ‚√ª EUR
14:00 µ≈“¥Õ—ß°ƒ… GBP
19:20 µ≈“¥‚§‡¡° USD';
                $case = 1;
            }

            if (strpos($textinput, 'usdx') !== false || strpos($textinput, 'Usdx') !== false  || strpos($textinput, 'USDX') !== false || strpos($textinput, '¥Õ≈≈Ë“¥‘∫') !== false || strpos($textinput, '¥Õ≈≈“¥‘∫') !== false) {
                $text = '‡™Á§ usdx ‰¥È∑’Ë https://www.investing.com/quotes/us-dollar-index';
                $case = 1;
            }

            if (strpos($textinput, '¥—™π’À≈—°') !== false || strpos($textinput, 'major-indices') !== false) {
                $text = '‡™Á§¥—™π’À≈—° ‰¥È∑’Ë https://th.investing.com/indices/major-indices';
                $case = 1;
            }

            if (strpos($textinput, '¥—™π’‚≈°') !== false || strpos($textinput, 'world-indices') !== false) {
                $text = '‡™Á§¥—™π’‚≈° ‰¥È∑’Ë https://th.investing.com/indices/world-indices';
                $case = 1;
            }

            if (strpos($textinput, '¥—™π’°Õß∑ÿπ') !== false || strpos($textinput, 'cfds') !== false || strpos($textinput, 'CFDs') !== false || strpos($textinput, 'CFDS') !== false) {
                $text = '‡™Á§¥—™π’°Õß∑ÿπ ‰¥È∑’Ë https://th.investing.com/indices/indices-cfds';
                $case = 1;
            }

            if (strpos($textinput, '¥—™π’ÀÿÈπ∑—Ë«‚≈°') !== false || strpos($textinput, 'global-indices') !== false) {
                $text = '‡™Á§¥—™π’ÀÿÈπ∑—Ë«‚≈° ‰¥È∑’Ë https://th.investing.com/indices/global-indices';
                $case = 1;
            }

            if (strpos($textinput, 'µÈ“π·¢Áß') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '∂È“‚¥π°√–·∑°∫ËÕ¬Ê°ÁÕ“®®–∑–≈ÿ‰¥Èπ– √–«—ß°—π¥È«¬';
                } elseif ($rand == 1) {
                    $text = '¡—πµ√ß°—∫®ÿ¥°≈—∫µ—« TF ‰ÀπªË“« ‡™Á§ÀπËÕ¬';
                } elseif ($rand == 2) {
                    $text = '‡®ÕªÈ“‡¬°—∫≈ÿß∑√—¡ªÏ®–·¢Áß‰À«À√Õ 555';
                } else {
                    $text = 'µ√ß°—∫®ÿ¥°≈—∫µ—«À≈“¬§ŸË‡≈¬¡—Í¬π—Ëπ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ovt') !== false || strpos($textinput, 'OVT') !== false || strpos($textinput, 'Ovt') !== false || strpos($textinput, 'overtrade') !== false || strpos($textinput, 'Overtrade') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '‡ªÁπ ‘Ëß∑’Ë‰¡Ë ¡§«√∑”‡≈¬π–';
                } elseif ($rand == 1) {
                    $text = '·πË„®·≈È«À√Õ ®– overtrade ÕË–';
                } elseif ($rand == 2) {
                    $text = '‰¡Ë¥’¡—Èß æÕ√Ïµ®–‡ ’Ë¬ß‰ª';
                } elseif ($rand == 3) {
                    $text = '√–«—ßæÕ√Ïµ∫‘ππ–∂È“°√“øº—πº«π';
                } else {
                    $text = 'ovt ?? √«¬°—∫≈È“ß¡’‡ Èπ∫“ßÊ°—πÕ¬ŸËπ– 555';
                }
                $case = 1;
            }

            if (strpos($textinput, 'Ω—π¥’') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'Ω—π¥’π–§√—∫';
                } elseif ($rand == 1) {
                    $text = 'Good Night.';
                } elseif ($rand == 2) {
                    $text = 'Sweet Dream §√—∫';
                } elseif ($rand == 3) {
                    $text = 'πÕπ·≈È«À√Õ ÕÈ“« ... „§√¬◊πÕ¬ŸËª≈“¬‡µ’¬ßÕË–';
                } else {
                    $text = 'Good Night §√—∫ ∂È“¡’ÕÕ‡¥Õ√Ïµ—Èß SL °”‰√‰«È¥È«¬π–';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡´Áß') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '„®‡¬ÁπÊ  Ÿ¥À“¬„®‡¢È“≈÷°Ê';
                } elseif ($rand == 1) {
                    $text = '‡´ÁßÕ–‰√';
                } else {
                    $text = '§◊ππ’È‰ª‰Àπ«Ë“¡“ ®–®—¥„ÀÈÀ“¬‡´Áß';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡ß’¬∫') !== false) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = '„ÀÈæ—°∫È“ß‡∂Õ– ´—¥ m-150 ‰ª 2 ≈—ß≈–';
                } elseif ($rand == 1) {
                    $text = '®–„ÀÈæŸ¥Õ–‰√¡“°¡“¬ ‡Àπ◊ËÕ¬‡ªÁπ‡¢È“„®ªË–';
                } elseif ($rand == 2) {
                    $text = 'æÕ„®ÕË– ¡’ª—≠À“ ?';
                } elseif ($rand == 3) {
                    $text = '°≈—«√”§“≠‰ß°Á‡ß’¬∫∫È“ßÕ–‰√∫È“ß';
                } elseif ($rand == 4) {
                    $text = 'ø—ß‡æ≈ß‡æ√“–¢Õß Õ.·ÕÁ§¥’°«Ë“ https://www.youtube.com/watch?v=gpisNZ7QuoE';
                } elseif ($rand == 5) {
                    $text = '®—¥„ÀÈ 1 single https://www.youtube.com/watch?v=5MXzaw5Xe9w';
                } elseif ($rand == 6) {
                    $text = 'Àπ—°À—«„§√ ?';
                } elseif ($rand == 7) {
                    $text = '‰¡Ë‰¥È‡ß’¬∫´—°ÀπËÕ¬ ¥Ÿæ«°§ÿ≥§ÿ¬°—πÕ¬ŸË';
                } else {
                    $text = '‡¥’Î¬«‡ª‘¥‡æ≈ß„ÀÈª–®–‰¥È‰¡Ë‡ß’¬∫';
                }
                $case = 1;
            }

            if (strpos($textinput, '∫Õ∑‚À¥') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '∏√√¡¥Í“';
                } elseif ($rand == 1) {
                    $text = '‚À¥ —¥√— ‡´’¬ ‰π®’‡√’¬ÕË–';
                } elseif ($rand == 1) {
                    $text = '¥Ÿ‡≈‡«≈¥È«¬';
                } else {
                    $text = 'Õ¬“°‡ÀÁπ¬‘Ëß°«Ë“π’ÈªË–';
                }
                $case = 1;
            }

            if (strpos($textinput, '·¡Èß') !== false || strpos($textinput, '·¡Ëß') !== false) {
                $rand = rand(0, 1);
                if ($rand == 0) {
                    $text = 'æŸ¥¥’Ê‰¥ÈªË–';
                } else {
                    $text = '·¡ÈßÕ–‰√≈– æŸ¥„ÀÈ¡—π¥’Ê';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡°√’¬π') !== false || strpos($textinput, '‡°’¬π') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = '«Ë“„§√‡°√’¬π‡¥’Î¬«‚¥π‡µ–ÕÕ°®“°ÀÈÕß';
                } elseif ($rand == 1) {
                    $text = '¡÷ßÕ–‡°√’¬π';
                } elseif ($rand == 2) {
                    $text = '‡¥’Î¬«¡÷ß®–‡°√’¬¡';
                } elseif ($rand == 3) {
                    $text = '‡°√’¬πæËÕß';
                } elseif ($rand == 4) {
                    $text = '‡§¬π—ËßÊÕ¬ŸË·≈È«À≈—∫¡—Í¬';
                } elseif ($rand == 5) {
                    $text = '‡§¬‚¥π‡°√’¬π‡µ–ª“°ªË–';
                } else {
                    $text = '‰¡Ë‡°√’¬π·§Ë °‘π‡Œ¥';
                }
                $case = 1;
            }

            if (strpos($textinput, '≈Ÿ°°–À√’Ë') !== false || strpos($textinput, '≈Ÿ°°√–À√’Ë') !== false || strpos($textinput, '≈Ÿ°°√–À≈’Ë') !== false || strpos($textinput, '≈Ÿ°°–À≈’Ë') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = '¡÷ßÕ– ‘≈Ÿ°°–À√’Ë';
                } elseif ($rand == 1) {
                    $text = '¡÷ßÕ–À√Õ πË“ ß “√®—ß';
                } elseif ($rand == 2) {
                    $text = 'Õ¬“°ª“°·µ°¡—Í¬ —¥';
                } elseif ($rand == 3) {
                    $text = '∑”‰¡™’«‘µ¡÷ßπË“ ß “√®—ß ‰¡ËµÈÕß§‘¥¡“°π–';
                } elseif ($rand == 4) {
                    $text = '°–À√’Ë§«¬‰√';
                } else {
                    $text = '·¡Ë¡¡÷ßÕË–¥‘';
                }
                $case = 1;
            }

            if (strpos($textinput, '§«¬') !== false || strpos($textinput, '§« ¬') !== false || strpos($textinput, '§ « ¬') !== false || strpos($textinput, '§ «¬') !== false) {
                $rand = rand(0, 14);
                if ($rand == 0) {
                    $text = '‡Õ“‰«Èø“¥À—«¡÷ßÕ–§√—∫';
                } elseif ($rand == 1) {
                    $text = '§«¬Õ–‰√≈–§√—∫';
                } elseif ($rand == 2) {
                    $text = '°Ÿ¡’‰¡ËµÈÕß·®°';
                } elseif ($rand == 3) {
                    $text = '§«¬æËÕß';
                } elseif ($rand == 4) {
                    $text = '§«¬‰√≈– —¥ ‡°Î“À√Õ ?';
                } elseif ($rand == 5) {
                    $text = '¥Ÿ¡÷ßæŸ¥ ¬Õ¥ÀπÈ“´—°∑’¥’¡—Èß';
                } elseif ($rand == 6) {
                    $text = '¡÷ßÕ¬“°®–‰Ω«È„™Ëª– ‡¥’Î¬«®—¥„ÀÈ';
                } elseif ($rand == 7) {
                    $text = '·≈È«¡÷ß‡ªÁπ§«¬Õ–‰√≈–';
                } elseif ($rand == 8) {
                    $text = '§«¬‰√ —¥';
                } elseif ($rand == 9) {
                    $text = '‰¡Ë„À≠Ë‰¡ËµÈÕß∑”¡“‚™«Ï —¥';
                } elseif ($rand == 10) {
                    $text = '„À≠Ëπ—°‰ß ‰¡Ë„À≠ËÕ¬Ë“¡“°√Ë“ß·∂«π’È';
                } elseif ($rand == 11) {
                    $text = '‡Õ“‰ªø“¥À—«¡÷ßÀπËÕ¬¡—Í¬';
                } elseif ($rand == 12) {
                    $text = '§«¬æËÕß¡÷ßÕË–';
                } elseif ($rand == 13) {
                    $text = '‡¥’Î¬«π—ËßÊÕ¬ŸË°ÁÀß“¬À≈—ßÀ√Õ° —¥';
                } else {
                    $text = 'ÕÈ“«Ê Õ¬“°¡’‡√◊ËÕß«Ë“ß—Èπ';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡ ◊Õ°') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'Õ¬“°‡ ◊Õ°ÕË–';
                } elseif ($rand == 1) {
                    $text = '™Õ∫ÕË–¡’‰√¡—Í¬';
                } elseif ($rand == 2) {
                    $text = '°Á°ŸÕ¬“°‡ ◊Õ°ÕË– ¡’ª—≠À“‰√ªË“«';
                } elseif ($rand == 3) {
                    $text = '‡√◊ËÕß™“«∫È“π°Ÿ∂π—¥';
                } else {
                    $text = '‡√◊ËÕß¢Õß°Ÿ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'æËÕß') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'æËÕß¡÷ßÕË–';
                } elseif ($rand == 1) {
                    $text = '‡√◊ËÕß¢ÕßæËÕß';
                } elseif ($rand == 2) {
                    $text = 'Àπ—°À—«¡÷ßÀ√Õ';
                } elseif ($rand == 3) {
                    $text = 'ª“°¡÷ßπ’ËπË“¡’ ’π–';
                } else {
                    $text = '‡¥’Î¬«°ÁÀß“¬À≈—ßÀ√Õ° —¥';
                }
                $case = 1;
            }

            if (strpos($textinput, 'À—«√ÈÕπ') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'À—«√ÈÕπ„§√ ?? ∂È“°—∫∫Õ∑·π–π”«Ë“Õ¬Ë“‡ ’Ë¬ß';
                } elseif ($rand == 1) {
                    $text = '‰ªπÕπ„π∂—ßπÈ”·¢Áß‰ª®–‰¥ÈÀ“¬√ÈÕπ';
                } elseif ($rand == 2) {
                    $text = '°Á∑’Ëπ’Ëª√–‡∑»‰∑¬‰ß ‡≈¬√ÈÕπ 555';
                } elseif ($rand == 3) {
                    $text = '®–√ÈÕπÕ–‰√°—ππ—°°—πÀπ“';
                } elseif ($rand == 4) {
                    $text = '‡¡◊Õß‰∑¬π– ‰¡Ë„™Ë¢—È«‚≈°‡Àπ◊Õ';
                } else {
                    $text = '´—°ªÎÕß¡—Í¬®–‰¥ÈÀ“¬√ÈÕπ';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡À≈È“') !== false || strpos($textinput, '‡∫’¬√Ï') !== false || strpos($textinput, '‡¡“') !== false || strpos($textinput, 'ª“√Ïµ’È') !== false || strpos($textinput, 'ª“µ’È') !== false || strpos($textinput, 'party') !== false || strpos($textinput, 'Party') !== false || strpos($textinput, 'pub') !== false || strpos($textinput, 'Pub') !== false) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = '®—¥‰ªÕ¬Ë“„ÀÈ‡ ’¬';
                } elseif ($rand == 1) {
                    $text = '3 «—π 2 §◊π ‰ª™‘≈Ê';
                } elseif ($rand == 2) {
                    $text = '∑ÕßÀ≈ËÕ‰ª Õ¬Ë“ß‡¥Á¥';
                } elseif ($rand == 3) {
                    $text = '‰ªÊÊ √È“π‰Àπ«Ë“¡“';
                } elseif ($rand == 4) {
                    $text = '‰ª¢È“« “√À√◊Õ ’≈¡¥’';
                } elseif ($rand == 5) {
                    $text = 'Route66 ‰ª';
                } elseif ($rand == 6) {
                    $text = '§Õ·¢ÁßæÕªË“«';
                } elseif ($rand == 7) {
                    $text = '∑’Ë‰Àπ«Ë“¡“ the pimp ¥’¡—Í¬';
                } else {
                    $text = '√È“ππ—Ëß‡≈Ëπ ∑ÕßÀ≈ËÕª–≈– ‡Õ“‡ß‘π‰ª≈–≈“¬ÀπËÕ¬';
                }
                $case = 1;
            }

            if (strpos($textinput, '≈È“ßæÕ∑') !== false || strpos($textinput, '≈È“ßæÕ√Ïµ') !== false || strpos($textinput, '≈È“ßæÕµ') !== false || strpos($textinput, '≈È“ßæÕ√Ï∑') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '®ß‡™◊ËÕ„π°“√ √È“ß„À¡Ë';
                } elseif ($rand == 1) {
                    $text = '‰¡ËµÈÕß‡ ’¬„®π–  ŸÈÊ';
                } elseif ($rand == 2) {
                    $text = '≈È“ß‡æ√“–Õ–‰√ÕË– ovt À√Õ';
                } elseif ($rand == 3) {
                    $text = 'ÕÕ°ÕÕ‡¥Õ√Ï∂’Ë‡°‘π‰ªÀ√◊ÕªË“« ‡«≈“‚¥π≈“°æÕ√Ïµ‡≈¬√—∫‰¡Ë‰À«';
                } else {
                    $text = '„®‡¬ÁπÊπ– ‡ªÁπ°”≈—ß„®„ÀÈ';
                }
                $case = 1;
            }

            if (strpos($textinput, ' —¥') !== false || strpos($textinput, ' — ') !== false || strpos($textinput, ' —  ') !== false || strpos($textinput, ' — ¥') !== false) {
                $rand = rand(0, 14);
                if ($rand == 0) {
                    $text = ' —¥°—∫„§√«–';
                } elseif ($rand == 1) {
                    $text = '‡æ◊ËÕπ‡≈Ëπ¡÷ßÀ√Õ';
                } elseif ($rand == 2) {
                    $text = '∑”‰¡≈– —¥';
                } elseif ($rand == 3) {
                    $text = 'æŸ¥·∫∫π’È §◊ÕÕ¬“°™π„™ËªË–';
                } elseif ($rand == 4) {
                    $text = 'Õ¬“°®–‰Ω«È„™ËªË– —¥';
                } elseif ($rand == 5) {
                    $text = '¡÷ß‡°Î“À√Õ —¥';
                } elseif ($rand == 6) {
                    $text = '‡¥’Î¬«¡÷ß®–‚¥π —¥';
                } elseif ($rand == 7) {
                    $text = ' —¥æËÕß';
                } elseif ($rand == 8) {
                    $text = '‡¥’Î¬«‚¥π¬Õ¥ÀπÈ“À√Õ°';
                } elseif ($rand == 9) {
                    $text = 'Õ¬“°‚¥π‡∑È“§ŸË¡—Í¬ —¥';
                } elseif ($rand == 10) {
                    $text = '§«¬‰√≈– —¥';
                } elseif ($rand == 11) {
                    $text = 'Õ¬“°‚¥π„™ËªË– —¥';
                } elseif ($rand == 12) {
                    $text = ' —¥·¡Ë¡¡÷ßÕË–';
                } elseif ($rand == 13) {
                    $text = ' —¥æËÕß¡÷ßÕË–';
                } else {
                    $text = '¥Ë“°Ÿ ? ‡¥’Î¬«®–‚¥π‰¡Ë„™ËπÈÕ¬';
                }
                $case = 1;
            }

            if (strpos($textinput, '‡À’È¬') !== false) {
                $rand = rand(0, 6);
                if ($rand == 0) {
                    $text = '¡÷ßÕ–¥‘‡À’È¬';
                } elseif ($rand == 1) {
                    $text = '™—°®–‡Õ◊Õ¡°—∫§”æŸ¥§”®“¡÷ß≈–π–';
                } elseif ($rand == 2) {
                    $text = '¥Ÿ¡÷ßæŸ¥ ¬Õ¥ÀπÈ“´—°∑’¥’¡—Èß';
                } elseif ($rand == 3) {
                    $text = '¡÷ß‡ªÁπ‡À’È¬Õ–‰√';
                } elseif ($rand == 4) {
                    $text = '∑”‰¡æŸ¥‡À’È¬Ê·∫∫π’È≈–';
                } elseif ($rand == 5) {
                    $text = '¬Õ¥ÀπÈ“´—°∑’¥’¡—Èß';
                } else {
                    $text = 'æŸ¥®“¥’ÊÀπËÕ¬ — ';
                }
                $case = 1;
            }

            if (strpos($textinput, ' “ ') !== false || strpos($textinput, ' “¥') !== false || strpos($textinput, '  “  ') !== false || strpos($textinput, '  “ ¥') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = '®– “¥πÈ”‰ßÍ';
                } elseif ($rand == 1) {
                    $text = '· √¥¥¥¥¥¥';
                } else {
                    $text = '∑”‰¡≈– “¥¥¥';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ÀπÈ“À’') !== false || strpos($textinput, '®‘Î¡') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '«Ë“µ—«‡Õß∑”‰¡ ∫È“ªË“«';
                } elseif ($rand == 1) {
                    $text = '™—°®–‡Õ◊Õ¡°—∫§”æŸ¥§”®“¡÷ß≈–π–';
                } elseif ($rand == 2) {
                    $text = '¥Ÿ¡÷ßæŸ¥ ¬Õ¥ÀπÈ“´—°∑’¥’¡—Èß';
                } else {
                    $text = 'æŸ¥®“¥’ÊÀπËÕ¬ — ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ª—≠≠“ÕËÕπ') !== false) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ª—≠≠“∑’Ë®—¥√“¬°“√ª√‘»π“øÈ“·≈ªÕ–À√Õ';
                } elseif ($rand == 1) {
                    $text = 'ª—≠≠“ π‘√—π¥Ï°ÿ≈ „™ËªË–';
                } else {
                    $text = '«Ë“µ—«‡Õß∑”‰¡§√—∫';
                }
                $case = 1;
            }

            if (strpos($textinput, '·¥°') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '·¥°‰√°—π ·¥°¥È«¬';
                } elseif ($rand == 1) {
                    $text = '®–·¥°Õ–‰√≈–';
                } elseif ($rand == 2) {
                    $text = '·¥°‰√ ? ≈Ÿ°µ–°—Ë«¡—Í¬';
                } else {
                    $text = 'æŸ¥‡æ√“–ÊÀπËÕ¬¥‘«–';
                }
                $case = 1;
            }

            if (strpos($textinput, ' ¥™◊Ëπ') !== false) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = '√–«—ß≈◊Ëπ∂È“ ¥®—¥';
                } elseif ($rand == 1) {
                    $text = 'æ÷ËßÕ“∫πÈ”¡“À√Õ‡≈¬ ¥™◊ËπÕË–';
                } elseif ($rand == 2) {
                    $text = '‰ª∑”Õ–‰√¡“ ¥™◊Ëπ Õ¬Ë“∫Õ°π– .... 555';
                } elseif ($rand == 3) {
                    $text = '®– ¥Õ–‰√°—π∫ËÕ¬Ê';
                } else {
                    $text = ' ¥¡“°‰ª®–°≈“¬ ≈¥π–';
                }
                $case = 1;
            }

            if (strpos($textinput, '°“°') !== false || strpos($textinput, '°“ °') !== false || strpos($textinput, '° “ °') !== false || strpos($textinput, '° “°') !== false || strpos($textinput, 'kak') !== false || strpos($textinput, 'Kak') !== false || strpos($textinput, 'KAK') !== false) {
                $rand = rand(0, 8);
                if ($rand == 0) {
                    $text = '‰¡Ë π‘∑Õ¬Ë“µ‘¥µ≈°';
                } elseif ($rand == 1) {
                    $text = '¡÷ßÕ–°“°';
                } elseif ($rand == 2) {
                    $text = '°“°æËÕß';
                } elseif ($rand == 3) {
                    $text = 'Àπ—°À—«¡÷ß‰ßÍ';
                } elseif ($rand == 4) {
                    $text = '·≈È«‰ß';
                } elseif ($rand == 5) {
                    $text = '°Á¡÷ß‰ß°“°ÕË–';
                } elseif ($rand == 6) {
                    $text = '¡÷ßπ—Ëπ·À≈–∑’Ë°“°';
                } elseif ($rand == 7) {
                    $text = 'ÕÈ“«‡ªÁπ¢’È°≈“°À√Õ πË“ ß “√®—ß';
                } else {
                    $text = '‡ÕÈ“ ... «Ë“µ—«‡Õß´–ß—Èπ';
                }
                $case = 1;
            }

            if (strpos($textinput, '≈Õ√Ï¥') !== false || strpos($textinput, '≈Õ®') !== false || strpos($textinput, 'lord') !== false || strpos($textinput, '≈Õ∑') !== false) {
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = '‰ª®√‘ßÀ√Õ';
                } elseif ($rand == 1) {
                    $text = '°”≈—ß‡¡◊ËÕ¬æÕ¥’‡≈¬';
                } elseif ($rand == 2) {
                    $text = '·µËßµ—«·ªª';
                } elseif ($rand == 3) {
                    $text = '‰ª¥È«¬¥‘';
                }
                $case = 1;
            }

            if (strpos($textinput, '°Æ√–‡∫’¬∫') !== false) {
                $text = '?? °Æ√–‡∫’¬∫¢ÕßÀÈÕß ??

? ‡π◊ÈÕÀ“∑’Ë≈–‡¡‘¥µËÕ  ∂“∫—π™“µ‘ »“ π“ æ√–¡À“°…—µ√‘¬Ï ·≈–æ√–∫√¡«ß»“πÿ«ß»Ï

? ‡π◊ÈÕÀ“∑’Ë‡°’Ë¬«°—∫°“√‡¡◊Õß Õ—π®–°ËÕ„ÀÈ‡°‘¥°“√·∫ËßΩ—°ΩË“¬ ·≈–°“√‚µÈ‡∂’¬ß·≈–·µ°·¬°°—π„πÀ¡ŸË ¡“™‘°

? ‡π◊ÈÕÀ“∑’Ë«Ë“°≈Ë“«„ÀÈ√È“¬ ·°Ë ¡“™‘°ºŸÈÕ◊ËπÀ√◊Õ∑’Ë‡ªÁπ°“√¬ÿ¬ß„ÀÈºŸÈÕ◊Ëπ‡°‘¥§«“¡¢—¥·¬Èß´÷Ëß°—π·≈–°—π

? ‡π◊ÈÕÀ“∑’Ë‡°’Ë¬«°—∫∏ÿ√°‘®≈Ÿ°‚´Ë MLM

? Invite  ¡“™‘°∑Ë“πÕ◊Ëπ‡¢È“¡“

? ‡π◊ÈÕÀ“À√◊Õ¢ÈÕ§«“¡„¥ÊÕÕ°‰ª‡º¬·æ√Ë¿“¬πÕ°

?? °ËÕπ‚æ ¢ÈÕ§«“¡À√◊Õ‡π◊ÈÕÀ“„¥Ê §«√µ√«® Õ∫„ÀÈ‡√’¬∫√ÈÕ¬ ´÷Ëß‡¡◊ËÕ‚æ µÏ‰ª·≈È«À“°º‘¥√–‡∫’¬∫¢ÈÕ∫—ß§—∫ ºŸÈ‚æ µÏµÈÕß√—∫º≈∑’Ë‡°‘¥¢÷Èπ ??

?? Admin ¡’ ‘∑∏‘Ï∑’Ë®– Ban  ¡“™‘°∑’Ë∑”º‘¥°ÆÀ√◊Õ∑’Ëæ‘®“√≥“·≈È««Ë“‰¡Ë‡À¡“– ¡‰¥È∑—π∑’ ´÷ËßÀ“°‡°‘¥¢ÈÕæ‘æ“∑ ∑“ß Admin ®–ª√÷°…“°—π·≈–∑”µ“¡§–·ππ‡ ’¬ß Ë«π„À≠Ë ??';
                $case = 1;
            }

            if (strpos($textinput, ' «— ¥’∫Õ∑') !== false || strpos($textinput, ' «— ¥’§√—∫∫Õ∑') !== false || strpos($textinput, ' «— ¥’§—∫∫Õ∑') !== false || strpos($textinput, ' «— ¥’§Ë–∫Õ∑') !== false || strpos($textinput, ' «— ¥’§Ë“∫Õ∑') !== false) {
                $text = ' «— ¥’§√—∫';
                $case = 1;
            }

            if (strpos($textinput, 'ªØ‘∑‘π') !== false) {
                $text = '‡™Á§‰¥È∑’Ë https://www.investing.com/economic-calendar/ À√◊Õ https://www.forexfactory.com/calendar.php?day=today';
                $case = 1;
            }

            if (strpos($textinput, '·°È‰¡È') !== false) {
                $text = '«‘∏’°“√·°È‰¡È·∫∫ª‘¥√«∫

http://www.tradersociety.org/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%81%E0%B8%81%E0%B9%89%E0%B9%84%E0%B8%A1%E0%B9%89/';
                $case = 1;
            }

            if (strpos($textinput, 'µ–°√È“') !== false || strpos($textinput, 'µ√–°√È“') !== false || strpos($textinput, 'finviz') !== false) {
                $text = '‡™Á§Õ—π¥—∫§Ë“‡ß‘π‰¥È∑’Ëπ’Ë ( Refresh every 1 min )

http://www.tradersociety.org/finviz/';
                $case = 1;
            }

            if (strpos($textinput, 'Volumn') !== false) {
                $text = 'Volumn §◊ÕÕ–‰√ ???

http://www.tradersociety.org/volumn-§◊ÕÕ–‰√/';
                $case = 1;
            }

            if (strpos($textinput, 'Fibo') !== false) {
                $text = '°“√„™Èß“π Fibo Retractment

http://www.tradersociety.org/°“√„™È-fibonacci-retracement/';
                $case = 1;
            }

            if (strpos($textinput, '¬◊π¬—πµπ') !== false || strpos($textinput, 'verify') !== false) {
                $text = '«‘∏’°“√ Verify ‡Õ° “√

https://www.youtube.com/watch?v=c1aJdZBIWO0';
                $case = 1;
            }

            if (strpos($textinput, 'copytrade') !== false) {
                $text = '«‘∏’°“√ CopyTrade

https://www.youtube.com/watch?v=f6MjuI4A1bw';
                $case = 1;
            }

            if (strpos($textinput, 'Ω“°‡ß‘π') !== false) {
                $text = '«‘∏’Ω“°‡ß‘πºË“πÀπÈ“‡«Á∫

https://www.youtube.com/watch?v=913IcRuVdu0

À√◊ÕÀ“°µÈÕß°“√Ω“°°—∫·Õ¥¡‘π add line id : tradersociety ‰¥È‡≈¬§√—∫';
                $case = 1;
            }

            if (strpos($textinput, '∂Õπ‡ß‘π') !== false) {
                $text = '«‘∏’∂Õπ‡ß‘πºË“πÀπÈ“‡«Á∫

https://www.youtube.com/watch?v=uJqwt9Cd3k4

À√◊ÕÀ“°µÈÕß°“√∂Õπ°—∫·Õ¥¡‘π add line id : tradersociety ‰¥È‡≈¬§√—∫';
                $case = 1;
            }

            if (strpos($textinput, '∫∑«‘‡§√“–ÀÏ') !== false || strpos($textinput, '∫∑«‘‡§√“–') !== false) {
                $text = '¥Ÿ∫∑«‘‡§√“–ÀÏª√–®”«—π-¬ÈÕπÀ≈—ß‰¥È∑’Ë http://www.tradersociety.org À√◊Õ add line id @tradersociety §√—∫ ¡’°“√«‘‡§√“–ÀÏ¢Ë“«∑ÿ°‡™È“';
                $case = 1;
            }

            if (strpos($textinput, '‡ß‘π‰¡Ë‡¢È“') !== false || strpos($textinput, '‡ß‘π¬—ß‰¡Ë‡¢È“') !== false) {
                $text = 'À≈—ß®“°∑”µ“¡¢—ÈπµÕπ¢Õß√–∫∫·≈È« √Õ 1-3 «—π∑”°“√ ∂È“¬—ß‰¡Ë‡¢È“ √∫°«π ËßÀ≈—°∞“π‰ª∑’Ë finance@168fx.com ·≈– support@168fx.com §√—∫';
                $case = 1;
            }

            if (strpos($textinput, 'ŒË“ÊÊ') !== false) {
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
                    $text = '®–¢”Õ–‰√°—ππ—°Àπ“';
                } elseif ($rand == 2) {
                    $text = 'æÕ‰¥È≈–¡—Èß';
                } elseif ($rand == 3) {
                    $text = 'æÕÊÊ πÈ”ÀŸπÈ”µ“‰À≈À¡¥≈–';
                } elseif ($rand == 4) {
                    $text = '5555';
                } else {
                    $text = '¢”®π∑ÈÕß·¢Áß≈–';
                }
                $case = 1;
            }


            if (strpos($textinput, 'Õ–‰√§◊Õ') !== false) {
                $text_ex = explode(':', $textinput);
                //‡Õ“¢ÈÕ§«“¡¡“·¬° : ‰¥È‡ªÁπ Array
                if ($text_ex[0] == "Õ–‰√§◊Õ") { //∂È“¢ÈÕ§«“¡§◊Õ "Õ¬“°√ŸÈ" „ÀÈ∑”°“√¥÷ß¢ÈÕ¡Ÿ≈®“° Wikipedia À“®“°‰∑¬°ËÕπ //https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&exintro=&explaintext=&titles=PHP
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
                    if (empty($result_text)) {//∂È“‰¡Ëæ∫„ÀÈÀ“®“° en
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
                    if (empty($result_text)) {//À“®“° en ‰¡Ëæ∫°Á∫Õ°«Ë“ ‰¡Ëæ∫¢ÈÕ¡Ÿ≈ µÕ∫°≈—∫‰ª
                        $result_text = '‰¡Ëæ∫¢ÈÕ¡Ÿ≈';
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
