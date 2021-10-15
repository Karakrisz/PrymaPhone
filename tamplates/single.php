<main class="container single-container">
    <div class="single-container__flex-content">
        <div class="single-container__one-flex-box">
            <div class="single-container__one-flex-box__div">Márka</div>
            <div class="single-container__one-flex-box__div">Típus</div>
            <div class="single-container__one-flex-box__div">Operációs rendszer</div>
            <div class="single-container__one-flex-box__div">Memória</div>
            <div class="single-container__one-flex-box__div">Állapot</div>
            <div class="single-container__one-flex-box__div">Ár</div>
        </div>

        <div class="single-container__two-flex-box">
            <span class="single-container__two-flex-box__div__span">Márka</span>
            <div class="single-container__two-flex-box__div">
                <?php esc($picture['brand']) ?>
            </div>
            <span class="single-container__two-flex-box__div__span">Típus</span>
            <div class="single-container__two-flex-box__div">
                <?php esc($picture['type']) ?>
            </div>
            <span class="single-container__two-flex-box__div__span">Operációs rendszer</span>
            <div class="single-container__two-flex-box__div">
                <?php esc($picture['operating_system']) ?>
            </div>
            <span class="single-container__two-flex-box__div__span">Memória</span>
            <div class="single-container__two-flex-box__div">
                <?php esc($picture['memory']) ?>
            </div>
            <span class="single-container__two-flex-box__div__span">Állapot</span>
            <div class="single-container__two-flex-box__div">
                <?php esc($picture['its_state']) ?>
            </div>
            <span class="single-container__two-flex-box__div__span">Ár</span>
            <div class="single-container__two-flex-box__div">
                <?php esc($picture['price']) ?>
            </div>
        </div>
    </div>
    <h4 class="single-container__h4">Érdekel ? <a href="tel:06709488777" class="btn green-color-yellow-gradient-btn single-container__h4__link">06709488777
            (hívás most)</a>

        <h4 class="single-container__h4">Vissza a fő oldalra <a href="/" class="btn green-color-yellow-gradient-btn single-container__h4__link">most</a>
        </h4>
</main>