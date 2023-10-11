function openTab(tabName) {
    $('#tab_content').empty();

    switch(tabName) {
        case 'user': 
            $.ajax({
                url: "/view/user/user.php",
                context: document.body
            }).done(function(response) {
                $( '#tab_content' ).append( response );
            });
            break;
        case 'color': 
            $.ajax({
                url: "/view/color/color.php",
                context: document.body
            }).done(function(response) {
                $( '#tab_content' ).append( response );
            });
            break;
        default:
            $.ajax({
                url: "/view/color-user/colorUser.php",
                context: document.body
            }).done(function(response) {
                $( '#tab_content' ).append( response );
            });
            break;
    }
    $( '#tab_content' ).attr( 'name', tabName );
    closeNav();
}

function openNav() {
    document.getElementById("sidenav").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("tab_content").style.opacity = .5;
  }
  
  function closeNav() {
    document.getElementById("sidenav").style.width = "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("tab_content").style.opacity = 1;
  }

  function refreshTab() {
    $('#tab_content').empty();
    switch($( '#tab_content' ).attr( 'name' )) {
        case 'user': 
            $.ajax({
                url: "/view/user/user.php",
                context: document.body
            }).done(function(response) {
                $( '#tab_content' ).append( response );
            });
            break;
        case 'color': 
            $.ajax({
                url: "/view/color/color.php",
                context: document.body
            }).done(function(response) {
                $( '#tab_content' ).append( response );
            });
            break;
        default:
            $.ajax({
                url: "/view/color-user/colorUser.php",
                context: document.body
            }).done(function(response) {
                $( '#tab_content' ).append( response );
            });
            break;
    }
}

$(document).ready(function() {
    openNav()
});