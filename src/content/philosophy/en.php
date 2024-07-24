<?php

$title_suffix = "Philosophy";
$description = "Philosophies and tips to improve the quality of life";
$keywords = "philosophy, tips, friendship";


ob_start();
?>
<div align="center">
	To view one element, insert in the search bar the corresponding key. Underscore and padding zeroes are optional. <a href="/philosophy.php?mode=one_element&with_back_to_results=false&element_key=H_001">Read the 'H' elements</a> before reading others.
	Actually the following range of elements are available : 
	<?php
	print_available_ranges($all_ranges);
	?>
	<br />
	Insert the identifier of an element (ex: "A_123") to view it.
	<br />
	<br />
	<form name="search_element" action="/philosophy.php" method="GET">
		<input type="hidden" name="mode" value="one_element" />
		<input type="hidden" name="with_back_to_results" value="false" />
		<input type="text" name="element_key" minlength="1" maxlength="5">
		<button type="submit">Show</button>
	</form>
	<br />
	If instead you want to make a search by words inside the elements, insert all the words that should be present in this search bar :
	<br />
	<br />
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
	<br />
	<div style="text-align:left;">
		If instead you're a software developer and you're trying to access the content using API, here you can find the list of the available API : 
		<ul>
			<li>Version 1.0 - <a href="/api/v1.0/get_api_calls_specification.php">Specifications</a> (JSON format)</li>
			<li>Version 1.1 - <a href="/api/v1.1/get_api_calls_specification.php">Specifications</a> (JSON format)</li>
			<li>Version 1.2 - <a href="/api/v1.2/get_api_calls_specification.php">Specifications</a> (JSON format) - (<a href="/api/v1.2/sample.html">embed sample</a>)</li>
		</ul>
		<br />
		If there are errors, inaccuracies or questions regarding any content, you can use the feedback form from the link in the footer of the page.
	</div>
</div>
<?php
$search_interface = ob_get_contents();
ob_end_clean();