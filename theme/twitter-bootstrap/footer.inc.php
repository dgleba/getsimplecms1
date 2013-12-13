<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File:      footer.inc.php
* @Package:   GetSimple
* @Action:    Twitter Bootstrap for GetSimple CMS
*
*****************************************************/
?>
      <hr>

      <footer>
        <p>Twitter-bootstrap GS by <a href="http://lucamusolesi.altervista.org/" >Luca Musolesi</a> - <?php get_site_credits(); ?></p>
      </footer>

    </div> <!-- /container -->
    <?php get_footer(); ?>
<script type="text/javascript">
if(typeof jQuery == 'undefined') {
document.write("<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></"+"script>");
var __noconflict = true;
}
</script>
<script type="text/javascript">
if(typeof jQuery == 'undefined') {
document.write('<script src="<?php get_theme_url(); ?>/js/libs/jquery.min.js"><\/script>');
var __noconflict = true;
}
</script>
<script src="<?php get_theme_url(); ?>/js/bootstrap.js"></script>
</body>
</html>