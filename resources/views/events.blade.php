 <aside>
     <div class="events">
         <div class="events-header">
             <h3>Мероприятия</h3>
         </div>
         <div class="events-body">
             <div class="events-date">
                 <?php
                    echo "<h4> $name_month, $year</h4>";
                    ?>
                 <div class="date-deliner"></div>
             </div>
             <table>
                 <thead>
                     <td>пн</td>
                     <td>вт</td>
                     <td>ср</td>
                     <td>чт</td>
                     <td>пт</td>
                     <td class="weekend">сб</td>
                     <td class="weekend">вс</td>
                 </thead>
                 <tbody>
                     <?php
                        echo "<tr>";

                        if (date("w", strtotime("$year-$month-1")) == 0) {
                            for ($i = 0; $i < 6; $i++) {
                                echo "<td></td>";
                            }
                        } else {
                            for ($i = 0; $i < (date("w", strtotime("$year-$month-1"))) - 1; $i++) {
                                echo "<td></td>";
                            }
                        }

                        for ($i = 1; $i <= date('t'); $i++) {
                            $day = date("w", strtotime("$year-$month-$i"));
                            if ($i == date('d')) {
                                echo "<td class='today'>$i</td>";
                            } else {
                                if ($day == 0) {
                                    echo "<td class='weekend'>$i</td>";
                                    echo "</tr>";
                                } else 
                                        if (($day == 6)) {
                                    echo "<td class='weekend' id='idshnik'>$i</td>";
                                } else
                                         if (in_array("$year-0$month-$i", $events)) {
                                    echo "<td class='active-date'><a href='/aboutEvent'>$i</a></td>";
                                } else {
                                    echo "<td >$i</td>";
                                }
                            }
                        }
                        ?>

                 </tbody>
             </table>
             <div class='events-button'>Все Мероприятия</div>
         </div>
     </div>
 </aside>
 <script src="js/appp.js"></script>