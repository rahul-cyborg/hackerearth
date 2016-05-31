<?php

    class Node {
    	
          public $info;
          public $left;
          public $right;
         
          public function __construct($info) {
                 $this->info = $info;
                 $this->left = NULL;
                 $this->right = NULL;
               
          }
          public function __toString() {
                 return "$this->info";
          }
    } 

    
    
     function inorder($tree){
    
     	
    	if($tree->left){
    		
    		inorder($tree->left);
    		
    	}
    	echo $tree->info." ";
    	
    	if($tree->right){
    	
    		inorder($tree->right);
    	
    	}
    
    }
   
    
     $tree = new Node(8);
     $tree->left  = new Node(3);
     $tree->right = new Node(11);
     $tree->left->left     = new Node(1);
     $tree->left->right   = new Node(4);
      
      inorder($tree);
               
    
 
   
  
?>
