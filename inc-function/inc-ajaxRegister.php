<?php 
add_action('wp_ajax_regisForm', 'regisForm');
add_action('wp_ajax_nopriv_regisForm', 'regisForm');

function regisForm(){
    $err = '';
    $success = '';

    // First check the nonce, if it fails the function will break
    check_ajax_referer( 'ajax-regis-nonce', 'securityregis' );

    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $pass = isset($_POST['pass']) ? $_POST['pass'] : '';
    $confirm_pass = isset($_POST['confirm_pass']) ? $_POST['confirm_pass'] : '';

    if( $email == "" || $username == "" || $pass == "" || $confirm_pass == "" ) {
        $err = 'Vui lòng không bỏ trống các thông tin!';
        wp_send_json_error(array(
            "showdata"=>$err,
            'class'=>'error'
        ));
        
    }else if( $pass != $confirm_pass ){
        $err = 'Mật khẩu không khớp';
        wp_send_json_error(array(
            "showdata"=>$err,
            'class'=>'error'
        ));

    }else if( username_exists($username) ){
        $err = 'Tên tài khoản không hợp lệ';
        wp_send_json_error(array(
            "showdata"=>$err,
            'class'=>'error'
        ));
    }else if( strlen($username) < 4  ){
        $err = 'Tên tài khoản của bạn quá ngắn (4 kí tự trở lên)';
        wp_send_json_error(array(
            "showdata"=>$err,
            'class'=>'error'
        ));      
    }else if( email_exists($email) || !is_email($email) ){
        $err = 'Email không hợp lệ';
        wp_send_json_error(array(
            "showdata"=>$err,
            'class'=>'error'
        ));      
    }else if( strlen($pass) < 4 ){
        $err = 'Password của bạn quá ngắn (4 kí tự trở lên)';
        wp_send_json_error(array(
            "showdata"=>$err,
            'class'=>'error'
        ));
        
    } else {
        if( get_page_by_title( $yourNameLink, OBJECT , 'page' ) != NULL  ):
            $err = 'Đường dẫn đã tồn tại';
            wp_send_json_error(array(
                "showdata"=>$err,
                'class'=>'error'
            )); 
        else:
            $regis_user_id = wp_insert_user( 
                array (
                    'first_name' => apply_filters('pre_user_first_name', $first_name),
                    'last_name' => apply_filters('pre_user_last_name', $last_name),
                    'user_pass' => apply_filters('pre_user_user_pass', $pass),
                    'user_login' => apply_filters('pre_user_user_login', $username),
                    'user_email' => apply_filters('pre_user_user_email', $email),
                    'role' => 'subscriber' ) 
                );
                if( !is_wp_error( $regis_user_id ) ) {
                    // wp_set_current_user($user_id);
                    // wp_set_auth_cookie($user_id);
                    wp_signon(
                        array(
                            'user_login'    => $username,
                            'user_password' => $pass,
                            'remember'      => false,
                        )
                    );
                   
                    $success = 'Bạn đã đăng ký thành công!';
                    wp_send_json_success(array(
                        "message"=>"success",
                        "showdata"=> $success,
                        'class'=>'success',
                        'PageGuid'=>$PageGuid,
                        'post_id' => $post_id 
                    ));   
                } else {
                    $err = 'Lỗi đăng ký tài khoản';
                    wp_send_json_error(array(
                        "showdata"=>$err,
                        'class'=>'error'
                    ));  
                }
        endif;
    }
}
