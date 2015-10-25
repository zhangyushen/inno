

<script>
        document.onkeydown = function(e) {
            var pressEvent = e || window.event;
            var keyCode = '';
            if(pressEvent.keyCode){
                keyCode = pressEvent.keyCode;
            }else if(pressEvent.charCode){
                keyCode = pressEvent.charCode;
            }else if(pressEvent.which){
                keyCode = pressEvent.which;
            }

            switch(keyCode){
                case 65:
                {var musicfile='drum/drumA.mp3';
                    playMusic=new Audio(musicfile);
                    playMusic.play();
                    document.getElementById('drumA').style.visibility='visible';
                    setInterval("document.getElementById('drumA').style.visibility='hidden'",500);
                    break;}
                case 83:
                {var musicFile='/inno/drum/drumB.mp3';
                    playMusic=new Audio(musicFile);
                    playMusic.play();
                    document.getElementById('drumB').style.visibility='visible';
                    setInterval("document.getElementById('drumB').style.visibility='hidden'",500);
                    break;}
                case 68:
                {var musicFile='/inno/drum/drumC.mp3';
                    playMusic=new Audio(musicFile);
                    playMusic.play();
                    document.getElementById('drumC').style.visibility='visible';
                    setInterval("document.getElementById('drumC').style.visibility='hidden'",500);
                    break;}
                case 70:
                {var musicFile='/inno/drum/drumD.mp3';
                    playMusic=new Audio(musicFile);
                    playMusic.play();
                    document.getElementById('drumD').style.visibility='visible';
                    setInterval("document.getElementById('drumD').style.visibility='hidden'",500);
                    break;}
                case 71:
                {var musicFile='/inno/drum/drumE.mp3';
                    playMusic=new Audio(musicFile);
                    playMusic.play();
                    document.getElementById('drumE').style.visibility='visible';
                    setInterval("document.getElementById('drumE').style.visibility='hidden'",500);
                    break;}
                case 72:
                {var musicFile='/inno/drum/drumF.mp3';
                    playMusic=new Audio(musicFile);
                    playMusic.play();
                    document.getElementById('drumF').style.visibility='visible';
                    setInterval("document.getElementById('drumF').style.visibility='hidden'",500);
                    break;}
                case 74:
                {var musicFile='/inno/drum/drumG.mp3';
                    playMusic=new Audio(musicFile);
                    playMusic.play();
                    document.getElementById('drumG').style.visibility='visible';
                    setInterval("document.getElementById('drumG').style.visibility='hidden'",500);
                    break;}

            }}
    </script>
    <style type="text/css">
		
		 #drumA{
			 background-image:url(/inno/images/asd.png);
			 background-position:center;
             background-repeat:no-repeat;

		        margin-left:12px;
				margin-top:140px;
				width:96px;
				height:60px;
                visibility: hidden;
                }
		 #drumB{
             background-image:url(/inno/images/asd.png);
             background-position:center;
             margin-left:145px;
             background-repeat:no-repeat;
				margin-top:-65px;
				width:70px;
				height:55px;
             visibility: hidden;
			 }
		 #drumC{
             background-image:url(/inno/images/asd.png);
             background-position:center;
             margin-left:230px;
             background-repeat:no-repeat;
				margin-top:-35px;
				width:80px;
				height:60px;
             visibility: hidden;
			 }
		 #drumD{
             background-image:url(/inno/images/asd.png);
             background-position:center;
             background-repeat:no-repeat;
             	margin-left: 330px;
	            margin-top: -130px;
	            width: 175px;
	            height: 115px;
             visibility: hidden;
			 }
		 #drumE{ background-image:url(/inno/images/asd.png);
             background-position:center;
             background-repeat:no-repeat;
		        margin-left:70px;
				margin-top:25px;
				width:90px;
				height:55px;
             visibility: hidden;
			 }
		 #drumF{
             background-image:url(/inno/images/asd.png);
             background-position:center;
             background-repeat:no-repeat;
		        margin-left:160px;
				margin-top:8px;
				width:90px;
				height:90px;
             visibility: hidden;
			 }
		#drumG{
            background-image:url(/inno/images/asd.png);
            background-position:center;
            background-repeat:no-repeat;
		        margin-left:255px;
				margin-top:-95px;
				width:100px;
				height:70px;
            visibility: hidden;
			}
		 #drum{
		 	border:1px solid blue;
			float:left;
	        width: 512px;
	        height: 512px;
	        background-image: url(/inno/images/ddrum.png);
	        margin-top: 10px;
	        margin-bottom: 10px;
			padding:100;
}
    </style>
<div id="drum">
<div id="drumA">druma</div>
<div id="drumB">drumb</div>
<div id="drumC">drumc</div>
<div id="drumD">drumd</div>
<div id="drumE">drume</div>
<div id="drumF">drumf</div>
<div id="drumG">drumg</div>
</div>
