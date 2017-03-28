<?php
    namespace tnt\views;
    
    require 'model/db.php';
    require 'model/calculate.php';
    use tnt\model\db;
    use tnt\model\calculate;

    class mainView{
        
        private $flight_arrived_time;
        private $truck_departured_time;
        private $schedule_flight_arrived_time;
        private $time_flight_arrived;
        private $goods_arrived;
        private $truck_departured;
        private $truck_arrived;
        private $end_sorting;
        private $goto_transit;
        private $time_schedule_flight_arrived;
        private $schedule_goods_arrived;
        private $schedule_truck_departured;
        private $schedule_truck_arrived;
        private $schedule_end_sorting;
        private $schedule_goto_transit;
        
        
         /* __construct function to get and calculate times -> use construct, as this time's are always required */ 
        
        public function __construct(){
            
            /* get flight arrived time from DB */
            $flight_arrived = new db();
            $this->flight_arrived_time = $flight_arrived->get_times('flight_arrived','arrived_time');
            
            /* get truck departured time from DB */
            $truck_departured = new db();   
            $this->truck_departured_time = $truck_departured->get_times('morning_times','truck_departured');
            
            $schedule_flight_arrived = new db();
            $this->schedule_flight_arrived_time = $schedule_flight_arrived->get_schedule_times('schedule_times','schedule_flight_arrived');
            
            if ($this->flight_arrived_time) {
                $last = array_slice($this->flight_arrived_time, -1, 1, true);
                foreach ($last as $key => $value) {
                    $this->time_flight_arrived = $value['arrived_time'] ;
                }  
            }else{
                $this->time_flight_arrived = "cas ni znan";
            }
            
            
            /*calculate tiimes */           
            if ($this->time_flight_arrived == "cas ni znan"){
            
                    $this->goods_arrived = "cas ni znan"; 
                    
                    if ($this->truck_departured_time) {
                        $last = array_slice($this->truck_departured_time, -1, 1, true);
                            foreach ($last as $key => $value) {
                                $this->truck_departured = $value['truck_departured'] ;
                  }                    
                            $truck_arrived_object = new calculate();
                            $this->truck_arrived = $truck_arrived_object->calculate_time($this->truck_departured, '35');

                            $end_sorting_object = new calculate();
                            $this->end_sorting = $end_sorting_object->calculate_time($this->truck_arrived, '10');

                            $goto_transit_object = new calculate();
                            $this->goto_transit = $goto_transit_object->calculate_time($this->end_sorting, '15');

                        }else{
                            $this->truck_departured = "cas ni znan";
                            $this->truck_arrived = "cas ni znan";
                            $this->end_sorting = "cas ni znan";
                            $this->goto_transit = "cas ni znan";
                   }
            }else {
        
                $goods_arrived_object = new calculate();
                $this->goods_arrived = $goods_arrived_object->calculate_time($this->time_flight_arrived, '20');

                if ($this->truck_departured_time) {
                        $last = array_slice($this->truck_departured_time, -1, 1, true);
                         foreach ($last as $key => $value) {
                            $this->truck_departured = $value['truck_departured'] ;
                          }  
                }else{
                    $truck_departured_object = new calculate();
                    $this->truck_departured = $truck_departured_object->calculate_time($this->goods_arrived, '40');
                }


                $truck_arrived_object = new calculate();
                $this->truck_arrived = $truck_arrived_object->calculate_time($this->truck_departured, '35');

                $end_sorting_object = new calculate();
                $this->end_sorting = $end_sorting_object->calculate_time($this->truck_arrived, '10');

                $goto_transit_object = new calculate();
                $this->goto_transit = $goto_transit_object->calculate_time($this->end_sorting, '15');

             }
        
         /*calculate scheduled tiimes */ 
             
            if ($this->schedule_flight_arrived_time) {
                $last = array_slice($this->schedule_flight_arrived_time, -1, 1, true);
                foreach ($last as $key => $value) {
                    $this->time_schedule_flight_arrived = $value['schedule_flight_arrived'] ;
                }   

                $schedule_goods_arrived_object = new calculate();
                $this->schedule_goods_arrived = $schedule_goods_arrived_object->calculate_time($this->time_schedule_flight_arrived, '20');

                $schedule_departured_object = new calculate();
                $this->schedule_truck_departured = $schedule_departured_object->calculate_time($this->schedule_goods_arrived, '40');

                $schedule_truck_arrived_object = new calculate();
                $this->schedule_truck_arrived = $schedule_truck_arrived_object->calculate_time($this->schedule_truck_departured, '35');

                $schedule_end_sorting_object = new calculate();
                $this->schedule_end_sorting = $schedule_end_sorting_object->calculate_time($this->schedule_truck_arrived, '10');

                $schedule_goto_transit_object = new calculate();
                $this->schedule_goto_transit = $schedule_goto_transit_object->calculate_time($this->schedule_end_sorting, '15');

            }else{ 
                $this->time_schedule_flight_arrived = "cas ni znan";
            }
            
            /* Ideally, you would have the View dealing with the data crunching and processing 
         * after collecting the data from the Model. Therefore it only makes sense for your 
         * View component to select a template and pass the data from the View into that template. 
         * That way it is ready to be displayed using a block code layout, or with an echo, print, 
         * or any other outputting code in PHP. Whichever of those methods you choose to use, 
         * the main thing to remember is that your data MUST be at a state of readiness that 
         * you only need to print the data in the template. If you are doing other data 
         * processing or crunching in the template your setup is wrong, and most likely, 
         * the MVC setup is incorrect.  */
            
            require 'templates/mainTmpl.php';
            
        }  
        
    }
            
     
 
 
