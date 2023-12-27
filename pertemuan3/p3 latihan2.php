<?php 
    //pengkondisian / percabangan
    //if else
    //if else if else
    //ternary
    //switch

    //jika x = 2, x lebih kecil dari 20 jawbannya benar, 
    //jika x = 20, x lebih kecil dari 20 maka jawbannya akan menjadi bingo, karena x = 20, artinya 20 = 20
    // jika x =30, x lebih kecil dari 20 maka jwabannya salah
$x = 30;
if ( $x < 20 ){
    echo "benar";
}
else if(
    $x== 20){
        echo "bingo!";
}
else{
    echo"salah";
}
?>