<?php
foreach($tickets as $ticket){?>        
                <div class="ticket">
                <section class="ticket-top">
                    <ul>
                        <li><?=$ticket['boarding_hour']?></li>
                        <li><?=$ticket['country']?></li>
                    </ul>
                    <ul>
                        <li><?=$ticket['travel_time']?>h</li>

                    </ul>
                    
                    <ul>
                        <li><?=$ticket['arrival_hour']?></li>
                        <li><?=$ticket['des_country']?></li>
                    </ul>
                    <ul>
                        <li><?=$ticket['price']?>$</li>
                    </ul>
                    
                </section>
                
                <section class="ticket-top">
                    <li><?=$ticket['departure_date']?></li>
                    <li><?=$ticket['arrival_date']?></li>
                </section>  
            </div>
            <?php
                } 