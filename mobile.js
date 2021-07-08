// Default Export Class
// export default class Nokia {
//     volumnUp(){
//         console.log("High Volumn");
//     }
// }

// export default Nokia;

// Default Export Function
// Method One
// export default function show() {
// console.log("Hello Module");
// }

// Method Two
//  function show() {
//     console.log("Hello Module");
//     }
//     export default show;

// Default Export Variable
// const a =10;
// export default a;

// Named Export Class
// class Nokia {
//     volumnUp(){
//         console.log("High Volumn");
//     }
// }

// export { Nokia };

// Named Export Function
// export function show() {
//     console.log("Hello Module");
// }
// Method two
// export { Show };

// Named Export Variable
// export const a = 105;

// Method two
// export { a };

// Named Export Mulitple value

class Nokia {
    volumnUp() {
        console.log("High Volumn");
    }
}

function show() {
    console.log("Hello Module");
}

// const a = 10;

// export { Nokia, show, a };

// both default and named export method
export const a ="10";
export default  Nokia;  
export { show };
