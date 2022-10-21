<?php
	if($_POST['name'] == ""){
		echo"Błąd. Brak imienia.";
	}else if ($_POST['lastname'] == ""){
		echo"Błąd. Brak nazwiska.";
	}else if ($_POST['mail'] == ""){
		echo"Błąd. Adres e-mail nie został podany, lub jest błędny.";
	}else if ($_POST['content'] ==""){
		echo"Błąd. Brak treści.";
	}else{
		echo"
			<table border width=50%>				
				<tr>
					<th>Imię</th>
					<th>Nazwisko</th>
					<th>E-mail</th>
					<th>Treść</th>
				</tr>
				<tr border align=center>
					<td>", $_POST['name'] ,"</td>
					<td>", $_POST['lastname'] ,"</td>
					<td>", $_POST['mail'] ,"</td>
					<td>", $_POST['content'] ,"</td>
				</tr>
			</table>";
}
?>


<?php
#	echo "Jest OK";
?>
