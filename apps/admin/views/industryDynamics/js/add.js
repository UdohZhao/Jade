$(function(){

  // 实例化编辑器
  var ue = UE.getEditor('container');

  // 验证码添加目录表单
  $("#industryDynamicsForm").validate({
      focusInvalid: true,
      rules: {
        title: {
          required: true
        }
      },
      messages: {
        title: {
          required: "<span style='color:red;'>新闻标题不能为空 :(</span>"
        }
      },
      submitHandler: function(form){
        // 封面图片，html，imgValue
        var previewImg = $("#previewImg").val();
        var html = ue.getContent();
        var imgValue = $("#imgValue").val();
        // if
        if (previewImg == "" && imgValue == "") {
            sweetAlert("拒绝提交", "请上传封面图片 :(", "error");
            return false;
        } else if (html == "") {
          sweetAlert("拒绝提交", "内容不能为空 :(", "error");
          return false;
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
                } else if (res == 1) {
                  swal("提交失败", "检测到行业动态标题已经存在 :(", "error");
                } else {
                  swal("提交失败", res, "error");
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

// 删除封面图片路径
function delCp(id,path){
  swal({
    title: "确认删除封面图片吗？",
    text: "删除后将不可恢复 :(",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "确定",
    cancelButtonText: "取消",
    closeOnConfirm: false,
    closeOnCancel: false
  },
  function(isConfirm){
    if (isConfirm) {
      // Ajax
      $.ajax({
        type: "POST",
        url: "/admin/industryDynamics/delCp",
        data: {id:id,path:path},
        dataType: "JSON",
        success: function(res){
          // res
          if (res === true) {
            swal("提交成功", "受影响的操作 :)", "success");
            window.setTimeout("window.location.reload();",2000);
          } else {
            swal("提交失败", "请刷新页面后重试 :(", "error");
          }
        },
        error: function(e){
          console.log(e);
          swal("未知错误", "请刷新页面后重试 :(", "error");
        }
      });
      //swal("Deleted!", "Your imaginary file has been deleted.", "success");
    } else {
      swal("取消了", "封面图片是安全的 :)", "error");
    }
  });
}

//图片上传预览IE是用了滤镜。
function previewImage(file)
{
  var MAXWIDTH  = 150;
  var MAXHEIGHT = 150;
  var div = document.getElementById('preview');
  if (file.files && file.files[0])
  {
      div.innerHTML ='<img id=imghead onclick=$("#previewImg").click()>';
      var img = document.getElementById('imghead');
      img.onload = function(){
        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
        img.width  =  rect.width;
        img.height =  rect.height;
        // img.style.marginLeft = rect.left+'px';
        img.style.marginTop = rect.top+'px';
      }
      var reader = new FileReader();
      reader.onload = function(evt){img.src = evt.target.result;}
      reader.readAsDataURL(file.files[0]);
  }
  else //兼容IE
  {
    var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
    file.select();
    var src = document.selection.createRange().text;
    div.innerHTML = '<img id=imghead>';
    var img = document.getElementById('imghead');
    img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
    var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
    status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
    div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
  }
}
function clacImgZoomParam( maxWidth, maxHeight, width, height ){
    var param = {top:0, left:0, width:width, height:height};
    if( width>maxWidth || height>maxHeight ){
        rateWidth = width / maxWidth;
        rateHeight = height / maxHeight;

        if( rateWidth > rateHeight ){
            param.width =  maxWidth;
            param.height = Math.round(height / rateWidth);
        }else{
            param.width = Math.round(width / rateHeight);
            param.height = maxHeight;
        }
    }
    param.left = Math.round((maxWidth - param.width) / 2);
    param.top = Math.round((maxHeight - param.height) / 2);
    return param;
}


