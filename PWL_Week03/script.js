// const k1 = ["Bebek", "Ayam", "Burung"];
// const k2 = ["Serigala", "Harimau", "Singa"];
// const k3 = ["Katak", "Kodok", "Buaya"];

// const hewan = [...k1, ...k2, ...k3];

// document.getElementById("demo").innerHTML = hewan;

// const k1 = [34, 45, 12, 13];
// const k2 = [22, 32, 98, 55];
// const k3 = [10, 9, 5, 35];

// const angka = Math.max(...k1, ...k2);

// document.getElementById("demo").innerHTML = angka;

import { model, warna } from "./mobil.js";
import { j } from "./jw.js";

let ket_mobil = `Merek mobil saya ${model} dan berwarna ${warna}`;

document.getElementById("demo").innerHTML = ket_mobil;
document.getElementById("demo").innerHTML = j();