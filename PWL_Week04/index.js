// #1

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

// #2

// const today = {
//   day: 1,
//   name: "Monday",
// };

// const hariLain = {
//   day: 5,
//   name: "Friday",
// };

// // Ternary (Single Condition)
// new Date().getDay() === today.day
//   ? console.log(`Today is ${today.name}`)
//   : console.log(`Today is not ${today.name}`);

// // Multiple Condition
// new Date().getDay() === today.day
//   ? console.log(`Today is ${today.name}`)
//   : new Date().getDay() === hariLain.day
//   ? console.log(`Today is ${hariLain.name}`)
//   : console.log(`Today is not ${today.name} and not ${hariLain.name}`);

// #3

// const getDay = () => {
//   switch (new Date().getDay()) {
//     case 0:
//       return "Sunday";
//     case 1:
//       return "Monday";
//     case 2:
//       return "Tuesday";
//     case 3:
//       return "Wednesday";
//     case 4:
//       return "Thursday";
//     case 5:
//       return "Friday";
//     case 6:
//       return "Saturday";
//     default:
//       return "Invalid day";
//   }
// }

// console.log(`Today is ${getDay()}`);

// #4

// function processData(data, callback) {
//   let res = data.toUpperCase();
//   callback(res);
// }

// function showRes(output) {
//   document.getElementById("demo").innerHTML = `Teks: ${output}`;
// }

// processData("Halo Dunia!", showRes);

// #5

// function getData() {
//   return new Promise((resolve, reject) => {
//     document.getElementById("demo").innerHTML = "Loading...";

//     setTimeout(() => {
//       const sukses = true;
//       if (sukses) {
//         resolve("Data berhasil dikirim");
//       } else {
//         reject("Gagal mengirimkan data");
//       }
//     }, 2000);
//   });
// }

// getData()
//   .then((res) => {
//     document.getElementById("demo").innerHTML = res;
//   })
//   .catch((err) => {
//     document.getElementById("demo").innerHTML = err;
//   });

// #6

function nodesatu() {
  console.log("Node 1");
}

function nodedua() {
  setTimeout(() => {
    console.log("Node 2");
  }, 1000);
}

function nodetiga() {
  console.log("Node 3");
}

nodesatu();
nodedua();
nodetiga();

// Tugas #1

// function greet(name, callback) {
//   console.log("Halo, " + name);
//   callback();
// }

// function selamatDatang() {
//   console.log("Selamat datang!");
// }

// greet("Ndus", selamatDatang);

// Tugas #2

// function steps(callback) {
//   console.log("Step 1");

//   setTimeout(() => {
//     console.log("Step 2");
//     if (callback) callback();
//   }, 2000);
// }

// function step3() {
//   console.log("Step 3");
// }

// steps(step3);

// Tugas #3

// function cekAngka(num) {
//   return new Promise((resolve, reject) => {
//     if (num % 2 === 0) {
//       resolve("Angka genap");
//     } else {
//       reject("Angka ganjil");
//     }
//   });
// }

// cekAngka(4)
//   .then((result) => console.log(result))
//   .catch((error) => console.log(error));

// cekAngka(5)
//   .then((result) => console.log(result))
//   .catch((error) => console.log(error));

// Tugas #4

// function delay(ms) {
//   return new Promise((resolve) => setTimeout(resolve, ms));
// }

// async function getData() {
//   try {
//     await delay(2000);
//     return "Data ditemukan";
//   } catch (error) {
//     throw new Error("Gagal mengambil data: " + error.message);
//   }
// }

// async function main() {
//   try {
//     const result = await getData();
//     console.log(result);
//   } catch (error) {
//     console.log(error.message);
//   }
// }

// main();
