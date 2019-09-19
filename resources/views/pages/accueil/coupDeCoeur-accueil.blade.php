<script src="/js/jQCloud/dist/jqcloud.min.js"></script>
<script>
		var words = [

		  @foreach($hello as $site)
		  @php $rand = rand(1,7) @endphp 
		  {text: "{!!$site->cdc_name!!}",weight:{{$rand}},link:"{{$site->cdc_link}}"},
		  @endforeach
	];
</script>
<script type="application/javascript" src="js/main.js"></script>

<div id="keywords" class="m-auto" style="box-sizing:content-box;"></div>