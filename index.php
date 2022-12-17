<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaing</title>
    <link rel="stylesheet" href="../bootstrap-5.2.2-dist/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="../Libiries/icon-libiriees/font_awesome/Font-Awesome-6.x/Font-Awesome-6.x/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="../Libiries/hover_css/imagehover.css-master/imagehover.css-master/css/imagehover.css"
    />
    <link
      rel="stylesheet"
      href="../Libiries/hover_css/animate/animate.css-main/animate.css-main/animate.min.css"
    />
<style>
*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    scroll-behavior: smooth;
}
body{
        /* width: 100vw;
    height: 2000px; */
    /* background-color: black; */
     display: flex; 
    /* width: 100vw; */
     align-items: center;
    justify-content: center; 

 
}
.main_container{

    /* background-color: red; */
    display: flex;
    flex-direction: column;
    /* justify-content: space-evenly; */
  /* background-color: aqua; */
    position: relative;
    /* width: 100%; */
    /* height: 100vh;
    width: 100vw; */
    /* height: 2000px; */
}
 .item1{grid-area: adda;}
.item2{grid-area: export;}
.item3{grid-area: import;
height: 50px;
}
.item4{grid-area: search;
    height: 50px;} 
.item5{grid-area: select1;}
.item6{grid-area: picker1;}
.item7{grid-area: select2;}
.item8{grid-area: picker2;}

.action{
    /* background-color: black; */
    height: 50px;
    width: 100vw;
 
    /* background-color: red; */
    /* height: 5%; */
/* display: grid;
grid-template-areas:
    'adda export import search select1 picker1' ;
    
    /* 'menu footer footer footer footer footer'; */
  /* gap: 0px; */ 


    display: flex;
    flex-direction: row;
  
    position: sticky;
    top: 0;
    /* box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2); */
    /* background-color: red; */
    
}
.color-indicator{
    /* display: inline-block; */
    width: 20px;
    height: 20px;
    border-radius: 20px;
    background-color: #fff;
    /* position: absolute;
    top: 150px;
    right: 370px; */
    /* vertical-align: middle; */
}
.color-indicator2   {
    /* display: inline-block; */
    width: 20px;
    height: 20px;
    border-radius: 20px;
    background-color:#fff;
    /* position: absolute;
    top: 150px;
    right: 270px; */
   
    /* vertical-align: middle; */
}

.file.form-control{
    width: 40%;
}
.btn{
    width: 80px;
    font-size: 70%;
    
}

.imp.btn{
    width: 70px;
    font-size: 16px;
}
.form-check button{
    width: 50px;
    font-size: 10px;
}
.form-check{

    display: flex;
    flex-direction: column;
    /* height: 100vh; */
    text-transform: uppercase;
    color: red;
    font-size: 14px;
    font-weight: 800;

    
}
.check_inrow{
    display: flex;
    flex-direction: row;
}
.search_box{
    width: 120px;
    height: 80%;
    font-size:16px;
}
.search_box::placeholder{
    font-family: fontawesome;
    font-size: 12px;
}

.row_column{

    margin-top: 150px;
display: grid;
grid-template-columns: repeat(auto-fit,minmax(0,70px));
     gap:20px   20px; 
   
     /* margin-left: 10px; */

}
.box{
    width: 50px;
    height: 50px;
    font-size: 20px;
    box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.2);
    position: relative;
    display: flex;
        
       /* align-items: center;
    justify-content: center;  */
    /* -webkit-appearance: none; */
}
.box.delete{
    display: none;
}
input::-webkit-inner-spin-button{
    -webkit-appearance: none;
    
}

.box .fa-xmark{

    position: absolute;
    top: 0;
    right: 0;

/* color: red; */
  
}
.add{
    display: flex;
    flex-direction: row;
}
.add_box{
    position: absolute;
    top: 60px;
    left: 0;
    font-size: 20px;
}
.add_box::placeholder{
    font-size: 15px;
    font-family: fontawesome;
}
.box.box_con.select .fa-circle{
    display: block;
    font-size: 80px;
    color:red;
    position: absolute;
    top:-20%;
    left:-30%;
    right: 50%;
}
.box.box_con.selected .fa-circle{
    display: block;
    font-size: 80px;
    color:purple;
    position: absolute;
    top:-20%;
    left:-30%;
    right: 50%;
}
.box.box_con.searching_select .fa-circle{
    display: block;
    font-size: 80px;
    color:green;
    position: absolute;
    top:-20%;
    left:-30%;
    right: 50%;
}
.fa-circle{
    display:none;
}
.box_con{
    position: relative;

}
/* .color-picker{
    position: ;
} */
@media  (max-width: 826px) {
 
  .row_column{


     width: 190%;
     justify-content: center;
     align-items: center;

}


}
@media  (max-width: 403px) {

  .row_column{


     width: 210%;
     justify-content: center;
     align-items: center;

}


}
@media  (max-width: 334px) {

.row_column{


   width: 220%;
   justify-content: center;
   align-items: center;

}


}


