$(document).ready(function(){
    // param add
    $('form#webhook button.add-param').live('click', function(e) {
        e.preventDefault();
        var $template = '<div class="row"><div class="col-xs-6"><input type="text" class="form-control" id="incomingParam[]" placeholder="Parameter"></div><div class="col-xs-4"><input type="text" class="form-control" id="incomingParam[]" placeholder="Value" disabled></div><div class="col-xs-2"><button type="submit" class="btn btn-default btn-block btn-danger delete-param"><span class="glyphicon glyphicon-remove-circle"></span></button></div></div>';
        $(this).parent().parent().parent().prepend($template);
    });

    // param delete
    $(document).on('click', 'form#webhook button.delete-param', function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
    });

});
