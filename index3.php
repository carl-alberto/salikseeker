<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>IRRI LEAA (Leaf Analyzing Aid)</title>
        <link rel="stylesheet" href="demo.css" type="text/css" media="screen">
        <link rel="stylesheet" href="demo-print.css" type="text/css" media="print">
        <script src="raphael-min.js" type="text/javascript" charset="utf-8"></script>
		 <script src="linemarker.js" type="text/javascript" charset="utf-8"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	    <script type="text/javascript" charset="utf-8">
            window.onload = function () {
				
				
				var b = Raphael("holder",500,500);	
//				var bar11 = b.circle(50, 40, 10).attr("fill", "#f0f");
//				bar11.drag(m1,m1);
				
				function m1() {
					this.attr("fill", "#fff");
				}
			
				
                var r = Raphael("holder2", 620, 420), discattr = {fill: "rgb(0,4,0,50%)", stroke: "none"};
                r.rect(0, 0, 619, 419, 10).attr({stroke: "#666"});
				
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
               
  
			    curve(100, 100, 100, 100, 150, 150, 150, 150, "hsb(.7, .75, .75)");  //mcwd	
   				curve(200, 200, 200, 200, 300, 300, 300, 300, "hsb(.6, .75, .75)");  //svwd	
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
    </head>
    <body>
        <div id="holder" ></div>
		
		<div id="holder2" style="position: absolute;"></div>
		
		
		
		<div id="imgholder1"><img src="4a-20x-3.jpg" />
		<div id="mcwdvalue"></div>
<form action="uploads.php" method="post"
enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>
		</div>
      
	  
	  
	  
	  </body>
</html>