$(document).ready(function(){
    let width_size = $( window ).width();
    if(width_size <= 500){
     
    $(".product").removeClass("col-12").addClass("col-8")
    }
    $(".product").css("margin", "0 auto")
    $(".paperbag").click(function(){
        $(".hardcover").find(".book_type").removeClass("active_book_type");
        $(".electronic").find(".book_type").removeClass("active_book_type");
        $(this).find(".book_type").addClass("active_book_type");
        var the_price = $(this).find(".second").html();
        $(".the_price").empty().append(the_price);
    })

        $(".electronic").click(function(){
            $(".hardcover").find(".book_type").removeClass("active_book_type");
            $(".paperbag").find(".book_type").removeClass("active_book_type");
            $(this).find(".book_type").addClass("active_book_type");
            var the_price = $(this).find(".second").html();
            $(".the_price").empty().append(the_price);
        })
        $(".hardcover").click(function(){
            $(".electronic").find(".book_type").removeClass("active_book_type");
            $(".paperbag").find(".book_type").removeClass("active_book_type");
            $(this).find(".book_type").addClass("active_book_type");
            var the_price = $(this).find(".second").html();
            $(".the_price").empty().append(the_price);
        })
    $("#addtocard").click(function (e) { 
        e.preventDefault();
        var book_type = $(".mtrow").find(".active_book_type .first").html();
        var  book_type_price = $(".mtrow").find(".active_book_type .second").html();

        if($.isNumeric(book_type_price)){
            $("#booktype").attr("value",book_type);
            $("#book_type_price").attr("value", Number(book_type_price));
        }
       

        var bookDetails = $("#addtocardformid").serialize();
        var bookname = $("#bookname").val();
        var thevalue = $(".product_qun").html();
        
      
         bookDetails[bookDetails.length] ={book_type: book_type, book_type_price: book_type_price};
         
        

        $.post({
            url:'ajax/fontEnd.php',
            data:bookDetails,
            dataType:'html',
            success:function(response){
                if(response == "1"){
                    $(".product_qun").empty().append(Number(thevalue)+1);
                    $(".addtocart_error").removeClass("alert alert-warning alert-dismissible fade show")
                   $(".addtocart_error").addClass("alert alert-success alert-dismissible fade show ")
                 
                   $(".addtocart_error").find("#mgs").empty().append("<b>"+bookname +"</b>"+" Added to  Cart ");
                //    $("html, body").animate({scrollTop: 0}, 100);
                   var offTop = $('html,body').offset().top - 43;
                    $('html, body').scrollTop(offTop);
                }else{
                    $(".addtocart_error").removeClass("alert alert-success alert-dismissible fade show");
                    $(".addtocart_error").addClass("alert alert-warning alert-dismissible fade show")
                  
                    $(".addtocart_error").find("#mgs").empty().append("<b>"+bookname +"</b>"+ response);
                    $("html, body").animate({scrollTop: 0}, 1000);

                }
            }
        })
    });

    $(".add_to_wishlist").click(function (e) { 
        e.preventDefault();
        let wishlist_book_id = $(this).attr("value");
        let wishlist_book_title = $(this).attr("book_title");
        $.post({
            url:'ajax/wish.php',
            data:'&wishlist_book_id='+wishlist_book_id+'&wishlist_book_title='+wishlist_book_title,
            success:function(response){
               if(response == "2"){
                   window.location.replace("login?wp=wish-list");
               }else if(response == "3"){
                $(".addtocart_error").removeClass("alert alert-success alert-dismissible fade show");
                $(".addtocart_error").addClass("alert alert-warning alert-dismissible fade show")
                  $(".addtocart_error").find("#mgs").empty().append("<b>"+wishlist_book_title +"</b>"+ " is already in your saved items");
                  $("html, body").animate({scrollTop: 0}, 1000);

               }else if(response == "1"){
                $(".addtocart_error").removeClass("alert alert-warning alert-dismissible fade show")
                $(".addtocart_error").addClass("alert alert-success alert-dismissible fade show ")
                $(".addtocart_error").find("#mgs").empty().append("<b>"+wishlist_book_title +"</b>"+ " Added to your saved items");
                $("html, body").animate({scrollTop: 0}, 1000);
               }
            }
        })
        
    });
    $(".view_quick_click").click(function (e) { 
        e.preventDefault();
		let id = $(this).closest("li").attr("id");

		$.post({
			url:'ajax/htmlfetch.php',
			data:'&book__id='+id,
			success:function(result){
				$(".modal-body").html(result);
				
			}
		})

       
    });

    $(".subscribe_to_newletter").click(function (e) { 
        e.preventDefault();
       var email =  $("#newsletter_email").val();
        ths = $(this)

        $()

       $.post({
        url:'ajax/admin_be.php',
        data:'&newsletter_email='+email,
        success:function(response){
            
            $(".mds").css('display', 'block')
             if(response == "1"){
                $(".mbs").show();
                 $(".mbs").removeClass("alert-warning");
                 $(".mbs").addClass("alert-success");
              $(".tst").empty().append(" Thank you for suscribing to our newsletter")
            }else{
                $(".mbs").show();
                $(".mbs").addClass("shows");
                $(".mbs").removeClass("alert-success");
                 $(".mbs").addClass("alert-warning");
                $(".tst").empty().append(response)
            }
            
        }
    })
    });

    $(".search_books").click(function(e){
        e.preventDefault();
        
    })

    $(".search_key").keyup(function (e) { 
    var key = $(".search_key").val();
    if(key.length > 0 ){
        $(".minisearch .field__search").css('margin-top', '-45vh')
    
        $.post({
			url:'htmlload/search.php',
			data:'&search_key='+key,
			success:function(result){
			 $(".search").empty().append(result);
				
			}
		})
    }

});
    // $(".quickview").click(function (e) { 
    //     e.preventDefault();
    //     console.log("shamsu")
    //     alert("it is working properly")
    // });

})