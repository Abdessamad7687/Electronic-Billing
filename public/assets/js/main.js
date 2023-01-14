
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
let close = document.getElementById('close')
close.addEventListener('click', function(){
    alert.classList.remove('alert-flex')
})



    /*
     * Calculating the total price of the product
     *
    */
let price = document.getElementById('price')



price.addEventListener('click', function(){
    alert('coucou')
    // let quantity = document.getElementById('quantity')
    // let total = document.getElementById('total')
    // let sum = parseFloat(price.value) *  parseFloat(quantity.value)
    // total.innerHTML = sum
})
   
