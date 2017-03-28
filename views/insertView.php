<?php 

namespace tnt\views;

class insertView{
    
    public function __construct(){ 
        
        /* Ideally, you would have the View dealing with the data crunching and processing 
         * after collecting the data from the Model. Therefore it only makes sense for your 
         * View component to select a template and pass the data from the View into that template. 
         * That way it is ready to be displayed using a block code layout, or with an echo, print, 
         * or any other outputting code in PHP. Whichever of those methods you choose to use, 
         * the main thing to remember is that your data MUST be at a state of readiness that 
         * you only need to print the data in the template. If you are doing other data 
         * processing or crunching in the template your setup is wrong, and most likely, 
         * the MVC setup is incorrect.  */
        
        require 'templates/insertTmpl.php';
    }
    
}

?>
 
        
         
