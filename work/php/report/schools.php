
    <?php require '../view/shared/header.php'; ?>
        <img src="../img/duck.png" id="myduck" alt="myduck-img">
        <section style="width: 96%;">
            <div>
                <div style="display: flex; justify-content: space-between;">
                    <div class="left-box">
                        <div top-box>
                            <h2 style="display: block; margin: 30px; text-align: center;">SWEDISH MUNICIPALITIES</h2>
                            <button class="menu-header" id="cityLoader">LIST OF CITIES</button>
                            <div class="vertical-menu ">
                                <div id="menu-list">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div bottom-box>
                            <div style="text-align:center;">
                                <h3 id="cityName" style="text-transform: uppercase;">list of schools</h3>
                            </div>
                            <div class="table-container" id="schools-table"></div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <script src="../js/school_script.js"></script>
        <script src="../js/myduck_script.js"></script>
    <?php require '../view/shared/footer.php'; ?>