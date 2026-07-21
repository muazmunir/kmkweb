
//jQuery enabled

var tabContent = "";

$(".tab_content").hide();
$(".tab_content:first").show();

$("ul.tabs li").click(function () {
$(".tab_content").hide();
var activeTab = $(this).attr("rel");
$("#" + activeTab).fadeIn();

$("ul.tabs li").removeClass("active");
$(this).addClass("active");
});

$("ul.tabs_mobile li").click(function () {
$(".tab_content").hide();
var activeTab = $(this).attr("rel");
$("#" + activeTab).fadeIn();

$("ul.tabs_mobile li").removeClass("active");
$(this).addClass("active");
});

$("ul.tabs li").last().addClass("tab_last");
