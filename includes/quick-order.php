<form id="quick-search" class="quick-search" action="kontakti#section1" method="post" name="quick-serach">
    <fieldset>
        <legend><?php echo $lang['quickorder']['legend'] ?>:</legend>
        
        <input type="text" placeholder="Ime i Prezime" id="full-name" name="full-name" class="ui-autocomplete-input" autocomplete="off">
        <input type="text" placeholder="Telefon" id="phone" name="phone" class="ui-autocomplete-input" autocomplete="off">
        <button type="submit"><?php echo $lang['quickorder']['forma']['label']['submit']; ?></button>
        <div class="switcher">
            <button id="quick-search-switcher" name="quickorder" type="button"><?php echo $lang['quickorder']['forma']['opener']; ?></button>
        </div>
    </fieldset>				
</form>
