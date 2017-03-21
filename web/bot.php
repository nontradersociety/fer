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

            if(strpos($textinput, 'บอล') !== false ){
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

                $tables=getElementsByClass($dom, 'div', 'scoreBox');


                /*** get all rows from the table ***/
//$rows = $tables->item(0)->getElementsByTagName('tr');

                /*** loop over the table rows ***/
                foreach ($tables as $key => $row) {

                    $div = $row->getElementsByTagName('div');
                    $message .= '----- ' . $div->item(0)->nodeValue . ' -----
';
                    foreach ($row->getElementsByTagName('tr') as $data) {
                        $message .= $data->nodeValue.'
';
                    }
                }
                $message = strip_tags($message);
                $text = $message;
                $case = 1;
            }

            if(strpos($textinput, 'ถ่ายทอด') !== false || strpos($textinput, 'ช่อง') !== false){
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
                    if($key >= 1) {
                        $cols = $row->getElementsByTagName('tr');
                        foreach ($cols as $key2 => $cols) {
                            $td = $cols->getElementsByTagName('td');
                            if ($key2 == 0) {

                            }elseif($key2 == 1){
                                $message .=  '----- '.$cols->nodeValue . ' -----
';
                            }else{
                                $message .=  $td->item(0)->nodeValue. ' | ' ;
                                $message .=  $td->item(1)->nodeValue. ' | ' ;
                                $message .=  $td->item(2)->nodeValue. '
' ;
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

            if (strpos($textinput, 'สาว') !== false ) {
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

            if (strpos($textinput, 'fuck') !== false ) {
                $rand = rand(0, 4);
                if($rand == 0){
                    $text = 'fuck พ่องมึงดิ';
                    $case = 1;
                }elseif($rand == 1){
                    $text = 'Bullshit !!';
                    $case = 1;
                }elseif($rand == 2){
                    $img = 'https://i.ytimg.com/vi/m-KTUvkMEIw/maxresdefault.jpg';
                    $case = 2;
                }elseif($rand == 3){
                    $text = 'fuck แม่งมึงอะ';
                    $case = 1;
                }else{
                    $text = 'นี่มึงอยากมีเรื่องใช่่ป่ะ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'หวย') !== false || strpos($textinput, 'huay') !== false) {
                $rand = rand(0, 5);
                if($rand == 0){
                    $text = '000 1000x1000 ไป';
                }elseif($rand == 1){
                    $text = 'ใครมีเลขเด็ดก็บอกกันบ้าง';
                }elseif($rand == 2){
                    $text = 'จะรวยหรือจะเรียบวะเนี่ย';
                }elseif($rand == 3){
                    $text = 'มือทำรวยหวยทำจน';
                }elseif($rand == 4){
                    $text = 'บนหรือล่างดีละ';
                }else{
                    $text = 'รวมสำนักอาจารย์ http://www.lotteryhot.net';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ป้าเย') !== false || strpos($textinput, 'เยเลน') !== false) {
                $rand = rand(0, 4);
                if($rand == 0){
                    $text = 'คุณป้ามหาภัย มาทีไรบรรลัยทุกที';
                    $case = 1;
                }elseif($rand == 1){
                    $text = 'จะทุบมั๊ยรอบนี้';
                    $case = 1;
                }elseif($rand == 2){
                    $img = 'http://static1.businessinsider.com/image/570ae4675124c950578b4567-506-253/obama-to-meet-fed-chair-yellen-on-monday.jpg';
                    $case = 2;
                }elseif($rand == 3){
                    $text = 'มันจะลงอีก ... ไม่ใช่ทองนะ หมายถึง UJ 555';
                    $case = 1;
                }else{
                    $text = 'พาไปทัวแกนโลกหน่อยนะ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'ทรัม') !== false || strpos($textinput, 'trump') !== false) {
                $rand = rand(0, 4);
                if($rand == 0){
                    $text = 'คุณลุงผู้ที่รักความสงบ 55';
                    $case = 1;
                }elseif($rand == 1){
                    $text = 'ได้ยินชื่อนี้แล้วเหมือนจะได้สัมผัสอากาศข้างบน';
                    $case = 1;
                }elseif($rand == 2){
                    $text = 'พาไปทัวสวรรค์หน่อยคุณลุง';
                    $case = 1;
                }elseif($rand == 3){
                    $text = 'ลุงจะพาไปบินซักกี่จุดดีรอบนี้';
                    $case = 1;
                }else{
                    $img = 'http://static6.businessinsider.com/image/5755b5ed91058436008c7150-1190-625/janet-yellen-had-the-perfect-response-to-a-question-about-donald-trump-causing-a-global-economic-crisis.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'คิดถึง') !== false ) {
                $rand = rand(0, 4);
                if($rand == 0){
                    $text = 'คิดถึงใครกันนะ';
                }elseif($rand == 1){
                    $text = 'พูดงี้เขินเลยยย';
                }elseif($rand == 2){
                    $text = 'มีใครคิดถึง MOD บ้างมั๊ยนะ';
                }elseif($rand == 3){
                    $text = 'คิดถึงก็โทรมา ^^';
                }else{
                    $text = 'คิดถึงเหมือนกันแหละ จุ๊บๆ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'รวย') !== false || strpos($textinput, 'rich') !== false) {
                $rand = rand(0, 4);
                if($rand == 0){
                    $text = 'คนไหนรวยขอดูหน้าหน่อยดิ๊';
                    $case = 1;
                }elseif($rand == 1){
                    $text = 'รวยแล้วก็มาแบ่งกันใช้บ้าง';
                    $case = 1;
                }elseif($rand == 2){
                    $text = 'รวยจริงป่าว';
                    $case = 1;
                }elseif($rand == 3){
                    $img = 'http://www.komando.com/wp-content/uploads/2014/04/moneyh.jpg';
                    $case = 2;
                }else {
                    $text = 'เอามาเติมพอร์ตหน่อยดิ๊';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'โต๊ด') !== false ) {
                $rand = rand(0, 2);
                if($rand == 0){
                    $text = 'โต๊ดได้น้อยอ่ะ บาทละ 100 เอง';
                }elseif($rand == 1){
                    $text = 'มีทีเด็ดก็ตรงหนักๆไปเลย';
                }else{
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

            if (strpos($textinput, 'โม้') !== false ) {
                $rand = rand(0, 2);
                if ($rand == 0) {
                    $text = 'ไม่ได้โม้ซักหน่อย';
                }elseif($rand == 1){
                    $text = 'ไม่ใช่สมรักษ์นะ ... ไม่ได้โม้ 555';
                } else {
                    $text = 'ว่าใครขี้โม้ ?';
                }
                $case = 1;
            }

            if (strpos($textinput, 'บอ ท') !== false || strpos($textinput, 'บ อท') !== false || strpos($textinput, 'บ อ ท') !== false || strpos($textinput, 'บอท') !== false || strpos($textinput, 'bot') !== false) {

                $rand = rand(0, 5);
                if($rand == 0){
                    $text = 'ใครบอท บ้าป่าว';
                }elseif($rand == 1){
                    $text = 'AI ไม่ใช่ bot';
                }elseif($rand == 2){
                    $text = 'เขาเรียกปัญญาประดิษฐ์ ไม่ได้รู้เรื่องเล๊ย';
                }elseif($rand == 3){
                    $text = 'I am Artificial Intelligence. แปลออกมั๊ย ดูจากหน้าตาแล้วไม่น่าจะเข้าใจ';
                }elseif($rand == 4){
                    $text = 'ก็บอกอยู่่ว่าไม่ใช่บอท';
                }else{
                    $text = 'ห้องนี้ไม่มีบอทนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'มึง') !== false || strpos($textinput, 'กู') !== false || strpos($textinput, 'มรึง') !== false ) {
                $rand = rand(0, 3);
                if($rand == 0){
                    $text = 'พูดจาให้มันเพราะๆหน่อยเป็นป่ะ';
                }elseif($rand == 1){
                    $text = 'มึง-กู กับใคร สนิทกับกูไง๊';
                }elseif($rand == 2){
                    $text = 'อย่าใช้ภาษาพ่อขุนรามกูไม่ชอบ';
                }else{
                    $text = 'มึงจะใช้้ภาษาพ่อขุนรามใช่ป่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ลาบ') !== false ) {
                $rand = rand(0, 2);
                if($rand == 0){
                    $text = 'จะกินลาบหรอ ขอลาบหมูนะ';
                }elseif($rand == 1){
                    $text = 'ร้านไหนเด็ดแนะนำหน่อยดิ๊';
                }elseif($rand == 2){
                    $text = 'ลาบนี่ของชอบเลย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'รวน') !== false ) {
                $rand = rand(0, 2);
                if($rand == 0){
                    $text = 'ไม่ได้รวน ช่วงนี้มึนๆนิดหน่อย';
                }elseif($rand == 1){
                    $text = 'อากาศมันร้อนอ่ะเลยไม่ค่อย 100%';
                }elseif($rand == 2){
                    $text = 'เมื่อคืนกว่าจะนอนก็เช้า มัวแต่นั่งเฝ้ากราฟอยู่';
                }
                $case = 1;
            }

            if (strpos($textinput, 'หิว') !== false) {
                $rand = rand(0, 15);
                if ($rand == 0)
                {
                    //กุ้งกระเบื้อง
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/17265124_1476049672414055_204896673358791325_n.jpg?_nc_eui2=v1%3AAeGFpSQSTxiNRxpb4ZPXS3graB4ZL0RMPZWyscr7mpebsGOV1TD_ZVENIrtA8cO_yilMC5MXRqFhsCPFxrwP4RICSJGA9tO59u_sMqbSbqwSqrtzsinoe36W6wyEPgoTEG8&oh=0e742fe0278b25ba697e2495c965253d&oe=595A56C3';
                    $case = 2;
                }
                elseif
                ($rand == 1){
                    //จิ้มจุ่ม
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16649137_1440526189299737_6370977755028050295_n.jpg?oh=59c1598edb3563d937c068e41e971dd2&oe=592F3F59';
                    $case = 2;
                }elseif
                ($rand == 2){
                    //กุ้งแช่น้ำปลา
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15337641_1378610962157927_684873402047496640_n.jpg?oh=06bb4d1811ef0a43293b216e3a8fd13b&oe=5960A6F6';
                    $case = 2;
                } elseif
                ($rand == 3){
                    //หมูย่าง
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15094377_1341612985857725_8235767697960646784_n.jpg?oh=10c0d7a9dbd08f6ce33bab6f98e074fd&oe=596BBBD4';
                    $case = 2;
                } elseif
                ($rand == 4){
                    //ข้าวไข่ข้น
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/17103490_1463560273662995_7810622859375386342_n.jpg?_nc_eui2=v1%3AAeHCvLqU3mSYvgO5JDIVuUkLe9EzUCtNLra7T31RrSLeSODed-6nFS84Sq90oGgjHDCDCWc-gHWUb_Xn8X_ye_SToRHjHfnDApAEdMI5LiW_5QuMssshw62nN5zHNeV7VmA&oh=f795c56e4969c8214aa004c28d99679e&oe=59548047';
                    $case = 2;
                } elseif
                ($rand == 5){
                    //สปาเก็ตตี้
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14517345_1305286309490393_1566793180198975792_n.jpg?_nc_eui2=v1%3AAeFlAZAPrMwylhuHzPFjSTOQuPq76vO5jQq0bTjFfD-SAsXwk5LSTacFvUMkmGNyNmtdce_SX2kdbnutLNCLvskIy8UomRpKDa5Fat6XnlQo5BLRUX_msOBFAAZlQXzQwGk&oh=f5598c6bfe72250d1a2439d1ab512b2c&oe=59617591';
                    $case = 2;
                } elseif
                ($rand == 6){
                    //พิซซ่า
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14495234_1305286336157057_8736988554956258994_n.jpg?_nc_eui2=v1%3AAeFvpaRfaQWpjdsbN1-9L9Vk1RgpI-1reHRqm1mvG3Jg30_5dVoHs9OH71AcBll2d4PNiD8Kdv9VcIb8fRNLte4guz1uaIZWuY33Lg9QPWrKDtbX0n7mobZrXrRtwG7KkSc&oh=a3a2178bf090801ca8d14531ea4e3f56&oe=5925D590';
                    $case = 2;
                } elseif
                ($rand == 7){
                    //ส้มตำปู
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15283911_1361427370542953_7761482730005432833_n.jpg?_nc_eui2=v1%3AAeG04oMKnr0W2psGRE1Ikf4UJLaf410XsMhUVRR5q0-9QYMbGaljmN2DJpe2CXVe7CnzssgV9adesms8eiWPsniFd3ILYv4LpoOkRLBWGkdC0-laJd38nzCaDWLCJ9WYC28&oh=b30aa391507571c1bedef57b15ccf637&oe=5963960B';
                    $case = 2;
                } elseif
                ($rand == 8){
                    //ปีกไก่ทอด
                    $img = 'https://3.bp.blogspot.com/-u9QmBob0h3o/VtkSVOTRUvI/AAAAAAAAAmM/AouDAlu0bR8/s400/%25E0%25B8%259B%25E0%25B8%25B5%25E0%25B8%2581%25E0%25B9%2584%25E0%25B8%2581%25E0%25B9%2588%25E0%25B8%2597%25E0%25B8%25AD%25E0%25B8%2594%25E0%25B8%2599%25E0%25B9%2589%25E0%25B8%25B3%25E0%25B8%259B%25E0%25B8%25A5%25E0%25B8%25B2_Fried%2Bchicken%2Bwing%2Bsauce.jpg';
                    $case = 2;
                } elseif
                ($rand == 9){
                    //กุ้งเผา
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15037097_1342648472420843_5223539816342288929_n.jpg?_nc_eui2=v1%3AAeHOwYti5iVuowj-c7cOevqsJ0jf-9ha_uPlIxTf8K8S8d9xlGxmCmlpaX4okhuhqZb1hdOszbcpcr8kc-9aoQ6fDZdlYMn6auIZmrc7fqaD58HGAuhJiB9C0oDKYtmxhGQ&oh=d57c162254c4a9f405b1ba26b1b00a27&oe=59693763';
                    $case = 2;
                } elseif
                ($rand == 10){
                    //ไก่ป๊อป
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/16681712_1451438271541862_6825978108435665747_n.jpg?_nc_eui2=v1%3AAeFF_EqcZj5d4zF17chNdlKrAE07gS-8I37k3WTEEEsMoEh3rm7OulxBJA5tBtP-5Kx-WvUiaDcd_kzN5jVoc5FM-9Wk88YxT6DEaUpuX1XYl23v9eoSHuYUFKDGQzEWupo&oh=232d9f34ace74412039ed58534ea03e8&oe=59570945';
                    $case = 2;
                } elseif
                ($rand == 11){
                    //น้ำแข็งใส
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/15747600_1393550303997326_9089658969736741474_n.jpg?_nc_eui2=v1%3AAeGy-OD_V7UrJJYgfDpLFcE2siCxQGEitNcXt9dftS0X97sRyBpxQs__BP-uy0Ic3IpMfyDsW_3fghvGh_Cq8rj4s1hutIT3_VgD5opfsNdEromZxgnAnrseJPA8APDV8TE&oh=3a9007c7ac5def2a346d586814cef4c0&oe=5961BD8A';
                    $case = 2;
                } elseif
                ($rand == 12){
                    //สเต๊ก
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14064244_1259240684094956_5699750533993144686_n.jpg?_nc_eui2=v1%3AAeG40yQP3cTY-FDLAqMY_b9mFRMjVZHZgxBGE-D9KYnaG7CAeQLdTNvX-IbzpN6g0fE2dehYi70wa0AJJ_k90s4oXdGueAILFggT5dqsTutTikx71LVIlMm0mbEWIYy7Yxw&oh=7985de19572878f86f5c12ef7228b569&oe=595F94B4';
                    $case = 2;
                } elseif
                ($rand == 13){
                    //หมูซีอิ๊ว
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/13692523_1238803829471975_3260471915492857128_n.jpg?_nc_eui2=v1%3AAeHNoU5fI4ArJnIOdmAagk0J8kIelEyjpb_9MTiA18DKSHWmQ5jr1w8nFdRAyqWDlcB6KrwqIFeQYML7gwyf9XxsctMTAw2NbA8pwz7DpLdyKp8bP2APKMmAt2uWtSWV5zg&oh=777292fbb415865af77c1937c0bf984d&oe=5972EC44';
                    $case = 2;
                } elseif
                ($rand == 14){
                    //แพนเค้ก
                    $img = 'https://scontent.fbkk3-2.fna.fbcdn.net/v/t1.0-9/14980612_1341613305857693_8945739289078424763_n.jpg?_nc_eui2=v1%3AAeFUF3mXBczyX9d4YUa4iX-0AEh1jrlgn99qc6Y_l5fpRLhEtRPzhWUOpo0JoUnuz1yrUUCepLhsrPDb0qalIbyxczFbrmZgyWUAZdk0WaQjWtRoibigLuY642IrDA9eVwY&oh=446a57ba44b65c144a8a869ce2faceb3&oe=59283395';
                    $case = 2;
                }else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
            }

            if ( strpos($textinput, 'เตี๋ยว') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'ก๋วยเตี๋ยวหมูน้ำตกใส่ไข่ร้านพี่นนจัดไป';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/13920658_519863781555401_3026708436745190096_n.jpg?oh=dc77891f0b78bb6dbaa70c5e1fcd8ee7&oe=592530B4';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17425058_1483414298344259_1931199174478394490_n.jpg?oh=5f853590f4d61f195b57c5c7ec43682a&oe=59537948';
                    $case = 2;
                }elseif($rand == 3){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17201333_611002365774875_1925728978534279915_n.jpg?oh=81eca42ced60b813cc3bcaafccbd9627&oe=59537445';
                    $case = 2;
                }elseif($rand == 4){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16998688_606368339571611_7856330434991689198_n.jpg?oh=deb0fe2948a91cce67bd3158d867fa6d&oe=596F6E85';
                    $case = 2;
                }else {
                    $text = 'ไปเลยร้านพี่นนที่สุพรรณบุรี อย่างเด็ด';
                    $case = 1;
                }

            }

            if ( strpos($textinput, 'อ.หมวย') !== false || strpos($textinput, 'อาจารย์หมวย') !== false  ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'อ.หมวย UJ รู้จักป่าว';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/14642422_210542886032805_7675869105965990138_n.jpg?oh=6fd3badac2b44bd95d2a9a7ac77ba754&oe=59617CEB';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/13244813_110020342751727_3817456280435157227_n.jpg?oh=a3ec4a960ad9889a9461851337e48185&oe=59711188';
                    $case = 2;
                }elseif($rand == 3){
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/13417416_134726200281141_1649590718476967130_n.jpg?oh=4c154ad20970958bbc5dd73d5ba2ca59&oe=592E665E';
                    $case = 2;
                } elseif($rand == 4) {
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/13419055_138052733281821_9046111837315737418_n.jpg?oh=50ac80d0994d8ad04b3d69e643a3e96d&oe=5964C9F6';
                    $case = 2;
                }else {
                    $text = 'ที่ชอบกินหมูกระทะอะนะ';
                    $case = 1;
                }

            }

            if ( strpos($textinput, 'อ.โบ') !== false || strpos($textinput, 'อาจารย์โบ') !== false ) {
                $rand = rand(0, 4);
                if ($rand == 0) {
                    $text = 'อ.โบ สายซิ่งใช่มั๊ย';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/16807681_1386867288001489_422059173499568390_n.jpg?oh=dcabe39e3467d710ff447a1480ec03a4&oe=596CCE92';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/16708277_1378869288801289_570203938737589629_n.jpg?oh=feba672fba2ebe3c6c849b9ab6df3aa4&oe=592C2E07';
                    $case = 2;
                }elseif($rand == 3){
                    $img = 'https://scontent.fbkk5-2.fna.fbcdn.net/v/t1.0-9/181392_407913152563579_517848466_n.jpg?oh=49ce38b5ff3052219fcfdf8aafe501fd&oe=5966D8C0';
                    $case = 2;
                } else {
                    $text = 'หน้าตาดีนะ อ.โบ อ่ะ';
                    $case = 1;
                }

            }

            if (strpos($textinput, 'แอ็ค') !== false || strpos($textinput, 'แอค') !== false || strpos($textinput, 'acme') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'หมายถึง คุณวรวัฒน์ นาคแนวดี ใช่มั๊ย';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-7.fna.fbcdn.net/v/t1.0-9/14680641_1207250915984703_5166523048446004053_n.jpg?oh=6c2dc997ad6ddee7dfb6043c95255c28&oe=59619AF3';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16832276_1337523219624138_7156412505552632856_n.jpg?oh=a1fe318c02c443f3bcf4e7f51954a2a5&oe=59324C22';
                    $case = 2;
                }elseif($rand == 3){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/16711599_1330312867011840_5278709608965655057_n.jpg?oh=53e29adee7a28c049a27ba71159bdf39&oe=595FE27E';
                    $case = 2;
                }elseif($rand == 4){
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/15400548_1264708023572325_6454274480658165148_n.jpg?oh=b527678259fabd966451ebf047640b87&oe=59693A0E';
                    $case = 2;
                } else {
                    $text = 'เป็นอาจารย์ที่พวกเราเคารพนับถือ';
                    $case = 1;
                }

            }

            if (strpos($textinput, 'อาจารย์เดียร์') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'หมายถึง คุณศราวุฒิ ม่วงชู ใช่มั๊ย';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/15621963_10154794339812354_8344217722931743911_n.jpg?oh=0de51450e09782eecd5fd5fd9f582445&oe=596A4906';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/13508878_10154262811077354_2697326683941775815_n.jpg?oh=a452a37395ee17cb3ec4425567bc6b97&oe=596306A4';
                    $case = 2;
                }elseif($rand == 3){
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/13226652_10154185379792354_2113191577035189210_n.jpg?oh=85c81c1d629f7a23b1dadd201d692e1c&oe=5953C587';
                    $case = 2;
                }elseif($rand == 4){
                    $img = 'https://scontent.fbkk5-8.fna.fbcdn.net/v/t1.0-9/7670_10153932320632354_5658525607111014161_n.jpg?oh=6945b0f5de5943fff1709a09c7c65743&oe=5960E3A0';
                    $case = 2;
                } else {
                    $text = 'เป็นอาจารย์ที่เก่งมากในการวิเคราะห์ตลาดทองคำ ใครอยากได้ความรู้อะไรสอบถามได้เลย';
                    $case = 1;
                }

            }

            if (strpos($textinput, 'ควย') !== false || strpos($textinput, 'คว ย') !== false || strpos($textinput, 'ค ว ย') !== false || strpos($textinput, 'ค วย') !== false ) {
                $rand = rand(0,3);
                if($rand == 0) {
                    $text = 'เอาไว้ฟาดหัวมึงอะครับ';
                }elseif($rand == 1) {
                    $text = 'ควยอะไรละครับ';
                }elseif($rand == 2) {
                    $text = 'กูมีไม่ต้องแจก';
                }else {
                    $text = 'อ้าวๆ อยากมีเรื่องว่างั้น';
                }
                $case = 1;
            }

            if (strpos($textinput, 'บิน') !== false ) {
                $rand = rand(0,4);
                if($rand == 0){
                    $text = 'ไปดาวไซย่าเลยมั๊ย';
                    $case = 1;
                }elseif($rand == 1){
                    $text = '1000 จุดไป';
                    $case = 1;
                }elseif($rand == 2){
                    $text = 'panic หรือป่าว';
                    $case = 1;
                } elseif($rand == 3){
                    $text = 'สงสัยจะไปดาวนาแม๊ก';
                    $case = 1;
                } else{
                    $img = 'https://i.ytimg.com/vi/DUnO7weCfdM/maxresdefault.jpg';
                    $case = 2;
                }
            }

            if (strpos($textinput, 'ทุบ') !== false ) {
                $rand = rand(0,4);
                if($rand == 0){
                    $text = 'สงสัยจะไปแกนโลก';
                    $case = 1;
                }elseif($rand == 1){
                    $text = 'แดงเป็นแกงพะแนงแล้ว';
                    $case = 1;
                }elseif($rand == 2){
                    $text = 'panic หรือป่าว';
                    $case = 1;
                }elseif($rand == 3){
                    $text = 'ทุบหนักๆ';
                    $case = 1;
                }else{
                    $img = 'http://files.gamebanana.com/img/ico/sprays/mario_with_hammer_preview.png';
                    $case = 2;
                }
            }

            if ( strpos($textinput, 'uj') !== false || strpos($textinput, 'ทอง') !== false || strpos($textinput, 'gold') !== false || strpos($textinput, 'xau') !== false || strpos($textinput, 'Xau') !== false || strpos($textinput, 'XAU') !== false || strpos($textinput, 'Gold') !== false || strpos($textinput, 'GOLD') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'buy หรือ sell ดีละ';
                }elseif($rand == 1){
                    $text = 'ผันผวนมั๊ยช่วงนี้';
                }else{
                    $text = 'ตอนนี้เล่นหน้าไหนกัน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'buy') !== false || strpos($textinput, 'sell') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'กี่ lot ดี';
                }elseif($rand == 1){
                    $text = '100 Lot เลยดีมั๊ย';
                }elseif($rand == 2){
                    $text = 'เทสตลาดซัก 1 Lot';
                }else{
                    $text = 'อยากจะกดแต่ใจไม่กล้า 55';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ปอด') !== false || strpos($textinput, 'ป็อด') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'ไม่ได้ป็อดหว่ะ';
                }elseif($rand == 1){
                    $text = 'ตลาดมันผันผวนไม่อยากเข้าไปเสี่ยง';
                }elseif($rand == 2){
                    $text = 'ดูเลเวลด้วย รุ่นนี้ไม่มีป๊อด';
                }else{
                    $text = 'ศิษย์ใครดูด้วย สะกดไม่เป็นนะคำนี้อ่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ติดบาย') !== false || strpos($textinput, 'ติดbuy') !== false || strpos($textinput, 'ติดไม้buy') !== false || strpos($textinput, 'ติดไม้ buy') !== false  ) {
                $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง buy limit ไว้';
                $case = 1;
            }

            if (strpos($textinput, 'ติดเซล') !== false || strpos($textinput, 'ติดsell') !== false || strpos($textinput, 'ติดไม้sell') !== false || strpos($textinput, 'ติดไม้ sell') !== false  ) {
                $text = 'แก้ไม้สิ ไปหาจุดกลับตัวแล้วตั้ง sell limit ไว้';
                $case = 1;
            }

            if (strpos($textinput, 'เฮด') !== false || strpos($textinput, 'เฮจ') !== false || strpos($textinput, 'hedg') !== false ) {
                $rand = rand(0,1);
                if($rand == 0){
                    $text = 'เป็นสิ่งที่ไม่น่าทำ แต่ถ้ามันจำเป็นก็ทำไปเถอะ';
                }else{
                    $text = 'ถึงกับเฮดเลยหรอ ขอให้ปลดได้ไวๆนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เหนื่อย') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'หากเหนื่อยนักขอจงหยุดพักเสียก่อน อย่าใจร้อนรีบไปเดี๋ยวมันไม่เข้าที';
                }elseif($rand == 1){
                    $text = 'เหนื่อยก็ไปพักผ่อนไป';
                }else{
                    $text = 'เหนื่อยมากมั๊ย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เพลีย') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'แหนะๆ ไปทำอะไรมาเพลีย';
                }elseif($rand == 1){
                    $text = 'เพลียกราฟหรือเพลียอะไร';
                }else{
                    $text = 'ไม่หลับไม่นอนก็เป็นงี้แหละ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ง่วง') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ง่วงก็ไปนอนสิ';
                }elseif($rand == 1){
                    $text = 'ทำอะไรไม่หลับไม่นอน เฝ้ากราฟ ?';
                }else{
                    $text = 'พักบ้างอะไรบ้าง ไม่ต้องเฝ้ามากหรอกกราฟอ่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'คัน') !== false ) {
                $text = 'ใจเย็นๆ รอสัญญาณก่อน รีบเข้าเจ็บตัวได้นะ';
                $case = 1;
            }

            if (strpos($textinput, 'แข็ง') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'ถ้าโดนกระแทกบ่อยๆก็อาจจะทะลุได้นะ ระวังกันด้วย';
                }elseif($rand == 1){
                    $text = 'มันตรงกับจุดกลับตัว TF ไหนป่าว เช็คหน่อย';
                }elseif($rand == 2){
                    $text = 'เจอป้าเยกับลุงทรัมป์จะแข็งไหวหรอ 555';
                }else{
                    $text ='ตรงกับจุดกลับตัวหลายคู่เลยมั๊ย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ฝันดี') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'ฝันดีนะครับ';
                }elseif($rand == 1){
                    $text = 'Good Night.';
                }elseif($rand == 2){
                    $text = 'Sweet Dream ครับ';
                }else{
                    $text = 'Good Night ครับ ถ้ามีออเดอร์ตั้ง SL กำไรไว้ด้วยนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เซ็ง') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ใจเย็นๆ สูดหายใจเข้าลึกๆ';
                }elseif($rand == 1){
                    $text = 'เซ็งอะไร';
                }else{
                    $text = 'คืนนี้ไปไหนว่ามา จะจัดให้หายเซ็ง';
                }
                $case = 1;
            }


            if (strpos($textinput, 'เงียบ') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'ให้พักบ้างเถอะ ซัด m-150 ไป 2 ลังละ';
                }elseif($rand == 1){
                    $text = 'จะให้พูดอะไรมากมาย เหนื่อยเป็นเข้าใจป่ะ';
                }elseif($rand == 2){
                    $text = 'พอใจอ่ะ มีปัญหา ?';
                }else{
                    $text = 'เดี๋ยวเปิดเพลงให้ปะจะได้ไม่เงียบ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'โหด') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ธรรมด๊า';
                }elseif($rand == 1){
                    $text = 'โหดสัดรัสเซีย ไนจีเรียอ่ะ';
                }else{
                    $text = 'อยากเห็นยิ่งกว่านี้ป่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'แม้ง') !== false || strpos($textinput, 'แม่ง') !== false ) {
                $rand = rand(0,1);
                if($rand == 0){
                    $text = 'พูดดีๆได้ป่ะ';
                }else{
                    $text = 'แม้งอะไรละ พูดให้มันดีๆ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เกรียน') !== false || strpos($textinput, 'เกียน') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'ว่าใครเกรียนเดี๋ยวโดนเตะออกจากห้อง';
                }elseif($rand == 1){
                    $text = 'มึงอะเกรียน';
                }elseif($rand == 2){
                    $text = 'เดี๋ยวมึงจะเกรียม';
                }else{
                    $text = 'ไม่เกรียนแค่สกินเฮด';
                }
                $case = 1;
            }


            if (strpos($textinput, 'เหล้า') !== false || strpos($textinput, 'เบียร์') !== false || strpos($textinput, 'เมา') !== false || strpos($textinput, 'ปาร์ตี้') !== false || strpos($textinput, 'party') !== false  || strpos($textinput, 'Party') !== false || strpos($textinput, 'pub') !== false || strpos($textinput, 'Pub') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'จัดไปอย่าให้เสีย ที่ไหนว่ามา the pimp ดีมั๊ย';
                }elseif($rand == 1){
                    $text = '3 วัน 2 คืน ไปชิลๆ';
                }elseif($rand == 2){
                    $text = 'ทองหล่อไป อย่างเด็ด';
                }else{
                    $text = 'ร้านนั่งเล่น ทองหล่อปะละ เอาเงินไปละลายหน่อย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ล้าง') !== false || strpos($textinput, 'คัท') !== false || strpos($textinput, 'คัด') !== false || strpos($textinput, 'cut') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'จงเชื่อในการสร้างใหม่';
                }elseif($rand == 1){
                    $text = 'ไม่ต้องเสียใจนะ สู้ๆ';
                }else{
                    $text = 'ใจเย็นๆนะ เป็นกำลังใจให้';
                }
                $case = 1;
            }

            if (strpos($textinput, 'หี') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'แม่งมึงอะดิ';
                }elseif($rand == 1){
                    $text = 'ทำไม คันหรอ';
                }else{
                    $text = 'พูดจาดีๆหน่อยสัส';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ปัญญาอ่อน') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ปัญญาที่จัดรายการปริศนาฟ้าแลปอะหรอ';
                }elseif($rand == 1){
                    $text = 'ปัญญา นิรันด์กุล ใช่ป่ะ';
                }else{
                    $text = 'ว่าตัวเองทำไมครับ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'แดก') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ต้องพูดว่ารับประทาน';
                }elseif($rand == 1){
                    $text = 'จะแดกอะไรละ';
                }else{
                    $text = 'พูดเพราะๆหน่อยดิวะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'สดชื่น') !== false ) {
                $rand = rand(0,1);
                if($rand == 0){
                    $text = 'ระวังลื่นถ้าสดจัด';
                }else{
                    $text = 'สดมากไปจะกลายสลดนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กะทะ') !== false || strpos($textinput, 'กระทะ') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'หมูกระทะจะเยียวยาทุกสิ่ง';
                }elseif($rand == 1) {
                    $text = 'ไม่เบื่อไง๊ กินกันบ่อยเกิน';
                }elseif($rand == 2) {
                    $text = 'หมูกระทะอีกแล้วหรอ';
                }else{
                    $text = 'กินกันบ่อยๆระวังอ้วน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กาก') !== false || strpos($textinput, 'กา ก') !== false  || strpos($textinput, 'ก าก') !== false || strpos($textinput, 'kak') !== false  || strpos($textinput, 'Kak') !== false || strpos($textinput, 'KAK') !== false) {
                $rand = rand(0,4);
                if($rand == 0){
                    $text = 'ว่าตัวเองทำไมอ่ะ';
                }elseif($rand == 1) {
                    $text = 'มึงอะกาก';
                }elseif($rand == 2) {
                    $text = 'กากพ่อง';
                }elseif($rand == 3) {
                    $text = 'หนักหัวมึงไง๊';
                }else{
                    $text = 'เอ้า ... ว่าตัวเองซะงั้น';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ลอร์ด') !== false || strpos($textinput, 'ลอจ') !== false || strpos($textinput, 'lord') !== false || strpos($textinput, 'ลอท') !== false  ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'ไปจริงหรอ';
                }elseif($rand == 1) {
                    $text = 'กำลังเมื่อยพอดีเลย';
                }elseif($rand == 2){
                    $text = 'แต่งตัวแปป';
                }
                elseif($rand == 3){
                    $text = 'ไปด้วยดิ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ไซยา') !== false || strpos($textinput, 'นาแมก') !== false || strpos($textinput, 'นาแมค') !== false ) {
                $text = 'ดูการ์ตูนมากไปป่าว';
                $case = 1;
            }

            if (strpos($textinput, 'สวัสดี') !== false ) {
                $text = 'สวัสดีครับ';
                $case = 1;
            }

            if (strpos($textinput, 'ข่าว') !== false ) {
                $text = 'เช็คได้ที่ investing.com หรือ forexfactory.com';
                $case = 1;
            }

            if (strpos($textinput, 'ตะกร้า') !== false || strpos($textinput, 'ตระกร้า') !== false || strpos($textinput, 'finviz') !== false   ) {
                $text = 'เช็คอันดับค่าเงินได้ที่นี่ ( Refresh every 1 min )

http://www.tradersociety.org/finviz/';
                $case = 1;
            }

            if (strpos($textinput, 'Volumn') !== false || strpos($textinput, 'volumn') !== false ) {
                $text = 'Volumn คืออะไร ???

http://www.tradersociety.org/volumn-คืออะไร/';
                $case = 1;
            }

            if (strpos($textinput, 'Fibo') !== false || strpos($textinput, 'fibo') !== false ) {
                $text = 'การใช้งาน Fibo Retractment

http://www.tradersociety.org/การใช้-fibonacci-retracement/';
                $case = 1;
            }

            if (strpos($textinput, 'ยืนยันตน') !== false || strpos($textinput, 'verify') !== false ) {
                $text = 'วิธีการ Verify เอกสาร

https://www.youtube.com/watch?v=c1aJdZBIWO0';
                $case = 1;
            }

            if (strpos($textinput, 'copytrade') !== false ) {
                $text = 'วิธีการ CopyTrade

https://www.youtube.com/watch?v=f6MjuI4A1bw';
                $case = 1;
            }

            if (strpos($textinput, 'ฝากเงิน') !== false ) {
                $text = 'วิธีฝากเงินผ่านหน้าเว็บ

https://www.youtube.com/watch?v=913IcRuVdu0

หรือหากต้องการฝากกับแอดมิน add line id : tradersociety ได้เลยครับ';
                $case = 1;
            }

            if (strpos($textinput, 'ถอนเงิน') !== false ) {
                $text = 'วิธีถอนเงินผ่านหน้าเว็บ

https://www.youtube.com/watch?v=uJqwt9Cd3k4

หรือหากต้องการถอนกับแอดมิน add line id : tradersociety ได้เลยครับ';
                $case = 1;
            }

            if (strpos($textinput, 'วิเคราะห์') !== false || strpos($textinput, 'วิเคราะ') !== false ) {
                $text = 'ดูบทวิเคราะห์ประจำวัน-ย้อนหลังได้ที่ http://www.tradersociety.org หรือ add line id @tradersociety ครับ มีการวิเคราะห์ข่าวทุกเช้า ';
                $case = 1;
            }

            if (strpos($textinput, 'เงินไม่เข้า') !== false || strpos($textinput, 'เงินยังไม่เข้า') !== false ) {
                $text = 'หลังจากทำตามขั้นตอนของระบบแล้ว รอ 1-3 วันทำการ ถ้ายังไม่เข้า success รบกวนส่งหลักฐานไปที่ finance@168fx.com และ support@168fx.com ครับ';
                $case = 1;
            }

            if (strpos($textinput, 'สาส') !== false || strpos($textinput, 'สาด') !== false || strpos($textinput, 'สัด') !== false || strpos($textinput, 'สัส') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'สัดกับใครวะ';
                }elseif($rand == 1) {
                    $text = 'เพื่อนเล่นมึงหรอ';
                }elseif($rand == 2) {
                    $text = 'ทำไมละสัด';
                }else{
                    $text = 'ด่ากู ? เดี๋ยวจะโดนไม่ใช่น้อย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'สาส') !== false || strpos($textinput, 'สาด') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'จะสาดน้ำไง๊';
                }elseif($rand == 1) {
                    $text = 'แสรดดดดดด';
                }else{
                    $text = 'ทำไมละสาดดด';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ฮ่าๆๆ') !== false ) {
                $rand = rand(0,5);
                if($rand == 0){
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "100"
                    ];
                    $case = 4;
                }elseif($rand == 1) {
                    $text = 'จะขำอะไรกันนักหนา';
                }elseif($rand == 2) {
                    $text = 'พอได้ละมั้ง';
                }elseif($rand == 3) {
                    $text = 'พอๆๆ น้ำหูน้ำตาไหลหมดละ';
                }elseif($rand == 3) {
                    $text = '5555';
                }else{
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