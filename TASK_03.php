<?php
$first=0;
$second=1;
$new=1;
//F0	F1	F2	F3	F4	F5	F6	F7	F8	F9	F10	F11	F12	F13	F14	F15	F16	F17	 F18	F19
//0	    1	1	2	3	5	8	13	21	34	55	89	144	233	377	610	987	1597 2584	4181
//যেহেতু ১০ম ফিবোনাসসি নম্বর ৫৫ হয় । এটা ১০০ এর বেশি হয় না । সেহেতু break statement কাজ করে নাই ।

for ($i=0;$i<=10;$i++){
if ($first>100){
break;
}
echo "$first\n";
$second=$new;
$new=$first+$second;
$first=$second;
}


?>