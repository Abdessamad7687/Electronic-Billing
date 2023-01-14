
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

let mode = document.querySelector('.mode')
mode.addEventListener('click', () => {
    console.log(mode)
    document.getElementsByTagName('body').classList.add('white')
})
