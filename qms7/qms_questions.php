			
<div class="container">
	<div class="jumbotron">
			<P>
			<?PHP print "<i><b>[</b>". $qID ."<b>]</b></i>" . " " .$question; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q' required="" value= 'A' <?PHP print " ". $answerA; ?>><?PHP print " ". "<i>". $A . "</i>"; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q'  required="" value= 'B' <?PHP print $answerB; ?>><?PHP print " ". "<i>". $B . "</i>"; ?>
			<P>
			<INPUT TYPE = 'Radio' Name ='q'  required="" value= 'C' <?PHP print $answerC; ?>><?PHP print " ". "<i>".$C . "</i>"; ?>
			<P>
			<P>
			<INPUT TYPE = 'Radio' Name ='q'  required="" value= 'D' <?PHP print $answerD; ?>><?PHP print " ". "<i>".$D . "</i>"; ?>
			<P>
	</div>
</div>
