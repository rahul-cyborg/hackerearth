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

    function inorder($tree){
    
    
    	if($tree->left){
    
    		inorder($tree->left);
    
    	}
    	echo $tree->data." ";
    	 
    	if($tree->right){
    		 
    		inorder($tree->right);
    		 
    	}
    
    }
    
     function mirrorImage($tree){
   
     	if($tree == NULL){
     		
     		return ;
     	}
     	
     	mirrorImage($tree->left);
     	mirrorImage($tree->right);
     	
     	$temp = $tree->left;
     	$tree->left = $tree->right;
     	$tree->right = $temp;
    }
   
    
     $tree = new Node(8);
     $tree->left  = new Node(3);
     $tree->right = new Node(11);
     $tree->left->left     = new Node(1);
     $tree->left->right   = new Node(4);
      
     inorder($tree);
     
     mirrorImage($tree);
 
     inorder($tree);
   
  
?>
