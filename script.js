jQuery(document).ready(function(){
  jQuery(".no").click(function(){
    duplicate();
  });
  jQuery(".yes").click(function(){
    console.log("yes");
  });
})


function duplicate(){
  var original = jQuery('.tablehold');
  var clone = original.clone();
  clone[0].setAttribute("id", "clone");
  clone.css({
    "position": "absolute",
    "background-color": "#FDF7EB",
  	"width": "28%",
  	"padding-right": "30px",
  	"margin-right": "30px",
  	"border": "1px solid #CECAC1",
    "box-shadow": "3px 3px 1px #CECAC1",
    "text-align": "center",
    "padding": "20px"
  });
  original[0].style.visibility = 'hidden';
  //TODO change the original card text to next class info
  clone.prependTo(original);
  clone.hide("slide", {direction: "down"}, 300, function() {
    jQuery("#clone").remove();
  });
  original[0].style.visibility = 'visible';
}
