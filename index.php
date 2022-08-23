<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Page</title>
    <style type="text/css">
        body{
            margin: 0px;
            padding: 0px;
        }
        canvas{
            background-color: orange;
        }
    </style>
</head>
<body>
<canvas width="1000" height="800" id="canvas"></canvas>
<script type="text/javascript">
    var canvas = document.getElementById('canvas'); 
    var ctx=canvas.getContext('2d');
    
    
    //cara
    ctx.fillStyle="black";
    ctx.beginPath();
    ctx.arc(450,130,70, 0, 2 * Math.PI);
    ctx.fill();
    ctx.fillStyle="#EDBB99";
    ctx.beginPath();
    ctx.arc(450,150,50, 0, 2 * Math.PI);
    ctx.fill();
    ctx.moveTo(20,20);
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(430,130, 15, 0, 2 * Math.PI);
    ctx.moveTo(478,130);
    ctx.arc(465,130, 15, 0, 2 * Math.PI);
    ctx.moveTo(420,160);
    ctx.fillStyle="#566573";
    ctx.fill();
    ctx.arc(450,160, 30, 0,Math.PI);
    

    //cuerpo
    ctx.fillStyle='black';
    ctx.fillRect(400,210,100,150);

    ctx.fillStyle='#EDBB99';
    ctx.fillRect(430,200,40,20);

    ctx.fillStyle='grey';
    ctx.fillRect(400,357,100,30);

    ctx.fillStyle='grey';
    ctx.fillRect(400,387,43,80);
    ctx.fillStyle='grey';
    ctx.fillRect(458,387,42,80);
    
    ctx.fillStyle='black';
    ctx.fillRect(390,465,53,20);
    ctx.fillStyle='black';
    ctx.fillRect(458,465,52,20);

    //hombros
    ctx.beginPath();
    ctx.moveTo(380, 233);
    ctx.lineTo(400, 257);
    ctx.lineTo(400, 210);
    ctx.fill();

    ctx.beginPath();
    ctx.moveTo(520, 233);
    ctx.lineTo(500, 257);
    ctx.lineTo(500, 210);
    ctx.fill();

    //brazos
    ctx.beginPath();
    ctx.fillStyle="#EDBB99";
    ctx.moveTo(500,260);
    ctx.lineTo(535,285);
    ctx.lineTo(576,226);
    ctx.lineTo(560,216);
    ctx.lineTo(535,243);
    ctx.lineTo(520,233);
    ctx.lineTo(500,260);
    ctx.stroke();
    ctx.fill();
    
    ctx.beginPath();
    ctx.fillStyle="#EDBB99";
    ctx.moveTo(379,234);
    ctx.lineTo(401,256);
    ctx.lineTo(371,292);
    ctx.lineTo(306,315);
    ctx.lineTo(303,292);
    ctx.lineTo(345,274);
    ctx.lineTo(381,233);
    ctx.stroke();
    ctx.fill();
    
    ctx.beginPath();
    ctx.arc(290,310,20, 0, 2 * Math.PI);
    ctx.stroke();
    ctx.fill();
    ctx.closePath();
    ctx.beginPath();
    ctx.arc(577,203,20, 0, 2 * Math.PI);
    ctx.stroke();
    ctx.fill();
    

    ctx.fillStyle='white';
    ctx.beginPath();
    ctx.arc(447,142,40, 0, .5 * Math.PI);
    ctx.stroke();
    ctx.fill();


    //texto 
    ctx.fillStyle='RED';
    ctx.font = '40px serif';
    ctx.fillText('一個', 410, 300);
    ctx.fillStyle='red';
    ctx.strokeText('一個', 410, 300);
    
    canvas.addEventListener('click',function(e){
        console.log(e.offsetX,e.offsetY);
    })
</script>
</body>
</html>