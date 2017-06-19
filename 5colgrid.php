<!DOCTYPE html>
<html>
	<head>
		<title>Demo</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">

		/* http://meyerweb.com/eric/tools/css/reset/ 
				   v2.0 | 20110126
				   License: none (public domain)
				*/

				html, body, div, span, applet, object, iframe,
				h1, h2, h3, h4, h5, h6, p, blockquote, pre,
				a, abbr, acronym, address, big, cite, code,
				del, dfn, em, img, ins, kbd, q, s, samp,
				small, strike, strong, sub, sup, tt, var,
				b, u, i, center,
				dl, dt, dd, ol, ul, li,
				fieldset, form, label, legend,
				table, caption, tbody, tfoot, thead, tr, th, td,
				article, aside, canvas, details, embed, 
				figure, figcaption, footer, header, hgroup, 
				menu, nav, output, ruby, section, summary,
				time, mark, audio, video {
					margin: 0;
					padding: 0;
					border: 0;
					font-size: 100%;
					line-height: 0;
					font: inherit;
					vertical-align: baseline;
					}
				/* HTML5 display-role reset for older browsers */
				article, aside, details, figcaption, figure, 
				footer, header, hgroup, menu, nav, section {
					display: block;
					}
				body {
					line-height: 1;
					}
				ol, ul {
					list-style: none;
					}
				blockquote, q {
					quotes: none;
					}
				blockquote:before, blockquote:after,
				q:before, q:after {
					content: '';
					content: none;
					}
				table {
					border-collapse: collapse !important;
					border-spacing: 0;
					}
				a {
					color: #2ba6cb; 
					text-decoration: none;
					}

				a:hover { 
					color: #2795b6 !important;
				}

				a:active { 
					color: #2795b6 !important;
				}

				a:visited { 
					color: #2ba6cb !important;
				}

			body {
				font-family: Arial, Helvetica, sans-serif;
				}
			div {
				box-sizing: border-box !important;
				}
			.container {
				max-width: 760px;
				height: auto;
				margin:0 auto;
				}
			.headline {
				font-size: 13px;
				font-weight: 700;
				color: #AE0707;
				text-align: center;
				padding: 10px 0 5px 0 !important;
			}

			/* ///// Five Columns ///// */
			.five-column {
				display: inline-block;
				Margin:0 4px 10px 4px;
				padding-top:10px;
				border-top: 1px #EEE solid;
				line-height: 1em;
				}
			.five-column .prodimg {
				height: 140px;
				width: 140px;
				font-size: 0;
				line-height: 0;
				vertical-align: middle;
				text-align: center;
				border: 0px #EEE solid;
				}
			.five-column .prodimg img {
				max-height: 140px;
				max-width: 140px;
				}
			.five-column .body-text {
				font-size:14px !important;
				}

		@media only screen and (max-width : 768px) {
			.container {
				width: 100%;
				margin:0 auto;
				}
			.five-column {
				width: 100% !important;
				height: auto !important;
				}
			.five-column .prodimg {
				height: 100% !important;
				}
			.five-column .prodimg img {
				max-height: 80% !important;
				max-width: 80% !important;
				}
			.headline {
				font-size: 14px !important;
				padding: 20px 0 0 0 !important;
			}
			.lnbrk {
				display: none !important;
			}

		/* ///// Six Columns ///// */
			.sixc {
				display: inline-block;
				width: 122px;
				height:122px;
				margin: 0 2px 5px 2px;
				/* border:1px #EEE solid; */
				}
			.sixc .prodimg {
				height: 122px;
				vertical-align: middle;
				}
			.sixc .prodimg img {
				max-height: 122px;
				max-width: 122px;
				margin: auto;
				}
			.sixc .body-text {
				font-size:12px !important;
				}
		</style>
	</head>
	<body>
		<table class="container">
			<tr>
				<td>
				<!-- begin grid -->

				<?php
				// database info
				$servername = "127.0.0.1";
				$username = "root";
				$password = "im25150C";
				$dbname = "pricecuts";
				
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);

				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				
				$maxlimit = "40";
				 
				// SQL Query
				$sql = "SELECT * FROM pctable82016 LIMIT $maxlimit";
				$result = $conn->query($sql);
				$i = 0;
				if ($result->num_rows > 0) { // begin if loop
				
				// output data of each row
				while($row = $result->fetch_assoc()) { // begin while loop
				$i++;

				echo "<div class='five-column'><table width='100%' height='100%' border='0'><tr><td class='prodimg'><a href='http://www.pssl.com/!EBLAST00PRICECTZ/".$row[edp]."?utm_source=Newsletter&utm_media=Email&utm_term=PriceCutz-102615&utm_campaign=PC'><img src='http://www.pssl.com/images/Default-Image/500/".$row[sku].".jpg'></a></td></tr><tr><td class='headline' style='padding:10px 0 0 0;'><a href='http://www.pssl.com/!EBLAST00PRICECTZ/".$row[edp]."?utm_source=Newsletter&utm_media=Email&utm_term=PriceCutz-102615&utm_campaign=PC'>".$row[desc]."</a></td></tr><tr><td class='center' style='padding:0 0 5px; text-align:center;'><div class='list' style='font-size:11px; font-family:Arial;'>Condition: ".$row[condition]."</div>";
          
	            if ($row[listprice] == '') {
	            echo "<div class='list' style='font-size:11px; font-family:Arial;'>New Lower Price!</div>";
	            
	            }else{
	            
	            echo "<div class='list' style='font-size:11px; font-family:Arial;'>List: $".$row[listprice]."</div>";
	            }
	          
	            echo "<div class='was' style='font-size:11px; font-family:Arial;'>Was: $<strike>".$row[was]."</strike></div></td></tr></td></tr></table></div>";
						}
					}
				?>

				<!-- end grid -->
				</td>
			</tr>
		</table>
	</body>
</html>