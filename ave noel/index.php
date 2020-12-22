<!DOCTYPE html>
<html>
<head>
    <?php include("menu.php"); ?>
<title>AVE NOEL</title>
</head>
<body>
    <img src="logo.png" width="270" height="100">
    <?php include("carousel.php");
            if (isset($_GET['page']))
                    $page = $_GET['page'];
                else $page = 0;
                switch($page)
                {
                    case 1 : header('Location: inscription.php'); break;
                    case 2 : include(""); break;
                    case 3 : include(""); break;
                    default :
                    break;
                }
        ?>
    </body>
</html>