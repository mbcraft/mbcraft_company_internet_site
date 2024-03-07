<?php

ob_start();

print_element($lang,"introduction");
print_range_by_specification($lang,$range_H1);
print_range_by_specification($lang,$range_A1);
print_range_by_specification($lang,$range_A2);
print_range_by_specification($lang,$range_A3);
print_element($lang,"note");
print_range_by_specification($lang,$range_B1);
print_element($lang,"end_of_booklet_statement");
print_range_by_specification($lang,$range_C1);
print_range_by_specification($lang,$range_D1);

$content = ob_get_contents();
ob_end_clean();