
$('document').ready(function(){

    $('#sidebar').mCustomScrollbar({
        theme: 'minimal'
    });


    // * untuk toggle navmenu sidebar 
    $('#sidebarCollapse').click(function(){
        $('#sidebar').toggleClass('tutup');
        $('#content').toggleClass('layarPenuh');
    });

});