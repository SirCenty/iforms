</div>

<!--footer-->
<footer>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.tab.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.accordion.js"></script>
  <!-- Other JS plugins can be included here -->

	<script type="text/javascript">
		$(document).foundation({
		  accordion: {
		    // specify the class used for accordion panels
		    content_class: 'content',
		    // specify the class used for active (or open) accordion panels
		    active_class: 'active',
		    // allow multiple accordion panels to be active at the same time
		    multi_expand: true,
		    // allow accordion panels to be closed by clicking on their headers
		    // setting to false only closes accordion panels when another is opened
		    toggleable: true
		  }
		});	
	</script>
 

<!--get todays date-->
<script>
n =  new Date();
var month = new Array();
month[0] = "January";
month[1] = "February";
month[2] = "March";
month[3] = "April";
month[4] = "May";
month[5] = "June";
month[6] = "July";
month[7] = "August";
month[8] = "September";
month[9] = "October";
month[10] = "November";
month[11] = "December";
var m = month[n.getMonth()];
y = n.getFullYear();
d = n.getDate();
document.getElementById("todaydate").innerHTML = m + ", " + d + ", " + y;
</script>

<script>
n =  new Date();
var month = new Array();
month[0] = "Jan";
month[1] = "Feb";
month[2] = "Mar";
month[3] = "Apr";
month[4] = "May";
month[5] = "Jun";
month[6] = "Jul";
month[7] = "Aug";
month[8] = "Sep";
month[9] = "Oct";
month[10] = "Nov";
month[11] = "Dec";
var m = month[n.getMonth()];
y = n.getFullYear();
d = n.getDate();
H = n.getHours();
M = n.getMinutes();
document.getElementById("reportdate").innerHTML = H + ":" + M + "H" + " on " + d + "/" + m + "/" + y;
</script>

</footer>

</body>
</html> 