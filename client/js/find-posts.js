var url = '../server/find-posts.php';

$(document).ready(function(){
    load_data();
    function load_data(page)
    {
        $.ajax({
            url: url,
            method:'POST',
            data:{page:page},
            success:function(data){
                $('#posts-feed').html(data);
            }
        })
    }
});