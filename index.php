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
                require('view/yanncedricView.php');
                break;
            case 'leadership':
                require('view/leadershipView.php');
                break;
            case 'sja':
                require('view/sjaView.php');
                break;
            case 'ca':
                require('view/conseilView.php');
                break;   
            case 'cp':
                require('view/pressReleaseView.php');
                break;
            case 'cm':
                require('view/mediaCoverageView.php');
                break;
            case 'press':
                require('view/conseilView.php');
                break;
            case 'media':
                require('view/NewsAndAdvices.php');
                break;
            case 'eaj':
                require('view/eajView.php');
                break;
            case 'method':
                require('view/ourMethodView.php');
                break;                
            case 'where':
                require('view/whereAreWeView.php');
                break;
            case 'patners':
                require('view/patnersView.php');
                break;
             case 'events':
                require('view/eventsView.php');
                break;
            case 'rc':
                require('view/realizationAndCommitmentsView.php');
                break;
            case 'PLibrary':
                require('view/publicationsLibraryView.php');
                break;
            case 'blog':
                require('view/blogView.php');
                break;
            default: require('view/ErrorView.php');
        }
    }
    else {
        require('view/indexHeaderView.php');
        require('view/indexView.php');
    }
    
    require('view/footerView.php');
  ?>

<!-- Button trigger modal -->


<!-- MODAL --> 
<script>
    var titreContent = document.querySelector('h1').textContent;
    var titre = document.querySelector('title');
    titre.textContent += ' - ' + titreContent;
    
    //mise a jour manuelle en cas de changement sur l'index
    if(titre.textContent == 'YJN - A PROPOS YOUNG JOB NETWORK') {
        titre.textContent = 'YJN - ACCEUIL';
    }
</script>
<script src="public/bootstrap/js/jquery.js"></script>
<script src="public/bootstrap/js/bootstrap.min.js"></script>
<script src="public/bootstrap/js/wow.js"></script>
<script src="public/bootstrap/js/script.js"></script>
<script> 
    new WOW().init(); 
    $(window).on('scroll', function(){
    if($(window).scrollTop()){
      $('.navbar-shrink ').addClass('black');
      $('.logo ').addClass('logo-reduits');
      $('.navbar-lu').addClass('navbar-lu-reduits');
    }
    else{
      $('.navbar-shrink ').removeClass('black');
      $('.logo ').removeClass('logo-reduits');
      $('.navbar-lu').removeClass('navbar-lu-reduits');
    }
  });
    $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
      
    //Ajout de l'animation breve liee au scrolling  
    $(document).scroll(function() {
        	var position = $(this).scrollTop();
        	if(position == 0) {
          		$('.curve-base').attr('d','M798,59.5H4v-9.667C4,49.833,206,7.5,401,7.5c212.5,0,397,41.667,397,41.667V59.5z');
          		$('.curve-inverse').attr('d','M798,59.5C798,59.5,4,59.5,4,59.5C4,59.5,3.866,-47.624,3.866,-47.624C3.866,-47.624,207.00500000000002,7.039999999999999,402.005,7.039999999999999C614.506,7.039999999999999,797.866,-47.624,797.866,-47.624C797.866,-47.624,798,59.5,798,59.5C798,59.5,798,59.5,798,59.5');
        	}
        	else {
          		$('.curve-base').attr('d','M798,59.5H4v-9.667C4,49.833,206,7.5,401,7.5c212.5,0,397,41.667,397,41.667V59.5z');
          		$('.curve-inverse').attr('d','M798,59.5C798,59.5,4,59.5,4,59.5C4,59.5,4,49.83299999999999,4,49.83299999999999C4,49.83299999999999,206,7.5,401,7.5C613.5,7.5,798,49.166999999999994,798,49.166999999999994C798,49.166999999999994,798,59.5,798,59.5C798,59.5,798,59.5,798,59.5');
        	}
      		});
            
    });
    
</script>
<!-- JS pour le portfolio-->
</body>
</html>