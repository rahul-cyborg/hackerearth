<?php

    class Node {
    	
          public $data;
          public $left;
          public $right;
         
          public function __construct($data) {
                 $this->data = $data;
                 $this->left = NULL;
                 $this->right = NULL;
               
          }
          public function __toString() {
                 return "$this->data";
          }
    } 

    
    
     function  maxheight($tree){
   
     	if($tree == NULL){
     		
     		return 0;
     	}
     	
     	$l_height = maxheight($tree->left);
     	$r_height = maxheight($tree->right);
     	
     	if($l_height > $r_height){
     		
     		return $l_height+1;
     	}
     	
     	else {
     		
     		return $r_height+1;
     	}
     	
    }
   
    
     $tree = new Node(8);
     $tree->left  = new Node(3);
     $tree->right = new Node(11);
     $tree->left->left     = new Node(1);
     $tree->left->right   = new Node(4);
      
     
     echo maxheight($tree);
 
   
  
?>
