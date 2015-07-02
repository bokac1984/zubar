<?php /*
if(isset($_GET['typeActive']))
	$typeActive = $GET["typeActive"];
else
	$typeActive = 1;*/
	
?>
<nav class="main-nav">
<ul>
<li>
    <a href="#" <?php echo $typeActive == 1 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['estetska'] ?></a>
    <ul>
        <li><a href="evetric-kompozitni-ispun"><?php echo $lang['menu']['everic'] ?></a></li>
        <li><a href="fuji-glas-jonomer-ispun"><?php echo $lang['menu']['fuji'] ?></a></li>
        <li><a href="bijeljenje-zuba"><?php echo $lang['menu']['bijeljenje'] ?></a></li>
        <li><a href="airjet-tretman"><?php echo $lang['menu']['airjet'] ?></a></li>
        <li><a href="anti-aging-stomatologija"><?php echo $lang['menu']['antiaging'] ?></a></li>
        <li><a href="kreiranje-osmijeha"><?php echo $lang['menu']['kreiranje-osmijeha'] ?></a></li>
        
    </ul>
</li>
<li>
    <a href="#" <?php echo $typeActive == 2 ? 'class="active "' : 'class=""' ?>><?php echo $lang['menu']['zubna-protetika'] ?></a>
    <ul>
        <li><a href="metalkeramicke-krunice"><?php echo $lang['menu']['cornice'] ?></a></li>
        <li><a href="press-bezmetalne-krunice"><?php echo $lang['menu']['pres-bezmetalne'] ?></a></li>
        <li><a href="cirkonijum-dioksid-krunice"><?php echo $lang['menu']['cirkonijum'] ?></a></li>
        <li><a href="press-keramicki-veniri"><?php echo $lang['menu']['veniri'] ?></a></li>   
        <li><a href="press-keramicki-inlej"><?php echo $lang['menu']['inlej'] ?></a></li>
        <li><a href="skeletirana-proteza"><?php echo $lang['menu']['sk-proteza'] ?></a></li>
        <li><a href="akrilatna-proteza"><?php echo $lang['menu']['akrilatna'] ?></a></li>  
        <li><a href="bruksosplint"><?php echo $lang['menu']['bruksosplint'] ?></a></li>
    </ul>
</li>
<li>
    <a href="#" <?php echo $typeActive == 3 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['implantologija'] ?></a>
    <ul>
        <li><a href="straumann-implantati"><?php echo $lang['menu']['straumann'] ?></a></li>   
        <li><a href="mdi-mini-implantati"><?php echo $lang['menu']['mdiimplantati'] ?></a></li> 
    </ul>
</li>
<li>
    <a href="#" <?php echo $typeActive == 4 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['oralna-hirurgija'] ?></a>		
     <ul>
        <li><a href="ekstrakcija-zuba"><?php echo $lang['menu']['ekstrakcija-zuba'] ?></a></li>
        <li><a href="apikotomija"><?php echo $lang['menu']['apikotomija'] ?></a></li>
        <li><a href="cistektomija"><?php echo $lang['menu']['cistektomija'] ?></a></li>
        <li><a href="incizija-apscesa"><?php echo $lang['menu']['incizija'] ?></a></li>
        <li><a href="frenulektomija"><?php echo $lang['menu']['frenulektomija'] ?></a></li>
        <li><a href="nivelacija-alveolarnog-grebena"><?php echo $lang['menu']['nivelacija'] ?></a></li>
    </ul>							
</li>
<li>
    <a href="ortodoncija" <?php echo $typeActive == 5 ? 'class="active "' : 'class=""' ?>><?php echo $lang['menu']['ortodoncija'] ?></a>
</li>
<li>
    <a href="#" <?php echo $typeActive == 6 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['opsta-stomatologija'] ?></a>
    <ul>
        <li><a href="endodoncija"><?php echo $lang['menu']['endodoncija'] ?></a></li>
        <li><a href="parodontologija"><?php echo $lang['menu']['parodontologija'] ?></a></li>
        <li><a href="pedodoncija"><?php echo $lang['menu']['pedodoncija'] ?></a></li>
        <li><a href="stomatoloska-radiologija"><?php echo $lang['menu']['stomradiologija'] ?></a></li>
    </ul>
</li>	
<li>
    <a href="#" <?php echo $typeActive == 7 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['o-nama'] ?></a>
    <ul>
        <li><a href="stomatologija-kecman"><?php echo $lang['menu']['stom-kecman'] ?></a></li>
        <li><a href="opste-info"><?php echo $lang['menu']['opste-info'] ?></a></li>
        <li><a href="nasi-kanali-komunikacije"><?php echo $lang['menu']['nasi-kom-kanali'] ?></a></li>
        <li><a href="cjenovnik"><?php echo $lang['menu']['cjenovnik'] ?></a></li>
        <li><a href="partnerski-program"><?php echo $lang['menu']['partner-prog'] ?></a></li>
        <?php $langg = get_lang_id();  if ($langg != 'en') { ?><li><a href="karijera"><?php echo $lang['menu']['karijera'] ?></a></li><?php } ?>
    </ul>
</li>							
<li>
    <a href="kontakti" <?php echo $typeActive == 8 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['kontakt'] ?></a>
</li>
</ul>
</nav>

<div class="flags">
    <a href="?lang=en">ENG</a>
    <a href="?lang=sr">BHS</a>
</div>