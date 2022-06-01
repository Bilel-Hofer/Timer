<?php include VIEW_PART_DIR.'header.php'?>

    <form action="<?= 'countDown.php' ?>" method="post">
        <div class="select-box">
            <div class="select-box__current" tabindex="1">
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="0" value="10" name="min" checked="checked"/>
                    <p class="select-box__input-text">10</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="1" value="20" name="min"/>
                    <p class="select-box__input-text">20</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="2" value="30" name="min"/>
                    <p class="select-box__input-text">30</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="3" value="40" name="min"/>
                    <p class="select-box__input-text">40</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="4" value="50" name="min"/>
                    <p class="select-box__input-text">50</p>
                </div>
                <div class="select-box__value">
                    <input class="select-box__input" type="radio" id="5" value="60" name="min"/>
                    <p class="select-box__input-text">60</p>
                </div><img class="select-box__icon" src="http://cdn.onlinewebfonts.com/svg/img_295694.svg" alt="Arrow Icon" aria-hidden="true"/>
            </div>
            <ul class="select-box__list">
                <li>
                    <label class="select-box__option" for="0" aria-hidden="aria-hidden">10</label>
                </li>
                <li>
                    <label class="select-box__option" for="1" aria-hidden="aria-hidden">20</label>
                </li>
                <li>
                    <label class="select-box__option" for="2" aria-hidden="aria-hidden">30</label>
                </li>
                <li>
                    <label class="select-box__option" for="3" aria-hidden="aria-hidden">40</label>
                </li>
                <li>
                    <label class="select-box__option" for="4" aria-hidden="aria-hidden">50</label>
                </li>
                <li>
                    <label class="select-box__option" for="5" aria-hidden="aria-hidden">60</label>
                </li>
            </ul>
        </div>
        <input type="submit" value="Launch">
    </form>

<?php include VIEW_PART_DIR.'footer.php'?>