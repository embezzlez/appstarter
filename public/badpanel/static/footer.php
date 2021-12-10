
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script type="text/javascript">
function goTo(page, title, url) {
  if ("undefined" !== typeof history.pushState) {
    history.pushState({page: page}, title, url);
	$('#loader').show();
	setTimeout(function(){
		$('#ryu').load(url);
	},500);
  } else {
    window.location.assign(url);
  }

  return 
}
</script>
</body>
</html>