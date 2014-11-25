function view_table(){
    table = $('#tables_select').val();
    if(table != 0)
        $.post("../tables/tables.php",{ file:table }, function(data) {
        $('#container').html(data);
        });
    }