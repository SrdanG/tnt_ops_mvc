<?php require 'templates/headerTmpl.php'; ?>

<h1>Stran za vnos dejanskega casa</h1>
        
            <div class="insert-form">
                <form action="insert" method="get">
                        <label for="scheduled">Pristanek aviona:</label>
                        <input type="time" name="arrived" class="time"> 
                        <input type="submit" value="Submit" class="btn btn-success btn-lg" /> 
                </form>   

                <br/> <br/>       

                <form action="insert" method="get">
                        <label for="scheduled">Odhod kamiona:</label>
                        <input type="time" name="departured" class="time">
                        <input type="submit" value="Submit" class="btn btn-success btn-lg" /> 
                </form> 

                <br/> <br/>       

                <form action="insert" method="get">
                        <label for="scheduled">Predvideni cas pristanek aviona:</label>
                        <input type="time" name="schedule" class="time">
                        <input type="submit" value="Submit" class="btn btn-success btn-lg" /> 
                </form> 

           </div>

<?php require 'templates/footerTmpl.php'; ?>


