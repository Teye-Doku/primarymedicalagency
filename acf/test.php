
<form method="POST">
	<p id="error"></p>

	<?php 

		$cars = array (
		  array("Volvo",22,18),
		  array("BMW",15,13),
		  array("Saab",5,2),
		  array("Land Rover",17,15)
		);
		    
		for ($row = 0; $row < 4; $row++) {
		  echo "<p><b>Row number $row</b></p>";
		  
		  for ($col = 0; $col < 3; $col++) {
		  	?>
		  	<input type="radio" id="Row number <?=$row?>" name="x<?=$row?>" value="<?=$cars[$row][$col]?>"><?=$cars[$row][$col]?>
		   <?php
		  }

		  ?>
		  <button type="button" onclick="check('Row number <?=$row?>')">next</button>
		  <?php
		  
		}
		


	?>
	
	
</form>
<script>
	
	function check(str)
	{
		// var k= str;

		// if(document.getElementById(k).checked)
		// {
		// 	alert(document.getElementById(k).value);
		// }else{

		// 	document.getElementById('error').innerHTML="Please select One";
		// 	//return false;


		// }
		var radios = document.getElementsByName('x');
		var value;
		var flag=0;
		for (var i = 0; i < radios.length; i++) {
		    if (radios[i].type === 'radio' && radios[i].checked && radios[i].value!=null){ 
		        value = radios[i].value; 
		        flag=1;
		        break;
		    }
		    else{
		    	flag=0;		 
		    }
		}
		if(flag==0){
			
			document.getElementById('error').innerHTML="Must Select A Value";
		}
		else{
			alert(value);	
		}

		// var el;
		// var prefix = 'elementId';
		// for(var i = 0; el = document.getElementById(prefix + i); i++) {
		//   if(condition) {
		//     el.style.display = '';
		//   }
		// }
	}
</script>

