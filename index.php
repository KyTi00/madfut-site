<?php
// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Authorization: u2g6bXmSOQ1Padh6FcBwVa2CCIuAtBgdhf6hB9bBOFSo3019RP" .
              "User-agent: BROWSER-DESCRIPTION-HERE\r\n"
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('https://shoppy.gg/api/v1/products/CZN0QRu', false, $context);
?>

<button>Buy</button>
