$('#check-all').change(function(){
    $(".list-content input[type='checkbox']").prop('checked', $(this).prop('checked'));
})