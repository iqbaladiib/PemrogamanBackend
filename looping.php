<?php
#for loping yang udah ditentuin nilainya
#ada 3 statement (nilai awal,garis ginis,increment atau untuk menaikan nilai)

for ($i = 0; $i <= 23; $i ++){ 
    echo "lopping ke $i <br>";
}

#foreach buat ngelooping array
#pilih variabel yang pen dilooping abis itu bikin variabel baru

$animals = ["ayam", "anjing", "harimau"]; #array index menggunakanS number sebagai key

foreach($animals as $animal){
    echo "$animal <br>" ;
}
