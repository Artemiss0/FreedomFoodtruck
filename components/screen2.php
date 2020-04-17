<div class="col-sm-12">
    <h2 class="title title__center">Menu</h2>
    <div class="container container--white">
        <div class="food-items food-items__menu">
        </div>
        <?php
            for($i = 0; $i < 12; $i++) {
                echo '
                <div class="col-sm-4 food-items">
                    <div class="food-items food-items__imageholder">
                        <img class="food-items food-items__image" src="https://cdn.mcdonalds.pl/uploads/20191015150508/01-01-hamburger-singlepage.png" />
                    </div>
                    <div class="food-items__button js-addbutton">
                        <a class="button button__add" href="#">
                            <i class="fas fa-plus"></i>
                        </a>
                    </div>
                    <p class="food-items__subtitle">
                        Double cheeseburger
                    </p>
                    <p class="food-items__subtitle food-items__subtitle--bold">
                        $2.50
                    </p>
                </div>
                ';
            }
        
        ?>
        <div class="food-items food-items__navigation">
            <a class="button button__primary--inverted" href="#"> Prev </a>
            <a class="button button__primary" href="#"> Next </a>
        </div>
    </div>
</div>