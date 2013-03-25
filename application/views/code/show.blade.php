@layout('master')

@section('styles')
	{{ HTML::style('google-code-prettify/prettify.css') }}
@endsection

@section('container')
	<pre class="prettyprint linenums">{{ htmlentities($code) }}</pre>
	
	<div class="bt-group nav btn-nav-show">
		<!--
				{{ HTML::link_to_route('edit_code', 'Edit', $id, array('class' => 'btn btn-warning btn-edit-code')) }}
		-->
		{{ HTML::link_to_route('new_code', 'Create New Code!', '', array('class' => 'btn btn-success btn-save-code')) }}
	</div>

@endsection

@section('scripts')
	{{ HTML::script('js/jquery.textarea.min.js') }}
	{{ HTML::script('google-code-prettify/prettify.js') }}

	<script type="text/javascript">
		prettyPrint();
	</script>
@endsection