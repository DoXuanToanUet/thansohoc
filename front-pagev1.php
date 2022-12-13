<?php get_header();?>
    <div class="container">
    <?php 
//     $consonant= ["b","c","d","f","g","h",
//     "j","k","l","m","n","p","q","r","s","t","v","w","x","z"];
//     $u= in_array('o',$consonant);
//      echo "<pre>";
//         var_dump($u);
//         echo "</pre>";
//    $nn = 'lyn';
//    $nn = str_split($nn);
//    foreach ($nn as $k=>$char){
       
//        if ( $char ==='y' && in_array($nn[$k+1],$consonant) && in_array($nn[$k-1],$consonant) ){
//            // if( $PYTHAGOREAN[$char] == 'o' ||  $PYTHAGOREAN[$char] == 'o')
//            // Ý Lyn Vy
//            echo "<pre>";
//            var_dump($char);
//            echo "</pre>";
//            // echo $CSLH;
//        } else{

//        }
//    }
   

?> 
    </div>
    <h2 class="ft-title">Thông tin liên hệ</h2>
    <div class="ft-address">
        <div class="ft-address-item">
            <a href="mailto:info@tuannamtnt.com" class="flex align-middle">              
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <span>info@tuannamtnt.com</span>    
            </a>
        </div>
        <div class="ft-address-item">
            <a href="tel: 085.8888.585" class="flex align-middle">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span> 085.8888.585</span>    
            </a>
        </div>
        <div class="ft-address-item">
            <a href="#" class="flex align-middle">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> 12 Kosmo Tây Hồ, 161 Xuân La, Q. Tây Hồ, TP. HN</span>    
            </a>
        </div>
    </div>
<div>

</div>
<?php
    $html = esc_html( '<a href="http://www.example.com/">A link</a>' );
    echo $html;
?>
<?php get_footer();?>
<!-- <style>
    .float-contact {
        position: fixed;
        bottom: 20px;
        left: 20px;
        z-index: 99999;
    }
    .chat-face {
        background: #125c9e;
        border-radius: 20px;
        padding: 0 18px;
        color: white;
        display: block;
        margin-bottom: 6px;
    }
    .float-contact .hotline {
        background: var(--primary-color) !important;
        border-radius: 20px;
        padding: 0 18px;
        color: white;
        display: block;
        margin-bottom: 6px;
    }
</style>
<div class="float-contact"> 
    <button class="chat-face"> <a target="_blank" href="https://www.facebook.com/vatlieunhavietnam/">
        <i class="icon-facebook" aria-hidden="true"></i> Facebook</a> 
    </button> 
    <button class="hotline"> <a href="tel:0947844446"><i class="icon-phone" aria-hidden="true"></i> 0947 844 446</a> </button>
</div> -->

