// Muncul di Console
// console.log("Hallo JS")

// Muncul di Popup Windows
// alert("Hallo JS")

// Muncul di Body HTML
// document.getElementById("demo").innerHTML = "<b>Hallo Dunia</b>"

// document.getElementById("demo2").textContent = "<p>Hallo Dunia</p>"

/*
Aturan Variable:
1. Tidak boleh spasi
2. Tidak boleh menggunakan keyword (while, for, dll)
3. Tidak Boleh diawali dengan angka
*/

// let first name = "Kiki" Error: Aturan 1
// let while = 10 Error: Aturan 2
// let 4ge = 21  Error: Aturan 3

// Dapat diubah / Mutable
// let first_name = "Calvin"
// first_name = "Haris"
// console.log(first_name)

// Tidak dapat diubah / Immutable
// const PI = 3.14
// PI = 3.15 Akan muncul Error di console
// console.log(PI)

// let isChar = "25"
// let isNumber = 3
// let isDec = 3.14
// let isOnline = true

// Variable harus di deklarasikan terlebih dahulu
// let isA = 3
// let isB = 4

// let res = isA * isB

// console.log(res)

// const testLet = () => { // let itu berlaku local scope
//   let num = 100
//   {
//     let num = 200
//   }
//   return num
// }

// console.log(testLet())

// const testVar = () => { // var itu berlaku global scope
//   var num = 100
//   {
//     var num = 200
//   }
//   return num
// }

// console.log(testVar())

// try {
// const PI = 3.14
// PI = 3.141592
//   console.log(PI)
// } catch (e) {
//   console.log("Error Min: ", e)
// }

// let nick_name = "John";
// let age = 20;

// let person = {
//   nick_name,
//   age,
// };

// console.log(`Person: ${person}, Name: ${person.nick_name}, Age: ${person.age}`);

// console.log(person["nick_name"]);
// console.log(person["age"]);

// let isArray = ["red", "yellow"]
// console.log(isArray)
// isArray.push("green")
// console.log(isArray)
// isArray.pop()
// console.log(isArray)
// isArray.pop();
// console.log(isArray);
// isArray.push(1)
// console.log(isArray)

// Declaration function
// function rectangle(w, h) {
//   return w * h;
// }

// console.log(rectangle(2, 3));

// Expression function
// const rectangle1 = function (w, h) {
//   return w * h;
// };

// console.log(rectangle1(5, 6));

// Array function
// const rectangle = (h, w) => {
//   return h * w;
// };

// console.log(rectangle(3, 4));

// const rec = (h, w) => h * w;

// console.log(rec(5, 6));

// Binding => this

// var person = {
//   name: "Bejo",
//   sisters: ["Anna", "Jose", "Misella", "Cindy"],
//   showData: function() {
//     this.sisters.map(function(sister) {
//       console.log(`${this.name} has sisters ${sister}`);
//     }.bind(this))
//   }
// }

// person.showData()\

// const rec = (h = 1, w = 1) => {
//   return h * w;
// };

// console.log(rec());
// console.log(rec(5));
// console.log(rec(5, 4));

// Shorthand property
// const Mess = (name, usia) => {
//   return {
//     name,
//     usia,
//   };
// }

// const pesan = Mess("Siti", 21)
// document.getElementById("demo").innerHTML = pesan.name

// Destructing
let person = {
  first_name: "John",
  last_name: "Wick",
};

let { first_name: fname, last_name: lname } = person;

document.getElementById("demo").innerHTML = `${fname} ${lname}`;
