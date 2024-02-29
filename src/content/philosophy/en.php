<?php

$title_suffix = "Philosophy";
$description = "Philosophies and tips to improve the quality of life";
$keywords = "philosophy, tips, friendship";


ob_start();
?>
<div align="center">
	To view one element, insert in the search bar the corresponding key. Underscore and padding zeroes are optional.
	Actually the following range of elements are available : 
	<?php
	print_available_ranges($all_ranges);
	?>
	<form name="search_element" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="one_element" />
		<input type="hidden" name="with_back_to_results" value="false" />
		<input type="text" name="element_key" minlength="1" maxlength="5">
		<button type="submit">Show</button>
	</form>
	If instead you want to make a search by words inside the elements, insert all the words that should be present in this search bar :
	<form name="search_by_words" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="search_with_words" />
		<input type="text" name="search_query" minlength="3">
		<button type="submit">Search</button>
	</form>
	<br />
	If instead you want to view the full list, use this button :
	<form name="full_list" action="/philosophy.php" method="GET" style="padding:10px;">
		<input type="hidden" name="mode" value="full_list" />
		<button type="submit">Full list</button>
	</form>
</div>
<?php
$search_interface = ob_get_contents();
ob_end_clean();