<?php
function pdo_connect_mysql() {
   
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'smart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	
    	exit('Failed to connect to database!');
    }
}

function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
        <header>
            <div class="content-wrapper">
                <h1>Smart Device</h1>
                <nav>
                    <a href="index.php">Home</a>
                    <a href="index.php?page=About">About</a>
                    <a href="index.php?page=products">Products</a>
                    <a href="index.php?page=review">review</a>
                </nav>
                <div class="link-icons">
                    <a href="index.php?page=cart">
						<i class="fas fa-shopping-cart"></i>
					</a>
                   

                </div>
            </div>
        </header>
        <main>
EOT;
}

function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                 <a href=" www.gmail.com "> bornaly2020@gmail.com</a> Phone Number:017*****   <p>&copy; $year, Smart device</p>
               
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>