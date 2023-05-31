$filename = 'data/hoiku.txt';
$fp = fopen($filename,'r');
$txt = fgets($fp);
echo $txt;
fclose($fp);

$st = explode(",",$txt);
var_dump($str)

<?php // content="text/plain; charset=utf-8"
$file = fopen('data/hoiku.txt','r');
while(($line = fgets($file)) !== false) {
    $data = explode(",",$line);
    $date = $data[0];
    $temperature = $data[6];
}
fclose($file);
?>

<td><?= $weather ?></td>
            <td><?= $kigen ?></td>
            <td><?= $lunch ?></td>
            <td><?= $neta ?></td>
            <td><?= $okiru ?></td>
            <td><?= $taion ?>Ｃ°</td>
            </tr>

            <?php 
                $ar_data = $date;
                for( $a = 1; $a <= 10; $a++){
            ?>
                <td><?= $ar_data[$a] ?></td>
            <?php } ?>
            <?php 
                $ar_data1 = $ar[1];
                for( $b = 1; $b <= 10; $b++){
            ?>
                <td><?= $ar_data1[$b] ?></td>
            <?php } ?>
            <?php 
                $ar_data2 = $ar[2];
                for( $c = 1; $c <= 10; $c++){
            ?>
                <td><?= $ar_data2[$c] ?></td>
            <?php } ?>
            <?php 
                $ar_data3 = $ar[3];
                for( $d = 1; $d <= 10; $d++){
            ?>
                <td><?= $ar_data3[$d] ?></td>
            <?php } ?>
            <?php 
                $ar_data4 = $ar[4];
                for( $e = 1; $e <= 10; $e++){
            ?>
                <td><?= $ar_data4[$e] ?></td>
            <?php } ?>


