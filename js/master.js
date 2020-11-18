$(document).ready(function (){
        for (let i = 1; i<101; i++){
            $("#pokeNum").append(`<option value = "`+ i +`">`+ i +`</option>`);
        }
    });
    //getting the pokemon
        $("#pokeform").on("submit", async function(e){
            e.preventDefault();
            let url =  `https://pokeapi.co/api/v2/pokemon/`+ $("#pokeNum").val();
            let response = await fetch (url);
            let data = await response.json();
            $("#sprites").html("");
            $("#sprites").append(`<img src ="${data.sprites.front_default}">`);
            $("#name").html("");
            $("#name").html("Name: ").append(`${data.name}`); 
            $("#type").html("");
            for (let i = 0; i<data.types.length; i++){
                 $("#type").html("Type: ").append(`${data.types[i].type.name} `); 
            }
        });