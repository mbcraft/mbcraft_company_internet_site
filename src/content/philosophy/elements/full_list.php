<?php

if (!isset($all_ranges)) echo "Variable allranges not found!";

foreach ($all_ranges as $range) {

	print_range_by_specification($lang,$range);
}
