<div class="form-group{{ $state }}">
    
	<div class="col-lg-12">
        
        

    <div id="{{ $element->getName() }}-editor" class="wysiwyg">
      Go ahead&hellip; {{{ $element->getValue() }}}
    </div>
        
      {{ Form::hidden($element->getName(), $element->getValue()) }}
        
        
	</div>
</div>
