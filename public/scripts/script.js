$(document).ready(function () {
    $("#product_tab a").click(function(e){
        e.preventDefault();
        $(this).tab("show");
    });

    $("#calendar").zabuto_calendar({language: "en"});

    var words = [
        {text: "Software", weight: 16, link: "#"},
        {text: "tools", weight: 7, link: "#"},
        {text: "tool", weight: 5, link: "#"},
        {text: "Travel", weight: 9, link: "#"},
        {text: "Tutorial", weight: 19, link: "#"},
        {text: "Lorem", weight: 18, link: "#"},
        {text: "Ipsum", weight: 8, link: "#"},
        {text: "Software", weight: 9, link: "#"},
        {text: "tools", weight: 7, link: "#"},
        {text: "tool", weight: 5, link: "#"},
        {text: "Travel", weight: 9, link: "#"},
        {text: "Tutorial", weight: 6, link: "#"},
        {text: "Lorem", weight: 6, link: "#"},
        {text: "Ipsum", weight: 8, link: "#"}
    ];
    $("#tagcloud").jQCloud(words);
});