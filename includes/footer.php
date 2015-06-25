<footer class="page-footer">
    <a href="#" id="top-link" class="top-link"><i class="fa fa-angle-double-up"></i></a>

    <div class="grid-row futer" style="margin-bottom: 0;">
        <nav  class="footer-nav">
        <?php include('includes/footer-nav.php'); ?>
        </nav>
    </div>
    <div class="grid-row copy-resp socijalne">
        <?php include('includes/social.php'); ?>
    </div>
    <div class="grid-row copy-resp">
        <div class="grid-col">
            <!-- last news -->
            <section class="widget-alt last-news">
                <p><?php echo $lang['page']['footer']['copyright'] ?></p>
            </section>
            <!--/ last news -->
        </div>
    </div>
    <div class="grid-row" style="margin-bottom: 2px;">
        <div class="grid-col">
            <!-- last news -->
            <section class="widget-alt last-news">
                <p><?php echo $lang['page']['footer']['responsability']; ?></p>
            </section>
            <!--/ last news -->
        </div>
    </div>
</footer><?php
