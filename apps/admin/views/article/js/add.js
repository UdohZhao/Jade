$(function(){

  // 实例化编辑器
  var ue = UE.getEditor('container');

  // 验证码添加目录表单
  $("#articleForm").validate({
      focusInvalid: true,
      rules: {
        title: {
          required: true
        },
        price: {
          required: true,
          number: true
        }
      },
      messages: {
        title: {
          required: "<span style='color:red;'>章节标题不能为空 :(</span>"
        },
        price: {
          required: "<span style='color:red;'>阅读定价不能为空 :(</span>",
          number: "<span style='color:red;'>请输入合法的数字（整数，小数） :(</span>"
        }
      },
      submitHandler: function(form){
        // content
        var html = ue.getContent();
        if (html == "") {
          sweetAlert("拒绝提交", "章节内容不能为空 :(", "error");
        } else {
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
                  swal("提交失败", "检测到该目录下已经存在该章节标题 :(", "error");
                }
              },
              error:function(e){
                console.log(e);
                swal("未知错误", "请刷新页面后重试 :(", "error");
              }
          });
        }

      }
  });

})

