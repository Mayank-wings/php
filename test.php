<?php 
echo "<h1>Hello Welcome to the php world!</h1>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("a"=>"red","b"=>"green","c"=>"blue");

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");
$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");


// print_r(array_chunk($age,1));
// echo "<br>";
// print_r(array_chunk($age,1,true));
// echo "<br><br> for array column <br>"; 
// print_r(array_column($a,'id'));

// echo "<br><br> for array combine array fname and age <br>";
// print_r(array_combine($fname,$age));

// echo"<br><br>for the count values<br>";
// print_r(array_count_values($cars));

// echo "<br><br>for thr diff values with array_diff<br>";
// print_r(array_diff($a1,$a2));

// echo "<br><br>for the diff with key and value with array_diff_assoc <br>";
// print_r(array_diff_assoc($a1,$a2));

// echo "<br><br>for the compare with the value only array_intersect()<br>";
// print_r(array_intersect($a1,$a2));

// echo "<br><br>for the compare with the key and value array_intersect_assoc()<br>";
// print_r(array_intersect_assoc($a1,$a3));

// echo"<br><br>for the compare key of the array with array_intersect_key() <br>";
// print_r(array_intersect_key($a1,$a3));
// echo "<br>";

// echo "<br> file read with the readFile <br>";
// $myfile =  readfile('text.txt');

echo "<br>------------------------********------------------------";
echo "<br>file read with the fopen<br><br>";
$myfile = fopen("text.txt","r") or die("Unable to open file!");
print_r($myfile);
fclose($myfile);

?>