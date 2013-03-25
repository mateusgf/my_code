@layout('master')

@section('styles')
	{{ HTML::style('google-code-prettify/prettify.css') }}
@endsection

@section('container')
	<pre class="prettyprint linenums">{{ htmlentities($code) }}</pre>
	{{ HTML::link_to_route('new_code', 'Create New Code!') }}
@endsection

@section('scripts')
	{{ HTML::script('js/jquery.textarea.min.js') }}
	{{ HTML::script('google-code-prettify/prettify.js') }}

	<script type="text/javascript">
		prettyPrint();
	</script>
@endsection