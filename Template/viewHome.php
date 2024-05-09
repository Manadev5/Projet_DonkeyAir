<main>
    <section>
        <img src="" alt="">
        <p></p>
        <form class="d-flex" role="search" action="index.php" method="GET">

            <select name="go-one-way" id="options">
                <option value="one">one way</option>
                <option value="round">round trip</option>
            </select>
            <input  type="search" placeholder="Departure" aria-label="Search" name="search-des">
            <input  type="search" placeholder="Destination" aria-label="Search" name="search-dep">
            <button  type="submit">Search</button>
        </form>
    </section>
    <?php
    
        
        if($depSearch !== '' AND $desSearch !=='' AND $trip =='one'){
            var_dump($trip);
            $res=0;
              foreach($tickets as $ticket){
                if($ticket['user_ticket_id']==NULL){
                $res=$res+1?>
                <div>
                    <h3><?=$ticket['country']?></h3>
                    <h3><?=$ticket['des_country']?></h3>
                    <ul>
                        <li><?=$ticket['departure_date']?></li>
                        <li><?=$ticket['arrival_date']?></li>
                        <li><?=$ticket['boarding_hour']?></li>
                        <li><?=$ticket['travel_time']?></li>
                        <li><?=$ticket['arrival_hour']?></li>
                        <li><?=$ticket['sit_number']?></li>
                        <li><?=$ticket['travel_number']?></li>
                        <li><?=$ticket['price']?></li>
                    </ul>
                </div>
                <?php if(isset($_SESSION['user_log'])){?>
                <a href='Models/modelStockSession.php?id=<?=$ticket['ticket_id']?>'>add to basket</a>
                <?php }
                
              }
            }if($res==0){
                echo 'aucun resultat';
            }
        }
            
            if($depSearch !== '' AND $desSearch !=='' AND $trip =='round'){
                $res=0;
                var_dump($trip);
                ?><h3>select the first trip</h3><?php
                  foreach($tickets as $ticket){
                    if($ticket['user_ticket_id']==NULL){
                    $res=$res+1?>
                    <div>
                        <h3><?=$ticket['country']?></h3>
                        <h3><?=$ticket['des_country']?></h3>
                        <ul>
                            <li><?=$ticket['departure_date']?></li>
                            <li><?=$ticket['arrival_date']?></li>
                            <li><?=$ticket['boarding_hour']?></li>
                            <li><?=$ticket['travel_time']?></li>
                            <li><?=$ticket['arrival_hour']?></li>
                            <li><?=$ticket['sit_number']?></li>
                            <li><?=$ticket['travel_number']?></li>
                            <li><?=$ticket['price']?></li>
                        </ul>
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

    <section>
        <h2>DESTINATIONS</h2>
    </section>

    <section>
        TICKETS PRICES
    </section>

    <footer>
        <p>this is our agency</p>
    </footer>
</main>