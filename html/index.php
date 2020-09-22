<?php
// $pupil1='Vasilii';
// $pupil2='Natasha';
// $varname= 'pupil' . mt_rand(1,2);
// echo $$varname;

// class r2d2 
// {
//     function go() {
//         switch (mt_rand(1,4)) {
//             case '1':
//                 return "forth";
//                 break;
//             case '2':
//                 return "back";
//                 break;
//             case '3':
//                 return "left";
//                 break;    
//             default:
//                 return "right";
//                 break;
//     }}
//     function forth(){
//         echo 'i go forth';
//     }
//     function back(){
//         echo "i go back";
//     }
//     function left(){
//         echo "i go left";
//     }
//     function right(){
//         echo "i go right";
//     } 
//     function step(){
//         $step=$this->go();
//         $this->$step();
//     }   
// }
// $r2d2 = new r2d2();
// for ($i=1; $i <= 100; $i++) { 
//     echo $r2d2->step() . "<br>"; 
// }

/* function go() {
switch (mt_rand(1,4)) {
    case '1':
        return "forth";
        break;
    case '2':
        return "back";
        break;
    case '3':
        return "left";
        break;    
    default:
        return "right";
        break;
}
}
function forth(){
echo 'i go forth';
}
function back(){
echo "i go back";
}
function left(){
echo "i go left";
}
function right(){
echo "i go right";
}
for ($i=1; $i <= 100; $i++) { 
    $step=go();
    echo "step $i: ";
    echo $step() . "<br>"; 
} */

//phpinfo();

$dbconn = pg_connect("host=postgresql dbname=postgres user=postgres password=root")
    or die('Не удалось соединиться: ' . pg_last_error());
echo 'connnected!';
pg_close($dbconn);

// $link = mysqli_connect('mysql', 'root', 'root');
// if (!$link) {
//     die('Ошибка соединения: ' . mysqli_error());
// }
// echo 'Успешно соединились';
// mysqli_close($link);
// phpinfo();