<?php
/*

 Copyright (c) 2001 - 2006 Ampache.org
 All rights reserved.

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.

*/

require ('../modules/init.php');

$action = scrub_in($_REQUEST['action']);

if (!$GLOBALS['user']->has_access(100)) { 
	access_denied();
	exit();
}


show_template('header'); 
?>
<!-- Big Daddy Table --> 
<table>
<tr>
	<!-- Needs Attention Cell -->
	<td rowspan="2" valign="top" width="50%">
	<?php require (conf('prefix') . '/templates/show_admin_info.inc.php'); ?>
	</td>
	<!-- Catalog Cell -->
	<td width="50%"><?php require (conf('prefix') . '/templates/show_admin_catalog.inc.php'); ?></td>
</tr>
<tr>
	<!-- Users Cell -->
	<td><?php require (conf('prefix') . '/templates/show_admin_user.inc.php'); ?></td>
</tr>
</table>
<?php show_footer(); ?>
