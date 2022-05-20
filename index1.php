<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>fullPage.js</title>

	<link rel="stylesheet" type="text/css" href="dist/fullpage.css" />
	<script src="vendors/easings.min.js"></script>
	<script type="text/javascript" src="dist/fullpage.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>

    <button id="moveUp">up</button>

    <button id="moveDown">down</button>
    
    <ul id="myMenu">
        <li data-menuanchor="firstPage" class="active"><a href="#firstPage">First section</a></li>
        <li data-menuanchor="secondPage"><a href="#secondPage">Second section</a></li>
        <li data-menuanchor="thirdPage"><a href="#thirdPage">Third section</a></li>
        <li data-menuanchor="fourthPage"><a href="#fourthPage">Fourth section</a></li>
    </ul>

	<div id="fullpage">
        <div class="section">One</div>
        <div class="section">
            <div class="slide" data-anchor="slide1">Two 1</div>
            <div class="slide" data-anchor="slide2">Two 2</div>
        </div>
        <div class="section">Three</div>
        <div class="section">Four</div>
        <div class="section">Four</div>
        <div class="section">Four</div>
        <div class="section">Four</div>
    </div>

    

<script type="text/javascript">

new fullpage('#fullpage', {
    navigation: true,
    responsiveWidth: 700,
    anchors: ['home', 'about-us', 'contact'],
    parallax: true,
    onLeave: function(origin, destination, direction){
        console.log("Leaving section" + origin.index);
    },

    anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage', 'lastPage'],
    menu: '#myMenu'
});

$(document).on('click', '#moveUp', function(){
  fullpage_api.moveSectionUp();
});
$(document).on('click', '#moveDown', function(){
  fullpage_api.moveSectionDown();
});

</script>

</body>
</html>