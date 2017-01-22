<!-- < HeaderFile> -->
<?php include_once 'include/header.php'; ?>
<!-- </ HeaderFile> -->


<!-- required for TextboxList -->
	
	<script src="js/mootools-1.2.1-core-yc.js" type="text/javascript" charset="utf-8"></script>		
	<script src="js/GrowingInput.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/TextboxList.js" type="text/javascript" charset="utf-8"></script>		
	<link rel="stylesheet" href="css/TextboxList.css" type="text/css" media="screen" charset="utf-8" />		
	
	<!-- sample initialization -->
	<script type="text/javascript" charset="utf-8">		
		window.addEvent('load', function(){
			// Standard initialization
			var t = new TextboxList('form_tags_input', {  bitsOptions: {
    				box: {deleteButton: true},
				} });
			
		});

	</script>
	<script type="text/javascript" src="js/search.js"></script>


<div id='home-main-container'>
	
	<table id='search-bar-table'>
		
		<tr>
			<td>
				<b><label for='searchbox'>Search</label></b>
			</td>
			
		</tr>

		<tr>

			<td>
				<div class="search-query-box">
					<form action="getdata.php" method="GET" name="search-query" id="searchForm">
						<input type="text" name="tags" value="" id="form_tags_input" class="inputSearch" />
					</form>
				</div>

			</td>

		</tr>

	</table>
</div>

<div id="search-result">
	
</div>


<!-- < FooterFile> -->
<?php include_once 'include/footer.php'; ?>
<!-- </ FooterFile> -->