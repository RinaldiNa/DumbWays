<?php


function hitungKembalian($totalBelanja, $uangPembeli)
{
    //DATA
    $uangMesin = [50000, 20000, 10000, 5000, 2000, 1000, 500];
    $result = [
        [0, $uangMesin[0]],
        [0, $uangMesin[1]],
        [0, $uangMesin[2]],
        [0, $uangMesin[3]],
        [0, $uangMesin[4]],
        [0, $uangMesin[5]],
        [0, $uangMesin[6]]
        
    ];

    
    $kembalian = $uangPembeli - $totalBelanja;

    //BASIC DISPLAY
    echo "<b> TOTAL BELANJA : {$totalBelanja} <br>";
    echo "UANG TUNAI : {$uangPembeli} <br><br>";
    echo "KEMBALIAN : {$kembalian}";
    echo "</b><br>";

    //PROSES
    do{
        if($kembalian >= $uangMesin[0]){

            $kembalian -= $uangMesin[0];
            $result[0][0] +=1; 

        }elseif($kembalian >= $uangMesin[1]){
            
            $kembalian -= $uangMesin[1];
            $result[1][0] +=1;     

        }elseif($kembalian >= $uangMesin[2]){
            
            $kembalian -= $uangMesin[2];
            $result[2][0] +=1;

        }elseif ($kembalian >= $uangMesin[3]) {
            
            $kembalian -= $uangMesin[3];
            $result[3][0] +=1;
            
        }elseif ($kembalian >= $uangMesin[4]) {
            
            $kembalian -= $uangMesin[4];
            $result[4][0] +=1;
            
        }elseif ($kembalian >= $uangMesin[5]) {
            
            $kembalian -= $uangMesin[5];
            $result[5][0] +=1;
            
        }elseif ($kembalian >= $uangMesin[6]) {
            
            $kembalian -= $uangMesin[6];
            $result[6][0] +=1;
            
        }

    } while($kembalian > 0);


    //DISPLAY DETAIL
    for($r=0; $r<count($result); $r++)
    {
        if($result[$r][0] > 0){
         echo $result[$r][0] . " x " . $result[$r][1] . "<br>";
        }
    }
    

}

hitungKembalian(20500, 100000);