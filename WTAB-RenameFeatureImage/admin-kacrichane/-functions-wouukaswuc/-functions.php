<?php

function _rename_image_while_upload($filename) {
    if(isset($_REQUEST['post_id']) && intval($_REQUEST['post_id']) > 0){
        $post_id = $_REQUEST['post_id'];
        $_post = get_post($post_id, OBJECT);

        $info = pathinfo($filename);
        if(isset($info['extension'])){
            $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
            $name = sanitize_title_with_dashes($_post->post_title);
            $_ = str_replace('à', 'a', $name);
            $_ = str_replace('ò', 'o', $_);
            $_ = str_replace('è', 'e', $_);
            $_ = str_replace('é', 'e', $_);
            $_ = str_replace('ù', 'u', $_);
            $_ = str_replace('&', 'E', $_);

            $_ = str_replace('À', 'a', $_);
            $_ = str_replace('Ò', 'o', $_);
            $_ = str_replace('È', 'a', $_);
            $_ = str_replace('É', 'a', $_);
            $_ = str_replace('Ù', 'u', $_);
            
            $_ = str_replace('-il-', '', $_);
            $_ = str_replace('l\'', '', $_);
            $_ = str_replace('-la-', '-', $_);
            $_ = str_replace('-le-', '-', $_);
            $_ = str_replace('-li-', '-', $_);
            $_ = str_replace('-gli-', '-', $_);
            
            $_ = str_replace('-un-', '-', $_);
            $_ = str_replace('-un\'-', '-', $_);
            $_ = str_replace('-una-', '-', $_);
            $_ = str_replace('-uno-', '-', $_);
            
            $_ = str_replace('-di-', '-', $_);
            $_ = str_replace('-a-', '-', $_);
            $_ = str_replace('-da-', '-', $_);

            $_ = str_replace('-i-', '-', $_);
            $_ = str_replace('-in-', '-', $_);
            $_ = str_replace('-con-', '-', $_);
            $_ = str_replace('-su-', '-', $_);
            $_ = str_replace('-pre-', '-', $_);
            $_ = str_replace('-tra-', '-', $_);
            $_ = str_replace('-fra-', '-', $_);
            
            return $_;
        }else{
            return $filename;
        }
    }else{
        return $filename;
    }
}
add_filter('sanitize_file_name', '_rename_image_while_upload', 10);
