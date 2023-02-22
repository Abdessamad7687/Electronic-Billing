
const inputs = document.querySelectorAll('input')
inputs.forEach(input => {
    input.addEventListener('click', function(e){
        this.style.color = 'green'
        e.preventDefault()
    })
}) 





let alert = document.querySelector('.alert')

let create = document.getElementById('create')
create.addEventListener('click', function(){
    alert.classList.add('alert-flex')
})
// let close = document.getElementById('close')
// close.addEventListener('click', function(){
//     alert.classList.remove('alert-flex')
// })



    /*
     * Calculating the total price of the product
     *
    */
let price = document.getElementById('price')

let total 
let quantity = document.getElementById('quantity')


document.querySelectorAll('.net input').forEach((item) => {
    item.addEventListener('keyup', function(){
        let sum = 0
        console.log(parseFloat(price.value) *  parseFloat(quantity.value))
        sum = parseFloat(price.value) *  parseFloat(quantity.value)
        document.getElementById('total').value = sum
    })
})

   
