acf.add_filter('date_picker_args', function( args, $field ){
    if($field.attr('data-key') == 'field_60ce2cdf73566') { // you might want to tweak this field key to match your key
        args.minDate = 0;
    }
    if($field.attr('data-key') == 'field_60ce2d3073567') { // you might want to tweak this field key to match your key
        args.minDate = 0;
    }
    return args;
});
var instance = new acf.Model({
    events: {
        'change': 'onChange',
        'change input[type="text"]': 'onChangeText',
    },
    onChange: function(e, $el){
        e.preventDefault();
        var val = $el.val();
        // do something
        //console.log(val);
        if ($el.parent().parent().parent().eq(0).attr('data-key') == 'field_60ce2cdf73566') {
            jQuery('#datepicker_end .hasDatepicker').datepicker( "option", "minDate", val );
        }
        if ($el.parent().parent().parent().eq(0).attr('data-key') == 'field_60ce2d3073567') {
            jQuery('#datepicker_start .hasDatepicker').datepicker( "option", "maxDate", val );
        }

        //Here will be price calculate
    },
    onChangeText: function(e, $el){
        this.onChange(e, $el);
    }
});


