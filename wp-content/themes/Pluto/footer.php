<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Kratong
 */
?>

<?php
		/**
    	*	Setup Google Analytic Code
    	**/
    	include (TEMPLATEPATH . "/google-analytic.php");
?>

<div id="footer">
	<br class="clear"/><br/><br/>
	<div id="copyright">
	    <?php
	    	/**
	    	 * Get footer text
	    	 */
	
	    	$pp_footer_text = get_option('pp_footer_text');
	
	    	if(empty($pp_footer_text))
	    	{
	    		$pp_footer_text = '';
	    	}
	    	
	    	echo stripslashes(html_entity_decode($pp_footer_text));
	    ?>
	</div>
    <div id="contact-info">
	<div id="reserve-button" class="OTButton"><script type="text/javascript" src="https://secure.opentable.com/ism/link.aspx?rid=85192&restref=85192&bgimage=https://secure.opentable.com/img/frontDoor/ot_btn_red.png&hover=1"></script><noscript id="OT_noscript"><a href="http://www.opentable.com/puritan-and-company-reservations-cambridge?rtype=ism&restref=85192" >Reserve Now On OpenTable.com</a></noscript>
	</div>
	<div id="address">
            1166 Cambridge St.<br />
            Inman Square<br />
            Cambridge<br />
            <span style="color: #a6323b;"><strong>(617) 615-6195</strong></span>
        </div>
     <div id="hours">
		<div id="hours-detail">
			Sunday Brunch<br />
			10:30 am – 2 pm<br />
		</div>        	
		<div id="hours-detail">
			Sunday – Thursday:<br />
			Dinner 5:30 pm – 10 pm<br />
			Drinks until 11pm<br />
 		</div>
		<div>
			Friday – Saturday:<br />
			Dinner 5:30 pm – 11 pm<br />
			Drinks until 12am
		</div>
        </div>
    </div>
</div>

<?php if (is_home()) { popupwfb( $Popupwfb_group = "", $Popupwfb_id = "" ); } ?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>