<main>
    <section>
        <div class="name">

        </div>
        <form class="d-flex" role="search" action="index.php" method="GET">
            <div class="searching">
            <select class="searchbar" name="go-one-way" id="options">
                <option value="one">one way</option>
                <option value="round">round trip</option>
            </select>
                <input class="searchbar" type="search" placeholder="Departure" aria-label="Search" name="search-des">
                <input class="searchbar" type="search" placeholder="Destination" aria-label="Search" name="search-dep">
            </div>
            <button class="searchbutton" type="submit">Search</button>
        </form>
    </section>
    <section class="bigtick">
        <?php
    
    if($depSearch !== '' AND $desSearch !==''AND $trip =='one'){
        $res=0;
          foreach($tickets as $ticket){
            if($ticket['user_ticket_id']==NULL){
            $res=$res+1?>
            <div class="ticket">
                <section class="ticket-top">
                    <ul>
                        <li><?=$ticket['boarding_hour']?></li>
                        <li><b><?=$ticket['country']?></b></li>
                    </ul>
                    <ul>
                        <li><?=$ticket['travel_time']?>h</li>

                    </ul>
                    
                    <ul>
                        <li><?=$ticket['arrival_hour']?></li>
                        <li><b><?=$ticket['des_country']?></b></li>
                    </ul>
                    <ul>
                        <li><?=$ticket['price']?>$</li>
                    </ul>
                    
                </section>
                
                <section class="ticket-top">
                    <li>Departure : <?=$ticket['departure_date']?></li>
                    <li>Arrival : <?=$ticket['arrival_date']?></li>
                </section>  
            </div>
            <?php if(isset($_SESSION['user_log'])){?>
            <a class="searchbutton"href='Models/modelStockSession.php?id=<?=$ticket['ticket_id']?>'>add to basket</a>
            <?php }
          }
        }if($res==0){
            echo 'aucun resultat';
        }
    }
            
            if($depSearch !== '' AND $desSearch !=='' AND $trip =='round'){?>
                <h3>select departure</h3><?php
                $res=0;
                  foreach($tickets as $ticket){
                    if($ticket['user_ticket_id']==NULL){
                    $res=$res+1?>
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
                    <?php if(isset($_SESSION['user_log'])){?>
                    <a href='Models/modelStockSessionReturn.php?id=<?=$ticket['ticket_id']?>'>add to basket</a>
                    <?php }
                    
                  }
                }if($res==0){
                    echo 'aucun resultat';
                }
         }
        
    
    
    ?>
    </section>
    

    <section>
        <h2>DESTINATIONS</h2>
        <div class="biggy">
            <div class="grid">
                <div class="card">
                    <img src="assets/Berlin.jpg" width="300px">
                    <h4>Berlin</h4>
                </div>
                <div class="card">
                    <img src="assets/Paris.jpg" width="300px">
                    <h4>Paris</h4>
                </div>
                <div class="card">
                    <img src="assets/Barcelone.webp" width="300px">
                    <h4>Barcelone</h4>
                </div>
                
                <div class="card">
                    <img src="assets/Londres.avif" width="300px">
                    <h4>Londres</h4>
                </div>
                <div class="card">
                    <img src="assets/Milan.jpg" width="300px">
                    <h4>Milan</h4>
                </div>

            </div>
            </div>
            </div>
    </section>

    <section>
        TICKETS PRICES
    </section>

    <footer>
        <p>this is our agency</p>
    </footer>
</main>