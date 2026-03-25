<?php
// التكليف 04
// إستخدم ما تعلمته لتطبع أسماء ال Filters مع ال ID بهذا الشكل

echo "<pre>";
print_r(array_combine(array_map("filter_id", filter_list()), filter_list()));
echo "</pre>";

?>