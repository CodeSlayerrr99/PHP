<?php

$users=[
  [
    'username'=>'Alex',
    'age'=>16,
    'likes'=>['cats', 'dogs']
  ],
  [
    'username'=>'Billy',
    'age'=>17,
    'likes'=>['dogs', 'bunnies']
  ]
];

echo '<pre>', var_dump($users), '</pre>';
echo $users[1]['age'] . '<br>';
echo $users[0]['likes'][0] . '<br>';

foreach($users as $user){
  foreach($user['likes'] as $like)
    echo $like . '<br>';
}

$number=2;
echo 'I will give ' . $number . ' examples. <br>';
echo "I will give $number examples. <br>";

if($number%2==1){
  echo 'Is odd. <br>';
}
else{
  echo 'Is even. <br>';
}

$dayOfWeek=1;
$daysOfWeek=[
  1=>'Monday',
  2=>'Tuesday',
  3=>'Wednesday'
];

if(in_array($dayOfWeek, array_keys($daysOfWeek))){
  echo $daysOfWeek[$dayOfWeek] . '<br>';
}


$ok=true;
switch(ok){
  case true:
      echo 'It is true. <br>';
      break;
  default:
      echo 'It is false. <br>';
      break;
}

function fullName($firstName, $lastName, $separator=' '){
  return "{$firstName}{$separator}{$lastName}";
}
echo fullName('Ionut', 'Alex') . '<br>';

function add(){
  $total=0;
  var_dump(func_get_args());
  foreach(func_get_args() as $number){
    $total+=$number;
  }
  return $total;
}
echo add(5, 10, 10);

$config=[
  'separator'=>'_',
];

$name=function($firstName, $lastName) use ($config) {
  return "{$firstName}{$config['separator']}{$lastName}";
};

echo $name('Ionut', 'Alex') . '<br';


?>
