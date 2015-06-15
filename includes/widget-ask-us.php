<section class="widget widget-appointment">
    <div class="widget-title">Pitajte nas</div>
    <form action="php/contact-send.php" id="contactform">
        <fieldset>
            <div class="row">
                <input type="text" placeholder="Ime i Prezime" name="ime">
                <i class="fa fa-user"></i>
            </div>
            <div class="row">
                <input type="tel" placeholder="Datum Rođenja" name="datum-rodjenja">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="row">
                <input type="email" placeholder="Email Adresa" name="email">
                <i class="fa fa-envelope"></i>
            </div>
            <div class="row">
                <input type="text" placeholder="Telefon" name="telefon">
                <i class="fa fa-phone"></i>
            </div>
            <div class="row">
                <textarea cols="30" rows="5" placeholder="Pitanje" name="pitanje"></textarea>
                <i class="fa fa-align-left"></i>
            </div>
            <div class="clearfix captcha">
                <button type="submit" class="button" value="Submit">Pošalji pitanje</button>
                <div class="captcha-wrapper">
                    <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                    <input class="verify" type="text" id="verify" name="verify" />
                </div>
            </div>
        </fieldset>
    </form>
</section>
