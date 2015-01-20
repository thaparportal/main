
<!DOCTYPE html>
<html lang="en" xml:lang="en">
<head>
	<meta charset="UTF-8" />
		<title>Ideone.com - Online Compiler and IDE &gt;&gt; C/C++, Java, PHP, Python, Perl and 40+ other compilers and interpreters</title>

<link href="css/bootstrap-with-responsive-1200-only.min.css" rel="stylesheet"/>
<style>
	[class^="icon-"], [class*=" icon-"] {
		display: inline;
		width: auto;
		height: auto;
		/*line-height: normal;*/
		vertical-align: baseline;
		background-image: none;
		background-position: 0% 0%;
		background-repeat: repeat;
		margin-top: 0;
	}
	a [class^="icon-"], a [class*=" icon-"] {
		display: inline;
	}
	</style>
	
	<link href="css/fontello.css" rel="stylesheet"/>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/gfx2/libs/fontello-8f7d2dfe/css/fontello-ie7.min.css">
	<![endif]-->
	
	
	<link href="css/jquery-ui-1.10.1.custom.min.css" type="text/css" rel="stylesheet"/> <!-- jak sie wrzuci do bundle to nie dziala -->
	<!-- <link href="/gfx2/css/jquery-ui-bootstrap/jquery-ui-1.10.0.custom.css" type="text/css" rel="stylesheet" /> --> <!-- mozna ew wlaczyc zamiast tego powyzej -->
		
	<!-- 2013-02-07 by wiele: na czas develu wyrzucam to z bundle zeby moc latwiej debugowac w firebugu -->
		<link href="css/ideone-1-2.css?3" rel="stylesheet"/>
	<link href="/css/ideone-recent.css" rel="stylesheet"/>
	<link href="gfx2/css/ideone-myrecent.css" rel="stylesheet"/>
	<link href="css/ideone-view.css" rel="stylesheet"/>
	<!-- end of rzeczy przeniesione tymczasowo z bundle -->
	
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-migrate-1.0.0.js"></script>
	<script type="text/javascript" src="js/jquery-custom-file-input.js"></script>
	
		
	<script type="text/javascript">
		var cookie_name = 'settings';
var cookie_time = '15552000';
		var is_mobile = 0;
	</script>
	
	<!-- 2013-02-07 by wiele: na czas develu wyrzucam to z bundle zeby moc latwiej debugowac w firebugu -->
		
		<script type="text/javascript" src="js/jquery-ui-1.10.1.custom.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/jquery.ajaxmanager.js"></script>
	<script type="text/javascript" src="js/jquery.textarea.js"></script>
	<script type="text/javascript" src="js/Base64.js"></script>
	<script type="text/javascript" src="js/json2.js"></script>
	<script type="text/javascript" src="js/bace.js" data-ace-base="/gfx2/libs/ace-2013-08"></script>
	<script type="text/javascript" src="js/ideone-common-cookie-helper.js"></script>
	<script type="text/javascript" src="js/ideone-common.js"></script>
	<!-- end of rzeczy przeniesione tymczasowo z bundle -->
	
</head>

<body class="home  not-responsive">
	<div id="_container">
<noscript><div id="js_required" class="alert alert-error" style="margin-bottom: 0px">Ideone.com requires JavaScript to work.</div></noscript>

