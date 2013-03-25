@layout('master')

@section('container')
	{{ Form::open('/') }}
		{{ Form::textarea('code', $code, array('class' => 'textarea-editor', 'placeholder' => 'Type or paste some code here...')) }}

		<div class="bt-group nav btn-nav-show">
			{{ Form::submit('Save my code!', array('class' => 'btn btn-success btn-save-code') ) }}
		</div>

	{{ Form::close() }}

@endsection


@section('scripts')
	{{ HTML::script('js/jquery.textarea.min.js') }}

	{{ HTML::script('js/jquery-linenumbers.min.js') }}

	<script type="text/javascript">
	jQuery(function($){
		var $textarea_editor = $('.textarea-editor');
		$textarea_editor.tabby();

		$textarea_editor.css('height', $(window).height() - 60);

		$textarea_editor.linenumbers({col_width:'60px'});

		$('textarea').css('height', $(window).height() - 60);

	});
	</script>
@endsection
