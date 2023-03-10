<html>
	<head>

  		<title>Zodiac Compatibility Checker</title>
		<!-- This is where important metadata is stored. Inline css and bootstrap was used -->
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
		<style>
		
			html {
				background-image: url("LoveHeartBG.jpg");
				padding: 20px;
			}
		
			h1 {
				text-align: center;
				font-family: verdana;
				color: black;
			}
			
			h4 {
				color: black;
				font-family: verdana;
			}
			
			input {
				width: 80%;
				height: 40px;
				border-radius: 12px;
				background-color: #ffffff;
			}
			
			.container {
				border-style: solid;
				width: 1100px;
				border-radius: 12px;
				margin-top: 50px;
				background-color: #969696;
				padding: 25px;
			}	
				
			.container1 {
				border-style: solid;
				width: 600px;
				border-radius: 12px;
				margin-top: 50px;
				background-color: #969696;
				color: black;
				padding: 25px;
			}
			
			.title {
				border-style: solid;
				width: 750px;
				border-radius: 12px;
				margin-top: 25px;
				background-color: #f2e202;
				padding: 30px;
			}
			
			.rtitle {
				border-style: solid;
				width: 250px;
				border-radius: 12px;
				margin-top: 15px;
				background-color: #f2e202;
				font-family: verdana;
			}
			
			.info {
				
				width: 600px;
				margin-top: 25px;
				margin-bottom: 25px;
				font-size: 16px;
				text-align: left;
				color: black;
				opacity: 1;
				font-family: verdana;
			}
			
			.btn {
				
				text-align: center;
			}
			
			.button {
				margin-top: 25px;
				padding: 20px;
				font-family: verdana;
				font-size: 18px;
				background-color: #87CEEB;
				color: black;
				height: 4em;
				width: 8em;
				border-radius: 12px;
				width: 90%;
			}
			body{
				background:#595959;
			}
			p{
				font-family: verdana;
			}		
		</style>		
	</head>
	
	<body>
	<center>
	<div class = "container-fluid p-5 text-center" style="background-color: #ffc107;">
					<!-- These are the tags for the title header -->
					<h1> F.L.A.M.E.S. w/ Zodiac Compatibility </h1>
					<img src="images.png" alt="" width="380" height="120" style ="margin-bottom:-35px;">
				</div>
				<hr />
		<div class="container mt-5">	
			<form action="LE1_Riego.php" method="get" style="display: grid;">
			<div class="row">
			<div class="col">
						<!-- These are the tags for the different inputs -->
						<label class="label">
							<span>What is your first name?</span>
						</label>
						<input type="text" id="yourfname" name="yourfname">
						</br><label class="label">
						</br>
							<span>What is your last name?</span>
						</label>
						<input type="text" id="yourlname" name="yourlname">
						</br>
						<label class="label">
							</br>
							<span>What is your birthday?</span>
						</label>
						<input type="date" id="yourbday" name="yourbday">
			</div>
			<div class="col">
						
						<label class="label">
							<span>What is your crush's first name?</span>
							</br>
						</label>
						<input type="text" id="crushfname" name="crushfname">
						</br><label class="label">
						</br>
							<span>What is crush's last name?</span>
						</label>
						<input type="text" id="crushlname" name="crushlname">
						</br>
						<label class="label">
							</br>
							<span>What is your crush's birthday?</span>
						</label>
						<input type="date" id="crushbday" name="crushbday">
						</br>	
			</div>
		</div>
		<div class="btn">
					<!-- This is the tag for the calculate button -->
					<input class="btn btn-warning" type="submit" value="CALCULATE" style="margin-top: 20px;height: 120%;width: 85%;">
				</div>
				</div>
			</form>
		
		
		<?php
			function NameFull($fn, $ln){
				$name = $fn. " ". $ln;
				return $name;
			}
			
			function GetFullName($fn, $ln){
				$name = $ln. ", ". $fn;
				return $name;
			}
			
			$yourfname = isset($_GET['yourfname']) ? $_GET['yourfname'] : null;
			$yourlname = isset($_GET['yourlname']) ? $_GET['yourlname'] : null;
			$crushfname = isset($_GET['crushfname']) ? $_GET['crushfname'] : null;
			$crushlname = isset($_GET['crushlname']) ? $_GET['crushlname'] : null;
			
			$yourfullname = NameFull($yourfname, $yourlname);
			$crushfullname = NameFull($crushfname, $crushlname);
			
			$yourrevfullname = GetFullName($yourfname, $yourlname);
			$crushrevfullname = GetFullName($crushfname, $crushlname);
		
			$yourbday = isset($_GET['yourbday']) ? $_GET['yourbday'] : null;
			$crushbday = isset($_GET['crushbday']) ? $_GET['crushbday'] : null;
			
			$letters = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
			$flamesval = array('SOULMATES','FRIENDS','LOVERS','ANGER','MARRIED','ENGAGED');
			$zodiac = array('', 'Capricorn', 'Aquarius', 'Pisces', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo', 'Virgo', 'Libra', 'Scorpio', 'Sagittarius', 'Capricorn');
			//last day for each month for zodiac signs
			$lastDay = array('', 19, 18, 20, 20, 21, 21, 22, 22, 21, 22, 21, 20, 19);
			
			$yourfullname_low = strtolower($yourfullname);
			$crushfullname_low = strtolower($crushfullname);
			
			if ($yourfullname && $crushfullname && $yourbday && $crushbday)
				{
					$date1 = DateTime::createFromFormat("Y-n-j", $yourbday);
					$date2 = DateTime::createFromFormat("Y-n-j", $crushbday);
					
					$yourzodiac = ($date1->format("j") > $lastDay[$date1->format("n")]) ? $zodiac[$date1->format("n") + 1] : $zodiac[$date1->format("n")];
					$crushzodiac = ($date2->format("j") > $lastDay[$date2->format("n")]) ? $zodiac[$date2->format("n") + 1] : $zodiac[$date2->format("n")];
					
					$count = 0;
					
					for ($i = 0; $i < 26; $i++)
						{
							$count1 = substr_count($yourfullname_low, $letters[$i]);
							$count2 = substr_count($crushfullname_low, $letters[$i]);
							
							if ($count1 > 0 && $count2 > 0)
								$count = $count + $count1 + $count2;
						}
						$result = $flamesval[$count % 6];
						
						$firstzodiac = $yourzodiac;
						$secondzodiac = $crushzodiac;
				
			function zodiactonum($z){
				$zodiacvalues = match ($z){
				'Aries' => 0,
				'Leo' => 1,
				'Sagittarius' => 2,
				'Taurus' => 3,
				'Virgo' => 4,
				'Capricorn' => 5,
				'Gemini' => 6,
				'Libra' => 7,
				'Aquarius' => 8,
				'Cancer' => 9,
				'Scorpio' => 10,
				'Pisces' => 11,
				};
			return $zodiacvalues;
			}


			$z1 = zodiactonum($firstzodiac);
			$z2 = zodiactonum($secondzodiac);


			function ComputeZodiacCompatibility($c1, $c2){
	
				$zodiaccompute = array(
				array(1, 1, 1, 3, 3, 3, 1, 1, 1, 3, 3, 2),
				array(1, 1, 1, 3, 3, 3, 1, 1, 1, 2, 2, 2),
				array(1, 1, 1, 3, 3, 3, 1, 1, 1, 2, 2, 2),
				array(3, 2, 3, 1, 1, 1, 3, 2, 3, 1, 1 ,1),
				array(3, 2, 3, 1, 1, 1, 3, 3, 2, 1, 1, 2),
				array(3, 2, 3, 1, 1, 1, 3, 2, 3, 1, 1 ,1),
				array(1, 1, 2, 3, 2, 2, 1, 1, 1, 3, 3, 3),
				array(2, 1, 1, 2, 3, 3, 1, 1, 1, 3, 3, 2),
				array(1, 1, 1, 3, 3, 3, 1, 1, 1, 3, 2, 2),
				array(3, 2, 2, 1, 1, 1, 3, 3, 3, 1, 1, 1),
				array(2, 2, 3, 1, 1, 1, 3, 3, 3, 1, 1, 1),
				array(2, 2, 2, 1, 2, 1, 3, 3, 3, 1, 1, 1),
				);
	
				if ($zodiaccompute[$c1][$c2] == 1){
					$compatres = "Great Match";
				}
				
				else if($zodiaccompute[$c1][$c2] == 2){
					$compatres = "Favorable Match";
				}
	
				else if($zodiaccompute[$c1][$c2] == 3){
					$compatres = "Not Favorable";
				}
	
				else
					$compatres = "Unknown";
				
				return $compatres;
		
				}
				$computedres = ComputeZodiacCompatibility($z1, $z2);
}
?>
		
		<div class="container mt-5">
			<div class="btn btn-warning" style="margin-top: 20px;width: 85%;">
					<h3> F.L.A.M.E.S. Result </h1>
			</div>
			<?php
                if ($yourfullname && $crushfullname && $yourbday && $crushbday)
                {
                    echo "<h1 style='color: #1b23fa; font-family: 'Serif';'>".$result."</h1>";
					echo "<h2 style='color: black; font-family: 'Serif';'>Both Your Zodiacs </h2>";
					echo "<h2 style='color: black; font-family: 'Serif';'>For </h2>";
                    echo "<p>".$yourrevfullname." is <strong>".$yourzodiac."</strong> <br>and</br>".$crushrevfullname." is <strong>".$crushzodiac."</strong>.</p>";
					echo "<h2>You Two Are</h2>";
                    echo "</h1><h1 style='color: #1b23fa; font-family: 'Serif';'>".$computedres."</h1>";
                }
                
                else
                {
                    echo "<h4>Input Names and Birthdays to Continue</h4>";
                }
            ?>
		</div>
	</center>
	</body>
</html>