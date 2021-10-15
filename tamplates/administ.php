<div class="administ-container">
    <form id="addMobileSubmit" action="/addMobileSubmit" method="post" enctype="multipart/form-data">
        <h3>Mobiltelefon rögzítése</h3>
        <h4>Tulajdonságok</h4>
        <fieldset>
            <input placeholder="Márka" id="brand" name="brand" type="text" tabindex="1" required autofocus>
        </fieldset>
        <fieldset>
            <input placeholder="Típus" id="type" name="type" type="text" tabindex="2" required>
        </fieldset>
        <fieldset>
            <input placeholder="Operációs rendszer" id="operating_system" name="operating_system" type="text" tabindex="3" required>
        </fieldset>
        <fieldset>
            <input placeholder="Memória" id="memory" name="memory" type="text" tabindex="4" required>
        </fieldset>
        <fieldset>
            <input placeholder="Állapot" id="its_state" name="its_state" type="text" tabindex="5" required>
        </fieldset>
        <fieldset>
            <input placeholder="Ár" id="price" name="price" type="text" tabindex="5" required></input>
        </fieldset>
        <input type="file" name="image" id="image" multiple accept=".jpg, .png, .gif" />
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">rögzítés</button>
        </fieldset>
    </form>

    <div class="administ-container__btn-box">
        <button type="button" class="btn btn-primary administ-container__btn-box__btn" data-toggle="modal" data-target="#phoneModal">
            Rögzített telefonok megtekintése
        </button>

        <button type="button" class="btn btn-primary administ-container__btn-box__btn" data-toggle="modal" data-target="#userModal">
            Rögzített ügyfelek megtekintése
        </button>
    </div>
    <!-- The Modal -->
    <div class="fade modal" id="phoneModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Telefonok</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xl-12">
                            <?php foreach ($allPhones as $phone) : ?>
                                <form method="POST" action="/administ/<?php esc($phone['id'])  ?>/phoneEdit">

                                </form>
                                <form method="POST" action="/administ/<?php esc($phone['id'])  ?>/phoneDelete">
                                    <ul>
                                        <li>
                                            <h5 class="text-left"><?php esc($phone['brand'] .=  ' ' . $phone['type']) ?></h5>
                                            <button type="submit" class="btn btn-danger float-right modal-body__btn">Törlés</button>
                                        </li>
                                    </ul>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fade modal" id="userModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Ügyfelek</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body ">
                    <div class="row">
                        <div class="col-xl-12">
                            <?php foreach ($allUsers as $user) : ?>
                                <form method="POST" action="/administ/<?php esc($user['id'])  ?>/userBought">
                                    <ul>
                                        <li>
                                            <h5 class="text-left"><?php esc($user['name']) ?></h5>
                                            <p class="text-left"><?php esc($user['email']) ?></p>
                                            <?php if (($user["status"]) == 'didNotBuy') : ?>
                                                <button type="submit" class="btn btn-success float-right modal-body__btn modal-body__btn--formating">Levásárlás</button>
                                            <?php else : ?>
                                                <button type="submit" class="btn btn-danger float-right modal-body__btn modal-body__btn--formating" disabled>Már vásárolt</button>
                                            <?php endif ?>
                                        </li>
                                    </ul>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>