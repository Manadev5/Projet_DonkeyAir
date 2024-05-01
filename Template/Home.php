<main>
    <section>
        <img src="" alt="">
        <p></p>
        <form class="d-flex" role="search" action="accueil.php" method="GET">

            <select name="options-travel" id="select-travel">
                <option>One way</option>
                <option>round trip</option>
            </select>

            <input  type="search" placeholder="Departure" aria-label="Search" name="search">
            <button  type="submit">Search</button>

            <input  type="search" placeholder="Destination" aria-label="Search" name="search">
            <button  type="submit">Search</button>
        </form>
    </section>
    <?php
          foreach($tickets as $ticket){
            ?>
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
            <?php
          }

        ?>
    <section>
        
    </section>

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