<form id="quick-search" class="quick-search" action="kontakti" method="post" name="quick-serach">
    <fieldset>
        <legend><?php echo $lang['quickorder']['legend'] ?>:</legend>
        
        <input type="text" placeholder="Ime i Prezime" id="full-name" name="full-name" class="ui-autocomplete-input" autocomplete="off">
        
        <select name="whatfor">
            <option value="0"><?php echo $lang['quickorder']['legend'] ?>:</option>
            <option value="1"><?php echo $lang['quickorder']['option']['value1'] ?></option>
            <option value="2"><?php echo $lang['quickorder']['option']['value2'] ?></option>
            <option value="3"><?php echo $lang['quickorder']['option']['value3'] ?></option>
            <option value="4"><?php echo $lang['quickorder']['option']['value4'] ?></option>
            <option value="5"><?php echo $lang['quickorder']['option']['value5'] ?></option>
            <option value="6"><?php echo $lang['quickorder']['option']['value6'] ?></option>
            <option value="7"><?php echo $lang['quickorder']['option']['value7'] ?></option>
            <option value="8"><?php echo $lang['quickorder']['option']['value8'] ?></option>
        </select>	
        
        
        <button type="submit"><?php echo $lang['quickorder']['forma']['label']['submit']; ?></button>
        <div class="switcher">
            <button id="quick-search-switcher" type="button"><?php echo $lang['quickorder']['forma']['opener']; ?></button>
        </div>
    </fieldset>				
</form>
