$(document).ready(function() { 
const cost = $('#cprice').find('[data-price]') 

$('ChildQuantity').change(function() { 
    var cq = $(this).find(':selected').data('ChildQuanitity'); 
    const total = cost * cq; 
    $('#total').text(total);
}); 
});

$(document).ready(function() { 
    const cost = $("#aprice").find("[data-price]") 

    $("AdultQuantity").change(function() { 
        var aq = $(this).find(':selected').data("AdultQuanitity"); 
        const total1 = cost * aq; 
        $("#total1").text(total1);
    }); 
    });

    $(document).ready(function() { 
        const cost = $("#sprice").find("[data-price]") 
        
        $("StudentQuantity").change(function() { 
            var sq = $(this).find(':selected').data("StudentQuanitity"); 
            const total2 = cost * sq; 
            $("#total2").text(total2);
        }); 
        });