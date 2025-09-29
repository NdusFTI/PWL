// const names = ["Budi", "Siti", "Sean", "James", "Jack", "John"];

// let tampung = "";
// for (let i = 0; i < names.length; i++) {
//   tampung += names[i] + "<br>";
// }
// document.getElementById("demo").innerHTML = tampung;

// const mobil = [
//   {
//     merek: "Toyota",
//     jum_kabin: 2,
//   },
//   {
//     merek: "Honda",
//     jum_kabin: 3,
//   },
//   {
//     merek: "Daihatsu",
//     jum_kabin: 2,
//   },
// ];

// let tampung = "";
// mobil.map((key, value) => {
//   tampung +=
//     `${value + 1}. Mobil ${key.merek} dan jumlah kabin ${key.jum_kabin}` +
//     "<br>";
// });

// for (let i = 0; i < mobil.length; i++) {
//   tampung +=
//     `${i + 1}. Mobil ${mobil[i].merek} dan jumlah kabin ${mobil[i].jum_kabin}` +
//     "<br>";
// }

// for (let x in mobil) {
//   tampung +=
//     `${x}. Mobil ${mobil[x].merek} dan jumlah kabin ${mobil[x].jum_kabin}` +
//     "<br>";
// }

// document.getElementById("demo").innerHTML = tampung;

// let buahan = new Map([
//   ["Terong", 100],
//   ["Tomat", 200],
//   ["Cabai", 300],
// ]);

// let tampung = "";
// for (let b of buahan.keys()) {
//   tampung += `${b} harganya ${buahan.get(b)}` + "<br>";
// }

// document.getElementById("demo").innerHTML = tampung;

// let map = new Map([
//   ["1", "String"],
//   [1, "Numerical"],
//   [true, "Boolean"],
// ]);

// console.log(map.get(true));

// let obj = {
//   name: "John",
//   age: 20,
// };

// let mp = new Map(Object.entries(obj));
// console.log(mp.get("name") + " " + mp.get("age"));

// let set = new Set();

// let john = { name: "John" };
// let wick = { name: "Wick" };
// let budi = { name: "Budi" };

// set.add(john);
// set.add(wick);
// set.add(budi);
// set.add(john);

// let dora = { name: "Dora" };
// set.add(dora);

// set.delete(wick);

// console.log(set.size);

// for (let usr of set) {
//   console.log(usr.name);
// }

const usia = [32, 33, 16, 40];

const cek_usia = (u) => u < 20;

const res = usia.filter(cek_usia);

const cek = cek_usia(20);

console.log(res);
console.log(cek);

let hasil = `Usia Filter: ${res.join(", ")}`;

if (cek) {
  hasil += " Usia Dewasa";
} else {
  hasil += " Remaja";
}

console.log(hasil);
