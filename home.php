<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
	<title>practise css</title>
<style type="text/css">
		
			*{margin: 0; padding: 0; box-sizing: border-box;}
	body{display: flex; align-items: center; justify-content: center; height: 100vh; background: #060c21; font-family: Arial, Helvetica, sans-serif; color: #fff;}
	.box{ position: relative; width: 300px; height: 450px; display: flex; justify-content: center; align-content: center; background: #060c21; padding:25px;} 
	.box::before{ content: ''; position: absolute; top: -2px; bottom: -2px; left: -2px; right: -2px; background: #fff; z-index: -1;}
	.box::after{ content: ''; position: absolute; top: -2px; bottom: -2px; left: -2px; right: -2px; background: #fff; z-index: -1; filter: blur(40px);}
	.box::before, .box::after{ background: linear-gradient(235deg, #89ff00, #060c21, #00bcd4);}
	h1{ margin-bottom: 10px;}
	p{line-height: 24px;}


</style>

</head>
<body>
	<div class="box">
        <div class="content">
            <h1>Glowing Border</h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi facilis nobis quae, non ab iste ipsum distinctio totam iusto ipsam inventore quidem velit, quos earum repellendus sunt quam aperiam eius.Iure, ad molestias, earum dolorum incidunt officiis sequi sapiente consequuntur fuga labore eveniet rerum expedita saepe.</p>
        </div>
    </div>

</body>
</html>
