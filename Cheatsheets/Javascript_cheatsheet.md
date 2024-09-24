Here are some key JavaScript interview questions along with their answers:

### 1. **What is the difference between `let`, `const`, and `var`?**

-   **Answer:**
    -   `var`: Function-scoped and can be re-declared or updated. It is hoisted, but only its declaration, not its initialization.
    -   `let`: Block-scoped and cannot be re-declared in the same scope. It is hoisted, but not initialized.
    -   `const`: Block-scoped like `let`, but it cannot be reassigned. You can still mutate objects or arrays defined with `const`.

### 2. **What is the difference between `==` and `===`?**

-   **Answer:**
    -   `==`: Loose equality operator. It converts the operands to the same type before comparison, leading to potential unexpected results (e.g., `1 == "1"` is `true`).
    -   `===`: Strict equality operator. It compares both value and type, so `1 === "1"` is `false` because the types are different.

### 3. **Explain closures in JavaScript.**

-   **Answer:**
    A closure is a function that remembers its lexical environment even after the outer function has returned. Closures allow inner functions to access variables from their outer function scope.

    Example:

    ```javascript
    function outerFunction() {
        let counter = 0;
        return function () {
            counter++;
            return counter;
        };
    }

    const increment = outerFunction();
    increment(); // 1
    increment(); // 2
    ```

### 4. **What is the event loop in JavaScript?**

-   **Answer:**
    JavaScript has a single-threaded event loop model for handling asynchronous operations. The event loop continuously checks the message queue (callback queue), and when the call stack is empty, it pushes the first message from the queue to the stack for execution. This ensures non-blocking I/O.

### 5. **What is `hoisting` in JavaScript?**

-   **Answer:**
    Hoisting is JavaScript's default behavior of moving declarations to the top of their scope before execution. Only declarations (for variables and functions) are hoisted, not initializations. For example:
    ```javascript
    console.log(x); // undefined
    var x = 5;
    ```
    In this case, `var x` is hoisted, but its assignment happens later, so the output is `undefined`.

### 6. **What is a promise and how does it work?**

-   **Answer:**
    A promise is an object representing the eventual completion (or failure) of an asynchronous operation. It has three states:

    -   `Pending`: Initial state, neither fulfilled nor rejected.
    -   `Fulfilled`: The operation completed successfully.
    -   `Rejected`: The operation failed.

    Example:

    ```javascript
    const myPromise = new Promise((resolve, reject) => {
        let success = true;
        if (success) {
            resolve("Operation successful");
        } else {
            reject("Operation failed");
        }
    });

    myPromise
        .then((result) => console.log(result))
        .catch((error) => console.log(error));
    ```

### 7. **What are arrow functions, and how do they differ from regular functions?**

-   **Answer:**
    Arrow functions are a concise syntax for writing functions. They don’t have their own `this` context, `arguments` object, or `prototype`. Instead, they inherit `this` from their surrounding context, which makes them useful for callbacks and methods that require access to the lexical `this`.

    Example:

    ```javascript
    const add = (a, b) => a + b;
    ```

### 8. **What is `this` in JavaScript?**

-   **Answer:**
    The value of `this` refers to the object that is currently executing the code. It depends on how the function is called:
    -   Inside an object method, `this` refers to the object.
    -   In the global scope or a regular function, `this` refers to the global object (`window` in browsers).
    -   In strict mode (`'use strict'`), `this` in a function defaults to `undefined`.
    -   In arrow functions, `this` retains the value from the enclosing lexical scope.

### 9. **What is a higher-order function in JavaScript?**

-   **Answer:**
    A higher-order function is a function that takes another function as an argument or returns a function as a result. Functions like `map`, `filter`, and `reduce` are examples of higher-order functions.

    Example:

    ```javascript
    const higherOrderFunction = (fn) => fn(5);
    const multiplyByTwo = (x) => x * 2;

    console.log(higherOrderFunction(multiplyByTwo)); // 10
    ```

### 10. **What are JavaScript modules, and how do you use them?**

-   **Answer:**
    JavaScript modules allow you to organize code into separate files and export or import functionality between them. There are two module systems:
    -   **ES6 modules**: Using `import` and `export`.

        ```javascript
        // math.js
        export const add = (a, b) => a + b;

        // main.js
        import { add } from "./math.js";
        console.log(add(2, 3)); // 5
        ```

    -   **CommonJS modules** (used in Node.js): Using `module.exports` and `require`.

---

These questions and answers cover fundamental concepts of JavaScript, helping you prepare for both technical and practical interviews.
