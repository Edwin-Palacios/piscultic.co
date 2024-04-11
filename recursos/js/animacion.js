(function(){



    


    var $it=0;
    var $ip=0;
    var $ia=0;
    var $im=0;

    $(".cavar").css({
        cursor: "not-allowed",
        "pointer-events": "none"
    })
    $(".agAgua").css({
        cursor: "not-allowed",
        "pointer-events": "none"
    })
    // $(".cavar").css({
    //     cursor: "not-allowed",
    //     "pointer-events": "none"
    // })


    $(".malesa").on("click", function(){

        $("<div>",{

            class: "trrPodado"

        }).appendTo("#area")

    

        $("<img>", {

            src: "../imagenes/28.png",
            class: "tp"

        }).appendTo(".trrPodado")
        
        $(".tp").css({
            position: "absolute",
            opacity: "0.3",
            top:  "-40%",
            left: "40%"
           
        })

        if($it == 0){

            $("<img>",{

                    class: "podado",
                    src: "../imagenes/podadora.png"

            }).appendTo(".trrPodado")
            $(".podado").css({
                position: "absolute",
                width: "100%",
                height: "100%",
                top:  "-80%",
                left: "5%",
                "z-index": "20"
            })

        }
        var $imp = $(".podado");
        

        $imp.animate({

            left: "40%"
        })

        $imp.animate({
            left:"-30%"
        })
        $it++
        if($it>=10){

            $(".malesa").css({

                display: "none"
            })
            $($imp).css({
                display: "none"
            })

        

            $(".cavar").css({
                cursor: "pointer",
                "pointer-events": "initial"
            })
            
        

            
    
        }
        


    })

    

        
    $(".cavar").on("click", function(){

        $("<div>", {

            class: "trrCavado"

        }).appendTo("#area")

        $("<img>",{

            src: "../imagenes/35.png",
            class: "tc"

        }).appendTo(".trrCavado")

        $(".tc").css({
            position: "absolute",
            opacity: "0.3",
            top:  "-16%",
            left: "20%"
        })

        if ($ip == 0) {

            $("<img>",{

                src: "../imagenes/pala.png",
                class: "pala"

            }).appendTo(".trrCavado")
            $(".pala").css({

                position: "absolute",
                width: "50%",
                height: "50%",
                top:  "20%",
                left: "15%",
                "z-index": "30"

            })

            
        }


        var $imc = $(".pala");
        

        $imc.animate({

            left: "40%",
            top: "10%"
        })

        $imc.animate({
            left:"-10%",
            top: "-10%"
        })
        $ip++
        if($ip>=10){

            $(".cavar").css({

                display: "none"
            })
            $($imc).css({
                display: "none"
            })

            $(".agAgua").css({
                cursor: "pointer",
                "pointer-events": "initial"
            })

           
    
        }




    })










    $(".agAgua").on("click", function(){

        $("<div>",{

            class: "valAgua"

        }).appendTo("#area")

    

        $("<img>", {

            src: "../imagenes/42.png",
            class: "va"

        }).appendTo(".valAgua")
        
        $(".va").css({
            position: "absolute",
            opacity: "1",
            top:  "-40%",
            left: "40%"
           
        })
        
        if($ia == 1){

            $("<img>",{
                src: "../imagenes/43.png",
                class: "vva"
                    

            }).appendTo(".valAgua")
            $(".vva").css({
                position: "absolute",
                width: "100%",
                height: "100%",
                top:  "-90%",
                left: "100%",
                "z-index": "50"
            })

            

        };
        
        if($ia >= 1){

            $(".va").css({
                display: "none"
            })
        };

        
        var $ima = $(".vva");
        

        $ima.animate({

            left: "150%"
        })

        $ima.animate({
            left:"100%"
        })
        $ia++;
        if($ia >= 10){

        
            $(".tc").attr("src", "../imagenes/44.png")

            $(".agAgua").css({

                display: "none"
            })
            $($ima).css({
                display: "none"
            })

            $($ima).css({
                display: "none"
            })
            
    
        }


    })
    










    $(".arcilla").on("click", function(){

        $("<div>",{

            class: "manoPrueba"

        }).appendTo("#area")

        $(".manoPrueba").css({
            position: "absolute",
            width: "100%",
            height: "50%"
        })

        $("<img>", {

            src: "../imagenes/52.png",
            class: "mp"

        }).appendTo(".manoPrueba")
        
        $(".mp").css({
            width: "80%",
            height: "80%",
            position: "relative",
            opacity: "1",
            top:  "-10%",
            left: "-10%",
            "z-index": "110"
           
        })

        if($im >= 0){

            $(".mp").css({
                display: "none"
            })

            $("<img>",{

                    class: "ms",
                    src: "../imagenes/52.png"

            }).appendTo(".manoPrueba")
            $(".ms").css({
                position: "relative",
                width: "15%",
                height: "15%",
                top:  "-10%",
                left: "-20%",
                "z-index": "20",
                // transform: "rotateX(45deg)"
                transform: "rotate(40deg)"
            })

            
            

        }

      

            var $amp = $(".ms");

            $amp.animate({
                top: "0%",
                left: "-10%"
            })
            $amp.animate({
                top: "-10%",
                left: "-20%"
            })
        
       
        // var $imp = $(".podado");
        

        // $imp.animate({

        //     left: "40%"
        // })

        // $imp.animate({
        //     left:"-30%"
        // })
         $im++
        // if($it>=10){

        //     $(".malesa").css({

        //         display: "none"
        //     })
        //     $($imp).css({
        //         display: "none"
        //     })

        

        //     $(".cavar").css({
        //         cursor: "pointer",
        //         "pointer-events": "initial"
        //     })
            
        

            
    
        // }
        


    })

    



})();