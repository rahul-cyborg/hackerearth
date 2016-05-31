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

    
     function printlca($tree,$n1,$n2){
   
     	
     	if($tree == NULL){
     		
     		return ;
     	}
     	
     	elseif ($n1 < $tree->data && $n2 < $tree->data){
     		
     		printlca($tree->left,$n1,$n2);
     	}
     	
     	elseif ($n1 > $tree->data && $n2 > $tree->data){
     		 
     		printlca($tree->right,$n1,$n2);
     	}
     	else {
     		
     		echo $tree->data;
     	}
     	
     	
    }
   
    
     $tree = new Node(20);
     $tree->left  = new Node(8);
     $tree->right = new Node(22);
     $tree->left->left     = new Node(4);
     $tree->left->right   = new Node(12);
     
     $tree->right->left     = new Node(10);
     $tree->right->right   = new Node(14);
      
  
     $arr = array();
     printlca($tree,10,22);
 
   
  
?>
