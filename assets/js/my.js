(function($) {
    $("#date #invoice").datepicker({
        format: 'yyyy-mm-dd'
    });
    $("#date2 #supply").datepicker(
        {
            format: 'yyyy-mm-dd'
        }
    );
    $("#toggle").click(function () {
        $("#date #invoice").datepicker('toggle');
    });
    $("#toggle2").click(function () {
        $("#date2 #supply").datepicker('toggle');
    });
    $('.delete').click(function () {
        $tr = $(this).parent().parent().parent();
        $id = $tr.attr('id');
        console.log($id);
        $.ajax({
            url: '/admin/delete/'+$id,
            type: 'post',
            beforeSend: function(){

            },
            success: function(result){
                console.log(result);

            }
        });
    });
    $("#setting").click(function () {
        $integerVal = Math.floor(Math.random()*10000)+10000;
        $(this).parent().find('#name').val('INV-'+$integerVal);
    });
})(jQuery);