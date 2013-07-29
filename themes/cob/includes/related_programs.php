<?php
/**
 * @copyright 2013 City of Bloomington, Indiana
 * @license http://www.gnu.org/licenses/agpl.txt GNU/AGPL, see LICENSE.txt
 * @author Cliff Ingham <inghamn@bloomington.in.gov>
 * @param array $programs
 */
echo "
<div class=\"block\">
	<h2>Related Programs</h2>
	<ul>
";
	foreach ($programs as $p) {
		echo '<li>'.l($p->title, "node/{$p->nid}").'</li>';
	}
echo "
	</ul>
</div>
";
