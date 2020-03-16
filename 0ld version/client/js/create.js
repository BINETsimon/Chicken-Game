function create(){
    
    var url = "../server/create.php";

    // alert("id:"+post_id+" | title:"+title+" | descr:"+description+" | url:"+url);

    $.ajax({
        type: "GET",
        url: url,
        dataType:'json',
        data: {
            'poseZ': 0,
            'poseX': 0,
        },
        crossDomain: true,
        cache: false
    });
}