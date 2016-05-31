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

    
    class SearchBinaryTree {
    	
          public $root;
          public function  __construct() {
                 $this->root = NULL;
          }
  
          public function create($info) {
              
                 if($this->root == NULL) {
                    $this->root = new Node($info);
                 } 
                 
                 else {
  
                    $current = $this->root;
                    
                    //print_r($current);
                    
                    while(true) {
                          if($info < $current->info) {
                         
                                if($current->left) {
                                   $current = $current->left;
                                } else {
                                   $current->left = new Node($info);
                                   break; 
                                }
                          } else if($info > $current->info){
                                if($current->right) {
                                   $current = $current->right;
                                } else {
                                   $current->right = new Node($info);
                                   break; 
                                }
                          } else {
                            break;
                          }
                    } 
                 }
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
   
    
    $arr = array(8,3,1,6,4,7,10,14,13);
     $tree = new SearchBinaryTree();
               
     for($i=0,$n=count($arr);$i<$n;$i++) {
               	
           $tree->create($arr[$i]);
      }
      
      inorder($tree->root);
               
    
 
   
  
?>
