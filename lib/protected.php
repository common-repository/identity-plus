<?php
	if (!defined('Identity +')){
		error_log("File \"".__FILE__."\" was called directly. ");
		exit; // Exit if accessed directly
	}
	use identity_plus\api\Identity_Plus_Utils;
?><!DOCTYPE html><HTML>
<HEAD>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Mono|Roboto:400,100,300|Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
	<link href='<?php echo plugins_url( 'idp.css', __FILE__ ) ?>' rel='stylesheet' type='text/css'>
	<title>Identity + Protected Resource</title>
	<style>
		#bg{
			width:100%; height:100vh; background:#FAfAfA;
			background: #feffff; /* Old browsers */
			background: -moz-linear-gradient(top,  #feffff 0%, #ededed 100%); /* FF3.6-15 */
			background: -webkit-linear-gradient(top,  #feffff 0%,#ededed 100%); /* Chrome10-25,Safari5.1-6 */
			background: linear-gradient(to bottom,  #feffff 0%,#ededed 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
			filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#feffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
		}
		#bg h1{font-family:'Roboto Condensed'; margin-top:0px; margin-bottom:20px;}
		#bg p{font-size:18px; text-align:left;}
		#bg div{
			display:inline-block; 
			background:url('<?php echo plugins_url('img/identity-plus-shield.svg', __FILE__ ) ?>') no-repeat;
			background-size:200px; 
            background-position: top left;
			height:300px; 
			width:600px; 
			max-width:100%;
			max-width:90%; 
			padding-left:280px;
		}
		#bg p a.button_ab{
			max-width:250px; 
			display:inline-block; 
			line-height:100%; 
			font-size:22px; 
			font-family:'Roboto Condensed'; 
			margin-right:40px;
            text-decoration:none;
			padding:10px 30px;
		}
		#bg p a:hover{
			color:#53AaD2;
		}
		#bg p a span{
			font-size:75%; 
			font-weight:300; 
			color:#808080;
		}
		@media screen and (max-width: 800px){
			#bg div{
				background-position:  center 40px;
				width:100%;
				text-align:center;	
				padding:0;
			}
			#bg div h1{
				padding-top:0px;
				text-align:center;
				width:100%;
				marging-bottom:20px;
			}
            #bg div{
                padding-top:300px;
            }
		}
	</style>
</HEAD>
<body>
		<table id="bg"><tr><td valign="middle" align="center">
				<div>
						<H1>Devices Must Authenticate to Connect!</H1>
						<p><b>
							"<?php echo Identity_Plus_Utils::here(); ?>" can only be accessed from the registered devices of members.
						</b></p>
						<p>
							If you have a local account, please register your device on Identity Plus and coordinate with the site administrator to connect it to your account. <a href="https://identity.plus" target="_blank" style="width:initial; max-width:initial; font-size:16px; font-weight:300; font-family:'Roboto'; margin:15px 0px; padding:10px 0;">Find out how it works on Identity Plus</a>
						</p>
						<p>
							<a href="https://signon.identity.plus" target="_blank" class="button_ab">Register This Device</a> 							
						</p>
				</div>
		</td></tr></table>
</body>
</HTML>
