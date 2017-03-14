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

            if (strpos($textinput, 'fuck') !== false ) {
                $rand = rand(0, 2);
                if($rand == 0){
                    $text = 'จะขมับใคร';
                }else{
                    $text = 'เดี๋ยวจัดให้หนักๆ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'fuck') !== false || strpos($textinput, 'fck') !== false) {
                $case = 1;
                $rand = rand(0, 3);
                if ($rand == 0) {
                    $text = 'พูดจาให้มันเพราะๆหน่อยนะ';
                } else {
                    $text = 'เอาภาษาไทยให้รอดนะก่อนค่อยพิมพ์อังกฤษ';
                }
            }

            if (strpos($textinput, 'บอ ท') !== false || strpos($textinput, 'บ อท') !== false || strpos($textinput, 'บ อ ท') !== false || strpos($textinput, 'บอท') !== false || strpos($textinput, 'bot') !== false) {

                $rand = rand(0, 1);
                if($rand == 0){
                    $text = 'ใครบอท บ้าป่าว';
                }else{
                    $text = 'แอดมินเช็คห้องด้วยนะ ว่าคนไหนเป็นบอท เดี๋ยวจะเตะออกจากห้อง';
                }
                $case = 1;
            }

            if (strpos($textinput, 'มึง') !== false || strpos($textinput, 'กู') !== false || strpos($textinput, 'เหีย') !== false || strpos($textinput, 'กรู') !== false || strpos($textinput, 'กุ') !== false || strpos($textinput, 'มรึง') !== false ) {
                $rand = rand(0, 2);
                if($rand == 0){
                    $text = 'พูดจาให้สุภาพหน่อยนะ';
                }else{
                    $text = 'พูดดีๆหน่อย อย่าต้องให้หัวร้อน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'หิว') !== false) {
                $rand = rand(0, 5);
                if ($rand == 0)
                {
                    //กะเพราะ
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/17201409_1474786112540411_2680645997537564107_n.jpg?oh=ab106345b76faf434ea4ba261dab71d9&oe=5933D9D8';
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
                    //ก๋วยเตี๋ยว
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/14264216_1282611368424554_3151876959456083125_n.jpg?oh=fa0c3f0bc9c2d343cda0eb6a244f85fa&oe=5964825F';
                    $case = 2;
                } elseif
                ($rand == 5){
                    //สปาเก็ตตี้
                    $img = 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/13938350_1258330927519265_5654713759923322084_n.jpg?oh=fb864e38777280c2b01070e1e6c6f749&oe=5933A236';
                    $case = 2;
                }  else {
                    $text = 'กินอะไรกันดีละ';
                    $case = 1;
                }
            }

            if (strpos($textinput, 'muay') !== false || strpos($textinput, 'muaey') !== false || strpos($textinput, 'หมวย') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'อ.หมวย UJ รู้จักป่าว';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'http://i65.tinypic.com/bgwols.jpg';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'http://i64.tinypic.com/mx0r2x.jpg';
                    $case = 2;
                }elseif($rand == 3){
                    $img = 'http://i63.tinypic.com/2my9sgp.jpg';
                    $case = 2;
                } elseif($rand == 4) {
                    $img = 'http://i66.tinypic.com/2hs0mt5.jpg';
                    $case = 2;
                }else {
                    $text = 'ที่ชอบกินหมูกระทะอะนะ';
                    $case = 1;
                }

            }

            if (strpos($textinput, 'bo') !== false || strpos($textinput, 'โบ') !== false || strpos($textinput, 'โบว') !== false ) {
                $rand = rand(0, 5);
                if ($rand == 0) {
                    $text = 'อ.โบ สายซิ่งใช่มั๊ย';
                    $case = 1;
                }elseif($rand == 1){
                    $img = 'http://i68.tinypic.com/2a94fg7.jpg';
                    $case = 2;
                }elseif($rand == 2){
                    $img = 'http://i63.tinypic.com/2mq3j88.jpg';
                    $case = 2;
                } else {
                    $text = 'ใช่ที่หน้าตาหล่อๆป่าว';
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

            if (strpos($textinput, 'ควย') !== false || strpos($textinput, 'คว ย') !== false || strpos($textinput, 'ค ว ย') !== false || strpos($textinput, 'ค วย') !== false ) {
                $rand = rand(0,2);
                if($rand == 0) {
                    $text = 'เอาไว้ฟาดหัวมึงอะครับ';
                }elseif($rand == 1) {
                    $text = 'ควยอะไรละครับ';
                }else {
                    $text = 'อ้าวๆ อยากมีเรื่องว่างั้น';
                }
                $case = 1;
            }

            if (strpos($textinput, 'บิน') !== false ) {
                $rand = rand(0,4);
                if($rand == 0){
                    $text = 'ไปดาวไซย่าเลยมั๊ย';
                }elseif($rand == 1){
                    $text = '1000 จุดไป';
                }elseif($rand == 2){
                    $text = 'panic หรือป่าว';
                } elseif($rand == 3){
                    $text = 'สงสัยจะไปดาวนาแม๊ก';
                } elseif($rand == 4){
                    $text = 'panic หรือป่าว';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ทุบ') !== false ) {
                $rand = rand(0,3);
                if($rand == 0){
                    $text = 'สงสัยจะไปแกนโลก';
                }elseif($rand == 1){
                    $text = 'แดงเป็นแกงพะแนงแล้ว';
                }elseif($rand == 2){
                    $text = 'panic หรือป่าว';
                }elseif($rand == 3){
                    $text = 'ทุบหนักๆ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ทอง') !== false || strpos($textinput, 'uj') !== false || strpos($textinput, 'ยูเจ') !== false || strpos($textinput, 'gold') !== false || strpos($textinput, 'xau') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'buy หรือ sell ดีละ';
                }else{
                    $text = 'ตอนนี้เล่นหน้าไหนกัน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'buy') !== false || strpos($textinput, 'sell') !== false || strpos($textinput, 'บาย') !== false || strpos($textinput, 'เซล') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'กี่ lot ดี';
                }elseif($rand == 1){
                    $text = '100 Lot เลยดีมั๊ย';
                }elseif($rand == 2){
                    $text = 'เทสตลาดซัก 1 Lot';
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
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'เป็นสิ่งที่ไม่อยากให้ทำเลย แต่ถ้ามันจำเป็นก็ทำไปเถอะ';
                }else{
                    $text = 'ถึงกับเฮดเลยหรอ ขอให้ปลดได้ไวๆนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เหนื่อย') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'หากเหนื่อยนักขอจงหยุดพักเสียก่อน อย่าใจร้อนรีบไปเดี๋ยวมันไม่เข้าที';
                }else{
                    $img = 'https://i63.tinypic.com/35cmnn4.png';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, 'เพลีย') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'แหนะๆ ไปทำอะไรมาเพลีย';
                }else{
                    $text = 'ก็ไปพักผ่อนบ้าง';
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
                }else{
                    $text ='แท่งเทียนจุดกลับตัวขนาดใหญ่มากมั๊ย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'ฝันดี') !== false || strpos($textinput, 'หลับ') !== false || strpos($textinput, 'นอน') !== false || strpos($textinput, 'night') !== false  || strpos($textinput, 'gn') !== false ) {
                $text = 'Good Night นะครับ ถ้ามีออเดอร์ตั้ง SL กำไรไว้ด้วยนะ';
                $case = 1;
            }

            if (strpos($textinput, 'เซ็ง') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ใจเย็นๆ สูดหายใจเข้าลึกๆ';
                }else{
                    $text = 'ยังงี้ต้องดื่มให้หายเซ็ง';
                }
                $case = 1;
            }

            if (strpos($textinput, 'สปาย') !== false || strpos($textinput, 'spy') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'คนไหน คนไหน เดี๋ยวจัดให้หนัก';
                }else{
                    $text = 'ใครแอบแฝงรีบออกไปซะ อย่าให้หัวร้อน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'เงียบ') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ให้พักบ้างเถอะ ซัด m-150 ไป 2 ลังละ';
                }else{
                    $text = 'เดี๋ยวเปิดเพลงให้จะได้ไม่เงียบ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'โหด') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ธรรมด๊า';
                }else{
                    $text = 'อยากเห็นยิ่งกว่านี้ป่ะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'แม้ง') !== false || strpos($textinput, 'แม่ง') !== false ) {
                $text = 'แม้งอะไรละ พูดให้มันดีๆ';
                $case = 1;
            }

            if (strpos($textinput, 'เกรียน') !== false || strpos($textinput, 'เกียน') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ว่าใครเกรียนเดี๋ยวโดนเตะออกจากห้อง';
                }else{
                    $text = 'ไม่เกรียนแค่สกินเฮด';
                }
                $case = 1;
            }


            if (strpos($textinput, 'เหล้า') !== false || strpos($textinput, 'เบีย') !== false || strpos($textinput, 'เมา') !== false || strpos($textinput, 'ปาตี้') !== false || strpos($textinput, 'ปาร์ตี้') !== false || strpos($textinput, 'party') !== false  ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'จัดไปอย่าให้เสีย ที่ไหนว่ามา the pimp ดีมั๊ย';
                }else{
                    $img = 'https://www.bartendermixed.com/wp-content/uploads/2011/06/alcohol-bottles.jpg';
                    $case = 2;
                }
                $case = 1;
            }

            if (strpos($textinput, 'ล้าง') !== false || strpos($textinput, 'คัท') !== false || strpos($textinput, 'คัด') !== false || strpos($textinput, 'cut') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'จงเชื่อในการสร้างใหม่';
                }else{
                    $text = 'ใจเย็นๆนะ เป็นกำลังใจให้';
                }
                $case = 1;
            }

            if (strpos($textinput, 'หี') !== false ) {
                $text = 'พูดจาให้สุภาพหน่อย เดี๋ยวจะโดนเตะออกจากกลุ่ม';
                $case = 1;
            }

            if (strpos($textinput, 'ปัญญา') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ปัญญาที่จัดรายการปริศนาฟ้าแลปอะหรอ';
                }else{
                    $text = 'ว่าตัวเองทำไมครับ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'แดก') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ต้องพูดว่ารับประทาน';
                }else{
                    $text = 'พูดเพราะๆหน่อย';
                }
                $case = 1;
            }

            if (strpos($textinput, 'สดชื่น') !== false ) {
                $rand = rand(0,2);
                if($rand == 0){
                    $text = 'ระวังลื่นถ้าสดจัด';
                }else{
                    $text = 'สดมากไปจะกลายสลดนะ';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กะทะ') !== false || strpos($textinput, 'กระทะ') !== false ) {
                $rand = rand(0,5);
                if($rand == 0){
                    $text = 'หมูกระทะจะเยียวยาทุกสิ่ง';
                }elseif($rand == 1) {
                    $text = 'ไม่เบื่อไง๊ กินกันบ่อยเกิน';
                }else{
                    $text = 'กินกันบ่อยๆระวังอ้วน';
                }
                $case = 1;
            }

            if (strpos($textinput, 'กาก') !== false || strpos($textinput, 'กา ก') !== false  || strpos($textinput, 'ก าก') !== false || strpos($textinput, 'kak') !== false) {
                $rand = rand(0,5);
                if($rand == 0){
                    $text = 'ว่าตัวเองทำไมอ่ะ';
                }elseif($rand == 1) {
                    $text = 'ไม่เบื่อไง๊ กินกันบ่อยเกิน';
                }else{
                    $text = 'ว่าตัวเองซะงั้น';
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
                $text = 'เช็คอันดับค่าเงินได้ที่นี่

https://www.tradersociety.org/finviz/';
                $case = 1;
            }

            if (strpos($textinput, 'ฝากเงิน') !== false ) {
                $text = 'วิธีฝากเงินผ่านหน้าเว็บ

https://www.youtube.com/watch?v=913IcRuVdu0

หรือหากต้องการฝากกับแอดมิน add line id : trader society ได้เลยครับ';
                $case = 1;
            }

            if (strpos($textinput, 'ถอนเงิน') !== false ) {
                $text = 'วิธีถอนเงินผ่านหน้าเว็บ

https://www.youtube.com/watch?v=uJqwt9Cd3k4

หรือหากต้องการถอนกับแอดมิน add line id : trader society ได้เลยครับ';
                $case = 1;
            }

            if (strpos($textinput, 'วิเคราะห์') !== false || strpos($textinput, 'วิเคราะ') !== false ) {
                $text = 'ดูบทวิเคราะห์ประจำวัน-ย้อนหลังได้ที่ https://www.tradersociety.org หรือ add line id @tradersociety ครับ ';
                $case = 1;
            }

            if (strpos($textinput, 'เงินไม่เข้า') !== false || strpos($textinput, 'เงินยังไม่เข้า') !== false ) {
                $text = 'หลังจากโอนเงินและทำตามขั้นตอนของระบบแล้ว รอ 1-3 วันทำการ ถ้าเงินยังไม่เข้ารบกวนส่งหลักฐานการโอนเงินไปที่ finance@168fx.com และ support@168fx.com ครับ';
                $case = 1;
            }

            if (strpos($textinput, 'สาส') !== false || strpos($textinput, 'สาด') !== false || strpos($textinput, 'สัด') !== false || strpos($textinput, 'สัส') !== false ) {
                $text = 'สัดไรละครับ';
                $case = 1;
            }

            if (strpos($textinput, '555') !== false || strpos($textinput, 'ฮา') !== false || strpos($textinput, 'ฮ่า') !== false || strpos($textinput, 'ฮ่าๆ') !== false || strpos($textinput, 'ขำ') !== false ) {
                $rand = rand(0,1);
                if($rand == 0){
                    $array = [
                        "id" => "325708",
                        "type" => "sticker",
                        "packageId" => "1",
                        "stickerId" => "100"
                    ];
                    $case = 4;
                }else{
                    $text = 'ขำท้องแข็งละ';
                    $case = 1;
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