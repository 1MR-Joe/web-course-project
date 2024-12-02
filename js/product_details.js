function convert_wish_heart(){
    wish_list_heart = document.getElementById("wish_list_heart");

    if(wish_list_heart.style.backgroundColor == "white"){
        wish_list_heart.style.backgroundColor = "black";
        wish_list_heart.style.color = "#dac723"
    }else{
        wish_list_heart.style.backgroundColor = "white";
        wish_list_heart.style.color = "black"

    }
}