@layout('master')

@section('container')
	{{ Form::open('/') }}
		{{ Form::textarea('code', '', array('class' => 'textarea-editor', 'placeholder' => 'Type or paste some code here...')) }}

		{{ Form::submit('Save my code!', array('class' => 'btn btn-success btn-save-code') ) }}

	{{ Form::close() }}

@endsection


@section('scripts')
	{{ HTML::script('js/jquery.textarea.min.js') }}

	<script type="text/javascript">
	jQuery(function($){
		var $textarea_editor = $('.textarea-editor');
		$textarea_editor.tabby();

		$textarea_editor.css('height', $(window).height() - 60);


	});
	</script>
@endsection
