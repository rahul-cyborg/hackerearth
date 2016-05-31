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

    
    
     function is_identical($t1,$t2){
   
     	if($t1 == NULL && $t2 == NULL){
     		
     		return 1;
     	}
     	else {
     		
     		return ($t1->data == $t2->data && is_identical($t1->left,$t2->left) && is_identical($t1->right,$t2->right));
     			
     		
     	}
     	return 0;
    
    }
   
    
     $tree = new Node(8);
     $tree->left  = new Node(3);
     $tree->right = new Node(11);
     $tree->left->left     = new Node(1);
     $tree->left->right   = new Node(4);
      
     
     
     $tree1 = new Node(8);
     $tree1->left  = new Node(3);
     $tree1->right = new Node(11);
     $tree1->left->left     = new Node(1);
     $tree1->left->right   = new Node(4);
     
               
     $fl = is_identical($tree,$tree1);
     if($fl == 1){
     	
     	echo "YES";
     }
     else{
     	
     	echo "NO";
     }
 
   
  
?>
