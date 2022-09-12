<?php
// Conditionals

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

//$age = 17;

//if($age >= 18) {
//  echo 'You are old enough to vote.';
//} else {
//  echo 'You are not old enough to vote.';
//}

//$t = 18;
//$t = date("H");

//if($t < 12){
//    echo 'Good Morning';
//} else if($t < 19) {
//    echo 'Good Afternoon';
//} else {
//    echo 'Good Evening';
//}

/* -------- Ternary Operator -------- */

/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

//$posts = ['First Post'];

//if(!empty($posts)){
//    echo $posts[0];
//} else {
//    echo 'No posts';
//}

//echo !empty($posts) ? $posts[0] : 'No posts';

//$firstPost = !empty($posts) ? $posts[0] : null;
//$firstPost = !empty($posts) ? $posts[0] : 'No posts';
//$firstPost = $posts[0] ?? 'No posts';

//echo $firstPost;

/* ---------- Switch Statements ---------- */
$favcolor = 'blue';

//switch ($favcolor) {
//    case 'red':
//        echo 'Your favorite color is red!';
//        break;
//    case 'blue':
//        echo 'Your favorite color is blue!';
//        break;
//    case 'green':
//        echo 'Your favorite color is green!';
//        break;
//    default:
//        echo 'Your favorite color is neither red, blue, nor green!';
//}

echo match ($favcolor) {
    'red' => 'Your favorite color is red!',
    'blue' => 'Your favorite color is blue!',
    'green' => 'Your favorite color is green!',
    default => 'Your favorite color is neither red, blue, nor green!',
};

