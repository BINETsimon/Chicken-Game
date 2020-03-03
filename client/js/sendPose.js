function sendPose(poseZ, poseX){
    
    var url = "../server/sendPose.php";

    // alert("id:"+post_id+" | title:"+title+" | descr:"+description+" | url:"+url);
    console.log(poseZ + " .. "+ poseX);
    $.ajax({
        type: "GET",
        url: url,
        dataType:'json',
        data: {
            'poseZ': poseZ,
            'poseX': poseX,
        },
        crossDomain: true,
        cache: false
    });
}