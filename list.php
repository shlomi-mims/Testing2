<?php $page = "adults-page" ?>
<?php include 'header.php' ?>
	<section class="section section-cover-adults">
		<div class="media parallex" style="background-image: url('images/adults-bg.jpg');"></div>
		<div class="parallex-after"></div>
		<div class="container">
			<h1 class="headline">חוגי בוגרים ומבוגרים</h1>
		</div>
	</section>

	<section class="section section-padding section-links">
		<div class="container">
			<div class="links-holder">
				<div class="inner-row">
					<div class="right box box-6">
						<a href="" class="link ">רשימת חוגים</a>
					</div>
					<div class="right box box-6">
						<a href="" class="link active">לוח פעילויות יומי</a>
					</div>
				</div>
			</div>
		</div>	
	</section>
	<?php
		for ($i=1; $i < 20; $i++) { 
			$array[] = "lorem";
		}
		$array_chunk = array_chunk($array,4);
	?>
	<section class="section section-list">
		<div class="container">
			<?php foreach ($array_chunk as $array) { ?>
			<div class="list">
			<?php foreach ($array as $item) { ?>
				<a href="#" class="item">
					<span class="media" style="background-image: url('images/cover.jpg')"></span>
					<span class="text-holder">
						<span class="text">
							<h2 class="headline">פלנדקרייז // פלדנקרייז כסאות // אקווה פלדנקרייז</h2>
							<p>
								שיטת פלדנקרייז מיועדת לכל מי שמעוניין להתחבר ליכולות הטבעיות שלו לנוע, לחשוב ולהרגיש. אם תרצו להרגיש יותר נוח בישיבה מול מחשב, במשחק עם הילדים או הנכדים, או כשאתם עוסקים בתחביב בזמנכם הפנוי.
							</p>
						</span>
					</span>
				</a>
			<?php } ?>
			</div>
			<?php } ?>
		</div>
	</section>

<?php include 'footer.php' ?>