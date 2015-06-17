<form id="quick-search" class="quick-search" action="kontakti#section1" method="post" name="quick-serach">
    <fieldset>
        <legend><?php echo $lang['quickorder']['legend'] ?>:</legend>
        
        <input type="text" placeholder="Ime i Prezime" id="full-name" name="full-name" class="ui-autocomplete-input" autocomplete="off">
        
        <select name="whatfor">
            <option value="0"><?php echo $lang['quickorder']['legend'] ?>:</option>
            <option value="<?php echo $lang['quickorder']['option']['value1'] ?>"><?php echo $lang['quickorder']['option']['value1'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value2'] ?>"><?php echo $lang['quickorder']['option']['value2'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value3'] ?>"><?php echo $lang['quickorder']['option']['value3'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value4'] ?>"><?php echo $lang['quickorder']['option']['value4'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value5'] ?>"><?php echo $lang['quickorder']['option']['value5'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value6'] ?>"><?php echo $lang['quickorder']['option']['value6'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value7'] ?>"><?php echo $lang['quickorder']['option']['value7'] ?></option>
            <option value="<?php echo $lang['quickorder']['option']['value8'] ?>"><?php echo $lang['quickorder']['option']['value8'] ?></option>
        </select>	
        
        
        <button type="submit"><?php echo $lang['quickorder']['forma']['label']['submit']; ?></button>
        <div class="switcher">
            <button id="quick-search-switcher" name="quickorder" type="button"><?php echo $lang['quickorder']['forma']['opener']; ?></button>
        </div>
    </fieldset>				
</form>
