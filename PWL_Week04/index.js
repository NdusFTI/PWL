/*
if (BOOLEAN_EXPRESSION) {
  STATEMENT;
}
*/

// const getDay = () => {
//   if (new Date().getDay() === 0) {
//     return "Sunday";
//   }

//   if (new Date().getDay() === 1) {
//     return "Monday";
//   }

//   if (new Date().getDay() === 2) {
//     return "Tuesday";
//   }

//   if (new Date().getDay() === 3) {
//     return "Wednesday";
//   }

//   if (new Date().getDay() === 4) {
//     return "Thursday";
//   }

//   if (new Date().getDay() === 5) {
//     return "Friday";
//   }

//   if (new Date().getDay() === 6) {
//     return "Saturday";
//   }

//   return "Invalid day";
// };

// document.getElementById("demo").innerHTML = `Today is ${getDay()}`;

const today = {
  day: 1,
  name: "Monday",
};

const hariLain = {
  day: 5,
  name: "Friday",
};

// Ternary (Single Condition)
new Date().getDay() === today.day
  ? console.log(`Today is ${today.name}`)
  : console.log(`Today is not ${today.name}`);

// Multiple Condition
new Date().getDay() === today.day
  ? console.log(`Today is ${today.name}`)
  : new Date().getDay() === hariLain.day
  ? console.log(`Today is ${hariLain.name}`)
  : console.log(`Today is not ${today.name} and not ${hariLain.name}`);
