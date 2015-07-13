<form id="quick-search" class="quick-search" method="post" name="quick-serach">
    <fieldset>
        <legend><?php echo $lang['quickorder']['legend'] ?>:</legend>
        
        <input type="text" placeholder="<?php echo $lang['quickorder']['forma']['palceholder']['name']; ?>" id="ime" name="ime" class="ui-autocomplete-input" autocomplete="off">
        <input type="text" placeholder="<?php echo $lang['quickorder']['forma']['palceholder']['telefon']; ?>" id="tel" name="tel" class="ui-autocomplete-input" autocomplete="off">
        <button type="submit"><?php echo $lang['quickorder']['forma']['label']['submit']; ?></button>
        <div class="switcher">
            <button id="quick-search-switcher" name="quickorder" type="button"><?php echo $lang['quickorder']['forma']['opener']; ?></button>
        </div>
        <div id="rezultati">
            <i class="fa fa-check"></i><?php echo $lang['quickorder']['forma']['success']; ?>
        </div>
    </fieldset>				
</form>
