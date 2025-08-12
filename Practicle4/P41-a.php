<?php
   // print_r() → Displays the whole array in a readable way.


// Output:
// Array
// (
//     [0] => Donald
//     [1] => Jim

//var_dump() → Shows even more detail (types and lengths).


//var_dump($data);
// Output:
// array(2) {
//   [0]=> string(6) "Donald"
//   [1]=> string(3) "Jim"
// }

?>


<?php
    $data = array("Donald","Jim","Tom","Mark","Jude");
    $a = array("red","green","blue");

    array_push($data,"Harry");
    print_r($data);

    array_pop($a);
    print_r($a);

    $reversedData = array_reverse($data);
    print_r($reversedData);
?>