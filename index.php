<?php include('people.php'); ?>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<title>We Are Kinnock | 2011</title>
</head>

<body>
		<div id="people-list">

	<div class="wrapper">
        
		<div id="top-section">
			<div id="page-tile">
				<span class="sm-text">We are</span><br />
				<span class="lg-text">KINNOCK</span>
			</div>
	        <input class="search" placeholder="Search our family" />
		</div>
		
			<ul class="list">
			<?php foreach ($people as $person): ?>
				<li class="box" style="background-image:url('images/people/ben_1.jpg');">
					<div class="zone_1"></div>
					<div class="zone_2"></div>
					<div class="zone_3"></div>
					<span class="fname"><?php echo $person['firstname']; ?></span>
					<span class="age"><?php echo $person['age']; ?></span>
					<span class="title"><?php echo $person['title']; ?></span>
					<span class="child"><?php echo $person['rileychild']; ?></span>
				</li>
			<?php endforeach; ?>
			</ul>

	</div>

	<div id="footer">
		<div class="wrapper">
			<div id="controls">
	            <ul class="sort-by">
	                <a href="#"><li class="btn">About</li></a>
	                <li class="sort btn" data-sort="fname">By name</li>
	                <li class="sort btn" data-sort="age">By age</li>
	            </ul>
	            <ul class="filter">
	                <li class="btn" id="filter-betsy">Betsy</li>
	                <li class="btn" id="filter-celeste">Celeste</li>
	                <li class="btn" id="filter-ann">Ann</li>
	                <li class="btn" id="filter-joseph">Joseph</li>
	                <li class="btn" id="filter-mary">Mary</li>
	                <li class="btn" id="filter-chrissy">Chrissy</li>
	                <li class="btn" id="filter-katie">Katie</li>
	                <li class="btn" id="filter-neil">Neil</li>
	                <li class="btn" id="filter-judy">Judy</li>
	                <li class="btn" id="filter-patrick">Patrick</li>
	                <li class="btn" id="filter-none">Show all</li>
					
	            </ul>
			</div>
		</div>
	</div>
		</div>

    <script src="list.min.js"></script>

    <script type="text/javascript">
            
        var options = {
    	    valueNames: [ 'fname', 'age', 'title', 'child' ]
        };

        var featureList = new List('people-list', options);
        
        $('#filter-betsy').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Betsy") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });

        $('#filter-celeste').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Celeste") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
        
        $('#filter-ann').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Ann") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-joseph').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Joseph") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-mary').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Mary") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-chrissy').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Chrissy") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-katie').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Katie") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-neil').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Neil") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-tim').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Timmy") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-judy').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Judy") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
        $('#filter-patrick').click(function() {
            featureList.filter(function(values) {
                if (values.child == "Patrick") {
                    return true;
                } else {
                    return false;
                }
            });
            return false;
        });
		
		
        $('#filter-none').click(function() {
            featureList.filter();
            return false;
        });
		
		$(".box").hover(
		  function () {
		    $(this).css("background-image","red");
		  },
		  function () {
  		    $(this).css("background-image","#000");
		  }
		)(jQuery);
		
    </script>
    <!-- End of List.js stuff -->

</body>

</html>