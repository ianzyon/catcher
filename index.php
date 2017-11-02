
<!DOCTYPE HTML>
<html>
<head>
<title>catch</title>
</head>
<body>
  <h3>Nothing here</h3>
</body>
<?
$ip_visitante = $_SERVER['REMOTE_ADDR'];
$user_agent_visitante = $_SERVER['HTTP_USER_AGENT'];
// $remote_host_visitante = $_SERVER['REMOTE_HOST'];
$remote_port_visitante = $_SERVER['REMOTE_PORT'];

$string = <<<EOF
======================================================
IP: $ip_visitante <br>
User_agent: $user_agent_visitante <br>
Remote_Host: <br>
Port: $remote_port_visitante <br>
======================================================
EOF;
echo $string;
echo exec('whoami');
$arquivo = fopen("ips.txt", "wb");
fwrite($arquivo, $string);
fclose($arquivo);

// header('Location: http://facebook.com');

?>
</html>
