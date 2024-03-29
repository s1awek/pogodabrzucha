<div id="popup" class="popup">
    <div class="popup__content">
        <div class="close-elem" id="close-elem"><button class="close-btn" onclick="closeTarget()"><img width="20px" height="20px" src="/wp-content/uploads/2022/03/Icon-ionic-ios-close-circle-outline.png"></button>
        </div>
        <div class="DivSuccess popup-text" id="DivSuccess">
            <h2>Pewnie!</h2>
            <p>Kliknij zamów i ciesz się pogodą brzucha.</p>
            <div class="popup__content--buttons">
                <a href="https://pogodabrzucha.test/#" class="border-button border-button--solid">Zamów </a>
                <a href="/cennik/" class="border-button border-button--brown"> Zobacz diety </a>
            </div>
        </div>
        <div class="DivErr popup-text" id="DivErr">
            <h2> Jeszcze nie, ale... </h2>
            <p>zostaw nam swój adres email, a damy Ci znać kiedy dostawa będzie dostępna</p>
            <div class="popup__content--buttons">
                <?php echo do_shortcode('[contact-form-7 id="936" title="Popup wyszukiwarki"]'); ?>
            </div>
        </div>
    </div>
</div>