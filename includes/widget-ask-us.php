<section class="widget widget-appointment">
    <div class="widget-title"><?php echo $lang['askus']['legend']; ?></div>
    <form action="php/uskaswidget.php" id="askuswidget" method="post" enctype="multipart/form-data">
        <fieldset>
            <div class="row">
                <input type="text" placeholder="<?php echo $lang['askus']['placeholders']['imeprezime']; ?>" name="ime">
                <i class="fa fa-user"></i>
            </div>
<!--            <div class="row">
                <input type="tel" placeholder="<?php echo $lang['askus']['placeholders']['datrodj']; ?>" name="datum-rodjenja">
                <i class="fa fa-calendar"></i>
            </div>-->
            <div class="row">
                <input type="email" placeholder="<?php echo $lang['askus']['placeholders']['email']; ?>" name="email">
                <i class="fa fa-envelope"></i>
            </div>
<!--            <div class="row">
                <input type="text" placeholder="<?php echo $lang['askus']['placeholders']['tel']; ?>" name="telefon">
                <i class="fa fa-phone"></i>
            </div>-->
            <div class="row">
                <input type="file" name="fajl" id="fajl">
                <i class="fa fa-file"></i>
            </div>
            <div class="row">
                <textarea cols="30" rows="5" placeholder="<?php echo $lang['askus']['placeholders']['pitanje']; ?>" name="poruka"></textarea>
                <i class="fa fa-align-left"></i>
            </div>
            <div class="clearfix captcha">
                <div class="captcha-wrapper">
                    <iframe src="php/capcha.php" class="capcha-frame" name="capcha_image_frame" marginwidth="0" marginheight="0" frameborder="0"></iframe>
                    <input class="verify" type="text" id="verify" name="verify" />
                </div>
                <button type="submit" name="askusbtn" class="button" value="Submit"><?php echo $lang['askus']['form']['submit']; ?></button>
            </div>
        </fieldset>
    </form>
</section>
