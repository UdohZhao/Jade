$(function(){
    $('#send').click(function(){
            $.ajax({
                url:'/admin/order/send',
                data:'id='+id,
                dataType:'json',
                type:'post',
                success:function(re){
                    if(re.status==true){
                        alert(re.msg);
                        window.location.href="/admin/order/index"
                    }else{
                        alert(re.msg);
                        window.location.href="/admin/order/index"
                    }
                }
            })
    })
})

function backMoney(id,status){
    //id 订单id
            $.ajax({
                url:'/admin/order/backMoney',
                data:'status='+status+'&id='+id,
                dataType:'json',
                type:'post',
                success:function(re){
                    alert(re.msg);
                    window.location.href='/admin/order/index'
                }
            })
}
