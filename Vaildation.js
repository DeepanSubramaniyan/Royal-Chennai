//validation 
const form = document.getElementById("#form");
const userName = document.getElementById("#fullname");
const emailId = document.getElementById("#email");
const mobile = document.getElementById("#phone");
const address = document.getElementById("#Address");



form.addEventListener('submit',(e)=>{
  e.preventDefault();
  ValidateInputs();
})

function ValidateInputs(){
  const userNameval=userName.value.trim();
  const emailIdval=emailId.value.trim();
  const mobileval=mobile.value.trim();
  const addressval=address.value.trim();

}

function setError(element,message)







// function checkOption(roomType){
// if ( area.value == "select"){
//   alert("Please Select Preferred option");
//   errorInput(area,`Please Select Preferred option`);
// }
// }

// // function checkOptionb(budget){
// //   if ( budget.value == "select"){
// //     alert("Please Select Preferred option");
// //     errorInput(budget,`Please Select Preferred option`);
// //   }
// //   }

// // function checkOptiono(openTime){
// //     if ( openTime.value == "select"){
// //       alert("Please Select Preferred option");
// //       errorInput(openTime,`Please Select Preferred option`);
// //     }
// //     }

// //   function checkOptionc(contactTime){
// //       if ( contactTime.value == "select"){
// //         alert("Please Select Preferred option");
// //         errorInput(contactTime,`Please Select Preferred option`);
// //       }
// //       }

// String.prototype.isEmail = function() {
//   return !!this.match(/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/);
// }

// String.prototype.isAlpha = function(){
//   return !!this.match(/^[a-zA-Z]+$/);
// }

// String.prototype.isNumber = function(){
//   return !!this.match(/^(?:(?:\+|0{0,2})91(\s*|[\-])?|[0]?)?([6789]\d{2}([ -]?)\d{3}([ -]?)\d{4})$/);
// }


// function checkRequired(inputs){
//     inputs.forEach(input => {
//         if(input.value.trim() === ""){                         //trim will remove white space
//              errorInput(input,`${getName(input)} is Required`); //template string
//         }else{
//             successInput(input);
//         } 
//     });
// }

// function getName(input){
//     return input.getAttribute("data-name");
// }
// function errorInput(input,message){
//    const formGroup = input.parentElement;
//    formGroup.className = "form-group error";
//    const p  = formGroup.querySelector("p");
//    p.innerHTML = message;
// }
// function successInput(input){
//   const formGroup = input.parentElement;
//   formGroup.className="form-group success ";
//   const p  = formGroup.querySelector("p");
//   p.innerHTML = "";

// }
// function checkEmail(input){
//   if(!input.value.trim().isEmail()){
//     errorInput(input, `This  is not a valid email address`);
//   }
// }
 
// function checkName(input){
//    if(!input.value.trim().isAlpha()){
//     errorInput(input, `Enter a valid username`)
//    }
// }

// function checkMobileno(input){
//   if(!input.value.trim().isNumber()){
//     errorInput(input,`This is not a Valid Mobile Number`)
//   }
  
// }




// form.addEventListener("click",function(e){
//   alert("form ok");
//   e.preventDefault();// by default it take priyority to js

//   //check required filed  to fill
//   checkRequired([userName,emailId,mobile,addressddress,checkin,checkout,roomType])
  
//   //regular expression  stackoverflow prototype = inbuilt function

//   checkEmail(emailId);
//   checkName(userName);
//   checkMobileno(mobile);
  
//   checkOption(address);
//   checkOptionb(checkin);
//   checkOptiono(checkout);
//   checkOptionc(roomType);
// });