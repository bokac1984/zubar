<?php /*
if(isset($_GET['typeActive']))
	$typeActive = $GET["typeActive"];
else
	$typeActive = 1;*/
	
?>
<nav class="main-nav">
<ul>
<li>
    <a href="estetska-stomatologija" <?php echo $typeActive == 1 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['estetska'] ?></a>
    <ul>
        <li><a href="estetska-stomatologija#section1"><?php echo $lang['menu']['everic'] ?></a></li>
        <li><a href="estetska-stomatologija#section2"><?php echo $lang['menu']['fuji'] ?></a></li>
        <li><a href="estetska-stomatologija#section3"><?php echo $lang['menu']['bijeljenje'] ?></a></li>
        <li><a href="estetska-stomatologija#section4"><?php echo $lang['menu']['airjet'] ?></a></li>    
    </ul>
</li>
<li>
    <a href="zubna-protetika" <?php echo $typeActive == 2 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['zubna-protetika'] ?></a>
    <ul>
        <li><a href="estetska-stomatologija#section1"><?php echo $lang['menu']['cornice'] ?></a></li>
        <li><a href="estetska-stomatologija#section2"><?php echo $lang['menu']['pres-bezmetalne'] ?></a></li>
        <li><a href="estetska-stomatologija#section3"><?php echo $lang['menu']['cirkonijum'] ?></a></li>
        <li><a href="estetska-stomatologija#section4"><?php echo $lang['menu']['veniri'] ?></a></li>   
        <li><a href="estetska-stomatologija#section2"><?php echo $lang['menu']['inlej'] ?></a></li>
        <li><a href="estetska-stomatologija#section3"><?php echo $lang['menu']['sk-proteza'] ?></a></li>
        <li><a href="estetska-stomatologija#section4"><?php echo $lang['menu']['akrilatna'] ?></a></li>  
    </ul>
</li>
<li>
    <a href="implantologija" <?php echo $typeActive == 3 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['implantologija'] ?></a>
    <ul>
        <li><a href="implantologija#section1"><?php echo $lang['menu']['straumann'] ?></a></li>   
    </ul>
</li>
<li>
    <a href="oralna-hirurgija" <?php echo $typeActive == 4 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['oralna-hirurgija'] ?></a>		
     <ul>
        <li><a href="oralna-hirurgija-implantologija#section1"><?php echo $lang['menu']['ekstrakcija-zuba'] ?></a></li>
        <li><a href="oralna-hirurgija-implantologija#section2"><?php echo $lang['menu']['apikotomija'] ?></a></li>
        <li><a href="oralna-hirurgija-implantologija#section3"><?php echo $lang['menu']['cistektomija'] ?></a></li>
        <li><a href="oralna-hirurgija-implantologija#section4"><?php echo $lang['menu']['incizija'] ?></a></li>
        <li><a href="oralna-hirurgija-implantologija#section5"><?php echo $lang['menu']['frenulektomija'] ?></a></li>
        <li><a href="oralna-hirurgija-implantologija#section6"><?php echo $lang['menu']['nivelacija'] ?></a></li>
    </ul>							
</li>
<li>
    <a href="ortodoncija" <?php echo $typeActive == 5 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['ortodoncija'] ?></a>
</li>
<li>
    <a href="opsta-stomatologija" <?php echo $typeActive == 6 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['menu']['opsta-stomatologija'] ?></a>
    <ul>
        <li><a href="opsta-stomatologija#section1"><?php echo $lang['menu']['endodoncija'] ?></a></li>
        <li><a href="opsta-stomatologija#section2"><?php echo $lang['menu']['parodontologija'] ?></a></li>
        <li><a href="opsta-stomatologija#section3"><?php echo $lang['menu']['pedodoncija'] ?></a></li>
    </ul>
</li>	
<li>
    <a href="o-nama" <?php echo $typeActive == 7 ? 'class="active"' : 'class="two-row"' ?>><?php echo $lang['menu']['o-nama'] ?></a>
    <ul>
        <li><a href="o-nama#section1"><?php echo $lang['menu']['stom-kecman'] ?></a></li>
        <li><a href="o-nama#section2"><?php echo $lang['menu']['opste-info'] ?></a></li>
        <li><a href="o-nama#section3"><?php echo $lang['menu']['nasi-kom-kanali'] ?></a></li>
        <li><a href="o-nama#section4"><?php echo $lang['menu']['cjenovnik'] ?></a></li>
        <li><a href="o-nama#section5"><?php echo $lang['menu']['partner-prog'] ?></a></li>
        <li><a href="o-nama#section6"><?php echo $lang['menu']['karijera'] ?></a></li>
    </ul>
</li>							
<li>
    <a href="kontakti" <?php echo $typeActive == 8 ? 'class="active"' : 'class="two-row"' ?>><?php echo $lang['menu']['kontakt'] ?></a>
</li>
</ul>
</nav>