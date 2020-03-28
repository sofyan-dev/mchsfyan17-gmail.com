<?php

function http_request($url){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, $url);
    
    // set user agent    
    curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // tutup curl 
    curl_close($ch);      

    // mengembalikan hasil curl
    return $output;
}

$data = http_request("https://api.kawalcorona.com/indonesia/provinsi/");

// ubah string JSON menjadi array
$data = json_decode($data, TRUE);
$provinsiLampung = $data[17]['attributes'];

$jumlah = count($data);

?>


<?php
                        $nomor = 1;
                        for($i=0;$i<$jumlah;$i++){
                        $hasil = $data[$i]['attributes'];
                        ?>
<tr>
    <td class="center"><?= $nomor++ ;?></td>
    <td class="darkColor fontNoto"><?= $hasil['Provinsi']; ?></td>
    <td class="darkColor fontNoto"><?= $hasil['Kasus_Posi']; ?></td>
    <td class="darkColor fontNoto"><?= $hasil['Kasus_Semb']; ?></td>
    <td class="darkColor fontNoto"><?= $hasil['Kasus_Meni']; ?></td>
</tr>
<?php } ?>
