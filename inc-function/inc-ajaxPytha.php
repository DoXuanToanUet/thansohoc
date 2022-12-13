<?php 
// Action Pytha form 
add_action('wp_ajax_pythaAction', 'pythaAction');
add_action('wp_ajax_nopriv_pythaAction', 'pythaAction');

function pythaAction(){
    $hddd     = isset( $_POST['hddd'] ) ? $_POST['hddd'] : ''; // lấy taxonomy
    $url_to_postid = url_to_postid(home_url().'/bai-hoc-duong-doi-ung-voi-so-'.$hddd);
    // ob_start();
    $content_post = get_post($url_to_postid);
    $content = $content_post->post_content;
    ?>
        <div class="content">
            <h2 style="color:#fff">Luận giải </h2>
            
            <?php echo $content;?>
            <p onclick="window.location.reload();" class="btn-dev">Xem luận giải lại </p>
        </div>
    <?php
    // $content = ob_get_clean();
    // return $content;
    // wp_reset_query();
   die();
    
    
}
// Action Pytha form 
add_action('wp_ajax_pythaActionv2', 'pythaActionv2');
add_action('wp_ajax_nopriv_pythaActionv2', 'pythaActionv2');

function pythaActionv2(){
    $hddd     = isset( $_POST['hddd'] ) ? $_POST['hddd'] : ''; 
    $name     = isset( $_POST['name'] ) ? $_POST['name'] : ''; 
    $birth     = isset( $_POST['birth'] ) ? $_POST['birth'] : ''; 
    $nltn     = isset( $_POST['nltn'] ) ? $_POST['nltn'] : ''; 
   
    $nltn_post = url_to_postid(home_url().'/nang-luc-tu-nhien-ung-voi-so-'.$nltn);
    // ob_start();
    $url_to_postid = url_to_postid(home_url().'/bai-hoc-duong-doi-ung-voi-so-'.$hddd);
    $content_post = get_post($url_to_postid);
    $content = $content_post->post_content;
    $title = $content_post->post_title;

    $nltn_content_post = get_post($nltn_post);
    $nltn_content = $nltn_content_post->post_content;
    $nltn_title = $nltn_content_post->post_title;

    ?>
        <div class="pytha-step1">
            <h5 class="modal-title text-center" id="exampleModalLongTitle" style="color:#fff">SỐ CHỦ ĐẠO</h5>
            <div class="pytha-content">
                <div class="pytha-name-title text-center">
                    <span>Họ và tên:</span>
                    <span class="pytha-name"><?= $name;?></span>
                </div>
                <div class="pytha-birth-title text-center">
                    <span>Ngày sinh:</span>
                    <span class="pytha-birth"><?= $birth;?></span>
                </div>
            </div>
            <div class=" mandala-container ">
                <div class="pytha-number">
                </div>
                <div class="mandala-number pulse"><?= $hddd;?></div>
            </div>
            <!-- <button class="btn-dev btn-pytha text-center">Xem luận giải chi tiết luận giải</button> -->
        </div>
        <div class="content">
            <div class="bhdd result-pytha">
                <h2><?php echo $title; ?></h2>
                <?php echo $content;?>
            </div>
            <div class="nltn result-pytha">
                <h2><?php echo $nltn_title; ?></h2>
                <?php echo $nltn_content;?>
            </div>
            <!-- <p onclick="window.location.reload();" class="btn-dev">Xem luận giải lại </p> -->
        </div>
    <?php
    // $content = ob_get_clean();
    // return $content;
    // wp_reset_query();
   die();
    
    
}

// Action Sim so form 
add_action('wp_ajax_simsoAction', 'simsoAction');
add_action('wp_ajax_nopriv_simsoAction', 'simsoAction');

function simsoAction(){
    $ssyear     = isset( $_POST['ssyear'] ) ? $_POST['ssyear'] : ''; // lấy taxonomy
    $url_to_postid = url_to_postid(home_url().'/sim-so-'.$ssyear);
    // ob_start();
    $content_post = get_post($url_to_postid);
    $content = $content_post->post_content;
    ?>
        <div class="content">
            <!-- <h2 style="color:#fff">Luận giải </h2> -->
            <?php echo $content;?>
            <!-- <p onclick="window.location.reload();" class="btn-dev">Xem luận giải lại </p> -->
        </div>
    <?php
    // $content = ob_get_clean();
    // return $content;
    // wp_reset_query();
   die();
    
    
}


add_action('wp_ajax_pythaActionv3', 'pythaActionv3');
add_action('wp_ajax_nopriv_pythaActionv3', 'pythaActionv3');