<script type="text/javascript">
<!--
	var langs_properties = {
		
		7:{"runnable" : 1,"sample_sol_id" : 16670898,"template_sol_id" : 21985071,"users_template_sol_id" : 0} ,
		45:{"runnable" : 1,"sample_sol_id" : 879235,"template_sol_id" : 16673035,"users_template_sol_id" : 0} ,
		13:{"runnable" : 1,"sample_sol_id" : 16672745,"template_sol_id" : 16672734,"users_template_sol_id" : 0} ,
		104:{"runnable" : 1,"sample_sol_id" : 16672643,"template_sol_id" : 16672665,"users_template_sol_id" : 0} ,
		105:{"runnable" : 1,"sample_sol_id" : 16672656,"template_sol_id" : 16672608,"users_template_sol_id" : 0} ,
		28:{"runnable" : 1,"sample_sol_id" : 255053,"template_sol_id" : 16672600,"users_template_sol_id" : 0} ,
		110:{"runnable" : 1,"sample_sol_id" : 755638,"template_sol_id" : 16671438,"users_template_sol_id" : 0} ,
		12:{"runnable" : 1,"sample_sol_id" : 42358,"template_sol_id" : 16671763,"users_template_sol_id" : 0} ,
		11:{"runnable" : 1,"sample_sol_id" : 16671817,"template_sol_id" : 16672589,"users_template_sol_id" : 30576325} ,
		27:{"runnable" : 1,"sample_sol_id" : 16672575,"template_sol_id" : 16672567,"users_template_sol_id" : 0} ,
		41:{"runnable" : 1,"sample_sol_id" : 16671876,"template_sol_id" : 16672561,"users_template_sol_id" : 0} ,
		1:{"runnable" : 1,"sample_sol_id" : 16671906,"template_sol_id" : 16672545,"users_template_sol_id" : 0} ,
		44:{"runnable" : 1,"sample_sol_id" : 16672005,"template_sol_id" : 16672536,"users_template_sol_id" : 0} ,
		34:{"runnable" : 1,"sample_sol_id" : 16672241,"template_sol_id" : 16672533,"users_template_sol_id" : 0} ,
		14:{"runnable" : 1,"sample_sol_id" : 16672511,"template_sol_id" : 16672431,"users_template_sol_id" : 0} ,
		111:{"runnable" : 1,"sample_sol_id" : 16673110,"template_sol_id" : 16673074,"users_template_sol_id" : 0} ,
		118:{"runnable" : 1,"sample_sol_id" : 16673355,"template_sol_id" : 16673455,"users_template_sol_id" : 0} ,
		106:{"runnable" : 1,"sample_sol_id" : 16673364,"template_sol_id" : 16673499,"users_template_sol_id" : 0} ,
		32:{"runnable" : 1,"sample_sol_id" : 42362,"template_sol_id" : 16673531,"users_template_sol_id" : 0} ,
		20:{"runnable" : 1,"sample_sol_id" : 654,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		102:{"runnable" : 1,"sample_sol_id" : 16673535,"template_sol_id" : 255069,"users_template_sol_id" : 0} ,
		36:{"runnable" : 1,"sample_sol_id" : 16673555,"template_sol_id" : 16673568,"users_template_sol_id" : 0} ,
		124:{"runnable" : 1,"sample_sol_id" : 23761346,"template_sol_id" : 16673647,"users_template_sol_id" : 0} ,
		123:{"runnable" : 1,"sample_sol_id" : 508291,"template_sol_id" : 16673711,"users_template_sol_id" : 0} ,
		125:{"runnable" : 1,"sample_sol_id" : 16673857,"template_sol_id" : 16673866,"users_template_sol_id" : 0} ,
		107:{"runnable" : 1,"sample_sol_id" : 16673974,"template_sol_id" : 16673901,"users_template_sol_id" : 0} ,
		5:{"runnable" : 1,"sample_sol_id" : 16675256,"template_sol_id" : 16675262,"users_template_sol_id" : 0} ,
		114:{"runnable" : 1,"sample_sol_id" : 16675270,"template_sol_id" : 16675275,"users_template_sol_id" : 0} ,
		121:{"runnable" : 1,"sample_sol_id" : 16675286,"template_sol_id" : 16675302,"users_template_sol_id" : 0} ,
		21:{"runnable" : 1,"sample_sol_id" : 16675340,"template_sol_id" : 16675318,"users_template_sol_id" : 0} ,
		16:{"runnable" : 1,"sample_sol_id" : 16675353,"template_sol_id" : 16675366,"users_template_sol_id" : 0} ,
		9:{"runnable" : 1,"sample_sol_id" : 16675395,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		10:{"runnable" : 1,"sample_sol_id" : 16675446,"template_sol_id" : 16675448,"users_template_sol_id" : 0} ,
		55:{"runnable" : 1,"sample_sol_id" : 16675454,"template_sol_id" : 16675460,"users_template_sol_id" : 0} ,
		35:{"runnable" : 1,"sample_sol_id" : 16675473,"template_sol_id" : 16675476,"users_template_sol_id" : 0} ,
		112:{"runnable" : 1,"sample_sol_id" : 340843,"template_sol_id" : 16675481,"users_template_sol_id" : 0} ,
		26:{"runnable" : 1,"sample_sol_id" : 16675486,"template_sol_id" : 16675490,"users_template_sol_id" : 0} ,
		30:{"runnable" : 1,"sample_sol_id" : 662,"template_sol_id" : 16675523,"users_template_sol_id" : 0} ,
		25:{"runnable" : 1,"sample_sol_id" : 16675536,"template_sol_id" : 16675537,"users_template_sol_id" : 0} ,
		122:{"runnable" : 1,"sample_sol_id" : 506706,"template_sol_id" : 16675554,"users_template_sol_id" : 0} ,
		56:{"runnable" : 1,"sample_sol_id" : 16675567,"template_sol_id" : 16675577,"users_template_sol_id" : 0} ,
		43:{"runnable" : 1,"sample_sol_id" : 16675608,"template_sol_id" : 16675613,"users_template_sol_id" : 0} ,
		8:{"runnable" : 1,"sample_sol_id" : 16675615,"template_sol_id" : 16675621,"users_template_sol_id" : 0} ,
		127:{"runnable" : 1,"sample_sol_id" : 14129219,"template_sol_id" : 16675635,"users_template_sol_id" : 0} ,
		119:{"runnable" : 1,"sample_sol_id" : 16675665,"template_sol_id" : 16675668,"users_template_sol_id" : 0} ,
		57:{"runnable" : 1,"sample_sol_id" : 10535334,"template_sol_id" : 16675685,"users_template_sol_id" : 0} ,
		22:{"runnable" : 1,"sample_sol_id" : 16675741,"template_sol_id" : 16675739,"users_template_sol_id" : 0} ,
		2:{"runnable" : 1,"sample_sol_id" : 16675742,"template_sol_id" : 16675744,"users_template_sol_id" : 0} ,
		3:{"runnable" : 1,"sample_sol_id" : 267085,"template_sol_id" : 16675748,"users_template_sol_id" : 0} ,
		54:{"runnable" : 1,"sample_sol_id" : 638943,"template_sol_id" : 16675758,"users_template_sol_id" : 0} ,
		29:{"runnable" : 1,"sample_sol_id" : 16675788,"template_sol_id" : 16675801,"users_template_sol_id" : 0} ,
		19:{"runnable" : 1,"sample_sol_id" : 16675862,"template_sol_id" : 16675864,"users_template_sol_id" : 0} ,
		108:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		15:{"runnable" : 1,"sample_sol_id" : 16675896,"template_sol_id" : 16675919,"users_template_sol_id" : 0} ,
		4:{"runnable" : 1,"sample_sol_id" : 16676006,"template_sol_id" : 16676008,"users_template_sol_id" : 0} ,
		99:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		116:{"runnable" : 1,"sample_sol_id" : 16676011,"template_sol_id" : 16676012,"users_template_sol_id" : 0} ,
		117:{"runnable" : 1,"sample_sol_id" : 142798,"template_sol_id" : 16676021,"users_template_sol_id" : 0} ,
		17:{"runnable" : 1,"sample_sol_id" : 42449,"template_sol_id" : 16676030,"users_template_sol_id" : 0} ,
		39:{"runnable" : 1,"sample_sol_id" : 16676041,"template_sol_id" : 16676047,"users_template_sol_id" : 0} ,
		128:{"runnable" : 1,"sample_sol_id" : 0,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		33:{"runnable" : 1,"sample_sol_id" : 16676060,"template_sol_id" : 16676113,"users_template_sol_id" : 0} ,
		23:{"runnable" : 1,"sample_sol_id" : 16676119,"template_sol_id" : 16676125,"users_template_sol_id" : 0} ,
		40:{"runnable" : 1,"sample_sol_id" : 3144925,"template_sol_id" : 16676135,"users_template_sol_id" : 0} ,
		38:{"runnable" : 1,"sample_sol_id" : 16676150,"template_sol_id" : 16676171,"users_template_sol_id" : 0} ,
		62:{"runnable" : 0,"sample_sol_id" : 42455,"template_sol_id" : 16676175,"users_template_sol_id" : 0} ,
		115:{"runnable" : 1,"sample_sol_id" : 16676187,"template_sol_id" : 0,"users_template_sol_id" : 0} ,
		101:{"runnable" : 1,"sample_sol_id" : 16676228,"template_sol_id" : 16676240,"users_template_sol_id" : 0} ,
		6:{"runnable" : 1,"sample_sol_id" : 675,"template_sol_id" : 0,"users_template_sol_id" : 0} 
				
	};
	$(document).ready(function(){
		$('#upload_link').file().choose(function(e, input) {
			$("#main_form_files").empty();
			$(input).appendTo($('#main_form_files')).attr('name', 'file2');
			$("#upload_file_name").html(input.val());
			$("#upload_link_empty").css({'display': 'inline'});
		});
		$('#upload_link_empty').bind('click', function(){
			$("#main_form_files").empty();
			$("#upload_file_name").html('');
			$("#upload_link_empty").css({'display': 'none'});
			return false;
		});
		
		//$("body > .navbar").removeClass('navbar-fixed-top');
		//$("body").css({'padding-top': 0});
	});
//-->
</script>
<script src="js/ideone-index.js"></script>

<input type="hidden" id="site" value="index" />

<form enctype="multipart/form-data" action="ide.php" method="post" id="maiform">
	<input type="hidden" name="p1" id="p1" value="74559b6e333d3ad9c1f8f1ba6954824e"/>
	<input type="hidden" name="p2" id="p2" value="1"/>
	<input type="hidden" name="p3" id="p3" value="16"/>
	<input type="hidden" name="p4" id="p4" value=""/>
	
	<input type="hidden" name="clone_link" value= />
	
	<div id="main_form_files"></div>

<section class="project-carousel thebackground shadow-inner-top-bottom">
	<div class="container">
		<div class="row">
			<div class="span12 home-main-box">
				<div id="featured-project-carousel" class="carousel slide">
					<div class="carousel-inner overflow-visible">
						<div class="item active">
							
			
			<div class="row">
				<div class="span8 code-panel">
												<div class="header">
								<i class="icon-code"></i>
								enter your source code								<span id="insert-part-or" style="display: inline">or</span>
								<span id="insert-part-insert" style="display: inline">insert</span>
								<span id="insert-part-template" style="display: inline"><a id="insert-template-link" href="#" class="rel-tooltip" title="Insert template">template</a></span>
								<span id="insert-part-or2" style="display: inline">or</span>
								<span id="insert-part-sample" style="display: inline"><a id="insert-sample-link" href="#" class="rel-tooltip" title="Insert sample program">sample</a></span>
								<span id="insert-part-or3" style="display: inline">or</span>
								<span id="insert-part-users-template" style="display: inline"><a id="insert-users-template-link" href="#" class="rel-tooltip" title="Insert your template">your template</a></span>
								<img id="insert-loader" style="display: none; height: 11px" src="//okta6.ideone.com/gfx/loader.gif" alt="loading..."/>
								<div class="pull-right option-clear">
									<a href="#" class="rel-tooltip with-margin-right" title="Clear the editor" onclick="clearEditor(); return false;">clear</a>
								</div> 
								<div class="clearfix"></div>
							</div>
												
					<!-- editor + ad -->
												<div style="border-bottom: 1px solid #ececec;">
								<div id="file_div" ></div>
								<div id="file_parent" style="padding: 10px;">				
					<textarea name="file" id="file" tabindex="1" >#include <iostream>
using namespace std;

int main() {
	// your code goes here
	return 0;
}</textarea>
								</div>
							</div>
										<input type="hidden" id="file_template" value="#include &lt;iostream&gt;
using namespace std;

int main() {
	// your code goes here
	return 0;
}" />	
					
					<!-- advanced config: input -->
					<div class="row visible" id="ex-input">
						<div class="span8">
							<div class="ex-more-options-box" style="padding: 10px; padding-top: 6px; color: #666">
								<div style="margin-bottom: 5px">
									<i class="icon-inbox"></i> enter input (stdin)									<div class="pull-right option-clear">
										<a href="#" class="rel-tooltip" title="Clear the input" onclick="$('#input').val(''); return false;">clear</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<textarea name="input" id="input" rows="2" cols="80"></textarea>
							</div>
						</div>
					</div>
					
					<!-- advanced config: more options -->
					<div class="row " id="ex-more-options">
						<div class="span8">
							<!--
							<div class="row">
								<div class="span8 top-border">
								</div>
							</div>
							-->
															<div class="row">
									<div class="span8">
										<div class="ex-more-options-box" style="padding-bottom: 0px; padding-top: 6px">
											<!-- syntax -->
																							<div class="syntax-box">
													<input type="hidden" name="syntax" value="0" />
													<label for="syntax" class="checkbox"><input type="checkbox" name="syntax" id="syntax" value="1" checked="checked" /> <span>syntax highlight</span></label>
												</div>
																								
																							<div class="timelimit-box">
													<i class="icon-time"></i> time limit:
													<label for="timelimit-0"><input type="radio" name="timelimit" value="0" id="timelimit-0"  /> <span>5s</span></label>
													<label for="timelimit-1"><input type="radio" name="timelimit" value="1" id="timelimit-1" checked="checked"  /> <span>15s</span></label>
													<a href="/faq#constraints" class="help-link rel-tooltip" target="_blank" title="What's the time limit?" style="margin-left: 2px"><i class="icon-help-circled"></i></a>
												</div>
																					
										</div>
									</div>
								</div>
														<div class="row">
								
							</div>
															
													</div>
					</div>
					
											<div class="g" style="text-align: center; height: 90px;">
						
						</div>
												
					<!-- visible options + submit -->
					<div class="row">
						<div class="span8">
							<div class="footer">
								<!-- lang -->
																<input type="hidden" name="_lang" id="_lang" value="44"/>
								
								<!-- simple lang select -->
																
								<!-- advanced lang select -->
																	<div class="dropdown dropup" id="lang_advselect">
									  <a class="dropdown-toggle btn footer-item rel-tooltip" data-toggle="dropdown" href="#" title="Choose language" id="lang-dropdown-menu-button"><span>C++14</span> <b class="caret"></b></a>
									  <div id="lang-dropdown-menu" class="dropdown-menu" role="menu" aria-labelledby="lang-dropdown-menu-button">
									  		<div id="language-details"></div>
									  		<div class="clearfix"></div>
									    	<div class="popular-box">
									    		<legend>popular</legend>
									    		<ul class="popular">
																											<li class="">
															<a href="#" id="menu-lang-28" data-id="28" data-label="Bash"  title="Bash (bash 4.3.30)" class="lang " tabindex="1000">Bash</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-22" data-id="22" data-label="Pascal (fpc)"  title="Pascal (fpc) (fpc 2.6.4)" class="lang " tabindex="1009">Pascal (fpc)</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-11" data-id="11" data-label="C"  title="C (gcc-4.9.2)" class="lang " tabindex="1001">C</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-2" data-id="2" data-label="Pascal (gpc)"  title="Pascal (gpc) (gpc 20070904)" class="lang " tabindex="1010">Pascal (gpc)</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-27" data-id="27" data-label="C#"  title="C# (mono-3.10)" class="lang " tabindex="1002">C#</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-3" data-id="3" data-label="Perl"  title="Perl (perl 5.20.1)" class="lang " tabindex="1011">Perl</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-1" data-id="1" data-label="C++ 4.9.2"  title="C++ 4.9.2 (gcc-4.9.2)" class="lang " tabindex="1003">C++ 4.9.2</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-29" data-id="29" data-label="PHP"  title="PHP (php 5.6.4)" class="lang " tabindex="1012">PHP</a>
														</li>
																											<li class="active">
															<a href="#" id="menu-lang-44" data-id="44" data-label="C++14"  title="C++14 (gcc-4.9.2)" class="lang " tabindex="1004">C++14</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-4" data-id="4" data-label="Python"  title="Python (python 2.7.9)" class="lang " tabindex="1013">Python</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-21" data-id="21" data-label="Haskell"  title="Haskell (ghc-7.6)" class="lang " tabindex="1005">Haskell</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-116" data-id="116" data-label="Python 3"  title="Python 3 (python-3.4)" class="lang " tabindex="1014">Python 3</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-10" data-id="10" data-label="Java"  title="Java (sun-jdk-8u25)" class="lang " tabindex="1006">Java</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-17" data-id="17" data-label="Ruby"  title="Ruby (ruby-1.9.3)" class="lang " tabindex="1015">Ruby</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-55" data-id="55" data-label="Java7"  title="Java7 (sun-jdk-1.7.0_10)" class="lang " tabindex="1007">Java7</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-40" data-id="40" data-label="SQL"  title="SQL (sqlite3-3.8.7)" class="lang " tabindex="1016">SQL</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-43" data-id="43" data-label="Objective-C"  title="Objective-C (gcc-4.5.1)" class="lang " tabindex="1008">Objective-C</a>
														</li>
																											<li class="">
															<a href="#" id="menu-lang-101" data-id="101" data-label="VB.NET"  title="VB.NET (mono-3.10)" class="lang " tabindex="1017">VB.NET</a>
														</li>
																						    		</ul>
									    	</div>
									    	<div class="rest-box">
									    		<legend>others</legend>
									    		<ul class="rest">
																											<li class="">
															<a href="#" id="menu-lang-7" data-id="7" data-label="Ada"  title="Ada (gnat-4.9.2)" class="lang " tabindex="1018">Ada</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-32" data-id="32" data-label="Common Lisp (clisp)"  title="Common Lisp (clisp) (clisp 2.49)" class="lang " tabindex="1031">Common Lisp (clisp)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-35" data-id="35" data-label="JavaScript (rhino)"  title="JavaScript (rhino) (rhino-1.7R4)" class="lang " tabindex="1044">JavaScript (rhino)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-108" data-id="108" data-label="Prolog (gnu)"  title="Prolog (gnu) (gprolog-1.3.1)" class="lang " tabindex="1057">Prolog (gnu)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-13" data-id="13" data-label="Assembler"  title="Assembler (nasm-2.11.05)" class="lang " tabindex="1019">Assembler</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-20" data-id="20" data-label="D"  title="D (gdc 4.9.2)" class="lang " tabindex="1032">D</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-112" data-id="112" data-label="JavaScript (spidermonkey)"  title="JavaScript (spidermonkey) (spidermonkey 24.2)" class="lang " tabindex="1045">JavaScript (spidermonkey)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-15" data-id="15" data-label="Prolog (swi)"  title="Prolog (swi) (swipl 5.6.64)" class="lang " tabindex="1058">Prolog (swi)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-45" data-id="45" data-label="Assembler"  title="Assembler (gcc-4.9.2)" class="lang " tabindex="1020">Assembler</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-102" data-id="102" data-label="D (dmd)"  title="D (dmd) (dmd-2.042)" class="lang " tabindex="1033">D (dmd)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-26" data-id="26" data-label="Lua"  title="Lua (luac 5.2)" class="lang " tabindex="1046">Lua</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-99" data-id="99" data-label="Python (Pypy)"  title="Python (Pypy) (Pypy)" class="lang " tabindex="1059">Python (Pypy)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-104" data-id="104" data-label="AWK (gawk)"  title="AWK (gawk) (gawk-4.1.1)" class="lang " tabindex="1021">AWK (gawk)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-36" data-id="36" data-label="Erlang"  title="Erlang (erl-5.7.3)" class="lang " tabindex="1034">Erlang</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-30" data-id="30" data-label="Nemerle"  title="Nemerle (ncc 0.9.3)" class="lang " tabindex="1047">Nemerle</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-117" data-id="117" data-label="R"  title="R (R-2.11.1)" class="lang " tabindex="1060">R</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-105" data-id="105" data-label="AWK (mawk)"  title="AWK (mawk) (mawk-3.3)" class="lang " tabindex="1022">AWK (mawk)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-124" data-id="124" data-label="F#"  title="F# (fsharp-3.10)" class="lang " tabindex="1035">F#</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-25" data-id="25" data-label="Nice"  title="Nice (nicec 0.9.6)" class="lang " tabindex="1048">Nice</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-39" data-id="39" data-label="Scala"  title="Scala (scala-2.11.4)" class="lang " tabindex="1061">Scala</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-110" data-id="110" data-label="bc"  title="bc (bc-1.06.95)" class="lang " tabindex="1023">bc</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-123" data-id="123" data-label="Factor"  title="Factor (factor-0.93)" class="lang " tabindex="1036">Factor</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-122" data-id="122" data-label="Nimrod"  title="Nimrod (nimrod-0.8.8)" class="lang " tabindex="1049">Nimrod</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-128" data-id="128" data-label="Scheme (chicken)"  title="Scheme (chicken) (4.9)" class="lang " tabindex="1062">Scheme (chicken)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-12" data-id="12" data-label="Brainf**k"  title="Brainf**k (bff-1.0.5)" class="lang " tabindex="1024">Brainf**k</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-125" data-id="125" data-label="Falcon"  title="Falcon (falcon-0.9.6.6)" class="lang " tabindex="1037">Falcon</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-56" data-id="56" data-label="Node.js"  title="Node.js (0.10.35)" class="lang " tabindex="1050">Node.js</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-33" data-id="33" data-label="Scheme (guile)"  title="Scheme (guile) (guile 2.0.11)" class="lang " tabindex="1063">Scheme (guile)</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-41" data-id="41" data-label="C++ 4.3.2"  title="C++ 4.3.2 (gcc-4.3.2)" class="lang " tabindex="1025">C++ 4.3.2</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-107" data-id="107" data-label="Forth"  title="Forth (gforth-0.7.2)" class="lang " tabindex="1038">Forth</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-8" data-id="8" data-label="Ocaml"  title="Ocaml (ocamlopt 4.01.0)" class="lang " tabindex="1051">Ocaml</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-23" data-id="23" data-label="Smalltalk"  title="Smalltalk (gst 3.2.4)" class="lang " tabindex="1064">Smalltalk</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-34" data-id="34" data-label="C99 strict"  title="C99 strict (gcc-4.9.2)" class="lang " tabindex="1026">C99 strict</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-5" data-id="5" data-label="Fortran"  title="Fortran (gfortran-4.9.2)" class="lang " tabindex="1039">Fortran</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-127" data-id="127" data-label="Octave"  title="Octave (3.6.2)" class="lang " tabindex="1052">Octave</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-38" data-id="38" data-label="Tcl"  title="Tcl (tclsh 8.6)" class="lang " tabindex="1065">Tcl</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-14" data-id="14" data-label="CLIPS"  title="CLIPS (clips 6.24)" class="lang " tabindex="1027">CLIPS</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-114" data-id="114" data-label="Go"  title="Go (1.4)" class="lang " tabindex="1040">Go</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-119" data-id="119" data-label="Oz"  title="Oz (mozart-1.4.0)" class="lang " tabindex="1053">Oz</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-62" data-id="62" data-label="Text"  title="Text (text 6.10)" class="lang " tabindex="1066">Text</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-111" data-id="111" data-label="Clojure"  title="Clojure (clojure 1.7)" class="lang " tabindex="1028">Clojure</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-121" data-id="121" data-label="Groovy"  title="Groovy (groovy-2.4)" class="lang " tabindex="1041">Groovy</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-57" data-id="57" data-label="PARI/GP"  title="PARI/GP (2.5.1)" class="lang " tabindex="1054">PARI/GP</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-115" data-id="115" data-label="Unlambda"  title="Unlambda (unlambda-2.0.0)" class="lang " tabindex="1067">Unlambda</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-118" data-id="118" data-label="COBOL"  title="COBOL (open-cobol-1.1)" class="lang " tabindex="1029">COBOL</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-16" data-id="16" data-label="Icon"  title="Icon (iconc 9.4.3)" class="lang " tabindex="1042">Icon</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-54" data-id="54" data-label="Perl 6"  title="Perl 6 (rakudo-2014.07)" class="lang " tabindex="1055">Perl 6</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-6" data-id="6" data-label="Whitespace"  title="Whitespace (wspace 0.3)" class="lang " tabindex="1068">Whitespace</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-106" data-id="106" data-label="COBOL 85"  title="COBOL 85 (tinycobol-0.65.9)" class="lang " tabindex="1030">COBOL 85</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-9" data-id="9" data-label="Intercal"  title="Intercal (c-intercal 28.0-r1)" class="lang " tabindex="1043">Intercal</a>
														</li> 
																											<li class="">
															<a href="#" id="menu-lang-19" data-id="19" data-label="Pike"  title="Pike (pike 7.8)" class="lang " tabindex="1056">Pike</a>
														</li> 
																									</ul>
									    	</div>					
									  </div>
									</div>
																
																
									<!-- show input -->
									<button type="button" class="btn footer-item rel-tooltip" data-toggle="button" title="Specify input (stdin)" id="button-input"><i class="icon-inbox"></i> stdin</button>
																			
								<!-- visibility -->
								<input type="hidden" name="public" value="1" />		
								<div class="btn-group footer-item" data-toggle="buttons-radio" id="btn-group-visibility">
			  						<button type="button" class="rel-tooltip btn active" data-value="1" title="Public - your code will be available to everyone."><i class="icon-globe"></i></button>
			  						<button type="button" class="rel-tooltip btn " data-value="0" title="Secret - your code will be available only to those with whom you share a link."><i class="icon-glasses"></i></button>
			  									  							<button type="button" class="rel-tooltip btn  "  data-value="-1" title="Private - only you will be able to access the code. "><i class="icon-lock"></i></button>
			  														</div>
												
								
																	<!-- more options -->
																 
								
								<!-- submit -->
								<div class="pull-right">
									<input type="hidden" name="run" value="1" />
									<button type="submit" name="Submit" id="Submit" tabindex="2"  title="Run the program (Ctrl+Enter)">
								
										Run									</button>
								</div>
								
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			
			</div>
			
			
						</div>
						
						<!-- /.item -->
						
					</div>
					<!-- 
						<a class="left carousel-control" href="#featured-project-carousel" data-slide="prev">‹</a> 
						<a class="right carousel-control" href="#featured-project-carousel" data-slide="next">›</a> </div>
					 -->
				</div>
			</div>
		</div>
		
	</div>
</section>			
		</div>
	</div>
</div>

</form>
	</div><!-- end of #_container -->

	</body>
</html>