<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/animate.css">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/integration.css">
    <link href="public/bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="public/bootstrap/css/style.css">
    <title>YJN</title>
</head>
<body>
  <?php
    if(isset($_GET['action'])) {
        require('view/headerView.php');
        switch($_GET['action']) {
            case 'mission': 
                require('view/missionView.php');
                break;
            case 'history': 
                require('view/historyView.php');
                break;
            case 'values' :
                require('view/valuesView.php');
                break;
            case 'advices' :
                require('view/advicesView.php');
                break;
            case 'yc': 
                require('view/ycView.php');
                break;
            default: require('view/errorView.php');
        }
        
        require('view/footerView.php');
    }
    else {
      require('view/indexView.php');
    }
  ?>
</body>
</html>