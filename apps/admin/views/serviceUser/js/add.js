$(function(){

  // 验证码添加目录表单
  $("#serviceUserFomr").validate({
      focusInvalid: true,
      rules: {
        cname: {
          required: true
        },
        jobnumber: {
          required: true
        }
      },
      messages: {
        cname: {
          required: "<span style='color:red;'>客服姓名不能为空 :(</span>"
        },
        jobnumber: {
          required: "<span style='color:red;'>客服工作号不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
          $(form).ajaxSubmit({
            dataType:"json",
            success:function( res ){
              // res
              if (res === true) {
                swal("提交成功", "受影响的操作 :)", "success");
                window.setTimeout("window.location.reload();",2000);
              } else if (res === false) {
                swal("提交失败", "请刷新页面后重试 :(", "error");
              } else {
                swal("提交失败", "检测到客服姓名或者工作号已经存在 :(", "error");
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
