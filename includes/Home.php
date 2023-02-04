<?php

//--------------------------------------------------------------------------------------------------------------------------//
function ftc_filter_comments($comment_content){
    $filters_words = array(
        'mr.default' => '****',
        'hi' => '****',
    );
   if (count($filters_words) > 0){
       foreach ($filters_words as $key => $value){
           $comment_content = preg_replace('/'.$key. '/' ,$value ,  $comment_content);
       }
      return $comment_content;
}

}
add_filter('comment_text','ftc_filter_comments');
//--------------------------------------------------------------------------------------------------------------------------//
