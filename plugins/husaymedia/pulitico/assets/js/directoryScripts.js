/*
 * Directory Custom Scripts
 */
$(function (){
    $('#filterBranch').bonsai();
    $('#filterRegion').bonsai();
    window.branchFilters = $('#filterBranch').data('bonsai');
    window.regionFilters = $('#filterRegion').data('bonsai');
    window.scrollToTop = function(){
        $('html, body').animate({
            scrollTop: 50
        }, 500);
    }
});

$(function() {

    /*
     $("#filterProvince").remoteChained({
         parents : "#filterRegion",
         action : 'onRequestProvince',
         loading : "Loading..."
     })

     $("#filterCities").remoteChained({
         parents : "#filterProvince",
         action : 'onRequestCities',
         loading : "Loading..."
     })

     $("#filterOffice").remoteChained({
         parents : "#filterBranch",
         action : 'onRequestChildrenTitles',
         loading : "Loading...",
         key: "filterBranch"
     })

     $("#filterTitle").remoteChained({
         parents : "#filterOffice",
         action : 'onRequestChildrenTitles',
         loading : "Loading...",
         key: "filterOffice"
     })
    */

})
