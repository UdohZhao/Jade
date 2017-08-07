$(function(){

  // 验证站点配置表单
  $("#websiteConfigForm").validate({
      focusInvalid: true,
      rules: {
        royalties: {
          required: true,
          number: true
        },
        pay: {
          required: true,
          number: true
        },
        copyright: {
          required: true
        }
      },
      messages: {
        royalties: {
          required: "<span style='color:red;'>提成百分比不能为空 :(</span>",
          number: "<span style='color:red;'>必须输入合法的数字（整数，小数） :(</span>"
        },
        pay: {
          required: "<span style='color:red;'>充值百分比不能为空 :(</span>",
          number: "<span style='color:red;'>必须输入合法的数字（整数，小数） :(</span>"
        },
        copyright: {
          required: "<span style='color:red;'>版权所有不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        $(form).ajaxSubmit({
            dataType:"json",
            success:function( res ){
              // res
              if (res === true) {
                swal("提交成功", "发生改变的操作 :)", "success");
                window.setTimeout("window.location.reload();",2000);
              } else {
                swal("提交失败", "请刷新页面后重试 :(", "error");
              }
            },
            error:function(e){
              console.log(e);
              swal("未知错误", "请刷新页面后重试 :(", "error");
            }
        });
      }
  });

});