// Default Import Class
// import Nokia from "./mobile.js";
// const n = new Nokia();
// n.volumnUp();

// Default Import Function
// import show from "./mobile.js";
// show();

// Default Import Variable
// import a from "./mobile.js";
// console.log(a);

// Named Import Class
// import { Nokia } from "./mobile.js";
// const n = new Nokia();
// n.volumnUp();

// Named Import Function
// import { show } from "./mobile.js";
// show();

// Named Import Variable
// import { a } from "./mobile.js";
// console.log(a);

// Named Import Multiple value
// import { Nokia, show, a } from "./mobile.js";
// const n = new Nokia();
// n.volumnUp();
// show();
// console.log(a);

// Wholoe Named Import value
// import * as device from "./mobile.js";
// const n = new device.Nokia();
// n.volumnUp();
// device.show()
// console.log(device.a);

// Both default and named import
import Nokia, {  show, a } from "./mobile.js";
const n = new Nokia ();
n. volumnUp();
show();
console.log(a);