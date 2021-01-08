<?php

function _rename_image_while_upload($filename) {
    if(isset($_REQUEST['post_id']) && intval($_REQUEST['post_id']) > 0){
        $post_id = $_REQUEST['post_id'];
        $_post = get_post($post_id, OBJECT);

        $info = pathinfo($filename);
        if(isset($info['extension'])){
            $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
            $name = basename($filename, $ext);
            return sanitize_title_with_dashes($_post->post_title).$ext;
        }else{
            return $filename;
        }
    }else{
        return $filename;
    }
}
add_filter('sanitize_file_name', '_rename_image_while_upload', 10);