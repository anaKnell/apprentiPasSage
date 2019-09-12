<script src="/js/jQCloud/dist/jqcloud.min.js"></script>
<script>
		var words = [

		  @foreach($hello as $site)
		  @php $rand = rand(1,5) @endphp 
		  {text: "#{{$site->cdc_name}}",weight:{{$rand}}},
		  @endforeach
	];
</script>
<script type="application/javascript" src="js/main.js"></script>
<div id="keywords" style="box-sizing:content-box;">
</div>