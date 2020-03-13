
<?php require '../view/shared/header.php'; ?>
        <section>
            <div style="margin:20px">
                <h2>FLAGS DISPLAY</h2>
            </div>
            <div class="top-box">
                <p style="margin: 0 auto"><b>RULES: </b>Click on a country name to display the corresponding country's flag. When the flag is displayed, hide the flag by clicking on it. All flags are made just from html and css. A smooth transition can be observed from displayed to
                    not displayed.
                </p>
            </div>
            <div style="margin-bottom: 10px;">
                <div class="middle-box">
                    <div class="flag" id="cmr"><b style="cursor: pointer;">Cameroon</b></div>
                    <div class="flag" id="swe"><b style="cursor: pointer;">Sweden</b></div>
                    <div class="flag" id="gr"><b style="cursor: pointer;">Greece</b></div>
                </div>

            </div>
            <div>
                <div class="bottom-box">
                    <div id="flag-container"></div>
                </div>

            </div>
        </section>
        <img src="../img/duck.png" id="myduck" alt="myduck-img">
        <script src="../js/flag_script.js"></script>
        <script src="../js/myduck_script.js"></script>


<?php require '../view/shared/footer.php'; ?>