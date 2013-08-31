<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>IRRI LEAA (LEaf Analyzing Aid</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="IRRI LEAA (LEaf Analyzing Aid)"/>
<meta name="keywords" content=""/>

<link rel="stylesheet" type="text/css" href="lib/style.css"/>


<script type="text/javascript"><!--
var pixastic_parseonload = true;
--></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="raphael-min.js" type="text/javascript" charset="utf-8"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="lib/pixastic.core.js"></script>
<script type="text/javascript" src="lib/pixastic.jquery.js"></script>
<script type="text/javascript" src="lib/actions/edges.js"></script>
<script type="text/javascript" src="lib/actions/edges2.js"></script>
<script type="text/javascript" src="lib/actions/invert.js"></script>
<script type="text/javascript" src="lib/actions/brightness.js"></script>
<script type="text/javascript" src="lib/actions/removenoise.js"></script>
<script type="text/javascript" src="lib/actions/laplace.js"></script>


<!--<script type="text/javascript" src="/lib/pixastic.custom.js"></script>-->


<!--
<script type="text/javascript" src="../../../jquery/jquery-1.2.6.min.js"></script>
<script type="text/javascript" src="../../../jquery/ui/jquery-ui-personalized-1.6rc2.min.js"></script>
-->




<script type="text/javascript">



function resetDemo() {
	Pixastic.revert(document.getElementById("imgtrans"));
}

</script>

<script type="text/javascript" charset="utf-8">
            window.onload = function () {
				
				
//				var b = Raphael("holder",500,500);	
//				var bar11 = b.circle(50, 40, 10).attr("fill", "#f0f");
//				bar11.drag(m1,m1);
				
				function m1() {
					this.attr("fill", "#fff");
				}
			
				
                var r = Raphael("holder2", 900, 600), discattr = {fill: "rgb(0,4,0,50%)", stroke: "none"};
                r.rect(0, 0, 900, 600, 0).attr({stroke: "#666"});
				
                function curve(x, y, ax, ay, bx, by, zx, zy, color) {
                    var path = [["M", x, y], ["C", ax, ay, bx, by, zx, zy]],   
                        path2 = [["M", x, y], ["L", ax, ay], ["M", bx, by], ["L", zx, zy]], 
                        curve = r.path(path).attr({stroke: color || Raphael.getColor(), "stroke-width": 4, "stroke-linecap": "round"}),
                        controls = r.set(
                            r.path(path2).attr({stroke: "#ccc", "stroke-dasharray": ". "}),
                            r.circle(x, y, 5).attr(discattr),
                            r.circle(ax, ay, 0).attr(discattr),
                            r.circle(bx, by, 0).attr(discattr),
                            r.circle(zx, zy, 5).attr(discattr)
                        );
                    controls[1].update = function (x, y) {
                        var X = this.attr("cx") + x,
                            Y = this.attr("cy") + y;
                        this.attr({cx: X, cy: Y});
                        path[0][1] = X;
                        path[0][2] = Y;
                        path2[0][1] = X;
                        path2[0][2] = Y;
                        controls[2].update(x, y);
                    };
                    controls[2].update = function (x, y) {
                        var X = this.attr("cx") + x,
                            Y = this.attr("cy") + y;
                        this.attr({cx: X, cy: Y});
                        path[1][1] = X;
                        path[1][2] = Y;
                        path2[1][1] = X;
                        path2[1][2] = Y;
                        curve.attr({path: path});
                        controls[0].attr({path: path2});
                    };
                    controls[3].update = function (x, y) {
                        var X = this.attr("cx") + x,
                            Y = this.attr("cy") + y;
                        this.attr({cx: X, cy: Y});
                        path[1][3] = X;
                        path[1][4] = Y;
                        path2[2][1] = X;
                        path2[2][2] = Y;
                        curve.attr({path: path});
                        controls[0].attr({path: path2});
                    };
                    controls[4].update = function (x, y) {
                        var X = this.attr("cx") + x,
                            Y = this.attr("cy") + y;
                        this.attr({cx: X, cy: Y});
                        path[1][5] = X;
                        path[1][6] = Y;
                        path2[3][1] = X;
                        path2[3][2] = Y;
                        controls[3].update(x, y);
                    };
                    controls.drag(move, up);
                }
                function move(dx, dy) {
                    this.update(dx - (this.dx || 0), dy - (this.dy || 0));
                    this.dx = dx;
                    this.dy = dy;
//					document.getElementById("mcwdvalue").innerHTML="MCWD: "+this.dy;
					
                }
                function up() {
                    this.dx = this.dy = 0;
                }
				function computeLength(dx,dy) {
					this.dx = this.dy = 0;
				}
				
				function FuncKey(e) {

    					e = e || window.event;
						 if (e.keyCode == '38') {
					
						}
					    else if (e.keyCode == '40') {
       
    					}
}
				
				// line set initial locations & declarations
				// curve(100, 100, 100, 100, 130, 130, 130, 130, "color in hsb(.7, .75, .75)"); 
               
  
			    curve(590, 406, 590, 406, 550, 160, 550, 160, "#6EFFF3");  //mcwd	
   				curve(474, 248, 474, 248, 657, 234, 657, 234, "#ece64c");  //svwd	
				curve(300, 300, 300, 300, 400, 400, 400, 400, "hsb(.5, .2, .3)");  //svht	
				curve(300, 300, 300, 300, 400, 400, 400, 400, "hsb(.5, .6, .9)");  //sv-lfth	
				curve(350, 350, 350, 350, 200, 200, 200, 200, "hsb(.5, .6, .1)");  //lvwd
				
				
				
				document.onkeydown = FuncKey;
				$("#textA").bind('copy', function() {
    $('span').text('copy behaviour detected!')
}); 
$("#textA").bind('paste', function() {
    $('span').text('paste behaviour detected!')
}); 
$("#textA").bind('cut', function() {
    $('span').text('cut behaviour detected!')
});
            };
        </script>


<script type="text/javascript"><!--
//setCookie("hidewarningbox", "");
function hideWarningBox() {
	document.getElementById("warningbox").style.display = "none";
	setCookie("hidewarningbox", "true");
}
if (["hidewarningbox"] != "true") {
	if (!Pixastic.Client.hasCanvas() || !Pixastic.Client.hasCanvasImageData()) {
		var html = "<span class=\"warningbox\" id=\"warningbox\">";
		if (Pixastic.Client.isIE()) {
			html += "<span class=\"warningheader\">Looks like you're using Internet Explorer!</span>Although a few of the effects in Pixastic are simulated in IE with proprietary filters, most actions and effects will not work without a canvas enabled browser. Please consider using either Firefox, Opera or Safari."
		} else {
			if (Pixastic.Client.hasCanvas()) {
				html += "<span class=\"warningheader\"></span>Looks like you're using a Canvas enabled browser, but one that does not support the ImageData methods. Please consider upgrading to either Firefox 3+, Opera 9.5+ or Safari 4."
			} else {
				html += "<span class=\"warningheader\"></span>Looks like you're not using a Canvas enabled browser. Pixastic is based on the HTML5 Canvas element and therefore requires a modern browser. Consider upgrading to either Firefox 3+, Opera 9.5+ or Safari 4."
			}
		}
		html += "<span class=\"warninghidelink\" onclick=\"hideWarningBox();\">[hide]</span></span>";
		document.write(html);
	}
}
--></script>









			<script type="text/javascript">
				function edge() {
				Pixastic.process(document.getElementById("imgtrans"), "edges", {
				mono : true,invert : true});

				}
				
				function edge2() {
				Pixastic.process(document.getElementById("imgtrans"), "edges2");
				}
				
				function bright() {
				Pixastic.process(document.getElementById("imgtrans"), "brightness",{
				brightness:50,contrast:0.3});
				}
				
				function dark() {
				Pixastic.process(document.getElementById("imgtrans"), "brightness",{
				brightness:-50,contrast:0.3});
				}
				
				function removenoise() {
				Pixastic.process(document.getElementById("imgtrans"), "removenoise");
				}
				
				function lap1() {
				Pixastic.process(document.getElementById("imgtrans"), "laplace",{
				edgeStrength:2.5,invert:true,greyLevel:50});
				}
				
				
			</script>

</head>



<body>

<div class="bcotainer">

	<div align="center">
	<div class="bcotainer">

		<a name="top"></a>
		
		
		<div class="actiondemo">

		
			

<div class="image-out1">

<h3>IRRI LEAA (LEaf Analyzing Aid)</h3>
<input type="button" onclick="lap1();" value="Lap1"/>
<input type="button" onclick="removenoise();" value="Removenoise"/>
<input type="button" onclick="edge();" value="Edge"/>
<input type="button" onclick="edge2();" value="Edge2"/>
<input type="button" onclick="bright();" value="Bright"/>
<input type="button" onclick="dark();" value="Dark"/>
<input type="button" onclick="resetDemo();" value="Reset"/><br/>

<div align="center">
       <div id="holder2" ></div>
</div>	   
<img src="img/4a-20x-3.jpg" id="imgtrans" alt=""/>
</div>




	
		

</div>

	</div>
	</div>
</div>	






</body>
</html>