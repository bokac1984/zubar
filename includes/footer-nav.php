<ul>
    <li class="first-level-nav">
        <a href="estetska-stomatologija" <?php echo $typeActive == 1 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['page']['estetska']['title']; ?></a>
        <ul class="second-level-nav">
            <li><a href="estetska-stomatologija#section1"><?php echo $lang['menu']['everic'] ?></a></li>
            <li><a href="estetska-stomatologija#section2"><?php echo $lang['menu']['fuji'] ?></a></li>
            <li><a href="estetska-stomatologija#section3"><?php echo $lang['menu']['bijeljenje'] ?></a></li>
            <li><a href="estetska-stomatologija#section4"><?php echo $lang['menu']['airjet'] ?></a></li>    
        </ul>
    </li>
    <li class="first-level-nav">
        <a href="zubna-protetika" <?php echo $typeActive == 2 ? 'class="active "' : 'class=""' ?>><?php echo $lang['menu']['zubna-protetika'] ?></a>
        <ul class="second-level-nav">
            <li><a href="zubna-protetika#section1"><?php echo $lang['menu']['cornice'] ?></a></li>
            <li><a href="zubna-protetika#section2"><?php echo $lang['menu']['pres-bezmetalne'] ?></a></li>
            <li><a href="zubna-protetika#section3"><?php echo $lang['menu']['cirkonijum'] ?></a></li>
            <li><a href="zubna-protetika#section4"><?php echo $lang['menu']['veniri'] ?></a></li>   
            <li><a href="zubna-protetika#section5"><?php echo $lang['menu']['inlej'] ?></a></li>
            <li><a href="zubna-protetika#section6"><?php echo $lang['menu']['sk-proteza'] ?></a></li>
            <li><a href="zubna-protetika#section7"><?php echo $lang['menu']['akrilatna'] ?></a></li>  
        </ul>
    </li>
    <li class="first-level-nav">
        <a href="implantologija" <?php echo $typeActive == 3 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['implantologija'] ?></a>
        <ul class="second-level-nav">
            <li><a href="implantologija#section1"><?php echo $lang['menu']['straumann'] ?></a></li>   
        </ul>
    </li>
    <li class="first-level-nav">
        <a href="oralna-hirurgija" <?php echo $typeActive == 4 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['oralna-hirurgija'] ?></a>		
        <ul class="second-level-nav">
            <li><a href="oralna-hirurgija#section1"><?php echo $lang['menu']['ekstrakcija-zuba'] ?></a></li>
            <li><a href="oralna-hirurgija#section2"><?php echo $lang['menu']['apikotomija'] ?></a></li>
            <li><a href="oralna-hirurgija#section3"><?php echo $lang['menu']['cistektomija'] ?></a></li>
            <li><a href="oralna-hirurgija#section4"><?php echo $lang['menu']['incizija'] ?></a></li>
            <li><a href="oralna-hirurgija#section5"><?php echo $lang['menu']['frenulektomija'] ?></a></li>
            <li><a href="oralna-hirurgija#section6"><?php echo $lang['menu']['nivelacija'] ?></a></li>
        </ul>							
    </li>
    <li class="first-level-nav">
        <a href="ortodoncija" <?php echo $typeActive == 5 ? 'class="active "' : 'class=""' ?>><?php echo $lang['menu']['ortodoncija'] ?></a>
    </li>
    <li class="first-level-nav">
        <a href="opsta-stomatologija" <?php echo $typeActive == 6 ? 'class="active two-row"' : 'class="two-row"' ?>><?php echo $lang['page']['opstastomatologija']['title'] ?></a>
        <ul class="second-level-nav">
            <li><a href="opsta-stomatologija#section1"><?php echo $lang['menu']['endodoncija'] ?></a></li>
            <li><a href="opsta-stomatologija#section2"><?php echo $lang['menu']['parodontologija'] ?></a></li>
            <li><a href="opsta-stomatologija#section3"><?php echo $lang['menu']['pedodoncija'] ?></a></li>
        </ul>
    </li>	
    <li class="first-level-nav">
        <a href="o-nama" <?php echo $typeActive == 7 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['o-nama'] ?></a>
        <ul class="second-level-nav">
            <li><a href="o-nama#section1"><?php echo $lang['menu']['stom-kecman'] ?></a></li>
            <li><a href="o-nama#section2"><?php echo $lang['menu']['opste-info'] ?></a></li>
            <li><a href="o-nama#section3"><?php echo $lang['menu']['nasi-kom-kanali'] ?></a></li>
            <li><a href="o-nama#section4"><?php echo $lang['menu']['cjenovnik'] ?></a></li>
            <li><a href="o-nama#section5"><?php echo $lang['menu']['partner-prog'] ?></a></li>
            <li><a href="o-nama#section6"><?php echo $lang['menu']['karijera'] ?></a></li>
        </ul>
    </li>							
    <li class="first-level-nav">
        <a href="kontakti" <?php echo $typeActive == 8 ? 'class="active"' : 'class=""' ?>><?php echo $lang['menu']['kontakt'] ?></a>
    </li>
    <li class="first-level-nav" style="width:150px;">
        <a href="index.php" class="footer-logo"><img src="img/cyan/logo.png" alt="Kecman"></a>
        <ul class="second-level-nav" style="width:180px;">
            <li><?php echo $lang['page']['kontakt']['naziv'] ?></li>
            <li><?php echo $lang['page']['kontakt']['adresa'] ?></li>
            <li><?php echo $lang['page']['kontakt']['telefoni2'] ?></li>
            <li><?php echo $lang['page']['kontakt']['telefoni1'] ?></li>
        </ul>
    </li>
</ul>