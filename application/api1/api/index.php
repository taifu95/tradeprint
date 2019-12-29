<form enctype="multipart/form-data" encoding='multipart/form-data' method='post' action="index.php">
  <input name="upload_file" type="file" value="choose">
  <input type="submit" value="Upload">
</form>
<?
if ( isset($_FILES['upload_file']) ) {
 $filename  = $_FILES['upload_file']['tmp_name'];
 $handle    = fopen($filename, "r");
 $data      = fread($handle, filesize($filename));
//  print_r($data);
 $POST_DATA = array(
   'file' => base64_encode($data)
 );

 $post = [
    'filename' => $filename,
    'filepath' => "0000-RL",
    'uploadType' => "media_item"
];

$post = json_encode($post, true); 

$ch = curl_init('http://avacms10.scala.com/ContentManager/api/rest/fileupload/init');
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'apiToken' : '30471E292D1501777AEB204283A98B689C803B6EFE98D2FC2FC3F8536B8F2AA07D7BBF13',
                    // '' : '',
                    'Content-Length: ' . strlen( $post )
                )
);
$res        = curl_exec( $ch );
$httpStatus = curl_getinfo( $ch, CURLINFO_HTTP_CODE );
curl_close( $ch );


print_r($res);

 $curl = curl_init();

 curl_setopt($curl, CURLOPT_URL, 'http://avacms10.scala.com/ContentManager/api/rest/fileupload/init');
 curl_setopt($curl, CURLOPT_TIMEOUT, 30);
 curl_setopt($curl, CURLOPT_POST, 1);
 curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($curl, CURLOPT_POSTFIELDS, $POST_DATA);
 $response = curl_exec($curl);
 curl_close ($curl);
 print_r($response);
 echo "<h2>File Uploaded</h2>";
}
?>