<!DOCTYPE html>
<html lang="en" class="no-js">
  <body bgcolor="red"> 
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Guide</title>
   
		
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet" >
    <link href="css/styles5.css" rel="stylesheet">
    <link href="css/queries.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
   <!-- <link rel="stylesheet" type="text/css" href="css/demo.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
   <noscript>
   <style>
            .st-accordion ul li{
                height:auto;
            }
            .st-accordion ul li > a span{
                visibility:hidden;
            }
        </style></noscript>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
      </head>
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#home">Travel Guide</a>
            </div>
            
            

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#home"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#features">Services</a>
                    </li>
                     
                    <li>
                        <a class="page-scroll" href="index.html#responsive">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.html#contact">Contact</a>
                    </li>
                   
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
       
   <div class="wrapper">
        <div id="st-accordion" class="st-accordion"> 
        <br>
        <br>
 <?php


$name0 = $_GET['q1'];

 
$cerror='error';
$mysqldb='test';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }


$y="SELECT Place from form where Place= '". mysql_real_escape_string( $name0 ) ."'";
  $sqlrun1=mysql_query($y);
  if (mysql_num_rows($sqlrun1) == 0)
  {echo "<font style='BACKGROUND-COLOR: rgba(5,4,2,0.4)' size='5'  color='white'>Sorry! Cannot find :(</font>";}

$x="SELECT column_name
FROM information_schema.COLUMNS
WHERE table_schema = 'test'
AND table_name = 'form'";
$players=array();
$result = mysql_query($x);

while($row = mysql_fetch_assoc($result))
{ $players[] = $row; }


foreach($players as $d){
  foreach($d as $v){
  
   $a=mysql_real_escape_string($v);
  
 
  
   $query="SELECT $a FROM form where Place= '". mysql_real_escape_string( $name0 ) ."' GROUP BY $a
    ORDER BY COUNT(*) DESC
    LIMIT    1";
  
    $sqlrun=mysql_query($query);
 
  	while($row = mysql_fetch_array($sqlrun)) 
 {
 echo "<br>";
  echo "<font style='BACKGROUND-COLOR: rgba(5,4,2,0.4)' size='5'  color='white'>$v".": ".$row[$a]. "<br></font>" ;
   
}

    
  }
  
  
  }


?>




</div></div>

        
		
       
        
       
       
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <ul class="legals">
                  <li><a href="#">Terms &amp; Conditions</a></li>
                  <li><a href="#">Legals</a></li>
                </ul>
              </div>
              <div class="col-md-6 credit">
                <p>Designed &amp; Developed by <a href="http://www.peterfinlan.com/">Akshita,Hema</a> exclusively for <a href="http://tympanus.net/codrops/"><em>Codrops</em></a></p>
              </div>
            </div>
          </div>
          <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.accordion.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript">
    $(function() {

        $('#st-accordion').accordion({
            oneOpenedItem	: true
        });

    });
</script>
          
        </footer>
        	
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jquery.flexslider.js"></script>
        <script src="js/modernizr.js"></script>
      </body>
    </html>
