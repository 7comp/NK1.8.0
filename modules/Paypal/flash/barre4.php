
<?php
// -------------------------------------------------------------------------//
// Nuked-KlaN - PHP Portal                                                  //
// http://www.nuked-klan.org                                                //
// -------------------------------------------------------------------------//
// This program is free software. you can redistribute it and/or modify     //
// it under the terms of the GNU General Public License as published by     //
// the Free Software Foundation; either version 2 of the License.           //
// Module Dons Paypal Pour NK 1.7.9 RC6                                     //
// Créer par Stive @ PalaceWaR.eu                                           //
// -------------------------------------------------------------------------//
	
				$sql = mysql_query("SELECT var3, var2, var5, var4, var8, var6, var7, flaw, flah FROM ". $nuked['prefix'] ."_paypal_flash WHERE id='4'");
				list($var3, $var2, $var5, $var4, $var8, $var6, $var7, $flaw, $flah ) = mysql_fetch_array($sql);
		
		  echo "<div style=\"text-align:center\">
			    <object classid=\"clsid:d27cdb6e-ae6d-11cf-96b8-444553540000\" width=\"".$flaw."\" height=\"".$flah.">
                <param name=\"movie\" value=\"modules/Paypal/flash/barre4.swf?demande=".$demande."&recu=".$recu."&exterieure=".$var2."&symbolc=".$var3."&interieurs=".$var4."&millieu=".$var5."&brur=".$var6."&dsymbol=".$var7."&texte=".$var8.">	
				<param name=\"quality\" value=\"high\">
				<param name=\"wmode\" value=\"transparent\">
                <param name=\"salign\" value=\"T\"> 
				<param name=\"salign\" value=\"center\"> 
				<param name=\"SCALE\" value=\"showall\">\n";
		  echo "<!--[if !IE]>-->
				<object type=\"application/x-shockwave-flash\" data=\"modules/Paypal/flash/barre4.swf?demande=".$demande."&recu=".$recu."&exterieure=".$var2."&symbolc=".$var3."&interieurs=".$var4."&millieu=".$var5."&brur=".$var6."&dsymbol=".$var7."&texte=".$var8."\" width=\"".$flaw."\" height=\"".$flah."\">	
                <param name=\"movie\" value=\"modules/Paypal/flash/barre4.swf?demande=".$demande."&recu=".$recu."&exterieure=".$var2."&symbolc=".$var3."&interieurs=".$var4."&millieu=".$var5."&brur=".$var6."&dsymbol=".$var7."&texte=".$var8."\ width=\"".$flaw."\" height=\"".$flah.">				
				<param name=\"quality\" value=\"high\"> 
				<param name=\"wmode\" value=\"transparent\"> 
				<param name=\"salign\" value=\"T\"> 
				<param name=\"salign\" value=\"center\"> 
				<param name=\"SCALE\" value=\"showall\">\n";
		  echo "<!--<![endif]-->
				<a href=\"http://www.adobe.com/go/getflash\"> 
				<img src=\"http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif\" alt=\"Obtenir Adobe Flash Player\"></a>\n";		
		  echo "<!--[if !IE]>-->
			    </object>\n";
		  echo "<!--<![endif]-->
		   	    </object></div><br />\n";

?>