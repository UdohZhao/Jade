$(function(){

  // 验证码添加目录表单
  $("#catalogueForm").validate({
      focusInvalid: true,
      rules: {
        title: {
          required: true
        },
        sort: {
          required: true,
          min: 0
        }
      },
      messages: {
        title: {
          required: "<span style='color:red;'>标题不能为空 :(</span>"
        },
        sort: {
          required: "<span style='color:red;'>排序不能为空 :(</span>",
          min: "<span style='color:red;'>请输入大于0的整数 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function( res ){
              // res
              if (res === true) {
                swal("提交成功", "受影响的操作 :)", "success");
                window.setTimeout("window.location.href='/admin/catalogue/add'",2000);
              } else if (res === false) {
                swal("提交失败", "请刷新页面后重试 :(", "error");
              } else {
                swal("提交失败", "检测到该类别下已经存在该目录 :(", "error");
              }
            },
            error:function(e){
              console.log(e);
              swal("未知错误", "请刷新页面后重试 :(", "error");
            }
        });
      }
  });

})