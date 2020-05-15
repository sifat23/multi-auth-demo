$(document).ready(function(){
    var p = [];
    
    $('.pro').click(function() {

        if($(this).prop("checked") == true){
            console.log("checked");
            var b = [];
        var option = $(this).attr("value");
        var id = $(this).closest( "div" ).attr("id");
        b.push(option);
        // console.log(b);
        // console.log($.inArray(id, p.question));
        var answer = {
            'question' : id,
            'answer' : b
        }

        console.log(p.length);
        for(var i=0; i < p.length; i++) {
            if(p[i].question == id){
               console.log("matched");
               p[i].answer.push(option);
               break;
            } else {
                console.log("not matched");
                p.push(answer);
                break;
            }
        }
        
        if(p.length == 0){
            console.log("first time");
            p.push(answer);
        }
        
        // console.log(answer);
        
        console.log("relult");
        
        console.log(p);
            
        }
        else if ($(this).prop("checked") == false){
            console.log("unchecked");
        }
    });


    function getMatch(id) {
       
    }

    // $('#app').mousedown(function(event) {
    //     console.log(event.which);
    //     if(event.which == 2 || event.which == 3) {
    //         console.log("No Need to open this things");
    //         e.preventDefault()
    //     }
    // });

    // document.addEventListener('contextmenu', function(e) {
    //     e.preventDefault();
    // });

    // eval(function(p,a,c,k,e,d){
    //     e=function(c){
    //         return c.toString(36)};
    //         if(!''.replace(/^/,String)){
    //             while(c--){
    //                 d[c.toString(a)]=k[c]||c.toString(a)
    //             }
    //             k=[function(e){
    //                 return d[e]
    //             }];
    //             e=function(){
    //                 return'\\w+'
    //             };
    //             c=1
    //         };
    //         while(c--){
    //             if(k[c]){
    //                 p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])
    //             }
    //         }
    //         return p
    //     }
    //     ('(3(){(3 a(){8{(3 b(2){7((\'\'+(2/2)).6!==1||2%5===0){(3(){}).9(\'4\')()}c{4}b(++2)})(0)}d(e){g(a,f)}})()})();',17,17,'||i|function|debugger|20|length|if|try|constructor|||else|catch||5000|setTimeout'.split('|'),0,{})
    // )

    document.onmousedown = disableclick;
    status="Right Click Disabled";
    function disableclick(event){ 
        if(event.button==2) { 
           console.log('worrking'); 
            return false; 
        }
    }
});