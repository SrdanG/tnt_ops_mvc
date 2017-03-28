<?php

namespace tnt\controllers;
require_once 'model/db.php';
use tnt\model\db;

/* Remember to never allow the Controller to load or directly pass data to the View; 
 * it must only interact with the Model and the User’s inputs. */


class insertController{
    
    public function insertArrived(){
        
                $flight_arrived = new db();
                $flight_arrived->insert_times('flight_arrived','arrived_time', $_GET['arrived']);

                echo "Time successfully added.";  
    }
   
    public function insertDepartured(){
        
                $truck_departured = new db();
                $truck_departured->insert_times('morning_times','truck_departured', $_GET['departured']);

                echo "Time successfully added.";
    }
    
    public function insertSchedule(){
        
                $schedule_flight_arrived = new db();
                $schedule_flight_arrived->insert_times('schedule_times','schedule_flight_arrived', $_GET['schedule']);

                echo "Time successfully added.";
    }
    
}
    

