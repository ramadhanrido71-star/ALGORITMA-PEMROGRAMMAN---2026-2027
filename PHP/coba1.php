<?php
$nim ="I.2610921";
$nama = 'Mohamad Ridho Sunami';
$umur = 22;
$nilai = 92.75;
$status = TRUE;

echo "NIM :".$nim."\n";
echo "Nama :$nama\n";
print "Umur :".$umur;
print "\n";
printf("Nilai :%.3f\n",$nilai);
if($status)
    echo "status : Aktif";
else
    echo "Status : Tidak Aktif";
?>