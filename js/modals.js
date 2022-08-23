//BOOKING CONSULTATION MODAL
///script for adding menu items from the main menu page
/// Loads Modal and gets add_menu_item.php
///Modal setting for Deleting items on food menu 
$(".booking-modal-btn").click(function(event){//button
    event.preventDefault();
    $(".modal").addClass("open");
    $(".modal-content").addClass("open");
   
});

$(".modal").click(function (event) {


    if ($(event.target).is(".modal")) {
        $(".modal").removeClass("open");
        $(".modal-content").removeClass("open");
      

    };
    
    });
    $(".close").click(function(){
        $(".modal").removeClass("open");
        $(".modal-content").removeClass("open");
       
        
    });



/////



