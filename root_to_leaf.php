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

    
     function printAllPath($tree,$arr,$index){
   
     	
     	if($tree == NULL){
     		
     		return ;
     	}
     	$arr[$index] = $tree->data;
     	
     	$index++;
     	
     	if($tree->left == NULL || $tree->right == NULL){
     		
     		print_r($arr);
     		
     	}
     	
     	printAllPath($tree->left,$arr,$index);
     	printAllPath($tree->right,$arr,$index);
     	
     	
    }
   
    
     $tree = new Node(8);
     $tree->left  = new Node(3);
     $tree->right = new Node(11);
     $tree->left->left     = new Node(1);
     $tree->left->right   = new Node(4);
      
  
     $arr = array();
     printAllPath($tree,$arr,0);
 
   
  
?>
