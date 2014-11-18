<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLOT</title>
    <meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
    <meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
    <meta name="author" content="Akshita" />
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/normalize_form.css" />
    <link rel="stylesheet" type="text/css" href="css/demo_form.css" />
    <link rel="stylesheet" type="text/css" href="css/component_form.css" />
    <link rel="stylesheet" type="text/css" href="css/cs-select_form.css" />
    <link rel="stylesheet" type="text/css" href="css/cs-skin-boxes_form.css" />
    <script src="js/modernizr.custom_form.js"></script>
</head>
<body >
<div class="container" style="background: url(img/Taj_Mahal_in_March_2004.jpg);">

    <nav class="navbar navbar-default" role="navigation" style="background-color:#2c3e50;height:4em;font-family: 'Kaushan Script', cursive;">
        <div class="navbar-header"><a class="navbar-brand" href="#" style="color: white">PLOT</a>

        </div>

    </nav>

    <div class="fs-form-wrap" id="fs-form-wrap">

    <form id="myform" class="fs-form fs-form-full" autocomplete="off" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <ol class="fs-fields">
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q1">Place that you visited</label>
                    <input class="fs-anim-lower" id="q1" name="q1" type="text" placeholder="Enter Place"  style="background: transparent" required/ >
                </li>
                <li>
                    <label class="fs-field-label fs-anim-upper" for="q2">Best Food</label>
                    <input class="fs-anim-lower" id="q2" name="q2" type="text" style="background: transparent" placeholder="Enter food" required/>
                </li>
                <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q3">Best Restaurant</label>
                    <input class="fs-anim-lower" id="q3" name="q3" type="text" style="background: transparent" placeholder="Enter restaurant" required/>
                </li>
                 <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q4">Best season to visit</label>
                    <input class="fs-anim-lower" id="q4" name="q4" type="text" style="background: transparent" placeholder="Enter season" required/>
                </li> 
                <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q5">Best article to buy</label>
                    <input class="fs-anim-lower" id="q5" name="q5" type="text" style="background: transparent" placeholder="Enter article" required/>
                </li> 
                <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q6">Best shopping destination</label>
                    <input class="fs-anim-lower" id="q6" name="q6" type="text" style="background: transparent" placeholder="Enter shopping place" required/>
                </li> 
                <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q7">Best resort/hotel</label>
                    <input class="fs-anim-lower" id="q7" name="q7" type="text" style="background: transparent" placeholder="Enter resort" required/>
                </li>
                 <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q8">Best activities</label>
                    <input class="fs-anim-lower" id="q8" name="q8" type="text" style="background: transparent" placeholder="Enter activites" required/>
                </li>
                 <li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper" for="q9">Best tourist spots</label>
                    <input class="fs-anim-lower" id="q9" name="q9" type="text" style="background: transparent" placeholder="Enter tourist spots" required/>
                </li>
                <!--<li data-input-trigger>
                    <label class="fs-field-label fs-anim-upper">Choose a class for your Hotels</label>
                    <select class="cs-select cs-skin-boxes fs-anim-lower">
                        <option value="" disabled selected>Pick a class</option>
                        <option value="#588c75">SEMI-DELUXE</option>
                        <option value="#b0c47f">DELUXE</option>
                        <option value="#f3e395">LUXURY</option>

                    </select>
                </li>-->

                <li>
                    <label class="fs-field-label fs-anim-upper" for="q10">Precaution/Warning</label>
                    <input class="fs-anim-lower" id="q10" name="q10" type="text" style="background: transparent" placeholder="Enter warning"/>
                </li>
            </ol><!-- /fs-fields -->
            <button class="fs-submit" type="submit">PLOT</button>
        </form><!-- /fs-form -->
    </div><!-- /fs-form-wrap -->



</div><!-- /container -->
<?php

$cerror='error';
$mysqldb='test';

if(!@mysql_connect('localhost','root','')||!@mysql_select_db($mysqldb))
    {
    die(mysql_error());
    }

if(isset($_POST['q1'])  &&  isset($_POST['q2']))

{

if(!empty($_POST['q1'])  &&  !empty($_POST['q2']))

{

$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];

$query="INSERT INTO form VALUES('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10')";
$sqlrun=mysql_query($query);
if($sqlrun)
{
 
}

else 
die(mysql_error());
}


else 
echo "Enter all fields";

}


?>

<script src="js/classie_form.js"></script>
<script src="js/selectFx_form.js"></script>
<script src="js/fullscreenForm.js"></script>
<script>
    (function() {
        var formWrap = document.getElementById( 'fs-form-wrap' );

        [].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
            new SelectFx( el, {
                stickyPlaceholder: false,
                onChange: function(val){
                    document.querySelector('span.cs-placeholder').style.backgroundColor = val;
                }
            });
        } );

        new FForm( formWrap, {
            onReview : function() {
                classie.add( document.body, 'overview' ); // for demo purposes only
            }
        } );
    })();
</script>
</body>
</html>
