<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SandySchool API</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>

<h1>Welcome to the experimental SandySchools API</h1>


<h1>SandySchools Methods &amp; Resources</h1>

<h2>School Search by School Name or District ID</h2>
<pre>URL: <?php echo $website_root ?>/api/schools</pre>

<p>Parameters</p>

<ul>
	<li><strong>search</strong> This is any string that can be searched</li>
	<li><strong>district</strong> This is the NCES ID for the School District</li>
</ul>

<h3>Example Calls</h3>
<p>
	<a href="<?php echo $website_root ?>/api/schools?search=atlantic%20ave"><?php echo $website_root ?>/api/schools?search=atlantic%20ave</a>
</p>
<p>
	<a href="<?php echo $website_root ?>/api/schools?district=3406330"><?php echo $website_root ?>/api/schools?district=3406330</a>
</p>


<h2>District Search by Location, County, District ID</h2>
<pre>URL: <?php echo $website_root ?>/api/district</pre>

<p>Parameters</p>

<ul>
	<li><strong>id</strong> This is the NCES ID for the School District</li>
	<li><strong>location</strong> This is any string that can be geocoded</li>
	<li><strong>county</strong> This is any string that can be searched on the county field</li>

</ul>



<h3>Example Calls</h3>
<p>
	<a href="<?php echo $website_root ?>/api/district?id=3406330"><?php echo $website_root ?>/api/district?id=3406330</a>
</p>
<p>
	<a href="<?php echo $website_root ?>/api/district?location=haddon%20heights"><?php echo $website_root ?>/api/district?location=haddon%20heights</a>
</p>

<p>
	<a href="<?php echo $website_root ?>/api/district?county=Middlesex"><?php echo $website_root ?>/api/district?county=Middlesex</a>
</p>




<?php
if (isset($ganalytics_id)):
?>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?php echo $ganalytics_id;?>']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>


	<?php
	endif;		
	?>

</body>
</html>