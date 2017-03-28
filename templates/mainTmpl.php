<?php require 'templates/headerTmpl.php'; ?>

<h1>Jutranji proces</h1>
        
                    <h2>Danes: <?php echo date('d.m.y') ?> </h2>
                    <h2>Ura: <?php echo date('H:i:s', strtotime('+2 hours'))?> </h2>
                    <br/>

                        <table id="jutarnji" class="table table-striped table-hover dt-responsive" style="width:100%">
                                    <thead>
                          <tr>
                            <th>PROCES</th>
                            <th>PREDVIDENO</th>		
                            <th>DEJANSKO</th>
                            <th>POTREBEN CAS</th>
                          </tr>
                                    </thead>

                                    <tbody>
                          <tr>
                            <td>Pristanek aviona</td>
                            <td><?php echo $this->time_schedule_flight_arrived; ?></td>

                            <?php if ($this->time_flight_arrived === "cas ni znan"):  ?>
                                <td><?php echo $this->time_flight_arrived; ?></td>
                            <?php elseif (strtotime($this->time_flight_arrived) <= strtotime($this->time_schedule_flight_arrived)):  ?>
                                <td class="green"><?php echo $this->time_flight_arrived; ?></td>
                            <?php elseif (strtotime($this->time_flight_arrived) > strtotime($this->time_schedule_flight_arrived)): ?>
                                <td class="red"><?php echo $this->time_flight_arrived; ?></td>
                            <?php endif ?>

                            <td></td>
                          </tr>

                          <tr>
                            <td>Prihod robe</td>
                            <td><?php echo $this->schedule_goods_arrived ?></td>	

                            <?php if ($this->goods_arrived === "cas ni znan"):  ?>
                                <td><?php echo $this->goods_arrived; ?></td>
                            <?php elseif (strtotime($this->goods_arrived) <= strtotime($this->schedule_goods_arrived)):  ?>
                                <td class="green"><?php echo $this->goods_arrived; ?></td>
                            <?php elseif (strtotime($this->goods_arrived) > strtotime($this->schedule_goods_arrived)): ?>
                                <td class="red"><?php echo $this->goods_arrived; ?></td>
                            <?php endif ?>

                            <td>cca 0:20</td>
                          </tr>

                          <tr>
                            <td>Odhod Kamiona</td>
                            <td><?php echo $this->schedule_truck_departured ?></td>	

                            <?php if ($this->truck_departured === "cas ni znan"):  ?>
                                <td><?php echo $this->truck_departured; ?></td>
                            <?php elseif (strtotime($this->truck_departured) <= strtotime($this->schedule_truck_departured)):  ?>
                                <td class="green"><?php echo $this->truck_departured; ?></td>
                            <?php elseif (strtotime($this->truck_departured) > strtotime($this->schedule_truck_departured)): ?>
                                <td class="red"><?php echo $this->truck_departured; ?></td>
                            <?php endif ?>

                            <td>cca 0:40</td>
                          </tr>

                          <tr>
                            <td>Prihod v LJ1</td>
                            <td><?php echo $this->schedule_truck_arrived ?></td>	

                            <?php if ($this->truck_arrived === "cas ni znan"):  ?>
                                <td><?php echo $this->truck_arrived; ?></td>
                            <?php elseif (strtotime($this->truck_arrived) <= strtotime($this->schedule_truck_arrived)):  ?>
                                <td class="green"><?php echo $this->truck_arrived; ?></td>
                            <?php elseif (strtotime($this->truck_arrived) > strtotime($this->schedule_truck_arrived)): ?>
                                <td class="red"><?php echo $this->truck_arrived; ?></td>
                            <?php endif ?>

                            <td>cca 0:35</td>
                          </tr>

                          <tr>
                            <td>Konec sortiranja</td>
                            <td><?php echo $this->schedule_end_sorting ?></td>		

                            <?php if ($this->end_sorting === "cas ni znan"):  ?>
                                <td><?php echo $this->end_sorting; ?></td>
                            <?php elseif (strtotime($this->end_sorting) <= strtotime($this->schedule_end_sorting)):  ?>
                                <td class="green"><?php echo $this->end_sorting; ?></td>
                            <?php elseif (strtotime($this->end_sorting) > strtotime($this->schedule_end_sorting)): ?>
                                <td class="red"><?php echo $this->end_sorting; ?></td>
                            <?php endif ?>

                            <td>cca 0:10</td>
                          </tr>

                          <tr>
                            <td>Odhod na relacije</td>
                            <td><?php echo $this->schedule_goto_transit ?></td>	

                             <?php if ($this->goto_transit === "cas ni znan"):  ?>
                                <td><?php echo $this->goto_transit; ?></td>
                            <?php elseif (strtotime($this->goto_transit) <= strtotime($this->schedule_goto_transit)):  ?>
                                <td class="green"><?php echo $this->goto_transit; ?></td>
                            <?php elseif (strtotime($this->goto_transit) > strtotime($this->schedule_goto_transit)): ?>
                                <td class="red"><?php echo $this->goto_transit; ?></td>
                            <?php endif ?>

                            <td>cca 0:15</td>
                          </tr>
                          </tbody>
                        </table>

<?php require 'templates/footerTmpl.php'; ?>
   
