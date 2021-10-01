

$(document).ready(function(){
    $("#logoutBtn").click(function(){
        window.location.replace("logout.php");
    });

    $("#expandCaptionBtn").click(function(){
        console.log("clicked");
        if($(this).html()=="more"){
            $(this).html("less");
        }else if($(this).html()=="less"){
            $(this).html("more");
        }
    });

    $("i.far.likeBtn").click(function(){
        var $dataLiked = parseInt($(this).attr("data-liked"));
        $dataLiked = $dataLiked + 1;
        $dataLiked = $dataLiked % 2;
        $(this).attr("data-liked",$dataLiked);//changed the value of data-liked on click

        var $postId = $(this).parent("h3").parent("div.card-footer").siblings("div.card-body").children("img").attr("data-postId");
        var $data = {};
        $data['postId'] = $postId;
        $data['liked'] = $dataLiked;
        var $spanElement = $(this).siblings("span.h5.likeCount");

        $.post("like.php",
            $data,
            function(data){
                $(this).attr("data-liked",$dataLiked);
                $spanElement.html(data);
        });
        
        if($dataLiked == 1){
            $(this).removeClass("far");
            $(this).addClass("fas");
            $(this).css("color","red");
        }else{
            $(this).removeClass("fas");
            $(this).addClass("far");
            $(this).css("color","#444");
        }
        console.log("hft21");
        
    });

}); 

const sort = require('./sort');
const sorted = [1,2,3,4,4,5,6,7,8];
const reverseSorted = [9,8,7,6,5,4,4,3,2,1];
const unsorted = [9,2,5,3,4,1,6,4,7,8];
const cases = {sorted,reverseSorted,unsorted};
const results = {};
//forEach sorting method, run all the cases
Object.keys(sort).forEach(algo=>{
	results[algo] = {};
	Object.keys(cases).forEach(caseName=>{
		const c1 = sort[algo](cases[caseName]);
		// console.log(c1)
		results[algo][caseName] = {
			"n":c1.n,
			"comparisons":c1.compareCount,
			"sortedArray":[...c1.arr]
		}
		console.log(algo,caseName,c1);
		// results[algo][caseName]["n"]=c1.n;
		// results[algo][caseName]["comparisons"] = c1.compareCount;
	});
})

// console.log((results))


