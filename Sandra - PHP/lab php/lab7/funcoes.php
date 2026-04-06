<?php
function post($chave){
 
    if(isset($_POST[$chave])){
        return str_replace("'","",$_POST[$chave]);
        
    
    }
}
function get ($chave){
    if(isset ($_POST[$chave])){
           return str_replace("'","",$_POST[$chave]);
        
    }

}
function trim_campos(array $campos){
    return array_map('trim',$campos);
    
    }
?>