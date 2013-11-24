<?php

require 'core/database/connect.php';


class Posts {
    
    
    public static function getPosts()
    {
        
    }
    
    public static function insert($post_txt)
    {
        
        $post_txt = addslashes($post_txt);
        
        $sql = "INSERT INTO allposts (posttext) VALUES($post_txt)";
        
        $query = mysql_query($sql);
        $ex = mysql_affected_rows();
        if(mysql_affected_rows() != 0)
        //if ($query)
        {
            
            $insert_id = mysql_insert_id();
            
            $std = new stdClass();
            $std->post = $post_txt;
            
            return $std;
        }
        return $ex;
        
    }
    
    public static function update($data)
    {
        
    }   
}
?>