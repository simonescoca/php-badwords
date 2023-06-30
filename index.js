const button = document.getElementById ("button")
const input1 = document.getElementById ("input1")
const input2 = document.getElementById ("input2")

button.addEventListener ("click", () => {
    setTimeout (() => {
        input1.value = ""
        input2.value = ""
    }, 10)
})