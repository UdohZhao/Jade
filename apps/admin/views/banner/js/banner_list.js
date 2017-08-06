

function del(id){
    $.ajax({
        url:'/admin/banner/del_link',
        data:'id='+id,
        dataType:'json',
        type:'post',
        success:function(re){
            alert(re.msg);
            location.reload();
        }
    })
}
