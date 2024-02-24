<?php

$title_suffix = "Philosophy";
$description = "Philosophies and tips to improve the quality of life";
$keywords = "philosophy, tips, friendship";


ob_start();
?>
To view one element, insert in the search bar the corresponding tag.
Actually the following elements are available : 
<?php
print_available_ranges($all_ranges);
?>
<div align="center">
	<form name="search_element" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="one_element" />
		<input type="text" name="element_key" minlength="1" maxlength="5">
		<button type="submit">Show</button>
	</form>
	<br />
	If you want to view the full list, use this button :
	<form name="full_list" action="/philosophy.php" method="GET" style="padding:10px;">
		<input type="hidden" name="mode" value="full_list" />
		<button type="submit">Full list</button>
	</form>
</div>
<?php
$search_interface = ob_get_contents();
ob_end_clean();