function pythaActionv3(){
    $day      = isset( $_POST['day'] ) ? $_POST['day'] : ''; 
    $month    = isset( $_POST['month'] ) ? $_POST['month'] : ''; 
    $year     = isset( $_POST['year'] ) ? $_POST['year'] : ''; 
    $bhdd     = isset( $_POST['bhdd'] ) ? $_POST['bhdd'] : ''; 
    $name     = isset( $_POST['name'] ) ? $_POST['name'] : ''; 
    // var_dump($name);
    // print_r( ($day) );
    // print_r( ($bhdd) );
    // Handle CSDD
//     if ( $day == '11' || $day == '22' ){
//         $day = $day;
//     }else{
//         while ( strlen($day) >1){ 
//             $day_lenght = str_split($day);
//             $day = array_sum($day_lenght);
           
//             if ( $day === 11 || $day === 22 ){
//                 $day = $day;
//                 break;
//             }
//         }
      
//     }

//     if ( $month == '11'){
//         $month = $month;
//     }else{
//         while ( strlen($month) >1){ 
//             $month_lenght = str_split($month);
//             $month = array_sum($month_lenght);
//         }
//     }


//     while ( strlen($year) >1){ 
//         $year_lenght = str_split($year);
//         $year = array_sum($year_lenght);
        
//         if ( $year === 11 || $year === 22 ||  $year === 33){
//             $year = $year;
//             break;
//         }
//     }

//    $hddd = $day + $month + $year;

//    while ( strlen((string)$hddd ) >1){ 
//         $hddd_lenght = str_split($hddd);
//         $hddd = array_sum($hddd_lenght);
        
//         if ( $hddd === 11 || $hddd === 22 ||  $hddd === 33){
//             $hddd = $hddd;
//             break;
//         }
//     }

//     echo "<pre>";
//     print_r($day );
//     print_r($month );
//     print_r($year );
//     print_r($hddd );
//     echo "</pre>";
    $PYTHAGOREAN = [
        'a'=> 1,
        'b'=> 2,
        'c'=> 3,
        'd'=> 4,
        'e'=> 5,
        'f'=> 6,
        'g'=> 7,
        'h'=> 8,
        'i'=> 9,
        'j'=> 1,
        'k'=> 2,
        'l'=> 3,
        'm'=> 4,
        'n'=> 5,
        'o'=> 6,
        'p'=> 7,
        'q'=> 8,
        'r'=> 9,
        's'=> 1,
        't'=> 2,
        'u'=> 3,
        'v'=> 4,
        'w'=> 5,
        'x'=> 6,
        'y'=> 7,
        'z'=> 8
    ];
    $name1 = preg_replace('/\s+/', '', $name);
    $name2 = str_split($name1);
    $word = explode(' ', $name);
    $cscbWord = explode(' ', $name);
    // echo "<pre>";
    // var_dump($name1);
    // echo "</pre>";

    // Calc sum Pytha number still 1 number
    function sumPytha($cssm_sum1){
        $cssm = $cssm_sum1;
        $u =strlen((string)$cssm );
        // echo "<pre>";
        // var_dump($u);
        // echo "</pre>";
        while ( strlen((string)$cssm ) >1){ 
            $b = (string)$cssm;
            $cssm_lenght = str_split($b);
            $sum = array_sum($cssm_lenght);
            if ( $sum === 11 || $sum === 22 ||  $sum === 33){
                $cssm = $sum;
                break;
            } 
            $cssm = $sum;
        }
        return $cssm;
    }
    function sumPytha3($cssm_sum1){
        $cssm = $cssm_sum1;
        $u =strlen((string)$cssm );
        // echo "<pre>";
        // var_dump($u);
        // echo "</pre>";
        while ( strlen((string)$cssm ) >1){ 
            $b = (string)$cssm;
            $cssm_lenght = str_split($b);
            $sum = array_sum($cssm_lenght);
            if ( $sum === 11 || $sum === 22){
                $cssm = $sum;
                break;
            } 
            $cssm = $sum;
        }
        return $cssm;
    }
    function sumPytha2($cssm_sum1){
        $cssm = $cssm_sum1;
        $u =strlen((string)$cssm );
        while ( strlen((string)$cssm ) >1){ 
            $b = (string)$cssm;
            $cssm_lenght = str_split($b);
            $sum = array_sum($cssm_lenght);
            $cssm = $sum;
        }
        return $cssm;
    }
    // Calc sum Pytha Char 
    function sumPythaChar($char_arr,$PYTHAGOREAN){
        foreach ($char_arr as $char){   
            if ( isset($PYTHAGOREAN[$char]) ){
                $sumCharNumber = $sumCharNumber + $PYTHAGOREAN[$char];
            }
        }
        return $sumCharNumber;
    }

    /*==============================*/
    // 2. Chỉ số sứ mệnh 
    /*==============================*/
    $cssm_sum = sumPythaChar($name2,$PYTHAGOREAN);
    $cssm_number = sumPytha($cssm_sum);
   
    /*==============================*/
    //Chỉ số LINH HỒN
    /*==============================*/
    $consonant= ["b","c","d","f","g","h",
    "j","k","l","m","n","p","q","r","s","t","v","w","x","z"];
    $vowel = ['u','e','o','a','i'];
    $CSLH =0;
    // $cslh_arr = 0;
   
    foreach ( $word as $wordItem){
        if ( str_contains($wordItem,'y') ){ 
            if ( $wordItem  === 'y'){
                $CSLH = $CSLH  + 7;
            } else{   
                $wordItem = str_split($wordItem);
                foreach ($wordItem as $k=>$char){        
                    if ( $char ==='y' && in_array($wordItem[$k+1],$consonant) && in_array($wordItem[$k-1],$consonant) ){
                        // Ý Lyn Vy
                        $CSLH = $CSLH  + 7;
                    } else{
                        if ( in_array($char,$vowel) ){
                            $CSLH = $CSLH  + $PYTHAGOREAN[$char];
                        } 
                    }
                }
            }
        }else{
                $wordItem = str_split($wordItem);
                foreach ($wordItem as $k=>$char){   
                    if ( in_array($char,$vowel) ){
                        $CSLH = $CSLH  + $PYTHAGOREAN[$char];
                    } 
                }
        } 
    }
    
    if ( $CSLH == 11 || $CSLH == 22 ||  $CSLH == 33){
        $cslh_number = $CSLH;
    } else{
        $cslh_number = sumPytha($CSLH);
    }


    /*==============================*/
    //3. Chỉ số THÁI ĐỘ NGOÀI
    /*==============================*/
    $cstdn = abs($cssm_number - $cslh_number);

    /*==============================*/
    //4. Năng lực tiếp cận
    /*==============================*/
    // $nltc 
    $nltc_str = array_pop($word);
    $nltc_arr = str_split($nltc_str);
    $nltc_sum = sumPythaChar($nltc_arr,$PYTHAGOREAN);
    $nltc_number = sumPytha($nltc_sum);
   
    /*==============================*/
    //5. Động lực tiếp cận
    /*==============================*/
    // $dltc
    if ( str_contains($nltc_str,'y') ){
        if($nltc_str === 'y'){
            $dltc_sum = 7;
        }else{
            foreach ( $nltc_arr as $k=>$char){
                if ( $char ==='y' && in_array($nltc_arr[$k+1],$consonant) && in_array($nltc_arr[$k-1],$consonant) ){
                    $dltc_sum = $dltc_sum  + 7;
                } else{
                    if ( in_array($char,$vowel) ){
                        $dltc_sum = $dltc_sum  + $PYTHAGOREAN[$char];
                    } 
                }
            }
        }    
    }else{
        foreach ( $nltc_arr as $char ){
            if ( isset($PYTHAGOREAN[$char]) ){
                if ( in_array($char,$vowel) ){
                    $dltc_sum = $dltc_sum  + $PYTHAGOREAN[$char];
                } 
              }
        }
    }
    $dltc_number = sumPytha($dltc_sum);
    

    /*==============================*/
    //6 .Thái độ tiếp cận
    /*==============================*/
    // $tdtc
    if ( str_contains($nltc_str,'y') ){
        if($nltc_str === 'y'){
            $tdtc_sum = 0;
        }else{
            foreach ( $nltc_arr as $k=>$char){
                if ( $char ==='y' && in_array($nltc_arr[$k+1],$vowel) && in_array($nltc_arr[$k-1],$vowel) || $char ==='y' && in_array($nltc_arr[$k+1],$vowel) || $char ==='y' && in_array($nltc_arr[$k-1],$vowel)  ){
                    $tdtc_sum = $tdtc_sum  + 7;
                } else{
                    if ( in_array($char,$consonant) ){
                        $tdtc_sum = $tdtc_sum  + $PYTHAGOREAN[$char];
                    } 
                }
            }
        }    
    }else{
        foreach ( $nltc_arr as $char ){
            if ( isset($PYTHAGOREAN[$char]) ){
                if ( in_array($char,$consonant) ){
                    $tdtc_sum = $tdtc_sum  + $PYTHAGOREAN[$char];
                } 
              }
        }
    }
    $tdtc_number = sumPytha($tdtc_sum);

    /*==============================*/
    //7. Chỉ số phát triển
    /*==============================*/
    // $cspt
    $cspt_sum = sumPythaChar($nltc_arr,$PYTHAGOREAN);
    $cspt_number = sumPytha($cspt_sum);
    // echo "<pre>";
    // var_dump($cspt_number);
    // echo "</pre>";

    
    /*==============================*/
    //8. Chỉ số cân bằng
    /*==============================*/
    // $cscb
    foreach ( $cscbWord as $cscbItem){
        $cscbArr .= mb_substr($cscbItem, 0, 1);
    }
    $cscbArr = str_split($cscbArr);
    $cscb_sum = sumPythaChar($cscbArr,$PYTHAGOREAN);
    $cscb_number = sumPytha($cscb_sum);
    
    /*==============================*/
    //9. Chỉ số nợ bài học
    /*==============================*/
    // $csnbh
    $csnbh = []; 
    $cscbWordSplit = str_split($name1);
    foreach ($cscbWordSplit as $char){  
        if ( isset($PYTHAGOREAN[$char]) ){
            $csnbh[] = $PYTHAGOREAN[$char];
        }
    }
    $csnbhArrUni = array_unique( $csnbh );
    $oneToNine = [1,2,3,4,5,6,7,8,9];
    $csnbhArrDiff = array_diff(  $oneToNine,$csnbhArrUni );
   
    /*==============================*/
    //10. Chỉ số năng lượng nổi trội
    /*==============================*/
    // $csnlnt
    $csnlnt = $csnbh;
    $csnlnt_countVal = array_count_values( $csnlnt );
    $csnlnt_Arr = []; 
    foreach ($csnlnt_countVal as $csnlnt_key=>$csnlnt_val){  
        if ( $csnlnt_val > 3 || ($csnlnt_val == 2 && ($csnlnt_key == $bhdd || $csnlnt_key == $cssm_number ||  $csnlnt_key == $cslh_number ) ) ){
            $csnlnt_Arr[] = $csnlnt_key;
        }
    }

    /*==============================*/
    //11. Chỉ số nợ nghiệp
    /*==============================*/
    // $csnn
    function CsnnOneTime($csnn){
        $csnnA = (string)$csnn;
        $csnnA_lenght = str_split($csnnA);
        $csnn_sum = array_sum($csnnA_lenght);
        return   $csnn_sum;
    }
    function CsnnSum($sum){
        $cssm = (int)$sum;
        if ( $cssm === 10){
            return $cssm;
        } else{
            $u =strlen((string)$cssm );
            while ( strlen((string)$cssm ) >1){ 
                $b = (string)$cssm;
                $cssm_lenght = str_split($b);
                $sum = array_sum($cssm_lenght);
                if ( $sum === 10){
                    $cssm = $sum;
                    break;
                } 
                $cssm = $sum;
            }
            return $cssm;
        }
        
    }
    // Calc csnn by Name
    // $csnnA_sum = $cssm_sum;
    // $csnnA = (string)$csnnA_sum;
    // $csnnA_lenght = str_split($csnnA);
    // $csnn_sum = array_sum($csnnA_lenght);
    $csnn_sum = CsnnOneTime($cssm_sum);
    // echo "<pre>";
    // var_dump( $csnn_sum);
    // echo "</pre>";
    if ( $csnn_sum == 13 || $csnn_sum == 14 || $csnn_sum == 16 || $csnn_sum == 19 ){
        $csnn_numberName  = $csnn_sum;
    } else{
        $csnn_numberName = 0;
    }
 
    // Calc csnn by Date
    $csnn_day1   = CsnnSum($day);
    $csnn_month1 = CsnnSum($month);
    $csnn_year1  = CsnnSum($year);
    
    $csnnDM = CsnnSum((int)$csnn_day1 + (int) $csnn_month1);
    $csnnDMY = $csnnDM + $csnn_year1;
   
    // $csnn_daybyday = $csnn_day1;
    // echo "<pre>";
    // var_dump(  $csnn_day1 ,  $csnn_month1, $csnn_year1,$csnnDMY );
    // echo "</pre>";
    $csnn_day = [13,14,16,19];
    if ( in_array($day,$csnn_day) ){
        $csnn_daybyday = $day;
    } else{
        
        if ( $csnnDMY == 13 || $csnnDMY == 14 || $csnnDMY == 16 || $csnnDMY == 19 ){
            $csnn_daybyday  = $csnnDMY;
        }else{
            $csnn_daybyday  = 0;
        }
    }

    /*==============================*/
    //12.  Tính NGÀY/THÁNG/NĂM thần số 
    /*==============================*/
    // $ts

        // 12.1 Thần số TG
        $year_now = date("Y");
        $year_next = date('Y', strtotime('+1 year'));
        $year_now1 = str_split($year_now);
        $year_now2 = str_split($year_next);
        foreach($year_now1 as $val){
            $tstg +=$val;
        }
        foreach($year_now2 as $val){
            $tstgNext +=$val;
        }
        // Năm thần số TG now time and next
        $tstgNow =  $tstg;
        // $tstgNext = $year_now2;

        // 12.2 Năm Thần số cá nhân || ntscn
        $dayPerson = str_split($day);
        foreach($dayPerson as $val){
            $tstg_day +=$val;
        }
        $monthPerson = str_split($month);
        foreach($monthPerson as $val){
            $tstg_month +=$val;
        }
        $ntscn = $tstg_day  + $tstg_month + $tstg;
        $ntscn_result = sumPytha2($ntscn);
        
        // echo "<pre>";
        // var_dump( $ntscn_result );
        // echo "</pre>";

        // 12.3 Tháng thần số cá nhân || ttscn
        $month_now = date("m");
        $month_next = date('m', strtotime('+1 month'));
        

        $ttscn = $ntscn_result + (int)$month_now;
        $ttscnNext = $ntscn_result +  $month_next;
        $ttscn_resultNow = sumPytha2($ttscn);
        $ttscn_resultNext = sumPytha2($ttscnNext);
        // echo "<pre>";
        // var_dump( $ttscn_result );
        // echo "</pre>";

        // 12.4 Ngày thần số cá nhân  || daytscn
        $date_now = date("d");
        $daytscnSum = $ttscn + (int)$date_now;
        $dayttscn_result = sumPytha2($daytscnSum);

    /*==============================*/
    //13.  Tính chỉ số liên kết 
    /*==============================*/
    // cslk
    $cslk =  abs($cssm_number - $bhdd);
    // echo "<pre>";
    // var_dump( $cslk );
    // echo "</pre>";    
    
    /*==============================*/
    //14.Tính chỉ số sức mạnh tiềm thức 
    /*==============================*/
    // cssmtt
    $count_csnbh = count($csnbhArrDiff);
    $cssmtt =  $cssm_number - $count_csnbh;

    /*==============================*/
    //15.Đỉnh cao và thách thức các giai đoạn
    /*==============================*/
        //15.1  Chân đỉnh 
        $cd_day  =sumPytha2($day ) ;
        $cd_month  =sumPytha2($month ) ;
        $cd_year  =sumPytha2($year ) ;
        // echo "<pre>";
        // var_dump( $cd_day ,$cd_month,  $cd_year);
        // echo "</pre>"; 

        // Đỉnh cao
        /*==============================*/

        // 15.2 Đỉnh
        $cd1 = sumPytha2($cd_day + $cd_month);
        $cd2 = sumPytha2($cd_day + $cd_year);
        $cd3 = sumPytha3($cd1 + $cd2);
        $cd4 = sumPytha3($cd_month + $cd_year);
        // echo "<pre>";
        // var_dump( $cd1,  $cd2, $cd3, $cd4);
        // echo "</pre>"; 

        // 15.3 Chặng đường|| cd_road
        $cd_road1 = 36 - $bhdd;
        $cd_road2 = $cd_road1 +  9;
        $cd_road3 = $cd_road2 +  9;
        $cd_road4 = $cd_road3 +  9;
        // echo "<pre>";
        // var_dump( 'cd road 1: '.$cd_road1 , 'cd road 2: '.$cd_road2,'cd road 3: '.$cd_road3,'cd road 4: '.$cd_road4);
        // echo "</pre>"; 

        // Thách thức | cd_challenge
        /*==============================*/ 
        function cd_challenge($num1,$num2){
            return sumPytha3(abs($num1 - $num2));
        }
        $cd_challenge1 = cd_challenge($cd_day,$cd_month) ;
        $cd_challenge2 = cd_challenge($cd_day,$cd_year) ;
        $cd_challenge3 = cd_challenge($cd_challenge1,$cd_challenge2) ;
        $cd_challenge4 = cd_challenge($cd_month,$cd_year) ;
        // echo "<pre>";
        // var_dump( $cd_challenge1,$cd_challenge2,$cd_challenge3,$cd_challenge4 );
        // echo "</pre>"; 
    ?>
        <div class="pytha-result">
            <div>
                <p>Bạn muốn xem trực tiếp.Liên hệ Zalo</p>
            </div>
            <div class="pytha-result-wrapper">
                <p class="pytha-result-title"> CÁC CHỈ SỐ CHÍNH</p>    
                <div class="pytha-result-item">
                    <div class="accordion__item">
                        <div class="item accordion__title">
                            <span class="accordion__title-text">Chỉ số đường đời</span>
                            <div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
                            <!-- <div>Chỉ số đường đời</div> -->
                            <div><?php echo $bhdd; ?></div>
                        </div>
                        <div class="accordion__content">
                            <?php
                                 $bhdd_url_to_postid = url_to_postid(home_url().'/chi-so-duong-doi-'.$bhdd);
                                //  $bhdd_content_post = get_post($url_to_postid);
                                 $bhdd_content = get_field('datapost',$bhdd_url_to_postid);
                                //  $content = $content_post->post_content;
                                //  echo "<pre>";
                                //  var_dump($bhdd_content);
                                //  echo "</pre>";
                            ?>
                           <?php echo $bhdd_content; ?>
                           <div><a class="btn-more" target="_blank" href="<?php echo home_url().'/chi-so-duong-doi-'.$bhdd;?>">Xem chi tiết tại đây </a></div>
                        </div>
                    </div>       
                </div>
                <div class="pytha-result-item">
                    <div class="accordion__item">
                        <div class="item accordion__title">
                            <span class="accordion__title-text">Chỉ số linh hồn</span>
                            <div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
                            <div><?php echo $cslh_number; ?></div>
                        </div>
                        <div class="accordion__content">
                            <?php
                                    $cslh_url_to_postid = url_to_postid(home_url().'/chi-so-linh-hon-'.$cslh_number);
                                    // $cslh_content_post = get_post($url_to_postid);
                                    $cslh_content = get_field('datapost',$cslh_url_to_postid);
                                    //  $content = $content_post->post_content;
                                    //  echo "<pre>";
                                    //  var_dump($bhdd_content);
                                    //  echo "</pre>";
                                ?>
                            <?php echo $cslh_content; ?>
                            <div><a class="btn-more" target="_blank" href="<?php echo home_url().'/chi-so-linh-hon-'.$cslh_number;?>">Xem chi tiết tại đây </a></div>
                        </div>
                    </div>   
                </div>
                <div class="pytha-result-item">
                    <div class="accordion__item">
                        <div class="item accordion__title">
                            <span class="accordion__title-text">Chỉ số thái độ ngoài</span>
                            <div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
                            <div><?php echo $cstdn; ?></div>
                        </div>
                        <div class="accordion__content">
                            <?php
                                    $cstdn_url_to_postid = url_to_postid(home_url().'/chi-so-thai-do-ngoai-'.$cstdn);
                                    // $cslh_content_post = get_post($url_to_postid);
                                    $cstdn_content = get_field('datapost',$cstdn_url_to_postid);
                                    //  $content = $content_post->post_content;
                                    //  echo "<pre>";
                                    //  var_dump($bhdd_content);
                                    //  echo "</pre>";
                                ?>
                            <?php echo $cstdn_content; ?>
                            <div><a class="btn-more" target="_blank" href="<?php echo home_url().'/chi-so-thai-do-ngoai-'.$cstdn;?>">Xem chi tiết tại đây </a></div>
                        </div>
                    </div>   
                </div>
                <div class="pytha-result-item not-show">
                    <div class="item">
                        <div> Chỉ số sứ mệnh</div>
                        <?php if ( is_user_logged_in()) : ?>
                            <div><?php echo $cssm_number; ?></div>
                        <?php else: ?>
                            <div>
                                <a href="<?php echo wp_login_url();?>">Đăng nhập</a> </div>
                        <?php endif; ?>  
                    </div>   
                </div>
                <div class="pytha-result-item not-show">
                    <div class="item">
                        <div>Năng lực tiếp cận</div>  
                        <?php if ( is_user_logged_in()) : ?>
                            <div><?php echo $nltc_number; ?></div>
                        <?php else: ?>
                            <div>
                                <a href="<?php echo wp_login_url();?>">Đăng nhập</a> </div>
                        <?php endif; ?>   
                    </div>      
                </div>
            </div>
           <div class="pytha-result-wrapper">
                <p class="pytha-result-title">CÁC CHỈ SỐ TÁC ĐỘNG</p>
                <?php if ( is_user_logged_in()) : ?>
                    <div class="pytha-result-item">
                        <div class="accordion__item">
                            <div class="item accordion__title">
                                <span class="accordion__title-text">Chỉ số cân bằng</span>
                                <div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
                                <div><?php echo $cscb_number; ?></div>
                            </div>
                            <div class="accordion__content">
                                <?php
                                    $cscb_url_to_postid = url_to_postid(home_url().'/chi-so-can-bang-'.$cscb_number);
                                    $cscb_content = get_field('datapost',$cscb_url_to_postid);
                                ?>
                            <?php echo $cscb_content; ?>
                            <div><a class="btn-more" target="_blank" href="<?php echo home_url().'/chi-so-can-bang-'.$cscb_number;?>">Xem chi tiết tại đây </a></div>
                            </div>
                        </div>    
                    </div>
                <?php else: ?>
                    <div class="pytha-result-item not-show">
                        <div class="item ">
                            <div > Chỉ số cân bằng</div> 
                            <div><a href="<?php echo wp_login_url();?>">Đăng nhập</a> </div>
                        </div>
                    </div>
                <?php endif; ?>        
                        
                    
                <?php if ( is_user_logged_in()) : ?>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>  Động lực tiếp cận</div>
                            <div><?php echo $dltc_number; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Chỉ số sức mạnh tiềm thức</div>
                            <div><?php echo $bhdd; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Thái độ tiếp cận</div>
                            <div><?php echo $tdtc_number; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Chỉ số phát triển</div>
                            <div><?php echo $cspt_number; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Chỉ số liên kết</div>
                            <div><?php echo $cslk; ?></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="pytha-link">Bạn cần phải 
                        <a href="<?php echo wp_login_url();?>">đăng nhập</a> để xem luận giải</div>
                <?php endif; ?>
           </div>
           
            <div class="pytha-result-wrapper">
                <p class="pytha-result-title">BÀI HỌC - NGHIỆP</p>
                <?php if ( is_user_logged_in()) : ?>
                    <!-- Chỉ số nợ bài học -->
                    <?php if( count($csnbhArrDiff) > 0):
                            foreach ($csnbhArrDiff as $key => $csnbValue) {
                                ?>
                                <div class="pytha-result-item">
                                    <!-- <div class="item">
                                        <div> Nợ bài học số </div>
                                        <div><?php// echo $csnbValue; ?></div>
                                    </div> -->
                                    <div class="accordion__item">
                                        <div class="item accordion__title">
                                            <span class="accordion__title-text">Nợ bài học số</span>
                                            <div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
                                            <div><?php echo $csnbValue; ?></div>
                                        </div>
                                        <div class="accordion__content">
                                            <?php
                                                $nbb_url_to_postid = url_to_postid(home_url().'/no-bai-hoc-'.$csnbValue);
                                                $nbb_content = get_field('datapost',$nbb_url_to_postid);
                                            ?>
                                        <?php echo $nbb_content; ?>
                                        <div><a class="btn-more" target="_blank" href="<?php echo home_url().'/no-bai-hoc-'.$csnbValue;?>">Xem chi tiết tại đây </a></div>
                                        </div>
                                    </div>  
                                </div>
                                <?php
                            }
                        endif;
                    ?>
                    <!-- Chỉ số nợ nghiệp -->
                    <?php if( ( $csnn_numberName!=0 )): ?>
                        <div class="pytha-result-item not-show">            
                            <div class="item">
                                <div>Nợ nghiệp </div>
                                <div><?php echo $csnn_numberName; ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if( ( $csnn_daybyday!=0 )): ?>
                        <div class="pytha-result-item not-show">            
                            <div class="item">
                                <div>Nợ nghiệp </div>
                                <div><?php echo $csnn_daybyday; ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="pytha-link">Bạn cần phải 
                        <a href="<?php echo wp_login_url();?>">đăng nhập</a> để xem luận giải</div>
                <?php endif; ?>
            </div>
            <div class="pytha-result-wrapper">
                <p class="pytha-result-title">ƯU ĐIỂM</p>
                <?php if ( is_user_logged_in()) : ?>
                    <!-- Chỉ số năng lượng nổi trội-->
                    <?php if( count($csnlnt_Arr) > 0):
                            foreach ($csnlnt_Arr as $key => $val) {
                                ?>
                                <div class="pytha-result-item">
                                    <!-- <div class="item">
                                        <div> Chỉ số năng lượng nổi trội</div>
                                        <div><?php //echo $val; ?></div>
                                    </div> -->
                                    <div class="accordion__item">
                                        <div class="item accordion__title">
                                            <span class="accordion__title-text">Chỉ số năng lượng nổi trội</span>
                                            <div class="accordion__arrow"><span class="accordion__arrow-item ">+</span></div> 
                                            <div><?php echo $val; ?></div>
                                        </div>
                                        <div class="accordion__content">
                                            <?php
                                                $csnlnt_url_to_postid = url_to_postid(home_url().'/chi-so-noi-troi-'.$val);
                                                $csnlnt_content = get_field('datapost',$csnlnt_url_to_postid);
                                            ?>
                                        <?php echo $csnlnt_content; ?>
                                        <div><a class="btn-more" target="_blank" href="<?php echo home_url().'/chi-so-noi-troi-'.$val;?>">Xem chi tiết tại đây </a></div>
                                        </div>
                                    </div>  
                                </div>
                                <?php
                            }
                        endif;
                    ?>
                <?php else: ?>
                    <div class="pytha-link">Bạn cần phải 
                    <a href="<?php echo wp_login_url();?>">đăng nhập</a> để xem luận giải</div>
                <?php endif; ?>
            </div>
            <div class="pytha-result-wrapper">
                <p class="pytha-result-title">VẬN TRÌNH CÁ NHÂN THEO NGÀY - THÁNG - NĂM</p> 
                <?php if ( is_user_logged_in()) : ?> 
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div> Năm thần số <?php echo $year_now; ?></div>
                            <div><?php echo $tstgNow; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div> Năm thần số <?php echo $year_next; ?></div>
                            <div><?php echo $tstgNext; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div> Năm thần số cá nhân <?php echo $year_now; ?></div>
                            <div><?php echo $ntscn_result; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div> Tháng thần số cá nhân <?php echo $month_now.'/'.$year_now; ?></div>
                            <div><?php echo $ttscn_resultNow; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div> Tháng thần số cá nhân <?php echo  date('m/Y', strtotime('+1 month')); ?></div>
                            <div><?php echo $ttscn_resultNext; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div> Ngày thần số cá nhân <?php echo  date('d/m/Y'); ?></div>
                            <div><?php echo $dayttscn_result; ?></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="pytha-link">Bạn cần phải 
                    <a href="<?php echo wp_login_url();?>">đăng nhập</a> để xem luận giải</div>
                <?php endif; ?>
            </div> 
            <div class="pytha-result-wrapper">
                <p class="pytha-result-title">VẬN TRÌNH CUỘC ĐỜI</p>
                <?php if ( is_user_logged_in()) : ?> 
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Đỉnh cao tuổi từ 0 đến <?php echo $cd_road1;?> tuổi</div>
                            <div><?php echo $cd1; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Đỉnh cao tuổi từ <?php echo ($cd_road1+1); ?> đến <?php echo ($cd_road2);?> tuổi</div>
                            <div><?php echo $cd2; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Đỉnh cao tuổi từ <?php echo ($cd_road2+1); ?> đến <?php echo ($cd_road3);?> tuổi</div>
                            <div><?php echo $cd3; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Đỉnh cao tuổi từ <?php echo ($cd_road3+1); ?> đến <?php echo ($cd_road4);?> tuổi</div>
                            <div><?php echo $cd4; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Thách thức tuổi từ 0 đến <?php echo ($cd_road1);?> tuổi</div>
                            <div><?php echo $cd_challenge1; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Thách thức tuổi từ <?php echo ($cd_road1+1); ?> đến <?php echo ($cd_road2);?> tuổi</div>
                            <div><?php echo $cd_challenge2; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Thách thức tuổi từ <?php echo ($cd_road2+1); ?> đến <?php echo ($cd_road3);?> tuổi</div>
                            <div><?php echo $cd_challenge3; ?></div>
                        </div>
                    </div>
                    <div class="pytha-result-item not-show">
                        <div class="item">
                            <div>Thách thức tuổi từ <?php echo ($cd_road3+1); ?> đến <?php echo ($cd_road4);?> tuổi</div>
                            <div><?php echo $cd_challenge4; ?></div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="pytha-link">Bạn cần phải 
                    <a href="<?php echo wp_login_url();?>">đăng nhập</a> để xem luận giải</div>
                <?php endif; ?>
            </div>
        </div>
       
    <?php
    die();
}