</style>
</head>
<body>

        <div class="main_container">
       

            <div class="action">
             
                <div class="item1" type="submit" >
            <!-- <form action="chaing_add.php" method="POST" class="form_creat">
                    <input type="number" class="shadow_box add_box" name="add_num" style="display:none; margin-left:150px;">
                    <button class="btn btn-primary " type="submit" name="add" >ADD

                    </form> -->
                    </button>
        </div>
                
        <!-- <a href="chaing_export.php" class="btn btn-primary">Export
</a>    
            <div class="item2"><button class="btn btn-primary">Export</button></div> -->
                
                <!-- <form class="file form-control item3" action="chaing_import.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="excel" class="form-control-file" >
                    <button type="submit" name="import" class="imp btn btn-primary">Import</button>
                </form> -->

                    <div class="item4">
                <input type="number" placeholder="Digit Search &#xf061;" class="search_box "></div>
                             <div class="form-check item5">
                                <div class="check_inrow">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio5">
                    <label class="form-check-label" >
                      First Digit
                    </label>
                </div>
                <div class="check_inrow">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio6">
                    <label class="form-check-label" >
                      second digit
                    </label>
                </div>
                <div class="check_inrow">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio7">
                    <label class="form-check-label" >
                     Plus
                    </label>
                    </div>
                    <div class="check_inrow">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio8">
                    <label class="form-check-label" >
                        minus
                    </label>
                    </div>
                    <button type="submit"  class="btn btn-primary left">Submit</button>
             </div>
             <div class="item6">
                <div class="color-picker"></div>
                <div id="color-indicator" class="color-indicator"></div>
                
                <div id="color-picker"></div>
            </div><div class="item7">
                <div class="color-picker2"></div>
                <div id="color-indicator2" class="color-indicator2"></div>
                <div id="color-picker2"></div>
            </div>
      
                <div class="form-check item8">
                    <div class="check_inrow">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio1" >
        <label class="form-check-label" >
          +First Digit
        </label>
    </div>
  

    <div class="check_inrow">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio2" >
        <label class="form-check-label" >
          +second digit
        </label>
    </div>
    <div class="check_inrow">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio3" >
        <label class="form-check-label" >
            -First Digit
        </label>
        </div>
        <div class="check_inrow">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flex_radio4" >
        <label class="form-check-label" >
            -second digit
        </label>
        </div>
        <button type="submit" class="btn btn-primary form right">Submit</button>
        
 </div>
<div class="display">
 <input type="text" class="box result_screen" name="quantity" id="quantity">
 </div>

 <?php
        require('chaing_connect.php');
    // $number = '0';
    $selectquery  = "SELECT * FROM result";
    $result = mysqli_query($db,$selectquery);
    $f_result=array();
    $finalresult = array();
    while ($row = mysqli_fetch_assoc($result)) {
         $f_result =$row ;

        
       array_push($finalresult,$f_result);
        
    }
     $json_result = json_encode($finalresult);
?>



            </div>
            
            <input type="hidden" class="box add_box" name="add_num" placeholder="&#xf062;ADD">
            
            
            <div class="row_column">
         
             
               
               
       
            </div>
        </div>
       

       
        <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
<!-- <script src="colorpicker.js"></script> -->
<script>
const url = "https://script.googleusercontent.com/macros/echo?user_content_key=mjsJ69srufFj-0g8F0OkP__Ciy5__1Yw7OhEXGKV8xMnICRCf0C1ZXUeO1Zibwl_4OPruBrSmY8Qa6syRUaNgE_WuM7jw2O5m5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnC9SeqZVm-77uExarZb0zsDmex3qOw_BtHAnu4vlfqIDX3FtSfBS5ISmdM9Sdi7oh5oUCUl_gKRyYLvO2gRHyyGVW_HjeCVv1tz9Jw9Md8uu&lib=MBtkfQnLjlz2sd9EhmLX58aYEaSESECOi";
// num = 0   
interval=()=>{fetch(url)
    .then(response=>
        response.json()).then(array_response=>
            array= array_response
        )
        // console.log(array);
     
          run();
       

// console.log(num);
   }

  api =  setInterval(() => {
    interval()
    // if(num ===15){

clearInterval(api)
// }
   }, 1000);



