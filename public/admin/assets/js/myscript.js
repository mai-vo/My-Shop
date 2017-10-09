$(document).ready(function(){
      $(".edit_active").click(function (){
        // var id=$(this).attr('id');
        // var idstring=".xoa"+id;
        
        // $.ajax({
        // url:"{{route('admin.order.delete')}}",
        // data:{'id':id},
        // type:"GET",
        // success: function (data){
          
        //     $(idstring).remove();
        //      $('.ajaxmessage').html('<div class="row message"><div class="col-lg-12"><div class="alert alert-info">Deleted successfully</div></div></div>');
          
        //   }
        //   });
        
        var id=$(this).attr('id');
        var idstring="#"+id;
        $.ajax({
                url:"/admin/users/active",
                type:"GET",
                data:{'id':id},
                success: function (data){
                $(idstring).html(data);
              }
            });
      });
    });