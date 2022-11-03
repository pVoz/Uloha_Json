<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $json = file_get_contents('https://itunes.apple.com/search?term=vaso+patejdl&entity=album');

    $json = json_decode($json);
    
    foreach ( $json ->results as $key => $value){

        pre_r ($value->collectionName);
        pre_r ($value->primaryGenreName);
        pre_r ($value->artistName);
     
        echo '	<a href="'. $value -> artworkUrl60 .'"><img src="'. $value -> artworkUrl60 .'"></a>';


    };

function pre_r($value){
    echo ('<pre>');  
    print_r ($value);
    echo ('</pre>');
    
};



// echo $json->artworkUrl60.'<br>';
// echo $value->artworkUrl100.'<br>';




// echo ('<pre>');        foreach ( $kll as $klm => $kkc)
// echo print_r ($kll);    foreach ( $json as $key => $kll)
// echo ('<pre>');
// foreach ( $kll as $klm => $kkc)

        // foreach ( $link as $link => $value);


// [artworkUrl60] 
// [artworkUrl100]
?>

</body>
</html>