// run=()=>{
//     console.log(array);
// }

run=()=>{ document.querySelector(".add_box").value  = '';
    document.querySelector(".box.add_box").value = '';
document.querySelector(".box.add_box").addEventListener("keyup",(event)=>{
    mainadd =+ event.target.value 
    document.querySelector(".add_box").value =+ mainadd
})
         
// var from_php =JSON.parse('<?=$json_result?>');
//  console.log(array);

for(el of array){
    document.querySelector(".row_column").innerHTML+=` <div class="box box_con" id="result_${el['id']}">
                <input class="box num" type="number" value="${el['number']}" id="number_${el['id']}" >
                <i class="fa-solid fa-xmark"></i> <i class="fa-regular fa-circle"></i>
            </div>`
}
   

document.querySelectorAll(".fa-xmark").forEach(element => {
    element.addEventListener("click",(event)=>{
        console.log(event.target.parentElement.classList.add("delete"));
    })
});

document.querySelectorAll(".box_con").forEach(element => {
    element.addEventListener("click",(event)=>{
        if(event.target.parentElement.classList.contains("select")){
            event.target.parentElement.classList.remove("select");
            
        }else if(event.target.parentElement.classList.contains("searching_select")){
            event.target.parentElement.classList.replace("searching_select","select")
        }
        else if(event.target.parentElement.classList.contains("selected")){
            event.target.parentElement.classList.replace("selected","select")
            event.target.parentElement.classList.add("select_selected")
            // element.addEventListener("click",(event)=>{ event.target.parentElement.classList.replace("select","selected")})
            // if(event.target.parentElement.classList.contains("select")){
               
            // }
        }
        else if(event.target.parentElement.classList.contains("select_selected")){
            event.target.parentElement.classList.replace("select_selected","selected")
        }
        
        else{
            event.target.parentElement.classList.add("select");
        }
        
    })
    // element.addEventListener("click",(event)=>{
    //     console.log("hi");
    // })
});
// document.querySelector(".box.result_screen").addEventListener("click",()=>{
//     console.log("hi");
// })

right_check =  document.querySelectorAll(".form-check-input");

    document.querySelectorAll(".form-check-input").forEach(element => {
       

element.addEventListener("click",(event)=>{
    for( el of document.querySelectorAll(".form-check-input")){
        el.classList.remove("choose");
    }
    event.target.classList.add("choose");
    document.querySelector(".right").addEventListener("click",()=>{
        // console.log( event.target.click())
      
        switch (document.querySelector(".choose").id.split("_")[1][5]) {
  case "1":
    radio1();

// eval(eval(final_value).join('+'));

   





    break;
    case "2":
        radio2();
    break;
    case "3":
        radio3();
    break;
    case "4":
        radio4();
    break;

  
    default:
    text = "Looking forward to the Weekend";
}

     
     
})

    
})
});

radio2=()=>{
    selected_value = document.querySelectorAll(".box_con.select input");
    // eval([1,"2;alert('Malicious code!')"].join('+'))
    final_value =[] 
    for(el of selected_value){
 
        final_value.push(el.value[1])
      

    }
        
    //    console.log(typeof eval(eval(final_value).join('+')));
    
            document.querySelector(".result_screen").value = eval(eval(final_value).join('+')).toString();;


    for(el of document.querySelectorAll(".box_con.select input")){
        el.parentElement.classList.replace("select", "selected");
        // console.log(el);
        // document.querySelector(".result_screen").value = eval(eval(final_value).join('+'));
    }
}



radio1=()=>{

    selected_value = document.querySelectorAll(".box_con.select input");
    // eval([1,"2;alert('Malicious code!')"].join('+'))
    final_value =[] 
    for(el of selected_value){
 
        final_value.push(el.value[0])
      

    }
    document.querySelector(".result_screen").value = eval(eval(final_value).join('+')).toString();
    console.log(eval(eval(final_value).join('+')));
    for(el of document.querySelectorAll(".box_con.select input")){
        el.parentElement.classList.replace("select", "selected");
        // console.log(el);
    }

}
radio3=()=>{
    selected_value = document.querySelectorAll(".box_con.select input");
    // eval([1,"2;alert('Malicious code!')"].join('+'))
    final_value =[] 
    for(el of selected_value){
 
        final_value.push(el.value[0])
      

    }
    document.querySelector(".result_screen").value = eval(eval(final_value).join('-')).toString();
    for(el of document.querySelectorAll(".box_con.select input")){
        el.parentElement.classList.replace("select", "selected");
        console.log(el);
    }
}
radio4=()=>{
    selected_value = document.querySelectorAll(".box_con.select input");
    // eval([1,"2;alert('Malicious code!')"].join('+'))
    final_value =[] 
    for(el of selected_value){
 
        final_value.push(el.value[1])
      

    }
    document.querySelector(".result_screen").value = eval(eval(final_value).join('-')).toString();
    for(el of document.querySelectorAll(".box_con.select input")){
        el.parentElement.classList.replace("select", "selected");
        console.log(el);
    }   
}


// display=(result)=>{

//     document.querySelector(".result_screen").value = result;
//     document.querySelector(".display").innerHTML=` <input type="number" class="box result_screen" name="quantity" id="quantity"
//     value="${result}"
//     >`
// }

all=document.querySelectorAll(".box.num")
all_first =[]
all_second=[]
all_plus=[]
all_minraw=[]
all_minfirst=[]
all_minsec=[]
all_minus=[]

for(el of all){
    // console.log(el.value);
all_first.push(`${el.value[0]}.${el.id}`)

all_second.push(`${el.value[1]}.${el.id}`)
all_plus.push(`${parseInt(el.value[0])+parseInt(el.value[1])}.${el.id}`)

fun = (num)=>{}
// if(`${parseInt(el.value[0])-parseInt(el.value[1])}`<0){
    
//      all_minus.push(`${parseInt(el.value[0])-parseInt(el.value[1])}.${el.id}`)

//      all_minus.map(fun)
//      function fun(num){
//         num * 10
//         console.log(num.split(".")[0]*-1);
//      }
    // console.log(all_minus);

    // console.log(eval(all_minus)); 
    // console.log(`${eval(raw)}`);
        // console.log(all_minus);
    // all_minus.push(eval(`${raw}`))
// }else{
     all_minraw.push(`${parseInt(el.value[0])-parseInt(el.value[1])}.${el.id}`)
// }








}
 for(el of all_minraw){
//   console.log(all_min.length);
     if(el.split(".")[0]<0){
        all_minfirst.push(`${el.split(".")[0]*-1}.${el.split(".")[1]}`)
     }
     else{
        all_minsec.push(`${el.split(".")[0]}.${el.split(".")[1]}`)
     }
 }

 all_minus = all_minfirst.concat(all_minsec)





 
radio5=()=>{
   

    let selected= (num)=>{

        return num.split(".")[0].toLowerCase().includes(document.querySelector(".search_box").value)
    
    }
        searching  =all_first.filter(selected)
   
        for(el of searching){
            document.querySelector(`#${el.split(".")[1]}`).parentElement.classList.add("searching_select")

        
        }
        document.querySelector(".search_box").value=""
        
}
radio6=()=>{
    let selected= (num)=>{

return num.split(".")[0].toLowerCase().includes(document.querySelector(".search_box").value)

}
searching  =all_second.filter(selected)

for(el of searching){
    document.querySelector(`#${el.split(".")[1]}`).parentElement.classList.add("searching_select")

document.querySelector(".search_box").value=""
}
    // console.log("6");
}
radio7=()=>{
    // console.log("7");
    let selected= (num)=>{

return num.split(".")[0].toLowerCase().includes(document.querySelector(".search_box").value)

}
searching  =all_plus.filter(selected)

for(el of searching){
    document.querySelector(`#${el.split(".")[1]}`).parentElement.classList.add("searching_select")

document.querySelector(".search_box").value=""
}
}
radio8=()=>{
    let selected= (num)=>{

return num.split(".")[0].toLowerCase().includes(document.querySelector(".search_box").value)

}
searching  =all_minus.filter(selected)

for(el of searching){
    document.querySelector(`#${el.split(".")[1]}`).parentElement.classList.add("searching_select")

document.querySelector(".search_box").value=""
}
    // console.log("8");
}
document.querySelector(".left").addEventListener("click",()=>{
        // console.log( event.target.click())
      
        switch (document.querySelector(".choose").id.split("_")[1][5]) {


    case "5":
    radio5();

    break;
    case "6":
        radio6();
    break;
    case "7":
        radio7();
    break;
    case "8":
        radio8();
    break;
  
    default:
    text = "Looking forward to the Weekend";
}
});
}

</script>
</body>
</html>